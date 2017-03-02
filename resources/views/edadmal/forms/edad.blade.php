<div class="form-group">
		{!!Form::label('edad','Edad:')!!}
		{!!Form::text('edad',null,['class'=>'form-control','placeholder'=>'Edad'])!!}
	</div>
	<?php //formato con segundos 
$fecha = date("d/m/Y"); //formato solo fecha
?>
	<div class="form-group">
		{!!Form::label('fecha','Fecha De Ingreso:')!!}
		{!!Form::text($fecha,$fecha,['class'=>'form-control','disabled'=>'true'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('id_galpon','Galpon:')!!}
		{!!Form::select('id_galpon',$eda,null,array('class'=>'form-control'))!!}
	</div>