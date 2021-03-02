<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\Employee;
use App\Role;
use App\Department;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Mostra o dash board.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home',['employees' => Employee::take(5)->get(),
							'employeesCount' =>Employee::count(),
							'payrolls'=>Payroll::take(5)->get(),
							'roles' => Role::count(),
							'departments' => Department::count()]);
    }
}
