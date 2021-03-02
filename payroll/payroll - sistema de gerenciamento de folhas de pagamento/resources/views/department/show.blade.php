@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Departamentos</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="{{ route('departments.index') }}">Departamentos</a></li></li>
		<li class="breadcrumb-item active">Adminitração</li></li>
	</ol>

	
	<div class="card mb-4">
		<div class="card-body">
			Nessa página é possível visualizar os cargos cadastrados no departamento<span class="font-weight-bold"> {{ $department->name }}</span>. Confira toda a documentação e políticas do nosso sistema no link ao lado

			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
			.
		</div>
	</div>

	<div class="card-header">
			<a href="{{ route('departments.create') }}" class="btn btn-secondary  mr-3"><i class="fas fa-table"></i>
			</a>Cargos Cadastrados
		</div>

	<div class="card mb-4">
			<div class="card-body">
				<div class="table-responsive">
	<table class= "table table-hover table-bordered" id="dataTable">
		<thead>
			<th>Cargo</th>
			<th>Salário</th>
		</thead>

		<tfoot>
			<th>Cargo</th>
			<th>Salário</th>
		</tfoot>
		
		<tbody>
			@if($department->roles->count() > 0)
				@foreach($department->roles as $role)
					<tr>
						<td>
							<a href="{{ route('roles.show', ['slug'=>$role->slug])}}">{{ $role->name }}</a>
						</td>
						<td>{{ $role->salary }}</td>
					</tr>
				@endforeach
			@else
				<tr> 
					<th colspan="5" class="text-center">Nenhum cargo associado a este departamento ainda</th>
				</tr>
			@endif
		
		</tbody>
	
	</table>
</div>
   </div>
   </div>
   </div>
		
@endsection