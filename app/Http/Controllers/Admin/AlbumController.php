<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        // dd($albums);
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('albums.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $newAlbum = new Album();


        $newAlbum->genre_id = $data['genre_id'];
        $newAlbum->name = $data['name'];
        $newAlbum->published_year = $data['published_year'];
        $newAlbum->n_songs = $data['n_songs'];

        if (array_key_exists('image', $data)) {
            $img_path = Storage::putFile('uploads', $data['image']);
            $newAlbum->image = $img_path;
        }


        $newAlbum->save();

        return redirect()->route('albums.show', $newAlbum->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        // dd($album);
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $genres = Genre::all();
        // dd($album);
        return view('albums.edit', compact('album', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $data = $request->all();
        // dd($data);

        $album->genre_id = $data['genre_id'];
        $album->name = $data['name'];
        $album->published_year = $data['published_year'];
        $album->n_songs = $data['n_songs'];

        if (array_key_exists('image', $data)) {
            if (!empty($album['image']) && Storage::exists($album['image'])) { // se la chiave image di album non è vuota, quindi alla creazione della risorsa è stata inserita un immagine
                Storage::delete($album['image']);
            }
            $img_path = Storage::putFile('uploads', $data['image']);
            $album->image = $img_path;
        }



        $album->update();

        return redirect()->route('albums.show', $album->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        if ($album['image']) {
            Storage::delete($album['image']);
        }

        $album->delete();

        return redirect()->route('albums.index');
    }
}
