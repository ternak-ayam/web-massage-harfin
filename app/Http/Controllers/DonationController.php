<?php

namespace App\Http\Controllers;

use App\Http\Traits\XenditPayment;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    use XenditPayment;

    public function pay(Request $request)
    {
        $invoice = $this->createDonation($request);

        return redirect()->away($invoice->path);
    }
}
