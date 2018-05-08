@extends('layouts.app')

@section('content')
<div class="container">


  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5>新建角色</h5>

        <form class="" action="{{url('admin/roles/store')}}" method="post">
          {{ csrf_field()}}
            @include('auth.roles._createForm')
            <label for="perm">Permissions:
            @foreach($perms as $perm)
              <div class="">
                    <input type="checkbox" name="perm[]" value="{{ $perm->id }}" id="perm">
                    {{ $perm->display_name or $perm->name}}
              </div>
            @endforeach
            </label>



            <div class="">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <button class="btn btn-primary">新建角色</button>
                    </div>
                </div>
            </div>

      </form>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5>新建权限</h5>
            @include('auth.roles._createPermission')
      </div>
    </div>
  </div>
</div>
@endsection
