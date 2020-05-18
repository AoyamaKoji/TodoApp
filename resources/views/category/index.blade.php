@extends('layouts.helloapp')

@section('title', 'category.index')
@section('menubar')
  @parent
	Top Page
@endsection

@section('content')
<form>
<<<<<<< HEAD
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
	
	
	
=======
   <table>
   <tr><th>項目一覧</th></tr>
   @foreach ($items as $item)
		<tr>
			<td><input type="button" name="{{$item->name}}" value="{{$item->name}}" onClick="#"></td>
		</tr>
   @endforeach
   </table>
>>>>>>> 40eadd29d29a1fe212f8099e6ef57dc8a3d6e63b
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
<<<<<<< HEAD
   </p>
  
</form>
   
=======
   
   <p>項目変更欄</p>
   <input type="button" name="edit" value="項目の名前変更" onClick="">
   
--}}
   </form>
>>>>>>> 40eadd29d29a1fe212f8099e6ef57dc8a3d6e63b
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
