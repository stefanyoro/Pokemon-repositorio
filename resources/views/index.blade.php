@extends('layouts.app')

@section('content')
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <center><img src="images/Imagen1.png" /></center>
                  <div class="text-bg">
                     <center><a href="{{ url('Partida') }}">CREAR PARTIDA</a></center>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection