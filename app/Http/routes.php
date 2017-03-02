<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Vacunas
Route::get('listavacuna','VacunaController@listavacuna');//lista de vacuna para el select en el modal del formulario vacunagalpon
Route::get('vacunagalpon','VacunaController@vacunagalpon');
Route::get('galponavacunar','VacunaController@galponavacunar');//lista de galpon a vacunar
Route::get('vacunaestado','VacunaController@cambiarestado');
Route::resource('vacuna','VacunaController');



////Vacunas galpon
Route::resource('vacuna-galpon','VacunaGalponController');
Route::get('lista-vacuna-galpon','VacunaGalponController@lista_vacuna_galpon');

//FRONT CONTROLLER
Route::get('admin','FrontController@admin');
//GALPONES
Route::resource('listagalpon','GalponController@listagalpon');
Route::resource('galpon','GalponController');
Route::get('tipogalpon/{tipe}','GalponController@getgalpon');
Route::get('galponi','GalponController@update2');
Route::get('obtenerdadafecha','GalponController@obtenerdadafecha');

//alimento cria recria
Route::get('capturasilocria','AlimentoCriaRecriaController@getsilocria');
Route::get('obtenercriasmuertasdadafecha','CriaRecriaController@obtenermuertas');

Route::get('capturapostura/{tipe}','PosturaHuevoController@getpostura');
Route::get('capturasilo','PosturaHuevoController@getsilo');


Route::resource('criarecria','CriaRecriaController');


//login
Route::get('/',function(){
 return view('index');   
});
Route::resource('login','LoginController@store');
Route::resource('logout','LoginController@logout');

//edad
Route::resource('edad','EdadController');

Route::get('edad1a','EdadController@update2');
Route::get('edadl', 'EdadController@getgalpon');
Route::get('listaedad', 'EdadController@listaedad');


//alimento
Route::resource('alimento','AlimentoController');
Route::get('alimento1','AlimentoController@store');


//gallina muerta    
Route::resource('gallinamuerta','GallinaMuertaController@store');



Route::resource('precio','PrecioController');
Route::get('precio1','PrecioController@store');

Route::resource('compra','CompraController');
Route::get('compra1','CompraController@store');



Route::resource('ingresosilo','IngresoSiloController');
Route::resource('usuario','UsuarioController');
//consumo 
Route::resource('consumo','ConsumoController');


//trabajador
Route::resource('trabajador','TrabajadorController');


Route::resource('silo','SilosController');

Route::resource('alimentop','PosturaHuevoController');
Route::resource('alimentocria','AlimentoCriaRecriaController');

Route::resource('reporteponedoras','GalponController@reporte');

