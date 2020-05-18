@extends('layouts.helloapp')

@section('title', 'category.edit')
@section('menubar')
  @parent
	編集 Page
@endsection

@section('content')
   <form method="POST" action="/category/edit">
	@csrf
   <table border="1" cellspacing="0" cellpadding="5" align="left">
                <thead>
                    <tr>
                        <th>カテゴリー</th><th>選択<th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
							<input type="hidden" name="id[]">
							<td><input type="text" name="{{$item->name}}" value="{{ $item->name }}"></td>
							<td><input type="button" value="編集">
                        </tr>
                    @endforeach
                </tbody>
    </table>
	<input type="button" name="renew" value="更新">
	</form>
   
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
