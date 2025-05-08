<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($data,$message) {
        $response = [
            'status'=>True,
            'data'=>$data['data'],
            'message'=>$message,
        ];

        return response()->json($response,200);
    }


    public function sendError($message,$code) {
        $response = [
            'status'=>false,
            'message'=>$message,
        ];

        return response()->json($response,$code);
    }
}
