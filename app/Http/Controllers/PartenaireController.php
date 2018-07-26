<?php

namespace App\Http\Controllers;

use App\Partenaire;
use Illuminate\Http\Request;
use App\Http\Requests\StorePartenaire;
use App\Http\Requests\StoreEditPartenaire;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view("admin.partenaires.index",compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partenaires.create",compact('partenaires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartenaire $request)
    {
        $partenaire = new Partenaire;
        $partenaire->name = $request->name;
        $partenaire->image = $request->image->store('','imgPartenaire');

        $partenaire->save();
        return redirect()->route("partenaires.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partenaire = Partenaire::find($id);
        return view('admin.partenaires.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditPartenaire $request, $id)
    {
        $partenaire = Partenaire::find($id);
        $partenaire->name = $request->name;
        if($request->image != null){
        $partenaire->image = $request->image->store('','imgPartenaire');
        }
        $partenaire->save();
        return redirect()->route('partenaires.index',['partenaire'=> $partenaire->id]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
        $partenaire = Partenaire::find($id);
        $partenaire->delete();
        return redirect()->route('partenaires.index');
    }
}
