<?php

namespace App\Http\Controllers;

use App\Evenement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvenement;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::all();
        return view("admin.evenements.index",compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.evenements.create",compact('evenements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEvenement $request)
    {
        $evenement = new Evenement;
        $evenement->name = $request->name;
        $evenement->date = $request->date;

        $evenement->save();
        return redirect()->route("evenements.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        return view('admin.evenements.edit', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEvenement $request, $id)
    {
        $evenement = Evenement::find($id);
        $evenement->name = $request->name;
        $evenement->date = $request->date;

        $evenement->save();
        return redirect()->route('evenements.index',['evenement'=> $evenement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evenement = Evenement::find($id);
        $evenement->delete();
        return redirect()->route('evenements.index');
    }
}
