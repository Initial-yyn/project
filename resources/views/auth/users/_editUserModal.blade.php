<!-- Button trigger modal -->
<button type="button" class="btn btn-sm pull-right" data-toggle="modal" data-target="#editUserModal-{{ $user->id }}">
  编辑
</button>

<!-- Modal -->
<div class="modal fade" id="editUserModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModal-{{ $user->id }}-Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editUserModal-{{ $user->id }}-Label">Modal title</h4>
      </div>
      <div class="modal-body">

        <form class="" action="{{url('admin/users/update',['id'=>$user->id])}}" method="post">
          {{csrf_field()}}

          <div class="checkbox">
              @foreach($roles as $role)
            <label for="role" style="margin-right: 20px;padding-left: 20px;">
              <input type="checkbox" name="role[]" value="{{ $role->id }}" id="role" style="margin-top: 2px;"  {{ $role->is_admin($user)}} >
                {{ $role->display_name or $role->name}}
              </label>
              @endforeach
          </div>

          <div class="modal-footer">
            <div class="form-group">
              <button type="submit" name="button">编辑用户</button>
            </div>
          </div>
        </form>

    </div>
  </div>
</div>
