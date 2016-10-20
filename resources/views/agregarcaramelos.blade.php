@extends('principal')

@section('encabezado')

   <h1>
            
            <small><img src="{{asset("imagenespoke/lpokemon.PNG")}}" width="200" height="100"></small>
          </h1>
    @stop

    @section('contenido')
     <form action="{{url('/actualizarcaramelos')}}/{{$pokemons->id}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
  







   
<div class="box box-info">
                <div class="box-body with-border">
                  <h3 class="box-title">Agregar Caramelos</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Caramelos Disponibles: {{$items->item}}</label>
                      <div class="col-sm-10">
                        <input type="text" name="item" class="form-control"  placeholder="Agregar caramelos" required="">
                      </div>
                    </div>
                 
                 
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                 
                   <button type="submit" class="btn btn-info pull-right">Agregar caramelos</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
 <div class="col-md-4">
<div class="box box-widget widget-user">
<div class="widget-user-header bg-red-active">
   <h3 class="widget-user-username">{{$pokemons->nombre}}</h3>
                  <h5 class="widget-user-desc">Tipo : </h5>
                </div>
                <div class="widget-user-image">
                  <img class="img-circle" src="{{asset("imagenespoke/$pokemons->imagen")}}" alt="User Avatar">
                 
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">{{$pokemons->ko}}</h5>
                        <span class="description-text">PC</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">{{$pokemons->ps}}</h5>
                        <span class="description-text">PS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">{{$pokemons->caramelos}}</h5>
                        <span class="description-text">Caramelos</span>
                         </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->

 
    @stop