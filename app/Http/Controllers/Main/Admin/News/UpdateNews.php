<?php

namespace App\Http\Controllers\Main\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\UpdateRequest;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateNews extends Controller
{
    public function __invoke(UpdateRequest $request, News $news)
    {
        $data = $request->validated();
        $nameFile = Carbon::now()->format('d_m_y_H_i_s').'_'.Str::random(30).$data['img'];

        isset($data['img']) ?
            $data['img'] = Storage::disk('public')->put('/images'.$nameFile, $data['img']) :
            $data['img'] = $news->img;
        $news->update($data);

        return view('admin.news.edit', compact('news'));
    }
}
