<?php
//ihs
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}
// var_dump($_SESSION);
$SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
$SysNumEmpleado = $_SESSION['numEmpleado'];
$SysCvePerfil = $_SESSION['cvePerfil'];
$SysCveAdscripcion = $_SESSION['cveAdscripcion'];
?>
<style type="text/css">
    .alert{ display: none; }
    #divHideForm{ display: none; position: absolute; width: 100%; height: 100vh; opacity: .5; z-index: 99999; background: #427468; }
    #divMenssage{ width: 100%; height: 40px; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 40vh; margin-bottom: auto; color: #284740; background: #FFFFFF; text-transform: uppercase; }
    #divImgloading{ background: #FFFFFF url(img/cargando_1.gif) no-repeat; background-position: center; width: 100%; height: 70px; margin-left: auto; margin-right: auto; }
    .panel panel-default{ background: #427468; color: #ebf3f1; }
    .panel-heading{ background: #427468; color: #ebf3f1; }
    .panel-group .panel-heading{ background: #427468; color: #ebf3f1; }
    .panel-default > .panel-heading{ background: #427468; color: #ebf3f1; }
    .needed:after { color:darkred; content: " (*)"; }
    .needed1:after { color:white; content: " (*)"; }
    .textCorrection{ display: block; text-transform: lowercase; }
    .textCorrection:first-letter { text-transform: uppercase; }
    .capital{ text-transform: uppercase; }
    input, textarea{ resize: none;} 

    .glyphicon-refresh-animate {
        -animation: spin .7s infinite linear;
        -webkit-animation: spin2 .7s infinite linear;
        -moz-animation: spin2 .7s infinite linear;
    }
    #conectando{
        font-size: 20px;
    }

    @-webkit-keyframes spin2 {
        from { -webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);}
        to { -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);}
    }
    @-moz-keyframes spin2 {
        from { -webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);}
        to { -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);}
    }

    @keyframes spin {
        from { transform: scale(1) rotate(0deg);}
    }
    /*.table-fixed thead {
      width: 97%;
    }*/
   
</style>

<div id="divFormulario" class="form-horizontal" data-step="1" data-intro="" data-position='top'>
    <div class="panel panel-default" >
        <div class="panel-heading">
            <h5 class="panel-title" id="autosTitulo">
                Tocas de sistema tradicional
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" id="cveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/>
            <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/>
            <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
            <input type="hidden" id="SysNumEmpleado" value="<?= $SysNumEmpleado ?>"/>
            <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
            <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
            <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> 
            <input type="hidden" id="hiddenidReferenciaArbol" name="hiddenidReferenciaArbol" value="<?= $hiddenidReferencia ?>" />
            <input type="hidden" id="hiddenidReferencia" name="hiddenidReferencia" value="" />
            <input type="hidden" id="hiddenidOficio" name="hiddenidOficio" value="" />
            <input type="hidden" id="hiddenidResolucionCombatida" name="hiddenidResolucionCombatida" value="<?= ""//$idResolucionCombatida                                                          ?>" />
            <input type="hidden" id="hiddenidResolucionCarpetaCombatida" name="hiddenidResolucionCarpetaCombatida" value="<?= ""//$idResolucionCombatida                                                          ?>" />
            <input type="hidden" id="hiddenIofe" name="hiddenidResolucionCombatida" value="" />
            <input type="hidden" id="hiddenIimp" name="hiddenidResolucionCombatida" value="" />
            <input type="hidden" id="hiddenIdel" name="hiddenidResolucionCombatida" value="" />

            <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
            <input type="hidden" id="hiddenDefensoridImputado" name="hiddenDefensoridImputado" value="" />
            <input type="hidden" id="hiddenIdRemision" name="hiddenDefensoridImputado" value="" />


            <input type="hidden" id="idActuacion" name="idActuacion" value="<?= $idActuacionArbol ?>" />



            <div class="form-group">   
                <div>
                    
                <h3 class="control-label col-md-3 "  data-position='right'>Magistrado:</h3>
                <h3 class="control-label col-md-3 "  data-position='right'><?= $_SESSION["idname"]?></h3>
                </div>
                <!-- <div class="col-md-9">
                    <div class="col-md-3"><input type="text" id="numeroToca" maxlength="4" disabled placeholder="N&uacute;mero"  val="" class="form-inline form-control numerico"  /> </div> 
                    <div class="col-md-2"><label class="control-label" data-position='right'>/</label></div>
                    <div class="col-md-4"><input type="text" id="anioToca" maxlength="4" disabled placeholder="A&Ntilde;O"  val="" class="form-inline form-control"  /></div>
                </div> -->
            </div>
            
                <div id="tablaPersonal" class="col-md-offset-1 col-md-10" >
                    
                </div>

            </div>
            <br>
            <div class="form-group" id="btnNormal">
                <div class="col-md-offset-3 col-md-9 divBotones" >
                    <!-- <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar btn_auto_save" value="Guardar" onclick="guardarMagistradoProyectista()" />
                    </div> 
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" id="divImprimir" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' style="display:none">                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Imprimir" onclick="imprimirRecibo()" id="btn_auto_clean"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="limpiar()" id="btn_auto_clean"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Eliminar" onclick="" id="btn_auto_delete" style="display:none;"  disabled/>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                    </div>-->
                </div>
            </div>
            <div class="form-group" id="btnArbol" style="display:none">
                <div class="col-md-offset-3 col-md-9 divBotones" >
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar btn_auto_save" value="Guardar" onclick="guardarToca()" />
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" id="divImprimir" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' >                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Imprimir" onclick="imprimirRecibo()" id="btn_auto_clean"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="limpiar()" id="btn_auto_clean"/>
                    </div>

                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                    </div>
                </div>
            </div>

        </div> 
    </div> 
