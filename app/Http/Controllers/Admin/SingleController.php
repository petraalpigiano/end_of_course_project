<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Single;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SingleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $singles = Single::all();
        // dd($singles);
        return view('singles.index', compact('singles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('singles.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $newSingle = new Single();

        if ($request->has('genre_id')) {
            $newSingle->genre_id = $data['genre_id'];
        }
        $newSingle->name = $data['name'];
        $newSingle->published_year = $data['published_year'];

        if (array_key_exists('image', $data)) {
            $img_path = Storage::putFile('uploads', $data['image']);
            $newSingle->image = $img_path;
        }

        $newSingle->save();

        return redirect()->route('singles.show', $newSingle->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Single $single)
    {
        // dd($single);
        return view('singles.show', compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Single $single)
    {
        $genres = Genre::all();
        // dd($single);
        return view('singles.edit', compact('single', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Single $single)
    {
        $data = $request->all();
        // dd($data);


        if ($request->has('genre_id')) {
            $single->genre_id = $data['genre_id'];
        }
        $single->name = $data['name'];
        $single->published_year = $data['published_year'];

        if (array_key_exists('image', $data)) {
            if (!empty($album['image']) && Storage::exists($single['image'])) {
                Storage::delete($single['image']);
            }
            $img_path = Storage::putFile('uploads', $data['image']);
            $single->image = $img_path;
        }

        $single->update();

        return redirect()->route('singles.show', $single->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Single $single)
    {
        if ($single['image']) {
            Storage::delete($single['image']);
        }

        $single->delete();

        return redirect()->route('singles.index');
    }
}
