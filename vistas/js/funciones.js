posValue = function (event) {/*CAMBIO DE FOCO AL PRESIONAR EL ENTER*/
    //if (event.shiftKey)
    //    alert(event.preventDefault());
    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 34) {
    } else if (event.keyCode == 13) {
        try {
            var id = "cmb" + this.id.substring(6, this.id.lentgh);
            var cmb = document.getElementById(id);
            cmb.value = this.value.toUpperCase();
            if (cmb.value == "0") {
                alert("La clave no se encontro");
                document.getElementById(this.id).focus();
                document.getElementById(this.id).select();
            } else {
                var tabIndex = parseInt($(this).attr('tabindex'));
                if ($(':input[tabindex=\'' + (tabIndex + 1) + '\']') != null) {
                    $(':input[tabindex=\'' + (tabIndex + 1) + '\']').focus();
                    $(':input[tabindex=\'' + (tabIndex + 1) + '\']').select();
                    return false;
                }
            }

        } catch (e) {
            var tabIndex = parseInt($(this).attr('tabindex'));
            if ($(':input[tabindex=\'' + (tabIndex + 1) + '\']') != null) {
                $(':input[tabindex=\'' + (tabIndex + 1) + '\']').focus();
                $(':input[tabindex=\'' + (tabIndex + 1) + '\']').select();
                return false;
            }
        }

    }
}

ajustar = function (object) {
    var doc = object.contentDocument ? object.contentDocument
            : object.contentWindow.document;

    var h = getDocHeight(doc);
    h = (h * .2) + h
    object.height = h;//getDocHeight(doc);//+ (getDocHeight(doc) * .2)
//    alert(object.height);
}

getDocHeight = function (doc) {
    doc = doc || document;
    var body = doc.body;
    var html = doc.documentElement;
//    alert("body.offsetHeight: " + body.offsetHeight + " html.clientHeight: " + html.clientHeight + " html.offsetHeight: " + html.offsetHeight + " body.scrollHeight:" +body.scrollHeight  + "html.scrollHeight:" + html.scrollHeight);
    if ((body.offsetHeight > 0) || (html.offsetHeight > 0)) {
        var height = (body.offsetHeight > 0) ? body.offsetHeight : html.offsetHeight;
    } else {
        var height = html.clientHeight;
    }
//    var height = Math.max( body.offsetHeight,
//            html.clientHeight, html.offsetHeight);//body.scrollHeight, html.scrollHeight
//            alert(height);
    return height;
}

jQuery.fn.resetForm = function () {
    $(this).each(function () {
        this.reset();
    });
};

jQuery.fn.Trim = function () {
    var strTexto = $(this).val().replace(/^\s*|\s*$/g, "");
    $(this).val(strTexto);
};

$.urlParam = function (name) {
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    } else {
        return results[1] || 0;
    }
};


/**
 * Valida la entrada exclusiva para nUmeros
 * @param {object} event Es el objeto del evento en Keypress
 * @return {boolean}  
 */
function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 9) {
        return true;
    } else if (key < 48 || key > 57) {
        return false;
    } else
        return true;
}
;
/**
 *FunciOn para la correcciOn del formato de fecha
 * @param {datetime} date Recibe la fecha y hora en formato YYYY-MM-DD HH:MM:SS
 * @param {datetime} dateTime Regresa la fecha y hora en formato DD/MM/YYY HH:MM:SS
 */
function dateFormat(date) {
    var dateTime = date.split(' ');
    var tmpDate = dateTime[0].split('-');
    return dateTime = tmpDate[2] + '/' + tmpDate[1] + '/' + tmpDate[0] + ' ' + dateTime[1];
}

(function (a) {
    a.fn.validaCampo = function (b) {
        a(this).on({keypress: function (a) {
                var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
            }})
    }
})(jQuery);

jQuery.fn.mueveScroll = function () {
    $('html,body').animate({scrollTop: Obj.offset().top}, 1000);
};

jQuery.fn.Mayusculas = function () {
    $(this).bind("blur", null, function (e) {
        $(this).val($(this).val().toUpperCase());
    });
};

