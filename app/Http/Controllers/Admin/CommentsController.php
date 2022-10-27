<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comments\UpdateComment;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function League\Flysystem\Local\delete;

class CommentsController extends Controller
{
    public function index()
    {
        return view('admin.Comments.index');
    }
    public function show(){
        $all_comments = \App\Models\Comments::paginate(20);
        return response()->json($all_comments);
    }
    public function update_public(UpdateComment $request, \App\Models\Comments $comment){
        $data = $request->validated();
        $public_comment = DB::table('comments')->where('id',$comment->id)->update(['public'=>$request->public]);
        return $public_comment;
    }
    public function delete_comment (\App\Models\Comments $comment){
        $delete_comment = DB::table('comments')->where('id',$comment->id)->delete();
        return $delete_comment;
    }
}
