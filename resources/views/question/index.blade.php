@extends('layouts.app')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading btn-sm">
    <h1 class="panel-title btn-sm text-center"></h1>
  </div>
  @foreach($questions as $value)
  <div class="panel-body panel-info text-center" >
    <div class="pull-left center-block">
        <strong class="">{{$value->question_title}}</strong>
    </div>
    <form class="" action="" method="post">
      {{csrf_field()}}
      <button class="btn btn-primary btn-sm pull-left" type="submit" style="margin-left: 20px;">
        评论
      <span class="badge"></span>
      </button>
    </form>
    <a href="{{url('/home')}}">
    <button class="btn btn-primary btn-sm pull-right" type="submit" style="margin-left: 20px;">
    返回主页
    </button>
    </a>
    <form class="" action="" method="post">
      {{csrf_field()}}
      <button class="btn btn-success btn-sm pull-right" type="submit" style="margin-left: 20px;">
      点赞
      <span class="badge"></span>
      </button>
    </form>
  </div>
</div>
@endforeach
<ul class="pagination">
  {{ $questions->links() }}
</ul>
    <div class="panel-body panel-info center-block">

    </div>
  <div class="row col-md-offset-4">
    <a href="{{url('/home')}}">
    <button class="btn btn-primary" type="submit">
    返回主页
    </button>
    </a>
  </div>
@endsection
