<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luz;

class LucesController extends Controller
{
    public function update($id, Request $request)
    {
        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        if (!empty ($params_array)) {

            //Quitar lo que no quiero actualizar
            unset($params_array['id']);
            unset($params_array['nombre']);
            unset($params_array['r']);
            unset($params_array['g']);
            unset($params_array['b']);
            unset($params_array['created_at']);
            unset($params_array['updated_at']);
            
            //Actualizar 
            $luces = Luz::where('id', $id)->update($params_array);

            //Actualizar
            $luces = Luz::where('id', $id)->update($params_array);

            $data = [
                'code' => 200,
                'status' => 'success',
                'luces' => $params_array
            ];

        } else {
            $data = [
                'code' => 400,
                'status' => 'error',
                'message' => 'Estado incorrecto'
            ];
        }

        return response()->json($data, $data['code']);
    }
}
