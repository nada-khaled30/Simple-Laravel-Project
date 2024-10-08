<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "title" => ["required", "max:255", "unique:postss", "min:2"],
            "content" => ["required"]
        ];
    }
}
