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

        try {
            DB::startTransaction();
           $bolCreate = Bol::create([


            'NumOfBol'=>'Number Of Bol',
            'Date'=>'Date',
            'NoTypeInsurance'=>'No Type Insurance',
            'Source'=>'Source',
            'Destination'=>'Destination',
            'FeeOfCarry'=>'fee Of Carry',
            'NameOfGood'=>'Name Of Good',
            'quantity'=>'Quantity',
            'NoOfUnitType'=>'NoOfUnitType',
            'GCode'=>'GCode',
            'IdNumEmployee'=>'IdNumEmployee',
            'IdNumReseaver'=>'IdNumReseaver',
            'IdNumSender'=>'Id Num Sender',
            'IdNumDriver'=>'Id Num Driver',

           ]);
            $result = $this->creatBol->save();
           DB::commit();


        }catch(\Exaption $e){
            DB::rollback();
        }

    }



}

