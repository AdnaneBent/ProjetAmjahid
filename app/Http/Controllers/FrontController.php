<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biographie;
use App\Galerie;
use App\Engagement;
use App\Partenaire;
use App\Carousel;
use App\Article;
use App\Header;
use App\Academie;
use App\Evenement;
use App\Athlete;

class FrontController extends Controller
{
    public function welcome(){
        $biographie = Biographie::first();
        $galeries= Galerie::all();
        $engagement = Engagement::first();
        $header = Header::first();
        $academie = Academie::first();
        $evenements = Evenement::get()->take(3);
        return view("welcome",compact('biographie','engagement','galeries','header','academie','evenements'));
    }

    public function partenaire(){
        $biographie= Biographie::first();
        $engagement = Engagement::first();
        $partenaires= Partenaire::all();
        $galeries = Galerie::all();
        return view("partenaire",compact('partenaires','biographie','engagement','galeries'));
    }

     public function engagement(){
        $engagement = Engagement::first();
        $carousels = Carousel::all();
        return view("engagement",compact('engagement','carousels'));
    }

     public function article(){
        $articles = Article::orderBy("created_at", 'DESC')->paginate(4);
        return view("presse",compact('articles'));
    }

    public function articleShow(Article $article){
        return view("presseshow",compact('article'));
    }

    public function academie(Academie $academie){
        $academie = Academie::first();
        return view("academie",compact('academie'));
    }

    public function athlete(athlete $athlete){
        $athlete = Athlete::first();
        return view("athlete",compact('athlete'));
    }
    
}
