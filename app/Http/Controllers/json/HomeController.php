<?php

namespace App\Http\Controllers\json;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        return view('json.home', ['name' => 'Json beautifier', 'path' => 'json_app']);
    }
}
