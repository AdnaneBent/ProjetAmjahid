<?php

namespace App\Http\Controllers;

use App\Engagement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEngagement;
use App\Http\Requests\StoreEditEngagement;
use Storage;
use App\Services\imageResize;

class EngagementController extends Controller
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
        $engagements = Engagement::all();
        return view("admin.engagements.index",compact('engagements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.engagements.create",compact('engagements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEngagement $request)
    {
        $engagement = new Engagement;
        $engagement->titre = $request->titre;
        $engagement->contenu = $request->contenu;
         if ($request->image != null)
        {
            Storage::disk('imgEngagement')->delete($engagement->image);
           
    
            $image = [
                "name" => $request->image,
                "disk" => "imgEngagement",
                "h" => 1000
            ];
            $engagement->image = $this->imageResize->imageStore($image);
        }




        $engagement->image = $this->imageResize->imageStore($image);

        $engagement->save();
        return redirect()->route("engagements.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Engagement  $engagement
     * @return \Illuminate\Http\Response
     */
    public function show(Engagement $engagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Engagement  $engagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engagement = Engagement::find($id);
    
        return view('admin.engagements.edit', compact('engagement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Engagement  $engagement
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditEngagement $request, $id)
    {
        $engagement = Engagement::find($id);

        $engagement->titre = $request->titre;
        $engagement->contenu = $request->contenu;
        
        if ($request->image != null)
        {
            Storage::disk('imgEngagement')->delete($engagement->image);
           
    
            $image = [
                "name" => $request->image,
                "disk" => "imgEngagement",
                "w" => 1000,
                "h" => 1000
            ];
        
            $engagement->image = $this->imageResize->imageStore($image);
        }
        $engagement->save();
        return redirect()->route('engagements.index',['engagement'=> $engagement->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Engagement  $engagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $engagement = Engagement::find($id);
        $engagement->delete();
        return redirect()->route('engagements.index');
    }
}
