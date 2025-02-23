<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Field extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->field_uuid = Str::uuid();
        });
    }

    public function schedule()
    {
        // return $this->hasMany(Schedule::class);
    }
}
