<?php

namespace App\Http\Controllers\Main\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class EditNews extends Controller
{
    public function __invoke(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }
}
