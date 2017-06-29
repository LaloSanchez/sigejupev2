<?php

//ini_set("error_log", dirname(__FILE__) . "/../../../logs/CargaImagenesFirmaController.log");
//ini_set("log_errors", 1);
include_once(dirname(__FILE__) . "/../../../webservice/cliente/reportes/ReportesClienteGeneral.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/firmaelectronica/FirmaElectronicaCliente.php");

class CargaImagenesFirmaController {

    private $log;
    private $name;

    public function clasificarReferencia($tipoDocumentoFirma) {
        //error_log(print_r($tipoDocumentoFirma, true));
        $inf = array();
        $inf["estatus"] = "fail";
        $inf["msj"] = "ERROR. EL TIPO DOCUMENTO FIRMA NO SE ENCONTRO CON CONFIGURACIÓN";
        switch (intval($tipoDocumentoFirma->cveSistema)) {
            case 30: return $this->obtenerCveTipoDocumentoElectronico($tipoDocumentoFirma->cveTipoDocumentoFirma, intval($tipoDocumentoFirma->cveSistema));
            case 38: return $this->obtenerCveTipoDocumentoSigejupe($tipoDocumentoFirma->cveTipoDocumentoFirma, intval($tipoDocumentoFirma->cveSistema));
            default: return $inf; //no se encontro el equivalente
        }
    }

    private function obtenerCveTipoDocumentoElectronico($cveTipoDocumentoFirma, $cveSistema) {
        $inf = array();
        $inf["estatus"] = "fail";
        $inf["msj"] = "ERROR. EL TIPO DOCUMENTO FIRMA NO CUENTA CON EQUIVALENTE CON EL TIPO DOCUMENTO (CONFIGURACIÓN)";
        switch (intval($cveTipoDocumentoFirma)) {//tbltiposactuaciones
            case 1: //PROMOCION INICIAL
            case 2: //PROMOCION TERMINO
            case 4: //PROMOCION. FALTA CONFIGURAR
                $inf["estatus"] = "ok";
                $inf["msj"] = "CLASIFICACIÓN EXITOSA";
                $subInf["cveTipoReferencia"] = 1; //cveTipoActuacion
                $subInf["desTipoReferencia"] = "PROMOCION";
                $subInf["desTipoExpediente"] = "ACTUACIÓN";
                $subInf["cveTipoExpediente"] = 1; //actuacion
                $subInf["cveTipoDocumento"] = 13; //cveTipoDocumento (tbltiposdocumentos)
                $subInf["descTipoDocumento"] = "PROMOCIONES"; //cveTipoDocumento (tbltiposdocumentos)
                $subInf["cveSistema"] = $cveSistema;
                $inf["clasificacion"] = $subInf;
                return $inf;
        }
        return $inf; //NO SE ENCONTRO CONFIGURACION DE TIPO REFERENCIA
    }

    private function obtenerCveTipoDocumentoSigejupe($cveTipoDocumentoFirma, $cveSistema) {
        $inf = array();
        $inf["estatus"] = "fail";
        $inf["msj"] = "ERROR. EL TIPO DOCUMENTO FIRMA NO CUENTA CON EQUIVALENTE CON EL TIPO DOCUMENTO (CONFIGURACIÓN)";
        switch (intval($cveTipoDocumentoFirma)) {//tbltiposactuaciones
            case 3: //PROMOCION
                $inf["estatus"] = "ok";
                $inf["msj"] = "CLASIFICACIÓN EXITOSA";
                $subInf["cveTipoReferencia"] = 1; //cveTipoActuacion
                $subInf["desTipoReferencia"] = "PROMOCION";
                $subInf["desTipoExpediente"] = "ACTUACIÓN";
                $subInf["cveTipoExpediente"] = 1; //actuacion
                $subInf["cveTipoDocumento"] = 13; //cveTipoDocumento (tbltiposdocumentos9
                $subInf["descTipoDocumento"] = "PROMOCIONES"; //cveTipoDocumento (tbltiposdocumentos)
                $subInf["cveSistema"] = $cveSistema;
                $inf["clasificacion"] = $subInf;
                return $inf;
        }
        return $inf; //NO SE ENCONTRO CONFIGURACION DE TIPO REFERENCIA
    }

