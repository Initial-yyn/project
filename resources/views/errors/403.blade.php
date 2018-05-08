<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    <title>403 Errors</title>

    <link href="{{ asset('css/style.default.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
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

<!-- Preloader -->
<!-- <div id="preloader" style="display: none;">
    <div id="status" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>
</div> -->

<section>

    <div class="lockedpanel">
        <div class="locked">
            <i class="fa fa-lock"></i>
        </div>
        <div class="logged">
          <div class="alert alert-info" role="alert">
            <h4>你没有权限执行此操作</h4>
            <middle class="text-muted">You do not have permission to perform this operation </middle>
          </div>
        </div>
        <form method="post" action="#">
            <a href="{{ url('/home') }}" class="btn btn-info btn-block">点击返回</a>
        </form>
    </div><!-- lockedpanel -->

</section>


</body>
</html>
