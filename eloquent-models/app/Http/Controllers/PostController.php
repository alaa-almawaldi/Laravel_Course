<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::all();
        //$post=Post::get();
        return view('posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //insert
    {
//        $post=new Post(); //model
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->save();//save in database

        //2" way
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body
            //you can use $request->all()
    ]);
        return response("data is stored");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $post=Post::onlyTrashed()->get();
        return view('posts.softDelete',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $post=Post::findorfail($id);//validate if id is existed
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post=Post::findorfail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
//        other way
//        Post::update([
//            'title'=>$request->title,
//            'body'=>$request->body
//        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       // Post::findorfail($id)->delete();
         Post::destroy($id);
        return redirect()->route('posts.index');
    }

    public function restore($id){
        Post::onlyTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }

    public function forceDelete($id){
        Post::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
}
}
