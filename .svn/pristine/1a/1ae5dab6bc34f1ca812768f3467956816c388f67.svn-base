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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesperitos/SolicitudesperitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../tiposcarpetas/TiposcarpetasController.Class.php");    // para descripcion de la relacion de la consulta de oficios
//
//carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//Tipos de Actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

//webservice para tblJuzgados en GestiOn
include_once(dirname(__FILE__) . "/../../../webservice/cliente/juzgados/JuzgadoCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");    // para descripcion de la relacion de la consulta de acuerdos

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/personal/PersonalCliente.php");



error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

if (!isset($_SESSION)) {
    session_start();
}

class SolicitudesperitosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSolicitudesperitos($SolicitudesperitosDto) {
        $SolicitudesperitosDto->setIdSolicitudPertioActuacion(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getIdSolicitudPertioActuacion()))));
        $SolicitudesperitosDto->setIdActuacion(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getIdActuacion()))));
        $SolicitudesperitosDto->setIdReferencia(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getIdReferencia()))));
        $SolicitudesperitosDto->setNumeroSolicitud(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getNumeroSolicitud()))));
        $SolicitudesperitosDto->setAniSolicitud(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getAniSolicitud()))));
        $SolicitudesperitosDto->setFechaSolicitud(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getFechaSolicitud()))));
        $SolicitudesperitosDto->setIdPerito(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getIdPerito()))));
        $SolicitudesperitosDto->setNombrePerito(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getNombrePerito()))));
        $SolicitudesperitosDto->setMateriaPericial(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getMateriaPericial()))));
        $SolicitudesperitosDto->setCveMateriaPericial(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getCveMateriaPericial()))));
        $SolicitudesperitosDto->setCveRegionPericial(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getCveRegionPericial()))));
        $SolicitudesperitosDto->setActivo(strtoupper(str_ireplace("'", "", trim($SolicitudesperitosDto->getActivo()))));
        return $SolicitudesperitosDto;
    }

    public function getPaginas($solicitudesperitosDto, $param) {
        $solicitudesperitosDto = $this->verificaCeros($solicitudesperitosDto);
        $solicitudesperitosDao = new SolicitudesperitosDAO();
        $numTot = $solicitudesperitosDao->selectSolicitudesperitos($solicitudesperitosDto, null, "", $param, " count(idSolicitudPertioActuacion) as totalCount ");
//print_r($numTot);
        if (is_array($numTot)) {
            $Pages = (int) $numTot[0]['totalCount'] / $param["cantxPag"];
            $restoPages = $numTot[0]['totalCount'] % $param["cantxPag"];
            $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        }
        if (is_array($numTot)) {
            $json = "";
            $json .= '{"type":"OK",';
            $json .= '"totalCount":"' . $numTot[0]['totalCount'] . '",';
            $json .= '"data":[';
            $x = 1;

            if ($totPages > 1) {
                for ($index = 1; $index <= $totPages; $index++) {

                    $json .= "{";
                    $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                    $json .= "}";
                    $x++;
                    if ($x <= ($totPages )) {
                        $json .= ",";
                    }
                }
                $json .= "],";
                $json .= '"pagina":{"total":""},';
                $json .= '"total":"' . ($index - 1) . '"';
                $json .= "}";
            } else {
                $json .= "]}";
            }
        }
        return @$json;
    }

    public function verificaCeros($SolicitudesperitosDao) {
        if ($SolicitudesperitosDao->getCveMateriaPericial() == "0") {
            $SolicitudesperitosDao->setCveMateriaPericial("");
        }
        if ($SolicitudesperitosDao->getCveRegionPericial() == "0") {
            $SolicitudesperitosDao->setCveRegionPericial("");
        }
        if ($SolicitudesperitosDao->getCveJuzgado() == "0") {
            $SolicitudesperitosDao->setCveJuzgado("");
        }

        return $SolicitudesperitosDao;
    }

    public function selectSolicitudesperitos($SolicitudesperitosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
        //paginacion
        $SolicitudesperitosDao = new SolicitudesperitosDAO();
        $SolicitudesperitosDto = $SolicitudesperitosDao->selectSolicitudesperitos($SolicitudesperitosDto, $proveedor, $orden, $param, $fields);
        return $SolicitudesperitosDto;
    }

    public function insertSolicitudesperitos($SolicitudesperitosDto, $proveedor = null) {
        $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
        $SolicitudesperitosDao = new SolicitudesperitosDAO();
        $SolicitudesperitosDto = $SolicitudesperitosDao->insertSolicitudesperitos($SolicitudesperitosDto, $proveedor);
        return $SolicitudesperitosDto;
    }

    public function generarJson($SolicitudesperitosDto, $cveTipoDocumento, $cveTipo, $param) {
        $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);        
        $SPDao = new SolicitudesperitosDAO();
        $validacion = new Validacion();
