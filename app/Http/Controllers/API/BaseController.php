<?php


namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller; 

class BaseController extends Controller
{
    
    public function sendResponse( mixed $result,  string $message = '', int $code = 200): JsonResponse
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, $code);
    }

    
    public function sendError($error, $errorMessages = [], $code = 404): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}