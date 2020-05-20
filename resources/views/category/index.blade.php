@extends('layouts.helloapp')

@section('title', 'category.index')
@section('menubar')
  @parent
	Top Page
@endsection

@section('content')
<div class="content">
<ul>
  @foreach ($items as $item)
  <li>
    <div class="category">
      <input type="button" class="btn-lg btn-block btn-info" name="{{$item->name}}" value="{{$item->name}}" onClick="location.href='/category/{{$item->id}}'">
      <input type="button" value="編集" onClick="test({{$item->id}})" id="editButton{{$item->id}}">
      <form action="/category/update", method="post">
        @csrf
        <input type="hidden" name="id" value="{{$item->id}}" >
        <input type="hidden" name="name" id="form{{$item->id}}">
        <input type="hidden" value="名前変更" id="send{{$item->id}}">
      </form>
    </div>
  </li>
  @endforeach
  
  <br>
  <li>
    <div class="category">
      <input type="button" class="btn-lg btn-success" name="today" value="今日" onClick="location.href='/category/today'" autocomplete="off">
    </div>
  </li>
  <li>
    <div class="category">
     <input type="button" class="btn-lg btn-success" name="week" value="一週間" onClick="location.href='/category/week'" autocomplete="off">  
   </div>
  </li>
</ul>

<input type="button" class="btn-lg btn-primary" name="add" value="項目追加" onClick="location.href='/category/add'" autocomplete="off">
<input type="button" class="btn-lg btn-danger" name="del" value="項目削除" onClick="location.href='/category/del'" autocomplete="off">
</div>


@endsection

@section('footer')
copyright 2020 GroupA.
@endsection

