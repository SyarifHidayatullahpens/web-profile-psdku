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
            'date_start'           =>  'required|date',
            'date_finish'          =>  'required|date',
            'annoucement'          =>  'required|date',
            're_registration'      =>  'required|date',
            'description'          =>  'required|string',
        ];
    }

    public function messages() 
    {
        return [
            'required'         => 'Field harus diisi'
        ];
    }
}
