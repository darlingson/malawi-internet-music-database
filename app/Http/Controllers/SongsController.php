<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::paginate(5);
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store the received song in the database
        $request->validate([
            'title' => ['required'],
            'genre' => ['required'],
            'downloads' => ['required'],
            'release_year' => ['required'],
            'artist' => ['required']
        ]);

        $song = Song::create($request->all());
        return view('songs.show', compact('song'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => ['required'],
            'genre' => ['required'],
            'downloads' => ['required'],
            'release_year' => ['required'],
            'artist' => ['required']
        ]);

        $song->update($request->all());
        return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
}
