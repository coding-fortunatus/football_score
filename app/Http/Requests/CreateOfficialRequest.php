<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOfficialRequest extends FormRequest
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
            'fullname' => 'required|string|unique:officials,fullname',
            'email' => 'required|email|unique:officials,email',
            'phone' => 'required|string|unique:officials,phone',
            'role' => 'required|string',
            'photo' => 'nullable|image',
        ];
    }
}
