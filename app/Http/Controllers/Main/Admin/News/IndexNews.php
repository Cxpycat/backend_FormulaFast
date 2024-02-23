<?php

namespace App\Http\Controllers\Main\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexNews extends Controller
{
    public function __invoke()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }
}
