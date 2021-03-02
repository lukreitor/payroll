@extends('layouts.app')


@section('content')
<script>
	$(document).ready(function () {
		//$("nav").addClass("nav n");
		$("#navbar-top").toggleClass('bg-nav bg-update');
		//$("nav").attr('bg-warning', 'bg-info');
		//$("#span-create").css("color", "blue");
	});
</script>
<h1 class="mt-2">Funcionários</h1>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Funcionários</a></li>
	</li>
	<li class="breadcrumb-item active">Atualizar Funcionários</li>
	</li>
</ol>

<div class="container d-flex justify-content-center">
	<div class="row">
		<div class="user-card-4 user_card-update">
			<div class="col-lg-12">
				<h1 class="line-white page-header text-center h5">Atualizar Funcionário: {{$employee->name }}</h1>
			</div>
			<form action="{{ route('employees.update', ['id'=>$employee->id]) }}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PUT') }}

				<div class="form-group col-md-12">
					<label for="name">Name: </label>
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-user-tie"></i></fas> </span>
						<input type="text" name="name" class="form-control from-control-lg" value="{{ $employee->name}}">
					</div>
				</div>

				<div class="form-group col-lg-12">
					<label for="email">E-mail:</label>
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-envelope-square"></i></fas> </span>
						<input type="email" name="email" class="form-control" value="{{ $employee->email}}">
					</div>
				</div>

				<div class="form-group col-lg-12">
					<label for="street">Rua:</label>
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-road"></i></fas> </span>
						<input type="text" name="street" class="form-control" value="{{ $employee->street}}">
					</div>
				</div>

				<div class="form-group col-lg-12">
					<label for="town">Distrito/Vila/Rua:</label>
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-building"></i></fas> </span>
						<input type="text" name="town" class="form-control" value="{{ $employee->street }}">
					</div>
				</div>

				<div class="form-group col-lg-12">
					<label for="city">Cidade:</label>
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-city"></i></fas> </span>
						<input type="text" name="city" class="form-control" value="{{ $employee->city}}" value= "{{ $employee->country}}">
					</div>
				</div>

				<div class="form-group col-md-12">
					<label for="country">Country: </label>
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fas fa-city"></i></fas> </span>
						<input type="text" name="country" class="form-control" value= "{{ $employee->country}}">
					</div>
				</div>

				<div class="form-group col-md-12">
					<label for="role">Select um cargo</label>
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-users"></i></span>

						<select name="role_id" cols="5" rows="5" class="form-control">
							@foreach($roles as $role)
							<option value="{{ $role->id}}">{{ $role->name }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-group col-md-12">
					<label for="full_time">Modalidade:</label>
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-money-check"></i></span>
						<select name="full_time" id="full_time" class="form-control">
							<option value="1">Integral</option>
							<option value="0">Meio-período</option>
						</select>
					</div>

					<div class="form-groupo">
						<div class="d-flex justify-content-center mt-3 login_container">
							<button class="btn login_btn" type="submit">Atualizar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection