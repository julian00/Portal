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
        $this->call(provinceTableSeeder::class);
        $this->call(cityTableSeeder::class);
        $this->call(neighborhoodTableSeeder::class);
        $this->call(userTypeTableSeeder::class);
        $this->call(currencyTableSeeder::class);
        $this->call(serviceTableSeeder::class);
        $this->call(ownershipTypeTableSeeder::class);
        $this->call(operationTableSeeder::class);
        $this->call(orientationTableSeeder::class);
    }
}
