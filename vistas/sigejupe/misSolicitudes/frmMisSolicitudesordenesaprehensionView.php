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
            width: 14.28%;
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
            <h4>Mis Solicitudes Ordenes de Aprehensi&oacute;n</h4>
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
                                <a href="#"><strong>Paso 6</strong><br>Oficio</a>
                            </li>
                            <li id="liPaso7" class="step step-7 Paso7">
                                <a href="#"><strong>Paso 7</strong><br>T&eacute;rminos de uso</a>
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>

            <div class="col-xs-12" style="border: solid 4px #881518;" >
                <br />
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="solicitudCateoController.php" target="oculto" enctype="multipart/form-data" onsubmit="return false;">
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
                                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:ordenesSolicitudes.inicia(0)">
                                            <option value="1"></option>
                                        </select>
                                    </div>
                                    <div id="divPaginador" class="form-group col-md-4  col-sm-12 col-xs-12" >
                                        <label class="control-label">Registros por p&aacute;gina:</label>
                                        <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:ordenesSolicitudes.inicia(1)">
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
                                            <th>N&uacute;m. Orden</th>
                                            <th>Carpeta</th>
                                            <th>Persona</th>
                                            <th>NIP</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.limpiar(1, true)">Limpiar</button>
                                <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.validarPaso1('S')">Siguiente ></button>
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
                                            <th>N&uacute;mero de Orden</th>
                                            <td><strong class="nmcat" ></strong></td>
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
                            <div class="panel-group" id="accordionPA" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="PersonasApreenderse">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordionPA" href="#collapsePersonasApreenderse" aria-expanded="true" aria-controls="collapsePersonasApreenderse">
                                                Persona(s) que deba(n) aprehenderse
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsePersonasApreenderse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="PersonasApreenderse">
                                        <div class="panel-body">
                                            <table id="tblPersonas" class="table table-bordered table-condensed table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Domicilio</th>
                                                        <th>G&eacute;nero</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12" >
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
                                            <table id="tblImputados" class="table table-bordered table-condensed table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Domicilio</th>
                                                        <th>G&eacute;nero</th>
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
                                            <table id="tblVictimas" class="table table-bordered table-condensed table-striped" >
                                                <thead>
                                                    <tr>
                                                        <td width="30%">Nombre</td>
                                                        <td width="45%">Domicilio</td>
                                                        <td width="15%">Genero</td>
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
                                <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.limpiar(2, true)">Limpiar</button>
                                <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.siguiente('liPaso1', 'liPaso2')">< Anterior </button>
                                <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.siguiente('liPaso3', 'liPaso2')">Siguiente ></button>
                            </div>

                        </div>    
                    </div>
                    <div id="divPaso3" class='content' style='display:none;'>
                        <h3 class="text-center" >RESPUESTA DE SOLICITUD DE ORDEN DE APREHENSION</h3>
                        <div class="col-xs-12" >
                            <div class="col-xs-4" ></div>
                            <div class="col-xs-4" >
                                <div class="col-xs-12 text-center" style="border:5px solid #881518" >
                                    <div col-md-3 col-xs-12 >Respuesta</div>
                                    <div col-xs-12 col-md-9 >
                                        <input type="checkbox" name="chkRespuestaConcedida" id="chkRespuestaConcedida" value="concedida" onclick='javascript:ordenesSolicitudes.seleccionaRespuesta();'>Concedida
                                        <input type="checkbox" name="chkRespuestaNegada" id="chkRespuestaNegada" value="negada" onclick='javascript:ordenesSolicitudes.seleccionaRespuesta();'>Negada
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4" ></div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="col-xs-12" >
                            <div class="col-md-2 col-xs-12" ></div>
                            <div class="col-md-8 col-xs-12" >
                                <div id="practica" >
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Persona(s) que deba(n) aprehenderse
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="form-group" >
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                                            <label for="txtNombrePersona" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Nombre:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Nombre" class="form-control" id="txtNombrePersona" name="txtNombrePersona">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                                            <label for="txtPaternoPersona" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Apellido Paterno</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Apellido Paterno" class="form-control" id="txtPaternoPersona" name="txtPaternoPersona">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                                            <label for="txtMaternoPersona" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">Apellido Materno</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Apellido Materno" class="form-control" id="txtMaternoPersona" name="txtMaternoPersona">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="txtDomiciolopersona" class="control-label col-xs-1">Domicilio:</label>
                                                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" ><input placeholder="Domicilio" type="text" class="form-control" id="txtDomiciolopersona" name="txtDomiciolopersona"></div>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="cmbGeneroPersona" class="control-label col-xs-1">G&eacute;nero:</label>
                                                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" >
                                                            <select class="form-control" id="cmbGeneroPersona" name="cmbGeneroPersona">
                                                                <option value="0">Selecccione un G&eacute;nero</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-center" > 
                                                        <button onclick="javascript:ordenesSolicitudes.insertRowPersonas()" class="btn btn-primary addPerson" >Agregar + </button> 
                                                        <div class="editPerson" style="display:inline" ></div>
                                                    </div>

                                                    <table id="tblPersonasAprehenderse" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Domicilio</th>
                                                                <th>G&eacute;nero</th>
                                                                <th class="text-center" ><button class="btn btn-danger" onclick="javascript:ordenesSolicitudes.deleteRow(this)">Eliminar</button></th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12" ></div>
                            <div class="col-md-12 col-xs-12" style="display:none" >
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
                                                            <input type="radio" name="plazoPractica" value="plazoHoras" onclick='javascript:ordenesSolicitudes.seleccionaPractica();'> <b>Fecha y Horas</b>
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
                                                            <input type="radio" name="plazoPractica" value="plazoHoras" onclick='javascript:ordenesSolicitudes.seleccionaPractica();'><b>Plazo maximo en horas</b>
                                                        </div>
                                                        <div id="HorasPractica">
                                                            <div class="form-group" >
                                                                <label class="control-label col-xs-3 " >Horas</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input type='text' name='plazoHorasPractica' id='plazoHorasPractica' class='form-control' size='10' maxlength="3" onkeypress="return validar_texto(event)">
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
                                                            <input type="radio" name="rindeInforme" value="S" onclick='javascript:ordenesSolicitudes.seleccionaRendirinforme("S");'>Si
                                                            <input type="radio" name="rindeInforme" value="N" onclick='javascript:ordenesSolicitudes.seleccionaRendirinforme("N");'>NO
                                                        </div>
                                                    </div>
                                                    <div id="rendirInforme">
                                                        <div class="form-group" style="padding-left: 15px;" >
                                                            <input type="radio" name="plazoInforme" value="plazoFecha" onclick='javascript:ordenesSolicitudes.seleccionaInforme();' checked="checked" ><b>Fecha y Horas</b>
                                                        </div>
                                                        <div id="fechaHoraInforme">
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" >Fecha :</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input placeholder="Fecha" readonly="readonly" type='text' name='fechaInforme' id='fechaInforme' class='form-control' size='10'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-xs-3" >Hora :</label>
                                                                <div class="col-md-9 col-xs-12" >
                                                                    <input placeholder="Hora" readonly="readonly" type='text' name='HoraInforme' id='HoraInforme' class='form-control' size='10'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 15px;" >
                                                            <input type="radio" name="plazoInforme" value="plazoHoras" onclick='javascript:ordenesSolicitudes.seleccionaInforme();'><b>Plazo maximo en horas</b>
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
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.limpiar(3, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.siguiente('liPaso2', 'liPaso3')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.validarPaso3('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso4" class='content' style='display:none;'>
                        <div id="divNotaNegado" class="col-xs-12" >
                            <h3 class="text-center" >Orden de Aprehensi&oacute;n Negado</h3>
                            <div class="form-group" >
                                <label class="col-xs-12" >La orden de aprehensi&oacute;n se niega para:</label>
                                <!--<div class="col-xs-12" ><textarea rows="10" class="form-control" cols="100" id="descCateoNegado"></textarea></div>-->
                                <script id="descCateoNegado" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.limpiar(4, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.siguiente('liPaso3', 'liPaso4')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.validarPaso4('S')">Siguiente ></button>
                        </div>
                    </div>
                    <!--<div id="divPaso5" class='content' style='display:none;'>
                        <div id="divNotaConcedido" class="col-xs-12" >
                            <h1>Cateo Concedido</h1>
                            <div class="form-group" >
                                <label class="col-xs-12" >La orden de cateo se concede para:</label>
                                <div class="col-xs-12" >
                                    <textarea rows="10" class="form-control" cols="100" id="descCateoConcedido"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="limpiar(5, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="siguiente('liPaso4', 'liPaso5')">< Anterior </button>
                            <button class="btn btn-primary" onclick="validarPaso5('S')">Siguiente ></button>
                        </div>
                    </div>-->
                    <div id="divPaso5" class='content' style='display:none;'>
                        <div id="divNotaConcedido">
                            <h3 class="text-center" >Resoluci&oacute;n</h3>
                            <div class="form-group" >
                                <div class="col-xs-12" >
                                    <!--<textarea rows="10" cols="100" class="form-control" id="descResolucion"></textarea>-->
                                    <script id="descResolucion" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.limpiar(5, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.siguiente('liPaso4', 'liPaso5')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.validarPaso5('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso6" class='content' style='display:none;'>
                        <div id="divNotaConcedido">
                            <h3 class="text-center" >Oficio</h3>
                            <div class="form-group" >
                                <div class="col-xs-12" >
                                    <!--<textarea rows="10" cols="100" class="form-control" id="descResolucion"></textarea>-->
                                    <script id="descOficio" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.limpiar(6, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.siguiente('liPaso5', 'liPaso6')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:ordenesSolicitudes.validarPaso6('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso7" class='content' style='display:none;'>

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
                                <button class="btn btn-primary" id="limpiar6" name="limpiar6" onclick="javascript:ordenesSolicitudes.limpiar(7, true)">Limpiar</button>
                                <button class="btn btn-primary" id="anterior6" name="anterior6" onclick="javascript:ordenesSolicitudes.siguiente('liPaso6', 'liPaso7')">< Anterior </button>
                                <button class="btn btn-primary" id="enviar" name="enviar" onclick="javascript:ordenesSolicitudes.validarPaso7()">Enviar</button>
                                <button class="btn btn-primary" id="nueva" name="nueva" onclick="javascript:ordenesSolicitudes.nuevaResolucion()">Nueva</button>
                                <button class="btn btn-primary" id="imprimir" name="imprimir" onclick="javascript:ordenesSolicitudes.imprimirComprobante()">Descargar</button>
                                <button class="btn btn-primary" id="imprimirOficio" name="imprimirOficio" onclick="javascript:ordenesSolicitudes.imprimirOficio()">Descargar Oficio</button>
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

    <script src="sigejupe/misSolicitudes/missolicitudesordenes.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js" type="text/javascript"></script>
    <script>
                                    var ordenesSolicitudes = new misSolicitudesOrdenes();
                                    var helper = new Helpers();
                                    $(function () {
                                        ordenesSolicitudes.inicia(1);

                                        UE.delEditor("descResolucion");
                                        var ue = UE.getEditor('descResolucion');
                                        ue.ready(function () {
                                            ue.setContent("");
                                        });

                                        UE.delEditor("descCateoNegado");
                                        var ued = UE.getEditor('descCateoNegado');
                                        ued.ready(function () {
                                            ued.setContent("");
                                        });

                                        UE.delEditor("descOficio");
                                        var ueo = UE.getEditor('descOficio');
                                        ueo.ready(function () {
                                            ueo.setContent("");
                                        });

                                        var urlGenero = "Generos";
                                        var renderGenero = ["cmbGeneroPersona"];
                                        var colGenero = ["cveGenero", "desGenero"];
                                        helper.loadCombos("", renderGenero, colGenero, urlGenero);
                                        helper.ladTerms("cveTipoTermino=2");
                                        var nowTemp = new Date();
                                        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                                        $('#HoraInforme').timepicker({
                                            pickDate: false,
                                            showMeridian: false,
                                            minuteStep: 1,
                                            timeFormat: 'H:mm:ss'
                                        });
                                        $('#HoraInforme').val("");
                                        $('#HoraPractica').timepicker({
                                            pickDate: false,
                                            showMeridian: false,
                                            minuteStep: 1,
                                            timeFormat: 'H:mm:ss'
                                        });
                                        $('#HoraPractica').val("");
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