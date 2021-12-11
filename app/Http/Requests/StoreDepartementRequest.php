<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartementRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'    => 'required|string|max:255',
            'email'   => 'required|string|email|max:255|unique:companies',
            'logo'    => 'required|image|mimes:jpeg,jpg,png,svg|max:2048|dimensions:min_width=100,min_height=100',
            'website_url' => 'required|url|unique:companies,website_url',
        ];
    }
}
