<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('index', compact('songs'));
    }
    public function song($id)
    {
        $song = Song::find($id);
        return view('song', compact('song'));
    }
    public function share()
    {
        return view('share');
    }


}
