@extends('layouts.helloapp')

@section('title', 'category_add.index')
@section('menubar')
  @parent
	項目追加Page
@endsection

@section('content')

   <table class="table table-striped"  border="1" cellspacing="0" cellpadding="5" align="left">
   <thead class="thead-dark">
       <tr>
          <th>項目一覧</th>
          <th></th>
        </tr>
   </thead>
{{--   <tr><th>項目一覧</th></tr>    --}}
   @foreach ($items as $item)

    <tr>
		<td><input type="button" class="btn btn-info" value="{{$item->name}}" onClick="#"></td>
    </tr>
   @endforeach
   </table>

   @if(count($errors) > 0)
		<div>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/category/add", method="post">
   <p>
		@csrf
		<input type="text" name="name" value="{{old('name')}}">
		<input type="submit" value="追加">
   </p>

@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
