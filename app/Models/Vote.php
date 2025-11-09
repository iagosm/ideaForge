<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'user_id',
        'votable_id',
        'votable_type',
        'is_like',
    ];

    public function votable()
    {
        return $this->morphTo();
    }
}