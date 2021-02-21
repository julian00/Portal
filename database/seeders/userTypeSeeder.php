<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('user_types')->truncate();

        DB::table('user_types')->insert(['type'=>"Admin"]);
        DB::table('user_types')->insert(['type'=>"martillero"]);
        DB::table('user_types')->insert(['type'=>"usuario"]);
    }
}
