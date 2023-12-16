<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        "author_id",
        "channel_id",
        "title",
        "intro",
        "content",
        "type",
        "thumbnail_path",
        "created_at",
    ];
    
    // relationships
    public function author()
    {
        return $this->belongsTo('App\Models\Author', 'author_id');
    }

    public function channel()
    {
        return $this->belongsTo('App\Models\Channel', 'channel_id');
    }
}
