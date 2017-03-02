<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vacuna;

use App\Http\Requests\VacunaCreateRequest;
use Session;
use Redirect;
use DB;
class VacunaController extends Controller
{
   function index(){
   $vacuna=Vacuna::paginate(15);
      
      return view('vacuna.index',compact('vacuna'));
	}


	public function create(){
            
      return view('vacuna.create');	
    }
    
    public function store(VacunaCreateRequest $request){
    	Vacuna::create ([
             'edad' => $request['edad'],
          'nombre' => $request['nombre'],
            'detalle' => $request['detalle'],
            'estado' => $request['estado'],
            
        ]);
        return redirect('/vacuna')->with('message','SE GUARDO CORRECTAMENTE'); 
    }
  public function edit($id){
   		
   $vacuna = Vacuna::find($id);
   return view('vacuna.edit',compact('vacuna'));
  }
  public function vacunagalpon(){//lista los galpones a vacunar para el dia actual

       $vacuna=DB::select("select edad.edad,g.nombre as galpon,v.nombre, v.detalle,g.id as idgalpon,v.id as idvacuna FROM galpon g, edad,vacuna v WHERE g.id=edad.id_galpon and edad.edad=v.edad and v.estado=1 and edad.estado=1 and (not EXISTS(select * from galpon, galpon_vacuna, vacuna where v.id=galpon_vacuna.id_vacuna AND g.id=galpon.id and vacuna.id=galpon_vacuna.id_vacuna and date_format(galpon_vacuna.fecha,'%Y/%M/%d')=date_format(now(),'%Y/%M/%d')))");
             $vacunaActivas=Vacuna::where('vacuna.estado','=','1')->lists('nombre','id');
           
        //$silo=paginate::make(DB::select($query),7);
      return view('vacuna.vacunagalpon',compact('vacuna','vacunaActivas'));
    }
  public function galponavacunar(){//lista los galpones a vacunar para el dia actual

       $vacuna=DB::select("select edad.edad,g.nombre as galpon,v.nombre, v.detalle,g.id as idgalpon,v.id as idvacuna FROM galpon g, edad,vacuna v WHERE g.id=edad.id_galpon and edad.edad=v.edad and v.estado=1 and edad.estado=1 and (not EXISTS(select * from galpon, galpon_vacuna, vacuna where v.id=galpon_vacuna.id_vacuna AND g.id=galpon.id and vacuna.id=galpon_vacuna.id_vacuna and date_format(galpon_vacuna.fecha,'%Y/%M/%d')=date_format(now(),'%Y/%M/%d')))");
             $vacunaActivas=Vacuna::where('vacuna.estado','=','1')->lists('nombre','id');
           
        //$silo=paginate::make(DB::select($query),7);
      return view('vacuna.galponavacunar',compact('vacuna','vacunaActivas'));
    }

   public function update($id, VacunaCreateRequest $request){
         $resultado=DB::table('vacuna')->where('id',$id)->update(['edad'=>$request->edad,'nombre'=>$request->nombre,'detalle'=>$request->detalle]);
        return redirect('/vacuna')->with('message','MODIFICADO CORRECTAMENTE'); 
   }
    
    public function destroy($id){

        $vacuna=Vacuna::find($id);
        $vacuna->delete();
        $vacuna::destroy($id);
        Session::flash('message','Vacuna Eliminada Correctamente');
        return Redirect::to('/vacuna');


    } //
    
public function listavacuna(){//lista de vacuna para el select en el modal del formulario vacunagalpon
    
//    $vacunaActivas=Vacuna::where('vacuna.estado','=','1')->lists('nombre','detalle','id');
     $vacunaActivas=DB::select("select nombre, detalle, id from `vacuna` where `vacuna`.`deleted_at` is null and estado=1 order by edad");
    return response()->json($vacunaActivas);
}
     public  function cambiarestado(Request $request){
         if($request->ajax()){
             $resultado=DB::table('vacuna')->where('id',$request['id'])->update(['estado'=>$request->estado]);
             
          return response()->json($resultado);   
         }
         
     }
     
     
}
