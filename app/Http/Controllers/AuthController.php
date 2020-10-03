<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function loginAction(Request $request){
        $this->validate($request,[
            "email" => "email|required"
        ]);

        $password = md5($request->password);

        $result = User::where("email", $request->email)->where("password", $password)->count();
        if ($result == 1){
            dd("cool");
        }else{
            dd("shit happens");
        }
    }



    //////////

    public function signup(){
        return view("auth.signup");
    }

    public function signupAction(Request $request){
        $this->validate($request,[
            "email" => "email|required|max:30",
            "name"=> "string|required|max:30|min:8|unique:App\Models\User,name",
//            "password" => "required|min:10|max:30"
        ]);

        $password = md5($request->password);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();

        return redirect("/login");
    }
}
