<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    <title>智能查询</title>

    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.10.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookies.js') }}"></script>
    <script src="{{ asset('js/bootbox.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</head>

<body class="notfound" style="overflow: visible;">
<section>

    <div class="lockedpanel">
        <div class="locked">
            <i class="fa fa-lock"></i>
        </div>
        <div class="logged">
          <div class="alert alert-info" role="alert">
            <h4>QA精灵未搜索到类似问题</h4>
          </div>
        </div>
        <form method="post" action="{{ url('question/publish')}}">
            {{csrf_field()}}
            <input type="hidden" name="name" value="{{$question[0]}}">
            <input type="hidden" name="question_title" value="{{$question[1]}}">
            <input type="hidden" name="question_content" value="{{$question[2]}}">
            <input type="hidden" name="type" value="{{$question[3]}}">
            <button type="submit" class="btn btn-info btn-block">继续提交</button>
            <a href="{{ url('question/index')}}" class="btn btn-info btn-block">放弃提交</a>
        </form>
    </div><!-- lockedpanel -->

</section>


</body>
</html>
