<?php

namespace App\Http\Controllers\Api\Timeline;

use App\Http\Controllers\Controller;
use App\Http\Resources\TweetCollection;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function __contstruct()
    {
        $this->middleware(['auth:sanctum']);
    }

    /**
     * @param Request $request
     * @return TweetCollection
     */
    public function index(Request $request)
    {
        $tweets = $request->user()
            ->tweetsFromFollowing()
            ->parent()
            ->latest()
            ->with([
                'user',
                'likes',
                'retweets',
                'replies',
                'entities',
                'media.baseMedia',
                'originalTweet.user',
                'originalTweet.likes',
                'originalTweet.retweets',
                'originalTweet.media.baseMedia'

            ])
            ->paginate(3);

        return new TweetCollection($tweets);
    }
}
