@extends('layouts.app')

@section('content')

	<section class="banner_main">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			@if(session()->has('data'))
        			<div class="alert alert-success alert-dismissible fade show" role="alert">
					  {{session('data')['mensaje']}}
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					@endif
        			<center><h3 style="color: white;">CREAR PARTIDA</h3></center><br>
        			<form action="CrearPartida" method="post">@csrf

	        			<label style="color: white;">Jugador 1:</label>
	        			<input class="form-control" name="jugador1" id="jugador1" type="text" placeholder="Nombre del jugador" required>
	        			<br>
	        			<label style="color: white;">Jugador 2:</label>
	        			<input class="form-control" name="jugador2" id="jugador2" type="text" placeholder="Nombre del jugador" required>
	        			<br>
	        			<center><button type="submit" class="btn btn-light">CREAR</button></center>
        			</form>
        		</div>
        		<div class="col-md-6">
        			<center>
        			<table class="table">
					  <thead style="color: white;">
					    <tr>
					      <th scope="col">N°</th>
					      <th scope="col">Jugador 1</th>
					      <th scope="col">Jugador 2</th>
					      <th scope="col">Estatus</th>
					      <th scope="col">Jugar</th>
					    </tr>
					  </thead>
					  <tbody style="color: white;">
					    	@foreach ($partidas as $partida)
					    	<tr>
						      <th scope="row">{{$partida->id}}</th>
						      <td>{{$partida->jugador1}}</td>
						      <td>{{$partida->jugador2}}</td>
						      <td>{{$partida->status}}</td>
						      <td>
						      	@if($partida->status != "Finalizada")
						      		<a href="{{ url('Seleccion/'.$partida->id) }}"><button type="button" class="btn btn-success"><i class="fa fa-play-circle-o" aria-hidden="true"></i></button></a>
						      	@endif
						      </td>
					   		</tr>
						    @endforeach
					  </tbody>
					</table>
			      </center>
        		</div>
        	</div>
        </div>
    </section>

@endsection