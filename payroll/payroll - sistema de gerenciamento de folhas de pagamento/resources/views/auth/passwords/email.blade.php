@extends('layouts.app')

@section('content')
<script>
	$(document).ready(function () {
		//$("nav").addClass("nav n");
		$("#navbar-top").toggleClass('bg-nav bg-warning');
		//$("nav").attr('bg-warning', 'bg-info');
		//$("#span-create").css("color", "blue");
	});
</script>
<div class="container d-flex justify-content-center">
    <div class="d-flex justify-content-center h-100 navbar-d">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="/images/logo-6.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <!--form class="form-horizontal" method="POST" action="{{ route('password.email') }}"
                            {{ csrf_field() }}-->
                        <form class="form-horizontal" method="POST">
                        {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class=" control-label">Endereço de E-mail:</label>

                                <div class="input-group mb-2 form-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-envelope fa-1x"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control input_pass" name="email"
                                        value="{{ old('email') }}" required placeholder="Ex.: auxandre@gmail.com">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-center mt-3 login_container">
                                    <button type="submit" name="button" class="btn login_btn">Enviar Link</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection