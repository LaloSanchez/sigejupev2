<?php

//ini_set("error_log", dirname(__FILE__) . "/../../../logs/ImagenesFacade.log");
//ini_set("log_errors", 1);
//ini_set('display_errors', 1);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/ImagenesFacade.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/ImagenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
$_POST["Origen"] = "digitalizacion";
include_once(dirname(__FILE__) . "/../documentosimg/DocumentosimgFacade.Class.php");

class ImagenesFacade {

    public function __construct() {
        
    }

    public function validarImagenes($ImagenesDto) {
        $ImagenesDto->setidImagen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getidImagen(), "utf8") : strtoupper($ImagenesDto->getidImagen()))))));
        if ($this->esFecha($ImagenesDto->getidImagen())) {
            $ImagenesDto->setidImagen($this->fechaMysql($ImagenesDto->getidImagen()));
        }
        $ImagenesDto->setidDocumentoImg(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getidDocumentoImg(), "utf8") : strtoupper($ImagenesDto->getidDocumentoImg()))))));
        if ($this->esFecha($ImagenesDto->getidDocumentoImg())) {
            $ImagenesDto->setidDocumentoImg($this->fechaMysql($ImagenesDto->getidDocumentoImg()));
        }
        $ImagenesDto->setfojas(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getfojas(), "utf8") : strtoupper($ImagenesDto->getfojas()))))));
        if ($this->esFecha($ImagenesDto->getfojas())) {
            $ImagenesDto->setfojas($this->fechaMysql($ImagenesDto->getfojas()));
        }
        $ImagenesDto->setruta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getruta(), "utf8") : strtoupper($ImagenesDto->getruta()))))));
        if ($this->esFecha($ImagenesDto->getruta())) {
            $ImagenesDto->setruta($this->fechaMysql($ImagenesDto->getruta()));
        }
        $ImagenesDto->setposicion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getposicion(), "utf8") : strtoupper($ImagenesDto->getposicion()))))));
        if ($this->esFecha($ImagenesDto->getposicion())) {
            $ImagenesDto->setposicion($this->fechaMysql($ImagenesDto->getposicion()));
        }
        $ImagenesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getactivo(), "utf8") : strtoupper($ImagenesDto->getactivo()))))));
        if ($this->esFecha($ImagenesDto->getactivo())) {
            $ImagenesDto->setactivo($this->fechaMysql($ImagenesDto->getactivo()));
        }
        $ImagenesDto->setfechaImagen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getfechaImagen(), "utf8") : strtoupper($ImagenesDto->getfechaImagen()))))));
        if ($this->esFecha($ImagenesDto->getfechaImagen())) {
            $ImagenesDto->setfechaImagen($this->fechaMysql($ImagenesDto->getfechaImagen()));
        }
        $ImagenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getfechaActualizacion(), "utf8") : strtoupper($ImagenesDto->getfechaActualizacion()))))));
        if ($this->esFecha($ImagenesDto->getfechaActualizacion())) {
            $ImagenesDto->setfechaActualizacion($this->fechaMysql($ImagenesDto->getfechaActualizacion()));
        }
        $ImagenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getfechaRegistro(), "utf8") : strtoupper($ImagenesDto->getfechaRegistro()))))));
        if ($this->esFecha($ImagenesDto->getfechaRegistro())) {
            $ImagenesDto->setfechaRegistro($this->fechaMysql($ImagenesDto->getfechaRegistro()));
        }
        $ImagenesDto->setadjunto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImagenesDto->getadjunto(), "utf8") : strtoupper($ImagenesDto->getadjunto()))))));
        if ($this->esFecha($ImagenesDto->getadjunto())) {
            $ImagenesDto->setadjunto($this->fechaMysql($ImagenesDto->getadjunto()));
        }
        return $ImagenesDto;
    }

    public function selectImagenes($ImagenesDto) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesController = new ImagenesController();
        $ImagenesDto = $ImagenesController->selectImagenes($ImagenesDto);
        if ($ImagenesDto != "") {
            $dtoToJson = new DtoToJson($ImagenesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertImagenesRecibidasPromociones($param, $proveedor = null) {
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $json = new Encode_JSON();
        //$param = json_decode( $jsonImagenes );
        /**
         * 1 Verifica el tipo de documento
         * 2 Busca documento con 
         *      idExhorto && cveTipoDocumento
         *      idActuacion && cveTipoDocumento
         * 3 Si no lo encuentra lo crea
         */
        $ImagenesController = new ImagenesController();
        $documentosimgDto = new DocumentosimgDTO();
        $documentosimgDto->setCveTipoDocumento($param["cveTipoDocumento"]);

        if ($param['idExhorto'] > 0) {
            $documentosimgDto->setIdExhorto($param["idExhorto"]);
            $documentosimgDto->setIdActuacion('');
            $tipo = 1;
            $id = $param['idExhorto'];
        } elseif ($param['idActuacion'] > 0) { # si es actuaci?n busca documento de actuaci?n
//            $documentosimgDto->setIdExhorto('');
            $documentosimgDto->setIdActuacion($param["idActuacion"]);
            $tipo = 2;
            $id = $param['idActuacion'];
        } else {
            exit(utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "ERROR", "text" => "No se defini&oacute; Exhorto o Actuaci&oacute;n")))));
        }

        $documentosimgDao = new DocumentosimgDAO();
        //error_log('+++++++++++');
        $documentosImgDtoExiste = $documentosimgDao->selectDocumentosimg($documentosimgDto, '', $proveedor);
        //error_log('+++++++++++');
        //error_log(json_encode($documentosImgDtoExiste));
        //error_log('+++++++++++');
        $param["idDocumentoImg"] = ($documentosImgDtoExiste != null) ? $documentosImgDtoExiste : $ImagenesController->creaDocumento($tipo, $id, $param['cveTipoDocumento']);
        $fileExtension = "pdf";
        # se inserta la imagen
        //error_log('**********');
        //error_log( json_encode($param["idDocumentoImg"]));
        //error_log('**********');
        $arrImagen = $ImagenesController->insertaImagen($tipo, $param["idDocumentoImg"][0], $param['cveTipoDocumento'], $fileExtension, $proveedor); # [0] solo devuelve uno obj el insert
        $tmpArrImagen = json_decode($arrImagen); # convierte a arreglo

        if ($tmpArrImagen->data->type == 'OK') { # si se insert? bien en la tabla
            # se crea manejador f?sico de imagen
            $imagenesFacade = new ImagenesFacade();
            #guarda imagen fisicamente
            //$imagenesFacade->cargaImagenes($param['archivo'], $tmpArrImagen->data->ruta);
            //mueve imagenes
            //error_log('parametro=> '.json_encode($param));
            $resutimagenes = $imagenesFacade->copiaImagenes($param, $tmpArrImagen->data->ruta);
            error_log(print_r($param, true));
            error_log(print_r($resutimagenes));
            # si se copi? correctamente, se actualiza campo adjunto a S
            if (file_exists($tmpArrImagen->data->ruta)) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdImagen($tmpArrImagen->data->idImagen);
                $imagenesDao = new ImagenesDAO();
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto, '', $proveedor);
                $imagenesDto[0]->setAdjunto('S');
                $imagenesDto = $imagenesDao->updateImagenes($imagenesDto[0], $proveedor);
                $imagenesDto = $imagenesDto[0];
                $rutaArchivo = explode('/', $imagenesDto->getRuta());
                $nombreArchivo = $rutaArchivo[sizeof($rutaArchivo) - 1];

                return utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "OK", "text" => "Archivo agregado.", "idImagen" => $imagenesDto->getIdImagen(), "ruta" => substr($imagenesDto->getRuta(), 9), "nombreArchivo" => $nombreArchivo))));
            } else {
                $json = new Encode_JSON();
                #$proveedor->close();
                return utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "ERROR", "text" => "No se agreg&oacute; el archivo."))));
            }
        } else {
            return utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "ERROR", "text" => "ERROR al insertar registro de imagen, intente nuevamente."))));
        }
    }

    public function insertImagenes($param, $proveedor = null) {
//        echo "\n<br>";
//        echo "|||||************INICIA IMAGENES FACADE*********||||||||";
//        echo "\n<br>";
        $json = new Encode_JSON();
        /**
         * 1 Verifica el tipo de documento
         * 2 Busca documento con 
         *      idCarpetaJudicial && cveTipoDocumento
         *      idActuacion && cveTipoDocumento
         * 3 Si no lo encuentra lo crea
         */
        $ImagenesController = new ImagenesController();
        $documentosimgDto = new DocumentosimgDTO();
        $documentosimgDto->setCveTipoDocumento($param["cveTipoDocumento"]);
        /**
         * Busca si es orden de aprehension = 18
         * cateo = 19
         */
        if ($documentosimgDto->getCveTipoDocumento() == 18 || $documentosimgDto->getCveTipoDocumento() == 19) { # aprehensión o cateo
            $documentosimgDto->setIdCarpetaJudicial($param["idCarpetaJudicial"]);
            $documentosimgDto->setIdActuacion('');
            $tipo = $documentosimgDto->getCveTipoDocumento() == 18 ? 3 /* órden aprehensión */ : 4 /* cateo */;
            $id = $param["idCarpetaJudicial"];
        } elseif ($documentosimgDto->getCveTipoDocumento() == 25) { # aprehensión o cateo
            $documentosimgDto->setIdCarpetaJudicial($param["idCarpetaJudicial"]);
            $documentosimgDto->setIdActuacion('');
            $tipo = 25;
            $id = $param["idCarpetaJudicial"];
        } elseif
        (
                $documentosimgDto->getCveTipoDocumento() == 29 ||
                $documentosimgDto->getCveTipoDocumento() == 30 ||
                $documentosimgDto->getCveTipoDocumento() == 31
        ) { # apelación, acuerdo apelación, resolución apelación
            $documentosimgDto->setIdCarpetaJudicial($param["idCarpetaJudicial"]);
            $documentosimgDto->setIdActuacion('');
            $tipo = 1; # se marca como carpeta judicial
            $id = $param["idCarpetaJudicial"];
        } else {
            # si es carpeta judicial busca que exista documento
            if ($param['idCarpetaJudicial'] > 0 && $param['idActuacion'] == 0) {
                $documentosimgDto->setIdCarpetaJudicial($param["idCarpetaJudicial"]);
                $documentosimgDto->setIdActuacion(0);
                $tipo = 1;
                $id = $param['idCarpetaJudicial'];
            } elseif ($param['idActuacion'] > 0 && $param['idCarpetaJudicial'] == 0) { # si es actuación busca documento de actuación
                $documentosimgDto->setIdCarpetaJudicial(0);
                $documentosimgDto->setIdActuacion($param["idActuacion"]);
                $tipo = 2;
                $id = $param['idActuacion'];
            } elseif ($param['idActuacion'] > 0 && $param['idCarpetaJudicial'] > 0) {
                $documentosimgDto->setIdCarpetaJudicial(0);
                $documentosimgDto->setIdActuacion($param["idActuacion"]);
                $tipo = 2;
                $id = $param['idActuacion'];
            } else {
                exit('ERROR. No se definió Carpeta Judicial o Actuación');
            }
        }#cierra si es orden de aprehension o cateo
        $documentosimgDao = new DocumentosimgDAO();
        $documentosImgDtoExiste = $documentosimgDao->selectDocumentosimg($documentosimgDto, '', $proveedor);
        $param["idDocumentoImg"] = ($documentosImgDtoExiste != null) ? $documentosImgDtoExiste : $ImagenesController->creaDocumento($tipo, $id, $param['cveTipoDocumento'], $proveedor);
        $fileExtensions = explode(".", $param["archivo"]['name']);
        $fileExtension = end((array_values($fileExtensions)));

        # se inserta la imagen

        $arrImagen = $ImagenesController->insertaImagen($tipo, $param["idDocumentoImg"][0], $param['cveTipoDocumento'], $fileExtension, $proveedor); # [0] solo devuelve uno obj el insert
        $tmpArrImagen = json_decode($arrImagen); # convierte a arreglo

        if ($tmpArrImagen->data->type == 'OK') { # si se insertó bien en la tabla
            # se crea manejador físico de imagen
            $imagenesFacade = new ImagenesFacade();
            $data = file_get_contents($param['archivo']['tmp_name']);
            #guarda imagen fisicamente
            $imagenesFacade->cargaImagenes($param['archivo'], $tmpArrImagen->data->ruta);
            # si se copió correctamente, se actualiza campo adjunto a S
            if (file_exists($tmpArrImagen->data->ruta)) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdImagen($tmpArrImagen->data->idImagen);
                $imagenesDao = new ImagenesDAO();
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto, '', $proveedor);
                $imagenesDto[0]->setAdjunto('S');
                if ($documentosimgDto->getCveTipoDocumento() == 18 || $documentosimgDto->getCveTipoDocumento() == 19) {
                    $imagenesDto[0]->setBase64(""); #SOLO APLICA EN CATEOS Y ORDENES DE APREHENSION
                } else {
                    $imagenesDto[0]->setBase64("");
                }
                $imagenesDto = $imagenesDao->updateImagenes($imagenesDto[0], $proveedor);
                $imagenesDto = $imagenesDto[0];
                return utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "OK", "text" => "El archivo fue copiado fisicamente.", "ruta" => $imagenesDto->getRuta()))));
            } else {
                $json = new Encode_JSON();
                #$proveedor->close();
                return utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "Error", "text" => "El archivo no fue co?iado fisicamente."))));
            }
        } else {
            return utf8_encode($json->convert(array("totalCount" => 0, "data" => array("type" => "Error", "text" => "ERROR al insertar registro de imagen, intente nuevamente."))));
        }
