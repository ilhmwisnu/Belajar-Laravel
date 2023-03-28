<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->unique();
            $table->foreignId("user_id");
            $table->text("body");
            $table->foreignId("category_id");
            $table->timestamps();
            $table->timestamp("published_at")->nullable();
        });

        // Post::create([
        //     "title" => "Blog Satu",
        //     "slug" => "blog-satu",
        //     "author" => "Ilham",
        //     "category_id" => 1,
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eius libero odio sapiente iusto deserunt dolorem repudiandae ea, explicabo dolores provident aperiam ullam expedita, dolore eveniet, itaque ad nulla aliquid!",
        // ]);

        // Post::create([
        //     "title" => "Blog Dua",
        //     "slug" => "blog-dua",
        //     "author" => "Wisnu",
        //     "category_id" => 2,
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eius libero odio sapiente iusto deserunt dolorem repudiandae ea, explicabo dolores provident aperiam ullam expedita, dolore eveniet, itaque ad nulla aliquid!",
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
