<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style>
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
            width: 16.65%;
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
            background:#df3338; 
        }
        .subtitulo{
            font-family: Arial;
            font-size: 15px;
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

    </style>
    <script>
        var chatid = '<?php echo $_SESSION['chatid']; ?>';
    </script>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Mis Solicitudes Actos de Investigaci&oacute;n Que Requieren Autorizaci&oacute;n Judicial</h4>
        </div>
        <div class="panel-body">
            <div class="row" >
                <div class="col-xs-12">
                    <div class="steps">
                        <ul>
                            <li id="liPaso1" class="step step-1 Paso1">
                                <a href="#" class="active" ><strong>Paso 1</strong><br>Solicitudes Pendientes</a>
                            </li>
                            <li id="liPaso2" class="step step-2 Paso2">
                                <a href="#"><strong>Paso 2</strong><br>Detalle de la Solicitud</a>
                            </li>
                            <li id="liPaso3" class="step step-3 Paso3">
                                <a href="#"><strong>Paso 3</strong><br>Respuesta del Juez</a>
                            </li>
                            <li id="liPaso4" class="step step-4 Paso4">
                                <a href="#"><strong>Paso 4</strong><br>Autorizaci&oacute;n Negada</a>
                            </li>
                            <li id="liPaso5" class="step step-5 Paso5">
                                <a href="#"><strong>Paso 5</strong><br>Resoluci&oacute;n</a>
                            </li>
                            <li id="liPaso6" class="step step-6 Paso6">
                                <a href="#"><strong>Paso 6</strong><br>T&eacute;rminos de uso</a>
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>

            <div class="col-xs-12" style="border: solid 4px #881518;" >
                <br />
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="solicitudMuestraController.php" target="oculto" enctype="multipart/form-data" onsubmit="return false;">            
                    <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div>
                    <div class="row alert alert-success alert-dismissable" style="display:none" id="divAlertSuccess" ></div>

                    <div id="divPaso1" class='content col-xs-12' style='display:none;'>
                        <div class="col-md-12" >
                            <div class="paginacion col-md-12 col-xs-12 " style="display:none" >    
                                <div class="col-md-4"></div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="form-group col-xs-12 col-md-3">
                                        <label class="control-label" id="totalReg"></label>
                                    </div>
                                    <div id="divPaginador" class="form-group col-md-3 col-sm-12 col-xs-12" >
                                        <label class="control-label">Pagina:</label>
                                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:mS.inicia(0)">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div id="divPaginador" class="form-group col-md-4  col-sm-12 col-xs-12" >
                                        <label class="control-label">Registros por p&aacute;gina:</label>
                                        <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:mS.inicia(1)">
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
                            </div>
                            <div class="col-xs-12 table-responsive" style="display:none" >
                                <table id="tblSolicitudes" class="table table-bordered table-condensed table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Juzgado</th>
                                            <th>N&uacute;m. Toma de Muestra</th>
                                            <th>Carpeta</th>
                                            <th>Imputados/Ofednidos</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" onclick="javascript:mS.limpiar(1, true)">Limpiar</button>
                                <button class="btn btn-primary" onclick="javascript:mS.validarPaso1('S')">Siguiente ></button>
                            </div>
                        </div>
                    </div>
                    <div id="divPaso2" class='content col-xs-12 ' style='display:none;'>
                        <strong><h3 class="text-center" >SOLICITUD ENVIADA POR EL MINISTERIO P&Uacute;BLICO</h3></strong>
                        <div class="col-xs-12" >
                            <div class="col-md-3 col-xs-12" ></div>
                            <div class="col-md-6 col-xs-12" >
                                <div class="table-responsive" >
                                    <h4 class="text-center" >Detalles</h4>
                                    <table class="table table-striped table-hover table-bordered table-condensed" >
                                        <tr>
                                            <th>N&uacute;mero de Toma de Muestra</th>
                                            <td><strong class="nmmuestra" ></strong></td>
                                        </tr>
                                        <tr>
                                            <th>Nombre del Ministerio P&uacute;blico</th>
                                            <td><strong class="nommp" ></strong></td>
                                        </tr>
                                        <tr>
                                            <th>Email del Ministerio P&uacute;blico</th>
                                            <td><strong class="emailMp" ></strong></td>
                                        </tr>
                                        <tr>
                                            <th>Fecha de Solicitud</th>
                                            <td><strong class="fecsol" ></strong></td>
                                        </tr>
                                        <tr>
                                            <th>Carpeta de Investigaci&oacute;n</th>
                                            <td><strong class="carpinv" ></strong></td>
                                        </tr>
                                        <tr style="display:none" >
                                            <th>NUC</th>
                                            <td><strong class="nucIn" ></strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12" ></div>
                        </div>
                        <div class="col-xs-12" >
                            <div class="col-xs-12 text-center" >
                                <p>&nbsp;</p>
                                <h4>Solicitud</h4>
                            </div>
                            <div class="col-xs-12" id="informeSolicitudTexto" style="border: 3px solid #881518;" ></div>
                        </div>
                        <div class="col-xs-12" >
                            <div class="col-xs-12 text-center" ><p>&nbsp;</p><h4>Archiv(o)s Adjuntos</h4></div>
                            <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                <fileFound></fileFound>
                            </div>
                        </div>

                        <div class="col-xs-12" >
                            <p>&nbsp;</p>
                            <div class="panel-group" id="accordionIOD" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ImputadosTab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordionIOD" href="#collapseImputadosTab" aria-expanded="true" aria-controls="collapseImputadosTab">
                                                Imputados
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseImputadosTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ImputadosTab">
                                        <div class="panel-body">
                                            <table id="tblImputadosV" class="table table-bordered table-condensed table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Toma de Muestras Fracci&oacute;n 4</th>
                                                        <th>Reconocimiento de Ex&aacute;mes F&iacute;sicos Fracci&oacute;n 5</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="OfendidosTab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordionIOD" href="#collapseOfendidosTab" aria-expanded="true" aria-controls="collapseOfendidosTab">
                                                Victimas
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOfendidosTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="OfendidosTab">
                                        <div class="panel-body">
                                            <table id="tblVictimasV" class="table table-bordered table-condensed table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Toma de Muestras Fracci&oacute;n 4</th>
                                                        <th>Reconocimiento de Ex&aacute;mes F&iacute;sicos Fracci&oacute;n 5</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="DelitosTab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordionIOD" href="#collapseDelitosTab" aria-expanded="true" aria-controls="collapseDelitosTab">
                                                Delitos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseDelitosTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="DelitosTab">
                                        <div class="panel-body">
                                            <table id="tblDelitos" class="table table-bordered table-condensed table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th>Delitos</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center" >
                                <button class="btn btn-primary" onclick="javascript:mS.limpiar(2, true)">Limpiar</button>
                                <button class="btn btn-primary" onclick="javascript:mS.siguiente('liPaso1', 'liPaso2')">< Anterior </button>
                                <button class="btn btn-primary" onclick="javascript:mS.siguiente('liPaso3', 'liPaso2')">Siguiente ></button>
                            </div>

                        </div>    
                    </div>
                    <div id="divPaso3" class='content' style='display:none;'>
                        <h3 class="text-center" >RESPUESTA DE SOLICITUD DE TOMAS DE MUESTRA</h3>
                        <div class="col-xs-12" >
                            <div class="col-xs-4" ></div>
                            <div class="col-xs-4" >
                                <div class="col-xs-12 text-center" style="border:5px solid #881518" >
                                    <div col-md-3 col-xs-12 >Respuesta</div>
                                    <div col-xs-12 col-md-9 >
                                        <input type="checkbox" name="chkRespuestaConcedida" id="chkRespuestaConcedida" value="concedida" onclick='javascript:mS.seleccionaRespuesta();'>Concedida
                                        <input type="checkbox" name="chkRespuestaNegada" id="chkRespuestaNegada" value="negada" onclick='javascript:mS.seleccionaRespuesta();'>Negada
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4" ></div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="col-xs-12" >
                            <div class="col-md-8 col-xs-12" >
                                <div id="practica" >
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Imputado(s)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="form-group" >
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Tipo de Persona:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <select onchange="javascript:mS.TipoPersona(this, 1)" name="cmbTipoPersona" id="cmbTipoPersona" class="form-control">
                                                                    <option value="0" >Selecciona una Opci&oacute;n</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display:none" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre Moral:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Nombre Moral" class="form-control" id="txtNombreMoral" name="txtNombreMoral">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Nombre" class="form-control" id="txtNomImputado" name="txtNomImputado">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Alias</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Alias" class="form-control" id="txtAlImputado" name="txtAlImputado">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Paterno:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Apellido Paterno" class="form-control" id="txtPatImputado" name="txtPatImputado">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* G&eacute;nero:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <select class="form-control" id="cmbGenImputado" name="cmbGenImputado">
                                                                    <option value="0">Selecccione un g&eacute;nero</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Materno:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Apellido Materno" class="form-control" id="txtMatImputado" name="txtMatImputado">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Detenido</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="checkbox" class="form-control" id="txtDetenidoImputado" name="txtDetenidoImputado" value="N" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Domicilio:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Domicilio" class="form-control" id="txtDomImputado" name="txtDomImputado">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Tel&eacute;fono:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Tel&eacute;fono" class="form-control" id="txtTelImputado" onkeypress="return validateNumber(event)" name="txtTelImputado" maxlength="10" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Email:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Email" class="form-control email" style="text-transform: none;" id="txtEmailImputado" name="txtEmailImputado">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-center" >
                                                        <button class="btn btn-primary addImputado" onclick="javascript:mS.addImputados()">Agregar + </button>
                                                        <div class="editImputado" style="display:inline" ></div>
                                                    </div>

                                                    <div class="table-responsive" >
                                                        <table id="tblImputados" class="table table-bordered table-condensed table-hovers" >
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 25px" class="text-center"><button class="btn btn-danger" onclick="javascript:mS.deleteRow(this)"><span><i class="fa fa-trash-o" ></i></span></button></th>
                                                                    <th>Nombre</th>
                                                                    <th>Toma de Muestras Fracci&oacute;n 4 </th>
                                                                    <th>Reconocimiento de Ex&aacute;menes F&iacute;sicos Fracci&oacute;n 5</th>
                                                                    <th>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Ofendido(s)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">

                                                    <div class="change col-xs-12 col-md-12 col-lg-12 col-sm-12" >
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Tipo de Persona:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <select onchange="javascript:mS.TipoPersona(this, 2)" name="cmbTipoPersonaVictima" id="cmbTipoPersonaVictima" class="form-control">
                                                                        <option value="0" >Selecciona una Opci&oacute;n</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre Moral:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Nombre Moral" class="form-control" id="txtNombreMoralVictima" name="txtNombreMoralVictima">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* G&eacute;nero:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <select class='form-control' id="cmbGenVictima" name="cmbGenVictima">
                                                                        <option value="0">Selecccione un g&eacute;nero</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Nombre" class='form-control' id="txtNomVictima" name="txtNomVictima">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Paterno:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Apellido Paterno" class='form-control' id="txtPatVictima" name="txtPatVictima">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Materno:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Apellido Materno" class='form-control' id="txtMatVictima" name="txtMatVictima">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Domicilio:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Domicilio" class='form-control' id="txtDomVictima" name="txtDomVictima">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Tel&eacute;fono:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Tel&eacute;fono" class='form-control' id="txtTelVictima" onkeypress="return validateNumber(event)" name="txtTelVictima" maxlength="10" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Email:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Email" class='form-control email' style="text-transform: none;" id="txtEmVictima" name="txtEmVictima">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 col-xs-12 col-md-12 tutores" style="display:none" >
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >
                                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Datos del Tutor</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Tipo de Tutor:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <select class="form-control" id="cmbTipoTutor" name="cmbTipoTutor">
                                                                        <option value="0">Selecccione un Tipo de Tutor</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* G&eacute;nero:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <select class="form-control" id="cmbGenTutor" name="cmbGenTutor">
                                                                        <option value="0">Selecccione un G&eacute;nero</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Nombre" class='form-control' style="text-transform: uppercase;" id="txtnameTutor" name="txtnameTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Paterno:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Apellido Paterno" class='form-control' style="text-transform: uppercase;" id="txtPaternoTutor" name="txtPaternoTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Materno:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Apellido Materno" class='form-control' style="text-transform: uppercase;" id="txtMaternoTutor" name="txtMaternoTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Fecha de Nacimiento:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Fecha de Nacimiento" class='form-control' readonly="readonly" style="text-transform: uppercase;" id="txtdateTutor" name="txtdateTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Domicilio:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Domicilio" class='form-control' style="text-transform: uppercase;" id="txtDomicilioTutor" name="txtDomicilioTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Tel&eacute;fono:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Tel&eacute;fono" class='form-control' style="text-transform: uppercase;" onkeypress="return validateNumber(event)" maxlength="10" id="txtphoneTutor" name="txtphoneTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" >
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Correo Electr&oacute;nico:</label>
                                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                    <input type="text" placeholder="Email" class='form-control email' style="text-transform: none;" id="txtEmTutor" name="txtEmTutor">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" >
                                                        <div class="form-group text-center " >
                                                            <button onclick="javascript:mS.addVictimas()" class="btn btn-primary addOfendido" >Agregar +</button>
                                                            <div class="editOfendido" style="display:inline" ></div>
                                                        </div>

                                                        <div class="table-responsive" >
                                                            <table id="tblVictimas" class="table table-bordered table-condensed table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:25px" class="text-center"><button class="btn btn-danger" onclick="javascript:mS.deleteRow(this)"><span><i class="fa fa-trash-o" ></i></span></button></th>
                                                                        <th>Nombre</th>
                                                                        <th>Toma de Muestras Fracci&oacute;n 4 </th>
                                                                        <th>Reconocimiento de Ex&aacute;menes F&iacute;sicos Fracci&oacute;n 5</th>
                                                                        <th>Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12" >
                                <div id="informe">  
                                    <div class="panel-group" id="accordionInforme" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="PracticaHead">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordionInforme" href="#collapsePracticaHead" aria-expanded="true" aria-controls="collapsePracticaHead">
                                                        D&iacute;a y hora para su pr&aacute;ctica
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapsePracticaHead" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="PracticaHead">
                                                <div class="panel-body">
                                                    <div id="divFechasRespuesta">
                                                        <div class="form-group" style="padding-left: 15px;" >
                                                            <input type="radio" name="plazoPractica" value="plazoHoras" onclick='javascript:mS.seleccionaPractica();'> <b>Fecha y Horas</b>
                                                        </div>
                                                        <div id="fechaHoraPractica" >
                                                            <div class="form-group" >
                                                                <label class="control-label col-xs-3" >Fecha</label>
                                                                <div class="col-xs-9" >
                                                                    <input type='text' readonly="readonly" placeholder="Fecha de Practica" name='fechaPractica' id='fechaPractica' class='form-control' size='10'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" >
                                                                <label class="control-label col-xs-3" >Hora:</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input type='text' readonly="readonly" placeholder="Hora de Practica" name='HoraPractica' id='HoraPractica' class='form-control' size='10'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 15px;" >
                                                            <input type="radio" name="plazoPractica" value="plazoHoras" onclick='javascript:mS.seleccionaPractica();'><b>Plazo maximo en horas</b>
                                                        </div>
                                                        <div id="HorasPractica">
                                                            <div class="form-group" >
                                                                <label class="control-label col-xs-3 " >Horas</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input placeholder="Horas"  type='text' name='plazoHorasPractica' id='plazoHorasPractica' class='form-control' size='10' maxlength="3" onkeypress="return validar_texto(event)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="RInformeHead">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionInforme" href="#collapseRInformeHead" aria-expanded="false" aria-controls="collapseRInformeHead">
                                                        Se rendir&aacute; informe
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseRInformeHead" class="panel-collapse collapse" role="tabpanel" aria-labelledby="RInformeHead">
                                                <div class="panel-body">
                                                    <div class="form-group" >
                                                        <label class="control-label col-xs-5">&#191;Rendir informe?</label>
                                                        <div class="col-md-7 col-xs-12" >
                                                            <input type="radio" name="rindeInforme" value="S" onclick='javascript:mS.seleccionaRendirinforme("S");'>Si
                                                            <input type="radio" name="rindeInforme" value="N" onclick='javascript:mS.seleccionaRendirinforme("N");'>NO
                                                        </div>
                                                    </div>
                                                    <div id="rendirInforme">
                                                        <div class="form-group" style="padding-left: 15px;" >
                                                            <input type="radio" name="plazoInforme" value="plazoFecha" onclick='javascript:mS.seleccionaInforme();' checked="checked" ><b>Fecha y Horas</b>
                                                        </div>
                                                        <div id="fechaHoraInforme">
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" >Fecha :</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input placeholder="Fecha Informe" readonly="readonly" type='text' name='fechaInforme' id='fechaInforme' class='form-control' size='10'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" >Hora :</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input placeholder="Hora Informe" readonly="readonly" type='text' name='HoraInforme' id='HoraInforme' class='form-control' size='10'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 15px;" >
                                                            <input type="radio" name="plazoInforme" value="plazoHoras" onclick='javascript:mS.seleccionaInforme();'><b>Plazo maximo en horas</b>
                                                        </div>
                                                        <div id="HorasInforme">
                                                            <div class="form-group" >
                                                                <label class="col-xs-3" >Horas:</label>
                                                                <div class="col-md-9 col-xs-9" >
                                                                    <input type='text' placeholder="Horas" name='plazoHorasInforme' id='plazoHorasInforme' class='form-control' size='10' maxlength="3" onkeypress="return validar_texto(event)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="javascript:mS.limpiar(3, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:mS.siguiente('liPaso2', 'liPaso3')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:mS.validarPaso3('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso4" class='content' style='display:none;'>
                        <div id="divNotaNegado" class="col-xs-12" >
                            <h3 class="text-center" >Toma de Muestras Negado</h3>
                            <div class="form-group" >
                                <label class="col-xs-12" >La orden de toma de muestras se niega para:</label>
                                <div class="col-xs-12" >
                                    <script id="descMuestraNegado" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="javascript:mS.limpiar(4, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:mS.siguiente('liPaso3', 'liPaso4')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:mS.validarPaso4('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso5" class='content' style='display:none;'>
                        <div id="divNotaConcedido">
                            <h3 class="text-center" >Resoluci&oacute;n</h3>
                            <div class="form-group" >
                                <div class="col-xs-12" >
                                    <!--<textarea rows="10" cols="100" class="form-control" id="descMuestraResolucion"></textarea>-->
                                    <script id="descMuestraResolucion" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="javascript:mS.limpiar(5, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:mS.siguiente('liPaso4', 'liPaso5')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:mS.validarPaso5('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso6" class='content' style='display:none;'>

                        <div class="col-xs-12" >
                            <div id="terminos" style="border: 4px solid #881518; font-size: 12px; padding: 20px;"></div>
                        </div>

                        <div class="col-xs-12" >
                            <br />
                            <div class="col-xs-6" >
                                <div class="form-group" >
                                    <label class="control-label col-xs-3" >Nombre del Juez:</label>
                                    <div class="col-md-9 col-xs-12" >
                                        <input id="txtJuez" class="form-control" type="text" name="txtJuez" disabled="true" size='80'>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="control-label col-xs-3" >Cargo: </label>
                                    <div class="col-md-9 col-xs-12" >
                                        <input id="txtCargo" class="form-control" type="text" name="txtCargo" disabled="true" size='80'>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="control-label col-xs-3" >Juzgado: </label>
                                    <div class="col-md-9 col-xs-12" >
                                        <input id="txtJuzgado" class="form-control" type="text" name="txtJuzgado" disabled="true" size='80'>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6" >
                                <div class="form-group text-center" >
                                    <strong>Ministerios P&uacute;blicos responsables</strong>
                                </div>
                                <div class="table-responsive" >
                                    <table class="table table-bordered table-striped table-hover" id="tblMpsResponsables">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <input  type="checkbox" id="chkTerminosUso"name="chkTerminosUso" value="negada" colspan="4">Aceptar
                        </div>

                        <div id="botonesTerminar">
                            <div class='alert alert-info text-center LoadInfo' style="display: none" ></div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" id="limpiar6" name="limpiar6" onclick="javascript:mS.limpiar(6, true)">Limpiar</button>
                                <button class="btn btn-primary" id="anterior6" name="anterior6" onclick="javascript:mS.siguiente('liPaso5', 'liPaso6')">< Anterior </button>
                                <button class="btn btn-primary" id="enviar" name="enviar" onclick="javascript:mS.validarPaso6()">Enviar</button>
                                <button class="btn btn-primary" id="nueva" name="nueva" onclick="javascript:mS.nuevaResolucion()">Nueva</button>
                                <button class="btn btn-primary" id="imprimir" name="imprimir" onclick="javascript:mS.imprimirComprobante()">Descargar</button>
                                <div id="divSolicitudesMinisterioPublico" ></div>
                            </div>
                        </div>
                    </div>
                    <input type='hidden' name='accion' id='accion' value='generaComprobante'/>
                    <input type='hidden' name='idRegistro' id='idRegistro' value=''/>
                    <input type='hidden' name='tipoImpresion' id='tipoImpresion' value='pdf'/>
                    <div id="imprimirRespuesta" ></div>
                    <input id="cmbJuzgadoSolicitar" type="hidden" />
                </form>
                <iframe name="comprobante" id="comprobante" height="0%" width="0%" style='display:none;'></iframe>
            </div>
        </div>
    </div>

    <div class="modal fade" data-backdrop="static" id="toma-muestras-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="toma-muestras">
                <div class="modal-header">Agregar <titleModal></titleModal></div>
                <div class="modal-body">
                    <div class="muestras" style="display:none" >
                        <label>SELECCIONA UNA MUESTRA</label>
                        <select id="cmbMuestras" class="form-control" >
                            <option value="0" >SELECCIONA UN OPCI&Oacute;N</option>
                        </select>
                    </div>
                    <div class="examenes" style="display:none" >
                        <label>SELECCIONA UN EX&aacute;MEN F&Iacute;SICO</label>
                        <select id="cmbExamenes" class="form-control" >
                            <option value="0" >SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                    <br />
                    <div class="lit-items" ></div>
                    <br />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary addItem">Agregar</button>
                    <button type="button" onclick="javascript:mS.cancelar()" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="sigejupe/misSolicitudesmuestras/missolicitudesmuestras.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js" type="text/javascript"></script>
    <script>
                        var mS = new misSolicitudesMuestras();
                        var helper = new Helpers();

                        $(function () {
                            mS.inicia(1);

                            UE.delEditor("descMuestraResolucion");
                            var ue = UE.getEditor('descMuestraResolucion');
                            ue.ready(function () {
                                ue.setContent("");
                            });

                            UE.delEditor("descMuestraNegado");
                            var ued = UE.getEditor('descMuestraNegado');
                            ued.ready(function () {
                                ued.setContent("");
                            });

                            var urlGenero = "Generos";
                            var renderGenero = ["cmbGenImputado", "cmbGenVictima", "cmbGenTutor"];
                            var colGenero = ["cveGenero", "desGenero"];
                            helper.loadCombos("", renderGenero, colGenero, urlGenero);
                            var urlGenero = "Tipospersonas";
                            var renderGenero = ["cmbTipoPersona"];
                            var colGenero = ["cveTipoPersona", "desTipoPersona"];
                            var filtro = "soloVictima=N&otro";
                            helper.loadCombos(filtro, renderGenero, colGenero, urlGenero);
                            var urlGenero = "Tipospersonas";
                            var renderGenero = ["cmbTipoPersonaVictima"];
                            var colGenero = ["cveTipoPersona", "desTipoPersona"];
                            helper.loadCombos("", renderGenero, colGenero, urlGenero);
                            var urlTipoTutor = "Tipostutores";
                            var renderTipoTutor = ["cmbTipoTutor"];
                            var colTipoTutor = ["cveTipoTutor", "desTipoTutor"];
                            helper.loadCombos("", renderTipoTutor, colTipoTutor, urlTipoTutor);
                            var urlTipoTutor = "Muestras";
                            var renderTipoTutor = ["cmbMuestras"];
                            var colTipoTutor = ["cveMuestra", "desMuestra"];
                            var filter = "Tipo=M&s"
                            helper.loadCombos(filter, renderTipoTutor, colTipoTutor, urlTipoTutor);
                            var urlTipoTutor = "Muestras";
                            var renderTipoTutor = ["cmbExamenes"];
                            var colTipoTutor = ["cveMuestra", "desMuestra"];
                            var filter = "Tipo=F&s"
                            helper.loadCombos(filter, renderTipoTutor, colTipoTutor, urlTipoTutor);
                            helper.ladTerms("cveTipoTermino=2");
                            $('#txtdateTutor').datepicker({
                                format: "dd/mm/yyyy",
                            });
                            var nowTemp = new Date();
                            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                            $('#HoraInforme').timepicker({
                                pickDate: false,
                                showMeridian: false,
                                minuteStep: 1,
                                timeFormat: 'H:mm:ss'
                            });
                            $('#HoraInforme').val("")
                            $('#HoraPractica').timepicker({
                                pickDate: false,
                                showMeridian: false,
                                minuteStep: 1,
                                timeFormat: 'H:mm:ss'
                            });
                            $('#HoraPractica').val("")
                            $("#fechaInforme").datepicker({
                                format: "dd/mm/yyyy",
                                onRender: function (date) {
                                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                                }
                            });
                            $("#fechaPractica").datepicker({
                                format: "dd/mm/yyyy",
                                onRender: function (date) {
                                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
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