<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:20',
            'description' => 'required',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Course name'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'You must fill in this description field'
        ];
    }
}
