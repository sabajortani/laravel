<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use AlignFormatterocumentor\Reflection\DocBlock\Tags\Source;


class CustomerController extends Controller
{
    protected $customer;


    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $data = $this->customer->get();
        // return $data;

        return view('Customer', ['Customer' => $data]);
    }


    public function show()
    {
        $data = $this->customer->post();

        return view('customer', [$data => 'customer']);
    }


    public function creatCustomer(Request $req)
    {

        //  return $req->all();
        $req->validate([ // // inja validate mitoni bezari k vorodia ro kontrol koni
//            'no_of_bol'=> 'required|numeric',
            'date' => 'required',
            // 'no_type_insource'=> 'required|numeric',
            'source' => 'required',
            'destination' => 'required',
            'fee_of_carry' => 'required|numeric',
            'name_of_good' => 'required',
            'quantity' => 'required|numeric',
            // 'no_of_unit_type'=> 'required|numeric',
            'good_code' => 'required|numeric',
            'id_no_employee' => 'required|numeric',
            'id_no_reseaver' => 'required|numeric',
            'id_no_sender' => 'required|numeric',
            'id_no_driver' => 'required|numeric',
            'id_no_customer' => 'required|numeric',
        ]);


//        $this->bol->no_of_bol = $req->no_of_bol;
        $this->bol->date = $req->date;
        $this->bol->no_type_insource = $req->no_type_insource;
        $this->bol->source = $req->source;
        $this->bol->destination = $req->destination;
        $this->bol->fee_of_carry = $req->fee_of_carry;
        $this->bol->name_of_good = $req->name_of_good;
        $this->bol->quantity = $req->quantity;
        $this->bol->no_of_unit_type = $req->no_of_unit_type;
        $this->bol->good_code = $req->good_code;
        $this->bol->id_no_employee = $req->id_no_employee;
        $this->bol->id_no_reseaver = $req->id_no_reseaver;
        $this->bol->id_no_sender = $req->id_no_sender;
        $this->bol->id_no_driver = $req->id_no_driver;
        $this->bol->id_no_customer = $req->id_no_customer;

        $this->bol->save();

        return back()->withMessage('success');


    }

    public function showAll()
    {
        $customers = $this->customer::paginate(30); //  in 30 ta az barnameha ro miare
//        return $customers;

        return view('customers', [
            'customers' => $customers,
        ]);
    }

    public function edit($id)
    {
        $customer = $this->bol::where('no_of_bol', $id)->first();
//        return $bol;
        return view('edit-bol', [
            'bol' => $customer,
        ]);
    }

    public function update(Request $req, $id)
    {
        $customer = $this->bol::where('no_of_bol', $id)->update([
            'date' => $req->date,
            'no_type_insource' => $req->no_type_insource,
            'source' => $req->source,
            'destination' => $req->destination,
            'fee_of_carry' => $req->fee_of_carry,
            'name_of_good' => $req->name_of_good,
            'quantity' => $req->quantity,
            'no_of_unit_type' => $req->no_of_unit_type,
            'good_code' => $req->good_code,
            'id_no_employee' => $req->id_no_employee,
            'id_no_reseaver' => $req->id_no_reseaver,
            'id_no_sender' => $req->id_no_sender,
            'id_no_driver' => $req->id_no_driver,
            'id_no_customer' => $req->id_no_customer,
        ]);


        return back()->withMessage('success');
    }

    public function delete($id)
    {
        $customer = $this->customer::where('no_of_bol', $id)->delete();

        return back()->withMessage('با موفقیت حذف شد');
    }
};