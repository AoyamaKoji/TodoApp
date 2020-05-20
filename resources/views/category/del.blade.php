@extends('layouts.helloapp')

@section('title', 'category.delete')
@section('menubar')
  @parent
	削除 Page
@endsection

@section('content')
  <style>
    p{
      color:black;
    }
  </style>
  <p>項目一覧</p>
  <form method="POST" action="/category/del">
      @csrf
      <table class="table table-striped" border="1" cellspacing="0" cellpadding="5" align="left">
         <thead class="thead-dark">
            <tr>
                <th>選択</th><th>カテゴリー</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($items as $item)
            <tr>
                <td><input type="checkbox" name="del[]" value="{{ $item->id }}"></td>
                <td class="btn btn-info">{{ $item->name }}</td>
            </tr>
            @endforeach
          </tbody>
     </table>
     <br>
     <input type="submit" value="選択した項目を削除">
  </form>

{{--
   <form action="/category/del" method="post">
   @csrf
   @foreach ($items as $item)
		<ul>
			<li>{{$item->name}}<a href="/category/del?id={{ $item->id }}">削除</a></li>

		</ul>
   @endforeach
   </form>
--}}


@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
