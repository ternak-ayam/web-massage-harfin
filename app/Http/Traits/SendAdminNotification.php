<?php

namespace App\Http\Traits;

use App\Models\Admin;
use App\Notifications\SendAdminOrderConfirmation;

trait SendAdminNotification {
    public function send($callback)
    {
        $admins = Admin::all();

        foreach ($admins as $admin) {
            $admin->notify($callback);
        }
    }
}
