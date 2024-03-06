<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
{
    return view('songs.index');
}

public function search(Request $request)
{
    $query = $request->input('query');

    $songs = Song::where('title', 'like', "%$query%")
                  ->orWhere('artist', 'like', "%$query%")
                  ->get();

    return response()->json($songs);
}
}
