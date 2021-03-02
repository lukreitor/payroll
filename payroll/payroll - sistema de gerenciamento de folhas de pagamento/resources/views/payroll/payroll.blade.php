@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">FOLHAS DE PAGAMENTO: {{ $employee->name }}</h1>
	<!--input type="text" id="filterInput" onkeyup="filterFunction()" placeholder="Search Employees...."-->
	<ol class="breadcrumb mb-4">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active"><a href="{{ route('employees.index') }}">Funcionários</a></li>
		<li class="breadcrumb-item active">Registos</li>
	</ol>
	<div class="card mb-4">
		<div class="card-body">
			Nessa página pode-se consultar todas as folhas de pagamentos relacionadas ao funcionário <span
				class="font-italic text-uppercase">
				{{ $employee->name }} </span>. Além disso, a página contém as funções de criar nova folha de pagamento,
			baixar todas as folhas e enviar o registro do funcionário para o arquivo
			<a target="_blank" href="https://datatables.net/">official payroll documentation</a>
		</div>
	</div>


	<div class="card-header">
		<!--a href="{{ route('payrolls.pdf', ['id'=>$employee->id]) }}" class="btn btn-info ">
			<i class="fas fa-plus"></i> Baixar todas as
			folhas
		</! -->
		<a href="#" class="btn btn-info ">
			<i class="fas fa-plus"></i> Baixar todas as
			folhas
		</a>
		<a href="{{ route('payrolls.bin') }}" class="btn btn-danger">
			<i class="fas fa-trash"> Deleter Tudo</i>
		</a>

		<br>
		<br>

		@if($employee->full_time)

		<p><b>Integral</b> : Sim</p>
		<a href="{{ route('payrolls.create', ['id'=>$employee->id]) }}" class="btn btn-primary float-right">
			<i class="fas fa-plus"></i> Nova Folha
		</a>
		<p><b>Salário Base</b>: {{ $employee->role->salary }}</p>

		@else
		<p><b>Meio-Periodo<b> : Sim</p>
		<a href="{{ route('payrolls.create', ['id'=>$employee->id]) }}" class="btn btn-primary float-right">
			<i class="fas fa-plus"></i> Nova Folha
		</a>
		<p><b>Salario Base<b>: {{ $employee->role->salary }}</p>
		@endif
	</div>


	<div class="card mb-4">
		<div class="card-body">
			<div class="table-responsive" width="100%">
				<table class="table table-bordered table-hover">
					<thead>
						<th>Emissão</td>
						<th>Horas Extras</th>
						<th>Horas</th>
						<th>Taxa/Horas Extras</th>
						<th>Salário Bruto</th>
						<th>Baixar</th>
						<th>Editar</th>
						<th>Deletar</th>
					</thead>

					<tfoot>
						<th>Emissão</td>
						<th>Horas Extras</th>
						<th>Horas</th>
						<th>Taxa/Horas Extras</th>
						<th>Salário Bruto</th>
						<th>Baixar</th>
						<th>Editar</th>
						<th>Deletar</th>
					</tfoot>

					<tbody>
						@if($employee->payrolls->count()> 0)
						@foreach($employee->payrolls as $payroll)
						<tr>
							<td>{{ $payroll->created_at->toDateString() }}
							<td>
								@if($payroll->over_time)
								<p><b>Yes</b></p>
								@else
								<p><b>No</b></p>
								@endif
							</td>
							<td>{{ $payroll->hours }}</td>
							<td>{{ $payroll->rate }}</td>
							<td>{{ $payroll->gross }}</td>

							<td><a href="{{ route('singlepayroll.pdf', ['id'=>$payroll->id]) }}"
									class="btn btn-danger"><i class="fas fa-file-pdf"></i></a></td>
							<td>
								<a href="{{ route('payrolls.edit', ['id' => $payroll->id]) }}"
									class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
							</td>
							<td>
								<form action="{{ route('payrolls.destroy', ['id' => $payroll->id]) }}" method="POST">
									{{csrf_field() }}
									{{method_field('DELETE')}}
									<button class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></button>
								</form>
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
		</div>
	</div>
</div>
@endsection