<?php

namespace App\Http\Controllers;

use App\Academie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAcademie;
use App\Http\Requests\StoreEditAcademie;

class AcademieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academies = Academie::all();
        return view("admin.academies.index",compact('academies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.academies.create",compact('academies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcademie $request)
    {
        $academie = new Academie;
        $academie->titre = $request->titre;
        $academie->contenu = $request->contenu;
        $academie->image = $request->image->store('','imgAcademie');

        $academie->save();
        return redirect()->route("academies.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academie  $academie
     * @return \Illuminate\Http\Response
     */
    public function show(Academie $academie)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academie  $academie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $academie = Academie::find($id);
    
        return view('admin.academies.edit', compact('academie'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academie  $academie
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditAcademie $request, $id)
    {
        $academie = Academie::find($id);

        $academie->titre = $request->titre;
        $academie->contenu = $request->contenu;
        if($request->image != null){
        $academie->image = $request->image->store('','imgAcademie');
        }

        $academie->save();
        return redirect()->route('academies.index',['academie'=> $academie->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academie  $academie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academie = Academie::find($id);
        $academie->delete();
        return redirect()->route('academies.index');
    }
}
