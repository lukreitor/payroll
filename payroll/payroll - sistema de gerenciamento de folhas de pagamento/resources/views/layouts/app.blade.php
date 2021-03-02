<!--https://codepen.io/Thiru/pen/bmxvZK -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Lucas Martins da Silva Sena" />
	<meta http-equiv="content-language" content="pt-br, en-US" />

	<meta name="copyright" content="@LucasMartins" />
	<meta name="description" content="Página Desenvolvida por Lucas Martins" />
	<meta name="keywords" content="Pagamentos, payroll" />
	<meta http-equiv="refresh" content="2000" />
	<meta name="generator" content="PhpStorm" />
	<meta name="rating" content="general" />

	<!--<title>{{ config('app.name', 'Payroll') }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" defer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
	-->

	<!-- Normalize-->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />

	<!-- Bootstrap -->
	<link href="{{ ('css/app.css') }}" rel="stylesheet">


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


	<title>Payroll - Suas Contas Descomplicadas</title>

	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	

	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			/*background: rgb(7,6,97);
			background: linear-gradient(166deg, rgba(7,6,97,1) 0%, rgba(11,11,175,1) 0%, rgba(80,176,234,1) 51%, rgba(0,212,255,1) 100%); */
			background: #fff;
			background-repeat: no-repeat;
			background-size: 100% 100%;
			background-origin: content-box;
		}

		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #F2A007 !important;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
		}

		.user_card-2 {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #F2A007 !important;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;
		}

		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background-color: #50b0ea;
			padding: 10px;
			text-align: center;
		}

		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}

		.form_container {
			margin-top: 100px;
		}

		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}

		.login_btn:hover {
			background-color: #FBFBFB !important;
			color: #262626 !important;
		}

		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		.login_container {
			padding: 0 2rem;
		}

		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}

		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		.input-user-768 {
			display: inline;
		}

		.custom-checkbox {}

		.mt-1 {
			margin-top: ($spacer * 2) !important;
		}

		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}

		@media only screen and (max-width: 768px) {
			.user_card-2 {
				height: 500px;
				width: 350px;
				margin-top: auto;
				margin-bottom: auto;
				margin-left: 3%;
				margin-right: 3%;
			}
		}

		@media only screen and (min-width: 768px) {
			.user_card-2 {
				height: 500px;
				width: 350px;
			}
		}
	</style>
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/33df55eefa.js" crossorigin="anonymous"></script>

	<!-- links -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
	</script>


	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">


	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- dataTables links -->
	

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/sc-2.0.3/sb-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/af-2.3.5/b-1.6.5/sc-2.0.3/sb-1.0.1/datatables.min.js"></script>
	
</head>

<body class="sb-nav-fixed">
	<script>
		$(document).ready(function () {
			$('#dataTable').DataTable();
			$('#dataTable2').DataTable();
		});
	</script>

	<div id="app">
		@include('layouts.nav');
	
		<div id="layoutSidenav_content">
			<main> 
				<div class="container-fluid">
				
					@yield('content');
				</div>
			</main>
		</div>


			<!-- Scripts -->
			<script src="{{ asset('js/scripts.js') }}">
			<script src="{{ asset('js/app.js') }}">
			<script src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
			</script>
			<script>
				@if(Session::has('success'))
				toastr.success("{{ Session::get('success')}}")
				@endif

				@if(Session::has('info'))
				toastr.info("{{ Session::get('info')}}")
				@endif
			</script>
</body>

</html>