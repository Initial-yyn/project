<form class="" action="{{url('admin/permissions/store')}}" method="post">

  {{ csrf_field()}}
      <label for="name" class="">Permission:
              <div class="">
                <input id="name" type="text" name="name" placeholder="">
              </div>
      </label>
      <label for="display_name" class="">Display_name:
              <div class="">
                <input id="display_name" type="text" name="display_name" placeholder="">
              </div>
      </label>
      <label for="description" class="">Description:
              <div class="">
                <input id="description" type="text" name="description" placeholder="">
              </div>
      </label>

      <div class="">
          <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                  <button class="btn btn-primary">新建权限</button>
              </div>
          </div>
      </div><!-- panel-footer -->
</form>
