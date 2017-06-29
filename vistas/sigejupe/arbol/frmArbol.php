<?php
if (!isset($_SESSION) || $_SESSION == '') {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
   //var_dump($_SESSION);
   date_default_timezone_set('America/Mexico_City');
   $anioActual = date("Y");
   $fechaActual = date("d/m/Y");
   $numeroSegundaIntancia = "";
   $anioSegundaIntancia = "";
   @$numeroSegundaIntancia= $_GET["numero"];
   @$anioSegundaIntancia= $_GET["anio"];
   ?>

   <style type="text/css">    
      div.tooltipsIzquierda { 
         position: relative;
         /*display: inline;*/
      }
      div.tooltipsIzquierda span {
         position: absolute;
         width: 560%;
         width: -moz-max-content;
         color: #000;
         background: #EEE;
         height: 48px;
         line-height: 48px;
         text-align: center;
         visibility: hidden;
         border-radius: 8px;
         box-shadow: -10px 4px 10px #786E72;
         padding-left: 15px;
         padding-right: 15px;
      }
      div.tooltipsIzquierda span:after {
         content: '';
         position: absolute;
         top: 50%;
         left: 100%;
         margin-top: -8px;
         width: 0; height: 0;
         border-left: 8px solid #751C1E;
         border-top: 8px solid transparent;
         border-bottom: 8px solid transparent;
      }
      div:hover.tooltipsIzquierda span {
         visibility: visible;
         opacity: 1;
         right: 100%;
         top: 50%;
         margin-top: -24px;
         margin-right: 15px;
         z-index: 9999;
      }
      div.tooltipsDerecha {
         position: relative;
         /*display: inline;*/
      }
      div.tooltipsDerecha span {
         position: absolute;
         width: 560%;
         width: -moz-max-content;
         color: #000;
         background: #EEE;
         height: 48px;
         line-height: 48px;
         text-align: center;
         visibility: hidden;
         border-radius: 8px;
         box-shadow: -10px 4px 10px #786E72;
         padding-left: 15px;
         padding-right: 15px;
      }
      div.tooltipsDerecha span:after {
         content: '';
         position: absolute;
         top: 50%;
         right: 100%;
         margin-top: -8px;
         width: 0; height: 0;
         border-left: 8px solid #751C1E;
         border-top: 8px solid transparent;
         border-bottom: 8px solid transparent;
      }
      div:hover.tooltipsDerecha span {
         visibility: visible;
         opacity: 1;
         left: 100%;
         top: 50%;
         margin-top: -24px;
         margin-right: 15px;
         z-index: 9999;
      }

      #divDataTableResults{
         overflow-y: auto;
      }
      .row.content {height: 1500px}

      .sidenav {
         background-color: #f1f1f1;
         height: 100%;
      }

      @media screen and (max-width: 767px) {
         .sidenav {
            height: auto;
            padding: 15px;
         }
         .row.content {height: auto;} 
      }


      .tree, .tree ul {
         margin:0;
         padding:0;
         list-style:none
      }

      .tree ul {
         margin-left:1em;
         position:relative
      }

      .tree ul ul {
         margin-left:.5em
      }

      .tree ul:before {
         content:"";
         display:block;
         width:0;
         position:absolute;
         top:0;
         bottom:0;
         left:0;
         border-left:1px solid
      }
      .tree li {
         margin:0;
         padding:0 1em;
         line-height:2em;
         color:#064034;
         font-weight:700;
         position:relative;
         font-size: 11px;        
      }
      .tree ul li:before {
         content:"";
         display:block;
         width:10px;
         height:0;
         border-top:1px solid;
         margin-top:-1px;
         position:absolute;
         top:1em;
         left:0
      }
      .tree ul li:hover {
         cursor: pointer;
      }
      .tree ul li:last-child:before {
         background:#fff;
         height:auto;
         top:1em;
         bottom:0
      }
      .indicator {
         margin-right:5px;
      }
      .tree li a {
         text-decoration: none;
         color:#064034;
      }
      .tree li button, .tree li button:active, .tree li button:focus {
         text-decoration: none;
         color:#064034;
         border:none;
         background:transparent;
         margin:0px 0px 0px 0px;
         padding:0px 0px 0px 0px;
         outline: 0;
      }


      #contextMenu {
         position: absolute;
         display:none;
      }
      .divMenuMini{
         background-color: #e1c665;
         padding: 5px;
         margin: 3px;        
         text-align: center;
         float: left;
         width: 75px;
         border: solid 1px;
         border-radius: 5px;
         height: 65px;
         font-family: Arial;
         font-size: 10px;
      }
      .divMenuMini:hover{
         cursor: pointer;
         background-color: #c8a526;        
         font-weight: bold;
      }
      .closeMenu:after{
         content: " Abrir";
         cursor: pointer;
      }

      #divTreesResults{
         display: none;
      }

      #divOpenCloseSerch{
         position: fixed;
         height: 85px;
         width: 25px;
         background-color: #c8a526;
         margin-left: 22%;
         display: none;
      }

      #spanTitleBandeja{
         text-transform: uppercase;
         font-size: 20px;
      }

      #divHeadConsulta{
         margin-bottom: 25px;
      }

      #PanelFormularios{
         /*width: 80%;*/
      }
      #tblResultBandeja{
         width: 100% !important; 
         margin-top:25px;
      }
      /*    panelOcultable{
              min-width: 312px;
          }*/
      #menuLateral{
         width: 299px;
         background: #93lala;
         /*position: fixed;*/
         height: 100%;
      }
      #barraOcultar{
         width: 35px;
         background: #cecece;
         /*position: fixed;*/
         height: 100%;
      }
      #formularios{
         width: auto;
         background: #59c338;
         height: 100%;
         /*position: fixed;*/
      }
      #barraLateralSM{
         background: #FBFBFB;
         height: 100%;
         /*position: fixed;*/
         width: 47px;
      }
      #formulariosYbandejas{
         width: 100%;
      }
      .menu-float{
         width: 100%;
         margin-bottom: 10%;
         padding-top: 65%;
         padding-left: 2px;
         /*padding-bottom:10px;*/
         height: 100px;
         background: #427468;
         border-radius: 3px;
         /*border: 1px solid #000;*/
      }
      .menu-acciones{
         height: 70vh;
      }
      .ocultarPanelVisible{
         position: absolute;
         width: 40px;
         height: 40px;
         float: left;
         overflow: auto;
         left: 300px;
         top: 30vh;
         border: 1px solid #cecece;
         -webkit-border-radius: 6px;
         border-radius: 6px;
      }
      .ocultarPanelNone{
         position: absolute;
         width: 40px;
         height: 40px;
         float: left;
         overflow: auto;
         left: 0px;
         top: 30vh;
         border: 1px solid #cecece;
         -webkit-border-radius: 6px;
         border-radius: 6px;
      }
      .completa{
         left: 3%;
         width: 94%;
      }.compartida{
         left: 3%;
         width: 90%;
      }
      .btn-lg, .btn-group-lg > .btn {
         /*padding: 10px 16px;*/
         /*font-size: 18px;*/
         line-height: 1.33;
         border-radius: 6px;
         margin: 4%;
      }
      #listaAcciones li a{

      }
      #listaAcciones li a:hover{
         background: #cecece;
      }
      .posicionFixed{
         position: absolute;
         width: 356px;
         z-index: 999;
         margin-left: 9%;
      }
      div#contenedor-principal.container-fluid{
         margin-left: 200px;
      }
      div#contenedor-principal.container-fluid{
         margin-left: 0px;
      }
      div#contenedor-principal.container{
         padding: 0px;
         margin: 0px;
      }
      button#button-ocultar-fixed.btn.btn-default.hidden-xs.hidden-sm{
         position: absolute;
         left: 29.7%;
         height: 99%;
         width: 33px;
         top: 0px;
      }
      .cambiosDerecha{
         float: right;
      }
      .cambiosIzquierda{
         float: left;
      }
      .botonClickOcultar{
         left: -0.8% !important;
      }
      .botonClickMostrar{
         left: 32.4% !important;;
      }
      #botonesMenuAccionesLateralDer button{
         margin: 0px;
      }
      .divImagenMenuBotones{
         opacity: 0.8;
         width: 90%;
         border-radius: 11px; 
         border: 4px solid rgb(206, 206, 206);
      }
      .divImagenMenuBotones:hover{
         opacity: 1;
         cursor: pointer;
      }
      #menu-botones-float{
         z-index: 999;
      }

      .accionMenuAcciones{
         border: 0px;
         border-top: 1px solid #cecece !important;
         background: #EEEEEE !important;
         color:#786E72;
      }
      .accionMenuAcciones:hover{
         background: #881518 !important;
         color: #fff;
      }

      .texto-vertical{
         width:20px;
         word-wrap: break-word;
         text-align:center;
         line-height:20px;
      }
      .letra-texto-vertical{
         font-family: Helvetica, Arial, sans-serif;
         font-weight: bold;
         font-size: 25px;
         line-height: 1em;
         color: #881518;
         text-shadow: 1px 4px 6px #cecece, 0 0 0 #881518, 1px 4px 6px #eee;
      }
      /* Tooltip search arbol */
      .test + .tooltip > .tooltip-inner {
         background-color: rgba(136, 21, 24, 0.83); 
         color: #FFFFFF; 
         border: 1px solid #881518; 
         padding: 5px;
         font-size: 12px;
      }
      /* Tooltip search arbol on right */
      .test + .tooltip.right > .tooltip-arrow {
         border-right: 5px solid black;
      }
      @media print {
         table {
            border: solid #000 !important;
            border-width: 1px 0 0 1px !important;
         }
         th, td {
            border: solid #000 !important;
            border-width: 0 1px 1px 0 !important;
         }
      }
   </style>

   <link href="css/generalStyles.css" type="text/css" rel="stylesheet">
   <iframe id="frmExportar" name="frmExportar" style="display: none;"></iframe>
   <?php // print_r($_SESSION)  ?>
   <input type="hidden" id="hddIdReferenciaEnviar">
   <input type="hidden" id="hddCveTipoCarpetaEnviar">
   <input type="hidden" id="hddIdActuacionPadreEnviar">
   <input type="hidden" id="hddCveAdscripcion" value="<?php echo $_SESSION['cveAdscripcion']?>">
   <div id="container-principal" class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px; top: 20px;">
      <div id="menu-botones-float" class="hidden-lg col-lg-1 col-md-1 col-sm-1 col-xs-1 hidden-xs cambiosIzquierda">
         <div class="row">
            <div class="col-md-12">
               <!--<button class="btn btn-default btn-lg" type="button" id="expPenalIdCollapse">-->
                   <!--<i class="glyphicon glyphicon-star"></i>-->
               <div style="width: 75px;" id="expPenalIdCollapse" title="" data-original-title="" class="divImagenMenuBotones menuTooltipActuaciones tooltipsDerecha">
                  <span>Busqueda de expediente penal</span>
                  <img style="width: 100%;" src="img/arbol/menuBotones/ExpPenal.png">
               </div>
               <!--</button>-->
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div style="margin-bottom: 24px; width: 75px;" title="" data-original-title="" class="divImagenMenuBotones menuTooltipActuaciones tooltipsDerecha">
                  <span>Expediente Penal</span>
                  <img style="width: 100%;" src="img/arbol/menuBotones/ExpPenalArbol.png">
               </div>
            </div>
         </div>
         <div class="row para-tutorial" id="para-tutorial-menu-acciones-derecha">
            <div class="col-md-12">
               <div id="botonesMenuAccionesLateralDer" class="btn-group-vertical btn-group-lg" role="group" style="width: 70px;">
                  <div class="divImagenMenuBotones">
                     <img style="width: 100%;" src="img/arbol/SolPerito.png">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="col-id-all-completa" class="col-lg-12 col-md-12 col-sm-11 col-xs-12">
         <div class="row hidden-sm hidden-lg hidden-md para-tutorial" id="menu-para-xs-actuaciones" >
            <div class="col-md-12">
               <nav class="navbar navbar-default">
                  <div class="container-fluid">
                     <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="#">Menu de actuaciones</a>
                        <button id="subMenuActuaciones" class="navbar-toggle collapsed" data-target="#navcol-1" data-toggle="collapse">
                           <span class="sr-only">Tooggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                     </div>
                     <div id="navcol-1" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="listaAcciones">
                           <li class="active" role="presentation">
                              <a href="#">Uno</a>
                           </li>
                           <li class="active" role="presentation">
                              <a href="#">Dos</a>
                           </li>
                           <li class="active" role="presentation">
                              <a href="#">Tres</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div id="row-completo-all" class="row">
            <div class="col-lg-4" id="cambiarDiv12">
               <div id="para-tutorial-busqueda-penal" class="row para-tutorial">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title hidden-xs">Busqueda Penal</h3>
                           <a style="color: #fff;" class="" data-toggle="collapse" data-parent="#accordion" href="#collapseUno">
                              <h4 class="panel-title hidden-sm hidden-lg hidden-md">Expediente Penal</h4>
                           </a>
                        </div>
                        <div class="panel-body">
                           <div id="collapseUno" class="panel-collapse collapse in" aria-expanded="true">
                              <div class="" id="" style="">  
                                 <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                       <label class="control-label col-md-3" for="pwd">Juzgado</label>
                                       <div class="col-md-9">
                                          <select id="cmbJuzgadoArbol" name="cmbJuzgadoArbol" class="form-control text-uppercase cambiosDiv" onchange="filtrarTipoCarpetaTree()">
                                          </select>
                                       </div>
                                    </div>

                                    <div class="form-group" style="display:none" id="cmbTipoCarpetaForm">
                                       <label class="control-label col-md-3" for="pwd">Tipo Carpeta</label>
                                       <div class="col-md-9">
                                          <select id="cmbTipoCarpetaTree" name="cmbTipoCarpetaTree" class="form-control text-uppercase cambiosDiv" onchange="cambioDeTipoCarpeta()" >
                                          </select>
                                       </div>
                                    </div>

                                    <div class="form-group" style="display:none" id="txtNumeroTreeForm">
                                       <label class="control-label col-md-3" for="email">N&uacute;mero</label>
                                       <div class="col-md-9">
                                          <input type="text" id="txtNumeroTree" name="txtNumeroTree" data-required="requerido" placeholder="N&uacute;mero" class="cambiosDiv">
                                          /
                                          <input type="text" id="txtAnioTree" name="txtAnioTree" data-required="requerido" placeholder="A&ntilde;o" class="cambiosDiv" maxlength="4">
                                       </div>
                                    </div>
                                    <div class="form-group" style="display:none" id="txtNUCTreeForm">
                                       <label class="control-label col-md-3" for="pwd">NUC</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control text-uppercase cambiosDiv" id="txtNUCTree" name="txtNUCTree" placeholder="NUC">                                    
                                       </div>
                                    </div>                          
                                    <div class="form-group" style="display:none" id="txtNumCarpInvTreeForm">
                                       <label class="control-label col-md-3" for="pwd">Carpeta de Inv.</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control text-uppercase cambiosDiv" id="txtNumCarpInvTree" name="txtNumCarpInvTree" placeholder="Carpeta de Investigaci&oacute;n">
                                       </div>
                                    </div>                          

                                    <div class="form-group">
                                       <div class="col-md-offset-2 col-md-10">
                                          <button type="button" class="btn btn-primary" value="Guardar" id="btnConsultarArbol" name="btnConsultarArbol" onclick="getTree(0)" title="Boton para consultar" data-toggle="tooltip" >Consultar</button>
                                          <button type="button"  class="btn btn-primary" value="Limpiar" id="btnLimpiarArbolJ" name="btnLimpiarArbolJ" onclick="limpiarArbolJ()" title="Boton para limpiar el arbol judicial" data-toggle="tooltip">Limpiar</button>
                                       </div>
                                    </div>                          

                                 </form>
                                 <div class="form-group alerts-messages">
                                    <div id="divAlertWarningTree" class="alert alert-warning alert-dimdissable">                    
                                       <strong>Advertencia!</strong> Mensaje
                                    </div>
                                    <div id="divAlertSuccesTree" class="alert alert-success alert-dimdissable">

                                       <strong>Correcto!</strong> Mensaje
                                    </div>
                                    <div id="divAlertDagerTree" class="alert alert-danger alert-dimdissable">
                                       <strong>Error!</strong>
                                       <div class="divAlertTreeMsg"></div>
                                    </div>
                                    <div id="divAlertInfoTree" class="alert alert-info alert-dimdissable">

                                       <strong>Informaci&oacute;n!</strong> Mensaje
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="para-tutorial-busqueda-penal-arbol" class="row para-tutorial">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title hidden-xs">Expediente Penal</h3>
                           <a style="color: #fff;" data-toggle="collapse" data-parent="#accordion" href="#collapseArbol">
                              <h4 class="panel-title hidden-sm hidden-lg hidden-md">Arbol</h4>
                           </a>
                        </div>
                        <div class="panel-body">
                           <div id="collapseArbol" class="panel-collapse collapse in" aria-expanded="true">
                              <div style="min-width: 150px; min-height: 30px; height: auto; overflow: auto; padding-bottom: 30px;">
                                 <div class="form-inline" id="searchArbolContent" style="display: none;">
                                    <p>Buscar <input type="text" id="searchArbol" class="form-control input-sm"></input>
                                       &nbsp;<i data-toggle="tooltip_arbol_judicial" data-placement="right" title="Acuerdos, Oficios, Promociones, etc." class="test search-icon fa fa-question-circle"></i>
                                    </p>
                                 </div>
                                 <div id="divTree"></div>
                                 <div id="loadTree" style="text-align: center; display: none;"><img src="img/arbol/ajax-loader.gif"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="para-tutorial-menu-acciones" class="row hidden-xs hidden-sm hidden-md para-tutorial">
                  <div class="col-md-12" id="menuAccionesOcultar">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title">Menu Acciones</h3>
                           <a class=" hidden" data-toggle="collapse" data-parent="#accordion" href="#collapseMenuAcciones">
                              <h4>Arbol</h4>
                           </a>
                        </div>
                        <div class="panel-body">
                           <div id="collapseMenuAcciones" class="panel-collapse collapse in" aria-expanded="true">
                              <div class="btn-group-vertical btn-group-sm" role="group" style="width: 100%;">
                                 <div id="botonesAcciones" class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="dimensionarDe8-12" class="col-lg-8">
               <div class="row">
                  <div id="para-tutorial-busqueda-formulario" class="col-md-12 para-tutorial">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title hidden-md hidden-xs hidden-lg hidden-sm">Formularios</h3>
                           <a style="color: #fff;" data-toggle="collapse" data-parent="#accordion" href="#collapseFormularios">
                              <h3 class="panel-title">Formularios</h3>

                           </a>
                           <span id="infoAyuda" tuto="Tuto Arbol" key="Key Arbol" style="top: -16px;position: relative; cursor: help;" onclick="infoAyuda()" class="pull-right clickable hidden-xs" data-effect="fadeOut"><i class="fa fa-info-circle"></i></span>
                        </div>
                        <div class="panel-body">
                           <div id="collapseFormularios" class="panel-collapse collapse">
                              <div class="" id="divFrmTreeContenido" style="">                            
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="para-tutorial-busqueda-bandejas" class="col-md-12 para-tutorial">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title hidden-md hidden-xs hidden-lg hidden-sm bandejasH3">Bandejas</h3>
                           <a style="color: #fff;" data-toggle="collapse" data-parent="#accordion" href="#collapseBandejas">
                              <h3 class="panel-title linkBandejasH3">Bandejas</h3>
                           </a>
                        </div>
                        <div class="panel-body">
                           <div id="collapseBandejas" class="panel-collapse collapse">
                              <div class="panel-body" id="divBandejaTreeContenido">   

                                 <ul class="nav nav-tabs" role="tablist">
                                    <!--<li role="presentation" class="active"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Solicitudes de Audiencias</a></li>-->
                                    <li class="dropdown">
                                       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Solicitudes</a>
                                       <ul class="dropdown-menu">
                                          <li>
                                             <a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(0, 'Solicitudes de Audiencias', 2);">Solicitudes de Audiencias</a>
                                          </li>
                                          <li>
                                             <a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(0, 'Solicitudes de Cateo', 3);">Solicitudes de Cateo</a>
                                          </li>
                                          <li>
                                             <a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(0, 'Solicitudes de Ordenes de Aprehensi&oacute;n', 4);">Solicitudes de Ordenes de Aprehensi&oacute;n</a>
                                          </li>                                   
                                          <li>
                                             <a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(0, 'Solicitudes de peritos', 8);">Solicitudes de peritos</a>
                                          </li>

                                       </ul>
                                    </li>
                                    <li class="dropdown">
                                       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Actuaciones</a>
                                       <ul class="dropdown-menu">
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(6, 'Acta minima', 1);">Acta m&iacute;nima</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(2, 'Acuerdos', 1);">Acuerdos</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(33, 'Acuerdos de Radicaci&oacute;n', 1);">Acuerdos de Radicaci&oacute;n</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(23, 'Autos de apertura a juicio oral', 1);">Autos de apertura a juicio oral</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(5, 'Autos de vinculacion', 1);">Autos de vinculaci&oacute;n</a></li>
                                          <!--<li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(5, 'Beneficios', 1);">Beneficios</a></li>-->
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(26, 'Casos Relevantes', 1);">Casos Relevantes</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(11, 'Certificaciones', 1);">Certificaciones</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(16, 'Comparecencias', 1);">Comparecencias</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(8, 'Exhortos generados', 1);">Exhortos generados</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(19, 'Formulacion imputacion', 1);">Formulaci&oacute;n imputaci&oacute;n</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(9, 'Medidas cautelares', 1);">Medidas cautelares</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(14, 'Medidas de Proteccion', 1);">Medidas de Protecci&oacute;n</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(20, 'Notificaciones', 1);">Notificaciones</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(21, 'Notificaciones Electronicas', 1);">Notificaciones Electr&oacute;nicas</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(7, 'Oficios', 1);">Oficios</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(4, 'Ordenes', 1);">Ordenes</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(1, 'Promociones', 1);">Promociones</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(13, 'Promociones de Temino', 1);">Promociones de T&eacute;mino</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(17, 'Promociones que generan carpeta judicializada', 1);">Promociones que generan carpeta judicializada</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(3, 'Sentencias', 1);">Sentencias</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(24, 'Suspencion condicional', 1);">Suspensi&oacute;n condicional</a></li>
                                          <li><a data-toggle="tab" href="divBandejaResult" aria-controls="divBandejaResult" onclick="changeTray(0, 'Video audiencias', 1);">Video audiencias</a></li>
                                       </ul>
                                    </li>
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Promociones</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Promociones de Temino</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Solicitud de Cateo</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Solicitud de Ordenes de Aprehensi&oacute;n</a></li>-->
                                    <li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab" onclick="changeTray(0, 'Exhortos', 6);">Exhortos</a></li>
                                    <li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab" onclick="changeTray(0, 'Amparos', 7);">Amparos</a></li>
                                    <li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Apelaciones</a></li>
                                    <li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Acciones penales Privadas</a></li>
                                    <li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Incompetencias</a></li>
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Notificaciones</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Causas a remitir al archivo judicial</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Solicitud de devolucion de grantias</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Solicitud de peritos</a></li>-->
                                    <!--<li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab">Exhortos generados</a></li>-->
                                    <li role="presentation"><a href="#divBandejaResult" aria-controls="divBandejaResult" role="tab" data-toggle="tab" onclick="changeTray(0, 'Alertas de ingresos al Cereso', 5);">Alertas de ingresos al Cereso</a></li>
                                 </ul>

                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="divBandejaResult" style="height: auto;">                                                                       
                                       <div id="divHeadConsulta">
                                          <table style="width: 100%;">
                                             <tr>
                                                <td>
                                                   <input type="hidden" id="hddTipoChangeTray" value="">
                                                   <span id="spanTitleBandeja"></span>
                                                   <input type="hidden" value="" id="idkindTray" name="idkindTray">
                                                </td>
                                                <td>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <!--                                                               <div class="form-group" style="display:none" id="cmbTipoCarpetaForm">
                                                                                                                           <label class="control-label col-md-3" for="pwd">Tipo Carpeta</label>
                                                                                                                           <div class="col-md-9">
                                                                                                                               <select id="cmbTipoCarpetaTree" name="cmbTipoCarpetaTree" class="form-control text-uppercase cambiosDiv" onchange="cambioDeTipoCarpeta()" >
                                                                                                                               </select>
                                                                                                                           </div>
                                                                                                                       </div>-->
                                                   <div class="form-group">
                                                      <label class="control-label col-md-4" for="pwd">Durante el periodo del </label>
                                                      <div class="col-md-3">
                                                         <input class="form-control"  type="text" id="txtFecInicioBandeja" readonly="true" name="txtFecInicioBandeja" size="11" value="<?php echo $fechaActual; ?>">
                                                      </div>
                                                      <label class="control-label col-md-1" for="pwd"> al </label>
                                                      <div class="col-md-3">
                                                         <input readonly="true" class="form-control" type="text" id="txtFecFinBandeja" name="txtFecFinBandeja" value="<?php echo $fechaActual; ?>" size="11">
                                                      </div>

                                                   </div>
                                                </td>
                                                <td>
                                                   <button type="button" class="btn btn-primary" value="Guardar" id="btnConsultarArbolBandejas" name="btnConsultarArbol" onclick="changeTray($('#idkindTray').val(), $('#spanTitleBandeja').html(), $('#hddTipoChangeTray').val())" tabIndex="11" title="Boton para consultar Bandejas" data-toggle="tooltip" >Consultar</button>
                                                   <button type="button" class="btn btn-primary" value="Imprimir" id="btnConsultarPrint" name="btnConsultarPrint" onclick="printBandeja()" tabIndex="11" title="Boton para imprimir Bandeja" data-toggle="tooltip" >Imprimir</button>
                                                   <button type="button" class="btn btn-primary" value="Exportar" id="btnConsultarExport" name="btnConsultarExportar" onclick="exportBandeja(this)" tabIndex="11" title="Boton para exportar Bandeja" data-toggle="tooltip" >Exportar</button>
                                                </td>
                                             </tr>
                                          </table>
                                       </div>
                                       <div class="form-group">
                                          <div id="divAlertWarningBandejas" class="alert alert-warning alert-dismissable">                    
                                             <strong>Advertencia!</strong> Mensaje
                                          </div>
                                          <div id="divAlertSuccesBandejas" class="alert alert-success alert-dismissable">

                                             <strong>Correcto!</strong> Mensaje
                                          </div>
                                          <div id="divAlertDagerBandejas" class="alert alert-danger alert-dismissable">

                                             <strong>Error!</strong> Mensaje
                                          </div>
                                          <div id="divAlertInfoBandejas" class="alert alert-info alert-dismissable">

                                             <strong>Informaci&oacute;n!</strong> Mensaje
                                          </div>
                                       </div>
                                       <div id="divDataTableResults">

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
      </div>
      <div class="para-tutorial" id="btn-para-tutorial-ac">
         <button  style="margin: 0; padding: 0;" posicionLinea="centro" id="button-ocultar-fixed" class="btn  btn-default hidden-xs hidden-sm hidden-md botonClickMostrar para-tutorial" type="button">
            <div id="texto-vertical-letra-cerrar">
               <div class="letra-texto-vertical">C</div>
               <div class="letra-texto-vertical">e</div>
               <div class="letra-texto-vertical">r</div>
               <div class="letra-texto-vertical">r</div>
               <div class="letra-texto-vertical">a</div>
               <div class="letra-texto-vertical">r</div>
            </div>
            <div id="texto-vertical-letra-abrir" style="display: none;">
               <div class="letra-texto-vertical">A</div>
               <div class="letra-texto-vertical">b</div>       
               <div class="letra-texto-vertical">r</div>
               <div class="letra-texto-vertical">i</div>
               <div class="letra-texto-vertical">r</div>
            </div>
         </button>
      </div>

   </div>
   </div>


   <script type="text/javascript">
      var tutoOption;
      var tutoOptionXS;
      // Wrap IIFE around your code
      (function ($, viewport) {
         $(document).ready(function () {
            fechaBaseDatos({
               txtAnioTree: "anio"
            });
            $("#btnConsultarPrint").prop("disabled", true);
            $("#btnConsultarExport").prop("disabled", true);
            $("#txtNumeroTree , #txtAnioTree").keypress(function (key) {
               ////alert(key.charCode);
               //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
               if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32))
                  return false;
            });
            document.cookie = "tutorial=no";
            $("#navcol-1").collapse('hide');
            $("#listaAcciones").click(function () {
   //                alert("click 1");
               $("#navcol-1").collapse('hide');
            });
            $("#menuPrincipalSigejupe").click(function () {
   //                alert("click 2");
               $("#navcol-1").collapse('hide');
               $("#subMenuActuaciones").click();
            });
            $(".menuTooltipActuaciones").tooltip();
            $("#txtFecInicioBandeja").datetimepicker(
                    {
                       sideBySide: false,
                       locale: 'es',
                       ignoreReadonly: true,
                       format: "DD/MM/YYYY"

                    }
            );
            $("#txtFecFinBandeja").datetimepicker(
                    {
                       sideBySide: false,
                       locale: 'es',
                       ignoreReadonly: true,
                       format: "DD/MM/YYYY"

                    }
            );

            $("#txtFecInicioBandeja").on("dp.change", function (e) {
   //               $("#txtFecFinBandeja").focusout();
               $('#txtFecFinBandeja').data("DateTimePicker").minDate(e.date);
               $(this).datetimepicker('hide');
               $(this).datetimepicker('hide');
               $("#btnConsultarArbolBandejas").focus();
   //               $("#txtFecFinBandeja").click();
            });
            $("#txtFecFinBandeja").on("dp.change", function (e) {
   //               $("#txtFecInicioBandeja").focusout();
               $('#txtFecInicioBandeja').data("DateTimePicker").maxDate(e.date);
               $(this).datetimepicker('hide');
               $(this).datetimepicker('hide');
               $("#btnConsultarArbolBandejas").focus();
   //               $("#txtFecInicioBandeja").click();
            });
   //            $("#txtFecInicioBandeja").click(function (){
   //               $(".day").click(function(){
   //                  $("#txtFecFinBandeja").focus();                  
   //               });
   //            });
   //            $("#txtFecFinBandeja").click(function (){;
   //               $(".day").click(function(){
   //                  $("#txtFecInicioBandeja").focus();                  
   //               });
   //            });
            $("#expPenalIdCollapse").click(function () {
               if ($("#collapseUno").is(":visible")) {
                  $("#collapseUno").collapse("hide");
               }
               $("#collapseUno").collapse("show");
            });
            $("#expPenalIdCollapse").click(function () {
               if ($("#collapseArbol").is(":visible")) {
                  $("#collapseArbol").collapse("hide");
               }
            });
   //                ////alert("HOLA");
            // Executes only in XS breakpoint
            if (viewport.is('xs')) {
               tutoOption = "XS";
               tutoOptionXS = "XS";
               // ...
               console.log("xs-2");
            }

            // Executes in SM, MD and LG breakpoints
            if (viewport.is('>=sm')) {
               tutoOption = "SM";
               $("#collapseUno").collapse('show');
               console.log(">=sm-2");
   //                alert(">=sm-2");
               $(".menuTooltipActuaciones ").removeClass("tooltipsIzquierda");
               $(".menuTooltipActuaciones ").addClass("tooltipsDerecha");
               $("#col-id-all-completa").removeClass("col-lg-12");
               $("#col-id-all-completa").removeClass("col-md-12");
               $("#col-id-all-completa").addClass("col-lg-11");
               $("#col-id-all-completa").addClass("col-md-11");
               // ...
   //                $("#collapseUno").collapse('hide');
            }

            // Executes in XS and SM breakpoints
            if (viewport.is('<=md')) {
               tutoOption = "MD";
               $("#col-id-all-completa").removeClass("col-lg-12");
               $("#col-id-all-completa").removeClass("col-md-12");
               $("#col-id-all-completa").addClass("col-lg-11");
               $("#col-id-all-completa").addClass("col-md-11");
               console.log("<=md-3");
   //                alert("<=md-3");
               $(".menuTooltipActuaciones ").removeClass("tooltipsIzquierda");
               $(".menuTooltipActuaciones ").addClass("tooltipsDerecha");
               // ...
            }
            // Executes in XS and SM breakpoints
            if (viewport.is('>=lg')) {
               console.log(">=lg-4");
               tutoOption = "LG";
               // ...
               $("#collapse")
               $("#collapseUno").collapse('show');
               $("#collapseArbol").collapse('show');
               $("#collapseBandejas").collapse('show');
               $(".menuTooltipActuaciones ").removeClass("tooltipsDerecha");
               $(".menuTooltipActuaciones ").addClass("tooltipsIzquierda");
               $("#col-id-all-completa").removeClass("col-lg-11");
               $("#col-id-all-completa").removeClass("col-md-11");
               $("#col-id-all-completa").addClass("col-lg-12");
               $("#col-id-all-completa").addClass("col-md-12");
            }

            // Execute code each time window size changes
            $(window).resize(
                    viewport.changed(function () {
                       if (viewport.is('xs')) {
                          // ...

                          console.log(" OTRO xs-5");
                          //alert(" OTRO xs-5");
                       }
                       if (viewport.is('>=sm')) {
                          $("#col-id-all-completa").removeClass("col-lg-12");
                          $("#col-id-all-completa").removeClass("col-md-12");
                          $("#col-id-all-completa").addClass("col-lg-11");
                          $("#col-id-all-completa").addClass("col-md-11");
                          // ...
                          //alert(">=sm");
   //                            $("#menu-botones-float").removeClass("cambiosDerecha");
   //                            $("#menu-botones-float").addClass("cambiosIzquierda");
   //                            $("#menu-botones-float").show();
   //                            $("#collapseUno").collapse('hide');
                       }
                       if (viewport.is('<=md')) {
                          $("#col-id-all-completa").removeClass("col-lg-12");
                          $("#col-id-all-completa").removeClass("col-md-12");
                          $("#col-id-all-completa").addClass("col-lg-11");
                          $("#col-id-all-completa").addClass("col-md-11");
   //                            alert("SDF");
                          $(".menuTooltipActuaciones ").removeClass("tooltipsIzquierda");
                          $(".menuTooltipActuaciones ").addClass("tooltipsDerecha");
                          // ...
                          console.log("md-6");
                          //alert("<=md-6");
                          $("#menu-botones-float").show();
                          $(".menuTooltipActuaciones ").removeClass("tooltipsIzquierda");
                          $(".menuTooltipActuaciones ").addClass("tooltipsDerecha");
                          console.log(" **** muestra botones");

                          if ($("#menu-botones-float").is(":visible")) {
                             console.log(" **** botones visible");
                             //alert("visible LG 7 *** ");
                             if ($("#button-ocultar-fixed").attr("posicionLinea") == "izquierda") {
                                console.log(" *** botones visible izquierda click");
                                $("#col-id-all-completa").removeClass("col-lg-12");
                                $("#col-id-all-completa").removeClass("col-md-12");
                                $("#col-id-all-completa").addClass("col-lg-11");
                                $("#col-id-all-completa").addClass("col-md-11");
                                $("#button-ocultar-fixed").click();
                                $("#menu-botones-float").show();
                                $("#menu-botones-float").removeClass("cambiosDerecha");
                                $("#menu-botones-float").addClass(".cambiosIzquierda");
                             } else {
                                console.log(" *** botones visible hide");
                                $("#menu-botones-float").show();
                                $("#menu-botones-float").removeClass("cambiosDerecha");
                                $("#menu-botones-float").addClass(".cambiosIzquierda");

                                //alert("#$###################################");
                             }
   //                                $("#button-ocultar-fixed").hide();
                          }
   //                            //alert("muestra botones");
                       }
                       if (viewport.is('>=lg')) {
                          $("#col-id-all-completa").removeClass("col-lg-11");
                          $("#col-id-all-completa").removeClass("col-md-11");
                          $("#col-id-all-completa").addClass("col-lg-12");
                          $("#col-id-all-completa").addClass("col-md-12");
                          // ...
                          console.log("lg-7");
                          $(".menuTooltipActuaciones ").removeClass("tooltipsDerecha");
                          $(".menuTooltipActuaciones ").addClass("tooltipsIzquierda");
                          //alert(" attr " + $("#button-ocultar-fixed").attr("posicionLinea"));
                          //alert(">=lg-7");
   //                            $("#menu-botones-float").hide();
                          if ($("#menu-botones-float").is(":visible")) {
                             console.log("botones visible");
                             //alert("visible LG 7 *** ");
                             if ($("#button-ocultar-fixed").attr("posicionLinea") == "izquierda") {
                                console.log("botones visible izquierda click");
                                $("#button-ocultar-fixed").click();
                             } else {
                                console.log("botones visible hide");
                                $("#menu-botones-float").hide();
                                //alert("#$###################################");
                             }
   //                                $("#button-ocultar-fixed").hide();
                          } else {
                             //alert(" LG ???? show");
   //                                $("#menu-botones-float").removeClass("cambiosIzquierda");
   //                                $("#menu-botones-float").addClass("cambiosDerecha");
   //                                $("#menu-botones-float").hide();
   //                                $("#menu-botones-float").show();
                          }
   //                            $("#menu-botones-float").hide();
                       }
                    }, 100)
                    );
         });
      })(jQuery, ResponsiveBootstrapToolkit);
      var botonSMExpediente = false;
      var botonSMExpedienteDerecha = false;
      var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
      var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
      var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;

      changeTray = function (param, name, tipo) {
   //            ////alert(param);
   //            ////alert(name);
   //            ////alert(tio);
         console.log("###################################################################");
         console.log(param);
         $("#idkindTray").val(param);
         $("#spanTitleBandeja").html(name);
         $("#hddTipoChangeTray").val(tipo);
         tipo = parseInt(tipo);
   //            ////alert(tipo == 2);
         switch (tipo) {
            case 1:
               consultaBandeja(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 2:
   //                    ////alert("consultaBandejaSolicitud -- 2");
               consultaBandejaSolicitud(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 3:
               consultaBandejaSolicitudCateo(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 4:
               consultaBandejaSolicitudOrden(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 5:
               consultaBandejaIngresoCereso(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 6:
               consultaBandejaExhortos(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 7:
               consultaBandejaAmparos(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            case 8:
               consultaBandejaPeritos(param);
               $("#btnConsultarPrint").prop("disabled", false);
               $("#btnConsultarExport").prop("disabled", false);
               break;
            default:
               $("#divAlertInfoBandejas").html("Selecciona una bandeja");
               $("#divAlertInfoBandejas").show("slide");
               setTimeAlert("divAlertInfoBandejas");
               break;
         }
      }
      function setCookie(cname, cvalue, exdays) {
         var d = new Date();
         d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
         var expires = "expires=" + d.toUTCString();
         document.cookie = cname + "=" + cvalue + "; " + expires;
      }
      function getCookie(cname) {
         var name = cname + "=";
         var ca = document.cookie.split(';');
         for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
               c = c.substring(1);
            if (c.indexOf(name) == 0)
               return c.substring(name.length, c.length);
         }
         return "";
      }
      function sleep(ms) {
         var unixtime_ms = new Date().getTime();
         while (new Date().getTime() < unixtime_ms + ms) {
         }
      }
      tutorial = function (irA, operacion) {
         console.log(irA);
         console.log(operacion);
         console.log("Despues del otro sleep");
         if (irA != null) {
            console.log("COOKIE");
            console.log(document.cookie);
            console.log(getCookie("tutorial"));
            if (getCookie("tutorial") == "ya") {
               console.log("Ya se hizo no aplica");
            } else {
               console.log("aplica");
   //                alert("tiene que ir a" + irA);
               introJs().exit();
               console.log("despues de delay");
               introJs().setOptions({
                  'nextLabel': 'siguiente',
                  'prevLabel': 'anterior',
                  'skipLabel': 'Salir',
                  'doneLabel': 'Terminar'
               }).goToStep(irA).start();
               $(".introjs-tooltipbuttons").css("display", "");
               document.cookie = "tutorial=ya";
            }
         } else {
   //            alert("no tiene que ir a ningun lado");
            introJs().setOptions({
               'nextLabel': 'siguiente',
               'prevLabel': 'anterior',
               'skipLabel': 'Salir',
               'doneLabel': 'Terminar'
            }).onchange(function () {
               if (operacion != null) {
   //                    alert("cambia con " + operacion);
                  if ($(".introjs-helperNumberLayer").text() == (operacion - 1)) {
   //                        alert("elimina botones");
                     console.log($(".introjs-tooltipbuttons"));
                     $(".introjs-tooltipbuttons").css("display", "none");
                  } else {
                     $(".introjs-tooltipbuttons").css("display", "");
                  }
               } else {
   //                    alert("no cambia nada");                                        
               }
            }).start();
         }
         console.log("ANtes del zoom");
   //        window.parent.document.body.style.zoom = 30;
         console.log("despues del zoom");
      };
      infoAyuda = function () {

         try {
            regresar();
            changeDivForm(1);
            changeDivForm(2);
         } catch (err) {
            console.log("Try");
            console.log(err);
         }
         document.cookie = "tutorial=no";
   //        alert("Info ayuda");
   //        alert($("#infoAyuda").attr('tuto'));
   //        alert($("#infoAyuda").attr('key'));
         if (tutoOption == "LGizq") {
   //            alert("TUTO LG IZQ")
            tutoLGIzq();
         } else if (tutoOption == "LG") {
   //            alert("TUTO LG");
            tutoLG();
         } else if (tutoOption == "MD") {
   //            alert("TUTO MD");
            tutoMD();
         } else if (tutoOption == "XS" && tutoOptionXS != null) {
   //            alert("TUTO XS");
   //            alert(tutoOptionXS);
            tutoXS();
         } else if (tutoOption == "FORMULARIO") {
            console.log("FORMULARIO");

         }
         if ($("#infoAyuda").attr('tuto') === "Tuto Arbol") {
            tutorial(null, null);
         } else {
   //            $(".para-tutorial").removeAttr("data-step");
   //            $(".para-tutorial").removeAttr("data-intro");
            tutorial(null, null);
   //            introJs().setOptions({ 'nextLabel': 'siguiente', 'prevLabel': 'anterior', 'skipLabel': 'Salir', 'doneLabel': 'Terminar' }).start();  
         }
   //        window.open('tutoriales/tuto_'+$("#infoAyuda").attr('tuto') + '.pdf', '_blank');
      }
      getTree = function (limpiar) {
         $("#hddIdActuacionPadre").val("");
         console.log(limpiar);
         movermeA("collapseArbol", "centro");
         if (limpiar != undefined)
            $("#divFrmTreeContenido").empty();
         // obteniendo valores de combos e inputs para criterio de busqueda

         //$('#btnConsultarArbol').attr('disabled', true);
         $("#divAlertDagerTree").slideUp();
         $("#searchArbolContent").hide();
         $("#divTree").empty();
         $("#searchArbol").val("");
         // Juzgado
         var cmbJuzgadoArbol = $("option:selected", $("#cmbJuzgadoArbol")).val();
         cmbJuzgadoArbol = (cmbJuzgadoArbol != 0) ? cmbJuzgadoArbol : "0";
         if (cmbJuzgadoArbol == 0) {
            // no se selecciono juzgado, mostrar error y terminar
            $("#divAlertDagerTree .divAlertTreeMsg").html('');
            $("#divAlertDagerTree .divAlertTreeMsg").html('Debes seleccionar el Juzgado');
            $("#divAlertDagerTree").slideDown();
            return false;
         }

         // Tipo juzgado
         var tipoJuzgado = $("option:selected", $("#cmbJuzgadoArbol")).attr('tipojuzgado');

         // Numero y anio
         var txtNumeroTree = $("#txtNumeroTree").val();
         var txtAnioTree = $("#txtAnioTree").val();

         // NUC
         var txtNUCTree = $("#txtNUCTree").val();

         // Carpeta de investigaci&ocute;n 
         var txtNumCarpInvTree = $("#txtNumCarpInvTree").val();

         // Tipo de carpeta
         var cmbTipoCarpetaTree = $("option:selected", $("#cmbTipoCarpetaTree")).val();
         var txtcmbTipoCarpetaTree = $("option:selected", $("#cmbTipoCarpetaTree")).text();
         cmbTipoCarpetaTree = (cmbTipoCarpetaTree != 0) ? cmbTipoCarpetaTree : "0";

         if (cmbTipoCarpetaTree == 0) {
            // no se selecciono tipo carpeta
            // campos requeridos
            if (txtNumeroTree == 0 || txtAnioTree == 0) {
               $("#divAlertDagerTree .divAlertTreeMsg").html('');
               $("#divAlertDagerTree .divAlertTreeMsg").html('Debes introducir el n&uacute;mero y el a&ntilde;o');
               $("#divAlertDagerTree").slideDown();
               return false;
            } else {
               // BUSCAR con juzgado seleccionado, numero y anio las diferentes tipos de carpetas que tenga el combo
               var tiposCarpetasDeJuzgado = [];
               $('#cmbTipoCarpetaTree').children('option').each(function () {
                  if ($(this).css('display') != 'none' && $(this).val() != 0) {
                     tiposCarpetasDeJuzgado.push($(this).val());
                  }
               });

               // envio AJAX
               $.ajax({
                  type: "POST",
                  url: "../fachadas/sigejupe/arbol/ArbolFacade.Class.php",
                  data: {
                     accion: "getAllCarpetasFromJuzgado",
                     cveJuzgado: cmbJuzgadoArbol,
                     numero: txtNumeroTree,
                     anio: txtAnioTree,
                     tiposCarpetasDeJuzgado: tiposCarpetasDeJuzgado
                  },
                  //async: false,
                  dataType: "json",
                  beforeSend: function () {
                     $('#btnConsultarArbol').attr('disabled','disabled');
                     $("#divTree").empty();
                     $("#loadTree").show();
                  },
                  success: function (datos) {
                     switch (datos.estatus) {
                        case "ok" :
                           $('#divTree').html('');
                           var content = '<div class="table-responsive">';
                           content += '<p>Carpetas encontradas<strong> Numero:' + txtNumeroTree + ' A&ntilde;o:' + txtAnioTree + '</strong></p>';
                           content += '<table class="table table-striped table-bordered">';
                           content += '<thead style="text-align: center;"><tr><td>No.</td><td>Tipo de carpeta</td><td>Fecha Radicacion</td><td>Accion</td></tr></thead>';
                           content += '<tbody>';
                           var contador = 1;
                           $.each(datos.resultados, function (key, element) {
                              content += '<tr>';
                              content += '<td>' + contador + '</td>';
                              contador++;
                              content += '<td>' + element.descripcionCarpeta + '</td>';
                              var date = element.fecha.split(' ');
                              var fecha = date[0].split('-');
                              var anio = fecha[0];
                              var mes = fecha[1];
                              var dia = fecha[2];
                              content += '<td>' + dia + '/' + mes + '/' + anio + '</td>';
                              content += '<td style="text-align: center;">';
                              content += '<button type="button" class="btn btn-default btn-xs" onclick="setTreeParams(' + element.cveJuzgado + ',' + element.tipoCarpeta + ',' + element.numero + ',' + element.anio + ')">Consultar</button>';
                              content += '</td>';
                              content += '</tr>';
                           });
                           content += '</tbody>';
                           content += '</table>';
                           content += '</div>';
                           $('#divTree').append(content);
                           break;
                        case "fail" :
                           $('#divTree').html("No se encontraron resultados");
                           break;
                     }
                  }, complete: function () {
                     $("#loadTree").hide();
                     $('#btnConsultarArbol').removeAttr('disabled');
                  },
                  error: function (objeto, quepaso, otroobj) {
                  },
               });
            }
         } else {
            // se selecciono un tipo de carpeta
            if (cmbTipoCarpetaTree == 8 || cmbTipoCarpetaTree == 7) {
               // selecciono Amparo o Exhorto
               if (cmbTipoCarpetaTree == 8) {
                  var descripcionTipoCarpeta = 'Amparos';
               } else {
                  var descripcionTipoCarpeta = 'Exhortos';
               }
               // campos requeridos
               if (txtNumeroTree == 0 || txtAnioTree == 0) {
                  $("#divAlertDagerTree .divAlertTreeMsg").html('');
                  $("#divAlertDagerTree .divAlertTreeMsg").html('Debes introducir el n&uacute;mero y el a&ntilde;o');
                  $("#divAlertDagerTree").slideDown();
                  return false;
               } else {
                  // se va a BUSCAR juzgado, AMPARO o EXHORTO
                  // envio AJAX
                  $.ajax({
                     type: "POST",
                     url: "../fachadas/sigejupe/arbol/ArbolFacade.Class.php",
                     data: {
                        accion: "getFullTree",
                        cveJuzgado: cmbJuzgadoArbol,
                        tipoJuzgado: tipoJuzgado,
                        numero: txtNumeroTree,
                        anio: txtAnioTree,
                        nuc: txtNUCTree,
                        numCarpInv: txtNumCarpInvTree,
                        cveTipoCarpeta: cmbTipoCarpetaTree
                     },
                     //async: false,
                     dataType: "json",
                     beforeSend: function () {
                        $("#divTree").empty();
                        $("#loadTree").show();
                     },
                     success: function (datos) {
                        switch (datos.estatus) {
                           case "ok" :
                              $('#divTree').jstree("destroy");
                              $('#divTree').jstree({
                                 'core': {
                                    'data': datos.resultados,
                                    'themes': {"stripes": true},
                                    'check_callback': true
                                 },
                                 'plugins': ["search", "wholerow", "contextmenu", "sort"],
                                 'types': {
                                    "file": {
                                       "icon": "jstree-file"
                                    }
                                 },
                                 'search': {
                                    "show_only_matches": true
                                 },
                                 'contextmenu': {
                                    'items': getItemsContextArbolJudicial
                                 },
                                 'sort': function (a, b) {
                                    return this.get_node(a).li_attr.dataFechaOrden < this.get_node(b).li_attr.dataFechaOrden ? 1 : -1;
                                 }
                              }).on('ready.jstree', function (e, data) {
                                 // la carpeta seleccionada sera aquella por la que se inicio la busqueda, marcada con la clase "carpetaInicial"
                                 var li_inicial = $('#divTree').find('.carpetaInicial');
                                 $('#divTree').jstree('select_node', $(li_inicial));
                                 $('#divTree').jstree('open_node', $(li_inicial));
                                 // colocar id en hddIdReferenciaEnviar
                                 var hddidReferencia = $('#divTree').find('ul > li.carpetaInicial').attr('id');
                                 var hddcveTipoCarpeta = $('#divTree').find('ul > li.carpetaInicial').attr('datacvetipocarpeta');
                                 $('#hddIdReferenciaEnviar').val(hddidReferencia);
                                 $('#hddCveTipoCarpetaEnviar').val(hddcveTipoCarpeta);
                                 // copiar nodos de acuerdos que aplican a varias promociones
                                 if (datos.multi_promo != '') {
                                    $(datos.multi_promo).each(function (index, element) {
                                       $("#divTree").jstree("copy", "#" + element.acuerdo);
                                       $("#divTree").jstree("paste", "#" + element.promocion);
                                    });
                                 }
                              });
                              // input de busqueda en arbol
                              var to = false;
                              $('#searchArbol').keyup(function () {
                                 if (to) {
                                    clearTimeout(to);
                                 }
                                 to = setTimeout(function () {
                                    var v = $('#searchArbol').val();
                                    $('#divTree').jstree(true).search(v);
                                 }, 250);
                              });
                              $("#searchArbolContent").show();
                              break;
                           case "fail" :
                              $('#divTree').jstree("destroy");
                              $('#divTree').html(datos.mnj);
                              break;
                        }
                     }, complete: function () {
                        $("#loadTree").hide();
                     },
                     error: function (objeto, quepaso, otroobj) {
                     },
                  });
               }
            } else if(cmbTipoCarpetaTree == 1 || cmbTipoCarpetaTree == 2 || cmbTipoCarpetaTree == 3 || cmbTipoCarpetaTree == 4 || cmbTipoCarpetaTree == 5 || cmbTipoCarpetaTree == 6){
               // SE BUSCA EN CARPETA JUDICIAL
               // condiciones: se debe introducir NUC o Carpeta de investigacion, de lo contrario el numero y anio son requeridos
               var valido = false;
               if (txtNUCTree != 0 || txtNumCarpInvTree != 0) {
                  valido = true;
               } else if (txtNumeroTree != 0 && txtAnioTree != 0) {
                  valido = true;
               }
               if (valido === false) {
                  $("#divAlertDagerTree .divAlertTreeMsg").html('');
                  $("#divAlertDagerTree .divAlertTreeMsg").html('Debes introducir el n&uacute;mero y el a&ntilde;o &oacute; en su defecto NUC &oacute; Carpeta de Investigaci&oacute;n');
                  $("#divAlertDagerTree").slideDown();
                  return false;
               }

               // envio AJAX
               $.ajax({
                  type: "POST",
                  url: "../fachadas/sigejupe/arbol/ArbolFacade.Class.php",
                  data: {
                     accion: "getFullTree",
                     cveJuzgado: cmbJuzgadoArbol,
                     tipoJuzgado: tipoJuzgado,
                     numero: txtNumeroTree,
                     anio: txtAnioTree,
                     nuc: txtNUCTree,
                     numCarpInv: txtNumCarpInvTree,
                     cveTipoCarpeta: cmbTipoCarpetaTree
                  },
                  //async: false,
                  dataType: "json",
                  beforeSend: function () {
                     $("#divTree").empty();
                     $("#loadTree").show();
                  },
                  success: function (datos) {
                     switch (datos.estatus) {
                        case "ok" :
                           $('#divTree').jstree("destroy");
                           $('#divTree').jstree({
                              'core': {
                                 'data': datos.resultados,
                                 'themes': {"stripes": true},
                                 'check_callback': true
                              },
                              'plugins': ["search", "wholerow", "contextmenu", "sort"],
                              'types': {
                                 "file": {
                                    "icon": "jstree-file"
                                 }
                              },
                              'search': {
                                 "show_only_matches": true
                              },
                              'contextmenu': {
                                 'items': getItemsContextArbolJudicial
                              },
                              'sort': function (a, b) {
                                 return this.get_node(a).li_attr.dataFechaOrden < this.get_node(b).li_attr.dataFechaOrden ? 1 : -1;
                              }
                           }).on('ready.jstree', function (e, data) {
                              // la carpeta seleccionada sera aquella por la que se inicio la busqueda, marcada con la clase "carpetaInicial"
                              var li_inicial = $('#divTree').find('.carpetaInicial');
                              $('#divTree').jstree('select_node', $(li_inicial));
                              $('#divTree').jstree('open_node', $(li_inicial));
                              // colocar id en hddIdReferenciaEnviar
                              var hddidReferencia = $('#divTree').find('ul > li.carpetaInicial').attr('id');
                              var hddcveTipoCarpeta = $('#divTree').find('ul > li.carpetaInicial').attr('datacvetipocarpeta');
                              $('#hddIdReferenciaEnviar').val(hddidReferencia);
                              $('#hddCveTipoCarpetaEnviar').val(hddcveTipoCarpeta);
                              // copiar nodos de acuerdos que aplican a varias promociones
                              if (datos.multi_promo != '') {
                                 $(datos.multi_promo).each(function (index, element) {
                                    $("#divTree").jstree("copy", "#" + element.acuerdo);
                                    $("#divTree").jstree("paste", "#" + element.promocion);
                                 });
                              }
                           });
                           // input de busqueda en arbol
                           var to = false;
                           $('#searchArbol').keyup(function () {
                              if (to) {
                                 clearTimeout(to);
                              }
                              to = setTimeout(function () {
                                 var v = $('#searchArbol').val();
                                 $('#divTree').jstree(true).search(v);
                              }, 250);
                           });
                           $("#searchArbolContent").show();
                           break;
                        case "fail" :
                           $('#divTree').jstree("destroy");
                           $('#divTree').html(datos.mnj);
                           break;
                     }
                  }, complete: function () {
                     $("#loadTree").hide();
                  },
                  error: function (objeto, quepaso, otroobj) {
                  },
               });
            }else{
               $("#divAlertDagerTree .divAlertTreeMsg").html('');
               $("#divAlertDagerTree .divAlertTreeMsg").html('No se puede iniciar una busqueda con este tipo de carpeta, por favor contacta al administrador del sistema');
               $("#divAlertDagerTree").slideDown();
               return false;
            }
         }
         $("li.jstree-node").attr("role", "treeitem").click(function () {
            $("#hddIdReferenciaEnviar").val(this.id);
            $("#hddIdActuacionPadreEnviar").val("");
         });
      };
      setCarpetaOrigen = function (id, cveTipoCarpeta,cveJuzgado = 0) {
         $("#hddIdReferenciaEnviar").val(id);
         $("#hddCveTipoCarpetaEnviar").val(cveTipoCarpeta);
         $("#hddIdActuacionPadreEnviar").val(" ");
         // mandar a actualizar carpeta
         loadFormCarpeta(id, cveTipoCarpeta,cveJuzgado);
      };
      limpiarArbolJ = function (e) {
         $("#hddIdReferenciaEnviar").val("");
         $("#hddCveTipoCarpetaEnviar").val("");
         $("#hddIdActuacionPadreEnviar").val("");
         $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);

         $('#txtNumCarpInvTreeForm').slideUp();

         $("#txtNUCTreeForm").slideUp();
         $("#txtNumCarpInvTreeForm").slideUp();
         $("#txtNumeroTree").val("");
         $("#txtAnioTree").val("");
         $("#txtNUCTree").val("");
         $("#txtNumCarpInvTree").val("");

         $("#searchArbolContent").slideUp();
         $('#divTree').empty();
         $("#divFrmTreeContenido").empty();

         $("#divAlertDagerTree").slideUp();
      }

      setTreeParams = function (cveJuzgado, tipoCarpeta, numero, anio) {
         $("#hddCveTipoCarpetaEnviar").val(tipoCarpeta);
         $('#cmbJuzgadoArbol').val(cveJuzgado);
         $('#cmbTipoCarpetaTree').val(tipoCarpeta);
         $('#txtNumeroTree').val(numero);
         $('#txtAnioTree').val(anio);
         $("#btnConsultarArbol").trigger("click");
         $("#cmbTipoCarpetaTree").change();
      };

      getTiposCarpetas = function () {
         $.post("../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php", {accion: "consultar", activo: "S"}, function (json) {
            if (json !== "") {
               var json = eval("(" + json + ")");
               var totalCount = json.totalCount;
               $("#cmbTipoCarpetaTree").empty();
               $("#cmbTipoCarpetaTree").append('<option value="0" selected>Todas</option>');
               for (var i = 0; i < totalCount; i++) {
                  $("#cmbTipoCarpetaTree").append('<option value="' + json.data[i].cveTipoCarpeta + '">' + json.data[i].desTipoCarpeta + '</option>');
               }
               filtrarTipoCarpetaTree();
            }
         }).done(function(){
             if("<?php echo $numeroSegundaIntancia ?>" != "" && "<?php echo $anioSegundaIntancia ?>" != ""){
                $("#cmbTipoCarpetaTree").val(6);
                $("#txtNumeroTree").val(<?php echo $numeroSegundaIntancia ?>);
                $("#txtAnioTree").val(<?php echo $anioSegundaIntancia ?>);
                getTree(0);
            }
         });
      };
      consultaBandeja = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         if(kind == 1 || kind == 13 || kind == 17){
            consultaAcordada = true;
         }else{
            consultaAcordada = false;
         }

         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getActuacionesTray",
               cveTipoActuacion: kind,
               consultaAcordada: consultaAcordada,
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja 

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     html += "<div id='tableImpresion'><table  id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Numero</td>";
                     html += "<td>Tipo Actuacion</td>";
                     html += "<td>Num Actuacion</td>";
                     if(kind == 7){
                         html += "<td>Destinatario</td>";
                     }else{
                         html += "<td>Sintesis</td>";
                     }
                     
                     html += "<td>Fecha Registro</td>";
                     if(consultaAcordada){  
                        html += "<td>Acordada</td>";
                     }
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        var JSONbandejas = JSON.stringify(datos.resultados[i]);
                        html += "</tr>";
                        html += "<tr onclick='getFormulario(" + JSONbandejas + ", \"getActuacionesTray\", " + kind + ")'>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoCarpeta + "</td>";
                        html += "<td>" + datos.resultados[i].numero + "/" + datos.resultados[i].anio + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoActuacion + "</td>";
                        html += "<td>" + datos.resultados[i].numActuacion + "/" + datos.resultados[i].aniActuacion + "</td>";
                        if(kind == 7){
                            html += "<td>" + datos.resultados[i].destinatario + "</td>";
                        }else{
                            html += "<td>" + datos.resultados[i].Sintesis + "</td>";
                        }
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        if(consultaAcordada){
                           html += "<td>" + datos.resultados[i].acordada + "</td>";
                        }
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";
   //                        "sDom": '<"top"iflp>t<iflp>',
                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };

      consultaBandejaSolicitud = function (kind) {
   //        //alert("consultaBandejaSolicitud");
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getSolicitudesTray",
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /*  {
                      "idSolicitudAudiencia": "2"
                      }*/
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Juzgado Desahoga</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Numero</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Tipo Audiencia</td>";
                     html += "<td>Estatus</td>";
                     html += "<td>Fecha de Envio</td>";
                     html += "<td>Fecha de Inicio</td>";
                     html += "<td>Fecha de Termino</td>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        html += "</tr>";
                        html += "<tr>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoCarpeta + "</td>";
                        html += "<td>" + datos.resultados[i].numero + "/" + datos.resultados[i].anio + "</td>";
                        html += "<td>" + datos.resultados[i].pertenece + "</td>";
                        html += "<td>" + datos.resultados[i].desCatAudiencia + "</td>";
                        html += "<td>" + datos.resultados[i].desEstatusAudiencia + "</td>";
                        html += "<td>" + datos.resultados[i].fechaEnvio + "</td>";
                        html += "<td>" + datos.resultados[i].fechaInicial + "</td>";
                        html += "<td>" + datos.resultados[i].fechaFinal + "</td>";

                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").dataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };
      loadOptionBandejas = function (url, div, id) {
         if (url != "") {
            var idEnviar;
            console.log("load option bandejas");
            console.log(id);
            if (id.idActuacion == undefined) {
               if (id.idExhorto == undefined) {
                  if (id.idAmparo == undefined) {
                     if (id.id == undefined) {

                     } else {
                        idEnviar = id.id;
                     }
                  } else {
                     idEnviar = id.idAmparo;
                  }
               } else {
                  idEnviar = id.idExhorto;
               }
            } else {
               idEnviar = id.idActuacion;
            }
            console.log("id enviar");
            console.log(idEnviar);
            $.ajax({
               type: 'POST',
               url: url,
               data: idEnviar,
               async: false,
               dataType: "html",
               beforeSend: function (objeto) {
               },
               success: function (datos) {
   //                    console.log(datos);
                  $("#divFrmTreeContenido").html(datos);
                  var visibleFormulario = $("#collapseFormularios").is(":visible");
                  if (visibleFormulario == false)
                     $("#collapseFormularios").collapse('show');
                  try {

   //                    alert("Juzgado"+id.idActuacion.cveJuzgado);
                     console.log(id.idActuacion.cveJuzgado);
                     console.log(id.idExhorto.cveJuzgado);
                     console.log(id.idAmparo.cveJuzgado);
                     $("#cmbJuzgadoArbol").val(id.idActuacion.cveJuzgado);
                     $("#cmbJuzgadoArbol").val(id.idExhorto.cveJuzgado);
                     $("#cmbJuzgadoArbol").val(id.idAmparo.cveJuzgado);
   //                    $("#cmbJuzgadoArbol").change();
   //                    alert("Tipo carpeta"+id.idActuacion.cveTipoCarpeta);
                     $("#cmbTipoCarpetaTree").val(id.idActuacion.cveTipoCarpeta);
                     $("#cmbTipoCarpetaTree").val(id.idExhorto.cveTipoCarpeta);
                     $("#cmbTipoCarpetaTree").val(id.idAmparo.cveTipoCarpeta);
                     $("#cmbTipoCarpetaTree").change();
   //                    alert("numero"+id.idActuacion.numero);
                     $("#txtNumeroTree").val(id.idActuacion.numero);
                     $("#txtNumeroTree").val(id.idExhorto.numero);
                     $("#txtNumeroTree").val(id.idAmparo.numero);
   //                    alert("an�o"+id.idActuacion.anio);
                     $("#txtAnioTree").val(id.idActuacion.anio);
                     $("#txtAnioTree").val(id.idExhorto.anio);
                     $("#txtAnioTree").val(id.idAmparo.anio);
                     getTree();
                  } catch (err) {
                     console.log("error");
                     console.log(err);
                  }

               },
               error: function (objeto, quepaso, otroobj) {
               }
            });
         } else {
            console.log("nada");
         }
      };
      recargarArbolBandejas = function (id) {
         $("#cmbJuzgadoArbol").val(id.cveJuzgado);
         $("#cmbTipoCarpetaTree").val(id.cveTipoCarpeta);
         $("#txtNumeroTree").val(id.numero);
         $("#txtAnioTree").val(id.anio);
         getTree();
      };
      getFormulario = function (id, origen, kind) {
         console.log("get formulario");
         console.log(id);
   //        console.log(origen);
   //        console.log(kind);
         movermeA("collapseFormularios", "top");
         switch (origen) {
            case 'getSolicitudesTray':
               console.log("getSolicitudesTray");
   //                loadOptionBandejas('sigejupe/pasosSolicitudAudiencias/frmPasosSolictitudAudienciasmp.php', 'divFrmTreeContenido', { idSolicitud: id });
               break;
            case 'getSolicitudesCateoTray':
               console.log("getSolicitudesCateoTray");
   //                loadOptionBandejas('sigejupe/solicitudesCateos/frmSolicitudescateosView.php', 'divFrmTreeContenido', { idCateo: id });
               break;
            case 'getSolicitudesOrdenesTray':
               console.log("getSolicitudesOrdenesTray");
   //                loadOptionBandejas('sigejupe/solicitudesCateos/frmOrdenesaprehensionView.php', 'divFrmTreeContenido', { idOrden: id });
               break;
            case 'getActuacionesTray':
               console.log("getActuacionesTray");
               if (kind == 16) {       //COMPARECENCIAS
                  loadOptionBandejas('sigejupe/comparecencias/frmComparecencias.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 7) {  //OFICIOS

                  if (id.cveTipoCarpeta == 6) {
                     loadOptionBandejas('sigejupe/oficios/frmOficios.php?origen=1', 'divFrmTreeContenido', {idActuacion: id});
                  } else {
                     loadOptionBandejas('sigejupe/oficios/frmOficios.php', 'divFrmTreeContenido', {idActuacion: id});
                  }
               } else if (kind == 2) {  //ACUERDOS
                  if (id.cveTipoCarpeta == 6) {
                     loadOptionBandejas('sigejupe/acuerdos/frmAcuerdos.php?origen=1', 'divFrmTreeContenido', {idActuacion: id});
                  } else {
                     loadOptionBandejas('sigejupe/acuerdos/frmAcuerdos.php', 'divFrmTreeContenido', {idActuacion: id});
                  }
               } else if (kind == 33) {  //ACUERDOS
                  loadOptionBandejas('sigejupe/acuerdos/frmAcuerdosRadicacion.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 1) {  //PROMOCIONES
                  if (id.cveTipoCarpeta == 6) {
                     loadOptionBandejas('sigejupe/promociones/frmPromociones.php?origen=1', 'divFrmTreeContenido', {idActuacion: id});
                  } else {
                     loadOptionBandejas('sigejupe/promociones/frmPromociones.php', 'divFrmTreeContenido', {idActuacion: id});
                  }
               } else if (kind == 13) { //PROMOCIONES TERMINO
                  loadOptionBandejas('sigejupe/promocionestermino/frmPromocionestermino.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 20 || kind == 21) { //NOTIFICACIONES
                  loadOptionBandejas('sigejupe/notificaciones/frmNotificaciones.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 8) {  //EXHORTOS GENERADOS
                  if (id.cveTipoCarpeta == 6) {
                     loadOptionBandejas('sigejupe/exhortos/frmExhortos.php?exhorto=1&origen=1', 'divFrmTreeContenido', {idExhorto: id});
                  } else {
                     loadOptionBandejas('sigejupe/exhortos/frmExhortos.php?exhorto=1', 'divFrmTreeContenido', {idExhorto: id});
                  }
               } else if (kind == 3) {  //SENTENCIAS
                  loadOptionBandejas('sigejupe/sentencias/frmSentencias.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 11) { //CERTIFICACIONES
                  loadOptionBandejas('sigejupe/certificaciones/frmCertificaciones.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 14) { //MEDIDAS PROTECCION
                  loadOptionBandejas('sigejupe/medidasprotecciones/frmMedidasprotecciones.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 9) {  //MEDIDAS CAUTELARES
                  loadOptionBandejas('sigejupe/medidascautelares/frmMedidascautelares.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 5) {  //AUTOS DE VINCULACION
                  loadOptionBandejas('sigejupe/autosvinculacionproceso/frmAutosvinculacionproceso.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 6) {  //ACTA MINIMA
                  loadOptionBandejas('sigejupe/actaminima/frmActaminima.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 23) {  //AUTOS JUICIO ORAL
                  loadOptionBandejas('sigejupe/autojuiciooral/frmAutojuiciooral.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 12) {  //CATEOS
                  loadOptionBandejas('sigejupe/autosvinculacionproceso/frmAutosvinculacionproceso.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 19) {  //FORMULACION DE IMPUTACION
                  loadOptionBandejas('sigejupe/formulacionimputaciones/frmFormulacionImputacion.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 24) {  //SUSPENCION CONDICIONAL
                  loadOptionBandejas('sigejupe/suspensioncondicional/frmSuspensionCondicional.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 17) {  //PROMOCIONES QUE GENERAN CARPETA JUDICIALIZADA
                  loadOptionBandejas('sigejupe/promocionesgenerancpj/frmPromocionesGeneranCPJ.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 4) {  //ORDENES
                  loadOptionBandejas('#noir', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 22) {  //AUTO DE RADICACION DE EJECUCION DE SENTENCIAS
                  loadOptionBandejas('sigejupe/autojuiciooral/frmAutojuiciooral.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 26) {  //CATEOS RELEVANTES
                  loadOptionBandejas('sigejupe/casosrelevantes/frmCasosRelevantes.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 10) {  //MEDIDAS DE CONSIGNACION
                  loadOptionBandejas('sigejupe/autosvinculacionproceso/frmAutosvinculacionproceso.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 15) {  //ORDEN DE APREHENSION
                  loadOptionBandejas('sigejupe/autosvinculacionproceso/frmAutosvinculacionproceso.php', 'divFrmTreeContenido', {idActuacion: id});
               } else if (kind == 25) {  //TOMA DE MUESTRAS
                  loadOptionBandejas('sigejupe/autosvinculacionproceso/frmAutosvinculacionproceso.php', 'divFrmTreeContenido', {idActuacion: id});
               }
               console.log("DATOS PARA VOLVER A CARGAR EL ARBOL");
               recargarArbolBandejas(id);
               break;
            case 'getExorthosTray':
               console.log("getExorthosTray");
               console.log(id);
               loadOptionBandejas('sigejupe/exhortos/frmExhortos.php?exhorto=0', 'divFrmTreeContenido', {idExhorto: id});
               console.log("EXHORTO ID");
               console.log(id);
               $("#cmbJuzgadoArbol").val(id.cveJuzgado);
               $("#cmbTipoCarpetaTree").val(7);
               $("#txtNumeroTree").val(id.numExhorto);
               $("#txtAnioTree").val(id.aniExhorto);
               getTree();
   //                recargarArbolBandejas(id);
               break;
            case 'getAmparosTray':
               console.log("getAmparosTray");
               console.log(id);
               loadOptionBandejas('sigejupe/amparos/frmAmparos.php', 'divFrmTreeContenido', {idAmparo: id});
               console.log("EXHORTO ID");
               console.log(id.numExhorto);
               console.log(id.numExhorto);
               $("#cmbJuzgadoArbol").val(id.cveJuzgado);
               $("#cmbTipoCarpetaTree").val(8);
               $("#txtNumeroTree").val(id.numAmparo);
               $("#txtAnioTree").val(id.aniAmparo);
               getTree();
   //                recargarArbolBandejas(id);
               break;
            case 'getIngresoCeresoTray':
               console.log("getIngresoCeresoTra");
               console.log(id);
               loadOptionBandejas('sigejupe/amparos/frmAmparos.php', 'divFrmTreeContenido', {id: id});
               recargarArbolBandejas(id);
               break;
            case 'getPeritosTray':
               console.log("getPeritosTray");
               console.log(id);
               loadOptionBandejas('sigejupe/peritos/frmPeritos.php', 'divFrmTreeContenido', {id: id});
               recargarArbolBandejas(id);
               break;
            default:
               console.log("NADA");
               break;

         }
      };
      consultaBandejaSolicitudCateo = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getSolicitudesCateoTray",
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /*  {
                      "idCateo": "3",
                      "idSolicitudCateo": "3",                               
                      }
                      }*/
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Carpeta Investigacion</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Numero</td>";
                     html += "<td>Numero Cateo</td>";
                     html += "<td>NUC</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Estatus Solicitud Cateo</td>";
                     html += "<td>Fecha de env&iacute;o</td>";
                     html += "<td>Fecha de registro</td>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        html += "</tr>";
                        html += "<tr>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].carpetaInv + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoCarpeta + "</td>";
                        html += "<td>" + datos.resultados[i].numero + "/" + datos.resultados[i].anio + "</td>";
                        html += "<td>" + datos.resultados[i].numeroCateo + "/" + datos.resultados[i].anioCateo + "</td>";
                        html += "<td>" + datos.resultados[i].nuc + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].desEstatusSolicitudCateo + "</td>";
                        html += "<td>" + datos.resultados[i].fechaEnvio + "</td>";
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };

      consultaBandejaPeritos = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getPeritosTray",
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /*  {
                      "idCateo": "3",
                      "idSolicitudCateo": "3",                               
                      }
                      }*/
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Numero</td>";
                     html += "<td>Numero Solicitud</td>";
                     html += "<td>Perito Asignado</td>";
                     html += "<td>Fecha Solicitud</td>";
                     html += "<td>Fecha de registro</td>";
                     html += "</tr>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        var JSONbandejas = JSON.stringify(datos.resultados[i]);
                        html += "<tr onclick='getFormulario(" + JSONbandejas + ", \"getPeritosTray\", " + kind + ")'>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoCarpeta + "</td>";
                        html += "<td>" + datos.resultados[i].numero + "/" + datos.resultados[i].anio + "</td>";
                        html += "<td>" + datos.resultados[i].numeroSolicitud + "/" + datos.resultados[i].aniSolicitud + "</td>";
                        html += "<td>" + datos.resultados[i].nombrePerito + "</td>";
                        html += "<td>" + datos.resultados[i].fechaSolicitud + "</td>";
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });
                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };
      consultaBandejaSolicitudOrden = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getSolicitudesOrdenesTray",
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /*  {
                      "idOrden": "5",
                      "numeroOrden": "3",                                                                                 
                      "carpetaInv": "1019880709032016",                                                  
                      "desEstatusSolicitudOrdenes": "CONTESTADA POR EL JUEZ"
                      },
                      }*/
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Carpeta Investigacion</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Numero</td>";
                     html += "<td>Numero Orden</td>";
                     html += "<td>NUC</td>";
                     html += "<td>Estatus Solicitud Orden</td>";
                     html += "<td>Fecha env&iacute;o</td>";
                     html += "<td>Fecha de registro</td>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        html += "</tr>";
                        html += "<tr>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].carpetaInv + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoCarpeta + "</td>";
                        html += "<td>" + datos.resultados[i].numero + "/" + datos.resultados[i].anio + "</td>";
                        html += "<td>" + datos.resultados[i].numeroOrden + "/" + datos.resultados[i].anioOrden + "</td>";
                        html += "<td>" + datos.resultados[i].nuc + "</td>";
                        html += "<td>" + datos.resultados[i].desEstatusSolicitudOrdenes + "</td>";
                        html += "<td>" + datos.resultados[i].fechaEnvio + "</td>";
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };
      consultaBandejaIngresoCereso = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getIngresoCeresoTray",
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /* S.idSolicitudAudiencia,IC.idIngresoCereso,IC.,IC.,IC.nuc,IC.FechaHoraIngreso
                      }*/
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Oficio</td>";
                     html += "<td>Carpeta Inv</td>";
                     html += "<td>NUC</td>";
                     html += "<td>Fecha Hora Ingreso</td>";
                     html += "<td>Fecha de registro</td>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        html += "</tr>";
                        html += "<tr>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].oficio + "</td>";
                        html += "<td>" + datos.resultados[i].carpetaInv + "</td>";
                        html += "<td>" + datos.resultados[i].nuc + "</td>";
                        html += "<td>" + datos.resultados[i].FechaHoraIngreso + "</td>";
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };
      consultaBandejaExhortos = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getExorthosTray",
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /* E.idExhorto,IF(E.IdExhortoGenerado is null,"Tradicional","Electronico") as TipoExhorto,E.IdExhortoGenerado,E.numExhorto,E.,E.cveJuzgado,J.desJuzgado,E.cveEstadoProcedencia,ES.desEstado,
                      * if(JP.desJuzgado is not null,JP.desJuzgado ,E.juzgadoProcedencia) as Procedencia,E.carpetaInv,E.nuc,E.cveTipoCarpeta,TC.desTipoCarpeta,E.numOficio,E.Sintesis,
                      * E.cveEstatusExhorto
                      }*/
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Tipo Exhorto</td>";
                     html += "<td>Num Exhorto</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Estado Procedencia</td>";
                     html += "<td>Juzgado Procedencia</td>";
                     html += "<td>Carpeta Inv.</td>";
                     html += "<td>NUC</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Oficio</td>";
                     html += "<td>Sintesis</td>";
                     html += "<td>Estatus</td>";
                     html += "<td>Fecha de registro</td>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        var JSONbandejas = JSON.stringify(datos.resultados[i]);
                        html += "</tr>";
                        html += "<tr onclick='getFormulario(" + JSONbandejas + ", \"getExorthosTray\", " + kind + ")'>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].TipoExhorto + "</td>";
                        html += "<td>" + datos.resultados[i].numExhorto + "/" + datos.resultados[i].aniExhorto + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].desEstado + "</td>";
                        html += "<td>" + datos.resultados[i].Procedencia + "</td>";
                        html += "<td>" + datos.resultados[i].carpetaInv + "</td>";
                        html += "<td>" + datos.resultados[i].nuc + "</td>";
                        html += "<td>" + ((datos.resultados[i].desTipoCarpeta != "") ? datos.resultados[i].desTipoCarpeta : "Sin relaci&oacute;n") + "</td>";
                        html += "<td>" + datos.resultados[i].numOficio + "/" + datos.resultados[i].aniOficio + "</td>";
                        html += "<td>" + datos.resultados[i].Sintesis + "</td>";
                        html += "<td>" + datos.resultados[i].cveEstatusExhorto + "</td>";
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };

      consultaBandejaAmparos = function (kind) {
         var txtFecInicioBandeja = $("#txtFecInicioBandeja").val();
         var txtFecFinBandeja = $("#txtFecFinBandeja").val();
         var cmbJuzgadoArbol = $("#cmbJuzgadoArbol").val();
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/bandejas/BandejasFacade.Class.php",
            data: {
               action: "getAmparosTray",
               cveJuzgado: cmbJuzgadoArbol,
               fechaInicio: txtFecInicioBandeja,
               fechaFinal: txtFecFinBandeja

            },
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
               $("#divDataTableResults").html("");
               if (datos != "") {
                  var html = "";
                  var totalCount = datos.totalCount;
                  html += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                  html += "<span id='numero-registros'>" + totalCount + "</span>";
                  html += "</label>";
                  if (totalCount > 0) {
                     /* 
                      * A.idAmparo,C.numero,C.anio,C.cveTipoCarpeta,TC.,A.,A.,A.cveJuzgado,A.,A.,J.desJuzgado
                      */
                     html += "<div id='tableImpresion'><table id='tblResultBandeja' style='width: 100%; margin-top:25px;'>";
                     html += "<thead>";
                     html += "<tr>";
                     html += "<td>Num.</td>";
                     html += "<td>Juzgado</td>";
                     html += "<td>Tipo Carpeta</td>";
                     html += "<td>Num Carpeta</td>";
                     html += "<td>Num Amparo</td>";
                     html += "<td>Num Oficio</td>";
                     html += "<td>Carpeta Inv.</td>";
                     html += "<td>Fecha de registro</td>";
                     html += "</thead>";
                     html += "<tbody>";
                     var cont = 1;
                     for (var i = 0; i < totalCount; i++) {
                        var JSONbandejas = JSON.stringify(datos.resultados[i]);
                        html += "</tr>";
                        html += "<tr onclick='getFormulario(" + JSONbandejas + ", \"getAmparosTray\", " + kind + ")'>";
                        html += "<td>" + cont + "</td>";
                        html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
                        html += "<td>" + datos.resultados[i].desTipoCarpeta + "</td>";
                        html += "<td>" + datos.resultados[i].numero + "/" + datos.resultados[i].anio + "</td>";
                        html += "<td>" + datos.resultados[i].numAmparo + "/" + datos.resultados[i].aniAmparo + "</td>";
                        html += "<td>" + datos.resultados[i].numOficio + "</td>";
   //                            html += "<td>" + datos.resultados[i].desJuzgado + "</td>";
   //                            html += "<td>" + datos.resultados[i].desEstado + "</td>";
                        html += "<td>" + datos.resultados[i].carpetaInv + "</td>";
                        html += "<td>" + datos.resultados[i].fechaRegistro + "</td>";
                        html += "</tr>";
                        cont++;
                     }
                     html += "</tbody>";
                     html += "</table></div>";

                     $("#divDataTableResults").html(html);
                     $("#tblResultBandeja").DataTable(
                             {
                                "language": {
                                   "lengthMenu": "Mostrando _MENU_ registros por p&aacute;gina",
                                   "zeroRecords": "Sin Resultados",
                                   "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
                                   "infoEmpty": "Sin Resultados",
                                   "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
                                   "paginate": {
                                      "first": "Primera",
                                      "last": "Ultima",
                                      "next": "Siguiente",
                                      "previous": "Anterior"
                                   }
                                },
                                "bProcessing": true,
                                "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                "pageLength": 50,
                                buttons: [
                                   'print'
                                ]
                             });

                     $('#tblResultBandeja')
                             .removeClass('display')
                             .addClass('table table-striped table-bordered');

                  } else {
                     $("#divDataTableResults").html("Sin resultados");
                     $("#btnConsultarPrint").prop("disabled", true);
                     $("#btnConsultarExport").prop("disabled", true);
                  }
               } else {
                  $("#divDataTableResults").html("Sin resultados");
                  $("#btnConsultarPrint").prop("disabled", true);
                  $("#btnConsultarExport").prop("disabled", true);
               }
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
      };
      exportBandeja = function (e) {

   //      alert("SFDS");
   //      $("#btnExport").click(function (e) {
         //getting values of current time for generating the file name
         var dt = new Date();
         var day = dt.getDate();
         var month = dt.getMonth() + 1;
         var year = dt.getFullYear();
         var hour = dt.getHours();
         var mins = dt.getMinutes();
         var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
         var a = document.createElement('a');
         var data_type = 'data:application/vnd.ms-excel';
         var table_div = document.getElementById('tblResultBandeja');
         console.log(table_div);
         var table_html = table_div.outerHTML.replace(/ /g, '%20');
         console.log(table_html);
         a.href = data_type + ', ' + table_html;
         a.download = 'bandeja_' + postfix + '.xls';
   //         a.click();
         var click_ev = document.createEvent("MouseEvents");
         // initialize the event
         click_ev.initEvent("click", true, true);
         //trigger the evevnt
         a.dispatchEvent(click_ev);
   //      });
   //      var html = $("#tableImpresion").html();
   //      console.log(html);
   //      iframeElementContainer =   document.getElementById('frmExportar').contentDocument;
   //      iframeElementContainer.open();
   //      iframeElementContainer.writeln("<html><body>"+html+"</body></html>");
   //      iframeElementContainer.close();
   //         var result = "data:application/vnd.ms-excel,";
   //         this.href = result;
   //         this.download = "my-custom-filename.xls";
   //         return true;
   //         window.open('data:application/vnd.ms-excel;filename=exportData.xlsx;' + btoa($('#tblResultBandeja').html()));
   //         window.open('data:application/vnd.ms-excel;filename=exportData.xlsx;,' + $('#tblResultBandeja').html());
   //         e.preventDefault();

   //      var frmExportar = document.getElementById("frmExportar");          
   //      frmExportar.innerHtml(html);
      };
      printBandeja = function () {
         var html = $("#tableImpresion").html();
   //        console.log(html);
   //        var tableI = html.search("<table id=\"tblResultBandeja\"");
   //        console.log(tableI);
   //        var aux = html.substring(tableI);
   //        var aux2 = aux.search("</table>");
   //        console.log(aux2);
   //        var soloTable = aux.substring(0, aux2);
   //        console.log("TABLE");
   //        console.log(soloTable);
         var tableHTML = "<table>";
         tableHTML += '<tr>';
         tableHTML += '    <td style="width:40%; font-weight:bold; border-bottom:solid black 2px;" align="left">';
         tableHTML += '        <img src="data:image/png;base64,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" height="90" width="85">';
         tableHTML += '    </td>';
         tableHTML += '    <td style="font-size:16px; font-weight:bold; border-bottom:solid black 2px;">';
         tableHTML += '        Gobierno del Estado de M&eacute;xico<br> Poder Judicial del Estado de M&eacute;xico<br>Consejo de la Judicatura<br>Consulta Bandejas';
         tableHTML += '    </td>';
         tableHTML += '    <td style="width:40%;padding-left:5px; border-bottom:solid black 2px;" align="right">';
         tableHTML += '        <img src="data:image/png;base64,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" height="90" width="85">';
         tableHTML += '    </td>';
         tableHTML += '</tr>';
         tableHTML += '</table>';

         tableHTML += '<br>' + $("#spanTitleBandeja").text() + ' del periodo ' + $("#txtFecInicioBandeja").val() + ' al ' + $("#txtFecFinBandeja").val();

         var ventimp = window.open('Reporte', 'Reporte');

         var style = '<style type="text/css" lang="stylesheet">';
         style += 'table{font-family: Arial; font-size: 12px;}';
         style += 'thead{font-family: Arial; font-size: 14px; font-weight: bold; background-color: #CDCDCD;}';
         style += 'tbody{font-family: Arial; font-size: 12px;}';
         style += '.top{display:none;}';
         style += '.bottom{display:none;}';
         style += '.row{display: none;}';
         style += '@media print {';
         style += 'table#tblResultBandeja td, table#tblResultBandeja tr{';
         style += 'border: solid #000 !important;';
         style += 'border-width: 1px 0 0 1px !important;';
         style += '}';
         style += '.top{display:none;}';
         style += '.bottom{display:none;}';
         console.log(html);
   //        style += '#tblResultBandeja > th, td {';
   //        style += 'border: solid #000 !important;';
   //        style += 'border-width: 0 1px 1px 0 !important;';
   //        style += '}';
         style += '.odd{border-buttom: solid 1px;}';
         style += '.even{border-buttom: solid 1px;}';
         style += '</style>';

         ventimp.document.write(style + tableHTML + html);
         ventimp.document.close();
         ventimp.print();
         ventimp.close();

      };
      function cargarJuzgadosArbol() {
   //            //alert("E HOLA");
   //        var strDatos = "accion=distrito2Instancia";
         $.ajax({
            type: "POST",
            //url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
            //data: strDatos,
            data: {accion: "consultarCombo", obligaPermiso: "false"},
            async: false,
            dataType: "json",
            beforeSend: function (objeto) {

            },
            success: function (datos) {
   //                    //alert(datos);
               if (datos.totalCount > 0) {
                  var option = '<option tipojuzgado="0" value ="0">Seleccione</option>';
                  $.each(datos.data, function (index, element) {
                     if (juzgadoSesion == element.cveJuzgado) {
                        var selected = ' selected="selected" ';
                     } else {
                        var selected = '';
                     }
                     option += '<option ' + selected + ' tipojuzgado="' + element.cveTipoJuzgado + '" value="' + element.cveJuzgado + '">' + element.desJuzgado + '</option>';
   //                            $("#cmbJuzgadoArbol").val(juzgadoSesion);
                  });
                  $("#cmbJuzgadoArbol").append(option);
                  $("#cmbJuzgadoArbol").change();
                  getTiposCarpetas();
               } else {
                  //alert("error")
                  $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                  $("#divAlertDager").show("slide");
                  setTimeAlert("divAlertDager");
               }
            }
         });
      }
      ;

      function filtrarTipoCarpetaTree() {
         // ocultar mensajes de error (si los hay)
         $(".alerts-messages .alert").slideUp();

         var tipoJuzgado = $("#cmbJuzgadoArbol").find('option:selected').attr("tipojuzgado");
         switch (tipoJuzgado) {
            case '0':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               $("#cmbTipoCarpetaForm").slideUp();
               $("#txtNumeroTreeForm").slideUp();
               $("#txtNUCTreeForm").slideUp();
               $("#txtNumCarpInvTreeForm").slideUp();
               $("#txtNumeroTree").attr('data-required', "requerido");
               $("#txtAnioTree").attr('data-required', "requerido");
               break;
            case '1':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               // solo mostrar opciones 1 2 7 y 8
               $('option', $("#cmbTipoCarpetaTree")).each(function (key, option) {
                  if ($(option).val() != 0 && $(option).val() != 1 && $(option).val() != 2 && $(option).val() != 7 && $(option).val() != 8) {
                     $(option).hide();
                  } else {
                     $(option).show();
                  }
               });
               $("#cmbTipoCarpetaForm").slideDown();
               $("txtNumeroTreeForm").slideDown();
               $("#txtNumeroTreeForm").slideDown();
               $("#cmbTipoCarpetaTree").change();
               break;
            case '2':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               // solo mostrar opciones 3 7 y 8
               $('option', $("#cmbTipoCarpetaTree")).each(function (key, option) {
                  if ($(option).val() != 0 && $(option).val() != 3 && $(option).val() != 7 && $(option).val() != 8) {
                     $(option).hide();
                  } else {
                     $(option).show();
                  }
               });
               $("#cmbTipoCarpetaForm").slideDown();
               $("txtNumeroTreeForm").slideDown();
               $("#txtNumeroTreeForm").slideDown();
               $("#cmbTipoCarpetaTree").change();
               break;
            case '3':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               // solo mostrar opciones 5 7 y 8
               $('option', $("#cmbTipoCarpetaTree")).each(function (key, option) {
                  if ($(option).val() != 0 && $(option).val() != 5 && $(option).val() != 7 && $(option).val() != 8) {
                     $(option).hide();
                  } else {
                     $(option).show();
                  }
               });
               $("#cmbTipoCarpetaForm").slideDown();
               $("txtNumeroTreeForm").slideDown();
               $("#txtNumeroTreeForm").slideDown();
               $("#cmbTipoCarpetaTree").change();
               break;
            case '4':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               // solo mostrar opciones 4 7 y 8
               $('option', $("#cmbTipoCarpetaTree")).each(function (key, option) {
                  if ($(option).val() != 0 && $(option).val() != 4 && $(option).val() != 7 && $(option).val() != 8) {
                     $(option).hide();
                  } else {
                     $(option).show();
                  }
               });
               $("#cmbTipoCarpetaForm").slideDown();
               $("txtNumeroTreeForm").slideDown();
               $("#txtNumeroTreeForm").slideDown();
               $("#cmbTipoCarpetaTree").change();
               break;
            case '5':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               // solo mostrar opciones 6 7 y 8
               $('option', $("#cmbTipoCarpetaTree")).each(function (key, option) {
                  if ($(option).val() != 0 && $(option).val() != 6 && $(option).val() != 7 && $(option).val() != 8) {
                     $(option).hide();
                  } else {
                     $(option).show();
                  }
               });
               $("#cmbTipoCarpetaForm").slideDown();
               $("txtNumeroTreeForm").slideDown();
               $("#txtNumeroTreeForm").slideDown();
               $("#cmbTipoCarpetaTree").change();
               break;
            case '8':
               $("#cmbTipoCarpetaTree").find('option:eq(0)').prop('selected', true);
               // solo mostrar opciones 6 7 y 8
               $('option', $("#cmbTipoCarpetaTree")).each(function (key, option) {
                  if ($(option).val() != 0 && $(option).val() != 6 && $(option).val() != 7 && $(option).val() != 8) {
                     $(option).hide();
                  } else {
                     $(option).show();
         }
               });
               $("#cmbTipoCarpetaForm").slideDown();
               $("txtNumeroTreeForm").slideDown();
               $("#txtNumeroTreeForm").slideDown();
               $("#cmbTipoCarpetaTree").change();
               break;
      }
      }

      function cambioDeTipoCarpeta() {

         // ocultar mensajes de error (si los hay)
         $(".alerts-messages .alert").slideUp();

         var tipoCarpeta = $("#cmbTipoCarpetaTree").find('option:selected').val();
         $("#hddCveTipoCarpetaEnviar").val(tipoCarpeta);
         switch (tipoCarpeta) {
            case '0':
               $("#txtNumeroTreeForm").slideDown();
               $("#txtNUCTreeForm").slideUp();
               $("#txtNumCarpInvTreeForm").slideUp();

               $("#txtNumeroTree").attr('data-required', "requerido");
               $("#txtAnioTree").attr('data-required', "requerido");
               break;
               // amparo y exhorto
            case '7':
            case '8':
               $("#txtNumeroTreeForm").slideDown();

               $("#txtNUCTreeForm").slideUp();
               $("#txtNumCarpInvTreeForm").slideUp();

               $("#txtNumeroTree").attr('data-required', "requerido");
               $("#txtAnioTree").attr('data-required', "requerido");
               break;
               // los demas
            default:
               $("#txtNumeroTreeForm").slideDown();

               $("#txtNUCTreeForm").slideDown();
               $("#txtNumCarpInvTreeForm").slideDown();

               $("#txtNumeroTree").attr('data-required', "opcional");
               $("#txtAnioTree").attr('data-required', "opcional");
               $("#txtNUCTree").attr('data-required', "opcional");
               $("#txtNumCarpInvTree").attr('data-required', "opcional");
               break;
         }

      }

      function obtenerAcciones() {
   //            loadFormTree();
   //            $("#collapseOne").collapse('show');
         var cveUsuarioSistema = cveUsuarioSesion;
         var botonesAccionLG = "";
         var botonesAccionSMDer = "";
         var botonesAccionSMIzq = "";
         var listaAcciones = "";
         $.get("../archivos/" + cveUsuarioSistema + ".json",
                 function (response) {
   //                    console.dir(response);
   //                    //alert(response.pertotPerfilesfiles[0].totPerfiles);
                    for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
   //                        //alert(cvePerfilSesion);
   //                        //alert(cvePerfilSesion);
   //                        //alert(response.perfiles[0].perfil[i].cvePerfil);
                       if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
   //                            //alert("existe perfil");
                          for (var j = 0; j < response.perfiles[0].perfil[i].permisos.length; j++) {
   //                                //alert(response.perfiles[0].perfil[i].permisos[j].nomFormulario == "CARPETAS JUDICIALES");
                             if (response.perfiles[0].perfil[i].permisos[j].nomFormulario == "CARPETAS JUDICIALES") {
   //                                    //alert("hijos " + response.perfiles[0].perfil[i].permisos[j].hijos.length);
                                for (var k = 0; k < response.perfiles[0].perfil[i].permisos[j].hijos.length; k++) {
   //                                        var jsonURL = JSON.stringify(response.perfiles[0].perfil[i].permisos[j].hijos);
   //                                        //alert(jsonURL);
                                   var url = response.perfiles[0].perfil[i].permisos[j].hijos[k].archivo;
   //                                        //alert(url);
                                   var div = "divFrmTreeContenido";
                                   botonesAccionLG += '<button style="white-space: pre-line;" onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" data-toggle="tooltip"  data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary btn-sd accionMenuAcciones"><span class="" style="float: left;"><img style="width: 60px; height: 50px;" src="img/arbol/menuBotones/' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '.png"></span><br>' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</button>';
   //                                        botonesAccionSMDer += '<button onclick="loadFormTree(\'' + url + '\')" data-toggle="tooltip" data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary show-pop-delay pull-left tooltipMenu accionMenuAcciones" data-content="Acuerdos" data-delay-show="0" data-delay-hide="0" data-placement="top"><span class="glyphicon glyphicon-indent-left"></span></button>';
                                   botonesAccionSMDer += '<div onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" class="divImagenMenuBotones menuTooltipActuaciones tooltipsDerecha"><span>' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</span><img style="width: 100%;" src="img/arbol/menuBotones/' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '.png"></div>';
                                   botonesAccionSMIzq += '<button onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" data-toggle="tooltip" data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary show-pop-delay pull-left tooltipMenu accionMenuAcciones" data-content="Acuerdos" data-delay-show="0" data-delay-hide="0" data-placement="top"><span class="glyphicon glyphicon-indent-left"></span></button>';
                                   listaAcciones += '<li class="active accionMenuAcciones" role="presentation"><a onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" href="#">' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</a></li>';
   //                                        $(document).trigger("botonesMenuAccionesLateralIzq");
                                }
                             }
                             if (response.perfiles[0].perfil[i].permisos[j].nomFormulario == "ATENCION PUBLICO") {
                                for (var k = 0; k < response.perfiles[0].perfil[i].permisos[j].hijos.length; k++) {
                                   var url = response.perfiles[0].perfil[i].permisos[j].hijos[k].archivo;
                                   var div = "divFrmTreeContenido";
                                   console.log("PERMISOS PROMOS");
                                   console.log((response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario.indexOf("PROMOCIONES")));
                                   console.log((response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario.indexOf("SOLICITUDES DE AUDIENCIA")));
                                   if (((response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario.indexOf("PROMOCIONES")) != -1) || (response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario.indexOf("SOLICITUDES DE AUDIENCIA")) != -1) {
                                      //                                    alert();
                                      botonesAccionLG += '<button style="white-space: pre-line;" onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" data-toggle="tooltip"  data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary btn-sd accionMenuAcciones"><span class="" style="float: left;"><img style="width: 60px; height: 50px;" src="img/arbol/menuBotones/' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '.png"></span><br>' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</button>';
                                      //                                        botonesAccionSMDer += '<button onclick="loadFormTree(\'' + url + '\')" data-toggle="tooltip" data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary show-pop-delay pull-left tooltipMenu accionMenuAcciones" data-content="Acuerdos" data-delay-show="0" data-delay-hide="0" data-placement="top"><span class="glyphicon glyphicon-indent-left"></span></button>';
                                      botonesAccionSMDer += '<div onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" class="divImagenMenuBotones menuTooltipActuaciones tooltipsDerecha"><span>' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</span><img style="width: 100%;" src="img/arbol/menuBotones/' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '.png"></div>';
                                      botonesAccionSMIzq += '<button onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" data-toggle="tooltip" data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary show-pop-delay pull-left tooltipMenu accionMenuAcciones" data-content="Acuerdos" data-delay-show="0" data-delay-hide="0" data-placement="top"><span class="glyphicon glyphicon-indent-left"></span></button>';
                                      listaAcciones += '<li class="active accionMenuAcciones" role="presentation"><a onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" href="#">' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</a></li>';
                                   } else {
                                      //                                    alert();

                                   }
                                }
                             }
                             if (response.perfiles[0].perfil[i].permisos[j].nomFormulario == "JUECES") {
                                for (var k = 0; k < response.perfiles[0].perfil[i].permisos[j].hijos.length; k++) {
                                   var url = response.perfiles[0].perfil[i].permisos[j].hijos[k].archivo;
                                   var div = "divFrmTreeContenido";
                                   if (((response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario.indexOf("AUTO DE RADICACION DE EJECUCION")) != -1)) {
                                      botonesAccionLG += '<button style="white-space: pre-line;" onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" data-toggle="tooltip"  data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary btn-sd accionMenuAcciones"><span class="" style="float: left;"><img style="width: 60px; height: 50px;" src="img/arbol/menuBotones/' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '.png"></span><br>' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</button>';
                                      botonesAccionSMDer += '<div onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" class="divImagenMenuBotones menuTooltipActuaciones tooltipsDerecha"><span>' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</span><img style="width: 100%;" src="img/arbol/menuBotones/' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '.png"></div>';
                                      botonesAccionSMIzq += '<button onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" data-toggle="tooltip" data-original-title="' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '" type="button" class="btn btn-primary show-pop-delay pull-left tooltipMenu accionMenuAcciones" data-content="Acuerdos" data-delay-show="0" data-delay-hide="0" data-placement="top"><span class="glyphicon glyphicon-indent-left"></span></button>';
                                      listaAcciones += '<li class="active accionMenuAcciones" role="presentation"><a onclick="loadFormTree(\'' + url + '\', \'' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '\')" href="#">' + response.perfiles[0].perfil[i].permisos[j].hijos[k].nomFormulario + '</a></li>';
                                   } else {
                                      //                                    alert();

                                   }
                                }
                             }
                          }
   //                            //alert(response.perfiles[0].perfil[i].permisos.);
                       }
                    }

                    $("#botonesAcciones").html(botonesAccionLG);
                    $("#botonesMenuAccionesLateralIzq").html(botonesAccionSMIzq);
                    $("#botonesMenuAccionesLateralDer").html(botonesAccionSMDer);
                    $("#listaAcciones").html(listaAcciones);
                    $(".menuTooltipActuaciones").tooltip();
   //                    ////alert(botonesAccionLG);
   //                    ////alert(botonesAccionSM);
                 });
      }
      ;

      function getItemsContextArbolJudicial(node, callback) {
         // obtiene menu contextual para la creacion de actuaciones o carpetas
         var cveAdscripcion = $('#hddCveAdscripcion').val();
         var cveUsuarioSistema = cveUsuarioSesion;
         var selectedNode = $(node)[0];
         var label = "";
         //console.dir(selectedNode);
         var nodeClasses = (selectedNode.li_attr.class != undefined) ? selectedNode.li_attr.class : "";

         var cveJuzgado = selectedNode.li_attr.dataCveJuzgado;
         var cveTipoCarpeta = selectedNode.li_attr.dataCveTipoCarpeta;
         var idReferencia = selectedNode.li_attr.id;
         var segundaInstancia = false;

         $.ajax({
               type: "POST",
               async: false,
               url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
               data: {accion: "getInstanciaJuzgado"},
               dataType: 'json',
               success: function (data) {
                  if (data.Estatus == 'ok') {
                     if (data.resultados[0].cveInstancia == 2) {
                        // es segunda instancia
                        segundaInstancia =  true;
                     }
                  }
               },
               error: function (objeto, quepaso, otroobj) {
               }
            });

         if (nodeClasses.indexOf("carpetaPadre") != -1) {
            // El click es en una carpeta padre
            // para segunda instancia no se debe permitir el boton secundario en las carpetas de primera
            var habilita_click = true;
            $.ajax({
               type: "POST",
               async: false,
               url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
               data: {accion: "getInstanciaJuzgado"},
               dataType: 'json',
               success: function (data) {
                  if (data.Estatus == 'ok') {
                     if (data.resultados[0].cveInstancia == 2 && cveTipoCarpeta != 6 && cveTipoCarpeta != 8 && cveTipoCarpeta != 9) {
                        // no puede hacer click con el boton secundario
                        habilita_click =  false;
                     }
                  }
               },
               error: function (objeto, quepaso, otroobj) {
               }
            });
            if (!habilita_click) {
               return false;
            }
            // obtener permisos
            var items = {};
            $.ajax({
               type: "GET",
               url: "../archivos/" + cveUsuarioSistema + ".json",
               //async: false,
               success: function (data) {

               },
               error: function (e) {
                  alert("no se pudo cargar el menu para carpeta judicial");
               },
               complete: function (data) {
                  $(data.responseJSON.perfiles[0].perfil).each(function (key1, element1) {
                     if (element1.cveAdscripcion == cveAdscripcion) {
                        var permisos = element1.permisos;
                        $(permisos).each(function (key, element) {
                           if (element.nomFormulario == "CARPETAS JUDICIALES" || element.nomFormulario == "ATENCION PUBLICO" || element.nomFormulario == "JUECES" || element.nomFormulario == "SECRETARIO DE TRIBUNAL DE ALZADA" || element.nomFormulario == "PROYECTISTA") {
                              $(element.hijos).each(function (keyhijo, hijo) {
                                 //console.dir(hijo.nomFormulario);
                                 if (hijo.permisoFormulario[0].create == "S") {
                                    var name = hijo.nomFormulario;
                                    //console.dir(hijo.nomFormulario);
                                    var cleanName = name.replace(/\s+/g, '');
                                    //para el icono
                                    var icono = '';
                                    var label = '';
                                    var generarItem = false;
                                    /* NOTA IMPORTANTE: Los nombres de las actuaciones que vienen en formato JSON (desde el sistema Gestion),
                                     pueden ser diferentes a los nombres de actuacion que contiene la base de datos de sigejupe.
                                     */
                                    switch (name) {
                                       case "ACTA MINIMA" :
                                          label = "ACTAS MINIMAS";
                                          icono = "icon-actaMinima";
                                          generarItem = true;
                                          break;
                                       case "ACUERDOS" :
                                          icono = "icon-acuerdo";
                                          generarItem = true;
                                          break;
                                       case "ACUERDOS DE RADICACION" :
                                          label = "ACUERDO DE RADICACION";
                                          icono = "icon-acuerdo";
                                          generarItem = true;
                                          break;
                                       case "AUTO DE APERTURA A JUICIO ORAL" :
                                          label = "AUTO JUICIO ORAL";
                                          icono = "icon-autosdeApertura";
                                          generarItem = true;
                                          break;
                                       case "AUTOS DE VINCULACION" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "CERTIFICACIONES" :
                                          icono = "icon-certificacion";
                                          generarItem = true;
                                          break;
                                       case "COMPARECENCIAS" :
                                          icono = "icon-comparecer";
                                          generarItem = true;
                                          break;
                                       case "EXHORTOS GENERADOS" :
                                          icono = "icon-exhGenerado";
                                          generarItem = true;
                                          break;
                                       case "MEDIDAS CAUTELARES" :
                                          icono = "icon-medidaCautelarOk";
                                          generarItem = true;
                                          break;
                                       case "MEDIDAS DE PROTECCION" :
                                          icono = "icon-medidasProteccion";
                                          generarItem = true;
                                          break;
                                       case "NOTIFICACIONES" :
                                          icono = "icon-notificacion";
                                          generarItem = true;
                                          break;
                                       case "OFICIOS" :
                                          icono = "icon-oficio";
                                          generarItem = true;
                                          break;
                                       case "ORDENES" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "PROMOCIONES" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "PROMOCIONES DE TERMINO" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "PROMOCIONES QUE GENERAN CARPETA JUDICIALIZADA" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "BENEFICIOS" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "FORMULACION IMPUTACION" :
                                          label = "FORMULACION DE IMPUTACION";
                                          icono = "icon-forImputacion";
                                          generarItem = true;
                                          break;
                                       case "SENTENCIAS" :
                                          icono = "icon-sentencia";
                                          generarItem = true;
                                          break;
                                       case "SENTENCIA PUBLICA" :
                                          icono = "icon-sentencia";
                                          generarItem = true;
                                          break;
                                       case "SOLICITUD DE PERITOS" :
                                          label = "SOLICITUD DE PERITO";
                                          icono = "icon-peritos";
                                          generarItem = true;
                                          break;
                                       case "SOLICITUDES DE AUDIENCIA" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "VIDEO AUDIENCIAS" :
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "AUTO DE RADICACION DE EJECUCION" :
                                          label = "AUTO DE RADICACION DE EJECUCION DE SENTENCIAS";
                                          icono = "icon-arbol";
                                          generarItem = true;
                                          break;
                                       case "REMISION PARA APELACION" :
                                          label = "REMISION DE APELACION";
                                          icono = "icon-remision-apelacion";
                                          generarItem = true;
                                          break;
                                       case "PROYECTOS DE RESOLUCION" :
                                          label = "RESOLUCION DE APELACION";
                                          icono = "icon-resolucion-apelacion";
                                          generarItem = true;
                                          break;
                                       default:
                                          icono = "icon-arbol";
                                          break;
                                    }
                                    label = (label != '') ? label : name;
                                    if (generarItem && selectedNode.li_attr.dataCveTipoCarpeta != 9 && selectedNode.li_attr.dataCveTipoCarpeta != 10) {
                                       items[cleanName] = {
                                          "label": label,
                                          "action": function () {
                                             //alert("Nueva "+name);
                                             var url = hijo.archivo;
                                             $.ajax({
                                                type: "POST",
                                                url: url,
                                                data: {'cveJuzgado': cveJuzgado, 'cveTipoCarpeta': cveTipoCarpeta, 'idReferencia': idReferencia},
                                                success: function (datos) {
                                                   $("#divFrmTreeContenido").html(datos);
                                                   var visibleFormulario = $("#collapseFormularios").is(":visible");
                                                   if (visibleFormulario == false)
                                                      $("#collapseFormularios").collapse('show');
                                                },
                                                error: function (objeto, quepaso, otroobj) {
                                                }
                                             });
                                             movermeA("collapseFormularios", "top");
                                          },
                                          "icon": icono
                                       }
                                    }
                                 }
                              });
                              callback(items);
                           }
                        });
                     }
                  });
                  
               },
               dataType: 'json'
            });
         } else {
            // El click es en una actuacion
            // obtener permisos
            var label = "";
            var items = {};
            $.ajax({
               type: "GET",
               url: "../archivos/" + cveUsuarioSistema + ".json",
               async: false,
               success: function (data) {

               },
               error: function (e) {
                  alert("no se pudo cargar el menu para carpeta judicial");
               },
               complete: function (data) {
                  var permisos = data.responseJSON.perfiles[0].perfil[0].permisos;
                  $(permisos).each(function (key, element) {
                     if (element.nomFormulario == "CARPETAS JUDICIALES" || element.nomFormulario == "ATENCION PUBLICO" || element.nomFormulario == "JUECES" || element.nomFormulario == "SECRETARIO DE TRIBUNAL DE ALZADA") {
                        $(element.hijos).each(function (keyhijo, hijo) {
                           //console.dir(hijo.nomFormulario);
                           if (hijo.permisoFormulario[0].create == "S") {
                              var name = hijo.nomFormulario;
                              //console.dir(hijo.nomFormulario);
                              var cleanName = name.replace(/\s+/g, '');
                              //para el icono
                              var icono = '';
                              var generarItem = false;
                              var label = "";
                              // para los items personalizados
                              var itemPermitidoSoloEn = [];
                              /* NOTA IMPORTANTE: Los nombres de las actuaciones que vienen en formato JSON (desde el sistema Gestion),
                               pueden ser diferentes a los nombres de actuacion que contiene la base de datos de sigejupe.
                               */
                              switch (name) {
                                 case "ACTA MINIMA" :
                                    itemPermitidoSoloEn = ["AUDIENCIA"];
                                    label = "ACTAS MINIMAS";
                                    icono = "icon-actaMinima";
                                    generarItem = true;
                                    break;
                                 case "ACUERDOS" :
                                    itemPermitidoSoloEn = ["PROMOCIONES", "PROMOCIONES DE TERMINO", "PROMOCIONES QUE GENERAN CARPETA JUDICIALIZADA"];
                                    icono = "icon-acuerdo";
                                    generarItem = true;
                                    break;
                                 case "ACUERDO DE RADICACION" :
                                    itemPermitidoSoloEn = ["REMISION DE APELACION"];
                                    icono = "icon-acuerdo";
                                    generarItem = true;
                                    break;
                                 case "AUTO DE APERTURA A JUICIO ORAL" :
                                    label = "AUTO JUICIO ORAL";
                                    icono = "icon-autosdeApertura";
                                    generarItem = true;
                                    break;
                                 case "AUTOS DE VINCULACION" :
                                    icono = "icon-arbol";
                                    generarItem = true;
                                    break;
                                 case "CERTIFICACIONES" :
                                    icono = "icon-certificacion";
                                    generarItem = true;
                                    break;
                                 case "COMPARECENCIAS" :
                                    icono = "icon-comparecer";
                                    generarItem = true;
                                    break;
                                 case "EXHORTOS GENERADOS" :
                                    itemPermitidoSoloEn = ["OFICIOS"];
                                    icono = "icon-exhGenerado";
                                    generarItem = true;
                                    break;
                                 case "MEDIDAS CAUTELARES" :
                                    icono = "icon-medidaCautelarOk";
                                    generarItem = true;
                                    break;
                                 case "MEDIDAS DE PROTECCION" :
                                    icono = "icon-medidasProteccion";
                                    generarItem = true;
                                    break;
                                 case "NOTIFICACIONES" :
                                    itemPermitidoSoloEn = ["ACUERDOS", "AUTO JUICIO ORAL", "AUTOS", "AUTO DE RADICACION DE EJECUCION DE SENTENCIAS", "ACTAS MINIMAS"];
                                    icono = "icon-notificacion";
                                    generarItem = true;
                                    break;
                                 case "OFICIOS" :
                                    itemPermitidoSoloEn = ["ACUERDOS", "AUTO JUICIO ORAL", "AUTOS", "AUTO DE RADICACION DE EJECUCION DE SENTENCIAS", "ACTAS MINIMAS"];
                                    icono = "icon-oficio";
                                    generarItem = true;
                                    break;
                                 case "ORDENES" :
                                    icono = "icon-arbol";
                                    generarItem = true;
                                    break;
                                 case "BENEFICIOS" :
                                    itemPermitidoSoloEn = ["SENTENCIAS"];
                                    icono = "icon-arbol";
                                    generarItem = true;
                                    break;
                                 case "FORMULACION IMPUTACION" :
                                    label = "FORMULACION DE IMPUTACION";
                                    icono = "icon-forImputacion";
                                    generarItem = true;
                                    break;
                                 case "SENTENCIAS" :
                                    icono = "icon-sentencia";
                                    generarItem = true;
                                    break;
                                 case "SENTENCIA PUBLICA" :
                                    icono = "icon-sentencia";
                                    // en un futuro las sentencias publicas solo partiran de una sentencia
                                    //itemPermitidoSoloEn = ["SENTENCIAS"];
                                    generarItem = true;
                                    break;
                                 case "AUTO DE RADICACION DE EJECUCION" :
                                    label = "AUTO DE RADICACION DE EJECUCION DE SENTENCIAS";
                                    itemPermitidoSoloEn = ["SENTENCIAS"];
                                    icono = "icon-arbol";
                                    generarItem = true;
                                    break;
                                 case "SOLICITUD DE PERITOS" :
                                    itemPermitidoSoloEn = ["ACUERDOS", "ACTAS MINIMAS"];
                                    label = "SOLICITUD DE PERITO";
                                    icono = "icon-peritos";
                                    generarItem = true;
                                    break;
                                 case "VIDEO AUDIENCIAS" :
                                    icono = "icon-arbol";
                                    generarItem = true;
                                    break;
                                 case "ACUERDO DE RADICACION" :
                                    itemPermitidoSoloEn = ["REMISION DE APELACION"];
                                    icono = "icon-arbol";
                                    generarItem = true;
                                    break;
                                 default:
                                    icono = "icon-arbol";
                                    break;
                              }
                              label = (label != '') ? label : name;

                              if (generarItem) {
                                 if ($.inArray(selectedNode.li_attr.dataActuacionName, itemPermitidoSoloEn) != -1) {
                                    items[cleanName] = {
                                       "label": name,
                                       "action": function () {
                                          //alert("Nueva "+name);
                                          var url = hijo.archivo;
                                          var cveJuzgado = selectedNode.li_attr.dataCveJuzgado;
                                          var cveTipoCarpeta = selectedNode.li_attr.dataCveTipoCarpeta;
                                          var idActuacionPadre = selectedNode.li_attr.dataIdActuacion;
                                          var idReferencia = selectedNode.li_attr.dataIdCarpeta;
//                                          if(segundaInstancia){
//                                              url = url + '?origen=1';
//                                          }
                                          $.ajax({
                                             type: "POST",
                                             url: url,
                                             data: {'cveJuzgado': cveJuzgado, 'cveTipoCarpeta': cveTipoCarpeta, 'idActuacionPadre': idActuacionPadre, 'idReferencia': idReferencia},
                                             success: function (datos) {
                                                $("#divFrmTreeContenido").html(datos);
                                                var visibleFormulario = $("#collapseFormularios").is(":visible");
                                                if (visibleFormulario == false)
                                                   $("#collapseFormularios").collapse('show');
                                             },
                                             error: function (objeto, quepaso, otroobj) {
                                             }
                                          });
                                          movermeA("collapseFormularios", "top");
                                       },
                                       "icon": icono
                                    }
                                 }
                              }
                           }
                        });
                        callback(items);
                     }
                  });
               },
               dataType: 'json'
            });
         }
      }
      ;

      loadFormTree = function (jsonURL, nom) {
         tutoOption = "FORMULARIO";
         $("#infoAyuda").attr('tuto', nom);
         $("#infoAyuda").attr('key', nom);
         console.log("ELIMINAR ATTR");
         $(".para-tutorial").removeAttr("data-step");
         $(".para-tutorial").removeAttr("data-intro");
         $(".para-tutorial").removeAttr("data-position");
         console.log("ELIMINAR ATTR");
   //        $("#infoAyuda").attr('title', 'Tutorial ' + nom);
   //            alert("HOLA");
         var visibleFormulario = $("#collapseFormularios").is(":visible");
   //            //alert(visibleFormulario);
         if (visibleFormulario == false)
            $("#collapseFormularios").collapse('show');
   //            $("#collapseOne").collapse('show');
   //        loadOpcion(jsonURL, 'divFrmTreeContenido');
   //        $("#hddIdCarpetaJudicialEnviar").val(idCarpetaJudicial);
   //        $("#hddIdReferenciaEnviar").valid(idReferencia);
   //        $("#hddCveTipoCarpetaEnviar").val(cveTipoCarpeta);
         var datosURL;
         if ($("#hddIdReferenciaEnviar").val() != "") {
            datosURL = {
               cveJuzgado: $("#cmbJuzgadoArbol").val(),
               cveTipoCarpeta: $("#cmbTipoCarpetaTree").val(),
               idActuacionPadre: $("#hddIdActuacionPadreEnviar").val(),
               idReferencia: $("#hddIdReferenciaEnviar").val()
            };
         } else {
            datosURL = {
               cveTipoCarpeta: $("#cmbTipoCarpetaTree").val(),
               numero: $("#txtNumeroTree").val(),
               anio: $("#txtAnioTree").val()
            };
         }
         $.ajax({
            type: 'POST',
            url: jsonURL,
            data: datosURL,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
   //                    console.log(datos);
               $("#divFrmTreeContenido").html(datos);
               var visibleFormulario = $("#collapseFormularios").is(":visible");
               if (visibleFormulario == false)
                  $("#collapseFormularios").collapse('show');
            },
            error: function (objeto, quepaso, otroobj) {
            }
         });
         movermeA("collapseFormularios", "top");
      };

      getTreeCriteria = function () {
         //alert(botonSMExpediente);
         if (botonSMExpediente)
            $("#arbolTab").click();
         botonSMExpediente = false;
         $("#cmbJuzgadoArbol");
         $("#txtNumeroTree");
         $("#txtAnioTree");
         $("#txtNUCTree");
         $("#txtNumCarpInvTree");
         $("#cmbTipoCarpetaTree");
         if ((($.trim($("#txtNumeroTree").val()) !== "") && ($.trim($("#txtAnioTree").val())) !== "")
                 || ($.trim($("#txtNUCTree").val()) !== "")
                 || ($.trim($("#txtNumCarpInvTree").val()) !== "")) {

            $.post("../fachadas/sigejupe/arbol/ArbolFacade.Class.php",
                    {
                       accion: "selectTree",
                       activo: "S",
                       cveJuzgado: $("#cmbJuzgadoArbol").val(),
                       numero: $("#txtNumeroTree").val(),
                       anio: $("#txtAnioTree").val(),
                       nuc: $("#txtNUCTree").val(),
                       numCarpInv: $("#txtNumCarpInvTree").val(),
                       cveTipoCarpeta: $("#cmbTipoCarpetaTree").val()
                    }
            , function (json) {

               if (json !== "") {
                  json = eval("(" + json + ")");
                  if (json.estatus === "ok") {
                     $("#divPanelConsultaTree").hide();
                     $("#divTreesResults").show();
                     $("#divHeadConsultaTree").addClass("closeMenu");
                     $("#divHeadConsultaTree").on("click", function () {
                        $("#divPanelConsultaTree").show("slide");
                        $("#divHeadConsultaTree").removeClass("closeMenu");
                     });
                     constructCronTree(json);
                     constructGroupTree(json);
                  } else if (json.estatus === "fail") {
                     $("#divAlertWarningTree").html(json.mnj);
                     $("#divAlertWarningTree").show("slide");
                     setTimeAlert("divAlertWarningTree");
                  }
               } else {
                  $("#divAlertWarningTree").html("No fue posible realizar la consulta");
                  $("#divAlertWarningTree").show("slide");
                  setTimeAlert("divAlertWarningTree");
               }
            });
         } else {
            $("#divAlertWarningTree").html("Necesita establecer criterios para consultar");
            $("#divAlertWarningTree").show("slide");
            setTimeAlert("divAlertWarningTree");
         }


      };

      loadOpcionValue = function (url, idActuacion, idCarpetaJudicial, div) {
         $.post(url, {idActuacion: idActuacion, idCarpetaJudicial: idCarpetaJudicial}, function (htmlexterno) {
            $("#" + div).html(htmlexterno);
         });
      };

      loadFormActuacion = function (url, idActuacion, idReferencia, cveTipoCarpeta, juzgadoOrigenArbol) {
         $("#hddIdReferenciaEnviar").val(idReferencia);
         $("#hddCveTipoCarpetaEnviar").val(cveTipoCarpeta);
         $("#hddIdActuacionPadreEnviar").val(idActuacion);
         $.post(url, {idActuacion: idActuacion, idReferencia: idReferencia, cveTipoCarpeta: cveTipoCarpeta, juzgadoOrigenArbol: juzgadoOrigenArbol}, function (htmlexterno) {
            $("#divFrmTreeContenido").html(htmlexterno);
            var visibleFormulario = $("#collapseFormularios").is(":visible");
            if (visibleFormulario == false)
               $("#collapseFormularios").collapse('show');
         });
      };
      loadFormCarpeta = function (idCarpeta, cveTipoCarpeta,cveJuzgado = 0) {
         $("#hddIdReferenciaEnviar").val(idCarpeta);
         $("#hddCveTipoCarpetaEnviar").val(cveTipoCarpeta);
         $("#hddIdActuacionPadreEnviar").val('');
         var enviado = false;
         switch (cveTipoCarpeta) {
            case 1: // NUMERO AUXILIAR
            case 2: // CAUSA DE CONTROL
            case 3: // CAUSA DE JUICIO
            case 4: // CAUSA DE TRIBUNAL
            case 5: // EXPEDIENTE
               var url = 'sigejupe/actualizarcarpetasjudiciales/frmActualizarcarpetasjudiciales.php';
               break;
            case 6: // TOCA
               var url = 'sigejupe/actualizartocascarpetas/frmActualizarTocasCarpetas.php';
               break;
            case 7: // EXHORTO
               var url = 'sigejupe/exhortos/frmExhortos.php?exhorto=0';
               break;
            case 8: // AMPARO
               var url = 'sigejupe/amparos/frmAmparos.php';
               $.post(url, {idAmparo: idCarpeta, cveTipoCarpeta: cveTipoCarpeta,cveJuzgado: cveJuzgado}, function (htmlexterno) {
                  $("#divFrmTreeContenido").html(htmlexterno);
                  var visibleFormulario = $("#collapseFormularios").is(":visible");
                  if (visibleFormulario == false)
                     $("#collapseFormularios").collapse('show');
               });
               enviado = true;
               break;
            case 9: // CATEO
               var url = 'sigejupe/consultasCateos/frmConsultasSolicitudesCateosView.php';
               $.post(url, {idCateo: idCarpeta, cveTipoCarpeta: cveTipoCarpeta, cveJuzgado: cveJuzgado}, function (htmlexterno) {
                  $("#divFrmTreeContenido").html(htmlexterno);
                  var visibleFormulario = $("#collapseFormularios").is(":visible");
                  if (visibleFormulario == false)
                     $("#collapseFormularios").collapse('show');
               });
               enviado = true;
               break;
            case 10: // ORDEN DE APREHENSION
               var url = 'sigejupe/consultasCateos/frmConsultasSolicitudesOrdenesView.php';
               $.post(url, {idOrden: idCarpeta, cveTipoCarpeta: cveTipoCarpeta, cveJuzgado: cveJuzgado}, function (htmlexterno) {
                  $("#divFrmTreeContenido").html(htmlexterno);
                  var visibleFormulario = $("#collapseFormularios").is(":visible");
                  if (visibleFormulario == false)
                     $("#collapseFormularios").collapse('show');
               });
               enviado = true;
               break;
            default:
               return false;
               break;
         }
         if (!enviado) {
            $.post(url, {idCarpeta: idCarpeta, cveTipoCarpeta: cveTipoCarpeta, cveJuzgado: cveJuzgado}, function (htmlexterno) {
               $("#divFrmTreeContenido").html(htmlexterno);
               var visibleFormulario = $("#collapseFormularios").is(":visible");
               if (visibleFormulario == false)
                  $("#collapseFormularios").collapse('show');
            });
         }
      };
      tutoLG = function (otra) {
   //        data-step="1" data-intro="Realice la b&uacute;squeda de una Carpeta Judicial." data-position='right'
         console.log("TUTO LG");
         $(".para-tutorial").removeAttr("data-step");
         $(".para-tutorial").removeAttr("data-intro");
         $(".para-tutorial").removeAttr("data-position");

         $("#container-principal").attr("data-step", "1");
         $("#container-principal").attr("data-intro", "Arbol Judicial");
         $("#container-principal").attr("data-position", "top");

         $("#container-final-tutorial").attr("data-step", "8");
         $("#container-final-tutorial").attr("data-intro", "Maximice la vista de la b&uacute;squeda, expediente, formularios y bandeja dando clic aqu&iacute;.");
         $("#container-final-tutorial").attr("data-position", "top");

         $("#para-tutorial-busqueda-penal").attr("data-step", "2");
         $("#para-tutorial-busqueda-penal").attr("data-intro", "Realice la b&uacute;squeda de una Carpeta Judicial.");
         $("#para-tutorial-busqueda-penal").attr("data-position", "top");

         $("#para-tutorial-busqueda-penal-arbol").attr("data-step", "3");
         $("#para-tutorial-busqueda-penal-arbol").attr("data-intro", "Vizualice el expediente y navegue a trav&eacute;s de &eacute;l.");
         $("#para-tutorial-busqueda-penal-arbol").attr("data-position", "top");

         $("#para-tutorial-busqueda-formulario").attr("data-step", "4");
         $("#para-tutorial-busqueda-formulario").attr("data-intro", "Disponga del formulario para registrar, actualizar o eliminar.");
         $("#para-tutorial-busqueda-formulario").attr("data-position", "top");

         $("#para-tutorial-busqueda-bandejas").attr("data-step", "5");
         $("#para-tutorial-busqueda-bandejas").attr("data-intro", "Realice diversas consultas de la bandeja con base al periodo seleccionado.");
         $("#para-tutorial-busqueda-bandejas").attr("data-position", "top");

         $("#button-ocultar-fixed").attr("data-step", "7");
         $("#button-ocultar-fixed").attr("data-intro", "Maximice la vista de la b&uacute;squeda, expediente, formularios y bandeja dando clic aqu&iacute;.");
         $("#button-ocultar-fixed").attr("data-position", "right");

         $("#para-tutorial-menu-acciones").attr("data-step", "6");
         $("#para-tutorial-menu-acciones").attr("data-intro", "Seleccione alguna de las opciones del men&uacute;.");
         $("#para-tutorial-menu-acciones").attr("data-position", "right");

      };
      tutoLGIzq = function () {
   //        alert("tutoLGIzq");
         $(".para-tutorial").removeAttr("data-step");
         $(".para-tutorial").removeAttr("data-intro");
         $(".para-tutorial").removeAttr("data-position");

         $("#container-principal").attr("data-step", "1");
         $("#container-principal").attr("data-intro", "Arbol Judicial");
         $("#container-principal").attr("data-position", "top");

         $("#container-final-tutorial").attr("data-step", "8");
         $("#container-final-tutorial").attr("data-intro", "Maximice la vista de la b&uacute;squeda, expediente, formularios y bandeja dando clic aqu&iacute;.");
         $("#container-final-tutorial").attr("data-position", "top");

         $("#para-tutorial-busqueda-penal").attr("data-step", "2");
         $("#para-tutorial-busqueda-penal").attr("data-intro", "Realice la b&uacute;squeda de una Carpeta Judicial.");
         $("#para-tutorial-busqueda-penal").attr("data-position", "top");

         $("#para-tutorial-busqueda-penal-arbol").attr("data-step", "3");
         $("#para-tutorial-busqueda-penal-arbol").attr("data-intro", "Vizualice el expediente y navegue a trav&eacute;s de &eacute;l.");
         $("#para-tutorial-busqueda-penal-arbol").attr("data-position", "top");

         $("#para-tutorial-busqueda-formulario").attr("data-step", "4");
         $("#para-tutorial-busqueda-formulario").attr("data-intro", "Disponga del formulario para registrar, actualizar o eliminar.");
         $("#para-tutorial-busqueda-formulario").attr("data-position", "top");

         $("#para-tutorial-busqueda-bandejas").attr("data-step", "5");
         $("#para-tutorial-busqueda-bandejas").attr("data-intro", "Realice diversas consultas de la bandeja con base al periodo seleccionado.");
         $("#para-tutorial-busqueda-bandejas").attr("data-position", "top");

         $("#button-ocultar-fixed").attr("data-step", "7");
         $("#button-ocultar-fixed").attr("data-intro", "Maximice la vista de la b&uacute;squeda, expediente, formularios y bandeja dando clic aqu&iacute;.");
         $("#button-ocultar-fixed").attr("data-position", "right");

         $("#menu-botones-float").attr("data-step", "6");
         $("#menu-botones-float").attr("data-intro", "Seleccione alguna de las opciones del men&uacute;.");
         $("#menu-botones-float").attr("data-position", "left");

      }
      tutoMD = function () {
   //        alert("TUTO MD"); 
         $(".para-tutorial").removeAttr("data-step");
         $(".para-tutorial").removeAttr("data-intro");
         $(".para-tutorial").removeAttr("data-position");

         $("#container-principal").attr("data-step", "1");
         $("#container-principal").attr("data-intro", "Realice la b&uacute;squeda de una Carpeta Judicial.");
         $("#container-principal").attr("data-position", "top");

         $("#container-final-tutorial").attr("data-step", "7");
         $("#container-final-tutorial").attr("data-intro", "Paso 7");
         $("#container-final-tutorial").attr("data-position", "top");

         $("#para-tutorial-busqueda-penal").attr("data-step", "2");
         $("#para-tutorial-busqueda-penal").attr("data-intro", "Visualice el expediente y navegue a trav&eacute;s de &eacute;l.");
         $("#para-tutorial-busqueda-penal").attr("data-position", "top");

         $("#para-tutorial-busqueda-penal-arbol").attr("data-step", "3");
         $("#para-tutorial-busqueda-penal-arbol").attr("data-intro", "Seleccione alguna de las opciones del men&uacute;.");
         $("#para-tutorial-busqueda-penal-arbol").attr("data-position", "top");

         $("#para-tutorial-busqueda-formulario").attr("data-step", "4");
         $("#para-tutorial-busqueda-formulario").attr("data-intro", "Paso 4");
         $("#para-tutorial-busqueda-formulario").attr("data-position", "top");

         $("#para-tutorial-busqueda-bandejas").attr("data-step", "5");
         $("#para-tutorial-busqueda-bandejas").attr("data-intro", "Paso 5");
         $("#para-tutorial-busqueda-bandejas").attr("data-position", "top");

         $("#menu-botones-float").attr("data-step", "6");
         $("#menu-botones-float").attr("data-intro", "Maximice la vista de la b&uacute;squeda, expediente, formularios y bandeja dando clic aqu&iacute;.");
         $("#menu-botones-float").attr("data-position", "right");
      };
      tutoSM = function () {
   //        alert("TUTO SM");        
      };
      tutoXS = function () {
   //        alert("TUTO XS");

      };

      constructCronTree = function (json) {
         //                var len = json.resultados.length;
         var html = '';
         //                for (var i = 0; i < len; i++) {
         //                    html += '<li id="li2">';
         //                    html += ' <a href="#' + json.resultados[i].idCarpetaJudicial + '">' + json.resultados[i].desTipoCarpeta + ' ' + json.resultados[i].numero + '/' + json.resultados[i].anio + '</a>';
         //                    html += '<ul>';
         //                    html += '<li>DATOS GENERALES';
         //                    html += '</li>';
         //                    html += '</ul>';
         //                    html += '<ul>';
         //                    var reslen = json.resultados[i].actuaciones.length;
         //                    for (var j = 0; j < reslen; j++) {
         //                        //url, idActuacion, idCarpetaJudicial, div
         ////                        html += '<li id="C2" onclick="//alert(541)">';
         //                        html += '<li id="C2" onclick="loadOpcionValue(\'' + json.resultados[i].actuaciones[j].urlActuacion + '\',\'' + json.resultados[i].actuaciones[j].idActuacion + '\',\'' + json.resultados[i].idCarpetaJudicial + '\',\'divFrmTreeContenido\')">';
         //                        html += json.resultados[i].actuaciones[j].fechaRegistro;
         //                        html += " - ";
         //                        html += json.resultados[i].actuaciones[j].desTipoActuacion;
         //                        html += " - ";
         //                        html += json.resultados[i].actuaciones[j].sintesis;
         ////                        html += " - ";
         ////                        html += json.resultados[i].actuaciones[j].fechaRegistro;
         //                        json.resultados[i].actuaciones[j].idActuacion;
         //                        json.resultados[i].actuaciones[j].numActuacion;
         //                        json.resultados[i].actuaciones[j].aniActuacion;
         //                        json.resultados[i].actuaciones[j].cveTipoActuacion;
         //                        json.resultados[i].actuaciones[j].desTipoActuacion;
         //                        json.resultados[i].actuaciones[j].sintesis;
         //                        json.resultados[i].actuaciones[j].observaciones;
         //                        json.resultados[i].actuaciones[j].fechaRegistro;
         //                        html += '</li>';
         //                    }
         //                    html += '</ul>';
         //                    html += '</li>';
         //                }
         $("#treeCronologico").html(html);
         $('#treeCronologico').treed({openedClass: 'glyphicon-folder-open', closedClass: 'glyphicon-folder-close'});
      }

      $(document).ready(function () {
         $("#button-ocultar-fixed").click(function () {
            tutoOption = "LGizq";
            if ($("#texto-vertical-letra-cerrar").is(":visible")) {
               $("#texto-vertical-letra-cerrar").hide();
               $("#texto-vertical-letra-abrir").show();
               $("#col-id-all-completa").removeClass("col-lg-12");
               $("#col-id-all-completa").removeClass("col-md-12");
               $("#col-id-all-completa").addClass("col-lg-11");
               $("#col-id-all-completa").addClass("col-md-11");
               //para abrir
   //                $("#menuAccionesOcultar").removeAttr("data-step");
   //                $("#menuAccionesOcultar").removeAttr("data-intro");
   //                data-step="3" data-intro="Puedes agregar un texto por favor" data-position='right'.
               console.log("para abrir");
   //                $("#menu-botones-float").attr("data-step", "3");
   //                $("#menu-botones-float").attr("data-position", "left");
   //                $("#menu-botones-float").attr("data-intro", "Puedes agregar un texto por favor");
            } else {
               $("#texto-vertical-letra-cerrar").show();
               $("#texto-vertical-letra-abrir").hide();
               $("#col-id-all-completa").removeClass("col-lg-11");
               $("#col-id-all-completa").removeClass("col-md-11");
               $("#col-id-all-completa").addClass("col-lg-12");
               $("#col-id-all-completa").addClass("col-md-12");
               // para cerrar
               console.log("para cerrar");
   //                $("#menuAccionesOcultar").removeAttr("data-step");
   //                $("#menuAccionesOcultar").removeAttr("data-intro");
   //                data-step="3" data-intro="Puedes agregar un texto por favor" data-position='right'
   //                $("#menu-botones-float").attr("data-step", "3");
   //                $("#menu-botones-float").attr("data-position", "right");
   //                $("#menu-botones-float").attr("data-intro", "Puedes agregar un texto por favor");
            }
            $("#cambiarDiv12").toggleClass("col-lg-4 col-lg-12");
            $("#button-ocultar-fixed").toggleClass("botonClickOcultar botonClickMostrar");
            $("#dimensionarDe8-12").toggleClass("col-lg-8 col-lg-12");
            $("#menu-botones-float").removeClass("cambiosIzquierda");
            $("#menu-botones-float").addClass("cambiosDerecha");
            $("#collapseUno").collapse("show");
            $("#collapseArbol").collapse("show");
            if ($("#menu-botones-float").is(":visible")) {
               $("#menu-botones-float").hide();
               $("#menuAccionesOcultar").show();
               console.log(" 1 visible");
               $("#button-ocultar-fixed").attr("posicionLinea", "centro");
            } else {
               $("#button-ocultar-fixed").attr("posicionLinea", "izquierda");
               $("#menuAccionesOcultar").hide();
               $("#menu-botones-float").removeClass("hidden-lg");
               $("#menu-botones-float").show();
               console.log(" 2 visible");
   //                aqui 
               $(".menuTooltipActuaciones ").removeClass("tooltipsDerecha");
               $(".menuTooltipActuaciones ").addClass("tooltipsIzquierda");
            }
   //            $("#menu-botones-float").toggleClass("cambiosIzquierda cambiosDerecha");


         });
         cargarJuzgadosArbol();
         //obtenerAcciones();
         $("#txtNumeroTree").validaCampo('0123456789');
         $("#txtAnioTree").validaCampo('0123456789');
         $('#divTree').jstree();
         $('[data-toggle="tooltip_arbol_judicial"]').tooltip();

      });

      (function (a) {
         a.fn.validaCampo = function (b) {
            a(this).on({keypress: function (a) {
                  var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                  (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
               }})
         }
      })(jQuery);


      constructGroupTree = function (json) {
         var len = json.resultados.length;
         var html = '';
         //                for (var i = 0; i < len; i++) {
         //                    html += '<li id="li2">';
         //                    html += ' <a href="#' + json.resultados[i].idCarpetaJudicial + '">' + json.resultados[i].desTipoCarpeta + ' ' + json.resultados[i].numero + '/' + json.resultados[i].anio + '</a>';
         //                    html += '<ul>';
         //                    html += '<li>DATOS GENERALES';
         //                    html += '</li>';
         //                    html += '</ul>';
         //                    html += '<ul>';
         //                    var reslen = json.resultados[i].actuaciones.length;
         //                    var grouplen = json.resultados[i].actuacionesGroup.length;
         //                    for (var j = 0; j < grouplen; j++) {
         //                        html += '<ul>';
         //                        html += '<li>' + json.resultados[i].actuacionesGroup[j].desTipoActuacion;
         //                        html += '<ul id="' + json.resultados[i].actuacionesGroup[j].cveTipoActuacion + '-' + json.resultados[i].idCarpetaJudicial + '">';
         //                        html += '</ul>';
         //                        html += '</li>';
         //                        html += '</ul>';
         //                    }
         //                    html += '</ul>';
         //                    html += '</li>';
         //                }

         //                $("#treeGroup").html(html);
         //                for (var i = 0; i < len; i++) {
         //                    for (var j = 0; j < reslen; j++) {
         //                        var nodoHtml = "";
         //                        nodoHtml += '<li id="' + json.resultados[i].actuaciones[j].idActuacion + '" onclick="loadOpcionValue(\'' + json.resultados[i].actuaciones[j].urlActuacion + '\',\'' + json.resultados[i].actuaciones[j].idActuacion + '\',\'' + json.resultados[i].idCarpetaJudicial + '\',\'divFrmTreeContenido\')">';
         ////                        nodoHtml += "<li id='" + json.resultados[i].actuaciones[j].idActuacion + "'>";
         ////                        html += '<li id="' + json.resultados[i].actuaciones[j].idActuacion + '" onclick="loadOpcionValue(\'' + json.resultados[i].actuaciones[j].url + '\',\'' + json.resultados[i].actuaciones[j].idActuacion + '\',\'' + json.resultados[i].idCarpetaJudicial + '\',\'divFrmTreeContenido\')">';
         //                        nodoHtml += json.resultados[i].actuaciones[j].fechaRegistro;
         //                        nodoHtml += " - ";
         //                        nodoHtml += json.resultados[i].actuaciones[j].desTipoActuacion;
         //                        nodoHtml += " - ";
         //                        nodoHtml += json.resultados[i].actuaciones[j].sintesis;
         //                        nodoHtml += "</li>";
         //                        $("#" + json.resultados[i].actuaciones[j].cveTipoActuacion + "-" + json.resultados[i].actuaciones[j].idReferencia).append(nodoHtml);
         //                    }

         //                }
         //                $('#treeGroup').treed({openedClass: 'glyphicon-folder-open', closedClass: 'glyphicon-folder-close'});
      }

      //    $(function () {
      //        $("#txtFecInicioBandeja").datepicker(
      //                {
      //                    format: "dd/mm/yyyy"
      //                }
      //        );
      //        $("#txtFecFinBandeja").datepicker(
      //                {
      //                    format: "dd/mm/yyy"
      //                }
      //        );
      //        //                getTiposCarpetas();
      //        //                $("#tree2").contextMenu({
      //        //                    menuSelector: "#contextMenu",
      //        //                    menuSelected: function (invokedOn, selectedMenu) {
      //        ////                        //alert(invokedOn.html());
      //        ////                        //alert(selectedMenu.html());
      //        //                    }
      //        //                });
      //        //                $('#tree2').treed({openedClass: 'glyphicon-folder-open', closedClass: 'glyphicon-folder-close'});
      //        //                $('#treeCronologico').treed({openedClass: 'glyphicon-folder-open', closedClass: 'glyphicon-folder-close'});
      //    });
      function dump(obj) {
         var out = '';
         for (var i in obj) {
            out += i + ": " + obj[i] + "\n";
         }

         alert(out);

         // or, if you wanted to avoid alerts...

         var pre = document.createElement('pre');
         pre.innerHTML = out;
         document.body.appendChild(pre);
      }
   </script>
   <div class="webui-popover-backdrop" style="display: none;">
   </div>
<?php
}else{
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>