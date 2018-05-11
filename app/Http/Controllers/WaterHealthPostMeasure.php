<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WaterHealthPostMeasure extends Controller
{
    public function index()
    {
        return [
          'measure' => Input::get('measure')
        ];
    }
}
