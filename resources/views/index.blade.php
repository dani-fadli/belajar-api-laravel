<!DOCTYPE html>
<html>
<head>
	<title>Ini Index</title>

	<!-- Core Bootstrap 4.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="#">Features</a>
			      <a class="nav-item nav-link" href="#">Pricing</a>
			      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			    </div>
			  </div>
			</nav>
		</div>
	</div>
	<div class="row bg-light">
		<div class="col-md-12 p-0">
			<h2 class="text-center">Get JSON using Laravel</h2>
		</div>
	</div>

	<!-- Cards -->
	<div class="container">
		<div class="row">
			@foreach($orang as $o)
				<div class="col-md-4 mt-2">
					<div class="card" style="max-width: 100%;min-height: 10rem;">
					  <div class="card-header">
					  	{{$o->nama}}
					  </div>
					  <ul class="list-group list-group-flush" style="font-size: 12pt">
					    <li class="list-group-item">{{$o->alamat}}</li>
					  </ul>
					</div>
				</div>
			@endforeach
		</div>
	</div>

	<div class="row pt-4 bg-light">
		<div class="container">
			<div class="col-md-4">
				<div class="row">
					
					<div class="col-md-4">
						<img src='{{($data{"snippet"}{"thumbnails"}{"default"}{"url"})}}' style="width: 100px" class="rounded-circle img-fluid">
					</div>
					<div class="col-md-8">
						<h5>
							{{($data{'snippet'}{'title'})}}
						</h5>
						<p>{{($data{'statistics'}{'subscriberCount'})}} Subscribers</p>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src='https://www.youtube.com/embed/asdf' class="embed-responsive-item" 
							allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






</body>

<!-- Core Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>