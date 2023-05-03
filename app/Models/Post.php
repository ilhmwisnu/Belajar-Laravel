<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "body",
        "category_id",
        "user_id",
        "published_at",
        "slug"
    ];

    protected $with = ["category", "author"];

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters["search"] ?? false, function ($query, $search) {
            return  $query->where("title","like", "%" . $search . "%")->orWhere("body", "like", "%" . $search . "%");
        });

        $query->when($filters["category"] ?? false, function ($query, $category){
            return $query->whereHas("category", function ($query) use($category) {
                return $query->where("slug", $category);
            } );
        });

        $query->when($filters["author"] ?? false, function ($query, $author){
            return $query->whereHas("author", function ($query) use($author) {
                return $query->where("username", $author);
            } );
        });
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

}
