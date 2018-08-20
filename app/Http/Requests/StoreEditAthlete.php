<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditAthlete extends FormRequest
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
            'taille' => 'required|',
            'poids' => 'required|',
            'rang' => 'required|',
            'training' => 'required|',
            'categorie' => 'required|',
            'club' => 'required|',
            'champM' => 'required|',
            'champJ' => 'required|',
            'image'  =>  'required|max:20000000|',
        ];
    }

        public  function  messages()
        {
        return[
        'titre.required'  =>  "Il faut un titre",
        'taille.required'  =>  "Il faut mettre une taille",
        'poids.required'  =>  "Il faut mettre le poids",
        'rang.required'  =>  "Il faut mettre le rang",
        'training.required'  =>  "Il faut mettre le volume d'entraînement",
        'categorie.required'  =>  "Il faut mettre une catégorie",
        'club.required'  =>  "Il faut mettre le club",
        'champM.required'  =>  "Ce champ ne doit pas être vide",
        'champJ.required' => "Ce champ ne doit pas être vide",
        'image.max' => "L'image ne peut pas dépasser 20Mb",
            ];
    }
}
