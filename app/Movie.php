<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function episodes(){
        return $this->hasMany(Episode::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
