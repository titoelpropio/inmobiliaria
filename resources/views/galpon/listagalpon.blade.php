@extends ('layouts.admin')
@section ('content')

@if(Session::has('message'))
<div id="alert" class='hide'>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
   <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
        @include('galpon.modal')
<div class="row">   
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">  
            <H1>LISTA DE GALPONES</H1>

            <button class='btn btn-danger' data-toggle='modal' data-target='#myModal' >AGREGAR</button>  

            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead bgcolor=black style="color: white">
                <th><center>NOMBRE</center></th>
                <th><center>CAPACIDAD TOTAL</center></th>
                <th><center>OPCION</center></th>
                </thead>
                @foreach($galpon as $gal)
                <tr>
                <td><center>{{ $gal->nombre}}</center></td>
                <td><center>{{ $gal->capacidad_total}}</center></td>                      
            <td><center>
			{!!link_to_route('galpon.edit', $title = 'EDITAR', $parameters = $gal->id, $attributes = ['class'=>'btn btn-primary'])!!}          
			</center></td>
                </tr>
                @endforeach
            </table>
{!!$galpon->render()!!}
        </div>

    </div>
</div>
{!!Html::script('js/galpon.js')!!} 
@endsection
