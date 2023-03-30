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

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo {
        return $this->belongsTo(User::class,"user_id");
    }

    // public function filter($querry, $ilters) {
    //     return $
    // }

}
