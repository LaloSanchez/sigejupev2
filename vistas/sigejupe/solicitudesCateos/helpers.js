var Helpers = function () {
    return {
        loadCombos: function (datos, render, columns, file) {
            var filtroGeneral = "";
            if (datos != "") {
                filtroGeneral = datos + "=1" + "&accion=consultar&activo=S";
            } else {
                filtroGeneral = "accion=consultar&activo=S";
            }

            if (!window.location.origin) {
                window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
            }

            var urlToSend = "../fachadas/sigejupe/" + file.toLowerCase() + "/" + file + "Facade.Class.php";
            $.ajax({
                url: urlToSend,
                type: "POST",
                data: filtroGeneral,
                beforeSend: function () {
                    ToggleLoading(1);
                },
                success: function (data) {
                    var datos = eval("(" + data + ")");
                    var options = "";
                    $.each(datos.data, function (index, val) {
                        if (val[columns[1]] != "NO IDENTIFICADO") {
                            options += "<option value=" + val[columns[0]] + " >" + val[columns[1]] + "</option>";
                        }
                    });
                    for (var i = 0; i < render.length; i++) {
                        $("#" + render[i]).append(options)
                    }
                    ToggleLoading(2);
                }
            });
        },
        ladTerms: function (datos) {
            var filtroGeneral = "";
            if (datos != "") {
                filtroGeneral = datos + "&accion=consultar&activo=S";
            } else {
                filtroGeneral = "accion=consultar&activo=S";
            }

            if (!window.location.origin) {
                window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
            }

            var urlToSend = "../fachadas/sigejupe/terminos/TerminosFacade.Class.php";
            $.ajax({
                url: urlToSend,
                type: "POST",
                data: filtroGeneral,
                beforeSend: function () {
                    ToggleLoading(1);
                },
                success: function (data) {
                    var datos = eval("(" + data + ")");
                    $("#terminos").html(datos.data[0].texto);
                    ToggleLoading(2);
                }
            });
        },
        getInfoUsuarios: function (path, type) {
            var dataSend = {
                "juzgado": $("#cmbJuzgadoSolicitar").val(),
                "accion": "getInfoJuzgadorWS"
            }
            if (type == 1) {
                var dataSend = {
                    "juzgado": $("#cmbJuzgadoSolicitar").val(),
                    "accion": "getAdminInfoJuzgadorWS"
                }
            }
            var urlToSend = "../fachadas/sigejupe/" + path + "/" + path.ucfirst() + "Facade.Class.php";
            $.ajax({
                url: urlToSend,
                type: "POST",
                data: dataSend,
                async: true,
                success: function (data) {
                    try {
                    } catch (e) {
                    }
                }
            });
        }
    }
}

String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, "").replace(/\"/g, "").replace(/\'/g, "").replace(/[^a-zA-Z\u00C1\u00E1\u00C9\u00E9\u00CD\u00ED\u00D3\u00F3\u00DA\u00FA\u00DC\u00FC\u00D1\u00F1 0-9.@]+/g, '');
}
String.prototype.email = function () {
    return /^[A-Za-z0-9._%+-]+@(?: |pjedomex.gob.mx)$/i.test(this);
}
String.prototype.emailglobal = function () {
    return /^[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/i.test(this);
}
String.prototype.Telefono = function () {
    return /^[0-9]{10}$/i.test(this)
}
String.prototype.ucfirst = function ()
{
    return this.charAt(0).toUpperCase() + this.substr(1);
}

$(".steps li a").click(function () {
    return false;
});
$("input[type=text]").attr("style", "text-transform: uppercase;");
$("input[name=txtEmail]").attr("style", "text-transform: lowercase;");
$("input.email").attr("style", "text-transform: lowercase;");
$.extend(true, $.fn.dataTable.defaults, {
    "bPaginate": false,
    "oLanguage": {
        "oPaginate": {
            "sNext": "Siguiente",
            "sPrevious": "Anterior",
            "sLast": "Ultimo",
            "sFirst": "Primero"
        }
    }
});