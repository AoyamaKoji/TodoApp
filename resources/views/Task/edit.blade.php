@extends('layouts.helloapp')

@section('title', 'Task.edit')
@section('menubar')
  @parent
  タスク編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($error->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/task/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th></th><td><input type="hidden" name="category_id" value="{{$form->category_id}}"</td></tr>
        <tr><th>title: </th><td><input type="text" name="title" value="{{$form->title}}"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message" value="{{$form->message}}"></td></tr>
        <tr><th>priority_number: </th><td><input type="number" name="priority_number" value="{{$form->priority_number}}"></td></tr>
        <tr><th>deadline: </th><td><input type="datetime" name="deadline" value="{{$form->deadline}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
    
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
