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
                      <center><video src="{{asset('video/1.mp4')}}" controls="controls" preload="auto" ></video></center>
                    </div>
                </div>
@endsection