var getCateosOrdenesPendientes = function (type) {
    console.log("get ordenes Pendientes");
    var datosSend = {
        "accion": "getCateosPendientes"
    }
    $(".cateosPendientes").html("").css({"left": "-35%"}).stop().hide();
    $(".ordenesPendientes").html("").css({"bottom": "-35%"}).stop().hide();
    var urlToSend = "";
    if (type == 1)
        urlToSend = "../fachadas/sigejupe/cateos/CateosFacade.Class.php";
    else
        urlToSend = "../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php";
    $.ajax({
        type: "POST",
        url: urlToSend,
        data: datosSend,
        async: true,
        global: false,
        success: function (datos) {
            try {
                var data = eval("(" + datos + ")");
                if (data.type = "OK") {
                    var msg = "";
                    var msgnotify = "";
                    var table = "<div class='table-responsive' ><table class='table' >";
                    if (type == 1)
                        table += "<thead><tr><th colspan='2' >CATEOS PENDIENTES</th></tr></thead><tbody>";
                    else
                        table += "<thead><tr><th colspan='2' >ORDENES DE APREHENSI&Oacute;N PENDIENTES</th></tr></thead><tbody>";
                    $.each(data.data, function (index, val) {
                        table += "<tr>";
                        table += "<td>" + val.total + "</td>";
                        table += "<td>" + val.desJuzgado + "</td>";
                        table += "</tr>";
                        msg += '<span class="badge">' + val.total + '</span>' + ' ' + val.desJuzgado + '<br>';
                        msgnotify += '' + val.total + '' + ' ' + val.desJuzgado + '\n';
                    });

//                    alert("Notify")
                    table += "</tbody></table></div>";
                    if (type == 1) {
                        notify({
                            type: "error", //alert | success | error | warning | info
                            title: "CATEOS PENDIENTES",
                            message: msg,
                            position: {
                                x: "right", //right | left | center
                                y: "top" //top | bottom | center
                            },
                            icon: '<img src="img/alert.png" />', //<i>
                            size: "normal", //normal | full | small
                            overlay: false, //true | false
                            closeBtn: true, //true | false
                            overflowHide: false, //true | false
                            spacing: 20, //number px
                            theme: "dark-theme", //default | dark-theme
                            autoHide: true, //true | false
                            delay: 25000, //number ms
                            onShow: null, //function
                            onClick: null, //function
                            onHide: null, //function
                            template: '<div class="notify"><div class="notify-text"></div></div>'
                        });
                        notifyMe("CATEOS PENDIENTES", msgnotify);
//                        $(".cateosPendientes").html(table).show();
//                        $(".cateosPendientes").animate({left: "15px"}).delay(10000).animate({left: "-35%"});
                    } else {
                        notify({
                            type: "info", //alert | success | error | warning | info
                            title: "ORDENES DE APREHENSI&Oacute;N PENDIENTES",
                            message: msg,
                            position: {
                                x: "right", //right | left | center
                                y: "top" //top | bottom | center
                            },
                            icon: '<img src="img/alert.png" />', //<i>
                            size: "normal", //normal | full | small
                            overlay: false, //true | false
                            closeBtn: true, //true | false
                            overflowHide: false, //true | false
                            spacing: 20, //number px
                            theme: "dark-theme", //default | dark-theme
                            autoHide: true, //true | false
                            delay: 25000, //number ms
                            onShow: null, //function
                            onClick: null, //function
                            onHide: null, //function
                            template: '<div class="notify"><div class="notify-text"></div></div>'
                        });
                        notifyMe("ORDENES DE APREHENSI\xD3N PENDIENTES", msgnotify);
//                        $(".ordenesPendientes").html(table).show();
//                        $(".ordenesPendientes").animate({bottom: "50px"}).delay(10000).animate({bottom: "-35%"});
                    }
                }
            } catch (e) {

            }
        }
    });
}

