<script type="text/javascript">
    function numerosmasdecimal(e)
    {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>     

{!!Form::hidden('id',$contador,['class'=>'form-control','readonly'])!!}
<div class="form-group">
    {!!Form::label('tipo_galpon','Tipo Galpon:')!!}
    {!!Form::select('tipo_galpon', array('1' => 'PONEDORAS', '0' => 'CRIA'), 'null',array('id'=>'tipo_galpon','class'=>'form-control'))!!}
</div>

<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('nombre','Galpon '.$contador,['class'=>'form-control','readonly'])!!}
</div>
<div class="form-group">
	{!!Form::label('capacidad_total','Capacidad Total:')!!}
	{!!Form::text('capacidad_total',null,['class'=>'form-control','placeholder'=>'Ingrese La Capacidad Total','onkeypress'=>'return numerosmasdecimal(event)'])!!}
</div>

