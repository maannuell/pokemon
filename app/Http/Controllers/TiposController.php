<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Poc_tipo;
use App\Http\Requests;
use App\Item;
use DB;


class TiposController extends Controller
{
    //
     public function consultar(){
        $tipos=Tipo::all();
        $items=Item::all();
        return view('index',compact('tipos','items'));
    }

    public function consulta($id){

    	$tipos=Tipo::all();
        
    	$ntipo=Tipo::find($id);
    $pokemontipo=DB::table('poc_tipos As pt')
		->join('pokemons As p','pt.id_pokemon','=','p.id')
		->where('pt.id_tipo','=', $id)
		->get();

		
       return view('inicio',compact('pokemontipo','tipos','ntipo'));


    }




}

