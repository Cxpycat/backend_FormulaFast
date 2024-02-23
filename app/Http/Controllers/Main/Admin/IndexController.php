<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   public function __invoke()
   {
       return view('admin.main.index');
   }
}
