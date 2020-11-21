<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class
FollowController extends Controller
{
    public function follow($id)
    {
        $follower = Auth::id();
        $following = User::findOrFail($id)->id;

        $action = new Follow();
        $action->follower_id=$follower;
        $action->following_id=$following;
        $action->save();

        return redirect('/profile/'.$id);
    }

    public function unfollow($id)
    {
        $id = User::findOrFail($id)->id;

        Follow::where("follower_id", Auth::id())->where("following_id", $id)->delete();
        return redirect('/profile/'.$id);

    }
}
