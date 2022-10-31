<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdBlock\AdRequest;
use App\Models\Advert;
use Illuminate\Support\Facades\DB;

class AdController extends Controller
{
    public function index(){
        return view('admin.ad.index');
    }

    public function update_add(AdRequest $request){
        $data = $request->only(['block1','block2','block3','block4','block5','block6','block7','block8',]);
        $data['block'] = json_encode($data);
        $advert_blocks= DB::table('adverts')->where('id',4)->update(['block'=>$data['block']]);
        return $advert_blocks;
    }
    public function get_add(){
        $update_blocks = Advert::all('block','id')->where('id','=',4);
        return response()->json($update_blocks);
    }
}
