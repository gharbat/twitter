<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\TweetsProvider;
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
        $this->validate($request, [
            "tweet_body" => "min:1|max:140|required"
        ]);


        // insert
        $tweet = new Tweet();
        $tweet->body = $request->tweet_body;
        $tweet->user_id = Auth::user()->id  ;
        $tweet->save();


        // Get all my followers IDs
        $followers = Auth::user()->followers;
        $tweet_id = $tweet->id;
        $this->propagate($followers, $tweet_id);

        // return (redirect)
        return redirect("/");
    }


    public function propagate($followers, $tweet_id){
        foreach ($followers as $follower){
            $provider = new TweetsProvider();
            $provider->publisher_id = Auth::id();
            $provider->receiver_id = $follower->follower_id;
            $provider->tweet_id = $tweet_id;
            $provider->save();
        }
    }
}
