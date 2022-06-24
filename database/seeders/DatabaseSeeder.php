<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // call office and real estate seeders
        $this->call(OfficeSeeder::class);
        $this->call(RealEstateSeeder::class);
        $this->call(UserSeeder::class);
    }
}
