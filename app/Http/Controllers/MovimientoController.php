<?php

namespace App\Http\Controllers;

use App\Movimiento;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function store(Request $request) 
    {
        //Recoger datos por 'POST'
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        if (!empty($params_array)) {
            $movimiento = new Movimiento();
            $movimiento->estado = $params_array['estado'];
            $movimiento->save();

            $data = [
                'code' => 200,
                'status' => 'success',
                'movimientos' => $movimiento  
            ];
        
        } else {
            $data = [
                'code' => 400,
                'status' => 'error',
                'message' => 'No se envió nada'
            ];
        }

        //Devolver resultado
        return response()->json($data, $data['code']);
    }
}
