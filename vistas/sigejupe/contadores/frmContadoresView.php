<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../tribunal/tagXml/TagXml.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");


    $tagXml = new TagXml();
    $tagXml->cargaXml(dirname(__FILE__) . "/../../../vistas/sigejupe/contadores/frmContadoresView.xml", "frmContadoresView");
    ?>

    <style type="text/css">
        .alert{
            display: none;                        
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Registro de Contadores                            
            </h5>
        </div>
        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div class="form-group">                                                                
                    <input type="<?php echo ($tagXml->getAttribut("idContador", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("idContador", "name"); ?>" id="<?php echo $tagXml->getAttribut("idContador", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("idContador", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("idContador", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="1">
                    <script>
                        $("#<?php echo $tagXml->getAttribut("idContador", "name"); ?>").keydown(posValue);
                    </script>                               
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">N&uacute;mero de Contador</label>
                    <div class="col-xs-9">
                        <input type="<?php echo ($tagXml->getAttribut("numero", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("numero", "name"); ?>" id="<?php echo $tagXml->getAttribut("numero", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("numero", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("numero", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="2">
                        <script>
                            $("#<?php echo $tagXml->getAttribut("numero", "name"); ?>").keydown(posValue);
                        </script>
                    </div>                                
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">A&ntilde;o de Contador</label>
                    <div class="col-xs-9">
                        <input type="<?php echo ($tagXml->getAttribut("anio", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("anio", "name"); ?>" id="<?php echo $tagXml->getAttribut("anio", "id"); ?>" placeholder="A&Ntilde;O DE CONTADOR" title="<?php echo $tagXml->getAttribut("anio", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="3">
                        <script>
                            $("#<?php echo $tagXml->getAttribut("anio", "name"); ?>").keydown(posValue);
                        </script>
                    </div>                                
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Tipo de Carpeta</label>
                    <div class="col-xs-9">                            
                        <div name="divTiposcarpetas" id="divTiposcarpetas">
                            <input type="<?php echo ($tagXml->getAttribut("cveTipoCarpeta", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="4">
                        </div>
                        <script>
                            $("#<?php echo $tagXml->getAttribut("cveTipoCarpeta", "name"); ?>").keydown(posValue);

                        </script>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Tipo Actuaci&oacute;n</label>
                    <div class="col-xs-9">                                                        
                        <div name="divTiposactuaciones" id="divTiposactuaciones">
                            <input type="<?php echo ($tagXml->getAttribut("cveTipoActuacion", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("cveTipoActuacion", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("cveTipoActuacion", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("cveTipoActuacion", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="5">
                        </div>
                        <script>
                            $("#<?php echo $tagXml->getAttribut("cveTipoActuacion", "name"); ?>").keydown(posValue);

                        </script>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Juzgado</label>
                    <div class="col-xs-9">                                                        
                        <div name="divJuzgados" id="divJuzgados">
                            <input type="<?php echo ($tagXml->getAttribut("cveJuzgado", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("cveJuzgado", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("cveJuzgado", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("cveJuzgado", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="6">
                        </div>
                        <script>
                            $("#<?php echo $tagXml->getAttribut("cveJuzgado", "name"); ?>").keydown(posValue);

                        </script>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Activo</label>
                    <div class="col-xs-9">                                                        
                        <select name="<?php echo $tagXml->getAttribut("activo", "name"); ?>" id="<?php echo $tagXml->getAttribut("activo", "id"); ?>" class="form-control text-uppercase" tabIndex="7" title="<?php echo $tagXml->getAttribut("activo", "tooltip"); ?>" data-toggle="tooltip" >
                            <option value="S">SI</option>
                            <option value="N">NO</option>
                        </select>
                        <script>
                            $("#<?php echo $tagXml->getAttribut("activo", "name"); ?>").keydown(posValue);
                        </script>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaRegistro", "hidden") == "true") ? "style=\"display:none;\"" : ""; ?> >
                        <label for="<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>" class="caption" id="fechaRegistro"><?php echo $tagXml->getTag("fechaRegistro"); ?></label>
                        <input type="<?php echo ($tagXml->getAttribut("fechaRegistro", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("fechaRegistro", "name"); ?>" id="<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("fechaRegistro", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("fechaRegistro", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" tabIndex="8">                            
                    </div>
                    <div class="form-group col-lg-12" <?php echo ($tagXml->getAttribut("fechaActualizacion", "hidden") == "true") ? "style=\"display:none;\"" : ""; ?> >
                        <label for="<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>" class="caption" id="fechaActualizacion"><?php echo $tagXml->getTag("fechaActualizacion"); ?></label>
                        <input type="<?php echo ($tagXml->getAttribut("fechaActualizacion", "hidden") == "true") ? "hidden" : "text" ?>" name="<?php echo $tagXml->getAttribut("fechaActualizacion", "name"); ?>" id="<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>" placeholder="<?php echo $tagXml->getAttribut("fechaActualizacion", "placeholder"); ?>" title="<?php echo $tagXml->getAttribut("fechaActualizacion", "tooltip"); ?>" data-toggle="tooltip"  class="form-control text-uppercase" readonly tabIndex="9">
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

                <br/>            

                <div class="form-group">  
                    <div class="col-xs-offset-3 col-xs-9">                            
                        <button type="button" class="btn btn-primary" value="Guardar" id="btnContadoresGuardar" name="btnContadoresGuardar" onclick="guardarContadores()" tabIndex="11" title="Boton para guadar cambios" data-toggle="tooltip" >Guardar</button>
                        <button type="button"  class="btn btn-primary" value="Limpiar" id="btnContadoresLimpiar" name="btnContadoresLimpiar" onclick="limpiaContadores()" title="Boton para limpiar y realizar un registro nuevo" data-toggle="tooltip">Limpiar</button>
                        <button type="button"  class="btn btn-primary" value="Consultar" id="btnContadoresConsultar" name="btnContadoresConsultar" onclick="consultaContadores()" title="Boton para consultar informacion" data-toggle="tooltip">Consultar</button>
                        <button type="button"  class="btn btn-primary" value="Eliminar" id="btnContadoresEliminar" name="btnContadoresEliminar" onclick="bajaContadores()" title="Boton para eliminar el registro actual" data-toggle="tooltip">Eliminar</button>
                    </div>
                </div>         
            </div>
        </div>


        <div id="divConsulta" style="display: none">        
        </div>    

        <script type="text/javascript">

            guardarContadores = function () {
                if (validaCampos()) {

                    var <?php echo $tagXml->getAttribut("idContador", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idContador", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("numero", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numero", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("anio", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anio", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("activo", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("activo", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
                    var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/contadores/ContadoresFacade.Class.php",
                        data: {
                            idContador: <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value,
                            numero: <?php echo $tagXml->getAttribut("numero", "id"); ?>.value,
                            anio: <?php echo $tagXml->getAttribut("anio", "id"); ?>.value,
                            cveTipoCarpeta: <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value,
                            cveTipoActuacion: <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value,
                            cveJuzgado: <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value,
                            activo: <?php echo $tagXml->getAttribut("activo", "id"); ?>.value,
                            fechaRegistro: <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>.value,
                            fechaActualizacion: <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>.value,
                            accion: "guardar"},
                        async: true,
                        dataType: "json",
                        beforeSend: function (objeto) {

                        },
                        success: function (datos) {
                            try {
                                if (datos.totalCount > 0) {
                                    $("#divAlertSucces").html('' + datos.text);
                                    $("#divAlertSucces").show("slide");
                                    setTimeAlert("divAlertSucces");
    <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value = datos.data[0].idContador;
    <?php echo $tagXml->getAttribut("numero", "id"); ?>.value = datos.data[0].numero;
    <?php echo $tagXml->getAttribut("anio", "id"); ?>.value = datos.data[0].anio;
    <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value = datos.data[0].cveTipoCarpeta;
    <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value = datos.data[0].cveTipoActuacion;
    <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value = datos.data[0].cveJuzgado;
    <?php echo $tagXml->getAttribut("activo", "id"); ?>.value = datos.data[0].activo;
    <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>.value = datos.data[0].fechaRegistro;
    <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>.value = datos.data[0].fechaActualizacion;

                                } else {
                                    $("#divAlertDager").html('' + datos.text);
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");


                                }
                            } catch (e) {
                                $("#divAlertDager").html('' + datos.text);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");


                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                        }
                    });
                }
            }
            bajaContadores = function () {
                var <?php echo $tagXml->getAttribut("idContador", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idContador", "id"); ?>");
                var <?php echo $tagXml->getAttribut("numero", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numero", "id"); ?>");
                var <?php echo $tagXml->getAttribut("anio", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anio", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>");
                var <?php echo $tagXml->getAttribut("activo", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("activo", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");

                if (<?php echo $tagXml->getAttribut("idContador", "id"); ?>.value != "" && <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value > 0) {
                    if (confirm("¿ ESTAS SEGURO DE ELIMINAR EL REGISTRO ?") == true) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/contadores/ContadoresFacade.Class.php",
                            data: {
                                idContador: <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value,
                                numero: <?php echo $tagXml->getAttribut("numero", "id"); ?>.value,
                                anio: <?php echo $tagXml->getAttribut("anio", "id"); ?>.value,
                                cveTipoCarpeta: <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value,
                                cveTipoActuacion: <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value,
                                cveJuzgado: <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value,
                                activo: <?php echo $tagXml->getAttribut("activo", "id"); ?>.value,
                                fechaRegistro: <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>.value,
                                fechaActualizacion: <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>.value,
                                accion: "baja"},
                            async: true,
                            dataType: "json",
                            beforeSend: function (objeto) {

                            },
                            success: function (datos) {
                                try {
                                    $("#divAlertSucces").html('' + datos.text);
                                    $("#divAlertSucces").show("slide");
                                    setTimeAlert("divAlertSucces");
                                    limpiaContadores();


                                } catch (e) {
                                    $("#divAlertDager").html('' + datos.text);
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                            }
                        });
                    }
                } else {
                    $("#divAlertDager").html('Seleccione un registro');
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");

                }
            }
            consultaContadores = function () {

                var <?php echo $tagXml->getAttribut("idContador", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idContador", "id"); ?>");
                var <?php echo $tagXml->getAttribut("numero", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numero", "id"); ?>");
                var <?php echo $tagXml->getAttribut("anio", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anio", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>");
                var <?php echo $tagXml->getAttribut("activo", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("activo", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/contadores/ContadoresFacade.Class.php",
                    data: {
                        idContador: <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value,
                        numero: <?php echo $tagXml->getAttribut("numero", "id"); ?>.value,
                        anio: <?php echo $tagXml->getAttribut("anio", "id"); ?>.value,
                        cveTipoCarpeta: <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value,
                        cveTipoActuacion: <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value,
                        cveJuzgado: <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value,
                        activo: <?php echo $tagXml->getAttribut("activo", "id"); ?>.value,
                        fechaRegistro: <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>.value,
                        fechaActualizacion: <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>.value,
                        accion: "consultar"},
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
    //                    
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {

                            var table = '<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">';
                            table += '<table id="tblResultadosGrid" class="table table-hover table-striped table-bordered">';
                            table += '<thead>';
                            table += '<tr>';
                            table += '<th>Num.</th>';
                            table += '<th>N&uacute;mero</th>';
                            table += '<th>A&Ntilde;O</th>';
                            table += '<th>Tipo Carpeta</th>';
                            table += '<th>Juzgado</th>';
                            table += '<th>Tipo Actuaci&oacute;n</th>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
                            var cont = 1;
                            for (var i = 0; i < datos.totalCount; i++) {
                                table += "<tr onclick=' changeDivForm(1);seleccionaContadores(" + datos.data[i].idContador + ")'>";
                                table += "<td>" + cont + "</td>";
                                table += "<td>" + datos.data[i].numero + "</td>";
                                table += "<td>" + datos.data[i].anio + "</td>";
                                if (datos.data[i].cveTipoCarpeta !== null) {
                                    table += "<td>" + datos.data[i].desTipoCarpeta + "</td>";
                                } else {
                                    table += "<td>&nbsp;</td>";
                                }
                                table += "<td>" + datos.data[i].desJuzgado + "</td>";

                                if (datos.data[i].cveTipoActuacion !== null) {
                                    table += "<td>" + datos.data[i].desTipoActuacion + "</td>";
                                } else {
                                    table += "<td>&nbsp;</td>";
                                }


                                table += "</tr>";
                                cont++;
                            }
                            table += "</tbody>";
                            table += "</table>";
                            $('#divConsulta').html(table);
                            $('#tblResultadosGrid').DataTable();

                            changeDivForm(2);

                        } else {
                            $("#divAlertInfo").html('' + datos.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }
            limpiaContadores = function () {
    <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("numero", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("anio", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("activo", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>.value = "";
    <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>.value = "";
            }
            seleccionaContadores = function (ididContador) {
                var <?php echo $tagXml->getAttribut("idContador", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idContador", "id"); ?>");
                var <?php echo $tagXml->getAttribut("numero", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numero", "id"); ?>");
                var <?php echo $tagXml->getAttribut("anio", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anio", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>");
                var <?php echo $tagXml->getAttribut("activo", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("activo", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/contadores/ContadoresFacade.Class.php",
                    data: {
                        idContador: <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value = ididContador,
                        accion: "seleccionar"},
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {

                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
    <?php echo $tagXml->getAttribut("idContador", "id"); ?>.value = datos.data[0].idContador
    <?php echo $tagXml->getAttribut("numero", "id"); ?>.value = datos.data[0].numero
    <?php echo $tagXml->getAttribut("anio", "id"); ?>.value = datos.data[0].anio
    <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value = datos.data[0].cveTipoCarpeta
    <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value = datos.data[0].cveTipoActuacion
    <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value = datos.data[0].cveJuzgado
    <?php echo $tagXml->getAttribut("activo", "id"); ?>.value = datos.data[0].activo
    <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>.value = datos.data[0].fechaRegistro
    <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>.value = datos.data[0].fechaActualizacion

    //                            consultaContadores();
                            } else {
                                $("#divAlertWarning").html('' + datos.text);
                                $("#divAlertWarning").show("slide");
                                setTimeAlert("divAlertWarning");
    //                           
                            }
                        } catch (e) {
                            $("#divAlertDager").html('' + datos.text);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
    //                       
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }
            listaTiposcarpetas = function (tabIndex) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                    data: {accion: "consultar"},
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        document.getElementById('divTiposcarpetas').innerHTML = "<img src='img/cargando_1.gif'/>";
                    },
                    success: function (datos) {
                        try {
                            var html = "";
                            if (datos.totalCount > 0) {
                                html += '<select name="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>" class="form-control text-uppercase" title="<?php echo $tagXml->getAttribut("cveTipoCarpeta", "tooltip"); ?>" data-toggle="tooltip" tabIndex="tabIndex">';
                                html += "<option value=''>Seleccione una Opcion</option>";
                                for (var index = 0; index < datos.totalCount; index++) {
                                    html += "<option value='" + datos.data[index].cveTipoCarpeta + "'>" + datos.data[index].desTipoCarpeta + "</option>";
                                }
                                html += "</select>";
                            } else {
                                html = "Sin resultados";
                            }
                            document.getElementById('divTiposcarpetas').innerHTML = html;
                        } catch (e) {
                            $("#divAlertDager").html('' + e);
                            $("#divAlertDager").show("slide");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }
            listaTiposactuaciones = function (tabIndex) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposactuaciones/TiposactuacionesFacade.Class.php",
                    data: {accion: "consultar"},
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        document.getElementById('divTiposactuaciones').innerHTML = "<img src='img/cargando_1.gif'/>";
                    },
                    success: function (datos) {
                        try {
                            var html = "";
                            if (datos.totalCount > 0) {
                                html += '<select name="<?php echo $tagXml->getAttribut("cveTipoActuacion", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>" class="form-control text-uppercase" title="<?php echo $tagXml->getAttribut("cveTipoActuacion", "tooltip"); ?>" data-toggle="tooltip" tabIndex="tabIndex">';
                                html += "<option value=''>Seleccione una Opcion</option>";
                                for (var index = 0; index < datos.totalCount; index++) {
                                    html += "<option value='" + datos.data[index].cveTipoActuacion + "'>" + datos.data[index].desTipoActuacion + "</option>";
                                }
                                html += "</select>";
                            } else {
                                html = "Sin resultados";
                            }
                            document.getElementById('divTiposactuaciones').innerHTML = html;
                        } catch (e) {
                            $("#divAlertDager").html('' + e);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }
            listaJuzgados = function (tabIndex) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    data: {accion: "consultar"},
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        document.getElementById('divJuzgados').innerHTML = "<img src='img/cargando_1.gif'/>";
                    },
                    success: function (datos) {
                        try {
                            var html = "";
                            if (datos.totalCount > 0) {
                                html += '<select name="<?php echo $tagXml->getAttribut("cveJuzgado", "name"); ?>" id="<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>" class="form-control text-uppercase" title="<?php echo $tagXml->getAttribut("cveJuzgado", "tooltip"); ?>" data-toggle="tooltip" tabIndex="tabIndex">';
                                html += "<option value=''>Seleccione una Opcion</option>";
                                for (var index = 0; index < datos.totalCount; index++) {
                                    html += "<option value='" + datos.data[index].cveJuzgado + "'>" + datos.data[index].desJuzgado + "</option>";
                                }
                                html += "</select>";
                            } else {
                                html = "Sin resultados";
                            }
                            document.getElementById('divJuzgados').innerHTML = html;
                        } catch (e) {
                            $("#divAlertDager").html('' + e);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                    }
                });
            }

            validaCampos = function () {
                var mensaje = "verifique los siguientes campos: ";
                var correcto = true;

                var <?php echo $tagXml->getAttribut("idContador", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("idContador", "id"); ?>");
                var <?php echo $tagXml->getAttribut("numero", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("numero", "id"); ?>");
                var <?php echo $tagXml->getAttribut("anio", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("anio", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>");
                var <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>");
                var <?php echo $tagXml->getAttribut("activo", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("activo", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaRegistro", "id"); ?>");
                var <?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?> = document.getElementById("<?php echo $tagXml->getAttribut("fechaActualizacion", "id"); ?>");

                if (<?php echo $tagXml->getAttribut("numero", "id"); ?>.value == "" || <?php echo $tagXml->getAttribut("numero", "id"); ?>.value < 0) {
                    correcto = false;
                    mensaje += "Numero de contador.  ";
                }

                if (<?php echo $tagXml->getAttribut("anio", "id"); ?>.value == "" || <?php echo $tagXml->getAttribut("anio", "id"); ?>.value < 0) {
                    correcto = false;
                    mensaje += "Anio del contador.  ";
                }

                if ((<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value == "" || <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value < 0) &&
                        (<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value == "" || <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value < 0)) {
                    correcto = false;
                    mensaje += "Especifique un Tipo de Carpeta o un Tipo de Actuacion.  ";
                }

                if ((<?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value != "" || <?php echo $tagXml->getAttribut("cveTipoCarpeta", "id"); ?>.value > 0) &&
                        (<?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value != "" || <?php echo $tagXml->getAttribut("cveTipoActuacion", "id"); ?>.value > 0)) {
                    correcto = false;
                    mensaje += "Solo puede especificar el Tipo de Actuacion o el Tipo de Carpeta.  ";
                }

                if (<?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value == "" || <?php echo $tagXml->getAttribut("cveJuzgado", "id"); ?>.value < 0) {
                    correcto = false;
                    mensaje += "Juzgado del contador.  ";
                }

                if (!correcto) {
                    $("#divAlertDager").html('' + mensaje);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
                return correcto;

            }

            $(function () {

                listaTiposcarpetas(4);
                listaTiposactuaciones(5);
                listaJuzgados(6);

            });


        </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>