    public function obtenerRuta($idReferencia, $tipoDocumentoFirma, $proveedor) {
        //error_log(print_r($tipoDocumentoFirma, true));
        $inf = array();
        $inf["estatus"] = "fail";
        $inf["mensaje"] = "ERROR.";
        $inf["ruta"] = null;
        switch ($tipoDocumentoFirma["clasificacion"]["cveSistema"]) {
            case 30: //electronico
                $subruta = "../../imagenesPdf/";
                $rutaSistema = "dticursos.pjedomex.gob.mx/electronico"; //http://electronico.pjedomex.gob.mx/electronico (localhost)
                switch ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"]) {
                    case 1: //actuacion
                        $query["fields"] = "cj.numero,cj.anio,cj.cveAdscripcion as cveJuzgado,cj.cveTipoNumero as cveTipoCarpeta,tn.descTipoNumero as desTipoCarpeta,m.descMateria";
                        $query["tables"] = "tblactuaciones as a,tblcarpetasjudiciales as cj,tbltiposnumeros as tn,tblmaterias as m";
                        $query["conditions"] = "cj.activo='S' AND a.activo='S' AND a.idCarpetaJudicial=cj.idCarpetaJudicial AND m.cveMateria=cj.cveMateria
                        AND a.idActuacion='" . $idReferencia . "' AND tn.cveTipoNumero=cj.cveTipoNumero";
                        break;
                    default: $query = null;
                }
                break;
            case 38: //sigejupe
                $subruta = "../../../imagenesPdf/";
                $rutaSistema = "dticursos.pjedomex.gob.mx/sigejupev2"; //http://sigejupe2.pjedomex.gob.mx/sigejupe (localhost)
                switch ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"]) {
                    case 1: //actuacion
                        $query["fields"] = "cj.idCarpetaJudicial,cj.numero,cj.anio,cj.cveJuzgado,cj.cveTipoCarpeta,tc.desTipoCarpeta";
                        $query["tables"] = "tblactuaciones as a,tblcarpetasjudiciales as cj,tbltiposcarpetas as tc";
                        $query["conditions"] = "cj.activo='S' AND a.activo='S' AND a.idReferencia=cj.idCarpetaJudicial
                        AND a.idActuacion='" . $idReferencia . "' AND tc.cveTipoCarpeta=cj.cveTipoCarpeta";
                        break;
                    default: $query = null;
                }
                break;
            default: $query = null;
        }
        if ($query == null) {
            $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). FALTA CONFIGURACIÓN DEL TIPO DOCUMENTO FIRMA";
            return $inf;
        }
        $selectDao = new SelectDAO();
        $carpeta = json_decode($selectDao->selectDAOv2($query, $proveedor));
        if (!isset($carpeta->resultados)) {
            $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). NO SE ENCONTRO EL EXPEDIENTE (idReferencia=" . $idReferencia . ")";
            return $inf;
        }
        $params = array();
        $auxCond = "";
        if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//electronico
            $auxCond = " AND di.idReferencia='";
        } else {//sigejupe
            $auxCond = " AND di.activo='S' AND di.idActuacion='";
        }
        $params["fields"] = "di.idDocumentoImg,i.posicion,i.idImagen";
        $params["tables"] = "tbldocumentosimg as di,tblimagenes as i";
        $params["conditions"] = "i.activo='S'" . $auxCond . $idReferencia . "' AND i.idDocumentoImg=di.idDocumentoImg";
        $params["orders"] = "i.idImagen DESC";
        $documentosImg = json_decode($selectDao->selectDAOv2($params, $proveedor));
        if (!isset($documentosImg->resultados)) {
            if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//electronico
                include_once(dirname(__FILE__) . "/../../model/dao/documentosimg/DocumentosImgDAO.Class.php");
                include_once(dirname(__FILE__) . "/../../model/dto/documentosimg/DocumentosImgDTO.Class.php");
                $documentosImgDao = new DocumentosImgDAO();
                $documentosImgDto = new DocumentosImgDTO();
                $documentosImgDto->setCveTipoDocumento($tipoDocumentoFirma["clasificacion"]["cveTipoDocumento"]);
                $documentosImgDto->setIdReferencia($idReferencia);
                $documentosImgDto = $documentosImgDao->insertDocumentoImg($documentosImgDto, $proveedor);
            } else {//sigejupe
                include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");
                include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
                $documentosImgDao = new DocumentosimgDAO();
                $documentosImgDto = new DocumentosimgDTO();
                $documentosImgDto->setActivo("S");
                $documentosImgDto->setCveTipoDocumento($tipoDocumentoFirma["clasificacion"]["cveTipoDocumento"]);
                $documentosImgDto->setIdCarpetaJudicial($carpeta->resultados[0]->idCarpetaJudicial);
                $documentosImgDto->setIdActuacion($idReferencia);
                $documentosImgDto = $documentosImgDao->insertDocumentosimg($documentosImgDto, $proveedor);
            }
            if ($documentosImgDto == "") {
                $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). NO SE LOGRO CREAR LA IMAGEN DOCUMENTOS";
                return $inf;
            }
            $documentosImgDto = $documentosImgDto[0];
        }
        //consultamos la extension del tipo de documento
        $params = array();
        $auxCond = "";
        if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//electronico
            $auxCond = ",extencion as extension";
        } else {//sigejupe
            $auxCond = ",extension";
        }
        $params["fields"] = "descTipoDocumento" . $auxCond;
        $params["tables"] = "tbltiposdocumentos";
        $params["conditions"] = "cveTipoDocumento='" . $tipoDocumentoFirma["clasificacion"]["cveTipoDocumento"] . "'";
        $datosTipoDocumento = json_decode($selectDao->selectDAOv2($params, $proveedor));
        if (!isset($datosTipoDocumento->resultados)) {
            $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). NO SE ENCONTRO LA EXTENSION DEL TIPO DOCUMENTO (cveTipoDocumento=" . $tipoDocumentoFirma["clasificacion"]["cveTipoDocumento"] . ")";
            return $inf;
        }
        if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//expediente electronico
            $clienteIndicadores = new ReportesClienteGeneral();
            $json = '{"fields":"cveRegion",';
            $json.='"tables":"tbljuzgados",';
            $json.='"conditions":"idJuzgado=' . $carpeta->resultados[0]->cveJuzgado . '"}';
            $juzgados = json_decode($clienteIndicadores->selectDAO($json, 4)); //consulta dirigiada al sistema de GESTION
            if (!isset($juzgados->resultados)) {
                $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). SE PERDIO LA CONEXIÓN CON EL SERVICIO WEB DE GESTIÓN (NO SE LOGRO OBTENER LA REGIÓN DEL JUZGADO)";
                return $inf;
            }
            $region = $juzgados->resultados[0]->cveRegion;
            $juzgado = $carpeta->resultados[0]->cveJuzgado;
            $year = $carpeta->resultados[0]->anio;
            $numero = $carpeta->resultados[0]->numero;
            $materia = $carpeta->resultados[0]->descMateria;
            $tipoDocumento = $tipoDocumentoFirma["clasificacion"]["descTipoDocumento"];
            $rutaO = $subruta . $region . "/" . $materia . "/" . $juzgado . "/" . $year . "/" . $tipoDocumento . "/" . $numero;
        } else {//sigejupe
            $nombreTipoCarpeta = str_ireplace(' ', '_', $carpeta->resultados[0]->desTipoCarpeta);
            $rutaO = $subruta . $carpeta->resultados[0]->cveJuzgado . '/' . $carpeta->resultados[0]->anio . '/' . $nombreTipoCarpeta . '/' . $carpeta->resultados[0]->numero;
        }
        $this->creaDirectorio($rutaO);
        if (!is_dir($rutaO)) {
            $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). NO SE LOGRO CREAR EL DIRECTORIO (ruta: " . $rutaO . ")";
            return $inf;
        }
        if (isset($documentosImg->resultados[0]->idImagen)) {
            $posicion = $documentosImg->resultados[0]->idImagen + 1;
            $idDocumentoImg = $documentosImg->resultados[0]->idDocumentoImg;
        } else {
            $posicion = 1;
            $idDocumentoImg = $documentosImgDto->getIdDocumentoImg();
        }
        $ruta = $rutaO . '/' . $posicion . $datosTipoDocumento->resultados[0]->extension . '.pdf';
        $imagenesDao = new ImagenesDAO();
        $imagenesDto = new ImagenesDTO();
        $imagenesDto->setIdDocumentoImg($idDocumentoImg);
        $imagenesDto->setRuta($ruta);
        $imagenesDto->setPosicion($posicion);
        $imagenesDto->setFojas(1);
        $imagenesDto->setAdjunto('N');
        $imagenesDto = $imagenesDao->insertImagenes($imagenesDto, $proveedor);
        if ($imagenesDto == "") {
            $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). NO SE LOGRO GENERAR LA IMAGEN DEL ARCHIVO";
            return $inf;
        }
        $imagenesDto = $imagenesDto[0];
        $ruta = $rutaO . '/' . $imagenesDto->getIdImagen() . $datosTipoDocumento->resultados[0]->extension . '.pdf';
        $imagenesDto->setRuta($ruta);
        if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//expediente electronico
            $imagenesDto = $imagenesDao->updateImageneRuta($imagenesDto, $proveedor);
        } else {//sigejupe
            $imagenesDto = $imagenesDao->updateImagenes($imagenesDto, $proveedor);
        }
        if ($imagenesDto == "") {
            $inf["mensaje"] = "ERROR (OBTENCIÓN DE RUTA). NO SE LOGRO ACTUALIZAR LA IMAGEN DEL ARCHIVO";
            return $inf;
        }
        $ruta = array();
        $ruta["ruta"] = $imagenesDto[0]->getRuta();
        $ruta["idImagen"] = $imagenesDto[0]->getIdImagen();
        $inf["estatus"] = "ok";
        $inf["ruta"] = $ruta;
        $inf["mensaje"] = "IMAGEN DE ARCHIVO CREADA EXITOSAMENTE.";
        return $inf;
    }
    
    private function obtenerIdDeRuta($ruta) {
        $tmp = explode('/', $ruta);
        $aux = $tmp[count($tmp) - 1];//nombre del archivo
        $total = strlen($aux);
        $idRuta = "";
        for ($i = 0; $i < $total; $i++) {
            if (ord($aux[$i]) > 47 && $aux[$i] < 58) {// si es numero
                $idRuta .= $aux[$i];
            } else {
                $i = $total;
            }
        }
        return $idRuta;
    }

    public function setUpdateRuta($ruta, $adjunto, $proveedor) {
        $inf = array();
        $inf["estatus"] = "fail";
        $inf["mensaje"] = "ERROR.";
        $inf["ruta"] = null;
        $this->log->w_onError("******INICIA PROCESO PARA ACTUALIZAR EL ESTADO DEL REGISTRO******");
        $this->log->w_onError("******Ruta: " . $ruta);
        $this->log->w_onError("******Adjunto: " . $adjunto);
        if (($ruta != "") && ($adjunto != "")) {
            $idImagen = intval($this->obtenerIdDeRuta($ruta));
            $imagenesDto = new ImagenesDTO();
            $imagenesDto->setIdImagen($idImagen);
            $imagenesDto->setAdjunto($adjunto);
            $imagenDao = new ImagenesDAO();
            $tmp = $imagenesDto;
            $tmp->setAdjunto("");
            $tmp = $imagenDao->selectImagenes($tmp, "", $proveedor);
            //error_log("imagen: " . print_r($tmp, true));
            if ($tmp != "") {
                $tmp = $tmp[0];
                $imagenesDto->setAdjunto("S");
                $imagenesDto = $imagenDao->updateImagenes($imagenesDto, $proveedor);
                if ($imagenesDto != "") {
                    $imagenesDto = $imagenesDto[0];
                    $this->log->w_onError("******RUTA: " . $imagenesDto->getRuta());
                    $this->log->w_onError("******TERMINA EL PROCESO EXITOSAMENTE");
                    $inf["estatus"] = "ok";
                    $ruta = array();
                    $ruta["ruta"] = $imagenesDto->getRuta();
                    $ruta["idImagen"] = $imagenesDto->getIdImagen();
                    $inf["mensaje"] = "ACTUALIZACION EXITOSA";
                    $inf["ruta"] = $ruta;
                } else {
                    $this->log->w_onError("******TERMINA EL PROCESO YA QUE NO SE LOGRO ACTUALIZAR LA RUTA******");
                    $inf["mensaje"] = "ERROR. NO SE LOGRO ACTUALIZAR LA RUTA";
                }
            } else {
                $this->log->w_onError("******TERMINA EL PROCESO YA QUE NO SE ENCONTRO EL ID DE LA IMAGEN******");
                $inf["mensaje"] = "ERROR. NO SE ENCONTRO LA RUTA PROPORCIONADA ruta(" . $ruta . ")";
            }
        } else {
            $this->log->w_onError("******TERMINA EL PROCESO YA QUE NO SE RECIBIERON DATOS VALIDOS******");
            $inf["mensaje"] = "ERROR. LOS DATOS PROPORCIONADOS NO FUERON LOS APROPIADOS";
        }
        return $inf;
    }

    private function creaDirectorio($NomDirectorio) { //Crea el directorio deonde se almacenara la imagen
        $VectorDirectorio = explode("/", $NomDirectorio);
        $ruta = ".";
        foreach ($VectorDirectorio as $Carpeta) {
            if ($Carpeta != "." && trim($Carpeta) != "") {
                $ruta = $ruta . "/" . $Carpeta;
                //error_log($ruta . "ruta de digitalizacion");
                if (!file_exists($ruta)) {
                    mkdir($ruta, 0777);
                }
            }
        }
    }

    public function cargaImagenes($specifications, $archivo) {
        $this->name = "/CargaImagenesFirmaController";
        $this->log = new Logger("", $this->name);
        $this->log->w_onError("******INICIA PROCESO SUBIR IMAGEN FIRMADA******");
        $this->log->w_onError("******----" . $specifications);
        $this->log->w_onError('Archivo ---- ' . json_encode($archivo));
        //error_log(print_r($specifications));
        try {
            $specifications = json_decode($specifications, true);
            $this->log->w_onError("******----" . json_encode($specifications));
            $param = array();
            $param["idImagenOriginal"] = $specifications["idImagenOriginal"];
            $param["idReferencia"] = $specifications["idReferencia"];
            $datosTipoDocumentoFirma = $specifications["tipoDocumentoFirma"];
            $param["archivo"] = $archivo;
            $param["cveTipoDocumentoFirma"] = $specifications["tipoDocumentoFirma"]["clasificacion"]["cveTipoDocumentoFirma"];
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
            $this->log->w_onError("OK10");
            $arrImagen = $this->obtenerRuta($param["idReferencia"], $datosTipoDocumentoFirma, $proveedor);
            $this->log->w_onError("img: " . json_encode($arrImagen));
            //error_log("obtenerRuta: " . print_r($arrImagen, true));
            $datosImagenCopiada = "";
            if (isset($arrImagen["estatus"]) && $arrImagen["estatus"] == "ok") {
                $datosImagenCopiada = $arrImagen;
                $extencion = explode(".", $param["archivo"]['name']);
                if ((string) $extencion[1] === "pdf") {
                    //if (copy($param["archivo"]['tmp_name'], "../../imagenes" . $arrImagen["ruta"]["ruta"])) {
                    if (copy($param["archivo"]['tmp_name'], $arrImagen["ruta"]["ruta"])) {
                        $arrImagen = $this->setUpdateRuta($arrImagen["ruta"]["ruta"], "S", $proveedor);
                        if ($arrImagen["estatus"] == "ok") {
                            $copiaCorrecta = true;
                            $this->log->w_onError("RESPUESTA:" . json_encode(array("type" => "OK", "text" => "Archivo copiado de forma correcta")));
                        } else {
                            $this->log->w_onError("RESPUESTA:" . json_encode(array("type" => "Error", "text" => "Ocurrio un error al Actualizar la informacion de la imagen")));
                        }
                    } else {
                        $this->log->w_onError("RESPUESTA:" . json_encode(array("type" => "Error", "text" => "Ocurrio un error al copiar el archivo")));
                    }
                } else {
                    $this->log->w_onError("RESPUESTA:" . json_encode(array("type" => "Error", "text" => "Tipo de Archivo no valido. Archivo con extencion:" . (string) $extencion[1])));
                }
            } else {
                $this->log->w_onError("RESPUESTA:" . json_encode(array("type" => "Error", "text" => $arrImagen["mensaje"])));
            }
            if ($copiaCorrecta) {
                $this->log->w_onError("RESPUESTA:" . json_encode($datosImagenCopiada));
                if ($datosImagenCopiada["ruta"]["idImagen"] != "" && $datosImagenCopiada["ruta"]["idImagen"] > 0) {
                    $archivoBorrado = $this->borrarImagenArchivo($param["idImagenOriginal"], $proveedor);
                    //error_log("ArchivoBorrado: " . print_r($archivoBorrado, true));
                    if ($archivoBorrado["estatus"] == "ok") {
                        $firmaElectronicaCliente = new FirmaElectronicaCliente();
                        $datos = array();
                        $datosActualizar = array(); //se buscan todos aquellos registros que coincidan con los parametros proporcionados
                        $datos[0]["idImagenOriginal"] = $param["idImagenOriginal"];
                        $datos[0]["cveTipoDocumentoFirma"] = $param["cveTipoDocumentoFirma"];
                        $datos[0]["idReferencia"] = $param["idReferencia"];
                        //se proporcionan los nuevos valores que reemplazaran a todos aquellos registros que se encontraron
                        $datosActualizar[0]["idImagenFirmada"] = $datosImagenCopiada["ruta"]["idImagen"];
                        $datosActualizar[0]["generado"] = "S";//indicamos que fue ya esta completa la firma electronica
                        @$respuestaCliente = json_decode($firmaElectronicaCliente->actualizarDocumentosFirmados($datos, $datosActualizar));
                        //error_log("FirmaElectronica: " . print_r($respuestaCliente, true));
                        if (!isset($respuestaCliente->estatus)) {
                            $this->log->w_onError('{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA CONEXION CON EL SERVICO WEB DE LA FIRMA ELECTRONICA. INTENTELO DE NUEVO"}');
                            $proveedor->execute("ROLLBACK");
                            $proveedor->close();
                        }
                        if (!isset($respuestaCliente->resultados)) {
                            $this->log->w_onError('{"estatus":"fail","totalCount":"0","msj":"' . $respuestaCliente->msj . '"}');
                            $proveedor->execute("ROLLBACK");
                            $proveedor->close();
                        }
                        $this->log->w_onError('{"estatus":"ok","totalCount":"1","msj":"ARCHIVO IMAGEN COPIADO EXITOSAMENTE"}');
                        $proveedor->execute("COMMIT");
                        $proveedor->close();
                    } else {
                        $this->log->w_onError('{"estatus":"fail","totalCount":"0","msj":"' . $archivoBorrado["mensaje"] . '"}');
                        $proveedor->execute("ROLLBACK");
                        $proveedor->close();
                    }
                }
            }
        } catch (Exception $e) {
            $this->log->w_onError("******Error----" . $e->getMessage());
        }
    }

    public function borrarImagenArchivo($idImagen, $proveedor = null) {
        //borra el registro (logicamente) y fisicamente al archivo (si existe)
        $inf["estatus"] = "fail";
        $inf["mensaje"] = "ERROR.";
        if ($proveedor == null) {
            $proveedorAux = new Proveedor('mysql', 'sigejupe');
            $proveedorAux->connect();
        } else {
            $proveedorAux = $proveedor;
        }
        $imagenesDto = new ImagenesDTO();
        $imagenesDao = new ImagenesDAO();
        $imagenesDto->setIdImagen($idImagen);
        $imagenesDto->setActivo("N");
        $imagenesDto->setAdjunto("N");
        $imagenesDto = $imagenesDao->updateImagenes($imagenesDto, $proveedorAux);
        if ($imagenesDto != "") {
            $rutaArchivo = $imagenesDto[0]->getRuta();
            $estatus = "";
            if (file_exists($rutaArchivo)) {
                //if (@unlink($rutaArchivo)) {
                    $estatus = "ARCHIVO BORRADO EXITOSAMENTE";
                /*} else {
                    $estatus = "PRECAUCION: NO SE BORRO EL ARCHIVO PORQUE NO CUENTA CON PERMISOS PARA DICHA ACCION";
                }*/
            } else {
                $estatus = "PRECAUCION: EL ARCHIVO FISICO NO EXISTE";
            }
            if ($proveedor == null) {
                $proveedorAux->execute("ROLLBACK");
                $proveedorAux->close();
            }
            $inf["estatus"] = "ok";
            $inf["mensaje"] = $estatus;
            return $inf;
        } else {
            if ($proveedor == null) {
                $proveedorAux->execute("ROLLBACK");
                $proveedorAux->close();
            }
        }
        $inf["mensaje"] = "ERROR. NO SE LOGRO BORRAR LA IMAGEN LOGICAMENTE";
        return $inf;
    }

}

if (isset($_FILES) && $_FILES != null) {
    //error_log("post: " . print_r($_POST, true));
    @$specifications = $_POST['detalleParametros'];
    @$archivo = $_FILES['archivo'];
    $CargaImagenesFirmaController = new CargaImagenesFirmaController();
    $CargaImagenesFirmaController->cargaImagenes($specifications, $archivo);
}