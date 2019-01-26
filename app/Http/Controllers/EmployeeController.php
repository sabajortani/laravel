<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use phpemployeeor\Reflection\DocBlock\Tags\Source;

class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(employee $employee)
    {
        $this->employee = $employee;
    }

    public function index()
    {
        $data1 = $this->employee->get();

        return view('employee', ['employee' => $data1]);
    }

    public function employee(Request $request)
    {
        $this->employee->user_name= $request->user_name;
        $this->employee->no_of_position_type= $request->no_of_position_type;
        $this->employee->id_number= $request->id_number;
        $this->employee->first_name= $request->first_name;
        $this->employee->first_name= $request->first_name;
        $this->employee->email= $request->email;



        $result = $this->employee->save();

        return redirect('/employee');
    }
}

