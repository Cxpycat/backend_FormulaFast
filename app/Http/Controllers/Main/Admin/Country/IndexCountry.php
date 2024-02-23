<?php

namespace App\Http\Controllers\Main\Admin\Country;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class IndexCountry extends Controller
{
    public function __invoke()
    {
        $countries = Country::all();
       return view('admin.country.index', compact('countries'));
    }
}
