<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $prepared = Tweet::all(); // all of user tweets

        $tweets = $prepared; //

        return view("tweets.index", compact('tweets'));
    }
}
