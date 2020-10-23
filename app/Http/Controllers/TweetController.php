<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function insert(Request $request){
        // validate
        $this->validate($request, [
            "tweet_body" => "min:1|max:140|required"
        ]);

        // insert
        $tweet = new Tweet();
        $tweet->body = $request->tweet_body;
        $tweet->user_id = 1;
        $tweet->save();

        // return (redirect)
        return redirect("/");
    }
}
