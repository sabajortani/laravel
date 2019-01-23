<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class customerController extends Controller
{
    protected $customer;

    public function __construct(customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $data1 = $this->customer->get();

        return view('customer', ['customer' => $data1]);
    }

    public function customer(Request $request)
    {
        $this->customer->UserName= $request->UserName;
        $this->customer->IDNo= $request->IDNo;
        $this->customer->firtName= $request->firtName;
        $this->customer->lastName= $request->lastName;
        $this->customer->Email= $request->Email;
        $this->customer->DateOfContract= $request->DateOfContract;



        $result = $this->customer->save();

        return redirect('/customer');
    }
}
