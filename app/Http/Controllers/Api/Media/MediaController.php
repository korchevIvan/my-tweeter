<?php

namespace App\Http\Controllers\Api\Media;

use App\Http\Controllers\Controller;
use App\Http\Requests\Media\MediaStoreRequest;
use App\Models\TweetMedia;

class MediaController extends Controller
{
    public function __construct()
    {
//        $this->middleware(['auth:sanctum']);
    }

    /**
     * @param MediaStoreRequest $request
     * @return void
     */
    public function store(MediaStoreRequest $request)
    {

        $result = collect($request->media)->map(function ($media){
            return $this->addMedia($media);
        });
    }

    /**
     * @param $media
     * @return void
     */
    protected function addMedia($media) {
        $tweetMedia = TweetMedia::create([]);
        $tweetMedia->baseMedia()
            ->associate($tweetMedia->addMedia($media)->toMediaCollection())
            ->save();
    }
}