</div> 
<div id="divConsulta" style="display:none">
    <div class="panel-heading">
        <h5 class="panel-title" id="consultaTitulo">
            Tocas de sistema tradicional / Busqueda
        </h5>
    </div>
    <div class="panel-body">
        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
        <hr>
        <div class="form-horizontal">
            <div class="form-group">
                <label  class="control-label col-md-3">Tribunal de alzada:</label>
                <div class="col-md-9">
                    <select class="form-control " name="cmbTipoJuzgado" id="cmbTipoJuzgado" onchange="cargaTipoCarpeta2()"></select>
                </div>                                
            </div>
            <div class="form-group"> 
                <label class="control-label col-md-3">Tipo Carpeta</label>
                <div class="col-md-9"><select id="cmbTipoCarpeta" class="form-control"><option value="0">Seleccione una opci�n</option></select></div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" id="label_actam_text2">No. causa</label>
                <div class="col-md-9">
                    <div class="col-md-3"><input type="text" id="numeroConsulta" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"></div>
                    <div class="col-md-2">
                        <label style="text-align:center" class="control-label" data-position='right'>/</label>
                    </div>
                    <div class="col-md-3"><input type="text" id="anioConsulta" maxlength="4" placeholder="A&Ntilde;O" val="" class="form-inline form-control numerico"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Fecha inicio</label>
                <div class="col-md-2">
                    <input type="text" id="fechaRangoInicial" placeholder="dd/mm/aaaa" class="form-control fecha">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Fecha fin</label>
                <div class="col-md-2">
                    <input type="text" id="fechaRangoFinal" placeholder="dd/mm/aaaa" class="form-control fecha">
                </div>
            </div>

        </div>
        <div class="form-group"> 
            <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para consultar toca." data-position='top'>                                        
                <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="consultarTocaTradicional()" id=""/>
            </div>
            <div id="conectando2" class="col-md-4" style="display: none;">
                <span class="label label-bg label-success"> <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i> Cargando... </span>
            </div>
            <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="limpiarCampos()" id="btn_auto_clean"/>
            </div>
        </div>

    </div>

</div>

