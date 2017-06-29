<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style>

        .tableResultados{
            padding: 10px;
            border: 1px solid #f2f2f2;
            border-collapse: collapse;
            width: 95%;
            margin-left:15px;
            margin-top:10px;
            background: #FFFFFF;
        }

        .estiloTr:hover {
            background-color: #881518 ;
            color: #ffffff;
            cursor: pointer;
        }
        .divIndex{
            position: absolute;
            z-index: 999;
            padding-top: 0px; 
            padding-left: 5px;
            width: 96%;
            background: #FFFFFF;
            border: 1px solid #e6e6e6;
        }
        .requerido {
            color: darkred;
        }

        .panel-default > .panel-heading {
            background: #881518;
            color: #ebf3f1;
        }
        /////////
        .tblGridAgrega{
            margin-top: 20px;
            font-family: arial;
            font-size: 11px;
            text-align: center;
        }
        .trGridAgrega{
            color: #ffffff;
            background-color: #881518;
        }
        .mayuscula{  
            text-transform: uppercase;  
        }  
        .trSeleccion:hover{
            background-color:#FFECED;
            cursor: pointer;
        } 
        .snackBar2 {
            width: 100%;
            background: none repeat scroll 0% 0% #212121;
            font-family: Arial;
            font-size: 15px;
            height: 40px;
            text-align: center;
            color: #FAFAFA;
            position: absolute;
            top: 50%;
            display: none;
            padding-top: 20px;
            opacity: 0.9;
        }
        .snackBar2 {
            width: 100%;
            background: none repeat scroll 0% 0% #212121;
            font-family: Arial;
            font-size: 15px;
            height: 40px;
            text-align: center;
            color: #FAFAFA;
            position: absolute;
            top: 50%;
            display: none;
            padding-top: 20px;
            opacity: 0.9;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Juzgadores
                <input type="hidden" readonly id="hddCveJuzgador" name="hddCveJuzgador">                  
            </h5>
        </div>
        <div class="panel-body">
            <div id="divBusqueda" class="col-md-12">
                <div class="form-group" >
                    <div class="col-md-1"></div>



                    <div class="col-lg-5" id="">
                        <label class="control-label" for="txtEdadImputado">Juzgador:</label>
                        <div>
                            <select name="cmbJuzgadores" id="cmbJuzgadores" class=" form-control" onchange="cargaJuzgador(0)"></select>
                        </div>
                    </div>
                    <div class="col-lg-5" id="">
                        <label class="control-label" for="txtEdadImputado">Juzgado:</label>
                        <div>
                            <select name="cmbJuzgadoConsulta" id="cmbJuzgadoConsulta" class=" form-control" onchange="cargaJuzgadorJuzgado(0)"></select>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <br><button type="button" class="btn btn-primary" name="guardar" id="guardar" onclick="nuevo();">Nuevo</button>
                    <button type="button" class="btn btn-primary" name="limpiar" id="limpiar" onclick="limpiarGeneral();">Limpiar</button>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
            <div id="divConsultaGrid" style="display: none" class="col-md-12">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="form-group col-md-3">
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="cargaJuzgadorJuzgado(0);">
                            <option value="1"></option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="cargaJuzgadorJuzgado(1);">
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
                <div class="col-md-1"></div>
                <div id="divResultadosGeneral" class="col-md-10"></div>
                <div class="col-md-1"></div>
            </div>
            <div id="divFormulario" class="form-horizontal" style="display:none;">
                <div class="tab-content tabs-flat">
                    <div class="tabbable tabs-left">
                        <ul id="myTab3" class="nav nav-tabs">
                            <li class="tab-sky active">
                                <a href="#divGeneral" data-toggle="tab" aria-expanded="true">General</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divJuzgados" data-toggle="tab" aria-expanded="false">Juzgados</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divTelefonos" data-toggle="tab" aria-expanded="false"> Tel&eacute;fono(s)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <p class="col-lg-10" style="color:darkred;">
                                Los campos marcados con (*) son obligatorios.
                            </p>
                            <div class="tab-pane active" id="divGeneral">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Buscar juzgador <span class="requerido">(*)</span></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="search-nombre" name="search-nombre" onblur="limpiaDiv();" placeholder="Buscar Juzgador..."/>
                                        <div id="suggesstion-box" class="divIndex"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">N&uacute;mero de empleado <span class="requerido">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" size="10" class="form-control" id="txtNumEmpleado" name="txtNumEmpleado" onblur="limpiaDiv();" placeholder="Buscar Juzgador..."/>
                                        <div id="txtNumEmpleado-box" class="divIndex"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Clave Usuario<span class="requerido">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" size="10" name="txtCveUsuario" id="txtCveUsuario"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nombre<span class="requerido">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="txtNombre" placeholder="Nombre ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Paterno<span class="requerido">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="txtPaterno" placeholder="Paterno">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Paterno<span class="requerido">(*)</span></label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="txtMaterno" placeholder="Materno">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">T&iacute;tulo <span class="requerido">(*)</span></label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="txtTitulo" id="txtTitulo"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tipo Juzgador <span class="requerido">(*)</span></label>
                                    <div class="col-md-4">
                                        <select name="cmbTipoJuzgador" id="cmbTipoJuzgador" class=" form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Sorteo <span class="requerido">(*)</span></label>
                                    <div class="col-md-4">
                                        <select name="cmbSorteo" id="cmbSorteo" class=" form-control">
                                            <option value="">Seleccione una opci&oacute;n</option>
                                            <option value="S">SI</option>
                                            <option value="N">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Programable <span class="requerido">(*)</span></label>
                                    <div class="col-md-4">
                                        <select name="cmbProgramado" id="cmbProgramado" class=" form-control">
                                            <option value="">Seleccione una opci&oacute;n</option>
                                            <option value="S">SI</option>
                                            <option value="N">NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-4">
                                    <button type="button" class="btn btn-primary" name="guardar" id="guardar" onclick="guardar();">Guardar</button>
                                    <button type="button" class="btn btn-primary" name="limpiar" id="limpiar" onclick="limpiar();">Limpiar</button>
                                    <button type="button" class="btn btn-primary" name="limpiar" id="limpiar" onclick="regresa();">Regresar</button>
                                </div>
                            </div>
                            <div class="tab-pane" id="divJuzgados">
                                <div class="col-sm-12">
                                    <label for="" class="control-label col-sm-3">Buscar juzgado</label>
                                    <div class="input-group">
                                        <select id="cmbJuzgados" name="cmbJuzgados"></select>
                                        <!--</div>-->
                                        <!--                            </div>
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-4">-->
                                        <button type="button" class="btn btn-primary" name="guardarJuzgados" id="guardarJuzgados" onclick="guardarJuzgados();">Guardar</button>
                                        <button type="button" class="btn btn-primary" name="limpiarJuzgados" id="limpiarJuzgados" onclick="limpiarJuzgados();">Limpiar</button>
                                    </div><br>
                                    <div class="form-group col-lg-2"></div>
                                    <div class="form-group col-lg-8">
                                        <div id="divResultJuzgados"></div>
                                    </div>
                                    <div class="form-group col-lg-2"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="divTelefonos">
                                <input type="hidden" id="hddIdTelefono">
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Tel&eacute;fono</label>      
                                    <div>
                                        <input id="telefonoTel"  name="telefonoTel"  type="text" class="form-control mayuscula" maxlength="10">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Celular</label>
                                    <div>
                                        <input id="celTel" name="celTel" type="text" class="form-control mayuscula" maxlength="10">
                                    </div> 
                                </div> 
                                <div class="col-lg-4">
                                    <label class="control-label" for="">Correo electr&oacute;nico</label>
                                    <div>
                                        <input id="emailTel" class="form-control" type="email" name="emailTel">
                                    </div> 
                                </div> 
                                <div class="col-lg-12"></div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <br><button id="btnAgregaTelImput" class="btn btn-primary" onclick="guardaTel()">Guardar</button>
                                    <button id="btnLimpiarTelImput" class="btn btn-primary" onclick="limpiarTelefonos()" >Limpiar</button>
                                </div> 
                                <br><div class="form-group col-lg-12">
                                    <div id="divResultadosTelefono"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
            <br><br>
            <div class="clearfix"></div>
            <div class="form-group">
                <div id="divAlertWarningJuzgador" class="alert alert-warning alert-dismissable" style="display:none;">  </div>
                <div id="divAlertSuccesJuzgador" class="alert alert-success alert-dismissable" style="display:none;"> </div>
                <div id="divAlertDagerJuzgador" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                <div id="divAlertInfoJuzgador" class="alert alert-info alert-dismissable" style="display:none;"> </div>
            </div>    
        </div>
    </div>
    <script type="text/javascript">
        comboTiposJuzgadores = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposjuzgadores/TiposjuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoJuzgador').empty();
                        $('#cmbTipoJuzgador').append('<option value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoJuzgador').append('<option value="' + object.cveTipoJuzgador + '">' + object.desTipoJuzgador + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos juzgadores:\n\n" + otroobj);
                }
            });
        };

        comboJuzgadores = function () {
            $("#cmbJuzgadoConsulta").val(0);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadores').empty();
                        $('#cmbJuzgadores').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadores').append('<option value="' + object.idJuzgador + '">' + object.nombre + " " + object.paterno + " " + object.materno + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos juzgadores:\n\n" + otroobj);
                }
            });
        };

        comboJuzgadosConsulta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarLike", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadoConsulta').empty();
                        $('#cmbJuzgadoConsulta').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadoConsulta').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos juzgadores:\n\n" + otroobj);
                }
            });
        };

        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarLike", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgados').empty();
                        $('#cmbJuzgados').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgados').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos cmbJuzgados:\n\n" + otroobj);
                }
            });
        };

        nuevo = function () {
            $("#divFiltro").hide("");
            $("#divConsultaGrid").hide("");
            $("#nuevoJuzgador").show("");
            $("#divFormulario").show("");
        };

        valida = function () {
            var mensaje = "";
            var error = true;

            if (($("#txtCveUsuario").val() == "") || ($("#txtCveUsuario").val() == "0")) {
                mensaje += "*Ingrese clave del usuario<br>";
                error = false;
            }
            if (($("#txtNumEmpleado").val() == "") || ($("#txtNumEmpleado").val() == "0")) {
                mensaje += "*Ingrese n&uacute;mero de empleado<br>";
                error = false;
            }
            if (($("#txtTitulo").val() == "") || ($("#txtTitulo").val() == "0")) {
                mensaje += "*Ingrese t&iacute;tulo<br>";
                error = false;
            }
            if (($("#txtPaterno").val() == "") || ($("#txtPaterno").val() == "0")) {
                mensaje += "*Ingrese apellido paterno<br>";
                error = false;
            }
            if (($("#txtMaterno").val() == "") || ($("#txtMaterno").val() == "0")) {
                mensaje += "*Ingrese apellido materno<br>";
                error = false;
            }
            if (($("#txtNombre").val() == "") || ($("#txtNombre").val() == "0")) {
                mensaje += "*Ingrese nombre<br>";
                error = false;
            }
            if (($("#cmbTipoJuzgador").val() == "") || ($("#cmbTipoJuzgador").val() == "0")) {
                mensaje += "*Seleccione tipo de juzgador<br>";
                error = false;
            }
            if (($("#cmbSorteo").val() == "") || ($("#cmbSorteo").val() == "0")) {
                mensaje += "*Seleccione sorteo<br>";
                error = false;
            }
            if (($("#cmbProgramado").val() == "") || ($("#cmbProgramado").val() == "0")) {
                mensaje += "*Seleccione programable<br>";
                error = false;
            }

            if (!error) {
                $("#divAlertWarningJuzgador").html("");
                $("#divAlertWarningJuzgador").html(mensaje);
                $("#divAlertWarningJuzgador").show("");
                setTimeAlert("divAlertWarningJuzgador");
            }
            return error;
        };

        guardar = function () {
            var error = true;
            if (valida()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardaJuzgador",
                        idJuzgador: $("#hddCveJuzgador").val(),
                        cveUsuario: $("#txtCveUsuario").val(),
                        numEmpleado: $("#txtNumEmpleado").val(),
                        titulo: $("#txtTitulo").val(),
                        paterno: $("#txtPaterno").val(),
                        materno: $("#txtMaterno").val(),
                        nombre: $("#txtNombre").val(),
                        cveTipoJuzgador: $("#cmbTipoJuzgador").val(),
                        sorteo: $("#cmbSorteo").val(),
                        programable: $("#cmbProgramado").val()
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        ///////////////////////////////////////////////////////////////////////////////
                        if (datos.status == "Ok") {
                            $("#divAlertSuccesJuzgador").html("");
                            $("#divAlertSuccesJuzgador").html("El juzgador se guardo de forma correcta");
                            $("#divAlertSuccesJuzgador").show("");
                            setTimeAlert("divAlertSuccesJuzgador");
                            $("#hddCveJuzgador").val(datos.data[0].idJuzgador);
                            $("#txtCveUsuario").val(datos.data[0].cveUsuario);
                            $("#txtNumEmpleado").val(datos.data[0].numEmpleado);
                            $("#txtTitulo").val(datos.data[0].titulo);
                            $("#txtPaterno").val(datos.data[0].paterno);
                            $("#txtMaterno").val(datos.data[0].materno);
                            $("#txtNombre").val(datos.data[0].nombre);
                            $("#cmbTipoJuzgador").val(datos.data[0].cveTipoJuzgador);
                            $("#cmbSorteo").val(datos.data[0].sorteo);
                            $("#cmbProgramado").val(datos.data[0].programable);
                        } else {
                            $("#divAlertWarningJuzgador").html("");
                            $("#divAlertWarningJuzgador").html(datos.mnj);
                            $("#divAlertWarningJuzgador").show("");
                            setTimeAlert("divAlertWarningJuzgador");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;

        };

        selecciona = function (id) {
            $("#divFiltro").hide("");
            $("#divConsultaGrid").hide("");
            $("#nuevoJuzgador").show("");
            $("#divFormulario").show("");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarJuzgadores",
                    idJuzgador: id
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    ///////////////////////////////////////////////////////////////////////////////
                    if (datos.status == "Ok") {
                        $("#hddCveJuzgador").val(datos.data[0].idJuzgador);
                        $("#txtCveUsuario").val(datos.data[0].cveUsuario);
                        $("#txtNumEmpleado").val(datos.data[0].numEmpleado);
                        $("#txtTitulo").val(datos.data[0].titulo);
                        $("#txtPaterno").val(datos.data[0].paterno);
                        $("#txtMaterno").val(datos.data[0].materno);
                        $("#txtNombre").val(datos.data[0].nombre);
                        $("#cmbTipoJuzgador").val(datos.data[0].cveTipoJuzgador);
                        $("#cmbSorteo").val(datos.data[0].sorteo);
                        $("#cmbProgramado").val(datos.data[0].programable);
                        consultarTelefonos();
                        consultarJuzgados();
                    } else {
                        $("#divAlertWarningJuzgador").html("");
                        $("#divAlertWarningJuzgador").html(datos.mnj);
                        $("#divAlertWarningJuzgador").show("");
                        setTimeAlert("divAlertWarningJuzgador");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };

        limpiar = function () {
            $("#hddCveJuzgador").val("");
            $("#txtCveUsuario").val("");
            $("#txtNumEmpleado").val("");
            $("#txtTitulo").val("");
            $("#txtPaterno").val("");
            $("#txtMaterno").val("");
            $("#txtNombre").val("");
            $("#cmbTipoJuzgador").val("");
            $("#cmbSorteo").val("");
            $("#cmbProgramado").val("");
            $("#divResultadosTelefono").html("");
            $("#divResultJuzgados").html("");
        };
        regresa = function () {
            if ($('#divResultadosGeneral').is(':empty')) {
                $("#divConsultaGrid").hide("");
            } else {
                $("#divConsultaGrid").show("");
            }
            $("#divFiltro").show("");
            $("#nuevoJuzgador").hide("");
            $("#divFormulario").hide("");
            $("#hddCveJuzgador").val("");
            $("#txtCveUsuario").val("");
            $("#txtNumEmpleado").val("");
            $("#txtTitulo").val("");
            $("#txtPaterno").val("");
            $("#txtMaterno").val("");
            $("#txtNombre").val("");
            $("#cmbTipoJuzgador").val("");
            $("#cmbSorteo").val("");
            $("#cmbProgramado").val("");

            $("#divResultadosTelefono").html("");
            $("#divResultJuzgados").html("");
        };

        //////////////////////JUZGADOS JUZGADORES

        validaJuzgados = function () {
            var mensaje = "";
            var error = true;
            if (($("#hddCveJuzgador").val() == "") || ($("#hddCveJuzgador").val() == "0")) {
                mensaje += "*Seleccione un juzgador<br>";
                error = false;
            }
            if (($("#cmbJuzgados").val() == "") || ($("#cmbJuzgados").val() == "0") || ($("#cmbJuzgados").val() == null)) {
                mensaje += "*Seleccione un juzgado<br>";
                error = false;
            }
            if (!error) {
                $("#divAlertWarningJuzgador").html("");
                $("#divAlertWarningJuzgador").html(mensaje);
                $("#divAlertWarningJuzgador").show("");
                setTimeAlert("divAlertWarningJuzgador");
            }
            return error;
        };

        guardarJuzgados = function () {
            var error = true;
            if (validaJuzgados()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardaJuzgadoreJuzgado",
                        idJuzgador: $("#hddCveJuzgador").val(),
                        cveJuzgado: $("#cmbJuzgados").val(),
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        ///////////////////////////////////////////////////////////////////////////////
                        if (datos.status == "Ok") {
                            $("#divAlertSuccesJuzgador").html("");
                            $("#divAlertSuccesJuzgador").html("El registro se guardo de forma correcta");
                            $("#divAlertSuccesJuzgador").show("");
                            setTimeAlert("divAlertSuccesJuzgador");
                            consultarJuzgados();
                        } else {
                            $("#divAlertWarningJuzgador").html("");
                            $("#divAlertWarningJuzgador").html(datos.mnj);
                            $("#divAlertWarningJuzgador").show("");
                            setTimeAlert("divAlertWarningJuzgador");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };

        consultarJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "detalleJuzgados",
                    idJuzgador: $("#hddCveJuzgador").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    $('#divResultJuzgados').html("");
                    if (datos.totalCount > 0) {
                        var table = "";
                        table += '<table border="1" align="center"  width="50%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="5%">No</th>';
                        table += '<th width="85%">Juzgado</th>';
                        table += '<th width="10%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr>';
                            table += '<td>' + (i + 1) + '</td>';
                            table += '<td>' + datos.data[i].desJuzgado + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarJuzgado(" + datos.data[i].idJuzgadorJuzgado + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultJuzgados').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        eliminarJuzgado = function (id) {
            if ($("#hddCveJuzgador").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al juzgado?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idJuzgadorJuzgado: id
                                    },
                                    beforeSend: function (objeto) {
                                    },
                                    success: function (datos) {
                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesJuzgador").html("");
                                            $("#divAlertSuccesJuzgador").html("El juzgado se elimino de forma correcta");
                                            $("#divAlertSuccesJuzgador").show("");
                                            setTimeAlert("divAlertSuccesJuzgador");
                                            consultarJuzgados();
                                        } else {
                                            $("#divAlertWarningJuzgador").html("");
                                            $("#divAlertWarningJuzgador").html("'" + datos.msj + "'");
                                            $("#divAlertWarningJuzgador").show("");
                                            setTimeAlert("divAlertWarningJuzgador");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            } else {
                alert("Seleccione un juzgador");
            }
        };

        limpiarJuzgados = function () {
            $("#cmbJuzgados").val("");
        };

        /////////////////////////////Telefonos juzgadores

        validateTelStep2 = function () {
            var mensaje = "";
            var error = true;
            if (($("#hddCveJuzgador").val() == "") || ($("#hddCveJuzgador").val() == "0")) {
                mensaje += "*Seleccione un juzgador<br>";
                error = false;
            }
            if (($('#telefonoTel').val() == "") && ($("#celTel").val() == "") && ($("#emailTel").val() == "")) {
                mensaje += "*Ingrese tel\u00e9fono y/o celular y/o e.mail \n";
                error = false;
            }
            if ($('#telefonoTel').val() != "") {
                if ($('#telefonoTel').val().length != 10) {
                    mensaje += "*Tel\u00e9fono  debe de tener 10 Digitos \n";
                    error = false;
                }
            }
            if ($('#celTel').val() != "") {
                if ($('#celTel').val().length != 10) {
                    mensaje += "*Celular  debe de tener 10 Digitos \n";
                    error = false;
                }
            }
            if ($('#emailTel').val() != "") {
                var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                if (!regex.test($('#emailTel').val().trim())) {
                    mensaje += "*Correo electronico no valido \n";
                    error = false;
                }
            }
            if (!error) {
                $("#divAlertWarningJuzgador").html("");
                $("#divAlertWarningJuzgador").html(mensaje);
                $("#divAlertWarningJuzgador").show("");
                setTimeAlert("divAlertWarningJuzgador");
            }
            return error;
        };

        guardaTel = function () {
            var error = true;
            if (validateTelStep2()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/telefonosjuzgadores/TelefonosjuzgadoresFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardar",
                        idTelefonJuzgador: $("#hddIdTelefono").val(),
                        idJuzgador: $("#hddCveJuzgador").val(),
                        telefono: $("#telefonoTel").val(),
                        celular: $("#celTel").val(),
                        email: $("#emailTel").val(),
                        activo: 'S'
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            $("#divAlertSuccesJuzgador").html("");
                            $("#divAlertSuccesJuzgador").html("Registro dado de alta exitosamente");
                            $("#divAlertSuccesJuzgador").show("");
                            setTimeAlert("divAlertSuccesJuzgador");
                            consultarTelefonos();
                            limpiarTelefonos();
                        } else {
                            $("#divAlertWarningJuzgador").html("");
                            $("#divAlertWarningJuzgador").html(datos.text);
                            $("#divAlertWarningJuzgador").show("");
                            setTimeAlert("divAlertWarningJuzgador");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        }

        consultarTelefonos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosjuzgadores/TelefonosjuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idJuzgador: $("#hddCveJuzgador").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //ToggleLoading(2);
                    $('#divResultadosTelefono').html("");
                    if (datos.totalCount > 0) {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="20%">Telefono</th>';
                        table += '<th width="20%" >Celular</th>';
                        table += '<th width="20%" >Correo</th>';
                        table += '<th width="20%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" id="' + datos.data[i].idTelefonJuzgador + '"><td onclick="seleccionaTelefono(' + datos.data[i].idTelefonJuzgador + ')">' + datos.data[i].telefono + '</td>';
                            table += '<td onclick="seleccionaTelefono(' + datos.data[i].idTelefonJuzgador + ')">' + datos.data[i].celular + '</td>';
                            table += '<td onclick="seleccionaTelefono(' + datos.data[i].idTelefonJuzgador + ')">' + datos.data[i].email + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminarTelefono(" + datos.data[i].idTelefonJuzgador + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosTelefono').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };


        seleccionaTelefono = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/telefonosjuzgadores/TelefonosjuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idTelefonJuzgador: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //                //ToggleLoading(1);
                },
                success: function (datos) {
                    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $("#hddIdTelefono").val(datos.data[0].idTelefonJuzgador);
                        $("#hddCveJuzgador").val(datos.data[0].idJuzgador);
                        $("#telefonoTel").val(datos.data[0].telefono);
                        $("#celTel").val(datos.data[0].celular);
                        $("#emailTel").val(datos.data[0].email);
                    } else {
                        alert("Error. Verifique");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        eliminarTelefono = function (id) {
            if ($("#hddCveJuzgador").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al tel\u00e9fono?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/telefonosjuzgadores/TelefonosjuzgadoresFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idTelefonJuzgador: id,
                                        activo: 'N'
                                    },
                                    beforeSend: function (objeto) {
                                    },
                                    success: function (datos) {
                                        if (datos.totalCount > 0) {
                                            $("#divAlertSuccesJuzgador").html("");
                                            $("#divAlertSuccesJuzgador").html("El telefono se elimino de forma correcta");
                                            $("#divAlertSuccesJuzgador").show("");
                                            setTimeAlert("divAlertSuccesJuzgador");
                                            consultarTelefonos();
                                            limpiarTelefonos();
                                        } else {
                                            $("#divAlertWarningJuzgador").html("");
                                            $("#divAlertWarningJuzgador").html("Error al eliminar el telefono. Verifique");
                                            $("#divAlertWarningJuzgador").show("");
                                            setTimeAlert("divAlertWarningJuzgador");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
            } else {
                alert("Seleccione un juzgador");
            }
        };

        limpiarTelefonos = function () {
            $("#hddIdTelefono").val("");
            $("#telefonoTel").val("");
            $("#celTel").val("");
            $("#emailTel").val("");
        };

        getPaginas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    cveJuzgado: $("#cmbJuzgadoConsulta").val(),
                    cantxPag: cantReg},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        cargaJuzgadorJuzgado = function (pagAux) {
            $("#cmbJuzgadores").val(0);
            var cantReg = $("#cmbNumReg").val();

            var pag = 0;
            if (pagAux == 0) {
                pag = $("#cmbPaginacion").val();
            } else {
                pag = 1;
            }

            var url = "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php";
            var datos = "accion=consultarJuzgadoresJuz&cveJuzgado=" + $("#cmbJuzgadoConsulta").val() + "&pag=" + pag + "&cantxPag=" + cantReg;

            var tabla = "";
            var totalPaginas = 0;
            var pagina = 0;
            var index = 1;
            $.ajax({
                type: "POST",
                url: url,
                async: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            tabla += '<table width="50%" class="table table-hover">';
                            tabla += '<thead class="bordered-darkorange">';
                            tabla += '<tr>';
                            tabla += '<th>No</th>';
                            tabla += '<th>NUMERO EMPLEADO</th>';
                            tabla += '<th>NOMBRE</th>';
                            tabla += '<th>TIPO JUZGADOR</th>';
                            tabla += '<th>SORTEO</th>';
                            tabla += '<th>PROGRAMABLE</th>';
                            tabla += '<th>JUEZ ACTIVO</th>';
                            //                                tabla += '<th>ELIMINAR</th>';
                            tabla += '</tr>';
                            $.each(datos.data, function (key, val) {

                                tabla += "<tr style='cursor:pointer;' onclick='selecciona(" + val.idJuzgador + ")';>";
                                tabla += "<td>" + index + "</td>";
                                tabla += "<td>" + val.numEmpleado + "</td>";
                                tabla += "<td>" + val.nombre + " " + val.paterno + " " + val.materno + "</td>";
                                tabla += "<td>" + val.desTipoJuzgador + "</td>";
                                tabla += "<td>" + val.sorteo + "</td>";
                                tabla += "<td>" + val.programable + "</td>";
                                tabla += "<td>" + val.activo + "</td>";
                                tabla += "</tr>";
                                index++;
                            });
                            tabla += '</table>';
                            $('#divConsultaGrid').show("");
                            $('#divResultadosGeneral').html(tabla);
                            getPaginas(datos.pagina, cantReg);
                        } else {
                            $('#divConsultaGrid').hide("");
                            $('#divResultadosGeneral').html("");
                            $("#divAlertWarningJuzgador").html("");
                            $("#divAlertWarningJuzgador").html(datos.mnj);
                            $("#divAlertWarningJuzgador").show("");
                            setTimeAlert("divAlertWarningJuzgador");
                        }
                    } catch (e) {
                        alert("Error al cargar Juzgadores:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgadores:\n\n" + otroobj);
                }
            });
        };

        cargaJuzgador = function (pagAux) {
            $("#cmbJuzgadoConsulta").val(0);

            var cantReg = $("#cmbNumReg").val();

            var pag = 0;
            if (pagAux == 0) {
                pag = $("#cmbPaginacion").val();
            } else {
                pag = 1;
            }

            var url = "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php";
            var datos = "accion=consultarJuzgadores&idJuzgador=" + $("#cmbJuzgadores").val() + "&pag=" + pag + "&cantxPag=" + cantReg;

            var tabla = "";
            var totalPaginas = 0;
            var pagina = 0;
            var index = 1;
            $.ajax({
                type: "POST",
                url: url,
                async: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            tabla += '<table width="50%" class="table table-hover">';
                            tabla += '<thead class="bordered-darkorange">';
                            tabla += '<tr>';
                            tabla += '<th>No</th>';
                            tabla += '<th>NUMERO EMPLEADO</th>';
                            tabla += '<th>NOMBRE</th>';
                            tabla += '<th>TIPO JUZGADOR</th>';
                            tabla += '<th>SORTEO</th>';
                            tabla += '<th>PROGRAMABLE</th>';
                            tabla += '<th>JUEZ ACTIVO</th>';
                            //                                tabla += '<th>ELIMINAR</th>';
                            tabla += '</tr>';
                            $.each(datos.data, function (key, val) {

                                tabla += "<tr style='cursor:pointer;' onclick='selecciona(" + val.idJuzgador + ")';>";
                                tabla += "<td>" + index + "</td>";
                                tabla += "<td>" + val.numEmpleado + "</td>";
                                tabla += "<td>" + val.nombre + " " + val.paterno + " " + val.materno + "</td>";
                                tabla += "<td>" + val.desTipoJuzgador + "</td>";
                                tabla += "<td>" + val.sorteo + "</td>";
                                tabla += "<td>" + val.programable + "</td>";
                                tabla += "<td>" + val.activo + "</td>";
                                tabla += "</tr>";
                                index++;
                            });
                            tabla += '</table>';
                            $('#divConsultaGrid').show("");
                            $('#divResultadosGeneral').html(tabla);
                            getPaginasJuzgador(datos.pagina, cantReg);
                        } else {
                            $('#divConsultaGrid').hide("");
                            $('#divResultadosGeneral').html("");
                            $("#divAlertWarningJuzgador").html("");
                            $("#divAlertWarningJuzgador").html(datos.mnj);
                            $("#divAlertWarningJuzgador").show("");
                            setTimeAlert("divAlertWarningJuzgador");
                        }
                    } catch (e) {
                        alert("Error al cargar Juzgadores:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgadores:\n\n" + otroobj);
                }
            });
        };

        getPaginasJuzgador = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginasJuzgador",
                    idJuzgador: $("#cmbJuzgadores").val(),
                    cantxPag: cantReg},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        limpiarGeneral = function () {
            $("#cmbJuzgadores").val(0);
            $("#cmbJuzgadoConsulta").val(0);
            $("#divFiltro").show("");
            $("#divConsultaGrid").hide("");
            $("#divResultadosGeneral").html("");
            $("#nuevoJuzgador").hide("");
            $("#divFormulario").hide("");
        };



        $(document).ready(function () {
            $("#search-nombre").keyup(function () {
                if ($(this).val().length != "") {
                    if ($(this).val().length > 3) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                            data: 'accion=consultaJuez&term=' + $(this).val(),
                            dataType: "json",
                            global: false,
                            beforeSend: function () {
    //                        $("#suggesstion-box").html("Buscando...");
                            },
                            success: function (data) {
                                var html = "";
                                if (data.status == "ok") {
                                    html += "<table rules='none' class='tableResultados'>";
                                    html += "<tbody>";
                                    for (var i = 0; i < data.data.length; i++) {
                                        html += "<tr class='estiloTr' onclick='setPersona(\"" + data.data[i].nombre + "\",\"" + data.data[i].paterno + "\",\"" + data.data[i].materno + "\",\"" + data.data[i].numeroEmpleado + "\",\"" + data.data[i].clave + "\");'>";
                                        html += "<td  width='10%'>";
                                        html += data.data[i].numeroEmpleado;
                                        html += "</td>";
                                        html += "<td  width='90%'>";
                                        html += data.data[i].nombre + " " + data.data[i].paterno + " " + data.data[i].materno;
                                        html += "</td>";
                                        html += "</tr>";
                                    }
                                    html += "</tbody>";
                                    html += " </table>";
                                    $("#suggesstion-box").show("slow");
                                    $("#suggesstion-box").html(html);
                                } else {
                                    $("#suggesstion-box").show("");
                                    $("#suggesstion-box").html("Sin resultados");
                                }

                            }
                        });
                    }
                } else {
                    $("#suggesstion-box").show("");
                    $("#suggesstion-box").html("");
                }
            });
            $("#txtNumEmpleado").keyup(function () {
                if ($(this).val().length != "") {
                    if ($(this).val().length > 2) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                            data: 'accion=consultaJuez&termCve=' + $(this).val(),
                            dataType: "json",
                            global: false,
                            beforeSend: function () {
    //                        $("#suggesstion-box").html("Buscando...");
                            },
                            success: function (data) {
                                var html = "";
                                if (data.status == "ok") {
                                    html += "<table rules='none' class='tableResultados'>";
                                    html += "<tbody>";
                                    for (var i = 0; i < data.data.length; i++) {
                                        html += "<tr class='estiloTr' onclick='setPersona(\"" + data.data[i].nombre + "\",\"" + data.data[i].paterno + "\",\"" + data.data[i].materno + "\",\"" + data.data[i].numeroEmpleado + "\",\"" + data.data[i].clave + "\");'>";
                                        html += "<td  width='10%'>";
                                        html += data.data[i].numeroEmpleado;
                                        html += "</td>";
                                        html += "<td  width='90%'>";
                                        html += data.data[i].nombre + " " + data.data[i].paterno + " " + data.data[i].materno;
                                        html += "</td>";
                                        html += "</tr>";
                                    }
                                    html += "</tbody>";
                                    html += " </table>";
                                    $("#txtNumEmpleado-box").show("slow");
                                    $("#txtNumEmpleado-box").html(html);
                                } else {
                                    $("#txtNumEmpleado-box").show("");
                                    $("#txtNumEmpleado-box").html("Sin resultados");
                                }

                            }
                        });
                    }
                } else {
                    $("#txtNumEmpleado-box").show("");
                    $("#txtNumEmpleado-box").html("");
                }
            });
        });

        limpiaDiv = function () {
    //     $("suggesstion-box").hide("slow");
    //     $("#suggesstion-box").html("");
    //    $("#search-nombre").val("");
        },
                setPersona = function (nombre, paterno, materno, numEmpleado, id) {
                    $("#suggesstion-box").hide("fast");
                    $("#suggesstion-box").html("");

                    $("#txtNumEmpleado-box").hide("fast");
                    $("#txtNumEmpleado-box").html("");



                    $("#txtCveUsuario").val(id);
                    $("#txtNumEmpleado").val(numEmpleado);
                    $("#txtPaterno").val(paterno);
                    $("#txtMaterno").val(materno);
                    $("#txtNombre").val(nombre);
                    $("#search-nombre").val("");
                };


        $(function () {
            $('#telefonoTel').validaCampo('0123456789');
            $('#celTel').validaCampo('0123456789');
    //        $('#txtNumEmpleado').validaCampo('0123456789');

            comboTiposJuzgadores();
            comboJuzgadores();
            comboJuzgadosConsulta();
            comboJuzgados();
        });
    </script>

    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>