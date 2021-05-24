<?php

use Illuminate\Database\Seeder;

class AtaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ataques')->insert([
            'tipo' =>   'Veneno',
            'ataque' =>   'Ácido',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Veneno',
            'ataque' =>   'Lanza mugre',
            'potencia' =>   '5',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Veneno',
            'ataque' =>   'Onda tóxica',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Veneno',
            'ataque' =>   'Residuos',
            'potencia' =>   '20',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Agua',
            'ataque' =>   'Búrbuja',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Agua',
            'ataque' =>   'Hidrobomba',
            'potencia' =>   '5',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Agua',
            'ataque' =>   'Acua Jet',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Agua',
            'ataque' =>   'Salmuera',
            'potencia' =>   '20',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Tierra',
            'ataque' =>   'Excavar',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Tierra',
            'ataque' =>   'Bomba Fango',
            'potencia' =>   '5',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Tierra',
            'ataque' =>   'Terratemblor',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Tierra',
            'ataque' =>   'Terremoto',
            'potencia' =>   '20',
        ]);
        
        DB::table('ataques')->insert([
            'tipo' =>   'Fuego',
            'ataque' =>   'Calcinación',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Fuego',
            'ataque' =>   'Lanzallamas',
            'potencia' =>   '5',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Fuego',
            'ataque' =>   'Sofoco',
            'potencia' =>   '10',
        ]);

        DB::table('ataques')->insert([
            'tipo' =>   'Fuego',
            'ataque' =>   'Infierno',
            'potencia' =>   '20',
        ]);
    }
}
