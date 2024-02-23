<?php

namespace App\Http\Controllers\Main\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreRequest;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreNews extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $nameFile = Carbon::now()->format('d_m_y_H_i_s').'_'.Str::random(30).$data['img'];
        $data['img'] = Storage::disk('public')->putFileAs('/images', $data['img'], $nameFile);
        News::firstOrCreate($data);

        return redirect()->route('news.index');
    }
}
