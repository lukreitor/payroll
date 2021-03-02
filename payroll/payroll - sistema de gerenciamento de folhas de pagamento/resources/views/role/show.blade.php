@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Departamentos</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="{{ route('roles.index') }}">Cargos</a></li>
		</li>
		<li class="breadcrumb-item active">{{ $role->name }}</li>
		</li>
	</ol>


	<div class="card mb-4">
		<div class="card-body">
			Nessa página é possível visualizar os fucionários trabalhando como <span class="font-weight-bold">
				{{ $role->name }}</span>. Confira toda a documentação e políticas do nosso sistema no link ao lado

			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
			.
		</div>
	</div>

	<div class="card-header">
		<a href="" class="btn btn-secondary  mr-3"><i class="fas fa-table"></i>
		</a>Funcionários cadastrados para o cargo de <span class="font-weight-bold">{{ $role->name }}</span>
	</div>

	<div class="card mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table id="dataTable" class="table table-hover table-bordered">
					<thead>
						<th>Funcionário</th>
						<th>Email</th>
						<th>Integral</th>
						<th>Departamento</th>
					</thead>

					<tbody>
						@if($role->employees->count() > 0)
						@foreach($role->employees as $employee)
						<tr>
							<td>{{ $employee->name }}</td>
							<td>{{ $employee->email }}</td>
							<td>@if($employee->full_time)
								<p>Sim</p>
								@else
								<p>Part-Time</p>
								@endif
							</td>
							<td>{{ $role->department->name }}</td>
						</tr>
						@endforeach
						@else
						<tr>
							<th colspan="5" class="text-center">Nenhum funcionário atuando nesse cargo</th>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection