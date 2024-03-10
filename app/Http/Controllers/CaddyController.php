<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class CaddyController extends Controller {
    public function check(Request $request)
    {
        $authorizedDomains = [
            'spoonfedshop.local',
        ];

        if (in_array($request->query('domain'), $authorizedDomains)) {
            return response('Domain Authorized');
        }

        abort(503);
    }
}
