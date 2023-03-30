<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function all(){
        return view('blogs', [
            "title" => "Blogs",
            "blogs" =>  Post::with(["category","author"])->get()
        ]);
    }

    public function show(Post $post){
        return view('blog', [
            "title" => "Blog",
            "blog" =>  $post->load("category", "author")
        ]);
    }

}
