<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view("blogs", [
        "title" => $category->name,
        "blogs" => $category->blogs->load("category", "author"),
    ]);
});

Route::get("/login", [LoginController::class, "index"] )->name("login")->middleware("guest");

Route::post("/login", [LoginController::class, "login"]);

Route::get("/register", [RegisterController::class, "index"]);

Route::post("/register", [RegisterController::class, "store"]);


Route::get("/dashboard", function(){
    return view("dashboard.index");
})->middleware("auth");

Route::get("/dashboard/posts/check-slug", [DashboardPostController::class, "checkSlug"])->middleware("auth");

Route::resource("/dashboard/posts", DashboardPostController::class );


Route::post("/logout", [LoginController::class, "logout"]);
