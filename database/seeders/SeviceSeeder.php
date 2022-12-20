<?php

namespace Database\Seeders;

use App\Models\AdditionalService;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceDetail;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents(storage_path("app/serviceDetails.json"));

        foreach (json_decode($data, true) as $service) {
            $srv = Service::create([
                'name' => $service['name'],
                'slug' => Str::slug($service['name']),
                'image' => $service['image'],
            ]);

            foreach ($service['categories'] as $category) {
                Category::create([
                    'service_id' => $srv->id,
                    'name' => $category['name'],
                    'slug' => Str::slug($category['name']),
                    'image' => $category['image'],
                ]);
            }


            foreach ($service['details'] as $detail) {
                ServiceDetail::create([
                    'service_id' => $srv->id,
                    'image' => $detail['image'],
                    'title' => $detail['name'],
                    'duration' => $detail['duration'],
                    'price' => $detail['price']
                ]);
            }

            foreach ($service['additionals'] as $additional) {
                AdditionalService::create([
                    'service_id' => $srv->id,
                    'name' => $additional['name'],
                    'image' => $additional['image'],
                    'duration' => $additional['duration'],
                    'price' => $additional['price'],
                    'description' => $additional['description']
                ]);
            }
        }
    }
}
