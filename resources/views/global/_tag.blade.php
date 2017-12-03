<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <!-- Single button -->
                  <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="{{($_SERVER['REQUEST_URI']=='/home')? 'active' : ''}}"><a href="{{route('home')}}">主页</a></li>
                    <li role="presentation" class="{{($_SERVER['REQUEST_URI']=='/question/index')? 'active' : ''}}"><a href="{{route('index')}}">查看问题</a></li>
                    <li role="presentation" class="{{($_SERVER['REQUEST_URI']=='/question/editor')? 'active' : ''}}"><a href="{{route('editor')}}">发布问题</a></li>
                  </ul>
                  @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
