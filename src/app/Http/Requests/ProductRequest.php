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
            'price' => 'required|integer|min:1',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'categories' => 'array'
        ];
    }
}
