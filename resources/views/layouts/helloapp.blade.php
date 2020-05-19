<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style>
		.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
		body{font-size:20px; color:#999; margin:5px;}

	</style>
	<script type="text/javascript" src="js/category.js"></script>
	<title>仮レイアウト</title>


</head>



<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="navbar-nav">
			<a class="nav-item nav-link active" href="">Todoアプリ</a>
			<a class="nav-item nav-link" href="category/1">学業</a>
			<a class="nav-item nav-link" href="category/2">バイト</a>
			<a class="nav-item nav-link" href="category/3">遊び</a>
			<a class="nav-item nav-link" href="category/4">その他</a>
		</div>
	</nav>


	<hr size="10">
	<div class="content">
		@yield('content')
	</div>
</body>


<!-- <h1>@yield('title')</h1>
@section('menubar')
<h2 class="menutitle">
	※メニュー
</h2> -->
<!-- <ul>
	<li>@show</li>
</ul>
<hr size="1">
<div class="content">
@yield('content')
</div> -->


</html>
