@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Departamentos</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Departamentos</li>
	</ol>
	<div class="card mb-4">
		<div class="card-body">
			Nessa página é verificam-se todos os departamentos cadastrados no sistema. Além disso, a página contém as funções de cadastro, edição e exclusão de departamentos.
			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
			.
		</div>
	</div>
	
		<div class="card-header">
			<a href="{{ route('departments.create') }}" class="btn btn-success mr-3"><i class="fas fa-plus"></i>
			</a>Criar Departamento
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<th>Nome do Departamento</th>
							<th>Editar</th>
							<th>Deletar</th>
						</thead>
						<tfoot>
							<th>Nome do Departamento</th>
							<th>Editar</th>
							<th>Deletar</th>
						</tfoot>
						<tbody>
							@if($departments->count() > 0)
							@foreach($departments as $department)
							<tr>
								<td>
									<a
										href="{{ route('departments.show', ['slug' => $department->slug ]) }}">{{ $department->name }}</a>
								</td>
								<td>
									<a href="{{ route('departments.edit', ['id' => $department->id ]) }}"
										class="btn btn-xs btn-info"><i class="far fa-edit"></i></a>
								</td>
								<td>
									<form action="{{ route('departments.destroy', ['id' => $department->id ]) }}"
										method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
							@else
							<tr>
								<th colspan="5" class="text-center">No Departments yet</th>
							</tr>
							@endif
					</table>
					<div class="text-center">{{ $departments->links() }}</div>
				</div>
			</div>
		</div>
	@endsection