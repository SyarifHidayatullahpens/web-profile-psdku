<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           'name'           => 'required|string|min:20',
           'date'           =>  'required|date',
           'image'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'description'    => 'required|string',
        ];
    }
}
