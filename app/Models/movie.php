<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    public function casts()
    {
        return $this->belongsToMany('App\Models\cast','movie_casts');
    }

    public function theatre()
    {
        return $this->belongsToMany('App\Models\theatre','theatre_movies');
    }
}
