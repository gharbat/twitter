<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class
FollowController extends Controller
{
    public function follow($id)
    {
        $follower = Auth::id();
        $follower_name = Auth::user()->name;

        $following = User::findOrFail($id)->id;

        $action = new Follow();
        $action->follower_id=$follower;
        $action->following_id=$following;
        $action->save();

        $this->notify($id, $follower, "$follower_name has followed you");

        return redirect('/profile/'.$id);
    }

    public function unfollow($id)
    {
        $id = User::findOrFail($id)->id;

        Follow::where("follower_id", Auth::id())->where("following_id", $id)->delete();
        return redirect('/profile/'.$id);

    }

    public function notify($user_id, $trigger_id, $text){

        $this->notifyByApp($user_id, $trigger_id, $text);

    }

    public function notifyByApp($user_id, $trigger_id, $text){
        $notification = new Notification();
        $notification->user_id = $user_id;
        $notification->trigger_id = $trigger_id;
        $notification->text = $text;
        $notification->save();

    }

}
