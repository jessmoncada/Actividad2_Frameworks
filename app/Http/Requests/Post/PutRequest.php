<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    /**
     * Determinar si el usuario está autorizado para realizar esta solicitud
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500|unique:posts,slug,' . $this->route('post')->id,
            'content' => 'required|min:7',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'required|min:7',
            'posted' => 'required',
            'image' => 'file|mimes:jpeg,jpg,png|max:2048',
        ];
    }
}
