<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/blogs', [PostController::class, "all"]);

Route::get("/blogs/{post:slug}", [PostController::class, "show"]);

Route::get("/category", function (){
    return view("categories", [
        "title" => "Daftar Category",
        "categories" => Category::all()
    ]);
});

Route::get("/category/{category:slug}", function (Category $category){
    return view("category", [
        "title" => $category->name,
        "blogs" => $category->blogs,
        // Post::all()->where("category_id", $category->id),
        "category" => $category
    ]);
});

Route::get("/authors/{author:username}", function (User $author){
    return view("author", [
        "title" => $author->username,
        "blogs" => $author->blogs,
        "author" => $author
    ]);
});
