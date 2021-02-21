<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orientationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('orientations')->truncate();

        DB::table('orientations')->insert(['orientation'=>"Contrafrente"]);
        DB::table('orientations')->insert(['orientation'=>"Frente"]);
    }
}
