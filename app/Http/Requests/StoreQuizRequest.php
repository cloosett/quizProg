<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:quizzes,slug',
            'category' => 'required|integer|exists:categories,id',
            'level' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'tags' => 'nullable|string',
            'status' => 'required|in:on,off',
            'quizData' => 'required|json',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5024',
        ];
    }
}
