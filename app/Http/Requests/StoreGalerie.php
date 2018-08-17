<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalerie extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            'name'  =>  "required|max:45",
            'image'  =>  'required|max:20000000|dimensions:min_width=1000,min_height=1000',
        ];
    }

        public  function  messages()
        {
        return[
        'name.required'  =>  "Il faut un nom pour l'image de la galerie",
        'name.max' => "Maximum :max caractères",
        'image.max' => "L'image ne peut pas dépasser 20Mb",
        'image.required' => "Il faut une image",
        'image.dimensions' => 'Il faut respecter les dimensions 1000x1000',
            ];
    }
}