//        public function selectActuaciones($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {                        
        $SolicitudesperitosDto = $SPDao->selectSolicitudesperitos($SolicitudesperitosDto, null, " ", null, null);        
        if ($SolicitudesperitosDto != "") {
            $json = "";
            $json .= '{"type":"generaPdf",';
            $json .= '"totalCount":"' . count($SolicitudesperitosDto) . '",';            
            include_once(dirname(__FILE__) . "/../imagenes/ImagenesController.Class.php");    // para registrar estatus de las actuaciones
            $imagenesCtrl = new ImagenesController();                        
            $cveTipo = 2;
            $cveTipoDocumento = 32;                        
            $Arrayruta = $imagenesCtrl->insertaImagenGlobal($cveTipo, $SolicitudesperitosDto[0]->getIdReferenciaActuacionHija(), $cveTipoDocumento, null);            
            $json .= '"rutaDestino":"' . $Arrayruta["ruta"] . '",';
            $json .= '"idImagen":"' . $Arrayruta["idImagen"] . '",';
            foreach ($SolicitudesperitosDto as $solicitudesDto) {
                $tiposcarpeta = new TiposcarpetasController();
                $tiposcarpetasDTO = new TiposcarpetasDTO();
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($solicitudesDto->getIdReferencia())) . ",";
                $json .= '"numCarpeta":' . json_encode(utf8_encode($solicitudesDto->getNumero())) . ",";
                $json .= '"anioCarpeta":' . json_encode(utf8_encode($solicitudesDto->getAnio())) . ",";
                $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($solicitudesDto->getCveTipoCarpeta())) . ",";
                $tiposcarpetasDTO->setCveTipoCarpeta($solicitudesDto->getCveTipoCarpeta());
                $tiposcarpetasDTO->setActivo("S");
                $tipoRel = $tiposcarpeta->selectTiposcarpetas($tiposcarpetasDTO);
                $json .= '"descTipoCarpeta":' . json_encode(utf8_encode($tipoRel[0]->getDesTipoCarpeta())) . ",";
                $json .= '"idActuacion":' . json_encode(utf8_encode($solicitudesDto->getIdActuacion())) . ",";
                $json .= '"numSolicitud":' . json_encode(utf8_encode($solicitudesDto->getIdReferencia())) . ",";
                $json .= '"anioSolicitud":' . json_encode(utf8_encode($solicitudesDto->getanio())) . ",";
                $json .= '"numActuacion":' . json_encode(utf8_encode($solicitudesDto->getNumeroSolicitud())) . ",";
                $json .= '"anioActuacion":' . json_encode(utf8_encode($solicitudesDto->getAniSolicitud())) . ",";
                $json .= '"cveTipoActuacion":' . json_encode(utf8_encode("18")) . ",";

//                $tiposActuacionesDAO = new TiposactuacionesDAO();
//                $tiposActuacionesDTO = new TiposactuacionesDTO();
//                $tiposActuacionesDTO->setCveTipoActuacion("18");
//                $tiposActuaciones = $tiposActuacionesDAO->selectTiposactuaciones($tiposActuacionesDTO);
//                if ($solicitudesDto->getCveTipoActuacion() != "") {
//                    $tiposActuacionesDAO = new TiposactuacionesDAO();
//                    $tiposActuacionesDTO = new TiposactuacionesDTO();
//                    $tiposActuacionesDTO->setCveTipoActuacion($actuacionDto->getCveTipoActuacion());
//                    $tiposActuaciones = $tiposActuacionesDAO->selectTiposactuaciones($tiposActuacionesDTO);
//                    print_r($tiposActuaciones);
//                    $desTipoActuacion = $tiposActuaciones[0]->getdesTipoActuacion();
                $json .= '"descTipoActuacion":"SOLICITUD DE PERITO",';
