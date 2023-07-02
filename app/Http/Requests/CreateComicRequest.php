<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:100',
            'description' => 'string',
            'thumb' => 'string|max:400',
            'price' => 'string|max:10',
            'series' => 'string|max:100',
            'sale_date' => 'date',
            'type' => 'string|max:100',
        ];
    }
}
