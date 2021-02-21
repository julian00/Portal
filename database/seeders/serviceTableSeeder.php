<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class serviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('services')->truncate();

        DB::table('services')->insert(['service'=>"Agua caliente individual"]);
        DB::table('services')->insert(['service'=>"Agua Corriente"]);
        DB::table('services')->insert(['service'=>"Agua Potable"]);
        DB::table('services')->insert(['service'=>"Alarma"]);
        DB::table('services')->insert(['service'=>"Amoblado completo"]);
        DB::table('services')->insert(['service'=>"Apto crédito"]);
        DB::table('services')->insert(['service'=>"Apto mascotas"]);
        DB::table('services')->insert(['service'=>"Apto profesional"]);
        DB::table('services')->insert(['service'=>"Armarios Empotrados"]);
        DB::table('services')->insert(['service'=>"Ascensor"]);
        DB::table('services')->insert(['service'=>"Balcon terraza"]);
        DB::table('services')->insert(['service'=>"Caldera Individual"]);
        DB::table('services')->insert(['service'=>"Calefacción a gas"]);
        DB::table('services')->insert(['service'=>"Calefacción central"]);
        DB::table('services')->insert(['service'=>"Calefacción individual"]);
        DB::table('services')->insert(['service'=>"Calefacción por aire"]);
        DB::table('services')->insert(['service'=>"Calefacción por radiadores"]);
        DB::table('services')->insert(['service'=>"Carpinteria de Aluminio"]);
        DB::table('services')->insert(['service'=>"Cloaca"]);
        DB::table('services')->insert(['service'=>"Cochera fija"]);
        DB::table('services')->insert(['service'=>"Cochera fija cubierta"]);
        DB::table('services')->insert(['service'=>"Cochera fija descubierta"]);
        DB::table('services')->insert(['service'=>"Cochera subterránea"]);
        DB::table('services')->insert(['service'=>"Construccion Reciente"]);
        DB::table('services')->insert(['service'=>"Deck"]);
        DB::table('services')->insert(['service'=>"Doble Acristalamiento"]);
        DB::table('services')->insert(['service'=>"Electricidad"]);
        DB::table('services')->insert(['service'=>"En construcción"]);
        DB::table('services')->insert(['service'=>"Estilo Moderno"]);
        DB::table('services')->insert(['service'=>"Estufas TB"]);
        DB::table('services')->insert(['service'=>"Gas Natural"]);
        DB::table('services')->insert(['service'=>"Gimnasio"]);
        DB::table('services')->insert(['service'=>"Hidromasaje"]);
        DB::table('services')->insert(['service'=>"Lavadero"]);
        DB::table('services')->insert(['service'=>"Parrilla"]);      
        DB::table('services')->insert(['service'=>"Palier privado"]);
        DB::table('services')->insert(['service'=>"Pavimento"]);
        DB::table('services')->insert(['service'=>"Pileta"]);
        DB::table('services')->insert(['service'=>"Portones eléctricos"]);
        DB::table('services')->insert(['service'=>"Portón Levadizo"]);
        DB::table('services')->insert(['service'=>"Quincho"]);
        DB::table('services')->insert(['service'=>"Rejas de seguridad"]);
        DB::table('services')->insert(['service'=>"Riverside view"]);
        DB::table('services')->insert(['service'=>"Sala de juegos"]);
        DB::table('services')->insert(['service'=>"Seguridad"]);
        DB::table('services')->insert(['service'=>"Seguridad 24Hs"]);
        DB::table('services')->insert(['service'=>"Seguridad Diurna"]);
        DB::table('services')->insert(['service'=>"Seguridad Porteria"]);
        DB::table('services')->insert(['service'=>"Semi pisos"]);
        DB::table('services')->insert(['service'=>"Solarium"]);
        DB::table('services')->insert(['service'=>"Suelo Radiante"]);
        DB::table('services')->insert(['service'=>"SUM"]);
        DB::table('services')->insert(['service'=>"Termotanque Individual"]);
        DB::table('services')->insert(['service'=>"Ubicación tranquila"]);
        DB::table('services')->insert(['service'=>"Ventanas doble acristalamiento"]);
        DB::table('services')->insert(['service'=>"Video Cámaras"]);
        DB::table('services')->insert(['service'=>"vista al mar"]);
    }
}
