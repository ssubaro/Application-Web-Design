<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'classification',
        'release_date',
        'review',
        'season',
        'image_path',
        'type'
    ];

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
