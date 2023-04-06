<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function all(){
        $query = Post::latest();
        return view('blogs', [
            "title" => "Blogs",
            "blogs" =>  $query->filter(request(["search", "category", "author"]))->paginate(5)
        ]);
    }

    public function show(Post $post){
        return view('blog', [
            "title" => "Blog",
            "blog" =>  $post->load("category", "author")
        ]);
    }

}
