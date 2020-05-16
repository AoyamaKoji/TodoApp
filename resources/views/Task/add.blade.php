@extends('layouts.helloapp')

@section('title', 'Task.Add')
@section('menubar')
  @parent
  追加ページ
@endsection

@section('content')
   <form action="/task/add" method="post">
   <table>
        @csrf
        <tr><th>category_id: </th><td><input type="number" name="category_id"></td></tr>
        <tr><th>deadline: </th><td><input type="text" name="deadline"></td></tr>
        <tr><th>title: </th><td><input type="text" name="title"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message"></td></tr>
        <tr><th>priority_number: </th><td><input type="number" name="priority_number"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
