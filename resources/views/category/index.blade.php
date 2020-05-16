@extends('layouts.helloapp')

@section('title', 'category.index')
@section('menubar')
  @parent
	カテゴリー・ページ
@endsection

@section('content')
   <table>
   <tr><th>Data</th></tr>
   @foreach ($items as $item)
      <tr>
           <td>{{$item->getData()}}</td>
      </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
