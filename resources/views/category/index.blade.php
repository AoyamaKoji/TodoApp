@extends('layouts.helloapp')

@section('title', 'category.index')
@section('menubar')
  @parent
	Top Page
@endsection

@section('content')
<form>
	<table border="1" cellspacing="0" cellpadding="5" align="left">
                <thead>
                    <tr>
                        <th>項目一覧</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td> {{ $item->name }} </td>
						</tr>
                    @endforeach
                </tbody>
    </table>
	
	
	
   <p>
   <input type="button" name="add" value="項目追加" onClick="location.href='/category/add'" >
   </p>
   <input type="button" name="del" value="項目の削除" onClick="location.href='/category/del'">
   <p>
   
   </p>
   <p>
	<input type="button" name="edit" value="項目の名前変更" onClick="location.href='/category/edit'">
   </p>
   
   <p>
   <input type="button" name="today" value="今日" onClick="">
   <input type="button" name="week" value="一週間" onClick="">
   </p>
  
</form>
   
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
