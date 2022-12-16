<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Category::all() as $service) {
            Service::create([
                'name' => $service->name,
                'category_id' => $service['category_id'],
                'slug'  => $service->slug,
                'image' => $service['image'],
            ]);
        }

    }
}
