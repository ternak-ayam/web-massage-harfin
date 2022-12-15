<?php

namespace App\Models\Traits;

trait GetPrice {
    public function getPrice()
    {
        return 'Rp'. number_format($this->price, 0, ',', '.');
    }
}
