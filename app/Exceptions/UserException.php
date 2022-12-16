<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserException extends Exception
{
    //

    public function render(Request $request)
    {
            return $request->expectsJson() ? new JsonResponse([
                'message' => 'user is lock',
                'status' => 403,
            ],403) : view('error');
    }
}