var getApelacionPendientes = function (type) {
    var datosSend = {
        "accion": "getApelacionesPendientes"
    }
    var urlToSend = "";
    urlToSend = "../fachadas/sigejupe/apelacioncateos/ApelacioncateosFacade.Class.php";
    $.ajax({
        type: "POST",
        url: urlToSend,
        data: datosSend,
        async: true,
        global: false,
        success: function (datos) {
            try {
                var data = eval("(" + datos + ")");
                if (data.type = "OK") {
                    var msg = "";
                    var msgnotify = "";
                    var table = "<div class='table-responsive' ><table class='table' >";
                    table += "<thead><tr><th colspan='2' >APELACI&Oacute;N CATEOS PENDIENTES</th></tr></thead><tbody>";
                    $.each(data.data, function (index, val) {
                        table += "<tr>";
                        table += "<td>" + val.total + "</td>";
                        table += "<td>" + val.desJuzgado + "</td>";
                        table += "</tr>";
                        msg += '<span class="badge">' + val.total + '</span>' + ' ' + val.desJuzgado + '<br>';
                        msgnotify += '' + val.total + '' + ' ' + val.desJuzgado + '\n';
                    });

//                    alert("Notify")
                    table += "</tbody></table></div>";

                    notify({
                        type: "info", //alert | success | error | warning | info
                        title: "APELACI&Oacute;N CATEOS PENDIENTES",
                        message: msg,
                        position: {
                            x: "right", //right | left | center
                            y: "top" //top | bottom | center
                        },
                        icon: '<img src="img/alert.png" />', //<i>
                        size: "normal", //normal | full | small
                        overlay: false, //true | false
                        closeBtn: true, //true | false
                        overflowHide: false, //true | false
                        spacing: 20, //number px
                        theme: "dark-theme", //default | dark-theme
                        autoHide: true, //true | false
                        delay: 25000, //number ms
                        onShow: null, //function
                        onClick: null, //function
                        onHide: null, //function
                        template: '<div class="notify"><div class="notify-text"></div></div>'
                    });
                    notifyMe("APELACION\xD3N CATEOS PENDIENTES", msgnotify);
                }
            } catch (e) {

            }
        }
    });
}

var getMuestrasPendientes = function (type) {
    var datosSend = {
        "accion": "getMuestrasPendientes"
    }
    var urlToSend = "";
    urlToSend = "../fachadas/sigejupe/respuestamuestra/RespuestamuestraFacade.Class.php";
    $.ajax({
        type: "POST",
        url: urlToSend,
        data: datosSend,
        async: true,
        global: false,
        success: function (datos) {
            try {
                var data = eval("(" + datos + ")");
                if (data.type = "OK") {
                    var msg = "";
                    var msgnotify = "";
                    var table = "<div class='table-responsive' ><table class='table' >";
                    table += "<thead><tr><th colspan='2' >TOMA DE MUESTRAS PENDIENTES</th></tr></thead><tbody>";
                    $.each(data.data, function (index, val) {
                        table += "<tr>";
                        table += "<td>" + val.total + "</td>";
                        table += "<td>" + val.desJuzgado + "</td>";
                        table += "</tr>";
                        msg += '<span class="badge">' + val.total + '</span>' + ' ' + val.desJuzgado + '<br>';
                        msgnotify += '' + val.total + '' + ' ' + val.desJuzgado + '\n';
                    });

//                    alert("Notify")
                    table += "</tbody></table></div>";

                    notify({
                        type: "info", //alert | success | error | warning | info
                        title: "TOMA DE MUESTRAS PENDIENTES",
                        message: msg,
                        position: {
                            x: "right", //right | left | center
                            y: "top" //top | bottom | center
                        },
                        icon: '<img src="img/alert.png" />', //<i>
                        size: "normal", //normal | full | small
                        overlay: false, //true | false
                        closeBtn: true, //true | false
                        overflowHide: false, //true | false
                        spacing: 20, //number px
                        theme: "dark-theme", //default | dark-theme
                        autoHide: true, //true | false
                        delay: 25000, //number ms
                        onShow: null, //function
                        onClick: null, //function
                        onHide: null, //function
                        template: '<div class="notify"><div class="notify-text"></div></div>'
                    });
                    notifyMe("TOMA DE MUESTRAS PENDIENTES", msgnotify);
                }
            } catch (e) {

            }
        }
    });
}

/**
 * Muestra mensajes personalizados en el div destinado para ello
 * @param {string} message Es el mensaje que se mostrarA
 * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
 * @param {string} divAux Es el postfijo para identificar un DIV alterno de notificaciOn
 * @param {string} extra DIV alterno de notificaciOn
 */
