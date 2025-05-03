<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalmpayController extends Controller
{


    public function palmpay_webhook(request $request)
    {

        $request = "Palmpay Notification ====>>> ".  json_encode($request->all());
        send_notification($request);

    }

}
