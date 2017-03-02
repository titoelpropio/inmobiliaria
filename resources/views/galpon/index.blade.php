@extends ('layouts.admin')
@section ('content')

<div class="alert alert-danger alert-dismissible" role="alert" hidden="true" id="mensaje">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>


<div class="row" style="height: 100%; width:100%" > 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 100%; width:100%">
        <div class="table-responsive" style="height: 100%; width:100%">
            <script type="text/javascript">
                function numerosmasdecimal(e)
                {
                    var keynum = window.event ? window.event.keyCode : e.which;
                    if ((keynum == 8) || (keynum == 46))
                        return true;
                    return /\d/.test(String.fromCharCode(keynum));
                }

                function limpia(elemento)
                {
                    if (elemento.value==0)
                    elemento.value="";                    
                }

                function verificar(elemento)
                {
                    if (elemento.value=="")
                    elemento.value="0";                    
                }
            </script>

            <style>
                #oculto{visibility:hidden};
            </style>
<TABLE  border=1 cellpadding=0 cellspacing=0 class="table-striped  table-condensed table-hover" style=" width: 100%">
                    <tr height=22 style='height:16.5pt'>
                    <td colspan=1 width=215 height=22 class=xl69 style='border-right:.5pt solid black;
                        height:16.5pt'>CANTIDAD INICIAL</td>
                    <td colspan=2 align=center class=xl71 style='border-left:none'><font size=4>{!!Form::label($citotal,null,['id'=>'citotal'])!!}</font></td>
                    <td colspan=3 class=xl72 style='border-left:none'>GALLINAS CANTIDAD ACTUAL</td>
                    <td colspan=2 align=center class=xl73 style='border-left:none'><font size=4>{!!Form::label($catotal,null,['id'=>'catotal'])!!}</font></td>
                    <td colspan=2 align=center class=xl74 style='border-left:none'><font size=4>{!!Form::label($total_porcentaje,null,['id'=>'catp'])!!}%</font></td>
                    <td colspan=3 class=xl75 style='border-left:none'>TOTAL POSTURA</td>
                    <td colspan=2 align=center class=xl76 style='border-left:none'><font size=4>{!!Form::label($post_total,null,['id'=>'post_total'])!!}</font></td>
                    <TD align=center><font size=4><input type="date" id="fecha1" class="" value="{{$fecha}}" class="form-control"></font>
                                     <button class="btn btn-primary" onclick="mostrarceldas()" id="btnmostrar" >MOSTRAR</button>

                    </TD>
                </tr>
