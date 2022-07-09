<?php

namespace App\Models;

use App\Media\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class TweetMedia extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = false;

    public function baseMedia() {
        return $this->belongsTo(Media::class, 'media_id');
    }
}
