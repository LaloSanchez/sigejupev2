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
            width: 20%;
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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Solicitud de Cateo</h4>
        </div>
        <div class="panel-body">
            <div id="divNumeroCateo" style="display:none;">
                <table border='0' cellpadding="2" align="right" cellspacing="0" class="Arial12" width="20%">
                    <tr>
                        <td align="right"><strong>N&uacute;mero Cateo:</strong></td>
                        <td align="left"><input type="text" class="frmcaja" id="numCateo" value="" name="numCateo" size="5" readonly></td>
                        <td align="center">/</td>
                        <td align="left"><input type="text" class="frmcaja" id="aniCateo" value="" name="aniCateo" size="5" readonly></td>
                    </tr>
                </table> 
            </div>
            <div class="row" >
                <div class="col-xs-12">
                    <div class="steps">
                        <ul>
                            <li class="step step-1 Paso1">
                                <a href="#" class="active" ><strong>Paso 1</strong><br>Carpeta Investigaci&oacute;n</a>
                            </li>
                            <li class="step step-2 Paso2">
                                <a href="#"><strong>Paso 2</strong><br>Persona(s) u Objeto(s)</a>
                            </li>
                            <li class="step step-3 Paso3">
                                <a href="#"><strong>Paso 3</strong><br>Imputado(s),Victima(s) y Delitos (opcional)</a>
                            </li>
                            <li class="step step-4 Paso4">
                                <a href="#"><strong>Paso 4</strong><br>Solicitud escrita</a>
                            </li>
                            <li class="step step-5 Paso5">
                                <a href="#"><strong>Paso 5</strong><br>Terminos de uso</a>
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
                    <fieldset>
                        <div id="divPaso1" class="content col-xs-12" style="display:block;">
                            <div class="form-group" >
                                <label for="cmbJuzgadoSolicitar" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >Juzgado a solicitar:</label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <select class="form-control" name="cmbJuzgadoSolicitar" id="cmbJuzgadoSolicitar">
                                        <option value="0">Seleccione el juzgado a solicitar cateo</option>
                                    </select>
                                </div>                                
                            </div>

                            <div class="form-group" >
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" >En su caso:</div>
                            </div>
                            <div class="form-group" >
                                <label for="txtNumCausa" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >
                                    <input type="radio" value="1" name="tipoNumero" id="tipoNumero" onclick="javascript:cateos.seleccionTipo(this)" checked="">&nbsp;N&uacute;mero de Causa: 
                                </label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >Tipo de Causa:</label>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                                        <select class="form-control" name="TipoCausa" id="tipoCausa" >
                                            <option value="0" >Seleccione una opci&oacute;n</option>
                                            <option value="2" >CAUSA DE CONTROL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" ></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                    <input type="text" placeholder="Num. Causa" name="txtNumCausa" id="txtNumCausa" class="form-control" size="5" onkeypress=" return validateNumber(event)">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                    <input type="text" maxlength="4" placeholder="A&ntilde;o de Causa" name="txtAniCausa" id="txtAniCausa" class="form-control" size="5" onkeypress="return validateNumber(event)">
                                </div>
                                <!--                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >
                                    <select class="form-control" name="cmbJuzgadoProcedencia" id="cmbJuzgadoProcedencia">
                                        <option value="0">Seleccione el juzgado de procedencia</option>
                                    </select>   
                                                            </div>-->
                            </div>
                            <div class="form-group" >
                                <label for="txtCarpeta" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >
                                    <input type="radio" value="2" name="tipoNumero" id="tipoNumero" onclick="javascript:cateos.seleccionTipo(this)">&nbsp;Otro:
                                </label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                        <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >Carpeta de Investigaci&oacute;n o NUC:</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                            <input type="text" placeholder="Carpeta de Investigaci&oacute;n o NUC" name="txtCarpeta" id="txtCarpeta" class="form-control" size="20" disabled="" />
                                        </div>
                                    </div>                                
                                    <!--                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                                        <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >NUC:</label>
                                                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                            <input type="text" placeholder="NUC" name="txtNuc" id="txtNuc" class="form-control" size="20" disabled="" />
                                                                        </div>
                                                                    </div>                                -->
                                </div>                                
                            </div>                                
                            <div class="form-group" >
                                <label for="txtEmail" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >
                                    Correo electr&oacute;nico institucional para la notificaci&oacute;n del M.P.:
                                </label>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Correo Electronico" name="txtEmail" style="text-transform: none;" id="txtEmail" class="form-control" value="" size="40">
                                </div>                                
                            </div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary text-right" id="btnStart" onclick="javascript:cateos.validarPaso1(true)">Siguiente &gt;</button>
                            </div>
                        </div>
                        <div id="divPaso2" class="content col-xs-12" style="display:none;">
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
                                                    <label for="txtNomPersona" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre:</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                        <input type="text" placeholder="Nombre" class="form-control" id="txtNomPersona" name="txtNomPersona">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                                    <label for="txtPatPersona" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Paterno</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                        <input type="text" placeholder="Apellido Paterno" class="form-control" id="txtPatPersona" name="txtPatPersona">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                                    <label for="txtMatPersona" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Apellido Materno</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                        <input type="text" placeholder="Apellido Materno" class="form-control" id="txtMatPersona" name="txtMatPersona">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" >
                                                <label for="txtMatPersona" class="control-label col-xs-1">* Domicilio:</label>
                                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" ><input placeholder="Domicilio" type="text" class="form-control" id="txtDomPersona" name="txtDomPersona"></div>
                                            </div>
                                            <div class="form-group" >
                                                <label for="txtMatPersona" class="control-label col-xs-1">* G&eacute;nero:</label>
                                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" >
                                                    <select class="form-control" id="cmbGenPersona" name="cmbGenPersona">
                                                        <option value="0">Selecccione un G&eacute;nero</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group text-center" > 
                                                <button onclick="javascript:cateos.addPersona()" class="btn btn-primary addPerson" >Agregar + </button> 
                                                <div style="display:inline" class="editPerson" ></div>
                                            </div>

                                            <table id="tblPersonas" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Domicilio</th>
                                                        <th class="text-center" ><button class="btn btn-danger" onclick="javascript:cateos.deleteRow(this)">Eliminar</button></th>
                                                    </tr>
                                                </thead>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Objeto(s) buscado(s)
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="form-group" >
                                                <label class="control-label col-xs-1">* Descripci&oacute;n: </label>
                                                <div class="col-md-11" >
                                                    <input type="text" placeholder="Descripci&oacute;n" class="form-control" id="txtDescObjeto" name="txtDescObjeto">
                                                </div>
                                            </div>
                                            <div class="form-group" >
                                                <label class="control-label col-xs-1">* Domicilio:</label>
                                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" >
                                                    <input type="text" placeholder="Domicilio" class="form-control" id="txtDomObjeto" name="txtDomObjeto">
                                                </div>
                                            </div>
                                            <div class="form-group text-center" >
                                                <button onclick="javascript:cateos.addObjeto()" class="btn btn-primary addObjeto" >Agregar + </button>
                                                <div class="editObjeto" style="display:inline" ></div>
                                            </div>
                                            <div class="table-responsive" >
                                                <table id="tblObjetos" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Descripcion</th>
                                                            <th>Domicilio</th>
                                                            <th  class="text-center"><button onclick="javascript:cateos.deleteRow(this)" class="btn btn-danger" >Eliminar</button></th>
                                                        </tr>
                                                    </thead>
                                                </table>                                                       
                                            </div>
                                        </div>
                                    </div>                                               
                                </div>

                                <div class="form-group text-center" >
                                    <br />
                                    <button class="btn btn-primary" onclick="javascript:cateos.siguiente('liPaso1', 'liPaso2')">&lt; Anterior </button>
                                    <button class="btn btn-primary" onclick="javascript:cateos.validaPasos2()">Siguiente &gt;</button>
                                </div>

                            </div>
                        </div>
                        <div id="divPaso3" class="content  col-xs-12" style="display:none">                                        
                            <div class="panel-group" id="accordiont" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="ImputadosThreeTab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordiont" href="#ImputadosThreeTabCollapse" aria-expanded="true" aria-controls="ImputadosThreeTabCollapse">
                                                Imputados
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="ImputadosThreeTabCollapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="ImputadosThreeTab">
                                        <div class="panel-body">
                                            <div class="form-group" >
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                    <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Tipo de Persona:</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                        <select onchange="javascript:cateos.TipoPersona(this, 1)" name="cmbTipoPersona" id="cmbTipoPersona" class="form-control">
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
                                                <button class="btn btn-primary addImputado" onclick="javascript:cateos.addImputados()">Agregar + </button>
                                                <div class="editImputado" style="display:inline" ></div>
                                            </div>

                                            <div style="display:none" class="impcausadiv">                                                        
                                                <div class="panel-group" id="accordionCausaImp">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="ImpCausaT">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordionCausaImp" href="#ImpCausaCollapseT" aria-expanded="true" aria-controls="ImpCausaCollapseT">
                                                                    Imputados de la causa
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="ImpCausaCollapseT" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ImpCausaT">
                                                            <div class="panel-body">
                                                                <div class="table-responsive" >
                                                                    <table id="tblImputadosCausa" class="table table-bordered table-condensed table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Nombre</th>
                                                                                <th>Domicilio</th>
                                                                                <th>G&eacute;nero</th>
                                                                                <th class="text-center" ><button class="btn btn-primary" onclick="javascript:cateos.addImputadosCausa(this, 'tblImputados')">Agregar</button></th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive" >
                                                <table id="tblImputados" class="table table-bordered table-condensed table-hovers" >
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Domicilio</th>
                                                            <th>G&eacute;nero</th>
                                                            <th class="text-center"><button class="btn btn-danger" onclick="javascript:cateos.deleteRow(this)">Eliminar</button></th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="VictimasThreeTab">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordiont" href="#VictimasThreeTabcollapse" aria-expanded="false" aria-controls="VictimasThreeTabcollapse">
                                                Victimas
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="VictimasThreeTabcollapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="VictimasThreeTab">
                                        <div class="panel-body">
                                            <div class="row" >
                                                <div class="change col-xs-12 col-md-12 col-lg-12 col-sm-12" >
                                                    <div class="form-group" >
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Tipo de Persona:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <select onchange="javascript:cateos.TipoPersona(this, 2)" name="cmbTipoPersonaVictima" id="cmbTipoPersonaVictima" class="form-control">
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
                                                            <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Nombre:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                                <input type="text" placeholder="Nombre" class='form-control' id="txtNomVictima" name="txtNomVictima">
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
                                                        <button onclick="javascript:cateos.addVictimas()" class="btn btn-primary addOfendido" >Agregar +</button>
                                                        <div class="editOfendido" style="display:inline" ></div>
                                                    </div>

                                                    <div style="display:none" class="victimasCausat" >
                                                        <div class="panel-group" id="accordionVictImp">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="ImpVictT">
                                                                    <h4 class="panel-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#accordionVictImp" href="#ImpVictCollapseT" aria-controls="ImpVictCollapseT">
                                                                            Victimas de la Causa
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="ImpVictCollapseT" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ImpVictT">
                                                                    <div class="panel-body">
                                                                        <div class="table-responsive" >
                                                                            <table id="tblVictimasCausa" class="table table-bordered table-condensed table-hover table-striped" >
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Nombre</th>
                                                                                        <th>Domicilio</th>
                                                                                        <th>G&eacute;nero</th>
                                                                                        <th class="text-center"><button class="btn btn-primary" onclick="javascript:cateos.addVictimasCausa(this, 'tblVictimas')">Agregar</button></th>
                                                                                    </tr>
                                                                                </thead>
                                                                            </table> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table-responsive" >
                                                        <table id="tblVictimas" class="table table-bordered table-condensed table-striped table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Domicilio</th>
                                                                    <th>G&eacute;nero</th>
                                                                    <th class="text-center"><button class="btn btn-danger" onclick="javascript:cateos.deleteRow(this)">Eliminar</button></th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="DelitosThreeTab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordiont" href="#DelitosThreeTabCollapse" aria-expanded="true" aria-controls="DelitosThreeTabCollapse">
                                                Delitos
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="DelitosThreeTabCollapse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="DelitosThreeTabCollapse">
                                        <div class="panel-body">
                                            <div class="form-group" >
                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12">* Delito:</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                    <select class='form-control' id="cmbDelito" name="cmbDelito">
                                                        <option value="0">Selecccione un delito</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group text-center" >
                                                <button class="btn btn-primary addDelito" onclick="javascript:cateos.addDelito()">Agregar</button>
                                                <div class="editDelito" style="display:inline" ></div>
                                            </div>

                                            <div style="display: none" class="delcausaT" >

                                                <div class="panel-group" id="accordionDelT">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="ImpDelT">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordionDelT" href="#ImpDelCollapseT" aria-expanded="true" aria-controls="ImpDelCollapseT">
                                                                    Delitos de la Causa
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="ImpDelCollapseT" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ImpDelT">
                                                            <div class="panel-body">
                                                                <div class="table-responsive" >
                                                                    <table id="tblDelitosCausa" class="table table-bordered table-striped table-condensed">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Delitos</th>
                                                                                <th class="text-center"><button onclick="javascrip:cateos.addDelitosCausa(this, 'tblDelitos')" class="btn btn-primary" >Agregar</button></th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive" >
                                                <table id="tblDelitos" class="table table-bordered table-striped table-condensed table-hover" >
                                                    <thead>
                                                        <tr>
                                                            <th>Delitos</th>
                                                            <th class="text-center"><button class="btn btn-danger" onclick="javascript:cateos.deleteRow(this)">Eliminar</button></th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center" >
                                    <br />
                                    <button class="btn btn-primary" onclick="javascript:cateos.siguiente('liPaso2', 'liPaso3')">< Anterior </button>
                                    <button class="btn btn-primary" onclick="javascript:cateos.siguiente('liPaso4', 'liPaso3')">Siguiente ></button>
                                </div>

                            </div>
                        </div>
                        <div id="divPaso4" class='content col-xs-12' style='display:none;'>
                            <div class="form-group" >
                                <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >* Solicitud:</label>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">                              

                                <!--<textarea id="txtSolicitud" placeholder="Solicitud" name="txtSolicitud" rows="15" class='form-control'></textarea>-->
                                    <script id="txtSolicitud" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                </div>                                
                            </div>
                            <div class="form-group" >
                                <div class="col-md-12 col-xs-12 text-center" >Formatos validos del archivo: <span>doc, docx, odt y pdf</span>; tama&ntilde;o m&aacute;ximo: <span>2MB</span></div>
                                <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >Solicitud Digitalizada:</label>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                                    <input type="file" name="fileSolicitud" id="fileSolicitud" size="60" onchange="if (!cateos.formato(this)) {
                                                this.value = ''
                                            }">
                                </div>
                            </div>
                            <div class="form-group text-center" >
                                <div id="solicitudFormato"></div>
                            </div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" onclick="javascript:cateos.siguiente('liPaso3', 'liPaso4')">< Anterior </button>
                                <button class="btn btn-primary" onclick="javascript:cateos.validaPasos4()">Siguiente ></button>
                            </div>

                        </div>
                        <div id="divPaso5" class='content col-xs-12' style='display:none;'>
                            <div style="border: 4px solid #881518; font-size: 12px; padding: 20px;" >
                                <div id="terminos" ></div>
                            </div>
                            <div class="form-group text-center" >
                                <label class="control-label col-lg-6 col-md-6 col-sm-12 col-xs-12" for="chkAceptar" >* Acepta Terminos</label>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" ><input type="checkbox" class="form-control" name="chkAceptar" id="chkAceptar"></div>
                            </div>
                            <div class="form-group" >
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 text-center" >
                                    <strong>Ministerio P&uacute;blico: <?= strtoupper($_SESSION["Nombre"]) ?></strong> <br />
                                    <strong>Cargo: Ministerio P&uacute;blico de la Procuradur&iacute;a General del Estado de M&eacute;xico</strong>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" >
                                    <fieldset style='width:100%'>
                                        <legend>Ministerios P&uacute;blicos responsables</legend>
                                        <div class="form-group" >
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >* Nombre:</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                    <input size="50" type="text" placeholder="Nombre" class='form-control' id="txtNombreMP" name="txtNombreMP">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >* Apellido Paterno:</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                    <input size="50" placeholder="Apellido Paterno" type="text" class='form-control' id="txtPaternoMP" name="txtNombreMP">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >* Apellido Materno:</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                                    <input size="50" placeholder="Apellido Materno" type="text" class='form-control' id="txtMaternoMP" name="txtNombreMP">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" >
                                                    <button onclick="javascript:cateos.addMPs('')" class="btn btn-primary" >Agregar + </button>
                                                </div>
                                            </div>
                                        </div>

                                        <table id="tblMPs" class="table table-bordered table-striped table-condensed" >
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th class="text-center"><button class="btn btn-danger" onclick="javascript:cateos.deleteRow(this)">Eliminar</button></th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="form-group text-center registerCateo" style="display:none">
                                <h3>N&uacute;mero de Cateo Registrado: <cateonumber></cateonumber></h3>
                                <h3 class="carpeta" style="display:none" >N&uacute;mero de Carpeta: <carpetanumber></carpetanumber></h3>
                                <h3 class="auxiliar" style="display:none" >N&uacute;mero Auxiliar: <auxiliarnumber></auxiliarnumber></h3>
                            </div>

                            <div class="form-group text-center registerNip" style="display:none">
                                <div class="form-group" >
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" ></div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                                        <label class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >Ingresa el NIP:</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                                            <input size="50" placeholder="Escribe el NIP" type="text" class='form-control' id="txtNip" name="txtNip">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="sendNip" />
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                                    <button class="btn btn-primary" onclick="javascript:cateos.enviar()" >Enviar Solicitud con Nip</button>
                                    <button class="btn btn-primary" onclick="javascript:cateos.cancelanip()" >Cancelar</button>
                                </div>
                            </div>

                            <div class="form-group text-center btnsSendSolicitud" >
                                <button id="btnAnterior" class="btn btn-primary" onclick="javascript:cateos.siguiente('liPaso4', 'liPaso5')">< Anterior </button>
                                <button id="btnEnviar" class="btn btn-primary" onclick="javascript:cateos.enviar()">Enviar</button>
                                <button id="btnEnviarNip" class="btn btn-primary" onclick="javascript:cateos.nip()">Enviar con NIP</button>
                                <!--<div id="btnEnviarNip"></div>-->
                            </div>
                        </div>
                        <input type="hidden" name="txtIdCateo" id="txtIdCateo" value="">
                        <input type="hidden" name="txtAccion" id="txtAccion" value="">               
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="sigejupe/solicitudesCateos/helpers.js" charset="UTF-8" ></script>
    <script src="sigejupe/solicitudesCateos/cateos.js" charset="UTF-8" ></script>
    <script>
                                    var cateos = new Cateos();
                                    var helper = new Helpers();
                                    $(function () {
                                        UE.delEditor("txtSolicitud");
                                        ue = UE.getEditor('txtSolicitud');
                                        ue.ready(function () {
                                            ue.setContent("");
                                        });
                                        var filtroJuzgado = "cveTipojuzgado";
                                        var urlJuzgado = "Juzgados";
                                        var renderJuzgado = ["cmbJuzgadoSolicitar", "cmbJuzgadoProcedencia"];
                                        var colJuzgado = ["cveJuzgado", "desJuzgado"];
                                        helper.loadCombos(filtroJuzgado, renderJuzgado, colJuzgado, urlJuzgado);
                                        var urlGenero = "Generos";
                                        var renderGenero = ["cmbGenPersona", "cmbGenImputado", "cmbGenVictima", "cmbGenTutor"];
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
                                        var urlDelito = "Delitos";
                                        var renderDelito = ["cmbDelito"];
                                        var colDelito = ["cveDelito", "desDelito"];
                                        helper.loadCombos("", renderDelito, colDelito, urlDelito);
                                        var urlTipoTutor = "Tipostutores";
                                        var renderTipoTutor = ["cmbTipoTutor"];
                                        var colTipoTutor = ["cveTipoTutor", "desTipoTutor"];
                                        helper.loadCombos("", renderTipoTutor, colTipoTutor, urlTipoTutor);
                                        helper.ladTerms("cveTipoTermino=3");
                                        helper.getInfoUsuarios("solicitudescateos");
                                        $('#txtdateTutor').datepicker({
                                            format: "dd/mm/yyyy",
                                        });
                                        getMP = function () {
                                            var url = "../archivos/<?php echo $_SESSION["cveUsuarioSistema"]; ?>.json";
                                            $.getJSON(url, function (json) {
                                                if (json !== "") {
                                                    cateos.addMPs(json.nombre, json.paterno, json.materno);
                                                }
                                            });
                                        }
                                        getMP();
                                    });
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>