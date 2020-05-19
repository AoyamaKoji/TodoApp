@extends('layouts.helloapp')

@section('title', 'Task.index')
@section('menubar')
  @parent
  タスク・ページ
@endsection


@section('content')
    <form action = "/task/remove" method="post">
    <table>
    @csrf
    <tr>
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


  {{--  {{$items->appends(['sort' => $sort])->links()}} --}}


    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($error->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/task/create" method="post">
    <table>
        @csrf
        <tr><th></th><td><input type="hidden" name="category_id" value="{{$cid}}"</td></tr>
        <tr><th>title: </th><td><input type="text" name="title" value="{{old('title')}}"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
        <tr><th>priority_number: </th><td><input type="number" name="priority_number" value="{{old('priority_number')}}"></td></tr>
        <tr><th>deadline: </th><td><input type="datetime" name="deadline" value="{{old('deadline')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>

@endsection




@section('footer')
copyright 2020 tuyano.
@endsection
