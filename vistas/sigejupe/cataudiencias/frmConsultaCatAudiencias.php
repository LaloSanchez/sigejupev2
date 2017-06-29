<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 19/01/2016..
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }

    //    echo "<br> Actuacion: " . $idActuacionArbol . "<br>";
    //    echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
    //    echo "Procedencia: " . $procedencia . "<br>";
    ?>

    <style type="text/css">
        .search-table-outter { overflow-x: scroll; }
        
        .division1{
            width:50%;
            height:100px;
            float:right;
        }
        .division2{
            width:50%;
            height:100px;
            float:left;
        }
        .alert{
            display: none;
        }
        
        #principal{
            width:800px;
            border:0px;
            margin:0 auto;
            height:300px;
            text-align:center;
            
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
        
        .needed:after {
    		color:darkred;
    	  	content: " (*)";
    	}
    </style>
    <input type="hidden" id="unoodos" value="2">
    <input type="hidden" id="hiddenIdCeresoAdscripcion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
       <div class="panel-heading">
          <h5 class="panel-title" id="h5titulo">                                                            
             Audiencias
          </h5>
       </div>
       <div class="panel-body">
          <!--    NUEVO-->        

          <!--    FIN NUEVO-->
          <div id="divConsulta" class="col-xs-12">
             <div class="col-xs-12">
                <div class="form-group col-xs-2" style="padding: 10px">
                   <label class="control-label" id="totalReg"></label>
                </div>
                <div class="col-xs-3">
                   <input type="submit" class="btn btn-primary" id="inputRegresar5" value="Regresar" onclick="regresartabla()" style="display: none">
                   <!--<input type="submit" class="btn btn-primary" id="inputImprimir" value="Reporte" onclick="habilitabusqueda()">-->                                                        
                   <!--<input type="submit" class="btn btn-primary" id="inputNuevo" value="Nuevo" onclick="nuevo()">-->                                    
                </div>
                
                <div id="divPaginador" class="form-group col-xs-2" >
                   
                   <label class="control-label">Pagina:</label>
                   <select  name="cmbPaginacion" id="cmbPaginacion" >
                      <option value="1">1</option>
                   </select>
                </div>
                <div id="divPaginador" class="form-group col-xs-4" >
                   <label class="control-label">Registros por p&aacute;gina:</label>
                   <select  name="cmbNumReg" id="cmbNumReg">
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                      <option value="40">40</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                   </select>
                </div>
             </div>
              <br>
              <div class="form-group">
                  <br>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label class="control-label" style="display:none" id="lbldistrito">Distritos:&nbsp;</label>
                   <select  name="cmbPaginacion1" id="cmbdistrito" style="display:none">
                      <option value="0">Seleccione una opci&oacute;n</option>
                   </select>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 ">&nbsp;</label>
                   <div class="col-md-2 botonesAdaptar">
                    <input style="display:none" type="submit" class="btn btn-primary" id="pdf" value="PDF x Distrito" onclick="reporte()">
                   </div>
                   <div class="col-md-2 botonesAdaptar">
                    <input style="display:block" type="submit" class="btn btn-primary" id="pdf" value="Imprimir tabla" onclick="imprimir('divTableResult')">
                   </div>
              </div>
                   <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label class="control-label">Buscar:&nbsp;</label>
                   <input type="text" id="buscar" class="input-sm" name="buscar" onkeyup="onkey()">
                   <input type="submit" class="btn btn-primary" id="buscartabla" value="Buscar" onclick="buscartabla()">
                   <input type="submit" class="btn btn-primary" id="limpiarbusqueda" value="Limpiar" onclick="limpiarbusqueda()">                                    
                   
                   
                   <br>
                   <br>
                   <div id="divAlertInfo2" class="alert alert-info alert-dismissable">
                    <strong>Informaci&oacute;n!</strong> Mensaje
                   </div>
             <div id="divTableResult" class="col-xs-12">
             </div>
             <form id="cont" action="../vistas/sigejupe/cataudiencias/reportepdf.php" method="post" style="display: none">
                <textarea name="info" id="con"></textarea>
                <textarea name="fec" id="fec"></textarea>
                <textarea name="pag" id="pag"></textarea>
                <textarea name="cantxPag" id="cantxPag"></textarea>
             </form>
          </div>
       </div>
    </div>

    <script type="text/javascript">
        var tabla2="";
        var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
        var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
     
        var procedencia = <?php echo $procedencia; ?>;

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        var cuandopasa=0;
        
        $(document).ready(function() {
    //        alert("aqui se modifica..");
            habilitabusqueda();
            distritosbusqueda();
            var numreg2=$("#cmbNumReg").val();
            $("#cantxPag").val(numreg2);
            
            var paginacion2=$("#cmbPaginacion").val();
            $("#pag").val(paginacion2);
            $('#cmbNumReg').change(function(){
                var numreg=$("#cmbNumReg").val();
                $("#cantxPag").val(numreg);
                
                var es=$("#unoodos").val();
                pasarPaginaUno();
                if(es=="1")
                {
                    consultarCeresosAds(2);
                }
                if(es=="2")
                {
                    consultarCeresosAds(1);
                }
                if(es=="3")
                {
                    buscar();
                }
            });
            
            $('#cmbPaginacion').change(function(){
                var paginacion=$("#cmbPaginacion").val();
                $("#pag").val(paginacion);
                var es=$("#unoodos").val();
                
                if(es=="1")
                {
                    consultarCeresosAds(2);
                }
                if(es=="2")
                {
                    consultarCeresosAds(1);
                }
                if(es=="3")
                {
                    buscar();
                }
            });
            
            consultarCeresosAds(1);
            fasenaturaleza();
            faseaudiencias();
            tipoaudiencia();
            //distritos();
            codigo();
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            $( "#buscar" ).on('keypress', function (event) {
                if(event.which === 13){                
                    buscar();
                    $("#unoodos").val(3);
                }
            });
        
        });
        
        function buscartabla()
        {
            buscar();
        }
        
        function limpiarbusqueda()
        {
            $('#buscar').val("");
    //        document.getElementById("lbldistrito").style.display = "none";
    //        document.getElementById("cmbdistrito").style.display = "none";
    //        document.getElementById("pdf").style.display = "none"; 
            $('#cmbdistrito').val(0);
            consultarCeresosAds(1);
        }
        
        function consultar()
        {
            document.getElementById("nota").style.display = "inline";
            document.getElementById('lblfinicio').innerHTML = 'Fecha Inicial';
            document.getElementById('lblffinal').innerHTML = 'Fecha Final';
           
             var dd="<?= date('d/m/Y') ?>";

            $('#fechaInicia').val(dd);
            $('#fechaVigencia').val(dd);
            
            $("#unoodos").val("1");
            $("#inputLimpiar").hide();
            $("#inputLimpiar2").show();
            $("#inputRegresar").hide();
            $("#inputRegresar2").show();
            $("#divdistrito").hide();
            $("#f2").hide();
            $("#f1").hide();
            $("#duracionmin").hide();
            $("#duracionhor").hide();
            $("#inputGuardar").hide();
            $("#cveCatAudiencia").hide();
            $("#activobusqueda").hide();
            $("#activo").hide();
            $("#inputConsultar").hide();
            $("#inputBuscar").show();
            $("#claveregistro").hide();
            $("#inputModificar").hide();
            $("#inputEliminar").hide();
            //$("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / REGISTRO DE AUDIENCIAS");
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / BUSQUEDA");
        }
        
        function regresar()
        {   
            document.getElementById("nota").style.display = "none";
            document.getElementById('lblfinicio').innerHTML = 'Fecha Inicio de Vigencia';
            document.getElementById('lblffinal').innerHTML = 'Fecha Fin de Vigencia';
            var claveregistro=$("#cveCatAudiencia").val();
            $("#inputLimpiar").show();
            $("#inputLimpiar2").hide();
            $("#inputRegresar").show();
            $("#inputRegresar2").hide();
            $("#claveregistro").show();
            $("#claveregistro").show();
            $("#divdistrito").show();
            $("#f2").show();
            $("#f1").show();
            $("#duracionmin").show();
            $("#duracionhor").show();
            $("#cveCatAudiencia").show();
            $("#activobusqueda").show();
            $("#activo").show();
            $("#inputConsultar").show();
            $("#inputBuscar").hide();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / REGISTRO DE AUDIENCIAS");
            
            if(claveregistro=="")
            {
                
                $("#inputGuardar").show();
            }
            else
            {
                $("#inputModificar").show();
                $("#inputEliminar").show();
                pasarvalores(claveregistro);
            }
            
            $("#nuevo").show();
            $("#divConsulta").hide();
            
        }
        
        function regresartabla()
        {
            $("#divConsulta").hide();
            $("#nuevo").show();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / BUSQUEDA");
            $("#inputLimpiar").hide();
            $("#inputLimpiar2").show();
            $("#inputRegresar").hide();
            $("#inputRegresar2").show();
            $("#divdistrito").hide();
            $("#f2").hide();
            $("#f1").hide();
            $("#duracionmin").hide();
            $("#duracionhor").hide();
            $("#inputGuardar").hide();
            $("#cveCatAudiencia").hide();
            $("#activobusqueda").hide();
            $("#activo").hide();
            $("#inputConsultar").hide();
            $("#inputBuscar").show();
            $("#claveregistro").hide();
            $("#inputModificar").hide();
            $("#inputEliminar").hide();
            
        }
        
        function calcula()
        {
            var min=parseInt($("#minDuracion").val());
            var max=parseInt($("#maxDuracion").val());
            var result=0;
            if (isNaN(min))
                min=0;
            
            if (isNaN(max))
                max=0;
                
            if(max<=min)
            {
                $("#holgura").val(0);
            }
            else
            {
                result=max-min;
                $("#holgura").val(result);
            }
            
            if(min==""&&max=="")
            {
                $("#holgura").val("");
            }
            
        }
        
        function onkey()
        {
            var buscar=$("#buscar").val();
            
                
            if(buscar=="")
            {
                //alert("vacio");
                consultarCeresosAds(1);
            }
            
            
        }
        
        function buscar()
        {
            var buscar=$("#buscar").val();
            var strDatos="";
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            
            if(buscar=="")
            {
                //alert("no tiene");
            }
            else
            {
                //alert("si tiene");
                var pag = $("#cmbPaginacion").val();
                var cantReg = $("#cmbNumReg").val();
                
                strDatos = "accion=consultarDescripciones";
                    //strDatos += "&desCatAudiencia=" + desCatAudiencia;


                strDatos += "&desAudiencia=" + buscar;
                strDatos += "&activo=S";
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;            

                
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        //                            alert(datos);
                        var may="";
                        var json = "";
                        var table = "";
                        tabla2="";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            table +="<div class='search-table-outter'>";
                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>#</th>";
                            table += "<th>CLAVE</th>";
                            table += "<th>DESCRIPCI&Oacute;N</th>";
                            table += "<th>ESTADO</th>";
    //                        table += "<th>MODIFICAR</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            for (var i = 0; i < json.totalCount; i++) {
                                may=json.data[i].descripcion;
                                table += "<tr>";
                                table += "<td > " + (i + 1 + indice) + "</td>";
                                table += "<td > " + json.data[i].cvecataudiencia + "</td>";
                                table += "<td >" + may.toUpperCase() + " </td>";
                                if(json.data[i].activo=="S")
                                {
                                    table += "<td>ACTIVA</td>";
                                }

    //                            table += "<td><div ><a href='#noir' onclick='muestramodifica(" + json.data[i].cvecataudiencia + ")'>Modificar</a></div></td>";
                                table += "</tr> ";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            table += "</div>";

                            $("#divHideForm").hide();
                            $("#divTableResult").html(table);
                            

                            //limpiarSelect("#cmbPaginacion");
                            //limpiarSelect("#cmbNumReg");

                            getPaginas2(json.pagina, cantReg);
                            changeDivForm(2);

                            //limpiar();              
                        } else {
                            
                            table +="<div class='search-table-outter'>";
                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>CLAVE</th>";
                            table += "<th>DESCRIPCI&Oacute;N</th>";
                            table += "<th>ESTADO</th>";
                            table += "<th>MODIFICAR</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            table += "<tr>";
                                table += "<td ></td>";
                                table += "<td ></td>";                           
                                table += "<td ></td>";                        
                                table += "<td></td>";
                            table += "</tr> ";
                            table += "</tbody>";
                            table += "</table>";
                            table += "</div>";

                            $("#divHideForm").hide();
                            $("#divTableResult").html(table);
                            
                            
                            //consultar();
                            //$("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / BUSQUEDA");
                            //$("#nuevo").show();
                            $("#divAlertInfo").html('' + json.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                            //$("#nuevo").hide();

                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
            //               alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            }
            
        }
        
        function fasenaturaleza() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/naturalezas/NaturalezasFacade.Class.php",
                data: {
                    activo:'S',                
                    accion: "consultar",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.data, function (index, element) {
                        $("#cveNaturaleza").append($('<option></option>').val(element.cveNaturaleza).html(element.desNaturaleza));
                    });
                },
                error: function () {
                    $("#divAlertDager").html("No se Encontraron Fases de Naturaleza");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }
        
        function distritosbusqueda() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                data: {
                    activo:'S',                
                    accion: "consultar",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.data, function (index, element) {
                        $("#cmbdistrito").append($('<option></option>').val(element.cveDistrito).html(element.desDistrito));
                    });
                },
                error: function () {
                    $("#divAlertDager").html("No se Encontraron Distritos");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }
        
        $(function () {
            $("#fechaInicia").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#fechaVigencia").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            
            
            $("#holgura").validaCampo('0123456789');
            $("#minDuracion").validaCampo('0123456789');
            $("#maxDuracion").validaCampo('0123456789');
            $("#minHorasDesahogar").validaCampo('0123456789');
            $("#maxHorasDesahogar").validaCampo('0123456789');
        
            $('#fechaInicia, #fechaVigencia').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });
        });
        
        function habilitabusqueda()
        {
            document.getElementById("lbldistrito").style.display = "inline";
            document.getElementById("cmbdistrito").style.display = "inline";
            document.getElementById("pdf").style.display = "inline";   
        }
        function reporte()
        {
            
            var distr = $("#cmbdistrito").val();
            
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var strDatos="";
            strDatos = "accion=consultarDescripciones2";
            //strDatos += "&activo=S";
            //strDatos += "&pag=" + pag;
            strDatos += "&distr=" + distr;
            
            if(distr!=0)
            {
                $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                            alert(datos);
                    var may="";
                    var json = "";
                    var table = "";
                    tabla2="";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.TotalCountdistritosaudiencia > 0) {                    
                        for (var i = 0; i < json.TotalCountdistritosaudiencia; i++) {
                            may=json.datosdistrito[i].Descripcionaud;
                            
                            tabla2+=''+json.datosdistrito[i].cveaudiencia+'|';
                            tabla2+=''+json.datosdistrito[i].Descripcionaud+'|';
                            tabla2+=''+json.datosdistrito[i].causa+'|';
                            tabla2+=''+json.datosdistrito[i].activodistrito+'|';
                            tabla2+=''+json.datosdistrito[i].minduracion+'|';
                            tabla2+=''+json.datosdistrito[i].maxduracion+'|';
                            tabla2+=''+json.datosdistrito[i].horasdesahogomin+'|';
                            tabla2+=''+json.datosdistrito[i].horasdesahogomax+'|';
                            tabla2+=''+json.datosdistrito[i].desnaturaleza+'|';
                            tabla2+=''+json.datosdistrito[i].tipaudiencia+'|';
                            tabla2+=''+json.datosdistrito[i].etapasprocesales+'|';
                            tabla2+=''+json.datosdistrito[i].descripciondistrito+'|';
                            tabla2+=''+json.datosdistrito[i].holgura+'|';
                        }
               
                        $('#con').text(tabla2);
                        $('#cont').submit();
                    }            
                     else {

                        //consultar();
                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / BUSQUEDA");
                        $("#nuevo").show();
                        $("#divAlertInfo2").html('' + json.text);
                        $("#divAlertInfo2").show("slide");
                        setTimeAlert("divAlertInfo2");
                        //$("#nuevo").hide();
                        
                    }


                },
                error: function (objeto, quepaso, otroobj) {
        //               alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            }
            else
            {
                //alert("selecciona un distrito");
                $("#divAlertInfo2").html('Seleccione un Distrito');
                $("#divAlertInfo2").show("slide");
                setTimeAlert("divAlertInfo2");
            }
            
            
            
            
            
            
            
        }
        
        
        function limpiar2()
        {
            consultardistritos(0);
            limpiar();
            $("#inputModificar").hide();
            $("#inputEliminar").hide();
            $("#inputGuardar").show();
            
        }
        
        function faseaudiencias() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/etapasprocesales/EtapasprocesalesFacade.Class.php",
                data: {
                    activo:'S',                
                    accion: "consultar",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.data, function (index, element) {
                        $("#cveEtapaProcesal").append($('<option></option>').val(element.cveEtapaProcesal).html(element.desEtapaProcesal));
                    });
                },
                error: function () {
                    $("#divAlertDager").html("No se Encontraron Fases de Audiencias");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }
        
        function tipoaudiencia() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposaudiencias/TiposaudienciasFacade.Class.php",
                data: {
                    activo:'S',                
                    accion: "consultar",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.data, function (index, element) {
                        $("#cveTipoAudiencia").append($('<option></option>').val(element.cveTipoAudiencia).html(element.desTipoAudiencia));
                    });
                },
                error: function () {
                    $("#divAlertDager").html("No se Encontraron Tipos de Audiencias");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }
        
        
        
        function codigo() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/codigos/CodigosFacade.Class.php",
                data: {               
                    accion: "consultar",
                    activo:'S',
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.data, function (index, element) {
                        $("#cveCodigo").append($('<option></option>').val(element.cveCodigo).html(element.desCodigo));
                    });
                },
                error: function () {
                    $("#divAlertDager").html("No se Encontraron Codigos");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }
        
        function checksgenero()
        {   
            var checkboxValues = "";
            $('input[name="orderBoxgenero[]"]:checked').each(function() { checkboxValues += $(this).val() + ","; });
            checkboxValues = checkboxValues.substring(0, checkboxValues.length-1);
            $("#cadena").val(checkboxValues);
        }
        
        function checksdistrito()
        {   
            var checkboxValues = "";
            $('input[name="orderBoxdistrito[]"]:checked').each(function() { checkboxValues += $(this).val() + ","; });
            checkboxValues = checkboxValues.substring(0, checkboxValues.length-1);
            $("#cadenadistrito").val(checkboxValues);
            
            var cveaudiencia=$("#cveCatAudiencia").val();

        }

    //    function eliminaraudiencia()
    //    {
    //         //cveCatAudiencia
    //        var cveCatAudiencia = $("#cveCatAudiencia").val();
    //         bootbox.dialog({
    //                message: "Advertencia!! <br><br> Esta seguro de eliminar el registro seleccionado??",
    //                
    //                buttons: {
    //                  danger: {
    //                    label: "Aceptar",
    //                    className: "btn-primary",
    //                    callback: function() {
    //                    $.ajax({
    //                        type: "POST",
    //                        url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
    //                        data: {
    //                            cveCatAudiencia: cveCatAudiencia,
    //                            cveUsuarioSesion: cveUsuarioSesion,
    //                            cvePerfilSesion: cvePerfilSesion,
    //                            juzgadoSesion: juzgadoSesion,
    //                            accion: "eliminaraudienciasdistritos",
    //                        },
    //                        async: "true",
    //                        dataType: "json",
    //                        beforeSend: function (xhr) {
    //
    //                        },
    //                        success: function (res) {
    //                            limpiar();
    //                            consultardistritos(0);
    //                            $("#inputModificar").hide();
    //                            $("#inputEliminar").hide();
    //                            $("#inputGuardar").show();
    //
    //                            $("#divHideForm").hide();
    //                            $("#divAlertSucces").html("Correcto!: " + "Se ha eliminado correctamente");
    //                            $("#divAlertSucces").show("slide");
    //                            setTimeAlert("divAlertSucces");
    //                        },
    //                        error: function () {
    //                            //alert("Error al Consultar");
    //                            $("#divAlertDager").html("Ocurrio un error al eliminar");
    //                            $("#divAlertDager").show("slide");
    //                            setTimeAlert("divAlertDager");
    //                        }
    //
    //                    });
    //        
    //                    }
    //                },
    //                success: {
    //                    label: "Cancelar!",
    //                    className: "btn-primary",
    //                    callback: function() {
    //                      
    //                    }
    //                  }
    //                  
    //            }
    //        });
    //    }


     imprimir = function (div) {
            var table = '';
            table +=' <style>  border-collapse:collapse;';    
            
            table +='     table {';
            table +='         border: solid #000 !important;';
            table +='         border-width: 1px 0 0 1px !important;';
            table +='         font-family: Arial;';
            table +='         font-size: 12px;';
            table +='     }';
            table +='     th, td {';
            table +='         border: solid #000 !important;';
            table +='         border-width: 0 1px 1px 0 !important;';
            table +='     }';
            table +='   @media print {';
            
            table +='     table { border-collapse:collapse;';
             table +='         font-family: Arial;';
             table +='         font-size: 12px;';
            table +='         border: solid #000 !important;';
            table +='         border-width: 1px 0 0 1px !important;';
            table +='     }';
            table +='     th, td {';
            table +='         border: solid #000 !important;';
            table +='         border-width: 0 1px 1px 0 !important;';
            table +='     }';
            table +=' } </style>';
            
            var divContents = $("#" + div).html();
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            divContents = divContents.replace(/<input(.*?)>/g, '');
            divContents = divContents.replace(/Buscar:/g, '');
    //        divContents += "<br><br>Fecha y hora de impresion:  " + $("#hiddenFechaHoraHoy").val();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head>'+table+'<title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img  src="img/encabezado.jpg"></center> <br><center><label><b>CATALOGO DE AUDIENCIAS</b></label></center> <br><br>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        };
        
        
        function consultarCeresosAds(estatusbusqueda) {
        
            //**************************** consulta de acuerdos *************************************
            //VARIABLES PARA LA PAGINACION
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            
            //var numreg2=$("#cmbNumReg").val();
            $("#cantxPag").val(cantReg);
            
            //var paginacion2=$("#cmbPaginacion").val();
            $("#pag").val(pag);
            
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            
            //FIN DE VARIABLES PARA LA PAGINACION
            
            //BUSQUEDA CON VARIABLES
            var desCatAudiencia=$("#desCatAudiencia").val();
            var cveNaturaleza=$("#cveNaturaleza").val();
            var cveEtapaProcesal=$("#cveEtapaProcesal").val();
            var cveTipoAudiencia=$("#cveTipoAudiencia").val();
            var causa=$("#causa").val();
            //var cveDistrito=$("#cveDistrito").val();
            var cveCodigo=$("#cveCodigo").val();        
            var fechaInicia=$("#fechaInicia").val();
            var fechaVigencia=$("#fechaVigencia").val();        
            var finSemana=$("#finSemana").val();
            var audienciaInicial=$("#audienciaInicial").val();
            //FIN BUSQUEDA CON VARIABLES
            var strDatos="";
            var num="";
            
            var encontrado=true;
            if(estatusbusqueda==1)
            {
                strDatos = "accion=consultarDescripciones";
                strDatos += "&activo=S";
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                num=1;
                $("#nuevo").hide();
            }
            if(estatusbusqueda==2)
            {
                $("#inputRegresar5").show();
                strDatos = "accion=consultarDescripciones";
                //strDatos += "&desCatAudiencia=" + desCatAudiencia;
                
                
                if(cveNaturaleza!=0||cveEtapaProcesal!=0||cveTipoAudiencia!=0||causa!=0||cveCodigo!=0||audienciaInicial!=0||desCatAudiencia!="")
                {   
                    if(cveNaturaleza==0)
                    {
                        cveNaturaleza="";
                        strDatos += "&cveNaturaleza=" + cveNaturaleza;
                    }
                    else
                    {
                        strDatos += "&cveNaturaleza=" + cveNaturaleza;
                    }
                    
                    
                    if(cveEtapaProcesal==0)
                    {
                        cveEtapaProcesal="";
                        strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
                    }
                    else
                    {
                        strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
                    }
                    
                    if(cveTipoAudiencia==0)
                    {    
                        cveTipoAudiencia="";
                        strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
                    }
                    else
                    {                   
                        strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
                    }
                    
                    if(causa==0)
                    {    
                        causa="";
                        strDatos += "&causa=" + causa; 
                    }
                    else
                    {                    
                        strDatos += "&causa=" + causa;               
                    }
                    
                    if(cveCodigo==0)
                    {    
                        cveCodigo="";
                        strDatos += "&cveCodigo=" + cveCodigo;
                    }
                    else
                    {                    
                        strDatos += "&cveCodigo=" + cveCodigo;                    
                    }
                    
                    if(audienciaInicial==0)
                    {   
                        audienciaInicial="";
                        strDatos += "&audienciaInicial=" + audienciaInicial;                    
                    }
                    else
                    {
                        strDatos += "&audienciaInicial=" + audienciaInicial;                
                    }
                    
                    if(desCatAudiencia=="")
                    {
                        desCatAudiencia="";
                        strDatos += "&desCatAudiencia=" + desCatAudiencia;                
                    }
                    else
                    {
                        strDatos += "&desCatAudiencia=" + desCatAudiencia;
                    }
                    fechaInicia="";
                    fechaVigencia="";
                    
                    strDatos += "&fechI=" + fechaInicia;
                    strDatos += "&fechV=" + fechaVigencia;
                    
                }
                else
                {
                    
                    cveNaturaleza="";
                    strDatos += "&cveNaturaleza=" + cveNaturaleza;
                    
                    cveEtapaProcesal="";
                    strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
                    
                    cveTipoAudiencia="";
                    strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
                    
                    causa="";
                    strDatos += "&causa=" + causa;
                    
                    cveCodigo="";
                    strDatos += "&cveCodigo=" + cveCodigo;
                
                    audienciaInicial="";
                    strDatos += "&audienciaInicial=" + audienciaInicial;
                
                    desCatAudiencia="";
                    strDatos += "&desCatAudiencia=" + desCatAudiencia;
                        
                    strDatos += "&fechI=" + fechaInicia;
                    strDatos += "&fechV=" + fechaVigencia;
                }
                

                
                strDatos += "&activo=S";
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;            
                $("#nuevo").hide();
                num=2;
            
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                            alert(datos);
                    var may="";
                    var json = "";
                    var table = "";
                    tabla2="";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        
                        table += "<table id='tblResultadosGridw' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>#</th>";
                        table += "<th>CLAVE</th>";
                        table += "<th>DESCRIPCI&Oacute;N</th>";
                        table += "<th>ESTADO</th>";
    //                    table += "<th>MODIFICAR</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            may=json.data[i].descripcion;
                            table += "<tr>";
                            table += "<td > " + (i + 1 + indice) + "</td>";
                            table += "<td > " + json.data[i].cvecataudiencia + "</td>";
                            table += "<td >" + may.toUpperCase() + " </td>";
                            if(json.data[i].activo=="S")
                            {
                                table += "<td>ACTIVA</td>";
                            }
                            
    //                        table += "<td><div ><a href='#noir' onclick='muestramodifica(" + json.data[i].cvecataudiencia + ")'>Modificar</a></div></td>";
                            table += "</tr> ";
    //                                                    alert(json.data[i].observaciones);
    //                        tabla2+=''+json.data[i].cvecataudiencia+'|';
    //                        tabla2+=''+may.toUpperCase()+'|';
    //                        tabla2+=''+json.data[i].causa+'|';
    //                        tabla2+=''+json.data[i].activo+'|';
    //                        tabla2+=''+json.data[i].duracionminima+'|';
    //                        tabla2+=''+json.data[i].duracionmaxima+'|';
    //                        tabla2+=''+json.data[i].desahogohoramin+'|';
    //                        tabla2+=''+json.data[i].desahogohoramax+'|';
    //                        tabla2+=''+json.data[i].desnaturaleza+'|';
    //                        tabla2+=''+json.data[i].tipoaudiencia+'|';
    //                        tabla2+=''+json.data[i].etapaprocesal+'|';
                        }
                        table += "</tbody>";
                        table += "</table>";
                        table += "</div>";
                        
                        $("#divHideForm").hide();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable(
                                {
                                    paging: false
                                }
                        );
                        
                        //limpiarSelect("#cmbPaginacion");
                        //limpiarSelect("#cmbNumReg");
                        
                        getPaginas(json.pagina, cantReg,num);
                        changeDivForm(2);
                        
                        if(estatusbusqueda==1)
                        {
                            $("#h5titulo").html("AUDIENCIAS");
                        }
                        if(estatusbusqueda==2)
                        {
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresartabla();'>BUSQUEDA</span>/ RESULTADOS");
                        
                        }
                        
                        
                        //limpiar();              
                    } else {

                        //consultar();
                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / BUSQUEDA");
                        $("#nuevo").show();
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                        //$("#nuevo").hide();
                        
                    }


                },
                error: function (objeto, quepaso, otroobj) {
        //               alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //**************************** consulta de oficios *************************************
        };
        


        function getPaginas (pag, cantReg,num) {

    //        var strDatos = "accion=getPaginas";
            var strDatos = "accion=getPaginas";
            
        if(num==2)
        {
            var pag = $("#cmbPaginacion").val()
            var cantReg = $("#cmbNumReg").val();
            //BUSQUEDA CON VARIABLES
            var desCatAudiencia=$("#desCatAudiencia").val();
            var cveNaturaleza=$("#cveNaturaleza").val();
            var cveEtapaProcesal=$("#cveEtapaProcesal").val();
            var cveTipoAudiencia=$("#cveTipoAudiencia").val();
            var causa=$("#causa").val();
            //var cveDistrito=$("#cveDistrito").val();
            var cveCodigo=$("#cveCodigo").val();        
            var fechaInicia=$("#fechaInicia").val();
            var fechaVigencia=$("#fechaVigencia").val();        
            var finSemana=$("#finSemana").val();
            var audienciaInicial=$("#audienciaInicial").val();
            //FIN BUSQUEDA CON VARIABLES
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";
            //strDatos += "&desCatAudiencia=" + desCatAudiencia;
                
                if(cveNaturaleza!=0||cveEtapaProcesal!=0||cveTipoAudiencia!=0||causa!=0||cveCodigo!=0||audienciaInicial!=0||desCatAudiencia!="")
                {   
                    if(cveNaturaleza==0)
                    {
                        cveNaturaleza="";
                        strDatos += "&cveNaturaleza=" + cveNaturaleza;
                    }
                    else
                    {
                        strDatos += "&cveNaturaleza=" + cveNaturaleza;
                    }
                    
                    
                    if(cveEtapaProcesal==0)
                    {
                        cveEtapaProcesal="";
                        strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
                    }
                    else
                    {
                        strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
                    }
                    
                    if(cveTipoAudiencia==0)
                    {    
                        cveTipoAudiencia="";
                        strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
                    }
                    else
                    {                   
                        strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
                    }
                    
                    if(causa==0)
                    {    
                        causa="";
                        strDatos += "&causa=" + causa; 
                    }
                    else
                    {                    
                        strDatos += "&causa=" + causa;               
                    }
                    
                    if(cveCodigo==0)
                    {    
                        cveCodigo="";
                        strDatos += "&cveCodigo=" + cveCodigo;
                    }
                    else
                    {                    
                        strDatos += "&cveCodigo=" + cveCodigo;                    
                    }
                    
                    if(audienciaInicial==0)
                    {   
                        audienciaInicial="";
                        strDatos += "&audienciaInicial=" + audienciaInicial;                    
                    }
                    else
                    {
                        strDatos += "&audienciaInicial=" + audienciaInicial;                
                    }
                    
                    if(desCatAudiencia=="")
                    {
                        desCatAudiencia="";
                        strDatos += "&desCatAudiencia=" + desCatAudiencia;                
                    }
                    else
                    {
                        strDatos += "&desCatAudiencia=" + desCatAudiencia;
                    }
                    fechaInicia="";
                    fechaVigencia="";
                    
                    strDatos += "&fechI=" + fechaInicia;
                    strDatos += "&fechV=" + fechaVigencia;
                    
                }
                else
                {
                    
                    cveNaturaleza="";
                    strDatos += "&cveNaturaleza=" + cveNaturaleza;
                    
                    cveEtapaProcesal="";
                    strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
                    
                    cveTipoAudiencia="";
                    strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
                    
                    causa="";
                    strDatos += "&causa=" + causa;
                    
                    cveCodigo="";
                    strDatos += "&cveCodigo=" + cveCodigo;
                
                    audienciaInicial="";
                    strDatos += "&audienciaInicial=" + audienciaInicial;
                
                    desCatAudiencia="";
                    strDatos += "&desCatAudiencia=" + desCatAudiencia;
                        
                    strDatos += "&fechI=" + fechaInicia;
                    strDatos += "&fechV=" + fechaVigencia;
                }
                
    //            if(cveNaturaleza!=0)
    //            {    
    //                strDatos += "&cveNaturaleza=" + cveNaturaleza;
    //            }
    //            else
    //            {
    //                cveNaturaleza="";
    //                strDatos += "&cveNaturaleza=" + cveNaturaleza;
    //            }
    //            
    //            if(cveEtapaProcesal!=0)
    //            {    
    //                strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
    //            }
    //            else
    //            {
    //                cveEtapaProcesal="";
    //                strDatos += "&cveEtapaProcesal=" + cveEtapaProcesal;
    //            }
    //            
    //            if(cveTipoAudiencia!=0)
    //            {    
    //                strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
    //            }
    //            else
    //            {
    //                cveTipoAudiencia="";
    //                strDatos += "&cveTipoAudiencia=" + cveTipoAudiencia;
    //            }
    //            
    //            if(causa!=0)
    //            {    
    //                strDatos += "&causa=" + causa;
    //            }
    //            else
    //            {
    //                causa="";
    //                strDatos += "&causa=" + causa;
    //            }
    //            
    //            
    //            if(cveCodigo!=0)
    //            {    
    //                strDatos += "&cveCodigo=" + cveCodigo;
    //            }
    //            else
    //            {
    //                cveCodigo="";
    //                strDatos += "&cveCodigo=" + cveCodigo;
    //            }
    //            
    //            if(audienciaInicial!=0)
    //            {    
    //                strDatos += "&audienciaInicial=" + audienciaInicial;
    //            }
    //            else
    //            {
    //                audienciaInicial="";
    //                strDatos += "&audienciaInicial=" + audienciaInicial;
    //            }
            }    
            if(num==1)
            {    
                //strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                strDatos += "&activo=S";

            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                        alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');
                        $('#cmbPaginacion').find('option').remove().end();
                        
                        
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#cmbPaginacion").val(pag);
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });


        };
        
        
        function getPaginas2(pag, cantReg) {
            
            var strDatos = "accion=getPaginas";        
            var pag = $("#cmbPaginacion").val();
            var buscar = $("#buscar").val();
            var cantReg = $("#cmbNumReg").val();
            //BUSQUEDA CON VARIABLES
                
            strDatos += "&desAudiencia=" + buscar;
                //strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";

            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                        alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');
                        $('#cmbPaginacion').find('option').remove().end();
                        
                        
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#cmbPaginacion").val(pag);
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        
    //    function muestramodifica(id)
    //    {
    //       
    //        fasenaturaleza();
    //        faseaudiencias();
    //        tipoaudiencia();
    //        distritos();
    //        codigo();
    //        
    //        document.getElementById("nota").style.display = "none";
    //        document.getElementById('lblfinicio').innerHTML = 'Fecha Inicio de Vigencia';
    //        document.getElementById('lblffinal').innerHTML = 'Fecha Fin de Vigencia';
    //        pasarvalores(id);
    //        $("#inputLimpiar").show();
    //        $("#inputLimpiar2").hide();
    //        $("#claveregistro").show();
    //        $("#divdistrito").show();
    //        $("#f2").show();
    //        $("#f1").show();
    //        //$("#collapseThree").show();
    //        $("#divTableResult2").show();
    //        
    //        $("#duracionmin").show();
    //        $("#duracionhor").show();
    //        $("#cveCatAudiencia").show();
    //        $("#activobusqueda").show();
    //        $("#activo").show();
    //        $("#inputConsultar").show();
    //        $("#inputBuscar").hide();
    //        $("#divConsulta").hide();
    //        $("#nuevo").show();
    //        $("#inputGuardar").hide();
    //        $("#inputModificar").show();
    //        $("#inputEliminar").show();
    //        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / REGISTRO DE AUDIENCIAS");
    //    }
        
    //    function nuevo()
    //    {           
    //        $("#cmbdistrito").val(0);
    //        document.getElementById("lbldistrito").style.display = "none";
    //        document.getElementById("cmbdistrito").style.display = "none";
    //        document.getElementById("pdf").style.display = "none";
    //        
    //        consultargrupos(0);
    //        consultardistritos(0);
    //        
    //        $("#divConsulta").hide();
    //        $("#inputLimpiar").show();
    //        $("#inputLimpiar2").hide();
    //        $("#nuevo").show();
    //        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / REGISTRO DE AUDIENCIAS");
    //        
    //        $("#claveregistro").show();
    //        $("#divdistrito").show();
    //        $("#f2").show();
    //        $("#f1").show();
    //        $("#duracionmin").show();
    //        $("#duracionhor").show();
    //        $("#cveCatAudiencia").show();
    //        $("#activobusqueda").show();
    //        $("#activo").show();
    //        $("#inputConsultar").show();
    //        $("#inputBuscar").hide();
    //        $("#inputGuardar").show();
    //        $("#inputModificar").hide();
    //        $("#inputEliminar").hide();
    //        //limpiar cajas de texto
    //        $("#cadena").val("");
    //        $("#cveCatAudiencia").val("");
    //        $("#activo").val("");
    //        $("#desCatAudiencia").val("");
    //        $("#cveNaturaleza").val(0);
    //        $("#cveEtapaProcesal").val(0);
    //        $("#cveTipoAudiencia").val(0);
    //        $("#causa").val(0);
    //        //$("#cveDistrito").val(0);
    //        $("#cveCodigo").val(0);
    //        $("#fechaInicia").val("<?= date('d/m/Y') ?>");
    //        $("#fechaVigencia").val("<?= date('d/m/Y') ?>");
    //        $("#finSemana").val(0);
    //        $("#activo").val(0);
    //        $("#audienciaInicial").val(0);
    //        $("#minDuracion").val("");
    //        $("#maxDuracion").val("");
    //        $("#holgura").val("");
    //        $("#minHorasDesahogar").val("");
    //        $("#maxHorasDesahogar").val("");
    //        //fin de limpiar cajas de texto
    //        
    //        //limpiar check
    //        for (i=0;i<document.f1.elements.length;i++) 
    //        if(document.f1.elements[i].type == "checkbox")	
    //           document.f1.elements[i].checked=0
    //        //fin de limpiar check
    //        
    //    }
        
        function regresaraudiencia()
        {
            $("#cmbdistrito").val(0);
            document.getElementById("lbldistrito").style.display = "none";
            document.getElementById("cmbdistrito").style.display = "none";
            document.getElementById("pdf").style.display = "none";
            
            document.getElementById("nota").style.display = "none";
            document.getElementById('lblfinicio').innerHTML = 'Fecha Inicio de Vigencia';
            document.getElementById('lblffinal').innerHTML = 'Fecha Fin de Vigencia';
            limpiar();
            consultarCeresosAds(1);
            $("#h5titulo").html("<span>AUDIENCIAS</span>");
            $("#divConsulta").show();
            $("#nuevo").hide();
            $("#unoodos").val("2");
            $("#inputRegresar5").hide();
        }
        
        function regresarregistro()
        {
        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresaraudiencia();'>AUDIENCIAS</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>REGISTRO DE AUDIENCIAS</span> / BUSQUEDA");
        }
        
        function pasarPaginaUno(){
            $("#cmbPaginacion").val(1);
        }
         
         
    //    function guardar()
    //    {
    //        var cadena = $("#cadena").val();
    //        var cadenadistrito=$("#cadenadistrito").val();
    //        var desCatAudiencia = $("#desCatAudiencia").val();
    //        var cveNaturaleza = $("#cveNaturaleza").val();
    //        var cveEtapaProcesal = $("#cveEtapaProcesal").val();
    //        var cveTipoAudiencia = $("#cveTipoAudiencia").val();
    //        var causa = $("#causa").val();
    //        var fechaInicia = $("#fechaInicia").val();
    //        var fechaVigencia = $("#fechaVigencia").val();
    //        var finSemana = $("#finSemana").val();
    //        var minDuracion = $("#minDuracion").val();
    //        var maxDuracion = $("#maxDuracion").val();
    //        var holgura = $("#holgura").val();
    //        var minHorasDesahogar = $("#minHorasDesahogar").val();
    //        var maxHorasDesahogar = $("#maxHorasDesahogar").val();
    //        var audienciaInicial = $("#audienciaInicial").val();
    //        
    //        var cveCodigo=$("#cveCodigo").val();
    //        var activo = $("#activo").val();
    //        var Agregar = true;
    //        var mensaje_error = "";
    //        
    //
    //        
    //        if (desCatAudiencia.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo Descripci&oacute;n<br />";
    //        }
    //        
    //        if (cadena.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione una Descripci&oacute;n del grupo<br />";
    //            
    //        }
    //        
    //            
    //        if(cadenadistrito.lenght <= 0||cadenadistrito=="")
    //        {
    //            Agregar=false;
    //            mensaje_error +="-Seleccione un Distrito<br />";
    //            
    //        }    
    //        
    //        if (cveNaturaleza == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Naturaleza<br />";
    //        }
    //        
    //        if (cveEtapaProcesal == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione una Fase de Audiencia<br />";
    //        }
    //        
    //        
    //        if (cveTipoAudiencia == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Audiencia<br />";
    //        }
    //        
    //        
    //        if (causa == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Causa<br />";
    //        }
    //        
    //        
    //        
    //        if (cveCodigo == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Codigo<br />";
    //        }
    //
    //        if (fechaInicia.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo fecha de Inicio<br />";
    //        }
    //        
    //        if (fechaVigencia.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo fecha de Vigencia<br />";
    //        }
    //        
    //        if (finSemana == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Fin de Semana<br />";
    //        }
    //        
    //        if (audienciaInicial == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Audiencia Inicial<br />";
    //        }
    //
    //        if (minDuracion.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo M&iacute;nimo de minutos<br />";
    //        }
    //        
    //        if (maxDuracion.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo M&aacute;ximo de minutos<br />";
    //        }
    //        
    //        if (holgura.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo Holgura<br />";
    //        }
    //        
    //        if(parseInt(minDuracion)!=parseInt(maxDuracion)&&parseInt(holgura)==0)
    //        {
    //            Agregar = false;
    //            mensaje_error += " -El M&aacute;ximo de minutos debe ser mayor o igual al Minimo de Minutos<br />";
    //        }
    //        
    //        if(parseInt(minHorasDesahogar) > parseInt(maxHorasDesahogar))
    //        {
    //            Agregar = false;
    //            mensaje_error += " -El M&aacute;ximo de Horas p/Desahogo debe ser mayor o igual al Minimo de Horas p/Desahogo<br />";
    //        }
    //        
    //        if (minHorasDesahogar.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo M&iacute;nimo de Horas p/Desahogo<br />";
    //        }
    //        
    //        if (maxHorasDesahogar.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo M&aacute;ximo de Horas p/Desahogo<br />";
    //        }
    //        
    //        if (!Agregar) {
    //
    //            $("#divAlertDager").html(mensaje_error);
    //            $("#divAlertDager").show("slide");
    //            setTimeAlert("divAlertDager");
    //        }
    //
    //
    //        if (Agregar)
    //        {
    //            
    //            var strDatos = "accion=consultar";
    //            strDatos += "&activo=S";
    //            strDatos += "&desCatAudiencia="+desCatAudiencia+"";
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
    //                data: strDatos,
    //                async: true,
    //                dataType: "html",
    //                beforeSend: function (objeto) {
    //    //                ToggleLoading(1);
    //                },
    //                success: function (datos) {
    //                    //                            alert(datos);
    //
    //                    var json = "";
    //                    json = eval("(" + datos + ")"); //Parsear JSON
    //
    //                    if (json.totalCount > 0) {
    //                        $("#divAlertInfo").html("Ya existe una audiencia con la misma descripci&oacute;n");
    //                        $("#divAlertInfo").show("slide");
    //                        setTimeAlert("divAlertInfo");
    //                    } 
    //                    else {                        
    //                        $.ajax({
    //                            type: "POST",
    //                            url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
    //                            data: {
    //                                desCatAudiencia: desCatAudiencia,
    //                                cveNaturaleza: cveNaturaleza,
    //                                cveEtapaProcesal: cveEtapaProcesal,
    //                                cveTipoAudiencia: cveTipoAudiencia,
    //                                causa: causa,
    //                                fechaInicia: fechaInicia,
    //                                fechaVigencia: fechaVigencia,
    //                                finSemana: finSemana,
    //                                minDuracion: minDuracion,
    //                                maxDuracion: maxDuracion,
    //                                holgura: holgura,
    //                                minHorasDesahogar: minHorasDesahogar,
    //                                maxHorasDesahogar: maxHorasDesahogar,
    //                                audienciaInicial: audienciaInicial,
    //                                activo: activo,
    //                                cveCodigo:cveCodigo,
    //                                accion: "insertcataudienciasdistritos",
    //                                cveUsuarioSesion: cveUsuarioSesion,
    //                                cvePerfilSesion: cvePerfilSesion,
    //                                juzgadoSesion: juzgadoSesion,
    //                                //valores qe se agregaran en la tabla de distritos
    //                                cveDistrito: cadenadistrito,
    //                                //valores de los checks
    //                                cadena:cadena,
    //                            },
    //                            async: "true",
    //                            dataType: "json",
    //                            beforeSend: function (xhr) {
    //
    //                            },
    //                            success: function (res) {
    //                                limpiar();
    //                                pasarvalores(res.cveCataudiencia);
    //                                $("#divAlertSucces").html("Correcto!: " + "Se ha agregado correctamente");
    //                                $("#divAlertSucces").show("slide");
    //                                setTimeAlert("divAlertSucces");
    //
    //                            },
    //                            error: function () {
    //                                $("#divAlertDager").html("Ocurrio un error al agregar");
    //                                $("#divAlertDager").show("slide");
    //                                setTimeAlert("divAlertDager");
    //                            }
    //
    //                        });
    //                    }
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //        //               alert("Error en la peticion:\n\n" + quepaso);
    //                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
    //                    $("#divAlertDager").show("slide");
    //                    setTimeAlert("divAlertDager");
    //                }
    //            });
    //            
    //            
    //
    //        }
    //    }
        
        
        
    //    function modificar()
    //    {
    //        var modificacvedistrito=$("#modificacvedistrito").val();
    //        var cveCatAudiencia=$("#cveCatAudiencia").val();
    //        var cadenadistrito = $("#cadenadistrito").val();
    //        var cadena = $("#cadena").val();
    //        var desCatAudiencia = $("#desCatAudiencia").val();
    //        var cveNaturaleza = $("#cveNaturaleza").val();
    //        var cveEtapaProcesal = $("#cveEtapaProcesal").val();
    //        var cveTipoAudiencia = $("#cveTipoAudiencia").val();
    //        var causa = $("#causa").val();
    //        var fechaInicia = $("#fechaInicia").val();
    //        var fechaVigencia = $("#fechaVigencia").val();
    //        var finSemana = $("#finSemana").val();
    //        var minDuracion = $("#minDuracion").val();
    //        var maxDuracion = $("#maxDuracion").val();
    //        var holgura = $("#holgura").val();
    //        var minHorasDesahogar = $("#minHorasDesahogar").val();
    //        var maxHorasDesahogar = $("#maxHorasDesahogar").val();
    //        var audienciaInicial = $("#audienciaInicial").val();
    //        //var cveDistrito = $("#cveDistrito").val();//tabla de distritos
    //        var cveCodigo=$("#cveCodigo").val();
    //        var activo = $("#activo").val();
    //        var Agregar = true;
    //        var mensaje_error = "";
    //        
    //
    //        
    //        
    //        
    //        if (desCatAudiencia.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo Descripci&oacute;n<br />";
    //        }
    //        
    //        if (cadena.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione una Descripci&oacute;n del grupo<br />";
    //        }
    //        if (cveNaturaleza == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Naturaleza<br />";
    //        }
    //        
    //        if (cveEtapaProcesal == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione una Fase de Audiencia<br />";
    //        }
    //        
    //        
    //        if (cveTipoAudiencia == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Audiencia<br />";
    //        }
    //        
    //        
    //        if (causa == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Causa<br />";
    //        }
    //        
    ////        if (cveDistrito == "0") {
    ////            Agregar = false;
    ////            mensaje_error += " -Seleccione un Distrito<br />";
    ////        }
    //        
    //        if (cveCodigo == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Codigo<br />";
    //        }
    //
    //        if (fechaInicia.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo fecha de Inicio<br />";
    //        }
    //        
    //        if (fechaVigencia.length <= 0) {
    //            Agregar = false;
    //            mensaje_error += " -Agregue un valor al campo fecha de Vigencia<br />";
    //        }
    //        
    //        
    //        
    //        if (audienciaInicial == "0") {
    //            Agregar = false;
    //            mensaje_error += " -Seleccione un Tipo de Audiencia Inicial<br />";
    //        }
    //        
    //        
    ////        if (cadenadistrito == "") {
    ////                Agregar = false;
    ////                mensaje_error += " -Seleccione almenos un distrito para modificar<br />";
    ////        }
    //        
    //        if (cadenadistrito.length >cuandopasa.length||modificacvedistrito!="") {
    //            //||modificacvedistrito.length>=0
    //            
    //            if (finSemana == "0") {
    //                Agregar = false;
    //                mensaje_error += " -Seleccione un Tipo de Fin de Semana<br />";
    //            }
    //
    //            if (minDuracion.length <= 0) {
    //                Agregar = false;
    //                mensaje_error += " -Agregue un valor al campo M&iacute;nimo de minutos<br />";
    //            }
    //
    //            if (maxDuracion.length <= 0) {
    //                Agregar = false;
    //                mensaje_error += " -Agregue un valor al campo M&aacute;ximo de minutos<br />";
    //            }
    //
    //            if (holgura.length <= 0) {
    //                Agregar = false;
    //                mensaje_error += " -Agregue un valor al campo Holgura<br />";
    //            }
    //
    //            if(parseInt(minDuracion)!=parseInt(maxDuracion)&&parseInt(holgura)==0)
    //            {
    //                Agregar = false;
    //                mensaje_error += " -El M&aacute;ximo de minutos debe ser mayor o igual al Minimo de Minutos<br />";
    //            }
    //
    //            if(parseInt(minHorasDesahogar) > parseInt(maxHorasDesahogar))
    //            {
    //                Agregar = false;
    //                mensaje_error += " -El M&aacute;ximo de Horas p/Desahogo debe ser mayor o igual al Minimo de Horas p/Desahogo<br />";
    //            }
    //
    //            if (minHorasDesahogar.length <= 0) {
    //                Agregar = false;
    //                mensaje_error += " -Agregue un valor al campo M&iacute;nimo de Horas p/Desahogo<br />";
    //            }
    //
    //            if (maxHorasDesahogar.length <= 0) {
    //                Agregar = false;
    //                mensaje_error += " -Agregue un valor al campo M&aacute;ximo de Horas p/Desahogo<br />";
    //            }
    //        }
    //
    //        
    //        
    //        
    //        if (!Agregar) {
    //
    //            $("#divAlertDager").html(mensaje_error);
    //            $("#divAlertDager").show("slide");
    //            setTimeAlert("divAlertDager");
    //        }
    //
    //
    //        if (Agregar)
    //        {
    //            
    //            var strDatos = "accion=consultar";
    //            strDatos += "&activo=S";
    //            strDatos += "&desCatAudiencia="+desCatAudiencia+"";
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
    //                data: strDatos,
    //                async: true,
    //                dataType: "html",
    //                beforeSend: function (objeto) {
    //    //                ToggleLoading(1);
    //                },
    //                success: function (datos) {
    //                    //                            alert(datos);
    //
    //                    var json = "";
    //                    json = eval("(" + datos + ")"); //Parsear JSON
    //
    //                    if (json.totalCount > 0) {
    //                        for (var i = 0; i < json.totalCount; i++) {
    //                            if(cveCatAudiencia==json.data[i].cveCatAudiencia)
    //                            {
    //                                $.ajax({
    //                                type: "POST",
    //                                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
    //                                data: {
    //                                    cveCatAudiencia:cveCatAudiencia,
    //                                    desCatAudiencia: desCatAudiencia,
    //                                    cveNaturaleza: cveNaturaleza,
    //                                    cveEtapaProcesal: cveEtapaProcesal,
    //                                    cveTipoAudiencia: cveTipoAudiencia,
    //                                    causa: causa,
    //                                    fechaInicia: fechaInicia,
    //                                    fechaVigencia: fechaVigencia,
    //                                    finSemana: finSemana,
    //                                    minDuracion: minDuracion,
    //                                    maxDuracion: maxDuracion,
    //                                    holgura: holgura,
    //                                    minHorasDesahogar: minHorasDesahogar,
    //                                    maxHorasDesahogar: maxHorasDesahogar,
    //                                    audienciaInicial: audienciaInicial,
    //                                    activo: activo,
    //                                    cveCodigo:cveCodigo,
    //                                    accion: "updatecataudienciasdistritos",
    //                                    cveUsuarioSesion: cveUsuarioSesion,
    //                                    cvePerfilSesion: cvePerfilSesion,
    //                                    juzgadoSesion: juzgadoSesion,
    //                                    //valores qe se agregaran en la tabla de distritos
    //                                    cveDistrito: cadenadistrito,
    //                                    //valores de los checks
    //                                    cadena:cadena,
    //                                },
    //                                async: "true",
    //                                dataType: "json",
    //                                beforeSend: function (xhr) {
    //
    //                                },
    //                                success: function (res) {
    //                                    
    //                                    pasarvalores(cveCatAudiencia);
    //                                    //modificadistrito();
    //                                    limpiar();
    //                                    $("#divAlertSucces").html("Correcto!: " + "Se ha modificado correctamente");
    //                                    $("#divAlertSucces").show("slide");
    //                                    setTimeAlert("divAlertSucces");
    //
    //                                },
    //                                error: function () {
    //                                    $("#divAlertDager").html("Ocurrio un error al modificar");
    //                                    $("#divAlertDager").show("slide");
    //                                    setTimeAlert("divAlertDager");
    //                                }
    //
    //                            });
    //                            }
    //                            else
    //                            {
    //                                if(desCatAudiencia==json.data[i].desCatAudiencia)
    //                                {
    //                                    $("#divAlertInfo").html("Ya existe una audiencia con la misma descripci&oacute;n");
    //                                    $("#divAlertInfo").show("slide");
    //                                    setTimeAlert("divAlertInfo");
    //                                }
    //                            }
    //                        }
    //                        
    //                            
    //                        
    //                        
    //                    } 
    //                    else {
    //                        
    //                        $.ajax({
    //                        type: "POST",
    //                        url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
    //                        data: {
    //                            cveCatAudiencia:cveCatAudiencia,
    //                            desCatAudiencia: desCatAudiencia,
    //                            cveNaturaleza: cveNaturaleza,
    //                            cveEtapaProcesal: cveEtapaProcesal,
    //                            cveTipoAudiencia: cveTipoAudiencia,
    //                            causa: causa,
    //                            fechaInicia: fechaInicia,
    //                            fechaVigencia: fechaVigencia,
    //                            finSemana: finSemana,
    //                            minDuracion: minDuracion,
    //                            maxDuracion: maxDuracion,
    //                            holgura: holgura,
    //                            minHorasDesahogar: minHorasDesahogar,
    //                            maxHorasDesahogar: maxHorasDesahogar,
    //                            audienciaInicial: audienciaInicial,
    //                            activo: activo,
    //                            cveCodigo:cveCodigo,
    //                            accion: "updatecataudienciasdistritos",
    //                            cveUsuarioSesion: cveUsuarioSesion,
    //                            cvePerfilSesion: cvePerfilSesion,
    //                            juzgadoSesion: juzgadoSesion,
    //                            //valores qe se agregaran en la tabla de distritos
    //                            cveDistrito: cadenadistrito,
    //                            //valores de los checks
    //                            cadena:cadena,
    //                        },
    //                        async: "true",
    //                        dataType: "json",
    //                        beforeSend: function (xhr) {
    //
    //                        },
    //                        success: function (res) {
    //                            limpiar();
    //                            pasarvalores(cveCatAudiencia);
    //                            $("#divAlertSucces").html("Correcto!: " + "Se ha modificado correctamente");
    //                            $("#divAlertSucces").show("slide");
    //                            setTimeAlert("divAlertSucces");
    //
    //                        },
    //                        error: function () {
    //                            $("#divAlertDager").html("Ocurrio un error al modificar");
    //                            $("#divAlertDager").show("slide");
    //                            setTimeAlert("divAlertDager");
    //                        }
    //
    //                    });
    //                    }
    //
    //
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //        //               alert("Error en la peticion:\n\n" + quepaso);
    //                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
    //                    $("#divAlertDager").show("slide");
    //                    setTimeAlert("divAlertDager");
    //                }
    //            });
    //            
    //            
    //
    //        }
    //    }
        
    //    function modificadistrito()
    //    {
    //        var cvedistrito=$("#modificacvedistrito").val();
    //        var cveCatAudiencia=$("#cveCatAudiencia").val();
    //        
    //        var minDuracion=$("#minDuracion").val();
    //        var maxDuracion=$("#maxDuracion").val();
    //        var holgura=$("#holgura").val();
    //        var minHorasDesahogar=$("#minHorasDesahogar").val();
    //        var maxHorasDesahogar=$("#maxHorasDesahogar").val();
    //        var finSemana=$("#finSemana").val();
    //        var activo=$("#activo").val();
    //        
    //        if(cvedistrito.length!="" && cveCatAudiencia!="")
    //        {
    //            
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/audienciasdistritos/AudienciasdistritosFacade.Class.php",
    //                data: {
    //                            
    //                    cveDistrito: cvedistrito,
    //                    cveCatAudiencia: cveCatAudiencia,
    //                    //activo: "S",
    //                    accion: "consultar",                            
    //                },
    //                async: "true",
    //                dataType: "html",
    //                beforeSend: function (objeto) {
    //
    //                },
    //                success: function (data) {
    //                    //alert("ss");
    //                    var json2 = "";
    //                    json2 = eval("(" + data + ")"); //Parsear JSON
    //
    //                    
    //                    if (json2.totalCount > 0) {                        
    //                        $.ajax({
    //                            type: "POST",
    //                            url: "../fachadas/sigejupe/audienciasdistritos/AudienciasdistritosFacade.Class.php",
    //                            data: {
    //                                idAudienciaDistrito:json2.data[0].idAudienciaDistrito,
    //                                activo:activo,
    //                                finSemana: finSemana,
    //                                minDuracion: minDuracion,
    //                                maxDuracion: maxDuracion,
    //                                holgura: holgura,
    //                                minHorasDesahogar: minHorasDesahogar,
    //                                maxHorasDesahogar: maxHorasDesahogar,
    //                                accion: "guardar",                            
    //                            },
    //                            async: "true",
    //                            dataType: "json",
    //                            beforeSend: function (xhr) {
    //
    //                            },
    //                            success: function (res) {
    //                                
    //                            },
    //                            error: function () {
    //                                $("#divAlertDager").html("Ocurrio un error al modificar");
    //                                $("#divAlertDager").show("slide");
    //                                setTimeAlert("divAlertDager");
    //                            }
    //
    //                        });
    //                    }
    //
    //                },
    //                error: function () {
    //                    $("#divAlertDager").html("Ocurrio un error al consultar");
    //                    $("#divAlertDager").show("slide");
    //                    setTimeAlert("divAlertDager");
    //                }
    //
    //            });
    //
    //        }
    //        
    //    }
       
        function limpiar()
        {
            cuandopasa=0;
            $("#eldistrito").val("");
            $("#cadenadistrito").val("");
            $("#cadena").val("");
            $("#modificacvedistrito").val("");
            $("#cveCatAudiencia").val("");
            $("#activo").val("");
            $("#desCatAudiencia").val("");
            $("#cveNaturaleza").val(0);
            $("#cveEtapaProcesal").val(0);
            $("#cveTipoAudiencia").val(0);
            $("#causa").val(0);
            //$("#cveDistrito").val(0);
            $("#cveCodigo").val(0);
            $("#fechaInicia").val("<?= date('d/m/Y') ?>");
            $("#fechaVigencia").val("<?= date('d/m/Y') ?>");
            $("#finSemana").val(0);
            $("#activo").val(0);
            $("#audienciaInicial").val(0);
            $("#minDuracion").val("");
            $("#maxDuracion").val("");
            $("#holgura").val("");
            $("#minHorasDesahogar").val("");
            $("#maxHorasDesahogar").val("");
            
            $("#inputModificar").show();
            $("#inputEliminar").show();
            $("#inputGuardar").hide();


            for (i=0;i<document.f1.elements.length;i++) 
            if(document.f1.elements[i].type == "checkbox")	
               document.f1.elements[i].checked=0 
    //        //limpiar radiobtton
    //        var ele = document.getElementsByName("sanciones");
    //        for (var i = 0; i < ele.length; i++)
    //            ele[i].checked = false;

            for (i=0;i<document.formdistrito.elements.length;i++) 
            if(document.formdistrito.elements[i].type == "checkbox")	
               document.formdistrito.elements[i].checked=0


        }
        
        function limpiar3()
        {
            
            $("#desCatAudiencia").val("");
            $("#cveNaturaleza").val(0);
            $("#cveEtapaProcesal").val(0);
            $("#cveTipoAudiencia").val(0);
            $("#causa").val(0);
            //$("#cveDistrito").val(0);
            $("#cveCodigo").val(0);
            $("#fechaInicia").val("<?= date('d/m/Y') ?>");
            $("#fechaVigencia").val("<?= date('d/m/Y') ?>");
            $("#finSemana").val(0);
            $("#audienciaInicial").val(0);
            
        }
        
        function pasarvalores(cveCatAudiencia)
        {
                consultargrupos(cveCatAudiencia);
                consultardistritos(cveCatAudiencia);
                
                //SE HACE UNA CONSULTA PARA PASAR LOS VALORES A LAS CAJAS DE TEXTO 
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                    data: {
                        cveCatAudiencia: cveCatAudiencia,
                        accion: "consultaraudienciasdistritos",
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {
    //                    if(res.cveDistrito=="")
    //                    {
    //                        $("#cveDistrito").val("0");
    //                    }
    //                    else
    //                    {
    //                        $("#cveDistrito").val(res.cveDistrito);
    //                    }
                        $.each(res.datoscataudiencias, function (index, element) {
                            $("#cveCatAudiencia").val(element.cveCatAudiencia);
                            $("#desCatAudiencia").val(element.desCatAudiencia);
                            $("#cveNaturaleza").val(element.cveNaturaleza);
                            $("#cveEtapaProcesal").val(element.cveEtapaProcesal);
                            $("#cveTipoAudiencia").val(element.cveTipoAudiencia);
                            $("#causa").val(element.causa);
                            $("#fechaInicia").val(element.fechaInicia);
                            $("#fechaVigencia").val(element.fechaVigencia);
                            //$("#finSemana").val(element.finSemana);
                            
                            if(element.audienciaInicial=="" || element.audienciaInicial==null)
                            {
                                $("#audienciaInicial").val("0");
                            }
                            else
                            {
                                $("#audienciaInicial").val(element.audienciaInicial);
                            }
                            //$("#minDuracion").val(element.minDuracion);
                            //$("#maxDuracion").val(element.maxDuracion);
                            //$("#holgura").val(element.holgura);
                            //$("#minHorasDesahogar").val(element.minHorasDesahogar);
                            //$("#maxHorasDesahogar").val(element.maxHorasDesahogar);
                            
    //                        if(element.activo=="S")
    //                        {    
    //                            $("#activo").val("SI");
    //                        }
    //                        else
    //                        {
    //                            $("#activo").val("NO");
    //                        }
                            $("#cveCodigo").val(element.cveCodigo);
                        });
                    },
                    error: function () {
                        //alert("Error al Consultar");
                        $("#divAlertDager").html("Error al Consltar");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

                //FIN DE CONSULTA 
        }
        
        function consultargrupos(val) {
            var div = "";
            if(val==0)
            {
                var strDatos = "accion=consultar";
                strDatos += "&activo=S";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/grupos/GruposFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        //                            alert(datos);

                        var json = "";
                        var table = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            
                            table += "<form name='f1' id='f1'> ";
                            table +="<div class='search-table-outter'>";
                            table += "<table class='table table-hover table-striped table-bordered' width='50%';>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>CLAVE</th>";
                            table += "<th>DESCRIPCI&Oacute;N</th>";
                            table += "<th>ASIGNADO</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            for (var i = 0; i < json.totalCount; i++) {
                                table += "<tr>";
                                table += "<td > " + json.data[i].cveGrupo + "</td>";
                                table += "<td >" + json.data[i].desGrupo + " </td>";
                                table += "<td><input type='checkbox' value="+ json.data[i].cveGrupo +"    name='orderBoxgenero[]'  onchange='checksgenero()'></td>";
                                table += "</tr> ";
        //                                                    alert(json.data[i].observaciones);
                            }
                            table += "</tbody>";
                            table += "</table>";
                            table += "</div>";
                            table += "</form>";
                            
    //                        table += "</div>";
    //                        table += "</div>";
    //                        table += "</div>";
                            
                            $("#divHideForm").hide();
                            $("#divTableResult2").html(table);



                        } 
                        else {
                            $("#divAlertInfo").html('' + json.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
            //               alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

            }
            else
            {
                
                var valcaja="";
                var strDatos = "accion=consgruposautoresaudiencias";
                strDatos += "&activo=S";
                strDatos += "&idCatAudiencia="+val;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/grupos/GruposFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
        //                ToggleLoading(1);
                    },
                    success: function (datos) {
    //                            alert(datos);

                    if (datos.estatus == "ok") {
    //                    div +="<div class='panel panel-default' id='f2'>";
    //                    div +="<div class='panel-heading' role='tab' id='headingThree'>";
    //                    div +="<h4 class='panel-title'>";
    //                    div +="<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' aria-expanded='true' aria-controls='collapseThree'>";
    //                    div +="Grupo";
    //                    div +="</a>";
    //                    div +="</h4>";
    //                    div +="</div>";
    //                    div +="<div id='collapseThree' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThree'>";
    //                    div +="<div class='panel-body'>";
    //                    
                        div += "<form name='f1' id='f1'> ";
                        div +="<div class='search-table-outter'>";
                        div += "<table class='table table-hover table-striped table-bordered' width='50%';>";
                        div += "<thead>";
                        div += "<tr>";
                        div += "<th>CLAVE</th>";
                        div += "<th>DESCRIPCI&Oacute;N</th>";
                        div += "<th>ASIGNADO</th>";
                        div += "</tr>";
                        div += "</thead>";
                        div += "<tbody>";
                      
                        $.each(datos.datosgrupos, function (index, element) {
                            
                            div += "<tr>";
                            div += "<td > " + element.cveGrupo + "</td>";
                            div += "<td >" + element.desGrupo+ " </td>";
                            
                            div += "<td><input type='checkbox' ";
                            $.each(datos.cveGrupoautoresaudiencias, function (index, element2) {
                                if(element.cveGrupo==element2.cveGrupoautoresaudiencias)
                                {
                                   div += " checked='checked' ";
                                   //$("#cadena").val("");
                                }
                            });
                            div += " value="+ element.cveGrupo +" name='orderBoxgenero[]'  onchange='checksgenero()'> </td>";
                            div += "</tr> ";
                            
                            $.each(datos.cveGrupoautoresaudiencias, function (index, element3) {
                                if(element.cveGrupo==element3.cveGrupoautoresaudiencias)
                                {
                                   
                                   valcaja +=element3.cveGrupoautoresaudiencias+",";
                                }
                            });
                        });
                        div += "</tbody>";
                        div += "</table>";
                        div += "</div>";
                        div += "</form>";
    //                    div +="</div>";
    //                    div +="</div>";
    //                    div +="</div>";
    //                    
                        valcaja = valcaja.substring(0, valcaja.length-1);
                        $("#cadena").val(valcaja);
                    }
                     else {
                            if (datos.estatus == "error")
                            {
                            $("#divAlertDager").html("Ocurrio un error al pasar los datos a la tabla");
                            $("#divAlertDager").show("slide");
                            $("#divTableResult").hide();
                            setTimeAlert("divAlertDager");
                            }

                    }
                    $("#divTableResult2").html(div);
                    $("#divTableResult2").show();

                    
                    },
                    error: function (objeto, quepaso, otroobj) {
            //               alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

            }
            
        }
        
        function consultadistritos(cvedistrito=null)
        {
            
            
            //alert(eldistrito);
            //$("#eldistrito").val(eldistrito);
            
            if(cvedistrito==null)
            {
                
                $("#eldistrito").val("");
                $("#minDuracion").val("");
                $("#maxDuracion").val("");
                $("#holgura").val("");
                $("#minHorasDesahogar").val("");
                $("#maxHorasDesahogar").val("");
                $("#activo").val(0);
                $("#finSemana").val(0);
                                
                
            }
            else
            {    
            
            
                $("#modificacvedistrito").val(cvedistrito);

                var cveCatAudiencia=$("#cveCatAudiencia").val();

                var strDatos = "accion=consultar";
                    //strDatos += "&activo=S";
                    strDatos += "&cveDistrito="+cvedistrito;
                    strDatos += "&cveCatAudiencia="+cveCatAudiencia;
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/audienciasdistritos/AudienciasdistritosFacade.Class.php",
                        data: strDatos,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
            //                ToggleLoading(1);
                        },
                        success: function (datos) {
                            //                            alert(datos);

                            var json = "";
                            var table = "";
                            json = eval("(" + datos + ")"); //Parsear JSON

                            if (json.totalCount > 0) {
                                $("#minDuracion").val(json.data[0].minDuracion);
                                $("#maxDuracion").val(json.data[0].maxDuracion);
                                $("#holgura").val(json.data[0].holgura);
                                $("#minHorasDesahogar").val(json.data[0].minHorasDesahogar);
                                $("#maxHorasDesahogar").val(json.data[0].maxHorasDesahogar);
                                $("#activo").val(json.data[0].activo);
                                if(json.data[0].finSemana!="")
                                {
                                    $("#finSemana").val(json.data[0].finSemana);
                                }
                                else
                                {
                                    $("#finSemana").val(0);
                                }

                                var strDatos2 = "accion=consultar";
                                strDatos2 += "&activo=S";
                                strDatos2 += "&cveDistrito="+cvedistrito;
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                                    data: strDatos2,
                                    async: true,
                                    dataType: "html",
                                    beforeSend: function (objeto) {
                        //                ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //                            alert(datos);

                                        var json = "";
                                        var table = "";
                                        json = eval("(" + datos + ")"); //Parsear JSON

                                        if (json.totalCount > 0) {
                                            $("#eldistrito").val(json.data[0].desDistrito);
                                        } 
                                        else {
                                            $("#divAlertInfo").html('' + json.text);
                                            $("#divAlertInfo").show("slide");
                                            setTimeAlert("divAlertInfo");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                            //               alert("Error en la peticion:\n\n" + quepaso);
                                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                        $("#divAlertDager").show("slide");
                                        setTimeAlert("divAlertDager");
                                    }
                                });

                            } 
                            else {
                                $("#divAlertInfo").html('' + json.text);
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                //               alert("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    });
                }
        }
        
        function consultardistritos(val) {
            var div = "";
            if(val==0)
            {
                var strDatos = "accion=consultar";
                strDatos += "&activo=S";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        //                            alert(datos);

                        var json = "";
                        var table = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
              
                            table += "<form name='formdistrito' id='formdistrito'> ";
                            table +="<div class='search-table-outter'>";
                            table += "<table class='table table-hover table-striped table-bordered' width='50%';>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>CLAVE</th>";
                            table += "<th>DISTRITO</th>";
                            table += "<th>ASIGNADO</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            for (var i = 0; i < json.totalCount; i++) {
                                table += "<tr>";
                                table += "<td> " + json.data[i].cveDistrito + "</td>";
                                table += "<td>" + json.data[i].desDistrito + " </td>";
                                table += "<td><input type='checkbox' value="+ json.data[i].cveDistrito +"    name='orderBoxdistrito[]'  onchange='checksdistrito()'></td>";
                                table += "</tr> ";
        //                                                    alert(json.data[i].observaciones);
                            }
                            table += "</tbody>";
                            table += "</table>";
                            table += "</div>";
                            table += "</form>";
                           
                            $("#divHideForm").hide();
                            $("#divTableResult3").html(table);
                        } 
                        else {
                            $("#divAlertInfo").html('' + json.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
            //               alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

            }
            else
            {
                var valcaja="";
                var strDatos = "accion=consaudienciasdistritos";
                //strDatos += "&activo=S";
                strDatos += "&idCatAudiencia="+val;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
        //                ToggleLoading(1);
                    },
                    success: function (datos) {
    //                            alert(datos);

                    if (datos.estatus == "ok") {
         
                        div += "<form name='formdistrito' id='formdistrito'> ";
                        div +="<div class='search-table-outter'>";
                        div += "<table class='table table-hover table-striped table-bordered' width='50%';>";
                        div += "<thead>";
                        div += "<tr>";
                        div += "<th>CLAVE</th>";
                        div += "<th>DISTRITO</th>";
                        div += "<th>FECHA ACTUALIZACI&Oacute;N</th>";
                        div += "<th>ASIGNADO</th>";
                        div += "</tr>";
                        div += "</thead>";
                        div += "<tbody>";
                      
                        $.each(datos.datosdistrito, function (index, element) {
                            
                            div += "<tr>";                       
                            
                            //INICIO CLAVE
                            div += "<td onclick='consultadistritos(";                        
                            $.each(datos.cvedistritoaudienciasdistritos, function (index, element4) {
                                if(element.CveDistrito==element4.cvedistritoaudienciasdistritos)
                                {
                                   var ee=element.DesDistrito;
                                   div += " "+element.CveDistrito+" ";
                                   //$("#cadena").val("");
                                }
                                
                            });                        
                            div +=")' >"+ element.CveDistrito +  "</td>";
                            //FIN CLAVE
                            
                            
                            //INICIO DISTRITO
                            div += "<td onclick='consultadistritos(";                        
                            $.each(datos.cvedistritoaudienciasdistritos, function (index, element3) {
                                if(element.CveDistrito==element3.cvedistritoaudienciasdistritos)
                                {
                                    var ee=element.DesDistrito;
                                   div += " "+element.CveDistrito+" ";
                                   //$("#cadena").val("");
                                }
                                
                            });                        
                            div +=")' >"+ element.DesDistrito +  "</td>";
                            //FIN DISTRITO
                            
                            
        
                            div += "<td onclick='consultadistritos(";                        
                            $.each(datos.cvedistritoaudienciasdistritos, function (index, element6) {
                                if(element.CveDistrito==element6.cvedistritoaudienciasdistritos)
                                {
                                   var ee=element.DesDistrito;
                                   div += " "+element.CveDistrito+" ";
                                   //$("#cadena").val("");
                                }
                                
                            });                        
                            div +=")' >";
        
                            //div +="<td>";
                            $.each(datos.cvedistritoaudienciasdistritos, function (index, element5) {
                                if(element.CveDistrito==element5.cvedistritoaudienciasdistritos)
                                {
                                   
                                   div += " "+element5.fechaactualizacion+" ";
                                   //$("#cadena").val("");
                                }
                                
                            });
                            div +="</td>";
                            div += "<td><input type='checkbox' ";
                            $.each(datos.cvedistritoaudienciasdistritos, function (index, element2) {
                                if(element.CveDistrito==element2.cvedistritoaudienciasdistritos)
                                {
                                   //div += " checked='checked' ";
                                   //$("#cadena").val("");
                                }
                            });
                            div += " value="+ element.CveDistrito +" name='orderBoxdistrito[]'  onchange='checksdistrito()'>";
                            
    //                        $.each(datos.cvedistritoaudienciasdistritos, function (index, element2) {
    //                            if(element.CveDistrito==element2.cvedistritoaudienciasdistritos)
    //                            {
    //                               div += " Registrado ";  
    //                            }
    //                        });
                            div += "</td>";
                            div += "</tr> ";
                            
                            $.each(datos.cvedistritoaudienciasdistritos, function (index, element3) {
                                if(element.CveDistrito==element3.cvedistritoaudienciasdistritos)
                                {
                                   
                                   valcaja +=element3.cvedistritoaudienciasdistritos+",";
                                }
                            });
                        });
                        div += "</tbody>";
                        div += "</table>";
                        div += "</div>";
                        div += "</form>";
                        
                        valcaja = valcaja.substring(0, valcaja.length-1);
                        cuandopasa=valcaja;
                        //$("#cadenadistrito").val(valcaja);
                    }
                     else {
                            if (datos.estatus == "error")
                            {
                            $("#divAlertDager").html("Ocurrio un error al pasar los datos a la tabla");
                            $("#divAlertDager").show("slide");
                            $("#divTableResult").hide();
                            setTimeAlert("divAlertDager");
                            }

                    }
                    $("#divTableResult3").html(div);
                    $("#divTableResult3").show();


                    },
                    error: function (objeto, quepaso, otroobj) {
            //               alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });


            }
            
        }
        
    </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>