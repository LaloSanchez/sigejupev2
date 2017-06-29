<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesordenes/SolicitudesordenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdocumentos/TiposdocumentosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposdocumentos/TiposdocumentosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesmuestras/SolicitudesmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelacioncateos/ApelacioncateosDAO.Class.php");
#include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
#include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

/*
  include_once(dirname(__FILE__) . "/../../model/dto/imagenes/ImagenesDTO.Class.php");
  include_once(dirname(__FILE__) . "/../../model/dao/imagenes/ImagenesDAO.Class.php");
 */

class ImagenesController {

    private $_proveedor;

    public function __construct() {
        
    }

    public function validarImagenes($ImagenesDto) {
        $ImagenesDto->setidImagen(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getidImagen()))));
        $ImagenesDto->setidDocumentoImg(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getidDocumentoImg()))));
        $ImagenesDto->setfojas(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getfojas()))));
        $ImagenesDto->setruta(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getruta()))));
        $ImagenesDto->setposicion(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getposicion()))));
        $ImagenesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getactivo()))));
        $ImagenesDto->setfechaImagen(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getfechaImagen()))));
        $ImagenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getfechaActualizacion()))));
        $ImagenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getfechaRegistro()))));
        $ImagenesDto->setadjunto(strtoupper(str_ireplace("'", "", trim($ImagenesDto->getadjunto()))));
        return $ImagenesDto;
    }

    public function selectImagenes($ImagenesDto, $proveedor = null) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesDao = new ImagenesDAO();
        $ImagenesDto = $ImagenesDao->selectImagenes($ImagenesDto, ' ORDER BY posicion ASC ', $proveedor);
        return $ImagenesDto;
    }

    public function insertImagenes($ImagenesDto, $proveedor = null) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesDao = new ImagenesDAO();
        $ImagenesDto = $ImagenesDao->insertImagenes($ImagenesDto, $proveedor);
        return $ImagenesDto;
    }

    public function updateImagenes($ImagenesDto, $proveedor = null) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesDao = new ImagenesDAO();
//$tmpDto = new ImagenesDTO();
//$tmpDto = $ImagenesDao->selectImagenes($ImagenesDto,$proveedor);
//if($tmpDto!=""){//$ImagenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImagenesDto = $ImagenesDao->updateImagenes($ImagenesDto, $proveedor);
        return $ImagenesDto;
//}
//return "";
    }

    public function deleteImagenes($ImagenesDto, $proveedor = null) {
        $ImagenesDto = $this->validarImagenes($ImagenesDto);
        $ImagenesDao = new ImagenesDAO();
        $ImagenesDto = $ImagenesDao->deleteImagenes($ImagenesDto, $proveedor);
        return $ImagenesDto;
    }

    /**
     * Gurada la imagen escaneada
     * @param int $tipo => 1:CarpetaJudicial, 2:Actuaciones, 3:ï¿½rden de Aprehensiï¿½n, 4:Cateo
     * @param int $id => El id de la carpeta judicial o actuaciï¿½n o aprehensiï¿½n o cateo
     * @param int $cveTipoDocumento viene de tbltiposdocumntos
     * @ruta => path/imagenes/clave-juzgado/aï¿½o-de-expediente/tipo-carpeta/no-expediente/{posicion}{extension}.ext
     * @return TRUE => El documento insertado, FALSE => ERROR JSON
     * 
     * @author e-israel
     */
    public function creaDocumento($tipo, $id, $cveTipoDocumento, $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $json = new Encode_JSON();

        #crea el objeto documento Img y asigna propiedades
        $documentosimgDto = new DocumentosimgDTO();
        $documentosimgDto->setCveTipoDocumento($cveTipoDocumento);

        if ($tipo == 1 || $tipo == 3 || $tipo == 4 || $tipo == 25 || $tipo == 29 || $tipo == 30 || $tipo == 31) {
            $documentosimgDto->setIdCarpetaJudicial($id);
            $documentosimgDto->setIdActuacion('0');
        } elseif ($tipo == 2) {
            $documentosimgDto->setIdCarpetaJudicial('0');
            $documentosimgDto->setIdActuacion($id);
        }

        /**
         * @todo incluir ID de sesiï¿½n
         */
        $documentosimgDto->setcveUsuario($_SESSION["cveUsuarioSistema"]);
        $documentosimgDto->setFechaActualizacion(date('Y-m-d'));
        $documentosimgDto->setFechaRegistro(date('Y-m-d'));

        #inserta documentosimg
        $documentosimgDao = new DocumentosimgDAO();
        $documentosimgDto = $documentosimgDao->insertDocumentosimg($documentosimgDto, $proveedor);
        return ($documentosimgDto != null) ? $documentosimgDto : utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Error al crear el documento."))));
    }

