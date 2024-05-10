<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        //  All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
        return view('home');
    }

    public function nuovaPagina(){
        $movies = Movie::all();
        return view('nuova-pagina', compact('movies'));
    }
}
