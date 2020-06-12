<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{

	  public  function getPostInfo()
    {
       // dd("Hello"); exit();
        $postAllData = Post::all();
        //dd($postAllData);exit();
        return view('posts.information',compact('postAllData'));
    }


    public  function savePostInfor(Request $request)
    {
        //return $request->all();
        Post::create($request->all());
        return back();

    }

    public function updatePostInfor(Request $request)
    {
       // dd($request->post_id); exit();

        $post = Post::findOrFail($request->account_id);

        $post->update($request->all());
        return back();

    }

    public function deletePostInfor(Request $request)
    {
        //return $request->all();
        $post = Post::findOrFail($request->account_id);
        $post->delete();
        return back();

    }

}
