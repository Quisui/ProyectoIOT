<?php

namespace App\Http\Controllers;

use App\Movimiento;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


class MovimientoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('api.auth', ['except' => ['index','getLastTen']]);    
    }
    
    public function index()
    {
        $movimientos = Movimiento::all();
        
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'movimientos' => $movimientos
        ]);
    }

    public function store(Request $request)
    {
        //Recoger datos por 'POST'
            $movimiento = new Movimiento();
            $movimiento->estado = "Activo";
            $movimiento->save();
            $data = [
                'code' => 200,
                'status' => 'success',
                'movimientos' => $movimiento
            ];
        //Devolver resultado
        return response()->json($data, $data['code']);
    }

    public function getLastTen(){
        $movimiento = Movimiento::all()->take(10);
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'movimiento' => $movimiento
        ]);
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
