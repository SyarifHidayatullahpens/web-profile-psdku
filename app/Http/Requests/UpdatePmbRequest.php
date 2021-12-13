<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePmbRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'                 => 'required|string|min:4|max:20',
            'date_start'           =>  'required|date',
            'date_finish'          =>  'required|date',
            'annoucement'          =>  'required|date',
            're_registration'      =>  'required|date',
            'description'          =>  'required|string',
        ];
    }
}
