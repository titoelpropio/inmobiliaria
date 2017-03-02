  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" ></h4>
      </div>




      <div class="modal-body">
      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">
        {!!Form::hidden('null',null,['id'=>'idgalpon','class'=>'form-control'])!!}
<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">

		<script type="text/javascript">
		    function numerosmasdecimal(e)
		    {
		        var keynum = window.event ? window.event.keyCode : e.which;
		        if ((keynum == 8) || (keynum == 46))
		            return true;
		        return /\d/.test(String.fromCharCode(keynum));
		    }
		</script>     
    @include('alerts.request')
		{!!Form::hidden('id',$contador,['id'=>'id_galpon','class'=>'form-control','readonly'])!!}

		<div class="form-group">
		    {!!Form::label('tipo_galpon','Tipo Galpon:')!!}
		    {!!Form::select('tipo_galpon', array('1' => 'PONEDORAS', '0' => 'CRIA'), 'null',array('id'=>'tipo_galpon','class'=>'form-control'))!!}
		</div>

		<div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('nombre','Galpon '.$contador,['id'=>'nombre','class'=>'form-control','readonly'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('capacidad_total','Capacidad Total:')!!}
			{!!Form::text('capacidad_total',null,['id'=>'capacidad_total','class'=>'form-control','placeholder'=>'Ingrese La Capacidad Total','onkeypress'=>'return numerosmasdecimal(event)'])!!}
		</div>
  </div>

      <div class="modal-footer">
          <button class="btn btn-primary" onclick="creargalpon()">ACEPTAR</button>
      
      {!!link_to('#', $title='CANCELAR', $attributes = ['id'=>'cancelar', 'class'=>'btn btn-danger'], $secure = null)!!}
      </div>
    </div>
  </div>
</div>
