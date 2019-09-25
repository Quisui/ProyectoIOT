<?php

namespace App\Http\Controllers;

use App\Movimiento;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


class MovimientoController extends Controller
{
    public function index()
    {
        $movimientos = Movimiento::all();
        return response()->json($movimientos);
    }

    public function store(Request $request)
    {
        //Recoger datos por 'POST'
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        if (!empty($params_array)) {
            $movimiento = new Movimiento();
            $movimiento->estado = "Activo";
            $params_array['estado'];
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


    public function getByRange($from, $to)
    {
        $movimiento = Movimiento::whereBetween('created_at', [$from,$to])->get();
        if(is_object($movimiento)){
            return response()->json([
                'status' => 'success',
                'Movimientos' => $movimiento
            ], 200);
        }else{
            return response()->json([
                'status' => 'error',
                'error' => '404'
            ], 200);
        }


    }

}
