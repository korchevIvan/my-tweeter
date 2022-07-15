<?php

namespace App\Http\Controllers\Api\Tweets;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetReplyController extends Controller
{
    public function __contstruct()
    {
        $this->middleware(['auth:sanctum'])->only(['store']);
    }

    public function store(Tweet $tweet, Request $request) {
        dump('abc');
    }
}
