@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div>
                    <h3>{{ Auth::user()->name }}のタスクページ</h3>
                </div>
                <div>
                    {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-success']) !!}
                </div>    
                
            </aside>
            <div class="col-sm-8">
                @if (count($tasks) > 0)
                    @include('tasks.index', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TASK List!</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-primary btn-lg']) !!}
            </div>
        </div>
    @endif

@endsection