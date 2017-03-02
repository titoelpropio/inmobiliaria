<script type="text/javascript">
    function numerosmasdecimal(e)
    {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }
</script>     

{!!Form::hidden('id',null,['class'=>'form-control','readonly'])!!}

<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','readonly'])!!}
</div>
<div class="form-group">
	{!!Form::label('capacidad_total','Capacidad Total:')!!}
	{!!Form::text('capacidad_total',null,['id'=>'capacidad_total','class'=>'form-control','placeholder'=>'Ingrese La Capacidad Total','onkeypress'=>'return numerosmasdecimal(event)'])!!}
</div>

