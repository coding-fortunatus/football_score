<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->team_uuid = Str::uuid();
            $model->slug      = Str::slug($model->name);
        });
    }


    public function coaches()
    {
        return $this->hasMany(Coach::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
