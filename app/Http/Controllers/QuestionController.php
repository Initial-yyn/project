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

    }

    //发布问题
    public function push(Request $request){

    }
}
