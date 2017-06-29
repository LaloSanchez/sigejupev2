<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- Head -->
    <head>
        <meta charset="utf-8" />
        <title>SIGEJUPE</title>

        <meta name="description" content="Dashboard" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


            <!--Basic Styles-->
            <link href="css/bootstrap.min.css" rel="stylesheet" />
            <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
            <link href="css/font-awesome.min.css" rel="stylesheet" />
            <link href="css/weather-icons.min.css" rel="stylesheet" />

            <!--Fonts-->
            <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">
            <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->
            <!--Beyond styles-->
            <link id="" href="css/beyond.min.css" rel="stylesheet" type="text/css" />
            <link href="css/demo.min.css" rel="stylesheet" />
            <link href="css/typicons.min.css" rel="stylesheet" />
            <link href="css/animate.min.css" rel="stylesheet" />
            <link id="skin-link" href="" rel="stylesheet" type="text/css" />

            <link href="css/dataTables.bootstrap.css" rel="stylesheet" />

            <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" />

            <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
            <script src="js/skins.min.js"></script>
            <script src="js/autosize.js"></script>
            <link href="css/jquery-ui.css" rel="stylesheet" />

            <link href="css/loadercss.css" rel="stylesheet" />
            <style>
                .ui-autocomplete {
                    max-height: 100px;
                    overflow-y: auto;
                    /* prevent horizontal scrollbar */
                    overflow-x: hidden;
                }
                /* IE 6 doesn't support max-height
                * we use height instead, but this forces the menu to always be this tall
                */
                * html .ui-autocomplete {
                    height: 100px;
                }        
                .large_modal    {
                    width:60% !important;
                }

                .btn-fileUpload {
                    position: relative;
                    overflow: hidden;
                    margin: 10px;
                }

                .btn-fileUpload input.upload {
                    position: absolute;
                    top: 0;
                    right: 0;
                    margin: 0;
                    padding: 0;
                    font-size: 20px;
                    cursor: pointer;
                    opacity: 0;
                    filter: alpha(opacity=0);
                }

                #loadingDiv {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    left: 0;
                    top: 0;
                    background: white url('img/cargando.gif') center center no-repeat;
                }

                .select2-hidden-accessible {
                    display: none;
                }

                .sinfondo {
                    background: #FFF;
                }

                .ui-datepicker-div {
                    z-index: 9999999 !important;
                }

                .page-sidebar .sidebar-menu .submenu > li > a {
                    padding-left: 25px !important;
                }

                .select2-hidden-accessible  {
                    display: none;
                }

            </style>
    </head>
    <!-- /Head -->
    <!-- Body -->
    <body>
        <!-- Loading Container -->
        <div class="loading-container">
            <div class="loader"></div>
        </div>

        <!--  /Loading Container -->
        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="navbar-container">
                    <!-- Navbar Barnd -->
                    <div class="navbar-header pull-left">
                        <a href="#" class="navbar-brand">
                            <small>
                                <img src="img/logoLeyenda.png" alt="" id="logo_empresa"/>
                            </small>
                        </a>
                    </div>
                    <!-- /Navbar Barnd -->
                    <!-- Sidebar Collapse -->
                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="collapse-icon fa fa-bars"></i>
                    </div>

                    <!-- /Sidebar Collapse -->
                    <!-- Account Area and Settings -->
                    <div class="navbar-header pull-right">
                        <div class="navbar-account">
                            <ul class="account-area">
                                <li>
                                    <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                        <div class="avatar" title="Cerrar Sesi&oacute;n">
                                            <img id="usuario_img">
                                        </div>
                                        <section>
                                            <h2><span class="profile"><span id="usuario_name"></span></span></h2>
                                        </section>
                                    </a>
                                    <!--Login Area Dropdown-->
                                    <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                        <!--Avatar Area-->
                                        <li>
                                            <div class="avatar-area">
                                                <img id="usuario_imgbig" class="avatar">
                                            </div>
                                            <div id="infoUsuario"></div>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a href="login.php">
                                                Salir
                                            </a>
                                        </li>
                                    </ul>
                                    <!--/Login Area Dropdown-->
                                </li>
                                <!-- /Account Area -->
                                <!--Note: notice that setting div must start right after account area list.
                                no space must be between these elements-->
                                <!-- Settings -->
                            </ul>
                            <!--                            <div class="setting">
                                                            <a id="btn-setting" title="Setting" href="#">
                                                                <i class="icon glyphicon glyphicon-cog"></i>
                                                            </a>
                                                        </div>-->
                            <div class="setting-container">
                                <label>
                                    <input type="checkbox" id="checkbox_fixednavbar">
                                        <span class="text">Fixed Navbar</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox_fixedsidebar">
                                        <span class="text">Fixed SideBar</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                        <span class="text">Fixed BreadCrumbs</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="checkbox_fixedheader">
                                        <span class="text">Fixed Header</span>
                                </label>
                            </div>
                            <!-- Settings -->
                        </div>
                    </div>
                    <!-- /Account Area and Settings -->
                </div>
            </div>
        </div>
        <!-- /Navbar -->
        <!-- Main Container -->
        <div class="main-container container-fluid">
            <!-- Page Container -->
            <div class="page-container">

                <!-- Page Sidebar -->
                <div class="page-sidebar" id="sidebar">
                    <!-- Page Sidebar Header-->
                    <div class="sidebar-header-wrapper">
                        <!--<input type="text" class="searchinput" />-->
                        <!--<i class="searchicon fa fa-search"></i>-->

                        <!--<div class="searchhelper">Buscar ...</div>-->
                    </div>
                    <!-- /Page Sidebar Header -->
                    <!-- Sidebar Menu -->

                    <ul class="nav sidebar-menu" id="modulos_disponibles">


                    </ul>

                    <!-- /Sidebar Menu -->
                </div>
                <!-- /Page Sidebar -->
                <!-- Page Content -->
                <div class="page-content" id="areadetrabajo">

                </div>
                <!-- /Page Content -->

            </div>
            <!-- /Page Container -->
            <!-- Main Container -->

        </div>
        <!--Basic Scripts-->
        <script src="js/jquery-2.0.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>

        <!--Basic Scripts-->
        <script src="js/jquery-2.0.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="js/jquery-ui-1.10.4.custom.js"></script>

        <!--Beyond Scripts-->
        <script src="js/beyond.js"></script>

        <!--Page Related Scripts-->
        <!--Sparkline Charts Needed Scripts-->
        <script src="js/charts/sparkline/jquery.sparkline.js"></script>
        <script src="js/charts/sparkline/sparkline-init.js"></script>

        <!--Easy Pie Charts Needed Scripts-->
        <script src="js/charts/easypiechart/jquery.easypiechart.js"></script>
        <script src="js/charts/easypiechart/easypiechart-init.js"></script>

        <!--Morris Needed Scripts-->
        <script src="js/charts/morris/raphael-2.0.2.min.js"></script>
        <script src="js/charts/morris/morris.js"></script>
        <script src="js/charts/morris/morris-init.js"></script>

        <!--Flot Charts Needed Scripts-->
        <script src="js/charts/flot/jquery.flot.js"></script>
        <script src="js/charts/flot/jquery.flot.orderBars.js"></script>
        <script src="js/charts/flot/jquery.flot.tooltip.js"></script>
        <script src="js/charts/flot/jquery.flot.resize.js"></script>
        <script src="js/charts/flot/jquery.flot.selection.js"></script>
        <script src="js/charts/flot/jquery.flot.crosshair.js"></script>
        <script src="js/charts/flot/jquery.flot.stack.js"></script>
        <script src="js/charts/flot/jquery.flot.time.js"></script>
        <script src="js/charts/flot/jquery.flot.pie.js"></script>

        <script src="js/charts/chartjs/Chart.js"></script>

        <!--Data Tables Needed Scripts-->
        <script src="js/datatable/jquery.dataTables.min.js"></script>
        <script src="js/datatable/ZeroClipboard.js"></script>
        <script src="js/datatable/dataTables.tableTools.min.js"></script>
        <script src="js/datatable/dataTables.bootstrap.min.js"></script>

        <script src="js/fullcalendar/fullcalendar.js"></script>

        <!--Jquery Select2-->
        <script src="js/select2/select2.js"></script>
        <!--Bootstrap Tags Input-->
        <script src="js/tagsinput/bootstrap-tagsinput.js"></script>

        <!--Bootstrap Date Picker-->
        <script src="js/datetime/bootstrap-datepicker.js"></script>

        <!--Bootstrap Time Picker-->
        <script src="js/datetime/bootstrap-timepicker.js"></script>

        <!--Bootstrap Date Range Picker-->
        <script src="js/datetime/moment.js"></script>
        <script src="js/datetime/daterangepicker.js"></script>

        <!--Jquery Autosize-->
        <script src="js/textarea/jquery.autosize.js"></script>

        <!--Fuelux Spinbox-->
        <script src="js/fuelux/spinbox/fuelux.spinbox.min.js"></script>

        <!--jQUery MiniColors-->
        <script src="js/colorpicker/jquery.minicolors.js"></script>

        <!--jQUery Knob-->
        <script src="js/knob/jquery.knob.js"></script>

        <!--noUiSlider-->
        <script src="js/slider/jquery.nouislider.js"></script>

        <!--Bootstrap Validator-->
        <script src="js/validation/bootstrapValidator.js"></script>

        <!--jQRangeSlider-->
        <script src="js/slider/jQRangeSlider/jQAllRangeSliders-withRuler-min.js"></script>

        <!--Bootbox-->
        <script src="js/bootbox/bootbox.js"></script>

        <script src="js/datetimepicker/moment-with-locales.js"></script>
        <script src="js/datetimepicker/bootstrap-datetimepicker.js"></script>

        <!--Canvas-->
        <script src="js/canvasPaint.js"></script>
        <script src="js/html2canvas.js"></script>

        <!--Loader-->
        <script src="js/loadercss.js"></script>

        <!--Wizard-->
        <script src="js/fuelux/wizard/wizard-custom.js"></script>


        <!-- UI de Jquery -->
        <script src="js/jquery-2.0.3-ui.min.js"></script>

        <!--ScrollTo-->
        <script src="js/scrollto/jquery.scrollTo.min.js"></script>
        <!--Toastr-->
        <script src="js/toastr/toastr.js"></script>

        <script>

            //script para organizar el menu

            $(function () {
                var url = "inc/ajax.php?solicitud=obtener_menu";
                $.ajax(url, {
                    type: 'GET',
                    dataType: 'html',
                    success: function (data) {
                        $("#modulos_disponibles").append(data);

                    }
                });

                $(document).on('click', 'a.dropdown-toggle', function (e) {
                    e.preventDefault();
                    $(this).parent().toggleClass("open");
                });
            });
        </script>
        <!--ScrollTo-->
        <!--<script src="js/scrollto/jquery.scrollTo.min.js"></script>-->

        <script type="text/javascript">
            var inicial_uno = false;
            var jash = '';
            var HistorialAjax = [];
            var areadetrabajo_ancho = 0;
            var areadetrabajo_alto = 0;
            var ejecutado = false;
            var data_sesion;

            //VALORES DEFECTO:
            // var conf_clase_success  = "alert alert-success fade in";
            // var conf_clase_error    = "alert alert-danger fade in";
            var peticion_ajax = "inc/ajax.php?solicitud=";
            var conf_clase_success = "row-title before-success col-xs-12";
            var conf_clase_error = "row-title before-darkorange col-xs-12";

            function OpenWarning(mensaje) {
                var mensaje = mensaje || "Algo no salió como se esperaba...";
                bootbox.dialog({
                    message: mensaje,
                    title: "<i class=\"fa fa-warning warning\"></i>",
                    className: "modal modal-message modal-warning fade",
                    buttons: {
                        "OK": {
                            className: "btn btn-warning",
                            callback: function () {
                            }
                        }
                    }
                });
            }

            // var ComoFlotante = function(importe)   {
            function ComoFlotante(importe) {
                var importe = importe || 0;
                if (importe == '') {
                    importe = '0';
                }
                var valor = " " + importe;
                if (valor != '') {
                    // valor = valor.replace(",","");
                    valor = valor.replace(/,/g, "");
                    valor = parseFloat(valor);
                } else {
                    valor = 0;
                }

                if (isNaN(valor)) {
                    valor = 0;
                }

                // valor = valor.toFixed(2);
                // valor = Math.round(valor * 100) / 100;
                return valor;
            }

            function ComoFlotanteStr(importe) {
                var importe = importe || 0;
                importe = parseFloat(importe);
                importe = importe.toFixed(2);
                var valor = "" + importe;
                if (valor.indexOf(".") == -1) {
                    valor = valor + ".00";
                }
                return valor;
            }

            function ComoLlave(cadena) {
                var llave = cadena.replace(" ", "_");
                // llave = llave.replace(" ", "_");
                // llave = llave.replace(" ", "_");
                // llave = llave.replace(" ", "_");
                // var llave = cadena.replace(/ /g , "_");
                return llave.replace(".", "p");
            }

            function GeneraCodigo(longitud) {
                var codigo = "";
                var caracteres = "abcdefghijklmnopqrstuvwxyz";
                for (var x = 0; x < longitud; x++) {
                    var rand = Math.floor(Math.random() * caracteres.length);
                    codigo += caracteres.substr(rand, 1);
                }

                return codigo;
            }

            function findAndRemove(array, property, value) {
                var index = array.map(function (d) {
                    return d[property];
                }).indexOf(value);
                if (index > -1) {
                    array.splice(index, 1);
                }
            }

            function CargarModulo(carga_hash, carga_ruta, carga_titulo, objeto) {
                objeto || (objeto = false);
                var TituloOriginal = "";
                // $('#div_ajax').html('<center>Cargando el modulo de '+carga_titulo+'.. <img src="img/loading.gif" width="20"/></center>');
                // $('#div_ajax').show();
                $('#areadetrabajo').hide();

                $('#areadetrabajo').load(carga_ruta, function (respuesta, estado, xhr) {

                    if (estado == 'success') {
                        $(".sidebar-menu li").each(function (index) {
                            $(this).removeClass();
                        });

                        if ($('a[href="' + carga_hash + '"]').length) {
                            var href = $('a[href="' + carga_hash + '"]');
                            var li_activo = $(href).parent();
                            $(li_activo).addClass('active');
                        }

                        document.title = carga_titulo + ' | ' + TituloOriginal;
                        // $('#div_ajax').fadeOut(500);
                        $('#areadetrabajo').fadeIn(500);
                        findAndRemove(HistorialAjax, 'hashtag', carga_hash);
                        HistorialAjax.push({hashtag: carga_hash, titulo: carga_titulo, referencia: carga_ruta});
                        // console.log(HistorialAjax);
                        // console.log('Cambio de Página: ' + carga_ruta + ', hash: [' + carga_hash + '] - Descripción: ' + carga_titulo);
                        ejecutado = true;

                    } else {
                        // document.location.href="#404";
                        CargarModulo('#404', "img/404.jpg", "Página no encontrada.");
                        // console.log('404 | No se encontró: ' + carga_ruta + ', hash: [' + carga_hash + '] - Descripción: ' + carga_titulo);
                    }
                });
            }

            $(document).ready(function () {
                fotoPerfil();
                $(document).ajaxStart(function (e, r, s) {
                    $('body').loader('show');
                    // $( ".loading-container" ).show();
                    // $( ".loader" ).show();
                });

                $(document).ajaxStop(function () {
                    $('body').loader('hide');
                    // $( ".loading-container" ).hide();
                    // $( ".loader" ).hide();
                });

                jash = window.location.hash;

                // $.getJSON( "inc/ajax.php?solicitud=ListarModulos", function( data ) {
                //     var items = [];
                //     $.each( data, function(i, modulo) {

                //         if(modulo.sNombre=='categorias' && data_sesion.USUARIO_TIPO!='SQUENDA'){
                //             //alert("session: "+data_sesion.USUARIO_TIPO);
                //         }else{
                //             $("#sidebar ul").append('<li><a href="#'+modulo.sNombre+'" alt="'+modulo.sRuta+'" title="'+modulo.sDescripcion+'"><i class="menu-icon '+modulo.sClases+'"></i><span class="menu-text"> '+modulo.sDescripcion+' </span></a></li>');
                //         }

                //     });
                // });

                $.ajax({
                    url: "inc/ajax.php?solicitud=DatosUsuario",
                    dataType: 'json',
                    async: false,
                    success: function (data) {
                        var items = [];
                        var cant_obj = ObjectLength(data);

                        if (data.cvePerfil != "" &&
                                data.desAdscripcion != "" &&
                                data.desGrupo != "" &&
                                data.nombre != "" &&
                                data.cveGrupo) {
                            data_sesion = data;
                            var desUcuario = "<b>Grupo:</b> " + data_sesion.desGrupo + "<br> <b>Adscripcion:</b> " + data_sesion.desAdscripcion;
                            $("#usuario_name").html("<b>Usuario:</b> " + data_sesion.nombre.toUpperCase());
                            $("#infoUsuario").html(desUcuario.toUpperCase());
                        } else {
                            document.location.href = "login.php";
                        }
                    }
                });

                $("a").click(function () {
                    var href = $(this).attr("alt");
                    var titulo = $(this).attr("title");

                    if (href != undefined) {
                        jash = $(this).attr("href");
                        CargarModulo(jash, href, titulo);
                    }
                });

                $(".main-content").on("click", "a", function () {
                    var href = $(this).attr("alt");
                    var titulo = $(this).attr("title");
                    var hashtag = $(this).attr("href");
                    if (hashtag == '#') {
                        return false;
                    }

                    if (href != undefined) {
                        jash = $(this).attr("href");
                        CargarModulo(jash, href, titulo);
                    }
                    ;
                });

                $("#areadetrabajo").on("click", 'button', function (e) {
                    var href = $(this).attr("alt");
                    var titulo = $(this).attr("title");
                    var hashtag = $(this).attr("href");
                    if (hashtag == '#') {
                        return false;
                    }

                    if (href != undefined) {
                        jash = $(this).attr("href");
                        CargarModulo(jash, href, titulo);
                    }
                    ;
                });
            });

            $(window).load(function () {
                areadetrabajo_ancho = $('#areadetrabajo').width();
                areadetrabajo_alto = $(document).height();

                if (jash.length > 1) {
                    if ($('a[href="' + jash + '"]').length > 0) {
                        var href = $('a[href="' + jash + '"]');
                        $(href).click();
                    } else {
                        var pagina = jash.split("#");
                        pagina = pagina[1];
                        paginatitulo = pagina;
                        if (pagina.indexOf("?") > -1) {
                            pagina = pagina.split("?");
                            paginatitulo = pagina[0];
                            pagina = pagina[0] + '.php?' + pagina[1];
                        } else {
                            paginatitulo = pagina;
                            pagina = pagina + '.php';
                        }
                        pagina = "modulos/" + pagina;
                        CargarModulo(jash, pagina, paginatitulo);
                        // console.log("No se encontró la página - La carga se emuló");
                    }
                } else {
                    window.location.hash = '#inicio';
                }

                $("#a_notificaciones").on('click', function () {
                    $("#a_notificaciones").removeClass("wave in");
                    $("#badge_notificaciones").html("");
                })

                setInterval(function (e) {
                    var NuevoHashtag = window.location.hash;
                    if (NuevoHashtag.length > 1) {
                        if (jash != NuevoHashtag) {
                            if ($('a[href="' + NuevoHashtag + '"]').length) {
                                objeto = $('a[href="' + NuevoHashtag + '"]');

                                var href = $(objeto).attr("alt");
                                var titulo = $(objeto).attr("title");

                                CargarModulo(NuevoHashtag, href, titulo);
                                // console.log('Historial: ' + $("a[href="+NuevoHashtag+"]").attr('title') + ' | Hash Previo: '+jash+' -> ');

                                jash = NuevoHashtag;
                            } else {
                                var index = HistorialAjax.map(function (d) {
                                    return d['hashtag'];
                                }).indexOf(NuevoHashtag);
                                if (index > -1) {
                                    CargarModulo(HistorialAjax[index].hashtag, HistorialAjax[index].referencia, HistorialAjax[index].titulo);
                                    // console.log('Elemento recuperado desde el historial: ' + HistorialAjax[index].hashtag);

                                    jash = NuevoHashtag;
                                } else {
                                    var pagina = NuevoHashtag.split("#");
                                    pagina = pagina[1];
                                    paginatitulo = pagina;
                                    if (pagina.indexOf("?") > -1) {
                                        pagina = pagina.split("?");
                                        paginatitulo = pagina[0];
                                        pagina = pagina[0] + '.php?' + pagina[1];
                                    } else {
                                        paginatitulo = pagina;
                                        pagina = pagina + '.php';
                                    }
                                    pagina = "modulos/" + pagina;
                                    CargarModulo(NuevoHashtag, pagina, paginatitulo);
                                    // console.log("No se encontró la página - La carga se emuló");
                                    jash = NuevoHashtag;
                                }
                            }
                            $.getScript("js/beyond.js");
                        }
                    }
                }, 250);
            });

            $(window).resize(function () {
                areadetrabajo_ancho = $('#areadetrabajo').width();
                areadetrabajo_alto = $(document).height();
            });

            function ObjectLength_Modern(object) {
                return Object.keys(object).length;
            }

            function ObjectLength_Legacy(object) {
                var length = 0;
                for (var key in object) {
                    if (object.hasOwnProperty(key)) {
                        ++length;
                    }
                }
                return length;
            }
            function fotoPerfil() {
                $.ajax({
                    url: "inc/ajax.php?solicitud=fotoPerfil",
                    dataType: "html",
                    async: false,
                    success: function (data) {
                        if (data !== "") {
                            var ruta = 'http://10.22.157.20/gestion2/' + data;
                            $('#usuario_img').prop('src', ruta);
                            $('#usuario_imgbig').prop('src', ruta);
                        } else {
                            $('#usuario_imgbig').prop('src', "img/user.png");
                            $('#usuario_img').prop('src', "img/user.png");
                        }
                    }
                });
            }
            var ObjectLength = Object.keys ? ObjectLength_Modern : ObjectLength_Legacy;
        </script>

    </body>
    <!--  /Body -->
</html>
