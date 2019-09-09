<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lập trình @yield('title')</title>
	<link rel="stylesheet" href="{{asset('public/css/mystyle.css',false)}}">
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="wraper">
				@include('views.marquee',['content'=>'Khoas hoc lap trinh laravel'])
				<div id="header">
					@section('sidebar')
					Day la menu
					@show
				</div>
				<div id="content">
					@yield('noidung')
				</div>
				<div id="footer">

				</div>
			</div>
		</div>
	</div>
</body>
</html>
