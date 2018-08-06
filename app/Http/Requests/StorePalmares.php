<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePalmares extends FormRequest
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
            'annee'  =>  "required|max:2999|numeric",
            'competition' => 'required|max:255',
            'resultat' => 'required|max:255',
            'categorie' => 'required|max:255',
            

        ];
    }

    public  function  messages()
    {
        return[
        'annee.required'  =>  "Le champ ne peut pas être vide",
        'annee.numeric' => "Il faut des chiffres",
        'annee.max' => "Maximum :max caractères",
        'competition.required' => "Il faut du contenu",
        'competition.max' => "Maximum :max caractères",
        'resultat.required' => "Il faut le resultat",
        'resultat.max' => "Maximum :max caractères",
        'categorie.required' => "Il faut une categorie",
        'categorie.max' => "Maximum :max caractères",
        ];
    }
}
