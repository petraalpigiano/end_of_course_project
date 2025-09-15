<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Ep;
use App\Models\Single;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    // ALBUMS
    public function indexAlbums()
    {
        $albums = Album::all();
        return response()->json([
            'success' => true,
            'data' => $albums,
        ]);
    }
    public function showAlbum($id)
    {
        $album = Album::find($id);
        $album->load('genre');
        return response()->json([
            'success' => true,
            'data' => $album
        ]);
    }

    // EPS
    public function indexEps()
    {
        $eps = Ep::all();
        return response()->json([
            'success' => true,
            'data' => $eps,
        ]);
    }
    public function showEp($id)
    {
        $ep = Ep::find($id);
        return response()->json([
            'success' => true,
            'data' => $ep
        ]);
    }


    // SINGLES
    public function indexSingles()
    {
        $singles = Single::all();
        return response()->json([
            'success' => true,
            'data' => $singles,
        ]);
    }
    public function showSingle($id)
    {
        $single = Single::find($id);
        $single->load('genre');
        return response()->json([
            'success' => true,
            'data' => $single
        ]);
    }
}
