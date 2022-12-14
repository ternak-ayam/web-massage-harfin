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
        $faker = Factory::create('id_ID');

        $services = [
            [
                'category_id' => Category::where('slug', 'massage')->first()->id,
                'slug'  => 'massage',
                'name'  => 'Massage 1',
                'image' => $faker->imageUrl(),
            ],
            [
                'category_id' => Category::where('slug', 'haircut-male')->first()->id,
                'slug'  => 'haircut_male',
                'name'  => 'Haircut Male 1',
                'image' => $faker->imageUrl(),
            ],
            [
                'category_id' => Category::where('slug', 'haircut-female')->first()->id,
                'slug'  => 'haircut_female',
                'name'  => 'Haircut Female 1',
                'image' => $faker->imageUrl(),
            ],
            [
                'category_id' => Category::where('slug', 'reflexology')->first()->id,
                'slug'  => 'reflexology',
                'name'  => 'Reflexology 1',
                'image' => $faker->imageUrl(),
            ],
            [
                'category_id' => Category::where('slug', 'hair-care')->first()->id,
                'slug'  => 'hair_care',
                'name'  => 'Haircut Care 1',
                'image' => $faker->imageUrl(),
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'name' => $service['name'],
                'category_id' => $service['category_id'],
                'slug' => $service['slug'],
                'image' => $service['image'],
            ]);
        }
    }
}
