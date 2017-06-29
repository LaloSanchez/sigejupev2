<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
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

        .rojo{
            color: #881518;
        }
        .verde{
            color: #339900;
        }
        .azul{
            color: #0000cc;
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Gesti&oacute;n de Tiempos (Orden de Aprehensi&oacute;n, Cateos y NIP)
            </h5>
        </div>
        <div class="panel-body consultaInformacon">
            <div class="form-horizontal">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="cmbTipoCarpeta" class="control-label col-xs-12 col-sm-12 col-lg-5 col-md-5">TIPO DE CARPETA</label>
                        <div class="col-xs-12 col-md-3 col-sm-12 col-lg-3" >
                            <select id="cmbTipoCarpeta" class="form-control" >
                                <option value="0">SELECCIONE UNA OPCI&Oacute;N</option>
                                <option value="1">CATEO</option>
                                <option value="2">ORDEN DE APREHENSI&Oacute;N</option>
                                <option value="3">TOMA DE MUESTRAS</option>
                                <option value="4">GEOLOCALIZACI&Oacute;N</option>
                                <option value="5">NIP CATEO</option>
                                <option value="6">NIP ORDEN DE APREHENSI&Oacute;N</option>
                                <option value="7">NIP TOMA DE MUESTRA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group minutos" style="display:none">
                        <label for="txtMinutos" class="control-label col-xs-12 col-sm-12 col-lg-5 col-md-5">MINUTOS DE VIGENCIA</label>
                        <div class="col-xs-12 col-md-3 col-sm-12 col-lg-3" >
                            <input id="txtMinutos" class="form-control" type="text" pattern="[0-9]{1,}" title="SOLO N&Uacute;MEROS" placeholder="MINUTOS DE VIGENCIA" />
                        </div>
                    </div>
                    <div class="form-group text-center actual" style="display:none">
                        <label for="txtMinutos">TIEMPO DE VIGENCIA ACTUAL: <actual></actual></label>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-center buttons ">
                            <button class="btn btn-primary" id="inputLimpiar" onclick="guardarTiempo();"> GUARDAR </button>
                            <button type="submit" class="btn btn-primary" id="inputLimpiar" onclick="limpiar();"> LIMPIAR </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 result" >
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" >
        var consultaTiempo = function (carpeta) {
            $('.result').html('');
            $('.actual').hide();
            if (carpeta != 0) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiemposesperasolicitudes/TiemposesperasolicitudesFacade.Class.php",
                    data: {
                        cveTipoSolicitud: carpeta,
                        accion: 'consultar',
                        activo: 'S'
                    },
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        if (data.totalCount != '0') {
                            $("actual").html(data.data[0].munitosEspera + ' MINUTOS');
                            $(".actual").show();
                            $('.result').html('<div class="alert alert-info" >GUARDADO CORRECTAMENTE</div>');
                        }
                    }
                });
            } else {
                $('.result').html('<div class="alert alert-danger" >SELECCIONA UN TIPO DE CARPTA</div>');
            }
            return false;
        }
        var guardarTiempo = function () {
            var carpeta = $("#cmbTipoCarpeta").val();
            if ((carpeta != '') && (carpeta > 0)) {
                var minutosEspera = $("#txtMinutos").val();
                if ((minutosEspera != '') && (minutosEspera > 0)) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/tiemposesperasolicitudes/TiemposesperasolicitudesFacade.Class.php",
                        data: {
                            cveTipoSolicitud: carpeta,
                            munitosEspera: minutosEspera,
                            accion: 'guardar',
                            activo: 'S'
                        },
                        async: false,
                        dataType: 'json',
                        success: function (data) {
                            if (data.totalCount != '0') {
                                limpiar();
                                $("actual").html(minutosEspera + ' MINUTOS');
                                $(".actual").show();
                                $('.result').html('<div class="alert alert-info text-center" style="display:block;" >SE GUARDO EL REGISTRO</div>');
                            } else {
                                $(".actual").hide();
                                $('.result').html('<div class="alert alert-danger text-center" style="display:block;" >NO SE GUARDO LA INFORMACION</div>');
                            }
                        }
                    });
                } else {
                    $('.result').html('<div class="alert alert-danger text-center" style="display:block;" >ESCRIBE EL LOS MINUTOS</div>');
                }
            } else {
                $('.result').html('<div class="alert alert-danger text-center" style="display:block;">SELECCION UN TIPO DE CARPETA</div>');
            }
            console.log('Hola');
            return false;
        }
        var limpiar = function () {
            $("#cmbTipoCarpeta").val('0').trigger('change');
            $('.actual').hide();
        }
        $(function () {
            $("#cmbTipoCarpeta").change(function () {
                var valor = $(this).val();
                $("#txtMinutos").val('');
                if ((valor != '') && (valor != 0)) {
                    consultaTiempo(valor)
                    $('.minutos').show();
                } else {
                    $("#txtMinutos").val('');
                    $('.minutos').hide();
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