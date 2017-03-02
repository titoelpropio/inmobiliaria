@extends('layouts.admin')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<table class="table table-striped table-bordered table-condensed table-hover">
<thead>
	<th><CENTER>ID</CENTER></th>
	<th><CENTER>GALPON</CENTER></th>
	<th><CENTER>SILO</CENTER></th>
	<th><CENTER>CANTIDAD</CENTER></th>
	<th><CENTER>FECHA</CENTER></th>
	<th><CENTER>OPCION</CENTER></th>	
</thead>
 @foreach ($ingresosilo as $ing)
	<tr>
		<td><CENTER>{{$ing->id}}</CENTER></td>		
		<td><CENTER>{{$ing->id_compra}}</CENTER></td>
		<td><CENTER>{{$ing->id_silo}}</CENTER></td>
		<td><CENTER>{{$ing->cantidad}} Kg.</CENTER></td>
		<td><CENTER>{{$ing->fecha}}</CENTER></td>
		<td><CENTER>
		{!!link_to_route('ingresosilo.edit', $title = 'Editar', $parameters =$ing->id, $attributes = ['class'=>'btn btn-primary'])!!}
		</CENTER></td>
	</tr>
	@endforeach 
</table>
{!!$ingresosilo->render()!!}
@endsection

 