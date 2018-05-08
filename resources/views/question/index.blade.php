@extends('layouts.app')

@section('content')
@include('global._tag')
<div class="container">
    <ul class="nav nav-pills">
        <li role="presentation" class="{{(preg_match('/type=1/',$_SERVER['REQUEST_URI']))? 'active' : ''}}"><a href="index?type=1">type1</a></li>
        <li role="presentation" class="{{(preg_match('/type=2/',$_SERVER['REQUEST_URI']))? 'active' : ''}}"><a href="index?type=2">type2</a></li>
        <li role="presentation" class="{{(preg_match('/type=3/',$_SERVER['REQUEST_URI']))? 'active' : ''}}"><a href="index?type=3">type3</a></li>
    </ul>
  <div class="panel panel-default">
    <div class="panel-heading btn-sm">
      <h1 class="panel-title btn-sm text-center"></h1>
    </div>
    @foreach($questions as $question)
    <div class="panel-body panel-info text-center" >
        <div class="list-group">
          <li class="list-group-item list-info">
            <h2><strong class="text-info">{{$question->question_title}}</strong></h2>
            <h5><strong class="text-info">Author ：{{$question->name}}</strong></h5>
            <h5><strong class="text-info">Time ：{{$question->updated_at}}</strong></h5>
          </li>

        </div>
        <form class="" action="{{ route('show')}}" method="get">
            {{csrf_field()}}
            <button class="btn btn-success center;block" type="submit">
              查看问题
            </button>
            <input type="hidden" name="id" id="id" value="{{$question->id}}">
        </form>
    </div>
    @endforeach
  </div>
      <div class="panel-button panel-default">
          <center>
            {{ $questions->links() }}
          </center>
          <center>
            <a href="{{route('home')}}">
              <button class="btn btn-primary btn-bg" type="submit">
               返回主页
              </button>
            </a>
         </center>
      </div>
  </div>
</div>
@endsection
