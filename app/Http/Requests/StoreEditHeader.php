<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditHeader extends FormRequest
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
            'titre'  =>  "required|max:60",
            'imageBG'  =>  'max:20000000|dimensions:min_width=1920,min_height=1080',
            'imageBG.max' => "L'image ne peut pas dépasser 20Mb",
            'imageAV.max' => "L'image ne peut pas dépasser 20Mb",
        ];
    }

        public  function  messages()
        {
        return[
        'titre.required'  =>  "Il faut un titre",
        'titre.max' => "Maximum :max caractères",
        'imageBG.max' => "L'image ne peut pas dépasser 20Mb",
        'imageAV.max' => "L'image ne peut pas dépasser 20Mb",
        'imageBG.dimensions' => 'Il faut respecter les dimensions',
            ];
    
    
    }
}
