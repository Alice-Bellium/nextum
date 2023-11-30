<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Genre;
use Barryvdh\DomPDF\Facade\Pdf;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::query()->latest()->paginate(27);
        return view('index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create', ['genres' => Genre::query()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumRequest $request)
    {
        $data = $request->validated();
        $album = Album::query()->create($data);
        if (isset($data['genres'])) {
            $album->genres()->sync($data['genres']);
        }

        return redirect()->route('index')->with('success', 'Альбом добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        $genres = Genre::query()->get();
        $selectedGenres = $album->genres()->get();

        return view('albums.show', compact(
            'album',
            'genres',
            'selectedGenres',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $genres = Genre::query()->get();
        $selectedGenres = $album->genres()->get();

        return view('albums.edit', compact(
            'album',
            'genres',
            'selectedGenres',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlbumRequest $request, Album $album)
    {
        $data = $request->validated();
        $album->update($data);
        $album->genres()->sync($data['genres']);

        $genres = Genre::query()->get();
        $selectedGenres = $album->genres()->get();

        return view('albums.edit', compact(
            'album',
            'genres',
            'selectedGenres',
        ))->with('success', 'Альбом обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('index')->with('success', 'Альбом удален');
    }

    /**
     * Export the album to PDF.
     */
    public function export(Album $album)
    {
        $data = $album->toArray();
        $data['genres'] = $album->genres()->get()->toArray();

        $pdf = PDF::loadView('albums.pdf', compact('data'));
        return $pdf->download('albums-list.pdf');
    }
}
