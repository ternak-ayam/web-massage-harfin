<?php

namespace App\Http\Controllers;

use App\Models\Category;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'categories' => Category::all(),
            'notifications' => auth()->check() ? auth()->user()->unreadNotifications : []
        ]);
    }
}
