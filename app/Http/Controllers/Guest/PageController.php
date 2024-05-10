<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        //  All’interno della funzione **index()** del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function nuovaPagina(){
        return view('nuova-pagina');
    }
}
