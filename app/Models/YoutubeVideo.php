<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoutubeVideo extends Model
{
    protected $fillable = [
        'title', 'thumbnailUrl', 'duration', 'uploadTime', 'views', 'author', 'videoUrl', 'description', 'subscriber', 'isLive'
    ];
}
