<?php

namespace App\Models;


class Post 
{
    
    private static $blogs = [
        [
            "title" => "Blog Satu",
            "slug" => "blog-satu",
            "author" => "Ilham",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eius libero odio sapiente iusto deserunt dolorem repudiandae ea, explicabo dolores provident aperiam ullam expedita, dolore eveniet, itaque ad nulla aliquid!" 
        ],
        [
            "title" => "Blog Dua",
            "slug" => "blog-dua",
            "author" => "Wisnu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eius libero odio sapiente iusto deserunt dolorem repudiandae ea, explicabo dolores provident aperiam ullam expedita, dolore eveniet, itaque ad nulla aliquid!" 
        ],
        ];

    public static function all() {
        return collect(self::$blogs);
    }

    public static function find($slug) {
        $blogs = static::all();

        return $blogs->firstWhere("slug", $slug);
    }

    

}
