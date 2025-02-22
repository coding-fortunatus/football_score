<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
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
        $id = $this->route('team_uuid');
        return [
            'name' => "required|string|unique:teams,name,{$id},team_uuid",
            'short_name' => "nullable|string|unique:teams,short_name,{$id},team_uuid",
            'faculty' => 'required|string',
            'logo' => 'nullable|image'
        ];
    }
}
