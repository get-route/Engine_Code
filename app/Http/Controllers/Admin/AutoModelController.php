<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auto\UpdateRequest;
use App\Models\Automobiles;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\ErrorHandler\ErrorRenderer\abbrClass;

class AutoModelController extends Controller
{
    public function index(){
        return view('admin.Auto.index');
    }

    public function data_auto(){
        $data_auto = Automobiles::paginate(40);
        return response()->json($data_auto);
    }

    public function update_auto(UpdateRequest $request, Automobiles $auto){
        $data = $request->validated();
        $automob_update = DB::table('comments')->where('id',$auto->id)->update(['public'=>$request->public]);
        return $automob_update;
    }
}
