<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function all(){
        return view('blogs', [
            "title" => "Blogs",
            "blogs" =>  Post::all()
        ]);

    }

    public function show($slug){
        return view('blog', [
            "title" => "Blog",
            "blog" =>  Post::find($slug)
        ]);
    }

}