# cierra creaDocumento

    /**
     * 
     * @param int $tipo 1:CarpetaJudicial, 2:Actuaciones, 3:ï¿½rden de Aprehensiï¿½n, 4:Cateo
     * @param int $documentosimgDto es el documento padre de la imagen
     * @param int $cveTipoDocumento id del tipo de documento
     * @param string $fileExtension Extensiï¿½n del archivo a subir
     * @return JSON 
     */
    public function insertaImagen($tipo, $documentosimgDto, $cveTipoDocumento, $fileExtension, $proveedor) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
        $json = new Encode_JSON();
        $cveJuzgado = $anio = $tipoDocumento = $expediente = '';
        /**
         * @todo 1 es temporal
         */
        $fojas = 1;

        # devuelve clavejuzgado y aï¿½o para url
        if ($tipo == 2) { # 2 actuacion
            $actuacionesDto = new ActuacionesDTO();
            $actuacionesDto->setIdActuacion($documentosimgDto->getIdActuacion());
            $actuacionesDao = new ActuacionesDAO(); # $actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null
            $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
            $cveJuzgado = $actuacionesDto[0]->getCveJuzgado();
            $anio = $actuacionesDto[0]->getAnio();
            $expediente = $actuacionesDto[0]->getNumero();
            $cveTipoCarpeta = $actuacionesDto[0]->getCveTipoCarpeta();
        } elseif ($tipo == 3) { #tipo de documento 18 es ï¿½rden de aprehensiï¿½n
            $ordenesDto = new OrdenesDTO();
            $ordenesDto->setIdOrden($documentosimgDto->getIdCarpetaJudicial());
            $ordenesDao = new OrdenesDAO();
            $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto, '', '', $proveedor);

            $solicitudesordenesDto = new SolicitudesordenesDTO;
            $solicitudesordenesDto->setIdSolicitudOrden($ordenesDto[0]->getIdSolicitudOrden());
            $solicitudesordenesDao = new SolicitudesordenesDAO();
            $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesordenes($solicitudesordenesDto, '', $proveedor);

            $cveJuzgado = $solicitudesordenesDto[0]->getCveJuzgadoDesahoga();
            $anio = $ordenesDto[0]->getAnioOrden();
            $expediente = $ordenesDto[0]->getNumeroOrden();
            $cveTipoCarpeta = 10; # de tbltiposcarpetas
        } elseif ($tipo == 4) {#tipo de documento 19 es cateo
            $cateosDto = new CateosDTO();
            $cateosDto->setIdCateo($documentosimgDto->getIdCarpetaJudicial());
            $cateosDao = new CateosDAO();
            $cateosDto = $cateosDao->selectCateos($cateosDto, '', '', $proveedor);

            $solicitudescateosDto = new SolicitudescateosDTO();
            $solicitudescateosDto->setIdSolicitudCateo($cateosDto[0]->getIdSolicitudCateo());
            $solicitudescateosDao = new SolicitudescateosDAO();
            $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto, '', '', $proveedor);

            $cveJuzgado = $solicitudescateosDto[0]->getCveJuzgadoDesahoga();
            $anio = $cateosDto[0]->getAnioCateo();
            $expediente = $cateosDto[0]->getNumeroCateo();
            $cveTipoCarpeta = 9; # de tbltiposcarpetas
        } else { # default carpeta judicial
            if ($cveTipoDocumento == 2) { # es Amparo
                $amparosDto = new AmparosDTO();
                $amparosDto->setIdAmparo($documentosimgDto->getIdCarpetaJudicial());
                $amparosDao = new AmparosDAO();
                $amparosDto = $amparosDao->selectAmparos($amparosDto);
                $cveJuzgado = $amparosDto[0]->getCveJuzgado();
                $anio = $amparosDto[0]->getAniAmparo();
                $expediente = $amparosDto[0]->getNumAmparo();
                $cveTipoCarpeta = 8;
            } elseif ($cveTipoDocumento == 8) { # es exhorto
                $exhortosDto = new ExhortosDTO();
                $exhortosDto->setIdExhorto($documentosimgDto->getIdCarpetaJudicial());
                $exhortosDao = new ExhortosDAO();
                $exhortosDto = $exhortosDao->selectExhortos($exhortosDto);
                $cveJuzgado = $exhortosDto[0]->getCveJuzgado();
                $anio = $exhortosDto[0]->getAniExhorto();
                $expediente = $exhortosDto[0]->getNumExhorto();
                $cveTipoCarpeta = 7;
            } elseif ($cveTipoDocumento == 25) { # es toma de muestra
                $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                $solicitudesmuestrasDto->setIdSolicitudMuestra($documentosimgDto->getIdCarpetaJudicial());
                $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto, "", "", $proveedor);
                
                $cveJuzgado = $solicitudesmuestrasDto[0]->getCveJuzgado();
                $anio = $solicitudesmuestrasDto[0]->getAnio();
                $expediente = $solicitudesmuestrasDto[0]->getNumero();
                $cveTipoCarpeta = 11;
            } elseif ($cveTipoDocumento == 29 || $cveTipoDocumento == 30 || $cveTipoDocumento == 31) { # es Apelación | acuerdo apelación | resolución apelación
                
                $apelacioncateosDto = new ApelacioncateosDTO();
                $apelacioncateosDao = new ApelacioncateosDAO();
                $apelacioncateosDto->setIdApelacionCateo($documentosimgDto->getIdCarpetaJudicial());
                $apelacioncateosDto = $apelacioncateosDao->selectApelacioncateos($apelacioncateosDto, "", $proveedor);
                
                $cateosDto = new CateosDTO();
                $cateosDao = new CateosDAO();
                $cateosDto->setIdCateo($apelacioncateosDto[0]->getIdCateo());
                $cateosDto = $cateosDao->selectCateos($cateosDto, "", "", $proveedor);
                
                $solicitudescateosDto = new SolicitudescateosDTO();
                $solicitudescateosDao = new SolicitudescateosDAO();
                $solicitudescateosDto->setIdSolicitudCateo($cateosDto[0]->getIdSolicitudCateo());
                $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto, "", "", $proveedor);
                
                $cveJuzgado = $solicitudescateosDto[0]->getCveJuzgadoDesahoga();
                $anio = $cateosDto[0]->getAnioCateo();
                $expediente = $cateosDto[0]->getNumeroCateo();
                
                ###
                if($cveTipoDocumento == 29)
                    $cveTipoCarpeta = 13;
                elseif($cveTipoDocumento == 30)
                    $cveTipoCarpeta = 14;
                elseif($cveTipoDocumento == 31)
                    $cveTipoCarpeta = 15;
                
            } else {
                $carpetasJudicialesDto = new CarpetasJudicialesDTO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($documentosimgDto->getIdCarpetaJudicial());
                $carpetasJudicialesDao = new CarpetasJudicialesDAO();
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, '', $proveedor);

                $cveJuzgado = $carpetasJudicialesDto[0]->getCveJuzgado();
                $anio = $carpetasJudicialesDto[0]->getAnio();
                $expediente = $carpetasJudicialesDto[0]->getNumero();
                $cveTipoCarpeta = $carpetasJudicialesDto[0]->getCveTipoCarpeta();
            }
        }


        #devuelve descripcion tipo carpeta
        $tiposCarpetasDTO = new TiposcarpetasDTO();
        $tiposCarpetasDTO->setCveTipoCarpeta($cveTipoCarpeta);
        $tiposCarpetasDAO = new TiposcarpetasDAO();
        $tiposCarpetasDTO = $tiposCarpetasDAO->selectTiposcarpetas($tiposCarpetasDTO, '', $proveedor);
        $nombreTipoCarpeta = str_ireplace(' ', '_', $tiposCarpetasDTO[0]->getDesTipoCarpeta());

        # devuelve extensiï¿½n del tipo de documento
        $tiposDocumentosDto = new TiposdocumentosDTO();
        $tiposDocumentosDto->setCveTipodocumento($cveTipoDocumento);
        $tiposDocumentosDao = new TiposdocumentosDAO();
        $tiposDocumentosDto = $tiposDocumentosDao->selectTiposDocumentos($tiposDocumentosDto, '', $proveedor);
        $tipoDocumento = $tiposDocumentosDto[0]->getExtencion();

        if ($documentosimgDto != '') {
            #crea ruta fï¿½sica de directorios
            $path = "../../../imagenes"; //Nodo Raiz
            $ruta = $path . '/' . $cveJuzgado . '/' . $anio . '/' . $nombreTipoCarpeta . '/' . $expediente;
            $this->CreaDirectorio($ruta);

            if ($this->ExisteDirectorio($ruta)) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($documentosimgDto->getIdDocumentoImg());
                $imagenesDao = new ImagenesDAO();
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto, $order = "ORDER BY idImagen DESC", $proveedor);
                $posicion = 1;
                if ($imagenesDto != '' && count($imagenesDto) > 0) {
                    $posicion = $imagenesDto[0]->getPosicion();
                    $idImagen = $imagenesDto[0]->getIdImagen() + 1;
                    ++$posicion;
                }

                # arma ruta con posicion
                $ruta = $path . '/' . $cveJuzgado . '/' . $anio . '/' . $nombreTipoCarpeta . '/' . $expediente . '/' . $idImagen . $tipoDocumento . '.' . $fileExtension;
                unset($imagenesDto);
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($documentosimgDto->getIdDocumentoImg());
                $imagenesDto->setRuta($ruta);
                $imagenesDto->setPosicion($posicion);
                $imagenesDto->setFojas($fojas);
                $imagenesDto->setAdjunto('N');
                $imagenesDto = $imagenesDao->insertImagenes($imagenesDto, $proveedor);

                if ($imagenesDto != "") {
                    $imagenesDto = $imagenesDto[0];
                    $ruta = $path . '/' . $cveJuzgado . '/' . $anio . '/' . $nombreTipoCarpeta . '/' . $expediente . '/' . $imagenesDto->getIdImagen() . $tipoDocumento . '.' . $fileExtension;
                    $imagenesDto->setRuta($ruta);
                    $imagenesDto = $imagenesDao->updateImagenes($imagenesDto, $proveedor);

                    if ($imagenesDto != "") {  # correcto
                        $imagenesDto = $imagenesDto[0];
                        //$proveedor->execute("COMMIT");
                        $json = new Encode_JSON();
                        //$proveedor->close();
                        return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "OK", "ruta" => $imagenesDto->getRuta(), 'idImagen' => $imagenesDto->getIdImagen()))));
                    } else {
                        # error al crear el directorio
                        $proveedor->execute("ROLLBACK");
                        $json = new Encode_JSON();
                        $proveedor->close();
                        return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existe relacion del tipo de numero con el documento "))));
                    }
                } else {
                    # error al crear el directorio
                    #$proveedor->execute("ROLLBACK");
                    $json = new Encode_JSON();
                    $proveedor->close();
                    return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existe relacion del tipo de numero con el documento "))));
                }
            } else {
                # error al crear el directorio
                $proveedor->execute("ROLLBACK");
                $json = new Encode_JSON();
                $proveedor->close();
                return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existe relacion del tipo de numero con el documento "))));
            }
        } else {
            # error al insertar
            $proveedor->execute("ROLLBACK");
            $json = new Encode_JSON();
            $proveedor->close();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existe relacion del tipo de numero con el documento "))));
        }
    }

