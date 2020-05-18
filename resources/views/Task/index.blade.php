@extends('layouts.helloapp')

@section('title', 'Task.index')
@section('menubar')
  @parent
  タスク・ページ
@endsection


@section('content')
<p>{{$id}}</p>

    <table>
    <tr>
        <th><a href="/task?sort=deadline">期限</a></th>
        //編集画面に移動したい
        <th><a href="/task/edit">ToDo</a></th>
        <th>詳細</th>
        <th><a href="/task?sort=priority">優先度</a></th>
        <th>category_id</th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->deadline}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->message}}</td>
            <td>{{$item->priority_number}}</td>
            <td>{{$item->category_id}}</td>
        </tr>
    @endforeach
    </table>
    {{--
        {{$items->appends(['sort' => $sort])->links()}}
        --}}
    
@endsection




@section('footer')
copyright 2020 tuyano.
@endsection
