@extends('layouts.app')


@section('content')
<!-- 
https://mdbootstrap.com/docs/standard/content-styles/colors/
https://fontawesome.com/icons/city?style=solid
-->
<div class="container-fluid">
	<h1 class="mt-3">Funcionários</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Funcionários</li>
	</ol>
	<div class="card mb-4">
		<div class="card-body">
			Nessa página verifica-se todos os funcionários cadastrados no sistema. Além disso, a página contém as
			funções de cadastro, exclusão para lixeira, exclusão permanente e visualização das folhas de pagamento para
			cada funcionário.
			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
			.
		</div>
	</div>

	<div class="card-header">
		<a href="{{ route('employees.create') }}" class="btn btn-success mr-3"><i
				class="fas fa-user-plus pr-1"></i>Cadastrar
		</a>
		<a href="{{ route('employees.bin') }}" class="btn btn-danger mr-3 float-right"><i class="fas fa-archive"></i>
			Arquivo
		</a>
	</div>

	<div class="card mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-holver" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Cargo</th>
						<th>Editar</th>
						<th>Arquivar</th>
						<th>Payroll</th>
					</thead>

					<tbody>
						@if($employees->count()> 0)
						@foreach($employees as $employee)
						<tr>
							<td><a
									href="{{ route('employees.show', ['id' => $employee->id]) }}">{{ $employee->name }}</a>
							</td>
							<td>{{ $employee->email }}</td>
							<td>{{ $employee->role->name }}</td>
							<td>
								<a href="{{ route('employees.edit', ['id' => $employee->id]) }}"
									class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
							</td>
							<td>
								<form action="{{ route('employees.destroy', ['id' => $employee->id]) }}" method="POST">
									{{csrf_field() }}
									{{method_field('DELETE')}}
									<button class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></button>
								</form>
							</td>
							<td>
								<a href="{{ route('payrolls.show', ['id' => $employee->id]) }}"
									class="btn btn-xs btn-secondary"><i class="fas fa-money-check-alt"></i></a>
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<th colspan="5" class="text-center">Empty</th>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
			<div class="text-center">{{ $employees->links() }}</div>
		</div>
	</div>
</div>
@endsection