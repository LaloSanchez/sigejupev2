<?php
//ihs 
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];

    $procedencia = 0;
    $idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
    $idCarpetaJudicialArbol = ( isset($_POST['idReferencia']) ? @$_POST['idReferencia'] : '' );
    $cveTipoCarpetaArbol = ( isset($_POST['cveTipoCarpeta']) ? @$_POST['cveTipoCarpeta'] : '' );
    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
        $idActuacionArbol = ( ($idActuacionArbol != 0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
        $idCarpetaJudicialArbol = ( ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") ? $idCarpetaJudicialArbol : 0 );
        $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol != "") {
        $procedencia = 1; // viene de arbol el formulario general
    }
    $segunda = "";
    $segunda = ( isset($_GET['segunda']) && $_GET['segunda'] != "" ) ? $_GET['segunda'] : "";
    $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";

    $grupoUsuario = $_SESSION['cveGrupo'];
    ?>
    <link href="css/formValidation.min.css" rel="stylesheet">
    <script src="js/formValidation.min.js">
    </script>
    <script src="js/formValidation/bootstrap.min.js">
    </script>

    <script>
        var tagValidators = {
            row: '.tagValidator', // The tag is placed inside a <div class="col-xs-4"> element
            validators: {
                notEmpty: {
                    message: 'Tag es requerido!.'
                }
            }
        },
        valorValidators = {
            row: '.valueValidator',
            validators: {
                notEmpty: {
                    message: 'El valor es requerido!'
                }
            }
        };
        var nombrearchivo = "prueba.b64";
        var cuerpodoc;
        var teclas = 0;
        var globales = [];
        var contenido;
        var modo = 1;
        var tagIndex = 0;
        var auto = 0;
        String.prototype.replaceAll = function (search, replacement) {
            var target = this;
            return target.split(search).join(replacement);
        }

        function cargararchivo() {
            var stat;
            var contents;
            var ruta;
            var cuerpodoc;
            var data = {
                "action": "load",
                "filename": nombrearchivo
            };
            data = $(this).serialize() + "&" + $.param(data);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "./ajax/loadfile.php",
                data: data,
                success: function (data) {
                    if (data["status"] == "OK") {
                        ////console.log("ruta=" + data["ruta"]);
                        ////console.log("Subir al editor");
                        cuerpodoc = data["contents"];
                        var archivo = cuerpodoc.split("&");
                        var header = LZString.decompressFromBase64(archivo[0]);
                        var cuerpo = LZString.decompressFromBase64(archivo[1]);
                        ////console.log("header=" + header); //dinamic form
                        ue.setContent(cuerpo);
                        globales = header.split("*");
                        carga_definiciones();
                    }
                }
            });
            return true;
        }
        //************************************************************************************
        function guardararchivo() {
            var header = "";
            var stat;
            var contents;
            var ruta;
            var cuerpodoc;
            if (campos_vacios()) {
                alert("Â¡No se puede grabar faltan definiciones!");
                return;
            }
            getelem();
            contenido = ue.getContent();
            for (i = 0; i < globales.length; i++) {
                if (i == globales.length - 1)
                    header = header + globales[i];
                else
                    header = header + globales[i] + "*";
            }
            cuerpodoc = LZString.compressToBase64(header) + "&" + LZString.compressToBase64(contenido);
            ////console.log("cuerpo codificado=" + cuerpodoc);
            var data = {
                "action": "save",
                "filename": nombrearchivo,
                "contents": cuerpodoc
            };
            data = $(this).serialize() + "&" + $.param(data);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "./ajax/savefile.php",
                data: data,
                success: function (data) {
                    if (data["status"] == "OK") {
                        alert("El archivo se grab&oacute; " + data["status"]);
                    }
                }
            });
            return true;
        }
        //************************************************************************************
        function carga_definiciones() {
            var elements = document.getElementById("tagForm");
            tagnom = globales[0].split("|");
            elements[1].value = tagnom[0].substring(1, tagnom[0].length);
            elements[2].value = tagnom[1];
            for (i = 1; i < globales.length; i++) {
                tagnom = globales[i].split("|");
                ////console.log("t0=" + tagnom[0] + " t1=" + tagnom[1]);
                cargar_definicion(tagnom[0].substring(1, tagnom[0].length), tagnom[1]); //sacarle el @
            }
            getelem();
        }

        function remove(name) {
            return (elem = document.getElementsByName(name).parentNode.removeChild(elem));
        }

        function resetea_elementos() {
            var elements = document.getElementById("tagForm");
            if (elements == 9)
                return;
            for (i = 4; i < elements.length + 1; i = i + 3) {
                if (elements[i].name.indexOf("tag[") > -1) {
                    remove(elements[i].name);
                    remove(elements[i + 1].name);
                }
            }
        }

        function cargar_definicion(tag, valor) {
            tagIndex++;
            ////console.log("tagidx=" + tagIndex);
            var $template = $('#tagTemplate'),
                    $clone = $template.clone().removeClass('hide').removeAttr('id').attr('data-tag-index', tagIndex).insertBefore($template);
            // Update the name attributes
            $clone.find('[name="tag"]').attr('name', 'tag[' + tagIndex + '].tag').end().find('[name="valor"]').attr('name', 'tag[' + tagIndex + '].valor').end();
            $clone.find('[name="tag[' + tagIndex + '].tag"]').attr('value', tag).end().find('[name="tag[' + tagIndex + '].valor"]').attr('value', valor).end();
            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            $('#tagForm').formValidation('addField', 'tag[' + tagIndex + '].tag', tagValidators).formValidation('addField', 'tag[' + tagIndex + '].valor', valorValidators);
        }

        function guardaTextoActual() {
            alert("Guardando contenido del editor....");
            localStorage.setItem("Contenido", ue.getContent());
        }

        function cargaActual() {
            alert("Cargando contenido al editor....");
            ue.setContent(localStorage.getItem("Contenido"));
        }

        function campos_vacios() {
            var formTags = document.forms[0];
            var elements = formTags.elements;
            for (var i = 1; i < elements.length + 1; i++) {
                if (formTags.elements[i] != undefined) {
                    if (formTags.elements[i].name.indexOf("tag[") > -1) {
                        if (formTags.elements[i].value == "") {
                            ////console.log('vacios: true');
                            showMessage('Hacen falta definir las Etiquetas. Verifique.', 'warning', 'definiciones');
                            return true;
                            break;
                        }
                    }
                }
            }
            ////console.log('vacios: false');
            return false;
        }

        function muestratags() {
            getelem();
            var str = "";
            for (i = 0; i < globales.length; i++)
                str = str + globales[i] + " (" + i + ") **";
            //alert ("g="+globales.length+"- leng="+globales[0].length);
            //alert ("definiciones:"+str);
        }

        function getContenido() {
            var txteditor;
            var tagnom;
            var contenido;
            getelem();
            contenido = ue.getContent();
            if (contenido.search("@") == -1)
                return contenido;
            for (i = 0; i < globales.length; i++) {
                tagnom = globales[i].split("|");
                txteditor = contenido.replaceAll(tagnom[0], '<strong>' + tagnom[0] + '</strong>');
                contenido = txteditor;
            }
            ////console.log("antes pdf=" + txteditor);
            return txteditor;
        }

        function TAGS() {
            contenido = ue.getContent();
            ////console.log("c="+contenido.search("@"));  
            getelem();
            for (i = 0; i < globales.length; i++) {
                //var tagnom = globales[i].split("|");
                var exprReal = eval("/" + globales[i] + "/i");
                //var exprPublic = tagnom[0];//.replace( /  +/g, ' ' );
                var exprPublic = '------------------------------';
                var resultado = contenido.replaceAll(exprReal, exprPublic);
                ////console.log("nombres i" + i + "=" + tagnom[1] + "->" + tagnom[0] + "res=" + resultado);
                contenido = resultado;
            }
            ue.setContent(resultado);
            return true;
        }
        String.prototype.ireplaceAll = function (strReplace, strWith) {
            var reg = new RegExp(strReplace, 'ig');
            return this.replace(reg, strWith);
        };

        function etiqmay() {
            var tagnom;
            //contenido="El @imPUtado era conocido por la @vicTIma cuando la llevo al @lugar  @delito";
            ////console.log("corg" + contenido);
            var resultado;
            contenido = ue.getContent();
            getelem();
            for (i = 0; i < globales.length; i++) {
                tagnom = globales[i].split("|");
                resultado = contenido.ireplaceAll(tagnom[0], tagnom[0]);
                contenido = resultado;
            }
            ue.setContent(resultado);
            ////console.log("res=" + resultado);
            return true;
        }

        function getelem() {
            var elements = document.getElementById("tagForm");
            var z = 0;
            var tokens = [];
            //alert ("elementos="+elements.length);
            //for (i = 1; i < elements.length + 1; i = i + 3) {
            for (i = 1; i < elements.length; i = i + 2) {
                if (elements[i].name.indexOf("tag[") > -1) {
                    ////console.log("@"+elements[i+1].value.toUpperCase().trim()+"|"+elements[i].value.trim());
                    tokens[z] = (elements[i].value.toUpperCase().trim());
                    z++;
                }
            }
            globales = tokens;
        }

        //Elimina, de los campos de Definiciones, los espacios al inicio, al final y entre palabras
        function formatoDefiniciones() {
            $('.definiciones').each(function () {
                $(this).val($(this).val().trim().replace(/  +/g, ' '));
            });
            return;
        }

        function switch_mode() {
            //valida que la sentencia tenga contenido
            if (validaSentencia())
                return;

            getelem();
            etiqmay();
            var sw = document.getElementById("switch");
            var text = document.getElementById("value");
            if (campos_vacios())
                return;
            if (sw.value == "1") {
                //conversiOn de espacios en diferentes formatos a espacio simple
                var texto = ue.getContent();
                for (var k = 1; k <= 5; k++) {
                    texto = texto.replace(/\s+/g, " "); //elimina los espacios con sus diferentes codificaciones y los transforma a espacio simple
                    texto = texto.replace(/&nbsp;+/g, ""); //elimina los espacios en html,
                }
                ue.setContent('');
                ue.setContent(texto);

                formatoDefiniciones();
                text.value = "ETIQUETAS";
                modo = 1;
                TAGS();
                sw.value = "1";
                //$('#btn-switch').removeClass('btn-success').addClass('btn-warning').html('Regresar a Vista de Juzgado');
                // //console.log("mode="+modo+"-"+sw.value+" ->etiquetas");
                //$('.addButton, .removeButton, .definiciones').prop('disabled',true);
                //$('#btn_guardaSentenciaPublica').prop('disabled',false);
                //ue.setDisabled();
            }
        }

    </script>

    <link type="text/css" href="css/actuaciones.css" rel="stylesheet" />
    <style type="text/css">
        input[type=radio] {
            transform: scale(1.2);
        }
        textarea {
            resize: none;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="tituloSentenciasPublicas">
                Resoluciones P&uacute;blicas
            </h5>
        </div>
        <div class="panel-body">
            <input id="SysCveUsuarioSistema" type="hidden" value="<?= $SysCveUsuarioSistema ?>"/>
            <!-- hidden -->
            <input id="SysCvePerfil" type="hidden" value="<?= $SysCvePerfil ?>"/>
            <!-- hidden -->
            <input id="SysCveAdscripcion" type="hidden" value="<?= $SysCveAdscripcion ?>"/>
            <input id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt" type="hidden"/>
            <input id="idActuacion" name="idActuacion" type="hidden" value="<?= $idActuacionArbol ?>"/>
            <input id="procedencia" name="procedencia" type="hidden" value="<?= $procedencia ?>"/>
            <input id="fecha" name="fecha" type="hidden" value="<?= date("d/m/Y"); ?>"/>
            <!-- <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> -->
            <input id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" type="hidden" value="<?= $idCarpetaJudicialArbol ?>"/> <!-- idReferencia -->
            <input id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" type="hidden" value="<?= $cveTipoCarpetaArbol ?>"/>
            <input id="cveGrupoUsuario" name="cveGrupoUsuario" type="hidden" value="<?= $grupoUsuario ?>"/>
            <input id="cveEstado" name="cveEstado" type="hidden" value="1"/>
            <input id="idCorreccion" type="hidden" value="0"/>
            <input type="hidden" id="segunda" value="<?php echo $segunda; ?>" />
            <div class="form-horizontal" data-intro="Este m&oacute;dulo le permite registrar una nueva medida cautelar, el cual puede ser modificado y/o eliminado." data-position="left" data-step="1" id="divFormulario" >
                <div class="form-group">
                    <label class="control-label col-md-3 needed" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position="right" data-step="2" for="cveTipoJuzgado">
                        <?php echo $segunda == 2 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>
                    </label>
                    <div class="col-md-9">
                        <select class="form-control " id="cveTipoJuzgado" name="cveTipoJuzgado">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">
                        Relacionado con
                    </label>
                    <div class="col-md-9">
                        <select class="form-control" id="tipoCarpeta" required>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed" id="label_mcautelares_text1">
                        No. de
                    </label>
                    <div class="col-md-9">
                        <input class="form-inline" id="carpetaNumero" maxlength="4" placeholder="N&Uacute;MERO" type="text" required/>
                        /
                        <input class="form-inline" id="carpetaAnio" maxlength="4" placeholder="A&Ntilde;O" type="text" required/>
                        <button class="btn btn-primary" id="btn_buscaCarpeta">
                            Encontrar
                        </button>
                        <span class="glyphicon" id="resultadoBusquedaActuacion">
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <!-- ResoluciOn -->
                    <div class="form-group">
                        <!-- Notificaciones -->
                        <div class="alert alert-warning alert-dismissable col-xs-12 col-sm-12 col-md-12" id="divAdvertencia_imputados" style="display: none">
                            <button class="close" data-dismiss="alert" type="button">
                                Ã
                            </button>
                            <strong id="strAdvertencia">
                            </strong>
                        </div>
                        <div class="alert alert-success alert-dismissable col-xs-12 col-sm-12 col-md-12" id="divCorrecto_imputados" style="display: none">
                            <button class="close" data-dismiss="alert" type="button">
                                Ã
                            </button>
                            <strong id="strCorrecto">
                            </strong>
                        </div>
                        <div class="alert alert-danger alert-dismissable col-xs-12 col-sm-12 col-md-12" id="divError_imputados" style="display: none">
                            <button class="close" data-dismiss="alert" type="button">
                                Ã
                            </button>
                            <strong id="strError">
                            </strong>
                        </div>
                        <div class="alert alert-info alert-dismissable col-xs-12 col-sm-12 col-md-12" id="divInformacion_imputados" style="display: none">
                            <button class="close" data-dismiss="alert" type="button">
                                Ã
                            </button>
                            <strong id="strInformacion">
                            </strong>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Tipo de Procedimiento -->
                        <label class="control-label col-md-3 needed">
                            Tipo de Procedimiento
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" id="tipoProcedimiento" >
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Sentido de la Resolucion -->
                        <label class="control-label col-md-3 needed">
                            Sentido de la Resoluci&oacute;n
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" id="tipoResolucion">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 needed">
                            S&iacute;­ntesis
                        </label>
                        <div class="col-md-9">
                            <input class="form-control" id="textSintesis" maxlength="300" placeholder="INGRESE LA S&Iacute;NTESIS" style="text-transform:uppercase;" type="text"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9" id="demoContainer" style="height: auto">
                            <form class="form-horizontal" id="tagForm" method="post" name="tagForm">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Etiquetas
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="col-xs-8 col-xs-offset-1">
                                                <small>
                                                    OFENDIDO / IMPUTADO / DIRECCI&Oacute;N
                                                </small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-8 col-xs-offset-1 has-success valueValidator">
                                                <input class="form-control definiciones" name="tag[0].valor" placeholder="DATO REAL" style="text-transform: uppercase;" type="text"/>
                                            </div>
                                            <div class="col-xs-1">
                                                <button class="btn btn-default addButton" type="button">
                                                    <i class="fa fa-plus">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- The template for adding new field -->
                                        <div class="form-group addedField hide" id="tagTemplate">
                                            <div class="col-xs-8 col-xs-offset-1 has-success valueValidator">
                                                <input class="form-control definiciones" name="valor" placeholder="DATO REAL" style="text-transform: uppercase;" type="text"/>
                                            </div>
                                            <div class="col-xs-1">
                                                <button class="btn btn-default removeButton" type="button">
                                                    <i class="fa fa-minus">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-6" style="display:none;">
                                                <input data-on-color="warning" id="switchX" onchange="switch_mode();" type="hidden"/>
                                                <input id="value" readonly="" type="hidden" value="ETIQUETAS"/>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <button class="btn btn-success" id="btn-switch" onclick="switch_mode();" type="button">
                                                    Convertir a Vista P&uacute;blica
                                                </button>
                                                <input id="switch" type="hidden" value="1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9 alert alert-warning alert-dismissable" id="divAdvertencia_definiciones" style="display: none">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9 alert alert-dismissable" id="divAdvertencia_estado" style="display: none">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 needed">
                            Contenido del documento
                        </label>
                        <div class="col-md-9">
                            <script id="editor" style="width: 100%; height: 300px; margin: 0px auto;" type="text/plain">
                            </script>
                        </div>
                    </div>

                    <div class="form-group" id="div_cambioEstado" style="display: none;" >
                        <div class="col-md-12">
                            <label class="control-label col-md-3 needed">
                                Estatus de la Resoluci&oacute;n P&uacute;blica
                            </label>
                            <div class="col-md-9 checkbox">
                                <div class="has-success">
                                    <div class="radio">
                                        <input type="radio" name="radioEstatus" id="optionsRadiosOk" value="1" checked>
                                        <label for="optionsRadiosOk">
                                            <b>Aprobar Resoluci&oacute;n para su versi&oacute;n P&uacute;blica</b>
                                        </label>
                                    </div>
                                </div>
                                <div class="has-warning">
                                    <div class="radio">
                                        <input type="radio" name="radioEstatus" id="optionsRadiosCorregir" value="0">
                                        <label for="optionsRadiosCorregir">
                                            <b>Solicitar Correcci&oacute;n</b>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-offset-3 col-md-9 checkbox" id="div_TextCorreccion" style="display: none;">
                                <textarea cols="80" rows="4" id="text_Correccion"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" id="div_tablaCorrecciones" style="display: none;">
                        <div class="col-md-offset-3 col-md-7">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="text-center">Hist&oacute;rico de Correcciones Solicitadas</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 15%;">Solicitud de Correcci&oacute;n</th>
                                        <th style="width: 65%;">Correcci&oacute;n solicitada</th>
                                        <th style="width: 15%;">Ultima Actualizaci&oacute;n de la Resoluci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyCorrecciones">
                                    <tr><td colspan="4">SIN REGISTROS</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Mensajes -->
                    <div class="form-group">
                        <div class="col-md-offset-1 col-md-10 alert alert-warning alert-dismissable" id="divAdvertencia" style="display: none">
                        </div>
                        <div class="col-md-offset-1 col-md-10 alert alert-success alert-dismissable" id="divCorrecto" style="display: none">
                        </div>
                        <div class="col-md-offset-1 col-md-10 alert alert-danger alert-dismissable" id="divError" style="display: none">
                        </div>
                        <div class="col-md-offset-1 col-md-10 alert alert-info alert-dismissable" id="divInformacion" style="display: none">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="col-md-2 botonesAdaptar" data-intro="Presi&oacute;nelo para Guardar el Estatus de la Resoluci&oacute;n." data-position="top" >
                                <button type="button" class="btn btn-primary btn-adaptar" aria-label="Left Align" id="btn_TransparenciaGuardaEstatus" style="display: none;">
                                    <span id="span_TransparenciaGuardaEstatus" class="glyphicon glyphicon-ok" aria-hidden="true"></span> Guardar Estatus de la Resoluci&oacute;n
                                </button>                            
                            </div> 
                            <div class="col-md-2 botonesAdaptar" data-intro="Presi&oacute;nelo para guardar o actualizar la Resoluci&oacute;n." data-position="top" data-step="3">
                                <input class="btn btn-primary btn-adaptar" id="btn_guardaSentenciaPublica" type="submit" value="Guardar" />
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input class="btn btn-primary btn-adaptar btn-limpiar" type="submit" value="Limpiar"/>
                            </div>
                            <div class="col-md-2 botonesAdaptar botonesArbol" data-intro="De clic para buscar una medida cautelar." data-position="top" data-step="4">
                                <input class="btn btn-primary btn-adaptar btn-consultar" onclick="muestraSeccion(2)" type="submit" value="Consultar"/>
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input class="btn btn-primary btn-adaptar" id="btn_eliminar" type="submit" value="Eliminar"/>
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <button class="btn btn-primary btn-adaptar" data-target="#ModalVisorPDF" data-toggle="modal" id="inputVisor" onclick="javascript:visorDocumentos();" >
                                    Visor
                                </button>
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <button class="btn btn-primary btn-adaptar" data-toggle="modal" id="inputPDF" onclick="enviar();">
                                    Generar PDF
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="divConsulta" style="display:none;">
                <!-- consulta y busqueda -->
                <input class="btn btn-primary" onclick="muestraSeccion(1)" type="submit" value="Regresar"/>
                <hr/>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="cveTipoJuzgado_busqueda">
                            Juzgado
                        </label>
                        <div class="col-md-9">
                            <select class="form-control " id="cveTipoJuzgado_busqueda" name="cveTipoJuzgado_busqueda">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Relacionado con
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" id="tipoCarpetaBusqueda">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" id="label_mcautelares_text2">
                            No. de
                        </label>
                        <div class="col-md-9">
                            <input class="form-inline" id="numeroBusqueda" maxlength="4" placeholder="N&Uacute;MERO" type="text"/>
                            /
                            <input class="form-inline" id="anioBusqueda" maxlength="4" placeholder="A&Ntilde;O" type="text"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Filtrar por
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" id="tipoFiltro">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="2">Aprobado</option>
                                <option value="3">Correcci&oacute;n</option>
                                <option value="1">Pendiente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Fecha inicio
                        </label>
                        <div class="col-md-2">
                            <input class="form-control datepicker fechaHoy" data-date-format="dd/mm/yyyy" id="finicial_busqueda" name="finicial_busqueda" placeholder="FECHA INICIAL" type="text"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Fecha fin
                        </label>
                        <div class="col-md-2">
                            <input class="form-control datepicker fechaHoy" data-date-format="dd/mm/yyyy" id="ffinal_busqueda" name="ffinal_busqueda" placeholder="FECHA FINAL" type="text"/>
                        </div>
                    </div>
                    <!-- Mensajes busqueda -->
                    <div class="form-group">
                        <div class="col-md-offset-1 col-md-10 alert alert-warning alert-dismissable" id="divAdvertencia_busqueda" style="display: none">
                        </div>
                        <div class="col-md-offset-1 col-md-10 alert alert-success alert-dismissable" id="divCorrecto_busqueda" style="display: none">
                        </div>
                        <div class="col-md-offset-1 col-md-10 alert alert-danger alert-dismissable" id="divError_busqueda" style="display: none">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="col-md-2 botonesAdaptar">
                                <input class="btn btn-primary btn-adaptar btn-buscar" type="submit" value="Buscar"/>
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input class="btn btn-primary btn-adaptar btn-limpiarBusqueda" type="submit" value="Limpiar"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="divResultados" style="display:none;">
                <div class="col-xs-12">
                    <!-- paginacion -->
                    <div class="col-xs-3">
                        <input class="btn btn-primary" onclick="muestraSeccion(2)" type="submit" value="Regresar"/>
                    </div>
                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg">
                        </label>
                    </div>
                    <div class="form-group col-xs-2" id="divPaginador">
                        <label class="control-label">
                            Cambiar a la p&aacute;gina:
                        </label>
                        <select id="cmbPaginacion" name="cmbPaginacion" onchange="buscarRegistros()">
                        </select>
                    </div>
                    <div class="form-group col-xs-4" id="divPaginador">
                        <label class="control-label">
                            Registros por p&aacute;gina:
                        </label>
                        <select id="cmbNumReg" name="cmbNumReg" onchange="buscarRegistros()">
                            <option value="10">
                                10
                            </option>
                            <option value="20">
                                20
                            </option>
                            <option value="40">
                                40
                            </option>
                            <option value="50">
                                50
                            </option>
                            <option value="100">
                                100
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 table-responsive" id="tablaResultados">
                </div>
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

    <!-- Modal de Mensajes -->
    <div class="modal fade bs-example-modal-sm" id="modalMensaje" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display:none;">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>

    <script src="sigejupe/sentenciaspublicas/sentenciaspublicas.js" charset="UTF-8"></script>

    <script>
                            $(document).ready(function () {
                                localStorage.setItem("Contenido", "");
                            });
    </script>

    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>