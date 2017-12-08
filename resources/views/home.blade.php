@extends('layouts.app')

@section('content')
                @include('global._tag')
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                      <!-- 16:9 aspect ratio -->
                      <div class="embed-responsive embed-responsive-16by9">
                        <center><video src="{{asset('video/1.mp4')}}" controls="controls" preload="auto" ></video></center>
                      </div>
                    </div>
                </div>
@endsection
