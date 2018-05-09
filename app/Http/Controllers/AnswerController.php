<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use Auth;
use Session;
use App\Role;
use App\User;
use App\Question;

class AnswerController extends Controller
{
    //存储回答
    public function store(Request $request){

        //判定角色
        $name = Auth::user()->name;
        $id = User::where('name',$name)->value('id');
        $role = User::find($id)->role()->value('display_name');
        $content = strip_tags($request->answer);
        if($role != "教师"){
            $answer = Answer::create([
                'article_id' => $request->article_id,
                'name' => $name,
                'role' => $role,
                'answer' => $content,
            ]);
        }else{
            $answer = Answer::create([
                'article_id' => $request->article_id,
                'name' => $name,
                'role' => $role,
                'answer' => $content,
            ]);
            //标记为正确答案
            Answer::where('id',$answer->id)->update(['correct' => 1]);
        }
        //反馈
        if($answer){
            Session::flash('success','回复成功');
            return redirect()->back();
        }
    }

    //展示回答
    public function show(Request $request){
        $id = $request->id;
        $question = Question::find($id);
        $answers = Answer::where('article_id',$id)->orderBy('created_at','DESC')->get();
        return view('question.show')->with('question',$question)
                                    ->with('answers',$answers);
    }
}
