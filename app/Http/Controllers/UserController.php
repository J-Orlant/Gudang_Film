<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $films = Film::where('genre', 'LIKE', 'action%')->get();
        return view('home.home', compact('films'));
    }
}
