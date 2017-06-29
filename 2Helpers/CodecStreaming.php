<?php

/**
 * @package VideoAudiencias
 */
class TranscodeClass {

    /**
     * Ruta donde se almacenara el video
     * @var protected prgconv
     */
    protected $pathsavevideo = "";

    /**
     * Ruta donde se encuentra el archivo mp42hls
     * 
     * @var protected mp42hls
     */
    protected $mp42hls = "";

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
    protected $uuidVideo = "";

    /**
     * Direccion del Servidor de stream
     * @var string serverdomain
     */
    protected $serverdomain = "";

    /**
     * Tiempo de duracion de cada TS
     */
    protected $duration = '10';

    /**
     * Constructor
     *  @var string videoPath Ruta Fisica donde se encuntra el video
     */
    public function __construct($videoPath, $uuid, $uuidVideo) {
        $this->pathvideo = $videoPath;
        $this->uuid = $uuid;
        $this->uuidVideo = $uuidVideo;
    }

    /**
     * Ejecuta el comando de conversion de video
     */
    public function transcode() {
        $result = array();
        $this->pathsavevideo = ($this->pathsavevideo != '') ? $this->pathsavevideo :
                'streaming' . DIRECTORY_SEPARATOR . $this->uuid . DIRECTORY_SEPARATOR . $this->uuidVideo;

        if ($this->videoExist()) {
            $this->makeDirectory();
            $cmd = $this->mp42hls . " --segment-duration " . $this->duration . " " . $this->pathvideo;
            if (!exec($cmd)) {
                $result["type"] = "OK";
                $result["pathstream"] = $this->serverdomain . 'streaming/' . $this->uuid . '/' . $this->uuidVideo . "/stream.m3u8";
            } else {
                $result["type"] = "Error";
                $result["text"] = "OCURRIO UN ERROR AL CONVERTIR EL VIDEO";
            }
        } else {
            $result["type"] = "OK";
            $result["pathstream"] = $this->serverdomain . 'streaming/' . $this->uuid . '/' . $this->uuidVideo . "/stream.m3u8";
        }
        return $result;
    }

    /**
     * Valida si la el video existe
     */
    private function videoExist() {
        // Verifica si la ruta del video Existe
        if (!file_exists($this->pathsavevideo)) {
            // No existe la ruta del Video
            return true;
        } else {
            // Verifca si existe el archivo stream.m3u8
            if (!file_exists($this->pathsavevideo . '/stream.m3u8')) {
                return true;
            } else {
                // Existe el stream.m3u8 Verifica que exista un ts
                if (!file_exists($this->pathsavevideo . '/segment-0.ts')) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

    /**
     * Crea el Directorio de almacenamiento de los ts
     */
    private function makeDirectory() {
        mkdir($this->pathsavevideo, 0755, true);
        chdir($this->pathsavevideo);
    }

}
