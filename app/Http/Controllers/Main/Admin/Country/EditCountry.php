<?php

namespace App\Http\Controllers\Main\Admin\Country;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class EditCountry extends Controller
{
    public function __invoke(Country $country)
    {
        return view('admin.country.edit', compact('country'));
    }
}
