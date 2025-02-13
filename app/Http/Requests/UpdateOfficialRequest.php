<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficialRequest extends FormRequest
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
        $id = $this->route('ooficial');
        return [
            'fullname' => 'required|string|unique:officials,fullname,' . $id,
            'email' => 'required|email|unique:officials,email,' . $id,
            'phone' => 'required|string|unique:officials,phone,' . $id,
            'role' => 'required|string',
            'photo' => 'nullable|image',
        ];
    }
}
