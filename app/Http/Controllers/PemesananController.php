<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $type = \request()->get('type') ?? 'active';

        if($type === 'active') {
            $orders = Order::whereNotIn('status', [Order::DONE, Order::CANCEL])->orderby('id', 'DESC')->paginate(5);
        } else {
            $orders = Order::whereIn('status', [Order::DONE, Order::CANCEL])->orderby('id', 'DESC')->paginate(5);
        }

        return view('pemesanan.index', [
            'orders' => $orders,
            'type'  => $type,
            'notifications' => auth()->user()->unreadNotifications()->paginate(5)
        ]);
    }

    public function show(Order $order)
    {
        return view('pemesanan.show', [
            'order' => $order
        ]);
    }
}
