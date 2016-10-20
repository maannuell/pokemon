<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use App\Tipo;
use DB;

class ItemsController extends Controller
{
    //
    
    public function editar(){
   
    $tipos=Tipo::all();

/*      $items=DB::table('items')
    	->select('item')
    	->where('id','=','1')
		->get();
		
		*/
//$user = DB::table('users')->where('name', 'John')->first();
    return view('actualizaritems',compact('tipos','items'));
    }

    public function actualizar(Request $datos){
     $tipos=Tipo::all();
     $nuevo= new Item();
     $actual=DB::table('items')
    	->select('item')
    	->where('id','=','1')
		->first();

       $nuevo->item=$datos->input('item');
     
    
     DB::table('items')
            ->where('id', 1)
            ->update(['item' => $actual->item + $nuevo->item]);


        return Redirect('/editaritems');
    }
}
