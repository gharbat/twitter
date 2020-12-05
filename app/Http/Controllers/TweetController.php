<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class TweetController extends Controller
{
    public function index($id){

        $user = User::findOrFail($id);
        $tweets = $user->tweets; // all of user tweets

        return view("tweets.profile", compact('tweets', 'user'));
    }


    public function insert(Request $request){
        // validate
        $this->validate($request, [
            "tweet_body" => "min:1|max:140|required"
        ]);

        // insert
        $tweet = new Tweet();
        $tweet->body = $request->tweet_body;
        $tweet->user_id = Auth::user()->id  ;
        $tweet->save();

        // return (redirect)
        return redirect("/");
    }
}
