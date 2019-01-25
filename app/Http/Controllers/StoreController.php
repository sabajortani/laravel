<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\store;
use phpstoreor\Reflection\DocBlock\Tags\Source;

class StoreController extends Controller
{
    protected $store;

    public function __construct(store $store)
    {
        $this->store = $store;
    }

    public function index()
    {
        $data1 = $this->store->get();

        return view('store', ['store' => $data1]);
    }

    public function store(Request $request)
    {
        $this->store->UserName= $request->UserName;
        $this->store->IDNo= $request->IDNo;
        $this->store->firtName= $request->firtName;
        $this->store->lastName= $request->lastName;
        $this->store->Email= $request->Email;
        $this->store->DateOfContract= $request->DateOfContract;



        $result = $this->store->save();

        return redirect('/store');
    }
}
