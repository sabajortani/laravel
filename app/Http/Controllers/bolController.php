<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bol;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class bolController extends Controller
{
    protected $bol;

    public function __construct(bol $bol)
    {
        $this->bol = $bol;
    }

   public function index()
    {
        $data = $this->bol->get();

        return view('bol', ['bol' => $data]);
    }

    public function bol(Request $request,bol $bol)
    {
        $this->bol->NumOfBOL = $request->NumOfBOL;
        $this->bol->Date = $request->Date;
        $this->bol->NoTypeInsurance = $request->NoTypeInsurance;
        $this->bol->Source = $request->Source;
        $this->bol->Destination = $request->Destination;
        $this->bol->FeeOfCarry = $request->FeeOfCarry;
        $this->bol->NameOfGood = $request->NameOfGood;
        $this->bol->uantity = $request->Quantity;
        $this->bol->NoOfUnitType = $request->NoOfUnitType;
        $this->bol->GCode = $request->GCode;
        $this->bol->IdNumEmployee = $request->IdNumEmployee;
        $this->bol->IdNumReseaver = $request->IdNumReseaver;
        $this->bol->IdNumSender = $request->IdNumSender;
        $this->bol->IdNumDriver = $request->IdNumDriver;


        $result = $this->bol->save();

        return redirect('/bol');
    }
}
