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
<h1 class="mt-4">Cargos</h1>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="{{ route('roles.index') }}">Cargos</a></li>
	</li>
	<li class="breadcrumb-item active">Cadastrar Cargo</li>
	</li>
</ol>

<div class="container d-flex justify-content-center">
	<div class="row">
		<div class="user-card-4 .user_card-create">
			<div class="col-lg-12">
				<h1 class="line-white page-header text-center h5">Novo Cargo</h1>
			</div>

			<form action="{{ route('roles.store') }}" method="POST">
				{{ csrf_field() }}

				<div class="form-group col-lg-12">
					<label for="name">Nome:</label>
					<div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-user-tie"></i></fas> </span>
							<input type="text" name="name" class="form-control">
                        </div>
					
				</div>

				<div class="form-group col-lg-12">
					<label for="salary">Salário:</label>
					<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fas fa-file-invoice-dollar"></i></fas> </span>
						<input type="number" name="salary" class="form-control">
					</div>
				</div>

				<div class="form-group col-lg-12">
					<label for="department">Selecione um Departamento:</label>
					<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-users"></i></span>
					<select name="department_id" cols="5" rows="5" class="form-control">
						@foreach($departments as $department)
						<option value="{{ $department->id}}">{{ $department->name }}</option>
						@endforeach
					</select>
</div>
				</div>

				<div class="form-groupo">
					<div class="d-flex justify-content-center mt-3 login_container">
						<button class="btn login_btn" type="submit">Salvar Cargo</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection