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
use App\Palmares;
use App\SocialNetwork;

class FrontController extends Controller
{
    public function welcome(){
        $biographie = Biographie::first();
        $galeries= Galerie::all();
        $engagement = Engagement::first();
        $header = Header::first();
        $academie = Academie::first();
        $socialnetworks = SocialNetwork::all();
        $evenements = Evenement::get()->take(3);
        return view("welcome",compact('biographie','engagement','galeries','header','academie','evenements','socialnetworks'));
    }

    public function partenaire(){
        $biographie= Biographie::first();
        $engagement = Engagement::first();
        $partenaires= Partenaire::all();
        $socialnetworks = SocialNetwork::all();
        $galeries = Galerie::all();
        return view("partenaire",compact('partenaires','biographie','engagement','galeries','socialnetworks'));
    }

     public function engagement(){
        $engagement = Engagement::first();
        $carousels = Carousel::all();
        $socialnetworks = SocialNetwork::all();
        return view("engagement",compact('engagement','carousels','socialnetworks'));
    }

     public function article(){
        $socialnetworks = SocialNetwork::all();
        $articles = Article::orderBy("created_at", 'DESC')->paginate(4);
        return view("presse",compact('articles','socialnetworks'));
    }

    public function articleShow(Article $article){
        $socialnetworks = SocialNetwork::all();
        return view("presseshow",compact('article','socialnetworks'));
    }

    public function academie(Academie $academie){
        $academie = Academie::first();
        $socialnetworks = SocialNetwork::all();
        return view("academie",compact('academie','socialnetworks'));
    }

    public function athlete(athlete $athlete){
        $athletes = Athlete::all();
        $socialnetworks = SocialNetwork::all();
        $biographie= Biographie::first();
        $palmares= Palmares::all();
        return view("athlete",compact('athletes','biographie','palmares','socialnetworks'));
    }

    
}
