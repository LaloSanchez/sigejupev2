<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>PROGRAMACION DE NOTIFICACIONES CATEOS</h4>
        </div>
        <div class="panel-body">
            <div class="row" >
                <div class="col-md-12" >
                    <label class="col-md-1" >Tiempo</label>
                    <div class="col-md-2" >
                        <select class="form-control" id="tiempo" name="tiempo" ></select>
                    </div>
                </div>
                <div class="col-md-12" >
                    <br />
                    <div class="col-md-6" >
                        <div class="table-responsive" >
                            <table id="tblMediosNotificaciones" class="table table-hover table-bordered" >
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="col-md-12" >
                            <div class="panel-group MediosComunicacion" id="accordion" role="tablist" aria-multiselectable="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 apacheCronDiv" style="display:none" >
                    <br />
                    <div class="col-md-12 text-center">Cron. Apache</div>
                    <div class="col-md-12 apacheCron" ></div>
                </div>
                <div class="col-md-12 text-center" >
                    <button class="btn-primary btn btn-save" onclick="javascript:notificaciones.saveTareas()" style="display: none" >Guardar y Ejecutar Tareas</button>
                </div>
            </div>
        </div>
    </div>

    <script src="sigejupe/mediosnotificacion/mediosNotificacion.js" type="text/javascript"></script>
    <script>
                        var notificaciones = new Notificaciones();
                        notificaciones.loadMediosNotificacion();
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>