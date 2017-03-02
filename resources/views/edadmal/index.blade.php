@extends ('layouts.admin')
@section ('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif
		<div class="row">	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">	
			<H1>EDAD</H1>
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th><center>ID</center></th>
						<th><center>EDAD</center></th>
						<th><center>FECHA INGRESO</center></th>
						<th><center>GALPON</center></th>
						<th><center>OPCION</center></th>
					</thead>
					@foreach($edad as $ed)
					<tr>
						<td><center>{{ $ed->id}}</center></td>
						<td><center>{{ $ed->edad}}</center></td>
						<td><center>{{ $ed->fecha}}</center></td>
						<td><center>{{ $ed->id_galpon}}</center></td>
						<td><CENTER>
						{!!link_to_route('edad.edit', $title = 'Editar', $parameters = $ed->id, $attributes = ['class'=>'btn btn-primary'])!!}
						</CENTER></td>
					</tr>
					@endforeach
				</table>
	{!!$edad->render()!!}
			</div>

		</div>
	</div>

@endsection
