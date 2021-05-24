<?php

use Illuminate\Database\Seeder;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('habilidades')->insert([
            'id_pokemon' =>   '1',
            'habilidad' =>   'Mudar, intimidación',
            'imagen' =>   'images/habilidades/1.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '2',
            'habilidad' =>   'Efecto espora',
            'imagen' =>   'images/habilidades/2.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '3',
            'habilidad' =>   'Enjambre',
            'imagen' =>   'images/habilidades/3.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '4',
            'habilidad' =>   'Espesura',
            'imagen' =>   'images/habilidades/4.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '5',
            'habilidad' =>   'Foco interno',
            'imagen' =>   'images/habilidades/5.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '6',
            'habilidad' =>   'Torrente',
            'imagen' =>   'images/habilidades/6.png',
        ]);

         DB::table('habilidades')->insert([
            'id_pokemon' =>   '7',
            'habilidad' =>   'Presión',
            'imagen' =>   'images/habilidades/7.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '8',
            'habilidad' =>   'Presión',
            'imagen' =>   'images/habilidades/8.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '9',
            'habilidad' =>   'Llovizna',
            'imagen' =>   'images/habilidades/9.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '10',
            'habilidad' =>   'Torrente',
            'imagen' =>   'images/habilidades/10.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '11',
            'habilidad' =>   'Turbollama',
            'imagen' =>   'images/habilidades/11.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '12',
            'habilidad' =>   'Presión',
            'imagen' =>   'images/habilidades/12.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '13',
            'habilidad' =>   'Mar Llamas',
            'imagen' =>   'images/habilidades/13.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '14',
            'habilidad' =>   'Absorve agua',
            'imagen' =>   'images/habilidades/14.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '15',
            'habilidad' =>   'Mar llamas',
            'imagen' =>   'images/habilidades/15.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '16',
            'habilidad' =>   'Cabeza roca, Pararrayos',
            'imagen' =>   'images/habilidades/16.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '17',
            'habilidad' =>   'Levitación',
            'imagen' =>   'images/habilidades/17.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '18',
            'habilidad' =>   'Velo arena, Corte fuerte',
            'imagen' =>   'images/habilidades/18.png',
        ]);

        DB::table('habilidades')->insert([
            'id_pokemon' =>   '19',
            'habilidad' =>   'Intimidación',
            'imagen' =>   'images/habilidades/19.png',
        ]);
        DB::table('habilidades')->insert([
            'id_pokemon' =>   '20',
            'habilidad' =>   'Pararrayos, Roca sólida',
            'imagen' =>   'images/habilidades/20.png',
        ]);
    }
}
