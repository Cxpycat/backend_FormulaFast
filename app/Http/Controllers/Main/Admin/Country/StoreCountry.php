<?php

namespace App\Http\Controllers\Main\Admin\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Country\StoreRequest;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StoreCountry extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $nameFile = Carbon::now()->format('d_m_y_H_i_s').'_'.Str::random(30).$data['img'];
        $data['img'] = Storage::disk('public')->put('/images/flags/'.$nameFile, $data['img']);
        Country::firstOrCreate($data);

        return redirect()->route('country.index');
    }
}
