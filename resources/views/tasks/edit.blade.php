@extends('layouts.app')

@section('content')
  <h1>タスクID {{ $task->id }} のタスクの編集</h1>
  <div class="row">
    <div class="col-6">
      {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
          {!! Form::label('content', 'タスク内容') !!}
          {!! Form::text('content', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'required'
          ]) !!}
        </div>
        <div class="form-group">
          {!! Form::label('status', 'ステータス') !!}
          {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('更新', [
          'class' => 'btn btn-primary',
          'maxlength' => 10,
          'required'
        ]) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