function muestraMensaje(message, type, divAux, extra) {
    var message = message || '';
    var div_message = '';
    var divAux = divAux || '';
    var extra = extra || '';
    var state = 0, icon = '', color = '';
    switch (type) {
        case 'success':
            div_message = 'divCorrecto';
            icon = 'glyphicon glyphicon-ok';
            color = 'green';
            break;
        case 'warning':
            div_message = 'divAdvertencia';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            state = 1;
            break;
        case 'information':
            div_message = 'divInformacion';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            break;
        case 'error':
            div_message = 'divError';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            break;
    }
    if (divAux != '') {
        div_message += divAux;
        if (type == 'success') {
            $("#divInformacion" + divAux).hide();
            //$("#" + div_message).hide();
        }
        if (type == 'information') {
            $("#divCorrecto" + divAux).hide();
            $('#' + div_message).html(message);
            $('#' + div_message).hide().show("slide");
        }
    } else if (extra != '') {
        $('#' + extra).hide().empty().show("slide").append('<span style="color:' + color + ';" class="' + icon + '" aria-hidden="true"></span> ' + message);
        div_message = extra;
    } else {
        $('#' + div_message).html(message);
        $('#' + div_message).hide().show("slide");
    }
    setTimeout(function () {
        $("#" + div_message).hide("slide");
    }, 5000);
    return;
}

/**
 * FunciOn para la obtenciOn de informacion de tablas y llenado de combos
 * @param {array} selectIds Ids de los combos donde se mostraran los datos
 * @param {string} facade Es la ruta de la fachada que se invoca, solo se define la carpeta y el nombre del archivo sin la extensiOn Class en adelante. Ej. tiposcarpetas/TiposcarpetasFacade
 * @param {string} value Es el identificador del campo llave
 * @param {string} descripction Es el identificador del campo de descripciOn
 */
llenaCombo = function (selectIds, facade, activo, value, description, selected, mensaje) {
    var selected = selected || '';
    var mensaje = mensaje || '**NO DEFINIDO**'
    $.each(selectIds, function (k, v) {
        $('#' + v).empty();
    });
    $.post('../fachadas/sigejupe/' + facade + '.Class.php',
            {activo: activo, accion: 'consultar'},
            function (response) {
                var object = eval("(" + response + ")");
                var options = '';
                var selectedOption = '';
                if (object.totalCount > 0) {
                    options = '<option value="0">--SELECCIONE--</option>';
                    $.each(object.data, function (k, v) {
                        selectedOption = (v[value] == selected) ? " selected" : "";
                        options += '<option value="' + v[value] + '" ' + selectedOption + '>' + v[description] + '</option>';
                    });
                } else {
                    options = '<option value="0">--SIN REGISTROS--</option>';
                    alert('No existen registros para: ' + mensaje);
                }
                $.each(selectIds, function (k, v) {
                    $('#' + v).append(options);
                });
            });
    return null;
}

/**
 * Muestra mensajes personalizados en el div destinado para ello
 * @param {string} message Es el mensaje que se mostrarA
 * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
 * @param {string} divAux Es el postfijo para identificar un DIV alterno de notificaciOn
 */
function showMessage(message, type, divAux, extra) {
    var message = message || '';
    var div_message = '';
    var divAux = divAux || '';
    var extra = extra || '';
    var state = 0,
        icon = '',
        color = '';
    switch (type) {
        case 'success':
            div_message = 'divCorrecto';
            icon = 'glyphicon glyphicon-ok';
            color = 'green';
            break;
        case 'warning':
            div_message = 'divAdvertencia';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            state = 1;
            break;
        case 'information':
            div_message = 'divInformacion';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            break;
        case 'error':
            div_message = 'divError';
            icon = 'glyphicon glyphicon-remove';
            color = 'red';
            break;
    }
    if (divAux != '') {
        div_message += "_" + divAux;
        //oculta los divs
        $("#divCorrecto" + divAux + ", #divInformacion" + divAux + ", #divAdvertencia" + divAux + ", #divError" + divAux).hide();
        $('#' + div_message).html(message).show("slide");
    } else if (extra != '') {
        $('#' + extra).hide().empty().show("slide").append('<span style="color:' + color + ';" class="' + icon + '" aria-hidden="true"></span> ' + message);
        div_message = extra;
    } else {
        $('#' + div_message).html(message);
        $('#' + div_message).hide().show("slide");
    }
    setTimeout(function() {
        $("#" + div_message).hide("slide");
    }, 5000);
    return;
}
