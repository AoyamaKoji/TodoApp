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
    <a href="/category/{{$form->category_id}}">戻る</a>
    <form action="/task/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th></th><td><input type="hidden" name="category_id" value="{{$form->category_id}}"</td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">title:</span> </th>
          <td><input type="text" class="shadow" name="title" value="{{$form->title}}"></td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">message:</span> </th>
          <td><input type="text" class="shadow" name="message" value="{{$form->message}}"></td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">priority_number:</span> </th>
          <td><input type="number" class="shadow" name="priority_number" value="{{$form->priority_number}}"></td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">deadline:</span>  </th>
          <td><input type="datetime" class="shadow" name="deadline" value="{{$form->deadline}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
