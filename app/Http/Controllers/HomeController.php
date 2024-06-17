<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $songs = Song::inRandomOrder()->limit(10)->get();
        return view('home', compact('songs'));
    }
    public function search(Request $request){
        $search = $request->input('search');
        $songs = Song::where('title', 'like', '%' . $search . '%')->get();
        return view('search', compact('songs'));
    }

}
