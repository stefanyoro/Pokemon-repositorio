@extends('layouts.app')

@section('content')
  <section class="banner_main">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <center><img class="card-img-top" src="{{asset($selecciones[0]->pokemon->imagen)}}" alt="Card image cap" style="width: 100px;"></center>
            <div class="card-body">
              <h5 class="card-title"><center><b>Jugador 1: {{$selecciones[0]->pokemon->nombre}}</b></center></h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Poder</th>
                    <th scope="col">Potencia</th>
                    <th scope="col">Usar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ataques as $ataque)
                    @if($selecciones[0]->pokemon->tipo == $ataque->tipo)
                      <tr>
                        <td>{{$ataque->ataque}}</td>
                        <td>{{$ataque->potencia}}%</td>
                        <td>
                          <button type="button" class="btn btn-outline-danger" id="jugador1_{{$ataque->id}}" value="{{$ataque->potencia}}"><i class="fa fa-check-circle-o" aria-hidden="true"></i></button>

                        </td>
                      </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <center><b>BATALLA POKEMON: WON BATTLE</b></center>
              <center>{{$selecciones[0]->partida->jugador1}} <b>VS</b> {{$selecciones[1]->partida->jugador2}}</center><br>
              <div class="row">
                <div class="col-md-5">
                  <center><img src="{{asset($selecciones[0]->pokemon->imagen)}}" style="width: 200px;"></center>
                  <center><h2 id="total1">%</h2></center>
                  <input type="hidden" name="vida1" id="vida1" value="{{$selecciones[1]->vidas}}"><br>
                </div>
                <div class="col-md-2">
                  <h1>VS</h1>
                </div>
                <div class="col-md-5">
                  <center><img src="{{asset($selecciones[1]->pokemon->imagen)}}" style="width: 200px;"></center>
                  <center><h2 id="total">%</h2></center>
                  <input type="hidden" name="vida2" id="vida2" value="{{$selecciones[1]->vidas}}"><br>
                </div>
              </div>
                              <center><span id="mensaje" style="color:red;"></span></center><br>
                              <center><span id="ganador" style="color:green;"></span></center><br>
                              <form action="TerminarPartida" method="post">@csrf
                                <input type="hidden" name="id_partida" id="id_partida" value="{{$selecciones[0]->id_partida}}">
                                  <center><button type="submit" class="btn btn-secondary">Culminar</button></center>
                              </form>
            </div>
          </div>
        </div>
         <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <center><img class="card-img-top" src="{{asset($selecciones[1]->pokemon->imagen)}}" alt="Card image cap" style="width: 100px;"></center>
            <div class="card-body">
              <h5 class="card-title"><center><b>Jugador 2: {{$selecciones[1]->pokemon->nombre}}</b></center></h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Poder</th>
                    <th scope="col">Potencia</th>
                    <th scope="col">Usar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ataques as $ataque)
                    @if($selecciones[1]->pokemon->tipo == $ataque->tipo)
                      <tr>
                        <td>{{$ataque->ataque}}</td>
                        <td>{{$ataque->potencia}}%</td>
                        <td>
                          <button type="button" class="btn btn-outline-danger" id="jugador2_{{$ataque->id}}"  value="{{$ataque->potencia}}"><i class="fa fa-check-circle-o" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                    @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          </div>
      </div>
    </div>
      
     
     
  </section>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
      //ATAQUE DE JUGADOR 1 
      $("#jugador1_1").click(function(){
          var ataque1 = $("#jugador1_1").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque1;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Toma esto!');
        
      });

      $("#jugador1_2").click(function(){
          var ataque2 = $("#jugador1_2").attr("value");
          var vida_2=document.getElementById("vida2").value;
          
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Ja, vas perdiendo!');
      });

      $("#jugador1_3").click(function(){
          var ataque2 = $("#jugador1_3").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Te voy a ganar!');
      });

      $("#jugador1_4").click(function(){
          var ataque2 = $("#jugador1_4").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Ten un poco de esto!');
      });

      $("#jugador1_5").click(function(){
          var ataque2 = $("#jugador1_5").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Soy el mejor!');
      });

      $("#jugador1_6").click(function(){
          var ataque2 = $("#jugador1_6").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Quieres más de esto!');
      });
      
      $("#jugador1_7").click(function(){
          var ataque2 = $("#jugador1_7").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Toma, toma!');
      });
                                                
      $("#jugador1_8").click(function(){
         var ataque2 = $("#jugador1_8").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Batallaa!');
      });

      $("#jugador1_9").click(function(){
          var ataque2 = $("#jugador1_9").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Gáname si puedes!');
      });

      $("#jugador1_10").click(function(){
          var ataque2 = $("#jugador1_10").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Te derrotaré!');
      });

      $("#jugador1_11").click(function(){
          var ataque2 = $("#jugador1_11").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Eres un Pokémon pérdido!');
      });

      $("#jugador1_12").click(function(){
          var ataque2 = $("#jugador1_12").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡No puedo perder!');
      });

      $("#jugador1_13").click(function(){
          var ataque2 = $("#jugador1_13").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Soy un maestro Pokémon!');
      });

      $("#jugador1_14").click(function(){
          var ataque2 = $("#jugador1_14").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Eres un iluso!');
      });

      $("#jugador1_15").click(function(){
          var ataque2 = $("#jugador1_15").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¿Eso es lo que tienes?');
      });

      $("#jugador1_16").click(function(){
          var ataque2 = $("#jugador1_16").attr("value");
          var vida_2=document.getElementById("vida2").value;
          var totalVida2 = vida_2;
          if(totalVida2 != 0){
            totalVida2 = totalVida2 - ataque2;
          }else if(totalVida2 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida2").attr("value",totalVida2);
          $('#total').text(totalVida2);
          $('#mensaje').text('¡Ja, vas perdiendo!');
      });

      //ATAQUE DE JUGADOR 2

      $("#jugador2_1").click(function(){
          var ataque2 = $("#jugador2_1").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 1 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Toma esto!');
      });

      $("#jugador2_2").click(function(){
          var ataque2 = $("#jugador2_2").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Ja, vas perdiendo!');
      });

      $("#jugador2_3").click(function(){
          var ataque2 = $("#jugador2_3").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Te voy a ganar!');
      });

      $("#jugador2_4").click(function(){
          var ataque2 = $("#jugador2_4").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Ten un poco de esto!');

      });

      $("#jugador2_5").click(function(){
         var ataque2 = $("#jugador2_5").attr("value");
         var totalVida1 = vida_1;
          var vida_1=document.getElementById("vida1").value;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Soy el mejor!');
      });

      $("#jugador2_6").click(function(){
          var ataque2 = $("#jugador2_6").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Toma, toma!');
      });
      
      $("#jugador2_7").click(function(){
          var totalVida1 = vida_1;
          var ataque2 = $("#jugador2_7").attr("value");
          var vida_1=document.getElementById("vida1").value;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Quieres más de esto!');
      });
                                                
      $("#jugador2_8").click(function(){
          var ataque2 = $("#jugador2_8").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Batallaa!');
      });

      $("#jugador2_9").click(function(){
          var ataque2 = $("#jugador2_9").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Gáname si puedes!');
      });

      $("#jugador2_10").click(function(){
          var ataque2 = $("#jugador2_10").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Te derrotaré!');
      });

      $("#jugador2_11").click(function(){
          var ataque2 = $("#jugador2_11").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Eres un Pokémon pérdido!');
      });

      $("#jugador2_12").click(function(){
          var ataque2 = $("#jugador2_12").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡No puedo perder!');
      });

      $("#jugador2_13").click(function(){
          var ataque2 = $("#jugador2_13").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Soy un maestro Pokémon!');
      });

      $("#jugador2_14").click(function(){
          var ataque2 = $("#jugador2_14").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Eres un iluso!');
      });

      $("#jugador2_15").click(function(){
          var ataque2 = $("#jugador2_15").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¿Eso es lo que tienes?');
      });

      $("#jugador2_16").click(function(){
         var ataque2 = $("#jugador2_16").attr("value");
          var vida_1=document.getElementById("vida1").value;
          var totalVida1 = vida_1;
          var totalVida1 = vida_1;
          if(totalVida1 != 0){
            totalVida1 = totalVida1 - ataque2;
          }else if(totalVida1 == 0){
            $('#ganador').text('¡El jugador 2 es el ganador!');
          }
          $("#vida1").attr("value",totalVida1);
          $('#total1').text(totalVida1);
          $('#mensaje').text('¡Ja, vas perdiendo!');
      });
     

});
</script>