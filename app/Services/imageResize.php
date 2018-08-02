<?php

namespace  App\Services;
use  Image;
use  Storage;
//(le nom de la classe doit avoir le même nom que le fichier)
class  ImageResize{
/**
* @param  request->image
* @return  string //le nom de l'image
*/
public  function  imageStore($image)
    {
    $imageName  =  $image['name']->store('',$image['disk']);
    $resize = Image::make(Storage::disk($image["disk"])->path($imageName))->resize($image['w'],$image['h']);
    $resize->save();
    return  $imageName;
    }   
}