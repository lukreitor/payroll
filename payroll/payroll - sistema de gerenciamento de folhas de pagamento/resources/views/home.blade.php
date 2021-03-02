@extends('layouts.app')

@section('content')

<script>
	$(document).ready(function () {
		$("#box").toggleClass('box box-1280');
	});
</script>

<main class="container-fluid">
	<h1 class="mt-4">Dashboard</h1>
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item active">Dashboard</li>
	</ol>
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">Folhas de Pagamento</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">{{ $payrolls->count() }}</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-warning text-white mb-4">
				<div class="card-body">N° de Funcionários</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">{{ $employeesCount }}</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">Contagem de papéis</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">{{ $roles }}</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body">Departamentos</div>
				<div class="card-footer d-flex align-items-center justify-content-between">
					<a class="small text-white stretched-link" href="#">{{ $departments }}</a>
					<div class="small text-white"><i class="fas fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-6">
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-chart-area mr-1"></i>
					Area Chart Example
				</div>
				<div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="card mb-4">
				<div class="card-header">
					<i class="fas fa-chart-bar mr-1"></i>
					Bar Chart Example
				</div>
				<div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
			</div>
		</div>
	</div>
	<div class="card mb-4">
		<div class="card-header">
			<i class="fas fa-table mr-1"></i>
			Últimos Funcionários Adicionados
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Data</td>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Papel</th>
							<th>Departamento</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Data</td>
							<th>Nome</th>
							<th>E-mail</th>
							<th>Papel</th>
							<th>Departamento</th>
						</tr>
					</tfoot>
					<tbody>
						@if($employees->count()> 0)
						@foreach($employees as $employee)
						<tr>
							<td>{{ $employee->created_at->toDateString() }}</td>
							<td>{{ $employee->name }}</td>
							<td>{{ $employee->email }}</td>
							<td>{{ $employee->role->name }}</td>
							<td>{{ $employee->role->department->name }}</td>
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
		</div>
	</div>

	<div class="card mb-4">
		<div class="card-header">
			<i class="fas fa-table mr-1"></i>
			Ultimas folhas de pagamento emitidas
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Dados Emitidos</td>
							<th>Nome</th>
							<th>Horas Extras</th>
							<th>Horas</th>
							<th>Taxa</th>
							<th>Salário Bruto</th>
						</tr>
					</thead>
					<tfoot>
						<th>Dados Emitidos</td>
						<th>Nome</th>
						<th>Horas Extras</th>
						<th>Horas</th>
						<th>Taxa</th>
						<th>Salário Bruto</th>
					</tfoot>
					<tbody>
						@if($payrolls->count()> 0)
						@foreach($payrolls as $payroll)
						<tr>
							<td>{{ $payroll->created_at->toDateString() }}</td>
							<td>{{ $payroll->employee->name }}</td>
							<td>
								@if($payroll->over_time)
								<p><b>Sim</b></p>
								@else
								<p><b>Não</b></p>
								@endif
							</td>
							<td>{{ $payroll->hours }}</td>
							<td>{{ $payroll->rate }}</td>
							<td>{{ $payroll->gross }}</td>
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
		</div>
	</div>
</main>

@endsection