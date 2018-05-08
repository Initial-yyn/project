<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="margin-bottom: 0px;">
                <div class="panel-heading">
                  <!-- Single button -->
                  <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="{{(preg_match("/home\S*/",$_SERVER['REQUEST_URI'])==1)? 'active' : ''}}"><a href="{{route('home')}}">主页</a></li>
                    <li role="presentation" class="{{(preg_match("/index\S*/",$_SERVER['REQUEST_URI'])==1)? 'active' : ''}}"><a href="{{route('index')}}">查看问题</a></li>
                    <li role="presentation" class="{{(preg_match("/editor\S*/",$_SERVER['REQUEST_URI'])==1)? 'active' : ''}}"><a href="{{route('editor')}}">发布问题</a></li>
                  </ul>
                  @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
