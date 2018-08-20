<?php

namespace App\Http\Controllers;

use App\Athlete;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAthlete;
use App\Http\Requests\StoreEditAthlete;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athletes = Athlete::all();

        return view("admin.athletes.index",compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.athletes.create",compact('athlete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAthlete $request)
    {
        $athlete = new Athlete;
        $athlete->titre = $request->titre;
        $athlete->poids = $request->poids;
        $athlete->taille = $request->taille;
        $athlete->rang = $request->rang;
        $athlete->categorie = $request->categorie;
        $athlete->club = $request->club;
        $athlete->champM = $request->champM;
        $athlete->champJ = $request->champJ;
        $athlete->training = $request->training;
        $athlete->image = $request->image->store('','imgAthlete');

        $athlete->save();
        return redirect()->route("athlete.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function show(Athlete $athlete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $athlete = athlete::find($id);
        return view('admin.athletes.edit', compact('athlete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditAthlete $request, $id)
    {

        $athlete = Athlete::find($id);
        $athlete->titre = $request->titre;
        $athlete->poids = $request->poids;
        $athlete->taille = $request->taille;
        $athlete->rang = $request->rang;
        $athlete->categorie = $request->categorie;
        $athlete->club = $request->club;
        $athlete->champM = $request->champM;
        $athlete->champJ = $request->champJ;
        $athlete->training = $request->training;
        if($request->image != null){
        $athlete->image = $request->image->store('','imgAthlete');
        }

        $athlete->save();
        return redirect()->route('athlete.index',['athlete'=> $athlete->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Athlete  $athlete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $athlete = Athlete::find($id);
        $athlete->delete();
        return redirect()->route('athlete.index');
    }
}
