<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//make true to run correctly
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:4',
            'body'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'يرجى ادخال العنوان',
            'title.max' => 'يسمح ب 4 حروف فقط',
            'body.required' => 'A message is required',
        ];
    }
}
