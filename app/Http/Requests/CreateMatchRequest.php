<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMatchRequest extends FormRequest
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
            'schedule_id'           => ['required', 'exists:schedules,id'],
            'winner_team_id'        => ['nullable', 'exists:teams,id'],
            'team_1_score'          => ['required', 'integer', 'min:0'],
            'team_2_score'          => ['required', 'integer', 'min:0'],
            'team_1_possession'     => ['required', 'integer', 'min:0', 'max:100'],
            'team_2_possession'     => ['required', 'integer', 'min:0', 'max:100'],
            'team_1_shots_on_target' => ['required', 'integer', 'min:0'],
            'team_2_shots_on_target' => ['required', 'integer', 'min:0'],
            'team_1_fouls'          => ['required', 'integer', 'min:0'],
            'team_2_fouls'          => ['required', 'integer', 'min:0'],
            'team_1_corners'        => ['required', 'integer', 'min:0'],
            'team_2_corners'        => ['required', 'integer', 'min:0'],
            'team_1_yellow_cards'   => ['required', 'integer', 'min:0'],
            'team_2_yellow_cards'   => ['required', 'integer', 'min:0'],
            'team_1_red_cards'      => ['required', 'integer', 'min:0'],
            'team_2_red_cards'      => ['required', 'integer', 'min:0'],
        ];
    }
}
