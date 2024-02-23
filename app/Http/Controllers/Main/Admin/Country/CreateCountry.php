<?php

namespace App\Http\Controllers\Main\Admin\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCountry extends Controller
{
   public function __invoke()
   {
       return view('admin.country.create');
   }
}
