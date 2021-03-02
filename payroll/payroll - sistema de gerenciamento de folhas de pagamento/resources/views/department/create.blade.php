@extends('layouts.app')


@section('content')
<script>
	$(document).ready(function () {
		//$("nav").addClass("nav n");
		$("#navbar-top").toggleClass('bg-nav bg-create');
		//$("nav").attr('bg-warning', 'bg-info');
		//$("#span-create").css("color", "blue");
	});
</script>

<h1 class="mt-3">Departamentos</h1>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="{{ route('departments.index') }}">Departamentos</a></li>
	</li>
	<li class="breadcrumb-item active">Cadastrar</li>
	</li>
</ol>
</div>
<div class="container d-flex justify-content-center ">
	<div class="row">
		<div class="user_card-3 user_card-create">
			<div class="d-flex justify-content-center">
				<div class="col-lg-12">
					<h1 class="line-white page-header text-center h5">Novo Departamento</h1>
				</div>
			</div>

			<div class="col-md-offset-2">
				<div class="panel panel-default">
					<form class="form-horizontal" action="{{ route('departments.store') }}" method="POST">
						{{ csrf_field() }}
						<label for="name" class="control-label font-weight-normal text-capitalize">Nome: </label>
						<div class="form-group input-group mb-2">
							<div class="input-group-append">
								<span id="span-create" class="input-group-text"><i
										class="fa fa-plus-square fa-1x"></i></span>
							</div>
							<input type="text" name="name" class="form-control"
								placeholder="Ex.: TI, Gestão, Administração, Vendas">
						</div>

						<div class="form-groupo">
							<div class="d-flex justify-content-center mt-3 login_container">
								<button class="btn login_btn" type="submit">Salvar Departamento</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection