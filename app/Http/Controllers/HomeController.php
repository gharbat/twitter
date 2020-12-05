<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function home(){

        $i_am_following_objects = Auth::user()->following;
        $ids = [];

        foreach ($i_am_following_objects as $user){
            array_push($ids, $user->following_id);
        }

        return view("tweets.index", compact('ids'));
    }
}
