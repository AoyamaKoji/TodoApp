@extends('layouts.helloapp')

@section('title', 'Task.index')
@section('menubar')
  @parent
  タスク・ページ
@endsection


@section('content')
    <form action = "/task/remove" method="post">
    <table class="table table-striped">
    @csrf
    <tr class="table-success">
        <th><a href="/category/{{$cid}}?sort=deadline">期限</a></th>
{{-- 編集画面に移動したい --}}
        <th>ToDo</a></th>
        <th>詳細</th>
        <th><a href="/category/{{$cid}}?sort=priority_number">優先度</a></th>
        <th>category_id</th>
        <th></th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->deadline}}</td>
            <td><a href="/task/edit/?id={{$item->id}}">{{$item->title}}</td>
            <td>{{$item->message}}</td>
            <td>{{$item->priority_number}}</td>
            <td>{{$item->category_id}}</td>
            <td><input type="checkbox" name="complete[]" value="{{$item->id}}"></td>
        </tr>
    @endforeach
    </table>

    <input type="hidden" name="category_id" value="{{$cid}}">
    <input type="submit" value="complete">
    </form>



    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($error->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    <br>
    <form action="/task/create" method="post">
    <table>
        @csrf
        <tr><th></th><td><input type="hidden" name="category_id" value="{{$cid}}"</td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">title:</span> </th>
          <td><input type="text" class="shadow" name="title" value="{{old('title')}}"></td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">message:</span> </th>
          <td><input type="text" class="shadow" name="message" value="{{old('message')}}"></td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">priority_number:</span> </th>
          <td><input type="number" class="shadow" name="priority_number" value="{{old('priority_number')}}"></td></tr>
        <tr><th><span class="badge badge-pill badge-secondary">deadline:</span> </th>
          <td><input type="datetime" class="shadow" name="deadline" value="{{old('deadline')}}"></td></tr>
        <tr><th></th>
          <td><input type="submit" class="shadow" value="send"></td></tr>
    </table>

@endsection




@section('footer')
copyright 2020 tuyano.
@endsection
