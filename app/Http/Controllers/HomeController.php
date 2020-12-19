<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\TweetsProvider;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function home(){
        $tweets = TweetsProvider::where("receiver_id", Auth::id())->get();
        return view("tweets.index", compact('tweets'));
    }
}


