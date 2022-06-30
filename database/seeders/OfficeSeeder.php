<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Office;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
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
            Office::create([
                'id' => Str::uuid(),
                'office_name' => $faker->city() . ' Office',
                'image' => 'office' . $i . '.jpg',
                'address' => $faker->streetAddress(),
                'contact_name' => $faker->firstName() . ' ' . $faker->lastName(),
                'phone_number' => $faker->phoneNumber(),
            ]);
        }
    }
}
