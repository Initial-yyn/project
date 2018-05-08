<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    //查看问题主页
    public function index(Request $request){
        if($request->type){
            $questions = Question::where('type','=',$request->type)->orderBy('updated_at','DESC')->paginate(10);
        }else {
          $questions = Question::orderBy('updated_at','DESC')->paginate(10);
        }

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
         'name'=>$request->name,
         'question_title'=>$request->question_title,
         'question_content'=>$request->question_content,
         'type'=>$request->type
       ]);
       //如果入库成功则返回成功或失败
       if($question){
           return redirect('question/index');
       }else {
         echo "入库失败";
       }
    }

    public function show(Request $request){
      $id = $request->id;
      $question = Question::find($id);
      $answers = Answer::where('article_id',$id)->get();
      return view('question.show')->with('question',$question)
                                  ->with('answers',$answers);
    }
}
