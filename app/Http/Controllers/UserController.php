<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $actions = Film::where('genre', 'LIKE', 'action%')->get();
        $animes = Film::where('genre', 'LIKE', 'anime%')->get();
        $comedys = Film::where('genre', 'LIKE', 'comedy%')->get();
        $dramas = Film::where('genre', 'LIKE', 'drama%')->get();
        $horrors = Film::where('genre', 'LIKE', 'horror%')->get();
        $romances = Film::where('genre', 'LIKE', 'romance%')->get();
        return view('home.home', compact('actions', 'animes', 'comedys', 'dramas', 'horrors', 'romances'));
    }
}
