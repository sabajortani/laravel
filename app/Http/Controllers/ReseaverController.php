<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reseaver;
use phpreseaveror\Reflection\DocBlock\Tags\Source;

class ReseaverController extends Controller
{
    protected $reseaver;

    public function __construct(reseaver $reseaver)
    {
        $this->reseaver = $reseaver;
    }

    public function index()
    {
        $data1 = $this->reseaver->get();

        return view('reseaver', ['reseaver' => $data1]);
    }

    public function reseaver(Request $request)
    {
        $this->reseaver->UserName= $request->UserName;
        $this->reseaver->IDNo= $request->IDNo;
        $this->reseaver->firtName= $request->firtName;
        $this->reseaver->lastName= $request->lastName;
        $this->reseaver->Email= $request->Email;
        $this->reseaver->DateOfContract= $request->DateOfContract;



        $result = $this->reseaver->save();

        return redirect('/reseaver');
    }
}
