<?php

namespace App\Http\Controllers;

use App\WaterMeasure;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\Debug\Exception\FatalThrowableError;

class WaterMeasureController extends Controller
{
    public function store(Request $request)
    {
        $status = 404;
        $message = "Verificar operación";

        try
        {
            WaterMeasure::create($request->all());
            $status = 200;
            $message = "Medida guardada satisfactoriamente";
        }
        catch (QueryException $ex)
        {
            $status = 404;
            $message = "Verificar sentencia SQL";
        }


        return[
            'status' => $status,
            'message' => $message
        ];
    }
}