<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sender;
use phpsenderor\Reflection\DocBlock\Tags\Source;

class SenderController extends Controller
{
    protected $sender;

    public function __construct(sender $sender)
    {
        $this->sender = $sender;
    }

    public function index()
    {
        $data1 = $this->sender->get();

        return view('sender', ['sender' => $data1]);
    }

    public function sender(Request $request)
    {
        $this->sender->UserName= $request->UserName;
        $this->sender->IDNo= $request->IDNo;
        $this->sender->firtName= $request->firtName;
        $this->sender->lastName= $request->lastName;
        $this->sender->Email= $request->Email;
        $this->sender->DateOfContract= $request->DateOfContract;



        $result = $this->sender->save();

        return redirect('/sender');
    }
}
