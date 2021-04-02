<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = DB::select('select * from employees');
        
        return view('employee.employee',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        try
        {
            
            $input = $request->all();

            Employee::create($input);
            
        }
        catch(Exception $ex)
        {
            $msg1='ذخیره سازی با مشکل مواجه شد لطفا مجددا اقدام کنید';
            return redirect(route('employees.create'))->with('save_error',$ex->getCode());
        }

        $msg='ذخیره دسته بندی جدید با موفقیت انجام شد';
        return redirect(route('employee'))->with('success',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $emp)
    {
        return view('employee.edit',compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $emp)
    {
        try
        {
        //    $category->save();
              $emp->update($request->all()); // این روش دوم است که تنها با یک خط انجام میشود  و نیازی با سط خط بالا که کامنت شده اند ندارد
        }
        catch(Exception $ex)
        {
            $msg1='ذخیره سازی با مشکل مواجه شد لطفا مجددا اقدام کنید';
            return redirect(route('employees.edit'))->with('save_error',$ex->getCode());
        }

        $msg='ویرایش با موفقیت انجام شد';
        return redirect(route('employee'))->with('success',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $emp)
    {
        $emp->delete();
        $msg='حذف  با موفقیت انجام شد';
        return redirect(route('employee'))->with('success',$msg);//این متود مارا به ویو میفرستد
    }

    public function married()
    {
        $users = DB::select('select * from employees where married = 1');
        
        return view('employee.employee',compact('users'));
    }

    public function lname()
    {
        $users = DB::select('select * from employees where last_name = "علوی"');
        
        return view('employee.employee',compact('users'));
    }

    public function age()
    {
        $users = DB::select('select * from employees where age > 30');
        
        return view('employee.employee',compact('users'));
    }

    public function age_married()
    {
        $users = DB::select('select * from employees where age > 40 and married = 0');
        
        return view('employee.employee',compact('users'));
    }

    public function num_married()
    {
        $num = DB::select('select * from employees where  married = 1');
        
        
        return view('employee.employee_num',compact('num'));
    }

    public function num_notmarried()
    {
        $num = DB::select('select * from employees where  married = 0');
        
        
        return view('employee.employee_num',compact('num'));
    }

    public function num_salary()
    {
        $num = DB::select('select * from employees where  salary > 1000000 ');
        
        
        return view('employee.employee_num',compact('num'));
    }


    public function max_salary()
    {
       
        $m = DB::table('employees')->max('salary');
        $users = DB::select('select * from employees where salary = '.$m);
        return view('employee.employee',compact('users'));
    }

    public function min_salary()
    {
       
        $m = DB::table('employees')->min('salary');
        $users = DB::select('select * from employees where salary = '.$m);
        return view('employee.employee',compact('users'));
    }

    public function sum_salary()
    {
        $num = DB::table('employees')->sum('salary');
       
        
        return view('employee.employee_num',compact('num'));
    }

    public function Stand_Deviation()
    {
        $num = DB::select('select salary from employees ');
       
        $s=0;
        $std = 0 ;
        foreach ($num as $j)
        {
            $s = $s + $j->salary;
        }
        
        $avg = $s / count($num);

        foreach ($num as $j)
        {
          $std =  pow($j->salary - $avg , 2) + $std ;
        }
        

        $num = $std;

        return view('employee.employee_num',compact('num'));
    }


}
