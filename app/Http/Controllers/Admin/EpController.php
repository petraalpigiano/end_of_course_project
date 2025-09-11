<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ep;
use Illuminate\Http\Request;

class EpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eps = Ep::all();
        dd($eps);
        return view('prova.index', compact('eps'));
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

        $newEp = new Ep();

        $newEp->name = $data['name'];
        $newEp->published_year = $data['published_year'];
        $newEp->n_songs = $data['n_songs'];

        $newEp->save();

        return redirect()->route('prova.show', $newEp->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ep $ep)
    {
        // dd($ep);
        return view('prova.show', compact('ep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ep $ep)
    {

        // dd($ep);
        return view('prova.create', compact('ep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ep $ep)
    {
        $data = $request->all();
        dd($data);

        $ep->name = $data['name'];
        $ep->published_year = $data['published_year'];
        $ep->n_songs = $data['n_songs'];

        $ep->update();

        return redirect()->route('prova.show', $ep->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ep $ep)
    {
        $ep->delete();

        return redirect()->route('prova.index');
    }
}
