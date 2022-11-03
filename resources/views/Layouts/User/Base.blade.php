<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico" type="image/x-icon"/>

	@include('Layouts.User.Styles')

<body>
	<div class="wrapper">
		@include('Layouts.User.Navbar')
		@yield('content')
		<footer class="footer">
			<div class="container">
				<div class="copyright ml-auto">
					2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com/">Paertecode</a>
				</div>				
			</div>
		</footer>
	</div>
	@include('Layouts.User.Scripts')
</body>

</html>