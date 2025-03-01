<?php

namespace App\Http\Controllers;

use App\Action\Matches\FetchAllMatch;
use App\Action\Players\FetchAllPlayer;
use App\Action\Schedules\FetchAllSchedule;
use App\Action\Teams\FetchAllTeams;
use App\Models\FootballMatch;
use App\Models\Schedule;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(FetchAllPlayer $player)
    {
        $nextMatches = Schedule::with('field', 'team1', 'team2')
            ->where('match_time', '>', Carbon::now())->limit(2)
            ->orderBy('match_time', 'asc')->get();
        $matches  = FootballMatch::with('schedule', 'winner')->latest()->limit(5)->get();
        $players = $player->execute();

        $teamStats = Team::select('teams.short_name as team_name')
            ->selectRaw("
                SUM(CASE WHEN football_matches.winner_team_id = teams.id THEN 1 ELSE 0 END) AS wins,
                SUM(CASE WHEN football_matches.team_1_score = football_matches.team_2_score THEN 1 ELSE 0 END) AS draws,
                SUM(CASE WHEN football_matches.winner_team_id IS NOT NULL AND football_matches.winner_team_id != teams.id THEN 1 ELSE 0 END) AS losses")
            ->leftJoin('schedules', function ($join) {
                $join->on('teams.id', '=', 'schedules.team_1_id')
                    ->orOn('teams.id', '=', 'schedules.team_2_id');
            })
            ->leftJoin('football_matches', 'schedules.id', '=', 'football_matches.schedule_id')
            ->groupBy('teams.id', 'teams.short_name')
            ->orderByDesc('wins')
            ->get();

        return view('index', compact(['players', 'matches', 'nextMatches', 'teamStats']));
    }

    public function teams(FetchAllTeams $team)
    {
        $teams = $team->execute();
        return view('teams', compact('teams'));
    }

    public function players(FetchAllPlayer $player)
    {
        $players = $player->execute();
        return view('players', compact('players'));
    }

    public function schedules(FetchAllSchedule $schedule)
    {
        $schedules = $schedule->execute();
        return view('schedule', compact('schedules'));
    }

    public function matches(FetchAllMatch $match)
    {
        $matches = $match->execute();
        return view('matches', compact('matches'));
    }
}