# cierra insertaImagen

    public function getImagenes($idCarpetaJudicial = 0, $idActuacion = 0, $cveTipoDocumento = 0, $proveedor = null) {

        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
        $idReferencia = "";
        $principal = "";
        $cveTipoDocumento = "";
        #$cveTipoActuacion = "";
        $cveDocumento = $cveTipoDocumento;

        if (($idCarpetaJudicial > 0) && ($idActuacion == 0)) {
            $carpetasJudicialesDto = new CarpetasJudicialesDTO();
            $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $carpetasJudicialesDao = new CarpetasJudicialesDAO();
            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasJudiciales($carpetasJudicialesDto);
            if ($carpetasJudicialesDto != "") {
                $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                $idReferencia = $carpetasJudicialesDto->getIdCarpetaJudicial();
                #$cveTipoActuacion = $carpetasJudicialesDto->getCveTipoNumero();
                $principal = "S";
                $documentosimgDto = new DocumentosimgDTO();
                $documentosimgDto->setIdCarpetaJudicial($idReferencia);
                $documentosimgDto->setActivo("S");
                $documentosDao = new DocumentosimgDAO();
                $documentosimgDto = $documentosDao->selectDocumentosimg($documentosimgDto);

                if ($documentosimgDto != "") {
                    $documentosimgDto = $documentosimgDto[0];
                    $cveDocumento = $documentosimgDto->getIdDocumentoImg();

                    #$tiposDocumentosDto = new TiposDocumentosDTO();
                    #$tiposDocumentosDto->setCveDocumento($cveDocumento);
                    #$tiposDocumentosDto->setCveTipoActuacion($cveTipoActuacion);
                    #$tiposDocumentosDto->setPrincipal($principal);
                    #$tiposDocumentosDao = new TiposDocumentosDAO();
                    #$tiposDocumentosDto = $tiposDocumentosDao->selectTiposDocumentos($tiposDocumentosDto);
                    #if ($tiposDocumentosDto != "") {
                    #    $tiposDocumentosDto = $tiposDocumentosDto[0];
                    #$cveTipoDocumento = $documentosimgDto->getIdDocumentoImg();
                    #}
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existe el documento en el catalogo"))));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No se encontro el id proporcionado"))));
            }
        } else if (($idCarpetaJudicial == 0) && ($idActuacion > 0 )) {
            $actuacionesDto = new ActuacionesDTO();
            $actuacionesDto->setIdActuacion($idActuacion);
            $actuacionesDao = new ActuacionesDAO();
            $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto);

            if ($actuacionesDto != "") {
                $actuacionesDto = $actuacionesDto[0];
                if ($actuacionesDto->getIdReferencia() > 0) {
                    $carpetasJudicialesDto = new CarpetasJudicialesDTO();
                    $carpetasJudicialesDto->setIdCarpetaJudicial($actuacionesDto->getIdReferencia());
                    $carpetasJudicialesDao = new CarpetasJudicialesDAO();
                    $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasJudiciales($carpetasJudicialesDto);
                    if ($carpetasJudicialesDto != "") {
                        $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                        $idReferencia = $actuacionesDto->getIdActuacion();
                        $principal = "N";
                        $documentosimgDto = new DocumentosimgDTO();
                        $documentosimgDto->setCveTipoDocumento($cveTipoDocumento);
                        $documentosimgDto->setIdActuacion($idReferencia);
                        $documentosimgDto->setActivo("S");
                        $documentosDao = new DocumentosimgDAO();
                        $documentosimgDto = $documentosDao->selectDocumentosimg($documentosimgDto);

                        if ($documentosimgDto != "") {
                            $documentosimgDto = $documentosimgDto[0];
                            $cveDocumento = $documentosimgDto->getIdDocumentoImg();
                        } else {
                            $json = new Encode_JSON();
                            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No se encontrï¿½ el documento en el catï¿½logo"))));
                        }
                    } else {
                        $json = new Encode_JSON();
                        return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No se encontro el id proporcionado"))));
                    }
                } else {
                    $idReferencia = $actuacionesDto->getIdActuacion();
                    $principal = "N";
                }
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Error al recibir los datos " . $idCarpetaJudicial . ' ' . $idActuacion))));
        }

        if (($cveDocumento != "") && ($idReferencia != "")) {
            $documentosImgDto = new DocumentosImgDTO();
            if (isset($actuacionesDto))
                $documentosImgDto->setIdActuacion($idReferencia);
            else
                $documentosImgDto->setIdCarpetaJudicial($idReferencia);# falata revisar el primer if de arriba
            $documentosImgDto->setCveTipoDocumento($cveTipoDocumento);
            $documentosImgDao = new DocumentosImgDAO();
            $documentosImgDto = $documentosImgDao->selectDocumentosImg($documentosImgDto);
            if ($documentosImgDto != "") {
                $documentosImgDto = $documentosImgDto[0];
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($documentosImgDto->getIdDocumentoImg());
                $imagenesDto->setActivo("S");
                $imagenesDto->setAdjunto("S");
                $imagenesDao = new ImagenesDAO();
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                if ($imagenesDto != "") {
//                    $dtoToJson = new DtoToJson($imagenesDto);
//                    return $dtoToJson->toJson();
                    $json = '';
                    $json .= '{';
                    $json .= '"totalCount": "' . count($imagenesDto) . '",';
                    $json .= '"text": "",';
                    $json .= '"data": [';
                    foreach ($imagenesDto as $imagenDto) {
                        $json .= '{';
                        $json .= '"idImagen": "' . $imagenDto->getIdImagen() . '",';
                        $json .= '"idDocumentoImg": "' . $imagenDto->getIdDocumentoImg() . '",';
                        $json .= '"ruta": "' . $imagenDto->getRuta() . '",';
                        $json .= '"posicion": "' . $imagenDto->getPosicion() . '",';
                        $json .= '"activo": "' . $imagenDto->getActivo() . '",';
                        $json .= '"fechaImagen": "' . $imagenDto->getFechaImagen() . '",';
                        $json .= '"fechaActualizacion": "' . $imagenDto->getFechaActualizacion() . '",';
                        $json .= '"fechaRegistro": "' . $imagenDto->getFechaRegistro() . '",';
                        $json .= '"adjunto": "' . $imagenDto->getAdjunto() . '",';
                        $json .= '"fojas": "' . $imagenDto->getFojas() . '",';
                        $json .= '"DatosCarpetajudicial":';
                        $json .= '{';
//                        if (($idCarpetaJudicial >= 0) && ($idActuacion > 0 )) {
//                            if ($tiposActuacionesMateriasDto->getCveTipoActuacion() == 5) {
//                                $json .= '"idCarpetaJudicial": "0",';
//                                $json .= '"numero": "0",';
//                                $json .= '"anio": "0",';
//                                $json .= '"cveTipoNumero": "0",';
//                                $json .= '"nvaInstancia": "0",';
//                                $json .= '"cveAdscripcion": "0",';
//                                $json .= '"cveMateria": "0",';
//                                $json .= '"cveOficialia": "0"';
//                            } else {
//                                $json .= '"idCarpetaJudicial": "' . $carpetasJudicialesDto->getIdCarpetaJudicial() . '",';
//                                $json .= '"numero": "' . $carpetasJudicialesDto->getNumero() . '",';
//                                $json .= '"anio": "' . $carpetasJudicialesDto->getAnio() . '",';
//                                $json .= '"cveTipoNumero": "' . $carpetasJudicialesDto->getCveTipoNumero() . '",';
//                                $json .= '"nvaInstancia": "' . $carpetasJudicialesDto->getNvaInstancia() . '",';
//                                $json .= '"cveAdscripcion": "' . $carpetasJudicialesDto->getCveAdscripcion() . '",';
//                                $json .= '"cveMateria": "' . $carpetasJudicialesDto->getCveMateria() . '",';
//                                $json .= '"cveOficialia": "' . $carpetasJudicialesDto->getCveOficialia() . '"';
//                            }
//                        } else {
//                            $json .= '"idCarpetaJudicial": "' . $carpetasJudicialesDto->getIdCarpetaJudicial() . '",';
//                            $json .= '"numero": "' . $carpetasJudicialesDto->getNumero() . '",';
//                            $json .= '"anio": "' . $carpetasJudicialesDto->getAnio() . '",';
//                            $json .= '"cveTipoNumero": "' . $carpetasJudicialesDto->getCveTipoNumero() . '",';
//                            $json .= '"nvaInstancia": "' . $carpetasJudicialesDto->getNvaInstancia() . '",';
//                            $json .= '"cveAdscripcion": "' . $carpetasJudicialesDto->getCveAdscripcion() . '",';
//                            $json .= '"cveMateria": "' . $carpetasJudicialesDto->getCveMateria() . '",';
//                            $json .= '"cveOficialia": "' . $carpetasJudicialesDto->getCveOficialia() . '"';
//                        }
                        $json .= '}';
                        $json .= '},';
                    }
                    $json = substr($json, 0, -1);
                    $json .= '],';
                    $json .= '"tipoDocumento": {';
                    #datos imagenes documento
                    $json .= '"idDocumentoImg": "' . $documentosImgDto->getIdDocumentoImg() . '",';
                    $json .= '"cveTipoDocumento": "' . $documentosImgDto->getCveTipoDocumento() . '",';
                    $json .= '"idReferencia": "' . (isset($actuacionesDto) ? $documentosImgDto->getIdActuacion() : $documentosImgDto->getIdCarpetaJudicial()) . '",';
                    #datos tipos documento
                    /**
                     * @todo verificar donde se ocupa
                     */
//                    $json .= '"descTipoDocumento": "' . $tiposDocumentosDto->getDescTipoDocumento() . '",';
//                    $json .= '"extencion": "' . $tiposDocumentosDto->getExtencion() . '",';
//                    $json .= '"cveDocumento": "' . $tiposDocumentosDto->getCveDocumento() . '",';
//                    $json .= '"cveTipoActuacion": "' . $tiposDocumentosDto->getCveTipoActuacion() . '",';
//                    $json .= '"principal": "' . $tiposDocumentosDto->getPrincipal() . '"';
                    $json .= '}';
                    $json .= '}';
                    return $json;
                } else {
                    $json = new Encode_JSON();
                    return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existen imagenes a mostrar"))));
                }
            } else {
                $json = new Encode_JSON();
                return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "No existen imagenes a mostrar"))));
            }
        } else {
            $json = new Encode_JSON();
            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Ocurrio un error al buscar las imagenes"))));
        }
    }

    public function actualizaOrden($datosImagenes = "", $idCarpetaJudicial = 0, $idActuacion = 0, $cveTipoDocumento = 0, $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
        if ($datosImagenes != "") {
            $flagcambios = true;
            $imagenesDao = new ImagenesDAO();
            #print_r($datosImagenes);
            #exit();
            foreach ($datosImagenes["data"] as $datosImagen) {
                $imagenesDto = new ImagenesDTO();
                if ($datosImagen["posicionOrigen"] != $datosImagen["posicionFinal"]) {
                    $imagenesDto->setIdImagen($datosImagen["idImagen"]);
                    $imagenesDto->setPosicion($datosImagen["posicionFinal"]);
                    $imagenesDto = $imagenesDao->updateImagenPosicion($imagenesDto);
                    if ($imagenesDto != "") {
                        if ($imagenesDto[0]->getPosicion() != $datosImagen["posicionFinal"]) {
                            $flagcambios = false;
                            break;
                        }
                    }
                }
            }
            if ($flagcambios) {
                //commit                
                echo $this->getImagenes($idCarpetaJudicial, $idActuacion, $cveTipoDocumento);
            } else {
//                rollbarck
                echo "ERROR";
            }
        } else {
            //mensaje error
        }
    }

    public function borrarImagenes($idImagenesBorrar = "", $idCarpetaJudicial = "", $idActuacion = "", $proveedor = null) {
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
//        echo $idImagenesBorrar;
        $movimiento = "";
        if ($idImagenesBorrar != "") {
            $arrayImagenesBorrar = explode(",", $idImagenesBorrar);
            $imagenesDao = new ImagenesDAO();
            foreach ($arrayImagenesBorrar as $idImagenBorrar) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdImagen($idImagenBorrar);
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                if ($imagenesDto[0] != "") {
                    if ($imagenesDto[0]->getActivo() == "S") {
                        $imagenesUpdateDto = new ImagenesDTO();
                        $imagenesUpdateDto->setIdImagen($idImagenBorrar);
                        $imagenesUpdateDto->setActivo("N");
//                        $imagenesUpdateDto->setAdjunto("N");
                        $imagenesUpdateDto = $imagenesDao->updateImagenActivo($imagenesUpdateDto);
                        if ($imagenesUpdateDto != "") {
                            if ($imagenesUpdateDto[0]->getActivo() == "N") {
                                $rutaArchivo = $imagenesUpdateDto[0]->getRuta();
                                if (file_exists($rutaArchivo)) {
                                    if (@unlink($rutaArchivo)) {
                                        $imagenesUpdateDto = new ImagenesDTO();
                                        $imagenesUpdateDto->setIdImagen($idImagenBorrar);
                                        $imagenesUpdateDto->setAdjunto("N");
                                        $imagenesUpdateDto = $imagenesDao->updateImagenActivo($imagenesUpdateDto);
                                        if ($imagenesUpdateDto[0]->getAdjunto() == "N") {
                                            $movimiento .= " *se eliminï¿½ correctamente la imagen de la ruta:" . $rutaArchivo . " id:" . $idImagenBorrar;
                                        }
                                    } else {
                                        $movimiento .= " *no se pudo eliminar la imagen fï¿½sica en la ruta:" . $rutaArchivo . " id:" . $idImagenBorrar;
                                    }
                                } else {
                                    $movimiento .= " *no se encontrï¿½ la imagen fï¿½sica en la ruta:" . $rutaArchivo . " id:" . $idImagenBorrar;
                                }
                            }
                        } else {
                            $movimiento .= " *error al desactivar el registro en la base de datos id:" . $idImagenBorrar;
                        }
                    } else {
                        $movimiento .= " *registro previamente eliminado id:" . $idImagenBorrar;
                    }
                } else {
                    $movimiento .= " *No se encontrï¿½ el registro de la imagen en la base de datos id:" . $idImagenBorrar;
                }
            }
        } else {
            $movimiento .= " *No se proporcionaron id de imagenes para eliminar";
        }

