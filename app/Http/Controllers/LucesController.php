<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luz;

class LucesController extends Controller
{
    public function update($id, Request $request)
    {      
            if ($estado_led = Luz::Where('id', $id)->get(['estado']))
            {
                   $estado_led= Luz::Where('id',$id)->update(['estado'=>0]);
            }
            else
            {
                $estado_led= Luz::Where('id',$id)->update(['estado'=>1]);
            }

            $data = [
                'code' => 200,
                'status' => 'success',

            ];
            return response()->json($data, $data['code']);
        }

        
    }

