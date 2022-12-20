<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $orders = Order::orderby('id', 'DESC')->paginate(10);

        return view('pemesanan.index', [
            'orders' => $orders
        ]);
    }
}
