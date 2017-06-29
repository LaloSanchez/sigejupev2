<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8">
        <title>Oficios</title>
        <script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.10.4.custom.js"></script>
        <script type="text/javascript" src="../js/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap.css.map" type="text/css"/>
        
        <link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet" />        
        <link type="text/css" href="../css/jquery.smartmenus.bootstrap.css" rel="stylesheet" />  
        <link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet" />        
        <link type="text/css" href="../css/font-awesome.min.css" rel="stylesheet" />
        <link type="text/css" href="../css/weather-icons.min.css" rel="stylesheet" />
        <link type="text/css" href="../css/beyond.min.css" rel="stylesheet" type="text/css" />        
        <link type="text/css" href="../css/typicons.min.css" rel="stylesheet" />
        <link type="text/css" href="../css/animate.min.css" rel="stylesheet" />        
        <link type="text/css" href="../css/dataTables.bootstrap.css" rel="stylesheet" />                
        <link type="text/css" href="../css/loadercss.css" rel="stylesheet" />

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">        

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.js"></script>        
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/jquery.smartmenus.js"></script>
        <script type="text/javascript" src="../js/jquery.smartmenus.bootstrap.js"></script>
        <script type="text/javascript" src="../js/datatable/jquery.dataTables.js"></script>
        <script type="text/javascript" src="../js/datatable/dataTables.tableTools.js"></script>
        <script type="text/javascript" src="../js/datatable/dataTables.bootstrap.js"></script>
        
        <style>
            #divImgFotoUsr{
                width: 45px;
                height: 45px;
                border-radius: 35px;
                border: solid 1px;
                background: #FF0000;
            }
        </style>
        
        <script type="text/javascript">
            $(window).load(function () { // validacion campos
                
                cargaRelacion();
                obtenerContador();
                
            });
            
            obtenerContador = function(){
                
                var strDatos = "accion=consultarTotalActuaciones";
                    strDatos = "&cveTipoActuacion=7";
                    strDatos+= "&cveJuzgado=762";
                    
                $.ajax({
                    type: "POST",
                    url: "../../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                          $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');  
                    },
                    success: function (datos) {
                        alert(datos);
//                        var json = "";
//                        json = eval("(" + datos + ")"); //Parsear JSON
//                        
//                        if(json.totalCount > 0){
//                            for (var i = 0; i < json.totalCount; i++) {
//                                $("#cmbTipoRelacion").append($('<option></option>').val(json.data[i].cveTipoRelacion+"/"+json.data[i].cveTipoCarpeta ).html(json.data[i].desTipoRelacion));
//                            }    
//                        }    
//                        $('#divCmbRelaciones').hide();

                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion:\n\n" + quepaso);
                    }
                });
            };
            
            cargaRelacion = function(){
                
                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../../fachadas/sigejupe/tiposrelaciones/TiposrelacionesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                          $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');  
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON
                        
                        if(json.totalCount > 0){
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbTipoRelacion").append($('<option></option>').val(json.data[i].cveTipoRelacion+"/"+json.data[i].cveTipoCarpeta ).html(json.data[i].desTipoRelacion));
                            }    
                        }    
                        $('#divCmbRelaciones').hide();

                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion:\n\n" + quepaso);
                    }
                });
            };
            
            changeLabel = function (objOption) {

                $("#lblRelationName").html($("#" + objOption.id + " option:selected").text());
                
            };
            
            buscarTipoCarpeta = function(){
                
                var tipoRelTipoCarp = $("#cmbTipoRelacion").val().split("/")
                var cveTipoRelacion = tipoRelTipoCarp[0];
                var cveTipoCarpeta = tipoRelTipoCarp[1];
                var numAct = $("#txtNumero").val();
                var aniAct = $("#txtAnio").val();
                var txtNumOficio = $("#txtNumOficio").val();
                var Destinatario = $("#Destinatario").val();
                var Sintesis = $("#Sintesis").val();
                var strDatos = "";
                var strDatosCarpeta = "";
                var error = 0;
                var mensaje = "";
                
                if(cveTipoRelacion == 0){
                    error = 1;
                    mensaje += "\n Relacion con";
                }
                if(numAct == ""){
                    error = 2;
                    mensaje += "\n numero";
                }
                if(aniAct == ""){
                    error = 3;
                    mensaje += "\n año";
                }
                if(txtNumOficio == ""){
                    error = 4;
                    mensaje += "\n Oficio no.";
                }    
                
                if(error == 0){
                    strDatosCarpeta = "accion=consultar";
                    strDatosCarpeta+="&cveTipoRelacion="+cveTipoRelacion;
                    strDatosCarpeta+="&cveTipoCarpeta="+cveTipoCarpeta;
                    strDatosCarpeta+= "&numero="+numAct;
                    strDatosCarpeta+= "&anio="+aniAct;
                    strDatosCarpeta+= "&cveJuzgado=762";    //----> ACTUALIZAR A VARIABLE DE SESION IMPORTANTE <--- 
                    
                    strDatos = "accion=guardar";
                    strDatos+= "&cveTipoRelacion="+cveTipoRelacion;
                    strDatos+= "&numero="+numAct;
                    strDatos+= "&anio="+aniAct;
                    strDatos+= "&txtNumOficio="+txtNumOficio;
                    strDatos+= "&observaciones="+Destinatario;
                    strDatos+= "&sintesis="+Sintesis;
                    strDatos+= "&cveTipoActuacion=7";//----> tipo actuacion oficio = 7
                    strDatos+= "&cveJuzgado=762";    //----> ACTUALIZAR A VARIABLE DE SESION IMPORTANTE <--- 
                    
                     $.ajax({
                        type: "POST",
                        url: "../../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        data: strDatosCarpeta,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                        },
                        success: function (datos) {
                            //alert(datos);
                            var json = "";
                            json = eval("(" + datos + ")"); //Parsear JSON
                            
                            if(json.totalCount > 0){
                                strDatos+= "&idReferencia="+json.data[0].idCarpetaJudicial;    
                                guardarOficio(strDatos);
                            }else{
                                var tipoNumero = $('#cmbTipoRelacion :selected').text();
                                alert(" EL NUMERO DE "+tipoNumero+" NO EXISTE");
                            }    
                            $('#barCarga').html("");

                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion:\n\n" + quepaso);
                        }
                    });
                    
                    
                    
                }else{
                     alert("Error(es) seleccione: "+mensaje);
                }    
                
            } ;   
                                    
            guardarOficio = function(strDatos){
                    
                    $.ajax({
                        type: "POST",
                        url: "../../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        data: strDatos,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                        },
                        success: function (datos) {
//                            alert(datos);
                            var json = "";
                            json = eval("(" + datos + ")"); //Parsear JSON

                            if(json.totalCount > 0){
                                alert(json.text);
                            }else{
                                alert(json.text);
                            }    
                            $('#barCarga').html("");

                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion:\n\n" + quepaso);
                        }
                    });
                
            };
            
            limpiar = function(){
                $("#cmbTipoRelacion").val(0);
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#txtNumOficio").val("");
                $("#Destinatario").val("");
                $("#Sintesis").val("");
            }
            
        </script>
    </head>
    <body  bgcolor="" topmargin="0" leftmargin="0" style="overflow-x: auto; overflow-y:auto; background: transparent;">
        <!--<div id="myModal" class="modal fade" role="dialog">-->
        <div class="main-container container-fluid">
            <div class="page-container" id="areadetrabajo">                
                <!--<div class="page-content" id="areadetrabajo">-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">                                                            
                            Registro de Oficios
                        </h5>
                    </div>
                    <div class="panel-body">

                        <div id="divFormulario" class="form-horizontal">
                            <div class="form-group">                                                                
                                <label class="control-label col-xs-3">Relacionado con:</label>
                                <div class="col-xs-9">
                                    <div id="divCmbRelaciones" class="logobox"></div>
                                    <select class="form-control" name="cmbTipoRelacion" id="cmbTipoRelacion" onchange="changeLabel(this)">
                                        <option value="0">Seleccione una opcion</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="form-group">                                                                
                                <!--<label id="lbInicial">N&uacute;mero: </label>-->
                                <label  class="control-label col-xs-3">NO.</label> <label id="lblRelationName"></label> : 
                                <div class="col-xs-9">
                                    <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o">
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Oficio No:</label>
                                <div class="col-xs-9">
                                    <input type="text" id="txtNumOficio" class="form-inline" id="txtNumOficio" placeholder="N&uacute;mero">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Destinatario:</label>
                                <div class="col-xs-9">
                                    <textarea rows="1" id="Destinatario" class="form-control" placeholder="Destinatario"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Sintesis:</label>
                                <div class="col-xs-9">
                                    <textarea rows="5" id="Sintesis" class="form-control" placeholder="Sintesis"></textarea>
                                </div>
                            </div>
                            
                            
                            <br>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-9">
                                    <input type="submit" class="btn btn-primary" value="Guardar" onclick="buscarTipoCarpeta();">                                    
                                    <input type="submit" class="btn btn-primary" value="Limpiar" onclick="limpiar();">                                    
                                    <input type="submit" class="btn btn-primary" value="Consultar" onclick="changeDivForm(2)">                                    
                                    <input type="submit" class="btn btn-primary" value="Eliminar">                                    
                                    <input type="submit" class="btn btn-primary" value="Imprimir">                                    
                                </div>
                            </div>
                        </div>

                        <div id="divConsulta" style="display: none">                            
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">                                    

                            <table id="tblResultados" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>N&uacute;m.</th>
                                        <th>N&uacute;m. Causa</th>
                                        <th>Tipo Sentencia</th>
                                        <th>Sintesis</th>
                                        <th>Fecha Registro</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td onclick="consutaId(1)">1</td>
                                        <td onclick="consutaId(1)" >Causa 125/2015</td>
                                        <td onclick="consutaId(1)" >MIXTA</td>
                                        <td onclick="consutaId(1)" >MODIFICACION</td>
                                        <td onclick="consutaId(1)" >19/11/2015</td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td onclick="consutaId(1)">2</td>
                                        <td onclick="consutaId(1)">Causa 148/2015</td>
                                        <td onclick="consutaId(1)">CONDENATORIA</td>
                                        <td onclick="consutaId(1)">REVOCACION</td>
                                        <td onclick="consutaId(1)">19/11/2015</td>
                                        <td><input type="checkbox"></td>
                                    </tr>                                    
                                    <tr>
                                        <td onclick="consutaId(1)">3</td>
                                        <td onclick="consutaId(1)">Causa 155/2015</td>
                                        <td onclick="consutaId(1)">ABSOLUTORIA</td>
                                        <td onclick="consutaId(1)">EXTINCION DE SANCIONES</td>
                                        <td onclick="consutaId(1)">19/11/2015</td>
                                        <td><input type="checkbox"></td>
                                    </tr>                                    
                                    <tr>
                                        <td onclick="consutaId(1)">4</td>
                                        <td onclick="consutaId(1)">Causa 5/2015</td>
                                        <td onclick="consutaId(1)">MIXTA</td>
                                        <td onclick="consutaId(1)">MODIFICACION</td>
                                        <td onclick="consutaId(1)">19/11/2015</td>
                                        <td><input type="checkbox"></td>
                                    </tr>                                    
                                    <tr>
                                        <td onclick="consutaId(1)">5</td>
                                        <td onclick="consutaId(1)">Causa 15/2015</td>
                                        <td onclick="consutaId(1)">CONDENATORIA</td>
                                        <td onclick="consutaId(1)">LIBERTAD CONDICIONADA AL SISTEMA DE RASTREO</td>
                                        <td onclick="consutaId(1)">19/11/2015</td>
                                        <td><input type="checkbox"></td>
                                    </tr>                                    
                                    <tr>
                                        <td onclick="consutaId(1)">6</td>
                                        <td onclick="consutaId(1)">Causa 25/2015</td>
                                        <td onclick="consutaId(1)">MIXTA</td>
                                        <td onclick="consutaId(1)">EXTINCION DE SANCIONES  </td>
                                        <td onclick="consutaId(1)">19/11/2015</td>
                                        <td><input type="checkbox"></td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>

                        <script type="text/javascript">

                            $(function () {
                                $("#txtFechaSentencia").datepicker({
                                    changeMonth: true,
                                    changeYear: true,
                                    dateFormat: "dd/mm/yy"
                                });
                                $("#txtFechaProbableEjecutoria").datepicker();

                                $('#tblResultados').DataTable();


                            });



                            changeDivForm = function (opc) {
                                if (opc === 1) {
                                    $("#divFormulario").show("slide");
                                    $("#divConsulta").hide("fade");
                                } else if (opc === 2) {
                                    $("#divFormulario").hide("fade");
                                    $("#divConsulta").show("slide");
                                }
                            };

                            consutaId = function (id) {
                                changeDivForm(1);
                                /*aqui toda peticion ajax POST*/

                                $("#txtNumero").val("25");
                                $("#txtAnio").val("2015");
                                $("#txtResolucion").val("EJEMPLO DE TEXTO DE RESOLUCION");
                                $("#txtFechaSentencia").val("19/11/2015");
                                $("#txtFechaProbableEjecutoria").val("19/11/2015");
                                $("#txtObservaciones").val("OBSERVACIONES DE PRUEBA, SOLO DEMO");

                            };

                            clean = function () {
                                $.clearInput = function () {
                                    $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
                                    $('#divFormulario').find('select').val('');
                                };
                            };
                            
                            guardar = function (){
                                
                            }

                        </script>


                    </div>
                </div>
                <!--</div>-->                
            </div>
        </div>    
        <!--</div>-->
        
    </body>
</html>
