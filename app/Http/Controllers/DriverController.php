<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driver;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class DriverController extends Controller
{
    protected $driver;

    public function __construct(driver $driver)
    {
        $this->driver = $driver;
    }

    public function index()
    {
        $data1 = $this->driver->get();

        return view('driver', ['driver' => $data1]);
    }

    public function driver(Request $request)
    {
        $this->driver->UserName= $request->UserName;
        $this->driver->IDNo= $request->IDNo;
        $this->driver->firtName= $request->firtName;
        $this->driver->lastName= $request->lastName;
        $this->driver->Email= $request->Email;
        $this->driver->DateOfContract= $request->DateOfContract;



        $result = $this->driver->save();

        return redirect('/driver');
    }
}
