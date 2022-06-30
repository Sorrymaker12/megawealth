<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\RealEstate;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RealEstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 15; $i++) {
            if ($i % 2 == 0) {
                // bikin house
                if ($i % 4 == 0) {
                    // house rent
                    RealEstate::create([
                        'id' => Str::uuid(),
                        'location' => $faker->streetAddress(),
                        'type' => 'House',
                        'sales_type' => 'Rent',
                        'price' => $faker->numberBetween(5000, 10000),
                        'image' => 'real_estate' . $i . '.jpg',
                        'status' => 'Available',
                    ]);
                } else {
                    // house buy
                    RealEstate::create([
                        'id' => Str::uuid(),
                        'location' => $faker->streetAddress(),
                        'type' => 'House',
                        'sales_type' => 'Buy',
                        'price' => $faker->numberBetween(250000, 600000),
                        'image' => 'real_estate' . $i . '.jpg',
                        'status' => 'Available',
                    ]);
                }
            } else {
                // bikin apartment
                if ($i % 3 == 0) {
                    // apartment jual
                    RealEstate::create([
                        'id' => Str::uuid(),
                        'location' => $faker->streetAddress(),
                        'type' => 'Apartment',
                        'sales_type' => 'Buy',
                        'price' => $faker->numberBetween(250000, 600000),
                        'image' => 'real_estate' . $i . '.jpg',
                        'status' => 'Available',
                    ]);
                } else {
                    // apartment rent
                    RealEstate::create([
                        'id' => Str::uuid(),
                        'location' => $faker->streetAddress(),
                        'type' => 'Apartment',
                        'sales_type' => 'Rent',
                        'price' => $faker->numberBetween(5000, 10000),
                        'image' => 'real_estate' . $i . '.jpg',
                        'status' => 'Available',
                    ]);
                }
            }
        }
    }
}
