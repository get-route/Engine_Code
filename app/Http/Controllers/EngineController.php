<?php

namespace App\Http\Controllers;

use App\Http\Requests\Search\RequestSearching;
use App\Models\Advert;
use App\Models\Automobiles;
use App\Models\Engine;
use App\Models\Engines;
use Illuminate\Support\Facades\DB;

class EngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $random_engine = Engine::all('name','slug','updated_at')->random(5);
        $random_model = Automobiles::all('name','url','updated_at','photos')->random(3);
        $add_blocks = Advert::all('block');
        $advert = json_decode($add_blocks,true);
        return view('frontend.index', compact('random_engine','random_model','advert'));
        }
        public function search_engine(RequestSearching $request){

        $search_request = DB::table('engines')->where('name','LIKE',''.$request->request_search.'%')->pluck('name','slug');
        return response()->json($search_request);
        }

        public function search_model(RequestSearching $request){
        $search_model = DB::table('automobiles')->where('name','LIKE',''.$request->request_model.'%')->pluck('name','url');
        return response()->json($search_model);
        }




}
