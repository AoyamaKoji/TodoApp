@extends('layouts.helloapp')

@section('title', 'category.index')
@section('menubar')
  @parent
	Top Page
@endsection

@section('content')
   <table>
   <tr><th>項目一覧</th></tr>
   @foreach ($items as $item)
		<tr>
			<td><input type="button" name="{{$item->name}}" value="{{$item->name}}" onClick="#"></td>
		</tr>
   @endforeach
   </table>
   <p>
   <input type="button" name="add" value="項目追加" onClick="location.href='/category/add'" >
   </p>
   <input type="button" name="del" value="項目の削除" onClick="location.href='/category/del'">
   <p>
   
   </p>
   <p>
	<input type="button" name="edit" value="項目の名前変更" onClick="#"
   </p>
   
{{--
   
   <p>ソートして表示</p>
   
   <input type="button" name="today" value="今日" onClick="">
   <input type="button" name="week" value="一週間" onClick="">
   
   <p>項目変更欄</p>
   <input type="button" name="edit" value="項目の名前変更" onClick="">
   
--}}
  
   
   
   
   </form>
   
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
