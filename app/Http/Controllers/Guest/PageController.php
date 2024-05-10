<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title = 'Libreria';
        $movies = Movie::all();

        return view('home', compact('movies', 'title'));
    }


    public function bestMovie(){
        $title = 'Best Movies';
        $movies = Movie::where('vote', '>=' , 8)
        ->orderBy('date')
        ->get();

        return view('home', compact('movies', 'title'));
    }

    public function worstMovie(){
        $title = 'Worst Movie';
        $movies = Movie::where('vote', '<' , 8)
        ->orderBy('date')
        ->get();

        return view('home', compact('movies', 'title'));
    }

    public function details($id){
        $movie = Movie::find($id);
        return view('dettaglio', compact('movie'));
    }

}
