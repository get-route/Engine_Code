<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Engine;
use Illuminate\Http\Request;

class EnginesController extends Controller
{
    //Вид админской страницы двигателей
    public function index(){
        return view('admin.engines.index');
    }
    //Котнроллер данных таблицы для Vue.js
    public function data_table(){
        $auto_data = Engine::paginate(40);
        return response()->json($auto_data);
    }
}
