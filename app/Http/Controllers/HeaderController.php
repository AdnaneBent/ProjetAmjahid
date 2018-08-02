<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHeader;
use App\Http\Requests\StoreEditHeader;
use App\Services\imageResize;
use Storage;
use Image;


class HeaderController extends Controller
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
        $headers = Header::all();
        return view("admin.headers.index",compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.headers.create",compact('headers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeader $request)
    {
        $header = new Header;
        $header->titre = $request->titre;
        $header->imageBG = $request->imageBG->store('','imgHeaderBG');
        $image = [
                "name" => $request->imageAV,
                "disk" => "imgHeaderAV",
                "w" => 1050,
                "h" => 610
            ];
            $header->imageAV = $this->imageResize->imageStore($image);

        $header->save();
        return redirect()->route("headers.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = Header::find($id);
        return view('admin.headers.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEditHeader $request, $id)
    {
        $header = Header::find($id);
        $header->titre = $request->titre;

        if($request->imageAV != null){
        $header->titre = $request->titre;
        $image = [
                "name" => $request->imageAV,
                "disk" => "imgHeaderAV",
                "w" => 1050,
                "h" => 610
            ];
            $header->imageAV = $this->imageResize->imageStore($image);

        }
        if($request->imageBG != null){
        $header->imageBG = $request->imageBG->store('','imgHeaderBG');
        }

        $header->save();
        return redirect()->route('headers.index',['header'=> $header->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);
        $header->delete();
        return redirect()->route('headers.index');
    }
}
