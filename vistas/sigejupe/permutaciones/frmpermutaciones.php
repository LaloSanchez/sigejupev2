<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>TRANSFERIR CARPETAS ENTRE JUZGADORES</h4>
        </div>
        <div class="panel-body">
            <div class="row errorMsj" ></div>
            <div class="row" >
                <div class="col-md-12" >
                    <div class="col-md-6" >
                        <div class="col-md-12">
                            Juzgado Origen
                            <select onchange="javascript:permutaciones.loadJuzgador()" id="juzgadoOrigen" class="col-md-12" ></select>
                        </div>
                        <div class="col-md-12 ocultaOrigen" style="display:none">
                            Juzgador Origen
                            <select onchange="javascript:permutaciones.disabledOption()" id="juzgadorOrigen" class="col-md-12" ></select>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="col-md-12">
                            Juzgado Destino
                            <select onchange="javascript:permutaciones.loadJuzgador(1)" id="juzgadoDestino" class="col-md-12" ></select>
                        </div>
                        <div class="col-md-12 ocultaDestino" style="display:none">
                            Juzgador Destino
                            <select onchange="javascript:permutaciones.disabledOption(1)" id="juzgadorDestino" class="col-md-12" ></select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" >
                    <button onclick="javascript:permutaciones.search()" class="btn btn-success" >Buscar</button>
                </div>
            </div>
            <div class="row" >
                <br />
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 origenResponse" >
                    <div class="panel-group" id="accordionOrigen" role="tablist" aria-multiselectable="true"></div>
                </div>
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 destinoResponse" >
                    <div class="panel-group" id="accordionDestino" role="tablist" aria-multiselectable="true"></div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-12 text-center btn-change" style="display:none" >
                    <button class="btn btn-success" onclick="javascript:permutaciones.change()" >ENVIAR CAMBIOS</button>
                </div>
            </div>
        </div>
    </div>

    <script src="sigejupe/permutaciones/permutaciones.js" type="text/javascript"></script>
    <script>
                        var permutaciones = new Permutaciones();
                        var combos = ["juzgadoOrigen", "juzgadoDestino"];
                        permutaciones.loadJuzgados(combos);
    </script>


    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>