<div id="divTablaConsulta" style="display:none">

    <div class="panel-heading">
        <h5 class="panel-title" id="consultaTitulo">
            Tocas de sistema tradicional / Consulta
        </h5>
    </div>
    <div class="panel-body">
        <input type="submit" class="btn btn-primary" style="float:left" value="Regresar" onclick="regresarBuscar();">
        <div class="form-group col-xs-2" style="padding: 10px">
            <label class="control-label" id="totalReg"></label>
        </div>
        <div id="Paginacion" class="form-group col-xs-2" >
            <label class="control-label">Cambiar a la p&aacute;gina:</label>
            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarTocaTradicional()">
                <option value="1">1</option>
            </select>
        </div>
        <div id="divPaginador" class="form-group col-xs-4" >
            <label class="control-label">Registros por p&aacute;gina:</label>
            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarTocaTradicional();
                    resetPagina()">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>

        <hr>

        <div id="tablaConsulta"></div>
    </div>
</div>


<div class="form-group">
    <div id="divAdvertencia" class="alert alert-warning alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strAdvertencia"></strong> 
    </div>
    <div id="divCorrecto" class="alert alert-success alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strCorrecto"></strong> 
    </div>
    <div id="divError" class="alert alert-danger alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strError"></strong>
    </div>
    <div id="divInformacion" class="alert alert-info alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strInformacion"></strong>
    </div>
</div>	
<div class="form-group">
    <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">
        <strong>Advertencia!</strong> Mensaje
    </div>
    <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">
        <strong>Correcto!</strong> Mensaje
    </div>
    <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">
        <strong>Error!</strong> Mensaje
    </div>
    <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;">
        <strong>Informaci&oacute;n!</strong> Mensaje
    </div>
</div>

<div id="imprimir" style="display: none;">
    <div id="printable" ></div>
    <div id="botones">
        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCampos');" style="display: block"> 
    </div>
</div>
<!-- Modal Carpetas oficios -->
<div class="modal fade" id="ModalOficios" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header panel-heading" style="padding:25px 45px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="panel-title" id="h5titulo"><span ></span> Oficios</h4>
            </div>
            <div class="modal-body" style="padding:35px 60px;">
                <div class="form-horizontal">
                    <div id="ContTablaOficios">   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!--Modal Resoluciones-->
<div class="modal fade" id="ModalResoluciones"  role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header panel-heading" style="padding:25px 45px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
            </div>
            <div class="modal-body" style="padding:35px 60px;">
                <div class="form-horizontal">
                    <div id="ContTablaResoluciones">   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Defensor-->
