@extends('layouts.app')

@section('content')
@include('global._tag')
<div class="panel-body">
    <form class="" action="{{ route('transit')}}" method="post">
      {{csrf_field()}}
      <div class="modal-body">
        <div class="">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><strong>问</strong></span>
                <input type="text" class="form-control" placeholder="请输入问题标题" aria-describedby="basic-addon1"  name="question_title">
            </div>
          <textarea name="question_content"></textarea>
           问题分类：
           <input name="type" type="radio" value="1" checked/>&nbsp;type1&nbsp;
           <input name="type" type="radio" value="2" />&nbsp;type2&nbsp;
           <input name="type" type="radio" value="3" />&nbsp;type3
           <input type="hidden" name="name" value="{{ Auth::user()->name }}">
        </div>
      </div>
      <div class="modal-footer">
        <center><button type="submit" class="btn btn-primary btn-lg">确定</button><center/>
      </div>
    </form>
</div>
@endsection
