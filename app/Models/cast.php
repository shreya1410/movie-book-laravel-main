<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cast extends Model
{
    use HasFactory;
    public function movies(){
        return $this->belongsToMany('App\Models\movie','movie_casts')->paginate(5);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
