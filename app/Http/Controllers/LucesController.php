<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luz;

class LucesController extends Controller
{
    public function update($id, Request $request)
    {
            $estado_led = Luz::find($id);
            if ($estado_led->estado == 0)
            {
                $estado_led->estado = 1;

            } else {
                $estado_led->estado = 0;
            }

            $estado_led->save();

            $data = [
                'code' => 200,
                'status' => 'success',
                $estado_led
            ];
            return response()->json($data, $data['code']);
        }



}