//                }
//                    print_r($tiposActuaciones);
//                    $desTipoActuacion = $tiposActuaciones[0]->getdesTipoActuacion();
//                $json .= '"descTipoActuacion":' . json_encode(utf8_encode($tiposActuaciones[0]->getDesTipoActuacion())) . ",";

                $json .= '"cveJuzgado":' . json_encode(utf8_encode($solicitudesDto->getCveJuzgado())) . ",";
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($solicitudesDto->getCveJuzgado());
                $juzgado = $juzgadosDao->selectJuzgados($juzgadosDto);
                $json .= '"descJuzgado":' . json_encode(utf8_encode($juzgado[0]->getdesJuzgado())) . ',';
                $json .= '"siglasJuzgados":' . json_encode(utf8_encode($juzgado[0]->getSiglas())) . ',';
//                $SolicitudesperitosDto[0]->setCveJuzgado($juzgado[0]->getDesJuzgado());
                $json .= '"sintesis":' . json_encode(utf8_encode("....")) . ',';
                //ECHO $solicitudesDto->getObservaciones();
                $cadInicio = "<html><head><style type=\"text/css\">.view{padding:0;word-wrap:break-word;cursor:text;height:90%;}body{margin:8px;font-family:sans-serif;font-size:16px;}p{margin:5px 0;}</style><link rel=\"stylesheet\" type=\"text/css\" href=\"http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/js/jqeditor/themes/iframe.css\"><style type=\"text/css\">body{background-color:transparent; background-image:; background-repeat:repeat; background-position:0% 0%; height:324px; }</style> </head><body>";
                $cadFin = "</body></html>";
                //$cadInicio = str_replace("\"", "\\\"",$cadInicio);
                //$cadFin = str_replace("\"", "\\\"",$cadFin);
                //$cadena=str_replace("\"", "",$solicitudesDto->getObservaciones());
                $cadenaFinal = $cadInicio.$solicitudesDto->getObservaciones().$cadFin;
                $cadenaFinal =  str_replace("&quot;", "",$cadenaFinal);
                $cadenaFinal =  str_replace("Verdana", "Arial",$cadenaFinal);
                $json .= '"texto":"' . html_entity_decode(str_replace("\"", "\\\"",$cadenaFinal)) . "\",";
                $json .= '"cveUsuario":' . json_encode(utf8_encode(@$_SESSION["cveUsuarioSistema"])) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($solicitudesDto->getActivo())) . ",";

                $json .= '"cveTipoResolucion":"",';
//                if ($solicitudesDto->getCveTipoResolucion() != "") {
//                    $tipoResolDTO = new TiposresolucionesDTO();
//                    $tipoResolCtrl = new TiposresolucionesController();
//                    $tipoResolDTO->setCveTipoResolucion($solicitudesDto->getCveTipoResolucion());
//                    $tipoResolDTO->setActivo("S");
//                    $tipoResolDTO = $tipoResolCtrl->selectTiposresoluciones($tipoResolDTO);
//                    $json .= '"descTipoResolucion":' . json_encode(utf8_encode($tipoResolDTO[0]->getDesTipoResolucion())) . ",";
//                }
                $json .= '"cveTipoNotificacion":"",';
//                if ($solicitudesDto->getCveTipoNotificacion() != "") {
//                    $tipoNotifDTO = new TiposnotificacionesDTO();
//                    $tipoNotifCtrl = new TiposnotificacionesController();
//                    $tipoNotifDTO->setCveTipoNotificacion($solicitudesDto->getCveTipoNotificacion());
//                    $tipoNotifDTO->setActivo("S");
//                    $tipoNotifDTO = $tipoNotifCtrl->selectTiposnotificaciones($tipoNotifDTO);
//                    $json .= '"descTipoNotificacion":' . json_encode(utf8_encode($tipoNotifDTO[0]->getDesTipoNotificacion())) . ",";
//                }
                // buscar estatus de actuacion
//                $actEstatusCtrl = new ActuacionesestatusController();
//                $actEstatusDTO = new ActuacionesestatusDTO();
//                $actEstatusDTO->setIdActuacion($solicitudesDto->getIdActuacion());
//                $actEstatusDTO->setActivo("S");
//                $actEstatusDTO = $actEstatusCtrl->selectActuacionesestatus($actEstatusDTO);
//                if ($actEstatusDTO != "") {
//                    $json .= '"cveEstatus":' . json_encode(utf8_encode($actEstatusDTO[0]->getCveEstatus())) . ",";
//                    // mostrar descripcion de estatus de actuacion
//                    $estatusCtrl = new EstatusController();
//                    $estatusDTO = new EstatusDTO();
//                    $estatusDTO->setCveEstatus($actEstatusDTO[0]->getCveEstatus());
//                    $estatusDTO = $estatusCtrl->selectEstatus($estatusDTO);
//                    $json .= '"descEstatus":' . json_encode(utf8_encode($estatusDTO[0]->getDescEstatus())) . ",";
//                } else {
                $json .= '"cveEstatus": "",';
                $json .= '"descEstatus": "",';
