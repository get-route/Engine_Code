<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comments\CommentAll;
use App\Models\Automobiles;
use App\Models\Comments;
use App\Models\Engine;
use Illuminate\Http\Request;

class EnginesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($engine)
    {

        $engines_data = Engine::where('slug',$engine)->first();
        if (!$engines_data){
            abort(404);
        }
        $automobiles = $engines_data->automobiles;
        $random_engine = Engine::all()->values('name','slug','updated_at')->random(5);
        $random_model = Automobiles::all()->values('name','url','updated_at','photos')->random(3);
        $comments = Comments::where([['url_engine','=',$engines_data->id],['public','=','yes'],['parent_id','=',NULL]])->get();
        $comments_parent = Comments::where([['url_engine','=',$engines_data->id],['public','=','yes'],['parent_id','>=',0]])->get();
        return view('frontend.engine.index',compact('engines_data','automobiles','random_engine','random_model','comments','comments_parent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentAll $request)
    {
        $data = $request->all();
        $add_comment = Comments::create(['name'=>$request->name,'email'=>$request->email,'comment'=>$request->comment,'url_model'=>$request->url_model,'url_engine'=>$request->url_engine,'parent_id'=>$request->parent_id]);
        return $add_comment;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
