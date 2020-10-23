<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo("App\User");
    }

    public function likes(){
        return $this->hasMany("App\Like");
    }

    public function comments(){
        return $this->hasMany("App\Comment");
    }
}
