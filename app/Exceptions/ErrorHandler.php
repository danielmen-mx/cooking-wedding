<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ErrorHandler
{
    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public static function report($exception, $context = [])
    {
        if ($exception === null) {
            return;
        }

        $context = collect($context)->toArray();
        $request = request()->all();
        if (count($request)) {
            try {
                $context = collect($context)->concat([
                    'request' => json_encode($request)
                ])->toArray();
            } catch (\Throwable $th) {
            }
        }

        if (is_object($exception)) {
            if (Handler::shouldntReportClass($exception)) {
                return;
            }
        } elseif (is_string($exception)) {
            logger()->error($exception, $context);
        }
    }
}
