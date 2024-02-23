<?php

namespace App\Http\Controllers\Main\Admin\News;

use App\Http\Controllers\Controller;

class CreateNews extends Controller
{
    public function __invoke()
    {
        return view('admin.news.create');
    }
}
