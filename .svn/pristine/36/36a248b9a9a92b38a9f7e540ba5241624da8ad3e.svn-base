<?php
@session_start();
date_default_timezone_set('America/Mexico_City');
if (isset($_SESSION['NumEmpleado'])) {
    header('Location: inicio.php');
}
$_SESSION["cveSistema"] = 38;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
        <meta name="application-name" content="SIGEJUPE" />
        <meta name="apple-mobile-web-app-title" content="SIGEJUPE" />
        <meta name="application-name" content="SIGEJUPE 2.0" />
        <meta name="apple-mobile-web-app-title" content="SIGEJUPE 2.0" />
        <meta name="apple-mobile-web-app-capable" content="yes">
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

        <title>Sistema de Gesti&oacute;n Judicial Penal V. 2.0</title>


        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />


        <script src="js/jquery-2.0.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
        

        <style type="text/css">

            body, html {
                background: #FFFFFF;              
                font-family: Arial;
                color: #000000;
                font-size: 20px;
                text-decoration: none;
                height: 100%;
                background-repeat: no-repeat;
            }

            .card-container.card {
                max-width: 350px;
                padding: 40px 40px;
            }

            .btn {
                font-weight: 700;
                height: 36px;
                -moz-user-select: none;
                -webkit-user-select: none;
                user-select: none;
                cursor: default;
            }
            /*
             * Card component
             */
            .card {
                /*background-color: #F7F7F7;*/
                background-color: #f8f8f8;
                /* just in case there no content*/
                padding: 20px 25px 30px;
                margin: 0 auto 50px;
                margin-top: 50px;
                /* shadows and rounded borders */
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
            }

            .profile-img-card {
                width: 142px;
                height: 200px;
                margin: 0 auto 10px;
                display: block;
            }

            /*
             * Form styles
             */
            .profile-name-card {
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                margin: 10px 0 0;
                min-height: 1em;
            }

            .form-signin #inputEmail,
            .form-signin #inputPassword {
                direction: ltr;
                height: 44px;
                font-size: 16px;
            }

            .form-signin input[type=email],
            .form-signin input[type=password],
            .form-signin input[type=text],
            .form-signin button {
                width: 100%;
                display: block;
                z-index: 1;
                position: relative;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .form-signin .form-control:focus {
                border-color: rgb(104, 145, 162);
                outline: 0;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
            }

            .btn.btn-signin {
                background-color: #881518; 
                /*background-color: rgb(104, 145, 162);*/
                /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
                padding: 0px;
                font-weight: 700;
                font-size: 14px;
                height: 36px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                border: none;
                -o-transition: all 0.218s;
                -moz-transition: all 0.218s;
                -webkit-transition: all 0.218s;
                transition: all 0.218s;
            }

            .btn.btn-signin:hover,
            .btn.btn-signin:active,
            .btn.btn-signin:focus {
                cursor: pointer;
                background-color: #df3338;
            }


            .input-group{
                margin: 15px 0px;
            }

            .h1Titulo{
                color: #000000;             
                text-align: center;
            }           

            .foot{
                font-size: 13px;
                text-align: right;             
            }

            .h1Titulo{
                color: #ad1d22;
            }
            .glyphicon-refresh-animate {
                -animation: spin .7s infinite linear;
                -webkit-animation: spin2 .7s infinite linear;
                -moz-animation: spin2 .7s infinite linear;
            }

            @-webkit-keyframes spin2 {
                from { -webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);}
                to { -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);}
            }
            @-moz-keyframes spin2 {
                from { -webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);}
                to { -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);}
            }

            @keyframes spin {
                from { transform: scale(1) rotate(0deg);}
            }
        </style>
        <script type="text/javascript">
            $('#txtUsuario').focus();

            $("#txtUsuario").keypress(function (e) {
                if (e.which === 13) {
                    if ($("#txtUsuario").val() !== "")
                    {
                        $("#txtPassword").focus();
                    }
                }
            });

            $("#txtPassword").keypress(function (e) {
                if (e.which === 13) {
                    $('#btnIngresar').click();
                }
            });



            $(function () {
                window.addEventListener('beforeinstallprompt', function (e) {
                    e.userChoice.then(function (choiceResult) {

                        console.log(choiceResult.outcome);

                        if (choiceResult.outcome == 'dismissed') {
                            console.log('Cancelar');
                        }
                        else {
                            console.log('Agregar a pantalla principal');
                        }
                    });
                });

                /*$('#btnIngresar').on('click', function () {
                    var txtUsuario = $.trim($('#txtUsuario').val());
                    var txtPassword = $.trim($('#txtPassword').val());
                    if (txtUsuario !== "" && txtPassword !== "") {
                        //login();
                        loginJs.loginAutorize();
                    } else {
                        $("#divErrorMnj").html("Por favor ingrese usuario y/o contrase&ntilde;a.");
                        $("#divErrorMnj").show("fade");

                    }

                });*/
                $('#txtUsuario, #txtPassword').on('keypress', function (event) {
                    if (event.which === 13) {
                        var txtUsuario = $.trim($('#txtUsuario').val());
                        var txtPassword = $.trim($('#txtPassword').val());
                        if (txtUsuario !== "" && txtPassword !== "") {
                            //login();
                            loginJs.loginAutorize();
                        } else {
                            $("#divErrorMnj").html("Por favor ingrese usuario y/o contrase&ntilde;a.");
                            $("#divErrorMnj").show("fade");

                        }
                    }
                });
            });


 //           login = function () {

