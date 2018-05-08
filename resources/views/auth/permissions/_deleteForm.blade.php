<form class="" action="{{url('admin/permissions/destroy',['id'=>$perm->id])}}" method="post">
    {{ csrf_field()}}
  <button type="submit" name="button" class="btn btn-sm btn-primary pull-right">删除
  </button>
</form>
