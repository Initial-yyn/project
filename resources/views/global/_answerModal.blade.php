<!-- Modal -->
<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="answerModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="answerModalLabel">回答框</h4>
      </div>
      <form class="" action="{{  route('store')}}" method="post">
        {{csrf_field()}}
        <div class="modal-body">
          <div class="">
            <textarea name="answer"></textarea>
          </div>
          <input type="hidden" name="article_id" id="article_id" value="{{$question->id}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="submit" class="btn btn-primary">确定</button>
        </div>
      </form>
    </div>
  </div>
</div>
