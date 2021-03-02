@extends('layouts.app')


@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Cargos</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Cargos</li>
		</li>
	</ol>

	<div class="card mb-4">
		<div class="card-body">
			Nessa página é verificam-se todos os cargos cadastrados no sistema e seus respectivos departamentos. Além
			disso o salário admitido e as funções de cadastro, edição e exclusão de cargos.

			<a target="_blank" href="#">official payroll documentation</a>
		</div>
	</div>

	<div class="card-header">
		<a href="{{ route('roles.create') }}" class="btn btn-success mr-3"><i class="fas fa-plus"></i> Cadastrar Cargo
		</a>
	</div>

	<div class="card mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table  table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>Nome</th>
						<th>Departamento</th>
						<th>Salário</th>
						<th>Editar</th>
						<th>Deletar</th>
					</thead>

					<tfoot>
						<th>Nome</th>
						<th>Departamento</th>
						<th>Salário</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tfoot>

					<tbody>
						@if($roles->count()> 0)
						@foreach($roles as $role)
						<tr>
							<td><a href="{{ route('roles.show', ['slug' => $role->slug]) }}">{{ $role->name}}</a></td>

							<td>{{ $role->department->name }}</td>
							<td>{{ $role->salary }}</td>
							<td>
								<a href="{{ route('roles.edit', ['id' => $role->id]) }}" class="btn btn-info"><i
										class="far fa-edit"></i></a>
							</td>
							<td>
								<!-- action="{{ route('roles.destroy', ['id' => $role->id]) }} -->
								<form  method="POST">
									{{csrf_field() }}
									{{method_field('DELETE')}}
									<button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
								</form>
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<th colspan="5" class="text-center">Nenhum cargo cadastrado ainda</th>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
			<div class="text-center">{{ $roles->links() }}</div>
		</div>
	</div>
</div>

	@endsection