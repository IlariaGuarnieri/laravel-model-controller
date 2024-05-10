<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        //  All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

        $title = 'Tutti i film';
        $movies = Movie::all();
        return view('home', compact('movies', 'title'));
    }

    public function film(){

        return view('film');
    }

    public function bestMovies(){
        $title = 'Film con voto più alto di 9';
        $movies = Movie::where('vote', '>=' , 9)->get();
        return view('film', compact('movies', 'title'));
    }
}
