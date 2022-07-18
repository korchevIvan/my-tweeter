<?php

namespace App\Http\Controllers\Api\Tweets;

use App\Events\Tweets\TweetWasCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\TweetStoreRequest;
use App\Http\Resources\TweetCollection;
use App\Models\Tweet;
use App\Models\TweetMedia;
use App\Tweets\TweetType;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * @return void
     */
    public function __contstruct()
    {
        $this->middleware(['auth:sanctum'])->only(['store']);
    }

    /**
     * @param Request $request
     * @return TweetCollection
     */
    public function index(Request $request) {
        $tweets = Tweet::with([
            'user',
            'likes',
            'retweets',
            'replies',
            'media.baseMedia',
            'originalTweet.user',
            'originalTweet.likes',
            'originalTweet.retweets',
            'originalTweet.media.baseMedia'

        ])
            ->find(explode(',', $request->ids));

        return new TweetCollection($tweets);
    }

    /**
     * @param TweetStoreRequest $request
     * @return void
     */
    public function store(TweetStoreRequest $request)
    {

        $tweet = $request->user()->tweets()->create(array_merge(
            $request->only('body'),
            ['type' => TweetType::TWEET]
        ));

        foreach ($request->media as $id) {
            $tweet->media()->save(TweetMedia::find($id));
        }

        dd($tweet->mentions->users());

        broadcast(new TweetWasCreated($tweet));
    }
}
