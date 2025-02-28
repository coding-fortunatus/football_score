<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateScheduleRequest extends FormRequest
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
            'team_1_id' => ['required', 'exists:teams,id', 'different:team_2_id'],
            'team_2_id' => ['required', 'exists:teams,id', 'different:team_1_id'],
            'field_id'  => ['required', 'exists:fields,id'],
            'official_id' => ['required', 'exists:officials,id'],
            'league_id' => ['required', 'exists:leagues,id'],
            'match_time' => ['required', 'date_format:Y-m-d\TH:i', 'after:now'], // Matches datetime-local format
            'status' => ['required', Rule::in(['Scheduled', 'Completed', 'Cancelled'])],
        ];
    }
}
