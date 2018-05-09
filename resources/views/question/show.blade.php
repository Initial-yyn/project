@extends('layouts.app')

@section('content')
@include('global._tag')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading text-center ">
      @include('global._messages')
      <h1 class="text-info"><strong>{{$question->question_title}}</strong></h1>
      <h4 class="text-info"><strong>Author ：{{$question->name}}</strong></h4>
      <h5 class="text-info"><strong>Time ：{{$question->updated_at}}</strong></h5>
    </div>
    <div class="panel-body">
      {{$question->question_content}}
    </div>
    @foreach($answers as $answer)
    <ul class="list-group">
      <li class="list-group-item">
        <p class="text-center">{{$answer->answer}}</p>
        <p class="text-right text-success">{{$answer->name}}</p>
        <p class="text-right text-success">{{$answer->role}}</p>
        <p class="text-right text-success">{{$answer->created_at}}</p>
      </li>
    </ul>
    @endforeach
    <div class="panel-footer">
            <!-- Button trigger modal -->
      <center>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#answerModal">
          回答问题
        </button>
      </center>
      @include('global._answerModal')
    </div>
  </div>
</div>
@endsection
