<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'services' => Service::all(),
            'top_services' => Service::all()->random(3),
        ]);
    }
}
