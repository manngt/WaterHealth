<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WaterHealthPostMeasure extends Controller
{
    public function index()
    {
        dd(Input::get('measure'));
    }
}
