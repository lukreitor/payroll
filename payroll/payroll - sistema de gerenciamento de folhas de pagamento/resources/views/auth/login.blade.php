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
<div class="container mt-5">
    <div class="d-flex justify-content-center h-100 navbar-d">
        <div class="user_card">
            <div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="/images/logo-6.png" class="brand_logo" alt="Logo">
					</div>
			</div>
                <div class="d-flex justify-content-center form_container">
                    <form class="" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input-group mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                            <input id="email" type="email" class="form-control input_user" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>

                        <div class="input-group mb-2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                            <input id="password" type="password" class="form-control input_pass" name="password" placeholder="Senha" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>



                        <div class="form-group ">
                                <input class="" id="customControlInline" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>  
                               Lembrar		
						</div>

                        <div class="d-flex justify-content-center mt-3 login_container">
				 	        <button type="submit" name="button" class="btn login_btn">Entrar</button>
				        </div>   
                    </form>
                </div>
                <div class="mt-4">
					<div class="d-flex justify-content-center links">
						Não tem uma conta? <a href="{{ route('register') }}" class="ml-2">Registre-se</a>
					</div>
					<div class="d-flex justify-content-center links">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Esqueceu a senha?
                        </a>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

@endsection