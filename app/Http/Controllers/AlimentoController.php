<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Alimento;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AlimentoRequest;
use DB;

class AlimentoController extends Controller
{
	function index(){
     $alimento=Alimento::paginate(10);
     return view('alimento.index',compact('alimento'));
	}
  
	public function create(){
    return view('alimento.create');		
  }

  public function store(AlimentoRequest $request){
        Alimento::create([
          'nombre' => $request['nombre'],
            'tipo' => $request['tipo'],
            'precio' => $request['precio'],]);
        return redirect('/alimento')->with('message','Guardado Correctamente');  
  }

  public function update(AlimentoRequest $request,$id){
    $alimento= Alimento::find($id);
    $alimento->fill($request->all());
    $alimento->save();
    return redirect('/alimento')->with('message','Modificado Correctamente');  
  }

  public function edit($id){
      $alimento=Alimento::find($id);
      return view('alimento.edit',['alimento'=>$alimento]);
  }

  public function destroy($id){
    /*  $edad=Edad::find($id);
      $edad->delete();
      Session::flash('message','Edad Eliminado Correctamente');
     return Redirect::to('/edad');*/
  }
}
