@extends('layouts.app')


@section('content')
<script>
$(document).ready(function() {
	//$("nav").addClass("nav n");
	//$("nav").toggleClass('bg-warning bg-update');
	//$("nav").attr('bg-warning', 'bg-info');
	$(".table > tbody > tr > td").css("text-align", "left")
});
</script>

<div class="container-fluid">
	<h1 class="mt-4">Funcionário: {{ $employee->name }}</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Funcionários</a></li>
		<li class="breadcrumb-item active">Registos</li>
	</ol>
	<div class="card mb-4">
		<div class="card-body">
			Nessa página é consulta-se as informações de perfil do funcionário <span class="font-italic text-uppercase">
				{{ $employee->name }} </span>. Além disso, a página contém as funções de edição do perfil e exclusão
			para o o arquivo e download do registro em PDF.
			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
		</div>
	</div>




	<div class="card-header">
		@auth
		<a href="{{ route('employees.edit',['id'=>$employee->id]) }}" class="btn btn-primary"><i
				class="fas fa-edit"></i> Editar</a>
		<a href="{{ route('employees.destroy',['id'=>$employee->id]) }}" class="btn btn-danger"><i
				class="fas fa-trash-alt"></i> Deletar</a>
		<a href="{{ route('payrolls.pdf',['id'=>$employee->id]) }}" class="btn btn-info float-right"><i
				class="fas fa-download ml-2 mr-2 fa-1x"></i> </a>
		@endauth
	</div>
	<div class="card mb-4">
		<div class="card-body">
			<div class="table-responsive" width="100%">
				<table class="table table-bordered table-hover">
					<tbody class="text-justify">
						<tr>
							<th>Nome:</th>
							<td>{{ $employee->name }}</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td>{{ $employee->email }}</td>
						</tr>
						<tr>
							<th>Departamento</th>
							<td>{{ $employee->role->department->name }}</td>
						</tr>
						<tr>
							<th>Cargo</th>
							<td>{{ $employee->role->name }}</td>
						</tr>
						<tr>
							<th>Salário</th>
							<td>{{ $employee->role->salary }}</td>
						</tr>
						<tr>
							<th>Rua</th>
							<td>{{ $employee->street }}</td>
						</tr>
						<tr>
							<th>Vila/Bairro</th>
							<td>{{ $employee->town }}</td>
						</tr>
						<tr>
							<th>Cidade</th>
							<td>{{ $employee->city }}</td>
						</tr>
						<tr>
							<th>País</th>
							<td>{{ $employee->country }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>







@endsection