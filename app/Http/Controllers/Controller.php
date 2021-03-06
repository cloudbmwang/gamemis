<?php

namespace App\Http\Controllers;

use App\Common\Utils;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendSuccessResponse()
    {
        return view('success');
    }

    protected function sendFailResponse()
    {
        return view('error');
    }

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    public function callAction($method, $parameters)
    {
        $res = call_user_func_array([$this, $method], $parameters);
        Log::info(json_encode([
            'header' => Request::header(),
            'url' => Request::fullUrl(),
            'request' => Request::all(),
            'response' => $res,
        ]));
        if (Request::ajax()) {
            return Utils::sendJsonSuccessResponse($res);
        }
        return $res;
    }
}
