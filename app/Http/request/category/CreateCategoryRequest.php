<?php


namespace App\Http\request\category;


use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100'
        ];
    }
}
