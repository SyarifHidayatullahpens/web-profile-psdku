<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMajorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'    => 'required|string|min:10|max:100',
            'description'   => 'required|string'
        ];
    }

    public function messages() {
        return [
            'required'  => 'Field harus diisi'
        ];
    }
}
