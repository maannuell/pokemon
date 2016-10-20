@extends('principal')

@section('encabezado')

   <h1>
            
            <small><img src="{{asset("imagenespoke/lpokemon.PNG")}}" width="200" height="100"></small>
          </h1>
    @stop

    @section('contenido')
    <form action="{{url('/actualizaritems')}}" method="POST">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Items</b></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Items</label>
                      <div class="col-sm-10">
                        <input type="text" name="item" class="form-control"  placeholder="Comprar Items" required="">
                      </div>
                    </div>
                 
                 
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                 
                   <button type="submit" class="btn btn-info pull-right">Agregar Items</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->

 
    @stop