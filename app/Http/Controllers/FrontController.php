<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biographie;
use App\Engagement;

class FrontController extends Controller
{
    public function welcome(){
        $biographie = Biographie::first();
        $engagement = Engagement::first();
        return view("welcome",compact('biographie','engagement'));
    }
}
