<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GallinaMuerta;
use App\Galpon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\GallinaMuertaCreateRequest;
use App\Http\Requests\GallinaMuertaUpdateRequest;
use DB;
class GallinaMuertaController extends Controller
{
    
	function index(){
      $gallinamuerta=GallinaMuerta::paginate(10);
      return view('gallinamuerta.index',compact('gallinamuerta'));
	}
  
	public function create(){
      return view('galpon.index'); 
    }
    

public function store(Request $request){
  $contador = DB::select("SELECT COUNT(*) AS contador, id FROM gallina_muerta WHERE Date_format(gallina_muerta.fecha,'%Y/%M/%d')=Date_format(now(),'%Y/%M/%d') and gallina_muerta.id_galpon=?",[$request->id_galpon]);
  foreach ($contador as $key => $value) { $cont=$value->contador; $id=$value->id;}
    if ($cont==0) {
      if($request->ajax()){
        GallinaMuerta::create($request->all());
        return response()->json(["mensaje" => "Guardado",]);
      } 
    }
    else{
      $gallina_muerta= GallinaMuerta::find($id);
      $gallina_muerta->fill($request->all());
      $gallina_muerta->save();
      return response()->json(["mensaje" => "modificado",]); 
    }
  }


    public function edit($id){    
      $gallinamuert=Galpon::lists('nombre','id');  
      $gallinamuerta=GallinaMuerta::find($id);
      return view('gallinamuerta.edit',compact('gallinamuert'),['gallinamuerta'=>$gallinamuerta]);
    }

public function update1(Request $request){
$results = DB::select("SELECT id FROM gallina_muerta WHERE Date_format(gallina_muerta.fecha,'%Y/%M/%d')=Date_format(now(),'%Y/%M/%d') and gallina_muerta.id_galpon=1");
 foreach ($results as $key => $value) { $id=$value->id; }
  $gallina_muerta= GallinaMuerta::find($id);
  $gallina_muerta->fill($request->all());
  $gallina_muerta->save();
  return response()->json(["mensaje" => "modificado",]);
}





    public function destroy($id){
        $gallinamuerta=GallinaMuerta::find($id);
        $gallinamuerta->delete();
        Session::flash('message','Edad Eliminado Correctamente');
       return Redirect::to('/gallinamuerta');
    }

    public function show(){
    		
    }
    

}
