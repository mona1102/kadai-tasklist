@extends('layouts.app')

@section('content')

   <h1>{{ $task->id }} 件目のタスク詳細ページ</h1>
   
   <table class="table table-bordered">
      <tr>
         <th>id</th>
         <td>{{ $task->id }}</td>
      </tr>
      <tr>
         <th>ステータス</th>
         <td>{{ $task->status }}</td>
      </tr>
      <tr>
         <th>タスク内容</th>
         <th>{{ $task->content }}</th>
      </tr>
   </table>
    
      {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-light'])!!}
   
   @if (Auth::id() == $task->user_id)
      {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
         {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}
   @endif
@endsection