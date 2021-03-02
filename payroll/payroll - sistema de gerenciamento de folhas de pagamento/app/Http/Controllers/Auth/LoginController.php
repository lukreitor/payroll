<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador lida com a autenticação de usuários para o aplicativo e
    | redirecionando-os para a tela inicial. O controlador usa uma característica
    | para fornecer convenientemente sua funcionalidade aos seus aplicativos.
    |
    */

    use AuthenticatesUsers;

    /**
     * 
     *
    * Para onde redirecionar os usuários após o login.
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
        $this->middleware('guest')->except('logout');
    }
}
