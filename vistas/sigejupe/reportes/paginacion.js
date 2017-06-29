var Paginacion = function (idForm) {

    var idForm = idForm;

    var htmlPaginacion = '<div class="col-md-2 col-md-offset-6">';
    htmlPaginacion += '<br/><br/>';
    htmlPaginacion += 'Total de Registros: <label id="totalRegistros"></label>';
    htmlPaginacion += '</div>';
    htmlPaginacion += '<div class="col-md-2">';
    htmlPaginacion += 'Páginas';
    htmlPaginacion += '<select class="form-control" name="paginas" id="paginas" onchange="javascript:paginacion.changePage(this.value);"></select>';
    htmlPaginacion += '</div>';
    htmlPaginacion += '<div class="col-md-2">';
    htmlPaginacion += 'Registros por página';
    htmlPaginacion += '<select class="form-control" name="porpagina" id="porpagina" onchange="javascript:paginacion.changePorPagina(this.value);">';
    htmlPaginacion += '<option value="10">10</option>';
    htmlPaginacion += '<option value="15">15</option>';
    htmlPaginacion += '<option selected value="20">20</option>';
    htmlPaginacion += '<option value="25">25</option>';
    htmlPaginacion += '<option value="40">40</option>';
    htmlPaginacion += '<option value="50">50</option>';
    htmlPaginacion += '<option value="100">100</option>';
    htmlPaginacion += '</select>';
    htmlPaginacion += '</div>';

    $("#paginacion").html(htmlPaginacion).hide();

    return {

        startPaginacion: function () {

            $("#paginacion").show();

        },

        printLinks: function (total, pagina) {

            paginacion.startPaginacion();

            var pages = Math.ceil(total / $("#porPagina").val());
            var paginas = '';
            var i;

            for (i = 0; i < pages; i++) {

                if (pagina - 1 == i) {
                    paginas += '<option selected value="' + (i + 1) + '">' + (i + 1) + '</option>';
                } else {
                    paginas += '<option value="' + (i + 1) + '">' + (i + 1) + '</option>';

                }

            }

            $("#totalRegistros").text(total);

            $("#paginas").html(paginas).show('fast', function () {
                $("#paginacion").show();
            });

        },

        changePorPagina: function (porPagina) {

            $("#porPagina").val(porPagina);
            paginacion.changePage(1);

        },

        changePage: function (page) {
            $("#offset").val((page - 1 ) * $("#porPagina").val());
            $("#pagina").val(page);
            $("#" + idForm).trigger('submit');
        }

    }

}

