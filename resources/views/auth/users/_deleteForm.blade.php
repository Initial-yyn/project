<form class="" action="{{url('admin/users/destroy',['id'=>$user->id])}}" method="post">
    {{ csrf_field()}}
  <button type="submit" name="button" class="btn btn-sm btn-primary pull-right">
    <span>删除</span>
  </button>
</form>
