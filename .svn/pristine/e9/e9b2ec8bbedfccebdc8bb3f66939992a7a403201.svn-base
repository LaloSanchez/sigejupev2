<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    //var_dump(isset($_POST['idAmparo']));
    //foreach ($_SESSION as $pos => $sesion) {
    ////    echo $pos . " =>" . $sesion . " ";
    //}
    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;
    $origen = $_GET["origen"];
    $OrigenSegundaInstancia = "";


    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $idActuacionArbol = @$_POST['idAmparo'];
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }
    if (isset($_POST['juzgadoOrigenArbol'])) {
      $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
    }


    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    $digitalizacion = "";

    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    $subirArchivos = "";
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();

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
        .optionprom{
            height: 10px;
        }
        .requerido{
            color: darkred;
        }
        .required{
            color: darkred;
        }

    </style>
    <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
    <input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
    <input type="hidden" id="hiddenIdAmparo" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenActivaValidacion" value="0" >
    <input type="hidden" id="hiddenCveAdscripcion" value="<?php echo $_SESSION["cveAdscripcion"]; ?>" >
    <input type="hidden" id="fechaHoy" name="fechaHoy" value="<?= date("d/m/Y") ?>"/>
    <input type="hidden" id="fijo" value="" >

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Registro de Amparos
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div id="divCampos">
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 "><?php
                            $etiqueta = $origen == 1 ? ( "Tribunal de alzada:") : ( "Juzgado:");
                            echo $etiqueta;
                            ?></label>
                        <div class="col-md-6">
                            <form name="selectedJuzgado" >
                                <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta(1)">
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </form>
                        </div>                                
                    </div>
                    <div class="form-group" id="relacionadoCon">                                                                
                        <label class="control-label col-md-3 ">Relacionado con:</label>
                        <div class="col-md-6">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control " name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this, ''), validarFormulario()">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group" id="relacionContipocarpeta" style="display: none">                                                                
                        <label class="control-label col-md-3" id="lblRelationName">No.</label>
                        <div id="divSinRelacion" class="col-md-2">
                            <input type="text" id="txtNumero" class="form-inline Relacionado" id="txtNumero" placeholder="N&uacute;mero">
                        </div>
                        <div id="divSinRelacion" class="col-md-2 col-md-offset-0">
                            <input type="text" class="form-inline Relacionado" id="txtAnio" maxlength="4" id="txtAnio" onchange="validaAnio(this.value, 'A1')" placeholder="A&ntilde;o">
                        </div>

                        <div class="col-md-2">
                            <div id="divSinRelacionMsg" class="col-md-3">

                            </div>
                        </div>
                    </div>

                    <div class="form-group">    
                        <label class="control-label col-md-3 ">No. Amparo:</label>

                        <div class="col-md-1">

                            <input type="text" disabled id="txtNumAmparo" placeholder="" class="form-control" value="" />
                        </div>                           
                        <label class="control-label col-md-1 ">A&ntilde;o Amparo:</label>
                        <div class="col-md-1">
                            <input disabled type="text" id="txtAniAmparo" placeholder="" class="form-control" value="" />
                        </div>    
                        <label class="control-label col-md-1">Tipo de Amparo</label>

                        <div class="col-md-2" id="divTiposAmparos">

                        </div>
                    </div>
                    <div class="form-group" id="relacionadoCon">                                                                
                        <label class="control-label col-md-3  ">Estatus Amparo<b class='requerido'>(*)</b>:</label>
                        <div class="col-md-6">
                            <div id="divEstatusAmparo" class="logobox"></div>
                            <select class="form-control " name="cmbTipoCarpeta" id="cmbEstatusAmparo">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Carpeta de Investigaci&oacute;n</label>
                        <div class="col-md-2">
                            <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtCarpetaInv" placeholder="Carpeta de Investigaci&oacute;n" class="form-control" value="" />
                        </div>                           
                        <label class="control-label col-md-1">No. Oficio: <?php if($origen != 1){ ?><b class='requerido'>(*)</b> <?php } ?></label>
                        <div class="col-md-1">
                            <input  type="text" id="txtOficio" placeholder="Numero de Oficio" class="form-control" value="" />
                        </div>    
                        <label class="control-label col-md-1">A&ntilde;o Oficio: <?php if($origen != 1){ ?><b class='requerido'>(*)</b> <?php } ?> </label>
                        <div class="col-md-1">
                            <input maxlength="4" minlength="4" type="text" id="txtOficio2" onchange="validaAnio(this.value, 'O')" placeholder="Numero de Oficio" class="form-control" value="" />
                        </div> 
                    </div>
                    <div class="form-group">    
                        <label class="control-label col-md-3 "> No. Amparo Federal: </label>
                        <div class="col-md-1">
                            <input type="text" id="txtAmparoFederal" placeholder="" class="form-control" value="" />
                        </div>   
                        <label class="control-label col-md-1 "> A&ntilde;o Amparo Federal: </label>
                        <div class="col-md-1">
                            <input type="text" maxlength="4" minlength="4" onchange="validaAnio(this.value, 'AF')" id="txtAmparoFederal2" placeholder="" class="form-control" value="" />
                        </div>  
                    </div>
                    <div class="form-group">  
                        <label class="control-label col-md-3"> Autoridad Federal: </label>
                        <div class="col-md-6">
                            <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtAutoridadFederal" placeholder="" class="form-control" value="" />
                        </div>   
                    </div>

                    <div class="form-group" style="display:<?php echo $origen == 1 ? 'none' : '' ?>" >    
                        <label class="control-label col-md-3 ">No. Amparo de Sala:</label>

                        <div class="col-md-1">

                            <input  type="text" id="txtNumAmpSala" placeholder="" class="form-control" value="" />
                        </div>                           
                        <label class="control-label col-md-1 ">A&ntilde;o Amparo de Sala:</label>
                        <div class="col-md-1">
                            <input  type="text" id="txtAniAmpSala" maxlength="4" minlength="4" onchange="validaAnio(this.value, 'AS')" placeholder="" class="form-control" value="" />
                        </div>                           
                        <label class="control-label col-md-1 ">Descripci&oacute;n de Sala:</label>
                        <div class="col-md-2">
                            <select class="form-control" name="txtDesSala" id="txtDesSala" >

                            </select>                        
                        </div>                           
                    </div>
                    <div class="form-group">    
                        <label class="control-label col-md-3 ">Acto Reclamado: <b class='requerido'>(*)</b></label>

                        <div class="col-md-6">

                            <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtActoReclamado" placeholder="" class="form-control" value="" />
                        </div>                           

                    </div>
                    <div class="form-group" style="display:<?php echo $origen == 1 ? 'none' : '' ?>" >    
                        <label class="control-label col-md-3 ">No. Toca:</label>
                        <div class="col-md-2">
                            <input  type="text" id="txtToca" placeholder="" class="form-control" value="" />
                        </div>                
                        <label class="control-label col-md-2">A&ntilde;o Toca:</label>
                        <div class="col-md-2">
                            <input maxlength="4" minlength="4" type="text" onchange="validaAnio(this.value, 'T')" id="txtToca2" placeholder="" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group" style="display:<?php echo $origen == 1 ? 'none' : '' ?>" >
                        <label class="control-label col-md-3">No. Exhorto:</label>
                        <div class="col-md-2">
                            <input type="text" id="txtExhorto" placeholder="" class="form-control" value="" />
                        </div>    
                        <label class="control-label col-md-2">A&ntilde;o Exhorto:</label>
                        <div class="col-md-2">
                            <input type="text" maxlength="4" minlength="4" id="txtExhorto2" onchange="validaAnio(this.value, 'E')" placeholder="" class="form-control" value="" />
                        </div> 
                    </div>
                    
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width:90%;margin-left:auto;margin-right:auto">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a id="acordeonImputados" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Quejosos <b class='requerido'>(*)</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <input type="hidden" name="idquejosoRes" id="idquejosoRes" value="">
                                    <!-- INICIO DE FORMULARIO DE QUEJOSOS -->
                                    <div class="form-group" style="display: block">
                                        <label class="control-label col-md-3 ">Tipo Persona <span class="requerido">(*)</span></label>
                                        <div class="col-md-6"> 
                                            <div id="divCmbTipoPersonaImputado" class="logobox"></div>
                                            <select required class="form-control Relacionado bloqueoE" name="cmbTipopersonaQuejoso" id="cmbTipopersonaQuejoso" onchange="seleccionaTipoQue()">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divImputados" style="display:block">
                                        <div id="QuejosoMoral" style="display:block">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Quejoso <span class="requerido">(*)</span></label>
                                                <div class="col-md-6">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtNombreMoralI" placeholder="Persona Moral" class="form-control txtImpM" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbConsignacionIMoral', 'txtImpM', 'lstImputados', 'imputados');"/>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div id="QuejosoFisica" style="display:none"> 
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Quejoso <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtNombreFisicaI" placeholder="Nombre" class="form-control txtImpF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtPaternoFisicaI', 'txtImpF', 'lstImputados');"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtPaternoFisicaI" placeholder="Paterno" class="form-control txtImpF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtMaternoFisicaI', 'txtImpF', 'lstImputados');"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtMaternoFisicaI" placeholder="Materno" class="form-control txtImpF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbConsignacionI', 'txtImpF', 'lstImputados', 'imputados');"/>
                                                </div>
                                            </div>                                        
                                        </div>   
                                        <div class="form-group" id="divGeneros">
                                            <label class="control-label col-md-3">Genero <span class="requerido">(*)</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control " name="cmbGeneros1" id="cmbGeneros1" >
                                                    <option value="0">Seleccione una opcion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="ImputadosAccion" style="display:none;">
                                            <label class="control-label col-md-3"></label>
                                            <div id="divBotonAgregaImputado" style="display:inline-block">
                                                <input type="submit" class="btn btn-primary" id="inputAgregarImputado" value="Agregar Quejoso" onclick="    if ($('#idPersonaAddQ').val() != ''){tablaQuejoso(true)} else{tablaQuejoso()}">
                                            </div>
                                            <div id="divBotonActualizarImputado" style="display:inline-block"></div>
                                            <input type="submit" class="btn btn-primary" id="inputLimpiarImputado" value="Limpiar" onclick="return limpiarquejoso();">
                                        </div>
                                        <!--botones para la respuesta de la consulta, cuando quieres modificar un quejoso-->
                                        <div class="col-md-12" id="QuejososAccion" style="display:none;">
                                            <label class="control-label col-md-3"></label>
                                            <div id="divBotonAgregaImputado" style="display:inline-block">
                                                <input type="submit" class="btn btn-primary" id="inputAgregarImputado" value="Modificar Quejoso" onclick=" tablaQuejosoRes();">
                                            </div>
                                            <div id="divBotonActualizarImputado" style="display:inline-block"></div>
                                            <input type="submit" class="btn btn-primary" id="inputLimpiarImputado" value="Regresar Quejoso a la Lista sin modificar" onclick="return limpiarquejosoRes();">
                                            <input type="submit" class="btn btn-primary" id="inputLimpiarImputado" value="Registrar nuevo Quejoso" onclick="return limpiarquejosoRes();">
                                        </div>
                                    </div>
                                    <input type="hidden" id="listaQuejososreferencia" value="">
                                    <input type="hidden" id="arrayResultadoQuejoso" value="">
                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-md-3">Lista Quejoso(s):</label>
                                        <div class="col-md-6">
                                            <select
                                                name="lstImputados" id="lstImputados"
                                                class="form-control  bloqueoE"
                                                onDblClick="borraPersona(this.id, 'imputados');" 
                                                style="height: 200px" multiple >
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align:center">
                                        <div id="divAlertSuccesImputado" class="alert alert-success alert-dismissable"></div>
                                        <div id="divAlertDagerImputado" class="alert alert-danger alert-dismissable"></div>
                                    </div> 
                                    <div class="col-lg-12" style="display:block" id="divTablaImputados">
                                        <table id="tableImputados" class="table table-hover table-striped table-bordered" >
                                        </table>

                                    </div>
                                    <!--esta tabla es para la muestra de los agregados a quejoso aqui se crea el array para el guardado-->
                                    <div id="ltsQuejoso" style="display:block;">
                                        <h4>Listado de Quejosos Agregados</h4>
                                        <input type="hidden" id="contadorAddQ" value="">
                                        <input type="hidden" id="idPersonaAddQ" value="">
                                        <input type="hidden" id="tipoPersonaAdd" value="">
                                        <label id="txtQV">Vacio</label>
                                        <div class="col-lg-12" style="display:block" id="divTablaQuejososRes">                                                                      
                                            <table id="tableImputados" class="table table-hover table-striped table-bordered" >
                                                <thead> 
                                                    <tr> 
                                                        <th width="100">Tipo Persona</th> 
                                                        <th>Nombre</th> 
                                                        <th width="100">Eliminar</th>
                                                    </tr> 
                                                </thead> 
                                                <tbody id="tabla-quejososRes">
                                                </tbody>
                                                <tbody id="tabla-imputados">
                                                </tbody>
                                            </table>                                
                                        </div>
                                        <hr>
                                        <!--esta tabla es para los resultados de la consulta imputados Base-->
                                        <div class="col-lg-12" id="listaImputadosObt" style="display:block">
                                            <h4>Listado de Imputados Obtenidos, Marque para agregarlos como Quejosos</h4>
                                            <label id="txtIV" style="display: none">Vacio</label>
                                            <table id="imputadosBase" class="table table-hover table-striped table-bordered" >
                                                <thead> 
                                                    <tr>
                                                        <th width="100">Seleccion</th>
                                                        <th width="100">Tipo Persona</th> 
                                                        <th>Nombre</th> 
                                                    </tr> 
                                                </thead> 
                                                <tbody id="tabla-imputadosBase">
                                                </tbody>
                                            </table>

                                        </div>
                                        <!--esta tabla es para los resultados de la consulta ofendidos Base-->
                                        <div class="col-lg-12" id="listaOfendidosObt" style="display:none">
                                            <h4>Listado de Ofendidos Obtenidos, Marque para agregarlos como Quejosos</h4>
                                            <label id="txtOV" style="display: none">Vacio</label>
                                            <table id="ofendidosBase" class="table table-hover table-striped table-bordered" >
                                                <thead> 
                                                    <tr>
                                                        <th width="100">Seleccion</th>
                                                        <th width="100">Tipo Persona</th> 
                                                        <th>Nombre</th> 
                                                    </tr> 
                                                </thead> 
                                                <tbody id="tabla-ofendidosBase">
                                                </tbody>
                                            </table>

                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a id="acordeonOfendidos" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       <?php
                                       if($origen == 1){
                                           echo "Terceros Interesados";
                                       }else{
                                           echo "Terceros Perjudicados";
                                        }
                                       ?> 
                                        
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <input type="hidden" name="idperjudicadoRes" id="idperjudicadoRes" value="">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 ">Tipo Persona <span class="requerido">(*)</span></label>
                                        <div class="col-md-6"> 
                                            <div id="divCmbTipoPersonaOfendido" class="logobox"></div>
                                            <select class="form-control bloqueoE" name="cmbTipopersonaPerjudicado" id="cmbTipopersonaPerjudicado" onchange="seleccionaTipoPe()">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divOfendidos">
                                        <div id="PerjudicadoMoral" style="display:none">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Tercero Perjudicado <span class="requerido">(*)</span></label>
                                                <div class="col-md-6">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtNombreMoralO" placeholder="Persona Moral" class="form-control txtOfeM" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbEstadoMoralO', 'txtOfeM', 'lstOfendidos');"/>
                                                </div>
                                            </div>                                      
                                        </div>
                                        <div id="PerjudicadoFisica" style="display:none">    
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Tercero Perjudicado <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtNombreFisicaO" placeholder="Nombre" class="form-control txtOfeF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtPaternoFisicaO', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtPaternoFisicaO" placeholder="Paterno" class="form-control txtOfeF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtMaternoFisicaO', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" id="txtMaternoFisicaO" placeholder="Materno" class="form-control txtOfeF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbGeneroOfendido', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>

                                            </div>                                                               
                                        </div> 
                                        <div class="form-group" id="divGeneros">
                                            <label class="control-label col-md-3">Genero <span class="requerido">(*)</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control " name="cmbGeneros2" id="cmbGeneros2" >
                                                    <option value="0">Seleccione una opcion</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="OfendidosAccion" style="display:none;">  
                                            <label class="control-label col-md-3"> </label>                                                        
                                            <div class="col-md-6">
                                                <div id="divBotonAgregaOfendido" style="display:inline-block">
                                                    <input type="submit" class="btn btn-primary" id="inputAgregarOfendido" value="Agregar <?php
                                       if($origen == 1){
                                           echo "Interesado";
                                       }else{
                                           echo "Perjudicado";
                                        }
                                       ?> " onclick="return tablaPerjudicado();">
                                                </div>
                                                <div id="divBotonActualizarOfendido" style="display:inline-block"></div>

                                                <input type="submit" class="btn btn-primary" id="inputLimpiarOfendido" value="Limpiar" onclick="return limpiarperjudicado();">
                                            </div>
                                        </div>      
                                        <!--botones para la respuesta de la consulta, cuando quieres modificar un quejoso-->
                                        <div class="form-group col-md-12" id="PerjudicadoAccion" style="display:none;">  
                                            <label class="control-label col-md-3"> </label>  
                                            <div id="divBotonAgregaOfendido" style="display:inline-block">
                                                <input type="submit" class="btn btn-primary" id="inputAgregarOfendido" value="Modificar <?php
                                       if($origen == 1){
                                           echo "Interesado";
                                       }else{
                                           echo "Perjudicado";
                                        }
                                       ?> " onclick="return tablaPerjudicadoRes();">
                                            </div>
                                            <div id="divBotonActualizarOfendido" style="display:inline-block"></div>
                                            <input type="submit" class="btn btn-primary" id="inputLimpiarOfendido" value="Regresar <?php
                                       if($origen == 1){
                                           echo "Interesado";
                                       }else{
                                           echo "Perjudicado";
                                        }
                                       ?>  a la Lista sin modificar" onclick="return limpiarperjudicadoRes();">
                                            <input type="submit" class="btn btn-primary" id="inputLimpiarOfendido" value="Registrar nuevo <?php
                                       if($origen == 1){
                                           echo "Interesado";
                                       }else{
                                           echo "Perjudicado";
                                        }
                                       ?> " onclick="return limpiarperjudicadoRes();">                                                                                    
                                        </div> 
                                    </div>
                                    <br>
                                    <br>                                
                                    <input type="hidden" id="listaPerjudicadoreferencia" value="">
                                    <input type="hidden" id="arrayResultadoPerjudicado" value="">
                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-md-3">Lista <?php
                                       if($origen == 1){
                                           echo "Interesado";
                                       }else{
                                           echo "Perjudicado";
                                        }
                                       ?> (s):</label>
                                        <div class="col-md-6">
                                            <select
                                                name="lstOfendidos" id="lstOfendidos"
                                                class="form-control bloqueoE"
                                                onDblClick="borraPersona(this.id, 'ofendidos');" style="height: 200px" multiple >
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align:center">
                                        <div id="divAlertSuccesOfendido" class="alert alert-success alert-dismissable"></div>
                                        <div id="divAlertDagerOfendido" class="alert alert-danger alert-dismissable"></div>
                                    </div> 
                                    <div class="col-lg-12" style="display:none" id="divTablaOfendidos">
                                        <table id="tableOfendidos" class="table table-hover table-striped table-bordered" ></table>

                                    </div>
                                    <!--tabla para los resultados de la consulta-->
                                    <div class="col-lg-12" style="display:none" id="divTablaPerjudicadosRes">
                                        <table id="tableOfendidos" class="table table-hover table-striped table-bordered" >
                                            <thead> 
                                                <tr> 
                                                    <th width="100">Tipo Persona.</th> 
                                                    <th>Nombre</th> 
                                                    <th width="100">Eliminar</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody id="tabla-perjudicadosRes">
                                            </tbody>
                                            <tbody id="tabla-ofendidos">
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="divNotas" class="form-group">
                        <label class="control-label col-md-3">Observaciones/Anexos: <b class='requerido'>(*)</b></label>
                        <div class="col-md-6">
                            <script id="txtNotas" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                            <!--<textarea rows="5" id="txtNotas" class="form-control" placeholder="Notas"></textarea>-->
                        </div>
                    </div>
                    <br>
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


                    <br>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardarAmparo();">                                    
                            <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    
                            <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                            <input type="submit" style="display: none"class="btn btn-primary" id="inputLimpiarArbol" value="Limpiar" onclick="limpiarArbol();"> 
                            <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultar('divCamposConsulta');">                                    
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="consultarAcuerdos();" style="display: none">                                    
                            <input type="submit" class="btn btn-primary" id="inputEliminar" value="Eliminar" style="display: none" onclick="eliminarPromocion()">                                    
                            <input type="submit" class="btn btn-primary print-link no-print" id="inputImprimir" value="Imprimir" style="display: none" onclick="imprimirRecibo()">                                              
                            <button class="btn btn-primary" id="inputDigitalizar" onclick="javascript:digitalizarAcuerdo();" style="display: none">Digitalizar</button>                                    
                            <button class="btn btn-primary" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>                    
                        </div>
                    </div>
                </div>

            </div>

            <div id="divCamposConsulta" class="form-horizontal" style="display: none">
                <div class="col-md-2">                       
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCampos');" style="display: block">                                    
                </div>
                <div class="form-group" style="clear: both">
                    <label class="control-label col-md-6 ">Consulta de Amparos</label>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 "><?php
    //                    if ($origen == 1) {
    //                        echo "Tribunal de alzada:";
    //                    } else {
    //                        echo "Juzgado:";
    //                    }

                        $etiqueta = $origen == 1 ? ( "Tribunal de alzada:") : ( "Juzgado:");
                        echo $etiqueta;
                        ?></label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control " name="cveTipoJuzgado2" id="cveTipoJuzgado2" onchange="cargaTipoCarpeta(2)">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Relacionado con:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control " name="cmbTipoCarpeta2" id="cmbTipoCarpeta2" onchange="changeLabel(this, 2)">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="lblRelationName2">No.</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <input type="text"  class="form-inline " id="txtNumero2" placeholder="N&uacute;mero">/<input type="text" class="form-inline " id="txtAnio2"  placeholder="A&ntilde;o" maxlength="4" onfocusout="anioCorrecto(this);">
                    </div>                                
                    <div id="divSinRelacionMsg" class="col-md-6">

                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="lblRelationName">No Amparo.</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <input type="text"  class="form-inline " id="txtNumAmparo2" placeholder="N&uacute;mero de Amparo" >/<input type="text" class="form-inline " id="txtAniAmparo2"  placeholder="A&ntilde;o de Amparo" maxlength="4"   onfocusout="anioCorrecto(this);">
                    </div>                                
                    <div id="divSinRelacionMsg" class="col-md-6">

                    </div>                                
                </div>
                <div class="form-group">
                    <div class="col-md-9">

                        <label class="control-label col-md-4" id="lblRelationName">Fecha Inicial</label>

                        <div class="col-md-3">
                            <input type="text" id="txtfechaInicial" placeholder="" class="form-control datepicker"  val=""/>
                        </div>
                        <label class="control-label col-md-1" id="lblRelationName">Fecha Final</label>
                        <div class="col-md-3">
                            <input type="text" id="txtfechaFinal" placeholder="" class="form-control datepicker" val=""/>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="buscarAmparo(0);" style="display: block">                                    
                        </div>

                        <div class="col-md-1">
                            <input type="submit" class="btn btn-primary" id="inputLimpiarB" value="Limpiar" onclick="limpiarConsulta();">                                    
                        </div>
                        <div class="col-md-1">
                            <input type="submit" style="display: none" class="btn btn-primary" id="inputImprimir" value="Imprimir">                                    
                        </div>                    
                    </div>
                </div>

                <div id="divConsulta" style="display: none" class="col-md-12">  
                    <div class="col-md-12 col-md-offset-3" id="combosPaginacion">
                        <div class="form-group col-md-2" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-2" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="buscarAmparo();">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="buscarAmparo(1);">
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
                    <div id="divTableResult" class="col-md-12"></div>
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
            <div id="imprimir" style="display: none;">
                <div id="printable" ></div>
                <div id="botones">
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCampos');" style="display: block"> 
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
           var instancia = null;
            var arrayQuejoso = [];
            var arrayPerjudicado = [];
            var arrayListaResQuejoso = [];
            var arrayListaResPerjudicado = [];
            var origen = "<?php echo $origen; ?>";
            if (editor != undefined) {
                editor.destroy();
            } else {

            }
            var editor = null;
            $('.nav-tabs a').click(function () {
                $(this).tab('show');
            });
            var juzgadoSesion = "<?php $_SESSION['cveAdscripcion']; ?>";
            var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
            var procedencia = "<?php echo $procedencia; ?>";
            digitalizarAcuerdo = function () {
                //idcarpeta
                //idactuacion
                //desc carpeta/actuacion
                //desc juzgado 
                //numero de la carpeta/actuacion
                //a�o de la carpeta/actuacion
                //cve documento
                //usuario
                var strl;
                strl = $("#hiddenIdAmparo").val() + "-0" + "-AMPAROS-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumAmparo").val() + "-" + $("#txtAniAmparo").val() + "-2-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
                strl += "-<?php echo $subirArchivos; ?>";
                strl += "-<?php echo $digitalizacion; ?>";
                launchDigitalizador(strl);
            },
                    visorDocuemntos = function () {
                        $.ajax({
                            type: 'POST',
                            url: 'visorpdf/index.php',
                            data: {idCarpetaJudicial: $('#hiddenIdAmparo').val(), idActuacion: 0, cveTipoDocumento: 2}, //malo
                            async: false,
                            dataType: 'html',
                            beforeSend: function () {
                                $('#visor').html('<h3>Consultando informaci�n ... espere.</h3>');
                            },
                            success: function (data) {
                                $('#visor').html(data);
                            },
                            error: function (objeto, quepaso, otroobj) {
                                $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                                console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                            }
                        });
                    }

            anioCorrecto = function (id) {
                var anio = $(id).val();
                var currentTime = new Date();
                var year = currentTime.getFullYear();
                if (anio != "") {
                    if (anio.length < 4) {
                        $(id).parent().append("<label class='required'>El a&ntilde;o no es correcto debe ser de 4 digitos (aaaa)</label>");
                    } else if (anio < 1980) {
                        $(id).parent().append("<label class='required'>El a&ntilde;o no es correcto debe ser mayor a 1980</label>");
                    } else if (anio > year) {
                        $(id).parent().append("<label class='required'>El a&ntilde;o debe ser menor o igual a " + year + "</label>");
                    }
                }
            };
            bloqueoCombos = function () {
                $("#cveTipoJuzgado").attr("disabled", true);
                $("#cmbTipoCarpeta").attr("disabled", true);
                $("#txtNumero").attr("disabled", true);
                $("#txtAnio").attr("disabled", true);
            }
            cargaDistrito = function (grt) {

            var strDatos = "accion=distrito";
            var urlOption = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
//            if (origen == 1) {
//            url = "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
//                    accion = "consultarCombo";
//            } else {
            var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
            var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();
            url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            accion = "distrito";
            var validaArbolParaCargar = "<?php echo $_POST["idAmparo"]; ?>";   
            if (validaArbolParaCargar != "") {
               if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
                  if (OrigenSegundaInstancia == "") {
                     strDatos = "accion=getJuzgadoAmparo&idAmparo=" + validaArbolParaCargar;
                  } else {
            }
               } else {

                  if (hiddencveJuzgadoOrigenArbol != 0) {
                     strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                  } else {
                     strDatos = "accion=getJuzgadoAmparo&idAmparo=" + validaArbolParaCargar;
                  }
               }
            }
            
            
