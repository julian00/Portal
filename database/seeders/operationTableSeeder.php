<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class operationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('operations')->truncate();

        DB::table('operations')->insert(['operation'=>"Alquiler"]);
        DB::table('operations')->insert(['operation'=>"Alquiler Temporal"]);
        DB::table('operations')->insert(['operation'=>"Emprendimiento"]);
        DB::table('operations')->insert(['operation'=>"Venta"]);
        DB::table('operations')->insert(['operation'=>"Venta/Alquiler"]);//este no se muestra en la lista
    }
}
