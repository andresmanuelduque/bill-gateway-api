<?php

namespace App\Http\Controllers;

use App\Helper\HttpHelper;
use Illuminate\Http\Request;

class BillController extends Controller
{

    public function routeBillService(Request $request)
    {
        return (array)HttpHelper::sendRequest($request,getenv("BILL_SERVICE_BASE_URL"));
    }

}
