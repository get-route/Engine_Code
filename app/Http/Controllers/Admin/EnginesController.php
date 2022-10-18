<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Engine\UpdateRequest;
use App\Models\Engine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnginesController extends Controller
{
    //Вид админской страницы двигателей
    public function index(){
        return view('admin.engines.index');
    }
    //Контроллер данных таблицы для Vue.js
    public function data_table(){
        $auto_data = Engine::paginate(40);
        return response()->json($auto_data);
    }
    //Обновление отдельной записи в Двигателях
    public function update_engine(UpdateRequest $request, Engine $engines){
        $data = $request->validated();
        //return $data;
        $update_engine = DB::table('engines')-> where('id',$engines->id)->update($data);
      return $update_engine;
    }
}
