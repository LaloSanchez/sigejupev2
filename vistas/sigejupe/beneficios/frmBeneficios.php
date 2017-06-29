<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


    $cvedeljuzgado = "";
    $cveTipoCarpeta = "";
    $idAcutacionPadre = "";
    $idReferencia = "";
    $procedencia = 0;
    $idAcutacion = "";

    if (isset($_POST['cveJuzgado'])) {
        $cvedeljuzgado = @$_POST['cveJuzgado'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $cveTipoCarpeta = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['idAcutacionPadre'])) {
        $idAcutacionPadre = @$_POST['idAcutacionPadre'];
    }

    if (isset($_POST['idReferencia'])) {
        $idReferencia = @$_POST['idReferencia'];
    }

    if (isset($_POST['idActuacion'])) {
        $idActuacion = @$_POST['idActuacion'];
    }

    //
    //$idActuacion=36;
    //$idReferencia = 34765; 
    //$idAcutacionPadre=14552;
    //$cveTipoCarpeta=2;
    ////$cvedeljuzgado=762;


    //$idActuacion=39;
    //$idReferencia = 10714; 
    //$cveTipoCarpeta=3;
    //$cvedeljuzgado=10171;


    if (($idActuacion != 0 && $idActuacion != "")&& ($cveTipoCarpeta != 0 && $cveTipoCarpeta != "")&&($idReferencia != 0 && $idReferencia != "")) {
        $procedencia = 1; // viene de arbol
    } 
    //else {
    //    $procedencia = 0; // formulario general
    //}


    if (($cvedeljuzgado != 0 && $cvedeljuzgado != "")&& ($cveTipoCarpeta != 0 && $cveTipoCarpeta != "")&&($idReferencia != 0 && $idReferencia != "")) {
        $procedencia = 2; // viene de arbol
    } 
    //else {
    //    $procedenciaarbol = 0; // formulario general
    //}



    //    echo "<br> Actuacion: " . $idActuacionArbol . "<br>";
    //    echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
    //    echo "Procedencia: " . $procedencia . "<br>";
    $origen = ( isset($_GET['origen']) && $_GET['origen'] != "" ) ? $_GET['origen'] : "";
    $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";
    $cveAdscripcion = $_SESSION['cveAdscripcion'];
    ?>
    <style type="text/css">
        

        .search-table-outter { overflow-x: scroll; }

        
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
        .imputadoDesc{
        	text-decoration: underline;
        }
        .needed:after {
            color:darkred;
    	content: " (*)";
        }
        .textCorrection{
    	display: block;
    	text-transform: lowercase;
        }
        .textCorrection:first-letter {
        	text-transform: uppercase;
        }
        .capital{
            text-transform: uppercase;
        }
        input, textarea{
    	resize: none;
        }
    </style>

    <input type="hidden" id="hiddenActuacion" value="<?php echo $idActuacion; ?>" >
    <input type="hidden" id="hiddenIdreferencia" value="<?php echo $idReferencia; ?>" >
    <input type="hidden" id="hiddenIdactuacionpadre" value="<?php echo $idAcutacionPadre; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpeta; ?>" >
    <input type="hidden" id="hiddenCvejuzgado" value="<?php echo $cvedeljuzgado; ?>" >
    <input type="hidden" id="origen" value="<?php echo $origen; ?>" />
    <input type="hidden" id="juzgadoOrigenArbol" value="<?php echo $juzgadoOrigenArbol; ?>" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                REGISTRO DE BENEFICIOS
            </h5>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-xs-12 consultaInformacon" style="border: solid 4px #881518;" data-step="1" data-intro="Este m&oacute;dulo le permite registrar un nuevo beneficio, el cual puede ser modificado y/o eliminado." data-position='left'>
            <br />
            <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">
            
                <div class='content col-xs-12'>
                    <div class="col-md-12" >
                  
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado:</label>
                            <div class="col-md-9">
                                <div id="divCmbRelaciones" class="logobox"></div>
                                <select class="form-control" name="cmbdistrito" id="cmbdistrito" onchange="cargaTipoCarpeta2();">
    <!--                                <option value="0">Seleccione un distrito</option>-->
                                </select>
                            </div>                                
                        </div>
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3 needed">Tipo de Carpeta:</label>
                            <div class="col-md-9">
                                <div id="divCmbRelaciones" class="logobox"></div>
                                <select class="form-control" name="cmbTipo" id="cmbTipo" onchange="buscarImputados();">
                                    <option value="0">Seleccione tipo de carpeta</option>
                                </select>
                            </div>                                
                        </div> 
    <!--                    <div class="form-group">                                                                
                            <label class="control-label col-xs-3 needed" id="lblRelationName">No.</label>
                            <div id="divSinRelacion" class="col-xs-9">
                                <input type="text" id="inNumero" class="form-inline" name="inNumero" maxlength="4" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="inAnio" id="inAnio" placeholder="A&ntilde;o" maxlength="4" >
                            </div>                                
                        </div>
                        -->
                        <div class="form-group">
                            <label class="control-label col-md-3 needed" id="label_actam_text1">No</label>
                            <div class="col-md-9">
                                <input type="text" id="inNumero" name="inNumero" maxlength="4" placeholder="N&uacute;mero" class="form-inline" />
                                /
                                <input type="text"  id="inAnio" name="inAnio"   maxlength="4" placeholder="A&ntilde;o" class="form-inline"/>
                                <span id="errnumca" class="err" style="display:none"><br>Este campo es obligatorio.</span>
                            </div>
                        </div>



                        <div class="form-group text-center buttons" >
                            <button data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un beneficio." data-position='top' class="btn btn-primary" id="btn_buscaCarpeta" onclick="buscaImputados2(0);">Buscar imputado(s)</button>&nbsp;&nbsp;<button data-step="4" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top' class="btn btn-primary" id="btn_limpiarbusqueda" onclick="limpiarbusqueda()">Limpiar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
    </div>
    <div id="divAlertSucces" class="alert alert-success alert-dismissable">
        <strong>Correcto!</strong> Mensaje
    </div>    
    <div id="divAlertDager" class="alert alert-danger alert-dismissable">
        <strong>Error!</strong> Mensaje
    </div>



    <div id="divTableResult" style="display: none"></div>








    <script type="text/javascript">
        
        var procedencia = <?php echo $procedencia; ?>;
        var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
        var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        
        var idsancionarbol="";
        var iddelimputadocarpeta="";
        var cveJuzgadoArbol = '<?php echo $juzgadoOrigenArbol; ?>';
        var origen = '<?php echo $origen; ?>';
        var idActuacion = '<?php echo $idActuacion; ?>';
        var cveAdscripcion = '<?php echo $cveAdscripcion; ?>';
        var ocultaBotones = false;
        var idReferencia = '<?php  echo $idReferencia; ?>';
        /*
         * Si se consulta un formulario de primera instancia desde una adscripcion de 
         * segunda instancia, se ocultan los botones del formulario, excepto 
         * el boton de visor de documentos
         */
        muestraOcultaBotones = function() {
            var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
            
            if ( instanciaSesion == 2 && origen == "" ) {
                ocultaBotones = true;
            }
        };
        /*
         * Funcion para consultar la instancia de la adscripcion donde el usuario
         * se encuentra logueado 
         * @param {type} cveAdscripcion
         * @returns {String}         */
        obtenerInstanciaSesion = function(cveAdscripcion){
            var strDatos = "accion=consultar&cveJuzgado=" + cveAdscripcion;
            var instancia = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    //json = datos;
                    console.log(json);
                    console.log('totalCount');
                    console.log(json.totalCount);
                    if (json.totalCount > 0) {
                    	instancia = json.data[0].cveInstancia;
                    } else {
                        alert("Error al obtener la instancia de la sesion");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso , 'error');
                }
            });
            return instancia;
        };
        
    $(function () {
            sancionesarbol();
            cargaJuzgados2();
            muestraOcultaBotones();
            arbol(procedencia);
        });
        $(function () {
            $("#inNumero").validaCampo('0123456789');
            $("#inAnio").validaCampo('0123456789');
        });
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);


        function sancionesarbol()
        {
      
            if(procedencia == 1||procedencia == 2){
            var iddelbeneficio=$("#hiddenActuacion").val();
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/beneficioses/BeneficiosesFacade.Class.php",            
                async: true,
                data: {
                    idBeneficioES: iddelbeneficio,
                    activo:"S",
                    accion: "consultar"
                },
                //dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (datos) {
                    var json;
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {                    
                        idsancionarbol=json.data[0].idImputadoSancion;
                        iddelimputadocarpeta=json.data[0].idImputadoCarpeta;
                        idActuacion= json.data[0].idActuacion;
                    }
                },
                error: function () {
                    //alert("No se Encontraron Tipos de Carpetas");
                    $("#divAlertDager").html("No se encontraron tipos de carpetas");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });

    }
        }
        
        function fecha(id)
        {
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            var checkin = $("#txtfechainicio" + id).datepicker({
                format: "dd/mm/yyyy",
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? '' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                } else if (checkout.date.valueOf() == now.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $("#txtfechatermina" + id)[0].focus();
            }).data('datepicker');
            var checkout = $("#txtfechatermina" + id).datepicker({
                format: "dd/mm/yyyy",
                onRender: function (date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                checkout.hide();
            }).data('datepicker');

        }

    //    distritoscombo = function () {
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
    //            data: {
    //                activo: "S",                
    //                accion: "distrito"
    //            },
    //            async: "true",
    //            dataType: "json",
    //            beforeSend: function (xhr) {
    //
    //            },
    //            success: function (res) {
    //                var opcion = "";
    //                $.each(res.data, function (index, element) {
    //                    if(juzgadoSesion==element.cveJuzgado)
    //                    {    
    //                        $("#cmbdistrito").append($('<option selected="selected"></option>').val(element.cveJuzgado).html(element.desJuzgado));
    //						
    //						//options += '<option value="' + v.idJuzgado + '" selected="selected">' + v.desJuz + '</option>';
    //                    }
    //                    else
    //                    {
    //                        $("#cmbdistrito").append($('<option></option>').val(element.cveJuzgado).html(element.desJuzgado));
    //                    }
    //                });
    //            },
    //            error: function () {
    //                $("#divAlertDager").html("No se Encontraron Juzgados");
    //                $("#divAlertDager").show("slide");
    //                setTimeAlert("divAlertDager");
    //            }
    //
    //        });
    //    }
    //    tipoBusqueda = function () {
    //
    //        var distrito = $("#cmbDistrito").val();
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
    //            data: {
    //                cveJuzgado: distrito,                
    //                accion: "consultaTiposCarpetasActivos",
    //            },
    //            async: "true",
    //            dataType: "json",
    //            beforeSend: function (xhr) {
    //
    //            },
    //            success: function (res) {
    //                var opcion = "";
    //                $.each(res.datos, function (index, element) {
    ////                    if(element.clave==7||element.clave==9)
    ////                    {
    ////                    }
    ////                    else
    ////                    {
    //                    $("#cmbTipo").append($('<option></option>').val(element.clave).html(element.Descripcion));
    ////                    }
    //                });
    //            },
    //            error: function () {
    //                $("#divAlertDager").html("No se Encontraron Tipos de Carpetas");
    //                $("#divAlertDager").show("slide");
    //                setTimeAlert("divAlertDager");
    //            }
    //
    //        });
    //    }

        function tipossanciones(id,idimputadosancion,val) {

            if(val==1)
            {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tipossanciones/TipossancionesFacade.Class.php",
                    data: {
                        accion: 'consultar',
                        Beneficio: 'S',
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {
                        var opcion = "";
                        $.each(res.data, function (index, element) {
                            $("#cmbTipoSancion" + id).append($('<option></option>').val(element.cveTipoSancion).html(element.desTipoSancion));
                        });
                    },
                    error: function () {
                        alert("No se Encontraron Tipos de Sanciones");
                    }

                });
            }
            
            if(val==2)
            {
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/tipossanciones/TipossancionesFacade.Class.php",
    //                data: {
    //                    accion: 'consultar',
    //                    Beneficio: 'S',
    //                },
    //                async: "true",
    //                dataType: "json",
    //                beforeSend: function (xhr) {
    //
    //                },
    //                success: function (res) {
    //                    var opcion = "";
    //                    $.each(res.data, function (index, element) {
    //                        $("#cmbTipoSancion" + id).append($('<option></option>').val(element.cveTipoSancion).html(element.desTipoSancion));
    //                    });
    //                },
    //                error: function () {
    //                    alert("No se Encontraron Tipos de Sanciones");
    //                }
    //
    //            });
    //            
                
    //            var select = document.getElementById("cmbTipoSancion"+ id);
    //            var length = select.options.length;
    //            for (i = 0; i < length; i++) {
    //              select.options[i] = null;
    //            }
                
    //            var combo = $find('cmbTipoSancion'+id);
    //            var comboItems = combo.get_items();
    //
    //            for (var i = 0; i < comboItems.get_count(); i++)
    //            {
    //                combo.trackChanges();
    //                var item = comboItems.getItem(i);
    //
    //                combo.get_items().remove(item);
    //                combo.commitChanges();
    //
    //            }
                
    //                $.ajax({
    //                    type: "POST",
    //                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
    //                    data: {                   
    //                        idimputadosancion: idimputadosancion,
    //                        accion: "consultaBeneficios",
    //                    },
    //                    async: "true",
    //                    dataType: "json",
    //                    beforeSend: function (xhr) {
    //
    //                    },
    //                    success: function (res) {
    //                        var opcion = "";
    //
    //                        if(res.estatus=="ok")
    //                        {
    //    //                    $.each(res.tiposdesanciones, function (index, element) {                        
    //    //                        $("#cmbTipoSancion" + id).append($('<option></option>').val(element.todosid).html(element.todosdesc));                    
    //    //                            
    //                            $.each(res.sanciones, function (index, element2) {
    //                                alert(element2.idTipoSancion);
    //                                $("#cmbTipoSancion" + id).append($('<option></option>').val(element.todosid).html(element.todosdesc));
    //                            });
    //    //                    });
    //                        }
    //                    },
    //                    error: function () {
    //                        $("#divAlertDager").html("No se Encontraron Tipos de Sanciones");
    //                        $("#divAlertDager").show("slide");                  
    //                        setTimeAlert("divAlertDager");
    //
    //                    }
    //                });
            }
        }

        function cargaTipoCarpeta2() {
            $('#cmbTipo').empty();
            var tipoJuzgado = $("#cmbdistrito").val().split("/");
    //        alert(tipoJuzgado[1]);
        
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
                    var entra=0;
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                         $("#cmbTipo").append($('<option></option>').val(0).html("SELECCIONE UNA OPCI&Oacute;N"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch(tipoJuzgado[1]){
                                case "1": // tipo de juzgado de control
                                    if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#cmbTipo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "2": // tipo de juzgado juicio
                                    if(json.data[i].cveTipoCarpeta == "3" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "3": // tipo de juzgado ejecucion
                                    if(json.data[i].cveTipoCarpeta == "5"){ // exhorto, amparo
                                        $("#cmbTipo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        entra=1;
                                    }
                                break;
                                case "4": // tipo de juzgado tribunal
                                    if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipo").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "5": // verificar queda pendiente*************************
    //                                if(json.data[i].cveTipoCarpeta == "4"){ // tipo carpeta causa de juicio
    //                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                }
                                break;
                            }    
                            
                        }
                        if(entra!=1)
                        {
                            $("#cmbTipo").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                        }
                        
                    }
                    //$('#divCmbRelaciones').hide();

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion:\n\n" + quepaso);
    //                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
    //                $("#divAlertDager").show("slide");
    //                setTimeAlert("divAlertDager");
                }
            });
        };
        
        function cargaJuzgados2() {

            var strDatos = "accion=distrito";
            var hiddencveAdcripcion = cveAdscripcion;
            var hiddencveJuzgadoOrigenArbol = cveJuzgadoArbol;
            console.log(hiddencveAdcripcion);
            console.log(hiddencveJuzgadoOrigenArbol);
            console.log("id actuacion");
            console.log(idActuacion);
            if ( idActuacion != "" && parseInt(idActuacion) > 0 ) {
                if ( hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol ) {
                    if ( origen == "" ) {
                        strDatos = "accion=getJuzgadoCarpeta&idCarpeta=" + idReferencia;
                    }
                } else {
                    if ( parseInt(hiddencveJuzgadoOrigenArbol) != 0 ) {
                        strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                    } else {
                        strDatos = "accion=getJuzgadoCarpeta&idCarpeta=" + idReferencia;
                    }
                }
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
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
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbdistrito").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            if(juzgadoSesion == json.data[i].cveJuzgado){
                                $("#cmbdistrito option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                            } else {
                                $("#cmbdistrito option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                            }   
                        }
                    }
                    cargaTipoCarpeta2();
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion:\n\n" + quepaso);
    //                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
    //                $("#divAlertDager").show("slide");
    //                setTimeAlert("divAlertDager");
                }
            });
        };

        
        function arbol(procedencia)
        {
            if(procedencia == 1||procedencia == 2){
                var idreferencia=$('#hiddenIdreferencia').val();
                var idtipocarpeta=$('#hiddenCveTipoCarpeta').val();
                var iddeljuzgado=$('#hiddenCvejuzgado').val();
                
                //valorJuzgado2(iddeljuzgado);
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: {
                        idCarpetaJudicial:idreferencia,
                        activo: 'S',
                        accion: 'consultar',

                    },
                    async: false,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {

                        $('#inNumero').val(json.data[0].numero);
                        $('#inAnio').val(json.data[0].anio);
                        
                        //$('#cmbdistrito').val(iddeljuzgado);
                        valorJuzgado2(json.data[0].cveJuzgado);
                    }
                    },
                        error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion:\n\n" + quepaso);
                    }
                });
            }
        }
        
        
        
        
        
        function valorJuzgado2(cveJuzgado){
            
            var strDatos = "";
            strDatos = "accion=consultar";
            strDatos += "&cveJuzgado=" + cveJuzgado;

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                       
    //                    alert (json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                        $("#cmbdistrito").val(json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                        //alert(json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                    } else {
                        
                        $("#divAlertDager").html("Error al obtener tipo de juzgado");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");
                    
                    cargaTipoCarpeta2();
                    $('#cmbTipo').val($('#hiddenCveTipoCarpeta').val());
                    buscaImputados2(0);
                    $('#cmbdistrito').prop("disabled", true);
                    $('#cmbTipo').prop("disabled", true);
                    $('#inNumero').prop("disabled", true);
                    $('#inAnio').prop("disabled", true);
                    $('#btn_buscaCarpeta').prop("disabled", true);
                    $('#btn_limpiarbusqueda').prop("disabled", true);

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        
        };
        
        
        

        function RemoveAllItems()
       {
           var combo = $find('cmbTipoSancion1');
           var comboItems = combo.get_items();
           for (var i = comboItems.get_count()-1; i>=0 ; i--)
             {
               combo.trackChanges();
               var item = comboItems.getItem(i);
               combo.get_items().remove(item);
               combo.commitChanges();
             }
        }
        
        function valida(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

        function guardar(id)
        {
            var tipoJuzgado1 = $("#cmbdistrito").val().split("/");
            
            var distrito = tipoJuzgado1[0];
            var txtvalorradio = $("#txtvalorradio" + id).val();
            var idImputadoSentencia = $("#txtidimputadosentencia" + id).val();
            var cveTipoSancion = $("#cmbTipoSancion" + id).val();
            var anioprision = "0";
            var mesprision = "0";
            var diasprision = "0";
            var cantidadReparacion = "0.0";
            var amonestacion = "";
            var especificacion = $("#especificacion" + id).val();
            var cantidadMulta = $("#cantidadMulta" + id).val();
            var fechainicio = $("#txtfechainicio" + id).val();
            var fechatermina = $("#txtfechatermina" + id).val();
            var activo = "S";
            var Agregar = true;
            var mensaje_error = "";

            var actuacion = $("#txtidactuacion" + id).val();
            var iddelimputadocarpeta = $("#txtidimputadocarpeta" + id).val();
            var CveTipoSancion = $("#txtidsancion" + id).val();

            if(cveTipoSancion=="5")
            {
                if (cantidadMulta.length <= 0) {
                    Agregar = false;

                    mensaje_error += " -Agregue un valor al campo cantidad de multa<br />";
                }
            }
            
            if (especificacion.length <= 0) {
                Agregar = false;

                mensaje_error += " -Agregue un valor al campo Especificaci&oacute;n<br />";
            }


            if (txtvalorradio.length <= 0) {
                Agregar = false;
                mensaje_error += " -Eliga una Sancion<br />";
            }


            if (fechainicio.length <= 0) {
                Agregar = false;
                mensaje_error += " -Eliga una fecha de Inicio<br />";
            }

            if (fechatermina.length <= 0) {
                Agregar = false;
                mensaje_error += " -Eliga una fecha final<br />";
            }

            if (cveTipoSancion == "0") {
                Agregar = false;
                mensaje_error += " -Seleccione un Beneficio<br />";
            }

            if (!Agregar) {

                $("#divAlertDager").html(mensaje_error);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }


            if (Agregar)
            {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                    data: {
                        idImputadoSentencia: idImputadoSentencia,
                        cveTipoSancion: cveTipoSancion,
                        anioPrision: anioprision,
                        mesPrision: mesprision,
                        diasPrision: diasprision,
                        cantidadMulta: cantidadMulta,
                        cantidadReparacion: cantidadReparacion,
                        amonestacion: amonestacion,
                        especificacion: especificacion,
                        fechaInicio: fechainicio,
                        fechaTermina: fechatermina,
                        activo: activo,
                        accion: "insertimputadosysanciones",
                        cveUsuarioSesion: cveUsuarioSesion,
                        cvePerfilSesion: cvePerfilSesion,
                        juzgadoSesion: distrito,
                        //valores qe se agregaran en la tabla de beneficios
                        idactuacion: actuacion,
                        iddelimputadocarpeta: iddelimputadocarpeta,
                        CveTipoSancion: CveTipoSancion,
                        iddelimputadosancion: txtvalorradio,
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (respuesta) {
                        //buscaImputados2(id);
                        pasardatos(id, txtvalorradio, 2);
                        if(procedencia==1 ||procedencia==2)
                        {
                            getTree();
                        }
                        $("#divHideForm").hide();
                        $("#divAlertSucces").html("Correcto!: " + "Se ha agregado correctamente");
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");


                    },
                    error: function () {
                        $("#divAlertDager").html("Ocurrio un error al agregar");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }

                });

            }
        }


        function modificar(id)
        {
            var tipoJuzgado1 = $("#cmbdistrito").val().split("/");

            var distrito = tipoJuzgado1[0];
            var txtvalorbeneficio=$("#txtidbeneficio" +id).val();
            var txtvalorradio = $("#txtvalorradio" + id).val();
            var idImputadoSentencia = $("#txtidimputadosentencia" + id).val();
            var cveTipoSancion = $("#cmbTipoSancion" + id).val();
            var anioprision = "0";
            var mesprision = "0";
            var diasprision = "0";
            var cantidadReparacion = "0.0";
            var amonestacion = "";
            var especificacion = $("#especificacion" + id).val();
            var cantidadMulta = $("#cantidadMulta" + id).val();
            var fechainicio = $("#txtfechainicio" + id).val();
            var fechatermina = $("#txtfechatermina" + id).val();

            var Modificar = true;
            var mensaje_error = "";

            var actuacion = $("#txtidactuacion" + id).val();
            var iddelimputadocarpeta = $("#txtidimputadocarpeta" + id).val();
            var CveTipoSancion = $("#txtidsancion" + id).val();

            if (especificacion.length <= 0) {
                Modificar = false;

                mensaje_error += " -Agregue un valor al campo Especificaci&oacute;n<br />";
            }


            if (txtvalorradio.length <= 0) {
                Modificar = false;
                mensaje_error += " -Eliga una Sancion<br />";
            }


            if (fechainicio.length <= 0) {
                Modificar = false;
                mensaje_error += " -Eliga una fecha de Inicio<br />";
            }

            if (fechatermina.length <= 0) {
                Modificar = false;
                mensaje_error += " -Eliga una fecha final<br />";
            }

            if (cveTipoSancion == "0") {
                Modificar = false;
                mensaje_error += " -Seleccione un Beneficio<br />";
            }

            if (!Modificar) {

                $("#divAlertDager").html(mensaje_error);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }


            if (Modificar)
            {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                    data: {
                        idImputadoSancion: txtvalorradio,
                        cveTipoSancion: cveTipoSancion,
                        anioPrision: anioprision,
                        mesPrision: mesprision,
                        diasPrision: diasprision,
                        cantidadMulta: cantidadMulta,
                        especificacion: especificacion,
                        fechaInicio: fechainicio,
                        fechaTermina: fechatermina,
                        accion: "modificaimputadosybeneficios",
                        cveUsuarioSesion: cveUsuarioSesion,
                        cvePerfilSesion: cvePerfilSesion,
                        juzgadoSesion: distrito,
                        //valores qe se agregaran en la tabla de beneficios
    //                                idactuacion:actuacion,
    //                                iddelimputadocarpeta:iddelimputadocarpeta,
    //                                CveTipoSancion:CveTipoSancion,
    //                                iddelimputadosancion:txtvalorradio,    

                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {
                        //buscaImputados2(id);
                        //alert(txtvalorbeneficio);
                        pasardatos(id, txtvalorbeneficio, 2);
                        $("#divHideForm").hide();
                        $("#divAlertSucces").html("Correcto!: " + "Se ha modificado correctamente");
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");
                        if(procedencia==1 ||procedencia==2)
                        {
                            getTree();
                        }
                        $("#btn_modificarbeneficio"+id).hide();
                        $("#btn_eliminarbeneficio"+id).hide();
                        $("#btn_agregarimputadosen"+id).show();
                    },
                    error: function () {
                        
                        $("#divAlertDager").html("Ocurrio un error al modificar");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }

                });

            }
        }


        function buscaImputados2(id) {
            var valor1="";
            var valor2="";
            var valor3="";
            var valor4="";
            var valor5="";
            var valor6="";
            var tipoJuzgado3 = $("#cmbdistrito").val().split("/");
            var distrito = tipoJuzgado3[0];
            var tipoBusqueda = $("#cmbTipo").val();
            var numeros = $("#inNumero").val();
            var anios = $("#inAnio").val();
            var juzgados = $("#inJuzgado").val();
            var div = "";
            var table = "";
            var Buscar = true;
            var mensaje_error = "";
            var tipocausa = document.getElementById("cmbTipo").value;
            var referencia =$("#hiddenIdreferencia").val();
           
            if (distrito == "0") {
                Buscar = false;
                mensaje_error += " -Seleccione un Juzgado<br />";
            }
            
            if (tipocausa == "0") {
                Buscar = false;
                mensaje_error += " -Seleccione un tipo de carpeta<br />";
            }

            if (numeros.length <= 0) {
                Buscar = false;
                mensaje_error += " -Agregue un valor al campo N&uacute;mero<br />";
            }
            if (anios.length <= 0) {
                Buscar = false;
                mensaje_error += " -Agregue un valor al campo A&ntilde;o<br />";
            }

            if (!Buscar) {

                $("#divAlertDager").html(mensaje_error);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }


            if (Buscar)
            {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: {
                        cveTipoCarpeta: tipoBusqueda,
                        numero: numeros,
                        anio: anios,
                        cveJuzgado: distrito,
                        accion: "consultaImputadosCarpetasActivos",
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {

                        var opcion = "";
                        
                        if (res.estatus == "ok") {
                            
                            $.each(res.datosImputado, function (index, element) {
                                tipossanciones(element.idimputadocarpeta,3,1);
                                
                                if(element.idimputadocarpeta==iddelimputadocarpeta && procedencia == 1)
                                {
                                    
                                    div += "<div class='panel panel-default' id='sancionesform" + element.idimputadocarpeta + "'>";
                                    div += "   <div class='panel-heading' role='tab' id='headingThree'>";
                                    div += "       <h4 class='panel-title'>";
                                    div += "           <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree" + element.idimputadocarpeta + "'aria-expanded='true' aria-controls='collapseThree'>";
                                    if (element.cveTipoPersona == 1) {

                                        if ((element.nombre == null || element.nombre == "") || (element.paterno == null || element.paterno == "") || (element.materno == null || element.materno == ""))
                                        {
                                            div += "Actualizame Actualizame Actualizame";
                                        }
                                        else
                                        {
                                            div += element.nombre + " " + element.paterno + " " + element.materno;
                                        }
                                    } else  {
                                        if ((element.nombre == null || element.nombre == ""))
                                        {
                                            div += "Actualizame";
                                        }
                                        else
                                        {
                                            div += element.nombre;
                                        }

                                    }
                                    div += "           </a>";

                                    div += "       </h4>";
                                    div += "   </div>";

                                }
                                if(procedencia==2 || procedencia == 0 || procedencia == "")
                                {
                                    //alert(element.idimputadocarpeta+"=="+iddelimputadocarpeta);
                                    div += "<div class='panel panel-default' id='sancionesform" + element.idimputadocarpeta + "'>";
                                    div += "   <div class='panel-heading' role='tab' id='headingThree'>";
                                    div += "       <h4 class='panel-title'>";
                                    div += "           <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree" + element.idimputadocarpeta + "'aria-expanded='true' aria-controls='collapseThree'>";
                                    if (element.cveTipoPersona == 1) {

                                        if ((element.nombre == null || element.nombre == "") || (element.paterno == null || element.paterno == "") || (element.materno == null || element.materno == ""))
                                        {
                                            div += "Actualizame Actualizame Actualizame";
                                        }
                                        else
                                        {
                                            div += element.nombre + " " + element.paterno + " " + element.materno;
                                        }
                                    } else  {
                                        if ((element.nombre == null || element.nombre == ""))
                                        {
                                            div += "Actualizame";
                                        }
                                        else
                                        {
                                            div += element.nombre;
                                        }

                                    }
                                    div += "           </a>";

                                    div += "       </h4>";
                                    div += "   </div>";

                                }
                                
                                if (element.idimputadocarpeta == id)
                                {
                                    div += "   <div id='collapseThree" + element.idimputadocarpeta + "' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingThree'>";

                                }
                                else {
                                    div += "   <div id='collapseThree" + element.idimputadocarpeta + "' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThree'>";

                                }


                                div += "       <div class='panel-body'>";

                                //HIDDENS				
                                //HIDDEN OBTIENE EL ID DEL IMPUTADO DE LA SANCION QUE SE SELECCIONO
                                div += "<input type='hidden' name='txtvalorradio" + element.idimputadocarpeta + "' id='txtvalorradio" + element.idimputadocarpeta + "'>"

                                //HIDDEN OBTIENE EL ID DEL IMPUTADO DE LA SENTENCIA
                                div += "<input type='hidden' name='txtidimputadosentencia" + element.idimputadocarpeta + "' id='txtidimputadosentencia" + element.idimputadocarpeta + "'>"
                                //HIDDEN OBTIENE IDIMPUTADOCARPETA
                                div += "<input type='hidden' name='txtidimputadocarpeta" + element.idimputadocarpeta + "' id='txtidimputadocarpeta" + element.idimputadocarpeta + "' value='" + element.idimputadocarpeta + "'>"
                                //HIDDEN OBTIENE IDACTUACION
                                div += "<input type='hidden' name='txtidactuacion" + element.idimputadocarpeta + "' id='txtidactuacion" + element.idimputadocarpeta + "' value='" + element.actuaciones + "'>"
                                //HIDDEN TIPO DE SANCION
                                div += "<input type='hidden' name='txtidsancion" + element.idimputadocarpeta + "' id='txtidsancion" + element.idimputadocarpeta + "'>"
                                //HIDDEN ID BENEFICIO
                                div += "<input type='hidden' name='txtidbeneficio" + element.idimputadocarpeta + "' id='txtidbeneficio" + element.idimputadocarpeta + "'>"

                                if (element.totalSancion != 0)
                                {


                                    //TIPO SANCION(COMBO)
                                    div += "<div class='col-sm-12'><br>";
                                    div += "     <div class='col-sm-3'></div>";
                                    div += "     <div class='col-sm-2 text-align-right'><b>Beneficio: <label style='color:darkred'>(*)</label><span class='requerido'></span></b></div>";
                                    div += "     <div class='col-sm-5' id='divtipsnc1'>";
                                    div += "         <select class='form-control Relacionado' name='cmbTipoSancion" + element.idimputadocarpeta + "' id='cmbTipoSancion" + element.idimputadocarpeta + "' onchange='cambio(this, " + element.idimputadocarpeta + ")'>";
                                    div += "             <option value='0'>SELECCIONE UNA OPCI&Oacute;N</option>";
                                    div += "         </select>";
                                    div += "     </div>";
                                    div += "</div>";
                                    //CANTIDAD DE MULTA
                                    div += "<div class='col-sm-12'  id='divrepara" + element.idimputadocarpeta + "' name='" + element.idimputadocarpeta + "' style='display:none'><br>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "<div class='col-sm-2 text-align-right'><b>Cantidad de Multa $: <label style='color:darkred'>(*)</label></b></div>";
                                    div += "<div class='col-sm-5'>";
                                    div += "<input type='text' class='input-sm'  maxlength='15'   id='cantidadMulta" + element.idimputadocarpeta + "' name='cantidadMulta" + element.idimputadocarpeta + "'>";
                                    div += "</div>";
                                    div += "<div class='col-sm-2'></div>";
                                    div += "</div>";

                                    //ESPECIFICACION
                                    div += "<div class='col-sm-12'><br>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "<div class='col-sm-2 text-align-right'><b>Especificaci&oacute;n: <label style='color:darkred'>(*)</label></b></div>";
                                    div += "<div class='col-sm-5'>";
                                    div += "<textarea id='especificacion" + element.idimputadocarpeta + "' maxlength='500' style='text-transform:uppercase; resize: none; width:100%'></textarea>";
                                    div += "</div>";
                                    div += "<div class='col-sm-2'></div>";
                                    div += "</div>";



                                    //FECHA DE INICIO
                                    div += "<div class='col-sm-12'><br>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "<div class='col-sm-2 text-align-right'><b>Fecha Inicio: <label style='color:darkred'>(*)</label></b></div>";
                                    div += "<div class='col-sm-2' ><input type='text' class='input-sm'  id='txtfechainicio" + element.idimputadocarpeta + "' name='txtfechainicio" + element.idimputadocarpeta + "'  value='<?= date('d/m/Y') ?>' readonly>";
                                    div += "</div>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "</div>";


                                    //FECHA TERMINA
                                    div += "<div class='col-sm-12'><br>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "<div class='col-sm-2 text-align-right'><b>Fecha Termina: <label style='color:darkred'>(*)</label></b></div>";
                                    div += "<div class='col-sm-2' ><input type='text' class='input-sm' id='txtfechatermina" + element.idimputadocarpeta + "' name='txtfechatermina" + element.idimputadocarpeta + "' value='<?= date('d/m/Y') ?>' readonly>";
                                    div += "</div>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "</div>";

                                    //BOTONES
                                    div += "<div class='col-sm-12'><br>";
                                    div += "<div class='col-sm-3'></div>";
                                    if ( ocultaBotones == true ) {
                                        div += "<div align='center' class='divBotones' style='display: none;'>";
                                    } else {
                                        div += "<div align='center' class='divBotones'>";
                                    }
                                    div += "<br/>";
                                    div += "<button class='btn btn-primary' id='btn_agregarimputadosen" + element.idimputadocarpeta + "' name='btn_agregarimputadosen" + element.idimputadocarpeta + "' onclick='guardar(" + element.idimputadocarpeta + ");'>Guardar</button>";
                                    div += "<button class='btn btn-primary' id='btn_modificarbeneficio" + element.idimputadocarpeta + "' name='btn_modificarbeneficio" + element.idimputadocarpeta + "' onclick='modificar(" + element.idimputadocarpeta + ");' style='display:none'>Modificar</button>&nbsp;&nbsp;";
                                    div += "<button class='btn btn-primary' id='btn_eliminarbeneficio" + element.idimputadocarpeta + "' name='btn_eliminarbeneficio" + element.idimputadocarpeta + "' onclick='eliminar(" + element.idimputadocarpeta + ");' style='display:none'>Eliminar</button>"; 
                                    div += "&nbsp;&nbsp;<button class='btn btn-primary' id='btn_limpiarbusqueda' onclick='limpiar(" + element.idimputadocarpeta + ");'>Limpiar</button>";
                                    div += "</div>";
                                    div += "</div>";
                                    div += "<div class='col-sm-3'></div>";
                                    div += "</div>";

                                    div +=        "<div class='panel panel-default'>";
                                    div +=            "<div class='panel-heading'>";
                                    div +=                "<h5 class='panel-title'>";                                                            
                                    div +=                    "SANCIONES";
                                    div +=                "</h5>";
                                    div +=            "</div>";
                                    div +=        "</div>";
                                    div +="<div class='search-table-outter'>";
                                    div += "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
                                    div += "<thead>";
                                    div += "  <tr>";
                                    div += "      <th>ELIGE UNA SANCI&Oacute;N</th>";
                                    div += "      <th>TIPO</th>";
                                    div += "      <th>DESCRIPCI&Oacute;N DE LA SANCI&Oacute;N</th>";
                                    div += "      <th>DURACI&Oacute;N</th>";
                                    //div += "      <th>ESPECIFICACI&Oacute;N</th>";
                                    div += "  </tr>";
                                    div += "</thead>";
                                    div += "</tbody>";

                                    $.each(element.sanciones, function (index, element2) {
                                        var val1 = 2;
                                        //if(element2.cvetiposancion<=12)
                                        //{
                                            
                                        
                                        
                                        if(procedencia == 1 || procedencia == 2)
                                        {
                                            
                                            if(element2.idSancion==idsancionarbol && procedencia == 1)
                                            {      
                                                
                                                if (element2.Beneficio == "S")
                                                {
                                                    val1 = 1;
                                                }


                                                div += "   <tr>";

                                                if (element2.Beneficio == "N")
                                                {
                                                    
                                                    if(element2.tipoDeSentencia>=12)
                                                    {
                                                        div += "      <th></th>";
                                                    }
                                                    else
                                                    {
                                                        div += "      <th><input type='radio' disabled='true' checked='checked' name='sanciones' id='sanciones' value='" + element2.idSancion + "' onClick='pasavalorderadio("+element2.idSancion+"," + element.idimputadocarpeta + "," + element2.idimputadosentencia + "," + element2.tipoDeSentencia + "," + val1 + ");pasavalorderadio2("+element2.idSancion+"," + element.idimputadocarpeta + "," + element2.idimputadosentencia + "," + element2.tipoDeSentencia + "," + val1 + ")'></radio></th>";
                                                    }
                                                    div += "      <th>SANCION</th>";
                                                    
                                                    if (element2.tipoDeSentencia == 2 || element2.tipoDeSentencia == 3)
                                                    {
                                                        div += "      <th>" + element2.descripcionMulta + "-CANTIDAD: " + element2.sancion + "</th>";
                                                        div += "      <th></th>";
                                                        //div += "      <th>" + element2.especificacion + "</th>";
                                                    }
                                                    else {
                                                        if (element2.tipoDeSentencia == 4)
                                                        {
                                                            var amonestacion = "";
                                                            amonestacion = element2.sancion;

                                                            if (amonestacion == "N") {
                                                                div += "      <th>" + element2.descripcionMulta + "-AMONESTADO: NO</th>";
                                                            }
                                                            else
                                                            {
                                                                div += "      <th>" + element2.descripcionMulta + "-AMONESTADO: SI</th>";
                                                            }


                                                            div += "      <th></th>";
                                                            //div += "      <th>" + element2.especificacion + "</th>";
                                                        } else {
                                                            if (element2.tipoDeSentencia == 5)
                                                            {
                                                                div += "      <th>" + element2.descripcionMulta + "-CANTIDAD: " + element2.sancion + "</th>";
                                                                div += "      <th>" + element2.fechamulta + "</th>";
                                                                //div += "      <th>" + element2.especificacion + "</th>";
                                                            }
                                                            else
                                                            {
                                                                div += "      <th>" + element2.descripcionMulta + "</th>";
                                                                div += "      <th>" + element2.sancion + "</th>";
                                                                //div += "      <th>" + element2.especificacion + "</th>";
                                                            }
                                                        }
                                                    }
                                                    //pasavalorderadio(element2.idSancion,element.idimputadocarpeta,element2.idimputadosentencia,element2.tipoDeSentencia,val1);
                                                    //alert(element2.idSancion+","+element.idimputadocarpeta+","+element2.idimputadosentencia+","+element2.tipoDeSentencia+","+val1);
                                                    valor1=element2.idSancion;
                                                    valor2=element.idimputadocarpeta;
                                                    valor3=element2.idimputadosentencia;
                                                    valor4=element2.tipoDeSentencia;
                                                    valor5=val1;
                                                    valor6=1;
                                                    
                                                }
                                            
                                            }
                                            
                                            if(procedencia == 2)
                                            {      
                                                
                                                
                                                if (element2.Beneficio == "S")
                                                {
                                                    val1 = 1;
                                                }


                                                div += "   <tr>";

                                                if (element2.Beneficio == "N")
                                                {
                                                    
                                                    if(element2.tipoDeSentencia>=12)
                                                    {
                                                        div += "      <th></th>";
                                                    }
                                                    else
                                                    {
                                                        div += "      <th><input type='radio' name='sanciones' id='sanciones' value='" + element2.idSancion + "' onClick='pasavalorderadio("+element2.idSancion+"," + element.idimputadocarpeta + "," + element2.idimputadosentencia + "," + element2.tipoDeSentencia + "," + val1 + ");pasavalorderadio2("+element2.idSancion+"," + element.idimputadocarpeta + "," + element2.idimputadosentencia + "," + element2.tipoDeSentencia + "," + val1 + ")'></radio></th>";
                                                    }
                                                    div += "      <th>SANCION</th>";
                                                    
                                                    if (element2.tipoDeSentencia == 2 || element2.tipoDeSentencia == 3)
                                                    {
                                                        div += "      <th>" + element2.descripcionMulta + "-CANTIDAD: " + element2.sancion + "</th>";
                                                        div += "      <th></th>";
                                                        //div += "      <th>" + element2.especificacion + "</th>";
                                                    }
                                                    else {
                                                        if (element2.tipoDeSentencia == 4)
                                                        {
                                                            var amonestacion = "";
                                                            amonestacion = element2.sancion;

                                                            if (amonestacion == "N") {
                                                                div += "      <th>" + element2.descripcionMulta + "-AMONESTADO: NO</th>";
                                                            }
                                                            else
                                                            {
                                                                div += "      <th>" + element2.descripcionMulta + "-AMONESTADO: SI</th>";
                                                            }


                                                            div += "      <th></th>";
                                                            //div += "      <th>" + element2.especificacion + "</th>";
                                                        } else {
                                                            if (element2.tipoDeSentencia == 5)
                                                            {
                                                                div += "      <th>" + element2.descripcionMulta + "-CANTIDAD: " + element2.sancion + "</th>";
                                                                div += "      <th>" + element2.fechamulta + "</th>";
                                                                //div += "      <th>" + element2.especificacion + "</th>";
                                                            }
                                                            else
                                                            {
                                                                div += "      <th>" + element2.descripcionMulta + "</th>";
                                                                div += "      <th>" + element2.sancion + "</th>";
                                                                //div += "      <th>" + element2.especificacion + "</th>";
                                                            }
                                                        }
                                                    }
                                                    //pasavalorderadio(element2.idSancion,element.idimputadocarpeta,element2.idimputadosentencia,element2.tipoDeSentencia,val1);
                                                    //alert(element2.idSancion+","+element.idimputadocarpeta+","+element2.idimputadosentencia+","+element2.tipoDeSentencia+","+val1);
                                                    valor1=element2.idSancion;
                                                    valor2=element.idimputadocarpeta;
                                                    valor3=element2.idimputadosentencia;
                                                    valor4=element2.tipoDeSentencia;
                                                    valor5=val1;
                                                    valor6=1;
                                                    
                                                }
                                            
                                            }
                                            
                                        }
                                        else
                                        {
                                            
                                            if (element2.Beneficio == "S")
                                            {
                                                val1 = 1;
                                            }


                                            div += "   <tr>";

                                            if (element2.Beneficio == "N")
                                            {
                                                if(element2.tipoDeSentencia>=12)
                                                {
                                                    div += "      <th></th>";
                                                }
                                                else
                                                {
                                                    div += "      <th><input type='radio' name='sanciones' id='sanciones' value='" + element2.idSancion + "' onClick='pasavalorderadio("+element2.idSancion+"," + element.idimputadocarpeta + "," + element2.idimputadosentencia + "," + element2.tipoDeSentencia + "," + val1 + ");pasavalorderadio2("+element2.idSancion+"," + element.idimputadocarpeta + "," + element2.idimputadosentencia + "," + element2.tipoDeSentencia + "," + val1 + ")'></radio></th>";                                           
                                                }
                                                
                                                div += "      <th>SANCION</th>";
                                                if (element2.tipoDeSentencia == 2 || element2.tipoDeSentencia == 3)
                                                {
                                                    div += "      <th>" + element2.descripcionMulta + "-CANTIDAD: " + element2.sancion + "</th>";
                                                    div += "      <th></th>";
                                                    //div += "      <th>" + element2.especificacion + "</th>";
                                                }
                                                else {
                                                    if (element2.tipoDeSentencia == 4)
                                                    {
                                                        var amonestacion = "";
                                                        amonestacion = element2.sancion;

                                                        if (amonestacion == "N") {
                                                            div += "      <th>" + element2.descripcionMulta + "-AMONESTADO: NO</th>";
                                                        }
                                                        else
                                                        {
                                                            div += "      <th>" + element2.descripcionMulta + "-AMONESTADO: SI</th>";
                                                        }


                                                        div += "      <th></th>";
                                                        //div += "      <th>" + element2.especificacion + "</th>";
                                                    } else {
                                                        if (element2.tipoDeSentencia == 5)
                                                        {
                                                            div += "      <th>" + element2.descripcionMulta + "-CANTIDAD: " + element2.sancion + "</th>";
                                                            div += "      <th>" + element2.fechamulta + "</th>";
                                                            //div += "      <th>" + element2.especificacion + "</th>";
                                                        }
                                                        else
                                                        {
                                                            div += "      <th>" + element2.descripcionMulta + "</th>";
                                                            div += "      <th>" + element2.sancion + "</th>";
                                                            //div += "      <th>" + element2.especificacion + "</th>";
                                                        }
                                                    }
                                                }

                                            }
                                            else
                                            {


                                            }
                                        }
                                        //}
                                        div += "";

                                        
                                        
                                    });
                                    div += "</tbody>";
                                    div += "</table>";
                                    div +="</div>";
                                    div +="<br>";
                                    div +="<br>";
                                    div += "<div id='divTableResult2" + element.idimputadocarpeta + "' style='display: none'></div>";
                                    //muestraOcultaBotones();
                                }
                                else
                                {
                                    div += "<label>El imputado no tiene sanciones</label>";
                                }
                                div += "<br/>";
                                div += "<br/>";
                                div += "<br/>";
                                div += "           <div class='form-group' style='text-align:center'>";
                                div += "               <div id='divAlertSuccesDelito' class='alert alert-success alert-dismissable'></div>";
                                div += "               <div id='divAlertDagerDelito' class='alert alert-danger alert-dismissable'></div>";
                                div += "           </div>";
                                div += "       </div>";
                                div += "   </div>";
                                div += "</div>";
                                

                            });
                        } else {
                            if (res.estatus == "error")
                            {
                            $("#divAlertDager").html("No se encontraron imputados");
                            $("#divAlertDager").show("slide");
                            $("#divTableResult").hide();
                            setTimeAlert("divAlertDager");
                            }

                        }
                        $("#divTableResult").html(div);
                        $("#divTableResult").show();
                        
                        if (res.estatus == "ok") {
                            if(valor6==1&&procedencia==1)
                            {
                                pasavalorderadio(valor1,valor2,valor3,valor4,valor5);
                                pasavalorderadio2(valor1,valor2,valor3,valor4,valor5);
                            }
                            
                        
                            $.each(res.datosImputado, function (index, element4) {

                                    $(document).ready(function () {
                                    $("#cantidadMulta"+ element4.idimputadocarpeta).validaCampo('0123456789.');

                                    var nowTemp = new Date();
                                    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                                    var checkin = $("#txtfechainicio" + element4.idimputadocarpeta).datepicker({
                                        format: "dd/mm/yyyy",
                                        onRender: function (date) {
                                            return date.valueOf() < now.valueOf() ? '' : '';
                                        }
                                    }).on('changeDate', function (ev) {
                                        if (ev.date.valueOf() > checkout.date.valueOf()) {
                                            var newDate = new Date(ev.date)
                                            newDate.setDate(newDate.getDate() + 1);
                                            checkout.setValue(newDate);
                                        } else if (checkout.date.valueOf() == now.valueOf()) {
                                            var newDate = new Date(ev.date)
                                            newDate.setDate(newDate.getDate() + 1);
                                            checkout.setValue(newDate);
                                        }
                                        checkin.hide();
                                        $("#txtfechatermina" + element4.idimputadocarpeta)[0].focus();
                                    }).data('datepicker');
                                    var checkout = $("#txtfechatermina" + element4.idimputadocarpeta).datepicker({
                                        format: "dd/mm/yyyy",
                                        onRender: function (date) {
                                            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                                        }
                                    }).on('changeDate', function (ev) {
                                        checkout.hide();
                                    }).data('datepicker');

                                    
                                });
                            });
                            
                        }
                        
                        

                    },
                    error: function () {
                        $("#divAlertDager").html("No se encontraron imputados");
                        $("#divAlertDager").show("slide");
                        $("#divTableResult").hide();
                        setTimeAlert("divAlertDager");

                    }

                });
            }
        }



        function soloNumeros(e, id)
        {
            // capturamos la tecla pulsada
            var teclaPulsada = window.event ? window.event.keyCode : e.which;

            // capturamos el contenido del input
            var valor = document.getElementById("cantidadMulta" + id).value;

            // 45 = tecla simbolo menos (-)
            // Si el usuario pulsa la tecla menos, y no se ha pulsado anteriormente
            // Modificamos el contenido del mismo a�adiendo el simbolo menos al
            // inicio
            if (teclaPulsada == 45 && valor.indexOf("-") == -1)
            {
                document.getElementById("cantidadMulta" + id).value = "-" + valor;
            }

            // 13 = tecla enter
            // 46 = tecla punto (.)
            // Si el usuario pulsa la tecla enter o el punto y no hay ningun otro
            // punto
            if (teclaPulsada == 13 || (teclaPulsada == 46 && valor.indexOf(".") == -1))
            {
                return true;
            }

            // devolvemos true o false dependiendo de si es numerico o no
            return /\d/.test(String.fromCharCode(teclaPulsada));
        }

        function pasardatos(id, idimputadosancion, val1)
        {
            var valor1="";
            var valor2="";
            var valor3="";
            var valor4="";
            var valor5="";
            //alert(id+"--"+idimputadosancion+"--"+val1+"--"+idimputadosentencia+"--"+idsancion);
            if(val1==2)
            {
                var beneficio = $("#hiddenActuacion").val();
                document.getElementById("cmbTipoSancion"+id).disabled = false;
                //tipossanciones(id,idimputadosancion,2);
                
                //alert(id+"--"+idimputadosancion+"--"+val1+"--"+idimputadosentencia+"--"+idsancion);
                //SE HACE UNA CONSULTA PARA PASAR LOS VALORES A LAS CAJAS DE TEXTO 
                //var tipoBusqueda = $("#cmbTipo").val();
                //var numeros = $("#inNumero").val();
                //var anios = $("#inAnio").val();
                //var juzgados = $("#inJuzgado").val();
                var div = "";
                var table = "";
                
                //var Buscar = true;
                var mensaje_error = "";
                //var tipocausa = document.getElementById("cmbTipo").value;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: {                   
                        idimputadosancion: idimputadosancion,
                        accion: "consultaBeneficios",
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {

                        var opcion = "";
                        
                        if (res.estatus == "ok") {
                            div +="<div id='ocultabeneficios'"+id+">";
                            div +=        "<div class='panel panel-default'>";
                            div +=            "<div class='panel-heading'>";
                            div +=                "<h5 class='panel-title'>";                                                            
                            div +=                    "BENEFICIOS";
                            div +=                "</h5>";
                            div +=            "</div>";
                            div +=        "</div>";
                            div +="<div class='search-table-outter'>";
                            div += "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
                            div += "<thead>";
                            div += "  <tr>";
                            div += "      <th>ELIGE UN BENEFICIO</th>";
                            div += "      <th>TIPO</th>";
                            div += "      <th>DESCRIPCI&Oacute;N DE LA SANCI&Oacute;N</th>";
                            div += "      <th>DURACI&Oacute;N</th>";
                            div += "      <th>ESPECIFICACI&Oacute;N</th>";
                            div += "  </tr>";
                            div += "</thead>";
                            div += "</tbody>";
                            $.each(res.sanciones, function (index, element) {
    //                            if (element.totalSancion != 0)
    //                            {
                                if(procedencia == 1 || procedencia == 2)
                                {
                                    valor5=1;
                                    if(beneficio==element.idbeneficioes)
                                    {
                                        tipossanciones(element.idimputadocarpeta);
                                        valor1=element.idSancion;
                                        valor2=element.idimputadocarpeta;
                                        valor3=element.idimputadosentencia;
                                        valor4=element.tipoDeSentencia;
                                        div += "   <tr>";
                                        div += "      <th><input type='radio' checked='checked' name='beneficios' id='beneficios' value='" + element.idSancion + "' onClick='pasavalorderadio("+element.idSancion+"," + element.idimputadocarpeta + "," + element.idimputadosentencia + "," + element.tipoDeSentencia + "," + 1 + ")'></radio></th>";
                                        div += "      <th>BENEFICIO</th>";    
                                        if(element.descripcionMulta=="MULTA")
                                        {
                                            div += "  <th>"+element.descripcionMulta+"-CANTIDAD: "+element.sancion+"</th>";
                                            div += "  <th>" + element.fechamulta + "</th>";
                                        }
                                        else
                                        {
                                            div += "  <th>"+element.descripcionMulta+"</th>";
                                            div += "  <th>" + element.sancion + "</th>";
                                        }


                                        div += "      <th>" + element.especificacion + "</th>";
                                    }
                                    
                                    if(procedencia==2)
                                    {
                                        tipossanciones(element.idimputadocarpeta);
                                        valor1=element.idSancion;
                                        valor2=element.idimputadocarpeta;
                                        valor3=element.idimputadosentencia;
                                        valor4=element.tipoDeSentencia;
                                        div += "   <tr>";
                                        div += "      <th><input type='radio'  name='beneficios' id='beneficios' value='" + element.idSancion + "' onClick='pasavalorderadio("+element.idSancion+"," + element.idimputadocarpeta + "," + element.idimputadosentencia + "," + element.tipoDeSentencia + "," + 1 + ")'></radio></th>";
                                        div += "      <th>BENEFICIO</th>";    
                                        if(element.descripcionMulta=="MULTA")
                                        {
                                            div += "  <th>"+element.descripcionMulta+"-CANTIDAD: "+element.sancion+"</th>";
                                            div += "  <th>" + element.fechamulta + "</th>";
                                        }
                                        else
                                        {
                                            div += "  <th>"+element.descripcionMulta+"</th>";
                                            div += "  <th>" + element.sancion + "</th>";
                                        }


                                        div += "      <th>" + element.especificacion + "</th>";
                                    }
                                    
                                }
                                else
                                {
                                    tipossanciones(element.idimputadocarpeta);
                                    div += "   <tr>";
                                    div += "      <th><input type='radio' name='beneficios' id='beneficios' value='" + element.idSancion + "' onClick='pasavalorderadio("+element.idSancion+"," + element.idimputadocarpeta + "," + element.idimputadosentencia + "," + element.tipoDeSentencia + "," + 1 + ")'></radio></th>";
                                    div += "      <th>BENEFICIO</th>";    
                                    if(element.descripcionMulta=="MULTA")
                                    {
                                        div += "  <th>"+element.descripcionMulta+"-CANTIDAD: "+element.sancion+"</th>";
                                        div += "  <th>" + element.fechamulta + "</th>";
                                    }
                                    else
                                    {
                                        div += "  <th>"+element.descripcionMulta+"</th>";
                                        div += "  <th>" + element.sancion + "</th>";
                                    }


                                    div += "      <th>" + element.especificacion + "</th>";
                                }
                                                            
                            });
                            div += "</tbody>";
                            div += "</table>";
                            div +="</div>";
                            div +="</div>";
                        } else {
                            if (res.estatus == "error")
                            {
                            //$("#divAlertDager").html("No se encontraron beneficios");
                            //$("#divAlertDager").show("slide");
                            div +="<div id='ocultabeneficios'"+id+">";
                            div +=        "<div class='panel panel-default'>";
                            div +=            "<div class='panel-heading'>";
                            div +=                "<h5 class='panel-title'>";                                                            
                            div +=                    "BENEFICIOS";
                            div +=                "</h5>";
                            div +=            "</div>";
                            div +=        "</div>";
                            div +="<label style='text-align:center'><b>No se han agregado beneficios</b></label>";
                            div +="</div>";
                            $("#divTableResult2"+id).html(div);
                            $("#divTableResult2"+id).show();
                            //setTimeAlert("divAlertDager");
                            }

                        }
                        $("#divTableResult2"+id).html(div);
                        $("#divTableResult2"+id).show();
                        if (res.estatus == "ok") {
                            if(valor5==1&&procedencia==1)
                            {
                                pasavalorderadio(valor1,valor2,valor3,valor4,1);
                            }
                            
                        }
                    },
                    error: function () {
                        $("#divAlertDager").html("No se encontraron datos");
                        $("#divAlertDager").show("slide");
                        $("#divTableResult2"+id).hide();
                        setTimeAlert("divAlertDager");

                    }

                });
                //FIN DE CONSULTA 
            }
            
            if (val1 == 1)
            {
                //SE HACE UNA CONSULTA PARA PASAR LOS VALORES A LAS CAJAS DE TEXTO 
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                    data: {
                        idImputadoSancion: idimputadosancion,
                        accion: "consultarimptadossanciones",
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {
                        $.each(res.datosImputadosanciones, function (index, element) {
                            $("#especificacion" + id).val(element.especificacion);
                            $("#cmbTipoSancion" + id).val(element.cveTipoSancion);
                            $("#txtfechainicio" + id).val(formatfecha(element.fechaInicio));
                            $("#txtfechatermina" + id).val(formatfecha(element.fechaTermina));
                            var str1 = "#divrepara";
                            var str2 = id;
                            var res = str1.concat(str2);
                            if ($("#cmbTipoSancion" + id).val() == 5)
                            {
                                $("#cantidadMulta" + id).val(element.cantidadMulta);
                                $(res).show();
                            }
                            else
                            {
                                $("#cantidadMulta" + id).val("");
                                $(res).hide();
                            }
                        });
                        document.getElementById("cmbTipoSancion"+id).disabled = true;
                    },
                    error: function () {
                        //alert("Error al Consultar");
                        $("#divAlertDager").html("Error al Consltar");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

                //FIN DE CONSULTA 
            }
            else
            {
                $("#especificacion" + id).val("");
                $("#cmbTipoSancion" + id).val(0);
                $("#txtfechainicio" + id).val("<?= date('d/m/Y') ?>");
                $("#txtfechatermina" + id).val("<?= date('d/m/Y') ?>");
                $("#cantidadMulta" + id).val("");
                var str1 = "#divrepara";
                var str2 = id;
                var res = str1.concat(str2);
                $(res).hide();
            }

        }

        function limpiarbusqueda()
        {

            $("#inNumero").val("");
            $("#inAnio").val("");
            $("#cmbTipo").val(0);
            $('#cmbdistrito').empty();
            cargaJuzgados2();
            $("#divTableResult").hide();
        }
        
        function redondeoDecimales(numero,decimales)
    {
    	var original=parseFloat(numero);
    	return numero.toFixed(decimales);
    }

        function limpiar(id)
        {
            
            if(procedencia==1)
            {
                $("#especificacion" + id).val("");
                $("#txtfechainicio" + id).val("<?= date('d/m/Y') ?>");
                $("#txtfechatermina" + id).val("<?= date('d/m/Y') ?>");
                $("#cantidadMulta" + id).val("");
            }
            else
            {
                document.getElementById("cmbTipoSancion"+id).disabled = false;
                $("#ocultabeneficios").hide();
                $("#especificacion" + id).val("");
                $("#cmbTipoSancion" + id).val(0);

                $("#txtfechainicio" + id).val("<?= date('d/m/Y') ?>");
                $("#txtfechatermina" + id).val("<?= date('d/m/Y') ?>");
                $("#cantidadMulta" + id).val("");
                var str1 = "#divrepara";
                var str2 = id;
                var res = str1.concat(str2);
                $(res).hide();

                //limpiar los hidden
                $("#txtvalorradio" + id).val("");
                $("#txtidbeneficio" + id).val("");

                $("#txtidimputadosentencia" + id).val("");

                $("#txtidsancion" + id).val("");

                //limpiar radiobtton
                var ele = document.getElementsByName("sanciones");
                for (var i = 0; i < ele.length; i++)
                    ele[i].checked = false;

                //inactivar botones
                var str7 = "#btn_eliminarbeneficio";
                var str8 = id;
                var res4 = str7.concat(str8);

                var str9 = "#btn_modificarbeneficio";
                var str10 = id;
                var res5 = str9.concat(str10);

                var str11 = "#btn_agregarimputadosen";
                var str12 = id;
                var res6 = str11.concat(str12);

                $(res4).hide();
                $(res5).hide();
                $(res6).show();
            }
            
        }

        function eliminar(id)
        {
            var txtvalorradio = $("#txtvalorradio" + id).val();
            var txtvalorbeneficio=$("#txtidbeneficio"+id).val();
             bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar el registro seleccionado??",
                    
                    buttons: {
                      danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function() {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                            data: {
                                idImputadoSancion: txtvalorradio,
                                accion: "eliminaimputadoybeneficio",
                            },
                            async: "true",
                            dataType: "json",
                            beforeSend: function (xhr) {

                            },
                            success: function (res) {
                                //buscaImputados2(id);
                                pasardatos(id, txtvalorbeneficio, 2);
                                $("#divHideForm").hide();
                                $("#divAlertSucces").html("Correcto!: " + "Se ha eliminado correctamente");
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                                if(procedencia==1 ||procedencia==2)
                                {
                                    getTree();
                                }
                                $("#btn_modificarbeneficio"+id).hide();
                                $("#btn_eliminarbeneficio"+id).hide();
                                $("#btn_agregarimputadosen"+id).show();
                            },
                            error: function () {
                                //alert("Error al Consultar");
                                $("#divAlertDager").html("Ocurrio un error al eliminar");
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }

                        });
            
                        }
                    },
                    success: {
                        label: "Cancelar!",
                        className: "btn-primary",
                        callback: function() {
                          
                        }
                      }
                      
                }
            });
            
        }


        function NumCheck(e, field) {
            key = e.keyCode ? e.keyCode : e.which
            // backspace
            if (key == 8)
                return true
            // 0-9
            if (key > 47 && key < 58) {
                if (field.value == "")
                    return true
                regexp = /.[0-9]{2}$/
                return !(regexp.test(field.value))
            }
            // .
            if (key == 46) {
                if (field.value == "")
                    return false
                regexp = /^[0-9]+$/
                return regexp.test(field.value)
            }
            // other key
            return false

        }


        function formatfecha(fecha)
        {


            var elem = fecha.split(' ');
            var f = elem[0];
            var elem2 = f.split('-');
            var anio = elem2[0];
            var mes = elem2[1];
            var dia = elem2[2];

            var res = dia + "/" + mes + "/" + anio;
            return res;
        }

        function cambio(sel, id)
        {
            
            var idtiposancion = sel.value;
            var str1 = "#divrepara";
            var str2 = id;
            var res = str1.concat(str2);

            if (idtiposancion == "5")
            {

                $(res).show();
            }
            else
            {
                $(res).hide();
            }
            
                    
            var idimputadosancion = $("#txtvalorradio" + id).val();
            if(idimputadosancion!="" && idtiposancion!="")
            {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        data: {                   
                            idimputadosancion: idimputadosancion,
                            accion: "consultaBeneficios",
                        },
                        async: "true",
                        dataType: "json",
                        beforeSend: function (xhr) {

                        },
                        success: function (res) {
                            var opcion = "";

                            if(res.estatus=="ok")
                            {
                                $.each(res.sanciones, function (index, element2) {
                                    
                                    if(idtiposancion==element2.idTipoSancion)
                                    {
                                        $("#cmbTipoSancion" + id).val(0);
                                        $("#divrepara" + id).hide()
                                    }
                                });
                            }
                        },
                        error: function () {
                            $("#divAlertDager").html("No se Encontraron Tipos de Sanciones");
                            $("#divAlertDager").show("slide");                  
                            setTimeAlert("divAlertDager");

                        }
                    });
            }
                    
            
        }

        function validamoneda(valor) {

            if (!/^(\d{1,3})*\d{1,3}(\.\d+)?$/.test(valor)) {
                return false;
            }
            else {
                return true;
            }

        }
        
        function pasavalorderadio2(sel, id, idimputadosentencia, idsancion, val1)
        {
            var str13 = "txtidbeneficio";
            var str14 = id;
            var res7 = str13.concat(str14);
            document.getElementById(res7).value = sel;
        }
        
        function pasavalorderadio(sel, id, idimputadosentencia, idsancion, val1)
        {
            
            //var idtiposancion = sel.value;

            
            var str1 = "txtvalorradio";
            var str2 = id;
            var res = str1.concat(str2);


            var str3 = "txtidimputadosentencia";
            var str4 = id;
            var res2 = str3.concat(str4);

            var str5 = "txtidsancion";
            var str6 = id;
            var res3 = str5.concat(str6);

            var str7 = "#btn_eliminarbeneficio";
            var str8 = id;
            var res4 = str7.concat(str8);

            var str9 = "#btn_modificarbeneficio";
            var str10 = id;
            var res5 = str9.concat(str10);

            var str11 = "#btn_agregarimputadosen";
            var str12 = id;
            var res6 = str11.concat(str12);
            

            var iddelimputadosentencia=$("#txtidimputadosentencia"+id).val();
            
            //Se pasa el valor del radio button seleccionado al acaja de texto "txtvalorradio"+id
            
            document.getElementById(res).value = sel;
            pasardatos(id, sel, val1);
            document.getElementById(res2).value = idimputadosentencia;
            document.getElementById(res3).value = idsancion;
            

            if (val1 == 1)
            {
                $(res4).show();
                $(res5).show();
                $(res6).hide();
            }
            else
            {
                $(res4).hide();
                $(res5).hide();
                $(res6).show();
            }
            
            
            
            $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                    data: {
                        idImputadoSentencia:idimputadosentencia,
                        activo: 'S',
                        accion: 'consultar',

                    },
                    async: false,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {

                        $('#txtidactuacion'+id).val(json.data[0].idActuacion);
                        
                    }
                    },
                        error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion:\n\n" + quepaso);
                    }
                });
            
        }


        buscaBeneficios = function (numeroSancion) {
            var tipoJuzgado4 = $("#cmbdistrito").val().split("/");

            
            var distrito = tipoJuzgado4[0];
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/beneficioses/BeneficiosesFacade.Class.php",
                data: {
                    cveJuzgado: distrito,
                    accion: "consultaTiposBeneficiosActivos",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.datos, function (index, element) {
                        $("#cmbBeneficio" + numeroSancion).append($('<option></option>').val(element.cveBeneficio).html(element.desBeneficio));
                    });
                },
                error: function () {
                    //alert("No se Encontraron Tipos de Carpetas");
                    $("#divAlertDager").html("No se encontraron tipos de carpetas");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }


        formBeneficio = function (formBeneficio, inputSentencia, idSan, actuacion) {
            var formAgrega = "";
            var id = "cmbBeneficio" + formBeneficio;


            var idBen = $("#" + id).val();
            //var desBen= $("#"+id+"option:selected").html();

            if (idBen == "1") {
                formAgrega += "POR LA CANTIDAD DE $ <input type='text' id='cantidadBeneficio" + formBeneficio + "'> <input type='button' value='AGREGA' onclick='insertaBeneficios(" + inputSentencia + "," + idBen + "," + idSan + "," + actuacion + "," + formBeneficio + ");'/>";
            } else if (idBen == "2" || idBen == "3" || idBen == "4" || idBen == "5") {
                formAgrega = " FECHA INICIAL <input type='text' id='fechaInicio" + formBeneficio + "' placeholder='FECHA INICIAL'> Y FECHA FINAL <input type='text' placeholder='FECHA FINAL' id='fechaFin" + formBeneficio + "'> Y CON LAS SIGUINETES OBSERVACIONES <input type='text' placeholder='OBSERVACION' id='observacion" + formBeneficio + "'> <input type='button' value='AGREGA' onclick='insertaBeneficios(" + inputSentencia + "," + idBen + "," + idSan + "," + actuacion + "," + formBeneficio + ");'/>";
            } else if (idBen == "6") {
                formAgrega = "POR LA CANTIDAD DE $ <input type='text' id='cantidadBeneficio" + formBeneficio + "'> <input type='button' value='AGREGA' onclick='insertaBeneficios(" + inputSentencia + "," + idBen + "," + idSan + "," + actuacion + "," + formBeneficio + ");'/>";
            }

            $("#formularioAgrega" + formBeneficio).html(formAgrega);
        }


        insertaBeneficios = function (inputSentencia, idBen, idSan, actuacion, formBeneficio) {
            var idImputado = "";
            var idImpuSen = "";
            var cveTipoSen = "";
            var multa = "";
            var restitucion = "";
            var observacion = "";
            var fInicio = "";
            var fFin = "";


            var actuacion = actuacion;
            if (idBen == "1") {
                var cantidad = $("#cantidadBeneficio" + formBeneficio).val();

                idImputado = inputSentencia;
                idImpuSen = idSan;
                cveTipoSen = idBen;
                multa = cantidad;
                restitucion = "";
                observacion = "";
                fInicio = "";
                fFin = "";
                actuacion = actuacion;
            } else if (idBen == "2" || idBen == "3" || idBen == "4" || idBen == "5" || idBen == "6") {
                var fi = $("#fechaInicio" + formBeneficio).val();
                var ff = $("#fechaFin" + formBeneficio).val();
                var obs = $("#observacion" + formBeneficio).val();

                idImputado = inputSentencia;
                idImpuSen = idSan;
                cveTipoSen = idBen;
                multa = "";
                restitucion = "";
                observacion = obs;
                fInicio = fi;
                fFin = ff;
                actuacion = actuacion;
            } else if (idBen == "6") {
                var cantidad = $("#cantidadBeneficio" + formBeneficio).val();

                idImputado = inputSentencia;
                idImpuSen = idSan;
                cveTipoSen = idBen;
                multa = "";
                restitucion = cantidad;
                observacion = "";
                fInicio = "";
                fFin = "";
                actuacion = actuacion;
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/beneficioses/BeneficiosesFacade.Class.php",
                data: {
                    idImpuSan: idImputado,
                    idImpuSen: idImpuSen,
                    cveTipoSen: cveTipoSen,
                    multa: multa,
                    restitucion: restitucion,
                    observacion: observacion,
                    fInicio: fInicio,
                    fFin: fFin,
                    actuacion: actuacion,
                    accion: "insertaSancionesYBeneficios",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.datos, function (index, element) {
                        $("#cmbBeneficio" + numeroSancion).append($('<option></option>').val(element.cveBeneficio).html(element.desBeneficio));
                    });
                },
                error: function () {
                    //alert("No se Encontraron Tipos de Carpetas");
                    $("#divAlertDager").html("No se encontraron tipos de carpetas");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }

            });
        }
        $(function () {
            //tipoBusqueda();
            //distritoscombo();
        });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>