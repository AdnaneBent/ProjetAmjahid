<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartenaire extends FormRequest
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
            'image'  =>  'required|max:20000000|',
            'image.max' => "L'image ne peut pas dépasser 20Mb",
        ];
    }

        public  function  messages()
        {
        return[
        'name.required'  =>  "Il faut un nom pour le partenaire",
        'name.max' => "Maximum :max caractères",
        'image.required'  =>  "Il faut une image pour les partenaires",
        'image.max' => "L'image ne peut pas dépasser 20Mb",
            ];
    }
}
