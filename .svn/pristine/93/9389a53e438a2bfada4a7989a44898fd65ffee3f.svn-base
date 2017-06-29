<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    ini_set("log_errors", 0);
    ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;


    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }

    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    $digitalizacion = "";

    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    $subirArchivos = "";
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();
    ?>
    <style type="text/css">
        .tblGridAgrega{
            margin-top: 20px;
            font-family: arial;
            font-size: 11px;
            text-align: center;
        }
        .trGridAgrega{
            color: #ffffff;
            background-color: darkred;
        }
        .mayuscula{  
            text-transform: uppercase;  
        }  
        .trSeleccion:hover{
            background-color:#dff0d8;
            cursor: pointer;
        } 
        .requerido {
            color: darkred;
        }
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
        .optionprom{
            height: 10px;
        }

        .required{
            color: red;
        }
        /*//menu*/

        @media (min-width: 765px) {


            nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
                margin-left: 0px;
            }

            nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
                text-align: center;
                width: 100%;
                margin-left: 0px;
            }

            nav.sidebar a{
                padding-right: 13px;
            }

            nav.sidebar .navbar-nav > li:first-child{
                border-top: 1px #e5e5e5 solid;
            }

            nav.sidebar .navbar-nav > li{
                border-bottom: 1px #e5e5e5 solid;
            }

            nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
                padding: 0 0px 0 0px;
            }


            nav.sidebar li {
                width: 100%;
                float: left;
            }
            .forAnimate{
                opacity: 0;
            }
        }

        @media (min-width: 1330px) {

            nav.sidebar .forAnimate{
                opacity: 1;
            }
        }

        nav:hover .forAnimate{
            opacity: 1;
        }
        section{
            padding-left: 15px;
        }
        /*//estilo de pasos*/
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
            font-size: 20px;
            font-family: Arial;
        }

        .steps li a:hover {
            background: #881518;
        }

        .steps li a.active {
            background: #881518;
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
            background: #881518;
        }

        .subtitulo {
            font-family: Arial;
            font-size: 15px;
        }

        @media (max-width: 768px) {
            .steps li a {
                display: block;
            }

            .steps li {
                display: block;
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
        .blockmenupasos{
            cursor: not-allowed;
            background-color: #881518 !important;
        }
    </style>

    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hddIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" readonly class="form-control" id="hddIdCarpetaJudicial" value="">
    <input type="hidden" id="idactuacionhidden" value="">
    <input type="hidden" readonly class="form-control" value="" id="hddIdImputadoCarpeta">
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenCveAdscripcion" value="<?php echo $_SESSION["cveAdscripcion"]; ?>" >
    <input type="hidden" id="hiddenIntentoGuardar" value="0" >
    <input type="hidden" id="hiddenIdCarpetaIncompetencia" value="">

    <div class="panel panel-default">

        <div class="panel-heading" id="regtop">
            <h5 class="panel-title" id="tituloregistro">                                                            
                Registro de Promociones que generan Causa Carpeta Judicializada
            </h5>
            <h5 class="panel-title" id="tituloactualizacion" style="display: none">                                                            
                Actualizar Promociones que generan Causa Carpeta Judicializada
            </h5>
        </div>
        <div class="panel-body">        


            <div id="divCamposConsulta" class="form-horizontal" style="display: none">
                <div class="form-group">
                    <div class="col-md-1">                       
                        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCampos');" style="display: block">                                    
                    </div>
                    <label class="control-label col-md-5 ">Consulta de Promociones que Generan Causa</label>
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Juzgado:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cveTipoJuzgado2" id="cveTipoJuzgado2" onchange="cargaTipoCarpeta(2)">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Carpeta a consultar:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbTipoCarpeta2" id="cmbTipoCarpeta2" onchange="changeLabel(this, 2)">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="lblRelationName2">No.</label>
                    <div id="divSinRelacion" class="col-md-6" style="">
                        <div class="col-md-3">
                            <input type="text"  class="form-inline Relacionado form-control" id="txtNumero2" placeholder="N&uacute;mero">
                        </div>
                        <div class="col-md-3">
                            <input type="text" maxlength="4" class="form-inline Relacionado form-control" id="txtAnio2"  placeholder="A&ntilde;o">
                        </div>                                                                                
                    </div>
                    <div id="divSinRelacionMsg" class="col-md-6">
                    </div>
                </div>
                <div class="form-group" style="clear: both; padding-top: .5%;">                                                                
                    <label class="control-label col-md-3" id="lblRelationName">No Promocion.</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <div class="col-md-3">
                            <input type="text" class="form-inline Relacionado form-control" id="txtNumActuacion" placeholder="N&uacute;mero Promoci&oacute;n">
                        </div>
                        <div class="col-md-3">
                            <input type="text" maxlength="4" class="form-inline Relacionado form-control" id="txtAniActuacion"  placeholder="A&ntilde;o Promoci&oacute;n">
                        </div>
                    </div>                                      
                </div>
                <div class="form-group">
                    <div class="col-md-9">

                        <label class="control-label col-md-4" id="lblRelationName">Fecha Inicial</label>

                        <div class="col-md-3" style="padding-left: 1.5%">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIAL" class="form-control datepicker" value=""/>
                        </div>
                        <label class="control-label col-md-1" id="lblRelationName">Fecha Final</label>
                        <div class="col-md-3">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FINAL" class="form-control datepicker" value=""/>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="buscarPromocion(0);" style="display: block">                                    
                        </div>

                        <div class="col-md-1">
                            <input type="submit" class="btn btn-primary" id="inputLimpiarB" value="Limpiar" onclick="limpiarBusqueda();">                                    
                        </div>
                        <!--                    <div class="col-md-1">
                                                <input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" style="display: none;">                                    
                                            </div>-->
                    </div>
                </div>
                <div id="divAlertDagerConsulta" class="alert alert-warning alert-dismissable" style="display:none;">
                    <strong>Error!</strong> Mensaje
                </div>
            </div>
            <div id="divConsulta1" style="display: none"  class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="regresaBusqueda(1);
                                    $('#cmbPaginacion').val(1)">                                                    
                    </div>

                    <div class="form-group col-md-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="buscarPromocion();">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="buscarPromocion();">
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

                <div id="divTableResult" class="col-md-12">

                </div>
            </div>

            <div id="imprimir" style="display: none;">
                <div id="printable" ></div>
                <div id="botones">
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCamposRegresoDeImprimir');" style="display: block"> 
                </div>
            </div>

            <div id="divConsulta" style="display: none;">
                <input type="submit" class="btn btn-primary" style="display: none" id="botonregresaraconsulta" value="REGRESAR" onclick="regresaBusqueda(1)">
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                </div>
                <div class="row" id="menuPasos" style="display: none">
                    <div class="col-md-12">
                        <div class="steps">
                            <ul>
                                <li id="liPasogeneral" class="step step-1 Paso1">
                                    <a href="#" onclick="General();"><strong>Promocion</strong><br><label
                                            class="subtitulo">Promocion de Causa</label></a>
                                    <!--<a href="#" class="active" onclick="siguiente('divGeneral', 'sigejupe/solicitudAudiencias/frmSolicitudAudiencias.php', 1);" ><strong>Paso 1</strong><br><h1>Solicitudes de audiencias</h1></a>-->
                                </li>
                                <li id="liPaso1" class="step step-1 Paso1">
                                    <a href="#" class="active" onclick="siguientePaso(1);"><strong>Paso 1</strong><br><label
                                            class="subtitulo">Carpetas Judiciales</label></a>
                                    <!--<a href="#" class="active" onclick="siguiente('divGeneral', 'sigejupe/solicitudAudiencias/frmSolicitudAudiencias.php', 1);" ><strong>Paso 1</strong><br><h1>Solicitudes de audiencias</h1></a>-->
                                </li>
                                <li id="liPaso2" class="step step-2 Paso2">
                                    <a href="#" onclick="siguientePaso(2);"><strong>Paso 2</strong><br><label class="subtitulo" style="font-size: 12px">Captura de Imputado(s)</label></a>
                                    <!--<a href="#" onclick="siguiente('divGeneral', 'sigejupe/imputadosSolicitudes/frmImputadosSOlicitudes.php', 2);"><strong>Paso 2</strong><br><h1>Imputados</h1></a>-->
                                </li>
                                <li id="liPaso3" class="step step-3 Paso3">
                                    <a href="#" onclick="siguientePaso(3);"><strong>Paso 3</strong><br><label class="subtitulo" style="font-size: 12px">Captura de sujeto(s) Pasivo(s) del Delito</label></a>
                                </li>
                                <li id="liPaso4" class="step step-4 Paso4">
                                    <a href="#" onclick="siguientePaso(4);"><strong>Paso 4</strong><br><label class="subtitulo" style="font-size: 12px">Captura de Delito(s)</label></a>
                                </li>
                                <li id="liPaso5" class="step step-5 Paso5">
                                    <a href="#" onclick="siguientePaso(5);"><strong>Paso 5</strong><br><label class="subtitulo" style="font-size: 12px">Definici&oacute;n de relaci&oacute;n</label></a>
                                </li>
                                <li id="liPaso6" class="step step-6 Paso6">
                                    <a href="#" onclick="siguientePaso(6);"><strong>Paso 6</strong><br><label class="subtitulo" style="font-size: 12px">Violencia de G&eacute;nero</label></a>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>
                <br>
                <!--//form actuacion-->
                <div id="divFormulario" class="form-horizontal">         
                    <div id="divCampos">
                        <div id="refpromocion1">
                            <div class="form-group " >
                                <label class="control-label col-md-4 "></label>
                                <div id="textoNumeroyAnio" class="col-md-6">

                                </div>
                            </div>
                            <div class="form-group">                                                                
                                <label class="control-label col-md-3 ">Juzgado:</label>
                                <div class="col-md-6">
                                    <form name="selectedJuzgado" >
                                        <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta(1)">
                                            <option value="0">Seleccione una opcion</option>
                                        </select>
                                    </form>
                                </div>                                
                            </div>
                            <div class="form-group">                                                                
                                <label class="control-label col-md-3 ">Carpeta a generar: <b style="color: darkred">(*)</b></label>
                                <div class="col-md-6">
                                    <div id="divCmbRelaciones" class="logobox"></div>
                                    <select class="form-control Relacionado" name="cveTipoCarpetaPromo" id="cveTipoCarpetaPromo" onchange="changeLabel(this, '')">
                                        <option value="0">Seleccione una opcion</option>
                                    </select>
                                </div>                                
                            </div>
                            <div class="form-group">                                                                
                                <label class="control-label col-md-3">No. Fojas <b style="color: darkred">(*)</b></label>

                                <div class="col-md-2">
                                    <input type="text" id="txtFojas" placeholder="No Fojas" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="form-group">   
                                <label class="control-label col-md-3">Sintesis <b style="color: darkred">(*)</b></label>

                                <div class="col-md-6">
                                    <input style="text-transform:uppercase;" onkeyup="javascript:this.value = this.value.toUpperCase();" type="text" id="txtSintesis" placeholder="Sintesis" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="form-group"> 


                            </div>
                            <div class="form-group"> 


                                <label class="control-label col-md-3 ">No.<br>Promoci&oacute;n:</label>


                                <div class="col-md-1">

                                    <input type="text" id="txtNumActuacion2" placeholder="" class="form-control" value="" />
                                </div>                 


                                <label class="control-label col-md-1 ">A&ntilde;o Promoci&oacute;n:</label>

                                <div class="col-md-1">

                                    <input type="text" maxlength="4" maxlength="4" id="txtAniActuacion2" placeholder="" class="form-control" value="" />


                                </div>  
                                <label class="control-label col-md-1" >Asignacion de N&uacute;mero: </label>
                                <div class="col-md-3">


                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <input type="radio" checked  value="0" name="asigNumero"  ><label >Automatico</label>
                                        </div>
                                        <!--                                    <div class="col-md-4">
                                                                                <input type="radio"   value="1" name="asigNumero" ><label>Manual</label>
                                                                            </div>-->
                                    </div>


                                </div>  



                            </div>
                            <b>Promoventes</b>
                            <div class="panel panel-default"><br>
                                <div class="form-group">                                                                
                                    <label class="control-label col-md-3">Tipo de Persona</label>

                                    <div class="col-md-4" id="divTiposPersonas">
                                        <select class="form-control " name="cmbTiposPersonas" id="cmbTiposPersonas" onchange="ocultarCampos(this.value);" >
                                            <!--                        <option value="0">Seleccione una opcion</option>-->
                                        </select>
                                    </div>
                                    <div class="col-md-2" id="divGeneros">
                                        <select class="form-control " name="cmbGeneros" id="cmbGeneros" >
                                            <!--                        <option value="0">Seleccione una opcion</option>-->
                                        </select>
                                    </div>


                                </div>

                                <div id="divPromoventes" class="form-group rnActor">
                                    <label class="control-label col-md-3">Promovente: <b style="color: darkred">(*)</b></label>


                                    <div class="col-md-2 divNombre" ><input style="text-transform:uppercase;" onkeyup="javascript:this.value = this.value.toUpperCase();" 
                                                                            type="text" name="txtPaternoAct" id="txtPaternoAct"
                                                                            value="" placeholder="Paterno" class="form-control txtActor"
                                                                            onKeyPress="return capturaNombrePersona(event, 'txtMaternoAct', 'txtActor', 'lstActores', 'cmbTiposPersonas', 'rd');" /></div>
                                    <div class="col-md-2 divNombre" ><input style="text-transform:uppercase;" onkeyup="javascript:this.value = this.value.toUpperCase();" 
                                                                            type="text" name="txtMaternoAct" id="txtMaternoAct"
                                                                            value="" placeholder="Materno" class="form-control txtActor"
                                                                            onKeyPress="return capturaNombrePersona(event, 'txtNombreAct', 'txtActor', 'lstActores', 'cmbTiposPersonas', 'rd');" /></div>
                                    <div class="col-md-2"><input style="text-transform:uppercase;" onkeyup="javascript:this.value = this.value.toUpperCase();" 
                                                                 type="text" name="txtNombreAct" id="txtNombreAct"
                                                                 value="" placeholder="Nombre(s)" class="form-control txtActor"
                                                                 onKeyPress="return capturaNombrePersona(event, 'agregaPersona', 'txtActor', 'lstActores', 'cmbTiposPersonas', 'rd');" /></div>

                                </div>
                                <div  class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" class="btn btn-primary" id="inputAgregarPro" value="Agregar Promovente" onclick="return capturaNombrePersonaBoton(event, 'agregaPersona', 'txtActor', 'lstActores', 'cmbTiposPersonas');"> &nbsp;
                                        <input type="submit" class="btn btn-primary" id="inputLimpiarPro" value="Limpiar Promovente" onclick="limpiarPromovente();"> 
                                    </div>
                                </div>
                                <div id="divListaPromoventes" class="form-group">
                                    <input type="hidden" id="hiddenIdentificador"  value=""/>
                                    <input type="hidden" id="hiddenIdPromovente"  value="0"/>
                                    <label class="control-label col-md-3">Lista promovente(s):</label>
                                    <div class="col-md-6">
                                        <table id="ltsPromoventes" class="table table-bordered tblGridAgrega" ></table>
                                    </div>
                                </div>
                            </div>
                            <b>Incompetencia</b>
                            <div class="panel panel-default"><br>
                                <div class="form-group">                                                                
                                    <label class="control-label col-md-3">&#191;Es una incompetencia?</label>
                                    <div class="col-md-2" id="divincompetencia">
                                        <select class="form-control " name="cmbIncompetencia" id="cmbIncompetencia" onchange="mostrarInc(this.value);" >
                                            <option value="0">Seleccione una opcion</option>
                                            <option value="1">Si</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="CamposInc" style="display: none"> 
                                    <div class="form-group">                                                                
                                        <label class="control-label col-md-3">Tipo de incompetencia</label>
                                        <div class="col-md-6">
                                            <select class="form-control " name="cmbtipoIncompetencia" id="cmbtipoIncompetencia" onchange="cargaJuzgadosInc(this.value)" >

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">                                                                
                                        <label class="control-label col-md-3">Juzgado Origen</label>
                                        <div class="col-md-6">
                                            <select class="form-control " name="cmbJuzgadoOrigenInc" id="cmbJuzgadoOrigenInc" onchange="cargaTipoCarpeta(3)" >

                                            </select>
                                            <input type="text" name="textJuzgadoOrigenInc" id="textJuzgadoOrigenInc"  style="display: none" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">                                                                
                                        <label class="control-label col-md-3">Tipo Carpeta</label>
                                        <div class="col-md-6">
                                            <select class="form-control " name="cmbtipoCarpetaInc" id="cmbtipoCarpetaInc" onchange="" >

                                            </select>
                                            <input type="text" name="texttipoCarpetaInc" id="texttipoCarpetaInc"  style="display: none" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">                                   
                                        <label class="control-label col-md-3 ">Numero:<br></label>
                                        <div class="col-md-1">
                                            <input type="text" id="txtNumActuacionInc" placeholder="" class="form-control Relacionado" value="" />
                                        </div>                 
                                        <label class="control-label col-md-1 ">A&ntilde;o:</label>
                                        <div class="col-md-1">
                                            <input type="text" maxlength="4" maxlength="4" id="txtAniActuacionInc" onchange="validaAnio(this.value)" placeholder="" class="form-control Relacionado" value="" />
                                        </div> 
                                        <div class="col-md-1" id="textoInc">                                    
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                            <div id="divNotas" class="form-group">
                                <label class="control-label col-md-3">Observaciones/Anexos:</label>
                                <div class="col-md-6">              
                                    <script id="txtNotas" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>

                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardarPromocion();">                                    
                                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    
                                    <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();">   
                                    <input type="submit" style="display: none" class="btn btn-primary" id="inputLimpiarArbol" value="Limpiar" onclick="limpiarArbol();"> 
                                    <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultar('divCamposConsulta');">                                    
                                    <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="consultarAcuerdos();" style="display: none">                                    
                                    <input type="submit" class="btn btn-primary" id="inputEliminar" value="Eliminar" onclick="ConfirmaEliminarPromocion()" style="display: none">                                    
                                    <input type="submit" class="btn btn-primary print-link no-print" id="inputImprimir" value="Imprimir" onclick="imprimirRecibo()" style="display: none">                                    
                                    <button class="btn btn-primary" style="display: none" id="inputDigitalizar" onclick="javascript:digitalizarPromocion();">Digitalizar</button>
                                    <button class="btn btn-primary" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
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
                                <!--                            <div id="divAlertWarning" class="alert alert-warning alert-dismissable">                    
                                                                <strong>Advertencia!</strong> Mensaje
                                                            </div>-->
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
                        </div>
                        <br>
                        <div class="form-group" >
                            <!--                        <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">                    
                                                        <strong>Advertencia!</strong> Mensaje
                                                    </div>-->
                            <!--                        <div id="divAlertSuccesImputado" class="alert alert-success alert-dismissable" style="display:none;">
                            
                                                        <strong>Correcto!</strong> Mensaje
                                                    </div>-->
                            <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">

                                <strong>Error!</strong> Mensaje
                            </div>
                            <div id="divAlertInfoImputado" class="alert alert-info alert-dismissable" style="display:none;">

                                <strong>Informaci&oacute;n!</strong> Mensaje
                            </div>
                        </div> 
                    </div>

                </div>
                <div id="refpromocion" class="form-horizontal"></div>
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="#" target="oculto" enctype="multipart/form-data" onsubmit="return false;"> 
                    <input type="hidden" readonly class="form-control" id="idCarpetaJudicial">
                    <div id="divGeneral"></div>
                    <br>
                    <div id="btnPaso1" style="display:none;">
                        <button class="btn btn-primary" onclick="General()">< Anterior</button>
                        <button class="btn btn-primary" onclick="siguientePaso(2)">Siguiente ></button>
                    </div>
                    <div id="btnPaso2" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(1)">< Anterior</button>
                        <button class="btn btn-primary" onclick="siguientePaso(3)">Siguiente ></button>
                    </div>

                    <div id="btnPaso3" style="display:none;">
                        <button  class="btn btn-primary" onclick="siguientePaso(2)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(4)">Siguiente ></button>
                    </div>

                    <div id="btnPaso4" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(3)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(5)">Siguiente ></button>
                    </div>
                    <div id="btnPaso5" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(4)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(6)">Siguiente ></button>
                    </div>
                    <div id="btnPaso6" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(5)">< Anterior </button>
                        <!--<button class="btn btn-primary" onclick="siguientePaso(8)">Finalizar ></button>-->
                    </div>

                    <br>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal visor -->
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
        var contadorPromo = 0;
        var juzgadoSesion = "<?php $_SESSION['cveAdscripcion']; ?>";
        var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        var procedencia = "<?php echo $procedencia; ?>";
        if (editor != undefined) {
            editor.destroy();
        } else {

        }
        var editor = null;
        mostrarInc = function (data) {
            var opcion = data;
            $("#texttipoCarpetaInc").hide();
            $("#cmbtipoCarpetaInc").show();
            if (opcion == 1) {
                $("#CamposInc").show();
            } else if (opcion == 2) {
                $("#CamposInc").hide();
            }
        }

        limpiarBusqueda = function () {
            $("#cmbTipoCarpeta2").val("0");
            $("#txtNumero2").val("");
            $("#txtAnio2").val("");
            $("#txtNumActuacion").val("");
            $("#txtAniActuacion").val("");
            //           
            var d = new Date();

            var month = new Array();
            month[0] = "01";
            month[1] = "02";
            month[2] = "03";
            month[3] = "04";
            month[4] = "05";
            month[5] = "06";
            month[6] = "07";
            month[7] = "08";
            month[8] = "09";
            month[9] = "10";
            month[10] = "11";
            month[11] = "12";
            var day = new Array();
            day[1] = "01";
            day[2] = "02";
            day[3] = "03";
            day[4] = "04";
            day[5] = "05";
            day[6] = "06";
            day[7] = "07";
            day[8] = "08";
            day[9] = "09";
            var dia = d.getDate();
            if (dia < 10) {
                dia = day[dia];
            }
            var fecha = dia + "/" + month[d.getMonth()] + "/" + d.getFullYear();
            $("#txtfechaInicial").val(fecha);
            $("#txtfechaFinal").val(fecha);
        };

        limpiarPromovente = function () {
            $("#cmbTiposPersonas").val("1");
            $("#cmbTiposPersonas").prop("disabled", false);
            $("#cmbGeneros").val("1");
            $("#txtPaternoAct").val("");
            $("#txtMaternoAct").val("");
            $("#txtNombreAct").val("");
            $("#hiddenIdPromovente").val("0");
            $("#hiddenIdentificador").val("");
            $(".required").remove();
            $("#cmbGeneros").removeAttr('disabled');
            ocultarCampos(1);
        };
        eliminarPromovente = function (identificador) {
            bootbox.dialog({
                message: "\u00bf Esta seguro de eliminar al promovente?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $("#" + identificador).remove();
                            limpiarPromovente();
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
        cargarPromovente = function (identificador) {
            var cveTipoPersona = $("#" + identificador).attr("data-cvetipopersona");
            var cveGenero = $("#" + identificador).attr("data-cvegenero");
            var idPromovente = $("#" + identificador).attr("data-idpromovente");
            var nombre = $("#" + identificador).attr("data-nombre");
            nombre = nombre.split(';');
            ocultarCampos(cveTipoPersona);
            if (cveTipoPersona == 1) {
                $("#txtPaternoAct").val("");
                $("#txtMaternoAct").val("");
            }
            $("#cmbTiposPersonas").val(cveTipoPersona);
            $("#cmbGeneros").val(cveGenero);
            $("#txtPaternoAct").val(nombre[0]);
            $("#txtMaternoAct").val(nombre[1]);
            $("#txtNombreAct").val(nombre[2]);
            $("#hiddenIdentificador").val(identificador);
            $("#hiddenIdPromovente").val(idPromovente);
            $("#inputAgregarPro").val("Modificar Promovente");


        };
        //    agregarPromovente = function (idPromovente, cveTipoPersona, descTipoPersona, cveGenero, descGenero, nombre) {
        //        try {
        //            var hiddenIdentificador = $("#hiddenIdentificador").val();
        //
        //            var totalRenglones = $("#ltsPromoventes tr").length;
        //            //            alert("total de renglones " + totalRenglones);
        //            if (totalRenglones == 0) {
        //                $("#ltsPromoventes").show();
        //                var cabeceras = '<tr class=\"trGridAgrega\"><th>Tipo Persona</th><th>Nombre</th><th>Genero</th><th></th></tr>';
        //                $("#ltsPromoventes").append(cabeceras);
        //            }
        //            var identificador = nombre.join("");
        //
        //            if (cveTipoPersona == 2) {
        //                identificador = identificador.replace(/\s+/g, '');
        //                identificador = identificador.replace(/\./g,' ');
        //
        //            }
        //            identificador = identificador.replace(/\s+/g, '');
        //            identificador = identificador.replace(/\./g,' ');
        //            if (hiddenIdentificador == "") {
        //                var renglon = "<tr onclick='cargarPromovente(\"" + identificador + "\")' id='" + identificador + "' class=\"trSeleccion\"><td>" + descTipoPersona + "</td><td>" + nombre.join(" ") + "</td><td>" + descGenero + "</td><td><a onclick='eliminarPromovente(\"" + identificador + "\")'><img src='../vistas/img/eliminar.png' width='30' height='30'></a></td></tr>";
        //                $("#ltsPromoventes").append(renglon);
        //                $('#' + identificador).attr('data-' + "cvetipopersona", cveTipoPersona);
        //                $('#' + identificador).attr('data-' + "idpromovente", idPromovente);
        //                $('#' + identificador).attr('data-' + "cvegenero", cveGenero);
        //                $('#' + identificador).attr('data-' + "nombre", nombre);
        //            } else {
        //                //selector.attr("data-change-me","someValue");
        //                $('#' + hiddenIdentificador + " td").remove();
        //                $('#' + hiddenIdentificador).attr("data-cvetipoPersona", cveTipoPersona);
        //                $('#' + hiddenIdentificador).attr("data-idpromovente", idPromovente);
        //                $('#' + hiddenIdentificador).attr("data-cvegenero", cveGenero);
        //                $('#' + hiddenIdentificador).attr("data-nombre", nombre);
        //                $('#' + hiddenIdentificador).attr('onclick', "cargarPromovente(\"" + identificador + "\")");
        //
        //
        //                $('#' + hiddenIdentificador).append("<td>" + descTipoPersona + "</td><td>" + nombre.join(" ") + "</td><td>" + descGenero + "</td><td><a onclick='eliminarPromovente(\"" + identificador + "\")'><img src='../vistas/img/eliminar.png' width='30' height='30'></a></td>");
        //                $('#' + hiddenIdentificador).attr("id", identificador);
        //                $("#hiddenIdentificador").val("");
        //                $("#hiddenIdPromovente").val("0");
        //                $("#inputAgregarPro").val("Agregar Prompvente");
        //            }
        //        } catch (e) {
        //            alert(e);
        //        }
        //    };

        agregarPromovente = function (idPromovente, cveTipoPersona, descTipoPersona, cveGenero, descGenero, nombre) {
            var nombreCompleto = "";
            var x;
            for (x in nombre) {
                nombreCompleto += nombre[x] + ";";
            }
            if (nombreCompleto != "") {

                nombreCompleto = nombreCompleto.substring(0, nombreCompleto.length - 1);
                //  alert(nombreCompleto);
            }
            try {
                var hiddenIdentificador = $("#hiddenIdentificador").val();

                var totalRenglones = $("#ltsPromoventes tr").length;
                //            alert("total de renglones " + totalRenglones);
                if (totalRenglones == 0) {
                    $("#ltsPromoventes").show();
                    var cabeceras = '<tr class=\"trGridAgrega\"><th>Tipo Persona</th><th>Nombre</th><th>Genero</th><th></th></tr>';
                    $("#ltsPromoventes").append(cabeceras);
                }
                var identificador = "";
                if (idPromovente == 0) {
                    identificador = "pn" + contadorPromo;
                    contadorPromo++;
                }
                else if (idPromovente > 0) {
                    identificador = "pe" + totalRenglones;
                }

                //                if (cveTipoPersona == 2) {
                //                    identificador = identificador.replace(/\s+/g, '');
                //
                //                }
                //                identificador = identificador.replace(/\s+/g, '');
                if (hiddenIdentificador == "") {
                    var renglon = "<tr onclick='cargarPromovente(\"" + identificador + "\")' id='" + identificador + "' class=\"trSeleccion\"><td>" + descTipoPersona + "</td><td>" + nombre.join(" ") + "</td><td>" + descGenero + "</td><td><a onclick='eliminarPromovente(\"" + identificador + "\")'><img src='../vistas/img/eliminar.png' width='30' height='30'></a></td></tr>";
                    $("#ltsPromoventes").append(renglon);
                    $('#' + identificador).attr('data-' + "cvetipopersona", cveTipoPersona);
                    $('#' + identificador).attr('data-' + "idpromovente", idPromovente);
                    $('#' + identificador).attr('data-' + "cvegenero", cveGenero);
                    $('#' + identificador).attr('data-' + "nombre", nombreCompleto);
                } else {
                    //selector.attr("data-change-me","someValue");
                    $('#' + hiddenIdentificador + " td").remove();
                    $('#' + hiddenIdentificador).attr("data-cvetipoPersona", cveTipoPersona);
                    $('#' + hiddenIdentificador).attr("data-idpromovente", idPromovente);
                    $('#' + hiddenIdentificador).attr("data-cvegenero", cveGenero);
                    $('#' + hiddenIdentificador).attr("data-nombre", nombreCompleto);
                    $('#' + hiddenIdentificador).attr('onclick', "cargarPromovente(\"" + identificador + "\")");


                    $('#' + hiddenIdentificador).append("<td>" + descTipoPersona + "</td><td>" + nombre.join(" ") + "</td><td>" + descGenero + "</td><td><a onclick='eliminarPromovente(\"" + identificador + "\")'><img src='../vistas/img/eliminar.png' width='30' height='30'></a></td>");
                    $('#' + hiddenIdentificador).attr("id", identificador);
                    $("#hiddenIdentificador").val("");
                    $("#hiddenIdPromovente").val("0");
                    $("#inputAgregarPro").val("Agregar Promovente");
                }
            } catch (e) {
                alert(e);
            }
        };
        cargaIncompetencias = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposincompetencias/TiposincompetenciasFacade.Class.php",
                data: {
                    accion: "consultar",
                    activo: 'S'
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbtipoIncompetencia").empty();
                        $("#cmbtipoIncompetencia").append($('<option></option>').val("0").html("Seleccione una opcion"));
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbtipoIncompetencia").append($('<option></option>').val(json.data[i].cveTipoIncompetencia).html(json.data[i].desTipoIncompetencia));
                        }
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
        cargaTipoCarpeta = function (grt) {
            if (grt == 1) {
                var tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
                $("#cmbJuzgadoOrigenInc").empty();
                $("#cmbtipoIncompetencia").val("0");
            } else if (grt == 2) {
                tipoJuzgado = $("#cveTipoJuzgado2").val().split("/");
            } else if (grt == 3) {
                var seleccion = $('#cmbJuzgadoOrigenInc').val();
                if (seleccion != null) {
                    tipoJuzgado = $("#cmbJuzgadoOrigenInc").val().split("/");
                } else {
                    tipoJuzgado = "";
                }
            }


            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
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
                        if (grt == 1) {
                            $("#cveTipoCarpetaPromo").empty();
                            $("#cveTipoCarpetaPromo").append($('<option></option>').val("0").html("Seleccione una opcion"));
                        } else if (grt == 2) {
                            $("#cmbTipoCarpeta2").empty();
                            $("#cmbTipoCarpeta2").append($('<option></option>').val("0").html("Seleccione una opcion"));
                        }
                        else if (grt == 3) {
                            $("#cmbtipoCarpetaInc").empty();
                            $("#cmbtipoCarpetaInc").append($('<option></option>').val("0").html("Seleccione una opcion"));
                        }
                        var cvetipoJuzgado = $("#cveTipoJuzgado").val();
                        for (var i = 0; i < json.totalCount; i++) {
                            switch (tipoJuzgado[1]) {
                                case "1": // tipo de juzgado de control
                                    if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // exhorto, amparo
                                        if (grt == 1) {
                                            $("#cveTipoCarpetaPromo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 2) {
                                            $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 3) {
                                            $("#cmbtipoCarpetaInc").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                    }
                                    break;
                                case "2": // tipo de juzgado juicio
                                    if (json.data[i].cveTipoCarpeta == "3") { // exhorto, amparo 
                                        if (grt == 1) {
                                            $("#cveTipoCarpetaPromo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 2) {
                                            $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 3) {
                                            $("#cmbtipoCarpetaInc").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                    }
                                    break;
                                case "3": // tipo de juzgado ejecucion
                                    if (json.data[i].cveTipoCarpeta == "5") { // exhorto, amparo
                                        if (grt == 1) {
                                            $("#cveTipoCarpetaPromo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 2) {
                                            $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 3) {
                                            $("#cmbtipoCarpetaInc").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                    }
                                    break;
                                case "4": // tipo de juzgado tribunal
                                    if (json.data[i].cveTipoCarpeta == "4") { // exhorto, amparo 
                                        if (grt == 1) {
                                            $("#cveTipoCarpetaPromo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 2) {
                                            $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        } else if (grt == 3) {
                                            $("#cmbtipoCarpetaInc").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                    }
                                    break;
                                case "5": // verificar queda pendiente*************************
                                    //                                if(json.data[i].cveTipoCarpeta == "4"){ // tipo carpeta causa de juicio
                                    //                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    //                                }
                                    break;
                            }

                        }
                        //                        $("#cveTipoCarpetaPromo").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));

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

        regresaBusqueda = function () {
            $("#divSinRelacionMsg").empty();
            $("#textoInc").empty();
            $("#divConsulta").hide();
            $("#divCamposConsulta").show();
            $("#imprimir").hide();
            $("#inputDigitalizar").hide();
            $("#inputVisor").hide();
            $("#divConsulta1").hide();
        };
        consultar = function (elementomostrar) {

            if (elementomostrar === "divCamposConsulta") {
                $("#divCamposConsulta").show();
                $("#imprimir").hide();
                $("#divCampos").hide();
                $("#inputEliminar").hide();
                $("#inputDigitalizar").hide();
                $("#inputVisor").hide();
                $("#menunavegacion").hide();
                $("#divConsulta").hide();
            } else if (elementomostrar === "imprimir") {
                $("#divCamposConsulta").hide();
                $("#imprimir").show();
                $("#divCampos").hide();
                $("#menunavegacion").hide();
                $("#inputEliminar").hide();
                $("#botonregresaraconsulta").hide();
                $("#inputDigitalizar").hide();
                $("#inputVisor").hide();
            } else if (elementomostrar === "divCampos") {
                if ($("#idactuacionhidden").val() == "") {
                    $("#divCamposConsulta").hide();
                    $("#divCampos").show();
                    $("#divFormulario").show();
                    $("#divConsulta").show();
                    $("#inputDigitalizar").hide();
                    $("#inputVisor").hide();
                } else {
                    $("#divCamposConsulta").hide();
                    $("#imprimir").hide();
                    $("#divCampos").show();
                    $("#menuPasos").show();
                    $("#divFormulario").show();
                    $("#divConsulta").show();
                    $("#inputDigitalizar").show();
                    $("#inputVisor").show();
                }
            } else if (elementomostrar === "divCamposRegresoDeImprimir") {
                $("#divCamposConsulta").hide();
                $("#imprimir").hide();
                $("#inputDigitalizar").show();
                $("#inputVisor").show();
                $("#divCampos").show();
                $("#menuPasos").show();
                $("#divFormulario").show();
                $("#divConsulta").show();
                $("#inputEliminar").show();
            } else if (elementomostrar === "divCamposRegistroNuevo") {
                $("#menuPasos").hide();
                $("#inputEliminar").hide();
                $("#inputImprimir").hide();
                $("#inputDigitalizar").hide();
                $("#inputVisor").hide();
                $("#cveTipoCarpetaPromo").prop("disabled", false);
                $("#cveTipoJuzgado").prop("disabled", false);
                $("#txtNumActuacionInc").attr("disabled", false);
                $("#txtAniActuacionInc").attr("disabled", false);

                $("#cmbIncompetencia").attr("disabled", true);
                $("#cmbtipoIncompetencia").attr("disabled", true);
                $("#cmbJuzgadoOrigenInc").attr("disabled", true);
                $("#cmbtipoCarpetaInc").attr("disabled", true);
                $("#texttipoCarpetaInc").attr("disabled", true);
                $("#textJuzgadoOrigenInc").attr("disabled", true);
                $("#txtNumActuacionInc").attr("disabled", true);
                $("#txtAniActuacionInc").attr("disabled", true);
            }
            else if (elementomostrar === "divCamposRegistroNuevoArbol") {
                $("#menuPasos").hide();
                $("#inputEliminar").hide();
                $("#inputImprimir").hide();
                $("#inputDigitalizar").hide;
                $("#inputVisor").hide();
            }
            var permisos = obtenerPermisosFormulario("ATENCION PUBLICO", "PROMOCIONES QUE GENERAN CARPETA JUDICIALIZADA");
            if (permisos.Update == "N") {
                $("#inputGuardar").hide();
            }
            if (permisos.Delete == "N") {
                $("#inputEliminar").hide();
            }
            if (permisos.Read == "N") {
                $("#inputConsultar").hide();
            }
        };
        cargaJuzgadosInc = function (inc) {
            $("#textJuzgadoOrigenInc").val("");
            $("#texttipoCarpetaInc").val("");
            var juzgadoBase = $("#cveTipoJuzgado").val();
            var cveTipojuzgado = "";
            if (juzgadoBase != "") {
                juzgadoBase = juzgadoBase.split("/");
                cveTipojuzgado = juzgadoBase[1];
            }

            if (inc == 0) {
                $("#cmbJuzgadoOrigenInc").empty();
                $("#textJuzgadoOrigenInc").hide();
                $("#cmbJuzgadoOrigenInc").show();
                $("#texttipoCarpetaInc").hide();
                $("#cmbtipoCarpetaInc").show();
            }
            if (inc == 1) {
                $("#cmbJuzgadoOrigenInc").show();
                $("#textJuzgadoOrigenInc").hide();
                $("#texttipoCarpetaInc").hide();
                $("#cmbtipoCarpetaInc").show();

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    data: {
                        accion: "consultar",
                        activo: 'S',
                        cveTipojuzgado: cveTipojuzgado
                    },
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            $("#cmbJuzgadoOrigenInc").append($('<option></option>').val("0").html("seleccione una opcion"));
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbJuzgadoOrigenInc").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            }
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            } else if (inc != 0) {
                $("#cmbJuzgadoOrigenInc").empty();
                $("#cmbtipoCarpetaInc").empty();
                $("#cmbJuzgadoOrigenInc").hide();
                $("#cmbtipoCarpetaInc").hide();
                $("#textJuzgadoOrigenInc").show();
                $("#texttipoCarpetaInc").show();
            }
        };
        marcoJuzgadoInc = function (inc) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: {
                    accion: "consultar",
                    activo: 'S'
                },
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
                            if (inc == json.data[i].cveJuzgado) {
                                $("#cmbJuzgadoOrigenInc option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                            }
                        }
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
        cargaDistrito = function (grt) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: {
                    accion: "distrito",
                    activo: 'S'
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cveTipoJuzgado").empty();
                        $("#cveTipoJuzgado2").empty();
                        if (typeof grt !== "undefined") {
                            $("#cveTipoJuzgado2").append($('<option></option>').val("0").html("seleccione una opcion"));

                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                $("#cveTipoJuzgado2").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                if (grt == json.data[i].cveJuzgado) {
                                    $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                    $("#cveTipoJuzgado2 option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                }
                                //                                $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                            }
                        } else {
                            $("#cveTipoJuzgado2").append($('<option></option>').val("0").html("seleccione una opcion"));

                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                $("#cveTipoJuzgado2").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));

                                if ($("#hiddenCveAdscripcion").val() == json.data[i].cveJuzgado) {
                                    $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                    $("#cveTipoJuzgado2 option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");

                                }
                                //                                    $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));                        
                            }
                        }
                        cargaTipoCarpeta(1);
                        cargaTipoCarpeta(2);
                    }
                    $('#divCmbRelaciones').hide();
                    //                $("#cveTipoJuzgado").val($("#hiddenCveAdscripcion").val());

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

        };
        buscarPromocion = function (pag) {
            var cveTipoCarpeta = $("#cmbTipoCarpeta2").val();
            var numero = $("#txtNumero2").val();
            var anio = $("#txtAnio2").val();
            var numActuacion = $("#txtNumActuacion").val();
            var aniActuacion = $("#txtAniActuacion").val();
            var fechaInicial = "";
            var fechaFinal = "";
            if (numero == "" & anio == "" & numActuacion == "" & aniActuacion == "") {
                fechaInicial = $("#txtfechaInicial").val();
                fechaFinal = $("#txtfechaFinal").val();
            }
            var cveAdscripcion = "";
            if ($("#cveTipoJuzgado2").val() != 0) {
                cveAdscripcion = $("#cveTipoJuzgado2").val().split("/");
                cveAdscripcion = cveAdscripcion[0];
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            //            alert(fechaInicial);
            //            alert(fechaFinal);
            var table = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: {
                    txtFecInicialBusqueda: fechaInicial,
                    txtFecFinalBusqueda: fechaFinal,
                    numero: numero,
                    anio: anio,
                    numActuacion: numActuacion,
                    aniActuacion: aniActuacion,
                    cveTipoCarpeta: cveTipoCarpeta,
                    accion: "consultarActuacion_CarpetaJudicializada",
                    cveJuzgado: cveAdscripcion,
                    cveTipoActuacion: "17",
                    pag: pag,
                    cantxPag: cantReg,
                    activo: "S",
                    paginacion: "paginacion"

                },
                async: true,
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (data, textStatus, jqXHR) {
                    if (data.estatus == "ok") {
                        if (pag == 1) {
                            if (data.totalCount > 0) {
                                //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');
                                $('#cmbPaginacion').find('option').remove().end();

                                for (var i = 0; i < (parseInt(data.total)); i++) {
                                    $("#cmbPaginacion").append($('<option></option>').val(i + 1).html(i + 1));
                                }
                                $("#cmbPaginacion").val(pag);
                                $("#totalReg").html("<b> Total: " + data.totalCount + "</b>");
                            }

                        }

                        $("#divCamposConsulta").hide();
                        $("#divConsulta1").show();
                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "    <thead>";
                        table += "        <tr>";
                        table += "            <th>N&uacute;m.</th>";
                        table += "            <th>No.Promocion</th>";
                        table += "            <th>No.Causa</th>";
                        table += "            <th>fecha</th>";
                        table += "            <th>Sintesis</th>";
                        table += "            <th>Tipo Carpeta</th>";
                        table += "            <th>Promoventes</th>";
                        table += "        </tr>";
                        table += "    </thead>";
                        table += "    <tbody>";
                        $.each(data.datos, function (index, element) {
                            var promoventes = "";
                            $.each(element.promoventes, function (index2, element2) {
                                var nombre = "";
                                var paterno = "";
                                var materno = "";
                                if (element2.cveTipoPersona == 1) {
                                    if (element2.nombre != null) {
                                        nombre = element2.nombre;
                                    }
                                    if (element2.paterno != null) {
                                        paterno = element2.paterno;
                                    }
                                    if (element2.materno != null) {
                                        materno = element2.materno;
                                    }
                                } else {
                                    if (element2.nombrePersonaMoral != null) {
                                        nombre = element2.nombrePersonaMoral;
                                    }
                                }

                                promoventes += nombre + " " + paterno + " " + materno + "<br>";
                            });

                            var resDate = element.fechaRegistro.split(" ");
                            var datepartes = resDate[0].split("-");
                            var fecharegistro = datepartes[2] + "/" + datepartes[1] + "/" + datepartes[0];

                            table += "<tr>";
                            table += "        <td style='cursor: pointer' onclick=\"consutaIdAcuerdo('" + element.idActuacion + "','" + element.descTipoCarpeta + "')\" > " + (index + 1) + "</td>";
                            //                                                if (element.cveTipoCarpeta != "") {
                            //                                                    table += "        <td onclick=\"consutaIdAcuerdo('" + element.idActuacion + "','" + json.data[i].descTipoCarpeta + "')\" >" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                            //                                                } else {
                            //                                                    table += "        <td onclick=\"consutaIdOficio('" + json.data[i].idActuacion + "','\"SIN RELACION\"')\" > SIN RELACION </td>";
                            //                                                }
                            table += "        <td style='cursor: pointer' onclick=\"buscarPromocionById('" + element.idActuacion + "')\" >" + element.numActuacion + "/" + element.aniActuacion + "</td>";
                            table += "        <td style='cursor: pointer' onclick=\"buscarPromocionById('" + element.idActuacion + "')\" >" + element.numero + "/" + element.anio + "</td>";
                            //                                                table += "        <td onclick=\"consutaIdAcuerdo('" + element.idActuacion + "')\" >" + element.aniActuacion + "</td>";
                            table += "        <td style='cursor: pointer' onclick=\"buscarPromocionById('" + element.idActuacion + "')\" >" + fecharegistro + "</td>";
                            table += "        <td style='cursor: pointer' onclick=\"buscarPromocionById('" + element.idActuacion + "')\" >" + element.sintesis + "</td>";
                            table += "        <td style='cursor: pointer' onclick=\"buscarPromocionById('" + element.idActuacion + "')\" >" + element.descTipoCarpeta + "</td>";
                            table += "        <td style='cursor: pointer' onclick=\"buscarPromocionById('" + element.idActuacion + "')\" >" + promoventes + "</td>";
                            table += "    </tr> ";
                        });
                        table += "</tbody>";
                        table += "</table>";
                        $("#divHideForm").hide();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable(
                                {
                                    paging: false
                                }
                        );
                    } else {
                        $("#divTableResult").empty();
                        $("#divAlertDagerConsulta").html(data.mensaje);
                        $("#divAlertDagerConsulta").show("slide");
                        setTimeAlert("divAlertDagerConsulta");
                    }

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("error danger =>" + textStatus);
                }


            });
        };
        consultaEG = function (idReferencia, cveJuzgado, cveTipoCarpeta) {

            $(".required").remove();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idCarpetaJudicial: idReferencia,
                    cveTipoCarpeta: cveTipoCarpeta,
                    activo: 'S',
                    accion: 'consultar'
                },
                success: function (data) {
                    if (data.totalCount > 0) {
                        consultar("divCampos");
                        divConsulta
                        $('#inputDigitalizar').show();
                        $('#inputVisor').show();
                        var actuacion = data.data;
                        cargaDistrito(actuacion[0].cveJuzgado);
                        $("#txtNumero").val(actuacion[0].numero);
                        $("#txtAnio").val(actuacion[0].anio);
                        //                            $("#txtNumActuacion2").val(actuacion[0].numActuacion);
                        //                            $("#txtAniActuacion2").val(actuacion[0].aniActuacion);
                        //                            $("#ltsPromoventes").empty();                            
                        setTimeout(function () {
                            $("#cveTipoCarpetaPromo").val(actuacion[0].cveTipoCarpeta);
                        }, 500);

                    }

                    //                        $.each(data.data, function(key, value){
                    ////                            alert(value.idActuacion);
                    ////                            seleccionaEG(data.data[0].idActuacion);
                    //                        });

                }

            });
            $("#registro").html("Registro de Exhortos Generados");
        };
        buscarPromocionById = function (idActuacion) {
            $("#idactuacionhidden").val(idActuacion);
            if ($("#arbolito").val() == "") {
                limpiarForm();
            }
            limpiarPromovente();
            var nombre = "";
            var paterno = "";
            var materno = "";
            $("#lstActores").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: {
                    idActuacion: idActuacion,
                    accion: "consultarActuacion_Promocion"
                },
                async: true,
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (data, textStatus, jqXHR) {
                    $("#divConsulta1").hide();
                    $("#textoNumeroyAnio").empty();
                    if (data.estatus == "ok") {
                        var actuacion = data.datos;
                        cargaDistrito(actuacion[0].cveJuzgado);
                        $("#textoNumeroyAnio").html("<h3>No. " + actuacion[0].descTipoCarpeta + ": " + actuacion[0].numero + "/" + actuacion[0].anio + "</h3>");
                        $("#txtNumero").val(actuacion[0].numero);
                        $("#txtAnio").val(actuacion[0].anio);
                        $("#txtSintesis").val(actuacion[0].sintesis);
                        $("#txtFojas").val(actuacion[0].fojas);
                        $("#hiddenIdActuacion").val(actuacion[0].idActuacion);
                        $("#hiddenIdCarpetaJudicial").val(actuacion[0].idReferencia);
                        $("#txtNumActuacion2").val(actuacion[0].numActuacion);
                        $("#txtAniActuacion2").val(actuacion[0].aniActuacion);
                        //                    $("#txtNotas").val(actuacion[0].observaciones);                    
                        setTimeout(function () {
                            $("#cveTipoCarpetaPromo").val(actuacion[0].cveTipoCarpeta);
                        }, 500);
                        //                        if (actuacion[0].cveJuzgado != "") {
                        //                            chequeoJuzgado();
                        //                        }
                        $("#ltsPromoventes").empty();
                        $("#imprimir").hide();
                        $("#divCampos").hide();
                        $("#menunavegacion").hide();
                        $("#divConsulta").hide();
                        $("#inputEliminar").show();
                        $("#inputImprimir").show();
                        $("#cveTipoCarpetaPromo").attr("disabled", true);
                        $("#cveTipoJuzgado").attr("disabled", true);
                        $.each(actuacion[0].promoventes, function (index, element) {
                            var nombres = [];
                            if (element.cveTipoPersona == 1) {
                                nombre = element.nombre;
                                paterno = element.paterno;
                                materno = element.materno;
                                nombres = [paterno, materno, nombre];
                            } else {
                                paterno = "";
                                materno = "";
                                nombre = element.nombrePersonaMoral;
                                nombres = [paterno, materno, nombre];
                            }
                            //idPromovente, cveTipoPersona, descTipoPersona, cveGenero, descGenero, nombre
                            agregarPromovente(element.idPromoventeActuacion, element.cveTipoPersona, element.descTipoPersona, element.cveGenero, element.descGenero, nombres);
                        });

                        if (actuacion[0].datosIncompetencia != "") {
                            mostrarInc(1);
                            $("#cmbIncompetencia").val("1");
                            $.each(actuacion[0].datosIncompetencia, function (index, dataelem) {
                                cargaJuzgadosInc(dataelem.cveTipoIncompetencia);
                                marcoJuzgadoInc(dataelem.cveJuzgadoOrigen);
                                setTimeout(function () {
                                    cargaTipoCarpeta(3);
                                }, 500);
                                setTimeout(function () {
                                    $("#cmbtipoIncompetencia").val(dataelem.cveTipoIncompetencia);
                                }, 500);
                                $("#textJuzgadoOrigenInc").val(dataelem.otroJuzgadoOrigen);
                                $("#texttipoCarpetaInc").val(dataelem.otroTipoCarpetaOrigen);
                                $("#txtNumActuacionInc").val(dataelem.numero);
                                $("#txtAniActuacionInc").val(dataelem.anio);
                                setTimeout(function () {
                                    $("#cmbtipoCarpetaInc option[value='" + dataelem.cveTipoCarpetaOrigen + "']").attr("selected", "selected");
                                }, 1000);

                            });
                            $("#cmbIncompetencia").attr("disabled", true);
                            $("#cmbtipoIncompetencia").attr("disabled", true);
                            $("#cmbJuzgadoOrigenInc").attr("disabled", true);
                            $("#cmbtipoCarpetaInc").attr("disabled", true);
                            $("#texttipoCarpetaInc").attr("disabled", true);
                            $("#textJuzgadoOrigenInc").attr("disabled", true);
                            $("#txtNumActuacionInc").attr("disabled", true);
                            $("#txtAniActuacionInc").attr("disabled", true);
                        } else {
                            $("#textJuzgadoOrigenInc").val("");
                            $("#texttipoCarpetaInc").val("");
                            $("#txtNumActuacionInc").val("");
                            $("#txtAniActuacionInc").val("");
                        }
                        $("#cmbIncompetencia").attr("disabled", true);
                        var content = actuacion[0].observaciones;

                        cargarCarpetas(actuacion[0].idReferencia);
                        //                    alert(actuacion[0].idReferencia);
                        $('#hddIdCarpetaJudicial').val(actuacion[0].idReferencia);
                        consultar("divCampos");
                        llenareditor(content);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        };
        //  digitalizarPromocion = function () {
        //   var params =  {
        //      idCarpeta:$("#hiddenIdCarpetaJudicial").val(),              //id de la carpeta judicial, si no se especifica se manda en cero
        //      idActuacion:$("#hiddenIdActuacion").val(),       //id de la actuacion, si no se especifica se manda en cero
        //      Numero:$("#txtNumActuacion2").val(),                 //numero de la actuacion o carpeta judicial
        //      idUsuario:cveUsuarioSesion,             //usuario que va a digitalizar
        //      Descripcion:"PROMOCION GENERA CAUSA",                     //descripción de lo que se va a digitalizar(promociones, acuerdos, exhortos, etc.)
        //      descJuzgado: "JUZGADO DE CONTROL DE TOLUCA",     //descripcion del juzgado al que pertenede la carpeta judicial o actuacion
        //      anio: $("#txtAniActuacion2").val(),                //año de la actuacion o carpeta judicial
        //      cveDocumento: "25"    //clave del documento que se va a digitalizar lo encuentrar la tabla tbltiposdocumentos
        //   }; 
        //   launchDigitalizador(params);      // la funcion launchDigitalizador se encuentra en el archivo inicio.php
        //},
        digitalizarPromocion = function () {
            //idcarpeta
            //idactuacion
            //desc carpeta/actuacion
            //desc juzgado 
            //numero de la carpeta/actuacion
            //año de la carpeta/actuacion
            //cve documento
            //usuario
            var strl;
            strl = "0-" + $("#hiddenIdActuacion").val() + "-PROMOCIONES-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumActuacion2").val() + "-" + $("#txtAniActuacion2").val() + "-13-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
            strl += "-<?php echo $subirArchivos; ?>";
            strl += "-<?php echo $digitalizacion; ?>";
            launchDigitalizador(strl);
        },
                visorDocuemntos = function () {
                    $.ajax({
                        type: 'POST',
                        url: 'visorpdf/index.php',
                        data: {idCarpetaJudicial: 0, idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 13}, //malo
                        //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                        async: false,
                        dataType: 'html',
                        beforeSend: function () {
                            $('#visor').html('<h3>Consultando información ... espere.</h3>');
                        },
                        success: function (data) {
                            //                    console.log(data)
                            $('#visor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                            console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                        }
                    });
                }
        llenareditor = function (value) {

            try {

                editor.ready(function () {

                    setTimeout(function () {
                        editor.setContent(value, true);
                    }, 500);

                });

            } catch (e) {
                // alert(e);
            }

        };
        cargarTiposPersonas = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
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
                        var checked = "";
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveTipoPersona != "4" & json.data[i].cveTipoPersona != "5") {
                                $("#cmbTiposPersonas").append("<option value='" + json.data[i].cveTipoPersona + "'>" + json.data[i].desTipoPersona + "</option>");
                            }
                        }
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
        cargarGeneros = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (index, element) {
                            var option = "<option value = " + element.cveGenero + ">" + element.desGenero + "</option>";
                            $("#cmbGeneros").append(option);
                        });
                    } else {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
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
        changetipopersona = function (cveTipoPersona) {
            if (cveTipoPersona == 1) {
                $('#3tipopersonaimputado').show();
                $('#1tipopersonaimputado').hide();
            } else if (cveTipoPersona == 2) {
                $('#3tipopersonaimputado').hide();
                $('#1tipopersonaimputado').show();
            }
        }
        ocultarCampos = function (cveTipoPersona) {
            var myClass = $("#txtNombreAct").parent().attr("class");
            if (cveTipoPersona == 1) {
                $("#cmbGeneros").val("1");
                $("#cmbGeneros").removeAttr('disabled');
                $(".divNombre").show("slow");
                if (myClass === "col-md-6") {
                    $("#txtNombreAct").parent().toggleClass('col-md-6');
                    $("#txtNombreAct").parent().toggleClass('col-md-2');
                }
            } else if (cveTipoPersona == 2 || cveTipoPersona == 3) {
                $(".divNombre").hide();
                $("#cmbGeneros").val("3");
                $("#cmbGeneros").attr('disabled', true);
                if (myClass === "col-md-2") {
                    $("#txtNombreAct").parent().toggleClass('col-md-2');
                    $("#txtNombreAct").parent().toggleClass('col-md-6');
                }
            }
        };
        changeLabel = function (objOption, clave) {
            $("#lblRelationName" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta" + clave).val($("#cveTipoCarpetaPromo").val());
            if ($("#cveTipoCarpetaPromo" + clave).val() == 9) {
                $("#txtNumero" + clave).val("");
                $("#txtAnio" + clave).val("");
                $("#divSinRelacion").hide();
            } else {
                $("#txtNumero" + clave).val("");
                $("#txtAnio" + clave).val("");
                $("#divSinRelacion").show();
            }


        };
        validarFormulario = function () {
            $(".required").remove();
            var cveTipoCarpeta = $("#cveTipoCarpetaPromo").val();
            var numero = $("#txtNumero").val();
            var anio = $("#txtAnio").val();
            var idReferencia = $("#hiddenIdCarpetaJudicial").val();
            var idActuacion = $("#hiddenIdActuacion").val();
            var fojas = $("#txtFojas").val();
            var sintesis = $("#txtSintesis").val();
            //        var observaciones = $("#txtNotas").val();
            var observaciones = editor.getContent();
            var numActuacion = $("#txtNumActuacion2").val();
            var aniActuacion = $("#txtAniActuacion2").val();
            var cveAdscripcion = $("#cveTipoJuzgado").val();
            var listaPromoventes = new Array();
            var JsonPromoventes = "";
            var asigNumero = $("input:radio[name=asigNumero]:checked").val();
            var guardar = 1;

            var intentoGuardar = $("#hiddenIntentoGuardar").val();

            if (intentoGuardar == 1) {

                if ($("input:radio[name=asigNumero]:checked").val() == 1) {
                    if (numActuacion == "") {
                        $("#txtNumActuacion2").parent().append("<br class='required'><label class='Arial13Rojo required'>Ingrese el numero de la promoci&oacute;n</label>");

                    }
                    if (numActuacion == "") {
                        $("#txtAniActuacion2").parent().append("<br class='required'><label class='Arial13Rojo required'>Ingrese el a&ntildeo de promoci&oacute;n</label>");
                    }
                }
                if (cveTipoCarpeta == 0) {
                    guardar = 0;
                    $('#cveTipoCarpetaPromo').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione el tipo de carpeta a generar</label>");
                }
                if (fojas === "") {
                    guardar = 0;
                    $('#txtFojas').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el n&uacute;mero de fojsa de la promocion</label>");
                }
                if (sintesis === "") {
                    guardar = 0;
                    $('#txtSintesis').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar la sintesis de la promocion</label>");
                }
                var totalRenglones = $("#ltsPromoventes tr").length;
                //            alert(totalRenglones+" y guardar="+guardar);
                if (totalRenglones > 1) {

                } else {
                    $("#ltsPromoventes").parent().append("<br class='required'><label class='Arial13Rojo required'>Debe registrar promoventes</label>");
                    guardar = 0;
                }
                if ($("#cmbIncompetencia").val() == 1) {
                    if ($("#cmbtipoIncompetencia").val() == "0") {
                        $("#cmbtipoIncompetencia").parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione tipo Incompetencia</label>");
                        guardar = 0;
                    }
                    if ($("#cmbJuzgadoOrigenInc").val() == "0") {
                        $("#cmbJuzgadoOrigenInc").parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione Juzgado Origen</label>");
                        guardar = 0;
                    }
                    if ($("#cmbtipoCarpetaInc").val() == "0") {
                        $("#cmbtipoCarpetaInc").parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione tipo de Carpeta</label>");
                        guardar = 0;
                    }
                    if ($("#txtNumActuacionInc").val() == "") {
                        $("#txtNumActuacionInc").parent().append("<br class='required'><label class='Arial13Rojo required'>Ingrese n&uacute;mero</label>");
                        guardar = 0;
                    }
                    if ($("#txtAniActuacionInc").val() == "") {
                        $("#txtAniActuacionInc").parent().append("<br class='required'><label class='Arial13Rojo required'>Ingrese a&ntildeo</label>");
                        guardar = 0;
                    }
                }
            }
            return guardar;
        };

        guardarPromocion = function () {
            $(".required").remove();
            $("#hiddenIntentoGuardar").val("1");
            var cveTipoCarpeta = $("#cveTipoCarpetaPromo").val();
            var numero = $("#txtNumero").val();
            var anio = $("#txtAnio").val();
            var idReferencia = $("#hiddenIdCarpetaJudicial").val();
            var idActuacion = $("#hiddenIdActuacion").val();
            var fojas = $("#txtFojas").val();
            var sintesis = $("#txtSintesis").val();
            var observaciones = editor.getContent();
            var numActuacion = $("#txtNumActuacion2").val();
            var aniActuacion = $("#txtAniActuacion2").val();
            var cveAdscripcion = $("#cveTipoJuzgado").val().split("/");
            cveAdscripcion = cveAdscripcion[0];
            var listaPromoventes = new Array();
            var JsonPromoventes = "";
            var asigNumero = $("input:radio[name=asigNumero]:checked").val();
            var guardar = 1;
            // CAMPOS INCOMPETENCIA
            var idCarpetaInc = $("#hiddenIdCarpetaIncompetencia").val();
            var esIncompetencia = $("#cmbIncompetencia").val();
            if (esIncompetencia == 1) {
                esIncompetencia = "S";
            } else if (esIncompetencia == 0 || esIncompetencia == 2) {
                esIncompetencia = "N";
            }
            var tipoIncompetencia = $("#cmbtipoIncompetencia").val();
            if ($("#cmbJuzgadoOrigenInc").val() != null) {
                var juzgadoOrigen = $("#cmbJuzgadoOrigenInc").val().split("/");
                juzgadoOrigen = juzgadoOrigen[0];
            }
            var textJuzgadoOrigenInc = $("#textJuzgadoOrigenInc").val();
            var tipoCarpetaInc = $("#cmbtipoCarpetaInc").val();
            var texttipoCarpetaInc = $("#texttipoCarpetaInc").val();
            var numeroInc = $("#txtNumActuacionInc").val();
            var anioInc = $("#txtAniActuacionInc").val();
            // TERMINAN CAMPOS INCOMPETENCIA        
            var totalRenglones = $("#ltsPromoventes tr").length;
            if (totalRenglones > 1) {
                $("#ltsPromoventes tr").each(
                        function () {
                            var identificador = $(this).attr("id");
                            if (typeof identificador != "undefined") {
                                var cveTipoPersona = $(this).attr("data-cvetipopersona");
                                var idPromovente = $(this).attr("data-idpromovente");
                                var cveGenero = $(this).attr("data-cvegenero");
                                var nombre = $(this).attr("data-nombre");

                                nombre = nombre.split(";");
                                listaPromoventes.push(new promovente(idPromovente, cveTipoPersona, cveGenero,
                                        nombre[0], nombre[1], nombre[2]));
                            }
                        });
                //                    alert('largopromoventes='+listaPromoventes.length);
                if (listaPromoventes.length > 0) {
                    //                alert('entre a json de promovenete y guardar ='+guardar);
                    JsonPromoventes = JSON.stringify(listaPromoventes);
                    JsonPromoventes = decodeURIComponent(JsonPromoventes);
                } else {
                    guardar = 0;

                }
            }
            guardar = validarFormulario();
            if (guardar == 1) {
                //    alert("todos los campos estan completos \n" + cveTipoCarpeta + " || " + numero + " || " + anio + " || " + fojas + " || " + sintesis + " || " + observaciones + " || " + JsonPromoventes);
                var accion = "";
                if (idActuacion > 0) {
                    accion = "actualizarActuacion_Promocion";
                } else {
                    accion = "guardarCarpeta_Judicializada";
                }
                //            alert(accion);
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        cveTipoCarpeta: cveTipoCarpeta,
                        numero: numero,
                        numActuacion: numActuacion,
                        aniActuacion: aniActuacion,
                        anio: anio,
                        noFojas: fojas,
                        sintesis: sintesis,
                        listaPromoventes: JsonPromoventes,
                        observaciones: observaciones,
                        accion: accion,
                        idReferencia: idReferencia,
                        cveUsuario: cveUsuarioSesion,
                        cveTipoActuacion: "17",
                        cveJuzgado: cveAdscripcion,
                        idActuacion: idActuacion,
                        asigNumero: asigNumero,
                        // VARIABLES INCOMPETENCIA
                        idCarpetaInc: idCarpetaInc,
                        esIncompetencia: esIncompetencia,
                        tipoIncompetencia: tipoIncompetencia,
                        juzgadoOrigen: juzgadoOrigen,
                        tipoCarpetaInc: tipoCarpetaInc,
                        textJuzgadoOrigenInc: textJuzgadoOrigenInc,
                        texttipoCarpetaInc: texttipoCarpetaInc,
                        numeroInc: numeroInc,
                        anioInc: anioInc
                    },
                    success: function (data) {
                        if (data.totalCount > 0) {
                            $("#divHideForm").hide();
                            $("#divAlertSucces").html("Correcto!: " + data.text);
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");
                            $("#hiddenIdActuacion").val(data.data[0].idActuacion);
                            //                        $("#idactuacionhidden").val(data.data[0].idActuacion);
                            var actuacion = data.data;
                            $("#txtNumActuacion2").val(actuacion[0].numActuacion);
                            $("#txtAniActuacion2").val(actuacion[0].aniActuacion);
                            buscarPromocionById(data.data[0].idActuacion);
                        } else {
                            $("#divAlertDager").html("Error en la peticion:\n\n" + data.text);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }

                    }

                });
            } else {
                //                alert("checar");
            }

        };

        promovente = function (idPromoventeActuacion, cveTipoPersona, cveGenero, paterno, materno, nombre
                ) {
            this.paterno = paterno;
            this.materno = materno;
            this.nombre = nombre;
            this.cveTipoPersona = cveTipoPersona;
            this.idPromoventeActuacion = idPromoventeActuacion;
            this.cveGenero = cveGenero;
        };
        limpiarArbol = function () {
            try {
                $("#cveTipoCarpetaPromo").attr("disabled", true);
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hiddenIdCarpetaJudicial").val("");
                $("#hiddenIdActuacion").val("");
                $("#idactuacionhidden").val("");
                $("#txtFojas").val("");
                $("#txtPaternoAct").val("");
                $("#txtMaternoAct").val("");
                $("#txtNombreAct").val("");
                $("#txtSintesis").val("");
                editor.setContent("", false);
                $("#txtNumActuacion2").attr("disabled", true);
                $("#txtAniActuacion2").attr("disabled", true);
                //                $("#asigNumero").val("0");
                // $("input:radio[name=asigNumero]").val("0");
                $("#hiddenIdentificador").val("");
                $("input:radio[name=asigNumero]").filter('[value=0]').prop('checked', true);
                $(".required").remove();
                $("#lstActores").empty();
                $("#ltsPromoventes tr").remove();
                consultar("divCamposRegistroNuevoArbol");
            } catch (e) {
                // alert(e);
            }
        };
        limpiar = function () {
            limpiarForm();
            try {
                $("#cveTipoCarpetaPromo").val(0);
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hiddenIdCarpetaIncompetencia").val("");
                $("#hiddenIdCarpetaJudicial").val("");
                $("#hiddenIdActuacion").val("");
                $("#idactuacionhidden").val("");
                $("#txtFojas").val("");
                $("#txtPaternoAct").val("");
                $("#txtMaternoAct").val("");
                $("#txtNombreAct").val("");
                $("#txtSintesis").val("");
                editor.setContent("", false);
                $("#txtNumActuacion2").val("");
                $("#txtAniActuacion2").val("");
                contadorPromo = 0;
                //                $("#asigNumero").val("0");
                // $("input:radio[name=asigNumero]").val("0");
                $("#hiddenIdentificador").val("");
                $("input:radio[name=asigNumero]").filter('[value=0]').prop('checked', true);
                $(".required").remove();
                $("#lstActores").empty();
                $("#ltsPromoventes tr").remove();
                consultar("divCamposRegistroNuevo");
            } catch (e) {
                // alert(e);
            }
        };
        limpiarForm = function () {
            try {
                $("#cveTipoCarpetaPromo").val(0);
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#txtFojas").val("");
                $("#txtSintesis").val("");
                //            $("#txtNotas").val("");
                editor.setContent("", false);
                $("#txtNumActuacion2").val("");
                $("#txtAniActuacion2").val("");
                //                $("#asigNumero").val("0");
                // $("input:radio[name=asigNumero]").val("0");
                $("input:radio[name=asigNumero]").filter('[value=0]').prop('checked', true);
                $(".required").remove();
                $("#lstActores").empty();
                $("#ltsPromoventes tr").remove();
                consultar("divCamposRegistroNuevo");
            } catch (e) {
                // alert(e);
            }

        };
        $.fn.agregaPersona = function (Clase, Destino, valorRadio) {
            $(".required").remove();
            var arrNombre = new Array();
            var agregar = true;
            var noElementos = $("." + Clase).length;
            $("." + Clase).each(function () {

                if ($.trim($(this).val()) != "" && $(this).is(":visible")) {
                    arrNombre.push($.trim($(this).val().toUpperCase()));
                } else if ($(this).is(":visible")) {
                    agregar = false;
                    $(this).parent().append("<br class='required'><label class='Arial13Rojo required'>Este campo no puede estar vacio</label>");
                    arrNombre = new Array();
                } else {
                    arrNombre.push("");
                }

            });
            if (arrNombre.join('').length > 0 && agregar) {
                var found = false;
                //                $("#" + Destino + " option").each(function () {
                //                    if (arrNombre.join(' ') == $(this).text().toUpperCase()) {
                //                        found = true;
                //                    }
                //                });
                var totalRenglones = $("#ltsPromoventes tr").length;
                //            alert("total de renglones " + totalRenglones);
                var hiddenIdentificador = $("#hiddenIdentificador").val();
                //alert("hiddenIdentificador "+hiddenIdentificador);
                if (totalRenglones == 0 || hiddenIdentificador !== "") {
                    found = false;
                } else {
                    var identificador = arrNombre.join("");
                    identificador = identificador.replace(/\s+/g, '');
                    $('#ltsPromoventes tr').each(function () {
                        var nombrePromo = $(this).attr('data-nombre');
                        if (nombrePromo != undefined) {
                            var patron = ";";
                            nombrePromo = nombrePromo.split(patron);
                            nombrePromo = nombrePromo.join("");
                            if (nombrePromo === identificador) {
                                found = true;
                            }
                        }
                    });
                }

                if (found != true) {
                    var cveGenero = $("#cmbGeneros").val();
                    var descGenero = $("#cmbGeneros option:selected").text();
                    var cveTipoPersona = $("#cmbTiposPersonas").val();
                    var descTipoPersona = $("#cmbTiposPersonas option:selected").text();
                    var idPromovente = $("#hiddenIdPromovente").val();
                    var nombre = arrNombre;
                    //                    $('#' + Destino).append(
                    //                            '<option value="0;' + valorRadio + ';' + cveGenero + ';'
                    //                            + arrNombre.join(';') + '" selected="selected">'
                    //                            + arrNombre.join(' ') + '</option>');
                    agregarPromovente(idPromovente, cveTipoPersona, descTipoPersona, cveGenero, descGenero, nombre);
                    $("." + Clase).each(function () {
                        $(this).val("");
                    });
                    $("." + Clase).first().focus();
                } else {
                    alert("El nombre " + arrNombre.join(' ') + " ya existe.");
                }
            } else {

            }
        };
        validaAnio = function (data) {

            var d = new Date();
            var anio = d.getFullYear();
            if (data.length > 0 & data < "1980" || data.length < 4) {
                alert("El a\u00F1o es MENOR al a\u00F1o Limite 1980");
                $("#txtAniActuacionInc").val("");

            }
            if (data > anio) {
                alert("El a\u00F1o es MAYOR al a\u00F1o Actual");
                $("#txtAniActuacionInc").val("");

            }
        }
        capturaNombrePersona = function (e, Sig, clase, destino, radio) {

            tecla = (document.all) ? e.keyCode : e.which;
            var valorRadio = $("#".radio).val();
            if (tecla == 8)
                return true; // Tecla de retroceso (para poder borrar)
            if (tecla == 13) {
                if (Sig.length > 0) {
                    if (Sig in $.fn) {
                        $.fn[Sig](clase, destino, valorRadio);
                    } else if ($('#' + Sig)) {
                        $('#' + Sig).focus();
                    }
                    return true;
                }
            }
            patron = /"|'|\\/; // No acepta ",',/,\ (se separan por | )
            te = String.fromCharCode(tecla);
            return !patron.test(te);
        };
        capturaNombrePersonaBoton = function (e, Sig, clase, destino, radio) {

            tecla = (document.all) ? e.keyCode : e.which;
            var valorRadio = $("#" + radio).val();
            //            if (tecla == 8)
            //                return true; // Tecla de retroceso (para poder borrar)
            //            if (tecla == 13) {
            if (Sig.length > 0) {
                if (Sig in $.fn) {
                    $.fn[Sig](clase, destino, valorRadio);
                } else if ($('#' + Sig)) {
                    $('#' + Sig).focus();
                }
                return true;
            }
            //}
            var patron = /"|'|\\/; // No acepta ",',/,\ (se separan por | )
            te = String.fromCharCode(tecla);
            return !patron.test(te);
        };
        borraPersona = function (Combo) {
            if (confirm("Esta seguro de eliminar"
                    + $('#' + Combo).find('option:selected').text())) {
                $('#' + Combo).find('option:selected').remove().end();
            }
        };

        imprimirRecibo = function () {
            $("#menuPasos").hide();
            var cveAdscripcion = $("#cveTipoJuzgado").val();
            var idActuacion = $("#hiddenIdActuacion").val();
            if (idActuacion > 0) {
                //            var cveTipoCarpeta = $("#hddIdCarpetaJudicial").val();
                var nombre = "";
                var paterno = "";
                var materno = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: {
                        idActuacion: idActuacion,
                        accion: "consultarActuacion_Promocion",
                        cveJuzgado: cveAdscripcion,
                        pag: "-1",
                        usuario: "porUsuario"
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (data, textStatus, jqXHR) {

                        if (data.estatus == "ok") {
                            var actuacion = data.datos;
                            var listaPromoventes = "";
                            $.each(actuacion[0].promoventes, function (index, element) {
                                if (element.cveTipoPersona == 1) {
                                    nombre = element.nombre;
                                    paterno = element.paterno;
                                    materno = element.materno;
                                } else {
                                    paterno = "";
                                    materno = "";
                                    nombre = element.nombrePersonaMoral;
                                }
                                listaPromoventes += nombre + " " + paterno + " " + materno + "<br>";
                            });
                            var hostname = location.pathname;
                            hostname = hostname.split("/");
                            hostname = hostname[0] + "/" + hostname[1] + "/" + hostname[2];

                            var fechaAP = actuacion[0].fechaRegistro;
                            fechaAP = fechaAP.split(" ");
                            var fechaA = fechaAP[0].split("-");
                            fechaA = fechaA[2] + "/" + fechaA[1] + "/" + fechaA[0] + " " + fechaAP[1];
                            var tabla = "<table style='width:100%; font-size:14px; border-collapse:collapse;''>";
                            tabla += "<tr><td align='left' style='width:30%; font-weight:bold; border-bottom:solid black 2px;'><img src='../vistas/img/EscudoEstadoMexico.png' width='85' height='90'></td><td style='font-size:16px; font-weight:bold; border-bottom:solid black 2px;'>Gobierno del Estado de M&eacute;xico<br> Poder Judicial del Estado de M&eacute;xico<br>Consejo de la Judicatura<br>Comprobante de Promociones</td><td align='left' style='padding-left:5px; border-bottom:solid black 2px;'><img src='../vistas/img/EscudoPoderJudicial.png' width='85' height='90'></td></tr>";
                            tabla += "<tr><td colspan='4'>&nbsp;</td></tr>";
                            tabla += "<tr><td colspan='4'>&nbsp;</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Num. de Causa:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].numero + "/" + actuacion[0].anio + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Tipo de Carpeta:</td><td id='tipocarpetarecivo' align='left' style='padding-left:5px;'>" + actuacion[0].descTipoCarpeta + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Num. de Promoci&oacute;n:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].numActuacion + "/" + actuacion[0].aniActuacion + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Sintesis:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].sintesis + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Promoventes:</td><td align='left' style='padding-left:5px;'>" + listaPromoventes + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Notas:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].observaciones + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Fecha de Registro:</td><td align='left' style='padding-left:5px;'>" + fechaA + "</td></tr>";
                            tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Capturado por:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].nombrePerCaptura + "</td></tr>";
                            tabla += "</table >";
                            consultar("imprimir");

                            $('#printable').empty();
                            $('#printable').append(tabla + "<br>");
                            w = window.open("", 'Print_Page', 'scrollbars=yes');
                            w.document.write($('#printable').html());
                            w.document.close();
                            w.print();
                            w.close();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }
                });
            } else {
                $("#divAlertDager").html("Error en la peticion:\n\n Debe seleccionar una promocion");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }

        };
        ConfirmaEliminarPromocion = function () {
            bootbox.dialog({
                message: "\u00bf Esta seguro de eliminar la Promocion?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            var idActuacion = $("#hiddenIdActuacion").val();
                            if (idActuacion > 0) {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                                    data: {
                                        idActuacion: idActuacion,
                                        accion: "eliminarActuacion_Promocion"
                                    },
                                    async: false,
                                    dataType: "json",
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (data, textStatus, jqXHR) {

                                        if (data.Estatus == "Ok") {
                                            $("#divHideForm").hide();
                                            $("#divAlertSucces").html("Correcto!: " + data.Mensaje);
                                            $("#divAlertSucces").show("slide");
                                            setTimeAlert("divAlertSucces");
                                            limpiar();
                                        } else {
                                            $("#divAlertDager").html("Error en la peticion:\n\n" + data.Mensaje);
                                            $("#divAlertDager").show("slide");
                                            setTimeAlert("divAlertDager");
                                        }


                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {

                                    }
                                });
                            } else {
                                $("#divAlertDager").html("Error en la peticion:\n\n Debe seleccionar una promoci&oacute;n");
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
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
        eliminarPromocion = function () {

            //        var idActuacion = $("#hiddenIdActuacion").val();
            //        if (idActuacion > 0) {
            //            $.ajax({
            //                type: "POST",
            //                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            //                data: {
            //                    idActuacion: idActuacion,
            //                    accion: "eliminarActuacion_Promocion"
            //                },
            //                async: false,
            //                dataType: "json",
            //                beforeSend: function (xhr) {
            //
            //                },
            //                success: function (data, textStatus, jqXHR) {
            //
            //                    if (data.Estatus == "Ok") {
            //                        $("#divHideForm").hide();
            //                        $("#divAlertSucces").html("Correcto!: " + data.Mensaje);
            //                        $("#divAlertSucces").show("slide");
            //                        setTimeAlert("divAlertSucces");
            //                        limpiar();
            //                        alert("Se elimino la promocion con idActuacion: " + idActuacion);
            //                    } else {
            //                        $("#divAlertDager").html("Error en la peticion:\n\n" + data.Mensaje);
            //                        $("#divAlertDager").show("slide");
            //                        setTimeAlert("divAlertDager");
            //                    }
            //
            //
            //                },
            //                error: function (jqXHR, textStatus, errorThrown) {
            //
            //                }
            //            });
            //        } else {
            //            $("#divAlertDager").html("Error en la peticion:\n\n Debe seleccionar una promoci&oacute;n");
            //            $("#divAlertDager").show("slide");
            //            setTimeAlert("divAlertDager");
            //        }
        };

        //carga actualizacion
        siguiente = function (div, url, paso) {
            //    $.post(url, {idCarpetajudicial: $('#hddIdCarpetaJudicial').val()}, function (htmlexterno) {
            $.post(url, {idCarpetajudicial: $('#hddIdCarpetaJudicial').val(), idTipoActuacion: $('#idactuacionhidden').val()}, function (htmlexterno) {
                $("#" + div).html(htmlexterno);
            });
        };
        function cargarCarpetas(idCarpetaJudicial) {
            //alert("id Carpeta judicial: " + idCarpetaJudicial);
            $("#idCarpetaJudicial").val(idCarpetaJudicial);
            changeDivForm(2);
            General();
            //        siguientePaso(1);
        }

        function radicarNuevaCarpeta() {
            bootbox.dialog({
                message: "Al seleccionar esta opci&oacute;n se generar&aacute; una nueva carpeta judicial \u00bf Desea continuar?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            var idCarpeta = "";
                            cargarCarpetas(idCarpeta);
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
        }

        siguientePaso = function (paso) {
            if (paso == 1) {
                siguiente('divGeneral', 'sigejupe/carpetasjudiciales/frmCarpetajudicial.php', 1);
                $('#liPaso1').find("a").addClass("active");
                $('#liPasogeneral').find("a").removeClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#btnPaso1').show();
                $('#btnPaso2').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
            } else if (paso == 2) {
                if (!validaPasoUno()) {
                    $("#divFormulario").hide();
                    $('#liPaso2').find("a").addClass("active");
                    $('#liPasogeneral').find("a").removeClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/imputadoscarpetas/frmImputadoscarpetas.php', 2);
                    $('#btnPaso2').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 3) {
                if (!validaPasoUno() && !validaPasoDos()) {
                    $("#divFormulario").hide();
                    $('#liPaso3').find("a").addClass("active");
                    $('#liPasogeneral').find("a").removeClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/ofendidoscarpetas/frmOfendidoscarpetas.php', 3);
                    $('#btnPaso3').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 4) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres()) {
                    $("#divFormulario").hide();
                    $('#liPaso4').find("a").addClass("active");
                    $('#liPasogeneral').find("a").removeClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/delitoscarpetas/frmDelitoscarpetas.php', 4);
                    $('#btnPaso4').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 5) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro()) {
                    $("#divFormulario").hide();
                    $('#liPaso5').find("a").addClass("active");
                    $('#liPasogeneral').find("a").removeClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/impofedelcarpetas/frmImpofedelcarpetas.php', 5);
                    $('#btnPaso5').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 6) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                    $("#divFormulario").hide();
                    $('#liPaso6').find("a").addClass("active");
                    $('#liPasogeneral').find("a").removeClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/victimascarpetas/frmVictimascarpetas.php', 6);
                    $('#btnPaso6').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                }
            }
        };

        validaPasoUno = function () {
            var error = true;
            if ($('#idCarpetaJudicial').val() != "") {
                error = false;
            } else {
                $("html, body").animate({scrollTop: 0}, "slow");
                $("#div-advertencia").html("");
                $("#div-advertencia").html("Seleccionar una carpeta judicial!");
                $("#div-advertencia").show("slow");
                setTimeAlert("div-advertencia");
                error = true;
            }
            return error;
        }

        validaPasoDos = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarTotal",
                    idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.msj);
                        $("#div-advertencia").show("slow");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });
            return error;
        };

        validaPasoTres = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarTotal",
                    idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.msj);
                        $("#div-advertencia").show("slow");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Carpetas Judiciales:\n\n" + otroobj);
                }
            });
            return error;
        };

        validaPasoCuatro = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/delitoscarpetas/DelitoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarTotal",
                    idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.msj);
                        $("#div-advertencia").show("slow");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de delitos:\n\n" + otroobj);
                }
            });
            return error;
        };
        validaPasoCinco = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {
                    accion: "validaRelacion",
                    idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.estatus == 'ok') {
                        error = false;
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.mensaje);
                        $("#div-advertencia").show("");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Carpetass judiciales:\n\n" + otroobj);
                }
            });
            return error;
        };
        General = function () {
            $("#divGeneral").empty();
            //        $("#refpromocion1").clone().appendTo("#refpromocion");
            //        $('#refpromocion1').show("slide");
            //        $("#divConsulta").show("slide");        
            $("#divFormulario").show();
            $('#liPasogeneral').find("a").addClass("active");
            $('#liPaso1').find("a").removeClass("active");
            $('#liPaso2').find("a").removeClass("active");
            $('#liPaso3').find("a").removeClass("active");
            $('#liPaso4').find("a").removeClass("active");
            $('#liPaso5').find("a").removeClass("active");
            $('#liPaso6').find("a").removeClass("active");
            //        $("#divGeneral").hide();
            //            $("#divConsulta").hide("fade");
        }
        changeDivForm = function (opc) {

            if (opc === 1) {
                // alert('alert');
                $("#divConsulta1").show();
                $("#divCamposConsulta").show();
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
                $("#menuPasos").show("slide");
                $("#botonregresaraconsulta").show("slide");
            }
        };

        function clean() {
            $("#cveJuzgado").val("");
            $("#numero").val("");
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            $("#cveTipoCarpeta").val("");
            var html = '';
            html += '<table class="table table-hover table-striped table-bordered">';
            html += '<thead>';
            html += '<th>#</th>';
            html += '<th>Carpeta Inv</th>';
            html += '<th>NUC</th>';
            html += '<th>N&uacute;mero</th>';
            html += '<th>A&ntilde;o</th>';
            html += '<th>Tipo Carpeta</th>';
            html += '<th>Etapa Procesal</th>';
            html += '<th>Estatus</th>';
            html += '<th>Fecha Registro</th>';
            html += '<th>Juzgado</th>';
            $("#consulta-carpetas").html(html);
            //$(".guarda").hide();
            $(".juzgadores").hide();
            $("#idJuzgadorCarpeta").val("");
            $("#idCarpetaJudicial").val("");
            $("#propietario").val("");
        }

        function listaJuzgados() {
            var ruta_juzgados = "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" >';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#listaJuzgados').html(html);
                    } catch (e) {
                        // alert(e);
                        ToggleLoading(2);
                    }
                }
            }).error(function () {
                //            alert('error al obtener los juzgados');
                ToggleLoading(2);
            });
        }

        function consultarJuzgadores() {
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                        cveJuzgado: cveJuzgado,
                        activo: 'S',
                        accion: "listaJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if (result.totalCount > 0) {
                                html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            } else {
                                html = "";
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            }

                        } catch (e) {
                            ToggleLoading(2);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                });
            }
        }

        function validar() {
            if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Debe indicar un nuevo propietario para la carpeta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgadorCarpeta").val() == "" || $("#idJuzgadorCarpeta").val() == 0) {
                $("#advertencia").html('<span>La carpeta no tiene alg&uacute;n propietario asignado, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else {
                return true;
            }
        }

        formatoFecha = function (campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        };
        $(function () {
            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');
            $("#txtNumero2").validaCampo('0123456789');
            $("#txtAnio2").validaCampo('0123456789');
            $("#txtNumActuacion2").validaCampo('0123456789');
            $("#txtAniActuacion2").validaCampo('0123456789');
            $("#txtNumActuacion").validaCampo('0123456789');
            $("#txtAniActuacion").validaCampo('0123456789');
            $("#txtFojas").validaCampo('0123456789');
            $("#txtNumActuacionInc").validaCampo('0123456789');
            $("#txtAniActuacionInc").validaCampo('0123456789');
            $(".Relacionado")
                    .focusout(function () {
                        $("#divSinRelacionMsg").empty();
                        var cveTipoCarpeta = $("#cmbtipoCarpetaInc").val();
                        var numero = $("#txtNumActuacionInc").val();
                        var anio = $("#txtAniActuacionInc").val();
                        var consulta = true;
                        var cveAdscripcion = $("#cmbJuzgadoOrigenInc").val();

                        if (numero == "") {
                            consulta = false;
                        }
                        if (anio == "") {
                            consulta = false;
                        }
                        if (cveTipoCarpeta == 0) {
                            consulta = false;
                        }

                        if (consulta) {

                            $.ajax({
                                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                                dataType: 'json',
                                async: false,
                                type: "POST",
                                data: {
                                    accion: "consultarCarpetaExhortoAmparo",
                                    numero: numero,
                                    anio: anio,
                                    cveTipoCarpeta: cveTipoCarpeta,
                                    cveJuzgado: cveAdscripcion,
                                    activo: "S"
                                },
                                beforeSend: function (xhr) {

                                },
                                success: function (datos) {

                                    if (datos.totalCount > 0) {
                                        $("#divSinRelacionMsg").empty();
                                        $("#divSinRelacionMsg").append("encontrado");
                                        $("#textoInc").empty();
                                        $("#textoInc").append("encontrado");
                                        $("#hiddenIdCarpetaIncompetencia").val(datos.data[0].idCarpetaJudicial);
                                        $.each(datos.data, function (index, element) {

                                            if (cveTipoCarpeta == 8) {
                                                $("#hiddenIdCarpetaJudicial").val(element.idAmparo);
                                            } else if (cveTipoCarpeta == 7) {
                                                $("#hiddenIdCarpetaJudicial").val(element.idExhorto);
                                            }
                                            else {
                                                $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                            }
                                            $("#inputGuardar").attr("disabled", false);
                                            validarFormulario();
                                            $("#txtCarpetaInv").val(element.carpetaInv);

                                        });
                                    } else {
                                        $("#textoInc").empty();
                                        $("#textoInc").append("Sin Antecedentes");
                                        $("#divSinRelacionMsg").append("Sin Antecedentes");
                                        $("#hiddenIdCarpetaJudicial").val("");
                                        $("#inputGuardar").attr("disabled", true);
                                        $("#hiddenIdCarpetaIncompetencia").val("");
                                        validarFormulario();
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown) {

                                }

                            });
                        }

                    });
            var d = new Date();
            $("#txtfechaInicial").datetimepicker(
                    {sideBySide: false,
                        locale: 'es',
                        format: "DD/MM/YYYY",
                        date: d,
                        maxDate: new Date()
                    }
            );


            $("#txtfechaFinal").datetimepicker(
                    {sideBySide: false,
                        locale: 'es',
                        format: "DD/MM/YYYY",
                        date: d,
                        maxDate: new Date()
                    }
            );

            cargaDistrito();
            cargarTiposPersonas();
            cargarGeneros();
            cargaIncompetencias();
            var permisos = obtenerPermisosFormulario("ATENCION PUBLICO", "PROMOCIONES QUE GENERAN CARPETA JUDICIALIZADA");
            if (permisos.Create == "N") {
                $("#inputGuardar").hide();
            }
            if (permisos.Read == "N") {
                $("#inputConsultar").hide();
            }

            $("input:radio[name=asigNumero]").change(function () {

                if ($(this).val() == "1") {
                    $("#txtNumActuacion2").val("");
                    $("#txtAniActuacion2").val("");
                    $("#txtNumActuacion2").attr('disabled', false);
                    $("#txtAniActuacion2").attr('disabled', false);

                } else {
                    $("#txtNumActuacion2").val("");
                    $("#txtAniActuacion2").val("");
                    $("#txtNumActuacion2").attr('disabled', true);
                    $("#txtAniActuacion2").attr('disabled', true);

                }
            });

            listaJuzgados();
            $("#txtNumActuacion2").attr('disabled', true);
            $("#txtAniActuacion2").attr('disabled', true);
            $("#divConsulta").show();
            $("menuPasos").hide();
            $("botonregresaraconsulta").hide();
            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');

            editor = UE.getEditor('txtNotas');
            editor.ready(function () {
                editor.setContent("");
            });
        });
    </script> 
    <input type="hidden" id="arbolito" value="">
    <?php
    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
        ?>
        <script languaje="javascript">
            buscarPromocionById(<?php echo $idActuacionArbol ?>);
            $("#arbolito").val(<?php echo $idActuacionArbol ?>);
            $("#inputLimpiar").hide();
            $("#inputConsultar").hide();
            $("#inputLimpiarArbol").show();
        </script> 

        <?PHP
    } else if (isset($_POST['idReferencia'])) {
        $idReferencia = @$_POST['idReferencia'];
        $cveJuzgado = @$_POST['cveJuzgado'];
        $cveTipoCarpeta = @$_POST['cveTipoCarpeta'];
        ?>
        <script languaje="javascript">
            $("#arbolito").val(<?php echo $idReferencia ?>);
            consultaEG(<?php echo $idReferencia ?>,<?php echo $cveJuzgado ?>,<?php echo $cveTipoCarpeta ?>);
            $("#inputLimpiar").hide();
            $("#inputConsultar").hide();
            $("#inputLimpiarArbol").show();
        </script> 
    <?PHP }
    ?>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>