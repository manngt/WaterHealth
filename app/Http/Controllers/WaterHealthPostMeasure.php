<?php

namespace App\Http\Controllers;

use App\WaterMeasure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class WaterHealthPostMeasure extends Controller
{
    public function index()
    {

        $water_measure = new WaterMeasure();
        $water_measure->measure = Input::get('measure');
        $water_measure->save();
        
        return [
          'message' => 'OK'
        ];
    }
}
