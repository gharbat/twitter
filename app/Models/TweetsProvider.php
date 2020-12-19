<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetsProvider extends Model
{
    use HasFactory;

    public function original(){
        return $this->belongsTo(Tweet::class,"tweet_id");
    }
}
