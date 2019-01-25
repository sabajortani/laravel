<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class DocumentController extends Controller
{
    protected $document;

    public function __construct(document $document)
    {
        $this->document = $document;
    }

    public function index()
    {
        $data1 = $this->document->get();

        return view('document', ['document' => $data1]);
    }

    public function document(Request $request)
    {
        $this->document->UserName= $request->UserName;
        $this->document->IDNo= $request->IDNo;
        $this->document->firtName= $request->firtName;
        $this->document->lastName= $request->lastName;
        $this->document->Email= $request->Email;
        $this->document->DateOfContract= $request->DateOfContract;



        $result = $this->document->save();

        return redirect('/document');
    }
}

