<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $nomi=['Manuel','Gianni','Franco','Andrea'];
        $cognomi=['dG','Rossi','Bianchi','Verdi'];
        return view('home',compact('nomi','cognomi'));
    }

    public function contatti(){
        return view('contatti');
    }
}
