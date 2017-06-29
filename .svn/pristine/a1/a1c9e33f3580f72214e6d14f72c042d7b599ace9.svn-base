<?php
session_start();
date_default_timezone_set('America/Mexico_City');
$fecha = date("d/m/Y");

/*
 * recibimos variables para integracion con el arbol judicial
 * verificamos si viene del arbol
 */

$tree = false;
$consulta = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cveTipoCarpeta'])) {
    $tree = true;
    if (isset($_POST['idActuacion']))
        $consulta = true;
}

$cveJuzgadoArbol = @$_POST['cveJuzgado'];
$cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
$idActuacionArbol = @$_POST['idActuacion'];
$idActuacionPadreArbol = @$_POST['idActuacionPadre'];
$idReferenciaArbol = @$_POST['idReferencia'];
?>
<style>
    .alert {
        display: none;
    }

    .mayuscula {
        text-transform: uppercase;
    }

    .requerido {
        color: darkred;
    }

    #divHideForm {
        display: none;
        position: absolute;
        width: 100%;
        height: 100vh;
        opacity: .5;
        z-index: 99999;
        background: #427468;
    }

    #divMenssage {
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

    #divImgloading {
        background: #FFFFFF url(img/cargando_1.gif) no-repeat;
        background-position: center;
        width: 100%;
        height: 70px;
        margin-left: auto;
        margin-right: auto;
    }

    .panel panel-default {
        background: #427468;
        color: #ebf3f1;
    }

    .panel-heading {
        background: #427468;
        color: #ebf3f1;
    }

    .panel-group .panel-heading {
        background: #427468;
        color: #ebf3f1;
    }

    .panel-default > .panel-heading {
        background: #427468;
        color: #ebf3f1;
    }
</style>
<link href="../vistas/css/generalStyles.css" rel="stylesheet"/>


<!--MODAL PARA EL VISOR DEL DOCUMENTO-->
<div class="modal fade" id="ModalVisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="VisorPDF">Visor de documentos</h4>
            </div>
            <div class="modal-body" id="visor" style="max-height: 500px; overflow: scroll;"></div>
        </div>
    </div>
</div>
<!---->

<!-- inicia modal para descripción -->
<div id="descripcion-modal" class="modal fade bs-example-modal-lg in" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myLargeModalLabel">Descripci&oacute;n del Registro.</h4></div>
            <div class="modal-body" id="body-descripcion-modal">
            </div>
        </div>
    </div>
</div>
<!-- termina modal para descripción -->

<!--modal visor pdf-->
<!-- Modal visor -->
<div class="modal fade" id="ModalVisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="VisorPDF">Visor de documentos</h4>
            </div>
            <div class="modal-body" id="visor" style="max-height: 500px; overflow: scroll;"></div>

        </div>
    </div>
</div>

