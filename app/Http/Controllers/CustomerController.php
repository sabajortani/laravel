<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class CustomerController extends Controller
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
        $this->customer->user_name= $request->user_name;
        $this->customer->id_no= $request->id_no;
        $this->customer->first_name= $request->first_name;
        $this->customer->last_name= $request->last_name;
        $this->customer->email= $request->email;
        $this->customer->date_of_contract_end= $request->date_of_contract_end;



        $result = $this->customer->save();

        return redirect('/customer');
    }
}
