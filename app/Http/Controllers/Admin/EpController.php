<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eps = Ep::all();
        // dd($eps);
        return view('eps.index', compact('eps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('eps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $newEp = new Ep();

        $newEp->name = $data['name'];
        $newEp->published_year = $data['published_year'];
        $newEp->n_songs = $data['n_songs'];

        if (array_key_exists('image', $data)) {
            $img_path = Storage::putFile('uploads', $data['image']);
            $newEp->image = $img_path;
        }

        $newEp->save();

        return redirect()->route('eps.show', $newEp->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ep $ep)
    {
        // dd($ep);
        return view('eps.show', compact('ep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ep $ep)
    {

        // dd($ep);
        return view('eps.edit', compact('ep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ep $ep)
    {
        $data = $request->all();
        // dd($data);

        $ep->name = $data['name'];
        $ep->published_year = $data['published_year'];
        $ep->n_songs = $data['n_songs'];

        if (array_key_exists('image', $data)) {
            if (!empty($album['image']) && Storage::exists($ep['image'])) {
                Storage::delete($ep['image']);
            }
            $img_path = Storage::putFile('uploads', $data['image']);
            $ep->image = $img_path;
        }

        $ep->update();

        return redirect()->route('eps.show', $ep->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ep $ep)
    {
        if ($ep['image']) {
            Storage::delete($ep['image']);
        }

        $ep->delete();

        return redirect()->route('eps.index');
    }
}
