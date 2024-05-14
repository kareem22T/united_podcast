<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "description",
        "type",
        "isInHero",
        "isInHero_created_at",
        "broadcaster",
        "youtube_link",
        "anghami_link",
        "spotify_link",
        "thumbnail_path",
        "created_at",
    ];

    // relationships
    public function  articles()
    {
        return $this->hasOne('App\Models\Article', 'channel_id');
    }


}
