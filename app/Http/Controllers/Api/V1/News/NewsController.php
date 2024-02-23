<?php

namespace App\Http\Controllers\Api\V1\News;

use App\Http\Controllers\Controller;
use App\Http\Resources\News\NewsResource;
use App\Models\News;

class NewsController extends Controller
{
    public function getNews()
    {
        $data = News::all();
        return response(NewsResource::collection($data));
    }

    public function getNewsById(News $news)
    {
        $nextNews = News::where('id', '>', $news->id)->orderBy('id', 'asc')->first();
        $prevNews = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();

        isset($nextNews) ? $nextNews = $nextNews->id : null;
        isset($prevNews) ? $prevNews = $prevNews->id : null;
        $news = new NewsResource($news);

        return response([
            'news' => $news,
            'nextNews' => $nextNews,
            'prevNews' => $prevNews,
        ]);
    }

}
