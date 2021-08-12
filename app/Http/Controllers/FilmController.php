<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilmController extends Controller
{
    public function index(){
        $films = Film::where('genre', 'LIKE', 'action%')->get();
        return view('home.home', compact('films'));
    }
}
