<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\good;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class GoodController extends Controller
{
    protected $good;

    public function __construct(good $good)
    {
        $this->good = $good;
    }

    public function index()
    {
        $data = $this->good->get();

        return view('good', ['good' => $data]);
    }

    public function good(Request $request,good $good)
    {
        $this->good->NumOfgood = $request->NumOfBOL;



        $result = $this->good->save();

        return redirect('/good');
    }
}