//                }
                $json .= '"fechaRegistro":' . json_encode(utf8_encode(($solicitudesDto->getFechaRegistro()))) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode(($solicitudesDto->getFechaActualizacion()))) . ",";
            }
            $json .= '"firmantes":[';
//            foreach ($SolicitudesperitosDto as $solicitudesDto) {
            $json .= "{";
            $json .= '"nombre":"ilhuitemoc ricardo",';
            $json .= '"curp":"qwerty12345",';
            $json .= '"firma":"tVpEqgd-gxrdiN46kpZK6ZT6Hf8bJVJySIob1K1BUDYb9xAzkFtk1qTQEPVNGB",';
            $json .= '"fechaFirma":"' . date("Y-m-d") . '",';
            $json .= '"numEmpleado":"7512"';
            $json .= "}";
//            }
            $json .= "]";
            $json .= "}";

            return $json;
        } else {
            return "";
        }
    }

    //*********************** generar json **************************************************************
    public function updateSolicitudesperitos($SolicitudesperitosDto, $proveedor = null) {
        $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
        $SolicitudesperitosDao = new SolicitudesperitosDAO();
//$tmpDto = new SolicitudesperitosDTO();
//$tmpDto = $SolicitudesperitosDao->selectSolicitudesperitos($SolicitudesperitosDto,$proveedor);
//if($tmpDto!=""){//$SolicitudesperitosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $SolicitudesperitosDto = $SolicitudesperitosDao->updateSolicitudesperitos($SolicitudesperitosDto, $proveedor);
        return $SolicitudesperitosDto;
//}
//return "";
    }

    public function deleteSolicitudesperitos($SolicitudesperitosDto, $proveedor = null) {
        $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
        $SolicitudesperitosDao = new SolicitudesperitosDAO();
        $SolicitudesperitosDto = $SolicitudesperitosDao->deleteSolicitudesperitos($SolicitudesperitosDto, $proveedor);
        return $SolicitudesperitosDto;
    }

    public function updateActuacion($SolicitudesperitosDto, $proveedor = null) {
        $SolicitudesperitosDto = $this->validarSolicitudesperitos($SolicitudesperitosDto);
        $SolicitudesperitosDao = new SolicitudesperitosDAO();
        $tmpSolicitudesperitosDTO = new SolicitudesperitosDTO();
        //obtencion de los datos previos a la actualizacion
        $tmpSolicitudesperitosDTO->setIdActuacion($SolicitudesperitosDto->getIdActuacion());
        $tmpSolicitudesperitosDTO = $SolicitudesperitosDao->selectSolicitudesperitos($tmpSolicitudesperitosDTO);
        //actualizacion
        $SolicitudesperitosDto = $SolicitudesperitosDao->updateSolicitudesperitos($SolicitudesperitosDto, $proveedor);
        //INSERCION EN BITACORA
        $bitacoraController = new BitacoramovimientosController();
        $bitacoraController->agregar(29, 'tblsolicitudesperitos', 'dto', $SolicitudesperitosDto, $tmpSolicitudesperitosDTO);
        return $SolicitudesperitosDto;
    }

    public function guardarSolicitudPerito($SolicitudesperitosDto, $proveedor = null) {
//buscar si no hay un registro previo con borrado lOgico
//dato fijo por ser Acta MInima
        $cveTipoActuacion = '6';
//definiciOn de variables para obtener los valores del contador
        $cveJuzgado = $SolicitudesperitosDto->getCveJuzgado();
//obtenciOn de nUmero de la tabla contadores
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion);
        $numActuacion = $numActuacion[0]->getNumero();
//asignaciOn de variables en el DTO de las solicitudesperitos
        $SolicitudesperitosDto->setNumActuacion($numActuacion);
        $SolicitudesperitosDto->setAniActuacion(date("Y"));
//inserciOn de la ActuaciOn
        $SolicitudesperitosDto = $this->insertSolicitudesperitos($SolicitudesperitosDto, $proveedor);
//INSERCION EN BITACORA
        //$bitacoraController = new BitacoramovimientosController();
        //$bitacoraController->agregar(28, 'tblsolicitudesperitos', 'dto', $SolicitudesperitosDto);

        return $SolicitudesperitosDto;
    }

}

?>
