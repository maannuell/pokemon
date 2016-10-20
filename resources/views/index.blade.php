@extends('principal')

@section('encabezado')

   <h1>
            
            <small><img src="{{asset("imagenespoke/lpokemon.PNG")}}" width="200" height="100"></small>
          </h1>
    @stop

    @section('contenido')
    <div class="jumbotron">
            <h1>Ingenieria Web </h1>
            <p>Pagina principal de proyecto pokemon donde se muestran pokemons por tipos y se le pueden añadir mas caramelos</p>
            <p><a class="btn btn-primary btn-lg">Learn more</a></p>
        </div>
    @stop