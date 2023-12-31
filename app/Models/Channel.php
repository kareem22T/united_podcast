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
        "thumbnail_path",
        "created_at",
    ];

    // relationships
    public function  articles()
    {
        return $this->hasOne('App\Models\Article', 'channel_id');
    }


}
