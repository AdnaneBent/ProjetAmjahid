<?php

namespace App\Http\Controllers;

use App\Galerie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGalerie;
use App\Http\Requests\StoreEditGalerie;
use Storage;
use App\Services\imageResize;

class GalerieController extends Controller
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
        $galeries = Galerie::all();
        return view("admin.galeries.index",compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.galeries.create",compact('galeries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalerie $request)
    {
        $galerie = new Galerie;
        $galerie->name = $request->name;
       if ($request->image != null)
        {
            Storage::disk('imgGalerie')->delete($galerie->image);
           
    
            $image = [
                "name" => $request->image,
                "disk" => "imgGalerie",
                "w" => 1000,
                "h" => 1000
            ];
            $galerie->image = $this->imageResize->imageStore($image);
        }

        $galerie->save();
        return redirect()->route("galeries.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function show(Galerie $galerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeries = Galerie::find($id);
        return view('admin.galeries.edit', compact('galeries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditGalerie $request, $id)
    {
        $galerie = Galerie::find($id);
        $galerie->name = $request->name;
        if ($request->image != null)
        {
            Storage::disk('imgGalerie')->delete($galerie->image);
           
    
            $image = [
                "name" => $request->image,
                "disk" => "imgGalerie",
                "w" => 1000,
                "h" => 1000
            ];
            $galerie->image = $this->imageResize->imageStore($image);
        }
        $galerie->save();
        return redirect()->route('galeries.index',['galerie'=> $galerie->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galerie = Galerie::find($id);
        $galerie->delete();
        return redirect()->route('galeries.index');
    }
}
