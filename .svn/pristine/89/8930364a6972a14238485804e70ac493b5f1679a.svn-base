<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    //echo $_SESSION['iduser'];
    //print_r($_SESSION);


    ?>
    <style>
        .alert{
            display: none;
        }
        .manita{
            cursor: pointer;
        }
        #divHideForm{
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: .5;
            z-index: 99999;
            background: #427468;
        }

        #divMenssage{                
            width: 100%;
            height: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-top: 40vh;
            margin-bottom: auto;
            color: #284740;
            background: #FFFFFF;
            text-transform: uppercase;

        }

        #divImgloading{                  
            background: #FFFFFF url(img/cargando_1.gif) no-repeat;
            background-position: center;
            width: 100%;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .panel panel-default{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-group .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }
        .panel-default > .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }
        td {text-align: center;
        font-size:13px;

    th {text-align: center;
          font-size:13px;
            }

    .overflow{
    overflow-x: scroll;
     }
     .ordena{
         display: inline;
     }

     #fechaseleccionada{
         font-size: 20px;
     }
     .negrita{
    font-size: 15px;
     }
     
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
               Guardias y Roles                          
            </h5>
        </div>
        <div class="panel-body">
         <button class="btn  negrita btn-default" onclick="$('#divdia').hide(),$('#divMes').show(),$('#b2').removeClass('btn-default'),$('#b1').addClass('btn-default'),$('#b1').addClass('negrita'),$('#b2').removeClass('negrita')" id="b1">Mes</button>
         <button class="btn" onclick="$('#divdia').show(),$('#divMes').hide(),$('#b1').removeClass('btn-default'),$('#b2').addClass('btn-default'),$('#b2').addClass('negrita'),$('#b1').removeClass('negrita')" id="b2">Dia</button>
            
            
            
            <div id="divMes" class="form-horizontal">
                <center><h4>Guardias y Roles por Mes.</h4></center>
                <br>
                <div class="form-group">
                    <label class="control-label col-xs-3">Consultar Por:</label>
                    <div class="col-xs-9" id="tipoConsulta">
                        <select onchange="cambiarConsulta(this.value)" class="form-control" id="cvetipoConsulta" name="cvetipoConsulta">                        
                            <option value="1">Audiencias</option>
                            <option value="2">Ordenes</option>
                            <option value="3">Cateos</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Mes</label>
                    <div class="col-xs-9" id="listaMeses">
                        <input type="hidden" class="form-control selecto2" id="cveMes" name="cveMes" placeholder="Mes">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">A&ntilde;o</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="anio" name="anio" placeholder="Año" onkeypress="return valida(event)">
                    </div>
                </div>

                <br>
            
              
                  <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Informaci&oacute;n!</strong> Mensaje
            </div>


                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" id="consulta1M" value="Consultar" onclick="consultaindividual(1)">
                        <input type="submit" style="display: none" class="btn btn-primary consulta" id="consulta2M" value="Consultar" onclick="consultaOrdenes(1)">
                        <input type="submit" style="display: none" class="btn btn-primary consulta" id="consulta3M" value="Consultar" onclick="consultaCateos(1)">
                       
                    </div>
                </div>
            <br>
         <script src="sigejupe/agendaaudiencias/table.js" ></script>
        
        <div class="list-group overflow" >
            <div class="col-sm-12 col-xs-12">         
                <div class="col-sm-12"  id="tablac" style="display: none">                
                <table class="table-autosort:0 table table table-hover table-striped table-bordered" id="tab">
                <thead>             

                    <tr>
                        <th colspan="9"><center><span id="fechaseleccionada"  style=" font-size: 20px;"/></center></th>
                    </tr>
                    <tr>	
                    <th >No </th>
                    <th class="table-sortable:default" ><center>Rol  <img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center></th>
    		<th class="table-sortable:default " ><center>Dia<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
    		<th class="table-sortable:default " ><center>Fecha Inicio<img src="img/sort_both.png"  style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
                    <th class="table-sortable:default " ><center>Fecha Fin<img src="img/sort_both.png"  style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
    		
    <!--                <th class="table-sortable:default" ><center>Rol  <img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center></th>
    		<th class="table-sortable:default " ><center>Fecha<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
    		<th class="table-sortable:default " ><center>Dia<img src="img/sort_both.png"  style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
    		<th class="table-sortable:default " ><center>Horario<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>-->
    		</tr>
          
                </thead>

                </table>
                    <center><img src="img/pdf.png" width="50px" class="manita" title="Descargar en formato PDF" id="pdf" style="display: none" onclick="reporte(1)"></center>
                </div>
            </div>
        </div>
       
        
        </div>
            
            
            
            
            
            <div id="divdia" class="form-horizontal" style="display:none">
                
               
                <center><h4>Guardias y Roles por D&iacute;a.</h4></center>
                <br>
                
                <div class="form-group">
                   <div class="form-group">
                        <label class="control-label col-xs-3">Consultar Por:</label>
                        <div class="col-xs-5" id="tipoConsulta">
                            <select onchange="cambiarConsulta2(this.value)" class="form-control" id="cvetipoConsulta" name="cvetipoConsulta">                        
                                <option value="1">Audiencias</option>
                                <option value="2">Ordenes</option>
                                <option value="3">Cateos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                         <div class="col-sm-6 col-xs-3" align="right">
                             <b>Dia inicial:</b>
                         </div>
                         <div class="col-sm-6" align="left">
                                      <input type="text" readonly="true" placeholder="Fecha inicial de consulta" name="fechaConsultar" id="finicio" class="form-control" size="10" value="<?php echo date("d/m/Y");?>" onchange="updateInput(this.value)">
                           
                         </div>
                        
                    </div>
                    
                    <div class="col-sm-4">
                         <div class="col-sm-6 col-xs-3" align="right">
                             <b>Dia final:</b>
                         </div>
                         <div class="col-sm-6" align="left">
                                 <input readonly="readonly" type="text" placeholder="Fecha final de consulta" value="<?php echo date("d/m/Y");?>" name="fechaConsultarEnd" id="ffin" class="form-control" size="10">
                                </div>
                    </div>   
                          <div class="col-sm-4 col-xs-3">
                         <div class="col-sm-6 col-xs-3" align="right">
                             <center> <input type="submit" id="consulta1D" class="btn btn-primary consulta" value="Consultar" onclick="consultaindividual(2)">
                                 <center> <input style="display: none" type="submit" id="consulta2D" class="btn btn-primary consulta" value="Consultar" onclick="consultaOrdenes(2)">
                                     <center> <input style="display: none" type="submit" id="consulta3D" class="btn btn-primary consulta" value="Consultar" onclick="consultaCateos(2)">
                    </div>
                    <div class="col-sm-6"></div>
                    
                        <br>
                        <div class="col-sm-12">
                         
                            </center>
                        </div>
                        
                          </div>
                    
            <br> <br> <br>
      
            
            <div class="list-group overflow" >
            <div class="col-sm-12 col-xs-12">
             <div class="alert alert-info alert-dismissable" id="info2" style="display: none;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Informaci&oacute;n!</strong> Mensaje
            </div>
                <div class="col-sm-12"  id="tablac2" style="display: none">
                    
                        <table class="table-autosort:0 table table table-hover table-striped table-bordered" id="tab2">
                        <thead>             
                        <tr>
                        <th colspan="9"><center><span id="fechaseleccionada" /></center></th>
                        </tr>
                        <tr>
                        <th >No </th>
                        <th class="table-sortable:default" ><center>Rol  <img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center></th>
                        <th class="table-sortable:default " ><center>Dia<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
                        <th class="table-sortable:default " ><center>Fecha Inicio<img src="img/sort_both.png"  style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
                        <th class="table-sortable:default " ><center>Fecha Fin<img src="img/sort_both.png"  style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
    <!--                    <th class="table-sortable:default" ><center>Rol  <img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center></th>
                        <th class="table-sortable:default " ><center>Dia<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
                        <th class="table-sortable:default " ><center>Fecha<img src="img/sort_both.png"  style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>
                        <th class="table-sortable:default " ><center>Horario<img src="img/sort_both.png" style="cursor:pointer" title="Click para ordenar por este criterio"></center> </th>-->
                        </tr>
                        </thead>
                       </table>
                        <center><img src="img/pdf.png" width="50px" class="manita" title="Descargar en formato PDF" id="pdf2" style="display: none" onclick="reporte(2)"></center>
                            </div>
                         </div>
        </div>
       
        
        </div>
            
            



    <script type="text/javascript">
      var tabla2="";
    var info=0;
     cambiarConsulta = function (dato){
         for(var i = 0; i < 4; i++){
            if(dato == i){
                $("#consulta"+i+"M").show();
            }else{
                $("#consulta"+i+"M").hide();
            }
        }
     };
     cambiarConsulta2 = function (dato){
         for(var i = 0; i < 4; i++){
            if(dato == i){
                $("#consulta"+i+"D").show();
            }else{
                $("#consulta"+i+"D").hide();
            }
        }
     }; 
     
     consultaOrdenes = function (tipo){
         $('#pdf').hide();
         $('#pdf2').hide();
           info=0;
             $("#tablac").hide();
         var mes=$('#cveMes').val();
             var descmes=$('#cveMes option:selected').html();
             var anio=$('#anio').val();
             
          if(tipo == 1){ 
             if(mes.length==0){
                  $("#info").html("Seleccione el mes a consultar.").fadeIn('slow').delay(2000).fadeOut('slow');

                 return;
             }
              if(anio.length==0){
                  $("#info").html("Seleccione el a\u00f1o a consultar.").fadeIn('slow').delay(2000).fadeOut('slow');

                 return;
             }
             
            $('#fechaseleccionada').text(descmes+" / "+anio);
            
          $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionordenes/ProgramacionordenesFacade.Class.php",
                    async: true,
                    data: {
                        mes:mes,
                        anio:anio,
                        activo:'S',
                        cveUsuario: <?php echo $_SESSION['cveUsuarioSistema'];?>,
                        accion: 'consultaOrdenesReporte' 
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json;
                    var tabla="";
                      tabla2="";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if(json.totalCount==0){
                           $("#info").html("No existen datos con los parametros de Consulta").fadeIn('slow').delay(2000).fadeOut('slow');
                           return;
                            }
                             $("#tab td").remove();
                             
                           info=1;                       
                           
                            for (var i = 0; i < json.totalCount; i++) {
                                
                                var partesFechaInicio = json.data[i].fechaInicio.split(" ");
                                var partesFechaFinal = json.data[i].fechaFinal.split(" ");
                                
                                var partespartesI = partesFechaInicio[0].split("-");
                                var partespartesF = partesFechaFinal[0].split("-");
                                
                                var fechaBienI = partespartesI[2]+"/"+partespartesI[1]+"/"+partespartesI[0]+" "+partesFechaInicio[1];
                                var fechaBienF = partespartesF[2]+"/"+partespartesF[1]+"/"+partespartesF[0]+" "+partesFechaFinal[1];
                            tabla+='<tr>';
                            tabla+='<td><center>'+(i+1)+'</center></td>';
                            tabla+=' <td><center>Ordenes de Aprehension</center></td>';
                            tabla+='<td><center>'+json.data[i].fechaActualizacion+'</center></td>';
                            tabla+='<td><center>'+fechaBienI+'</center></td>';
                            tabla+='<td><center>'+fechaBienF+'</center></td>';                                                
                            tabla+=' </tr>';
                            
                            tabla2+='Ordenes de Aprehension|';
                            tabla2+=''+json.data[i].fechaActualizacion+'|';
                            tabla2+=''+fechaBienI+'|';
                            tabla2+=''+fechaBienF+'|';                        
                            
                            
                                                              }
                          $('#pdf').show();

                          
                            $("#tablac").show();
                            $("#tab").append(tabla);
                                    } catch (e) {
                                     $("#info").html("Error").fadeIn('slow').delay(2000).fadeOut('slow');

                                    }
                        }
                      
                    });
        }else{
        $('#tab2').hide();
                    $('#pdf').hide();

            var finic=$('#finicio').val();
            var fnin=$('#ffin').val();
            
            $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionordenes/ProgramacionordenesFacade.Class.php",
                    async: true,
                    data: {
                        fini:finic,
                        ffin:fnin,
                        tipo:2,
                        activo:'S',
                        cveUsuario: <?php echo $_SESSION['cveUsuarioSistema']?>,
                        accion: 'consultaOrdenesReporte' 
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json;
                    var tabla="";
                      tabla2="";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if(json.totalCount==0){
                           $("#info2").html("No existen datos con los parametros de Consulta").fadeIn('slow').delay(2000).fadeOut('slow');
                           return;
                            }
                             $("#tab2 td").remove();
                             
                           info=1;                       
                           
                            for (var i = 0; i < json.totalCount; i++) {
                                
                              var partesFechaInicio = json.data[i].fechaInicio.split(" ");
                                var partesFechaFinal = json.data[i].fechaFinal.split(" ");
                                
                                var partespartesI = partesFechaInicio[0].split("-");
                                var partespartesF = partesFechaFinal[0].split("-");
                                
                                var fechaBienI = partespartesI[2]+"/"+partespartesI[1]+"/"+partespartesI[0]+" "+partesFechaInicio[1];
                                var fechaBienF = partespartesF[2]+"/"+partespartesF[1]+"/"+partespartesF[0]+" "+partesFechaFinal[1];
                            
                            tabla+='<tr>';
                            tabla+='<td><center>'+(i+1)+'</center></td>';
                            tabla+=' <td><center>Ordenes de Aprehension</center></td>';
                            tabla+='<td><center>'+json.data[i].fechaActualizacion+'</center></td>';
                            tabla+='<td><center>'+fechaBienI+'</center></td>';
                            tabla+='<td><center>'+fechaBienF+'</center></td>';                                                
                            tabla+=' </tr>';
                            
                            tabla2+='Ordenes de Aprehension|';
                            tabla2+=''+json.data[i].fechaActualizacion+'|';
                            tabla2+=''+fechaBienI+'|';
                            tabla2+=''+fechaBienF+'|';                        
                            
                            
                                                              }
                                                              
                          $('#pdf2').show();

                          $("#tab2").show();
                            $("#tablac2").show();
                            $("#tab2").append(tabla);
                                    } catch (e) {
                                     $("#info2").html("Error").fadeIn('slow').delay(2000).fadeOut('slow');

                                    }
                        }
                      
                    });
        }
     };
      consultaCateos = function (tipo){
         $('#pdf').hide();
         $('#pdf2').hide();
           info=0;
             $("#tablac").hide();
         var mes=$('#cveMes').val();
             var descmes=$('#cveMes option:selected').html();
             var anio=$('#anio').val();
             
          if(tipo == 1){ 
             if(mes.length==0){
                  $("#info").html("Seleccione el mes a consultar.").fadeIn('slow').delay(2000).fadeOut('slow');

                 return;
             }
              if(anio.length==0){
                  $("#info").html("Seleccione el a\u00f1o a consultar.").fadeIn('slow').delay(2000).fadeOut('slow');

                 return;
             }
             
            $('#fechaseleccionada').text(descmes+" / "+anio);
            
          $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacioncateos/ProgramacioncateosFacade.Class.php",
                    async: true,
                    data: {
                        mes:mes,
                        anio:anio,
                        activo:'S',
                        cveUsuario: <?php echo $_SESSION['cveUsuarioSistema']?>,
                        accion: 'consultacateosReporte' 
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json;
                    var tabla="";
                      tabla2="";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if(json.totalCount==0){
                           $("#info").html("No existen datos con los parametros de Consulta").fadeIn('slow').delay(2000).fadeOut('slow');
                           return;
                            }
                             $("#tab td").remove();
                             
                           info=1;                       
                           
                            for (var i = 0; i < json.totalCount; i++) {
                              
                              var partesFechaInicio = json.data[i].fechaInicio.split(" ");
                                var partesFechaFinal = json.data[i].fechaFinal.split(" ");
                                
                                var partespartesI = partesFechaInicio[0].split("-");
                                var partespartesF = partesFechaFinal[0].split("-");
                                
                                var fechaBienI = partespartesI[2]+"/"+partespartesI[1]+"/"+partespartesI[0]+" "+partesFechaInicio[1];
                                var fechaBienF = partespartesF[2]+"/"+partespartesF[1]+"/"+partespartesF[0]+" "+partesFechaFinal[1];
                            
                            tabla+='<tr>';
                            tabla+='<td><center>'+(i+1)+'</center></td>';
                            tabla+=' <td><center>Cateos</center></td>';
                            tabla+='<td><center>'+json.data[i].fechaActualizacion+'</center></td>';
                            tabla+='<td><center>'+fechaBienI+'</center></td>';
                            tabla+='<td><center>'+fechaBienF+'</center></td>';                                                
                            tabla+=' </tr>';
                            
                            tabla2+='Cateos|';
                            tabla2+=''+json.data[i].fechaActualizacion+'|';
                            tabla2+=''+fechaBienI+'|';
                            tabla2+=''+fechaBienF+'|';                        
                            
                            
                                                              }
                          $('#pdf').show();

                          
                            $("#tablac").show();
                            $("#tab").append(tabla);
                                    } catch (e) {
                                     $("#info").html("Error").fadeIn('slow').delay(2000).fadeOut('slow');

                                    }
                        }
                      
                    });
        }else{
        $('#tab2').hide();
                    $('#pdf').hide();

            var finic=$('#finicio').val();
            var fnin=$('#ffin').val();
            
            $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacioncateos/ProgramacioncateosFacade.Class.php",
                    async: true,
                    data: {
                        fini:finic,
                        ffin:fnin,
                        tipo:2,
                        activo:'S',
                        cveUsuario: <?php echo $_SESSION['cveUsuarioSistema']?>,
                        accion: 'consultacateosReporte' 
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json;
                    var tabla="";
                      tabla2="";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if(json.totalCount==0){
                           $("#info2").html("No existen datos con los parametros de Consulta").fadeIn('slow').delay(2000).fadeOut('slow');
                           return;
                            }
                             $("#tab2 td").remove();
                             
                           info=1;                       
                           
                            for (var i = 0; i < json.totalCount; i++) {
                              
                              var partesFechaInicio = json.data[i].fechaInicio.split(" ");
                                var partesFechaFinal = json.data[i].fechaFinal.split(" ");
                                
                                var partespartesI = partesFechaInicio[0].split("-");
                                var partespartesF = partesFechaFinal[0].split("-");
                                
                                var fechaBienI = partespartesI[2]+"/"+partespartesI[1]+"/"+partespartesI[0]+" "+partesFechaInicio[1];
                                var fechaBienF = partespartesF[2]+"/"+partespartesF[1]+"/"+partespartesF[0]+" "+partesFechaFinal[1];
                            
                            tabla+='<tr>';
                            tabla+='<td><center>'+(i+1)+'</center></td>';
                            tabla+=' <td><center>Cateos</center></td>';
                            tabla+='<td><center>'+json.data[i].fechaActualizacion+'</center></td>';
                            tabla+='<td><center>'+fechaBienI+'</center></td>';
                            tabla+='<td><center>'+fechaBienF+'</center></td>';                        
                            
                            tabla+=' </tr>';
                            
                            tabla2+='Cateos|';
                            tabla2+=''+json.data[i].fechaActualizacion+'|';
                            tabla2+=''+fechaBienI+'|';
                            tabla2+=''+fechaBienF+'|';                        
                            
                            
                                                              }
                                                              
                          $('#pdf2').show();

                          $("#tab2").show();
                            $("#tablac2").show();
                            $("#tab2").append(tabla);
                                    } catch (e) {
                                     $("#info2").html("Error").fadeIn('slow').delay(2000).fadeOut('slow');

                                    }
                        }
                      
                    });
        }
     };
     consultaindividual = function (tpc) {
         
     
         $('#pdf').hide();
         $('#pdf2').hide();
         info=0;
             $("#tablac").hide();
           if(tpc==1){
            
            var mes=$('#cveMes').val();
             var descmes=$('#cveMes option:selected').html();
             var anio=$('#anio').val();
             
             
             if(mes.length==0){
                  $("#info").html("Seleccione el mes a consultar.").fadeIn('slow').delay(2000).fadeOut('slow');

                 return;
             }
              if(anio.length==0){
                  $("#info").html("Seleccione el a\u00f1o a consultar.").fadeIn('slow').delay(2000).fadeOut('slow');

                 return;
             }
             
            $('#fechaseleccionada').text(descmes+" / "+anio);
            
            
            
            $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    async: true,
                    data: {
                        mes:mes,
                        anio:anio,
                        tipo:tpc,
                        activo:'S',
                        accion: 'consulta_individual' 
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json;
                    var tabla="";
                      tabla2="";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                        
                        if(json.total==0){
                           $("#info").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');
                           return;
                            }
                             $("#tab td").remove();
                             
                           info=1;
                    
                            for (var i = 0; i < json.total; i++) {
                            tabla+='<tr>';
                            tabla+='<td><center>'+(i+1)+'</center></td>';
                            tabla+=' <td><center>'+json.data[i].rol+'</center></td>';
                            tabla+='<td><center>'+json.data[i].dia+'</center></td>';
                            tabla+='<td><center>'+json.data[i].fecha + ' '+json.data[i].horario+'</center></td>';                        
                            tabla+=' <td><center>'+json.data[i].fecha+'</center></td>';
                            tabla+=' </tr>';
                            
                            tabla2+=''+json.data[i].rol+'|';
                            tabla2+=''+json.data[i].dia+'|';
                            tabla2+=''+json.data[i].fecha+ ' '+json.data[i].horario+'|';                        
                            tabla2+=''+json.data[i].fecha+'|';
                            
                            
                            
                            
                                                              }
                          $('#pdf').show();

                          
                            $("#tablac").show();
                            $("#tab").append(tabla);
                                    } catch (e) {
                                     $("#info").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');

                                    }
                                },
                      
                    });
                    
                    }
                    
                   if(tpc==2){
                   $('#tab2').hide();
                    $('#pdf').hide();

            var finic=$('#finicio').val();
            var fnin=$('#ffin').val();
          //  alert(finic+"  -  "+fnin);
            $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    async: true,
                    data: {
                        fini:finic,
                        ffin:fnin,
                        tipo:2,
                        activo:'S',
                        accion: 'consulta_individual' 
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json;
                    var tabla="";
                      tabla2="";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                         $("#tab2 td").remove();
                             
                        if(json.total==0){
                           $("#info2").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');
                           return;
                            }
                            
                           info=1;
                    
                            for (var i = 0; i < json.total; i++) {
                            tabla+='<tr>';
                            tabla+='<td><center>'+(i+1)+'</center></td>';
                            tabla+=' <td><center>'+json.data[i].rol+'</center></td>';
                            tabla+='<td><center>'+json.data[i].dia+'</center></td>';
                            tabla+='<td><center>'+json.data[i].fecha + ' '+json.data[i].horario+'</center></td>';                  
                            tabla+=' <td><center>'+json.data[i].fecha+'</center></td>';
                            tabla+=' </tr>';
                            
                            tabla2+=''+json.data[i].rol+'|';
                            tabla2+=''+json.data[i].dia+'|';
                            tabla2+=''+json.data[i].fecha+ ' '+json.data[i].horario+'|';                        
                            tabla2+=''+json.data[i].fecha+'|';
                            
                            
                            
                            
                                                              }
                          $('#pdf2').show();

                           $('#tab2').show();
                            $("#tablac2").show();
                            $("#tab2").append(tabla);
                                    } catch (e) {
                                    
                                     $("#info2").html(json.msg).fadeIn('slow').delay(2000).fadeOut('slow');

                                    }
                                },
                      
                    });
                    
                    }
                }


        function listaMeses(){
            var ruta_meses = "../fachadas/sigejupe/meses/MesesFacade.Class.php";
            $.ajax( {
                url:ruta_meses,
                type: 'POST',
                async:false,
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        var conca = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveMes" id="cveMes" class="form-control text-uppercase" title="Mes" data-toggle="tooltip" tabIndex="tabIndex">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                if(data.data[index].cveMes.length == 1){
                                    conca = "0";
                                }else{
                                    conca = "";
                                }
                                html += "<option value='" + conca + data.data[index].cveMes + "'>" + data.data[index].desMes + "</option>";
                            }
                            html += "</select>";
                        } else {
                            html = "Sin resultados";
                        }
                        $('#listaMeses').html(html);
                    } catch (e) {
                        alert(e);
                    }
                    ToggleLoading(1);
                }
            }).error(function () {
                alert('error al obtener los meses');
            });
        }

        formatoFecha = function(campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        }

        /*
        * Función que permite verificar si se capturan datos válidos en el campo txtAnio
        */
        validarAnio = function(){
            var anio = $("#anio").val();
            //alert(anio.length);
            //console.log(anio);
            if ( isNaN(parseInt(anio)) ){
                return false;
            } else if ( anio == 0 ){
                return false;
            } else if ( anio == "" ) {
                return false;
            } else if ( anio.length < 4 ) {
                return false;
            } else if ( parseInt(anio) < 2000 ) {
                return false;
            }
            else {
                return true;
            }

        }
        
        function ucFirstAllWords(str){
            str = str.toLowerCase();
            var pieces = str.split(" ");
            for ( var i = 0; i < pieces.length; i++ ){
                var j = pieces[i].charAt(0).toUpperCase();
                pieces[i] = j + pieces[i].substr(1);
            }
            return pieces.join(" ");
        }

        $(function () {
            listaMeses();
          
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            //$('#tblResultados').DataTable();
        });


    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }
            
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }


    function reporte(str)
    {


      $('#con').text(tabla2);
       $('#tipo').val(str);
       
            if(str==1){
            $('#fec').text($('#fechaseleccionada').text());
               }
       if(str==2){
            $('#fec').text($('#finicio').val()+" - "+$('#ffin').val());
               }
       
    $('#cont').submit();
    }
            
            
            
                    
            
      
     
    </script>


    <form id="cont" action="../vistas/sigejupe/guardiasroles/reportepdf.php" method="post" style="display: none">
    <textarea name="info" id="con"></textarea>
    <textarea name="fec" id="fec"></textarea>
    <input type="hidden" name="tipo" id="tipo" readonly>
    <input type="hidden" name="nombre" id="tipo" readonly value="<?=$_SESSION['Nombre']?>">


    </form>


    <script>
                          $(function () {
                           
                            var nowTemp = new Date();
                            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                            var checkin = $('#finicio').datepicker({
                                format: "dd/mm/yyyy",
                                onRender: function (date) {
                                    return date.valueOf() < now.valueOf() ? '' : '';
                                }
                            }).on('changeDate', function (ev) {
                                if (ev.date.valueOf() > checkout.date.valueOf()) {
                                    var newDate = new Date(ev.date)
                                    newDate.setDate(newDate.getDate() + 1);
                                    checkout.setValue(newDate);
                                } else if (checkout.date.valueOf() == now.valueOf()) {
                                    var newDate = new Date(ev.date)
                                    newDate.setDate(newDate.getDate() + 1);
                                    checkout.setValue(newDate);
                                }
                                checkin.hide();
                                $('#ffin')[0].focus();
                            }).data('datepicker');
                            var checkout = $('#ffin').datepicker({
                                format: "dd/mm/yyyy",
                                onRender: function (date) {
                                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                                }
                            }).on('changeDate', function (ev) {
                                checkout.hide();
                            }).data('datepicker');

                            
                        });
                        
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>