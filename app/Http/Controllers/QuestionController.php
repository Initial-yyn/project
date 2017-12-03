<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    //查看问题主页
    public function index(){
        // $questions = Question::orderBy('updated_at')->get();

        $questions = Question::orderBy('updated_at')->paginate(1);
        return view('question.index',compact('questions'));
    }
    //编辑问题
    public function editor(){
      return view('question.editor');
    }

    //发布问题
    public function publish(Request $request){

      //将传递来的数据入库
      $question =  Question::create([
         'name'=>$request->username,
         'question_title'=>$request->question_title,
         'question_content'=>$request->question_content,
         'type'=>$request->type
       ]);
       //如果入库成功则返回成功或失败
       if($question){
         return response()->json(['status'=>'200','msg'=>'问题发布成功']);
       }else {
         return response()->json(['status'=>'500','msg'=>'问题发布失败']);
       }
    }
}
