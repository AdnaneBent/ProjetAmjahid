<?php

namespace App\Http\Controllers;

use App\Biographie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBiographie;
use App\Http\Requests\StoreEditBiographie;
use Storage;
use App\Services\imageResize;

class BiographieController extends Controller
{

     public function __construct(ImageResize $imageResize){
        $this->imageResize = $imageResize;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biographies = Biographie::all();
        return view("admin.biographies.index",compact('biographies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.biographies.create",compact('biographies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBiographie $request)
    {
        $biographie = new Biographie;
        $biographie->titre = $request->titre;
        $biographie->contenu = $request->contenu;
        $image = [
            "name" => $request->image,
            "disk" => "imgBiographie",
            "h" => 1000
        ];
        $biographie->image = $this->imageResize->imageStore($image);

        $biographie->save();
        return redirect()->route("biographies.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biographie  $biographie
     * @return \Illuminate\Http\Response
     */
    public function show(Biographie $biographie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biographie  $biographie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biographie = Biographie::find($id);
    
        return view('admin.biographies.edit', compact('biographie'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biographie  $biographie
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditBiographie $request, $id)
    {
        $biographie = Biographie::find($id);

        $biographie->titre = $request->titre;
        $biographie->contenu = $request->contenu;
         if ($request->image != null)
        {
            Storage::disk('imgBiographie')->delete($biographie->image);
           
    
            $image = [
                "name" => $request->image,
                "disk" => "imgBiographie",
                "w" => 1000,
                "h" => 1000
            ];
            $biographie->image = $this->imageResize->imageStore($image);
        }

        $biographie->save();
        return redirect()->route('biographies.index',['biographie'=> $biographie->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biographie  $biographie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biographie = Biographie::find($id);
        $biographie->delete();
        return redirect()->route('biographies.index');
    }
}
