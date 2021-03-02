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
<div class="mt-5 navbar-d">
    <div class="d-flex justify-content-center h-100 navbar-d">
        <div class="user_card-2">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="/images/logo-6.png" class="brand_logo" alt="Logo">
                </div>
            </div>

            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <label for="name" class="control-label control-label-768">Nome Completo:</label>
                    <div class="input-group mb-2 form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>

                        <input id="name" type="text" class="form-control input-user input-user-768" name="name"
                            value="{{ old('name') }}" required autofocus placeholder="Ex.: André da Silva Santos">

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="email" class="control-label">E-Mail</label>
                    <div class="input-group mb-2 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-envelope fa-1x"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            required placeholder="Ex.: auxandre@gmail.com">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="password" class=" control-label">Senha</label>
                    <div class="input-group mb-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <label for="password-confirm" class="control-label">Confirm Password</label>
                    <div class="input-group mb-2 form-group">
                        <div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                        <div class="">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required>
                        </div>
                    </div>


                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" class="btn login_btn">
                            Register
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection