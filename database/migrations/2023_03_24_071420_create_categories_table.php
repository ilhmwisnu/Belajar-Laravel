<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->timestamps();
        });

        // Category::create([
        //     "name" => "Kategori 1",
        //     "slug" => "kategori-1"
        // ]);

        // Category::create([
        //     "name" => "Kategori 2",
        //     "slug" => "kategori-2"
        // ]);

        // Category::create([
        //     "name" => "Kategori 3",
        //     "slug" => "kategori-3"
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
