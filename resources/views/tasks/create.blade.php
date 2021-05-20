@extends('layouts.app')

@section('content')
  <h1>タスクの追加</h1>
  <div class="row">
    <div class="col-6">
      {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
          {!! Form::label('content', 'タスク内容: ') !!}
          {!! Form::text('content', null, [
            'class' => 'form-control',
            'maxlength' => 255,
            'required'
          ]) !!}
        </div>
        <div class="form-group">
          {!! Form::label('status', 'ステータス: ') !!}
          {!! Form::text('status', null, [
            'class' => 'form-control',
            'maxlength' => 10,
            'required'
          ]) !!}
        </div>
        {!! Form::submit('タスクを追加', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
