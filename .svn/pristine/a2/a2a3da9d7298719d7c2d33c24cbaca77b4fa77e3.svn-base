<?php

/**
 * @package VideoAudiencias
 */
class TranscodeClass {

    /**
     * Ruta donde se almacenara el video
     * @var protected prgconv
     */
    protected $pathsavevideo = "/var/www/html/sigejupe/mobile";

    /**
     * Ruta donde se encuentra el trans
     * 
     * @var protected prgconv
     */
    protected $prgconv = "/var/www/html/sigejupe/mobile/mp42hls";

    /**
     * Ruta del video 
     * @var string pathvideo
     */
    protected $pathvideo = "";

    /**
     * Identificador unico del video
     * @var string uuid
     */
    protected $uuid = "";

    /**
     * Direccion del Servidor de stream
     * @var string serverdomain
     */
    protected $serverdomain = "http://dticursos.pjedomex.gob.mx/sigejupev2/mobile/";
//    protected $serverdomain = "http://sigejupe2.pjedomex.gob.mx/sigejupe/mobile/";
//    protected $serverdomain = "http://localhost/sigejupeSVN/mobile/";

    /**
     * Constructor
     *  @var string videoPath Ruta Fisica donde se encuntra el video
     */
    public function __construct($videoPath, $uuid) {
        $this->pathvideo = $videoPath;
        $this->uuid = $uuid;
    }

    /**
     * Ejecuta el comando de conversion de video
     */
    public function transcode() {
        $result = array();
        if ($this->videoExist()) {
//            chdir($this->pathsavevideo);
//            mkdir($this->uuid, 0755);
//            chdir($this->uuid);

            $cmd = $this->prgconv . " " . $this->pathvideo;
            if (!exec($cmd)) {
                $result["success"] = "OK";
//                $result["pathstream"] = $this->serverdomain . $this->uuid . "/stream.m3u8";
                $result["pathstream"] = $this->serverdomain . "stream.m3u8";
            } else {
                $result["success"] = "Error";
                $result["text"] = "OCURRIO UN ERROR AL CONVERTIR EL VIDEO";
            }
        } else {
            $result["success"] = "OK";
//            $result["pathstream"] = $this->serverdomain . $this->uuid . "/stream.m3u8";
            $result["pathstream"] = $this->serverdomain . "stream.m3u8";
        }
        return $result;
    }

    /**
     * Valida si la el video existe
     */
    private function videoExist() {
//        if (!file_exists($this->pathsavevideo . "/" . $this->uuid)) {
        if (!file_exists($this->pathsavevideo)) {
            return true;
        } else {
            return false;
        }
    }

}
