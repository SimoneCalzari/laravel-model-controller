<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::All();
        $imgs = ['padrino.jpeg', 'via_col_vento.jpeg', 'psycho.jpeg', 'gravity.jpeg', 'toystory.jpeg', 'pulp_fiction.jpeg', 'forrest_gump.jpeg', 'star_wars.jpeg', 'et.jpeg', 'silence_lambs.jpeg'];
        return view('welcome', compact('movies', 'imgs'));
    }
}
