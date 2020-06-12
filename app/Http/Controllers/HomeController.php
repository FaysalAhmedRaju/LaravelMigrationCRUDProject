<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
   public function Index()
   {
      //  return view('home.index');
       $postAllData = Post::all();
       //dd($postAllData);exit();
       return view('posts.information',compact('postAllData'));
   }


}
