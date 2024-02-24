<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\News\NewsResource;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return response(NewsResource::collection($news));
    }

    public function show(int $id)
    {
        $news = News::findOrFail($id);
        $nextNews = News::where('id', '>', $news->id)->orderBy('id', 'asc')->first();
        $prevNews = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();

        return response([
            'news' => NewsResource::make($news),
            'nextNews' => isset($nextNews) ? $nextNews->id : null,
            'prevNews' => isset($prevNews) ? $prevNews->id : null
        ]);
    }

}
