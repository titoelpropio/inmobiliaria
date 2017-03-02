@extends ('layouts.admin')

@section ('content')
@include('alerts.errors')
<div class="login-box" >
    <div class="login-logo">
        <a href="../../index2.html"><b>ADVentas</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingrese sus datos de Acceso</p>
        {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}	
        <div class="form-group has-feedback">
     <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
         
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" value=" ">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Recordar
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              
                {!!Form::submit('Ingresar',['class'=>'btn btn-primary btn-block btn-flat'])!!}

            </div><!-- /.col -->
        </div>
        {!!Form::close()!!}

  <button onclick="verificar()">mostrar</button>
        <a href="#">Olvidé mi password</a><br>


    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@endsection
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
 <script src="{{asset('js/login.js')}}"></script>
</body>
</html>
