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
        $this->driver->address_of_driver= $request->address_of_driver;
        $this->driver->name_of_driver= $request->name_of_driver;
        $this->driver->firtid_of_driver= $request->id_of_driver;
        $this->driver->lastno_of_bol= $request->no_of_bol;
        $this->driver->plaque_of_car= $request->plaque_of_car;




        $result = $this->driver->save();

        return redirect('/driver');
    }
}
