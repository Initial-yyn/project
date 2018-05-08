@extends('layouts.app')

@section('content')
<div class="container" style="width: 430px;">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">功能列表</h3>
    </div>
    <div class="panel-body">
      <ul class="fa-ul">
        @foreach($perms as $perm)
        <li style="padding-bottom: 10px;">
          <i class="fa-li fa fa-tag"></i>

            @include('auth.permissions._deleteForm')

            @include('auth.permissions._editPermissionModel')

            {{ $perm->display_name or $perm->name}}&nbsp;&nbsp;:&nbsp;&nbsp;{{ $perm->description}}
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
