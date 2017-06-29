<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysNumEmpleado = $_SESSION['numEmpleado'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];
    //print_r($_SESSION);
    
    //POST para arbol
    $procedencia = 0; 
    $idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
    $idCarpetaJudicialArbol = (  isset($_POST['idReferencia']) ?  @$_POST['idReferencia'] : '' );
    $cveTipoCarpetaArbol = (  isset($_POST['cveTipoCarpeta']) ?  @$_POST['cveTipoCarpeta'] : '' );
    if (($idActuacionArbol !=0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
        $idActuacionArbol = ( ($idActuacionArbol !=0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
        $idCarpetaJudicialArbol = ( ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") ? $idCarpetaJudicialArbol : 0 );
        $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
        $procedencia = 1; // viene de arbol
    }else if($idCarpetaJudicialArbol == ""  && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol !=""){
        $procedencia = 1; // viene de arbol el formulario general
    }
    $origen = ( isset($_GET['origen']) && $_GET['origen'] != "" ) ? $_GET['origen'] : "";
    $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";
    ?>
    <style>
        .alert{
            display: none;
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
        
        .steps {
            padding: 1px 0;
            overflow: hidden;
        }
        .steps ul, .steps li {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .steps ul { 
            float: left; 
            width: 100% 
        }
        .steps li {
            float: left;
            width: 14%;
            padding: 1px;
        }
        .steps li a {
            display: block;
            padding: 15px 20px;
            background: #881518;
            color: #fff;
            line-height: 1.5em;
            text-decoration: none;
        }
        .steps li a strong {
            font-size:20px; 
            font-family: Arial;
        }
        .steps li a:hover {
            background: #df3338;
        }
        .steps li a.active { 
            background: #df3338; 
        }
        .steps li.step, .steps li.step a {
            position: relative;
            z-index: 3;
            height: 84px;
        }

        .steps li > a {
            background: #881518;   
        }

        .steps li.step-3 a {

            background-position: center left;
        }
        .steps li.step a:hover { 
            background:#cc00; 
        }
        .subtitulo{
            font-family: Arial;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .steps li a {
                display: block;
            }
            .steps li {
                display:block;
                float: left;
                width: 100%;
            }
            .steps li.step, .steps li.step a {
                position: relative;
                z-index: 3;
                height: 60px;
            }
            .steps ul, .steps li {
                margin: 1px;
                padding: 1px;
                list-style: none;
            }
        }
        .requerido {
            color: darkred;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Casos Relevantes
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="#" target="oculto" enctype="multipart/form-data" onsubmit="return false;"> 
                    
                    <input type="hidden" id="idActuacion" name="idActuacion" value="<?php echo $idActuacionArbol; ?>">
                    <input type="hidden" id="idReferencia" name="idReferencia" value="<?php echo $idCarpetaJudicialArbol; ?>">
                    <input type="hidden" id="SysCveUsuarioSistema" value="<?=$SysCveUsuarioSistema?>"/> 
                    <input type="hidden" id="SysCvePerfil" value="<?=$SysCvePerfil?>"/>
                    <input type="hidden" id="SysCveAdscripcion" value="<?=$SysCveAdscripcion?>"/>
                    <input type="hidden" id="SysNumEmpleado" value="<?=$SysNumEmpleado?>"/>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Juzgado <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgadoConsulta" placeholder="Juzgado">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Tipo de Carpeta <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaCarpetas">
                            <select class="form-control" id="cveTipoCarpeta" name="cveTipoCarpeta" placeholder="Tipo Carpeta" onchange="cambiarEtiqueta('lblRelationName', 'cveTipoCarpeta')">
                                <option value="0">Selecciona una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3" id="lblRelationName">Causa <span class="requerido">(*)</span></label>
                        <div id="divSinRelacion" class="col-xs-9">
                            <input type="text" id="numero" class="form-inline" name="numero" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anio" id="anio" placeholder="A&ntilde;o" maxlength="4">
                        </div>                                
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Ficha Ejecutiva <span class="requerido">(*)</span></label>
                        <div class="col-xs-9">
                            <div id="datosCarpeta"></div>
                            <br><br>
                            <div id="fichaEjecutiva"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Actuaciones <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaActuaciones" style="max-height: 300px; overflow-y: scroll;">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Nombre para el caso <span class="requerido">(*)</span></label>
                        <div class="col-xs-9">
                            <input type="text" id="sintesis" name="sintesis" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Observaciones <span class="requerido">(*)</span></label>
                        <div class="col-xs-9">
                            <script id="observaciones" type="text/plain" style="width: 100%; height: 300px; margin: 0px auto;"></script>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12 text-center" >Formatos v&aacute;lidos del archivo: <span>doc, docx, odt , pdf y jpg</span>; tama&ntilde;o m&aacute;ximo: <span>4MB</span></div>
                        <label class="control-label col-xs-3">Adjunto </label>
                        <div class="col-xs-9">
                            <input type="file" id="adjunto" name="adjunto" class="form-control" onchange="if (!formato(this)) {
                                                this.value = ''
                                            }"
                            >
                        </div>
                    </div>
                    <div class="form-group text-center" >
                        <div id="solicitudFormato"></div>
                    </div>
                    <div class="form-group" >
                        <label class="control-label col-xs-3">&nbsp;</label>
                        <div class="col-xs-9">
                            <div id="listaAdjuntos" style="display: none;">
                                <div class="panel-heading" style="padding: 3px 15px !important;"><h5>Documentos Adjuntos</h5></div>
                                <div id="tituloAdjuntos"></div><br>
                                <table class="table table-striped table-bordered">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <td>No.</td>
                                            <td>Adjunto</td>
                                            <td><span id="eliminarSeleccionados" style="cursor: pointer;">
                                                    <img src="./img/eliminar.png" onclick="borrarSeleccionados()" width="30" height="30" data-toogle="Eliminar Registros seleccionados" title="Eliminar Registros seleccionados"></span>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaAdjuntos"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="divAlertWarning" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div class="alert alert-success alert-dismissable" id="divAlertSucces" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div class="alert alert-danger alert-dismissable" id="divAlertDager" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error!</strong> Mensaje
                    </div>
                    <div class="alert alert-info alert-dismissable" id="divAlertInfo" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" id="btn_guardar" class="btn btn-primary guarda" value="Guardar" onclick="guardar()" style="display: none;">
                        <input type="submit" id="btn_buscar" class="btn btn-primary consulta" value="Consultar" onclick="changeDivFormCarpetas(2)">
                        <input type="submit" id="btn_limpiar" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" id="btn_eliminar" class="btn btn-primary elimina" value="Eliminar" onclick="eliminar()" style="display: none;">
                        <input type="submit" id="btn_visor" data-toggle="modal" data-target="#ModalVisorPDF" class="btn btn-primary elimina" value="Visor" onclick="visorDocumentos()" style="display: none;">
                        <input type="submit" id="btn_pdf" data-toggle="modal" class="btn btn-primary elimina" value="Generar PDF" onclick="enviar()" style="display: none;">
                    </div>
                </div>
                
                    <!--<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormCarpetas(1)">
                    <br><br>-->
                
                
            </div>
        
            <div id="divConsulta" style="display: none;" class="form-horizontal">
                <input type="submit" class="btn btn-primary" id="btn-regresar" value="Regresar" onclick="changeDivFormCarpetas(1)">
                <br>
                <!--<div class="form-group">
                    <label class="control-label col-xs-3">Regi&oacute;n <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaRegiones">
                        <select name="cveRegion" id="cveRegion" class="form-control" onchange="cargarDistritos()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Distrito <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaDistritos">
                        <select name="cveDistrito" id="cveDistrito" class="form-control" onchange="cargarJuzgado()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Materia </label>
                    <div class="col-xs-9" id="listaMaterias">
                        <select name="cveMateria" id="cveMateria" class="form-control" onchange="cargarJuzgado()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Instancia</label>
                    <div class="col-xs-9" id="listaInstancias">
                        <select name="cveInstancia" id="cveInstancia" class="form-control" onchange="cargarJuzgado()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>-->
                <div class="form-group">
                    <label class="control-label col-xs-3">Juzgado</label>
                    <div class="col-xs-9" id="listaJuzgadosConsulta">
                        <select name="cveJuzgadoConsulta" id="cveJuzgadoConsulta" class="form-control" onchange="cargarCarpetasConsulta()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Carpeta</label>
                    <div class="col-xs-9" id="listacarpetasConsulta">
                        <select name="cveTipoCarpetaConsulta" id="cveTipoCarpetaConsulta" class="form-control" onchange="cambiarEtiqueta('lblRelationNameB', 'cveTipoCarpetaConsulta')">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="lblRelationNameB">Causa</label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" id="numeroConsulta" class="form-inline" name="numeroConsulta" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anioConsulta" id="anioConsulta" placeholder="A&ntilde;o" maxlength="4">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="fechaInicial">Fecha Inicial</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control mayuscula" id="fechaInicial" name="fechaInicial">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="fechaFinal">Fecha Final</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control mayuscula" id="fechaFinal" name="fechaFinal">
                    </div>
                </div>
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" id="btn_consultar" class="btn btn-primary consulta" value="Buscar" onclick="consultar(1)">
                        <input type="submit" id="limpiar" class="btn btn-primary limpia" value="Limpiar" onclick="limpiarBusqueda()">
                    </div>
                </div>
                <br>
                <div id="resultadoPaginador" style="display: none;">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultar(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarPaginacion();">
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
                    <div id="consulta-carpetas">
                    </div>
                </div>
                <br>
                
            </div>
            
        </div>
    </div>
    <div class="modal fade" id="ModalVisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="VisorPDF">Visor de documentos</h4>
          </div>
          <div class="modal-body" id="visor" style="max-height: 500px; overflow: scroll;"></div>
          
        </div>
      </div>
    </div>
    <script type="text/javascript">
        var cveJuzgadoArbol = '<?php echo $juzgadoOrigenArbol; ?>';
        var origen = '<?php echo $origen; ?>';
        var idActuacion = '<?php echo $idActuacionArbol; ?>';
        var cveAdscripcion = '<?php echo $SysCveAdscripcion; ?>';
        
        if(editor!=undefined){  
            editor.destroy();
        }    
        var editor = null;
        /*
         * Cargar combos
         */
        //Cargar juzgados
        function listaJuzgados(){
            var strDatos = "accion=distrito";
            var hiddencveAdcripcion = cveAdscripcion;
            var hiddencveJuzgadoOrigenArbol = cveJuzgadoArbol;
            console.log(hiddencveAdcripcion);
            console.log(hiddencveJuzgadoOrigenArbol);
            console.log(idActuacion);
            if ( idActuacion != "" ) {
                if ( hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol ) {
                    if ( origen == "" ) {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                } else {
                    if ( hiddencveJuzgadoOrigenArbol != 0 ) {
                        strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                    } else {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                }
            }
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: strDatos,
                dataType: 'json',
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="cargaTipoCarpeta()" >';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveCondicion == 1 ) {
                                    html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#listaJuzgados').html(html);
                    } catch (e) {
                        alert(e);
                        ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                ToggleLoading(2);
            });
        }
        
        //Tipo carpeta
        cargaTipoCarpeta = function () {
            var result = "";
            var strDatos = "accion=consultar";
            var cveTipoJuzgado = $("#cveJuzgado :selected").attr("data-tipoJuzgado");
            //alert(cveTipoJuzgado);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            $("#cveTipoCarpeta").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
    //                            if ( result.data[index].cveTipoCarpeta < 7 ) {
    //                                html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
    //                                
    //                            }
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(result.data[index].cveTipoCarpeta == "1" || result.data[index].cveTipoCarpeta == "2"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(result.data[index].cveTipoCarpeta == "3"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(result.data[index].cveTipoCarpeta == "5"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(result.data[index].cveTipoCarpeta == "4"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "5": 
                                    break;
                                    default: html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        break;
                                }
                            }
                            
                            ToggleLoading(2);
                        } else {
                            html = '<option value="">Selecciona una opci&oacute;n</option>';
                            ToggleLoading(2);
                        }
                        $('#cveTipoCarpeta').html(html);
                    } catch (e) {
                        alert(e);
                        ToggleLoading(2);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                    ToggleLoading(2);
                }
            });
        };
        
        /*
         * Si se consulta un formulario de primera instancia desde una adscripcion de 
         * segunda instancia, se ocultan los botones del formulario, excepto 
         * el boton de visor de documentos
         */
        muestraOcultaBotones = function() {
            var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
            if ( instanciaSesion == 2 && origen == "" ) {
                $("#btn_guardar").hide();
                $("#btn_eliminar").hide();
                $("#btn_pdf").hide();
                $("#btn_buscar").hide();
                $("#btn_limpiar").hide();
                $("#eliminarSeleccionados").hide();
            }
        };
        /*
         * Funcion para consultar la instancia de la adscripcion donde el usuario
         * se encuentra logueado 
         * @param {type} cveAdscripcion
         * @returns {String}         */
        obtenerInstanciaSesion = function(cveAdscripcion){
            var strDatos = "accion=consultar&cveJuzgado=" + cveAdscripcion;
            var instancia = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    //json = datos;
                    console.log(json);
                    console.log('totalCount');
                    console.log(json.totalCount);
                    if (json.totalCount > 0) {
                    	instancia = json.data[0].cveInstancia;
                    } else {
                        alert("Error al obtener la instancia de la sesion");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso , 'error');
                }
            });
            return instancia;
        };
        
        //Cargar combo regiones
        
        listaRegiones = function() {
            var ruta_juzgados = "../fachadas/sigejupe/regiones/RegionesFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveRegion").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveRegion + "'>" + data.data[index].desRegion + "</option>";
                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveRegion').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        };
        
        //Cargar combo distritos
        cargarDistritos = function() {
            var ruta_juzgados = "../fachadas/sigejupe/distritos/DistritosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    cveRegion: $("#cveRegion").val(),
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveDistrito").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveDistrito + "'>" + data.data[index].desDistrito + "</option>";
                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveDistrito').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        };
        
        //Cargar materias
        listaMaterias = function() {
            var ruta = "../fachadas/sigejupe/materias/MateriasFacade.Class.php";
            $.ajax(ruta, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveMateria").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                if ( data.data[index].cveMateria == 3 ) {
                                    html += "<option value='" + data.data[index].cveMateria + "'>" + data.data[index].desMateria + "</option>";
                                }
                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveMateria').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        };
        
        //Cargar instancias
        listaInstancias = function() {
            var ruta = "../fachadas/sigejupe/instancias/InstanciasFacade.Class.php";
            $.ajax(ruta, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveInstancia").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                
                                html += "<option value='" + data.data[index].cveInstancia + "'>" + data.data[index].desInstancia + "</option>";
                                
                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveInstancia').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener el listado de instancias');
                //ToggleLoading(2);
            });
        };
        
        //cargar juzgados consulta
        cargarJuzgado = function() {
            var strDatos = "accion=distrito";
            var hiddencveAdcripcion = cveAdscripcion;
            var hiddencveJuzgadoOrigenArbol = cveJuzgadoArbol;
            console.log(hiddencveAdcripcion);
            console.log(hiddencveJuzgadoOrigenArbol);
            console.log(idActuacion);
            if ( idActuacion != "" ) {
                if ( hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol ) {
                    if ( origen == "" ) {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                } else {
                    if ( hiddencveJuzgadoOrigenArbol != 0 ) {
                        strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                    } else {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                }
            }
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: strDatos,
                dataType: 'json',
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveJuzgadoConsulta").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveCondicion == 1 ) {
                                    html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
                            }
                        } else {
                            html = "<option value=''>Selecciona una opci&oacute;n</option>";
                        }
                        $('#cveJuzgadoConsulta').html(html);
                    } catch (e) {
                        alert(e);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
            });
        };
        
        //Cargar Tipo Carpetas consulta
        cargarCarpetasConsulta = function() {
            var result = "";
            var strDatos = "accion=consultar";
            var cveTipoJuzgado = $("#cveJuzgadoConsulta :selected").attr("data-tipoJuzgado");
            //alert(cveTipoJuzgado);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            $("#cveTipoCarpetaConsulta").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
    //                            if ( result.data[index].cveTipoCarpeta < 7 ) {
    //                                html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
    //                                
    //                            }
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(result.data[index].cveTipoCarpeta == "1" || result.data[index].cveTipoCarpeta == "2"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(result.data[index].cveTipoCarpeta == "3"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(result.data[index].cveTipoCarpeta == "5"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(result.data[index].cveTipoCarpeta == "4"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "5": 
                                    break;
                                    default: html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        break;
                                }
                            }
                            
                        } else {
                            html = '<option value="">Selecciona una opci&oacute;n</option>';
                        }
                        $('#cveTipoCarpetaConsulta').html(html);
                    } catch (e) {
                        alert(e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#div-advertencia").html("Error en la peticion:\n\n" + quepaso);
                    $("#div-advertencia").show("slide");
                    setTimeAlert("div-advertencia");
                }
            });
        };
        
        consultarPaginacion = function() {
            $("#cmbPaginacion").val(1);
            consultar(0);
        };
        
        function consultar(Aux){
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            if($("#cveJuzgadoConsulta").val() == "" && ( $("#fechaInicial").val() == "" || $("#fechaFinal").val() == "" ) ){
                $("#div-advertencia").html('<span>Selecciona un criterio de b&uacute;squeda</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                    data: {
                    cveJuzgado : $("#cveJuzgadoConsulta").val(),
                    numero: $("#numeroConsulta").val(),
                    anio: $("#anioConsulta").val(),
                    cveTipoCarpeta: $("#cveTipoCarpetaConsulta").val(),
                    cveTipoActuacion: '26',
                    fechaInicial: $("#fechaInicial").val(),
                    fechaFinal: $("#fechaFinal").val(),
                    activo: "S",
                    pag: pag,
                    cantxPag: cantReg,
                    consultaDistrito: 'S',
                    accion : "consultarCasosRelevantes"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        //ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            //console.log(result.totalCount);
                            var html = "";
                            var c = 0;
                            if(result.totalCount > 0){
                                $("#resultadoPaginador").show();
                                html += '<table id="resultCarpetas" class="table table-hover table-striped table-bordered" style="cursor: pointer;">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Estatus</th>';
                                html += '<th>N&uacute;mero Actuaci&oacute;n</th>';
                                html += '<th>Tipo Actuaci&oacute;n</th>';
                                html += '<th>Carpeta</th>';
                                html += '<th>Juzgado</th>';
                                html += '<th>S&iacute;ntesis</th>';
                                html += '<th>Fecha Registro</th>';
                                html += '<tbody>';
                                for(var n = 0; n < result.totalCount; n++){
                                    c++;
                                    //var fecha = result.data[n].fechaRegistro.split(" ");
                                    html += '<tr onClick="cargarCarpetas(' + result.data[n].idActuacion + ')">';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].descEstatus + '</td>';
                                    html += '<td>' + result.data[n].numActuacion + '/' + result.data[n].aniActuacion + '</td>';
                                    html += '<td>' + result.data[n].desTipoActuacion + '</td>';
                                    html += '<td>' + result.data[n].descTipoCarpeta + ' ' + result.data[n].numero + '/' + result.data[n].anio + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '<td>' + result.data[n].sintesis + '</td>';
                                    html += '<td>' + result.data[n].fechaRegistro + '</td>';
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#consulta-carpetas").html(html);
                                $("#resultCarpetas").DataTable({
                                    paging: false
                                });
                                getPaginasCarpetas(pag, cantReg);
                                
                            } else{
                                $("#div-advertencia").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                
                                html += '';
                                $("#consulta-carpetas").html(html);
                                $("#resultadoPaginador").hide();
                                //ToggleLoading(2);
                            }
                            
                        } catch(e){
                            //ToggleLoading(2);
                            $("#div-advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#div-advertencia").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
                        $("#divAlertInfo").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#consulta-carpetas").html(html);
                        $("#resultadoPaginador").hide();
                    }
                });
            }
        }
        
        getPaginasCarpetas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                data: {
                    cveJuzgado : $("#cveJuzgadoConsulta").val(),
                    numero: $("#numeroConsulta").val(),
                    anio: $("#anioConsulta").val(),
                    cveTipoCarpeta: $("#cveTipoCarpetaConsulta").val(),
                    activo: "S",
                    cveTipoActuacion: '26',
                    fechaInicial: $("#fechaInicial").val(),
                    fechaFinal: $("#fechaFinal").val(),
                    consultaDistrito: 'S',
                    pag: pag,
                    cantxPag: cantReg,
                    accion : "getPaginas"
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {  
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        $("#div-advertencia").html(json.msg);
                        $("#div-advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#div-advertencia").html("Error en la peticion:\n\n" + quepaso);
                    $("#div-advertencia").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        
        guardar = function(){
            if ( validar() ) {
                var idActuacion = $('#idActuacion').val();
                var cveTipoActuacion = '26';
                var idReferencia = $("#idReferencia").val();
                var cveJuzgado = $('#cveJuzgado').val();
                var cveTipoCarpeta = $('#cveTipoCarpeta').val();
                var numero = $('#numero').val();
                var anio = $('#anio').val();
                var sintesis = $('#sintesis').val();
                var observaciones = editor.getContent();
                var formData = new FormData();
                formData.append('accion','guardarCasosRelevantes');
                formData.append('idActuacion',idActuacion);
                formData.append('cveTipoActuacion',cveTipoActuacion);
                formData.append('idReferencia',idReferencia);
                formData.append('numero',numero);
                formData.append('anio',anio);
                formData.append('cveTipoCarpeta',cveTipoCarpeta);
                formData.append('cveJuzgado',cveJuzgado);
                formData.append('sintesis',sintesis);
                formData.append('observaciones',observaciones);
                formData.append('adjunto',$('#adjunto')[0].files[0]);
                formData.append('activo', 'S');
                //var validationFields = [cveJuzgado,cveTipoCarpeta,numero,anio,sintesis];
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                    data: formData,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    processData: false,
                    beforeSend: function (objeto) {
                        //ToggleLoading(1);
                    },
                    success: function (datos) {
                        //ToggleLoading(2);
                        var result = eval("(" + datos + ")");
                        //alert(result.totalCount);
                        if (result.totalCount > 0) {
                            if (result.status == 'Ok') {
                                if(result.text != "" ) {
                                    var msg = result.text;
                                } else {
                                    var msg = "";
                                }
                                $("#divAlertSucces").html("");
                                $("#divAlertSucces").html(" " + msg);
                                $("#divAlertSucces").show("");
                                setTimeAlert("divAlertSucces");
                                $("#adjunto").val("");
                                $("#idActuacion").val(result.data[0].idActuacion);
                                $("#idReferencia").val(result.data[0].idReferencia);
                                //consultarImputados();
                                //limpiarImputado();
                                consultarAdjuntos();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(result.text);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        } else {
                            //alert("NO");
                            $("#divAlertWarning").html("");
                            $("#divAlertWarning").html(result.text);
                            $("#divAlertWarning").show("");
                            setTimeAlert("divAlertWarning");
                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertWarning").html("");
                                $("#divAlertDager").html(otroobj);
                                $("#divAlertDager").show("");
                                setTimeAlert("divAlertDager");
                    }
                });
            }
        };
        
        eliminar = function() {
            bootbox.dialog({
                message: "\u00bf Desea eliminar el caso relevante?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $(".mensaje").empty();
                            var idActuacion = $("#idActuacion").val();
                            var idReferencia = $("#idReferencia").val();
                            var mensaje = "";
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {accion: "eliminarCasoRelevante",
                                       idActuacion: idActuacion,
                                       idReferencia: idReferencia,  
                                       activo: 'N'},
                                beforeSend: function () {
                                },
                                success: function (datos) {
                                    mensaje = "";
                                    try {
                                        console.log(datos);
                                        if (datos.totalCount > 0) {
                                            $("#divAlertSucces").empty();
                                            mensaje += "<strong>" + datos.text + "</strong>";
                                            $("#divAlertSucces").append(mensaje);
                                            $("#divAlertSucces").show();
                                            setTimeAlert("divAlertSucces");
                                            $("#btn_limpiar").trigger("click");
                                        } else {
                                            $("#divAlertWarning").empty();
                                            mensaje += "<strong>" + datos.text + "</strong>";
                                            $("#divAlertWarning").append(mensaje);
                                            $("#divAlertWarning").show();
                                            setTimeAlert("divAlertWarning");
                                        }
                                    } catch (e) {
                                        alert("Error al cargar datos:" + e);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    $("#divAlertDager").empty();
                                    mensaje += "<strong>Ocurri&oacute; un error al borrar el registro: " + quepaso + "</strong>";
                                    $("#divAlertDager").append(mensaje);
                                    $("#divAlertDager").show();
                                    setTimeAlert("divAlertDager");
                                }
                            });
                            
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {

                        }
                    }
                }
            });
        };
        
        function cargarCarpetas(idActuacion){
            //alert("id Carpeta judicial: " + idCarpetaJudicial);
            //$("#idActuacion").val(idActuacion);
            $("#limpiar").trigger("click");
            changeDivFormCarpetas(1);
            cargaTipoCarpeta();
            //siguientePaso(1);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                data: {
                    activo: "S",
                    idActuacion: idActuacion,
                    cveTipoActuacion: '26',
                    cantxPag: '1',
                    accion : "consultarCasosRelevantes"
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {  
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $("#idActuacion").val(idActuacion);
                        $("#idReferencia").val(json.data[0].idReferencia);
                        $("#cveJuzgado").val(json.data[0].cveJuzgado).prop('disabled', true);
                        $("#cveTipoCarpeta").val(json.data[0].cveTipoCarpeta).prop('disabled', true);
                        $("#numero").val(json.data[0].numero).prop('disabled', true);
                        $("#anio").val(json.data[0].anio).prop('disabled', true);
                        $("#sintesis").val(json.data[0].sintesis);
                        llenareditor(json.data[0].observaciones);
                        consultarDatosCarpeta();
                        consultarActuaciones();
                        consultarAdjuntos();
                        $("#btn_eliminar").show();
                        $("#btn_visor").show();
                        $("#btn_pdf").show();
                        muestraOcultaBotones();
                    } else {
                        $("#divAlertWarning").html(json.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        $("#btn_eliminar").hide();
                        $("#btn_guardar").hide();
                        $("#btn_visor").hide();
                        $("#btn_pdf").hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#btn_eliminar").hide();
                    $("#btn_guardar").hide();
                    $("#btn_visor").hide();
                    $("#btn_pdf").hide();
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        
        changeDivFormCarpetas = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };
        
        function clean(){
            $("#cveJuzgado").val("").prop('disabled', false);
            $("#numero").val("").prop('disabled', false);
            var fecha = new Date();
            $("#anio").val("").prop('disabled', false);
            $("#cveTipoCarpeta").val("").prop('disabled', false);
            var html = '';
            $("#datosCarpeta").html(html);
            $("#fichaEjecutiva").html(html);
            $("#listaActuaciones").html(html);
            $(".guarda").hide();
            $(".elimina").hide();
            $("#idReferencia").val("");
            $("#idActuacion").val("");
            editor.setContent("", false);
            $("#adjunto").val("");
            $("#sintesis").val("");
            $("#solicitudFormato").html(html);
            $("#listaAdjuntos").hide();
            $("#tablaAdjuntos").empty();
            $("#tituloAdjuntos").empty();
            $("#btn_visor").hide();
            $("#btn_pdf").hide();
        }
        
        limpiarBusqueda = function() {
            $("#cveJuzgadoConsulta").val("");
            $("#cveTipoCarpetaConsulta").val("");
            $("#anioConsulta").val("");
            $("#numeroConsulta").val("");
            $("#fechaInicial").val("");
            $("#fechaFinal").val("");
            $("#consulta-carpetas").empty();
            $("#resultadoPaginador").hide();
        };
        
        function cambiarEtiqueta(etiqueta, select){
            var cveTipoCarpeta = $("#" + select).val();
            var texto = "";
            if (cveTipoCarpeta != "") {
                texto = $("#" + select + " option:selected").text();
                texto = capitalize(texto);
                $("#" + etiqueta).html(texto);
            } else {
                $("#" + etiqueta).html("Causa");
            }
        }
        
        function capitalize(text){
            text = text.toLowerCase();
            var tmpText = text.split(" ");
            var result = "";
            for ( var n = 0; n < tmpText.length; n++ ) {
                var j = tmpText[n].charAt(0).toUpperCase();
                tmpText[n] = j + tmpText[n].substr(1);
            }
            result = tmpText.join(" ");
            return result;
        }
        
        function validar(){
            if($("#idReferencia").val() == ""){
                $("#divAlertWarning").html('<span>No se ha seleccionado ninguna carpeta judicial!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if($("#cveJuzgado").val() == ""){
                $("#divAlertWarning").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ( $("#cveTipoCarpeta").val() == "" ) {
                $("#divAlertWarning").html('<span>Seleccione un tipo de carpeta</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ( $("#numero").val() == "" ) {
                $("#divAlertWarning").html('<span>Capture el n&uacute;mero de carpeta</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ( $("#anio").val() == "" ) {
                $("#divAlertWarning").html('<span>Capture el a&ntilde;o de la carpeta</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ( $("#sintesis").val() == "" ) {
                $("#divAlertWarning").html('<span>Capture el Nombre del Caso en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ( editor.getContent() == "" && $("#adjunto").val() == "" ) {
                $("#divAlertWarning").html('<span>Debe capturar el contenido del caso, o bien, adjuntar un documento</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else {
                return true;
            }
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
        };
        
        llenareditor = function (value) {
            try {
                editor.ready(function () {
                	setTimeout(function(){  editor.setContent(value, true); }, 500); });
            } catch (e) { alert(e); }
        };
        
        cargaCarpetaArbol = function() {
            if ( $("#idActuacion").val() != "" ) {
                //alert("Entra: " + $("#idReferencia").val());
                $("#btn-regresar").hide();
                $("#btn_buscar").hide();
                $("#btn_limpiar").hide();
                
                cargarCarpetas($("#idActuacion").val());
            } 
    //        else {
    //            alert("No entra: " + $("#idReferencia").val());
    //        }
        };
        
        consultarDatosCarpeta = function(){
            var texto = "";
            $("#datosCarpeta").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarCarpetasJudicialesDetalle",
                    cveJuzgado: $("#cveJuzgado").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    ToggleLoading(2);

                    if (datos.totalCount > 0) {
                        //changeDivForm(1);
                        $('#idReferencia').val(datos.data[0].idCarpetaJudicial);
                        texto = '<div class="panel-heading" style="padding: 3px 15px !important;"><h5>Datos de la Carpeta</h5></div><br><br>';
                        texto += '<span><b>Tipo: </b> ' + datos.data[0].desTipoCarpeta + ' <b>N&uacute;mero: </b>' + datos.data[0].numero + '/' + datos.data[0].anio + '</span><br>';
                        texto += '<span><b>Juzgado: </b>' + datos.data[0].desJuzgado + '</span><br>';
                        texto += '<span><b>Fecha de Radicaci&oacuten:</b> ' + formatoFecha(datos.data[0].fechaRadicacion) + '</span><br>';
                        texto += '<span><b>Observaciones:</b> ' + datos.data[0].observaciones + '</span><br>';
                        $("#datosCarpeta").html(texto);
                        consultarFichaEjecutiva(datos.data[0].idCarpetaJudicial);
                        $("#btn_guardar").show();
                    } else {
                        texto = "<span>La causa solicitada no existe</span>";
                        $("#datosCarpeta").html(texto);
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });
        };
        
        consultarFichaEjecutiva = function(idCarpetaJudicial) {
            $("#fichaEjecutiva").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarRelacion", idCarpetaJudicial: idCarpetaJudicial, activo: 'S'},
                beforeSend: function () {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount == 0) {
                            return false;
                        }
                        var tabla = "";
                        tabla += '<div class="panel-heading" style="padding: 3px 15px !important;"><h5>Datos de las Partes</h5></div><br>';
                        tabla += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        tabla += '<tr class="trGridAgrega">';
                        tabla += '<th width="20%">Imputado</th>';
                        tabla += '<th width="20%" >Sujetos Pasivos del Delito</th>';
                        tabla += '<th width="20%" >Delito</th>';
                        $.each(datos.data, function (key, val) {
                            tabla += "<tr class='trSeleccion' >";
    //                        if (val.imputados.cveTipoPersona == 1) {
    //                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.imputados.nombre + " " + val.imputados.paterno + " " + val.imputados.materno + "</td>";
    //                        } else {
    //                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.imputados.nombreMoral + "</td>";
    //
    //                        }
    //                        if (val.ofendidos.cveTipoPersona == 1) {
    //                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.ofendidos.nombre + " " + val.ofendidos.paterno + " " + val.ofendidos.materno + "</td>";
    //                        } else {
    //                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.ofendidos.nombreMoral + "</td>";
    //
    //                        }
                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.nombreImputado + "</td>";
                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.nombreOfendido + "</td>";
                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.nombreDelito + "</td>";
                            
                            tabla += "</tr>";
                        });
                        tabla += "</table>";
                        $('#fichaEjecutiva').html(tabla);
                        $('#fichaEjecutiva').show("");
                    } catch (e) {
                        alert("Error al cargar relaciones:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                }
            });
        };
        
        consultarActuaciones = function(){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/arbol/ArbolFacade.Class.php",
                data: {
                    accion: "getFullTree",
                    cveJuzgado: $("#cveJuzgado").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    nuc: "",
                    numCarpInv: "",
                    cveTipoCarpeta: $("#cveTipoCarpeta").val()
                },
                //async: false,
                dataType: "json",
                beforeSend: function () {
                    $("#listaActuaciones").empty();
                    //$("#loadTree").show();
                },
                success: function (datos) {
                    switch (datos.estatus) {
                        case "ok" :
                            
                            var total = datos.resultados.length;
                            var content = '<div class="table-responsive">';
                            content += '<div class="panel-heading" style="padding: 3px 15px !important;"><h5>Actuaciones</h5></div>';
                            content += '<p>Se encontraron <b>' + total + '</b> Actuaciones de la causa Numero: <b>' + $("#numero").val() + '/' + $("#anio").val() + '</b> de las cuales</p>';
                            content += '<table class="table table-striped table-bordered">';
                            content += '<thead style="text-align: center;"><tr><td>No.</td><td>Actuaci&oacute;n</td></tr></thead>';
                            content += '<tbody>';
                            var contador = 1;
                            $.each(datos.resultados, function (key, element) {
                                content += '<tr>';
                                content += '<td>' + contador + '</td>';
                                contador++;
                                content += '<td>' + element.text + '</td>';
                                content += '</tr>';
                            });
                            content += '</tbody>';
                            content += '</table>';
                            content += '</div>';
                            $('#listaActuaciones').html(content);
                            break;
                        case "fail" :
                            $('#listaActuaciones').html("No se encontraron resultados");
                            break;
                    }
                }, complete: function () {
                    //$("#loadTree").hide();
                },
                error: function (objeto, quepaso, otroobj) {
                },
            });
        };
        
        consultarAdjuntos = function() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                data: {
                    accion: "consultarAdjuntos",
                    idActuacion: $("#idActuacion").val(),
                    idReferencia: $("#idReferencia").val(),
                    activo: "S"
                },
                //async: false,
                dataType: "json",
                beforeSend: function () {
                    //$("#listaAdjuntos").empty();
                    //$("#loadTree").show();
                },
                success: function (datos) {
                    if ( datos.totalCount > 0 ) {
                        switch (datos.Estatus) {
                            case "Ok" :
                                $('#listaAdjuntos').show();
                                var total = datos.data.length;
                                var content = '';
                                var titulo = '<p>Se encontraron <b>' + total + '</b> archivos adjuntos'; 
                                $("#tituloAdjuntos").empty();
                                $("#tituloAdjuntos").html(titulo);
    //                            content += '<table class="table table-striped table-bordered">';
    //                            content += '<thead style="text-align: center;"><tr><td>No.</td><td>Ajunto</td><td><span id="eliminarSeleccionados" style="cursor: pointer;"><img src="./img/eliminar.png" width="30" height="30" data-toogle="Eliminar Registros seleccionados" title="Eliminar Registros seleccionados"></span></td></tr></thead>';
    //                            content += '<tbody>';
                                var content = '';
                                var contador = 1;
                                $.each(datos.data, function (key, element) {
                                    content += '<tr>';
                                    content += '<td>' + contador + '</td>';
                                    contador++;
                                    content += '<td>' + element.ruta + '</td>';
                                    content += '<td><input type="checkbox" name="eliminarAdjunto[]" value="' + element.idImagen + '">';
                                    content += '</tr>';
                                });
    //                            content += '</tbody>';
    //                            content += '</table>';
    //                            content += '</div>';
                                $('#tablaAdjuntos').html(content);
                                break;
                            case "fail" :
                                //$('#listaAdjuntos').html("No se encontraron resultados");
                                $('#listaAdjuntos').hide();
                                break;
                        }
                    } else {
                        //$('#listaAdjuntos').html("El caso no cuenta con documentos adjuntos");
                        $('#listaAdjuntos').hide();
                    }
                }, complete: function () {
                    //$("#loadTree").hide();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
        };
        
        borrarSeleccionados = function(){
            $("#eliminarSeleccionados").preventDefault;
            var altura = $(window).height();
            bootbox.dialog({
                message: "Desea eliminar los registros seleccionados?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
            
                            var registros = $('input[type=checkbox]:checked').length;
                            if(registros == '0'){
                                //$(document).scrollTop(200);
                                $("#divAlertWarning").empty();
                                $("#divAlertWarning").html('<span>Debe seleccionar al menos un registro a eliminar!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                            } else{
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                                    data: $('#frmSolicitud').serialize() + "&accion=eliminarAdjuntos",
                                    async: true,
                                    dataType: "json",
                                    beforeSend: function(objeto) {
                                        $(document).scrollTop(altura);
                                        $("#divAlertInfo").html('<span>Eliminando los registros seleccionados, espere un momento por favor</span>').show();
                                        $("#eliminarSeleccionados").hide();
                                    },
                                    success: function(datos) {
                                        try {
                                            $(document).scrollTop(altura);
                                            $("#divAlertSucces").html('<span>Datos eliminados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            $("#divAlertInfo").hide();
                                            $("#eliminarSeleccionados").show();
                                            consultarAdjuntos();
                                        } catch (e) {
                                            $(document).scrollTop(altura);
                                            $("#divAlertWarning").html('<span>' + datos.text + '</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            //ToggleLoading(2);
                                            $("#divAlertInfo").hide();
                                            $("#eliminarSeleccionados").show();
                                        }
                                    },
                                    error: function(objeto, quepaso, otroobj) {
                                        $(document).scrollTop(altura);
                                        $("#divAlertDanger").html('<span>Ocurrio un error al borrar los registros!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                        
                                        $("#divAlertInfo").hide();
                                        $("#eliminarSeleccionados").show();
                                    }
                                });
                            }
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {

                        }
                    }
                }
            });
        };
        
        $(document).on('eliminarSeleccionados','click', function(){
            borrarSeleccionados();
        });
        
        function visorDocumentos() {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 26},
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informaci&oacute;n ... espere.</h3>');
                },
                success: function (data) {
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. '+  otroobj +'</h3>'); 
                    console.log('\nOBJ: '+objeto+ '\nQ: '+quepaso+'\nO:'+otroobj)
                }
            });
        };
        
        function enviar(){
            var strDatos = "accion=generarJson";
                strDatos += "&cveTipo=2"; //2 = actuacion
                strDatos += "&cveTipoDocumento=26"; //tipo documento
                strDatos += "&idActuacion="+$("#idActuacion").val();
                
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    console.log(json);
                    if (json.totalCount > 0) {
                        generaPDF(datos);
                        consultarAdjuntos();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                	//showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            
        };
        
        formato = function (object) {
            var formatos = new Array(".doc", ".docx", ".pdf", ".odt", ".jpg");
            var extension = (object.value.substring(object.value.lastIndexOf("."))).toLowerCase();
            var valido = false;
            var mensaje = "";
            for (var index = 0; index < formatos.length; index++) {
                if (formatos[index] == extension) {
                    valido = true;
                    var imagen = extension.substring(1, extension.sterlen);
                    $("#solicitudFormato").html("<i class='fa fa-file-o'></i>");
                    break;
                } else {
                    valido = false;
                }
            }
            if ( !valido ) {
                mensaje += " El archivo seleccionado no es un formato v&aacute;lido,<br /> los formatos v&aacute;lidos deben ser:<br /><br /> \tdoc, docx, odt , pdf y jpg";
            }
            if (valido) {
                //calcular el peso del archivo
                var pesoKb = Math.round(object.files[0].size/1024,2);
                //alert(pesoKb);
                if ( pesoKb > 4096 ) {
                    valido = false;
                    mensaje += " <br>El archivo supera el tama&ntilde;o m&aacute;ximo permitido de 4Mb, favor de verificar";
                } else {
                    valido = true;
                }
            }
            
            if (!valido) {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(mensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                $("#solicitudFormato").html("");
                return false;
            } else {
                return true;
            }
        };
        
        $(document).ready(function(){
            listaJuzgados();
            cargarJuzgado();
    //        listaRegiones();
    //        listaMaterias();
    //        listaInstancias();
            //cargaTipoCarpeta();
            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');
            cargaCarpetaArbol();
            $("#anio").on('change', function(){
                var mensaje = "";
                var error = false;
                if ( $("#cveJuzgado").val() == "" ) {
                    mensaje += "*Seleccione el juzgado\n";
                    error = true;
                } else if ( $("#cveTipoCarpeta").val() == "" ) {
                    mensaje += "*Seleccione el tipo de carpeta\n";
                    error = true;
                } else if ( $("#numero").val() == "" ) {
                    mensaje += "*Capture el n\u00FAmero de causa\n";
                    error = true;
                } else if ( $("#anio").val() == "" ) {
                    mensaje += "*Capture el a\u00F1o de la causa\n";
                    error = true;
                } else {
                    error = false;
                }
                if ( !error ) {
                    consultarDatosCarpeta();
                    consultarActuaciones();
                } else {
                    alert(mensaje);
                }
                
            });
            $("#fechaInicial").datetimepicker({
                locale: 'es',
                maxDate: new Date(),
                format: 'DD/MM/YYYY'
            });
            
            $("#fechaFinal").datetimepicker({
                locale: 'es',
                maxDate: new Date(),
                format: 'DD/MM/YYYY'  
            });
            
            editor = UE.getEditor('observaciones');
            editor.ready(function () {
                editor.setContent();
            });
            
            $('#fechaInicial').on("dp.change", function (e) {
                $('#fechaFinal').data("DateTimePicker").minDate(e.date);
            });
            
            $('#fechaFinal').on("dp.change", function (e) {
                $('#fechaInicial').data("DateTimePicker").maxDate(e.date);
            });
            var permisos = obtenerPermisosFormulario("CARPETAS JUDICIALES", "CASOS RELEVANTES");
            console.log(permisos);
            if(permisos.Read == 'N'){
                $('#btn_buscar, #anio').prop('disabled',true);
            }
            if(permisos.Create == 'N'){
                $('#btn_guardar').prop('disabled',true);
            }
            if(permisos.Delete == 'N'){
                $('#btn_eliminar').prop("disabled",true);
            }
        });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>