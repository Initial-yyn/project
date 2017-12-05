@extends('layouts.app')

@section('content')
@include('global._tag')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading btn-sm">
      <h1 class="panel-title btn-sm text-center"></h1>
    </div>
    @foreach($questions as $value)
    <div class="panel-body panel-info text-center" >
        <div class="list-group">
          <li class="list-group-item list-info">
            <h2><strong class="text-info">{{$value->question_title}}</strong></h2>
            <h5><strong class="text-info">editor：{{$value->name}}</strong></h5>
            <h5><strong class="text-info">time：{{$value->updated_at}}</strong></h5>
          </li>

        </div>
        <form class="" action="{{  url( '/question/search',['id'=>$value->id] )}}" method="post">
            {{csrf_field()}}
            <button class="btn btn-success center;block" type="submit">
              查看问题
            </button>
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
