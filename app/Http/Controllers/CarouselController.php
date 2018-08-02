<?php

namespace App\Http\Controllers;

use App\Carousel;
use Storage;
use Illuminate\Http\Request;
use Image;
use App\Services\imageResize;

class CarouselController extends Controller
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
        $carousels = Carousel::all();
        return view("admin.carousels.index",compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.carousels.create",compact('carousels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carousel = new Carousel;
        $carousel->name = $request->name;
        $image = [
            "name" => $request->image,
            "disk" => "imgCarousel",
            "w" => 500,
            "h" => 500
        ];
         $carousel->image = $this->imageResize->imageStore($image);

        $carousel->save();
        return redirect()->route("carousels.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousels = Carousel::find($id);
        return view('admin.carousels.edit', compact('carousels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carousel = Carousel::find($id);
        $carousel->name = $request->name;
         $image = [
            "name" => $request->image,
            "disk" => "imgCarousel",
            "w" => 500,
            "h" => 500
        ];
         $carousel->image = $this->imageResize->imageStore($image);
        $carousel->save();
        return redirect()->route('carousels.index',['carousel'=> $carousel->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();
        return redirect()->route('carousels.index');
    }
}
