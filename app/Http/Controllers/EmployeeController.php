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
        $this->employee->UserName= $request->UserName;
        $this->employee->IDNo= $request->IDNo;
        $this->employee->firtName= $request->firtName;
        $this->employee->lastName= $request->lastName;
        $this->employee->Email= $request->Email;
        $this->employee->DateOfContract= $request->DateOfContract;



        $result = $this->employee->save();

        return redirect('/employee');
    }
}

