<?php

use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('pokemones')->insert([
            'cod' =>   'N.º024',
            'nombre' =>   'Arbok',
            'tipo' =>   'Veneno',
            'imagen' =>   'images/pokemones/Arbok.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º591',
            'nombre' =>   'Amoonguss',
            'tipo' =>   'Veneno',
            'imagen' =>   'images/pokemones/Amoonguss.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º015',
            'nombre' =>   'Beedrill',
            'tipo' =>   'Veneno',
            'imagen' =>   'images/pokemones/Beedrill.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º001',
            'nombre' =>   'Bulbasaur ',
            'tipo' =>   'Veneno',
            'imagen' =>   'images/pokemones/Bulbasaur.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º169',
            'nombre' =>   'Crobat',
            'tipo' =>   'Veneno',
            'imagen' =>   'images/pokemones/Crobat.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º658',
            'nombre' =>   'Greninja',
            'tipo' =>   'Agua',
            'imagen' =>   'images/pokemones/Greninja.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º484',
            'nombre' =>   'Palkia',
            'tipo' =>   'Agua',
            'imagen' =>   'images/pokemones/Palkia.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º245',
            'nombre' =>   'Suicune',
            'tipo' =>   'Agua',
            'imagen' =>   'images/pokemones/Suicune.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º382',
            'nombre' =>   'Kyogre',
            'tipo' =>   'Agua',
            'imagen' =>   'images/pokemones/Kyogre.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º009',
            'nombre' =>   'Blastoise',
            'tipo' =>   'Agua',
            'imagen' =>   'images/pokemones/Blastoise.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º643',
            'nombre' =>   'Reshiram',
            'tipo' =>   'Fuego',
            'imagen' =>   'images/pokemones/Reshiram.png',
            'status' =>   'Libre',
        ]);
        DB::table('pokemones')->insert([
            'cod' =>   'N.º250',
            'nombre' =>   'Ho-Oh',
            'tipo' =>   'Fuego',
            'imagen' =>   'images/pokemones/Ho-Oh.png',
            'status' =>   'Libre',
        ]);
        DB::table('pokemones')->insert([
            'cod' =>   'N.º006',
            'nombre' =>   'Charizard',
            'tipo' =>   'Fuego',
            'imagen' =>   'images/pokemones/Charizard.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º721',
            'nombre' =>   'Volcanion',
            'tipo' =>   'Fuego',
            'imagen' =>   'images/pokemones/Volcanion.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º257',
            'nombre' =>   'Blaziken',
            'tipo' =>   'Fuego',
            'imagen' =>   'images/pokemones/Blaziken.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º104',
            'nombre' =>   'Cubone',
            'tipo' =>   'Tierra',
            'imagen' =>   'images/pokemones/Cubone.png',
            'status' =>   'Libre',
        ]);
        DB::table('pokemones')->insert([
            'cod' =>   'N.º330',
            'nombre' =>   'Flygon',
            'tipo' =>   'Tierra',
            'imagen' =>   'images/pokemones/Flygon.png',
            'status' =>   'Libre',
        ]);
        DB::table('pokemones')->insert([
            'cod' =>   'N.º472',
            'nombre' =>   'Gliscor',
            'tipo' =>   'Tierra',
            'imagen' =>   'images/pokemones/Gliscor.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º553',
            'nombre' =>   'Krookodile',
            'tipo' =>   'Tierra',
            'imagen' =>   'images/pokemones/Krookodile.png',
            'status' =>   'Libre',
        ]);

        DB::table('pokemones')->insert([
            'cod' =>   'N.º464',
            'nombre' =>   'Rhyperior',
            'tipo' =>   'Tierra',
            'imagen' =>   'images/pokemones/Rhyperior.png',
            'status' =>   'Libre',
        ]);
    }
}