//        $bitacorasDto = new BitacorasDTO();
//        $bitacorasDao = new BitacorasDAO();
//        $bitacorasDto->setCveAccion(108);
//        $bitacorasDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
//        $bitacorasDto->setCvePerfil($_SESSION["cvePerfil"]);
//        $bitacorasDto->setFechaMovimiento($bitacorasDao->getFecha());
//        $bitacorasDto->setMovimiento(strtoupper($movimiento));
//        $bitacorasDto->setCveSistema($_SESSION['cveSistema']);
//        $bitacorasDto->setCveAdscripcion($_SESSION["cveAdscripcion"]);
//        $bitacorasDto = $bitacorasDao->insertBitacora($bitacorasDto);
        echo $this->getImagenes($idCarpetaJudicial, $idActuacion);
    }

    private function CreaDirectorio($NomDirectorio) { //Crea el directorio deonde se almacenara la imagen
        $VectorDirectorio = explode("/", $NomDirectorio);
        $ruta = ".";
        foreach ($VectorDirectorio as $Carpeta) {
            if ($Carpeta != "." && trim($Carpeta) != "") {
                $ruta = $ruta . "/" . $Carpeta;
                error_log($ruta . "ruta de digitalizacion");
                if (!file_exists($ruta)) {
                    mkdir($ruta, 0777);
                }
            }
        }
    }

    /**
     * @param int $tipo 1:CarpetaJudicial, 2:Actuaciones
     * @param int $id el ID del elemento $tipo
     * @param int $cveTipoDocumento id del tipo de documento
     * @return array
     *      'status' => 1:Correcto, 0:Error, 
     *      'idImagen' => ID de imagen de tabla tblimagenes
     *      'ruta' => ../../../imagenes/cveJuzgado/anio/nombre_Tipo_Carpeta/expediente/idImagenTipoDocumento.fileExtension
     *      'message' => Texto que muestra resultado de la funciï¿½n
     */
    public function insertaImagenGlobal($tipo, $id, $cveTipoDocumento, $proveedor = null) {

        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $fileExtension = 'pdf';

        $cveJuzgado = $anio = $expediente = $cveTipoCarpeta = $tipoDocumento = '';
        /**
         * @todo 1 es temporal
         */
        $fojas = 1;

        # devuelve clavejuzgado y aï¿½o para url
        if ($tipo == 2) { # 2 actuacion
            $actuacionesDto = new ActuacionesDTO();
            $actuacionesDto->setIdActuacion($id);
            $actuacionesDao = new ActuacionesDAO();
            $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);

            $cveJuzgado = $actuacionesDto[0]->getCveJuzgado();
            $anio = $actuacionesDto[0]->getAnio();
            $expediente = $actuacionesDto[0]->getNumero();
            $cveTipoCarpeta = $actuacionesDto[0]->getCveTipoCarpeta();
        } else { # default carpeta judicial
            $carpetasJudicialesDto = new CarpetasJudicialesDTO();
            $carpetasJudicialesDto->setIdCarpetaJudicial($id);
            $carpetasJudicialesDao = new CarpetasJudicialesDAO();
            $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, '', $proveedor);

            $cveJuzgado = $carpetasJudicialesDto[0]->getCveJuzgado();
            $anio = $carpetasJudicialesDto[0]->getAnio();
            $expediente = $carpetasJudicialesDto[0]->getNumero();
            if ($cveTipoDocumento == 2) { # es Amparo
                $amparosDto = new AmparosDTO();
                $amparosDto->setIdAmparo($id);
                $amparosDao = new AmparosDAO();
                $amparosDto = $amparosDao->selectAmparos($amparosDto);
                $cveJuzgado = $amparosDto[0]->getCveJuzgado();
                $anio = $amparosDto[0]->getAniAmparo();
                $expediente = $amparosDto[0]->getNumAmparo();
                $cveTipoCarpeta = 8;
            } elseif ($cveTipoDocumento == 8) { # es exhorto
                $exhortosDto = new ExhortosDTO();
                $exhortosDto->setIdExhorto($id);
                $exhortosDao = new ExhortosDAO();
                $exhortosDto = $exhortosDao->selectExhortos($exhortosDto);
                $cveJuzgado = $exhortosDto[0]->getCveJuzgado();
                $anio = $exhortosDto[0]->getAniExhorto();
                $expediente = $exhortosDto[0]->getNumExhorto();
                $cveTipoCarpeta = 7;
            } elseif ($cveTipoDocumento == 25) { # es toma de muestra
                $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                $solicitudesmuestrasDto->setIdSolicitudMuestra($id);

                $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto, "", "", $proveedor);
                $cveJuzgado = $solicitudesmuestrasDto[0]->getCveJuzgado();
                $anio = $solicitudesmuestrasDto[0]->getAnio();
                $expediente = $solicitudesmuestrasDto[0]->getNumero();
                $cveTipoCarpeta = 11;
                
                } elseif ($cveTipoDocumento == 29 || $cveTipoDocumento == 30 || $cveTipoDocumento == 31) { # es Apelación | acuerdo apelación | resolución apelación
                
                $apelacioncateosDto = new ApelacioncateosDTO();
                $apelacioncateosDao = new ApelacioncateosDAO();
                $apelacioncateosDto->setIdApelacionCateo($id);
                $apelacioncateosDto = $apelacioncateosDao->selectApelacioncateos($apelacioncateosDto);
                
                $cateosDto = new CateosDTO();
                $cateosDao = new CateosDAO();
                $cateosDto->setIdCateo($apelacioncateosDto[0]->getIdCateo());
                $cateosDto = $cateosDao->selectCateos($cateosDto);
                
                $solicitudescateosDto = new SolicitudescateosDTO();
                $solicitudescateosDao = new SolicitudescateosDAO();
                $solicitudescateosDto->setIdSolicitudCateo($cateosDto[0]->getIdSolicitudCateo());
                $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto);
                
                $cveJuzgado = $solicitudescateosDto[0]->getCveJuzgadoDesahoga();
                $anio = $cateosDto[0]->getAnioCateo();
                $expediente = $cateosDto[0]->getNumeroCateo();
                
                ###
                if($cveTipoDocumento == 29)
                    $cveTipoCarpeta = 13;
                elseif($cveTipoDocumento == 30)
                    $cveTipoCarpeta = 14;
                elseif($cveTipoDocumento == 31)
                    $cveTipoCarpeta = 15;
                
            } else {
                $carpetasJudicialesDto = new CarpetasJudicialesDTO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($id);
                $carpetasJudicialesDao = new CarpetasJudicialesDAO();
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto, '', $proveedor);

                $cveJuzgado = $carpetasJudicialesDto[0]->getCveJuzgado();
                $anio = $carpetasJudicialesDto[0]->getAnio();
                $expediente = $carpetasJudicialesDto[0]->getNumero();
                $cveTipoCarpeta = $carpetasJudicialesDto[0]->getCveTipoCarpeta();
            }
        }

        #devuelve descripcion tipo carpeta
        $tiposCarpetasDTO = new TiposcarpetasDTO();
        $tiposCarpetasDTO->setCveTipoCarpeta($cveTipoCarpeta);
        $tiposCarpetasDAO = new TiposcarpetasDAO();
        $tiposCarpetasDTO = $tiposCarpetasDAO->selectTiposcarpetas($tiposCarpetasDTO, '', $proveedor);
        $nombreTipoCarpeta = str_ireplace(' ', '_', $tiposCarpetasDTO[0]->getDesTipoCarpeta());

        # devuelve extensiï¿½n del tipo de documento
        $tiposDocumentosDto = new TiposdocumentosDTO();
        $tiposDocumentosDto->setCveTipodocumento($cveTipoDocumento);
        $tiposDocumentosDao = new TiposdocumentosDAO();
        $tiposDocumentosDto = $tiposDocumentosDao->selectTiposDocumentos($tiposDocumentosDto, '', $proveedor);
        $tipoDocumento = $tiposDocumentosDto[0]->getExtencion();

        # crea documento
        $documentosimgDto = new DocumentosimgDTO();
        $documentosimgDao = new DocumentosimgDAO();

        if ($tipo == 2) { # es actuaciï¿½n
            $documentosimgDto->setIdActuacion($id);
            $documentosimgDto->setIdCarpetaJudicial(null);
        } else { # es carpeta judicial
            $documentosimgDto->setIdActuacion(null);
            $documentosimgDto->setIdCarpetaJudicial($id);
        }
        $documentosimgDto->setCveTipoDocumento($cveTipoDocumento);

        #verificamos si existe el documento
        $documentosimgDto = $documentosimgDao->selectDocumentosimg($documentosimgDto);

        if ($documentosimgDto == "" || count($documentosimgDto) <= 0) {
            $documentosimgDto = new DocumentosimgDTO();
            if ($tipo == 2) { # es actuaciï¿½n
                $documentosimgDto->setIdActuacion($id);
                $documentosimgDto->setIdCarpetaJudicial(null);
            } else { # es carpeta judicial
                $documentosimgDto->setIdActuacion(null);
                $documentosimgDto->setIdCarpetaJudicial($id);
            }
            $documentosimgDto->setCveTipoDocumento($cveTipoDocumento);
            /**
             * @todo verificar 
             *      cveUsuario
             *      observaciones
             */
            $documentosimgDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
            $documentosimgDto->setObservaciones('');
            $documentosimgDto->setActivo('S');
            $documentosimgDto = $documentosimgDao->insertDocumentosimg($documentosimgDto);
        }
        if ($documentosimgDto != '') {
            $documentosimgDto = $documentosimgDto[0];
            #crea ruta fï¿½sica de directorios
            $path = "../../../imagenes"; //Nodo Raiz
            $ruta = $path . '/' . $cveJuzgado . '/' . $anio . '/' . $nombreTipoCarpeta . '/' . $expediente;

            if (!is_dir($ruta)) {
                $this->CreaDirectorio($ruta);
            }

            if (is_dir($ruta)) {
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($documentosimgDto->getIdDocumentoImg());
                $imagenesDao = new ImagenesDAO();
                $imagenesDto = $imagenesDao->selectImagenes($imagenesDto, $order = "ORDER BY idImagen DESC", $proveedor);
                $posicion = 1;
                $idImagen = 0;
                if ($imagenesDto != '' && count($imagenesDto) > 0) {
                    $posicion = $imagenesDto[0]->getPosicion();
                    $idImagen = $imagenesDto[0]->getIdImagen() + 1;
                    ++$posicion;
                }

                # arma ruta con posicion
                $ruta = $ruta . '/' . $idImagen . $tipoDocumento . '.' . $fileExtension;

                unset($imagenesDto);
                $imagenesDto = new ImagenesDTO();
                $imagenesDto->setIdDocumentoImg($documentosimgDto->getIdDocumentoImg());
                $imagenesDto->setRuta($ruta);
                $imagenesDto->setPosicion($posicion);
                $imagenesDto->setFojas($fojas);
                $imagenesDto->setAdjunto('N');
                $imagenesDto = $imagenesDao->insertImagenes($imagenesDto, $proveedor);

                if ($imagenesDto != "") {
                    $imagenesDto = $imagenesDto[0];
                    $ruta = $path . '/' . $cveJuzgado . '/' . $anio . '/' . $nombreTipoCarpeta . '/' . $expediente . '/' . $imagenesDto->getIdImagen() . $tipoDocumento . '.' . $fileExtension;
                    $imagenesDto->setRuta($ruta);
                    $imagenesDto = $imagenesDao->updateImagenes($imagenesDto, $proveedor);

                    if ($imagenesDto != null) { # correcto
                        $imagenesDto = $imagenesDto[0];
                        $proveedor->execute("COMMIT");
                        return array('status' => 1, 'idImagen' => $imagenesDto->getIdImagen(), 'ruta' => $imagenesDto->getRuta(), 'message' => 'Archivo agregado correctamente');
                    } else {
                        $proveedor->execute("ROLLBACK");
                        $proveedor->close();
                        return array('status' => 0, 'idImagen' => 0, 'ruta' => '', 'message' => 'ERROR al actualizar la ruta de la imagen.');
                    }
                } else {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return array('status' => 0, 'idImagen' => 0, 'ruta' => '', 'message' => 'ERROR al insertar los datos de la imagen.');
                }
            } else {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return array('status' => 0, 'idImagen' => 0, 'ruta' => '', 'message' => 'ERROR al crear el ï¿½rbol de directorios de la imagen. [' . $ruta . '].');
            }
        } else {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return array('status' => 0, 'idImagen' => 0, 'ruta' => '', 'message' => 'ERROR al crear el documentoIMG.');
        }
    }

