<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\good;
use phpDocumentor\Reflection\DocBlock\Tags\Source;

class GoodController extends Controller
{
    protected $good;

    public function __construct(Good $good)
    {
        $this -> good = $good;
    }

    public function index()
    {
        $data = $this->good->get();

        return view('good', ['good' => $data]);
    }

    public function good(Request $request,good $good)
    {
        $this->good->owner_name= $request->owner_name;
        $this->good->name_of_good= $request->name_of_good;
        $this->good->good_code_auto= $request->good_code_auto;
        $this->good->id_no_of_employee= $request->id_no_of_employee;
        $this->good->no_of_unit_type= $request->no_of_unit_type;
        $this->good->strong_condition= $request->strong_condition;
        $this->good->expire_date= $request->expire_date;
        $this->good->quantity= $request->quantity;
        $this->good->no_of_packing_type= $request->no_of_packing_type;
        $this->good->no_of_bol= $request->no_of_bol;
        $this->good->entry_date= $request->entry_date;
        $this->good->save();

        return back()->withMessage('success');

/*


        function showAll()
        {
        $goods = $this ->good::paginate(30);

//        return $goods;

        return view('goods', ['good' => $goods,]);}

        public function edit($id)
    {
        $good =$this->good::where('good_code_auto', $id)->first();
//        return $good;
        return view('edit-good',[
            'good' => $good,
        ]);
    }

        public function update(Request $req, $id){
        $bol = $this->good::where('good_code_auto', $id)->update([
            'owner_name'=> $req->owner_name,
            'name_of_good'=> $req->name_of_good,
            'good_code_auto'=>$req->good_code_auto,
            'id_no_of_employee'=>$req->id_no_of_employee,
            'no_of_unit_type'=>$req->no_of_unit_type,
            'strong_condition'=>$req->strong_condition,
            'expire_date'=>$req->expire_date,
            'quantity'=>$req->quantity,
            'no_of_packing_type'=>$req->no_of_packing_type,
            'no_of_bol'=>$req->no_of_bol,
            'entry_date'=>$req->entry_date,
            '
        ]);

        return back()->withMessage("success");
         }

        public function delete($id){
        $good = $this->good::where("good_code_auto", $id)->delete();

        return back()->withMessage("success");

    }
*/


        return redirect("/good");
    }
}
