<?php
session_start();
date_default_timezone_set('America/Mexico_City');
$fechahoy = date("d/m/y");
$_SESSION["cveSistema"] = 38;

if ((isset($_SESSION["cveUsuarioSistema"])) && (!empty($_SESSION["cveUsuarioSistema"]))) {
   ?>
   <!doctype html>
   <html>
      <head>
         <meta name="description" content="Dashboard" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta http-equiv="content-type" content="text/html; charset=UTF-8">
         <meta charset="UTF-8">

         <meta name="application-name" content="SIGEJUPE 2.0" />
        <meta name="apple-mobile-web-app-title" content="SIGEJUPE 2.0" />

        <!-- icono en la resolusion mas alta-->
        <link rel="apple-touch-icon" href="img/iconos/iconApp4/LogoAppPJ_192.png" />
        <link rel="icon" sizes="228x228" href="img/iconos/iconApp4/LogoAppPJ_192.png" />
        <link href="img/iconos/iconApp4/LogoAppPJ_144.png" rel="icon" sizes="192x192" />
        <link href="img/iconos/iconApp4/LogoAppPJ_144.png" rel="icon" sizes="128x128" />

        <!--         reusa el mismo icono para Safari diversos iconos para IE-->
        <meta name="msapplication-square70x70logo" content="img/iconos/iconApp4/LogoAppPJ_72.png" />
        <meta name="msapplication-square150x150logo" content="img/iconos/iconApp4/LogoAppPJ_72.png" />
        <meta name="msapplication-wide310x150logo" content="img/iconos/iconApp4/LogoAppPJ_72.png" />
        <meta name="msapplication-square310x310logo" content="img/iconos/iconApp4/LogoAppPJ_72.png" />

        <!--ICONOS PARA IOS-->
        <link rel="apple-touch-icon" href="img/iconos/iconApp4/LogoAppPJ_72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/iconos/iconApp4/LogoAppPJ_72.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="img/iconos/iconApp4/LogoAppPJ_72.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="img/iconos/iconApp4/LogoAppPJ_72.png" />
         
         <title>SIGEJUPE v2.0</title>

         <link type="text/css" href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet" />
         <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
         <link type="text/css" href="css/weather-icons.min.css" rel="stylesheet" />
         <link type="text/css" href="css/beyond.min.css" rel="stylesheet" type="text/css" />
         <link type="text/css" href="css/typicons.min.css" rel="stylesheet" />
         <link type="text/css" href="css/animate.min.css" rel="stylesheet" />
         <link type="text/css" href="css/dataTables.bootstrap.css" rel="stylesheet" />
         <link type="text/css" href="css/fixedHeader.bootstrap.min.css" rel="stylesheet" />
         <link type="text/css" href="css/loadercss.css" rel="stylesheet" />
         <link type="text/css" rel="stylesheet" href="css/jquery-ui.css">
         <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
         <link type="text/css" href="css/iconfont/style.css" rel="stylesheet" />
         <link type="text/css" href="css/iconFontTree/style.css" rel="stylesheet" />
         <link type="text/css" href="js/jstree/dist/themes/default/style.css" rel="stylesheet" />          
         <link type="text/css" rel="stylesheet" href="chat/css/stylemessage.css">
         <link type="text/css" rel="stylesheet" href="js/webui/jquery.webui-popover.min.css">
         <link type="text/css" rel="stylesheet" href="css/avisos/horizontal.css">
         <link type="text/css" rel="stylesheet" href="css/notify/jquery.notify.css">
         <link type="text/css" rel="stylesheet" href="css/tutos/introjs.css">
         <link type="text/css" rel="stylesheet" href="js/jquery-typeahead-2.6.1/src/jquery.typeahead.css">
         <script src="js/graficas/highcharts-4.2.4/lib/highcharts.js"></script>
         <script src="js/graficas/highcharts-4.2.4/lib/highcharts-3d.js"></script>
         <script src="js/graficas/highcharts-4.2.4/lib/modules/exporting.js"></script>
         <script src="js/graficas/highcharts-4.2.4/lib/modules/data.js"></script>
         <script src="js/graficas/highcharts-4.2.4/lib/modules/drilldown.js"></script>




         <style type="text/css">
            .cateosPendientes{
               width: 30%;
               bottom : 50px;
               left : -35%;
               position : fixed;
               padding: 10px;
               background: #F97D7D;
            }
            .ordenesPendientes{
               width: 30%;
               bottom : 50px;
               left : 33%;
               bottom: -30%;
               position : fixed;
               padding: 10px;
               background: #afcfcb;
            }
            #divImgFotoUsr{
               width: 45px;
               height: 45px;
               border-radius: 35px;
               border: solid 1px;
               background: #FF0000;
            }
            .control-label{
               color: #23473f;
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

            #btnReIngresar{
               margin: 0px;
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
               /*background: #427468;*/
               background: #881518  !important;
               color: #ebf3f1  !important;
            }

            .panel-heading{
               /*background: #427468;*/
               background: #881518  !important;
               color: #ebf3f1  !important;
            }

            .panel-group .panel-heading{
               /*background: #427468;*/
               background: #881518  !important;
               color: #ebf3f1  !important;
            }
            .panel-default > .panel-heading{
               /*background: #427468;*/
               background: #881518  !important;
               color: #ebf3f1  !important;
            }
            .divUserData{
               float: left;
               margin-top: 5px;
               margin-bottom: 10px;
               margin-right: 15px;
               padding: 5px;
               height: 43px;
            }

            .spanLblInfo{
               text-align: center;
               height: 43px;
               font-family: Arial;
               /*font-size: 12px;*/
               font-size: 15px;
               font-weight: bold;
               margin-top: auto;
               margin-bottom: auto;
               vertical-align: central;
               line-height: 35px;
            }


            .modal-footer{
               border: 0px;
               background: #FFFFFF;
            }


            .select2-hidden-accessible  {
               display: none;
            }

            .navbar .navbar-brand small img {
               height: 40px;
               width: 140px;
               margin-left: 15px;
            }


            body::before {

               content: "";
               display: block;
               position: fixed;
               top: 0;
               bottom: 0;
               left: 0;
               right: 0;
               z-index: -1;
               /*background-color: #fbfbfb;*/
               background-color: #FFFFFF;

            }

            .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
               color: #ad1d22;
               text-decoration: none;
               background-color: #afcfcb;
            }

            .navbar-default {
               /*background-color: #fefefe;*/
               background-color: #fefefe ;
               border-color: #fff;
            }

            .panel-default > .panel-heading {
               background: #df3338;
               color: #FFFFFF;
            }

            .btn-primary {
               background-color: #881518 !important;
               border-color: #881518;
               color: #fff;
            }

            .btn-primary:hover,
            .btn-primary:active,
            .btn-primary:focus {
               cursor: pointer;
               background-color: #df3338 !important;
            }
            #footerAvisos{
               z-index: 999;
               position: fixed;
               clear: both;
               width: 70%;
               /*height: 53px;*/
               bottom: 0;
               border: 0;
               padding: 13px 0 0 0;
               /*transitions*/
               -webkit-transition: max-height 0.8s;
               -moz-transition: max-height 0.8s;
               transition: max-height 0.8s;
            }
            #buttonAvisosOcultar{
               z-index: 999;
               position: fixed;
               clear: both;
               width: 115px;
               height: 42px;
               border: 1px solid #cecece;
               bottom: 0;
               cursor: pointer;
            }
            #container-principal{
               margin-bottom: 100px !important;
            }
            .botonesAdaptar{
               margin: 1px;
               padding: 0;
               width: auto;
            }
            .btn-adaptar{
               width: 100%;
               margin-bottom: 2px;
            }
         </style>

      </head>
      <body style="background: url(img/imgFondo.jpg); background-repeat: no-repeat; background-position: right; background-size: auto;">
         <div style="width: 100%; border: 1px solid rgb(206, 206, 206); position: absolute; top: 0px; height: 100vh; background: rgba(239, 239, 239, 0.48) none repeat scroll 0% 0%; z-index: 999; display: none;" id="bloquear-internet"></div>
         <!-- Static navbar -->
         <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
               <button id="menuPrincipalSigejupe" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Menu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <div class="navbar-header pull-left">
                  <a href="#" class="navbar-brand">
                     <small>
                        <img src="img/logoPj.png" alt="" id="logo_empresa"/>
                     </small>
                  </a>
               </div>
            </div>
            <div class="navbar-collapse collapse">
               <div id="divMenu">
               </div>
            </div>

            <div class="navbar-collapse collapse">
               <!--<div style="margin-left: auto; margin-right: auto; background-color: #868686; width: 100%; border: solid 1px;">-->
               <div style="margin-left: auto; margin-right: auto; background-color: #881518; width: 100%; border: solid 1px;">
                  <div class='divUserData'>
                     <span class="spanLblInfo">
                        Usuario
                     </span>
                     <span id="spanUsuarioSession">
                        <?php echo @$_SESSION["nombre"]; ?>
                     </span>
                  </div>
                  <div class='divUserData'>
                     <span class="spanLblInfo">
                        Adscripci&oacute;n
                     </span>
                     <span id="spanAdscripcionSession">
                        <?php echo @$_SESSION["desAdscripcion"]; ?>
                     </span>
                  </div>
                  <div class='divUserData'>
                     <span class="spanLblInfo">
                        Fecha
                     </span>
                     <span>
                        <?php echo $fechahoy; ?>
                     </span>
                  </div>
                  <div class='divUserData'>
                     <span class="spanLblInfo">
                        Perfil
                     </span>
                     <span id="spanCmbPerfiles">
                     </span>
                  </div>
               </div>
            </div>

            <div class="main-container container-fluid" style="margin-top: 15px;">
               <div id="divHideForm">
                  <div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
                     <div class="modal-header">
                        <h1>Cargando, Por favor espere...</h1>
                     </div>
                     <div class="modal-body">
                        <div class="progress progress-striped active">
                           <div class="bar" style="width: 100%;">                                        
                           </div>

                        </div>

                     </div>                                
                  </div>
                  <!--                        <div id="divMenssage">
                                              Por favor espere
                                          </div>
                                          <div id="divImgloading"></div>-->
               </div>
               <input type="hidden" value="" id="hddPerfil" >
               <div class="page-container" id="areadetrabajo">
                  <!--<div class="page-content" id="areadetrabajo">-->
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h5 class="panel-title">
                           Bienvenido
                        </h5>
                     </div>
                     <div class="panel-body" id="divPerfilesReview" >
                     </div>
                  </div>
                  <!--</div>-->
               </div>
            </div>

            <!--inicio html de chat-->
            <div class="shout_box" style="display: none">
               <div onclick="javascript:chatApp.minimize(); getChat();" id="minimize" ><span><i class="fa fa-arrow-right" ></i></span></div>
               <div class="headerChat">&nbsp;<div class="close_btn">&nbsp;</div></div>
               <div class="toggle_chat">
                  <div class="message_box" >
                     <iframe id="chat" src="./chat-box/chat-down.html" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                  </div>
               </div>
               <div class="controls"></div>
            </div>
            <div class="box_iconMessage" style="display:none" >
               <div onclick="javascript:chatApp.maximize();" id="maximize" ><span><i class="fa fa-weixin"></i></span></div>
            </div>
            <div class="modal" id="choose-file">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content" id="contenidoArchivosModal">
                     <form id="sendFileUpload" role="form" action="chat-box/spachat.php" enctype="multipart/form-data" method="post">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Cancelar</span>
                           </button>

                           <div class="input-group">
                              <input name="file" id="fileUpload" type="file" class="btn btn-flat filestyle form-control" data-iconName="glyphicon glyphicon-inbox" data-buttonText="Selecciona...">
                              <div class="input-group-btn">
                                 <button type="button" onclick="javascript:chatApp.uploadFiles()" class="btn btn-primary btn-flat">[Subir Archivo]</button>
                              </div>
                           </div>

                        </div>
                        <div class="modal-body">
                           <iframe id="directory" src="./drive-box/dirview.php?chatid=<?php echo TOKEN; ?>" width="100%" height="100%" frameborder="0" scrolling="yes"></iframe>
                        </div>
                     </form>
                  </div>
               </div>
            </div>

            <div class="modal fade" data-refresh="true" id="whoisonline" role="dialog">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content" id="contenidoUsersOnLine" >
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Estado de los Usuarios de Chat:</h4>
                     </div>
                     <div class="modal-body">
                        <div class="table-responsive">
                           <table id="tableUsersOnline" class="table table-bordered table-striped ">
                              <thead>
                                 <tr>
                                    <th>USUARIOS</th>
                                    <th>ESTADO</th>
                                 </tr>
                              </thead>
                              <tbody></tbody>
                           </table>
                        </div>          
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="cateosPendientes" ></div>
            <div class="ordenesPendientes" ></div>
            <!--fin html de chat-->
            <!--avisos-->
            <div id="buttonAvisosOcultar">
               <div class="panel panel-default">
                  <div class="panel-heading center-align" style="">
                     <h6 class="panel-title center-align">Avisos <span class="badge" id="numAvisos">0</span></h6>
                  </div>
               </div>
            </div>
            <div id="footerAvisos" style="display: none;">
               <div class="panel panel-default">
                  <div class="panel-heading center-align" style="">
                     <a id="btnAvisos" class="" style="color: #fff;" data-toggle="collapse" data-parent="" href="#collapseAvisos">
                        <h6 class="panel-title center-align">Avisos<span class="pull-right clickable" data-effect="fadeOut"><i class="fa fa-times"></i></span></h6>
                     </a>
                  </div>
                  <div class="">
                     <!--<div id="collapseAvisos" class="panel-collapse collapse" aria-expanded="true">-->
                     <!--<div class="pagespan container">-->
                     <div class="wrap">
                        <div class="scrollbar">
                           <div style="transform: translateZ(0px) translateX(304px); width: auto;" class="handle">
                              <div class="mousearea"></div>
                           </div>
                        </div>

                        <div style="overflow: hidden;" class="frame" id="cycleitems">
                           <ul style="transform: translateZ(0px) translateX(-1824px); width: 6840px;" class="clearfix" id="listaAvisos">
                              <li class="">
                                 <div id="" style="width: 100%; height: 100%;">
                                    <div class="col-lg-5" style="">
                                       <img style="width: 100%" src="../vistas/img/alert2.png" />
                                    </div>
                                    <div class="col-lg-7" style="">
                                       <div class="row" >
                                          <h4><strong>No se pueden realizar la carga de los avisos</strong></h4>
                                       </div>
                                       <div class="row" style="text-align: left;">
                                          <h5><strong>Debe seleccionar un perfil</strong></h5>
                                       </div>
                                       <div class="row" style="margin-right: 0px;margin-left: 5px;">
                                          <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">Para poder visualizar los avisos de su grupo debe seleccionar un perfil</p></h6>
                                       </div>

                                    </div>
                                 </div>
                              </li>
                              <li class="">
                                 <div id="" style="width: 100%; height: 100%;">
                                    <div class="col-lg-7" style="">
                                       <div class="row" >
                                          <h4><strong>Titulo del aviso</strong></h4>
                                       </div>
                                       <div class="row" style="text-align: left;">
                                          <h5><strong>Subtitulo del aviso</strong></h5>
                                       </div>
                                       <div class="row" style="margin-right: 0px;margin-left: 5px;">
                                          <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p></h6>
                                       </div>  
                                    </div>
                                    <div class="col-lg-5" style="">
                                       <img style="width: 100%" src="../vistas/img/avisos/aviso-archivoEnlaceImagen-png-6.png" />
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="col-lg-12">
                                    <img style="width: 100%; height: 100%;" src="../vistas/img/avisos/aviso-archivoEnlaceImagen-png-10.png" />
                                 </div>
                              </li>
                              <li>
                                 <div style=" width: 100%; height: 50%;">
                                    <img style="vertical-align: top; width: 264px;" src="../vistas/img/avisos/aviso-archivoEnlaceImagen-png-10.png" />
                                 </div>
                                 <div style="width: 97%;height: 5%;">
                                    <h4><strong>Titulo del aviso</strong></h4>
                                 </div>
                                 <div style="width: 97%; height: 7%;text-align: left;">
                                    <h5><strong>Subtitulo del aviso</strong></h5>
                                 </div>
                                 <div style="width: 97%; height: 30%;margin-right: 0px;margin-left: 5px;">
                                    <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p></h6>
                                 </div>
                              </li>
                              <li>
                                 <div style="width: 97%;height: 5%;">
                                    <h4><strong>Titulo del aviso</strong></h4>
                                 </div>
                                 <div style="width: 97%; height: 7%;text-align: left;">
                                    <h5><strong>Subtitulo del aviso</strong></h5>
                                 </div>
                                 <div style="width: 97%; height: 30%;margin-right: 0px;margin-left: 5px;">
                                    <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p></h6>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!--</div>-->
                     <!--</div>-->
                  </div>
               </div>
            </div>
            <!--modal para avisos-->
            <input type="hidden" id="fechaReturn" value="">
            <div id="modalAvisos" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
               <div class="modal-dialog" style="width: auto; max-width: 900px">
                  <div class="modal-content" style="width: 100%">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="tituloVentanaModalAviso">Titulo</h4>
                        <h6 class="modal-title" id="subTituloVentanaModalAviso">Subtitulo</h6>
                     </div>   
                     <div class="modal-body" id="contenidoAvisoVentanaModal" style="width: 100%">

                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     </div>
                  </div>
               </div>
            </div>






            <input type="hidden" id="hddjuzgadoSesion" value="" >
            <input type="hidden" id="hddcveUsuarioSesion" value="">
            <input type="hidden" id="hddcvePerfilSesion" value="">
            <!--fin modal para aviso-->
            <!--fin aviso-->
            <!--objeto de digitalizacion-->
            <object id="LanzaWS" type="application/x-java-applet" height="0" width="0">
               <param name="code" value="LanzaWS" />
               <param name="archive" value="digitalizacion/botonJWS.jar" />
            </object>  
            <!--fin objeto de digitalizacion-->
            <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
            <script type="text/javascript" src="js/jquery-ui-1.11.14.js"></script>
            <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
            <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
            <script type="text/javascript" src="js/datatable/jquery.dataTables.js"></script>
            <script type="text/javascript" src="js/datatable/dataTables.tableTools.js"></script>
            <script type="text/javascript" src="js/datatable/dataTables.bootstrap.js"></script>
            <script type="text/javascript" src="js/datatable/dataTables.fixedHeader.min.js"></script>
            <script type="text/javascript" src="js/funciones.js"></script>
                <script type="text/javascript" src="js/datetime/moment.js"></script>                
            <script type="text/javascript" src="js/datetimepicker/moment-with-locales.js"></script>                
            <script type="text/javascript" src="js/datetime/bootstrap-datepicker.js"></script>                
            <script type="text/javascript" src="js/datetime/bootstrap-timepicker.js"></script>                
            <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.js"></script>                
            <script type="text/javascript" src="js/select2/select2.js"></script>                
            <script type="text/javascript" src="js/fullcalendar/fullcalendar.js"></script>
            <script type="text/javascript" src="js/jstree/src/jstree.js"></script>
            <script type="text/javascript" src="js/jstree/src/jstree.search.js"></script>
            <script type="text/javascript" src="js/jstree/src/jstree.wholerow.js"></script>
            <script type="text/javascript" src="js/jstree/src/jstree.contextmenu.js"></script>
            <script type="text/javascript" src="js/jstree/src/jstree.sort.js"></script>
            <script type="text/javascript" src="js/bootbox/bootbox.js"></script>
            <script type="text/javascript" src="js/chat.js"></script>
            <script type="text/javascript" src="chat/js/bootstrap-filestyle.min.js"></script>
            <script type="text/javascript" src="chat/js/windowsevents.js"></script>

            <script type="text/javascript" src="js/jstree/dist/jstree.js"></script>
            <script type="text/javascript" src="js/webui/jquery.webui-popover.min.js"></script>                
            <script type="text/javascript" src="js/webui/bootstrap-toolkit.min.js"></script>                
            <script type="text/javascript" src="js/avisos/plugins.js"></script>
            <script type="text/javascript" src="js/avisos/sly.js"></script>
            <script type="text/javascript" src="js/avisos/horizontal.js"></script>
            <script type="text/javascript" src="js/notify/jquery.notify.min.js"></script>
            <script type="text/javascript" src="js/tutos/intro.js"></script>
            <script type="text/javascript" src="js/jquery-typeahead-2.6.1/src/jquery.typeahead.js"></script>



            <!--/*Editor de Texto*/-->                
            <script type="text/javascript" charset="utf-8" src="js/jqeditor/ueditor.config.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/jqeditor/ueditor.all.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/jqeditor/es.js"></script>         

            <script type="text/javascript">
                
                                var catEstadosJson = "";
                                var catEstadoscivilesJson = "";
                                var catMunicipiosJson = "";
                                var catPaisesJson = "";
                                var catTiposDetencionesJson = "";
                                var catTiposPersonasJson = "";
                                var catTiposReligionesJson = "";
                                var catEspanolJson = "";
                                var catGenerosJson = "";
                                var catNivelesInstruccionesJson = "";
                                
                                
                                var catAlfabetismoJson = "";
                                var catConvivenciasJson = "";
                                var catDialectoIndigenaJson = "";
                                var catDrogasJson = "";
                                var catEstadosPsicofisicosJson = "";
                                var catGruposEdnicosJson = "";
                                var catTiposDefensoresJson = "";
                                var catInterpretesJson = "";
                                var catOcupacionesJson = "";
                                var catTiposdeViviendasJson = "";
                                var catCeresosJson = "";
                                var catTipoFamiliaLinguisticaJson = "";
                                var catTiposReincidenciasJson = "";
                                var catTiposTutoresJson = "";
                                var catInterpretesJson = "";

                                                loadCatalogos = function () {
                                                    $.getJSON('../archivos/catalogos/estados.json', function (data) {
                                     catEstadosJson = data;
                                    });
                                                    $.getJSON('../archivos/catalogos/estadosciviles.json', function (data) {
                                     catEstadoscivilesJson = data;
                                    });
                                                    $.getJSON('../archivos/catalogos/municipios.json', function (data) {
                                     catMunicipiosJson = data;
                                    });
                                                    $.getJSON('../archivos/catalogos/paises.json', function (data) {
                                     catPaisesJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tiposdetenciones.json', function (data) {
                                     catTiposDetencionesJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tipospersonas.json', function (data) {
                                     catTiposPersonasJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tiposreligiones.json', function (data) {
                                     catTiposReligionesJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/espanol.json', function (data) {
                                     catEspanolJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/generos.json', function (data) {
                                     catGenerosJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/nivelesinstrucciones.json', function (data) {
                                     catNivelesInstruccionesJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/alfabetismo.json', function (data) {
                                     catAlfabetismoJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/convivencias.json', function (data) {
                                     catConvivenciasJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/dialectoindigena.json', function (data) {
                                     catDialectoIndigenaJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/drogas.json', function (data) {
                                     catDrogasJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/estadospsicofisicos.json', function (data) {
                                     catEstadosPsicofisicosJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/gruposednicos.json', function (data) {
                                     catGruposEdnicosJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tiposdefensores.json', function (data) {
                                     catTiposDefensoresJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/interpretes.json', function (data) {
                                     catInterpretesJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/ocupaciones.json', function (data) {
                                     catOcupacionesJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tiposdeviviendas.json', function (data) {
                                     catTiposdeViviendasJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/ceresos.json', function (data) {
                                     catCeresosJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tipofamilialinguistica.json', function (data) {
                                     catTipoFamiliaLinguisticaJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tiposreincidencias.json', function (data) {
                                     catTiposReincidenciasJson = data;
                                    });                                                    
                                                    $.getJSON('../archivos/catalogos/tipostutores.json', function (data) {
                                     catTiposTutoresJson = data;
                                    });                                                    
                                };
                
                
                                    var chatApp = new Chat();
                                    var sessionPerdida = false;
                                    function getColor(index) {
                                       var colores = ["-", "#006400", "#881518", "#6A5ACD", "#FF4500", "#B22222", "#8B4513", "#A0522D",
                                          "#A52A2A", "#66CDAA", "#8FBC8F", "#006400", "#008B8B", "#6A5ACD", "#FF4500"];
                                       return colores[index];
                                    }

                                    function changeChat()
                                    {
                                       var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                                       var sv = selectedValue.split(":");
                                       SwitchChat(sv[0], sv[1], sv[2], sv[3], getColor(selectBox.selectedIndex + 1));
                                    }

                                    function changeChatDefault(parametros, color)
                                    {
                                       var sv = parametros.split(":");
                                       SwitchChat(sv[0], sv[1], sv[2], sv[3], getColor(color));
                                    }

                                    function launchDigitalizador(strl) {
                                       LanzaWS.Lanzar(strl);

                                    }

                                    function openModalFiles() {
                                       chatApp.refreshIframe("directory", "contenidoArchivosModal");
                                       $("#choose-file").modal("show");
                                       chatApp.refreshIframe("directory", "contenidoArchivosModal");
                                    }

                                    function openModalWhoisOnline() {
                                       chatApp.getUsersOnLine();
                                       $("#whoisonline").modal("show");
                                    }

                                    $(document).ajaxStart(function () {
                                       ToggleLoading(1);
                                    });
                                    $(document).ajaxStop(function () {
                                       ToggleLoading(2);
                                    });
                                    getPerfiles = function () {
                                       var url = "../archivos/<?php echo $_SESSION["cveUsuarioSistema"]; ?>.json?v=<?php echo date("Hmsi"); ?>";
                                       $.getJSON(url, function (json) {
                                          if (json !== "") {
                                             $("#spanUsuarioSession").html(json.paterno + " " + json.materno + " " + json.nombre);
                                             var lenPerfiles = json.perfiles.length;
                                             if (lenPerfiles > 0) {
                                                var html = "";
                                                if (json.perfiles[0].totPerfiles.toString() === "1") {
                                                   getMenu(json.perfiles[0].perfil[0].cvePerfil);
                                                   setSessions(json.perfiles[0].perfil[0].cvePerfil);
                                                   $("#spanCmbPerfiles").html(json.perfiles[0].perfil[0].desGrupo + " | " + json.perfiles[0].perfil[0].desAdscripcion);
                                                } else {
                                                   var totPerfilesShow = json.perfiles[0].totPerfiles;
                                                   var cmb = '<select onchange="if (this.value !== \'\') {getMenu(this.value);setSessions(this.value);}">';
                                                   cmb += "<option value=''>---SELECCIONE---</option>";
                                                   for (var i = 0; i < totPerfilesShow; i++) {

                                                      cmb += "<option value='" + json.perfiles[0].perfil[i].cvePerfil + "'><b>" + json.perfiles[0].perfil[i].desGrupo + "</b> - " + json.perfiles[0].perfil[i].desAdscripcion + "</option>";
                                                      if ((i % 2) === 0) {
                                                         html += "<div class='divPerfil1' onclick='getMenu(" + json.perfiles[0].perfil[i].cvePerfil + ");setSessions(" + json.perfiles[0].perfil[i].cvePerfil + ");' >";
                                                      } else {
                                                         html += "<div class='divPerfil2' onclick='getMenu(" + json.perfiles[0].perfil[i].cvePerfil + ");setSessions(" + json.perfiles[0].perfil[i].cvePerfil + ");' >";
                                                      }
                                                      html += "<table>";
                                                      html += "<td><span class='icon-users' style='font-size:25px; margin:5px;'></span>Grupo</td>";
                                                      html += "</tr>";
                                                      html += "<tr>";
                                                      html += "<td><b>" + json.perfiles[0].perfil[i].desGrupo + "</b></td>";
                                                      html += "</tr>";
                                                      html += "<tr>";
                                                      html += "<td><span class='icon-library' style='font-size:25px; margin:5px;'></span>Adscripci&oacute;n</td>";
                                                      html += "</tr>";
                                                      html += "<tr>";
                                                      html += "<td><b>" + json.perfiles[0].perfil[i].desAdscripcion + "<b></td>";
                                                      html += "</tr>";
                                                      html += "</table>";
                                                      html += "</div>";
                                                   }

                                                   cmb += "</select>";
                                                   $("#spanCmbPerfiles").html(cmb);
                                                   $("#divPerfilesReview").html(html);
                                                   $(".divPerfil1").css({
                                                      width: "250px",
                                                      height: "150px",
                                                      float: "left",
                                                      margin: "5px",
                                                      padding: "10px",
                                                      background: "#f8f8f8",
                                                      color: "#505050"
                                                   });
                                                   $(".divPerfil2").css({
                                                      width: "250px",
                                                      height: "150px",
                                                      float: "left",
                                                      margin: "5px",
                                                      padding: "10px",
                                                      background: "#eaeaea",
                                                      color: "#505050"
                                                   });
                                                   $(".divPerfil1").hover(function () {
                                                      $(this).css({cursor: "pointer", background: "#e88b77"});
                                                   }, function () {
                                                      $(this).css({
                                                         width: "250px",
                                                         height: "150px",
                                                         //                                                                            border: "1px solid",
                                                         float: "left",
                                                         margin: "5px",
                                                         padding: "10px",
                                                         background: "#f8f8f8",
                                                         color: "#505050"
                                                      });
                                                   });
                                                   $(".divPerfil2").hover(function () {
                                                      $(this).css({cursor: "pointer", background: "#e88b77"});
                                                   }, function () {
                                                      $(this).css({
                                                         width: "250px",
                                                         height: "150px",
                                                         //                                                                            border: "1px solid",
                                                         float: "left",
                                                         margin: "5px",
                                                         padding: "10px",
                                                         background: "#eaeaea",
                                                         color: "#505050"
                                                      });
                                                   });
                                                }
                                             }
                                          }
                                       });
                                    };
                                    loadOpcion = function (url, div, mide) {
                                       if (!mide) {

                                          if (url != "#noir") {
                                             $.post(url, function (htmlexterno) {
                                                $("#" + div).html(htmlexterno);
                                             });
                                          }
                                       } else {
                                          if (url != "#noir") {
                                             $.post(url, function (htmlexterno) {
                                                $("#" + div).html(htmlexterno);
                                             });
                                          }
                                       }
                                    };
                                    setSessions = function (cvePerfil) {
                                       $.post("../tribunal/session/Sessions.php", {cvePerfil: cvePerfil}, function (json) {
                                          if (json != "") {
                                             var jsonResponse = eval("(" + json + ")");
                                             $("#hddjuzgadoSesion").val(jsonResponse.cveAdscripcion);
                                             $("#hddcveUsuarioSesion").val(jsonResponse.cveUsuarioSistema);
                                             $("#hddcvePerfilSesion").val(jsonResponse.cvePerfilSes);
   //                                                            $("#hddPerfil").val(jsonResponse.cvePerfilSes);
                                          }
                                       });
                                    };
                                    setSessionsReiniciar = function (cvePerfil, cveUsuarioSistema) {
                                       $.post("../tribunal/session/Sessions.php", {cvePerfil: cvePerfil, cveUsuarioSistema: cveUsuarioSistema}, function (json) {
                                          if (json != "") {
                                             var jsonResponse = eval("(" + json + ")");
                                             $("#hddjuzgadoSesion").val(jsonResponse.cveAdscripcion);
                                             $("#hddcveUsuarioSesion").val(jsonResponse.cveUsuarioSistema);
                                             $("#hddcvePerfilSesion").val(jsonResponse.cvePerfilSes);
   //                                                            $("#hddPerfil").val(jsonResponse.cvePerfilSes);
                                             getMenu($("#hddcvePerfilSesion").val());
                                             $('#modalSession').modal('hide');
                                          }
                                       });
                                    };
                                    getMenu = function (cvePerfil) {
                                       var url = "../archivos/<?php echo $_SESSION["cveUsuarioSistema"]; ?>.json?v=<?php echo date("Hmsi"); ?>";
                                       var divMenu = $('#divMenu');
                                       $.getJSON(url, function (json) {
                                          if (json !== "") {
                                             var html = "";
                                             html += "<ul class=\"nav navbar-nav\" id=\"ulMenuPrincipal\">";
                                             html = buildMenu(json, html, false, cvePerfil);
                                             html += "</ul>";
                                             $('#divMenu').html(html);
                                             $('#ulMenuPrincipal').smartmenus();
                                             getChat();
                                             getCateosOrdenesPendientes(1);
                                             getCateosOrdenesPendientes(2);
                                             getApelacionPendientes();
                                             getMuestrasPendientes();
                                             getAvisos();
                                             
                                          }
                                       });
                                    }


                                    function setTimeAlert(div) {
                                       setTimeout(function () {
                                          $("#" + div).hide("slide");
                                                    }, 3500);
                                    }

                                    buildMenu = function (json, html, hijo, cvePerfil) {
                                       try {
                                          if (hijo == false) { //loadOpcion
                                             for (var index = 0; index < json.perfiles[0].totPerfiles; index++) {
                                                if (json.perfiles[0].perfil[index].cvePerfil.toString() === cvePerfil.toString()) {
                                                   $("#spanAdscripcionSession").html(json.perfiles[0].perfil[index].desAdscripcion);
                                                   for (var x = 0; x < json.perfiles[0].perfil[index].permisos.length; x++) {
                                                      html += "<li ";
                                                      if (typeof json.perfiles[0].perfil[index].permisos[x].hijos != "undefined") {
                                                         if (json.perfiles[0].perfil[index].permisos[x].hijos.length > 0) {
                                                            html += "><a href=\"#noir\" onclick=\"loadOpcion('" + json.perfiles[0].perfil[index].permisos[x].archivo + "','areadetrabajo')\">" + json.perfiles[0].perfil[index].permisos[x].nomFormulario;
                                                            html += "<span class=\"caret\"></span></a>";
                                                            html += "<ul class=\"dropdown-menu\">";
                                                            html = buildMenu(json.perfiles[0].perfil[index].permisos[x].hijos, html, true, cvePerfil);
                                                            html += "</ul>";
                                                            html += "</li>";
                                                         } else {
                                                            html += "><a href=\"#noir\" onclick=\"loadOpcion('" + json.perfiles[0].perfil[index].permisos[x].archivo + "','areadetrabajo')\">" + json.perfiles[0].perfil[index].permisos[x].nomFormulario;
                                                            html += "</a></li>";
                                                         }
                                                      } else {
                                                         html += "><a href=\"#noir\" onclick=\"loadOpcion('" + json.perfiles[0].perfil[index].permisos[x].archivo + "','areadetrabajo')\">" + json.perfiles[0].perfil[index].permisos[x].nomFormulario;
                                                         html += "</a></li>";
                                                      }
                                                   }
                                                }
                                             }
                                          } else if (hijo == true) {
                                             for (var index = 0; index < json.length; index++) {
                                                html += "<li ";
                                                if (typeof json[index].hijos != "undefined") {
                                                   if (json[index].hijos.length > 0) {
                                                      html += "><a href=\"#noir\" onclick=\"loadOpcion('" + json[index].archivo + "','areadetrabajo')\">" + json[index].nomFormulario;
                                                      html += "<span class=\"caret\"></span></a>";
                                                      html += "<ul class=\"dropdown-menu\">";
                                                      html = buildMenu(json[index].hijos, html, true);
                                                      html += "</ul>";
                                                      html += "</li>";
                                                   } else {
                                                      html += "><a href=\"#noir\" onclick=\"loadOpcion('" + json[index].archivo + "','areadetrabajo')\">" + json[index].nomFormulario;
                                                      html += "</a></li>";
                                                   }
                                                } else {
                                                   html += "><a href=\"#noir\" onclick=\"loadOpcion('" + json[index].archivo + "','areadetrabajo')\">" + json[index].nomFormulario;
                                                   html += "</a></li>";
                                                }
                                             }
                                          }
                                       } catch (e) {
                                          alert(e);
                                       }
                                       return html;
                                    }

                                    ToggleLoading = function (opc) {
                                       if (opc === 1) {
                                          $("#divHideForm").show("slide");
                                       } else if (opc === 2) {
                                          $("#divHideForm").hide("fade");
                                       }
                                    }

                                    getChat = function () {
                                       $.ajax({
                                          type: "POST",
                                          url: "../fachadas/sigejupe/chat/ChatFacade.Class.php",
                                          data: "accion=getChat",
                                          async: false,
                                          dataType: "json",
                                          success: function (datos) {
                                             if (datos.totalCount != 0) {
                                                $('#chat').attr('src', './chat-box/spachat.php');
                                                $('#chat').attr('src', './chat-box/spachat.php');
                                                var html = "<label class='col-xs-12'>Sala de Chat Activa:</label><div class='col-xs-12 selectContainer'><select class='form-control' id='selectBox' onChange='javascript:changeChat();'>";
                                                for (var cont = 0; cont < datos.totalCount; cont++) {
                                                   html += "<option value='" + datos.chats[cont].value + "'>" + datos.chats[cont].descripcion + "</option>";
                                                }
                                                html += "</select></div>";
                                                $('.shout_box').show("");
                                                $('.controls').html(html);
                                                refreshChat();
                                                $('.toggle_chat').hide();
                                                changeChatDefault(datos.chats[0].value, "2");
                                             } else {
                                                $('#chat').attr('src', './chat-box/chat-down.html');
                                                //                                refreshChat();
                                             }
                                          },
                                          error: function (objeto, quepaso, otroobj) {
                                          }
                                       });
                                    };
                                    changeDivForm = function (opc) {
                                       if (opc === 1) {
                                          $("#divFormulario").show("slide");
                                          $("#divConsulta").hide("fade");
                                       } else if (opc === 2) {
                                          $("#divFormulario").hide("fade");
                                          $("#divConsulta").show("slide");
                                       }
                                    };
                                    fechaBaseDatos = function (fechaJSON) {
                                       //                                                    alert(fechaJSON);
                                       $.ajax({
                                          type: "POST",
                                          url: "../fachadas/sigejupe/comparecencias/ComparecenciasFacade.Class.php",
                                          data: {
                                             accion: "getFecha"
                                          },
                                          async: false,
                                          dataType: "json",
                                          global: false,
                                          beforeSend: function (objeto) {

                                          },
                                          success: function (datos) {
                                             if (datos.totalCount > 0) {
                                                var fecha = datos.resultados[0].fecha.split(" ");
                                                var fechaHoy = fecha[0].split("-");
                                                var horaHoy = fecha[1].split(":");
                                                var fechaValida = fechaHoy[2] + "/" + fechaHoy[1] + "/" + fechaHoy[0];
                                                var horaValida = horaHoy[0] + ":" + horaHoy[1];
                                                $.each(fechaJSON, function (index, element) {
                                                   if (element == "fecha-hora") {
                                                      $("#" + index).val(fechaValida + " " + horaValida);
                                                   } else if (element == "fecha") {
                                                      $("#" + index).val(fechaValida);
                                                   } else if (element == "anio") {
                                                      $("#" + index).val(fechaHoy[0]);
                                                   }
                                                });
                                             }
                                          }
                                       });
                                    };
                                    validarSession = function () {
                                                    //                                                   alert("<?php // echo json_encode($_SESSION)        ?>");
                                       var sessionActiva = <?php echo isset($_SESSION["cveUsuarioSistema"]) ? $_SESSION["cveUsuarioSistema"] : "" ?>;
                                       console.log(" sessionActiva " + sessionActiva);
                                       var sessionMemoria = "";
                                       var sessionPerfil = "";
                                       $.ajax({
                                          type: "GET",
                                          url: "../fachadas/sigejupe/session/session.php",
                                          cache: false,
                                          async: false,
                                          global: false,
                                          dataType: "json",
                                          data: {
                                          },
                                          beforeSend: function (datos) {
                                          },
                                          success: function (datos) {
                                             console.log("SUCCESS");
                                             if (datos.status == "ok") {
                                                sessionPerdida = false;
                                                console.log("ok");
                                                console.log(" SESSION ACTIVA  " + sessionActiva);
                                                console.log(" SESSION MEMORIA " + sessionMemoria);

                                                sessionMemoria = sessionActiva;
                                             } else if (datos.status == "fail" && sessionPerdida == false) {
                                                sessionPerdida = true;
                                                console.log(" SESSIONMEMORIA " + sessionMemoria);
                                                $.get("../archivos/" + sessionActiva + ".json?v=<?php echo date("Hmsi"); ?>",
                                                        function (response) {
                                                           console.log(response);
                                                           $("#txtUsuario").val(response.login);
                                                           $("#txtPassword").val();

                                                        });
                                                modalSessionPerdida(sessionActiva);
                                             }

                                          },
                                          error: function (objeto, quepaso, otroobj) {
                                             console.log("ERRROR");
                                          }
                                       });

                                    };
                                    getPwd = function () {
                                       var regreso = "";
                                       $.ajax({
                                          type: "POST",
                                          url: "../fachadas/sigejupe/session/session.php",
                                          async: false,
                                          dataType: "json",
                                          data: {
                                             pwd: $("#txtPassword").val()
                                          },
                                          beforeSend: function (datos) {
                                          },
                                          success: function (datos) {
                                             regreso = datos.pwd;
                                          },
                                          error: function (objeto, quepaso, otroobj) {
                                             regreso = false;
                                          }
                                       });
                                       return regreso;
                                    };
                                    modalSessionPerdida = function (sessionActiva) {
                                       $('#modalSession').modal({
                                          backdrop: 'static',
                                          keyboard: false,
                                          show: true
                                       });
                                       $("#txtPassword").val();
                                       $("#btnReIngresar").click(function () {
                                                        //                                                      var sessionPerfilActiv = <?php // echo isset($_SESSION["cvePerfil"]) ? $_SESSION["cvePerfil"] : ""        ?>;
   //                                                      alert("Reingresar");
                                          $.get("../archivos/" + sessionActiva + ".json?v=<?php echo date("Hmsi"); ?>",
                                                  function (response) {
                                                     console.log(response);
                                                     console.log("######################################");
                                                     console.log(response.password);
                                                     console.log("FUNCTION PARA GET ");
                                                     console.log(getPwd());
                                                     if ($("#txtUsuario").val() != response.login) {
                                                        $("#divErrorMnj").html("Usuario no coincide con el de la sessi&oacuten anterior <a href='../vistas/login.php'><span style=\"cursor: pointer;\" class=\"label label-primary\">Iniciar sessi&oacute;n con otra cuenta</span></a>");
                                                        $("#divErrorMnj").show("fade");
                                                     } else {
                                                        if (response.password == getPwd()) {
                                                           console.log("BIEN ENTRA DE NUEVO");
                                                           console.log($("#hddcvePerfilSesion").val());
                                                           setSessionsReiniciar($("#hddcvePerfilSesion").val(), sessionActiva);
                                                        } else {
                                                           console.log("MAL YA NO ENTRA");
                                                           $("#divErrorMnj").html("Usuario o contrase&ntilde;a incorrecta");
                                                           $("#divErrorMnj").show("fade");
                                                        }
                                                     }

                                                  });
   //                                                      alert(sessionPerfilActiv);                                                      
                                       });
                                    };
                                    validarConn = function () {
                                       var f = Date();
   //                                                   var fecha = f.getDate() + "0" + (f.getMonth() +1) + "0" + f.getFullYear();
                                       console.log(f);
                                       try {
                                          $.ajax({
                                             type: "GET",
                                             url: "../fachadas/sigejupe/internet/internet.php",
                                             cache: false,
                                             async: false,
                                             global: false,
                                             dataType: "json",
                                             timeout: 3000,
                                             data: {
                                             },
                                             beforeSend: function (datos) {
                                             },
                                             success: function (datos) {
                                                console.log(datos);
                                                if (datos.status == "ok") {
                                                   $("div.notify").remove();
                                                   $("#bloquear-internet").hide();
                                                } else {
                                                   $("#bloquear-internet").show();
                                                   notify({
                                                      type: "alert", //alert | success | error | warning | info
                                                      title: "Sin acceso a internet",
                                                      message: "Verifique su conexi&oacute;n a internet",
                                                      position: {
                                                         x: "center", //right | left | center
                                                         y: "center" //top | bottom | center
                                                      },
                                                      icon: '<img src="img/alert.png" />', //<i>
                                                      size: "normal", //normal | full | small
                                                      overlay: false, //true | false
                                                      closeBtn: false, //true | false
                                                      overflowHide: false, //true | false
                                                      spacing: 20, //number px
                                                      theme: "dark-theme", //default | dark-theme
                                                      autoHide: false, //true | false
                                                      delay: 25000, //number ms
                                                      onShow: null, //function
                                                      onClick: null, //function
                                                      onHide: null, //function
                                                      template: '<div class="notify"><div class="notify-text"></div></div>'
                                                   });
                                                }
                                             },
                                             error: function (objeto, quepaso, otroobj) {
                                             }
                                          });
                                       } catch (e) {
                                          console.log(e);
                                       }
                                    };
                                    validarURL = function (url) {
                                       var myRegExp = /^(?:(?:https?|http):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
                                       if (!myRegExp.test(url)) {
                                          return false;
                                       } else {
                                          return true;
                                       }
                                    };
                                    movermeA = function (idDiv, tipo) {
                                       if (tipo == "centro") {
                                          $('html,body').animate({
                                             scrollTop: $("#" + idDiv + "").offset().top - ($(window).height() - $("#" + idDiv + "").outerHeight(true)) / 2
                                          }, 2000, 'swing');
                                       } else if (tipo = "top") {
                                          $('html,body').animate({
                                             scrollTop: $("#" + idDiv + "").offset().top
                                          }, 2000, 'swing');
                                       }

                                    };
                                    avisoMostrarEnlaceVentanaModal = function (origen, titulo, subtitulo, link) {
                                       //                                                    alert(elemento);
                                       //                                                    alert(origen);
                                       var archivo = link.split(".");
                                       //                                                    alert(archivo[0]);
                                       //                                                    alert(archivo[1]);

                                       if (archivo[1] == "png" || archivo[1] == "jpeg" || archivo[1] == "jpg" || archivo[1] == "gif" || archivo[1] == "tif" || archivo[1] == "bmp") {
                                          var incrustarImagen = '<img style="width: 100%"; src="../vistas/img/avisos/' + link + '" />';
                                          $("#contenidoAvisoVentanaModal").html(incrustarImagen);
                                       } else if (archivo[1] == "pdf") {
                                          var incrustarPDF = '<embed style="width: 110%; height: 740px;" src="img/avisos/' + link + '" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">';
                                          $("#contenidoAvisoVentanaModal").html(incrustarPDF);
                                       } else if (archivo[1] == "html") {
                                          var incrustarHTML = ' <iframe style="width: 110%; height: 740px;" src="img/avisos/' + link + '"></iframe>';
                                          $("#contenidoAvisoVentanaModal").html(incrustarHTML);
                                       } else if (validarURL(link)) {
                                          window.open(link, '_blank');
                                       }
                                       $("#tituloVentanaModalAviso").text(titulo);
                                       $("#subTituloVentanaModalAviso").text(subtitulo);
                                       //                                                    $("#contenidoAvisoVentanaModal").html(incrustarImagen);
                                       incrustarImagen = "";
                                       incrustarPDF = "";
                                       incrustarHTML = "";
                                       if (!validarURL(link)) {
                                          $("#modalAvisos").modal('show');
                                          $("#modalAvisos").find(".modal-body").css("width", "90%");
                                       }
                                    };
                                    function notifyMe(titulo, msg) {
                                       var sonido = new Audio('sound/notify.mp3');
                                       if (!("Notification" in window)) {
                                          alert("Internet Explorer no soporta las notificaciones de escritorio para los cateos y ordenes de aprehensi\u00f3n pendientes");
                                       } else if (Notification.permission === "granted") {
                                          var option = {
                                             body: msg
                                          };
                                          var notification = new Notification(titulo, option);
                                          sonido.play();
                                       } else if (Notification.permission !== 'denied') {
                                          Notification.requestPermission(function (permission) {
                                             if (permission === "granted") {
                                                var notification = new Notification("Activadas");
                                             }
                                          });
                                       }
                                    }
                                    ;
                                    function getAvisos() {
                                       console.log("get avisos");
                                       var listaAvisos = "";
                                       var $frame = $('#cycleitems');
                                       $.ajax({
                                          type: "POST",
                                          url: "../fachadas/sigejupe/avisos/AvisosFacade.Class.php",
                                          global: false,
                                          data: {
                                             accion: "consultar-avisos",
                                             activo: "S",
                                             fecTermino: $("#fechaReturn").val()
                                          },
                                          async: true,
                                          dataType: "json",
                                          beforeSend: function (objeto) {

                                          },
                                          success: function (datos) {
                                             $("#numAvisos").text(datos.totalCount);
                                             $("#listaAvisos").children().remove();
                                             var aviso = '';
                                             //                                                                    alert("respuesta de avisos");
                                             //                                                                    alert(datos);
                                             if (datos.totalCount > 0) {
                                                $.each(datos.data, function (index, element) {
                                                   if (element.orden == 3) { // derecha
                                                      //                                                                            alert("izquierda");
                                                      aviso += '     <div id="" style="width: 96%; height: 100%;"> ';
                                                      aviso += '         <div class="col-lg-5" style="float: right;"> ';
                                                      aviso += '             <img onclick="avisoMostrarEnlaceVentanaModal(\'imagen\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.link + '\')" style="width: 100%" src="../vistas/img/avisos/' + element.urlImg + '" /> ';
                                                      aviso += '         </div> ';
                                                      aviso += '         <div onclick="avisoMostrarEnlaceVentanaModal(\'info\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.tituloLink + '\')"><div class="col-lg-7 izquierda" style="height:auto"> ';
                                                      aviso += '             <div class="row" > ';
                                                      aviso += '                 <h4><strong>' + element.tituloAviso + '</strong></h4> ';
                                                      aviso += '             </div> ';
                                                      aviso += '             <div class="row" style="text-align: left;"> ';
                                                      aviso += '                 <h5><strong>' + element.subtituloAviso + '</strong></h5> ';
                                                      aviso += '             </div> ';
                                                      aviso += '         </div> ';
                                                      aviso += '         <div class="row" style="margin-right: 0px;margin-left: 5px;float: left;"> ';
                                                      aviso += '             <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">' + element.textAviso + '</p></h6> ';
                                                      aviso += '         </div></div>   ';
                                                      aviso += '     </div> ';
                                                      listaAvisos += aviso;
                                                      $frame.sly('add', '<li>' + aviso + '</li>');
                                                      aviso = '';
                                                   } else if (element.orden == 2) { // centro
                                                      //                                                                            alert("centro");
                                                      aviso += '     <div class="row" style="height: 50px;"> ';
                                                      aviso += ' <div class="centro col-xs-12 col-md-12"><a style="background-color: rgba(255, 255, 255, 0) ! important; border: medium none rgba(255, 255, 255, 0);" href="#" class="thumbnail"><img onclick="avisoMostrarEnlaceVentanaModal(\'imagen\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.link + '\')" style="vertical-align: top;width: 150px;" src="../vistas/img/avisos/' + element.urlImg + '" /></a></div> ';
                                                      aviso += '';
                                                      aviso += '     </div> ';
                                                      aviso += '<div class="informacion" onclick="avisoMostrarEnlaceVentanaModal(\'info\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.tituloLink + '\')">';
                                                      aviso += '     <div style="width: 97%;height: 5%;"> ';
                                                      aviso += '         <h4><strong>' + element.tituloAviso + '</strong></h4> ';
                                                      aviso += '     </div> ';
                                                      aviso += '     <div style="width: 97%; height: 7%;text-align: left;"> ';
                                                      aviso += '         <h5><strong>' + element.subtituloAviso + '</strong></h5> ';
                                                      aviso += '     </div> ';
                                                      aviso += '     <div style="width: 97%; height: 30%;margin-right: 0px;margin-left: 5px;"> ';
                                                      aviso += '         <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">' + element.textAviso + '</p></h6> ';
                                                      aviso += '     </div> ';
                                                      aviso += '<div>';
                                                      listaAvisos += aviso;
                                                      $frame.sly('add', '<li>' + aviso + '</li>');
                                                      aviso = '';
                                                   } else if (element.orden == 1) { // izquierda
                                                      //                                                                            alert("derecha");
                                                      aviso += '     <div id="" style="width: 100%; height: 100%;"> ';
                                                      aviso += '         <div class="col-lg-5 derecha" style=""> ';
                                                      aviso += '             <img onclick="avisoMostrarEnlaceVentanaModal(\'imagen\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.link + '\')" style="width: 100%" src="../vistas/img/avisos/' + element.urlImg + '" /> ';
                                                      aviso += '         </div> ';
                                                      aviso += '         <div onclick="avisoMostrarEnlaceVentanaModal(\'info\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.tituloLink + '\')"><div class="col-lg-7" style="height: auto;"> ';
                                                      aviso += '             <div class="row" > ';
                                                      aviso += '                 <h4><strong>' + element.tituloAviso + '</strong></h4> ';
                                                      aviso += '             </div> ';
                                                      aviso += '             <div class="row" style="text-align: left;"> ';
                                                      aviso += '                 <h5><strong>' + element.subtituloAviso + '</strong></h5> ';
                                                      aviso += '             </div> ';
                                                      aviso += '         </div> ';
                                                      aviso += '         <div class="row" style="margin-right: 0px;margin-left: 5px;"> ';
                                                      aviso += '             <h6><p style="margin: 1px 6px 1px 1px;font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">' + element.textAviso + '</p></h6> ';
                                                      aviso += '         </div></div>';
                                                      aviso += '     </div> ';
                                                      listaAvisos += aviso;
                                                      $frame.sly('add', '<li>' + aviso + '</li>');
                                                      aviso = '';
                                                   } else if (element.orden == 4) { // texto
                                                      //                                                                            alert("texto");
                                                      aviso += '     <div onclick="avisoMostrarEnlaceVentanaModal(\'info\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.tituloLink + '\')"><div style="width: 97%;height: 5%;"> ';
                                                      aviso += '         <h4><strong>' + element.tituloAviso + '</strong></h4> ';
                                                      aviso += '     </div> ';
                                                      aviso += '     <div style="width: 97%; height: 7%;text-align: left;"> ';
                                                      aviso += '         <h5><strong>' + element.subtituloAviso + '</strong></h5> ';
                                                      aviso += '     </div> ';
                                                      aviso += '     <div style="width: 97%; height: 30%;margin-right: 0px;margin-left: 5px;"> ';
                                                      aviso += '         <h6><p style="font-weight:bold;color:#ddd;letter-spacing:0pt;word-spacing:0pt;font-size:13px;text-align:justify;font-family:arial black, sans-serif;line-height:1;">' + element.textAviso + '</p></h6> ';
                                                      aviso += '     </div></div>';
                                                      listaAvisos += aviso;
                                                      $frame.sly('add', '<li>' + aviso + '</li>');
                                                      aviso = '';
                                                   } else if (element.orden == 5) {// imagen
                                                      //                                                                            alert("imagen");
                                                      aviso += '     <div class="col-lg-12"> ';
                                                      aviso += '         <img onclick="avisoMostrarEnlaceVentanaModal(\'imagen\', \'' + element.tituloAviso + '\', \'' + element.subtituloAviso + '\', \'' + element.link + '\')" style="width: 393px; height: 244px;" src="../vistas/img/avisos/' + element.urlImg + '" /> ';
                                                      aviso += '     </div> ';
                                                      listaAvisos += aviso;
                                                      $frame.sly('add', '<li>' + aviso + '</li>');
                                                      aviso = '';
                                                   }
                                                });
                                                
                                                $("#footerAvisos").show("slow");
                                                $("#buttonAvisosOcultar").hide("slow");
                                             } else {
                                                $frame.sly('add', '<li><span style="color:#fff;margin:0;">Sin avisos</span  ></li>');
                                             }
                                          }
                                       });
                                    }
                                    function avisos() {
                                       console.log("avisos");
                                       $("#footerAvisos").hide("slow");
                                       $("#btnAvisos").click(function () {
                                          $("#footerAvisos").hide("slow");
                                          $("#buttonAvisosOcultar").show("slow");
                                       });
                                       fechaBaseDatos({
                                          fechaReturn: "fecha"
                                       });
                                       $("#buttonAvisosOcultar").click(function () {
                                          getAvisos();
                                          $("#footerAvisos").show("slow");
                                          $("#buttonAvisosOcultar").hide("slow");
                                       });
                                    }
                                    ;
                                    function obtenerPermisosFormulario(Padre, hijo) {
                                       $("#hddjuzgadoSesion").val();
                                       var cveUsuarioSistema = $("#hddcveUsuarioSesion").val(); //   

                                       var permisos = {
                                          "Create": "N",
                                          "Read": "N",
                                          "Update": "N",
                                          "Delete": "N"

                                       };
                                       $.ajax({
                                          url: "../archivos/" + $("#hddcveUsuarioSesion").val() + ".json?v=<?php echo date("Hmsi"); ?>", async: false,
                                          beforeSend: function (xhr) {
                                          }
                                       }).done(function (response) {
                                          for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                                             if ($("#hddcvePerfilSesion").val() == response.perfiles[0].perfil[i].cvePerfil) {
                                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                                   if (vnombre.nomFormulario == Padre) {

                                                      var hijos = vnombre.hijos;
                                                      $.each(hijos, function (k2, nombreHijo) {
                                                         if (nombreHijo.nomFormulario == hijo) {

                                                            var permisoFormulario = nombreHijo.permisoFormulario[0];
                                                            var createRecord = permisoFormulario.create;
                                                            var readRecord = permisoFormulario.read;
                                                            var updateRecord = permisoFormulario.update;
                                                            var deleteRecord = permisoFormulario.delete;
                                                            permisos = {
                                                               "Create": createRecord,
                                                               "Read": readRecord,
                                                               "Update": updateRecord,
                                                               "Delete": deleteRecord

                                                            };
                                                         }
                                                      });
                                                   }
                                                });
                                             }
                                          }


                                       });
   //
   //                                                        $.ajax("../archivos/" + $("#hddcveUsuarioSesion").val() + ".json", async:true,
   //                                                                function (response) {
   //                                                                });
                                       return permisos;
                                    }
                                    ;

                                    function updateOnlineStatus(msg) {
                                       var condition = navigator.onLine ? "ONLINE" : "OFFLINE";
                                       if (condition == "ONLINE") {
                                          $("div.notify").remove();
                                          $("#bloquear-internet").hide();
                                          validarConn();
                                       } else if (condition == "OFFLINE") {
                                          $("#bloquear-internet").show();
                                          notify({
                                             type: "alert", //alert | success | error | warning | info
                                             title: "Sin acceso a internet",
                                             message: "Verifique su conexi&oacute;n a internet",
                                             position: {
                                                x: "center", //right | left | center
                                                y: "center" //top | bottom | center
                                             },
                                             icon: '<img src="img/alert.png" />', //<i>
                                             size: "normal", //normal | full | small
                                             overlay: false, //true | false
                                             closeBtn: false, //true | false
                                             overflowHide: false, //true | false
                                             spacing: 20, //number px
                                             theme: "dark-theme", //default | dark-theme
                                             autoHide: false, //true | false
                                             delay: 25000, //number ms
                                             onShow: null, //function
                                             onClick: null, //function
                                             onHide: null, //function
                                             template: '<div class="notify"><div class="notify-text"></div></div>'
                                          });
                                       }
                                    }
                                    ;

                                    function loaded() {
                                       updateOnlineStatus("load");
                                       document.body.addEventListener("offline", function () {
                                          updateOnlineStatus("offline")
                                       }, false);
                                       document.body.addEventListener("online", function () {
                                          updateOnlineStatus("online")
                                       }, false);
                                    }
                                    ;


                                    reloadSession = function () {

                                    }

                                    $(function () {
                                       getPerfiles();
                                       $('[data-toggle="tooltip"]').tooltip();
                                       getChat();
                                       avisos();
//                                       getAvisos();
                                       setInterval(getAvisos, 7200000);
                                       loaded();
                                                    setInterval("validarConn()", 900000);
                                                    setInterval("validarSession()", 900000);
                                       setInterval("getCateosOrdenesPendientes(1)", 360000);
                                       setInterval("getCateosOrdenesPendientes(2)", 360000);
                                       loadCatalogos();
                                    });

                                    generaPDF = function (json) {
                                       var strDatos = "json=" + json;

                                       $.ajax({
                                          type: "POST",
                                          url: "../fachadas/sigejupe/firmapdf/FirmaPdfFacade.Class.php",
                                          data: strDatos,
                                          async: true,
                                          dataType: "html",
                                          beforeSend: function (objeto) {
                                             // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                                          },
                                          success: function (datos) {
                                             var json = "";
                                             json = eval("(" + datos + ")"); //Parsear JSON

                                             if (json.estatus == "ok") {
   //                    alert("satisfactorio");
                                                $("#divHideForm").hide();
                                                                $("#divAlertSucces").html("Correcto!: " + json.mesnaje.toLowerCase());
                                                $("#divAlertSucces").show("slide");
                                                setTimeAlert("divAlertSucces");
                                                showMessage("ok", 'success');
                                             } else {
                                                showMessage(json.mensaje, 'error');
                                                alert(json.mensaje);
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
            </script>

            <style type="text/css">
               #divImgFotoUsr{
                  width: 45px;
                  height: 45px;
                  border-radius: 35px;
                  border: solid 1px;
                  background: #FF0000;

                  .control-label{
                     color: #23473f;
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

                  .divPerfil1{
                     width: 250px;
                     height: 150px;
                     float: left;
                     margin: 5px;
                     padding: 10px;
                     background: #f8f8f8;
                     color: #505050
                  }

                  .divPerfil2{
                     width: 250px;
                     height: 150px;
                     float: left;
                     margin: 5px;
                     padding: 10px;
                     background: #eaeaea;
                     color: #505050
                  }

               </style>
               <div id="modalSession" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static" data-keyboard="false">
                  <div class="modal-dialog">

                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                           <h4 class="modal-title">Su sesi&oacute;n caduco, ingrese nuevamente</h4>
                        </div>
                        <div class="modal-body">
                           <div class="container2" style="height: 285px;">
                              <div class="page-header">
                                 <h1 class="h1Titulo">Sistema de Gesti&oacute;n Judicial Penal</h1>
                              </div>            
                              <div class="card card-container">
                                 <img id="profile-img" class="profile-img-card col-md-3" src="img/logoLogin.png" />
                                 <p id="profile-name" class="profile-name-card"></p>
                                 <form class="form-signin col-md-9">
                                    <div class="input-group">
                                       <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                                       <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Usuario" />
                                    </div>
                                    <div class="input-group">
                                       <div class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                                       <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Contrase&ntilde;a" />
                                    </div>
                                    <button style="margin-top: 17px;" type="button" class="btn btn-md btn-primary btn-block btn-signin" id="btnReIngresar" name="btnReIngresar">Ingresar</button>
                                    <a href="login.php" style="margin-top: 17px;"  type="button" class="btn btn-md btn-primary btn-block btn-signin" id="btnSalir" name="btnSalir">Salir</a>

                                 </form><!-- /form -->
                                 <br/>                
                                 <br/>  
                              </div><!-- /card-container -->
                           </div>
                           <div id="divErrorMnj" class="alert alert-danger" style="display: none; text-align: center" onclick="$('#divErrorMnj').hide('flip');">                                
                              </div>
                           </div>
                           <!--                         <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>-->
                        </div>

                     </div>
                  </div>
            </body>
         </html>
         <?php
      } else {
         ?>
         <!doctype html>
         <html>
            <head>
               <meta name="description" content="Dashboard" />
               <meta name="viewport" content="width=device-width, initial-scale=1.0" />
               <meta http-equiv="X-UA-Compatible" content="IE=edge" />
               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
               <link rel="shortcut icon" href="img/logoColorPJEM.png" type="image/x-icon">

               <title>SIGEJUPE v2.0</title>

               <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
               <link type="text/css" href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet" />
               <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
               <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
               <link type="text/css" href="css/weather-icons.min.css" rel="stylesheet" />
               <link type="text/css" href="css/beyond.min.css" rel="stylesheet" type="text/css" />
               <link type="text/css" href="css/typicons.min.css" rel="stylesheet" />
               <link type="text/css" href="css/animate.min.css" rel="stylesheet" />
               <link type="text/css" href="css/dataTables.bootstrap.css" rel="stylesheet" />
               <link type="text/css" href="css/loadercss.css" rel="stylesheet" />

               <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

               <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
               <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
               <script src="js/jquery-ui-1.10.4.custom.js"></script>
               <script type="text/javascript" src="js/bootstrap.min.js"></script>
               <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
               <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
               <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.js"></script>
               <script type="text/javascript" src="js/datatable/jquery.dataTables.js"></script>
               <script type="text/javascript" src="js/datatable/dataTables.tableTools.js"></script>
               <script type="text/javascript" src="js/datatable/dataTables.bootstrap.js"></script>



               <style type="text/css">
                  #divImgFotoUsr{
                  width: 45px;
                  height: 45px;
                  border-radius: 35px;
                  border: solid 1px;
                  background: #FF0000;
               }
            </style>

            <script type="text/javascript">
                              ToggleLoading = function (opc) {
                                 if (opc === 1) {

                                    $("#divHideForm").show("slide");
                                 } else if (opc === 2) {
                                    $("#divHideForm").hide("fade");
                                 }
                              };
            </script>

            <style>
               .control-label{
                  color: #23473f;
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

            </style>
         </head>
         <body>

            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header">

                  <div class="navbar-header pull-left">
                     <a href="#" class="navbar-brand">
                        <small>
                           <img src="img/logoPj.png" alt="" id="logo_empresa"/>
                        </small>
                     </a>
                  </div>
               </div>

               <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                  </ul>
               </div>
            </div>

            <div class="main-container container-fluid">
               <div id="divHideForm">

                  <div id="divMenssage">
                     Por favor espere
                  </div>
                  <div id="divImgloading"></div>
               </div>
               <div class="page-container" id="areadetrabajo">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h5 class="panel-title">
                           Sesi&oacute;n fallida.
                        </h5>
                     </div>
                     <div class="panel-body">

                        <div id="divFormulario" class="form-horizontal">
                           <div class="form-group">
                              <div class="alert alert-danger alert-dismissable">
                                 <button type="button" class="close" >&times;</button><!--data-dismiss="alert"-->
                                 <strong>Error!</strong> No inicio sesi&oacute;n de forma correcta    <a href="login.php"><span class="label label-primary">Ingresar nuevamente</span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="width: 100%; border: 1px solid rgb(206, 206, 206); position: absolute; top: 0px; height: 100vh; background: rgba(239, 239, 239, 0.48) none repeat scroll 0% 0%; z-index: 9999; display: none;" id="bloquear-internet"></div>
         </body>
      </html>
   <?php } ?>
