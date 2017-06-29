<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 17/02/2016..
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//print_r($_SESSION);

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

    <input type="hidden" id="hiddenIdIngresoCereso" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
    <input type="hidden" id="hiddenIdPoliciaMinisterial" value="" >
    <input type="hidden" id="hiddenFechaHoraHoy" value="">


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Registro de imputados al cereso
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    
                <div class="form-group"> 
                    <div id="divNumFolio">
                        <label class="control-label col-xs-3 " id="lblRelationName">Folio:</label>
                        <div id="divSinRelacion" class="col-xs-9">
                            <input type="text" class="form-inline" id="txtNumOficio" placeholder="Num" style="text-transform:uppercase;" disabled>/ 
                            <input type="text" class="form-inline" id="txtAniOficio" placeholder="A&ntilde;o" style="text-transform:uppercase;" disabled>
                        </div>                                
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 needed" id="lblRelationName">Carpeta Inv.</label>
                    <div id="divCarpetaInv" class="col-xs-9">
                        <input type="text" id="txtCarpetaInv" class="form-control"  placeholder="Carpeta de investigaci&oacute;n" style="text-transform:uppercase;">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 needed" id="lblRelationName">Oficio de presentaci&oacute;n MP.</label>
                    <div id="divCarpetaInv" class="col-xs-9">
                        <input type="text" id="txtOficioMp" class="form-control"  placeholder="Oficio de presentaci&oacute;n MP" style="text-transform:uppercase;">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 needed" id="lblRelationName">NUC </label>
                    <div id="divCarpetaInv" class="col-xs-9">
                        <input type="text" id="txtNuc" class="form-control"  placeholder="NUC" style="text-transform:uppercase;">
                    </div>                                
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 ">Cereso </label>
                    <div class="col-xs-9">
                        <div id="divCmbCereso" class="logobox"></div>
                        <select class="form-control" name="cmbCereso" id="cmbCereso" disabled>
                        </select>
                    </div>                                
                </div>
                <div class="form-group"> 
                    <div id="divPoliM">
                        <label class="control-label col-xs-3 needed" id="lblRelationName">Datos del policia ministerial.</label>
                        <div id="divSinRelacion" class="col-xs-9">
                            <input type="text" class="form-inline" id="txtPaterno" placeholder="Paterno" style="text-transform:uppercase;"> 
                            <input type="text" class="form-inline" id="txtMaterno" placeholder="Materno" style="text-transform:uppercase;">
                            <input type="text" class="form-inline" id="txtNombre"  placeholder="Nombre" style="text-transform:uppercase;">
                        </div>                                
                    </div>
                </div>

                <div class="form-group"> 
                    <div id="divMinPub">
                        <label class="control-label col-xs-3 needed">Ministerio P&uacute;blico </label>
                        <div class="col-xs-9">
                            <div id="divCmbMinisterioPublico" class="logobox"></div>
                            <select class="form-control" name="cmbMinisterioPublico" id="cmbMinisterioPublico" >
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div> 
                    </div>
                </div>

                <div class="form-group"> <!-- Hora -->
                    <div id="divFechaHora">
                        <label class="control-label col-xs-3 needed">Fecha y hora de ingreso:</label>
                        <div class="col-xs-9"><input type="text" id="txtFechaHora" maxlength="19" placeholder="DD/MM/YYYY HH:mm:ss" class="form-control" data-date-format="DD/MM/YYYY HH:mm:ss"/></div>
                        <div class="col-xs-9"><input type="hidden" id="txtFechaHoraMax" maxlength="19" placeholder="DD/MM/YYYY HH:mm:ss" class="form-control" data-date-format="DD/MM/YYYY HH:mm:ss" value="<?php echo date("d/m/Y") ?>"/></div>
                    </div>
                </div>

                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-xs-3">Fecha Inicio:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-xs-3">Fecha Fin:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy" />
                        </div>
                    </div>    
                </div>

                <div id="divReclusos" class="form-group"> <!-- Imputados --> 
                    <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Recluso </label> 
                    <div class="col-xs-9">
                        <!--<span style="cursor: pointer;" class="glyphicon glyphicon-plus-sign" onclick="agregar(1);"> agregar</span>-->

                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 table-responsive">
                        <!-- inicio acorderon -->

                        <div class="panel-group" id="accordion">
                            <div id="divPestana1" class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Recluso 1</a>
                                        <span align="right" style="cursor: pointer; float:right" class="glyphicon glyphicon-plus-sign" onclick="agregar(1);" alt="agregar recluso"> </span>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class='form-group'> 
                                            <label class='control-label col-xs-3 needed'>Paterno</label>
                                            <div id='divPaternoRecluso' class='col-xs-9'>
                                                <input type='text' id='txtPaternoRecluso1' class='form-control'  placeholder='paterno' style='text-transform:uppercase;'>
                                                <input type="hidden" id="hidIdRecluso1" class="form-control"  value="">
                                            </div>                                
                                        </div>
                                        <div class='form-group'> 
                                            <label class='control-label col-xs-3 '>Materno</label>
                                            <div id='divMaternoRecluso' class='col-xs-9'>
                                                <input type='text' id='txtMaternoRecluso1' class='form-control'  placeholder='Materno ' style='text-transform:uppercase;'>
                                            </div>                                
                                        </div>
                                        <div class='form-group'> 
                                            <label class='control-label col-xs-3 needed'>Nombre</label>
                                            <div id='divNombreRecluso' class='col-xs-9'>
                                                <input type='text' id='txtNombreRecluso1' class='form-control'  placeholder='Nombre recluso' style='text-transform:uppercase;'>
                                            </div>                                
                                        </div>

                                        <div class='form-group'> 
                                            <label class='control-label col-xs-3 '>Alias</label>
                                            <div id='divAlias' class='col-xs-9'>
                                                <input type='text' id='txtAlias1' class='form-control'  placeholder='Alias' style='text-transform:uppercase;'>
                                            </div>                                
                                        </div>
                                        <div class='form-group'> 
                                            <label class='control-label col-xs-3 '>Detenido</label>
                                            <div id='divDetenido' class='col-xs-9'>
                                                <input type='checkbox' id='chkDetenido1' class='form-control' checked="true">
                                            </div>
                                        </div>
                                        <div class='form-group'>                                                                
                                            <label class='control-label col-xs-3 needed'>Genero</label>
                                            <div class='col-xs-9'>
                                                <div id='divGenero1' class='logobox'></div>
                                                <select class='form-control' name='cmbGenero1' id='cmbGenero1' >
                                                    <option value='0'>Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class='form-group'>                                                                
                                            <label class='control-label col-xs-3 needed'>Estado Psicofisico</label>
                                            <div class='col-xs-9'>
                                                <div id='divEdoPsico1' class='logobox'></div>
                                                <select class='form-control' name='cmbEdoPsico1' id='cmbEdoPsico1' >
                                                    <option value='0'>Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div class='form-group'>                                                                
                                            <label class='control-label col-xs-3 needed'>Delito</label>
                                            <div class='col-xs-9'>
                                                <div id='divDelito1' class='logobox'></div>
                                                <select class='form-control' name='cmbDelito1' id='cmbDelito1' onchange="seleccionaDelito(1);" >
                                                    <option value='0'>Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>                                
                                        </div>
                                        <div id="listaDelitos1" class="form-group">
                                            <table id="tblaGral1" class="table table-responsive table-striped table-hover" style="width:95%; margin-left:auto; margin-right:auto;">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Delito</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tablaDelitos1">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>    
                </div>
                <!-- fin acordeon -->
                <div id="divNotas" class="form-group">
                    <label class="control-label col-xs-3">Observaciones:</label>
                    <div class="col-xs-9">
                        <textarea rows="5" id="txtObservaciones" class="form-control" placeholder="Observaciones" style="text-transform:uppercase;"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="validar();" style="display: none">                                    

                        <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="consultarImputadosCer();" style="display: none">                                    
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();">                                    
                        <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultar();" style="display: none">                                    
                        <input type="submit" class="btn btn-primary" id="inputEliminar" value="Eliminar" onclick="eliminarImputado()" style="display: none">                                    
                        <input id="inputImprimir" class="btn btn-primary" type="submit" value="Imprimir" onclick="imprimir('divAcuse');" style="display: none">
                    </div>
                </div>

            </div>

            <br>

            <div class="form-group">
                <div id="divAdvertencia" class="alert alert-warning alert-dismissable" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strAdvertencia"></strong> 
                </div>
                <div id="divCorrecto" class="alert alert-success alert-dismissable" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strCorrecto"></strong> 
                </div>
                <div id="divError" class="alert alert-danger alert-dismissable" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strError"></strong>
                </div>
                <div id="divInformacion" class="alert alert-info alert-dismissable" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strInformacion"></strong>
                </div>
            </div>

            <div class="form-group">
                <div id="divAlertWarning" class="alert alert-warning alert-dismissable">                    
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSucces" class="alert alert-success alert-dismissable">

                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDager" class="alert alert-danger alert-dismissable">

                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfo" class="alert alert-info alert-dismissable">

                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>    

            <br>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                $('#cmbPaginacion').val(1)">                                                    
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarImputadosCer();">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarImputadosCer();">
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

                <div id="divTableResult" class="col-xs-12">
                </div>
            </div>

            <div id="divAcuse" class="col-xs-12" style="overflow: auto; width: 100%; display: none">
                <div id="divTableAcuse" class="col-xs-12">
                </div>
                <div id="divTableAcuseCon" class="col-xs-12">
                </div>
            </div>

        </div>


    </div>
    </div>

    <script type="text/javascript">

        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;      //10170;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;    //2471;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;            //6128;
        var nombreSesion = "<?php echo $_SESSION["nombre"]; ?>";            //6128;

        var procedencia = <?php echo $procedencia; ?>;

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        var numPestana = 1;


        function agregar() {
            numPestana = numPestana + 1;

            var htm = "";

            htm += '<div id="divPestana' + numPestana + '" class="panel panel-default">';
            htm += '  <div class="panel-heading">';
            htm += '    <h4 class="panel-title">';
            htm += '      <a data-toggle="collapse" data-parent="#accordion" href="#collapse' + numPestana + '">Recluso ' + numPestana + '</a>';
            htm += '      <span align="right" style="cursor: pointer; float:right; " class="glyphicon glyphicon-plus-sign" onclick="agregar(1);"> </span> ';
            htm += '      &nbsp; <span align="right" style="cursor: pointer; float:right; margin-right:10px" class="glyphicon glyphicon-minus-sign" onclick="quitarPestana(' + numPestana + ');"> </span>';
            htm += '    </h4>';
            htm += '  </div>';
            htm += '  <div id="collapse' + numPestana + '" class="panel-collapse collapse">';
            htm += '    <div class="panel-body">';

            htm += '<div class="form-group">';
            htm += '    <label class="control-label col-xs-3 needed">Paterno</label>';
            htm += '    <div id="divPaternoRecluso" class="col-xs-9">';
            htm += '        <input type="text" id="txtPaternoRecluso' + numPestana + '" class="form-control"  placeholder="paterno" style="text-transform:uppercase;">';
            htm += '        <input type="hidden" id="hidIdRecluso' + numPestana + '" class="form-control"  value="">';
            htm += '    </div>';
            htm += '</div>';
            htm += '<div class="form-group"> ';
            htm += '    <label class="control-label col-xs-3 ">Materno</label>';
            htm += '    <div id="divMaternoRecluso" class="col-xs-9">';
            htm += '        <input type="text" id="txtMaternoRecluso' + numPestana + '" class="form-control"  placeholder="Materno " style="text-transform:uppercase;">';
            htm += '    </div>';
            htm += '</div>';
            htm += '<div class="form-group"> ';
            htm += '    <label class="control-label col-xs-3 needed">Nombre</label>';
            htm += '    <div id="divNombreRecluso" class="col-xs-9">';
            htm += '        <input type="text" id="txtNombreRecluso' + numPestana + '" class="form-control"  placeholder="Nombre recluso" style="text-transform:uppercase;">';
            htm += '    </div>';
            htm += '</div>';

            htm += '<div class="form-group">';
            htm += '	<label class="control-label col-xs-3 ">Alias</label>';
            htm += '	<div id="divAlias' + numPestana + '" class="col-xs-9">';
            htm += '            <input type="text" id="txtAlias' + numPestana + '" class="form-control"  placeholder="Alias" style="text-transform:uppercase;">';
            htm += '        </div>';
            htm += '    </div>';
            htm += '    <div class="form-group"> ';
            htm += '	<label class="control-label col-xs-3 ">Detenido</label>';
            htm += '	<div id="divDetenido' + numPestana + '" class="col-xs-9">';
            htm += '            <input type="checkbox" id="chkDetenido' + numPestana + '" class="form-control" checked="true">';
            htm += '        </div>';
            htm += '    </div>';
            htm += '    <div class="form-group">';
            htm += '        <label class="control-label col-xs-3 needed">Genero:</label>';
            htm += '        <div class="col-xs-9">';
            htm += '            <div id="divGenero' + numPestana + '" class="logobox"></div>';
            htm += '            <select class="form-control" name="cmbGenero' + numPestana + '" id="cmbGenero' + numPestana + '" >';
            htm += '                <option value="0">Seleccione una opci&oacute;n</option>';
            htm += '            </select>';
            htm += '        </div>';
            htm += '    </div>';
            htm += '    <div class="form-group">';
            htm += '        <label class="control-label col-xs-3 needed">Estado Psicofisico:</label>';
            htm += '        <div class="col-xs-9">';
            htm += '            <div id="divEdoPsico' + numPestana + '" class="logobox"></div>';
            htm += '            <select class="form-control" name="cmbEdoPsico' + numPestana + '" id="cmbEdoPsico' + numPestana + '" >';
            htm += '                <option value="0">Seleccione una opci&oacute;n</option>';
            htm += '            </select>';
            htm += '        </div>';
            htm += '    </div>';

            htm += '<div class="form-group">';
            htm += '    <label class="control-label col-xs-3 needed">Delito</label>';
            htm += '    <div class="col-xs-9">';
            htm += '        <div id="divDelito' + numPestana + '" class="logobox"></div>';
            htm += '        <select class="form-control" name="cmbDelito' + numPestana + '" id="cmbDelito' + numPestana + '" onchange="seleccionaDelito(' + numPestana + ');" >';
            htm += '            <option value="0">Seleccione una opci&oacute;n</option>';
            htm += '        </select>';
            htm += '    </div>';
            htm += '</div>';
            htm += '<div id="listaDelitos' + numPestana + '" class="form-group">';
            htm += '    <table id="tblaGral' + numPestana + '" class="table table-responsive table-striped table-hover" style="width:95%; margin-left:auto; margin-right:auto;">';
            htm += '        <thead>';
            htm += '            <tr>';
            htm += '                <th colspan="2">Delito</th>';
            htm += '            </tr>';
            htm += '        </thead>';
            htm += '        <tbody id="tablaDelitos' + numPestana + '">';
            htm += '        </tbody>';
            htm += '    </table>';
            htm += '</div>';

            htm += '    </div>';
            htm += '  </div>';
            htm += '</div>';

            $('#accordion').append(htm);

            fillCombo(['cmbGenero' + numPestana], 'generos/GenerosFacade', 'cveGenero', 'desGenero');
            fillCombo(['cmbEdoPsico' + numPestana], 'estadospsicofisicos/EstadospsicofisicosFacade', 'cveEstadoPsicofisico', 'desEstadoPsicofisico');
            fillCombo(['cmbDelito' + numPestana], 'delitos/DelitosFacade', 'cveDelito', 'desDelito');

        }

        function seleccionaDelito(pestana) {
            var opcionTxt = $('#cmbDelito' + pestana).find('option:selected').text();
            var opcionId = $('#cmbDelito' + pestana).find('option:selected').val();
            var idRenglon = "";
            var existeDelito = false;

            $.each($('.renglonDelito'), function (llave2, valor2) {
                idRenglon = $(this).prop('id');
                if (idRenglon == (pestana + '/' + opcionId)) {
                    existeDelito = true;
                    return;
                }
            });

            if (!existeDelito) {
                var renglonDelito = '<tr id="' + pestana + '/' + opcionId + '" class="renglonDelito">';
                renglonDelito += '<td style="width:90%;">' + opcionTxt + '</td>';
                renglonDelito += '<td style="width:10%;">';
                renglonDelito += '<button class="btn btn-danger" onclick="$(this).parent().parent().remove(); " type="button">';
                renglonDelito += '<span class="glyphicon glyphicon-trash " aria-hidden="true"></span>';
                renglonDelito += '</button>';
                renglonDelito += '</td>';
                renglonDelito += '</tr>';

                $('#tablaDelitos' + pestana).append(renglonDelito);
            }

        }




        function quitarPestana(div) {
    //        alert(div);
            $("#divPestana" + div).html("");
            $("#divPestana" + div).remove();
        }

        function fillCombo(selectIds, facade, value, description) {
            $.each(selectIds, function (k, v) {
                $('#' + v).empty();
            });
            $.post('../fachadas/sigejupe/' + facade + '.Class.php',
                    {
                        activo: 'S',
                        accion: 'consultar'
                    },
            function (response) {
                var object = eval("(" + response + ")");
                var options = '<option value="0">Seleccione una opci&oacute;n</option>';
                if (object.totalCount > 0) {
                    $.each(object.data, function (k, v) {
                        options += '<option value="' + v[value] + '">' + v[description] + '</option>';
                    });
                    $.each(selectIds, function (k, v) {
                        $('#' + v).append(options);
                    });
                } else {
                    showMessage('No existen registros', 'warning');
                }
            });
            return;
        }

        cargaAdscripciones = function () {

            var strDatos = "accion=listarAdscripciones";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {

                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbMinisterioPublico").append($('<option></option>').val(json.data[i].cveAdscripcion).html(json.data[i].nomAdscripcion));
                        }
                    }
                    $('#divCmbRelaciones').hide();

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        cargaCereso = function () {

            var strDatos = "accion=consultarDescripciones";
            strDatos += "&cveAdscripcion=" + juzgadoSesion;
            strDatos += "&pag=1";
            strDatos += "&cantxPag=10";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ceresosadscripciones/CeresosadscripcionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
    //                alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbCereso").append($('<option></option>').val(json.data[i].cveCereso).html(json.data[i].desCereso));
                        }
                    } else {
                        $("#cmbCereso").append($('<option></option>').val(0).html("<font color='#FF0000'> VERIFIQUE QUE EL JUZGADO TENGA UN CERESO RELACIONADO </font>"));
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };


        validar = function () {

            var idIngresoCereso = $("#txtCarpetaInv").val();
            var carpetaInv = $("#txtCarpetaInv").val();
            var oficio = $("#txtOficioMp").val();
            var nuc = $("#txtNuc").val();
            var cveCereso = $("#cmbCereso").val();
            var paterno = $("#txtPaterno").val();
            var materno = $("#txtMaterno").val();
            var nombre = $("#txtNombre").val();
            var cveAdscripcionMP = $("#cmbMinisterioPublico").val();
            var FechaHoraIngreso = $("#txtFechaHora").val();
            //************ obtener valores de recluso *********************
            var detenido = "";
            var idRecluso = "";
            var paternoRecluso = "";
            var maternoRecluso = "";
            var nombreRecluso = "";
            var generoRecluso = "";
            var edoRecluso = "";
            var alias = "";
            var error = 0;
            var mensaje = "";

            $("#accordion").find(':input').each(function () {
                var elemento = this;
                var str = elemento.id;
                var res = str.substring(0, 6);

                if (res == "chkDet") {
                    if ($('#' + elemento.id).prop('checked')) {
                        detenido += "S,";
                    } else {
                        detenido += "N,";
                    }

                } else if (res == "txtPat") {
    //                alert(str+" - "+elemento.value); txtPaternoRecluso1 
                    if (elemento.value == "") {
                        var str2 = elemento.id;
                        var num = 0;
                        num = str2.substring(17, (str2.length));
                        error = 100; // error de reclusos
                        mensaje += " - Paterno de recluso: " + num;

                    }
                    paternoRecluso += elemento.value + ",";
                } else if (res == "txtMat") {
                    maternoRecluso += elemento.value + ",";
                } else if (res == "txtNom") {
                    if (elemento.value == "") {
                        var str2 = elemento.id;
                        var num = 0;
                        num = str2.substring(16, (str2.length));
                        error = 100; // error de reclusos
                        mensaje += " - Nombre de Recluso: " + num;

                    }
                    nombreRecluso += elemento.value + ",";
                } else if (res == "cmbGen") {
                    if (elemento.value == 0) {
                        var str2 = elemento.id;
                        var num = 0;
                        num = str2.substring(9, (str2.length));
                        error = 100; // error de reclusos
                        mensaje += " - Genero Recluso: " + num;

                    }

                    generoRecluso += elemento.value + ",";
                } else if (res == "cmbEdo") {
                    if (elemento.value == 0) {
                        var str2 = elemento.id;
                        var num = 0;
                        num = str2.substring(11, (str2.length));
                        error = 100; // error de reclusos
                        mensaje += " - Estado psicofisco Recluso: " + num;

                    }
                    edoRecluso += elemento.value + ",";
                } else if (res == "txtAli") {
                    alias += elemento.value + ",";
                } else if (res == "hidIdR") {
                    idRecluso += elemento.value + ",";
                }

            });

            // recorrer delitos
            var idRenglon = '';
            var conjuntodelitos = "";
            var delitosTabla = "";

            $('#accordion table').each(function () {
    //            alert(this.id); 
                delitosTabla = "";
                $(this).find('tr').each(function () {
                    idRenglon = $(this).prop('id');
    //                  alert("eliminar: "+idRenglon);
                    if (idRenglon != "") {
                        conjuntodelitos += idRenglon + ",";
                        delitosTabla += idRenglon + ",";
                    }
                });

                if (delitosTabla == "") {
                    var strId = this.id;
                    var recluso = strId.substring((strId.length - 1));
                    error = 100;
                    mensaje += "   - Debe tener almenos un delito el recluso " + recluso;
                }

            });


            var str2 = detenido;
            detenido = str2.substring(0, (str2.length - 1));

            str2 = paternoRecluso;
            paternoRecluso = str2.substring(0, (str2.length - 1));

            str2 = maternoRecluso;
            maternoRecluso = str2.substring(0, (str2.length - 1));

            str2 = nombreRecluso;
            nombreRecluso = str2.substring(0, (str2.length - 1));

            str2 = generoRecluso;
            generoRecluso = str2.substring(0, (str2.length - 1));

            str2 = edoRecluso;
            edoRecluso = str2.substring(0, (str2.length - 1));

            str2 = alias;
            alias = str2.substring(0, (str2.length - 1));

            str2 = idRecluso;
            idRecluso = str2.substring(0, (str2.length - 1));

            str2 = conjuntodelitos;
            conjuntodelitos = str2.substring(0, (str2.length - 1));

    //        alert("D: "+detenido+"\n P: "+paternoRecluso+"\n M: "+maternoRecluso+"\n N: "+nombreRecluso+"\n A: "+alias+"\n G: "+generoRecluso+"\n E: "+edoRecluso+"\n del: "+conjuntodelitos);

            //************* obtener valores de recluso ********************

            var observaciones = $("#txtObservaciones").val();

            var cveAccion = 255; // insercion acuerdo BITACORA
            var strDatos = "";


            if (carpetaInv == "") {
                error = 1;
                mensaje += "   - Carpeta de investigaci&oacute;n";
            }
            if (oficio == "") {
                error = 2;
                mensaje += "   - Oficio";
            }
            if (nuc == "") {
                error = 3;
                mensaje += "   - NUC";
            }
            if (cveCereso == 0) {
                error = 4;
                mensaje += "   - verifique que el juzgado tenga relacionado un cereso";
            }

            if (paterno == "") {
                error = 5;
                mensaje += "   - Apellido paterno del policia ministerial";
            }
            if (nombre == "") {
                error = 6;
                mensaje += "   - Nombre del policia ministerial";
            }

            if (FechaHoraIngreso == "") {
                error = 7;
                mensaje += "   - Fecha de ingreso al cereso";
            }
            if (cveAdscripcionMP == 0) {
                error = 6;
                mensaje += "   - Ministerio Publico";
            }

            if (error == 0) {
                if ($("#hiddenIdIngresoCereso").val() != "" || $("#hiddenIdIngresoCereso").val() != 0) {
                    cveAccion = 256; //modificacion ingreso a cereso
                }
                strDatos = "accion=guardarIngresoCereso"; // accion que guarda actuaciones
                strDatos += "&idIngresoCereso=" + $("#hiddenIdIngresoCereso").val();
                strDatos += "&carpetaInv=" + carpetaInv;
                strDatos += "&oficio=" + oficio;
                strDatos += "&nuc=" + nuc;
                strDatos += "&cveCereso=" + cveCereso;
                strDatos += "&idPoliciaMinisterial=" + $("#hiddenIdPoliciaMinisterial").val();
                strDatos += "&paterno=" + paterno;
                strDatos += "&materno=" + materno;
                strDatos += "&nombre=" + nombre;
                strDatos += "&cveAdscripcionMP=" + cveAdscripcionMP;
                strDatos += "&FechaHoraIngreso=" + FechaHoraIngreso;
                strDatos += "&detenido=" + detenido;
                strDatos += "&paternoRecluso=" + paternoRecluso;
                strDatos += "&maternoRecluso=" + maternoRecluso;
                strDatos += "&nombreRecluso=" + nombreRecluso;
                strDatos += "&generoRecluso=" + generoRecluso;
                strDatos += "&alias=" + alias;
                strDatos += "&edoRecluso=" + edoRecluso;
                strDatos += "&conjuntodelitos=" + conjuntodelitos;
                strDatos += "&observaciones=" + observaciones;
                strDatos += "&detenido=" + detenido;
                strDatos += "&idRecluso=" + idRecluso;
                strDatos += "&cveAccion=" + cveAccion;//----> tipo actuacion acuerdo = 2
                strDatos += "&cveJuzgado=" + juzgadoSesion;
                strDatos += "&cveUsuario=" + cveUsuarioSesion;
                strDatos += "&cvePerfil=" + cvePerfilSesion;
                strDatos += "&activo=S";

                guardarIngresoCereso(strDatos);



            } else {
                $("#divInformacion").show();
                $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divInformacion");
            }

        };

        function validaDelitos() {
            var idRenglon = '';
            var idDelito = '';
            var idTabla = '';
            var arregloDelitos = '';
            var estado = false;
            var test = $(' table [id^=tablaDelitos]').each(function (k, v) {
                var arregloDelitos = new Array();
                idTabla = $(this).prop('id');
                $(this).find('tr').each(function () {
                    idRenglon = $(this).prop('id');
                    idDelito = idRenglon.split('/')[1];
                    arregloDelitos[k] = idDelito;
                });
                if (arregloDelitos.length == 0) {
                    alert("entro a condicion");
                    estado = false;
                } else {
                    estado = true;
                }

            });

            return estado;
        }

        guardarIngresoCereso = function (strDatos) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                           alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //alert(json.text);
                        $("#divHideForm").hide();
                        $("#divAlertSucces").html("Correcto!: " + json.text);
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");

                        $("#hiddenIdIngresoCereso").val(json.data[0].idIngresoCereso);
                        consutaIdIngresoCereso(json.data[0].idIngresoCereso);

                        //*********************

                    } else {
                        //alert(json.text);
                        $("#divHideForm").hide();
                        $("#divAlertDager").html(json.text);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

        };

        consultar = function () {
            $("#divRangoFechas").show();
            $("#inputRegresar").show();
            $("#inputBuscar").show();
            $("#divNotas").hide();
            $("#inputGuardar").hide();
            $("#inputConsultar").hide();
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#divBuscaPromocion").hide();
            $("#divConsultaActuaciones").hide();
            $("#divReclusos").hide();
            $("#divMinPub").hide();
            $("#divPoliM").hide();
            $("#divFechaHora").hide();

            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de imputados al cereso </span> / Consulta  imputados al cereso ");

        };

        regresar = function (bndSelecciono) {
            $("#divRangoFechas").hide();
            $("#inputRegresar").hide();
            $("#inputBuscar").hide();
            $("#divNotas").show();
            $("#inputConsultar").show();
            $("#cmbPaginacion").val(1);
            $("#divBuscaPromocion").hide();

            $("#divReclusos").show();
            $("#divMinPub").show();
            $("#divPoliM").show();
            $("#divFechaHora").show();

            if (String(createRecord) === "S") {
                $("#inputGuardar").show();
            }
            if (deleteRecord == "S") {
                $("#inputEliminar").show();
            }
    //        $("#inputEliminar").show();
            //$("#inputGuardar").show();
            //$("#inputImprimir").show();
            $("#h5titulo").html("<span>Registro de imputados al cereso</span>");
        };

        getPaginas = function (pag, cantReg) {

            var strDatos = "accion=getPaginas";
            strDatos += "&numero=" + $("#txtCarpetaInv").val();
            strDatos += "&anio=" + $("#txtOficioMp").val();
            strDatos += "&carpetaInv=" + $("#txtCarpetaInv").val();
            strDatos += "&oficio=" + $("#txtOficioMp").val();
            strDatos += "&nuc=" + $("#txtNuc").val();
            if ($("#txtCarpetaInv").val() == "" && $("#txtOficioMp").val() == "" && $("#txtNuc").val() == "") {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&cveCereso=" + $("#cmbCereso").val();
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";
    //        strDatos += "&cveTipoResolucion=" + $("#txtNuc").val();
    //        strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
    //        strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
    //        strDatos += "&cveCereso=" + $("#cmbCereso").val();
    //        strDatos += "&activo=S";
    //        strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
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

        consultarImputadosCer = function () {

            //**************************** consulta de acuerdos *************************************
            var pag = $("#cmbPaginacion").val()
            var cantReg = $("#cmbNumReg").val();

            var strDatos = "accion=consultarImputadosCereso";

            strDatos += "&carpetaInv=" + $("#txtCarpetaInv").val();
            strDatos += "&oficio=" + $("#txtOficioMp").val();
            strDatos += "&nuc=" + $("#txtNuc").val();
            if ($("#txtCarpetaInv").val() == "" && $("#txtOficioMp").val() == "" && $("#txtNuc").val() == "") {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&cveCereso=" + $("#cmbCereso").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";
    //        strDatos += "&FechaHoraIngreso=" + $("#txtFechaHora").val();


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                                            alert(datos);

                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {

                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Carpeta de Investigacion</th>";
                        table += "<th>Agente</th>";
                        table += "<th>Ministerio Publico</th>";
                        table += "<th>Fecha Ingreso</th>";
    //                    table += "<th>Fecha Registro</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<tr onclick=\"consutaIdIngresoCereso('" + json.data[i].idIngresoCereso + "')\" >";
                            table += "<td> " + (i + 1) + "</td>";
                            table += "<td>" + json.data[i].carpetaInv + "</td>";

                            $.each(json.data[i].policiaMinisterial, function (k, poli) {
                                table += "<td width='25%'>" + poli.nombre + " " + poli.paterno + " " + poli.materno + "</td>";
                                table += "<td>" + poli.nomAdscripcion + "</td>";
                            });

                            table += "<td>" + json.data[i].FechaHoraIngreso + "</td>";

                            table += "</tr> ";
    //                                                    alert(json.data[i].observaciones);
                        }
                        table += "</tbody>";
                        table += "</table>";

                        $("#divHideForm").hide();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable(
                                {
                                    paging: false
                                }
                        );

                        getPaginas(json.pagina, cantReg);
                        changeDivForm(2);

                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de imputados al cereso</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta imputados al cereso</span> / Resultados");
    //
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }


                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //**************************** consulta de oficios *************************************
        };

        regresar2 = function () {
            changeDivForm(1);
            regresar();
        };

        regresarConsultar = function () {
            changeDivForm(1);
            $("#cmbPaginacion").val(1);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de imputados al cereso</span> / <span>Consulta imputados al cereso</span>");
        }

        consutaIdIngresoCereso = function (id) {
            limpiarDelitos();
            limpiarAcordion();
            changeDivForm(1);
            var strDatos = "accion=consultarImputadosCereso"; //seleccionar
            strDatos += "&idIngresoCereso=" + id;
            strDatos += "&pag=1";
            strDatos += "&cantxPag=2";        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                  alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //alert(json.text);
                        //regresar();
                        $("#hiddenIdIngresoCereso").val(json.data[0].idIngresoCereso);
                        $("#txtCarpetaInv").val(json.data[0].carpetaInv);
                        $("#txtOficioMp").val(json.data[0].oficio);
                        $("#txtNuc").val(json.data[0].nuc);
                        $("#cmbCereso").val(json.data[0].cveCereso);
                        $("#txtFechaHora").val(json.data[0].FechaHoraIngreso);
                        $("#txtObservaciones").val(json.data[0].observaciones);
                        $("#txtNumOficio").val(json.data[0].numOficio);
                        $("#txtAniOficio").val(json.data[0].aniOficio);

                        $.each(json.data[0].policiaMinisterial, function (k, poli) {
                            $("#hiddenIdPoliciaMinisterial").val(poli.idPoliciaMinisterial);
                            $("#txtPaterno").val(poli.paterno);
                            $("#txtMaterno").val(poli.materno);
                            $("#txtNombre").val(poli.nombre);
                            $("#cmbMinisterioPublico").val(poli.cveAdscripcionMP);
                        });

                        var pestana = 1;
                        $.each(json.data[0].recluso, function (k, rec) {

                            if (pestana == 1) {
    //                            setTimeout(function(){

                                $("#hidIdRecluso1").val(rec.idRecluso);
                                $("#txtPaternoRecluso1").val(rec.paterno);
                                $("#txtMaternoRecluso1").val(rec.materno);
                                $("#txtNombreRecluso1").val(rec.nombre);
                                $("#txtAlias1").val(rec.alias);
                                if (rec.detenido == "S") {
                                    $("#chkDetenido1").attr("checked", true);
                                    document.getElementById("chkDetenido1").checked = true;
    //                            alert("<<"+rec.detenido+">>");
                                } else {
                                    $("#chkDetenido1").attr("checked", false);
                                }

    //                            $("#txtDetenido").val(rec.Sintesis);
                                $("#cmbGenero1").val(rec.cveGenero);
                                $("#cmbEdoPsico1").val(rec.cveEstadoPsicofisico);
                                //************* recorrer delitos por recluso *****************************
                                $.each(rec.delitos, function (w, del) {
    //                                    alert(del.cveDelito+" - pestaña: "+pestana);
                                    var renglonDelito = '<tr id="' + pestana + '/' + del.cveDelito + '" class="renglonDelito">';
                                    renglonDelito += '<td style="width:90%;">' + del.desDelito + '</td>';
                                    renglonDelito += '<td style="width:10%;">';
                                    renglonDelito += '<button class="btn btn-danger" onclick="$(this).parent().parent().remove(); " type="button">';
                                    renglonDelito += '<span class="glyphicon glyphicon-trash " aria-hidden="true"></span>';
                                    renglonDelito += '</button>';
                                    renglonDelito += '</td>';
                                    renglonDelito += '</tr>';

                                    $('#tablaDelitos' + pestana).append(renglonDelito);

                                });

                                //************* recorrer delitos por recluso *****************************

    //                            }, 2000);
                            } else {
                                agregar();
                            }
                            pestana++;
                        });

                        regresar(1);
                        setTimeout(function () {
                            muestraReclusos(json.data[0].recluso);
                        }, 3000);

    //                    $('#collapse').addClass('in');
    //                    $("#reclusoCheck").attr("checked", true);
                        if (deleteRecord == "S") {
                            $("#inputEliminar").show();
                        }

                        verAcuse(json);
                        $("#inputImprimir").show();

                    } else {
                        $("#divAlertInfo").html('NO EXISTE INFORMACION DEL ACUERDO');
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        verAcuse = function (json) {
            var numDel = 0;
            var table = '';


            table += "<table width='100%' id='tblResultadosGridAcuse'  class='table table-hover table-striped table-bordered'>";

            table += "<tbody>";
            table += "<tr>";
            table += "<td><b>Num Oficio:</b> " + json.data[0].numOficio + "/" + json.data[0].aniOficio + " </td>";
            table += "<td> <b>Cereso:</b> " + $("#cmbCereso option:selected").text() + " </td>"; //cmbCereso
            table += "</tr>";
            table += "<tr>";
            table += "<td><b>Usuario:</b> " + nombreSesion + " </td>";
            table += "<td><b>Fecha de Ingreso:</b> " + json.data[0].FechaHoraIngreso + " </td>"; //cmbCereso
            table += "</tr>";
            table += "</tbody>";
            table += "</table>";
            table += "</br>";

    //        $("#divAcuse").show();
            $("#divTableAcuse").html(table);

            table = '';
            table += "<table width='100%' id='tblResultadosGridAcuseCon'  class='table table-hover table-striped table-bordered'>";
    //        table += "<thead>";
    //        table += "<tr>";
    //        table += "<th></th>";
    //        table += "<th></th>";
    //        table += "</tr>";
    //        table += "</thead>";
            table += "<tbody>";
            table += "<tr>";
            table += "<td><b>Ministerio Publico: </b>" + $("#cmbMinisterioPublico option:selected").text() + " </td>";
            table += "<td><b> Agente:</b> " + json.data[0].policiaMinisterial[0].nombre + " " + json.data[0].policiaMinisterial[0].paterno + " " + json.data[0].policiaMinisterial[0].materno + " </td>"; //cmbCereso
            table += "</tr>";
            table += "<tr>";
            table += "<td colspan='2'><b>Carpeta Inv:</b> " + json.data[0].carpetaInv + " </td>";
    //        table += "<td></td>"; //cmbCereso
            table += "</tr>";

            $.each(json.data[0].recluso, function (k, rec) {
                table += "<tr>";
                table += "<td><b>Nombre: </b>" + rec.nombre + " " + rec.paterno + " " + rec.materno + "</td>";
                table += "<td><b>Genero: </b>" + rec.desGenero + "</td>";
                table += "</tr>";
                table += "<tr>";
                table += "<td colspan='2'><b>Delitos:</b> </td>";
                table += "</tr>";

                table += "<tr>";
                table += "<td colspan='2'>";
                table += "<table width='100%'>";

                $.each(rec.delitos, function (w, del) {
                    table += "<tr >";
                    table += "<td >&nbsp;- &nbsp;" + del.desDelito + ".</td>";
                    table += "</tr>";
                    numDel = numDel + 1;
                });

                table += "</table>";
                table += "</td>";
                table += "</tr>";

            });

            table += "<tr>";
            table += "<td align='center' > <b>TOTAL IMPUTADOS: </b>" + (json.data[0].recluso.length) + " </td>";
            table += "<td align='center' > <b>TOTAL DELITOS: </b>" + (numDel) + " </td>";
            table += "</tr>";

            table += "</tbody>";
            table += "</table>";

            $("#divTableAcuseCon").html(table);

        };

        imprimir = function (div) {
            var table = '';
            table += ' <style>  border-collapse:collapse;';

            table += '     table {';
            table += '         border: solid #000 !important;';
            table += '         border-width: 1px 0 0 1px !important;';
            table += '         font-family: Arial;';
            table += '         font-size: 12px;';
            table += '     }';
            table += '     th, td {';
            table += '         border: solid #000 !important;';
            table += '         border-width: 0 1px 1px 0 !important;';
            table += '     }';
            table += '   @media print {';

            table += '     table { border-collapse:collapse;';
            table += '         font-family: Arial;';
            table += '         font-size: 12px;';
            table += '         border: solid #000 !important;';
            table += '         border-width: 1px 0 0 1px !important;';
            table += '     }';
            table += '     th, td {';
            table += '         border: solid #000 !important;';
            table += '         border-width: 0 1px 1px 0 !important;';
            table += '     }';
            table += ' } </style>';

            var divContents = $("#" + div).html();
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            divContents = divContents.replace(/<input(.*?)>/g, '');
            divContents = divContents.replace(/Buscar:/g, '');
            divContents += "<br><br>Fecha y hora de impresion:  " + $("#hiddenFechaHoraHoy").val();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head>' + table + '<title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img  src="img/encabezado.jpg"></center> <br><center><label><b>Comprobante Ingreso al Cereso</b></label></center> <br><br>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        };


        muestraReclusos = function (reclusos) {
            var pestana = 1;
            $.each(reclusos, function (k, rec) {
                if (pestana != 1) { // diferente de pesta�a uno
                    $("#hidIdRecluso" + pestana).val(rec.idRecluso);
                    $("#txtPaternoRecluso" + pestana).val(rec.paterno);
                    $("#txtMaternoRecluso" + pestana).val(rec.materno);
                    $("#txtNombreRecluso" + pestana).val(rec.nombre);
                    $("#txtAlias" + pestana).val(rec.alias);

                    if (rec.detenido == "S") {
                        $("#chkDetenido" + pestana).attr("checked", true);
                    } else {
                        $("#chkDetenido" + pestana).attr("checked", false);
                    }
    //                            alert("#cmbGenero"+pestana+" - "+"#cmbEdoPsico"+pestana);

                    $("#cmbGenero" + pestana).val(rec.cveGenero);
                    $("#cmbEdoPsico" + pestana).val(rec.cveEstadoPsicofisico);

                    //************* recorrer delitos por recluso *****************************
                    $.each(rec.delitos, function (w, del) {
    //                                    alert(del.cveDelito+" - pestaña: "+pestana);
                        var renglonDelito = '<tr id="' + pestana + '/' + del.cveDelito + '" class="renglonDelito">';
                        renglonDelito += '<td style="width:90%;">' + del.desDelito + '</td>';
                        renglonDelito += '<td style="width:10%;">';
                        renglonDelito += '<button class="btn btn-danger" onclick="$(this).parent().parent().remove(); " type="button">';
                        renglonDelito += '<span class="glyphicon glyphicon-trash " aria-hidden="true"></span>';
                        renglonDelito += '</button>';
                        renglonDelito += '</td>';
                        renglonDelito += '</tr>';

                        $('#tablaDelitos' + pestana).append(renglonDelito);

                    });

                    //************* recorrer delitos por recluso *****************************

                }
                pestana++;
            });
        };

        eliminarImputado = function () {

            if ($("#hiddenIdIngresoCereso").val() != "") {

                bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar el registro??",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {

                                var strDatos = "accion=bajaIngresoCereso";
                                strDatos += "&idIngresoCereso=" + $("#hiddenIdIngresoCereso").val();
                                strDatos += "&cveAccion=257"; //eliminacion de acuerdos
                                strDatos += "&activo=N";

                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
                                    data: strDatos,
                                    async: true,
                                    dataType: "html",
                                    beforeSend: function (objeto) {
                                        //                ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //                          alert(datos);
                                        var json = "";
                                        json = eval("(" + datos + ")"); //Parsear JSON

                                        if (json.totalCount > 0) {
                                            //alert(json.text);
                                            $("#divHideForm").hide();
                                            $("#divAlertSucces").html("ELIMINACION CORRECTA");
                                            $("#divAlertSucces").show("slide");
                                            setTimeAlert("divAlertSucces");

                                            limpiar();

                                        } else {
                                            //alert(json.text);
                                        }

                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                        $("#divAlertDager").show("slide");
                                        setTimeAlert("divAlertDager");
                                    }
                                });
                            }
                        },
                        success: {
                            label: "Cancelar!",
                            className: "btn-primary",
                            callback: function () {

                            }
                        }

                    }
                });

            } else {
                $("#divAlertDager").html("NO HA SELECCIONADO UN REGISTRO");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };

        limpiar = function () {
            $("#inputImprimir").hide();
            $("#divTableAcuse").html("");
            $("#txtNumOficio").val("");
            $("#txtAniOficio").val("");
            $("#txtCarpetaInv").val("");
            $("#txtOficioMp").val("");
            $("#txtNuc").val("");
            $("#txtPaterno").val("");
            $("#txtMaterno").val("");
            $("#txtNombre").val("");
            $("#cmbMinisterioPublico").val(0);
            $("#txtFechaHora").val("");
            $("#hiddenIdIngresoCereso").val("");
            $("#reclusoCheck").attr("checked", false);
            $('#collapse').removeClass('in');

            $("#txtObservaciones").val("");

            $("#txtfechaInicial").val($("#hiddenFechaActual").val());
            $("#txtfechaFinal").val($("#hiddenFechaActual").val());

            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#divTableResultActuaciones").html("");

            $("#inputEliminar").hide();

            $("#accordion").find(':input').each(function () {
                var elemento = this;
                var str = elemento.id;
                var res = str.substring(0, 6);

                if (res == "chkDet") {
                    if ($('#' + elemento.id).prop('checked')) {
                        $('#' + elemento.id).attr("checked", false);
                    }

                } else if (res == "txtPat") {
    //                alert(str+" - "+elemento.value);
                    elemento.value = "";
                } else if (res == "txtMat") {
                    elemento.value = "";
                } else if (res == "txtNom") {
                    elemento.value = "";
                } else if (res == "cmbGen") {
                    elemento.value = 0;
                } else if (res == "cmbEdo") {
                    elemento.value = 0;
                } else if (res == "txtAli") {
                    elemento.value = "";
                } else if (res == "cmbDel") {
                    elemento.value = 0;
                }


            });

            limpiarDelitos();
            limpiarAcordion();

        };

        limpiarDelitos = function () {
            var idRenglon = '';
            $('#accordion table').each(function () {
    //            alert(this.id); 
                $(this).find('tr').each(function () {
                    idRenglon = $(this).prop('id');
    //                                        alert("eliminar: "+idRenglon);
                    $(".renglonDelito").remove();
                });
            });
        }

        limpiarAcordion = function () {
            numPestana = 1;
            $("#accordion").find('div').each(function () {

                var elemento = this;
                var str = elemento.id;
                var res = str.substring(0, 6);

                if (res == "divPes") {
    //                alert(str+" - "+elemento.id);
                    var str2 = elemento.id;
                    var num = 0;
                    num = str2.substring(10, (str2.length));
    //                alert(num);
                    if (num != 1) {
                        $("#divPestana" + num).html("");
                        $("#divPestana" + num).remove();
                    }
                }



            });
        };


        function obtenerPermisos() {
            var cveUsuarioSistema = cveUsuarioSesion;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
    //                    alert(response.perfiles[0].totPerfiles);
    //                   alert(cvePerfilSesion+" - ");
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                //alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    //alert(vnombre.nomFormulario);
                                    if (vnombre.nomFormulario == "CERESOS") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'MODULO DE REGISTRO DE IMPUTADOS AL CERESO') {
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
    //                    alert("insert: "+createRecord+" consulta: "+readRecord+" act: "+updateRecord+" elim: "+deleteRecord);

                        if (String(createRecord) === "S") {
                            $("#inputGuardar").show();
                        }
                        if (readRecord == "S") {
                            $("#inputConsultar").show();
                        }
                        if (updateRecord == "S") {
                            // $("#inputGuardar").show();
                        }
    //                    if (deleteRecord == "S") {
    //                        $("#inputEliminar").show();
    //                    }


                    });
        }
        //*********************************************************************************************************************
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);

        //*********************************************************************************************************************

        $(function () {

            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');

            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );

            $('#txtFechaHora').datetimepicker({locale: 'es', format: "yyyy-mm-dd hh:ii:00"}).on('dp.change', function (e) {
                $('#txtFechaHoraMax').data("DateTimePicker").minDate(e.date);
            });
            $('#txtFechaHoraMax').datetimepicker({locale: 'es', format: "yyyy-mm-dd hh:ii:00"}).on('dp.change', function (e) {
                $('#txtFechaHora').data("DateTimePicker").maxDate(e.date);
            });

            cargaAdscripciones();
            cargaCereso();
            fillCombo(['cmbGenero1'], 'generos/GenerosFacade', 'cveGenero', 'desGenero');
            fillCombo(['cmbEdoPsico1'], 'estadospsicofisicos/EstadospsicofisicosFacade', 'cveEstadoPsicofisico', 'desEstadoPsicofisico');
            fillCombo(['cmbDelito1'], 'delitos/DelitosFacade', 'cveDelito', 'desDelito');

            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
                if ($("#hiddenIdActuacion").val() != 0) {
                    consutaIdAcuerdo($("#hiddenIdActuacion").val(), "");
                } else if ($("#hiddenIdCarpetaJudicial").val() != 0) {
                    consultaCarpetaJud($("#hiddenIdCarpetaJudicial").val());
                }

            }

            obtenerPermisos();

            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });

            $("#txtfechaInicial").datepicker({
                showButtonPanel: true,
                onClose: function (selectedDate) {
                    $("#txtfechaFinal").datepicker("option", "minDate", selectedDate);
                }
            });
            $("#txtfechaFinal").datepicker({
                showButtonPanel: true,
                onClose: function (selectedDate) {
                    $("#txtfechaInicial").datepicker("option", "maxDate", selectedDate);
                }
            });

        });
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>