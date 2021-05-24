@extends('layouts.app')

@section('content')
      <section class="banner_main">
         <div class="container">
          <center>
          <div class="col-md-6">
              @if(session()->has('data'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('data')['mensaje']}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
          </div>
          </center>
            <div class="row d_flex">
              @foreach ($pokemones as $pokemon)
               <div class="col-md-3">
                  <div class="card" style="background-color: #EFE7FF;">
                    <center><img src="{{asset($pokemon->imagen)}}" class="card-img-top" alt="..." style="width: 100px;"></center>
                    
                      <div class="card-body">
                        <h5 class="card-title"><center><b>{{$pokemon->nombre}}</b></center></h5>
                        <div class="card-text">
                          <b>COD: </b>{{$pokemon->cod}}<br>
                          <b>TIPO: </b>{{$pokemon->tipo}}
                       </div>
                        <br>
                        <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Pokemon_{{$pokemon->id}}" style="background-color: #242766; color: white;">
                          Elegir
                        </button></center>
                        <!-- Modal -->
                          <div class="modal fade" id="Pokemon_{{$pokemon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title" id="exampleModalLabel">{{$pokemon->nombre}}</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{{ url('SeleccionPokemon/'.$partida[0]->id) }}"  method="post">@csrf
                                  @foreach ($habilidades as $habilidad)
                                    @if($pokemon->id == $habilidad->id_pokemon)
                                      <b>Habilidad:</b> {{$habilidad->habilidad}}.<br><br>
                                      <center><img src="{{asset($habilidad->imagen)}}" class="card-img-top" alt="..."></center><br>
                                      <br>
                                    @endif
                                  @endforeach
                                  <input type="hidden" name="pokemon" id="pokemon" value="{{$pokemon->id}}">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  <button type="submit" class="btn btn-primary" style="background-color: #242766; color: white;">Guardar</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>
                    
                  </div><br>
               </div>
               <br>
              @endforeach
              <br>
            </div>
         </div>
      </section>
@endsection