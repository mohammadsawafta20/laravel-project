<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\News;
class Newscontroller extends Controller
{
    //

    public function indexx()
    {
        
$care = Post::all();
        return view('electro.index',['cars'=>$care]);
       
    }
}
