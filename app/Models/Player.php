<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Player extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->player_uuid = Str::uuid();
        });
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
