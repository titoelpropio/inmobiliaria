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
            <H1>REPORTES</H1>
            <input type="date" id="fecha_i"> 
            <input type="date" id="fecha_f">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th><center>GALPON</center></th>
                        <th><center>TOTAL MUERTAS</center></th>
                        <th><center>TOTAL POSTURA</center></th>
                        <th><center>TOTAL POSTURA %</center></th>
                        <th><center>FECHA</center></th>
                    </thead>
                    @foreach($reporte as $rep)
                    <tr>
                        <td><center>{{ $rep->nombre}}</center></td>
                        <td><center>{{ $rep->total_muerta}}</center></td>
                        <td><center>{{ $rep->cantidad_total}}</center></td>
                        <td><center>{{ $rep->postura_p}}%</center></td>
                        <td><center>{{ $rep->fecha}}</center></td>
                    </tr>
                    @endforeach
                </table>

            </div>

        </div>
    </div>

@endsection
