<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class neighborhoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('neighborhoods')->truncate();

        DB::table('neighborhoods')->insert(['neighborhood'=>"Aeroparque",'slug'=>"aeroparque",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Alfar",'slug'=>"alfar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Arenas del sur",'slug'=>"arenas-del-sur",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Arroyo Chapadmalal",'slug'=>"arroyo-chapadmalal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Autodromo",'slug'=>"autodromo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Batan",'slug'=>"batan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Belisario Roldan",'slug'=>"belisario-roldan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bernardino Rivadavia",'slug'=>"bernardino-rivadavia",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque Alegre",'slug'=>"bosque-alegre",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque grande",'slug'=>"bosque-grande",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque peralta ramos",'slug'=>"bosque-peralta-ramos",'id_city'=>1]); 
        DB::table('neighborhoods')->insert(['neighborhood'=>"Caisamar",'slug'=>"caisamar",'id_city'=>1]);   
        DB::table('neighborhoods')->insert(['neighborhood'=>"Camet",'slug'=>"camet",'id_city'=>1]);   
        DB::table('neighborhoods')->insert(['neighborhood'=>"Camino a Necochea",'slug'=>"camino-a-necochea",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Caribe",'slug'=>"caribe",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Centro",'slug'=>"centro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito",'slug'=>"cerrito",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito sur",'slug'=>"cerrito-sur",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Chapadmalal",'slug'=>"chapadmalal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Chauvin",'slug'=>"chauvin",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colina alegre",'slug'=>"colina-alegre",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colinas de Peralta Ramos",'slug'=>"colinas-de-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colinas verdes",'slug'=>"colinas-verdes",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colonia Barragan",'slug'=>"colonia-barragan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Constitución",'slug'=>"constitucion",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Coronel Dorrego",'slug'=>"coronel-dorrego",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Divino rostro",'slug'=>"divino-rostro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Don Bosco",'slug'=>"don-bosco",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Don Emilio",'slug'=>"don-emilio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Domingo Faustino Sarmiento",'slug'=>"domigo-faustino-sarmiento",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Dos de Abril",'slug'=>"dos-de-abril",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El boqueron",'slug'=>"el-boqueron",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El colmenar",'slug'=>"el-colmenar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El gaucho",'slug'=>"el-gaucho",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El grosellar",'slug'=>"el-grosellar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El jardin de Peralta Ramos",'slug'=>"el-jardin-de-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El jardin de Stella Maris",'slug'=>"el-jardin-de-stella-maris",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El marquesado",'slug'=>"el-marquesado",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El martillo",'slug'=>"el-martillo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El progreso",'slug'=>"el-progreso",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estacion Camet",'slug'=>"estacion-camet",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estacion Chapadmalal",'slug'=>"estacion-chaádmalal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estacion Norte",'slug'=>"estacion-norte",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estacion terminal",'slug'=>"estacion-terminal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estacion Jose Manuel",'slug'=>"estacion-jose-manuel",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Faro norte",'slug'=>"faro-norte",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Felix U. Camet",'slug'=>"felix-u-camet",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Florencio Sanchez",'slug'=>"florencio-sanchez",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Florentino Ameghino",'slug'=>"florentino-ameghino",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Fortunato e la plaza",'slug'=>"fortunato-de-la-plaza",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Fray Luis Beltran",'slug'=>"fray-luis-beltran",'id_city'=>1]);
            DB::table('neighborhoods')->insert(['neighborhood'=>"Funes y San Lorenzo",'slug'=>"funes-y-san-lorenzo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"General Belgrano",'slug'=>"general-belgrano",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"General Pueyrredon",'slug'=>"general-pueyrredon",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"General Roca",'slug'=>"general-roca",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"General San Martin",'slug'=>"general-san-martin",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Hipodromo",'slug'=>"hipodromo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Jose Hernandez",'slug'=>"jose-hernandez",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Jorge Newbery",'slug'=>"jorge-newbery",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Juan Gregorio de Las Heras",'slug'=>"juan-gregorio-de-las-heras",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Juramento",'slug'=>"juramento",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Armonia",'slug'=>"la-armonia",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Florida",'slug'=>"la-florida",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Germana",'slug'=>"la-germana",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Gloria de la peregrina",'slug'=>"la-gloria-de-la-peregrina",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Herradura",'slug'=>"la-herradura",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Peregrina",'slug'=>"la-peregrina",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La Perla",'slug'=>"la-perla",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Américas",'slug'=>"las-americas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Avenidas",'slug'=>"las-avenidas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Canteras",'slug'=>"las-canteras",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Dalias",'slug'=>"las-dalias",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Lilas",'slug'=>"las-lilas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Margaritas",'slug'=>"las-margaritas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las Retamas",'slug'=>"las-retamas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Leandro N. Alem",'slug'=>"leandro-alem",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Libertad",'slug'=>"libertad",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Lomas de Batan",'slug'=>"lomas-de-batan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Lomas del golf",'slug'=>"lomas-del-golf",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Lomas de Stella Maris",'slug'=>"lomas-de-stella-maris",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Lopez de gomara",'slug'=>"lopez-de-gomara",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los Acantilados",'slug'=>"los-acantilados",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los Andes",'slug'=>"los-andes",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los Pinares",'slug'=>"los-pinares",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los Tilos",'slug'=>"los-tilos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los Troncos",'slug'=>"los-troncos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Malvinas Argentinas",'slug'=>"malvinas-argentinas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Nueva Pompeya",'slug'=>"nueva-pompeya",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"nueve de julio",'slug'=>"nueve-de-julio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Nuevo golf",'slug'=>"nuevo-golf",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Camet",'slug'=>"parque-camet",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque el Casal",'slug'=>"parque-el-casal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque hermoso",'slug'=>"parque-hermoso",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque independencia",'slug'=>"parque-independencia",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque industrial",'slug'=>"parque-industrial",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Luro",'slug'=>"parque-luro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Montemar",'slug'=>"parque-montemar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Palermo",'slug'=>"parque-palermo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Peña",'slug'=>"parque-pena",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Peralta Ramos oeste",'slug'=>"peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Pinos de Anchorena",'slug'=>"pinos-de-anchorena",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa chapadmalal",'slug'=>"playa-chapadmalal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa grande",'slug'=>"playa-grande",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa los lobos",'slug'=>"playa-los-lobos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa Serena",'slug'=>"playa-serena",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Plaza Peralta Ramos",'slug'=>"plaza-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Primera Junta",'slug'=>"primera-junta",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Puerto",'slug'=>"puerto",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Punta mogotes",'slug'=>"punta-mogotes",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Quebradas de Peralta Ramos",'slug'=>"quebradas-de-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Regional",'slug'=>"regional",'id_city'=>1]);    
        DB::table('neighborhoods')->insert(['neighborhood'=>"Rumenco",'slug'=>"rumenco",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Antonio",'slug'=>"san-antonio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Carlos",'slug'=>"san-cayetano",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Cayetano",'slug'=>"san-carlos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Eduardo de Chapadmalal",'slug'=>"san-eduardo-de-chapadmalal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Eduardo del mar",'slug'=>"san-eduardo-del-mar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Geronimo",'slug'=>"san-geromino",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Jacinto",'slug'=>"san-jacinto",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Jorge",'slug'=>"san-jorge",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San José",'slug'=>"san-jose",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Juan",'slug'=>"san-juan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Patricio",'slug'=>"san-patricio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Salvador",'slug'=>"san-salvador",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Celina",'slug'=>"santa-celina",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Clara del mar",'slug'=>"santa-clara-del-mar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Mónica",'slug'=>"santa-monica",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Paula",'slug'=>"santa-paula",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rita",'slug'=>"santa-rita",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rosa de lima",'slug'=>"santa-rosa-de-lima",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rosa del mar de Peralta Ramos",'slug'=>"santa-rosa-del-mar-de-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Sierra de los padres",'slug'=>"sierra-de-los-padres",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Termas Huinco",'slug'=>"termas-huinco",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Valle hermoso",'slug'=>"valle-hermoso",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa Lourdes",'slug'=>"villa-lourdes",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa primera",'slug'=>"villa-primera",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa serrana",'slug'=>"villa-serrana",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Virgen de lujan",'slug'=>"virgen-de-lujan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Zacagnini",'slug'=>"zacagnini",'id_city'=>1]);
    }
}
