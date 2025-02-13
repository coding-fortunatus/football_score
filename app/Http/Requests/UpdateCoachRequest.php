<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCoachRequest extends FormRequest
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
        $id = $this->route('coach');
        return [
            'fullname' => 'required|string',
            'email' => 'required|string|email|unique:coaches,email,' . $id,
            'phone' => 'required|string',
            'description' => 'required|string',
            'success_rate' => 'required|numeric',
            'photo' => 'nullable|image',
            'team_id' => 'required|integer|exists:teams,id',
        ];
    }
}
