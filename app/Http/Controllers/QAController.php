<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QAController extends Controller
{
    //智能跳转
    public function transit(Request $request){
        $title = $request->question_title;
        $content = $request->question_content;
        $content = strip_tags($request->question_content);
        $a = Question::where('question_title',$title)->get()->ToArray();
        $b = Question::where('question_content',$content)->get()->ToArray();
        $question = [$request->name,$title,$content,$request->type];
        if($a){
            foreach($a as $value) {
                $id[] = $value['id'];
            }
            $c = implode(',',$id);
            $question[4] = $c;
            return view('qa.transitok',compact('question'));
        }elseif($b){
            foreach($b as $value) {
                $id[] = $value['id'];
            }
            $c = $id;
            $question[4]=$c;
            return view('qa.transitok',compact('question'));
        }else{
            return view('qa.transitno',compact('question'));
        }
    }

    //智能搜索
    public function search(Request $request){
        $id = explode(',',$request->id);
        foreach ($id as $value) {
            $questions[]= Question::where('id','=',$value)->get()->toArray();
        }
        // }else {
        //     $questions = Question::orderBy('updated_at','DESC')->paginate(10);
        // }
        // dd($question);
         return view('QA.search')->with('questions',$questions);
     }
}
