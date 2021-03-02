@extends('layouts.app')


@section('content')
<script>
	$(document).ready(function () {
		//$("nav").addClass("nav n");
		$("#navbar-top").toggleClass('bg-nav bg-danger');
		//$("nav").attr('bg-warning', 'bg-info');
		//$("#span-create").css("color", "blue");
	});
</script>
<div class="container-fluid">
	<h1 class="mt-4">Arquivo</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Funcionários</a></li>
		<li class="breadcrumb-item active">Arquivo</li>
	</ol>
	<div class="card mb-4">
		<div class="card-body">
			Nessa página verificam-se todos os funcionários removidos da folha de pagamentos. Além disso, a página
			contém as funções de restauração de perfil e exclusão permanente.
			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
			.
		</div>
	</div>

	<div class="card mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>Nome</th>
						<th>Restaurar</th>
						<th>Destruir</th>
					</thead>
					<tfoot>
						<th>Nome</th>
						<th>Restaurar</th>
						<th>Destruir</th>
					</tfoot>

					<tbody>
						@if($employees->count() > 0)
						@foreach($employees as $employee)
						<tr>

							<td>{{ $employee->name}}</td>

							<td>
								<a href="{{ route('employees.restore', ['id' => $employee->id]) }}"
									class="btn btn-xs btn-info"><i class="fas fa-trash-restore"></i></a>
							</td>
							<td>
								<a href="{{ route('employees.kill', ['id' => $employee->id]) }}"
									class="btn btn-xs btn-danger"><i class="fas fa-eraser"></i></a>
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<th colspan="5" class="text-center">Bin Empty</th>
						</tr>
						@endif
					</tbody>
				</table>

			</div>
		</div>
	</div>

	@endsection