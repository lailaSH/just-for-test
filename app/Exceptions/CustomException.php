<?php

namespace App\Exceptions;
use App\Http\Controllers;

use Exception;

class CustomException extends Exception
{
    public function sendResponse($result, $message)
    {
        //array with key and value
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        //return response with success (200)
        return response()->json($response, 200);
    }
    public function render($request)
    {       
        return $this->sendResponse(false,'exception');     
    }
}