</TABLE>
            <table border=1 cellpadding=0 cellspacing=0 class="table-striped  table-condensed table-hover" style="height: 450px; width: 100%" id="tablagalpon">
                <col width=80 span=19 style='width:60pt'>



                <tr height=22 style='height:16.5pt; background-color: YellowGreen'>
                    <td colspan=1 height=22 class=xl81 style='border-right:.5pt solid black;
                        height:16.5pt;    width: 8%'><font size=2>EDAD GALLINAS </font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g1[3],null,['id'=>'edadg1'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g2[3],null,['id'=>'edadg2'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g3[3],null,['id'=>'edadg3'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g4[3],null,['id'=>'edadg4'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g5[3],null,['id'=>'edadg5'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g6[3],null,['id'=>'edadg6'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g7[3],null,['id'=>'edadg7'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g8[3],null,['id'=>'edadg8'])!!}</font></td>
                </tr>

                <tr height=27 style='height:20.25pt'>
                    <td colspan=1 height=27 class=xl93 style='border-right:.5pt solid black;
                        height:20.25pt'><font size=2>CANTIDAD ACTUAL</font></td>
                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g1[2],null,['id'=>'cag1'])!!}</font></td>
                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g2[2],null,['id'=>'cag2'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g3[2],null,['id'=>'cag3'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g4[2],null,['id'=>'cag4'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g5[2],null,['id'=>'cag5'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g6[2],null,['id'=>'cag6'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g7[2],null,['id'=>'cag7'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g8[2],null,['id'=>'cag8'])!!}</font></td>

                </tr>
                <tr height=26 style='height:19.5pt'>
                    <td colspan=1 height=26 class=xl98 style='border-right:.5pt solid black;
                        height:19.5pt'><font size=2><b>TOTAL MUERTAS</b></font></td>
                    <td colspan=2 align=center class=xl100 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[0],null,['id'=>'tm1'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[1],null,['id'=>'tm2'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[2],null,['id'=>'tm3'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[3],null,['id'=>'tm4'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[4],null,['id'=>'tm5'])!!}</font></td>
                    <td colspan=2 color=red align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[5],null,['id'=>'tm6'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[6],null,['id'=>'tm7'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:1.0pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[7],null,['id'=>'tm8'])!!}</font></td>
                </tr>
                <tr height=23 style='height:17.25pt; background-color: orange'>
                    <td colspan=1 height=23 class=xl105 style='border-right:.5pt solid black;
                        height:17.25pt'><font size=2>GALPON Nro</font></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon1">GALPON 1</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon2">GALPON 2</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon3">GALPON 3</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon4">GALPON 4</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon5">GALPON 5</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon6">GALPON 6</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon7">GALPON 7</span></td>
                    <td colspan=2 align=center class=xl107 style='border-right:1.0pt solid black;border-left:
                        none'><span id="galpon8">GALPON 8</span></td>
                </tr>

                <tr height=22 style='height:16.5pt'>


                    <td rowspan=2 align=center class=xl71 style='border-bottom:.5pt solid black'><font size=2>MAÑANA</font></td>
                    <td class=xl72 style='border-left:none'>
                        <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                        {!!Form::text('nombre',$g1[0],['id'=>'g1c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br> 
                        <font color=red size="4">{!!Form::label($gm[0],null,['id'=>'gm1'])!!}
                        {!!Form::number('nombre',$gma1,['id'=>'gma1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                        <button class="btn btn-primary" onclick="obtenerhuevos(1)" id="btnregistrar1" >REGISTRAR</button>
                       
                    </td>
                    <td class=xl72 align=right style='border-left:none'>
                        {!!Form::text('nombre',$g2[0],['id'=>'g2c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                    </td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[1],null,['id'=>'gm2'])!!}</font>
                        {!!Form::number('nombre',$gma2,['id'=>'gma2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                         <button class="btn btn-primary" onclick="obtenerhuevos(2)"  id="btnregistrar2">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g3[0],['id'=>'g3c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[2],null,['id'=>'gm3'])!!}</font>
                        {!!Form::number('nombre',$gma3,['id'=>'gma3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                         <button class="btn btn-primary" onclick="obtenerhuevos(3)"  id="btnregistrar3">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g4[0],['id'=>'g4c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[3],null,['id'=>'gm4'])!!}</font>
                        {!!Form::number('nombre',$gma4,['id'=>'gma4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                         <button class="btn btn-primary" onclick="obtenerhuevos(4)"  id="btnregistrar4">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g5[0],['id'=>'g5c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[4],null,['id'=>'gm5'])!!}</font>
                        {!!Form::number('nombre',$gma5,['id'=>'gma5','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                       <button class="btn btn-primary" onclick="obtenerhuevos(5)"  id="btnregistrar5">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g6[0],['id'=>'g6c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[5],null,['id'=>'gm6'])!!}</font>
                        {!!Form::number('nombre',$gma6,['id'=>'gma6','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                   <button class="btn btn-primary" onclick="obtenerhuevos(6)" id="btnregistrar6" >REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g7[0],['id'=>'g7c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[6],null,['id'=>'gm7'])!!}</font>
                        {!!Form::number('nombre',$gma7,['id'=>'gma7','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                       <button class="btn btn-primary" onclick="obtenerhuevos(7)" id="btnregistrar7" >REGISTRAR</button></</td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g8[0],['id'=>'g8c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[7],null,['id'=>'gm8'])!!}</font>
                        {!!Form::number('nombre',$gma8,['id'=>'gma8','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                         <button class="btn btn-primary" onclick="obtenerhuevos(8)"  id="btnregistrar8">REGISTRAR</button></</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td height=22 class=xl77 style='height:16.5pt;border-top:none;border-left:
                        none'>{!!Form::text('nombre',$g1[1],['id'=>'g1c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g2[1],['id'=>'g2c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g3[1],['id'=>'g3c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g4[1],['id'=>'g4c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g5[1],['id'=>'g5c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g6[1],['id'=>'g6c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g7[1],['id'=>'g7c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g8[1],['id'=>'g8c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td rowspan=2 align=center height=44 class=xl79 style='border-bottom:.5pt solid black;
                        height:33.0pt;border-top:none'><font size=2>TARDE</font></td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g1[2],['id'=>'g1c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g2[2],['id'=>'g2c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g3[2],['id'=>'g3c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g4[2],['id'=>'g4c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g5[2],['id'=>'g5c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g6[2],['id'=>'g6c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g7[2],['id'=>'g7c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g8[2],['id'=>'g8c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td height=22 class=xl77 style='height:16.5pt;border-top:none;border-left:
                        none'>{!!Form::text('nombre',$g1[3],['id'=>'g1c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g2[3],['id'=>'g2c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g3[3],['id'=>'g3c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g4[3],['id'=>'g4c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g5[3],['id'=>'g5c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g6[3],['id'=>'g6c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g7[3],['id'=>'g7c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g8[3],['id'=>'g8c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td colspan=1 height=22 class=xl81 style='border-right:.5pt solid black;
                        height:16.5pt;border-left:none'><font size=2>TOTAL GALPON</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon1,null,['id'=>'total_galpon1'])!!}</font>
                    </td> 
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon2,null,['id'=>'total_galpon2'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon3,null,['id'=>'total_galpon3'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon4,null,['id'=>'total_galpon4'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon5,null,['id'=>'total_galpon5'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon6,null,['id'=>'total_galpon6'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon7,null,['id'=>'total_galpon7'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon8,null,['id'=>'total_galpon8'])!!}</font></td>
                </tr>
                <tr height=23 style='height:17.25pt'>
                    <td height=23 class=xl85 colspan=1 style='height:17.25pt;mso-ignore:colspan;
                        border-right:.5pt solid black'><font size=2>POSTURA (%)</font><span
                            style='mso-spacerun:yes'> </span></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph1"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph2"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph3"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph4"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph5"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph6"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph7"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph8"></span></font></td>
                </tr>

                <tr height=22 style='height:16.5pt; background-color: MediumPurple' id="oculto">
                    <td colspan=2 height=22 class=xl85 style='border-right:.5pt solid black;
                        height:16.5pt'>CAPACIDAD GAL</td>
                    <td colspan=2 align="center" class=xl87 align="center" style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g1[1],null,['id'=>'cgg1'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g2[1],null,['id'=>'cgg2'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g3[1],null,['id'=>'cgg3'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g4[1],null,['id'=>'cgg4'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g5[1],null,['id'=>'cgg5'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g6[1],null,['id'=>'cgg6'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g7[1],null,['id'=>'cgg7'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-right:1.0pt solid black;border-left:
                        none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g8[1],null,['id'=>'cig8'])!!}</font></td>
                </tr>
                <tr height=22 style='height:16.5pt; background-color: Plum' id="oculto">
                    <td colspan=2 height=22 class=xl89 style='border-right:.5pt solid black;
                        height:16.5pt'>CANTIDAD INICIAL</td>
                    <td colspan=2 align="center" class=xl91 align="center" style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g1[0],null,['id'=>'cig1'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g2[0],null,['id'=>'cig2'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g3[0],null,['id'=>'cig3'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g4[0],null,['id'=>'cig4'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g5[0],null,['id'=>'cig5'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g6[0],null,['id'=>'cig6'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g7[0],null,['id'=>'cig7'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-right:1.0pt solid black;border-left:
                        none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g8[0],null,['id'=>'cig8'])!!}</font></td>
                </tr>
            </table>



<table border=1 cellpadding=0 cellspacing=0 class="table-striped  table-condensed table-hover" style="height: 450px; width: 100%" id="tablagalpon2">
                <col width=80 span=19 style='width:60pt'>

                <tr height=22 style='height:16.5pt; background-color: YellowGreen'>
                    <td colspan=1 height=22 class=xl81 style='border-right:.5pt solid black;
                        height:16.5pt; width: 8%'><font size=2><b>EDAD GALLINAS</b></font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g9[3],null,['id'=>'edadg9'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g10[3],null,['id'=>'edadg10'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g11[3],null,['id'=>'edadg11'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g12[3],null,['id'=>'edadg12'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g13[3],null,['id'=>'edadg13'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g14[3],null,['id'=>'edadg14'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g15[3],null,['id'=>'edadg15'])!!}</font></td>
                    <td colspan=2 align="center" class=xl83 style='border-left:none; width:10.75%'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g16[3],null,['id'=>'edadg16'])!!}</font></td>
                </tr>

                <tr height=27 style='height:20.25pt'>
                    <td colspan=1 height=27 class=xl93 style='border-right:.5pt solid black;
                        height:20.25pt'><font size=2>CANTIDAD ACTUAL</font></td>
                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g9[2],null,['id'=>'cag9'])!!}</font></td>
                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g10[2],null,['id'=>'cag10'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g11[2],null,['id'=>'cag11'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g12[2],null,['id'=>'cag12'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g13[2],null,['id'=>'cag13'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g14[2],null,['id'=>'cag14'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g15[2],null,['id'=>'cag15'])!!}</font></td>

                    <td colspan=2 class=xl95 align=center style='border-top:none;border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g16[2],null,['id'=>'cag16'])!!}</font></td>

                </tr>
                <tr height=26 style='height:19.5pt'>
                    <td colspan=1 height=26 class=xl98 style='border-right:.5pt solid black;
                        height:19.5pt'><font size=2><b>TOTAL MUERTAS</b></font></td>
                    <td colspan=2 align=center class=xl100 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[8],null,['id'=>'tm9'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[9],null,['id'=>'tm10'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[10],null,['id'=>'tm11'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[11],null,['id'=>'tm12'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[12],null,['id'=>'tm13'])!!}</font></td>
                    <td colspan=2 color=red align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[13],null,['id'=>'tm14'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:.5pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[14],null,['id'=>'tm15'])!!}</font></td>
                    <td colspan=2 align=center class=xl102 style='border-right:1.0pt solid black;border-left:
                        none'><font color=red size="4">{!!Form::label($total_m_g[15],null,['id'=>'tm16'])!!}</font></td>
                </tr>
                <tr height=23 style='height:17.25pt; background-color: orange'>
                    <td colspan=1 height=23 class=xl105 style='border-right:.5pt solid black;
                        height:17.25pt'><font size=2>GALPON Nro</font></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon9">GALPON 9</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon10">GALPON 10</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon11">GALPON 11</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon12">GALPON 12</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon13">GALPON 13</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon14">GALPON 14</span></td>
                    <td colspan=2 align=center class=xl107 style='border-left:none'><span id="galpon15">GALPON 15</span></td>
                    <td colspan=2 align=center class=xl107 style='border-right:1.0pt solid black;border-left:
                        none'><span id="galpon16">GALPON 16</span></td>
                </tr>

                <tr height=22 style='height:16.5pt'>
                    <td rowspan=2 align=center class=xl71 style='border-bottom:.5pt solid black'><font size=2>MAÑANA</font></td>
                    <td class=xl72 style='border-left:none'>
                        <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                        {!!Form::text('nombre',$g9[0],['id'=>'g9c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br> 
                        <font color=red size="4">{!!Form::label($gm[8],null,['id'=>'gm9'])!!}
                        {!!Form::number('nombre',$gma9,['id'=>'gma9','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                       <button class="btn btn-primary" onclick="obtenerhuevos(9)" id="btnregistrar9" >REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>
                        {!!Form::text('nombre',$g10[0],['id'=>'g10c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                    </td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[9],null,['id'=>'gm10'])!!}</font>
                        {!!Form::number('nombre',$gma2,['id'=>'gma10','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                           <button class="btn btn-primary" onclick="obtenerhuevos(10)"  id="btnregistrar10">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g11[0],['id'=>'g11c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[10],null,['id'=>'gm11'])!!}</font>
                        {!!Form::number('nombre',$gma3,['id'=>'gma11','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                           <button class="btn btn-primary" onclick="obtenerhuevos(11)"  id="btnregistrar11">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g12[0],['id'=>'g12c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[11],null,['id'=>'gm12'])!!}</font>
                        {!!Form::number('nombre',$gma4,['id'=>'gma12','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                      <button class="btn btn-primary" onclick="obtenerhuevos(12)"  id="btnregistrar12">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g13[0],['id'=>'g13c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[12],null,['id'=>'gm13'])!!}</font>
                        {!!Form::number('nombre',$gma5,['id'=>'gma13','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                          <button class="btn btn-primary" onclick="obtenerhuevos(13)"  id="btnregistrar13">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g14[0],['id'=>'g14c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[13],null,['id'=>'gm14'])!!}</font>
                        {!!Form::number('nombre',$gma6,['id'=>'gma14','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                           <button class="btn btn-primary" onclick="obtenerhuevos(14)"  id="btnregistrar14">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g15[0],['id'=>'g15c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl73 style='border-bottom:.5pt solid black'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[14],null,['id'=>'gm15'])!!}</font>
                        {!!Form::number('nombre',$gma7,['id'=>'gma15','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                    <button class="btn btn-primary" onclick="obtenerhuevos(15)"  id="btnregistrar15">REGISTRAR</button></td>
                    <td class=xl72 align=right style='border-left:none'>{!!Form::text('nombre',$g16[0],['id'=>'g16c1','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td rowspan=6 align=center class=xl74 style='border-bottom:.5pt solid black;border-top:
                        none'><font color=red> MUERTAS </font> <br><font color=red size="4">{!!Form::label($gm[15],null,['id'=>'gm16'])!!}</font>
                        {!!Form::number('nombre',$gma8,['id'=>'gma16','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}
                        <button class="btn btn-primary" onclick="obtenerhuevos(16)" id="btnregistrar16">REGISTRAR</button></td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td height=22 class=xl77 style='height:16.5pt;border-top:none;border-left:
                        none'>{!!Form::text('nombre',$g9[1],['id'=>'g9c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g10[1],['id'=>'g10c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g11[1],['id'=>'g11c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g12[1],['id'=>'g12c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g13[1],['id'=>'g13c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g14[1],['id'=>'g14c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g15[1],['id'=>'g15c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 align=right style='border-top:none;border-left:none'>{!!Form::text('nombre',$g16[1],['id'=>'g16c2','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td rowspan=2 align=center height=44 class=xl79 style='border-bottom:.5pt solid black;
                        height:33.0pt;border-top:none'><font size=2>TARDE</font></td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g9[2],['id'=>'g9c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g10[2],['id'=>'g10c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g11[2],['id'=>'g11c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g12[2],['id'=>'g12c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g13[2],['id'=>'g13c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g14[2],['id'=>'g14c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g15[2],['id'=>'g15c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g16[2],['id'=>'g16c3','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td height=22 class=xl77 style='height:16.5pt;border-top:none;border-left:
                        none'>{!!Form::text('nombre',$g9[3],['id'=>'g9c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g10[3],['id'=>'g10c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g11[3],['id'=>'g11c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g12[3],['id'=>'g12c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g13[3],['id'=>'g13c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g14[3],['id'=>'g14c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g15[3],['id'=>'g15c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                    <td class=xl77 style='border-top:none;border-left:none'>{!!Form::text('nombre',$g16[3],['id'=>'g16c4','class'=>'form-control','onkeypress'=>'return numerosmasdecimal(event)','onclick'=>'return limpia(this)','onBlur'=>'return verificar(this)'])!!}</td>
                </tr>
                <tr height=22 style='height:16.5pt'>
                    <td colspan=1 height=22 class=xl81 style='border-right:.5pt solid black;
                        height:16.5pt;border-left:none'><font size=2>TOTAL GALPON</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon9,null,['id'=>'total_galpon9'])!!}</font>
                        <!--{!!Form::text('nombre',$total_galpon1,['id'=>'total_galpon1','class'=>'form-control','disabled'=>'true'])!!}--> 
                    </td> 
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon10,null,['id'=>'total_galpon10'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon11,null,['id'=>'total_galpon11'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon12,null,['id'=>'total_galpon12'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon13,null,['id'=>'total_galpon13'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon14,null,['id'=>'total_galpon14'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon15,null,['id'=>'total_galpon15'])!!}</font></td>
                    <td class=xl83 align=center style='border-top:none;border-left:none'><font size=4>{!!Form::label($total_galpon16,null,['id'=>'total_galpon16'])!!}</font></td>
                </tr>
                <tr height=23 style='height:17.25pt'>
                    <td height=23 class=xl85 colspan=1 style='height:17.25pt;mso-ignore:colspan;
                        border-right:.5pt solid black'><font size=2>POSTURA (%)</font><span
                            style='mso-spacerun:yes'> </span></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph9"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph10"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph11"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph12"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph13"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph14"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph15"></span></font></td>
                    <td class=xl87 align=center style='border-top:none;border-left:none'><font size=4><span id="ph16"></span></font></td>
                </tr>

                <tr height=22 style='height:16.5pt; background-color: MediumPurple' id="oculto">
                    <td colspan=1 height=22 class=xl85 style='border-right:.5pt solid black;
                        height:16.5pt'>CAPACIDAD GAL</td>
                    <td colspan=2 align="center" class=xl87 align="center" style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g9[1],null,['id'=>'cgg9'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g10[1],null,['id'=>'cgg10'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g11[1],null,['id'=>'cgg11'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g12[1],null,['id'=>'cgg12'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g13[1],null,['id'=>'cgg13'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g14[1],null,['id'=>'cgg14'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g15[1],null,['id'=>'cgg15'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-right:1.0pt solid black;border-left:
                        none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g16[1],null,['id'=>'cig16'])!!}</font></td>
                </tr>
                <tr height=22 style='height:16.5pt; background-color: Plum' id="oculto" >
                    <td colspan=1 height=22 class=xl89 style='border-right:.5pt solid black;
                        height:16.5pt'>CANTIDAD INICIAL</td>
                    <td colspan=2 align="center" class=xl91 align="center" style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g9[0],null,['id'=>'cig9'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g10[0],null,['id'=>'cig10'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g11[0],null,['id'=>'cig11'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g12[0],null,['id'=>'cig12'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g13[0],null,['id'=>'cig13'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g14[0],null,['id'=>'cig14'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g15[0],null,['id'=>'cig15'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-right:1.0pt solid black;border-left:
                        none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g16[0],null,['id'=>'cig16'])!!}</font></td>
                </tr>
                 <tr height=22 style='height:16.5pt; background-color: MediumPurple' id="oculto">
                    <td colspan=2 height=22 class=xl85 style='border-right:.5pt solid black;
                        height:16.5pt'>CAPACIDAD GAL</td>
                    <td colspan=2 align="center" class=xl87 align="center" style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g9[1],null,['id'=>'cgg1'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g10[1],null,['id'=>'cgg2'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g11[1],null,['id'=>'cgg3'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g12[1],null,['id'=>'cgg4'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g13[1],null,['id'=>'cgg5'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g14[1],null,['id'=>'cgg6'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g15[1],null,['id'=>'cgg7'])!!}</font></td>
                    <td colspan=2 align="center" class=xl87 style='border-right:1.0pt solid black;border-left:
                        none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g16[1],null,['id'=>'cig8'])!!}</font></td>
                </tr>
                <tr height=22 style='height:16.5pt; background-color: Plum' id="oculto">
                    <td colspan=2 height=22 class=xl89 style='border-right:.5pt solid black;
                        height:16.5pt'>CANTIDAD INICIAL</td>
                    <td colspan=2 align="center" class=xl91 align="center" style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g9[0],null,['id'=>'cig1'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g10[0],null,['id'=>'cig2'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g11[0],null,['id'=>'cig3'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g12[0],null,['id'=>'cig4'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g13[0],null,['id'=>'cig5'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g14[0],null,['id'=>'cig6'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-left:none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g15[0],null,['id'=>'cig7'])!!}</font></td>
                    <td colspan=2 align="center" class=xl91 style='border-right:1.0pt solid black;border-left:
                        none'><font size="4">{!!Form::label($cantidad_i_a_t_m_e_g16[0],null,['id'=>'cig8'])!!}</font></td>
                </tr>
            </table>
        </div>

    </div>
</div>
  {!!Html::script('js/script.js')!!}
@endsection

<!--@section('scripts')
  {!!Html::script('js/script2.js')!!}


@endsection-->
