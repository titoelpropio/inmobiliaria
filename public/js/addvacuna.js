function cambiarestado(estado, idvacuna) {
    var token = $('#token').val();
    var id = $(idvacuna).val();
    $.ajax({
        url: "http://localhost:8000/vacunaestado",
        headers: {'X-CSRF-TOKEN': token},
        type: 'GET',
        dataType: 'JSON',
        data: {estado: estado, id: id},
        success: function () {
            if (estado==1) {
                 $(idvacuna).attr('onclick', "cambiarestado(0,this)");
            $(idvacuna).removeClass();
            $(idvacuna).addClass('btn btn-success');
            $(idvacuna).text("ACTIVADO");
            }
            else{
                 $(idvacuna).attr('onclick', "cambiarestado(1,this)");
            $(idvacuna).removeClass();
            $(idvacuna).addClass('btn btn-warning');
            $(idvacuna).text("DESACTIVADO");
            
            }
           
        }, error: function () {
            toastr.options.timeOut = 3000;
            toastr.options.positionClass = "toast-bottom-center";
            toastr.error('INTENTE NUEVAMENTE');
        }
    });    
    
}