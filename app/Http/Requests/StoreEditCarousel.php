<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditCarousel extends FormRequest
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
            'image'  =>  'max:20000000|',
        ];
        
    }

     public  function  messages()
        {
        return[
        'image.max' => "L'image ne peut pas dépasser 20Mb",
            ];
    }
}
