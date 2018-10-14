<?php

namespace App\Http\Requests;

class ProductRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:1',
            'rent_price' => 'required|numeric|min:1'
        ];
    }
}