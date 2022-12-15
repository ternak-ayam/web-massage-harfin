<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesananController extends Controller
{
    public function show(Request $request, Service $service)
    {
        $cities = Http::get("http://dev.farizdotid.com/api/daerahindonesia/provinsi")->body();

        return view('pesanan.show', [
            'service' => $service,
            'user' => $request->user(),
            'cities' => json_decode($cities, true)['provinsi'],
        ]);
    }
}
