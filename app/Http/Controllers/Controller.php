<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Exceptions\ErrorHandler;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseWithError($exception, $message, $messageParams = [], $errors = null, $statusCode = 417, $logError = true)
    {

        if ($logError) {
            ErrorHandler::report($exception);
        }
       

        if ($this->forbiddenRequest) {
            $statusCode = 403;
            $message = 'Forbidden';
        }
        if ($this->translate) {
            $message = $this->translateError($message, $messageParams);
        }
        $response = (object) [
            'message' => $message,
            'errors' => $errors,
            'exception' => $exception ? $exception->getMessage() : null,
        ];

        return response()->json($response, $statusCode);
    }
}
