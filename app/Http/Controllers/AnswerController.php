<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use Auth;
use Session;

class AnswerController extends Controller
{
    //
    public function store(Request $request){
      $content = strip_tags($request->answer);
      $answer = Answer::create([
        'article_id' => $request->article_id,
        'name' => Auth::user()->name,
        'answer' => $content,
      ]);
      if($answer){
        Session::flash('success','回复成功');
        return redirect()->back();
      }
    }
}
