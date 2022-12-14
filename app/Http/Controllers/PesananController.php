<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function show(Service $service)
    {
        return view('pesanan.show', [
            'service' => $service,
        ]);
    }
}
