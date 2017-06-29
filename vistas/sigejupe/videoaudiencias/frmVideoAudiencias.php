<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idAudiencia = (isset($_POST["idAudiencia"]) ? $_POST["idAudiencia"] : "");
    ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-xs-12 infoDetalle" style="display: none;" >
                <div class="main-preview-player">
                    <div class="video-js vjs-fluid vjs-paused preview-player-dimensions vjs-workinghover vjs-mux vjs-user-inactive" id="preview-player" role="region" aria-label="video player">
                        <video id="my-video" class="vjs-tech" preload="auto" poster="img/logoLogin.png" data-setup='{}'>
                        </video>
                    </div>

                    <div class="playlist-container preview-player-dimensions">
                        <ol id="playListIntems" class="vjs-playlist vjs-csspointerevents vjs-mouse">
                        </ol>
                    </div>
                </div>
                <br />
                <div class="col-xs-12">
                    <div class="table-responsive" >
                        <table id="informationTableDetalleAudiencia" class="table table-hover table-bordered table-striped" >
                        </table>
                    </div>
                </div>
            </div>
            <div class="detallesWrong col-xs-12"  style="display: none;" ></div>

        </div>
    </div>

    <script src="js/reproductorvideo/video.min.js"></script>
    <script src="js/reproductorvideo/videojs-contrib-hls.min.js"></script>
    <link rel="stylesheet" href="js/reproductorvideo/video-js.min.css" />
    <link rel="stylesheet" href="js/reproductorvideo/videolist-js.min.css" />

    <script src="sigejupe/videoaudiencias/consultavideoaudiencias.js"></script>
    <script>
        var videoAudiencia = new videoAudiencias();
        $(function () {
            videoAudiencia.getVideAudiencia(<?php echo $idAudiencia ?>);
        });

    </script>

    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>