//            }
                $.ajax({
                    type: "POST",
                    url: urlOption,
                    data: strDatos,
                    async: false,
                    dataType: "html",
                    beforeSend: function (objeto) {
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
                                }
                            }
                            cargaTipoCarpeta(1);
                            cargaTipoCarpeta(2);
                        }
                        $('#divCmbRelaciones').hide();
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            cargaTipoCarpeta = function (grt) {
                if (grt == 1) {
                    var tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
                } else if (grt == 2) {
                    tipoJuzgado = $("#cveTipoJuzgado2").val().split("/");
                }


                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            if (grt == 1) {
                                $("#cmbTipoCarpeta").empty();
                                $("#cmbTipoCarpeta").append($('<option></option>').val("0").html("Seleccione una opcion"));
                                $("#cmbTipoCarpeta").append($('<option></option>').val("00").html("SIN RELACION"));
                            } else {
                                $("#cmbTipoCarpeta2").empty();
                                $("#cmbTipoCarpeta2").append($('<option></option>').val("0").html("Seleccione una opcion"));
                                $("#cmbTipoCarpeta2").append($('<option></option>').val("0").html("SIN RELACION"));
                            }

                            var cvetipoJuzgado = $("#cveTipoJuzgado").val();
                            for (var i = 0; i < json.totalCount; i++) {
                                switch (tipoJuzgado[1]) {
                                    case "1": // tipo de juzgado de control
                                        if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // exhorto, amparo
                                            if (grt == 1) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else {
                                                $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if (json.data[i].cveTipoCarpeta == "3") { // exhorto, amparo 
                                            if (grt == 1) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else {
                                                $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion
                                        if (json.data[i].cveTipoCarpeta == "5") { // exhorto, amparo
                                            if (grt == 1) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else {
                                                $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if (json.data[i].cveTipoCarpeta == "4") { // exhorto, amparo 
                                            if (grt == 1) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else {
                                                $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "5": // verificar queda pendiente*************************
                                            if (json.data[i].cveTipoCarpeta == "6") { // tipo carpeta causa de juicio
                                                if (grt == 1) {
                                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                                } else {
                                                    $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                                }

                                            }
                                        break;
                                    case "8": // verificar queda pendiente*************************
                                            if (json.data[i].cveTipoCarpeta == "6") { // tipo carpeta causa de juicio
                                                if (grt == 1) {
                                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                                } else {
                                                    $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                                }

                                            }
                                        break;
                                }

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
            cargaTipoPersona = function () {
                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            for (var i = 0; i < json.totalCount; i++) {
                                if (json.data[i].cveTipoPersona != "4" & json.data[i].cveTipoPersona != "5") {
                                    $("#cmbTipopersonaQuejoso").append($('<option></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
                                    $("#cmbTipopersonaPerjudicado").append($('<option></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
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
            cargaEstatusAmparo = function () {
            var strDatos = "accion=consultar";
            $.ajax({
            type: "POST",
                    url: "../fachadas/sigejupe/estatusamparos/EstatusamparosFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                    $("#cmbEstatusAmparo").append($('<option></option>').val(json.data[i].cveEstatusAmparo).html(json.data[i].desEstatus));
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
            cargaTipoSala = function () {

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    data: {
                        accion: "consultar",
                        cveInstancia: 2
                    },
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON                    
                        if (json.totalCount > 0) {
                            $("#txtDesSala").append($('<option></option>').val("0").html("seleccione una opcion"));
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#txtDesSala").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
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
    //            cargaDesdeArbol();
            };
            seleccionaTipoQue = function () {
                if ($("#cmbTipopersonaQuejoso").val() == 1) {
                    $("#QuejosoFisica").slideDown();
                    $("#QuejosoMoral").slideUp();
                    $("#cmbGeneros1").val('1');
                    $("#cmbGeneros1").attr("disabled", false);
                } else if ($("#cmbTipopersonaQuejoso").val() == 2 || $("#cmbTipopersonaQuejoso").val() == 3) {
                    $("#QuejosoMoral").slideDown();
                    $("#QuejosoFisica").slideUp();
                    $("#cmbGeneros1").val('3');
                    $("#cmbGeneros1").attr("disabled", true);
                    $("#txtPaternoFisicaI").val("");
                    $("#txtMaternoFisicaI").val("");
                }
                if ($("#idquejosoRes").val() == '') {
                    $("#QuejososAccion").hide();
                    if ($("#cmbTipopersonaQuejoso").val() != 0) {
                        $("#ImputadosAccion").show();
                    } else {
                        $("#ImputadosAccion").hide();
                    }
                } else {
                    $("#QuejososAccion").show();
                }

                // $("#txtDomicilioMoralI").val();
                // $("#txtDomicilioI").val();
            };
            seleccionaTipoPe = function () {
                if ($("#cmbTipopersonaPerjudicado").val() == 1) {
                    $("#PerjudicadoFisica").slideDown();
                    $("#PerjudicadoMoral").slideUp();
                    $("#cmbGeneros2").val('1');
                    $("#cmbGeneros2").attr("disabled", false);
                } else if ($("#cmbTipopersonaPerjudicado").val() == 2 || $("#cmbTipopersonaPerjudicado").val() == 3) {
                    $("#PerjudicadoMoral").slideDown();
                    $("#PerjudicadoFisica").slideUp();
                    $("#cmbGeneros2").val(3);
                    $("#cmbGeneros2").attr("disabled", true);
                    $("#txtPaternoFisicaO").val("");
                    $("#txtMaternoFisicaO").val("");
                }
                if ($("#idperjudicadoRes").val() == '') {
                    $("#PerjudicadoAccion").hide();
                    if ($("#cmbTipopersonaPerjudicado").val() != 0) {
                        $("#OfendidosAccion").show();
                    } else {
                        $("#OfendidosAccion").hide();
                    }
                } else {
                    $("#PerjudicadoAccion").show();
                }
            };
            //    agregamos a los quejosos----------------------------------
            tablaQuejoso = function (valida = false) {
                $("#ltsQuejoso").show();
                $(".required").remove();
                var con = $("#listaQuejososreferencia").val();
                if (con == "") {
                    con = 0;
                    $("#listaQuejososreferencia").val(0);
                }
                var tipoPersona = $("#cmbTipopersonaQuejoso").val();
                var nombre = '';
                if (tipoPersona == 2 || tipoPersona == 3) {
                    if ($("#txtNombreMoralI").val() == 0) {
                        $('#txtNombreMoralI').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Nombre del Quejoso</label>");
                        return;
                    }
                    nombre = $("#txtNombreMoralI").val();
                } else {
                    if ($("#txtNombreFisicaI").val() == 0) {
                        $('#txtNombreFisicaI').parent().append("<br class='required nombrequejoso'><label class='Arial13Rojo required'>Escriba el nombre del Quejoso</label>");
                        return;
                    }
                    if ($("#txtPaternoFisicaI").val() == 0) {
                        $('#txtPaternoFisicaI').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido paterno del Quejoso</label>");
                        return;
                    }
                    if ($("#txtMaternoFisicaI").val() == 0) {
                        $('#txtMaternoFisicaI').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido materno del Quejoso</label>");
                        return;
                    }
                    nombre = $("#txtNombreFisicaI").val();
                }
                var genero = $("#cmbGeneros1").val();
                var paterno = $("#txtPaternoFisicaI").val();
                var materno = $("#txtMaternoFisicaI").val();
            if (!valida){
            $("#idPersonaAddQ").val("")
            }
                var idPersonaAddQ = $("#idPersonaAddQ").val();
                arrayQuejoso[con] = new Array(6);
                arrayQuejoso[con][0] = tipoPersona;
                arrayQuejoso[con][1] = nombre;
                arrayQuejoso[con][2] = paterno;
                arrayQuejoso[con][3] = materno;
                arrayQuejoso[con][4] = genero;
                arrayQuejoso[con][5] = idPersonaAddQ; //activo y 0 inactivo

                pintoTabla();
            };
            pintoTabla = function () {
                var con = $("#listaQuejososreferencia").val();
                $("#tabla-imputados").empty();
                var html = "";
                var txttipoPersona = '';
                for (var i = 0; i <= con; i++) {
                    if (arrayQuejoso[i][1] != 0) {
                        if (arrayQuejoso[i][0] == 1) {
                            txttipoPersona = 'Fisica';
                        }
                        if (arrayQuejoso[i][0] == 2) {
                            txttipoPersona = 'Moral';
                        }
                        if (arrayQuejoso[i][0] == 3) {
                            txttipoPersona = 'Otra';
                        }

                        html += "<tr>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarquejoso('" + i + "','" + arrayQuejoso[i][0] + "','" + arrayQuejoso[i][1] + "','" + arrayQuejoso[i][2] + "','" + arrayQuejoso[i][3] + "','" + arrayQuejoso[i][4] + "','" + arrayQuejoso[i][5] + "')\">" + arrayQuejoso[i][1] + " " + arrayQuejoso[i][2] + " " + arrayQuejoso[i][3] + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPersona(" + i + ")'></center></td>";
                        html += "</tr>";
                    }

                }
                con++;
    //alert(html);
                $("#tabla-imputados").append(html);
                $("#divTablaImputados").show('fast');
                $("#divTablaQuejososRes").show('fast');
                $("#listaQuejososreferencia").val(con);
            $("#idPersonaAddQ").val("")
                limpiarquejoso();
            };
            modificarquejoso = function (identificador, tipoPersona, nombre, paterno, materno, genero, idPersonaAddQ) {
                borraPersona(identificador);
                $("#cmbTipopersonaQuejoso").val(tipoPersona);
                seleccionaTipoQue();
                $("#txtNombreMoralI").val(nombre);
                $("#txtNombreFisicaI").val(nombre);
                $("#txtPaternoFisicaI").val(paterno);
                $("#txtMaternoFisicaI").val(materno);
                $("#cmbGeneros1").val(genero);
            $('#idPersonaAddQ').val(idPersonaAddQ);
            };
            limpiarquejoso = function () {
                $("#txtNombreMoralI").val("");
                $("#txtNombreFisicaI").val("");
                $("#txtPaternoFisicaI").val("");
                $("#txtMaternoFisicaI").val("");
                $("#cmbTipopersonaQuejoso").val("0");
                $("#cmbGeneros1").val("0");
                $("#idquejosoRes").val("");
                seleccionaTipoQue();
            };
            borraPersona = function (id) {
            var bandera = false;
            if (arrayQuejoso[id][5] != "") {
            bandera = true;
            }
                arrayQuejoso[id][0] = 0;
                arrayQuejoso[id][1] = 0;
                arrayQuejoso[id][2] = 0;
                arrayQuejoso[id][3] = 0;
                arrayQuejoso[id][4] = 0;
                arrayQuejoso[id][5] = 0;
            if (bandera) {
            mostrarImputados($("#hiddenIdCarpetaJudicial").val());
            mostrarOfendidos($("#hiddenIdCarpetaJudicial").val());
            $("#listaOfendidosObt").show();
            $("#listaImputadosObt").show();
            for (var i = 0; i < arrayQuejoso.length; i++){
            if (arrayQuejoso[i][5] != 0){
            arrayQuejoso[id][0] = 0;
            arrayQuejoso[i][1] = 0;
            arrayQuejoso[i][2] = 0;
            arrayQuejoso[i][3] = 0;
            arrayQuejoso[i][4] = 0;
            arrayQuejoso[i][5] = 0;
            }
            }
            console.log(arrayQuejoso);
            }
                var con = $("#listaQuejososreferencia").val();
                var html = "";
                var txttipoPersona = '';
                for (var i = 0; i < con; i++) {
                    if (arrayQuejoso[i][1] != 0) {
                        if (arrayQuejoso[i][0] == 1) {
                            txttipoPersona = 'Fisica';
                        }
                        if (arrayQuejoso[i][0] == 2) {
                            txttipoPersona = 'Moral';
                        }
                        if (arrayQuejoso[i][0] == 3) {
                            txttipoPersona = 'Otra';
                        }
                        html += "<tr>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
            html += "<td style='cursor:pointer;' onclick=\"modificarquejoso('" + i + "','" + arrayQuejoso[i][0] + "','" + arrayQuejoso[i][1] + "','" + arrayQuejoso[i][2] + "','" + arrayQuejoso[i][3] + "','" + arrayQuejoso[i][4] + "','" + arrayQuejoso[i][5] + "')\">" + arrayQuejoso[i][1] + " " + arrayQuejoso[i][2] + " " + arrayQuejoso[i][3] + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPersona(" + i + ")'></center></td>";
                        html += "</tr>";
                    }
                }
                $("#tabla-imputados").html(html);
                $("#divTablaImputados").show('fast');
                $("#listaQuejososreferencia").val(con);
            };
            //    Termina agregar a los quejosos----------------------------------
            //    COMIENZA agregar a los perjudicados----------------------------------
            tablaPerjudicado = function () {

                $(".required").remove();
                var con = $("#listaPerjudicadoreferencia").val();
                if (con == "") {
                    con = 0;
                    $("#listaPerjudicadoreferencia").val(0);
                }
                var tipoPersona = $("#cmbTipopersonaPerjudicado").val();
                var nombre = '';
                if (tipoPersona == 2 || tipoPersona == 3) {
                    if ($("#txtNombreMoralO").val() == 0) {
                        $('#txtNombreMoralO').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Nombre del Quejoso</label>");
                        return;
                    }
                    nombre = $("#txtNombreMoralO").val();
                } else {
                    if ($("#txtNombreFisicaO").val() == 0) {
                        $('#txtNombreFisicaO').parent().append("<br class='required nombrequejoso'><label class='Arial13Rojo required'>Escriba el nombre del Quejoso</label>");
                        return;
                    }
                    if ($("#txtPaternoFisicaO").val() == 0) {
                        $('#txtPaternoFisicaO').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido paterno del Quejoso</label>");
                        return;
                    }
                    if ($("#txtMaternoFisicaO").val() == 0) {
                        $('#txtMaternoFisicaO').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido materno del Quejoso</label>");
                        return;
                    }
                    nombre = $("#txtNombreFisicaO").val();
                }

                var paterno = $("#txtPaternoFisicaO").val();
                var materno = $("#txtMaternoFisicaO").val();
                var genero = $("#cmbGeneros2").val();
                var nombrex = nombre.split(" ");
                nombrex = nombrex.join("");
                var nombreCampos = nombrex + paterno + materno;
                if (arrayPerjudicado.length > 0) {
                    for (var i = 0; i < con; i++) {

                        var nombrePrimero = arrayPerjudicado[i][1];
                        if (nombrePrimero != 0) {
                            nombrePrimero = nombrePrimero.split(" ");
                            nombrePrimero = nombrePrimero.join("");
                            var nombreCompleto = nombrePrimero + arrayPerjudicado[i][2] + arrayPerjudicado[i][3];
                            nombreCompleto = nombreCompleto.split(";");
                            nombreCompleto = nombreCompleto.join("");
                            if (nombreCampos === nombreCompleto) {
                                alert("Ya existe el tercero perjudicado");
                                return;
                            }
                        }
                    }
                }
                arrayPerjudicado[con] = new Array(6);
                arrayPerjudicado[con][0] = tipoPersona;
                arrayPerjudicado[con][1] = nombre;
                arrayPerjudicado[con][2] = paterno;
                arrayPerjudicado[con][3] = materno;
                arrayPerjudicado[con][4] = genero;
                arrayPerjudicado[con][5] = 1; //activo y 0 inactivo



                pintoTablaPerjudicado();
            };
            pintoTablaPerjudicado = function () {
                var con = $("#listaPerjudicadoreferencia").val();
                var html = "";
                var txttipoPersona = '';
                for (var i = 0; i <= con; i++) {
                    if (arrayPerjudicado[i][1] != 0) {
                        if (arrayPerjudicado[i][0] == 1) {
                            txttipoPersona = 'Fisica';
                        }
                        if (arrayPerjudicado[i][0] == 2) {
                            txttipoPersona = 'Moral';
                        }
                        if (arrayPerjudicado[i][0] == 3) {
                            txttipoPersona = 'Otra';
                        }
                        var nombreCompleto = arrayPerjudicado[i][1] + ";" + arrayPerjudicado[i][2] + ";" + arrayPerjudicado[i][3];
                        html += "<tr data-nombre='" + nombreCompleto + "'>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarperjudicado('" + i + "','" + arrayPerjudicado[i][0] + "','" + arrayPerjudicado[i][1] + "','" + arrayPerjudicado[i][2] + "','" + arrayPerjudicado[i][3] + "','" + arrayPerjudicado[i][4] + "')\">" + arrayPerjudicado[i][1] + " " + arrayPerjudicado[i][2] + " " + arrayPerjudicado[i][3] + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPerjudicado(" + i + ")'></center></td>";
                        html += "</tr>";
                    }
                }
                con++;
                $("#tabla-ofendidos").html(html);
                $("#divTablaOfendidos").show('fast');
                $("#divTablaPerjudicadosRes").show('fast');
                $("#listaPerjudicadoreferencia").val(con);
                limpiarperjudicado();
            };
            modificarperjudicado = function (identificador, tipoPersona, nombre, paterno, materno, genero) {
                if ($("#txtNombreFisicaO").val() != "" || $("#txtPaternoFisicaO").val() != "" || $("#txtMaternoFisicaO").val() != "" || $("#txtNombreMoralO").val() != "") {
                    alert("Estas modificando a un perjudicado, agregalo para poder editar otro");
                    return;
                } else {
                    borraPerjudicado(identificador);
                    $("#cmbTipopersonaPerjudicado").val(tipoPersona);
                    seleccionaTipoPe(tipoPersona);
                    $("#txtNombreMoralO").val(nombre);
                    $("#txtNombreFisicaO").val(nombre);
                    $("#txtPaternoFisicaO").val(paterno);
                    $("#txtMaternoFisicaO").val(materno);
                    $("#cmbGeneros2").val(genero);
                }
            };
            limpiarperjudicado = function () {
                $("#txtNombreMoralO").val("");
                $("#txtNombreFisicaO").val("");
                $("#txtPaternoFisicaO").val("");
                $("#txtMaternoFisicaO").val("");
                $("#cmbTipopersonaPerjudicado").val("0");
                $("#cmbGeneros2").val("0");
                $("#idperjudicadoRes").val("");
                seleccionaTipoPe();
            };
            borraPerjudicado = function (id) {
                arrayPerjudicado[id][0] = 0;
                arrayPerjudicado[id][1] = 0;
                arrayPerjudicado[id][2] = 0;
                arrayPerjudicado[id][3] = 0;
                arrayPerjudicado[id][4] = 0;
                arrayPerjudicado[id][5] = 0;
                var con = $("#listaPerjudicadoreferencia").val();
                var html = "";
                var txttipoPersona = '';
                for (var i = 0; i < con; i++) {
                    if (arrayPerjudicado[i][1] != 0) {
                        if (arrayPerjudicado[i][0] == 1) {
                            txttipoPersona = 'Fisica';
                        }
                        if (arrayPerjudicado[i][0] == 2) {
                            txttipoPersona = 'Moral';
                        }
                        if (arrayPerjudicado[i][0] == 3) {
                            txttipoPersona = 'Otra';
                        }
                        html += "<tr>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarperjudicado('" + arrayPerjudicado[i][0] + "','" + arrayPerjudicado[i][1] + "','" + arrayPerjudicado[i][4] + "')\">" + arrayPerjudicado[i][1] + " " + arrayPerjudicado[i][2] + " " + arrayPerjudicado[i][3] + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPerjudicado(" + i + ")'></center></td>";
                        html += "</tr>";
                    }
                }
                $("#tabla-ofendidos").html(html);
                $("#divTablaOfendidos").show('fast');
                $("#listaPerjudicadoreferencia").val(con);
            };
            //Termina funciones donde agrega a perjudicados--------------------------   
            //Comienza funcion para los resulatdos de consulta
            pintarQuejososRes = function (listaQuejosos) {
                arrayListaResQuejoso = listaQuejosos;
                $("#lstQuejosos").empty();
                $.each(listaQuejosos, function (index, element) {
                    var txttipoPersona = "";
                    if (element.cveTipoPersona == 1) {
                        txttipoPersona = 'Fisica';
                    }
                    if (element.cveTipoPersona == 2) {
                        txttipoPersona = 'Moral';
                    }
                    if (element.cveTipoPersona == 3) {
                        txttipoPersona = 'Otra';
                    }
                    if (element.cveTipoPersona == 1) {
                        var html = "";
                        html += "<tr id='idquejosoEdit" + element.idQuejoso + "'>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarquejosoRes('" + element.idQuejoso + "','" + element.cveTipoPersona + "','" + element.nombre + "','" + element.paterno + "','" + element.materno + "','" + element.cveGenero + "')\">" + element.nombre + " " + element.paterno + " " + element.materno + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraQuejosoRes(" + element.idQuejoso + ")'></center></td>";
                        html += "</tr>";
                    } else {
                        html += "<tr id='idquejosoEdit" + element.idQuejoso + "'>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarquejosoRes('" + element.idQuejoso + "','" + element.cveTipoPersona + "','" + element.nombre + "','','','" + element.cveGenero + "')\">" + element.nombre + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraQuejosoRes(" + element.idQuejoso + ")'></center></td>";
                        html += "</tr>";
                    }
                    $("#ltsQuejoso").show('fast');
                    $("#divTablaQuejososRes").show('fast');
                    $("#tabla-quejososRes").append(html);
                });
            };
            pintarQuejosoResEdit = function (listaQuejosos) {

                var txttipoPersona = "";
                if (listaQuejosos['cveTipoPersona'] == 1) {
                    txttipoPersona = 'Fisica';
                }
                if (listaQuejosos['cveTipoPersona'] == 2) {
                    txttipoPersona = 'Moral';
                }
                if (listaQuejosos['cveTipoPersona'] == 3) {
                    txttipoPersona = 'Otra';
                }
                if (listaQuejosos['cveTipoPersona'] == 1) {
                    var html = "";
                    html += "<tr id='idquejosoEdit" + listaQuejosos['idQuejoso'] + "'>";
                    html += "<th scope='row'>" + txttipoPersona + "</th>";
                    html += "<td style='cursor:pointer;' onclick=\"modificarquejosoRes('" + listaQuejosos['idQuejoso'] + "','" + listaQuejosos['cveTipoPersona'] + "','" + listaQuejosos['nombre'] + "','" + listaQuejosos['paterno'] + "','" + listaQuejosos['materno'] + "','" + listaQuejosos['cveGenero'] + "')\">" + listaQuejosos['nombre'] + " " + listaQuejosos['paterno'] + " " + listaQuejosos['materno'] + "</td>";
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraQuejosoRes(" + listaQuejosos['idQuejoso'] + ")'></center></td>";
                    html += "</tr>";
                } else {
                    html += "<tr id='idquejosoEdit" + listaQuejosos['idQuejoso'] + "'>";
                    html += "<th scope='row'>" + txttipoPersona + "</th>";
                    html += "<td style='cursor:pointer;' onclick=\"modificarquejosoRes('" + listaQuejosos['idQuejoso'] + "','" + listaQuejosos['cveTipoPersona'] + "','" + listaQuejosos['nombre'] + "','','','" + listaQuejosos['cveGenero'] + "')\">" + listaQuejosos['nombre'] + "</td>";
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraQuejosoRes(" + listaQuejosos['idQuejoso'] + ")'></center></td>";
                    html += "</tr>";
                }
                $("#ltsQuejoso").show('fast');
                $("#divTablaQuejososRes").show('fast');
                $("#tabla-quejososRes").append(html);
                limpiarquejoso();
            }
            modificarquejosoRes = function (identificador, tipoPersona, nombre, paterno, materno, genero) {

                $("#cmbTipopersonaQuejoso").val(tipoPersona);
                $("#idquejosoRes").val(identificador);
                tablaQuejosoRes();
                seleccionaTipoQue();
                $("#txtNombreMoralI").val(nombre);
                $("#txtNombreFisicaI").val(nombre);
                $("#txtPaternoFisicaI").val(paterno);
                $("#txtMaternoFisicaI").val(materno);
                $("#cmbGeneros1").val(genero);
                setTimeout($("#idquejosoEdit" + identificador).remove(), 5000);
            };
            borraQuejosoRes = function (identificador) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/quejosos/QuejososFacade.Class.php",
                    data: {
                        idQuejoso: identificador,
                        accion: "guardar",
                        activo: 'N'
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (data, textStatus, jqXHR) {
                        if (data.totalCount != 0) {
                            $("#idquejosoEdit" + identificador).remove();
                            alert('Quejoso eliminado de forma correcta');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }
                });
            };
            tablaQuejosoRes = function () {

                var tipoPersona = $("#cmbTipopersonaQuejoso").val();
                var nombre = '';
                if (tipoPersona == 2 || tipoPersona == 3) {
                    if ($("#txtNombreMoralI").val() == 0) {
                        $('#txtNombreMoralI').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Nombre del Quejoso</label>");
                        return;
                    }
                    nombre = $("#txtNombreMoralI").val();
                } else {
                    if ($("#txtNombreFisicaI").val() == 0) {
                        $('#txtNombreFisicaI').parent().append("<br class='required nombrequejoso'><label class='Arial13Rojo required'>Escriba el nombre del Quejoso</label>");
                        return;
                    }
                    if ($("#txtPaternoFisicaI").val() == 0) {
                        $('#txtPaternoFisicaI').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido paterno del Quejoso</label>");
                        return;
                    }
                    if ($("#txtMaternoFisicaI").val() == 0) {
                        $('#txtMaternoFisicaI').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido materno del Quejoso</label>");
                        return;
                    }
                }
                var tipopersona = $("#cmbTipopersonaQuejoso").val();
                if (tipopersona == 1) {
                    nombre = $("#txtNombreFisicaI").val();
                } else {
                    nombre = $("#txtNombreMoralI").val();
                }
                var listaeditQuejoso = {
                    cveTipoPersona: $("#cmbTipopersonaQuejoso").val(),
                    idQuejoso: $("#idquejosoRes").val(),
                    nombre: nombre,
                    paterno: $("#txtPaternoFisicaI").val(),
                    materno: $("#txtMaternoFisicaI").val(),
                    cveGenero: $("#cmbGeneros1").val()
                };
                var existe = 0;
                if (arrayQuejoso == '') {
                    arrayQuejoso.push(listaeditQuejoso);
                    pintarQuejosoResEdit(listaeditQuejoso);
                } else {
                    for (var i = 0; i < arrayQuejoso.length; i++) {
                        if (listaeditQuejoso['idQuejoso'] == arrayQuejoso[i]['idQuejoso']) {
                            existe = 1;
                        }
                    }
                    if (existe == 0) {
                        arrayQuejoso.push(listaeditQuejoso);
                        pintarQuejosoResEdit(listaeditQuejoso);
                    } else {
                        pintarQuejosoResEdit(listaeditQuejoso);
                    }
                }
                $(".required").remove();
            };
            limpiarquejosoRes = function () {
                $("#txtNombreMoralI").val("");
                $("#txtNombreFisicaI").val("");
                $("#txtPaternoFisicaI").val("");
                $("#txtMaternoFisicaI").val("");
                $("#cmbTipopersonaQuejoso").val("0");
                $("#cmbGeneros1").val("0");
                seleccionaTipoQue();
                var existe = 0;
                if (arrayQuejoso == '') {
                    if ($("#arrayResultadoQuejoso").val() != '' || ("#arrayResultadoQuejoso").val() != '0') {
                        buscarAmparoById($("#arrayResultadoQuejoso").val());
                    }
                } else {
                    for (var i = 0; i < arrayQuejoso.length; i++) {
                        if ($("#idquejosoRes").val() == arrayQuejoso[i]['idQuejoso']) {
                            existe = 1;
                            var listaeditQuejoso = {
                                cveTipoPersona: arrayQuejoso[i]['cveTipoPersona'],
                                idQuejoso: arrayQuejoso[i]['idQuejoso'],
                                nombre: arrayQuejoso[i]['nombre'],
                                paterno: arrayQuejoso[i]['paterno'],
                                materno: arrayQuejoso[i]['materno'],
                                cveGenero: arrayQuejoso[i]['cmbGenero']
                            };
                            pintarQuejosoResEdit(listaeditQuejoso);
                        } else {
                            $.each(arrayListaResQuejoso, function (index, element) {
                                if (element.idQuejoso == $("#idquejosoRes").val()) {
                                    var listaeditQuejoso = {
                                        cveTipoPersona: element.cveTipoPersona,
                                        idQuejoso: element.idQuejoso,
                                        nombre: element.nombre,
                                        paterno: element.paterno,
                                        materno: element.materno,
                                        cveGenero: element.cveGenero
                                    };
                                    pintarQuejosoResEdit(listaeditQuejoso);
                                }
                            });
                        }
                    }
                }
            };
            //    empiezo a pintar perjudicados de consulta-----------------------------------------------------------
            pintarPerjudicadosRes = function (listaTerceros) {
                arrayListaResPerjudicado = listaTerceros;
                $("#lstTerceros").empty();
                $.each(listaTerceros, function (index, element) {
                    var txttipoPersona = "";
                    if (element.cveTipoPersona == 1) {
                        txttipoPersona = 'Fisica';
                    }
                    if (element.cveTipoPersona == 2) {
                        txttipoPersona = 'Moral';
                    }
                    if (element.cveTipoPersona == 3) {
                        txttipoPersona = 'Otra';
                    }
                    if (element.cveTipoPersona == 1) {
                        var html = "";
                        html += "<tr id='idperjudicadoEdit" + element.idTercero + "'>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarperjudicadoRes('" + element.idTercero + "','" + element.cveTipoPersona + "','" + element.nombre + "','" + element.paterno + "','" + element.materno + "','" + element.cveGenero + "')\">" + element.nombre + " " + element.paterno + " " + element.materno + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPerjudicadoRes(" + element.idTercero + ")'></center></td>";
                        html += "</tr>";
                    } else {
                        html += "<tr id='idperjudicadoEdit" + element.idTercero + "'>";
                        html += "<th scope='row'>" + txttipoPersona + "</th>";
                        html += "<td style='cursor:pointer;' onclick=\"modificarperjudicadoRes('" + element.idTercero + "','" + element.cveTipoPersona + "','" + element.nombre + "','','','" + element.cveGenero + "')\">" + element.nombre + "</td>";
                        html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPerjudicadoRes(" + element.idTercero + ")'></center></td>";
                        html += "</tr>";
                    }
                    $("#divTablaPerjudicadosRes").show('fast');
                    $("#tabla-perjudicadosRes").append(html);
                });
            };
            pintarPerjudicadosResEdit = function (listaTerceros) {
                var txttipoPersona = "";
                if (listaTerceros['cveTipoPersona'] == 1) {
                    txttipoPersona = 'Fisica';
                }
                if (listaTerceros['cveTipoPersona'] == 2) {
                    txttipoPersona = 'Moral';
                }
                if (listaTerceros['cveTipoPersona'] == 3) {
                    txttipoPersona = 'Otra';
                }
                if (listaTerceros['cveTipoPersona'] == 1) {
                    var html = "";
                    html += "<tr id='idperjudicadoEdit" + listaTerceros['idTercero'] + "'>";
                    html += "<th scope='row'>" + txttipoPersona + "</th>";
                    html += "<td style='cursor:pointer;' onclick=\"modificarperjudicadoRes('" + listaTerceros['idTercero'] + "','" + listaTerceros['cveTipoPersona'] + "','" + listaTerceros['nombre'] + "','" + listaTerceros['paterno'] + "','" + listaTerceros['materno'] + "','" + listaTerceros['cveGenero'] + "')\">" + listaTerceros['nombre'] + " " + listaTerceros['paterno'] + " " + listaTerceros['materno'] + "</td>";
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPerjudicadoRes(" + listaTerceros['idTercero'] + ")'></center></td>";
                    html += "</tr>";
                } else {
                    html += "<tr id='idperjudicadoEdit" + listaTerceros['idTercero'] + "'>";
                    html += "<th scope='row'>" + txttipoPersona + "</th>";
                    html += "<td style='cursor:pointer;' onclick=\"modificarperjudicadoRes('" + listaTerceros['idTercero'] + "','" + listaTerceros['cveTipoPersona'] + "','" + listaTerceros['nombre'] + "','','','" + listaTerceros['cveGenero'] + "')\">" + listaTerceros['nombre'] + "</td>";
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick='borraPerjudicadoRes(" + listaTerceros['idTercero'] + ")'></center></td>";
                    html += "</tr>";
                }

                $("#divTablaPerjudicadosRes").show('fast');
                $("#tabla-perjudicadosRes").append(html);
                limpiarperjudicado();
            };
            modificarperjudicadoRes = function (identificador, tipoPersona, nombre, paterno, materno, genero) {
                tablaPerjudicadoRes();
                $("#cmbTipopersonaPerjudicado").val(tipoPersona);
                $("#idperjudicadoRes").val(identificador);
                seleccionaTipoPe();
                $("#txtNombreMoralO").val(nombre);
                $("#txtNombreFisicaO").val(nombre);
                $("#txtPaternoFisicaO").val(paterno);
                $("#txtMaternoFisicaO").val(materno);
                $("#cmbGeneros2").val(genero);
                setTimeout($("#idperjudicadoEdit" + identificador).remove(), 10000);
            };
            limpiarperjudicadoRes = function () {
                $("#txtNombreMoralO").val("");
                $("#txtNombreFisicaO").val("");
                $("#txtPaternoFisicaO").val("");
                $("#txtMaternoFisicaO").val("");
                $("#cmbTipopersonaPerjudicado").val("0");
                $("#cmbGeneros2").val("0");
                seleccionaTipoPe();
                var existe = 0;
                if (arrayPerjudicado == '') {
                    if ($("#arrayResultadoPerjudicado").val() != '' || ("#arrayResultadoPerjudicado").val() != '0') {
                        buscarAmparoById($("#arrayResultadoPerjudicado").val());
                    }
                } else {
                    for (var i = 0; i < arrayPerjudicado.length; i++) {
                        if ($("#idperjudicadoRes").val() == arrayPerjudicado[i]['idTercero']) {
                            existe = 1;
                            var listaeditPerjudicado = {
                                cveTipoPersona: arrayPerjudicado[i]['cveTipoPersona'],
                                idTercero: arrayPerjudicado[i]['idTercero'],
                                nombre: arrayPerjudicado[i]['nombre'],
                                paterno: arrayPerjudicado[i]['paterno'],
                                materno: arrayPerjudicado[i]['materno'],
                                cveGenero: arrayPerjudicado[i]['cmbGenero']
                            };
                            pintarPerjudicadosResEdit(listaeditPerjudicado);
                        } else {
                            try {
                                $.each(arrayListaResPerjudicado, function (index, objeto) {
                                    if (objeto.idTercero == $("#idperjudicadoRes").val()) {
                                        var listaeditPerjudicado = {
                                            cveTipoPersona: objeto.cveTipoPersona,
                                            idTercero: objeto.idTercero,
                                            nombre: objeto.nombre,
                                            paterno: objeto.paterno,
                                            materno: objeto.materno,
                                            cveGenero: objeto.cveGenero
                                        };
                                        pintarPerjudicadosResEdit(listaeditPerjudicado);
                                    }
                                });
                            } catch (e) {
                            }
                        }
                    }
                }

            };
            borraPerjudicadoRes = function (identificador) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tercerosperjudicados/TercerosperjudicadosFacade.Class.php",
                    data: {
                        idTercero: identificador,
                        accion: "guardar",
                        activo: 'N'
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (data, textStatus, jqXHR) {
                        if (data.totalCount != 0) {
                            $("#idperjudicadoEdit" + identificador).remove();
                            alert('Perjudicado eliminado de forma correcta');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }
                });
            };
            tablaPerjudicadoRes = function () {
                var tipoPersona = $("#cmbTipopersonaPerjudicado").val();
                $(".required").remove();
                var nombre = '';
                if (tipoPersona == 2 || tipoPersona == 3) {
                    if ($("#txtNombreMoralO").val() == 0) {
                        $('#txtNombreMoralO').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Nombre del Perjudicado</label>");
                        return;
                    }
                } else {
                    if ($("#txtNombreFisicaO").val() == 0) {
                        $('#txtNombreFisicaO').parent().append("<br class='required nombrequejoso'><label class='Arial13Rojo required'>Escriba el nombre del Perjudicado</label>");
                        return;
                    }
                    if ($("#txtPaternoFisicaO").val() == 0) {
                        $('#txtPaternoFisicaO').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido paterno del Perjudicado</label>");
                        return;
                    }
                    if ($("#txtMaternoFisicaO").val() == 0) {
                        $('#txtMaternoFisicaO').parent().append("<br class='required'><label class='Arial13Rojo required'>Escriba el Apellido materno del Perjudicado</label>");
                        return;
                    }
                }
                var tipopersona = $("#cmbTipopersonaPerjudicado").val();
                if (tipopersona == 1) {
                    nombre = $("#txtNombreFisicaO").val();
                } else {
                    nombre = $("#txtNombreMoralO").val();
                }
                var listaeditPerjudicado = {
                    cveTipoPersona: $("#cmbTipopersonaPerjudicado").val(),
                    idTercero: $("#idperjudicadoRes").val(),
                    nombre: nombre,
                    paterno: $("#txtPaternoFisicaO").val(),
                    materno: $("#txtMaternoFisicaO").val(),
                    cveGenero: $("#cmbGeneros2").val()
                };
                var existe = 0;
                if (arrayPerjudicado == '') {
                    arrayPerjudicado.push(listaeditPerjudicado);
                    pintarPerjudicadosResEdit(listaeditPerjudicado);
                } else {
                    for (var i = 0; i < arrayPerjudicado.length; i++) {
                        if (listaeditPerjudicado['idTercero'] == arrayPerjudicado[i]['idTercero']) {
                            existe = 1;
                        }
                    }
                    if (existe == 0) {
                        arrayPerjudicado.push(listaeditPerjudicado);
                        pintarPerjudicadosResEdit(listaeditPerjudicado);
                    } else {
                        pintarPerjudicadosResEdit(listaeditPerjudicado);
                    }
                }

            };
            consultar = function (elementomostrar) {
                $("#tabla-imputadosBase").empty();
                $("#tabla-ofendidosBase").empty();
                $("#tabla-imputados").empty();
                $("#divConsulta").hide();
                arrayQuejoso = [];
                arrayPerjudicado = [];
                arrayListaResQuejoso = [];
                arrayListaResPerjudicado = [];
                if (elementomostrar === "divCamposConsulta") {
                    $("#divCamposConsulta").show();
                    $("#imprimir").hide();
                    $("#divCampos").hide();
                } else if (elementomostrar === "imprimir") {
                    $("#divCamposConsulta").hide();
                    $("#imprimir").show();
                    $("#divCampos").hide();
                } else if (elementomostrar === "divCampos") {
                    $("#divCamposConsulta").hide();
                    $("#imprimir").hide();
                    $("#divCampos").show();
                }
            if (origen == 1) {
                    var permisos = obtenerPermisosFormulario("OFICIALIA DE TRIBUNAL DE ALZADA", "AMPAROS");
                    if (permisos.Update == "N") {
                        $("#inputGuardar").hide();
                    }
                    if (permisos.Delete == "N") {
                        $("#inputEliminar").hide();
                    }
                    if (permisos.Read == "N") {
                        $("#inputConsultar").hide();
                    }
            } else {
                var permisos = obtenerPermisosFormulario("ATENCION PUBLICO", "AMPAROS");
                if (permisos.Update == "N") {
                    $("#inputGuardar").hide();
                }
                if (permisos.Delete == "N") {
                    $("#inputEliminar").hide();
                }
                if (permisos.Read == "N") {
                    $("#inputConsultar").hide();
                }
            }

            };
            function obtenerJuzgado(cvejuzgado) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveJuzgado=" + cvejuzgado;
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + page;
        var desJuzgado = "";
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;
            if (totalRecords > 0) {
                desJuzgado = referencia[0].desJuzgado;
            } else {
            }
        });
        return desJuzgado;
    }
    
            buscarAmparo = function (pag) {
                if (pag == 1) {
                    $("#cmbPaginacion").val(1);
                }
                var cveTipoCarpeta = $("#cmbTipoCarpeta2").val();
                var numero = $("#txtNumero2").val();
                var anio = $("#txtAnio2").val();
                var numAmparo = $("#txtNumAmparo2").val();
                var aniAmparo = $("#txtAniAmparo2").val();
                var fechaInicial = "";
                var fechaFinal = "";
                var validaPorFecha = true;
                if (numero == "" & anio == "" & numAmparo == "" & aniAmparo == "") {
                    
                    fechaInicial = $("#txtfechaInicial").val();
                    fechaFinal = $("#txtfechaFinal").val();
                }else{
                    validaPorFecha = false;
                }

                var cveAdscripcion = "";
                if ($("#cveTipoJuzgado2").val() != 0) {
                    cveAdscripcion = $("#cveTipoJuzgado2").val().split("/");
                    cveAdscripcion = cveAdscripcion[0];
                }

                var idCarpetaJudicial = "";
                var pag = $("#cmbPaginacion").val();
                if (pag == 1) {
                    var cantReg = $("#cmbNumReg").val();
                } else {
                    var cantidadCeros = $("#cmbNumReg").val();
                    var totalpag = (pag - 1) * cantidadCeros;
                    cantReg = totalpag + "," + $("#cmbNumReg").val();
                }

                var table = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/amparos/AmparosFacade.Class.php",
                    data: {
                        txtFecInicialBusqueda: fechaInicial,
                        txtFecFinalBusqueda: fechaFinal,
                        numero: numero,
                        anio: anio,
                        numAmparo: numAmparo,
                        aniAmparo: aniAmparo,
                        cveTipoCarpeta: cveTipoCarpeta,
                        accion: "consultar",
                        pag: pag,
                        cantxPag: cantReg,
                        paginacion: "paginacion",
                        cveJuzgado: cveAdscripcion,
                        idCarpetaJudicial: idCarpetaJudicial
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (xhr) {
                        if(!validaPorFecha){
                        if (numero == "" || anio == "" || cveTipoCarpeta == "0") {
                            alert("Para buscar por causa es necesario seleccionar Numero, Año y Relacion");
                            return false;
                        }
                    }
                    },
                    success: function (data, textStatus, jqXHR) {    
                        if (data.estatus == "ok") {
                            $("#divConsulta").show();
                            if (pag == 1) {
                                var key, count = 0;
                                for (key in data.datos) {
                                    if (data.datos.hasOwnProperty(key)) {
                                        count++;
                                    }
                                }
                                var paginacion = data.totalRegistros / $("#cmbNumReg").val();
                                if (Object.keys(data).length > 0) {
                                    $('#combosPaginacion').show();
                                    $('#cmbPaginacion').find('option').remove().end();
                                    for (var i = 0; i < paginacion; i++) {
                                        $("#cmbPaginacion").append($('<option></option>').val(i + 1).html(i + 1));
                                    }
                                    $("#cmbPaginacion").val(pag);
                                    $("#totalReg").html("<b> Total: " + data.totalRegistros + "</b>");
                                }

                            }
                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "    <thead>";
                            table += "        <tr>";
                            table += "            <th>N&uacute;m.</th>";
                            table += "            <th>No.Amparo</th>";
                            table += "            <th>Acto Reclamado</th>";
                            if(origen == 1){
                                table += "            <th>Toca</th>";
                            }else{
                                table += "            <th>Causa</th>";
                            }
                            table += "            <th>exhorto</th>";
                            table += "            <th>fecha</th>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            $.each(data.datos, function (index, element) {
                                var terceros = "";
                                var quejosos = "";
                                if (element.exhorto == null) {
                                    element.exhorto = "sin registro";
                                }
                                $.each(element.listaTerceros, function (index2, element2) {
                                    var nombre = "";
                                    var paterno = "";
                                    var materno = "";
                                    if (element2.nombre != null) {
                                        nombre = element2.nombre;
                                    }
                                    if (element2.nombrePersonaMoral != null) {
                                        nombre = element2.nombrePersonaMoral;
                                    }
                                    if (element2.paterno != null) {
                                        paterno = element2.paterno;
                                    }
                                    if (element2.materno != null) {
                                        materno = element2.materno;
                                    }


                                    terceros += nombre + " " + paterno + " " + materno + "<br>";
                                });
                                $.each(element.listaQuejosos, function (index2, element2) {
                                    var nombre = "";
                                    var paterno = "";
                                    var materno = "";
                                    if (element2.nombre != null) {
                                        nombre = element2.nombre;
                                    }
                                    if (element2.nombrePersonaMoral != null) {
                                        nombre = element2.nombrePersonaMoral;
                                    }
                                    if (element2.paterno != null) {
                                        paterno = element2.paterno;
                                    }
                                    if (element2.materno != null) {
                                        materno = element2.materno;
                                    }
                                    quejosos += nombre + " " + paterno + " " + materno + "<br>";
                                });
                                var resDate = element.fechaRegistro.split(" ");
                                var datepartes = resDate[0].split("-");
                                var fecharegistro = datepartes[2] + "/" + datepartes[1] + "/" + datepartes[0];
                                table += "<tr>";
                                table += "        <td onclick=\"buscarAmparoById('" + element.idAmparo + "')\" > " + (index + 1) + "</td>";
                                table += "        <td onclick=\"buscarAmparoById('" + element.idAmparo + "')\" >" + element.numeroAmparo + "/" + element.anioAmparo + "</td>";
                                table += "        <td onclick=\"buscarAmparoById('" + element.idAmparo + "')\" >" + element.actoReclamado + "</td>";
                                table += "        <td onclick=\"buscarAmparoById('" + element.idAmparo + "')\" >" + element.causa + "</td>";
                                table += "        <td onclick=\"buscarAmparoById('" + element.idAmparo + "')\" >" + element.exhorto + "</td>";
                                table += "        <td onclick=\"buscarAmparoById('" + element.idAmparo + "')\" >" + fecharegistro + "</td>";
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
                            $("#divConsulta").hide();
                            $("#divAlertWarning").html("No hay registros con esos criterios de busqueda");
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                        }

                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                    }


                });
            };
            buscarAmparoById = function (idActuacion) {
                $("#divConsulta").hide();
                $("#tabla-imputados").empty();
                $("#tabla-quejososRes").empty();
                $("#tabla-ofendidos").empty();
                $("#tabla-perjudicadosRes").empty();
                $("#relacionContipocarpeta").show();
                $("#divTablaOfendidos").hide();
                $("#divTablaImputados").show();
                $("#ltsQuejoso").show();
                $("#listaQuejososreferencia").val("0");
                $("#listaPerjudicadoreferencia").val("0");
                $("#arrayResultadoQuejoso").val("0");
                $("#arrayResultadoPerjudicado").val("0");
                limpiarquejoso();
                if ($("#arbolito").val() == "") {
                    limpiar();
                }


                $("#inputImprimir").show();
                $("#inputEliminar").show();
                $("#inputDigitalizar").show();
                $("#inputVisor").show();
                $("#lstActores").empty();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/amparos/AmparosFacade.Class.php",
                    data: {
                        idAmparo: idActuacion,
                        accion: "seleccionar"
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (data, textStatus, jqXHR) {
                        consultar("divCampos");
                        $("#listaOfendidosObt").hide();
                        $("#listaImputadosObt").hide();
                        if (data.estatus == "ok") {

                            var actuacion = data.datos;
                            cargaDistrito(actuacion[0].cveJuzgado);
                            var noOficio = actuacion[0].noOficio;
                            var partesOficio = "";
                            if (noOficio != null) {
                                partesOficio = noOficio.split('/');
                            }
                            if (actuacion[0].amparoFederal != "" & actuacion[0].amparoFederal != null) {
                                var amparofederal = actuacion[0].amparoFederal;
                                var partesAmparo = amparofederal.split('/');
                                $("#txtAmparoFederal").val(partesAmparo[0]);
                                $("#txtAmparoFederal2").val(partesAmparo[1]);
                            }
                            setTimeout(function () {
                                if (actuacion[0].cveTipoCarpeta != "0" & actuacion[0].cveTipoCarpeta != "") {
                                    $("#cmbTipoCarpeta").val(actuacion[0].cveTipoCarpeta);
                                    $("#relacionContipocarpeta").show();
                                    var txtCmbTipoCarpeta = $("#cmbTipoCarpeta option:selected").text();
                                    $("#lblRelationName").empty();
                                    $("#lblRelationName").append("No." + txtCmbTipoCarpeta);
                                } else {
                                    $("#cmbTipoCarpeta").val("00");
                                }

                            }, 500);
                            if (actuacion[0].idCarpetaJudicial == null) {
                                $("#cmbTipoCarpeta").val("0");
                            }
                            $("#txtNumero").val(actuacion[0].numCarpeta);
                            $("#txtAnio").val(actuacion[0].aniCarpeta);
                            $("#txtNumAmparo").val(actuacion[0].numeroAmparo);
                            $("#txtAniAmparo").val(actuacion[0].anioAmparo);
                            $("#cmbTipoAmparos").val(actuacion[0].TipoAmparo);
                            $("#txtCarpetaInv").val(actuacion[0].carpetaInv);
                    $("#cmbEstatusAmparo").val(actuacion[0].cveEstatusAmparo);
                            $("#txtCarpetaInv").attr("disabled", true);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                            $("#txtOficio").val(partesOficio[0]);
                            $("#txtOficio2").val(partesOficio[1]);
                            $("#txtAutoridadFederal").val(actuacion[0].autoridadFederal);

                            if (actuacion[0].cveJuzgado != "") {
                                chequeoJuzgado();
                            }
                            if (actuacion[0].numAmparoSala != "") {
                                var numAniSala = actuacion[0].numAmparoSala.split("/");
                                $("#txtNumAmpSala").val(numAniSala[0]);
                                $("#txtAniAmpSala").val(numAniSala[1]);
                            }
                            if (actuacion[0].toca != "" & actuacion[0].toca != null) {
                                var toca = actuacion[0].toca;
                                var partestoca = toca.split('/');
                                $("#txtToca").val(partestoca[0]);
                                $("#txtToca2").val(partestoca[1]);
                            }
                            if (actuacion[0].exhorto != "" & actuacion[0].exhorto != null) {
                                var exhorto = actuacion[0].exhorto;
                                var partesexhortos = exhorto.split('/');
                                $("#txtExhorto").val(partesexhortos[0]);
                                $("#txtExhorto2").val(partesexhortos[1]);
                            }
                            $("#txtDesSala").val(actuacion[0].cveSala);
                            $("#txtActoReclamado").val(actuacion[0].actoReclamado);
                            if (actuacion[0].listaQuejosos.length > 0) {
                                pintarQuejososRes(actuacion[0].listaQuejosos);
                                $("#arrayResultadoQuejoso").val(idActuacion);
                            }

                            if (actuacion[0].listaTerceros.length > 0) {
                                pintarPerjudicadosRes(actuacion[0].listaTerceros);
                                $("#arrayResultadoPerjudicado").val(idActuacion);
                            }

                            $("#hiddenIdAmparo").val(actuacion[0].idAmparo);
                            $("#hiddenIdCarpetaJudicial").val(actuacion[0].idCarpetaJudicial);
                            var content = actuacion[0].observaciones;
                            editor.setContent("", false);
                            llenareditor(content);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }
                });
            };
            llenareditor = function (value) {
                try {

                    editor.ready(function () {

                        setTimeout(function () {
                            editor.setContent(value, true);
                        }, 500);
                        ;
                    });
                } catch (e) {
                    alert(e);
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
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            var checked = "";
                            for (var i = 0; i < json.totalCount; i++) {
                                if (i == 0) {
                                    checked = "checked";
                                } else {
                                    checked = "";
                                }

                                var radio = "<input type = 'radio' name = 'rd1' value ='" + json.data[i].cveTipoPersona + "' onClick='ocultarCampos(this.value,this);' " + checked + "/>";
                                var label = "<label class='Arial11Verde' id ='Label" + json.data[i].desTipoPersona + json.data[i].cveTipoPersona + "' name ='Label" + json.data[i].desTipoPersona + json.data[i].cveTipoPersona + "'>" + json.data[i].desTipoPersona + "</label>";
                                var radio2 = "<input type = 'radio' name = 'rd2' value ='" + json.data[i].cveTipoPersona + "' onClick='ocultarCampos(this.value,this);' " + checked + "/>";
                                var label2 = "<label class='Arial11Verde' id ='Label" + json.data[i].desTipoPersona + json.data[i].cveTipoPersona + "' name ='Label" + json.data[i].desTipoPersona + json.data[i].cveTipoPersona + "'>" + json.data[i].desTipoPersona + "</label>";
                                $("#divTiposPersonas").append(radio + " " + label);
                                $("#divTiposPersonas2").append(radio2 + " " + label2);
                            }
                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
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
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (index, element) {
                                var option = "<option value = " + element.cveGenero + ">" + element.desGenero + "</option>";
                                $("#cmbGeneros1").append(option);
                                $("#cmbGeneros2").append(option);
                            });
                        } else {
                            $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
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
            };
            ocultarCampos = function (cveTipoPersona, elemento) {
                if (elemento.name === "rd2") {
                    var myClass = $("#txtNombreTer").parent().attr("class");
                    if (cveTipoPersona == 1) {
                        $(".divTercero").show("slow");
                        $("#cmbGeneros2").val("1");
                        if (myClass === "col-md-6") {
                            $("#txtNombreTer").parent().toggleClass('col-md-6');
                            $("#txtNombreTer").parent().toggleClass('col-md-2');
                        }
                    } else if (cveTipoPersona == 2 || cveTipoPersona == 3) {
                        $(".divTercero").hide();
                        $("#cmbGeneros2").val("3");
                        if (myClass === "col-md-2") {
                            $("#txtNombreTer").parent().toggleClass('col-md-2');
                            $("#txtNombreTer").parent().toggleClass('col-md-6');
                        }
                    }
                } else if (elemento.name === "rd1") {
                    var myClass = $("#txtNombreQue").parent().attr("class");
                    if (cveTipoPersona == 1) {
                        $(".divQuejoso").show("slow");
                        $("#cmbGeneros1").val("1");
                        if (myClass === "col-md-6") {
                            $("#txtNombreQue").parent().toggleClass('col-md-6');
                            $("#txtNombreQue").parent().toggleClass('col-md-2');
                        }
                    } else if (cveTipoPersona == 2 || cveTipoPersona == 3) {
                        $(".divQuejoso").hide();
                        $("#cmbGeneros1").val("3");
                        if (myClass === "col-md-2") {
                            $("#txtNombreQue").parent().toggleClass('col-md-2');
                            $("#txtNombreQue").parent().toggleClass('col-md-6');
                        }
                    }
                }
            };
            chequeoJuzgado = function () {
                if ($("#cmbTipoCarpeta").val() != 0) {
                    $("#relacionContipocarpeta").show();
                } else {
                    $("#relacionContipocarpeta").hide();
                }
            }
            changeLabel = function (objOption, clave) {

                $("#lblRelationName" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
                $("#hiddenCveTipoCarpeta" + clave).val($("#cmbTipoCarpeta").val());
                if ($("#cmbTipoCarpeta").val() != 0) {
                    $("#relacionContipocarpeta").show();
                } else {
                    $("#relacionContipocarpeta").hide();
                }
                if ($("#cmbTipoCarpeta" + clave).val() == 9) {
                    $("#txtNumero" + clave).val("");
                    $("#txtAnio" + clave).val("");
                    $("#divSinRelacion").hide();
                } else {
                    $("#txtNumero" + clave).val("");
                    $("#txtAnio" + clave).val("");
                    $("#divSinRelacion").show();
                }


            };
            mostrarImputados = function (idCarpeta) {
                $("#divSinRelacionMsg").empty();
                $("#contadorAddQ").val("");
                $("#idPersonaAddQ").val("");
                $("#tipoPersonaAdd").val("");
                $.ajax({
                    url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                    dataType: 'json',
                    async: false,
                    type: "POST",
                    data: {
                        accion: "consultar",
                        idCarpetaJudicial: idCarpeta
                    },
                    beforeSend: function (xhr) {

                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            $("#tabla-imputadosBase").empty();
                            var textoTipopersona = "";
                            var idOfendidoCarpeta = "";
                            $.each(datos.data, function (index, element) {
                                var html = "";
                                if (element.cveTipoPersona == 2 || element.cveTipoPersona == 3) {
                                    element.nombre = element.nombreMoral;
                                    textoTipopersona = "Moral";
                                } else {
                                    element.nombre = element.nombre;
                                    textoTipopersona = "Fisica";
                                }
                                html += "<tr id='" + element.idImputadoCarpeta + "'>";
                                html += "<th scope='row'><input id='imp" + element.idImputadoCarpeta + "' onclick=\"agregarAQuejoso('" + idOfendidoCarpeta + "','" + element.idImputadoCarpeta + "','" + element.cveTipoPersona + "','" + element.nombreMoral + "','" + element.nombre + "','" + element.paterno + "','" + element.materno + "','" + element.cveGenero + "')\" type='checkbox' name='checkpersona' value='" + element.idImputadoCarpeta + "' id=''></th>";
                                html += "<th scope='row'>" + textoTipopersona + "</th>";
                                html += "<td>" + element.nombre + " " + element.paterno + " " + element.materno + "</td>";
                                html += "</tr>";
                                $("#tabla-imputadosBase").append(html);
                            });
                        } else {

                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }

                });
            };
            mostrarOfendidos = function (idCarpeta) {
                $("#divSinRelacionMsg").empty();
                $("#contadorAddQ").val("");
                $("#idPersonaAddQ").val("");
                $("#tipoPersonaAdd").val("");
                $.ajax({
                    url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                    dataType: 'json',
                    async: false,
                    type: "POST",
                    data: {
                        accion: "consultar",
                        idCarpetaJudicial: idCarpeta
                    },
                    beforeSend: function (xhr) {

                    },
                    success: function (datos) {

                        if (datos.totalCount > 0) {
                            $("#tabla-ofendidosBase").empty();
                            var textoTipopersona = "";
                            $.each(datos.data, function (index, element) {
                                var html = "";
                                var idImputadoCarpeta = "";
                                if (element.cveTipoPersona == 2 || element.cveTipoPersona == 3) {
                                    element.nombre = element.nombreMoral;
                                    textoTipopersona = "Moral";
                                } else {
                                    element.nombre = element.nombre;
                                    textoTipopersona = "Fisica";
                                }
                                html += "<tr id='" + element.idOfendidoCarpeta + "'>";
                                html += "<th scope='row'><input id='ofe" + element.idOfendidoCarpeta + "' onclick=\"agregarAQuejoso('" + element.idOfendidoCarpeta + "','" + idImputadoCarpeta + "','" + element.cveTipoPersona + "','" + element.nombreMoral + "','" + element.nombre + "','" + element.paterno + "','" + element.materno + "','" + element.cveGenero + "')\" type='checkbox' name='checkpersona' value='" + element.idOfendidoCarpeta + "' id=''></th>";
                                html += "<th scope='row'>" + textoTipopersona + "</th>";
                                html += "<td>" + element.nombre + " " + element.paterno + " " + element.materno + "</td>";
                                html += "</tr>";
                                $("#tabla-ofendidosBase").append(html);

                            });
                        } else {

                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }

                });
            };
            agregarAQuejoso = function (idOfendidoCarpeta, idImputadoCarpeta, cveTipoPersona, nombreMoral, nombre, paterno, materno, cveGenero) {
                var nombretxt = "";
                var tipoAgregado = "";
                var mensaje = "";
                if (cveTipoPersona == 1) {
                    nombretxt = nombre;
                } else {
                    nombretxt = nombreMoral;
                }
                if (idOfendidoCarpeta == "") {
                    tipoAgregado = "Imputado";
                    $("#idPersonaAddQ").val(idImputadoCarpeta);
                    $("#tipoPersonaAdd").val("1");
                }
                if (idImputadoCarpeta == "") {
                    tipoAgregado = "Ofendido";
                    $("#idPersonaAddQ").val(idOfendidoCarpeta);
                    $("#tipoPersonaAdd").val("2");
                }
                if ($("#contadorAddQ").val() == "") {
                    mensaje = "\u00bf Estas seguro de seleccionar " + tipoAgregado + "s para agregar a Quejosos?\n\
                                Solo podras seguir agregando " + tipoAgregado + "s posterior a esta seleccion.<br><br>\n\
                                El " + tipoAgregado + " que se agregara es: " + nombretxt + " " + paterno + " " + materno;
                    $("#contadorAddQ").val("1");
                    bootbox.dialog({
                        message: mensaje,
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $("#txtQV").hide();
                                    if (idOfendidoCarpeta == "") {
                                        $("#txtOV").show();
                                        $('table#imputadosBase tr#' + idImputadoCarpeta).remove();
                                        document.getElementById("ofendidosBase").style.display = "none";
                                    }
                                    if (idImputadoCarpeta == "") {
                                        $("#txtIV").show();
                                        $('table#ofendidosBase tr#' + idOfendidoCarpeta).remove();
                                        document.getElementById("imputadosBase").style.display = "none";
                                    }

                                    $("#cmbTipopersonaQuejoso").val(cveTipoPersona);
                                    seleccionaTipoQue();
                                    $("#txtNombreMoralI").val(nombreMoral);
                                    $("#txtNombreFisicaI").val(nombre);
                                    $("#txtPaternoFisicaI").val(paterno);
                                    $("#txtMaternoFisicaI").val(materno);
                                    $("#cmbGeneros1").val(cveGenero);
                            tablaQuejoso(true);
                                }
                            },
                            success: {
                                label: "Cancelar",
                                className: "btn-primary",
                                callback: function () {
                                    $("#contadorAddQ").val("");
                                    if (idOfendidoCarpeta == "") {
                                        $("#imp" + idImputadoCarpeta).prop("checked", false);
                                    }
                                    if (idImputadoCarpeta == "") {
                                        $("#ofe" + idOfendidoCarpeta).prop("checked", false);
                                    }
                                }
                            }
                        }
                    });
                } else {
                    $("#txtQV").hide();
                    if (idOfendidoCarpeta == "") {
                        $("#txtOV").show();
                        $('table#imputadosBase tr#' + idImputadoCarpeta).remove();
                        document.getElementById("ofendidosBase").style.display = "none";
                    }
                    if (idImputadoCarpeta == "") {
                        $("#txtIV").show();
                        $('table#ofendidosBase tr#' + idOfendidoCarpeta).remove();
                        document.getElementById("imputadosBase").style.display = "none";
                    }

                    $("#cmbTipopersonaQuejoso").val(cveTipoPersona);
                    seleccionaTipoQue();
                    $("#txtNombreMoralI").val(nombreMoral);
                    $("#txtNombreFisicaI").val(nombre);
                    $("#txtPaternoFisicaI").val(paterno);
                    $("#txtMaternoFisicaI").val(materno);
                    $("#cmbGeneros1").val(cveGenero);
            $("#fijo").val(1);
            tablaQuejoso(true);
                }

            };
            validarFormulario = function () {
                var activaValidacion = $("#hiddenActivaValidacion").val();
                $(".required").remove();
                var guardar = 0;
                if (activaValidacion == 1) {

                    var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                    var numero = $("#txtNumero").val();
                    var anio = $("#txtAnio").val();
                    var numAmparo = $("#txtNumAmparo").val();
                    var aniAmparo = $("#txtAniAmparo").val();
                    var idReferencia = $("#hiddenIdCarpetaJudicial").val();
                    var idAmparo = $("#hiddenIdAmparo").val();
                    var cveTipoAmparo = $("#cmbTipoAmparos").val();
                    var carpetaInv = $("#txtCarpetaInv").val();
                    var numeroOficio = $("#txtOficio").val();
                    var numeroOficio2 = $("#txtOficio2").val();
                    var numeroProcedencia = $("#txtAmparoFederal").val();
                    var autoridadProcedencia = $("#txtAutoridadFederal").val();
                    var numsala = $("#txtNumAmpSala").val() + "/" + $("#txtAniAmpSala").val();
                    var desSala = $("#txtDesSala").val();
                    var actoReclamado = $("#txtActoReclamado").val();
                    var toca = $("#txtToca").val();
                    var exhorto = $("#txtExhorto").val();
                    var observaciones = editor.getContent();
                    var listaQuejosos = new Array();
                    var listaTerceros = new Array();
                    var JsonTerceros = "";
                    var JsonQuejosos = "";
            var cveEstatusAmparo = $("#cmbEstatusAmparo").val();
                    var guardar = 1;
                    if (cveTipoCarpeta != 0 & numero === "" & anio === "") {
                        guardar = 0;
                        $('#txtNumero').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero y a&ntilde;o  de la carpeta relacionado</label>");
                    }
                    if ($("#txtExhorto2").val() != "") {
                        if ($('#txtExhorto').val() == "") {
                            $('#txtExhorto').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero de exhorto</label>");
                            guardar = 0;
                        }
                    }

                    if (cveTipoAmparo === "") {
                        guardar = 0;
                        $('#cmbTipoAmparos').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el a&ntilde;o de la carpeta relacionado</label>");
                    }                    
                    if (numeroOficio === "") {
                        guardar = 0;
                        if(origen!=1){
                            $('#txtOficio').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero de oficio</label>");
                        }
                    }
                    if (numeroOficio2 === "") {
                        guardar = 0;
                        if(origen!=1){
                            $('#txtOficio2').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el A&ntilde;o de oficio</label>");
                        }
                    }
                    if ($("#txtAniAmpSala").val() != "") {
                        if ($("#txtNumAmpSala").val() === "" || $("#txtAniAmpSala").val() === "") {
                            guardar = 0;
                            $('#txtNumAmpSala').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero  o a&ntilde;o de amparo de la sala</label>");
                        }
                    }
                    if ($("#txtAmparoFederal2").val() != "") {
                        if ($("#txtAmparoFederal").val() === "" || $("#txtAmparoFederal").val() === "") {
                            guardar = 0;
                            $('#txtAmparoFederal').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero  o a&ntilde;o de amparo de la sala</label>");
                        }
                    }
                    if (actoReclamado === "") {
                        guardar = 0;
                        $('#txtActoReclamado').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el acto reclamado</label>");
                    }
                    if ($("#txtToca2").val() != "") {
                        if ((toca === "") && (exhorto === "")) {
                            guardar = 0;
                            $('#txtToca').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero de toca o de exhorto </label>");

                        }
                    }

                    if (observaciones === "") {
                        guardar = 0;
                        $('#txtNotas').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el Contenido del Documento de Amparos</label>");
                    }
            if (cveEstatusAmparo === "0") {
            guardar = 0;
            $('#divEstatusAmparo').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe seleccionar el estatus del amparo</label>");
            }
                    if (arrayQuejoso.length > 0) {
                        JsonQuejosos = JSON.stringify(arrayQuejoso);
                        JsonQuejosos = decodeURIComponent(JsonQuejosos);
                        $("#ltsQuejosos").css("background-color", "");
                        $("#acordeonImputados").css("background-color", "");
                    } else {
                        if ($('#tableImputados >tbody >tr').length == 0) {
                            guardar = 0;
                            $("#acordeonImputados").css("background-color", "red");
                            $('a#acordeonImputados').parent().append("<br class='required'><label class=' required'>Debe registrar Quejosos</label>");
                        }
                    }
                }
                return guardar;
            };
            guardarAmparo = function () {
                var txtoficio = $("#txtOficio").val();
                var txtoficio2 = $("#txtOficio2").val();
                var numeroOficioAll = txtoficio + '/' + txtoficio2;
                var amparofederal = $("#txtAmparoFederal").val();
                var amparofederal2 = $("#txtAmparoFederal2").val();
                var amparoFederalAll = amparofederal + '/' + amparofederal2;
                var txttoca = $("#txtToca").val();
                var txttoca2 = $("#txtToca2").val();
                var txttocaAll = txttoca + '/' + txttoca2;
                var txtexhorto = $("#txtExhorto").val();
                var txtexhorto2 = $("#txtExhorto2").val();
                var txtexhortoAll = txtexhorto + '/' + txtexhorto2;
                $(".required").remove();
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                var numero = $("#txtNumero").val();
                var anio = $("#txtAnio").val();
                var numAmparo = $("#txtNumAmparo").val();
                var aniAmparo = $("#txtAniAmparo").val();
                var idReferencia = $("#hiddenIdCarpetaJudicial").val();
                var idAmparo = $("#hiddenIdAmparo").val();
                var cveTipoAmparo = $("#cmbTipoAmparos").val();
                var carpetaInv = $("#txtCarpetaInv").val();
                var numeroOficio = numeroOficioAll;
                var numeroProcedencia = amparoFederalAll;
                var autoridadProcedencia = $("#txtAutoridadFederal").val();
                var numsala = $("#txtNumAmpSala").val() + "/" + $("#txtAniAmpSala").val();
                var cveSala = $("#txtDesSala").val();
                var actoReclamado = $("#txtActoReclamado").val();
                var toca = txttocaAll;
                var exhorto = txtexhortoAll;
                var cveTipoJuzgado = $("#cveTipoJuzgado").val();
            var cveEstatusAmparo = $("#cmbEstatusAmparo").val();
                var observaciones = editor.getContent();
                var listaQuejosos = arrayQuejoso;
                var listaTerceros = arrayPerjudicado;
                var JsonTerceros = "";
                var JsonQuejosos = "";
                var guardar = 1;
                var tipoPersonaAdd = $("#tipoPersonaAdd").val();
                $("#hiddenActivaValidacion").val("1");
                guardar = validarFormulario();
                var cveAdscripcion = $("#hiddenCveAdscripcion").val();
                if (listaTerceros.length > 0) {
                    JsonTerceros = JSON.stringify(listaTerceros);
                    JsonTerceros = decodeURIComponent(JsonTerceros);
                    $("#ltsPerjudicados").css("background-color", "");
                }
                if (listaQuejosos.length > 0) {
                    JsonQuejosos = JSON.stringify(listaQuejosos);
                    JsonQuejosos = decodeURIComponent(JsonQuejosos);
                    $("#ltsQuejosos").css("background-color", "");
                }
                if (guardar == 1) {
                    var accion = "guardar";
                    if (idAmparo > 0) {
                        accion = "guardar";
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/amparos/AmparosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {
                            cveTipoCarpeta: "8",
                            numero: numero,
                            anio: anio,
                            listaQuejosos: JsonQuejosos,
                            listaTerceros: JsonTerceros,
                            observaciones: observaciones,
                            accion: accion,
                            idCarpetaJudicial: idReferencia,
                            idAmparo: idAmparo,
                            cveUsuario: cveUsuarioSesion,
                            cveTipoAmparo: cveTipoAmparo,
                            carpetaInv: carpetaInv,
                            numOficio: numeroOficio,
                            numeroProcedencia: numeroProcedencia,
                            autoridadProcedencia: autoridadProcedencia,
                            numSala: numsala,
                            cveSala: cveSala,
                            actoReclamado: actoReclamado,
                            cveJuzgado: cveTipoJuzgado,
                            toca: toca,
                            tipoPersonaAdd: tipoPersonaAdd,
                            cveEstatusAmparo: cveEstatusAmparo,
                            exhorto: exhorto


                        },
                        success: function (data) {
                            if (data.totalCount > 0) {
                                $("#divHideForm").hide();
                                $("#divAlertSucces").html("Correcto!: " + data.text);
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                                $("#hiddenIdAmparo").val(data.data[0].idAmparo);
                                var actuacion = data.data;
                                $("#txtNumAmparo").val(actuacion[0].numAmparo);
                                $("#txtAniAmparo").val(actuacion[0].aniAmparo);
                                buscarAmparoById(data.data[0].idAmparo);
                            } else {
                                $("#divAlertDager").html("Error en la peticion:\n\n" + data.text);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }

                        }

                    });
                } else {
                    $("#divAlertDager").html("Error en la peticion:\n\n Ingrese los Campos requeridos");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            };
            quejoso = function (idQuejoso, cveTipoPersona, cveGenero, paterno, materno, nombre
                    ) {
                this.paterno = paterno;
                this.materno = materno;
                this.nombre = nombre;
                this.cveTipoPersona = cveTipoPersona;
                this.idQuejoso = idQuejoso;
                this.cveGenero = cveGenero;
            };
            tercero = function (idTercero, cveTipoPersona, cveGenero, paterno, materno, nombre
                    ) {
                this.paterno = paterno;
                this.materno = materno;
                this.nombre = nombre;
                this.cveTipoPersona = cveTipoPersona;
                this.idTercero = idTercero;
                this.cveGenero = cveGenero;
            };
            limpiarConsulta = function () {
                $("#divTableResult").empty();
                $("#combosPaginacion").hide();
            $("#cmbTipoCarpeta2").val(0);
                $("#txtNumero2").val("");
                $("#txtAnio2").val("");
                $("#txtNumAmparo2").val("");
                $("#txtAniAmparo2").val("");
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
            }
            limpiarArbol = function () {
                arrayQuejoso = [];
                arrayPerjudicado = [];
                arrayListaResQuejoso = [];
                arrayListaResPerjudicado = [];
                $("#divSinRelacionMsg").empty();
                $("#inputGuardar").attr("disabled", false);
                $("#cveTipoJuzgado").attr("disabled", true);
                $("#cmbTipoCarpeta").attr("disabled", true);
                $(".required").remove();
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hiddenIdCarpetaJudicial").val("");
                $("#hiddenIdAmparo").val("");
                $("#cmbTipoAmparos").val("1");
                $("#txtCarpetaInv").val("");
                $("#txtCarpetaInv").attr("disabled", false);
                $("#txtOficio").val("");
                $("#txtOficio2").val("");
                $("#txtAmparoFederal").val("");
                $("#txtAmparoFederal2").val("");
                $("#txtAutoridadFederal").val("");
                $("#txtNumAmpSala").val("");
                $("#txtAniAmpSala").val("");
            $("#txtDesSala").val(0);
                $("#txtActoReclamado").val("");
                $("#txtToca").val("");
                $("#txtToca2").val("");
                $("#txtExhorto").val("");
                $("#txtExhorto2").val("");
                editor.setContent("", false);
                $("#txtNombreMoralI").val("");
                $("#txtNombreFisicaI").val("");
                $("#txtPaternoFisicaI").val("");
                $("#txtMaternoFisicaI").val("");
                $("#cmbTipopersonaQuejoso").val("0");
                $("#cmbGeneros1").val("0");
                $("#idquejosoRes").val("");
                seleccionaTipoQue();
                $("#tabla-imputados").empty();
                $("#tabla-quejososRes").empty();
                $("#tabla-ofendidos").empty();
                $("#tabla-perjudicadosRes").empty();
                $("#divTablaOfendidos").hide();
                $("#divTablaImputados").hide();
                $("#listaQuejososreferencia").val("0");
                $("#listaPerjudicadoreferencia").val("0");
                $("#arrayResultadoQuejoso").val("0");
                $("#arrayResultadoPerjudicado").val("0");
                limpiarquejoso();
                $("#txtNombreMoralO").val("");
                $("#txtNombreFisicaO").val("");
                $("#txtPaternoFisicaO").val("");
                $("#txtMaternoFisicaO").val("");
                $("#cmbTipopersonaPerjudicado").val("0");
                $("#cmbGeneros2").val("0");
                $("#idperjudicadoRes").val("");
                seleccionaTipoPe();
                $("#inputImprimir").hide();
                $("#inputEliminar").hide();
                $("#inputDigitalizar").hide();
                $("#inputVisor").hide();
            };
            limpiar = function () {
                $("#ltsQuejoso").hide();
                arrayQuejoso = [];
                arrayPerjudicado = [];
                arrayListaResQuejoso = [];
                arrayListaResPerjudicado = [];
                $("#divSinRelacionMsg").empty();
                $("#inputGuardar").attr("disabled", false);
                $(".required").remove();
                $("#cmbTipoCarpeta").val(0);
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#txtNumero").attr("disabled", false);
                $("#txtAnio").attr("disabled", false);
                $("#txtNumAmparo").val("");
                $("#txtAniAmparo").val("");
                $("#hiddenIdCarpetaJudicial").val("");
                $("#hiddenIdAmparo").val("");
                $("#cmbTipoAmparos").val("1");
                $("#txtCarpetaInv").val("");
                $("#txtCarpetaInv").attr("disabled", false);
                $("#txtOficio").val("");
                $("#txtOficio2").val("");
                $("#txtAmparoFederal").val("");
                $("#txtAmparoFederal2").val("");
                $("#txtAutoridadFederal").val("");
                $("#txtNumAmpSala").val("");
                $("#txtAniAmpSala").val("");
                $("#txtDesSala").val("");
                $("#txtActoReclamado").val("");
                $("#txtToca").val("");
                $("#txtToca2").val("");
                $("#txtExhorto").val("");
                $("#txtExhorto2").val("");
                editor.setContent("", false);
                $("#txtNombreMoralI").val("");
                $("#txtNombreFisicaI").val("");
                $("#txtPaternoFisicaI").val("");
                $("#txtMaternoFisicaI").val("");
                $("#cmbTipopersonaQuejoso").val("0");
                $("#cmbGeneros1").val("0");
                $("#idquejosoRes").val("");
                seleccionaTipoQue();
                $("#tabla-imputados").empty();
                $("#tabla-quejososRes").empty();
                $("#tabla-ofendidos").empty();
                $("#tabla-perjudicadosRes").empty();
                $("#divTablaOfendidos").hide();
                $("#divTablaImputados").hide();
                $("#listaQuejososreferencia").val("0");
                $("#listaPerjudicadoreferencia").val("0");
                $("#arrayResultadoQuejoso").val("0");
                $("#arrayResultadoPerjudicado").val("0");
                limpiarquejoso();
                $("#txtNombreMoralO").val("");
                $("#txtNombreFisicaO").val("");
                $("#txtPaternoFisicaO").val("");
                $("#txtMaternoFisicaO").val("");
                $("#cmbTipopersonaPerjudicado").val("0");
                $("#cmbGeneros2").val("0");
                $("#idperjudicadoRes").val("");
                seleccionaTipoPe();
                $("#inputImprimir").hide();
                $("#inputEliminar").hide();
                $("#inputDigitalizar").hide();
                $("#inputVisor").hide();
                $("#tabla-imputados").empty();
                $("#tabla-imputadosBase").empty();
                $("#tabla-ofendidosBase").empty();
                $("#listaOfendidosObt").show();
                $("#listaImputadosObt").show();
            };
            capturaNombrePersona = function (e, Sig, clase, destino, radio) {

                tecla = (document.all) ? e.keyCode : e.which;
                var valorRadio = $("input:radio[name=" + radio + "]:checked").val();
                if (tecla == 8)
                    return true; // Tecla de retroceso (para poder borrar)
                if (tecla == 13) {
                    if (Sig.length > 0) {
                        if (Sig in $.fn) {
                            $.fn[Sig](clase, destino, valorRadio, radio);
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
            tiposAmparos = function () {
                $.ajax({
                    url: "../fachadas/sigejupe/tipoamparo/TipoamparoFacade.Class.php",
                    type: 'POST',
                    dataType: 'json',
                    data: {accion: "seleccionar"},
                    beforeSend: function (xhr) {

                    },
                    success: function (data, textStatus, jqXHR) {
                        var option = "";
                        $.each(data.data, function (index, element) {
                            option += "<option value='" + element.CveTipoAmparo + "'>" + element.DesTipoAmparo + "</option>";
                        });
                        var select = "<select id='cmbTipoAmparos'>" + option + "</select>";
                        $("#divTiposAmparos").append(select);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                    }

                });
            };
            validaAnio = function (data, input) {
                var d = new Date();
                var anio = d.getFullYear();
                if (data.length != 4 || parseInt(data) < 1980) {
                    alert("El a\u00F1o es MENOR al a\u00F1o Limite 1980");
                    if (input == "O") {
                        $("#txtOficio2").val("");
                    }
                    if (input == "AF") {
                        $("#txtAmparoFederal2").val("");
                    }
                    if (input == "AS") {
                        $("#txtAniAmpSala").val("");
                    }
                    if (input == "T") {
                        $("#txtToca2").val("");
                    }
                    if (input == "E") {
                        $("#txtExhorto2").val("");
                    }
                    if (input == "A1") {
                        $("#txtAnio").val("");
                    }
                }
                if (data > anio) {
                    alert("El a\u00F1o es MAYOR al a\u00F1o Actual");
                    if (input == "O") {
                        $("#txtOficio2").val("");
                    }
                    if (input == "AF") {
                        $("#txtAmparoFederal2").val("");
                    }
                    if (input == "AS") {
                        $("#txtAniAmpSala").val("");
                    }
                    if (input == "T") {
                        $("#txtToca2").val("");
                    }
                    if (input == "E") {
                        $("#txtExhorto2").val("");
                    }
                    if (input == "A1") {
                        $("#txtAnio").val("");
                    }
                }


            };
            cargaInstancia = function () {
               $.ajax({
                  type: "POST",
                  url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                  async: false,
                  dataType: "json",
                  data: {
                     accion: "getInstanciaJuzgado"
                  },
                  beforeSend: function (datos) {
                  },
                  success: function (datos) {
                     if (datos.totalCount > 0) {
                        instancia = datos.resultados[0].cveInstancia;
                     }
                  },
                  error: function (objeto, quepaso, otroobj) {

                  }
               });
            };
            $(function () {
               cargaInstancia();
                $("#txtOficio").validaCampo('0123456789');
                $("#txtOficio2").validaCampo('0123456789');
                $("#txtAmparoFederal").validaCampo('0123456789');
                $("#txtAmparoFederal2").validaCampo('0123456789');
                $("#txtNumAmpSala").validaCampo('0123456789');
                $("#txtAniAmpSala").validaCampo('0123456789');
                $("#txtToca").validaCampo('0123456789');
                $("#txtToca2").validaCampo('0123456789');
                $("#txtExhorto").validaCampo('0123456789');
                $("#txtExhorto2").validaCampo('0123456789');
                $("#txtFojas").validaCampo('0123456789');
                $("#txtNumero2").validaCampo('0123456789');
                $("#txtAnio2").validaCampo('0123456789');
                $("#txtNumero").validaCampo('0123456789');
                $("#txtAnio").validaCampo('0123456789');
                $("#txtNumAmparo2").validaCampo('0123456789');
                $("#txtAniAmparo2").validaCampo('0123456789');
                $("input[type=text]").focusout(function () {
                    validarFormulario();
                });
                $("#txtNotas").focusout(function () {
                    validarFormulario();
                });
                $("#txtAnio2").focusout(function () {
                    anioCorrecto("#txtAnio2");
                });
                $("#txtAniAmparo2").focusout(function () {
                    anioCorrecto("#txtAniAmparo2");
                });
                $(".Relacionado")
                        .focusout(function () {
                            $("#divSinRelacionMsg").empty();
                            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                            var numero = $("#txtNumero").val();
                            var anio = $("#txtAnio").val();
                            var consulta = true;
                            var cveAdscripcion = $("#cveTipoJuzgado").val();
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
                                    async: true,
                                    type: "POST",
                                    data: {
                                        accion: "consultarCarpetaExhortoAmparo",
                                        numero: numero,
                                        anio: anio,
                                        activo: "S",
                                        cveTipoCarpeta: cveTipoCarpeta,
                                        cveJuzgado: cveAdscripcion
                                    },
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (datos) {

                                        if (datos.totalCount > 0) {

                                            $("#ltsQuejoso").show();
                                            $("#ofendidosBase").show();
                                            $("#imputadosBase").show();
                                            $("#txtOV").hide();
                                            $("#txtIV").hide();
                                            $("#tabla-imputados").empty();
                                            $("#tabla-ofendidosBase").empty();
                                            $("#tabla-imputadosBase").empty();
                                            $("#listaQuejososreferencia").val("");
                                            $("#txtCarpetaInv").val("");
                                            $("#divSinRelacionMsg").empty();
                                            $("#divSinRelacionMsg").append("encontrado");
                                            $.each(datos.data, function (index, element) {

                                                if (cveTipoCarpeta == 8) {
                                                    $("#hiddenIdCarpetaJudicial").val(element.idAmparo);
                                                } else if (cveTipoCarpeta == 7) {
                                                    $("#hiddenIdCarpetaJudicial").val(element.idExhorto);
                                                } else {
                                                    $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                                }
                                                $("#inputGuardar").attr("disabled", false);
                                                validarFormulario();
                                                $("#txtCarpetaInv").val(element.carpetaInv);
                                                $("#txtCarpetaInv").attr("disabled", true);
                                            });
                                            mostrarImputados(datos.data[0].idCarpetaJudicial);
                                            mostrarOfendidos(datos.data[0].idCarpetaJudicial);
                            $("#listaOfendidosObt").show();
                            $("#listaImputadosObt").show();
                                        } else {
                                            $("#divSinRelacionMsg").append("Sin Antecedentes");
                                            $("#hiddenIdCarpetaJudicial").val("");
                                            $("#txtCarpetaInv").val("");
                                            $("#inputGuardar").attr("disabled", true);
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
                tiposAmparos();
                cargaTipoPersona();
                cargaTipoSala();
            cargaEstatusAmparo();
//            if (origen == 1) {
//                    var permisos = obtenerPermisosFormulario("OFICIALIA DE TRIBUNAL DE ALZADA", "AMPAROS");
//                    if (permisos.Update == "N") {
//                        $("#inputGuardar").hide();
//                    }
//                    if (permisos.Delete == "N") {
//                        $("#inputEliminar").hide();
//                    }
//                    if (permisos.Read == "N") {
//                        $("#inputConsultar").hide();
//                    }
//            } else {
//                var permisos = obtenerPermisosFormulario("ATENCION PUBLICO", "AMPAROS");
//                if (permisos.Update == "N") {
//                    $("#inputGuardar").hide();
//                }
//                if (permisos.Read == "N") {
//                    $("#inputConsultar").hide();
//                }
//            }
                $('#myTabs a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
                editor = UE.getEditor('txtNotas');
                editor.ready(function () {
                    editor.setContent("");
                });
            });
            imprimirRecibo = function () {


                var idAmparo = $("#hiddenIdAmparo").val();
                if (idAmparo > 0) {
                    var nombre = "";
                    var paterno = "";
                    var materno = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/amparos/AmparosFacade.Class.php",
                        data: {
                            idAmparo: idAmparo,
                            accion: "seleccionar"
                        },
                        async: false,
                        dataType: "json",
                        beforeSend: function (xhr) {

                        },
                        success: function (data, textStatus, jqXHR) {
                            if (data.estatus == "ok") {
                                var actuacion = data.datos;
                                var listaQuejosos = "";
                                var listaPerjudicados = "";
                                $.each(actuacion[0].listaQuejosos, function (index, element) {
                                    if (element.cveTipoPersona == 1) {
                                        nombre = element.nombre;
                                        paterno = element.paterno;
                                        materno = element.materno;
                                    } else {
                                        paterno = "";
                                        materno = "";
                                        nombre = element.nombrePersonaMoral;
                                    }
                                    listaQuejosos += nombre + " " + paterno + " " + materno + "<br>";
                                });
                                $.each(actuacion[0].listaTerceros, function (index, element) {
                                    if (element.cveTipoPersona == 1) {
                                        nombre = element.nombre;
                                        paterno = element.paterno;
                                        materno = element.materno;
                                    } else {
                                        paterno = "";
                                        materno = "";
                                        nombre = element.nombrePersonaMoral;
                                    }
                                    listaPerjudicados += nombre + " " + paterno + " " + materno + "<br>";
                                });
                                var hostname = location.pathname;
                                hostname = hostname.split("/");
                                hostname = hostname[0] + "/" + hostname[1] + "/" + hostname[2] + "/" + hostname[3];
                                var carpetainv = actuacion[0].carpetaInv;
                                if (carpetainv == null) {
                                    carpetainv = "";
                                }
                                var etiqueta = "";
                                var etiquetaJuz = "";
                                var tabla = "<table style='width:100%; font-size:14px; border-collapse:collapse; font-family: \"Courier New\", Courier, monospace;''>";
                                tabla += "<tr><td align='left' style='width:30%; font-weight:bold; border-bottom:solid black 2px;'><img src='../vistas/img/EscudoEstadoMexico.png' width='85' height='90'></td><td style='font-size:16px; font-weight:bold; border-bottom:solid black 2px;'>Gobierno del Estado de M&eacute;xico<br> Poder Judicial del Estado de M&eacute;xico<br>Consejo de la Judicatura<br>Comprobante de Amparo</td><td align='left' style='padding-left:5px; border-bottom:solid black 2px;'><img src='../vistas/img/EscudoPoderJudicial.png' width='85' height='90'></td></tr>";
                                tabla += "<tr><td colspan='4'>&nbsp;</td></tr>"
                                tabla += "<tr><td colspan='4'>&nbsp;</td></tr>"
                                if(origen==1){
                                    var etiquetaJuz = "Autoridad responsable";
                                }else{
                                    var etiquetaJuz = "Juzgado";
                                }
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>"+etiquetaJuz+":</td><td align='left' style='padding-left:5px;'>" + obtenerJuzgado(actuacion[0].cveJuzgado) + "</td></tr>";
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Num. de Amparo:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].numeroAmparo + "/" + actuacion[0].anioAmparo + "</td></tr>";
                                if(origen==1){
                                    var etiqueta = "Toca";
                                }else{
                                    var etiqueta = "Causa";
                                }
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Num. de "+etiqueta+":</td><td align='left' style='padding-left:5px;'>" + actuacion[0].causa  + "</td></tr>";
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Acto Reclamado:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].actoReclamado + "</td></tr>";
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Autoridad Federal:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].autoridadFederal + "</td></tr>";
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Notas:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].observaciones + "</td></tr>";
                                tabla += "<tr><td align='right' style='width:30%; font-weight:bold;'>Fecha de Entrega:</td><td align='left' style='padding-left:5px;'>" + actuacion[0].fechaRegistro + "</td></tr>";
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
                    $("#divAlertDager").html("Error en la peticion:\n\n Debe seleccionar una amparo");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            };
            eliminarPromocion = function () {
                var idAmparo = $("#hiddenIdAmparo").val();
                if (idAmparo > 0) {
                    bootbox.dialog({
                        message: "Advertencia!! <br><br> Esta seguro de eliminar  el Amparo??",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/amparos/AmparosFacade.Class.php",
                                        data: {
                                            idAmparo: idAmparo,
                                            accion: "baja"
                                        },
                                        async: false,
                                        dataType: "json",
                                        beforeSend: function (xhr) {

                                        },
                                        success: function (data, textStatus, jqXHR) {

                                            if (data.totalCount == 0) {
                                                $("#divHideForm").hide();
                                                $("#divAlertSucces").html("Correcto!: Se elimino el Amparo Correctamente");
                                                $("#divAlertSucces").show("slide");
                                                setTimeAlert("divAlertSucces");
                                            } else {
                                                $("#divAlertDager").html("Error en la peticion:\n\n");
                                                $("#divAlertDager").show("slide");
                                                setTimeAlert("divAlertDager");
                                            }

                                            limpiar();
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {

                                        }
                                    });
                                }// end callback
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
                    $("#divAlertDager").html("Error en la peticion:\n\n Debe seleccionar una promoci&oacute;n");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            };</script> 
        <input type="hidden" id="arbolito" value="">
        <?php
        if (isset($_POST['idReferencia'])) {
            $idActuacionArbol = @$_POST['idReferencia'];
            ?>    
            <script languaje="javascript">
                $("#arbolito").val(<?php echo $idActuacionArbol ?>);
                buscarAmparoById(<?php echo $idActuacionArbol ?>);
                $("#inputLimpiar").hide();
                $("#inputConsultar").hide();
                $("#inputLimpiarArbol").show();
                bloqueoCombos();</script> 

            <?PHP
        } else if (isset($_POST['idAmparo'])) {
            $idActuacionArbol = @$_POST['idAmparo'];
            ?>    
            <script languaje="javascript">
                $("#arbolito").val(<?php echo $idActuacionArbol ?>);
                buscarAmparoById(<?php echo $idActuacionArbol ?>);
                $("#inputLimpiar").hide();
                $("#inputConsultar").hide();
                $("#inputLimpiarArbol").show();
                bloqueoCombos();
            </script> 

        <?php
        }

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>
