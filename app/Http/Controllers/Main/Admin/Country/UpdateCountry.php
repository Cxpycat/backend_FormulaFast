<?php

namespace App\Http\Controllers\Main\Admin\Country;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Country\UpdateRequest;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UpdateCountry extends Controller
{
    public function __invoke(UpdateRequest $request, Country $country)
    {
        $data = $request->validated();
        $nameFile = Carbon::now()->format('d_m_y_H_i_s').'_'.Str::random(30).$data['img'];
        isset($data['img']) ?
            $data['img'] = Storage::disk('public')->put('/images/flags/'.$nameFile, $data['img']) :
            $data['img'] = $country->img;
        $country->update($data);

        return view('admin.country.edit', compact('country'));
    }
}
