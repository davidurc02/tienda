<!DOCTYPE>
<html>
	@include('body.head')

	<body class="hold-transition skin-purple sidebar-mini">
		<div class="wrapper">

			@include('body.navbar')
			@include('body.aside')

		
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						@section('body-header')
							Error
							<small>Si aparece esto, no está correctamente configurado la plantilla que llama a ésta</small>
						@show
					</h1>
					<ol class="breadcrumb">
						@section('body-breadcrumb')
							<li><a href="/" ><i class="fa fa-home"></i> Inicio</a></li>
						@show
					</ol>
				</section>
				<!-- Main content -->
				<section class="content">
					@yield('content')
				</section>
			</div>
		</div><!-- ./wrapper -->

		@include('body.foot')
		@include('body.javascript')
	
  </body>
</html>