//                var tipoUrs = "1";
//
//                if ($("#chkTipoUsuario").is(':checked')) {
//                    tipoUrs = "2";
//                }
//                if (($("#chkUseFirma").is(":checked")) && ($("#cer").val() == "" || $("#key").val() == "")) {
//                    var mensaje = "";
//                    if ($("#cer").val() == "") {
//                        mensaje = " - .CER";
//                    }
//                    if ($("#key").val() == "") {
//                        mensaje += " - .KEY";
//                    }
//                    $("#divErrorMnj").html("FALTA PROPORCIONAR EL(LOS) ARCHIVO(S): " + mensaje);
//                    $("#divErrorMnj").show("fade");
//                    return false;
//                }
//                $.ajax({
//                    type: "POST",
//                    url: "../fachadas/gestion/login/LoginFacade.Class.php",
//                    async: true,
//                    dataType: "json",
//                    data: {
//                        usuario: $.trim($('#txtUsuario').val()),
//                        password: $.trim($('#txtPassword').val()),
//                        tipoUsuario: tipoUrs
//                    },
//                    beforeSend: function (datos) {
//                        $("#conectando").show();
//                        $("#btnIngresar").prop("disabled", true);
//                    },
//                    success: function (result) {
//                        if (result !== "") {
//                            //                     var jsonResult = eval("(" + result + ")");
//                            if (result.estatus === "ok") {
//                                $(location).attr('href', result.location);
//                            } else {
//                                $("#divErrorMnj").html("Usuario o contrase&ntilde;a incorrecta");
//                                $("#divErrorMnj").show("fade");
//                                $("#conectando").hide();
//                                $("#btnIngresar").prop("disabled", false);
//                            }
//                        }
//                    },
//                    error: function (objeto, quepaso, otroobj) {
//
//                    }
//                });
                //            $.post(
                //                    "../fachadas/gestion/login/LoginFacade.Class.php",
                //                    {
                //                       usuario: $.trim($('#txtUsuario').val()),
                //                       password: $.trim($('#txtPassword').val()),
                //                       tipoUsuario: tipoUrs
                //                    },
                //            function (result) {
                //               if (result !== "") {
                //                  var jsonResult = eval("(" + result + ")");
                //                  if (jsonResult.estatus === "ok") {
                //                     $(location).attr('href', jsonResult.location);
                //                  } else {
                //                     $("#divErrorMnj").html("Usuario o contrase&ntilde;a incorrecta");
                //                     $("#divErrorMnj").show("fade");
                //                  }
                //               }
                //            }
                //            );
           // };
            function hideAddressBar()
            {
                if (!window.location.hash)
                {
                    if (document.height <= window.outerHeight + 10)
                    {
                        document.body.style.height = (window.outerHeight + 50) + 'px';
                        setTimeout(function () {
                            window.scrollTo(0, 1);
                        }, 50);
                    }
                    else
                    {
                        setTimeout(function () {
                            window.scrollTo(0, 1);
                        }, 0);
                    }
                }
            }

            window.addEventListener("load", hideAddressBar);
            window.addEventListener("orientationchange", hideAddressBar);
        </script>


    </head>
    <body>             
        <div class="container">
            <div class="page-header">
                <h1 class="h1Titulo">Sistema de Gesti&oacute;n Judicial Penal</h1>
            </div>            
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="img/logoLogin.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                        <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Usuario" />
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                        <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Contrase&ntilde;a" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">Usuario externo?</span>                        
                        <span class="input-group-addon">
                            <input type="checkbox" id="chkTipoUsuario" name="chkTipoUsuario" aria-label="Usuarios Externos">
                        </span>
                    </div>
                    <div class="input-group useFirma">
                        <span class="input-group-addon" id="sizing-addon1">Usar Firma Electr&oacute;nica?<br>(OPCIONAL)</span>
                        <span class="input-group-addon">
                            <input type="checkbox" onclick="javascript:loginJs.useFirma();" id="chkUseFirma" name="chkUseFirma" aria-label="Usuarios Externos">
                        </span>
                    </div>
                    <!-- <button type="button" class="btn btn-lg btn-primary btn-block btn-signin" id="btnIngresar" name="btnIngresar">Ingresar</button>
                    -->
                    <div class="input-group firmaElectronica" style="display:none;">
                        <div class="input-group-addon">
                            <input type="file" name="cer" class="inputfile inputfile-6 " id="cer" accept=".cer" />
                            <label for="cer"><span></span> <strong><i class="fa fa-file" ></i> Archivo .Cer</strong></label>
                        <!--</div>
                        <div class="input-group-addon">-->
                            <input type="file" name="key" class="inputfile inputfile-6 " id="key" accept=".key" />
                            <label for="key" ><span></span> <strong><i class="fa fa-file" ></i> Archivo .Key</strong></label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-lg btn-primary btn-block btn-signin" onclick="javascript:loginJs.verificar();" id="btnIngresar" name="btnIngresar">Ingresar</button>
                </form>
                <br/>                
                <div id="divErrorMnj" class="alert alert-danger" style="display: none; text-align: center" onclick="$('#divErrorMnj').hide('flip');">                                
                </div>
                <div id="conectando" style="display: none;">
                    <span class="label label-success"> <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i> Conectando ... </span>
                </div>
                <br/>  
            </div>
            <div id="libsSign"></div>
        </div>       
    </body>
</html>
<script src="js/Firma.js"></script>
<script src="js/login.js"></script>
<script language="javascript">
    var loginJs = new LoginJs();
    loginJs.init();
    localStorage.clear();
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
                labelVal = label.innerHTML;
        input.addEventListener('change', function (e) {
            var fileName = '';
            if (this.files && this.files.length > 1) {
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            } else {
                fileName = e.target.value.split('\\').pop();
            }
            if (fileName) {
                label.querySelector('span').innerHTML = fileName;
            } else {
                label.innerHTML = labelVal;
            }
        });
    });
</script>
