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

<h2 class="mt-4">FOLHA : {{ $payroll->employee->name }}</h2>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Funcionários</a></li>
	</li>
	<li class="breadcrumb-item active"><a href="#">Folha de Pagamentos</a></li>
	</li>
	<li class="breadcrumb-item active">Editar Folha</li>
	</li>
</ol>

<div class="container d-flex justify-content-center">
	<div class="row">
		<div class="user-card-4 user_card-update">
			<div class="col-lg-12">
				<h6 class="line-white page-header text-center h5">EDITAR</h6>
			</div>

			@if($payroll->employee->full_time)
				<p><b>Integral</b> :  Sim</p>
				<p><b>Salário Base</b>: {{ $payroll->employee->role->salary }}</p>
			@else
				<p><b>Meio-Período<b> : Sim</p>
				<p><b>Salário Base<b>: 0</p>
			@endif

			<form action="{{ route('payrolls.update',['id'=>$payroll->id])}}" method="POST"
			class="form-horizontal">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
			
			<div class="form-group">
				<label class="control-label col-md" for="over_time">Horas Extras?</label>
				<div class="col-md-12">
					<select name="over_time" id="over_time" class="form-control">
						<option value="1">Sim</option>
						<option value="0">Não</option>					
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-1" for="hours">Quantidade: </label>
				<div class="col-md-12">					
					<input type="number" name="hours" class="form-control">		
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-1" for="rate">Taxa: </label>
				<div class="col-md-12">
					<input type="number" name="rate" class="form-control">	
				</div>
			</div>			
			
			<div class="form-group">
				<div class="d-flex justify-content-center mt-3 login_container">
					<button class="btn login_btn" type="submit" >Update</button>
				</div>
			</div>
		</form> 
		</div>
	</div>
</div>
@endsection
