<?php

namespace App\Http\Controllers;

use App\Payroll;
use App\Employee;
use App\Role;
use Session;
use Paginate;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * formulário de criação de folhas
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $employee = Employee::findOrFail($id);
		return view('payroll.create')->with('employee',$employee);
    }

    /**
     * armazena uma folha recem criada
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id){
		
	   $this->validate($request,[
			'hours'=> 'required',
			'rate'=>'required',
			'over_time' => 'required|bool'
		]);
		
	    $payroll = Payroll::create([
			'hours' => $request->hours,
			'rate' => $request->rate,
			'over_time' => $request->over_time,
			'employee_id' => $id
		]);
		
		$payroll->grossPay();
		$payroll->save();
		
		Session::flash('success', 'Payroll Created');
		return redirect()->route('payrolls.show',['id'=>$id]);	
    }

    /**
     * exibe a folha criada
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function payrollIndex($id){
		$employee = Employee::findOrFail($id);
        return view('payroll.payroll')->with('employee',$employee);
    }

    /**
     * exibe o form de edição da folha especificada
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $payroll = Payroll::findOrFail($id);
		return view('payroll.edit')->with('payroll',$payroll);
    }

    /**
     * atualiza a folha especificada.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
			'hours'=> 'required',
			'rate'=>'required',
			'over_time' => 'required|bool'
		]);
		
		$payroll = Payroll::findOrFail($id);
		$payroll->hours = $request->hours;
		$payroll->rate= $request->rate;
		$payroll->over_time = $request->over_time;
		$payroll->save();		
		
		$payroll->grossPay();
		$payroll->save();
		
		Session::flash('success', 'Payroll Updated ready for download');
		return redirect()->route('payrolls.show',['id'=>$payroll->employee_id]);			
    }

    /**
     * remove a folha especificada.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payroll=Payroll::findOrFail($id);
		$payroll->delete();
		
		Session::flash('success','Payroll Deleted');
		return redirect()->back();
    }
	public function bin(){
		$payrolls=Payroll::onlyTrashed()->get();
		return view('payroll.bin')->with('payrolls', $payrolls);
	}
	
	public function restore($id){
		$payroll=Payroll::withTrashed()->where('id', $id)->first();
		$payroll->restore();
		
		Session::flash('success', 'payroll row is restored.');
		return redirect()->route('employees.index');
	}
	
	public function kill($id){
		$payroll=Payroll::withTrashed()->where('id', $id)->first();		
		$payroll->forceDelete();
		
		Session::flash('success', 'payroll permanently destroyed.');
		return redirect()->route('employees.index');
	}
}
