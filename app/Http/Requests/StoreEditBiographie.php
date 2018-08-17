<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditBiographie extends FormRequest
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
            'contenu' => 'required|',
            'image'  =>  'max:20000000|',
        ];
    }

        public  function  messages()
        {
        return[
        'titre.required'  =>  "Il faut un titre pour la biographie",
        'titre.max' => "Maximum :max caractères",
        'contenu.required' => "Il faut du contenu",
        'image.max' => "L'image ne peut pas dépasser 20Mb",
            ];
    }
}
