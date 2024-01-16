<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use  DB;

class AdminController extends Controller
{
    //

    public function adminDashboard(Request $request){
        if($request->isMethod("GET")){
            $data = DB::table("users")
                    ->join("user_types", "user_types.user_id", "=", "users.user_id")
                    ->get();

            return view("dashboard.index", ['data'=>$data]);
        }
        if($request->isMethod("POST")){
            validator($request->all(), [
                'user'=>['required'],
                'usertype'=>['required']
            ])->validate();

            DB::table('user_types')
                ->where("user_id", $request->input('user'))
                ->update([
                    "usertype"=>$request->input('usertype'),
                ]);

            return redirect()->back();
        }
    }
}