# cierra insertaImagenglobal

    private function ExisteDirectorio($NomDirectorio) {
        if (is_dir($NomDirectorio) == true)
            return true;
        return false;
    }

}

@$action = $_POST['action'];
if ($action == "actualizaOrden") {
    @$datosImagenes = $_POST['datosImagenes'];
    @$idCarpetaJudicial = $_POST['idCarpetaJudicial'];
    @$idActuacion = $_POST['idActuacion'];
    @$idAudiencia = isset($_POST['idAudiencia']) ? $_POST['idAudiencia'] : NULL;
    @$cveTipoDocumento = $_POST['cveTipoDocumento'];
    $ImagenesController = new ImagenesController();
    $ImagenesController->actualizaOrden(json_decode($datosImagenes, true), $idCarpetaJudicial, $idActuacion, $cveTipoDocumento);
} else if ($action == "borrarImagenes") {
    @$idImagenesBorrar = $_POST['idImagenesBorrar'];
    @$idCarpetaJudicial = $_POST['idCarpetaJudicial'];
    @$idActuacion = $_POST['idActuacion'];
    @$idAudiencia = isset($_POST['idAudiencia']) ? $_POST['idAudiencia'] : NULL;
    $ImagenesController = new ImagenesController();
    $ImagenesController->borrarImagenes($idImagenesBorrar, $idCarpetaJudicial, $idActuacion, $idAudiencia);
}
?>