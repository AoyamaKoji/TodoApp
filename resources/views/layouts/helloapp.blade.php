<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style>
		.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
		body{font-size:20px; color:#999; margin:5px;}
		.content{margin:0px 65px; text-align:center;}
		
	</style>
	<script type="text/javascript" src="js/category.js"></script>
	<title>仮レイアウト</title>


</head>



<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="navbar-nav">
			<a type="button" class="nav-item nav-link active" onClick="location.href='/category'">Todoアプリ</a>
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
