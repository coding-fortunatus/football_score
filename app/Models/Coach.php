<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Coach extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->coach_uuid = Str::uuid();
        });
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
