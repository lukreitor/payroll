<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador é responsável por lidar com as solicitações de redefinição de senha
    | e usa uma característica simples para incluir esse comportamento. 
    |
    */

    use ResetsPasswords;

    /**
     * 
     *Para onde redirecionar os usuários após redefinir sua senha.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
