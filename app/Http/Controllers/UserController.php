<?php

namespace App\Http\Controllers;

use App\Helper\HttpHelper;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function routeUserService(Request $request)
    {
        return (array)HttpHelper::sendRequest($request,getenv("USER_SERVICE_BASE_URL"));
    }

}
