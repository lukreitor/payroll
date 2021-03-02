<?php

namespace App\Http\Controllers;

use App\Department;
use Session;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
	/**
     * Mostra uma lista de departamentos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('department.index', ['departments'=>Department::paginate(5)]);
    }

    /**
     * Mostra o formulário de criação de um novo departamento.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Armazene um departamento recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			'name' => 'required'
		]);
		
		$department = new Department;
		$department->name = $request->name;
		$department->slug = str_slug($request->name);
		$department->save();
		
		Session::flash('success', 'department created');
		return redirect()->route('departments.index');
		
    }

    /**
     * Exibe o departamento especificado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('department.show', ['department'=>Department::where('slug',$slug)->first()]);
    }
   /**
     * Mostra o formulário para editar o departamento especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view('department.edit', ['department'=>Department::findOrFail($id)]);
    }

    /**
     * Atualize o departamento especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$department = Department::findOrFail($id);
		
        $this->validate($request,[
			'name' => 'required'
		]);
		
		$department->name = $request->name;
		$department->slug = str_slug($request->name);
		$department->save();
		
		Session::flash('success', 'department updated');
		return redirect()->route('departments.index');
    }

    /**
     * Remova o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $department=Department::find($id);
		
		foreach($department->roles as $role){
			$role->delete();			
		}
		
		$department->delete();
		
		Session::flash('success', 'department deleted');
		return redirect()->route('departments.index');
    }
}
