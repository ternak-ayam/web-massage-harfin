<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Voucher;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            Voucher::updateOrCreate([
                'user_id' => $user->id,
                'code' => 'JLIFEPRO5K'
            ], [
                'user_id' => $user->id,
                'code' => 'JLIFEPRO5K',
                'name' => 'Voucher Diskon 5K',
                'description' => 'Voucher diskon yang bisa digunakan seluruh pengguna ' . config('app.name'),
                'image' => 'https://i.ibb.co/9WsScJw/Biru-dan-Putih-Ilustrasi-Kreatif-Promosi-Voucher-Belanja-Instagram-Post.png',
                'type' => Voucher::PERSONAL,
                'quantity' => 100,
                'amount_type' => Voucher::DOUBLE,
                'amount' => 5000,
                'max_amount' => 5000,
                'min_order' => 0
            ]);
        }
    }
}
