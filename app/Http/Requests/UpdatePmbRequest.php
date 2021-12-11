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
            'name'                 => 'required|string|min:4|max:20|unique:pmbs',
            'start_date'           =>  'required|date|date_format:d-m-Y',
            'finish_date'          =>  'required|date|date_format:d-m-Y',
            'annoucement'          =>  'required|date|date_format:d-m-Y',
            're_registration'      =>  'required|date|date_format:d-m-Y',
            'description'          =>  'required|string',
        ];
    }
}
