<?php

namespace App\Http\Controllers\Main\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class DeleteNews extends Controller
{
    public function __invoke(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }
}
