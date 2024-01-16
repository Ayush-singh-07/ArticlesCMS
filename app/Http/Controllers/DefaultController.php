<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Articles;
use  DB;
use \Carbon\Carbon;

class DefaultController extends Controller
{
    //

    public function manageArticles(Request $request){
        if($request->isMethod("GET")){
            $data = Articles::all();

            return view("dashboard.manage_articles", ['data'=>$data]);
        }
        if($request->isMethod("POST")){
            validator($request->all(), [
                'article'=>['required'],
                'content'=>['required']
            ])->validate();

            DB::table('articles')
                ->insert([
                    "article_name"=>$request->input('article'),
                    "content"=>$request->input('content'),
                    "created_by"=>$request->user()->user_id,
                    "edited_by"=>$request->user()->user_id,
                    "date_verified_at"=>Carbon::now()->format('y-m-d')
                ]);

            return redirect()->back();
        }
    }

    public function deleteArticle($article_id){
        DB::table('articles')
            ->where("article_id", $article_id)
            ->delete();
            return redirect()->back();
    }


    public function editArticle(Request $request, $article_id){
        if($request->isMethod("GET")){
            $data = Articles::all();
            $editable_data = Articles::where("article_id", $article_id)->first();
            return view("dashboard.manage_articles", ['data'=>$data, "editable_data"=>$editable_data]);
        }
        if($request->isMethod("POST")){
            validator($request->all(), [
                'article'=>['required'],
                'content'=>['required']
            ])->validate();

            DB::table('articles')
                ->where("article_id", $article_id)
                ->update([
                    "article_name"=>$request->input('article'),
                    "content"=>$request->input('content'),
                    "edited_by"=>$request->user()->user_id,
                ]);

            return redirect()->route("manageArticles");
        }
    }


    public function articles(){
        $data =  Articles::orderby("article_id", "desc")->get();
        return view("dashboard.articles", ['data'=>$data]);
    }
}
