<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'released_at' => 'required|date|before:today',
            'pages' => 'required|integer|min:1',
            'isbn' => 'required|unique:books|regex:/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/i',
            'description' => 'sometimes',
            'genres' => 'required|array',
            'genres.*' => 'exists:genres,id',
            'in_stock' => 'required|integer|min:0',
        ];
    }
}