//        $ImagenesDto = $this->validarImagenes($ImagenesDto);
//        $ImagenesController = new ImagenesController();
//        $ImagenesDto = $ImagenesController->insertImagenes($ImagenesDto);
//        if ($ImagenesDto != "") {
//            $dtoToJson = new DtoToJson($ImagenesDto);
//            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
//        }
//        $jsonDto = new Encode_JSON();
//        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateImagenes($ImagenesDto) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesController = new ImagenesController();
        $ImagenesDto = $ImagenesController->updateImagenes($ImagenesDto);
        if ($ImagenesDto != "") {
            $dtoToJson = new DtoToJson($ImagenesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteImagenes($ImagenesDto) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesController = new ImagenesController();
        $ImagenesDto = $ImagenesController->deleteImagenes($ImagenesDto);
        if ($ImagenesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    private function esFecha($fecha) {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function esFechaMysql($fecha) {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }
        return false;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);
        return $year . "-" . $mes . "-" . $dia;
    }

    /**
     * Copia fisicamente el archivo a su ubicación
     * @param type $archivo = $_FILES
     * @param type $ruta
     */
    public function cargaImagenes($archivo, $ruta) {

        $extension = explode(".", $archivo['name']);
        if ((string) $extension[1] !== "php" || (string) $extension[1] !== "php2" || (string) $extension[1] !== "php3" || (string) $extension[1] !== "php4") {
            if (move_uploaded_file($archivo['tmp_name'], $ruta)) {
                return json_encode(array("type" => "OK", "text" => "Archivo copiado de forma correcta"));
            } else {
                return json_encode(array("type" => "Error", "text" => "Ocurrió un error al copiar el archivo"));
            }
        } else {
            return json_encode(array("type" => "Error", "text" => "Tipo de Archivo no válido. Archivo con extencion:" . (string) $extension[1]));
        }
    }

# cierra cargaImagenes

    /**
     * Función llamada desde el visor
     */
    public function getImagenes($idCarpetaJudicial = null, $idActuacion = null, $tipo = null) {
        if ($idCarpetaJudicial != null || $idActuacion != null) {
            # si trae los dos ID se va a actuación
            # obtiene documento
            $documentosimgDto = new DocumentosimgDTO();
            $documentosimgDto->setIdActuacion($idActuacion);
            $documentosimgDto->setIdCarpetaJudicial($idCarpetaJudicial);
            if ($tipo != null)
                $documentosimgDto->setCveTipoDocumento($tipo);
            $documentosimgFacade = new DocumentosimgFacade();
            $documentosimgDto = $documentosimgFacade->selectDocumentosimg($documentosimgDto);
            $existe = json_decode($documentosimgDto);
            if ($existe->totalCount > 0) {
                # convierte json a  array()
                $doc = json_decode($documentosimgDto);
                # obtiene tipoDocumento
                $tiposdocumentosDto = new TiposdocumentosDTO();
                $tiposdocumentosDto->setCveTipoDocumento($doc->data[0]->cveTipoDocumento);
                $tiposdocumentosDao = new TiposdocumentosDAO();
                $tiposdocumentosDto = $tiposdocumentosDao->selectTiposdocumentos($tiposdocumentosDto, '', $proveedor = NULL);

                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($doc->data[0]->idDocumentoImg);
                $imagenesDto->setActivo('S');
                $imagenesDto->setAdjunto('S');
                $imagenesFacade = new ImagenesFacade();
                $imagenesDto = $imagenesFacade->selectImagenes($imagenesDto);

                $existe = json_decode($imagenesDto);
                if ($existe->totalCount > 0) {
                    # convierte json a array()
                    $data = json_decode($imagenesDto)->data;
                    $img = array();
                    $cont = 0;
                    foreach ($data as $d) {
                        $img[$cont] = array();
                        $img[$cont]['idImagen'] = $d->idImagen;
                        $img[$cont]['idDocumentoImg'] = $d->idDocumentoImg;
                        $img[$cont]['ruta'] = $d->ruta;
                        $img[$cont]['posicion'] = $d->posicion;
                        $img[$cont]['activo'] = $d->activo;
                        $img[$cont]['fechaImagen'] = $d->fechaImagen;
                        $img[$cont]['fechaActualizacion'] = $d->fechaActualizacion;
                        $img[$cont]['fechaRegistro'] = $d->fechaRegistro;
                        $img[$cont]['adjunto'] = $d->adjunto;
                        $img[$cont]['fojas'] = $d->fojas;
                        $img[$cont]['DatosCarpetajudicial'] = array();
                        $cont++;
                    }
                    # $tiposdocumentosDto[0]->getDescTipoDocumento()
                    return json_encode(
                            array(
                                'totalCount' => count($img),
                                'text' => '',
                                'data' => $img,
                                'tipoDocumento' => array(
                                    'idDocumentoImg' => $doc->data[0]->idDocumentoImg,
                                    'cveTipodocumento' => $doc->data[0]->cveTipoDocumento,
                                    'idReferencia' => 0,
                                    'descTipoDocumento' => $tiposdocumentosDto[0]->getDescTipoDocumento(),
                                    'extension' => $tiposdocumentosDto[0]->getExtencion(),
                                    'cveDocumento' => 0,
                                    'cvetipoActuacion' => 0,
                                    'principal' => 'S',
                                )
                            )
                    );
                } else {
                    return json_encode(array('status' => 'fail', 'totalCount' => 0, 'mje' => 'No existen imagenes relacionadas.', 'data' => array('type' => 'Error')));
                }
            } else {
                return json_encode(array('status' => 'fail', 'totalCount' => 0, 'mje' => 'No existen documentos relacionados.', 'data' => array('type' => 'Error')));
            }
        }# cierra if
        else {
            return json_encode(array('status' => 'fail', 'totalCount' => 0, 'mje' => 'No existen documentos relacionados.', 'data' => array('type' => 'Error')));
        }
    }

# cierra función

    public function copiaImagenes($archivo, $ruta) {
        $extension = explode(".", $archivo["archivo"]['path']);
        if ((string) $extension[1] !== "php" || (string) $extension[1] !== "php2" || (string) $extension[1] !== "php3" || (string) $extension[1] !== "php4") {
            //error_log('******** copia de archivos => '.$archivo["archivo"]['path'].' ***** => '.$ruta);
            if (copy($archivo["archivo"]['path'], $ruta)) {
                return json_encode(array("type" => "OK", "text" => "Archivo copiado de forma correcta"));
            } else {
                return json_encode(array("type" => "Error", "text" => "Ocurri&oacute; un error al copiar el archivo"));
            }
        } else {
            return json_encode(array("type" => "Error", "text" => "Tipo de Archivo no v&aacute;lido. Archivo con extencion:" . (string) $extension[1]));
        }
    }

}

# cierra clase

/**
 * Si hay post y archivos
 */
if (isset($_POST) && isset($_FILES)) {

    @$idImagen = $_POST["idImagen"];
    @$idDocumentoImg = $_POST["idDocumentoImg"];
    @$fojas = $_POST["fojas"];
    @$ruta = $_POST["ruta"];
    @$posicion = $_POST["posicion"];
    @$activo = $_POST["activo"];
    @$fechaImagen = $_POST["fechaImagen"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$adjunto = $_POST["adjunto"];
    @$accion = $_POST["accion"];
    $idCarpetaJudicial = isset($_POST['idCJ']) ? $_POST['idCJ'] : 0;
    $idActuacion = isset($_POST['idAct']) ? $_POST['idAct'] : 0;

    $imagenesFacade = new ImagenesFacade();
    $imagenesDto = new ImagenesDTO();

    $imagenesDto->setIdImagen($idImagen);
    $imagenesDto->setIdDocumentoImg($idDocumentoImg);
    $imagenesDto->setFojas($fojas);
    $imagenesDto->setRuta($ruta);
    $imagenesDto->setPosicion($posicion);
    $imagenesDto->setActivo($activo);
    $imagenesDto->setFechaImagen($fechaImagen);
    $imagenesDto->setFechaActualizacion($fechaActualizacion);
    $imagenesDto->setFechaRegistro($fechaRegistro);
    $imagenesDto->setAdjunto($adjunto);

    if (($accion == "guardar") && ($idImagen == "")) {
        /**
         * Rutina para insertar en tbldocumentosImg y tblimagenes
         * Si está definida carpetaJudicial y Actuación toma carpetaJudial como primera opción
         * @author e-israel
         */
        $param = array();
        $archivoCFormato = explode('_', $_FILES['archivo']['name']);
        if (count($archivoCFormato) == 5) {
            $param["idCarpetaJudicial"] = $archivoCFormato[1];
            $param["idActuacion"] = $archivoCFormato[2];
            $param["cveTipoDocumento"] = $archivoCFormato[3];
        } else {
            $param["idCarpetaJudicial"] = (!empty($_POST['idCarpetaJudicial'])) ? $_POST['idCarpetaJudicial'] : 0;
            $param["idActuacion"] = (!empty($_POST['idActuacion'])) ? $_POST['idActuacion'] : 0;
            $param["cveTipoDocumento"] = $_POST['cveTipoDocumento'];
        }
        $param["archivo"] = $_FILES['archivo'];
        $imagenesDto = $imagenesFacade->insertImagenes($param);
        echo $imagenesDto;
    } else if (($accion == "guardar") && ($idImagen != "")) {
        $imagenesDto = $imagenesFacade->updateImagenes($imagenesDto);
        echo $imagenesDto;
    } else if ($accion == "consultar") {
        $imagenesDto = $imagenesFacade->selectImagenes($imagenesDto);
        echo $imagenesDto;
    } else if (($accion == "baja") && ($idImagen != "")) {
        $imagenesDto = $imagenesFacade->deleteImagenes($imagenesDto);
        echo $imagenesDto;
    } else if (($accion == "seleccionar") && ($idImagen != "")) {
        $imagenesDto = $imagenesFacade->selectImagenes($imagenesDto);
        echo $imagenesDto;
    }
} else {
    exit('ERROR no hay datos a procesar.');
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}