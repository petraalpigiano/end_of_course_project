<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        dd($genres);
        return view('prova.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prova.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);

        $newGenre = new Genre();

        $newGenre->name = $data['name'];

        $newGenre->save();

        return redirect()->route('prova.show', $newGenre->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        // dd($genre);
        return view('prova.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        // dd($genre);
        return view('prova.create', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $data = $request->all();
        dd($data);

        $genre->name = $data['name'];

        $genre->update();

        return redirect()->route('prova.show', $genre->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('prova.index');
    }
}
