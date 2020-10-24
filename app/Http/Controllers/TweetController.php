<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Auth;
class TweetController extends Controller
{
    public function index($id){

        $prepared = Tweet::where("user_id", $id); // all of user tweets

        $tweets = $prepared->get(); //
        $media = $prepared->whereNotNull("image")->limit(6); // image

        return view("tweets.index", compact('tweets', 'media'));
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
