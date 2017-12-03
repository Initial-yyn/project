@extends('layouts.app')

@section('content')
                @include('global._tag')
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"><strong>Hello World!</strong></p>
                    <p class="text-center"><strong>This is a Micro Intelligent Question Answering System!</strong></p>
                </div>

@endsection
