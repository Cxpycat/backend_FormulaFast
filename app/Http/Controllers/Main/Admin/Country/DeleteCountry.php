<?php

namespace App\Http\Controllers\Main\Admin\Country;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class DeleteCountry extends Controller
{
    public function __invoke(Country $country)
    {
        $country->delete();

        return redirect()->route('country.index');
    }
}
