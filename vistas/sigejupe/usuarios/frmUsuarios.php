<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//var_dump($_SESSION);
    date_default_timezone_set('America/Mexico_City');
    $anioActual = date("Y");
    $fechaActual = date("d/m/Y");
    ?>

    <style type="text/css">

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

        .indicator {
            margin-right:5px;
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

        #divOpenCloseSerch{
            position: fixed;
            height: 85px;
            width: 25px;
            background-color: #c8a526;
            margin-left: 22%;
            display: none;
        }

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
        #barraLateralSM{
            background: #FBFBFB;
            height: 100%;
            /*position: fixed;*/
            width: 47px;
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

        .control-label{
            line-height: 2.5;
            text-align: right;
            margin-right: 0px;
            padding-right: 0px;
        }
        .btn-usuarios-form{
            margin-right: 10px;
        }
        .btn-usuarios-content{
            margin-top: 10px;
        }
        .btn-usuarios-form{
            margin-bottom: 10px;
        }
        .user-form{
            margin-top: 30px;
        }
        #verifyUser span{
            margin-right: 0px;
        }
        .input-green{
            border-color: green !important;
            border-width: 1px;
            border-style: solid;
        }
        .input-red{
            border-color: red;
            border-width: 1px;
            border-style: solid;
        }

        table.table {
            max-width: 100% !important;
        }

        #tabla_usuarios_container{
            display: none;
            overflow: auto;
        }




    </style>

    <link href="css/generalStyles.css" type="text/css" rel="stylesheet">

    <div id="container-principal" class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px; top: 20px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    Usuarios
                </h5>
            </div>
            <div class="panel-body">
                <h4>Registro / Busqueda / Actualizacion de usuario.</h4>
                <p>Para registrar o actualizar un usuario asegurate de que los campos requeridos sean llenados correctamente y pulsa el boton "Guardar", es requerido al menos un telefono (Telefono 1, Telefono 2 o Movil). Si cambias el usuario, debes verificar si esta disponible pulsando el boton <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                    <br><br>Nota: El campo <strong>e-mail</strong> es generado automaticamente y no se podrá cambiar.
                </p>
                <form id="user-form" name="user-form" class="user-form" action="#">
                    <div class="row form-group">
                        <label class="col-lg-1 control-label" for="grupo" >Grupo<label class="red">*</label></label>
                        <div class="col-lg-3">
                            <select class="form-control required requerido-para-usuario requerido-para-usuario-select requerido-para-consulta" id="grupo" name="grupo"></select>
                        </div>
                        <label class="col-lg-1 control-label" for="adscripcion">Adscripcion<label class="red">*</label></label>
                        <div class="col-lg-4">
                            <select class="form-control required requerido-para-usuario requerido-para-usuario-select requerido-para-consulta" id="adscripcion" name="adscripcion"><option value="0">SELECCIONE</option></select>
                        </div>
                        <div id="usuarioActivoContent" style="display:none">
                            <label class="col-lg-1 control-label" for="usuarioAactivo">Activo</label>
                            <div class="col-lg-2">
                                <input type="checkbox" class="form-control" name="usuarioAactivo" id="usuarioAactivo">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-lg-1 control-label" for="nombre">Nombre<label class="red">*</label></label>
                        <div class="col-lg-3">
                            <input type="text" name="nombre" id="nombre" class="form-control required requerido-para-usuario requerido-para-consulta toUppercase">
                        </div>
                        <label class="col-lg-1 control-label" for="apaterno">A. Paterno<label class="red">*</label></label>
                        <div class="col-lg-3">
                            <input type="text" name="paterno" id="apaterno" class="form-control required requerido-para-usuario requerido-para-consulta toUppercase">
                        </div>
                        <label class="col-lg-1 control-label" for="amaterno">A. Materno<label class="red">*</label></label>
                        <div class="col-lg-3">
                            <input type="text" name="materno" id="amaterno" class="form-control required requerido-para-usuario requerido-para-consulta toUppercase">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-lg-1 control-label" for="usuario">Usuario<label class="red">*</label></label>
                        <div class="col-lg-3">
                            <div class="input-group" id="user-input-container">
                                <input type="text" name="usuario" id="usuario" class="form-control required required-verify">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="verifyUser" type="button">
                                        <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <label class="col-lg-1 control-label" for="email">e-mail</label>
                        <div class="col-lg-4">
                            <input type="text" disabled="true" data-email="" name="email" id="email" class="form-control required-verify">
                        </div>
                        <label class="col-lg-1 control-label" for="password">Password<label class="red">*</label></label>
                        <div class="col-lg-2">
                            <div class="input-group">
                                <input autocomplete="new-password" type="password" name="password" id="password" class="form-control required">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="pass-btn" type="button">
                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-lg-1 control-label" for="tel1">Telefono 1</label>
                        <div class="col-lg-3">
                            <input type="text" name="tel1" id="tel1" class="form-control required-one">
                        </div>
                        <label class="col-lg-1 control-label" for="tel2">Telefono 2</label>
                        <div class="col-lg-3">
                            <input type="text" name="tel2" id="tel2" class="form-control required-one">
                        </div>
                        <label class="col-lg-1 control-label" for="movil">Movil</label>
                        <div class="col-lg-3">
                            <input type="text" name="movil" id="movil" class="form-control required-one">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 btn-usuarios-content">
                            <button type="button" class="btn btn-primary btn-usuarios-form" id="btnGuardarUsuariosEx" name="btnGuardarUsuariosEx" title="Guardar usuario">Guardar</button>
                            <button type="button" class="btn btn-primary btn-usuarios-form" id="btnConsultarUsuariosEx" name="btnConsultarUsuariosEx" title="Consultar usuarios">Consultar</button>
                            <button type="button" class="btn btn-primary btn-usuarios-form" id="btnLimpiarUsuariosEx" name="btnLimpiarUsuariosEx" title="Limpiar">Limpiar</button>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group alerts-user-messages">
                                <div id="divAlertWarningUser" class="alert alert-warning alert-dimdissable">
                                    <strong>Advertencia!</strong>
                                    <div id="divAlertWarningMsg">mensaje aqui</div>
                                </div>
                                <div id="divAlertSuccesUser" class="alert alert-success alert-dimdissable">
                                    <strong>Correcto!</strong>
                                    <div id="divAlertSuccessgMsg">mensaje aqui</div>
                                </div>
                                <div id="divAlertDangerUser" class="alert alert-danger alert-dimdissable">
                                    <strong>Error!</strong>
                                    <div id="divAlertDangerMsg">mensaje aqui</div>
                                </div>
                                <div id="divAlertInfoUser" class="alert alert-info alert-dimdissable">
                                    <strong>Informaci&oacute;n!</strong>
                                    <div id="divAlertInfoMsg">mensaje aqui</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="tabla_usuarios_container">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-9">
                        <table id="usuarios_table" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>e-mail</th>
                                    <th>Activo</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
                <!-- session variables -->
                <input type="hidden" name="sessionCveGrupo" id="sessionCveGrupo" value="<?php echo $_SESSION['cveGrupo'] ?>">
                <input type="hidden" name="sessionIdUser" id="sessionIdUser" value="<?php echo $_SESSION['cveUsuarioSistema'] ?>">
                <!-- usuario existente -->
                <input type="hidden" name="cveUsuario" id="cveUsuario" value="<?php echo @$_POST['cveUsuario']; ?>">
                <input type="hidden" name="cve-perfil" id="cve-perfil" value="">
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function () {
            // verifica que los campos gro, adscripcion, nombre, apaterno, amaterno tengan algo para que el campo "usuario" este desbloqueado
            check_requerido_usuario();
            var grupoActivo = $('#sessionCveGrupo').val();
            get_grupos_activos($('#grupo'), grupoActivo);

            // si es actualizacion, cveUsuario tiene algo
            var cveUsuario = $('#cveUsuario').val();
            if (cveUsuario != '') {
                // actualizacion
                // cargar datos del usuario
                load_user(cveUsuario);
                $('#usuarioActivoContent').show();
            }

            $("#usuarios_table").dataTable({
                "retrieve": true,
                "order": []
            });
        });

        $('#btnLimpiarUsuariosEx').on('click', function (e) {
            loadOpcion('sigejupe/usuarios/frmUsuarios.php', 'areadetrabajo');
            //$.post("sigejupe/usuarios/frmUsuarios.php",{cveUsuario:'7275'});
        });

        $('#email').on('keypress', function (e) {
            e.preventDefault();
            return false;
        });

        $('.requerido-para-usuario').on('keyup', debounce(function () {
            // verifica que los campos gro, adscripcion, nombre, apaterno, amaterno tengan algo para que el campo "usuario" y "e-mail" esten desbloqueados
            check_requerido_usuario();
        }, 1500));

        $('.requerido-para-usuario-select').on('change', function (e) {
            check_requerido_usuario();
        })

        $('#verifyUser').on('click', function () {
            // verificar por WS en gestion, por medio del boton (introducido manualmente)
            var username = $('#usuario').val();
            if (username == '') {
                $("#divAlertDangerMsg").html('Debes introducir un usuario');
                $("#divAlertDangerUser").slideDown('slow', function () {
                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                });
                $("html,body").animate({
                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                }, 'slow');
            } else {
                check_username_gestion($('#usuario'), username, undefined, 'manualInput');
            }
        });

        $('#usuario').on('keyup', function () {
            // si cambia el contenido, quitar la clase valida o erronea
            // se supone que el usuario va a introducir un username personalizado
            // quitar clase de disponible o ocupado
            $('#user-input-container').removeClass('input-green');
            $('#user-input-container').removeClass('input-red');
        });

        $('#pass-btn').mousedown(function () {
            showPass($('#password'), 'text');
        }).bind('mouseup', function () {
            showPass($('#password'), 'password');
        });

        $('body').on('keyup', '.toUppercase', function () {
            var valor = $(this).val();
            $(this).val(valor.toUpperCase());
        });

        function showPass(input, val) {
            input.prop('type', val);
        }

        $('#btnGuardarUsuariosEx').on('click', function (e) {
            //console.dir("guardar button");
            e.preventDefault();
            /*********** validaciones ***********/
            // validaciones campos requeridos
            var valido = true;
            var requeridos = $('.required');
            $(requeridos).each(function (index, element) {
                var tipo_input = $(element).prop('type').toLowerCase();
                // obtener valor del input
                switch (tipo_input) {
                    case 'text':
                    case 'password':
                        valor = $(element).val();
                        if (valor == '') {
                            valido = false;
                        }
                        ;
                        break;
                    case 'select-one':
                        valor = $(":selected", $(element)).val();
                        if (valor == 0) {
                            valido = false;
                        }
                        ;
                        break;
                }
            });
            if (!valido) {
                $("#divAlertDangerMsg").html('Debes llenar los campos requeridos');
                $("#divAlertDangerUser").slideDown('slow', function () {
                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                });
                $("html,body").animate({
                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                }, 'slow');
                return false;
            }
            // al menos un telefono capturado
            var valido = false;
            var unoRequerido = $('.required-one');
            $(unoRequerido).each(function (index, element) {
                var tipo_input = $(element).prop('type').toLowerCase();
                // obtener valor del input
                switch (tipo_input) {
                    case 'text':
                    case 'password':
                        valor = $(element).val();
                        if (valor != '') {
                            valido = true
                        }
                        ;
                        break;
                    case 'select-one':
                        valor = $(":selected", $(element)).val();
                        if (valor != 0) {
                            valido = true;
                        }
                        ;
                        break;
                }
            });
            if (!valido) {
                $("#divAlertDangerMsg").html('Debes introducir al menos un numero telefonico');
                $("#divAlertDangerUser").slideDown('slow', function () {
                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                });
                $("html,body").animate({
                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                }, 'slow');
                return false;
            }
            // usuario y e-mail validado
            var user_verificado = $('#usuario').parent().hasClass('input-green');
            var email_verificado = $('#email').hasClass('input-green');
            if (!user_verificado) {
                $("#divAlertDangerMsg").html('El usuario no fue verificado, comprueba que este disponible');
                $("#divAlertDangerUser").slideDown('slow', function () {
                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                });
                $("html,body").animate({
                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                }, 'slow');
                return false;
            }
            if (!email_verificado) {
                $("#divAlertDangerMsg").html('El e-mail no pudo ser verificado, intenta nuevamente');
                $("#divAlertDangerUser").slideDown('slow', function () {
                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                });
                $("html,body").animate({
                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                }, 'slow');
                return false;
            }
            /********* fin validaciones *********/
            // valores
            var data = {};
            // solo si es actualizar
            var cveUsuario = $('#cveUsuario').val();
            if (cveUsuario != '') {
                data['cveUsuario'] = cveUsuario;
                data['cvePerfil'] = $('#cve-perfil').val();
                if ($('#usuarioAactivo').is(':checked')) {
                    data['activo'] = 'S';
                } else {
                    data['activo'] = 'N';
                }
            } else {
                data['activo'] = 'S';
            }
            data['adscripcion'] = $(":selected", $('#adscripcion')).val();

            data['email'] = $('#email').attr('data-email');
            data['grupo'] = $(":selected", $('#grupo')).val();
            data['grupoActivo'] = $('#sessionCveGrupo').val();
            data['materno'] = $('#amaterno').val();
            data['movil'] = $('#movil').val();
            data['nombre'] = $('#nombre').val();
            data['paterno'] = $('#apaterno').val();
            data['pwd'] = $('#password').val();
            data['sistema'] = '38';
            data['telefono'] = $('#tel1').val();
            data['telefono2'] = $('#tel2').val();
            data['tipo'] = 'usuario_guardar';
            data['tipoUsuario'] = '2';
            data['usuario'] = $('#usuario').val();
            data['usuarioActivo'] = $('#sessionIdUser').val();
            data['zona_horaria'] = 'America/Mexico_City';

            // guarda correo y usuario solo si es nuevo registro, en actualizacion solo el usuario es modificado
            if (cveUsuario != '') {
                guardaUsuario(data);
            } else {
                guardaUsuarioYCorreo(data);
            }

        });

        $('#grupo').on('change', function (e) {
            var grupoActivo = $('#sessionCveGrupo').val();
            valor = $(":selected", $(this)).val();
            if (valor != 0) {
                // carga adscripciones de gestion
                // envio AJAX
                $.ajax({
                    type: "POST",
                    url: '../fachadas/gestion3/usuarios/UsuariosGestion3Facade.Class.php',
                    data: {
                        action: 'consultar_adscripcion',
                        grupo: valor,
                        grupo_activo: grupoActivo
                    },
                    dataType: "json",
                    beforeSend: function () {

                    },
                    success: function (datos) {
                        switch (datos.Estatus) {
                            case "ok" :
                                // respuesta success de WS gestion
                                if (datos.totalCount > 0) {
                                    // hay adscripciones disponibles
                                    $('#adscripcion').empty();
                                    var option = '<option value="0">SELECCIONE</option>';
                                    $.each(datos.resultados, function (index, element) {
                                        option += '<option value="' + element.CveAdscripcion + '">' + element.NomAdscripcion + '</option>';
                                    });
                                    $('#adscripcion').append(option);
                                } else {
                                    // no hay grupos
                                    $('#adscripcion').empty();
                                    var option = '<option value="0">SIN GRUPO DISPONIBLE</option>';
                                    $('#adscripcion').append(option);
                                }
                                break;
                            case "fail" :
                                // error en gestion WS
                                $("#divAlertDangerMsg").html(datos.mnj);
                                $("#divAlertDangerUser").slideDown('slow', function () {
                                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                                });
                                $("html,body").animate({
                                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                                }, 'slow');
                                break;
                            case "Error":
                                //console.dir(datos.mnj);
                                $("#divAlertDangerMsg").html(datos.mnj);
                                $("#divAlertDangerUser").slideDown('slow', function () {
                                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                                });
                                $("html,body").animate({
                                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                                }, 'slow');
                                break;
                        }
                    }, complete: function () {
                        if ($('#adscripcion').attr('data-selected') != undefined) {
                            var selected_value = $('#adscripcion').attr('data-selected');
                            $('#adscripcion').find('option[value="' + selected_value + '"]').attr('selected', 'selected');
                        }
                    },
                    error: function () {

                    },
                });
            } else {
                $('#adscripcion').empty();
                $('#adscripcion').append('<option value="0">SELECCIONE</option>')
            }
        });

        $('#btnConsultarUsuariosEx').on('click', function () {
            // validar al menos un criterio de busqueda
            var data = {};
            var valido = false;
            var unoRequerido = $('.requerido-para-consulta');
            $(unoRequerido).each(function (index, element) {
                var tipo_input = $(element).prop('type').toLowerCase();
                // obtener valor del input
                switch (tipo_input) {
                    case 'text':
                    case 'password':
                        valor = $(element).val();
                        if (valor != '') {
                            data[$(element).attr('name')] = valor;
                            valido = true
                        }
                        ;
                        break;
                    case 'select-one':
                        valor = $(":selected", $(element)).val();
                        if (valor != 0) {
                            data[$(element).attr('name')] = valor;
                            valido = true;
                        }
                        ;
                        break;
                }
            });
            if (!valido) {
                $("#divAlertDangerMsg").html('Debes introducir al menos un criterio para la consulta');
                $("#divAlertDangerUser").slideDown('slow', function () {
                    $("#divAlertDangerUser").delay(5000).slideUp('slow');
                });
                $("html,body").animate({
                    scrollTop: $("#divAlertDangerUser").offset().top - 60
                }, 'slow');
                return false;
            }
            /************ fin validaciones ******************/
            data['tipo'] = 'usuario_consultar';
            data['grupoActivo'] = $('#sessionCveGrupo').val();
            // envio AJAX Gestion
            $.ajax({
                type: "POST",
                url: '../fachadas/gestion3/usuarios/UsuariosGestion3Facade.Class.php',
                data: {
                    action: 'consultaUsuarios',
                    data_usr: data
                },
                dataType: "json",
                beforeSend: function () {

                },
                success: function (datos) {
                    switch (datos.estatus) {
                        case "Ok" :
                            if (datos.totalCount > 0) {
                                $('#tabla_usuarios_container').show();
                                $("html,body").animate({
                                    scrollTop: $("#tabla_usuarios_container").offset().top - 60
                                }, 'slow');
                                draw_usuarios(datos.resultados);
                            }
                            break;
                        case 'Error':
                            // sin resultados
                            $('#tabla_usuarios_container').hide();
                            $("#divAlertDangerMsg").html('No se encontraron resultados');
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                        case "Fail" :
                            // no se pudo consultar en gestion
                            $('#tabla_usuarios_container').hide();
                            $("#divAlertDangerMsg").html(datos.mnj);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                    }
                }, complete: function () {
                    //console.dir('loadedd');
                },
                error: function () {

                }
            });
        });

        function guardaUsuarioYCorreo(data) {
            // primero guardar el correo (zimbra) y si se guarda bien entonces guardar en gestion
            // envio AJAX Zimbra
            $.ajax({
                type: "POST",
                url: '../fachadas/zimbra/correos/CorreosZimbraFacade.Class.php',
                data: {
                    action: 'create_account',
                    data_email: data
                },
                dataType: "json",
                beforeSend: function () {

                },
                success: function (datos) {
                    switch (datos.status) {
                        case 'error':
                            $("#divAlertDangerMsg").html('Error al guardar email: ' + datos.msg);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                        case 'success':
                            var idZimbra = datos.idZimbra;
                            guardaUsuario(data, idZimbra);
                            break;
                    }
                }, complete: function (datos) {

                },
                error: function () {

                }
            });
        }

        function guardaUsuario(data, idZimbra) {
            if (idZimbra === undefined) {
                // se actualiza solo el usuario
                idZimbra = '';
            }
            // envio AJAX Gestion
            $.ajax({
                type: "POST",
                url: '../fachadas/gestion3/usuarios/UsuariosGestion3Facade.Class.php',
                data: {
                    action: 'guardaUsuario',
                    data_usr: data,
                    id_zimbra: idZimbra
                },
                dataType: "json",
                beforeSend: function () {
                    $('#btnGuardarUsuariosEx').attr('disabled', 'disabled');
                },
                success: function (datos) {
                    switch (datos.Estatus) {
                        case "Ok" :
                            // se guardo correctamente en gestion
                            $("#divAlertSuccessgMsg").html('El usuario se guardo correctamente');
                            $("#divAlertSuccesUser").slideDown('slow', function () {
                                $("#divAlertSuccesUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertSuccesUser").offset().top - 60
                            }, 'slow');
                            // si esta visible la tabla de consultas, actualizar tambien el registro datatables
                            // actualizar registro datatable
                            if ($('#tabla_usuarios_container').is(':visible')) {
                                if (data['cveUsuario'] != undefined) {
                                    // clave de usuario, mismo id que la fila 
                                    var cveUsuario = data['cveUsuario'];
                                    console.dir('EMAIL ' + data['email']);
                                    // data table de usuarios
                                    var usuarios_table = $("#usuarios_table").DataTable();
                                    // datos para actualizar
                                    var user_data = datos.resultado[0];
                                    var nombre_completo = user_data.Paterno + ' ' + user_data.Materno + ' ' + user_data.Nombre;
                                    var usuario = user_data.Login;
                                    var email = user_data.email;
                                    var activo = user_data.Activo;
                                    // update de fila 
                                    usuarios_table.row($('#' + cveUsuario)).data([nombre_completo, usuario, email, activo]).draw();
                                }
                            }
                            break;
                        case "Fail" :
                        case "Error" :
                        case "error" :
                            // no se guardo en gestion, mostrar mensaje y eliminar cuenta de zimbra
                            $("#divAlertDangerMsg").html(datos.mnj);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            eliminaCuentaZimbra(idZimbra);
                            break;
                    }
                }, complete: function () {
                    $('#btnGuardarUsuariosEx').removeAttr('disabled');
                },
                error: function () {

                }
            });
        }

        function eliminaCuentaZimbra(idZimbra) {
            // envio AJAX Zimbra
            $.ajax({
                type: "POST",
                url: '../fachadas/zimbra/correos/CorreosZimbraFacade.Class.php',
                data: {
                    action: 'delete_account',
                    id_zimbra: idZimbra
                },
                dataType: "json",
                beforeSend: function () {

                },
                success: function (datos) {
                    switch (datos.status) {
                        case 'error':
                            $("#divAlertDangerMsg").html('Error al eliminar email');
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                    }
                }, complete: function (datos) {

                },
                error: function () {

                }
            });
        }

        function get_prefix_gpo() {
            var gpo = $(":selected", $('#grupo')).text();
            var prefix = $(":selected", $('#grupo')).attr('data-prefijo');
            if (prefix != undefined) {
                return prefix;
            } else {
                // el grupo no tiene prefijo, mostrar mensaje de error (el administrador tendrá que agregar el prefijo en gestion, en la tabla tblgrupos para el grupo seleccionado)
                $("#divAlertWarningMsg").html('El grupo <strong>' + gpo + '</strong> no tiene prefijo asignado,</br> favor de comunicarse con el administrador de sistemas.');
                $("#divAlertWarningUser").slideDown('slow', function () {
                    $("#divAlertWarningUser").delay(5000).slideUp('slow');
                });
                return false;
            }
        }

        function check_requerido_usuario() {
            var familia = $('.requerido-para-usuario');
            var valido = true;
            // quitar clase de usuario disponible u ocupado
            $('#user-input-container').removeClass('input-green');
            $('#user-input-container').removeClass('input-red');
            // quitar clase de email disponible u ocupado
            $('#email').removeClass('input-green');
            $('#email').removeClass('input-red');
            $(familia).each(function (index, miembro) {
                var tipo_input = $(miembro).prop('type').toLowerCase();
                // obtener valor del input
                switch (tipo_input) {
                    case 'text':
                        valor = $(miembro).val();
                        if (valor == '') {
                            valido = false;
                        }
                        ;
                        break;
                    case 'select-one':
                        valor = $(":selected", $(miembro)).val();
                        if (valor == 0) {
                            valido = false;
                        }
                        ;
                        break;
                }
            });

            if (valido) {
                // se genera el usuario solo si hay grupo, adscripcion, nombre, apaterno y amaterno
                $('#usuario').removeAttr('disabled');
                // generar el usuario con las reglas establecidas, verifica con WS (no entra cuando se esta editando)
                if ($('#cveUsuario').val() == '') {
                    generate_username($('#usuario'));
                } else {
                    $('#user-input-container').addClass('input-green');
                }
                // genera el email zimbra WS (no entra cuando se esta editando, pues el email no se puede cambiar)
                if ($('#cveUsuario').val() == '') {
                    generate_email($('#email'));
                } else {
                    $('#email').addClass('input-green');
                }
            } else {
                $('#usuario').val('');
                $('#email').val('');
                $('#email').attr('data-email', '');
                $('#usuario').attr('disabled', 'disabled');
            }
        }

        function generate_username(input, nivel) {
            // valor por default 
            if (nivel === undefined) {
                nivel = 1;
            }
            // quitar clase de disponible o ocupado
            $('#user-input-container').removeClass('input-green');
            $('#user-input-container').removeClass('input-red');
            // genera cadena usuario a un input recibido
            var nombre = $('#nombre').val();
            var apaterno = $('#apaterno').val();
            apaterno = apaterno.replace(/\s/g, "");
            var amaterno = $('#amaterno').val();
            amaterno = amaterno.replace(/\s/g, "");
            var dominio = 'pjedomex.gob.mx';
            var inicial_nombre = nombre.substring(0, 1);
            var inicial_apaterno = apaterno.substring(0, 1);
            var inicial_amaterno = amaterno.substring(0, 1);
            var final_materno = amaterno.substr(amaterno.length - 1);

            // generar usuario por nivel de complejidad
            switch (nivel) {
                case 1 :
                    var username = inicial_nombre + apaterno + inicial_amaterno;
                    break;
                case 2 :
                    var username = inicial_nombre + apaterno + inicial_amaterno + final_materno;
                    break;
                case 3 :
                    var random_n = Math.floor(Math.random() * (999 - 100)) + 100;
                    var username = inicial_nombre + apaterno + inicial_amaterno + random_n;
                    break;
                default :
                    var username = inicial_nombre + apaterno + inicial_amaterno;
                    break;
            }

            var username = username.toUpperCase();
            check_username_gestion(input, username, nivel);
        }

        function generate_email(input, nivel) {
            // valor por default 
            if (nivel === undefined) {
                nivel = 1;
            }
            // quitar clase de disponible o ocupado
            $('#email').removeClass('input-green');
            $('#email').removeClass('input-red');
            // genera cadena email a un input recibido
            var nombre = $('#nombre').val();
            var nombre_completo = $('#nombre').val().split(' ');
            var primer_nombre = nombre_completo[0];
            if (nombre_completo[1] === undefined) {
                var segundo_nombre = '';
            } else {
                var segundo_nombre = nombre_completo[1];
            }
            var apaterno = $('#apaterno').val();
            apaterno = apaterno.replace(/\s/g, "");
            var amaterno = $('#amaterno').val();
            amaterno = amaterno.replace(/\s/g, "");
            var dominio = 'pjedomex.gob.mx';
            var inicial_nombre = nombre.substring(0, 1);
            var inicial_apaterno = apaterno.substring(0, 1);
            var inicial_amaterno = amaterno.substring(0, 1);
            var final_materno = amaterno.substr(amaterno.length - 1);
            var prefix = get_prefix_gpo();
            if (!prefix) {
                $('#grupo').focus();
                return false;
            }

            // generar email por nivel de complejidad
            switch (nivel) {
                case 1 :
                    var email = prefix + '.' + primer_nombre + '.' + apaterno + '@' + dominio;
                    break;
                case 2 :
                    var email = prefix + '.' + primer_nombre + '.' + apaterno + '.' + amaterno + '@' + dominio;
                    break;
                default :
                    if (segundo_nombre != '') {
                        var email = prefix + '.' + primer_nombre + '.' + segundo_nombre + '.' + apaterno + '.' + amaterno + '@' + dominio;
                    } else {
                        var random_n = Math.floor(Math.random() * 99) + 1;
                        var email = prefix + '.' + primer_nombre + '.' + apaterno + '.' + random_n + '@' + dominio;
                    }
                    break;
            }

            var email = email.toLowerCase();
            check_email_zimbra(input, email, nivel);
        }

        function check_username_gestion(input, username, nivel, manualInput) {
            if (manualInput === undefined) {
                manualInput = false;
            }
            if (nivel === undefined) {
                nivel = 1;
            }
            // quitar clase de usuario disponible o ocupado
            $('#user-input-container').removeClass('input-green');
            $('#user-input-container').removeClass('input-red');
            // envio AJAX
            $.ajax({
                type: "POST",
                url: '../fachadas/gestion3/usuarios/UsuariosGestion3Facade.Class.php',
                data: {
                    action: 'validaUsuario',
                    usuario: username
                },
                dataType: "json",
                beforeSend: function () {
                    // desactivar el boton
                    $('#verifyUser').attr('disabled', 'disabled');
                },
                success: function (datos) {
                    switch (datos.Estatus) {
                        case "Ok" :
                            // el usuario esta disponible
                            //console.dir("disponible");
                            $('#user-input-container').addClass('input-green');
                            $('#usuario').val(username);
                            break;
                        case "Fail" :
                            // el usuario ya esta ocupado
                            if (manualInput) {
                                // fue introducido manualmente, y ya esta ocupado
                                $('#user-input-container').addClass('input-red');
                                $('#usuario').val(username);
                                // mostrar mensaje
                                $("#divAlertWarningMsg").html('El usuario <strong>' + username + '</strong> no esta disponible');
                                $("#divAlertWarningUser").slideDown('slow', function () {
                                    $("#divAlertWarningUser").delay(5000).slideUp('slow');
                                });
                            } else {
                                generate_username(input, nivel + 1);
                            }
                            break;
                        case "Error":
                            //console.dir(datos.mnj);
                            $("#divAlertDangerMsg").html(datos.mnj);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                    }
                }, complete: function () {
                    // activar el boton
                    $('#verifyUser').removeAttr('disabled');
                    //$('.requerido-para-usuario').blur();
                },
                error: function () {

                },
            });
        }

        function check_email_zimbra(input, email, nivel) {
            if (nivel === undefined) {
                nivel = 1;
            }
            // quitar clase de usuario disponible o ocupado
            $('#email').removeClass('input-green');
            $('#email').removeClass('input-red');
            // envio AJAX
            $.ajax({
                type: "POST",
                url: '../fachadas/zimbra/correos/CorreosZimbraFacade.Class.php',
                data: {
                    action: 'check_available_email',
                    email: email
                },
                dataType: "json",
                beforeSend: function () {

                },
                success: function (datos) {
                    switch (datos.status) {
                        case 'success':
                            $('#email').addClass('input-green');
                            $('#email').val(email);
                            $('#email').attr('data-email', email);
                            break;
                        case 'error':
                            generate_email(input, nivel + 1);
                            break;
                    }
                }, complete: function () {
                    //$('.requerido-para-usuario').blur();
                },
                error: function () {

                },
            });
        }

        function get_grupos_activos(select, grupoActivo) {
            // carga los grupos activos dependiento el grupo se sesion
            // envio AJAX
            $.ajax({
                type: "POST",
                url: '../fachadas/gestion3/usuarios/UsuariosGestion3Facade.Class.php',
                data: {
                    action: 'consultaGrupo',
                    grupo_activo: grupoActivo
                },
                dataType: "json",
                beforeSend: function () {

                },
                success: function (datos) {
                    switch (datos.Estatus) {
                        case "ok" :
                            // respuesta success de WS gestion
                            if (datos.totalCount > 0) {
                                // hay grupos disponibles
                                var option = '<option value="0">SELECCIONE</option>';
                                $.each(datos.resultados, function (index, element) {
                                    option += '<option data-prefijo="' + element.prefijo + '" value="' + element.CveGrupo + '">' + element.NomGrupo + '</option>';
                                });
                                $(select).append(option);
                            } else {
                                // no hay grupos
                                var option = '<option value="0">SIN GRUPO DISPONIBLE</option>';
                                $(select).append(option);
                            }
                            break;
                        case "fail" :
                            // error en gestion WS
                            $("#divAlertDangerMsg").html(datos.mnj);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                        case "Error":
                            //console.dir(datos.mnj);
                            $("#divAlertDangerMsg").html(datos.mnj);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                    }
                }, complete: function () {

                },
                error: function () {

                },
            });
        }

        function load_user(cveUsuario, desplazar) {
            $('#cveUsuario').val(cveUsuario);
            if (desplazar === undefined) {
                desplazar = false;
            } else {
                desplazar = true;
            }
            // envio AJAX Gestion
            $.ajax({
                type: "POST",
                url: '../fachadas/gestion3/usuarios/UsuariosGestion3Facade.Class.php',
                data: {
                    action: 'cargaUsuario',
                    cve_usuario: cveUsuario
                },
                dataType: "json",
                beforeSend: function () {
                    if (desplazar != false) {
                        $("html,body").animate({
                            scrollTop: $("#user-form").offset().top - 60
                        }, 'slow');
                    }
                },
                success: function (datos) {
                    switch (datos.estatus) {
                        case "Ok" :
                            if (datos.totalCount > 0) {
                                var usuario = datos.resultados[0][0];
                                // grupo
                                $('#grupo').find('option[value=' + usuario.CveGrupo + ']').attr('selected', 'selected');
                                $('#grupo').change();
                                $('#grupo').attr('disabled', 'disabled');
                                // adscripcion
                                $('#adscripcion').attr('data-selected', usuario.CveAdscripcion);
                                $('#adscripcion').change();
                                // activo
                                $('#usuarioActivoContent').show();
                                if (usuario.Activo == 'S') {
                                    $('#usuarioAactivo').attr('checked', true);
                                } else {
                                    $('#usuarioAactivo').attr('checked', false);
                                }
                                // nombre
                                $('#nombre').val(usuario.Nombre);
                                // apellido paterno
                                $('#apaterno').val(usuario.Paterno);
                                // apellido materno
                                $('#amaterno').val(usuario.Materno);
                                // usuario
                                $('#usuario').val(usuario.Login);
                                $('#usuario').attr('disabled', false);
                                $('#user-input-container').addClass('input-green');
                                // email
                                $('#email').val(usuario.email);
                                $('#email').addClass('input-green');
                                // password
                                $('#password').val(usuario.pwd);
                                $('#password').attr('disabled', 'disabled');
                                // telefono 1
                                $('#tel1').val(usuario.telefono);
                                // telefono 2
                                $('#tel2').val(usuario.telefono2);
                                // movil
                                $('#movil').val(usuario.movil);
                                // guardar cveperfil y mandarlo como viene
                                $('#cve-perfil').val(usuario.cvePerfil);
                            }
                            break;
                        case "Fail" :
                            // no se guardo en gestion, mostrar mensaje y eliminar cuenta de zimbra
                            $("#divAlertDangerMsg").html(datos.mnj);
                            $("#divAlertDangerUser").slideDown('slow', function () {
                                $("#divAlertDangerUser").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDangerUser").offset().top - 60
                            }, 'slow');
                            break;
                    }
                }, complete: function () {
                    //console.dir('loadedd');
                },
                error: function () {

                }
            });
        }

        function draw_usuarios(usuarios) {
            // dibuja la tabla de usuarios recibidos de gestion
            var usuarios = usuarios[0];
            $("#usuarios_table").DataTable().destroy();
            $("#usuarios_table tbody").empty();
            var body = '';
            //$(usuarios).each(function (element) {
            $.each(usuarios, function (key, usuario) {
                body += '<tr id="' + usuario.CveUsuario + '" onclick="load_user(' + usuario.CveUsuario + ',true)" style="cursor: pointer">'
                        + '<td>'
                        + usuario.Paterno + ' ' + usuario.Materno + ' ' + usuario.Nombre
                        + '</td>'
                        + '<td>'
                        + usuario.Login
                        + '</td>'
                        + '<td>'
                        + usuario.email
                        + '</td>'
                        + '<td>'
                        + usuario.Activo
                        + '</td>'
                        + '</tr>';
            });
            $("#usuarios_table tbody").append(body);
            var tablo = $("#usuarios_table").dataTable({
                "retrieve": true,
                "order": ["0", "asc"],
                "language": {
                    "emptyTable": "No se encontraron resultados"
                },
                "oLanguage": {
                    "sLengthMenu": "Mostrando _MENU_ registros por pagina",
                    "oPaginate": {
                        "sPrevious": "Anterior",
                        "sNext": "Siguiente"
                    }
                }
            });
        }

        function debounce(fn, duration) {
            var timer;
            return function () {
                clearTimeout(timer);
                timer = setTimeout(fn, duration);
            }
        }

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
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>