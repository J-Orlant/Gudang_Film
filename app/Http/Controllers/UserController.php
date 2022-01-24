<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function index(){
        $actions = Film::where('genre', 'LIKE', 'action%')->get();
        $animes = Film::where('genre', 'LIKE', 'anime%')->get();
        $comedys = Film::where('genre', 'LIKE', 'comedy%')->get();
        $dramas = Film::where('genre', 'LIKE', 'drama%')->get();
        $horrors = Film::where('genre', 'LIKE', 'horror%')->get();
        $romances = Film::where('genre', 'LIKE', 'romance%')->get();
        $populars = Film::where('type', 'p')->get();
        return view('home.home', compact('actions', 'animes', 'comedys', 'dramas', 'horrors', 'romances', 'populars'));
    }

    public function detail(Film $film){
        $user = user::where('id', Auth::user()->id)->first();
        $genre = Film::where('genre', 'LIKE',  $film->genre.'%')->first();
        $genre = Str::lower($genre->genre);
        $satuan = explode("/", $genre);
        $count  = Film::paginate(3);
            $populars = Film::where('type', 'p')->limit(6)->get();
        // for ($i=1; $i <= 6 ; $i++) {
        // };
        // dd($count);
        return view('detailFilm.detailFilm', compact('film', 'satuan', 'user', 'populars'));
    }

    public function redeem(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $user->update([
            'type' => 'prem'
        ]);
        $user->save();
        return redirect(route('home'));
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