<!--<div class="page-content" id="areadetrabajo">-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title">
            Auto de Apertura a Juicio Oral
        </h5>
    </div>

    <!--modal-panel para mostrar las sentencias registradas y poder seleccionar sólo una-->

    <div class="panel-body">

        <div id="general-ejecucion-sentencia" class="col-md-12" data-step="1"
             data-intro="Este m&oacute;dulo le permite registrar un nuevo auto de juicio oral"
             data-position='top'>
            <form action="" class="form-horizontal" role="form" id="form-busqueda-imputados">

                <input type="hidden" name="accion" value="consultarImputados"/>
                <input type="hidden" name="cveTipoActuacion" value="3"/>



                <div class="form-group">
                    <label for="cveJuzgado" class="col-md-4 control-label">
                        Juzgado
                        <span class="requerido"> (*)</span>
                    </label>
                    <div class="col-md-4">
                        <select name="cveJuzgado" id="cveJuzgado" class="form-control">
                            <option value="">seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="numero" class="col-md-4 control-label">
                        Num. Causa
                        <span class="requerido"> (*)</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" maxlength="4" id="numero" name="numero"
                               placeholder="Número de Causa">
                    </div>

                </div>

                <div class="form-group">
                    <label for="anio" class="col-md-4 control-label">
                        A&ntilde;o de Causa
                        <span class="requerido"> (*)</span>
                    </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" maxlength="4" id="anio" name="anio"
                               placeholder="Año de Causa">
                    </div>

                    <div class="col-md-3">
                        <button data-step="2" data-intro="Da clic para buscar imputados" data-position='top'
                                class="btn btn-primary botonesArbol" id="buscarSentencias">Buscar Imputados
                        </button>
                    </div>
                </div>

                <div class="clearfix"></div>
                <br/>

                <div class="form-group">
                    <div class="col-xs-offset-4 col-xs-8">
                        <a data-step="3" data-intro="De clic para buscar un auto de juicio oral." data-position='top'
                           id="pasar-a-consultar" href="#" class="btn btn-primary botonesArbol">Consultar</a>
                        <a data-step="4"
                           data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida."
                           data-position='top' id="limpiar-principal" href="#" class="btn btn-primary botonesArbol">Limpiar</a>
                    </div>
                </div>

                <div id="notificaciones" class="alert" role="alert" style="display:none;"></div>

                <div class="clearfix"></div>


            </form>

            <div id="tabla-imputados" style="display: none;">

                <hr/>

                <div class="clearfix"></div>
                <br/>

                <!--<div id="links" class="pull-right" style="display: none;"></div>-->

                <form action="" id="form-generar-auto-juicio">

                    <input type="hidden" name="accion" value="generarAutoJuicioOral"/>
                    <input type="hidden" name="idCarpetaJudicial" id="idCarpetaJudicial" value=""/>

                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tipo de Persona</th>
                                <th>Nombre Imputado</th>
                                <th>N&uacute;mero Auto Juicio</th>
                                <th>A&ntilde;o Auto Juicio</th>
                                <th><input type="checkbox" id="checkallimputados"/></th>
                            </tr>
                        </thead>
                        <tbody id="body-imputados">

                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Datos de Auto de Apertura a Juicio Oral</h3>
                                        </div>

                                        <br/>

                                        <div class="form-horizontal">

                                            <div class="form-group">
                                                <label for="sintesis" class="col-sm-12 col-md-2 control-label">
                                                    Interpone alg&uacute;n recurso?
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="checkbox" class="form-control mayuscula"
                                                           id="interpone_recurso"
                                                           name="interpone_recurso">
                                                </div>
                                            </div>

                                            <!--<div class="form-group">
                                                <label for="sintesis" class="col-sm-12 col-md-2 control-label">
                                                    Apelada?
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="checkbox" class="form-control mayuscula"
                                                           id="apelada"
                                                           name="apelada">
                                                </div>
                                            </div>-->

                                            <div class="form-group">
                                                <label for="fechaInicio" class="col-sm-12 col-md-2 control-label">
                                                    Fecha del Auto<span class="requerido">(*)</span>
                                                </label>
                                                <div class="col-md-8">
                                                    <input type="text" name="fechaInicio" id="fechaInicio"
                                                           class="datepicker form-control" value=""/>
                                                </div>
                                            </div>

                                            <div id="interpone-recurso-div" style="display: none;">

                                                <div class="form-group">
                                                    <label for="motivo" class="col-sm-12 col-md-2 control-label">
                                                        Motivo <span class="requerido">(*)</span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="motivo" id="motivo">
                                                            <option value="">Selecciona una opci&oacute;n</option>
                                                            <option value="1">APELACI&Oacute;N</option>
                                                            <option value="2">AMPARO</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div id="datos-motivo">

                                                    <div id="motivo-apelacion" style="display: none;">
                                                        <p class="text-center">
                                                            <strong>
                                                                Datos a registrar por motivo: Apelaci&oacute;n
                                                            </strong>
                                                        </p>

                                                        <div class="form-group">

                                                            <label for="numeroApelacion"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                N&uacute;mero Toca
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control mayuscula"
                                                                       maxlength="4"
                                                                       id="numeroApelacion"
                                                                       name="numeroApelacion"/>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="anoApelacion"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                A&ntilde;o Toca
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control mayuscula"
                                                                       maxlength="4"
                                                                       id="anioApelacion" name="anioApelacion"/>
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="salaApelacion"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                Sala
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select name="salaApelacion" id="salaApelacion"
                                                                        class="form-control">
                                                                    <option value="">Seleccione una opci&oacute;n
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="sentidoResolucionApelacion"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                Sentido Resoluci&oacute;n
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <select name="sentidoResolucionApelacion"
                                                                        id="sentidoResolucionApelacion"
                                                                        class="form-control">
                                                                    <option value="">Seleccione una opci&oacute;n
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div id="motivo-amparo" style="display: none;">

                                                        <p class="text-center">
                                                            <strong>
                                                                Datos a registrar por motivo: Amparo
                                                            </strong>
                                                        </p>

                                                        <div class="form-group">

                                                            <label for="numeroAmparo"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                N&uacute;mero Amparo
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control mayuscula"
                                                                       maxlength="4"
                                                                       id="numeroAmparo"
                                                                       name="numeroAmparo"/>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">

                                                            <label for="anioAmparo"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                A&ntilde;o Amparo
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control mayuscula"
                                                                       maxlength="4"
                                                                       id="anioAmparo"
                                                                       name="anioAmparo"/>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">

                                                            <label for="numeroApelacion"
                                                                   class="col-sm-12 col-md-2 control-label">
                                                                Juzgado de Distrito
                                                                <span class="requerido"> (*)</span>
                                                            </label>
                                                            <div class="col-md-8">

                                                                <input type="text" class="form-control mayuscula"
                                                                       id="juzgadoDistritoAmparo"
                                                                       name="juzgadoDistritoAmparo"/>

                                                                <!--<select name="juzgadoDistritoAmparo"
                                                                        id="juzgadoDistritoAmparo" class="form-control">
                                                                    <option value="">Seleccione una opci&oacute;n
                                                                    </option>
                                                                </select>-->
                                                            </div>

                                                        </div>


                                                    </div>


                                                    <div class="clearfix"></div>
                                                    <br/>

                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="sintesis" class="col-sm-12 col-md-2 control-label">Sintesis
                                                    <span class="requerido">(*)</span></label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control mayuscula" id="sintesis"
                                                           name="sintesis"
                                                           placeholder="INGRESA LA SINTESIS">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="observaciones" class="col-sm-12 col-md-2 control-label">Contenido
                                                    del Documento
                                                    <span class="requerido">(*)</span></label>
                                                <div class="col-md-8">
                                                    <script id="observaciones" type="text/plain"
                                                    style="width: 100%; height: 300px; margin: 0px auto;"></script>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div id="notificaciones-modal" class="alert" role="alert"
                                             style="display:none;"></div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <br/>


                                <div class="modal-footer">
                                    <a href="#!" class="btn btn-default" data-dismiss="modal">Cerrar</a>
                                    <button type="submit" id="mostrar-imputados" class="btn btn-primary">Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--termina modal-panel para mostrar sentencias-->

                    <div class="clearfix"></div>
                    <br/>


                    <a href="#!" class="btn btn-primary pull-right" id="generar-juicio-modal">Generar Auto de Apertura a
                        Juicio Oral</a>

                    <!--<input class="btn btn-primary pull-right" type="submit" value="Generar Expediente"/>-->

                </form>


            </div>

        </div>


        <!--Inicia consulta de autos a juicio oral -->
        <div id="consultar-autos-apertura-juicio" style="display: none;">

            <form action="" class="form-horizontal" role="form" id="form-busqueda-autos-juicio-oral">

                <input type="hidden" name="accion" value="consulta"/>
                <input type="hidden" name="offset" id="offset" value="0"/>
                <input type="hidden" name="pagina" id="pagina" value="1"/>
                <input type="hidden" name="porPagina" id="porPagina" value="20"/>
                <input type="hidden" name="cveJuzgadoTree" id="cveJuzgadoTree" value=""/>


                <!--<div class="form-group">
                    <label for="nombreImputado" class="col-sm-3 control-label">Nombre Imputado</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nombreImputado" name="nombreImputado"
                               placeholder="Nombre del Imputado">
                    </div>
                </div>-->
                <input type="hidden" id="nombreImputado" name="nombreImputado" value="" readonly="readonly"/>

                <div class="form-group">
                    <label for="juzgadoConsulta" class="col-sm-3 control-label">
                        Juzgado
                        <span class="requerido"> (*)</span>
                    </label>
                    <div class="col-md-6">
                        <select readonly="true" name="cveJuzgadoconsulta" id="cveJuzgadoconsulta" class="form-control">
                            <option value="">seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">

                    <label for="numeroExpediente" class="col-sm-3 control-label">
                        N&uacute;mero Causa
                        <span class="requerido"> (*)</span>
                    </label>

                    <div class="col-md-2">
                        <input type="text" class="form-control" maxlength="4" id="numeroActuacion" name="numeroActuacion" placeholder="Número">
                    </div>

                    <label for="anioExpediente" class="col-sm-2 control-label">
                        A&ntilde;o Causa
                        <span class="requerido"> (*)</span>
                    </label>

                    <div class="col-md-2">
                        <input type="text" class="form-control" maxlength="4" id="anioActuacion" name="anioActuacion"
                               placeholder="Año">
                    </div>

                </div>

                <!--<div class="form-group">

                    <label for="fechaInicio" class="col-md-3 control-label">Fecha Inicio</label>

                    <div class="col-md-2">
                        <input type="text" class="form-control datepicker" id="fechaInicio" name="fechaInicio"
                               value=""/>
                    </div>

                    <label for="fechaFin" class="col-md-2 control-label">Fecha Final</label>

                    <div class="col-md-2">
                        <input type="text" class="form-control datepicker" id="fechaFin" name="fechaFin" value=""/>
                    </div>

                </div>-->

                <div class="form-group">


                    <label for="fechaInicio" class="col-md-3 control-label">Fecha Inicio
                        <span class="requerido"> (*)</span>
                    </label>

                    <div class="col-md-2">
                        <input type="text" class="form-control" id="fechaInicioBusqueda" name="fechaInicio"
                               value="<?php echo $fecha ?>"/>
                    </div>

                    <label for="fechaFin" class="col-md-2 control-label">Fecha Final
                        <span class="requerido"> (*)</span>
                    </label>

                    <div class="col-md-2">
                        <input type="text" class="form-control" id="fechaFin" name="fechaFin"
                               value="<?php echo $fecha ?>"/>
                    </div>

                </div>

                <div class="clearfix"></div>
                <br/>

                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <a id="regresar-a-general" href="#" class="btn btn-primary">Regresar</a>
                        <a id="limpiar-consulta" href="#" class="btn btn-primary">Limpiar</a>
                        <button class="btn btn-primary" id="buscar-autos-ejec-sentencias">
                            Buscar Auto de Apertura a Juicio Oral
                        </button>
                    </div>
                </div>

                <div id="notificaciones-consulta" class="alert" role="alert" style="display:none;"></div>

                <div class="clearfix"></div>


            </form>

            <div id="tabla-autos-ejecucion-sentencias" style="display: none;">

                <hr/>
                <div class="clearfix"></div>
                <br/>

                <div id="paginacion" class="row" style="display: none;">
                    <div class="col-md-2 col-md-offset-6">
                        <br/>
                        <br/>
                        Total de Registros: <label id="totalRegistros"></label>
                    </div>
                    <div class="col-md-2">
                        Páginas
                        <select class="form-control" name="paginas" id="paginas"
                                onchange="changePage(this.value);"></select>
                    </div>
                    <div class="col-md-2">
                        Registros por página
                        <select class="form-control" name="porpagina" id="porpagina"
                                onchange="changePorPagina(this.value)">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option selected value="20">20</option>
                            <option value="25">25</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>

                <!--<div id="links" class="pull-right" style="display: none;"></div>-->


                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nombre(s) Imputado(s)</th>
                            <th>Causa</th>
                            <th>Apelada</th>
                            <th>Motivo</th>
                            <th>Fecha del Auto</th>
                            <th>N&uacute;mero Auto Juicio</th>
                            <th>A&ntilde;o Auto Juicio</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody id="body-imputados-sentencias-consulta">

                    </tbody>
                </table>

                <div class="clearfix"></div>
                <br/>

                </form>


            </div>
        </div>
        <!-- Termina consulta de auos a juicio oral -->


        <!--editar auto juicio oral-->
        <div id="editar-auto-juicio-oral" style="display: none;">

            <input type="hidden" id="idActuacion" value=""/>

            <form action="" id="form-editar-auto-juicio">
                <input type="hidden" name="accion" value="editarAutoJuicioOral"/>
                <input type="hidden" id="idAperturaJuicio" name="idAperturaJuicio" value=""/>
                <input type="hidden" id="idAperturaApelada-editar" name="idAperturaApelada" value=""/>
                <input type="hidden" id="idActuacion-editar" name="idActuacion" value=""/>

                <div class="form-horizontal">

                    <div class="form-group">
                        <label for="sintesis" class="col-sm-12 col-md-3 control-label">
                            Interpone alg&uacute;n recurso?
                        </label>
                        <div class="col-md-6">
                            <input type="checkbox" class="form-control mayuscula"
                                   id="interpone_recurso-editar"
                                   name="interpone_recurso">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fechaInicio" class="col-sm-12 col-md-3 control-label">
                            Fecha del Auto<span class="requerido">(*)</span>
                        </label>
                        <div class="col-md-3 col-sm-12">
                            <input type="text" name="fechaInicio" id="fechaInicio-editar"
                                   class="datepicker form-control" value=""/>
                        </div>
                    </div>

                    <div id="interpone-recurso-div-editar" style="display: none;">

                        <br/>
                        <hr/>

                        <div class="form-group">
                            <label for="motivo" class="col-sm-12 col-md-3 control-label">
                                Motivo <span class="requerido">(*)</span>
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" name="motivo" id="motivo-editar">
                                    <option value="">Selecciona una opci&oacute;n</option>
                                    <option value="1">APELACI&Oacute;N</option>
                                    <option value="2">AMPARO</option>
                                </select>
                            </div>
                        </div>

                        <div id="datos-motivo-editar">

                            <div id="motivo-apelacion-editar" style="display: none;">
                                <p class="text-center">
                                    <strong>
                                        Datos a registrar por motivo: Apelaci&oacute;n
                                    </strong>
                                </p>

                                <div class="form-group">

                                    <label for="numeroApelacion" class="col-sm-12 col-md-3 control-label">
                                        N&uacute;mero Toca
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control mayuscula"
                                               maxlength="4"
                                               id="numeroApelacion-editar"
                                               name="numeroApelacion"/>
                                    </div>

                                    <label for="anoApelacion"
                                           class="col-sm-12 col-md-2 control-label">
                                        A&ntilde;o Toca
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control mayuscula"
                                               maxlength="4"
                                               id="anioApelacion-editar" name="anioApelacion"/>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="salaApelacion"
                                           class="col-sm-12 col-md-3 control-label">
                                        Sala
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select name="salaApelacion" id="salaApelacion-editar"
                                                class="form-control">
                                            <option value="">Seleccione una opci&oacute;n
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sentidoResolucionApelacion"
                                           class="col-sm-12 col-md-3 control-label">
                                        Sentido Resoluci&oacute;n
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select name="sentidoResolucionApelacion"
                                                id="sentidoResolucionApelacion-editar"
                                                class="form-control">
                                            <option value="">Seleccione una opci&oacute;n
                                            </option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div id="motivo-amparo-editar" style="display: none;">

                                <p class="text-center">
                                    <strong>
                                        Datos a registrar por motivo: Amparo
                                    </strong>
                                </p>

                                <div class="form-group">

                                    <label for="numeroAmparo" class="col-sm-12 col-md-3 control-label">
                                        N&uacute;mero Amparo
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-2 col-sm-12">
                                        <input type="text" class="form-control mayuscula"
                                               maxlength="4"
                                               id="numeroAmparo-editar"
                                               name="numeroAmparo"/>
                                    </div>

                                    <label for="anioAmparo" class="col-sm-12 col-md-2 control-label">
                                        A&ntilde;o Amparo
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-2 col-sm-12">
                                        <input type="text" class="form-control mayuscula"
                                               maxlength="4"
                                               id="anioAmparo-editar"
                                               name="anioAmparo"/>
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label for="numeroApelacion"
                                           class="col-sm-12 col-md-3 control-label">
                                        Juzgado de Distrito
                                        <span class="requerido"> (*)</span>
                                    </label>
                                    <div class="col-md-6">

                                        <input type="text" class="form-control mayuscula"
                                               id="juzgadoDistritoAmparo-editar"
                                               name="juzgadoDistritoAmparo"/>

                                        <!--<select name="juzgadoDistritoAmparo"
                                                id="juzgadoDistritoAmparo-editar" class="form-control">
                                            <option value="">Seleccione una opci&oacute;n
                                            </option>
                                        </select>-->
                                    </div>

                                </div>


                            </div>


                            <div class="clearfix"></div>
                            <br/>

                        </div>


                        <hr/>

                    </div>


                    <div class="form-group">
                        <label for="sintesis" class="col-sm-12 col-md-3 control-label">Sintesis
                            <span class="requerido">(*)</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control mayuscula" id="sintesis-editar"
                                   name="sintesis"
                                   placeholder="INGRESA LA SINTESIS">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="observaciones" class="col-sm-12 col-md-3 control-label">Contenido
                            del Documento
                            <span class="requerido">(*)</span></label>
                        <div class="col-md-6 col-sm-12">
                            <script id="observaciones-editar" type="text/plain"
                            style="width: 100%; height: 300px; margin: 0px auto;"></script>
                        </div>
                    </div>

                </div>


                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="notificaciones-modal-editar" class="alert" role="alert"
                             style="display:none;"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <br/>

                <div class="clearfix"></div>
                <div id="notificaciones-edita-auto" class="alert" role="alert" style="display:none;"></div>
                <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">
                    <strong>Correcto!</strong> Mensaje
                </div>
                <br/>
                <div class="clearfix"></div>

                <div class="pull-right" style="padding-right: 50px;">
                    <a href="#" id="regresar-consulta" class="btn btn-primary botonesArbol">Consultar</a>
                    <button type="submit" id="mostrar-imputados-editar" class="btn btn-primary">Editar</button>
                    <a class="btn btn-primary" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF"
                       onclick="javascript:visorDocuemntos();">Visor
                    </a>
                    <a class="btn btn-primary" id="inputPDF" onclick="javascript:enviar();">Generar PDF</a>
                    </a>
                </div>

            </form>


        </div>
        <!---->


    </div>
