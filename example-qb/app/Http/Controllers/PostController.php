<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts=DB::table('posts')->get();
        return view('posts.index',compact('posts'));

    }
    public function create(){
        return view('posts.create');
    }

    public function insert(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return "the data is entered to database";
    }

    public function edit($id){
        $post=DB::table('posts')->where('id',$id)->first();//where id ==id
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request,$id){
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
       // return response("the data is updated");
        return redirect()->route('post.index');
    }
    public function delete($id){
        DB::table('posts')->where('id','=',$id)->delete();
        return redirect()->route('post.index');
    }
    public function deleteAll(){
        DB::table('posts')->delete();
        return redirect()->route('post.index');
    }
    public function deleteAllTruncate(){
        DB::table('posts')->truncate();
        return redirect()->route('post.index');
    }
}
