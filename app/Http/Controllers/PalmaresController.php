<?php

namespace App\Http\Controllers;

use App\Palmares;
use Illuminate\Http\Request;

class PalmaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $palmares = Palmares::all();
        return view("admin.palmares.index",compact('palmares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.palmares.create",compact('palmares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $palmares = new Palmares;
        $palmares->annee = $request->annee;
        $palmares->competition = $request->competition;
        $palmares->resultat = $request->resultat;
        $palmares->categorie = $request->categorie;

        $palmares->save();
        return redirect()->route("palmares.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\palmares  $palmares
     * @return \Illuminate\Http\Response
     */
    public function show(palmares $palmares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\palmares  $palmares
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $palmares = Palmares::find($id);
        return view('admin.palmares.edit', compact('palmares'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\palmares  $palmares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $palmares = Palmares::find($id);
        $palmares->annee = $request->annee;
        $palmares->competition = $request->competition;
        $palmares->resultat = $request->resultat;
        $palmares->categorie = $request->categorie;

        $palmares->save();
        return redirect()->route('palmares.index',['palmares'=> $palmares->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\palmares  $palmares
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $palmares = Palmares::find($id);
        $palmares->delete();
        return redirect()->route('palmares.index');
    }
}
