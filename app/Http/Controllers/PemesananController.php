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
            $orders = Order::where('user_id', auth()->user()->id)->whereNotIn('status', [Order::DONE, Order::CANCEL])->orderby('id', 'DESC')->paginate(5);
        } else {
            $orders = Order::where('user_id', auth()->user()->id)->whereIn('status', [Order::DONE, Order::CANCEL])->orderby('id', 'DESC')->paginate(5);
        }

        return view('pemesanan.index', [
            'orders' => $orders,
            'type'  => $type,
            'notifications' => auth()->user()->unreadNotifications
        ]);
    }

    public function show(Order $order)
    {
        return view('pemesanan.show', [
            'order' => $order,
            'notifications' => auth()->user()->unreadNotifications
        ]);
    }
}
