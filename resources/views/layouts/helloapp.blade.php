<html>
<head>
	<style>
		.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
		body{font-size:16px; color:#999; margin:5px;}
		h1{font-size:50px; text-align:right; color:#f6f6f6;}
		ul{font-size:12px;}
		.menutitle{font-size:14px; font-weight:bold;}
		hr{margin:25px 100px; border-top:1px dashed #ddd;}
		.content{margin:10px}
		th{background-color:#999; color:#fff; padding:5px 10px;}
		td{border:solod 1px #aaa; color:#999; padding:5px 10px;}
	</style>	
	<title>仮トップページ</title>
</head>

<body>
	<h1>@yield('title')</h1>
	@section('menubar')
	<h2 class="menutitle">
		※メニュー
	</h2>
	<ul>
		<li>@show</li>
	</ul>
	<hr size="1">
	<div class="content">
	@yield('content')
	</div>
	
	<div class="footer">
	@yield('footer')
	</div>
</body>

</html>