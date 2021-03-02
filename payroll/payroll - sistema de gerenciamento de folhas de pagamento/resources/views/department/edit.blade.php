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
<h1 class="mt-3">Departamentos</h1>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="{{ route('departments.index') }}">Departamentos</a></li>
	</li>
	<li class="breadcrumb-item active">Editar </li>
	</li>
</ol>
<div class="container d-flex justify-content-center">
		<div class="row">
			<div class="user_card-3 user_card-update">
				<div class="d-flex justify-content-center">
                <div class="col-lg-12">
					<h1 class="line-white page-header text-center text-white h5">Editar Departamento: {{ $department->name }}</h1>
				</div>
            	</div>

				<div class="col-md-offset-2">
					<div class="panel panel-default">
					<form action ="{{ route('departments.update', ['id'=>$department->id]) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
						<label for="name" class="control-label font-weight-light text-white">Altere abaixo: </label>
						<div class="form-group input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-edit fa-1x"></i></span>
							</div>
							<input class="form-control" type="text" name="name" value="{{ $department->name }}" class="form-control">
						</div>

						<div class="form-group">
							<div class="d-flex justify-content-center mt-3 login_container">
								<button class ="btn login_btn" type="submit">Atualizar Departamento</button>	
                            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>	   

@endsection