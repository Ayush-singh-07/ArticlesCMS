<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function logout()
    {
        Auth::logout();

        // Redirect to the home page or any other page after logout
        return redirect('/');
    }

    public function login(Request $request){
        if($request->isMethod("GET")){
            return view("welcome");
        }
        if($request->isMethod("POST")){
            validator($request->all(),[
                "email"=> ['required', 'email'],
                "pass"=>['required']
            ])->validate();

            $creds = [
                "email"=>$request->input('email'),
                "password"=>$request->input('pass')
            ];

            if(auth()->attempt($creds)){
                // return $request->user();
                $user = DB::table("users")
                    ->join("user_types", "users.user_id", "=", "user_types.user_id")
                    ->where("users.user_id", $request->user()->user_id)
                    ->first();
                
                if($user->usertype == "A"){
                    return redirect()->route('admin_dashboard');
                }
                return redirect()->route('admin_dashboard');
            }
            else{
                return redirect()->back()->withErrors(["email"=>"invalid email address !", "password"=>"Password is not valid !"]);
            }
        }
    }
}
