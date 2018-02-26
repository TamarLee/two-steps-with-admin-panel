<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/brand2.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/bpg-nino-mtavruli-bold.min.css">
	<title>ორი ნაბიჯი</title>
</head>
<body>
	<header class="white">
		<nav class="navbar navbar-toggleable-md navbar-light">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="index.html">
				<img src="img/brand.png" class="nav-logo">
			</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					@foreach($menus as $menu)
					<li class="nav-item active">
						<a class="nav-link" href="{{ $menu->link }}">{{ $menu->title }}</a>
					</li>
					@endforeach
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-search"></i></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- carousel -->

	@yield('content')


	<!-- footer -->
	<div class="whii">
		<div class="container">
			<div class="gray">
				<small class="float-left">ყველა უფლება დაცულია &copy; 2017 <a href="#"> ორი ნაბიჯი</a></small>
				<img src="img/brand2.png" class="ctr">
				<small class="float-right">Front-end: თემო ჩხაიძე; Back-end: თამარ მეხრიშვილი;</small>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>