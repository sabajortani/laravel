<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tell;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class TellController extends Controller
{
    protected $tell;

    public function __construct(tell $tell)
    {
        $this->tell = $tell;
    }

    public function index()
    {
        $data1 = $this->tell->get();

        return view('tell', ['tell' => $data1]);
    }

    public function tell(Request $request)
    {
        $this->tell->UserName= $request->UserName;
        $this->tell->IDNo= $request->IDNo;
        $this->tell->firtName= $request->firtName;
        $this->tell->lastName= $request->lastName;
        $this->tell->Email= $request->Email;
        $this->tell->DateOfContract= $request->DateOfContract;



        $result = $this->tell->save();

        return redirect('/tell');
    }
}

