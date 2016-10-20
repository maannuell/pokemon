<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
use App\Tipo;
use App\Item;
use DB;
use App\Http\Requests;

class PokemonController extends Controller
{
    //
       public function consultar(){
        $pokemons=Pokemon::all();
        return view('inicio',compact('pokemons'));
    
    }

  public function editar($id){
  	
    $tipos=Tipo::all();
  	$pokemons=Pokemon::find($id);
  	
  	 $items=DB::table('items')
    	->select('item')
    	->where('id','=','1')
		->first();


 return view('agregarcaramelos',compact('tipos','pokemons','items'));

  }

  public function actualizar($id, Request $datos){

     $tipos=Tipo::all();
     $items=Item::all();
     $entrada= new Item();
     $actuali=DB::table('items')
    	->select('item')
    	->where('id','=','1')
		->first();

       $entrada->item=$datos->input('item');
     if(($actuali)<($entrada->item)){
     	echo "error";
     }
 

     $tipo=DB::table('poc_tipos')
     ->select('id_tipo')
     ->where('id_pokemon','=', $id)
     ->first();
   
     DB::table('items')
            ->where('id', 1)
            ->update(['item' => $actuali->item - $entrada->item]);
      $pokemons=Pokemon::find($id);


    $actualp=DB::table('pokemons')
    ->select('caramelos')
    ->where('id','=', $id)
    ->first();
   

      DB::table('pokemons')
      	->where('id','=', $id)
      	->update(['caramelos' => $actualp->caramelos + $entrada->item]);

   
  
    
       return Redirect ('/consultarpokemon/'.$tipo->id_tipo);
  }

   public function actualizapode($id){
    //id pokemon es el que trae
    $tipos=Tipo::all();
    $items=Item::all();

 $actualc=DB::table('pokemons')
    ->select('caramelos')
    ->where('id','=', $id)
    ->first();

$tipo=DB::table('poc_tipos')
     ->select('id_tipo')
     ->where('id_pokemon','=', $id)
     ->first();

    DB::table('pokemons')
    ->where('id','=', $id)
    ->update(['caramelos' => $actualc->caramelos - 5 ]);

   $actualko=DB::table('pokemons')
   ->select('ko')
   ->where('id','=', $id)
   ->first();

   DB::table('pokemons')
   ->where('id','=', $id)
   ->update(['ko' => $actualko->ko + 100]);

 return Redirect('/consultarpokemon/'.$tipo->id_tipo);

  }

  public function pdf(){
     $pokemons=Pokemon::all();

     $vista=view('pdfpokemons',compact('pokemons'));
     $dompdf=\App::make('dompdf.wrapper');
     $dompdf->loadHTML($vista);
     return $dompdf->stream('Listapokemons.pdf');

  
  }

}
