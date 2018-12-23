<?php
/**
 * Created by PhpStorm.
 * User: ligo
 * Date: 19.12.18
 * Time: 20:01
 */

namespace App\Http\Requests;


class SearchRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'query' => 'required|string|max:255',
        ];
    }
}