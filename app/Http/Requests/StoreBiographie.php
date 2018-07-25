<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBiographie extends FormRequest
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
            'titre'  =>  "required|max:45",
            'contenu' => 'required|max:255',
            'image'  =>  'required|max:20000000|',
            'image.max' => "L'image ne peut pas dépasser 20Mb",
        ];
    }

        public  function  messages()
        {
        return[
        'titre.required'  =>  "Il faut un titre pour la biographie",
        'titre.max' => "Maximum :max caractères",
        'contenu.required' => "Il faut du contenu",
        'contenu.max' => "Maximum :max caractères",
        'image.required'  =>  "Il faut une image pour la biographie",
        'image.max' => "L'image ne peut pas dépasser 20Mb",
            ];
        
    }
}
