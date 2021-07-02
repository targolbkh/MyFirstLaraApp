<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WpApiController extends Controller
{
    public function show()
    {
        $title = "Targol";
        return view('welcome', ['title' => $title]);
    }
}
