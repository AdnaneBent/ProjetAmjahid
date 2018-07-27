<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biographie;
use App\Galerie;
use App\Engagement;
use App\Partenaire;

class FrontController extends Controller
{
    public function welcome(){
        $biographie = Biographie::first();
        $galeries= Galerie::all();
        $engagement = Engagement::first();
        return view("welcome",compact('biographie','engagement','galeries'));
    }

    public function partenaire(){
        $biographie=Biographie::first();
        $engagement = Engagement::first();
        $partenaires= Partenaire::all();
        $galeries = Galerie::all();
        return view("partenaire",compact('partenaires','biographie','engagement','galeries'));
    }
}
