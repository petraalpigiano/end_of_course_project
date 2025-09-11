<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        dd($albums);
        return view('prova.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('prova.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);

        $newAlbum = new Album();

        if ($request->has('genre_id')) {
            $newAlbum->genre_id = $data['genre_id'];
        }
        $newAlbum->name = $data['name'];
        $newAlbum->published_year = $data['published_year'];
        $newAlbum->n_songs = $data['n_songs'];

        $newAlbum->save();

        return redirect()->route('prova.show', $newAlbum->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        // dd($album);
        return view('prova.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $genres = Genre::all();
        // dd($album);
        return view('prova.create', compact('album', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $data = $request->all();
        dd($data);


        if ($request->has('genre_id')) {
            $album->genre_id = $data['genre_id'];
        }
        $album->name = $data['name'];
        $album->published_year = $data['published_year'];
        $album->n_songs = $data['n_songs'];

        $album->update();

        return redirect()->route('prova.show', $album->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('prova.index');
    }
}
