<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Julian',
            'email' => 'ajarizaga@gmail.com',
            'password' => bcrypt('Chupala')
        ]);
    }
}
