@extends('layouts.app')

@section('content')

   <h1>{{ $task->id }} 件目のタスク編集ページ</h1>
   
      <div class="row">
         <div class="col-sm">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
            
               <div class="form-group col-3">
                  {!! Form::label('status', 'ステータス:') !!}
                  {!! Form::input('text', 'status', null, ['class' => 'form-control']) !!}
               </div>

               <div class="form-group col-6">
                  {!! Form::label('content', 'タスク内容:') !!}
                  {!! Form::text('content', null, ['class' => 'form-control']) !!}
               </div>
               <div class="form-group col-2">
                  {!! Form::submit('更新', ['class' => 'btn btn-success']) !!}
               </div>
               
            {!! Form::close() !!}
         </div>
      </div>

@endsection