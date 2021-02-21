<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ownershipTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('ownership_types')->truncate();

        DB::table('ownership_types')->insert(['type'=>"Campo"]);
        DB::table('ownership_types')->insert(['type'=>"Casa"]);
        DB::table('ownership_types')->insert(['type'=>"Cochera"]);
        DB::table('ownership_types')->insert(['type'=>"Departamento"]);
        DB::table('ownership_types')->insert(['type'=>"Duplex"]);
        DB::table('ownership_types')->insert(['type'=>"Galpon"]);
        DB::table('ownership_types')->insert(['type'=>"Hotel"]);
        DB::table('ownership_types')->insert(['type'=>"Local"]);
        DB::table('ownership_types')->insert(['type'=>"Oficina"]);
        DB::table('ownership_types')->insert(['type'=>"PH"]);
        DB::table('ownership_types')->insert(['type'=>"Terreno"]);
    }
}
