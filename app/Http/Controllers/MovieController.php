<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MovieController extends Controller
{
    public function index(){
        $movies = Movies::select('title','date','vote')->get();

        dump($movies);

        return view('movies',compact('movies'));
    }
}
