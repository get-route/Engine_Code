<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comments\CommentAll;
use App\Models\Advert;
use App\Models\Automobiles;
use App\Models\Comments;
use App\Models\Engine;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($model)
    {
        $models_data = Automobiles::where('url',$model)->first();
        if (!$models_data){
            abort(404);
        }
        $img_model_arr = explode(' ',trim($models_data->photos));
        $engines_model = $models_data->engine;
        $random_engine = Engine::all()->values('name','slug','updated_at')->random(3);
        $random_model = Automobiles::all()->values('name','url','updated_at','photos')->random(5);
        $comments = Comments::where([['url_model','=',$models_data->id],['public','=','yes'],['parent_id','=',NULL]])->get();
        $comments_parent = Comments::where([['url_model','=',$models_data->id],['public','=','yes'],['parent_id','>=',0]])->get();
        $add_blocks = Advert::all('block');
        $advert_models = json_decode($add_blocks,true);
        return view('frontend.model.index',compact('models_data','img_model_arr','engines_model','random_model','random_engine','comments','comments_parent','advert_models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentAll $request)
    {
        //$data = $request->all();
        $add_comment = Comments::create(['name'=>$request->name,'email'=>$request->email,'comment'=>$request->comment,'url_model'=>$request->url_model,'url_engine'=>$request->url_engine,'parent_id'=>$request->parent_id]);
        return $add_comment;
    }

}