</div>
<!--</div>-->
<script type="text/javascript">

    var permisos = obtenerPermisosFormulario("CARPETAS JUDICIALES", "AUTO DE APERTURA A JUICIO ORAL");
    updatePermisos = permisos.Update;
    readPermisos = permisos.Read;
    createPermisos = permisos.Create;
    deletePermisos = permisos.Delete;


    if (editor != undefined) {
        editor.destroy();
    }
    var editor = null;

    if (editorEditar != undefined) {
        editorEditar.destroy();
    }
    var editorEditar = null;

    comboJuzgados = function () {

        var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
        $.ajax(ruta_juzgados, {
            type: 'POST',
            data: {accion: 'distrito', obligaPermiso: 'false'},
            dataType: 'json',
            beforeSend: function (objeto) {
                ToggleLoading(1);
            },
            success: function (data) {
                try {
                    var html = "";
                    //console.log(data.data);
                    if (data.totalCount > 0) {
                        html += '<option value="">Selecciona una opci&oacute;n</option>';
                        for (var index = 0; index < data.totalCount; index++) {
                            if (data.data[index].cveTipojuzgado == '1') {
                                html += "<option selected value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                            }
                        }
                        html += "</select>";
                        ToggleLoading(2);
                    } else {
                        html = "Sin resultados";
                        ToggleLoading(2);
                    }
                    $('#cveJuzgado').html(html);
                    $('#cveJuzgadoconsulta').html(html);
                } catch (e) {
                    alert(e);
                    ToggleLoading(2);
                }
            }
        }).error(function () {
            alert('error al obtener los juzgados');
            ToggleLoading(2);
        });

    };

    comboSalas = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            dataType: "json",
            data: {
                accion: "consultar",
                cveTipojuzgado: "5"
            },
            success: function (data) {

                try {

                    if (parseInt(data.totalCount) > 0) {

                        var html = '';

                        html += "<option value=''>selecciona una opción</option>";

                        $.each(data.data, function (i, v) {
                            html += "<option value='" + v.cveJuzgado + "'>" + v.desJuzgado + "</option>"
                        });

                        $("#salaApelacion").html(html);
                        $("#salaApelacion-editar").html(html);

                    } else {

                        alert('ocurrio un error al cargar los juzgados o no se encontraron resultados');

                    }


                } catch (e) {
                    alert("error al cargar las salas: " + e);
                }

            }, error: function (objeto, quepaso, otroobjeto) {

            }
        });
    };

    comboSentidosResoluciones = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/sentidosresoluciones/SentidosresolucionesFacade.Class.php",
            dataType: "json",
            data: {
                accion: "consultar",
                activo: "S"
            },
            success: function (data) {


                try {

                    if (parseInt(data.totalCount) > 0) {

                        var html = '';

                        html += "<option value=''>Selecciona una opción</option>";

                        $.each(data.data, function (i, v) {
                            html += "<option value='" + v.cveSentido + "'>" + v.desSentido + "</option>"
                        });

                        $("#sentidoResolucionApelacion").html(html);
                        $("#sentidoResolucionApelacion-editar").html(html);

                    } else {
                        alert('No se encontraron sentidos de resolucion, contacta al administrador');
                    }


                } catch (e) {
                    alert("error al cargar sentidos de resolucion: " + e);
                }

            }, error: function (objeto, quepaso, otroobjeto) {

            }
        });
    };

    comboTipoCarpeta = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "consultar", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    $('#cveTipoCarpeta').empty();
                    $('#cveTipoCarpeta').append('<option value="">Seleccione una opción</option>');
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (count, object) {
                            if (object.cveTipoCarpeta == 2 || object.cveTipoCarpeta == 3 || object.cveTipoCarpeta == 4) {
                                $('#cveTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                            }

                        });
                    }
                } catch (e) {
                    alert("Error al cargar tipo de carpeta:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
            }
        });
    };

    comboJuzgadoDistrito = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            dataType: "json",
            data: {
                accion: "distrito"
            },
            success: function (data) {

                try {

                    if (parseInt(data.totalCount) > 0) {

                        var html = '';

                        html += "<option value=''>selecciona una opción</option>";

                        $.each(data.data, function (i, v) {
                            html += "<option value='" + v.cveJuzgado + "'>" + v.desJuzgado + "</option>"
                        });

                        $("#juzgadoDistritoAmparo").html(html);
                        $("#juzgadoDistritoAmparo-editar").html(html);

                    } else {
                        alert('ocurrio un error al cargar los juzgados o no se encontraron resultados');
                    }

                } catch (e) {
                    alert("error al cargar juzgados: " + e);
                }

            }, error: function (objeto, quepaso, otroobjeto) {

            }
        });
    };

    printLinks = function (total, pagina) {

        var pages = Math.ceil(total / $("#porPagina").val());
        var paginas = '';
        var i;

        for (i = 0; i < pages; i++) {

            if (pagina - 1 == i) {
                paginas += '<option selected value="' + (i + 1) + '">' + (i + 1) + '</option>';
            } else {
                paginas += '<option value="' + (i + 1) + '">' + (i + 1) + '</option>';

            }

        }

        $("#totalRegistros").text(total);

        $("#paginas").html(paginas).show('fast', function () {
            $("#paginacion").show();
        });


    };

    changePorPagina = function (porPagina) {
        $("#porPagina").val(porPagina);
        changePage(1);
    };

    changePage = function (page) {

        $("#offset").val((page - 1) * $("#porPagina").val());
        $("#pagina").val(page);
        $("#form-busqueda-autos-juicio-oral").trigger('submit');
    };

    var findContent = {
        regs: []
    };

    /*
     * metodo js para mostrar tabla imputados con expediente de ejecucion de sentencia generado y no generado debado de las actuaciones
     */


    $(function () {


        $(document).on('change', '.radioActuacion', function () {
            var idActuacion = $(this).val();

            $(".imputados-sentencias").hide();
            $(".imputados-sentencia-" + idActuacion).show('fast');

        });


        comboJuzgados();
        comboSalas();
        comboTipoCarpeta();
        comboSentidosResoluciones();
        //comboJuzgadoDistrito();

        $('#numero').validaCampo('0123456789');
        $('#anio').validaCampo('0123456789');
        $('#numeroActuacion').validaCampo('0123456789');
        $('#anioActuacion').validaCampo('0123456789');
        $('#numeroApelacion').validaCampo('0123456789');
        $('#anioApelacion').validaCampo('0123456789');
        $('#numeroAmparo').validaCampo('0123456789');
        $('#anioAmparo').validaCampo('0123456789');


        $("#checkallimputados").on('change', function () {

            if ($(this).is(':checked')) {
                $(".checkimputado").prop('checked', true);
                return;
            }
            $(".checkimputado").prop('checked', false);

        });

        $("#generar-juicio-modal").on('click', function (e) {
            e.preventDefault();

            if ($(".checkimputado:checked").length == 0) {
                alert('tienes que seleccionar al menos un imputado');
                return;
            }

            $("#myModal").modal('show');


        });


        /*
         * valida si interpone algún recurso
         */

        $("#interpone_recurso").on('change', function () {

            if ($("#interpone_recurso").is(":checked")) {
                $("#interpone-recurso-div").fadeIn('fast');
                return;
            }

            $("#interpone-recurso-div").fadeOut('fast');

        });

        $("#interpone_recurso-editar").on('change', function () {

            if ($("#interpone_recurso-editar").is(":checked")) {
                $("#interpone-recurso-div-editar").fadeIn('fast');
                return;
            }

            $("#interpone-recurso-div-editar").fadeOut('fast');

        });

        $("#motivo").on('change', function () {

            var valorMotivo = $(this).val();

            if (valorMotivo == '') {
                $("#motivo-amparo").hide();
                $("#motivo-apelacion").hide();
            } else if (valorMotivo == '1') {
                $("#motivo-amparo").hide();
                $("#motivo-apelacion").show();
            } else if (valorMotivo == '2') {
                $("#motivo-apelacion").hide();
                $("#motivo-amparo").show();
            }

        });


        $("#motivo-editar").on('change', function () {

            var valorMotivo = $(this).val();

            if (valorMotivo == '') {
                $("#motivo-amparo-editar").hide();
                $("#motivo-apelacion-editar").hide();
            } else if (valorMotivo == '1') {
                $("#motivo-amparo-editar").hide();
                $("#motivo-apelacion-editar").show();
            } else if (valorMotivo == '2') {
                $("#motivo-apelacion-editar").hide();
                $("#motivo-amparo-editar").show();
            }

        });

        $("#form-busqueda-imputados").on('submit', function (e) {

            e.preventDefault();

            $("#notificaciones").hide();
            $("#tabla-imputados").hide();

            var dataForm = $(this).serialize();

            $("#checkallimputados").prop('checked', false);

            $.ajax({
                url: '../fachadas/sigejupe/autojuiciooral/AutoJuicioOralFacade.Class.php',
                type: 'POST',
                data: dataForm,
                dataType: 'json',
                success: function (data) {

                    if (data.estatus == 'ok') {

                        var datosImputados = '';

                        $("#idCarpetaJudicial").val(data.data.idCarpetaJudicial);

                        $.each(data.data.imputados, function (k, v) {

                            var tipoPersona = "";
                            var nombre = "";

                            switch (v.cveTipoPersona) {
                                case '1':
                                    tipoPersona = 'Fisica';
                                    nombre = v.nombreFisica
                                    break;
                                case '2':
                                    tipoPersona = 'Moral';
                                    nombre = v.nombreMoral;
                                    break;
                                case '3':
                                    tipoPersona = 'Otra';
                                    nombre = v.nombreMoral;
                                    break;
                            }

                            datosImputados += '<tr>';
                            datosImputados += '<th scope="row">' + (k + 1) + '</th>';
                            datosImputados += '<td>' + tipoPersona + '</td>';
                            datosImputados += '<td>' + nombre + '</td>';
                            datosImputados += '<td id="numero-' + v.idImputadoCarpeta + '">' + v.numActuacion + '</td>';
                            datosImputados += '<td id="anio-' + v.idImputadoCarpeta + '">' + v.aniActuacion + '</td>';
                            if (v.generado) {
                                datosImputados += '<td id="check-' + v.idImputadoCarpeta + '"><i class="fa fa-check"></i></td>';
                            } else {
                                datosImputados += '<td id="check-' + v.idImputadoCarpeta + '"><input class="checkimputado" name="imputado[' + v.idImputadoCarpeta + ']" type="checkbox"></td>';

                            }

                            datosImputados += '</tr>';

                        });

                        $("#body-imputados").html(datosImputados);
                        $("#tabla-imputados").show();

                    } else if (data.estatus == 'error') {

                        var mensaje = data.mensaje;
                        var cerrarnotificacion = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                        $("#notificaciones").stop().html(cerrarnotificacion + "<strong>" + mensaje + "</strong>");
                        $("#notificaciones").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(5000).fadeOut('fast');


                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de busqueda de sentencias:\n" + otroobj);
                }
            });
        });


        $("#form-generar-auto-juicio").on('submit', function (e) {

            if (createPermisos == 'N') {
                alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
                return;
            }

            e.preventDefault();

            $("#notificaciones").hide();

            var dataForm = $(this).serialize();

            $.ajax({
                url: '../fachadas/sigejupe/autojuiciooral/AutoJuicioOralFacade.Class.php',
                type: 'POST',
                data: dataForm + '&editorValue=' + encodeURIComponent(editor.getContent()),
                dataType: 'json',
                success: function (data) {

                    if (data.estatus == 'ok') {

                        $("#myModal").modal('hide');

                        //$("#tabla-imputados").hide();

                        $("#notificaciones").stop().html("<strong>" + data.mensaje + "</strong>");
                        $("#notificaciones").removeClass('alert-warning').addClass('alert-success').fadeIn('fast').delay(5000).fadeOut('fast');

                        $.each(data.data, function (i, k) {
                            $("#numero-" + k.idImputadoCarpeta).text(k.numero).addClass('success');
                            $("#anio-" + k.idImputadoCarpeta).text(k.anio).addClass('success');
                            $("#check-" + k.idImputadoCarpeta).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
                        });

                        $("#motivo").val('');
                        $("#fechaInicio").val('');
                        $("#numeroApelacion").val('');
                        $("#anioApelacion").val('');
                        $("#salaApelacion").val('');
                        $("#sentidoResolucionApelacion").val('');
                        $("#numeroAmparo").val('');
                        $("#anioAmparo").val('');
                        $("#juzgadoDistritoAmparo").val('');
                        $("#sintesis").val('');
                        editor.setContent('');


                    } else if (data.estatus == 'error') {

                        var mensaje = data.mensaje;

                        $("#notificaciones-modal").stop().html("<strong>" + mensaje + "</strong>" + "<br>");
                        $("#notificaciones-modal").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(3000).fadeOut('fast');


                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion para generar auto de juicio oral:\n" + otroobj);
                }
            });

        });


        $("#form-editar-auto-juicio").on('submit', function (e) {

            if (updatePermisos == 'N') {
                alert('No se tienen los permisos para editar registros en este formulario, contacta al administrador');
                return;
            }

            e.preventDefault();

            $("#notificaciones-consulta").hide();

            var dataForm = $(this).serialize();

            $.ajax({
                url: '../fachadas/sigejupe/autojuiciooral/AutoJuicioOralFacade.Class.php',
                type: 'POST',
                data: dataForm + '&editorEditarValue=' + encodeURIComponent(editorEditar.getContent()),
                dataType: 'json',
                success: function (data) {

                    if (data.estatus == 'ok') {

                        $("#notificaciones-edita-auto").stop().html("<strong>" + data.mensaje + "</strong>");
                        $("#notificaciones-edita-auto").removeClass('alert-warning').addClass('alert-success').fadeIn('fast').delay(5000).fadeOut('fast');

                    } else if (data.estatus == 'error') {

                        var mensaje = data.mensaje;

                        $("#notificaciones-edita-auto").stop().html("<strong>" + mensaje + "</strong>" + "<br>");
                        $("#notificaciones-edita-auto").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(3000).fadeOut('fast');


                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de editar auto de apertura juicio oral:\n" + otroobj);
                }
            });
        });

        /*
         * metodo js para limpiar form
         */

        $("#limpiar-principal").on('click', function (e) {
            e.preventDefault();
            $("#numero").val('');
            $("#anio").val('');
            $("#notificaciones").hide();
            $("#tabla-imputados").hide();
        });


        $("#limpiar-consulta").on('click', function (e) {
            e.preventDefault();
            $("#offset").val(0);
            $("#pagina").val(1);
            $("#porPagina").val(20);
            $("#nombreImputado").val('');
            $("#numeroActuacion").val('');
            $("#anioActuacion").val('');
            //$("#fechaInicio").val('');
            //$("#fechaFin").val('');
            $("#notificaciones-consulta").hide();
            $("#tabla-autos-ejecucion-sentencias").hide();
        });

        /*
         * funcion js mostrar mostrar div para generar consultas consulta
         */

        $("#pasar-a-consultar").on('click', function (e) {
            e.preventDefault();
            $("#limpiar-principal").trigger('click');
            $("#general-ejecucion-sentencia").hide();
            $("#consultar-autos-apertura-juicio").show();


        });

        /*
         * funcion js para  regresar a generar auto de radicacion de ejecucion de sentencias
         */
        $("#regresar-a-general").on('click', function (e) {
            e.preventDefault();
            $("#limpiar-consulta").trigger('click');
            $("#consultar-autos-apertura-juicio").hide();
            $("#general-ejecucion-sentencia").show();

        });

        $("#regresar-consulta").on('click', function (e) {
            e.preventDefault();
            $("#consultar-autos-apertura-juicio").show();
            $("#editar-auto-juicio-oral").hide();
            $("#general-ejecucion-sentencia").hide();

            $("#form-busqueda-autos-juicio-oral").trigger('submit');
        });


        /*
         modal para la descripcion completa de los registros
         */

        abreModalDescripcion = function (index) {

            var data = findContent.regs[index];

            var tiposPersona = [];
            tiposPersona[1] = "FISICA";
            tiposPersona[2] = "MORAL";
            tiposPersona[3] = "OTRO";

            var htmldescripcion = "";
            htmldescripcion += '<dl class="dl-horizontal">';
            /*htmldescripcion += '<dt>Tipo de Persona: </dt>';
             htmldescripcion += '<dd>' + tiposPersona[data.cveTipoPersona] + '</dd>';*/

            /*if (data.cveTipoPersona == 1) {
             htmldescripcion += '<dt>Nombre: </dt>';
             htmldescripcion += '<dd>' + data.nombreFisica + '</dd>';
             } else {
             htmldescripcion += '<dt>Nombre: </dt>';
             htmldescripcion += '<dd>' + data.nombreMoral + '</dd>';
             }*/

            htmldescripcion += '<dt>Datos de Imputados: </dt>';
            htmldescripcion += '<dd>' + data.nombresImputados + '</dd>';

            htmldescripcion += '<dt>Apelada: </dt>';
            htmldescripcion += '<dd>' + (((data.apelada) == 'S') ? 'SI' : 'NO') + '</dd>';

            htmldescripcion += '<dt>Fecha del Auto: </dt>';
            htmldescripcion += '<dd>' + data.fechaInicio + '</dd>';

            if (data.idMotivo != "" || data.desMotivo != "") {
                htmldescripcion += '<dt>Motivo: </dt>';
                htmldescripcion += '<dd>' + data.desMotivo + '</dd>';
            }


            if (data.idMotivo == 1) {

                htmldescripcion += '<dt>Número Toca: </dt>';
                htmldescripcion += '<dd>' + data.NumToca + '</dd>';

                htmldescripcion += '<dt>Año Toca: </dt>';
                htmldescripcion += '<dd>' + data.AnioToca + '</dd>';

                htmldescripcion += '<dt>Sala: </dt>';
                htmldescripcion += '<dd>' + data.desSala + '</dd>';

                htmldescripcion += '<dt>Sentido de Resolución: </dt>';
                htmldescripcion += '<dd>' + data.desSentido + '</dd>';

            } else if (data.idMotivo == 2) {

                htmldescripcion += '<dt>Número Amparo: </dt>';
                htmldescripcion += '<dd>' + data.NumAmp + '</dd>';

                htmldescripcion += '<dt>Año Amparo: </dt>';
                htmldescripcion += '<dd>' + data.AnioAmp + '</dd>';

                htmldescripcion += '<dt>Juzgado de Distrito: </dt>';
                htmldescripcion += '<dd>' + data.JuzDistrito + '</dd>';

            }

            htmldescripcion += '<dt>Sintesis: </dt>';
            htmldescripcion += '<dd>' + data.sintesis + '</dd>';

            htmldescripcion += '<dt>Contenido Documento: </dt>';
            htmldescripcion += '<dd>' + data.observaciones + '</dd>';

            htmldescripcion += '</dl>';

            $("#body-descripcion-modal").html(htmldescripcion);
            $("#descripcion-modal").modal('show');

        };

        abreModalEditar = function (index) {

            if (updatePermisos == 'N') {
                alert('No se tienen los permisos para editar registros en este formulario, contacta al administrador');
                return;
            }

            var data = findContent.regs[index];

            $("#consultar-autos-apertura-juicio").hide();

            $("#idAperturaJuicio").val(data.idAperturaJuicio);

            $("#idActuacion-editar").val(data.idActuacion);

            $("#idAperturaApelada-editar").val(data.idAperturaApelada);

            if (data.interponeRecurso == 'S') {
                $("#interpone_recurso-editar").prop('checked', true);

                if (parseInt(data.idMotivo) == 1) {

                    $("#numeroApelacion-editar").val(data.NumToca);
                    $("#anioApelacion-editar").val(data.AnioToca);
                    $("#salaApelacion-editar").val(data.cveJuzgado);
                    $("#sentidoResolucionApelacion-editar").val(data.cveSentido);

                    $("#numeroAmparo-editar").val("");
                    $("#anioAmparo-editar").val("");
                    $("#juzgadoDistritoAmparo-editar").val("");

                } else if (parseInt(data.idMotivo) == 2) {

                    $("#numeroAmparo-editar").val(data.NumAmp);
                    $("#anioAmparo-editar").val(data.AnioAmp);
                    $("#juzgadoDistritoAmparo-editar").val(data.JuzDistrito);

                    $("#numeroApelacion-editar").val('');
                    $("#anioApelacion-editar").val('');
                    $("#salaApelacion-editar").val('');
                    $("#sentidoResolucionApelacion-editar").val('');

                }

            } else {
                $("#interpone_recurso-editar").prop('checked', false);

                $("#numeroAmparo-editar").val('');
                $("#anioAmparo-editar").val('');
                $("#juzgadoDistritoAmparo-editar").val('');

                $("#numeroApelacion-editar").val('');
                $("#anioApelacion-editar").val('');
                $("#salaApelacion-editar").val('');
                $("#sentidoResolucionApelacion-editar").val('');
            }

            $("#interpone_recurso-editar").trigger('change');

            $("#motivo-editar").val(data.idMotivo).trigger('change');

            $("#fechaInicio-editar").val(data.fechaInicio);

            $("#sintesis-editar").val(data.sintesis);

            editorEditar = UE.getEditor('observaciones-editar');

            editorEditar.ready(function () {
                editorEditar.setContent(data.observaciones);
            });


            $("#editar-auto-juicio-oral").show();

        };


        //funcion cambiar motivo por apelacion*

        $("#motivo-editar").on('change', function () {
            var thisval = $(this).val();
            if (thisval == '1') {
                $("#numeroAmparo-editar").val('');
                $("#anioAmparo-editar").val('');
                $("#juzgadoDistritoAmparo-editar").val('');

            } else if (thisval == '2') {
                $("#numeroApelacion-editar").val('');
                $("#anioApelacion-editar").val('');
                $("#salaApelacion-editar").val('');
                $("#sentidoResolucionApelacion-editar").val('');
            }


        });

        /*
         * funcion js para consultar los autos de ejecucion de sentencias generados
         */
        $("#form-busqueda-autos-juicio-oral").on('submit', function (e) {
            e.preventDefault();

            var dataForm = $(this).serialize();
            // alert(dataForm);
            $.ajax({
                url: '../fachadas/sigejupe/autojuiciooral/AutoJuicioOralFacade.Class.php',
                type: 'POST',
                data: dataForm,
                async: false,
                dataType: 'json',
                success: function (data) {

                    if (data.estatus == 'ok') {

                        $("#notificaciones-consulta").hide();

                        //array de tipos de personas
                        var tiposPersona = [];
                        tiposPersona[1] = "FISICA";
                        tiposPersona[2] = "MORAL";
                        tiposPersona[3] = "OTRO";

                        var datosImputados = '';

                        var contadornumero = 1;

                        $.each(data.data, function (i, v) {

                            findContent.regs [i] = {
                                idActuacion: v.idActuacion,
                                fechaRegistro: v.fechaRegistro,
                                idImputadoCarpeta: v.idImputadoCarpeta,
                                cveTipoPersona: v.cveTipoPersona,
                                nombreFisica: v.nombreFisica,
                                nombreMoral: v.nombreMoral,
                                idCarpetaJudicial: v.idCarpetaJudicial,
                                numActuacion: v.numActuacion,
                                aniActuacion: v.aniActuacion,
                                numero: v.numero,
                                anio: v.anio,
                                sintesis: v.sintesis,
                                observaciones: v.observaciones,
                                idAperturaJuicio: v.idAperturaJuicio,
                                apelada: v.apelada,
                                fechaInicio: v.fechaInicio,
                                cveSentido: v.cveSentido,
                                desSentido: v.desSentido,
                                NumToca: v.NumToca,
                                AnioToca: v.AnioToca,
                                cveJuzgado: v.cveJuzgado,
                                desSala: v.desSala,
                                NumAmp: v.NumAmp,
                                AnioAmp: v.AnioAmp,
                                JuzDistrito: v.JuzDistrito,
                                idMotivo: v.idMotivo,
                                desMotivo: v.desMotivo,
                                nombresImputados: v.Nombres,
                                interponeRecurso: v.interponeRecurso,
                                idAperturaApelada: v.idAperturaApelada
                            };

                            datosImputados += '<tr>';
                            datosImputados += "<th scope='row' style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + (contadornumero++) + '</th>';
                            //datosImputados += '<td>' + tiposPersona[v.cveTipoPersona] + '</td>';

                            /*if (v.cveTipoPersona == 1) {
                             datosImputados += '<td>' + v.nombreFisica + '</td>';
                             } else {
                             datosImputados += '<td>' + v.nombreMoral + '</td>';
                             }*/

                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + v.Nombres + "</td>";


                            var apelada = "";
                            if (v.apelada == 'S') {
                                apelada = 'SI';
                            } else {
                                apelada = 'NO';
                            }

                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + v.numero + ' / ' + v.anio + "</td>";
                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + apelada + "</td>";
                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + v.desMotivo + "</td>";
                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + v.fechaInicio + "</td>";
                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + v.numActuacion + "</td>";
                            datosImputados += "<td style='cursor: pointer;' onclick='abreModalEditar(" + i + ")'>" + v.aniActuacion + "</td>";

                            //datosImputados += "<td><a style='cursor: pointer;' onclick='abreModalEditar(" + JSON.stringify(v) + ")'> EDITAR </a></td>";
                            //datosImputados += "<td><a style='cursor: pointer;' onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'> VER TODO </a></td>";
                            datosImputados += "<td><a style='cursor: pointer;' onclick='abreModalDescripcion(" + i + ")'> VER TODO </a></td>";
                            //datosImputados += "<td><a style='cursor: pointer;' onclick='visorDocumento(" + i + ")'> VISOR PDF </a></td>";


                            datosImputados += '</tr>'

                        });

                        $("#body-imputados-sentencias-consulta").html(datosImputados);
                        $("#tabla-autos-ejecucion-sentencias").fadeIn('fast');

                        printLinks(data.total, data.pagina);

                    } else if (data.estatus == 'error') {

                        var mensaje = data.mensaje;

                        $("#tabla-autos-ejecucion-sentencias").fadeOut('fast');

                        $("#notificaciones-consulta").stop().html("<strong>" + mensaje + "</strong>" + "<br>");
                        $("#notificaciones-consulta").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(3000).fadeOut('fast');


                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de busqueda de autos de ejecucion:\n" + otroobj);
                }
            });
        });


        editor = UE.getEditor('observaciones');

        editor.ready(function () {
            editor.setContent();
            editorEditar.setContent();
        });

        $("#fechaInicio").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });

        $("#fechaInicio-editar").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });

        $("#fechaInicioBusqueda").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });
        $("#fechaFin").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });

    });


    function enviar() {
        var strDatos = "accion=generarJson";
        strDatos += "&cveTipo=2";
        strDatos += "&cveTipoDocumento=28";
        strDatos += "&idActuacion=" + $("#idActuacion-editar").val();

        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    generaPDF(datos);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });

    }
    ;

    function visorDocuemntos() {
        $.ajax({
            type: 'POST',
            url: 'visorpdf/index.php',
            data: {idCarpetaJudicial: "", idActuacion: $('#idActuacion-editar').val(), cveTipoDocumento: 28}, //malo
            async: false,
            dataType: 'html',
            beforeSend: function () {
                $('#visor').html('<h3>Consultando informaci&oacute;n ... espere.</h3>');
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
    ;

<?php
if ($tree) {
    ?>

        var cveJuzgadoArbol = '<?php echo $cveJuzgadoArbol; ?>';
        var cveTipoCarpetaArbol = '<?php echo $cveTipoCarpetaArbol; ?>';
        var idActuacionArbol = '<?php echo $idActuacionArbol; ?>';
        var idActuacionPadreArbol = '<?php echo $idActuacionPadreArbol; ?>';
        var idReferenciaArbol = '<?php echo $idReferenciaArbol; ?>';


        $(function () {

            if (cveTipoCarpetaArbol > 0) {

                $("#cveJuzgadoTree").val($("#cmbJuzgadoArbol").val());
                $("#cveJuzgadoconsulta").val($("#cmbJuzgadoArbol").val());
                var txtNumeroTree = $("#txtNumeroTree").val();
                var txtAnioTree = $("#txtAnioTree").val();

                if (idActuacionArbol != '') {
                    $("#pasar-a-consultar").trigger('click');
                    $("#numeroActuacion").val(txtNumeroTree);
                    $("#anioActuacion").val(txtAnioTree);


                    setTimeout(function () {

                        $("#form-busqueda-autos-juicio-oral").trigger('submit');
                    }, 100);
                    setTimeout(function () {

                        abreModalEditar(idActuacionArbol);
                    }, 200);

                    $("#observaciones-editar").parent().removeClass('col-md-6').addClass('col-md-12');

                    $(".botonesArbol").hide();

                } else {

                    $("#cveJuzgadoTree").val($("#cmbJuzgadoArbol").val());
                    $("#numero").val(txtNumeroTree);
                    $("#anio").val(txtAnioTree);
                    $(".botonesArbol").hide();
                    $("#form-busqueda-imputados").trigger('submit');

                }

            }


        });

    <?php
}
?>

</script>
