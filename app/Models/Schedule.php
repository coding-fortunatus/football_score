<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Schedule extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->schedule_uuid = Str::uuid();
        });
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, "team_1_id");
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, "team_2_id");
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function official()
    {
        return $this->belongsTo(Official::class);
    }

    public function footballMatch()
    {
        return $this->hasOne(FootballMatch::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
