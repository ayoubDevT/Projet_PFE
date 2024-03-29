<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="../../../assets/images/favicon-32x32.jpg" />
</head>

<body>

	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					@if (Session::get('lang') == 'en')
					<div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
						<img src="../../../assets/images/404.svg" class="img-fluid mb-2" alt="404">
						<h1 class="font-weight-bold mb-22 mt-2 tx-80 text-muted text-center">Page Under Construction
						</h1>

						<h6 class="text-muted mb-3 text-center">Oopps!! The page you were looking for is under
							construction.</h6>	
						<a href="{{ URL::previous() }}" class="btn btn-primary">Back to previous page</a>
					</div>
					@endif

					@if (Session::get('lang') == 'de')
					<div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
						<img src="../../../assets/images/404.svg" class="img-fluid mb-2" alt="404">
						<h1 class="font-weight-bold mb-22 mt-2 tx-80 text-muted text-center">Seite im Aufbau
						</h1>

						<h6 class="text-muted mb-3 text-center">Hoppla!!! Die Seite, die Sie suchen, wird gerade
							Aufbau.</h6>
						<a href="{{ URL::previous() }}" class="btn btn-primary">Zurück zur vorherigen Seite</a>
					</div>
					@endif

					@if (Session::get('lang') == 'fr')
					<div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
						<img src="../../../assets/images/404.svg" class="img-fluid mb-2" alt="404">
						<h1 class="font-weight-bold mb-22 mt-2 tx-80 text-muted text-center">Page en construction
						</h1>

						<h6 class="text-muted mb-3 text-center">Oopps ! La page que vous cherchiez est en cours de
							construction.</h6>
						<a href="{{ URL::previous() }}" class="btn btn-primary">Retour à la page précédente</a>
					</div>
					@endif
					
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="../../../assets/vendors/core/core.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../assets/js/template.js"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>

</html>