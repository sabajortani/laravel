<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usagefactor;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class UsagefactorController extends Controller
{
    protected $usagefactor;

    public function __construct(usagefactor $usagefactor)
    {
        $this->usagefactor = $usagefactor;
    }

    public function index()
    {
        $data1 = $this->usagefactor->get();

        return view('usagefactor', ['usagefactor' => $data1]);
    }

    public function usagefactor(Request $request)
    {
        $this->usagefactor->UserName= $request->UserName;
        $this->usagefactor->IDNo= $request->IDNo;
        $this->usagefactor->firtName= $request->firtName;
        $this->usagefactor->lastName= $request->lastName;
        $this->usagefactor->Email= $request->Email;
        $this->usagefactor->DateOfContract= $request->DateOfContract;



        $result = $this->usagefactor->save();

        return redirect('/usagefactor');
    }
}
