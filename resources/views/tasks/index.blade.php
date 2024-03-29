@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1>{{ $user->name }}さんのタスク一覧</h1>
    </div>
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{ $tasks->links('pagination::bootstrap-4') }}　
    
    {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-success']) !!}
    
@endsection