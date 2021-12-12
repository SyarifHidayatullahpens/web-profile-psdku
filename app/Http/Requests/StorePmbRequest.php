<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePmbRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                 => 'required|string|min:4|max:20|unique:pmbs',
            'start_date'           =>  'required|date',
            'finish_date'          =>  'required|date',
            'annoucement'          =>  'required|date',
            're_registration'      =>  'required|date',
            'description'          =>  'required|string',
        ];
    }

    public function messages() 
    {
        return [
            'required'         => 'Atribute field is required'
        ];
    }
}