<div class="modal fade" id="ModalDefensor"  role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header panel-heading" style="padding:25px 45px;">
                <button type="button" class="close" onclick="cargarDefensor();" data-dismiss="modal">&times;</button>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
            </div>
            <div class="modal-body" style="padding:35px 60px;">
                <div class="form-horizontal">

                    <div class="form-group" id="divDefensor"> 
                        <div class="form-group"> 
                            <label class="control-label col-md-3 needed">Tipo Defensor:</label>
                            <div >
                                <select class=" Relacionado" name="cmbTipoDefensor" id="cmbTipoDefensor" onchange="asignarDefensor();">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1 needed">Nombre:</label>
                            <input type="text" id="nombreDefensor"  placeholder="NOMBRE DEFENSOR" class="form-control" value=""/>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1">Correo electr&oacute;nico:</label>
                            <input  type="email" id="correoDefensor" placeholder="CORREO" class="form-control" value="" />
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1">Telefono:</label>
                            <input type="text" id="telefono" placeholder="TELEFONO" class="form-control" value=""  />
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1">Celular:</label>
                            <input type="text" id="celular" placeholder="CELULAR" class="form-control" value=""  />
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                            &nbsp;<input type="submit" class="btn btn-primary" value="Aceptar" onclick="cargarDefensor()" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var cveUsuarioMagistrado = <?= $_SESSION["cveUsuarioSistema"]?>;

    /**
     * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
     */
    function setPermissions() {
        var cveUsuarioSistema = $('#cveUsuarioSistema').val();
        var cvePerfilSesion = $('#SysCvePerfil').val();
        insert_numEmpleado = cveUsuarioSistema;
        $.get("../archivos/" + cveUsuarioSistema + ".json",
            function (response) {
                var perfiles = response.perfiles[0];
                var perfil = perfiles.perfil[0];
                var permisos = perfil.permisos
                var createRecord = 'N';
                var readRecord = 'N';
                var updateRecord = 'N';
                var deleteRecord = 'N';
                for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                    if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                        $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                            if (vnombre.nomFormulario == "JUZGADO TRADICIONAL") {
                                var hijos = vnombre.hijos;
                                $.each(hijos, function (k2, nombreHijo) {
                                    if (nombreHijo.nomFormulario == 'REGISTRO TOCA') {
                                        var permisoFormulario = nombreHijo.permisoFormulario[0];
                                        createRecord = permisoFormulario.create;
                                        readRecord = permisoFormulario.read;
                                        updateRecord = permisoFormulario.update;
                                        deleteRecord = permisoFormulario.delete;
                                    }
                                });
                            }
                        });
                    }
                }
                crud.create = createRecord;
                crud.read = readRecord;
                crud.update = updateRecord;
                crud.delete = deleteRecord;
                //para desaparecer botones si no hay permisos
                if (crud.read == 'N') {
                    $('#boton').prop('disabled', true);
                }

            });
    }

    limpiar =  function(){
        $(".checks").prop("checked",false);

    }
    
    /**
     * Cargar Personal
     */
    cargarPersonal = function () {
        var strDatos = "accion=consultarPersonal";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/magistradosproyectistas/MagistradosProyectistasFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try{
                   var json = "";
                   var html = "<table class=' table table-striped table-hover' id='tablaSeleccionar' >";
                   html += "<thead><th class='col-md-10' >Nombre</th><th class='col-md-2'>Agregar</th></thead><tbody>";
                   json = eval("(" + datos + ")"); //Parsear JSON
                   $.each(json.usuarios , function(index,element){
                    console.log(element);
                    html += "<tr>";
                    html += "<td class='col-md-10'>"+element.Nombre+" "+element.Materno+" "+element.Paterno+"</td><td class='col-md-2'><input id='check"+element.CveUsuario+"' idmagistradoproyectista='' cveusuario='"+element.CveUsuario+"' type='checkbox' class='checks'></td>";
                    html += "</tr>";
                   });
                    html += "</tbody>";
                   console.log(html);
                   $("#tablaPersonal").html(html);
                   
                   var tabla3 = $("#tablaSeleccionar").DataTable({
                            responsive: true,
                            "columnDefs": [

                                {responsivePriority: 1, targets: 0}, //Prioridad para mostrar y posición de la columna a tomar, si es positivo o 0 toma de izquierda a derecha
                                {responsivePriority: 2, targets: 1}  //Prioridad para mostrar y posición de la columna a tomar, si es negativo toma de derecha a izquierda
                            ],
                            language: {
                                search: "Buscar",
                                sLengthMenu: "Registros: _MENU_",
                                sZeroRecords: "No se encontraron registros",
                                sProcessing: "Realizando la busqueda espere....",
                                sLoadingRecords: "Cargando...",
                                sInfo: "Mostrando del _START_ a _END_ (Total: _TOTAL_ resultados)",
                                infoFiltered: "",
                                paginate: {
                                    first: "Primer",
                                    sPrevious: "Anterior",
                                    sNext: "Siguiente",
                                    last: "Ultimo"
                                }
                            }
                        });
               }catch(e){
                console.log(e);
                    $("#divAlertDager").html("Error al consultar el personal");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
               }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }

    /**
     * Cargar Personal que ya fue seleccionado
     */
    cargarPersonalSeleccionado = function () {
        var strDatos = "accion=cargarPersonalSeleccionado";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/magistradosproyectistas/MagistradosProyectistasFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try{
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    $(".checks").each(function(){
                        var cveUsuario = ($(this).attr("cveusuario"));
                        $.each(json.data , function(key,valor){
                            if(cveUsuario == valor.cveUsuarioProyectista ){
                                $("#check"+cveUsuario).prop("checked",true);
                                $("#check"+cveUsuario).attr("idmagistradoproyectista",valor.idMagistradoProyectista);
                            }
                        });
                       
                    });
               }catch(e){
                console.log(e);
                    $("#divAlertDager").html("Error al consultar el personal");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
               }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }

    guardarMagistradoProyectista = function(cveUsuarioProyectista,idMagistradoProyectista,seleccionado){
        // var listaProyectistas = [];

        // $(".checks").each(function(){
        //     if($(this).is(":checked")){
        //         listaProyectistas.push($(this).attr("cveusuario"));
        //     }
        // });
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/magistradosproyectistas/MagistradosProyectistasFacade.Class.php",
            data: {
                    // listaProyectistas: JSON.stringify(listaProyectistas),
                    idMagistradoProyectista: idMagistradoProyectista,
                    cveUsuarioMagistrado: cveUsuarioMagistrado,
                    cveUsuarioProyectista: cveUsuarioProyectista,
                    seleccionado: seleccionado,
                    accion: "guardarMagistradoProyectista"
                },
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try{
                   var json = "";
                   json = eval("(" + datos + ")"); //Parsear JSON
                   if(json.status == "success"){
                        cargarPersonalSeleccionado();
                        if(json.accion == "editado"){
                            notify({
                                  type: "warning", //alert | success | error | warning | info
                                  title: "Registro Eliminado",
                                  message: "",
                                  position: {
                                      x: "right", //right | left | center
                                      y: "top" //top | bottom | center
                            },
                                  icon: '<i class="fa fa-check" aria-hidden="true"></i>', //<i>
                                  size: "normal", //normal | full | small
                                  overlay: false, //true | false
                                  closeBtn: true, //true | false
                                  overflowHide: false, //true | false
                                  spacing: 20, //number px
                                  theme: "dark-theme", //default | dark-theme
                                  autoHide: true, //true | false
                                  delay: 25000, //number ms
                                  onShow: null, //function
                                  onClick: null, //function
                                  onHide: null, //function
                                  template: '<div class="notify"><div class="notify-text"></div></div>'
                              });
                        }else{
                            notify({
                                  type: "success", //alert | success | error | warning | info
                                  title: "Registro Exitoso",
                                  message: "",
                                  position: {
                                      x: "right", //right | left | center
                                      y: "top" //top | bottom | center
                            },
                                  icon: '<i class="fa fa-check" aria-hidden="true"></i>', //<i>
                                  size: "normal", //normal | full | small
                                  overlay: false, //true | false
                                  closeBtn: true, //true | false
                                  overflowHide: false, //true | false
                                  spacing: 20, //number px
                                  theme: "dark-theme", //default | dark-theme
                                  autoHide: true, //true | false
                                  delay: 25000, //number ms
                                  onShow: null, //function
                                  onClick: null, //function
                                  onHide: null, //function
                                  template: '<div class="notify"><div class="notify-text"></div></div>'
                              });
                        }
                        
                   }else{
                        $("#divAlertDager").html("Error al agregar proyectista");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                   }
               }catch(e){
                    console.log(e);
                    $("#divAlertDager").html("Error al agregar proyectista");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
               }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });

    }


        fechaBaseDatos(
                {
                    fechaRangoInicial: "fecha",
                    fechaRangoFinal: "fecha"
                }
        );
        $(".numerico").keypress(function (key) {
            ////alert(key.charCode);
            //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
            if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32))
                return false;
        });

        $(function () {
            cargarPersonal();
            cargarPersonalSeleccionado();
            $(".checks").click(function(){
                var seleccionado = true;
                if($(this).is(":checked")){
                    seleccionado = true;
                }else{
                    seleccionado = false;
                }
                    guardarMagistradoProyectista($(this).attr("cveusuario"),$(this).attr("idmagistradoproyectista"), seleccionado );
            });
        });


</script>