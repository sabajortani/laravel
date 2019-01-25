<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bol;
use AlignFormatterocumentor\Reflection\DocBlock\Tags\Source;


class BolController extends Controller
{
    protected $bol;


    public function __construct(Bol $bol)
    {
        $this->bol = $bol;
    }

    public function index()
    {
        $data = $this->bol->get();
        // return $data;

        return view('Bol', ['Bol' => $data]);
    }


    public function show()
    {
        $data = $this->bol->post();

        return view('bol', [$data =>'bol']);
    }
    /*
        public function bol(Request $request,Bol $bol)
        {
            $this->bol->NumOfBol = $request->NumOfBol;
            $this->bol->Date = $request->Date;
            $this->bol->NoTypeInsurance = $request->NoTypeInsurance;
            $this->bol->Source = $request->Source;
            $this->bol->Destination = $request->Destination;
            $this->bol->FeeOfCarry = $request->FeeOfCarry;
            $this->bol->NameOfGood = $request->NameOfGood;
            $this->bol->Quantity = $request->Quantity;
            $this->bol->NoOfUnitType = $request->NoOfUnitType;
            $this->bol->GCode = $request->GCode;
            $this->bol->IdNumEmployee = $request->IdNumEmployee;
            $this->bol->IdNumReseaver = $request->IdNumReseaver;
            $this->bol->IdNumSender = $request->IdNumSender;
            $this->bol->IdNumDriver = $request->IdNumDriver;


            $result = $this->bol->save();

            return redirect('/bol');
        }*/


    public function creatBol(Request $req){

        // return $req->all();
        /*$req->validate([ // // inja validate mitoni bezari k vorodia ro kontrol koni
            'no_of_bol'=> 'required|numeric',
            'date'=> 'required',
            'no_type_insource'=> 'required|numeric|unique:bol,no_type_insource',
            'source'=> 'required',
            'destination'=> 'required',
            'fee_of_carry'=> 'required|numeric',
            'name_of_good'=> 'required',
            'quantity'=> 'required|numeric',
            'no_of_unit_type'=> 'required|numeric|unique:bol,no_of_unit_type',
            'good_code'=> 'required|numeric|unique:bol,good_code',
            'id_no_employee'=> 'required|numeric|unique:bol,id_no_employee',
            'id_no_reseaver'=> 'required|numeric|unique:bol,id_no_reseaver',
            'id_no_sender'=> 'required|numeric|unique:bol,id_no_sender',
            'id_no_driver'=> 'required|numeric|unique:bol,id_no_driver',
            'id_no_customer'=> 'required|numeric|unique:bol,id_no_customer',
        ]);*/


        $this->bol->no_of_bol = $req->no_of_bol;
        $this->bol->date= $req->date;
        $this->bol->no_type_insource= $req->no_type_insource;
        $this->bol->source=$req->source;
        $this->bol->destination=$req->destination;
        $this->bol->fee_of_carry=$req->fee_of_carry;
        $this->bol->name_of_good=$req->name_of_good;
        $this->bol->quantity=$req->quantity;
        $this->bol->no_of_unit_type=$req->no_of_unit_type;
        $this->bol->good_code=$req->good_code;
        $this->bol->id_no_employee=$req->id_no_employee;
        $this->bol->id_no_reseaver=$req->id_no_reseaver;
        $this->bol->id_no_sender=$req->id_no_sender;
        $this->bol->id_no_driver=$req->id_no_driver ;
        $this->bol->id_no_customer=$req->id_no_customer;

        $this->bol->save();

        return back()->withMessage('success');


        /////////////////////////////////
        // try {
        //     DB::startTransaction();
        //    $bolCreate = Bol::create([


        //     'NumOfBol'=>'Number Of Bol',
        //     'Date'=>'Date',
        //     'NoTypeInsurance'=>'No Type Insurance',
        //     'Source'=>'Source',
        //     'Destination'=>'Destination',
        //     'FeeOfCarry'=>'fee Of Carry',
        //     'NameOfGood'=>'Name Of Good',
        //     'quantity'=>'Quantity',
        //     'NoOfUnitType'=>'NoOfUnitType',
        //     'GCode'=>'GCode',
        //     'IdNumEmployee'=>'IdNumEmployee',
        //     'IdNumReseaver'=>'IdNumReseaver',
        //     'IdNumSender'=>'Id Num Sender',
        //     'IdNumDriver'=>'Id Num Driver',

        //    ]);
        //     $result = $this->creatBol->save();
        //    DB::commit();


        // }catch(\Exaption $e){
        //     DB::rollback();
        // }

    }



}

