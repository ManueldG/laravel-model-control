<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');

    }

    public function contatti(){

        $nomi=['Manuel','Gianni','Franco','Andrea'];
        $cognomi=['dG','Rossi','Bianchi','Verdi'];

        return view('contatti',compact('nomi','cognomi'));
    }
}
