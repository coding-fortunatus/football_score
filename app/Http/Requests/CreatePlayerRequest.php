<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlayerRequest extends FormRequest
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
            'fullname' => 'required|string',
            'phone' => 'required|string|unique:players,phone',
            'position' => 'required|string',
            'wing' => 'required|integer',
            'skill_level' => 'required|integer',
            'photo' => 'nullable|image',
            'team_id' => 'required|integer|exists:teams,id',
        ];
    }
}
