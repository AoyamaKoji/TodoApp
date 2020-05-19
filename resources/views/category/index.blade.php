@extends('layouts.helloapp')

@section('title', 'category.index')
@section('menubar')
  @parent
	Top Page
@endsection

@section('content')

<table class="table table-striped"  border="1" cellspacing="0" cellpadding="5" align="left">

  <thead class="thead-dark">
      <tr>
        <th>項目一覧</th>
        <th></th>
      </tr>
  </thead>
  <tbody>
     @foreach ($items as $item)
    <tr>
				<td><input type="button" class="btn btn-info" name="{{$item->name}}" value="{{$item->name}}" onClick="location.href='/category/{{$item->id}}'">
				    <br>
            <form action="/category/update", method="post">
                @csrf
    				    <input type="hidden" name="id" value="{{$item->id}}" >
    				    <input type="hidden" name="name" id="form{{$item->id}}">
    				    <input type="hidden" value="送信" id="send{{$item->id}}">
           </form>
				</td>
				<td><input type="button" value="編集" onClick="test({{$item->id}})" id="editButton{{$item->id}}"></td>
			</tr>
     @endforeach
  </tbody>
</table>

<body>

  <input type="button" class="btn btn-primary" name="add" value="項目追加" onClick="location.href='/category/add'" autocomplete="off">

  <input type="button" class="btn btn-primary" name="del" value="項目削除" onClick="location.href='/category/del'" autocomplete="off">

  <br>
  <br>

  <input type="button" class="btn btn-danger" name="today" value="今日" onClick="location.href='/category/today'" autocomplete="off">

  <input type="button" class="btn btn-danger" name="week" value="一週間" onClick="location.href='/category/week'" autocomplete="off">



{{--
  <p>
  <input type="button" name="add" value="項目追加" onClick="location.href='/category/add'" >
  </p>
  <input type="button" name="del" value="項目の削除" onClick="location.href='/category/del'">

  <p>
  <input type="button" name="today" value="今日" onClick="location.href='/category/today'">
  <input type="button" name="week" value="一週間" onClick="location.href='/category/week'">
  </p>
--}}
</body>



@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
