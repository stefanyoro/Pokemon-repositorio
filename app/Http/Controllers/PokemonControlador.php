<?php

namespace App\Http\Controllers;

use Validator;
use App\Model\Pokemon;
use App\Model\Habilidad;
use App\Model\Partida;
use App\Model\Seleccion;
use App\Model\Ataque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Flash;
use Carbon\Carbon;

class PokemonControlador extends Controller
{
    public function Pagina_principal($id)
    {   
        $partida = Partida::where('id',$id)->get();
        $pokemones = Pokemon::where('status','Libre')->get();
        $habilidades = Habilidad::all();

        return view('seleccion', compact('pokemones','habilidades','partida'));
    }


    public function Partida_pagina()
    {
        $partidas = Partida::where('status','Libre')->get();
        return view('partida', compact('partidas'));
    }

    public function RegistrarPartida(Request $request)
    {
        $partida = new Partida;
        $partida->jugador1 = $request->jugador1;
        $partida->jugador2 = $request->jugador2;
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $partida->fecha = $date;
        $partida->save();

        return redirect()->back()->with('data',['mensaje'=>'¡Grandioso! ¡Partida creada con éxito!']);
    }
    
    public function Batalla()
    {   
        $selecciones = Seleccion::where('id_partida', 1)->get();
        $ataques = Ataque::all();

        return view('batalla', compact('selecciones','ataques'));
    }

    public function SeleccionPokemon(Request $request, $id)
    {
       
            $seleccion = new Seleccion;
            $seleccion->id_partida = $id;
            $seleccion->id_pokemon = $request->pokemon;
            $seleccion->vidas = 100;
            $seleccion->save();

            $pokemon = Pokemon::find($request->pokemon);
            $pokemon->status = "Escogido";
            $pokemon->save();

        if(Seleccion::where('id_partida',$id)->count('id_pokemon') < 2){
            return redirect()->back()->with('data',['mensaje'=>'¡Pokemon del jugador 1 escogido con éxito!']);
        } else {
            $selecciones = Seleccion::where('id_partida', $id)->get();
            $ataques = Ataque::all();

            return view('batalla',compact('selecciones','ataques'));
        }
        
    }

    public function CulminarPartida (Request $request){
        $partida = Partida::find($request->id_partida);
        $partida->status = "Finalizada";
        $partida->save();

        return view('index');
    }
}
