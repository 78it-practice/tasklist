@extends('layouts.app')

@section('content')
  <h1>タスクID {{ $task->id }} のタスク詳細</h1>
  <table class="table table-bordered">
    <tr>
      <th>タスクID</th>
      <td>{{ $task->id }}</td>
    </tr>
    <tr>
      <th>タスク内容</th>
      <td>{{ $task->content }}</td>
    </tr>
    <tr>
      <th>ステータス</th>
      <td>{{ $task->status }}</td>
    </tr>
  </table>
  {!! link_to_route('tasks.edit', 'タスクの編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
  {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('タスクを削除', ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}
@endsection
