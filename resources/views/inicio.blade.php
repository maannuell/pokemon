@extends('principal')

@section('encabezado')

   <h1>
          
            <small><img src="{{asset("imagenespoke/lpokemon.PNG")}}" width="200" height="100"></small>
              <a href="{{url('/generarpdfPokemons')}}">
    <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
        </a>
          </h1>
    @stop

    @section('contenido')
 

@foreach($pokemontipo as $p)
  


<div class="col-md-4">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
 
@if ($ntipo->id===1)
    
                <div class="widget-user-header bg-red-active">
@elseif($ntipo->id==2)
    
                <div class="widget-user-header bg-blue-active">
@elseif($ntipo->id==3)
                <div class="widget-user-header bg-yellow-active">
@elseif($ntipo->id==4)
    
                <div class="widget-user-header bg-green-active">
@elseif($ntipo->id==5)
                <div class="widget-user-header bg-teal-active">
@elseif($ntipo->id==6)
    
                <div class="widget-user-header bg-black-active">
@elseif($ntipo->id==7)
                <div class="widget-user-header bg-purple-active">
@elseif($ntipo->id==8)
    
                <div class="widget-user-header bg-orange-active">
@elseif($ntipo->id==9)
                <div class="widget-user-header bg-gray-active">



@endif

                <!--div class="widget-user-header bg-red-active"-->
                  <h3 class="widget-user-username">{{$p->nombre}}</h3>
                  <h5 class="widget-user-desc">Tipo : {{$ntipo->tipo}}</h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="{{asset("imagenespoke/$p->imagen")}}" alt="User Avatar">
                 
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">{{$p->ko}}</h5>
                        <span class="description-text">PC</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">{{$p->ps}}</h5>
                        <span class="description-text">PS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">{{$p->caramelos}}</h5>
                        <span class="description-text">Caramelos</span>
                        <!--a href="{{asset("")}}"><img class="img-circle" src="{{asset("imagenespoke/caramelos.png")}}" width="20" height="20"></a-->
             <div class="dropup">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset("imagenespoke/caramelos.PNG")}}" class="user-image" alt="User Image" width="20" height="20">
                </a>
                 <ul class="dropdown-menu">
                  <!-- User image -->
              
          <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4>Agregar</h4>
          
            <a href="{{url("/agregarcaramelos")}}/{{$p->id_pokemon}}">
            <input type="submit" name="Agregar" class="btn btn-primary" value="Agregar Caramelos">
            </a>
            <a href="{{url("/actualizarpoder")}}/{{$p->id_pokemon}}">
            <input type="submit" name="AgregarPoder" class="btn btn-primary" value="Agregar Poder">
            </a>
          </div>
</div>
              
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->
             @endforeach
      @stop