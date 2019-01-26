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
        $this->document->date= $request->date;
        $this->document->doc_no_auto= $request->doc_no_auto;
        $this->document->no_of_bol= $request->no_of_bol;
        $this->document->code_of_store= $request->code_of_store;
        $this->document->employee_id= $request->employee_id;
        $this->document->no_of_doc_type= $request->no_of_doc_type;
        $this->document->no_of_unit_type= $request->no_of_unit_type;
        $this->document->quantity= $request->quantity;
        $this->document->owner_name= $request->owner_name;


        $result = $this->document->save();

        return redirect('/document');
    }
}

