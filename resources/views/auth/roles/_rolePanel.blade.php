@foreach($roles as $role)
<div class="col-md-4">

      <div class="panel {{$role->name=='admin'?'panel-success':'panel-default'}}">
          <div class="panel-heading">
            <div class="pull-left">
              <i class="fa fa-btn fa-user"></i>
              {{ $role->name or $role->display_name}}
            </div>

            @ability('admin','delete_role')
              @include('auth.roles._deleteForm')
            @endability

            @ability('admin','edit_role')
              @include('auth.roles._editRoleModal')
            @endability

            <div class="clearfix"></div>
          </div>

          <div class="panel-body">
            <ul class="fa-ul">
              @foreach($role->perms as $perm)
              <li>
                <i class="fa-li fa fa-tag"></i>
              {{ $perm->display_name or $perm->name}}
              </li>
              @endforeach
            </ul>
          </div>

          @if($role->description)
            <div class="panel-footer">
              {{ $role->description }}
            </div>
          @endif
        </div>
</div>
@endforeach
