<!-- Button trigger modal -->
<button type="button" class="btn btn-sm pull-right" data-toggle="modal" data-target="#editRoleModal-{{ $perm->id }}">
  编辑
</button>

<!-- Modal -->
<div class="modal fade" id="editRoleModal-{{ $perm->id }}" tabindex="-1" role="dialog" aria-labelledby="editRoleModal-{{ $perm->id }}-Label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editRoleModal-{{ $perm->id }}-Label"></h4>
      </div>
      <div class="modal-body">

        <form class="" action="{{ url('admin/permissions/update',['id'=>$perm->id])  }}" method="post">
          {{ csrf_field()}}

          <label for="name" class="">Permission:
                  <div class="">
                    <input id="name" type="text" name="name">
                  </div>
          </label>


          <label for="display_name" class="">Display_name:
                  <div class="">
                    <input id="display_name" type="text" name="display_name" >
                  </div>
          </label>


          <label for="description" class="">Description:
                  <div class="">
                    <input id="description" type="text" name="description">
                  </div>
          </label>


        <div class="modal-footer">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
       </div>
      </form>
  </div>

    </div>
  </div>
</div>
