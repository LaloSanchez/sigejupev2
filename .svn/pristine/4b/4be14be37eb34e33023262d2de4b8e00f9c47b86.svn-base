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
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
/*
 * Catalogos
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/modalidades/ModalidadesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/comisiones/ComisionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/concursos/ConcursosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/clasificacionesdelitosorden/ClasificacionesdelitosordenDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/clasificacionesdelitosorden/ClasificacionesdelitosordenDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/elementoscomisiones/ElementoscomisionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/elementoscomisiones/ElementoscomisionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/clasificacionesdelitos/ClasificacionesdelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/clasificacionesdelitos/ClasificacionesdelitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formasacciones/FormasaccionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consumaciones/ConsumacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consumaciones/ConsumacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/gradoparticipaciones/GradoparticipacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposrelimpofe/TiposrelimpofeDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposrelimpofe/TiposrelimpofeDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
/*
 * Partes de la carpeta judicial
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
//juzgadores carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
//Control cargas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
//violencia de genero, trata y efectos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");

//formulacion imputacion
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/formulacionimputaciones/FormulacionimputacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/formulacionimputaciones/FormulacionimputacionesDAO.Class.php");
//ejecucion de sentencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosejecsentencias/ImputadosejecsentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosejecsentencias/ImputadosejecsentenciasDAO.Class.php");
//Imputados Sentencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

class ImpofedelcarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarImpofedelcarpetas($ImpofedelcarpetasDto) {
        $ImpofedelcarpetasDto->setIdImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getIdImpOfeDelCarpeta()))));
        $ImpofedelcarpetasDto->setIdCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getIdCarpetaJudicial()))));
        $ImpofedelcarpetasDto->setIdImputadoCarpeta(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getIdImputadoCarpeta()))));
        $ImpofedelcarpetasDto->setIdOfendidoCarpeta(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getIdOfendidoCarpeta()))));
        $ImpofedelcarpetasDto->setIdDelitoCarpeta(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getIdDelitoCarpeta()))));
        $ImpofedelcarpetasDto->setCveModalidad(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveModalidad()))));
        $ImpofedelcarpetasDto->setCveComision(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveComision()))));
        $ImpofedelcarpetasDto->setCveConcurso(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveConcurso()))));
        $ImpofedelcarpetasDto->setCveClasificacionDelitoOrden(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveClasificacionDelitoOrden()))));
        $ImpofedelcarpetasDto->setCveElementoComision(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveElementoComision()))));
        $ImpofedelcarpetasDto->setCveClasificacionDelito(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveClasificacionDelito()))));
        $ImpofedelcarpetasDto->setCveMunicipio(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveMunicipio()))));
        $ImpofedelcarpetasDto->setCveEntidad(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveEntidad()))));
        $ImpofedelcarpetasDto->setCveFormaAccion(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveFormaAccion()))));
        $ImpofedelcarpetasDto->setCveConsumacion(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveConsumacion()))));
        $ImpofedelcarpetasDto->setCveGradoParticipacion(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveGradoParticipacion()))));
        $ImpofedelcarpetasDto->setCveRelacionImpOfe(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveRelacionImpOfe()))));
        $ImpofedelcarpetasDto->setCveTerminacion(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCveTerminacion()))));
        $ImpofedelcarpetasDto->setActivo(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getActivo()))));
        $ImpofedelcarpetasDto->setFechaDelito(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getFechaDelito()))));
        $ImpofedelcarpetasDto->setDireccion(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getDireccion()))));
        $ImpofedelcarpetasDto->setColonia(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getColonia()))));
        $ImpofedelcarpetasDto->setNumInterior(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getNumInterior()))));
        $ImpofedelcarpetasDto->setNumExterior(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getNumExterior()))));
        $ImpofedelcarpetasDto->setCp(strtoupper(str_ireplace("'", "", trim($ImpofedelcarpetasDto->getCp()))));
        return $ImpofedelcarpetasDto;
    }

    public function selectImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor = null) {
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor);
        return $ImpofedelcarpetasDto;
    }

    public function insertImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor = null) {
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->insertImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor);
        return $ImpofedelcarpetasDto;
    }

    public function updateImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor = null) {
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
//$tmpDto = new ImpofedelcarpetasDTO();
//$tmpDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto,$proveedor);
//if($tmpDto!=""){//$ImpofedelcarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->updateImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor);
        return $ImpofedelcarpetasDto;
//}
//return "";
    }

    public function deleteImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor = null) {
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->deleteImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor);
        return $ImpofedelcarpetasDto;
    }

    /*
     * para las carpetas judiciales
     */

    public function datoTipoRequerido($valor) {
        if (is_null($valor)) {
            return false;
        } elseif (is_string($valor) && trim($valor) === '') {
            return false;
        } elseif (($valor) <= '0') {
            return false;
        } elseif (is_array($valor) && count($valor) < 1) {
            return false;
        }

        return true;
    }

    public function validaCampos($ImpofedelcarpetasDto) {
        $imputado = $this->datoTipoRequerido($ImpofedelcarpetasDto->getIdImputadoCarpeta());
        $ofendido = $this->datoTipoRequerido($ImpofedelcarpetasDto->getIdOfendidoCarpeta());
        $delito = $this->datoTipoRequerido($ImpofedelcarpetasDto->getIdDelitoCarpeta());
        $modalidad = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveModalidad());
        $comision = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveComision());
        $concurso = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveConcurso());
        $cdo = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveClasificacionDelitoOrden());
        $elementoComision = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveElementoComision());
        $clasificacionDelito = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveClasificacionDelito());
        $formaAccion = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveFormaAccion());
        $consumacion = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveConsumacion());
        $municipio = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveMunicipio());
        $entidad = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveEntidad());
        $gradoParticipacion = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveGradoParticipacion());
        $relacionImpOfe = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCveRelacionImpOfe());
        $fecha = $this->datoTipoRequerido($ImpofedelcarpetasDto->getFechaDelito());
        $direccion = $this->datoTipoRequerido($ImpofedelcarpetasDto->getDireccion());
        $colonia = $this->datoTipoRequerido($ImpofedelcarpetasDto->getColonia());
        $interior = $this->datoTipoRequerido($ImpofedelcarpetasDto->getNumInterior());
        $exterior = $this->datoTipoRequerido($ImpofedelcarpetasDto->getNumExterior());
        $cp = $this->datoTipoRequerido($ImpofedelcarpetasDto->getCp());

        $estatus = true;
        $mensaje = [];
        if ($imputado == false) {
            $mensaje["mensaje"] = "Debes elegir un Imputado";
            $estatus = false;
        } else if ($ofendido == false) {
            $mensaje["mensaje"] = "Debes elegir un Sujeto Pasivo del Delito";
            $estatus = false;
        } else if ($delito == false) {
            $mensaje["mensaje"] = "Debes elegir un Delito";
            $estatus = false;
        } else if ($modalidad == false) {
            $mensaje["mensaje"] = "El campo Modalidad esta vacio";
            $estatus = false;
        } else if ($comision == false) {
            $mensaje["mensaje"] = "El campo Comision esta vacio";
            $estatus = false;
        } else if ($concurso == false) {
            $mensaje["mensaje"] = "El campo Concurso esta vacio";
            $estatus = false;
        } else if ($cdo == false) {
            $mensaje["mensaje"] = "El campo Clasificacion Delito Orden esta vacio";
            $estatus = false;
        } else if ($elementoComision == false) {
            $mensaje["mensaje"] = "El campo Elemento Comision esta vacio";
            $estatus = false;
        } else if ($clasificacionDelito == false) {
            $mensaje["mensaje"] = "El campo Clasificacion Delito esta vacio";
            $estatus = false;
        } else if ($formaAccion == false) {
            $mensaje["mensaje"] = "El campo Forma Accion esta vacio";
            $estatus = false;
        } else if ($consumacion == false) {
            $mensaje["mensaje"] = "El campo Consumacion esta vacio";
            $estatus = false;
        }
//        else if ($municipio == false) {
//            $mensaje["mensaje"] = "El campo Municipio esta vacio";
//            $estatus = false;
//        } else if ($entidad == false) {
//            $mensaje["mensaje"] = "El campo Entidad esta vacio";
//            $estatus = false;
//        } 
        else if ($gradoParticipacion == false) {
            $mensaje["mensaje"] = "El campo Grado Participacion esta vacio";
            $estatus = false;
        } else if ($relacionImpOfe == false) {
            $mensaje["mensaje"] = "El campo Relacion esta vacio";
            $estatus = false;
        } else if ($fecha == false) {
            $mensaje["mensaje"] = "El campo Fecha del delito esta vacio";
            $estatus = false;
        }
//        else if ($direccion == false) {
//            $mensaje["mensaje"] = "El campo Direccion esta vacio";
//            $estatus = false;
//        } else if ($colonia == false) {
//            $mensaje["mensaje"] = "El campo Colonia esta vacio";
//            $estatus = false;
//        } else if ($exterior == false) {
//            $mensaje["mensaje"] = "El campo Numero Exterior esta vacio";
//            $estatus = false;
//        } else if ($cp == false) {
//            $mensaje["mensaje"] = "El campo Codigo Postal esta vacio";
//            $estatus = false;
//        }

        if ($estatus == true) {
            $estatus = array("estatus" => "OK", "totalCount" => "1");
        } else {
            $estatus = array("estatus" => "Error", "totalCount" => "0");
        }
        $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));

        return $respuesta;
    }

    /*
     * Consultar relaciones imputados ofendidos delitos
     */

    public function selectImpofedelcarpetasrelacion($ImpofedelcarpetasDto, $proveedor = null) {
        $impOfeDelSolArray = array();
        $error = false;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
        $imputadoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $imputadoscarpetasDto->setActivo("S");
        $imputadoscarpetasDao = new ImputadoscarpetasDAO();
        $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);
        //var_dump($imputadoscarpetasDto);

        $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
        $ofendidoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $ofendidoscarpetasDto->setActivo("S");
        $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
        $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
        //var_dump($ofendidoscarpetasDto);

        $delitoscarpetasDto = new DelitoscarpetasDTO();
        $delitoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $delitoscarpetasDto->setActivo("S");
        $delitoscarpetasDao = new DelitoscarpetasDAO();
        $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);
        //var_dump($delitoscarpetasDto);
        $modalidadesDto = new ModalidadesDTO();
        $modalidadesDao = new ModalidadesDAO();
        $modalidadesDto = $modalidadesDao->selectModalidades($modalidadesDto, "ORDER BY desModalidad ASC", $this->proveedor);
        //var_dump($modalidadesDto);

        $comisionesDto = new ComisionesDTO();
        $comisionesDao = new ComisionesDAO();
        $comisionesDto = $comisionesDao->selectComisiones($comisionesDto, "", $this->proveedor);
        //var_dump($comisionesDto);

        $concursosDto = new ConcursosDTO();
        $concursosDao = new ConcursosDAO();
        $concursosDto = $concursosDao->selectConcursos($concursosDto, "", $this->proveedor);
        //var_dump($concursosDto);

        $clasificacionesDelitosOrdenDto = new ClasificacionesDelitosOrdenDTO();
        $clasificacionesDelitosOrdenDao = new ClasificacionesDelitosOrdenDAO();
        $clasificacionesDelitosOrdenDto = $clasificacionesDelitosOrdenDao->selectClasificacionesDelitosOrden($clasificacionesDelitosOrdenDto, "", $this->proveedor);
        //var_dump($clasificacionesDelitosOrdenDto);

        $elementosComisionesDto = new elementosComisionesDTO();
        $elementosComisionesDao = new elementosComisionesDAO();
        $elementosComisionesDto = $elementosComisionesDao->selectelementosComisiones($elementosComisionesDto, "", $this->proveedor);
        //var_dump($elementosComisionesDto);

        $clasificacionesDelitosDto = new clasificacionesDelitosDTO();
        $clasificacionesDelitosDao = new clasificacionesDelitosDAO();
        $clasificacionesDelitosDto = $clasificacionesDelitosDao->selectClasificacionesDelitos($clasificacionesDelitosDto, "", $this->proveedor);
        //var_dump($clasificacionesDelitosDto);

        $formasAccionesDto = new FormasAccionesDTO();
        $formasAccionesDao = new FormasAccionesDAO();
        $formasAccionesDto = $formasAccionesDao->selectFormasAcciones($formasAccionesDto, "", $this->proveedor);
        //var_dump($formasAccionesDto);

        $consumacionesDto = new ConsumacionesDTO();
        $consumacionesDao = new ConsumacionesDAO();
        $consumacionesDto = $consumacionesDao->selectConsumaciones($consumacionesDto, "", $this->proveedor);
        //var_dump($consumacionesDto);

        $municipiosDto = new MunicipiosDTO();
        $municipiosDao = new MunicipiosDAO();
        $municipiosDto = $municipiosDao->selectMunicipios($municipiosDto, "", $this->proveedor);
        //var_dump($municipiosDto);

        $estadosDto = new EstadosDTO();
        $estadosDao = new EstadosDAO();
        $estadosDto = $estadosDao->selectEstados($estadosDto, "", $this->proveedor);
        //var_dump($estadosDto);

        $gradoParticipacionesDto = new GradoParticipacionesDTO();
        $gradoParticipacionesDao = new GradoParticipacionesDAO();
        $gradoParticipacionesDto = $gradoParticipacionesDao->selectGradoParticipaciones($gradoParticipacionesDto, "", $this->proveedor);
        //var_dump($gradoParticipacionesDto);

        $tiposrelimpofeDto = new TiposrelimpofeDTO();
        $tiposrelimpofeDao = new TiposrelimpofeDAO();
        $tiposrelimpofeDto = $tiposrelimpofeDao->selectTiposrelimpofe($tiposrelimpofeDto, "", $this->proveedor);
        //var_dump($tiposrelimpofeDto);

        $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto->setActivo('S');
        $ImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, " ORDER BY idImputadoCarpeta,idOfendidoCarpeta,idDelitoCarpeta ASC", $this->proveedor);

        if ($ImpofedelcarpetasDto != "") {
            foreach ($ImpofedelcarpetasDto as $impofedelcarpetadDto) {
                $delitosRelacion["idImpOfeDelCarpeta"] = $impofedelcarpetadDto->getIdImpOfeDelCarpeta();
                $delitosRelacion["fechaDelito"] = $impofedelcarpetadDto->getFechaDelito();
                $delitosRelacion["direccion"] = utf8_encode($impofedelcarpetadDto->getDireccion());
                $delitosRelacion["colonia"] = utf8_encode($impofedelcarpetadDto->getColonia());
                $delitosRelacion["numInterior"] = $impofedelcarpetadDto->getNumInterior();
                $delitosRelacion["numExterior"] = $impofedelcarpetadDto->getNumExterior();
                $delitosRelacion["cp"] = $impofedelcarpetadDto->getCp();

                for ($index = 0; $index < count($imputadoscarpetasDto); $index++) {
                    if ($imputadoscarpetasDto[$index]->getIdImputadoCarpeta() == $impofedelcarpetadDto->getIdImputadoCarpeta()) {
                        $delitosRelacion["imputados"] = array("idImputadoCarpeta" => $imputadoscarpetasDto[$index]->getIdImputadoCarpeta(), "nombre" => utf8_encode($imputadoscarpetasDto[$index]->getNombre()), "paterno" => utf8_encode($imputadoscarpetasDto[$index]->getPaterno()), "materno" => utf8_encode($imputadoscarpetasDto[$index]->getMaterno()), "cveTipoPersona" => utf8_encode($imputadoscarpetasDto[$index]->getCveTipoPersona()), "nombreMoral" => utf8_encode($imputadoscarpetasDto[$index]->getNombreMoral()));
                        break;
                    }
                }

                for ($index = 0; $index < count($ofendidoscarpetasDto); $index++) {
                    if ($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta() == $impofedelcarpetadDto->getIdOfendidoCarpeta()) {
                        $delitosRelacion["ofendidos"] = array("idOfendidoCarpeta" => $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta(), "nombre" => utf8_encode($ofendidoscarpetasDto[$index]->getNombre()), "paterno" => utf8_encode($ofendidoscarpetasDto[$index]->getPaterno()), "materno" => utf8_encode($ofendidoscarpetasDto[$index]->getMaterno()), "cveTipoPersona" => $ofendidoscarpetasDto[$index]->getCveTipoPersona(), "nombreMoral" => utf8_encode($ofendidoscarpetasDto[$index]->getNombreMoral()));
                        break;
                    }
                }

                for ($index = 0; $index < count($delitoscarpetasDto); $index++) {
                    $delitoscarpetasDto[$index]->getIdDelitoCarpeta();
                    if ($delitoscarpetasDto[$index]->getIdDelitoCarpeta() == $impofedelcarpetadDto->getIdDelitoCarpeta()) {
                        $delitosDto = new DelitosDTO();
                        $delitosDto->setCveDelito($delitoscarpetasDto[$index]->getCveDelito());
                        $delitosDao = new DelitosDAO();
                        $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        foreach ($delitosDto as $keyDelitos => $valueDelitos) {
                            $delitosRelacion["delitos"] = array("IdDelitoCarpeta" => $delitoscarpetasDto[$index]->getIdDelitoCarpeta(), "cveDelito" => $valueDelitos->getCveDelito(), "desDelito" => utf8_encode($valueDelitos->getDesDelito()));
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($modalidadesDto); $index++) {
                    if ($modalidadesDto[$index]->getCveModalidad() == $impofedelcarpetadDto->getCveModalidad()) {
                        $delitosRelacion["modalidad"] = array("cveModalidad" => $modalidadesDto[$index]->getCveModalidad(), "desModalidad" => utf8_encode($modalidadesDto[$index]->getDesModalidad()));
                        break;
                    }
                }

                for ($index = 0; $index < count($comisionesDto); $index++) {
                    if ($comisionesDto[$index]->getCveComision() == $impofedelcarpetadDto->getCveComision()) {
                        $delitosRelacion["comisiones"] = array("cveComision" => $comisionesDto[$index]->getCveComision(), "desComision" => utf8_encode($comisionesDto[$index]->getDesComision()));
                        break;
                    }
                }

                for ($index = 0; $index < count($concursosDto); $index++) {
                    if ($concursosDto[$index]->getCveConcurso() == $impofedelcarpetadDto->getCveConcurso()) {
                        $delitosRelacion["concurso"] = array("cveConcurso" => $concursosDto[$index]->getCveConcurso(), "desConcurso" => utf8_encode($concursosDto[$index]->getDesConcurso()));
                        break;
                    }
                }

                for ($index = 0; $index < count($clasificacionesDelitosOrdenDto); $index++) {
                    if ($clasificacionesDelitosOrdenDto[$index]->getCveClasificacionDelitoOrden() == $impofedelcarpetadDto->getCveClasificacionDelitoOrden()) {
                        $delitosRelacion["clasificacionDelitoOrden"] = array("cveClasificacionDelitoOrden" => $clasificacionesDelitosOrdenDto[$index]->getCveClasificacionDelitoOrden(), "desClasificacionDelitoOrden" => utf8_encode($clasificacionesDelitosOrdenDto[$index]->getDesClasificacionDelitoOrden()));
                        break;
                    }
                }

                for ($index = 0; $index < count($elementosComisionesDto); $index++) {
                    if ($elementosComisionesDto[$index]->getCveElementoComision() == $impofedelcarpetadDto->getCveElementoComision()) {
                        $delitosRelacion["elementoComision"] = array("cveElementoComision" => $elementosComisionesDto[$index]->getCveElementoComision(), "desElementoComision" => utf8_encode($elementosComisionesDto[$index]->getDesElementoComision()));
                        break;
                    }
                }

                for ($index = 0; $index < count($clasificacionesDelitosDto); $index++) {
                    if ($clasificacionesDelitosDto[$index]->getCveClasificacionDelito() == $impofedelcarpetadDto->getCveClasificacionDelito()) {
                        $delitosRelacion["clasificacionDelito"] = array("cveClasificacionDelito" => $clasificacionesDelitosDto[$index]->getCveClasificacionDelito(), "desClasificacionDelito" => utf8_encode($clasificacionesDelitosDto[$index]->getDesClasificacionDelito()));
                        break;
                    }
                }

                for ($index = 0; $index < count($formasAccionesDto); $index++) {
                    if ($formasAccionesDto[$index]->getCveFormaAccion() == $impofedelcarpetadDto->getCveFormaAccion()) {
                        $delitosRelacion["formaAccion"] = array("cveFormaAccion" => $formasAccionesDto[$index]->getCveFormaAccion(), "desFormaAccion" => utf8_encode($formasAccionesDto[$index]->getDesFormaAccion()));
                        break;
                    }
                }

                for ($index = 0; $index < count($consumacionesDto); $index++) {
                    if ($consumacionesDto[$index]->getCveConsumacion() == $impofedelcarpetadDto->getCveConsumacion()) {
                        $delitosRelacion["consumacion"] = array("cveConsumacion" => $consumacionesDto[$index]->getCveConsumacion(), "desConsumacion" => utf8_encode($consumacionesDto[$index]->getDesConsumacion()));
                        break;
                    }
                }

                for ($index = 0; $index < count($municipiosDto); $index++) {
                    if ($municipiosDto[$index]->getCveMunicipio() == $impofedelcarpetadDto->getCveMunicipio()) {
                        $delitosRelacion["municipio"] = array("cveMunicipio" => $municipiosDto[$index]->getCveMunicipio(), "desMunicipio" => utf8_encode($municipiosDto[$index]->getDesMunicipio()));
                        break;
                    } else {
                        $delitosRelacion["municipio"] = array("cveMunicipio" => 0, "desMunicipio" => "");
                    }
                }

                for ($index = 0; $index < count($estadosDto); $index++) {
                    if ($estadosDto[$index]->getCveEstado() == $impofedelcarpetadDto->getCveEntidad()) {
                        $delitosRelacion["Estado"] = array("cveEstado" => $estadosDto[$index]->getCveEstado(), "desEstado" => utf8_encode($estadosDto[$index]->getDesEstado()));
                        break;
                    } else {
                        $delitosRelacion["Estado"] = array("cveEstado" => 0, "desEstado" => "");
                    }
                }

                for ($index = 0; $index < count($gradoParticipacionesDto); $index++) {
                    if ($gradoParticipacionesDto[$index]->getCveGradoParticipacion() == $impofedelcarpetadDto->getCveGradoParticipacion()) {
                        $delitosRelacion["gradoParticipacion"] = array("cveGradoParticipacion" => $gradoParticipacionesDto[$index]->getCveGradoParticipacion(), "desGradoParticipacion" => utf8_encode($gradoParticipacionesDto[$index]->getDesGradoParticipacion()));
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposrelimpofeDto); $index++) {
                    if ($tiposrelimpofeDto[$index]->getCveRelacionImpOfe() == $impofedelcarpetadDto->getCveRelacionImpOfe()) {
                        $delitosRelacion["relacionImpOfe"] = array("cveRelacionImpOfe" => $tiposrelimpofeDto[$index]->getCveRelacionImpOfe(), "desRelacionImpOfe" => utf8_encode($tiposrelimpofeDto[$index]->getDesRelacionImpOfe()));
                        break;
                    }
                }

                $impOfeDelSolArray[] = $delitosRelacion;
            }
            //print_r($impOfeDelSolArray);
            for ($n = 0; $n < count($impOfeDelSolArray); $n++) {
                if (array_key_exists("imputados", $impOfeDelSolArray[$n]) &&
                        array_key_exists("ofendidos", $impOfeDelSolArray[$n]) &&
                        array_key_exists("delitos", $impOfeDelSolArray[$n])) {
                    $error = false;
                } else {
                    $error = true;
                }
                if ($error) {
                    break;
                }
            }
            if (!$error) {
                $resultado = json_encode($impOfeDelSolArray);
            } else {
                $resultado = 0;
            }
        } else {
            $resultado = 0;
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return $resultado;
    }

    /*
     * insertar relacion imputados ofenidos delitos
     */

    public function insertImpofedelcarpetasrelacion($ImpofedelcarpetasDto = "", $proveedor = null) {
        $bitacora = new BitacoramovimientosController();
        $error = false;
        //print_r($ImpofedelcarpetasDto);
        $validaCampos = $this->validaCampos($ImpofedelcarpetasDto);
        if ($validaCampos['estatus'] != "OK") {
            exit(json_encode($validaCampos));
        }
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        $impofedelTmp = new ImpofedelcarpetasDTO();
        $impofedelTmp->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $impofedelTmp->setIdImputadoCarpeta($ImpofedelcarpetasDto->getIdImputadoCarpeta());
        $impofedelTmp->setIdOfendidoCarpeta($ImpofedelcarpetasDto->getIdOfendidoCarpeta());
        $impofedelTmp->setIdDelitoCarpeta($ImpofedelcarpetasDto->getIdDelitoCarpeta());
        $impofedelTmp->setActivo("S");
        $validacionExiste = $this->selectImpofedelcarpetas($impofedelTmp);
        $ponderacionInicial = 0;
        $ponderacionFinal = 0;
        $totalPonderacion = 0;
        $totalPuntaje = 0;

        if ($validacionExiste != "") {
            $mensaje = array("mensaje" => "YA EXISTE UN REGISTRO DE RELACI&Oacute;N PARA EL IMPUTADO, OFENDIDO Y DELITO SELECCIONADOS");
            $estatus = array("estatus" => "Error", "totalCount" => "0");
            $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));
            $respuestaValidacion = json_encode($respuesta);
            return $respuestaValidacion;
        } else {
            $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->insertImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor);
            if ($ImpofedelcarpetasDto != "") {
                $bitacoraImpofedel = $bitacora->agregar(209, 'INSERCION tblimpofedelcarpetas', 'txt', serialize($ImpofedelcarpetasDto[0]), '');
                if (!count($bitacoraImpofedel)) {
                    throw new Exception('No se pudo insertar en bitacora accion insercion impofedel carpetas');
                }
                /*
                 * Si se modifica la relacion impofedel carpetas, actualizar la ponderacion
                 * de la carpeta judicial
                 */
                $pesoDelito = 0;
                $pesoImputado = 0;
                $pesoOfendido = 0;
                $ponderacionCarpeta = 0;
                $impofedelDto = new ImpofedelcarpetasDTO();
                $impofedelDao = new ImpofedelcarpetasDAO();
                $impofedelDto->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                $impofedelDto->setActivo("S");
                $impofedelDto = $impofedelDao->selectImpofedelcarpetas($impofedelDto);
                if ($impofedelDto != "") {

                    for ($x = 0; $x < count($impofedelDto); $x++) {
                        /*
                         * Obtener el peso de cada delito
                         */
                        $delitosCarpetasDto = new DelitoscarpetasDTO();
                        $delitosCarpetasDao = new DelitoscarpetasDAO();
                        $delitosCarpetasDto->setIdDelitoCarpeta($impofedelDto[$x]->getIdDelitoCarpeta());
                        $delitosCarpetasDto->setActivo("S");
                        $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto);
                        if ($delitosCarpetasDto != "") {
                            for ($d = 0; $d < count($delitosCarpetasDto); $d++) {
                                $delitosDto = new DelitosDTO();
                                $delitosDao = new DelitosDAO();
                                $delitosDto->setCveDelito($delitosCarpetasDto[$d]->getCveDelito());
                                $delitosDto->setActivo("S");
                                $delitosDto = $delitosDao->selectDelitos($delitosDto);
                                if ($delitosDto != "") {
                                    for ($y = 0; $y < count($delitosDto); $y++) {
                                        $pesoDelito += $delitosDto[$y]->getPeso();
                                    }
                                }
                            }
                        }
                        $pesoImputado += 1;
                        $pesoOfendido += 1;
                    }
                    /*
                     * Consultar la ponderacion inicial antes de actualizar
                     */
                    $carpetasTmp = new CarpetasjudicialesDTO();
                    $caprteasJudicialesDao = new CarpetasjudicialesDAO();

                    $carpetasTmp->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                    $carpetasTmp->setActivo("S");
                    $carpetasTmp = $caprteasJudicialesDao->selectCarpetasjudiciales($carpetasTmp);
                    if ($carpetasTmp != "") {
                        $ponderacionInicial = $carpetasTmp[0]->getPonderacion();
                    } else {
                        $ponderacionInicial = 0;
                    }
                    $ponderacionCarpeta = $pesoImputado + $pesoOfendido + $pesoDelito;
                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();

                    $carpetasJudicialesDto->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                    $carpetasJudicialesDto->setPonderacion($ponderacionCarpeta);
                    $carpetasJudicialesDto = $caprteasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto);
                    if ($carpetasJudicialesDto != "") {
                        $error = false;
                        $ponderacionFinal = $carpetasJudicialesDto[0]->getPonderacion();
                    } else {
                        $ponderacionFinal = 0;
                        $error = true;
                    }
                    $totalPonderacion = (int) $ponderacionFinal - (int) $ponderacionInicial;
                    /*
                     * Revisar el puntaje asigando a el juzgador
                     */
//                    $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
//                    $juzgadoresCarpetasDao = new JuzgadorescarpetasDAO();
//                    $juzgadoresCarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
//                    $juzgadoresCarpetasDto->setActivo("S");
//                    $juzgadoresCarpetasDto = $juzgadoresCarpetasDao->selectJuzgadorescarpetas($juzgadoresCarpetasDto);
//                    if($juzgadoresCarpetasDto != "") {
//                        $mes = (int)date("m");
//                        $anio = date("Y");
//                        $controlCargaDto = new ControlcargasDTO();
//                        $controlCargaDao = new ControlcargasDAO();
//                        $controlCargaDto->setIdJuzgador($juzgadoresCarpetasDto[0]->getIdJuzgador());
//                        $controlCargaDto->setCveMes($mes);
//                        $controlCargaDto->setAnioCarga($anio);
//                        $controlCargaDto = $controlCargaDao->selectControlcargas($controlCargaDto);
//                        if($controlCargaDto != "") {
//                            $totalPuntaje = (int)$controlCargaDto[0]->getTotalPuntaje() + $totalPonderacion;
//                            $controlCargaTmp = new ControlcargasDTO();
//                            $controlCargaTmp->setIdControlCarga($controlCargaDto[0]->getIdControlCarga());
//                            $controlCargaTmp->setTotalPuntaje($totalPuntaje);
//                            $controlCargaTmp->setTotalAsignado($totalPuntaje);
//                            $controlCargaTmp = $controlCargaDao->updateControlcargas($controlCargaTmp);
//                            if($controlCargaTmp != "") {
//                                $error = false;
//                            } else {
//                                $error = true;
//                            }
//                        }
//                    }
                }
                $error = false;
            } else {
                $error = true;
            }

            if (!$error) {
                $dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                //$bitacoraDomicilio = $bitacora->agregar(93, 'INSERCION tblimpofedelsolicitudes', 'txt', serialize($ImpofedelcarpetasDto[0]), '');
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL GUARDAR LA RELACION IMPOFEDEL CARPETAS"));
            }
        }
    }

    /*
     * actualizar relacion imputados ofendidos carpetas
     */

    public function updateImpofedelcarpetasrelacion($ImpofedelcarpetasDto = "", $proveedor = null) {
        $bitacora = new BitacoramovimientosController();
        $error = false;
        $validaCampos = $this->validaCampos($ImpofedelcarpetasDto);
        if ($validaCampos['estatus'] != "OK") {
            exit(json_encode($validaCampos));
        }
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        //$validacionExiste = $this->selectImpofedelcarpetas($ImpofedelcarpetasDto);
        $impofedelTmp = new ImpofedelcarpetasDTO();
        $impofedelTmp->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $impofedelTmp->setIdImputadoCarpeta($ImpofedelcarpetasDto->getIdImputadoCarpeta());
        $impofedelTmp->setIdOfendidoCarpeta($ImpofedelcarpetasDto->getIdOfendidoCarpeta());
        $impofedelTmp->setIdDelitoCarpeta($ImpofedelcarpetasDto->getIdDelitoCarpeta());
        $impofedelTmp->setActivo("S");
        $order = " AND idImpofedelCarpeta<> " . $ImpofedelcarpetasDto->getIdImpofedelCarpeta();
        $impofedelCarpetasDao = new ImpofedelcarpetasDAO();
        $validacionExiste = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelTmp, $order);
        if ($validacionExiste != "") {
            $mensaje = array("mensaje" => "YA EXISTE UN REGISTRO DE RELACI&Oacute;N PARA EL IMPUTADO, OFENDIDO Y DELITO SELECCIONADOS");
            $estatus = array("estatus" => "Error", "totalCount" => "0");
            $respuesta = array_merge($estatus, array("resultados" => array($mensaje)));
            $respuestaValidacion = json_encode($respuesta);
            return $respuestaValidacion;
        } else {
            $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
            $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->modificarImpofedelcarpetas($ImpofedelcarpetasDto, $proveedor);
            if ($ImpofedelcarpetasDto != "") {
                $bitacoraImpofedel = $bitacora->agregar(210, 'MODIFICACION tblimpofedelcarpetas', 'txt', serialize($ImpofedelcarpetasDto[0]), '');
                if (!count($bitacoraImpofedel)) {
                    throw new Exception('No se pudo insertar en bitacora accion modificacion impofedel carpetas');
                }
                /*
                 * Si se modifica la relacion impofedel carpetas, actualizar la ponderacion
                 * de la carpeta judicial
                 */
                $pesoDelito = 0;
                $pesoImputado = 0;
                $pesoOfendido = 0;
                $ponderacionCarpeta = 0;

                $ponderacionInicial = 0;
                $ponderacionFinal = 0;
                $totalPonderacion = 0;
                $totalPuntaje = 0;

                $impofedelDto = new ImpofedelcarpetasDTO();
                $impofedelDao = new ImpofedelcarpetasDAO();
                $impofedelDto->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                $impofedelDto->setActivo("S");
                $impofedelDto = $impofedelDao->selectImpofedelcarpetas($impofedelDto);
                if ($impofedelDto != "") {

                    for ($x = 0; $x < count($impofedelDto); $x++) {
                        /*
                         * Obtener el peso de cada delito
                         */
                        $delitosCarpetasDto = new DelitoscarpetasDTO();
                        $delitosCarpetasDao = new DelitoscarpetasDAO();
                        $delitosCarpetasDto->setIdDelitoCarpeta($impofedelDto[$x]->getIdDelitoCarpeta());
                        $delitosCarpetasDto->setActivo("S");
                        $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto);
                        if ($delitosCarpetasDto != "") {
                            for ($d = 0; $d < count($delitosCarpetasDto); $d++) {
                                $delitosDto = new DelitosDTO();
                                $delitosDao = new DelitosDAO();
                                $delitosDto->setCveDelito($delitosCarpetasDto[$d]->getCveDelito());
                                $delitosDto->setActivo("S");
                                $delitosDto = $delitosDao->selectDelitos($delitosDto);
                                if ($delitosDto != "") {
                                    for ($y = 0; $y < count($delitosDto); $y++) {
                                        $pesoDelito += $delitosDto[$y]->getPeso();
                                    }
                                }
                            }
                        }
                        $pesoImputado += 1;
                        $pesoOfendido += 1;
                    }
                    $carpetasTmp = new CarpetasjudicialesDTO();
                    $caprteasJudicialesDao = new CarpetasjudicialesDAO();

                    $carpetasTmp->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                    $carpetasTmp->setActivo("S");
                    $carpetasTmp = $caprteasJudicialesDao->selectCarpetasjudiciales($carpetasTmp);
                    if ($carpetasTmp != "") {
                        $ponderacionInicial = $carpetasTmp[0]->getPonderacion();
                    } else {
                        $ponderacionInicial = 0;
                    }
                    /*
                     * Actualizar la ponderacion de la carpeta judicial
                     */
                    $ponderacionCarpeta = $pesoImputado + $pesoOfendido + $pesoDelito;
                    $carpetasJudicialesDto = new CarpetasjudicialesDTO();

                    $carpetasJudicialesDto->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                    $carpetasJudicialesDto->setPonderacion($ponderacionCarpeta);
                    $carpetasJudicialesDto = $caprteasJudicialesDao->updateCarpetasjudiciales($carpetasJudicialesDto);
                    if ($carpetasJudicialesDto != "") {
                        $ponderacionFinal = $carpetasJudicialesDto[0]->getPonderacion();
                        $error = false;
                    } else {
                        $ponderacionFinal = 0;
                        $error = true;
                    }
                    $totalPonderacion = (int) $ponderacionFinal - (int) $ponderacionInicial;
                    /*
                     * Revisar el puntaje asigando a el juzgador
                     */
                    $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
                    $juzgadoresCarpetasDao = new JuzgadorescarpetasDAO();
                    $juzgadoresCarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto[0]->getIdCarpetaJudicial());
                    $juzgadoresCarpetasDto->setActivo("S");
                    $juzgadoresCarpetasDto = $juzgadoresCarpetasDao->selectJuzgadorescarpetas($juzgadoresCarpetasDto);
                    if ($juzgadoresCarpetasDto != "") {
//                        $mes = (int)date("m");
//                        $anio = date("Y");
//                        $controlCargaDto = new ControlcargasDTO();
//                        $controlCargaDao = new ControlcargasDAO();
//                        $controlCargaDto->setIdJuzgador($juzgadoresCarpetasDto[0]->getIdJuzgador());
//                        $controlCargaDto->setCveMes($mes);
//                        $controlCargaDto->setAnioCarga($anio);
//                        $controlCargaDto = $controlCargaDao->selectControlcargas($controlCargaDto);
//                        if($controlCargaDto != "") {
//                            $totalPuntaje = (int)$controlCargaDto[0]->getTotalPuntaje() + $totalPonderacion;
//                            $controlCargaTmp = new ControlcargasDTO();
//                            $controlCargaTmp->setIdControlCarga($controlCargaDto[0]->getIdControlCarga());
//                            $controlCargaTmp->setTotalPuntaje($totalPuntaje);
//                            $controlCargaTmp->setTotalAsignado($totalPuntaje);
//                            $controlCargaTmp = $controlCargaDao->updateControlcargas($controlCargaTmp);
//                            if($controlCargaTmp != "") {
//                                $error = false;
//                            } else {
//                                $error = true;
//                            }
//                        }
                    }
                }
                $error = false;
            } else {
                $error = true;
            }

            if (!$error) {
                $dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
                //$bitacoraDomicilio = $bitacora->agregar(94, 'ACTUALIZACION tblimpofedelsolicitudes', 'txt', serialize($ImpofedelcarpetasDto[0]), '');
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA");
            } else {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ACTUALIZAR LA RELACION IMPOFEDEL CARPETAS"));
            }
        }
    }

    /*
     * Borrado logico impofedelcarpetas
     */

    public function updateImpofedelcarpetasrelacionbaja($ImpofedelcarpetasDto = "", $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $error = false;
        $bitacora = new BitacoramovimientosController();
        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $impofedelTmp = new ImpofedelcarpetasDTO();
        $impofedelTmp->setIdImpOfeDelCarpeta($ImpofedelcarpetasDto->getIdImpOfeDelCarpeta());
        $impofedelTmp->setActivo("S");
        $impofedelTmp = $ImpofedelcarpetasDao->selectImpofedelcarpetas($impofedelTmp, "", $this->proveedor);
        if ($impofedelTmp != "") {
            $impofedelDto = new ImpofedelcarpetasDTO();
            $impofedelDto->setIdCarpetaJudicial($impofedelTmp[0]->getIdCarpetaJudicial());
            $impofedelDto->setActivo("S");
            $impofedelDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($impofedelDto, "", $this->proveedor);
            if ($impofedelDto != "") {
                $numRelacion = count($impofedelDto);
            } else {
                $numRelacion = 0;
            }
            //echo $numRelacion;
            if ($numRelacion > 1) {
                $validaEliminar = $this->validaEliminarRelacionImpofedel($ImpofedelcarpetasDto, $this->proveedor);
                if ($validaEliminar['estatus'] == 'ok') {
                    /*
                     * Eliminar los registros relacionados de violencia de genero, trata y acoso sexual
                     */
                    $eliminarViolencia = $this->borrarViolenciaCausas($ImpofedelcarpetasDto, $this->proveedor);
                    if ($eliminarViolencia) {

                        $error = false;
                        $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->eliminarImpofedelCarpetasByIdImpofedel($ImpofedelcarpetasDto, $this->proveedor);
                        if ($ImpofedelcarpetasDto) {
                            $error = false;
                            $bitacoraImpofedel = $bitacora->agregar(211, 'BORRADO LOGICO tblimpofedelcarpetas', 'txt', serialize($ImpofedelcarpetasDto[0]), '', $this->proveedor);
                            if (!count($bitacoraImpofedel)) {
                                $error = true;
                                throw new Exception('No se pudo insertar en bitacora accion borrado logico impofedel carpetas');
                            } else {
                                $error = false;
                            }
                        } else {
                            $error = true;
                        }
                    } else {
                        $error = true;
                    }

                    if (!$error) {
                        if ($proveedor == null) {
                            $this->proveedor->execute("COMMIT");
                        }
                        $result = array(
                            "status" => "Ok",
                            "totalCount" => 1,
                            "text" => "El registro se elimino de forma correcta"
                        );
                    } else {
                        if ($proveedor == null) {
                            $this->proveedor->execute("ROLLBACK");
                        }
                        $result = array(
                            "status" => "error",
                            "totalCount" => 0,
                            "text" => "Ocurrio un error al eliminar el registro"
                        );
                    }
                } else {
                    $result = array(
                        "status" => "error",
                        "totalCount" => 0,
                        "text" => $validaEliminar['mensaje']
                    );
                }
            } else {
                $result = array(
                    "status" => "error",
                    "totalCount" => 0,
                    "text" => "Debe haber al menos una relacion de imputados, ofendidos y delitos, favor de verificar"
                );
            }
        } else {
            $result = array(
                "status" => "error",
                "totalCount" => 0,
                "text" => "No hay relacion de imputados, ofendidos y delitos"
            );
        }

        //$dtoToJson = new DtoToJson($ImpofedelcarpetasDto);
        //$bitacoraDomicilio = $bitacora->agregar(95, 'BORRADO LOGICO tblimpofedelsolicitudes', 'txt', serialize($ImpofedelcarpetasDto[0]), '');
        return $result;
    }

    public function selectImpofedelcondelitos($ImpofedelcarpetasDto, $proveedor = null) {


        $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto->setActivo('S');
        $ImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, " ORDER BY idImputadoCarpeta,idOfendidoCarpeta,idDelitoCarpeta ASC", $this->proveedor);
        $idimofe = "";
        $ofendido = "";
        $delito = "";
        $datcg = [];
        $cnta = 0;



        $impsenDAO = new ImputadossentenciasDAO();
        $impsenDTO = new ImputadossentenciasDTO();

        $impsenDTO->setActivo('S');
        $impsenDTO->setIdImpOfeDelCarpeta($ImpofedelcarpetasDto);
        $cons = $impsenDAO->selectImputadossentencias($impsenDTO);

        if ($cons != "") {
            print_r($cons);
        }



        return;

        foreach ($ImpofedelcarpetasDto as $consof) {

            $idimofe = $consof->getIdOfendidoCarpeta();
            $delito = $consof->getIdDelitoCarpeta();

            $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
            $ofendidoscarpetasDto->setIdOfendidoCarpeta($idimofe);

            $ofendidoscarpetasDto->setActivo('S');
            $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
            $cnsofe = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "");



            foreach ($cnsofe as $vc) {
                $ofendido = $vc->getPaterno() . " " . $vc->getMaterno() . " " . $vc->getNombre();
            }
            $delitoscarpetasDto = new DelitoscarpetasDTO();
            $delitoscarpetasDto->setIdDelitoCarpeta($delito);
            $delitoscarpetasDto->setActivo("S");
            $delitoscarpetasDao = new DelitoscarpetasDAO();
            $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "");
            //var_dump($delitoscarpetasDto);

            foreach ($delitoscarpetasDto as $dca) {
                $delitosDto = new DelitosDTO();
                $delitosDto->setCveDelito($dca->getcveDelito());
                $delitosDto->setActivo('S');

                $delitosDao = new DelitosDAO();
                $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);

                foreach ($delitosDto as $descdel) {
                    $delito = $descdel->getDesDelito();
                }
            }


            $datcg[$cnta] = array("id" => $idimofe, "ofendido" => utf8_encode($ofendido), "delito" => $delito);
            $cnta++;
        }

        // print_r($datcg);
        echo "aqui--------------";
        print_r($datcg);
        return;

        $impOfeDelSolArray = array();
        $error = false;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $imputadoscarpetasDto = new ImputadoscarpetasDTO();
        $imputadoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $imputadoscarpetasDao = new ImputadoscarpetasDAO();
        $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);
        //var_dump($imputadoscarpetasDto);

        $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
        $ofendidoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
        $ofendidoscarpetasDto = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, "", $this->proveedor);
        //var_dump($ofendidoscarpetasDto);

        $delitoscarpetasDto = new DelitoscarpetasDTO();
        $delitoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $delitoscarpetasDto->setActivo("S");
        $delitoscarpetasDao = new DelitoscarpetasDAO();
        $delitoscarpetasDto = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);
        //var_dump($delitoscarpetasDto);
        $modalidadesDto = new ModalidadesDTO();
        $modalidadesDao = new ModalidadesDAO();
        $modalidadesDto = $modalidadesDao->selectModalidades($modalidadesDto, "ORDER BY desModalidad ASC", $this->proveedor);
        //var_dump($modalidadesDto);

        $comisionesDto = new ComisionesDTO();
        $comisionesDao = new ComisionesDAO();
        $comisionesDto = $comisionesDao->selectComisiones($comisionesDto, "", $this->proveedor);
        //var_dump($comisionesDto);

        $concursosDto = new ConcursosDTO();
        $concursosDao = new ConcursosDAO();
        $concursosDto = $concursosDao->selectConcursos($concursosDto, "", $this->proveedor);
        //var_dump($concursosDto);

        $clasificacionesDelitosOrdenDto = new ClasificacionesDelitosOrdenDTO();
        $clasificacionesDelitosOrdenDao = new ClasificacionesDelitosOrdenDAO();
        $clasificacionesDelitosOrdenDto = $clasificacionesDelitosOrdenDao->selectClasificacionesDelitosOrden($clasificacionesDelitosOrdenDto, "", $this->proveedor);
        //var_dump($clasificacionesDelitosOrdenDto);

        $elementosComisionesDto = new elementosComisionesDTO();
        $elementosComisionesDao = new elementosComisionesDAO();
        $elementosComisionesDto = $elementosComisionesDao->selectelementosComisiones($elementosComisionesDto, "", $this->proveedor);
        //var_dump($elementosComisionesDto);

        $clasificacionesDelitosDto = new clasificacionesDelitosDTO();
        $clasificacionesDelitosDao = new clasificacionesDelitosDAO();
        $clasificacionesDelitosDto = $clasificacionesDelitosDao->selectClasificacionesDelitos($clasificacionesDelitosDto, "", $this->proveedor);
        //var_dump($clasificacionesDelitosDto);

        $formasAccionesDto = new FormasAccionesDTO();
        $formasAccionesDao = new FormasAccionesDAO();
        $formasAccionesDto = $formasAccionesDao->selectFormasAcciones($formasAccionesDto, "", $this->proveedor);
        //var_dump($formasAccionesDto);

        $consumacionesDto = new ConsumacionesDTO();
        $consumacionesDao = new ConsumacionesDAO();
        $consumacionesDto = $consumacionesDao->selectConsumaciones($consumacionesDto, "", $this->proveedor);
        //var_dump($consumacionesDto);

        $municipiosDto = new MunicipiosDTO();
        $municipiosDao = new MunicipiosDAO();
        $municipiosDto = $municipiosDao->selectMunicipios($municipiosDto, "", $this->proveedor);
        //var_dump($municipiosDto);

        $estadosDto = new EstadosDTO();
        $estadosDao = new EstadosDAO();
        $estadosDto = $estadosDao->selectEstados($estadosDto, "", $this->proveedor);
        //var_dump($estadosDto);

        $gradoParticipacionesDto = new GradoParticipacionesDTO();
        $gradoParticipacionesDao = new GradoParticipacionesDAO();
        $gradoParticipacionesDto = $gradoParticipacionesDao->selectGradoParticipaciones($gradoParticipacionesDto, "", $this->proveedor);
        //var_dump($gradoParticipacionesDto);

        $tiposrelimpofeDto = new TiposrelimpofeDTO();
        $tiposrelimpofeDao = new TiposrelimpofeDAO();
        $tiposrelimpofeDto = $tiposrelimpofeDao->selectTiposrelimpofe($tiposrelimpofeDto, "", $this->proveedor);
        //var_dump($tiposrelimpofeDto);

        $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto->setActivo('S');
        $ImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, " ORDER BY idImputadoCarpeta,idOfendidoCarpeta,idDelitoCarpeta ASC", $this->proveedor);

        if ($ImpofedelcarpetasDto != "") {
            foreach ($ImpofedelcarpetasDto as $impofedelcarpetadDto) {
                $delitosRelacion["idImpOfeDelCarpeta"] = $impofedelcarpetadDto->getIdImpOfeDelCarpeta();
                $delitosRelacion["fechaDelito"] = $impofedelcarpetadDto->getFechaDelito();
                $delitosRelacion["direccion"] = utf8_encode($impofedelcarpetadDto->getDireccion());
                $delitosRelacion["colonia"] = utf8_encode($impofedelcarpetadDto->getColonia());
                $delitosRelacion["numInterior"] = $impofedelcarpetadDto->getNumInterior();
                $delitosRelacion["numExterior"] = $impofedelcarpetadDto->getNumExterior();
                $delitosRelacion["cp"] = $impofedelcarpetadDto->getCp();

                for ($index = 0; $index < count($imputadoscarpetasDto); $index++) {
                    if ($imputadoscarpetasDto[$index]->getIdImputadoCarpeta() == $impofedelcarpetadDto->getIdImputadoCarpeta()) {
                        $delitosRelacion["imputados"] = array("idImputadoCarpeta" => $imputadoscarpetasDto[$index]->getIdImputadoCarpeta(), "nombre" => utf8_encode($imputadoscarpetasDto[$index]->getNombre()), "paterno" => utf8_encode($imputadoscarpetasDto[$index]->getPaterno()), "materno" => utf8_encode($imputadoscarpetasDto[$index]->getMaterno()), "cveTipoPersona" => utf8_encode($imputadoscarpetasDto[$index]->getCveTipoPersona()), "nombreMoral" => utf8_encode($imputadoscarpetasDto[$index]->getNombreMoral()));
                        break;
                    }
                }

                for ($index = 0; $index < count($ofendidoscarpetasDto); $index++) {
                    if ($ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta() == $impofedelcarpetadDto->getIdOfendidoCarpeta()) {
                        $delitosRelacion["ofendidos"] = array("idOfendidoCarpeta" => $ofendidoscarpetasDto[$index]->getIdOfendidoCarpeta(), "nombre" => utf8_encode($ofendidoscarpetasDto[$index]->getNombre()), "paterno" => utf8_encode($ofendidoscarpetasDto[$index]->getPaterno()), "materno" => utf8_encode($ofendidoscarpetasDto[$index]->getMaterno()), "cveTipoPersona" => $ofendidoscarpetasDto[$index]->getCveTipoPersona(), "nombreMoral" => utf8_encode($ofendidoscarpetasDto[$index]->getNombreMoral()));
                        break;
                    }
                }

                for ($index = 0; $index < count($delitoscarpetasDto); $index++) {
                    $delitoscarpetasDto[$index]->getIdDelitoCarpeta();
                    if ($delitoscarpetasDto[$index]->getIdDelitoCarpeta() == $impofedelcarpetadDto->getIdDelitoCarpeta()) {
                        $delitosDto = new DelitosDTO();
                        $delitosDto->setCveDelito($delitoscarpetasDto[$index]->getCveDelito());
                        $delitosDao = new DelitosDAO();
                        $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $this->proveedor);
                        foreach ($delitosDto as $keyDelitos => $valueDelitos) {
                            $delitosRelacion["delitos"] = array("IdDelitoCarpeta" => $delitoscarpetasDto[$index]->getIdDelitoCarpeta(), "cveDelito" => $valueDelitos->getCveDelito(), "desDelito" => $valueDelitos->getDesDelito());
                        }
                        break;
                    }
                }

                for ($index = 0; $index < count($modalidadesDto); $index++) {
                    if ($modalidadesDto[$index]->getCveModalidad() == $impofedelcarpetadDto->getCveModalidad()) {
                        $delitosRelacion["modalidad"] = array("cveModalidad" => $modalidadesDto[$index]->getCveModalidad(), "desModalidad" => $modalidadesDto[$index]->getDesModalidad());
                        break;
                    }
                }

                for ($index = 0; $index < count($comisionesDto); $index++) {
                    if ($comisionesDto[$index]->getCveComision() == $impofedelcarpetadDto->getCveComision()) {
                        $delitosRelacion["comisiones"] = array("cveComision" => $comisionesDto[$index]->getCveComision(), "desComision" => $comisionesDto[$index]->getDesComision());
                        break;
                    }
                }

                for ($index = 0; $index < count($concursosDto); $index++) {
                    if ($concursosDto[$index]->getCveConcurso() == $impofedelcarpetadDto->getCveConcurso()) {
                        $delitosRelacion["concurso"] = array("cveConcurso" => $concursosDto[$index]->getCveConcurso(), "desConcurso" => $concursosDto[$index]->getDesConcurso());
                        break;
                    }
                }

                for ($index = 0; $index < count($clasificacionesDelitosOrdenDto); $index++) {
                    if ($clasificacionesDelitosOrdenDto[$index]->getCveClasificacionDelitoOrden() == $impofedelcarpetadDto->getCveClasificacionDelitoOrden()) {
                        $delitosRelacion["clasificacionDelitoOrden"] = array("cveClasificacionDelitoOrden" => $clasificacionesDelitosOrdenDto[$index]->getCveClasificacionDelitoOrden(), "desClasificacionDelitoOrden" => $clasificacionesDelitosOrdenDto[$index]->getDesClasificacionDelitoOrden());
                        break;
                    }
                }

                for ($index = 0; $index < count($elementosComisionesDto); $index++) {
                    if ($elementosComisionesDto[$index]->getCveElementoComision() == $impofedelcarpetadDto->getCveElementoComision()) {
                        $delitosRelacion["elementoComision"] = array("cveElementoComision" => $elementosComisionesDto[$index]->getCveElementoComision(), "desElementoComision" => $elementosComisionesDto[$index]->getDesElementoComision());
                        break;
                    }
                }

                for ($index = 0; $index < count($clasificacionesDelitosDto); $index++) {
                    if ($clasificacionesDelitosDto[$index]->getCveClasificacionDelito() == $impofedelcarpetadDto->getCveClasificacionDelito()) {
                        $delitosRelacion["clasificacionDelito"] = array("cveClasificacionDelito" => $clasificacionesDelitosDto[$index]->getCveClasificacionDelito(), "desClasificacionDelito" => $clasificacionesDelitosDto[$index]->getDesClasificacionDelito());
                        break;
                    }
                }

                for ($index = 0; $index < count($formasAccionesDto); $index++) {
                    if ($formasAccionesDto[$index]->getCveFormaAccion() == $impofedelcarpetadDto->getCveFormaAccion()) {
                        $delitosRelacion["formaAccion"] = array("cveFormaAccion" => $formasAccionesDto[$index]->getCveFormaAccion(), "desFormaAccion" => $formasAccionesDto[$index]->getDesFormaAccion());
                        break;
                    }
                }

                for ($index = 0; $index < count($consumacionesDto); $index++) {
                    if ($consumacionesDto[$index]->getCveConsumacion() == $impofedelcarpetadDto->getCveConsumacion()) {
                        $delitosRelacion["consumacion"] = array("cveConsumacion" => $consumacionesDto[$index]->getCveConsumacion(), "desConsumacion" => $consumacionesDto[$index]->getDesConsumacion());
                        break;
                    }
                }

                for ($index = 0; $index < count($municipiosDto); $index++) {
                    if ($municipiosDto[$index]->getCveMunicipio() == $impofedelcarpetadDto->getCveMunicipio()) {
                        $delitosRelacion["municipio"] = array("cveMunicipio" => $municipiosDto[$index]->getCveMunicipio(), "desMunicipio" => $municipiosDto[$index]->getDesMunicipio());
                        break;
                    }
                }

                for ($index = 0; $index < count($estadosDto); $index++) {
                    if ($estadosDto[$index]->getCveEstado() == $impofedelcarpetadDto->getCveEntidad()) {
                        $delitosRelacion["Estado"] = array("cveEstado" => $estadosDto[$index]->getCveEstado(), "desEstado" => $estadosDto[$index]->getDesEstado());
                        break;
                    }
                }

                for ($index = 0; $index < count($gradoParticipacionesDto); $index++) {
                    if ($gradoParticipacionesDto[$index]->getCveGradoParticipacion() == $impofedelcarpetadDto->getCveGradoParticipacion()) {
                        $delitosRelacion["gradoParticipacion"] = array("cveGradoParticipacion" => $gradoParticipacionesDto[$index]->getCveGradoParticipacion(), "desGradoParticipacion" => $gradoParticipacionesDto[$index]->getDesGradoParticipacion());
                        break;
                    }
                }

                for ($index = 0; $index < count($tiposrelimpofeDto); $index++) {
                    if ($tiposrelimpofeDto[$index]->getCveRelacionImpOfe() == $impofedelcarpetadDto->getCveRelacionImpOfe()) {
                        $delitosRelacion["relacionImpOfe"] = array("cveRelacionImpOfe" => $tiposrelimpofeDto[$index]->getCveRelacionImpOfe(), "desRelacionImpOfe" => $tiposrelimpofeDto[$index]->getDesRelacionImpOfe());
                        break;
                    }
                }

                $impOfeDelSolArray[] = $delitosRelacion;
            }
            //print_r($impOfeDelSolArray);
            $resultado = json_encode($impOfeDelSolArray);
        } else {
            $resultado = 0;
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return $resultado;
    }

    /*
     * relacion paso 6
     */

    public function selectImpofedelcarpetasrelacionPaso($ImpofedelcarpetasDto, $proveedor = null) {
        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $rsImpofedelcarpeta = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, " ORDER BY idImputadoCarpeta,idOfendidoCarpeta,idDelitoCarpeta ASC");
        //var_dump($rsImpofedelcarpeta);
        $json = "";
        $status = false;
        $x = 1;
        $i = 1;
        $control = 0;
        $resultado = "";
        $arrayGeneral = array();
        if ($rsImpofedelcarpeta != "" && (count($rsImpofedelcarpeta) != 0)) {

            foreach ($rsImpofedelcarpeta as $Impofedelcarpeta) {
                $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                $ofendidoscarpetasDto->setIdOfendidoCarpeta($Impofedelcarpeta->getIdOfendidoCarpeta());
                $ofendidoscarpetasDto->setActivo("S");
                $orden = " AND (cveVictimaDeTrata = 1 or cveVictimaDeViolenciaDeGenero = 1 or cveVictimaDeLaDelincuenciaOrganizada = 1 or cveVictimaDeAcoso = 1 )";
                $rsOfendido = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, $orden, $this->proveedor);
                //var_dump($rsOfendido);
                if ($rsOfendido != "" && (count($rsOfendido) != 0)) {
                    $control++;
                    $arrayGeneral[] = array(
                        'idImpOfeDelCarpeta' => $Impofedelcarpeta->getIdImpOfeDelCarpeta(),
                        'idCarpetaJudicial' => $Impofedelcarpeta->getIdCarpetaJudicial(),
                        'idImputadoCarpeta' => $Impofedelcarpeta->getIdImputadoCarpeta(),
                        'idOfendidoCarpeta' => $Impofedelcarpeta->getIdOfendidoCarpeta(),
                        'idDelitoCarpeta' => $Impofedelcarpeta->getIdDelitoCarpeta()
                    );
                }
            }
            if ($control != 0) {
                $json .= "{";
                $json .= '"status":"ok",';
                $json .= '"totalCount":"' . count($rsImpofedelcarpeta) . '",';
                $json .= '"data":[';
                foreach ($arrayGeneral as $general) {

                    $imputadoscarpetasDto = new ImputadoscarpetasDTO();
                    $imputadoscarpetasDto->setIdImputadoCarpeta($general['idImputadoCarpeta']);
                    $imputadoscarpetasDto->setActivo("S");
                    $imputadoscarpetasDao = new ImputadoscarpetasDAO();
                    $rsImputados = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);

                    $ofendidoscarpetasDto = new OfendidoscarpetasDTO();
                    $ofendidoscarpetasDao = new OfendidoscarpetasDAO();
                    $ofendidoscarpetasDto->setIdOfendidoCarpeta($general['idOfendidoCarpeta']);
                    $ofendidoscarpetasDto->setActivo("S");
                    $orden = " AND (cveVictimaDeTrata = 1 or cveVictimaDeViolenciaDeGenero = 1 or cveVictimaDeLaDelincuenciaOrganizada = 1 or cveVictimaDeAcoso = 1 )";
                    $rsOfendido = $ofendidoscarpetasDao->selectOfendidoscarpetas($ofendidoscarpetasDto, $orden, $this->proveedor);

                    $delitoscarpetasDto = new DelitoscarpetasDTO();
                    $delitoscarpetasDao = new DelitoscarpetasDAO();
                    $delitoscarpetasDto->setIdDelitoCarpeta($general['idDelitoCarpeta']);
                    $delitoscarpetasDto->setActivo("S");
                    $rsDelitos = $delitoscarpetasDao->selectDelitoscarpetas($delitoscarpetasDto, "", $this->proveedor);
                    if ($rsDelitos != "") {
                        $delitosDto = new DelitosDTO();
                        $delitosDao = new DelitosDAO();
                        $delitosDto->setCveDelito($rsDelitos[0]->getCveDelito());
                        $rsDesDelitos = $delitosDao->selectDelitos($delitosDto);
                    }
                    $json .= "{";
                    $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($general['idImpOfeDelCarpeta'])) . ",";
                    $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($general['idCarpetaJudicial'])) . ",";
                    $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($general['idImputadoCarpeta'])) . ",";
                    $json .= '"dataImputados":[';
                    if ($rsImputados != "" && (count($rsImputados) != 0)) {
                        $json .= "{";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($rsImputados[0]->getCveTipoPersona())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($rsImputados[0]->getNombreMoral())) . ",";
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombre() . " " . $rsImputados[0]->getPaterno() . " " . $rsImputados[0]->getMaterno())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsImputados)) {
                            $json .= ",";
                        }
                        $json .= "],";
                    } else {
                        $status = true;
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"No se encontro al imputado."}';
                    }
                    $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Impofedelcarpeta->getIdOfendidoCarpeta())) . ",";
                    $json .= '"dataOfendidos":[';
                    if ($rsOfendido != "" && (count($rsOfendido) != 0)) {
                        $json .= "{";
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode($rsOfendido[0]->getNombre() . " " . $rsOfendido[0]->getPaterno() . " " . $rsOfendido[0]->getMaterno())) . ",";
                        $json .= '"cveTipoPersona":' . json_encode(utf8_encode($rsOfendido[0]->getCveTipoPersona())) . ",";
                        $json .= '"nombreMoral":' . json_encode(utf8_encode($rsOfendido[0]->getNombreMoral())) . ",";
                        $json .= '"cveVictimaDeTrata":' . json_encode(utf8_encode($rsOfendido[0]->getCveVictimaDeTrata())) . ",";
                        $json .= '"cveVictimaDeViolenciaDeGenero":' . json_encode(utf8_encode($rsOfendido[0]->getCveVictimaDeViolenciaDeGenero())) . ",";
                        $json .= '"cveVictimaDeLaDelincuenciaOrganizada":' . json_encode(utf8_encode($rsOfendido[0]->getCveVictimaDeLaDelincuenciaOrganizada())) . ",";
                        $json .= '"cveVictimaDeAcoso":' . json_encode(utf8_encode($rsOfendido[0]->getCveVictimaDeAcoso())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsOfendido)) {
                            $json .= ",";
                        }
                        $json .= "],";
                    } else {
                        $status = true;
                        $json .= '{';
                        $json .= '"mnj":"no se encontro al ofendido."}';
                        $json .= '],';
                    }
                    $json .= '"idDelitoCarpeta":' . json_encode(utf8_encode($Impofedelcarpeta->getIdDelitoCarpeta())) . ",";
                    if ($rsDesDelitos != "" && (count($rsDesDelitos) != 0)) {
                        $json .= '"dataDelitos":[';
                        $json .= "{";
                        $json .= '"cveDelito":' . json_encode($rsDesDelitos[0]->getCveDelito()) . ",";
                        $json .= '"delito":' . json_encode(utf8_encode($rsDesDelitos[0]->getDesDelito())) . "";
                        $json .= "}" . "\n";
                        $i ++;
                        if ($i <= count($rsDesDelitos)) {
                            $json .= ",";
                        }
                        $json .= "]";
                    } else {
                        $status = true;
                        $json .= '{"status":"Fail",';
                        $json .= '"mnj":"no se encontro al ofendido."}';
                    }
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($arrayGeneral)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            }
        } else {
            $json .= '{"status":"error",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }

        /* if ((!$status)) {
          $resultado = $json;
          } else {
          $jsonAux = "";
          $jsonAux .= '{"status":"error",';
          $jsonAux .= '"mnj":"No se encontraron resultados.",';
          $jsonAux .= '"error":' . $json . '}';
          $resultado = $jsonAux;
          } */

        return $json;
    }

    public function validaImpofedelcarpetasrelacion($ImpofedelcarpetasDto, $proveedor = null) {
        $countImputados = 0;
        $countOfendidos = 0;
        $countDelitos = 0;
        $error = false;
        $bandera = true;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $mensaje = array();
        $carpetasjudicialesDAO = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $carpetasjudicialesDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
        $resultadoCarpeta = $carpetasjudicialesDAO->selectCarpetasjudiciales($carpetasjudicialesDto, "", $this->proveedor);

        if ($resultadoCarpeta != "") {
            if ($resultadoCarpeta[0]->getActivo() == "N") {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = "Esta carpeta no esta activa";
            }

            $imputadoscarpetasDto = new ImputadoscarpetasDTO();
            $imputadoscarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
            $imputadoscarpetasDto->setActivo("S");
            $imputadoscarpetasDao = new ImputadoscarpetasDAO();
            $imputadoscarpetasDto = $imputadoscarpetasDao->selectImputadoscarpetas($imputadoscarpetasDto, "", $this->proveedor);

            $ofendidosCarpetasDto = new OfendidoscarpetasDTO();
            $ofendidosCarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
            $ofendidosCarpetasDto->setActivo("S");
            $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
            $ofendidosCarpetasDto = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, "", $this->proveedor);

            $delitosCarpetasDto = new DelitoscarpetasDTO();
            $delitosCarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
            $delitosCarpetasDto->setActivo("S");
            $delitosCarpetasDao = new DelitoscarpetasDAO();
            $delitosCarpetasDto = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);

            if ($imputadoscarpetasDto != "") {
                foreach ($imputadoscarpetasDto as $imputadocarpetaDto) {
                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                    $ImpofedelcarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
                    $ImpofedelcarpetasDto->setActivo("S");
                    $ImpofedelcarpetasDto->setIdImputadoCarpeta($imputadocarpetaDto->getIdImputadoCarpeta());
                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                    $ImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                    if ($ImpofedelcarpetasDto == "") {
                        $countImputados++;
                    }
                }
            }

            if ($ofendidosCarpetasDto != "") {
                foreach ($ofendidosCarpetasDto as $ofendidoCarpetasDto) {
                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                    $ImpofedelcarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
                    $ImpofedelcarpetasDto->setActivo("S");
                    $ImpofedelcarpetasDto->setIdOfendidoCarpeta($ofendidoCarpetasDto->getIdOfendidoCarpeta());
                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                    $ImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                    if ($ImpofedelcarpetasDto == "") {
                        $countOfendidos++;
                    }
                }
            }

            if ($delitosCarpetasDto != "") {
                foreach ($delitosCarpetasDto as $delitoCarpetasDto) {
                    $ImpofedelcarpetasDto = new ImpofedelcarpetasDTO();
                    $ImpofedelcarpetasDto->setIdCarpetaJudicial($ImpofedelcarpetasDto->getIdCarpetaJudicial());
                    $ImpofedelcarpetasDto->setActivo("S");
                    $ImpofedelcarpetasDto->setIdDelitoCarpeta($delitoCarpetasDto->getIdDelitoCarpeta());
                    $impofedelcarpetasDao = new ImpofedelcarpetasDAO();
                    $ImpofedelcarpetasDto = $impofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
                    if ($ImpofedelcarpetasDto == "") {
                        $countDelitos++;
                    }
                }
            }

            if ($countImputados > 0) {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = " Falta " . $countImputados . " relaciones de Imputados";
                $bandera = false;
            }

            if ($countOfendidos > 0) {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = " Falta " . $countOfendidos . " relaciones de Sujetos Pasivos del Delito";
                $bandera = false;
            }

            if ($countDelitos > 0) {
                $mensaje["estatus"] = "error";
                $mensaje["mensaje"][] = " Falta " . $countDelitos . " relaciones de Delitos";
                $bandera = false;
            }
            if ($bandera == true) {
                $mensaje["estatus"] = "ok";
                $mensaje["mensaje"][] = "Relacion correcta";
            }
        } else {
            $mensaje["mensaje"][] = "Esta carpeta no existe";
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        return json_encode($mensaje);
    }

    /*
     * Borrado logico de trata de personas y violencia 
     */

    public function borrarViolenciaCausas($impofedelCarpetasDto, $proveedor = null) {
        $fechaActualizacion = "";
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
            $this->proveedor->execute("SELECT NOW() AS FechaActual");
            if (!$this->proveedor->error()) {
                if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                    while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                        $fechaActualizacion = $row['FechaActual'];
                    }
                } else {
                    $fechaActualizacion = date("Y-m-d H:i:s");
                }
            }
        } else {
            $this->proveedor = $proveedor;
            $fechaActualizacion = date("Y-m-d H:i:s");
        }
        $error = false;

        /*
         * Consultar los registros relacionados de trata de personas
         */
        $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
        $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
        $trataspersonascarpetasDto->setActivo("S");

        $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
        $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $this->proveedor);

        if ($trataspersonascarpetasDto != "") {
            for ($x = 0; $x < count($trataspersonascarpetasDto); $x++) {
                /*
                 * Borrar logicamente cada uno de los registros de trata de personas
                 */
                $trataPersonasTmp = new TrataspersonascarpetasDTO();
                $trataPersonasTmp->setIdTrataPersonaCarpeta($trataspersonascarpetasDto[$x]->getIdTrataPersonaCarpeta());
                $trataPersonasTmp->setFechaActualizacion($fechaActualizacion);
                $trataPersonasTmp->setActivo("N");
                $trataPersonasTmp = $trataspersonascarpetasDao->updateTrataspersonascarpetas($trataPersonasTmp, $this->proveedor);
                if ($trataPersonasTmp != "") {
                    $error = false;
                } else {
                    $error = true;
                }
                if ($error) {
                    break;
                }
            }
        }

        //violencia de genero
        if (!$error) {
            /*
             * Consultar los registros relacionados con violencia de genero
             */
            $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
            $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
            $violenciadegenerocarpetasDto->setActivo("S");

            $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
            $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $this->proveedor);
            if ($violenciadegenerocarpetasDto != "") {
                for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x++) {
                    /*
                     * Consultar los datos de efectos ofendidos relacionados con violencia de genero
                     */
                    $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                    $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
                    $efectosofendidoscarpetasDto->setIdReferencia($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                    $efectosofendidoscarpetasDto->setActivo("S");
                    $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                    $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $this->proveedor);

                    if ($efectosofendidoscarpetasDto != "") {
                        for ($e = 0; $e < count($efectosofendidoscarpetasDto); $e++) {
                            /*
                             * Borrar logicamente los registros relacionados de
                             * efectos ofendidos
                             */
                            $efectoOfendidoTmp = new EfectosofendidoscarpetasDTO();
                            $efectoOfendidoTmp->setIdEfectoOfendidoCarpeta($efectosofendidoscarpetasDto[$e]->getIdEfectoOfendidoCarpeta());
                            $efectoOfendidoTmp->setFechaActualizacion($fechaActualizacion);
                            $efectoOfendidoTmp->setActivo("N");
                            $efectoOfendidoTmp = $efectosofendidoscarpetasDao->updateEfectosofendidoscarpetas($efectoOfendidoTmp, $this->proveedor);
                            if ($efectoOfendidoTmp != "") {
                                $error = false;
                            } else {
                                $error = true;
                            }
                            if ($error) {
                                break;
                            }
                        }
                    }

                    /*
                     * Consultar los registros relacionados de violencia homicidios
                     * dolosos
                     */
                    if (!$error) {
                        $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                        $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                        $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                        $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                        $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $this->proveedor);

                        if ($violenciahomicidiosdolososcarpetasDto != "") {
                            for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y++) {
                                /*
                                 * Borrar logicamente los registros de violencia
                                 * homicidios dolosos
                                 */
                                $violenciaHomicidioDolosoTmp = new ViolenciahomicidiosdolososcarpetasDTO();
                                $violenciaHomicidioDolosoTmp->setIdViolenciaHomicidioDolosoCarpeta($violenciahomicidiosdolososcarpetasDto[$y]->getIdViolenciaHomicidioDolosoCarpeta());
                                $violenciaHomicidioDolosoTmp->setFechaActualizacion($fechaActualizacion);
                                $violenciaHomicidioDolosoTmp->setActivo("N");
                                $violenciaHomicidioDolosoTmp = $violenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($violenciaHomicidioDolosoTmp, $this->proveedor);
                                if ($violenciaHomicidioDolosoTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                }
                                if ($error) {
                                    break;
                                }
                            }
                        }
                    }
                    /*
                     * Consultar los registros de factores sociales
                     */
                    if (!$error) {
                        $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                        $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                        $violenciafactoressocialescarpetasDto->setActivo("S");

                        $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                        $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $this->proveedor);

                        if ($violenciafactoressocialescarpetasDto != "") {
                            for ($i = 0; $i < count($violenciafactoressocialescarpetasDto); $i++) {
                                $violenciaFactorSocialTmp = new ViolenciafactoressocialescarpetasDTO();
                                $violenciaFactorSocialTmp->setIdViolenciaFactorSocialCarpeta($violenciafactoressocialescarpetasDto[$i]->getIdViolenciaFactorSocialCarpeta());
                                $violenciaFactorSocialTmp->setFechaActualizacion($fechaActualizacion);
                                $violenciaFactorSocialTmp->setActivo("N");
                                $violenciaFactorSocialTmp = $violenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($violenciaFactorSocialTmp, $this->proveedor);
                                if ($violenciaFactorSocialTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                }
                                if ($error) {
                                    break;
                                }
                            }
                        }
                    }

                    if (!$error) {
                        $violenciaDeGeneroTmp = new ViolenciadegenerocarpetasDTO();
                        $violenciaDeGeneroTmp->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                        $violenciaDeGeneroTmp->setFechaActualizacion($fechaActualizacion);
                        $violenciaDeGeneroTmp->setActivo("N");
                        $violenciaDeGeneroTmp = $violenciadegenerocarpetasDao->updateViolenciadegenerocarpetas($violenciaDeGeneroTmp, $this->proveedor);
                        if ($violenciaDeGeneroTmp != "") {
                            $error = false;
                        } else {
                            $error = true;
                        }
                        if ($error) {
                            break;
                        }
                    }
                    if ($error) {
                        break;
                    }
                }
            }
        }

        //acoso sexual
        if (!$error) {
            /*
             * Consultar los registros de sexuales carpetas
             */
            $sexualescarpetasDto = new SexualescarpetasDTO();
            $sexualescarpetasDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
            $sexualescarpetasDto->setActivo("S");

            $sexualescarpetasDao = new SexualescarpetasDAO();
            $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $this->proveedor);

            if ($sexualescarpetasDto != "") {
                $error = false;
                for ($x = 0; $x < count($sexualescarpetasDto); $x++) {
                    /*
                     * Consultar los registros de conductas sexuales
                     */
                    $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                    $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                    $sexualesconductascarpetasDto->setActivo("S");
                    $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                    $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $this->proveedor);

                    if ($sexualesconductascarpetasDto != "") {
                        for ($y = 0; $y < count($sexualesconductascarpetasDto); $y++) {
                            /*
                             * Consultar los registros de detalles conductas sexuales
                             */
                            $detallesSexualesConductasCarpetasDto = new DetallessexualesconductascarpetasDTO();
                            $detallesSexualesConductasCarpetasDao = new DetallessexualesconductascarpetasDAO();
                            $detallesSexualesConductasCarpetasDto->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                            $detallesSexualesConductasCarpetasDto->setActivo("S");
                            $detallesSexualesConductasCarpetasDto = $detallesSexualesConductasCarpetasDao->selectDetallessexualesconductascarpetas($detallesSexualesConductasCarpetasDto, "", $this->proveedor);
                            if ($detallesSexualesConductasCarpetasDto != "") {
                                for ($d = 0; $d < count($detallesSexualesConductasCarpetasDto); $d++) {
                                    /*
                                     * Borrar logicamente los registros de detalles conductas
                                     */
                                    $detalleSexualConductaTmp = new DetallessexualesconductascarpetasDTO();
                                    $detalleSexualConductaTmp->setIdDetalleSexualConductaCarpeta($detallesSexualesConductasCarpetasDto[$d]->getIdDetalleSexualConductaCarpeta());
                                    $detalleSexualConductaTmp->setFechaActualizacion($fechaActualizacion);
                                    $detalleSexualConductaTmp->setActivo("N");
                                    $detalleSexualConductaTmp = $detallesSexualesConductasCarpetasDao->updateDetallessexualesconductascarpetas($detalleSexualConductaTmp, $this->proveedor);
                                    if ($detalleSexualConductaTmp != "") {
                                        $error = false;
                                    } else {
                                        $error = true;
                                    }
                                    if ($error) {
                                        break;
                                    }
                                }
                            }
                            if (!$error) {
                                /*
                                 * Borrar logicamente los registros de conductas sexuales
                                 */
                                $sexualesConductasTmp = new SexualesconductascarpetasDTO();
                                $sexualesConductasTmp->setIdSexualConductaCarpeta($sexualesconductascarpetasDto[$y]->getIdSexualConductaCarpeta());
                                $sexualesConductasTmp->setFechaActualizacion($fechaActualizacion);
                                $sexualesConductasTmp->setActivo("N");
                                $sexualesConductasTmp = $sexualesconductascarpetasDao->updateSexualesconductascarpetas($sexualesConductasTmp, $this->proveedor);
                                if ($sexualesConductasTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                }
                                if ($error) {
                                    break;
                                }
                            }
                        }
                    }
                    if (!$error) {
                        $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                        $testigossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                        $testigossexualescarpetasDto->setActivo("S");
                        $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                        $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $this->proveedor);

                        if ($testigossexualescarpetasDto != "") {
                            for ($y = 0; $y < count($testigossexualescarpetasDto); $y++) {
                                $testigoSexualTmp = new TestigossexualescarpetasDTO();
                                $testigoSexualTmp->setIdTestigoSexualCarpeta($testigossexualescarpetasDto[$y]->getIdTestigoSexualCarpeta());
                                $testigoSexualTmp->setFechaActualizacion($fechaActualizacion);
                                $testigoSexualTmp->setActivo("N");
                                $testigoSexualTmp = $testigossexualescarpetasDao->updateTestigossexualescarpetas($testigoSexualTmp, $this->proveedor);
                                if ($testigoSexualTmp != "") {
                                    $error = false;
                                } else {
                                    $error = true;
                                }
                                if ($error) {
                                    break;
                                }
                            }
                        }
                        if (!$error) {
                            $sexualesTmp = new SexualescarpetasDTO();
                            $sexualesTmp->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                            $sexualesTmp->setFechaActualizacion($fechaActualizacion);
                            $sexualesTmp->setActivo("N");
                            $sexualesTmp = $sexualescarpetasDao->updateSexualescarpetas($sexualesTmp, $this->proveedor);
                            if ($sexualesTmp != "") {
                                $error = false;
                            } else {
                                $error = true;
                            }
                            if ($error) {
                                break;
                            }
                        }
                    }
                }
            }
        }
        if (!$error) {
            if ($proveedor == null) {
                $this->proveedor->execute("COMMIT");
            }
            return true;
        } else {
            if ($proveedor == null) {
                $this->proveedor->execute("ROLLBACK");
            }
            return false;
        }
    }

    public function consultaImpOfeDel($ImpofedelcarpetasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $ImpofedelcarpetasDto = $this->validarImpofedelcarpetas($ImpofedelcarpetasDto);
        $ImpofedelcarpetasDto->setActivo("S");

        $json = "";
        $x = 1;

        $ImpofedelcarpetasDao = new ImpofedelcarpetasDAO();
        $ImpofedelcarpetasDto = $ImpofedelcarpetasDao->selectImpofedelcarpetas($ImpofedelcarpetasDto, "", $this->proveedor);
        if ($ImpofedelcarpetasDto != "") {

            $ofenidosCarpetasDto = new OfendidoscarpetasDTO();
            $ofenidosCarpetasDao = new OfendidoscarpetasDAO();

            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
            $imputadosCarpetasDao = new ImputadoscarpetasDAO();

            $delitosCarpetasDto = new DelitoscarpetasDTO();
            $delitosCarpetasDao = new DelitoscarpetasDAO();

            $json .= "{";
            $json .= '"status":"ok",';
            $json .= '"msj":"resultados",';
            $json .= '"totalCount":"' . count($ImpofedelcarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($ImpofedelcarpetasDto as $Impofedelcarpetas) {
                $imputadosCarpetasDto->setIdImputadoCarpeta($Impofedelcarpetas->getIdImputadoCarpeta());
                $rsImputados = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, "", $this->proveedor);

                $ofenidosCarpetasDto->setIdOfendidoCarpeta($Impofedelcarpetas->getIdOfendidoCarpeta());
                $rsOfendidos = $ofenidosCarpetasDao->selectOfendidoscarpetas($ofenidosCarpetasDto, "", $this->proveedor);
                $delitosCarpetasDto->setIdDelitoCarpeta($Impofedelcarpetas->getIdDelitoCarpeta());
                $rsDelitos = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, "", $this->proveedor);
                if ($rsDelitos != "") {
                    $desDelitosDto = new DelitosDTO();
                    $desDelitosDao = new DelitosDAO();
                    $desDelitosDto->setCveDelito($rsDelitos[0]->getCveDelito());
                    $rsDesDelito = $desDelitosDao->selectDelitos($desDelitosDto, "", $this->proveedor);
                }

                $json .= "{";
                $json .= '"idImpOfeDelCarpeta":' . json_encode(utf8_encode($Impofedelcarpetas->getIdImpOfeDelCarpeta())) . ",";
                $json .= '"idCarpetaJudicial":' . json_encode(utf8_encode($Impofedelcarpetas->getIdCarpetaJudicial())) . ",";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Impofedelcarpetas->getIdImputadoCarpeta())) . ",";
                if ($rsImputados != "") {
                    if ($rsImputados[0]->getCveTipoPersona() == "1") {
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombre() . " " . $rsImputados[0]->getPaterno() . " " . $rsImputados[0]->getMaterno())) . ",";
                    } else {
                        $json .= '"nombreImputado":' . json_encode(utf8_encode($rsImputados[0]->getNombreMoral())) . ",";
                    }
                } else {
                    $json .= '"nombreImputado":"",';
                }
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($Impofedelcarpetas->getIdOfendidoCarpeta())) . ",";
                if ($rsOfendidos != "") {
                    if ($rsOfendidos[0]->getCveTipoPersona() == "1") {
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode(($rsOfendidos[0]->getNombre()) . " " . ($rsOfendidos[0]->getPaterno()) . " " . ($rsOfendidos[0]->getMaterno()))) . ",";
                    } else {
                        $json .= '"nombreOfendido":' . json_encode(utf8_encode($rsOfendidos[0]->getNombreMoral())) . ",";
                    }
                } else {
                    $json .= '"nombreOfendido":"",';
                }
                $json .= '"idDelitoCarpeta":' . json_encode(utf8_encode($Impofedelcarpetas->getIdDelitoCarpeta())) . ",";
                if ($rsDelitos != "" && $rsDesDelito != "") {
                    $json .= '"nombreDelito":' . json_encode(utf8_encode($rsDesDelito[0]->getDesDelito())) . ",";
                } else {
                    $json .= '"nombreDelito":"",';
                }
                $json .= '"cveModalidad":' . json_encode(utf8_encode($Impofedelcarpetas->getCveModalidad())) . ",";
                $json .= '"cveComision":' . json_encode(utf8_encode($Impofedelcarpetas->getCveComision())) . ",";
                $json .= '"cveConcurso":' . json_encode(utf8_encode($Impofedelcarpetas->getCveConcurso())) . ",";
                $json .= '"cveClasificacionDelitoOrden":' . json_encode(utf8_encode($Impofedelcarpetas->getCveClasificacionDelitoOrden())) . ",";
                $json .= '"cveElementoComision":' . json_encode(utf8_encode($Impofedelcarpetas->getCveElementoComision())) . ",";
                $json .= '"cveClasificacionDelito":' . json_encode(utf8_encode($Impofedelcarpetas->getCveClasificacionDelito())) . ",";
                $json .= '"cveFormaAccion":' . json_encode(utf8_encode($Impofedelcarpetas->getCveFormaAccion())) . ",";
                $json .= '"cveConsumacion":' . json_encode(utf8_encode($Impofedelcarpetas->getCveConsumacion())) . ",";
                $json .= '"cveMunicipio":' . json_encode(utf8_encode($Impofedelcarpetas->getCveMunicipio())) . ",";
                $json .= '"cveEntidad":' . json_encode(utf8_encode($Impofedelcarpetas->getCveEntidad())) . ",";
                $json .= '"cveGradoParticipacion":' . json_encode(utf8_encode($Impofedelcarpetas->getCveGradoParticipacion())) . ",";
                $json .= '"cveRelacionImpOfe":' . json_encode(utf8_encode($Impofedelcarpetas->getCveRelacionImpOfe())) . ",";
                $json .= '"CveTerminacion":' . json_encode(utf8_encode($Impofedelcarpetas->getCveTerminacion())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Impofedelcarpetas->getActivo())) . ",";
                if ($Impofedelcarpetas->getFechaDelito() != "" && $Impofedelcarpetas->getFechaDelito() != "0000-00-00 00:00:00") {
                    $json .= '"fechaDelito":' . json_encode(utf8_encode($this->fechaHoraNormal($Impofedelcarpetas->getFechaDelito()))) . ",";
                } else {
                    $json .= '"fechaDelito":"",';
                }

                $json .= '"direccion":' . json_encode(utf8_encode($Impofedelcarpetas->getDireccion())) . ",";
                $json .= '"colonia":' . json_encode(utf8_encode($Impofedelcarpetas->getColonia())) . ",";
                $json .= '"numInterior":' . json_encode(utf8_encode($Impofedelcarpetas->getNumInterior())) . ",";
                $json .= '"numExterior":' . json_encode(utf8_encode($Impofedelcarpetas->getNumExterior())) . ",";
                $json .= '"cp":' . json_encode(utf8_encode($Impofedelcarpetas->getCp())) . ",";
                $json .= '"fechaRegistro":' . json_encode(utf8_encode($Impofedelcarpetas->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(utf8_encode($Impofedelcarpetas->getFechaActualizacion())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($ImpofedelcarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"status":"Fail",';
            $json .= '"totalCount": "0",';
            $json .= '"msj":"No se encontraron resultados. Verifique"}';
        }
        return $json;
    }

    public function consultaImpOfeDelRemision($ImpofedelcarpetasDto, $proveedor = null) {
        $selectDAO = new SelectDAO();
        $idCarpetaJudicial = $ImpofedelcarpetasDto->getIdCarpetaJudicial();
        $params["fields"] = "ic.idImputadoCarpeta,ic.nombre,ic.materno,ic.paterno,ic.nombreMoral,ic.cveGenero,ic.cveTipoPersona";
        $params["tables"] = "  tblimputadoscarpetas ic ";
        $params["conditions"] = " ic.activo='S' AND (ic.idCarpetaJudicial  = " . $idCarpetaJudicial . ") ";

        $rs = json_decode($selectDAO->selectDAO($params));
//        $imputado = "";
        $resultado = array();
        $ArrCausas = array();
        $resultado["Estatus"] = $rs->Estatus;
        $resultado["totalCount"] = $rs->totalCount;
        $resultado["mnj"] = $rs->mnj;
        if ($rs->totalCount > 0) {

            foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
                foreach ($value as $key2 => $value2) {
                    //$ArrCausas[$key][$key2] = $value2;
                    if ($key2 == "nombre") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "cveGenero") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "email") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "direccion") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "paterno") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "materno") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "cveTipoPersona") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "nombreMoral") {
                        $ArrCausas[$key][$key2] = $value2;
                    }
                    if ($key2 == "idImputadoCarpeta") {
                        $ArrCausas[$key][$key2] = $value2;
                        $ArrCausas[$key]["impofedel"] = $this->obtenerImpofedel($value2);
                        $ArrCausas[$key]["domicilio"] = $this->obtenerDomiciliosImputado($value2);
                        ;
                        $ArrCausas[$key]["email"] = $this->obtenerEmailImputado($value2);
                        ;
                    }
                }
                //array_push($imputadoArr, $imputado);
                $resultado["resultados"] = $ArrCausas;
            }
        }

        return json_encode($resultado);
    }

    private function fechaHoraNormal($fecha) {
        list ($fechaAux, $hora) = explode(" ", $fecha);
        list($year, $mes, $dia) = explode("-", $fechaAux);
        return $dia . "/" . $mes . "/" . $year . " " . $hora;
    }

    public function validaEliminarRelacionImpofedel($impofedelCarpetasDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $mensaje = array();
        $eliminar = true;
        $result = array();

        $formulacionImputacionDto = new FormulacionimputacionesDTO();
        $formulacionImputacionDao = new FormulacionimputacionesDAO();
        $formulacionImputacionDto->setActivo('S');
        $formulacionImputacionDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
        $formulacionImputacionDto = $formulacionImputacionDao->selectFormulacionimputaciones($formulacionImputacionDto, "", $this->proveedor);
        if ($formulacionImputacionDto != "") {
            $eliminar = false;
            $mensaje[] = array(utf8_encode("No se puede eliminar la relacion debido a que el imputado relacionado cuenta con formulaci�n de imputaci�n"));
        }

        //ejecucion de sentencias
        $imputadosEjecSentenciasDto = new ImputadosejecsentenciasDTO();
        $imputadosEjecSentenciasDao = new ImputadosejecsentenciasDAO();
        $imputadosEjecSentenciasDto->setActivo("S");
        $imputadosEjecSentenciasDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
        $imputadosEjecSentenciasDto = $imputadosEjecSentenciasDao->selectImputadosejecsentencias($imputadosEjecSentenciasDto, "", $this->proveedor);
        if ($imputadosEjecSentenciasDto != "") {
            $eliminar = false;
            $mensaje[] = array(utf8_encode("No se puede eliminar la relacion debido a que el imputado relacionado cuenta con auto de radicaci�n a ejecuci�n de sentencia"));
        }

        //imputados sentencias
        $imputadosSentenciasDto = new ImputadossentenciasDTO();
        $imputadosSentenciasDao = new ImputadossentenciasDAO();
        $imputadosSentenciasDto->setActivo("S");
        $imputadosSentenciasDto->setIdImpOfeDelCarpeta($impofedelCarpetasDto->getIdImpOfeDelCarpeta());
        $imputadosSentenciasDto = $imputadosSentenciasDao->selectImputadossentencias($imputadosSentenciasDto, "", $this->proveedor);
        if ($imputadosSentenciasDto != "") {
            $eliminar = false;
            $mensaje[] = array(utf8_encode("No se puede eliminar la relacion debido a que el imputado relacionado cuenta con sentencias activas"));
        }

        if (count($mensaje) > 0) {
            $result = [
                'estatus' => 'error',
                'mensaje' => $mensaje
            ];
        } else {
            $result = [
                'estatus' => 'ok',
                'mensaje' => 'eliminar'
            ];
        }
        return $result;
    }

    private function obtenerImpofedel($imputadoCarpeta) {
        $selectDAO = new SelectDAO();
        $params["fields"] = "oc.idOfendidoCarpeta,oc.nombre,oc.paterno,oc.materno,oc.nombreMoral,oc.cveGenero,oc.cveTipoPersona,iodc.idImpOfeDelCarpeta,d.cveDelito,d.desDelito";
        $params["tables"] = " tblimpofedelcarpetas iodc INNER JOIN tbldelitoscarpetas dc ON iodc.idDelitoCarpeta = dc. idDelitoCarpeta INNER JOIN tblofendidoscarpetas oc ON iodc.idCarpetaJudicial = oc.idCarpetaJudicial AND iodc.idOfendidoCarpeta = oc. idOfendidoCarpeta INNER JOIN tbldelitos d ON dc.cveDelito = d.cveDelito ";
        $params["conditions"] = " (iodc.idImputadoCarpeta = " . $imputadoCarpeta . ") AND (dc.activo = 'S')  AND (oc.activo = 'S') AND (iodc.activo = 'S') AND (d.activo = 'S')";

        $rs = json_decode($selectDAO->selectDAO($params));
        $returnArr = array();
        if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
                foreach ($value as $key2 => $value2) {
                    $returnArr[$key][$key2] = $value2;
                    if ($key2 == "idOfendidoCarpeta") {
                        $returnArr[$key]["domicilios"] = $this->obtenerDomiciliosOfendido($value2);
                        ;
                        $returnArr[$key]["email"] = $this->obtenerEmailOfendido($value2);
                        ;
                    }
                }
            }
        }
        return $returnArr;
    }

    private function obtenerDomiciliosOfendido($idOfendidoCarpeta) {
        $selectDAO = new SelectDAO();
        $params["fields"] = "*";
        $params["tables"] = "  tbldomiciliosofendidoscarpetas doc ";
        $params["conditions"] = " (doc.idOfendidoCarpeta = " . $idOfendidoCarpeta . ") AND (doc.activo = 'S')  ";

        $rs = json_decode($selectDAO->selectDAO($params));
        $returnArr = array();
        if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
                foreach ($value as $key2 => $value2) {
                    $returnArr[$key][$key2] = $value2;
                }
            }
        }
        return $returnArr;
    }

    private function obtenerEmailOfendido($idOfendidoCarpeta) {
        $selectDAO = new SelectDAO();
        $params["fields"] = "*";
        $params["tables"] = "  tbltelefonosofendidoscarpetas toc ";
        $params["conditions"] = " (toc.idOfendidoCarpeta = " . $idOfendidoCarpeta . ") AND (toc.activo = 'S')  ";

        $rs = json_decode($selectDAO->selectDAO($params));
        $returnArr = array();
        if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
                foreach ($value as $key2 => $value2) {
                    $returnArr[$key][$key2] = $value2;
                }
            }
        }
        return $returnArr;
    }

    private function obtenerDomiciliosImputado($idImputadoCarpeta) {
        $selectDAO = new SelectDAO();
        $params["fields"] = "*";
        $params["tables"] = "  tbldomiciliosimputadoscarpetas doc ";
        $params["conditions"] = " (doc.idImputadoCarpeta = " . $idImputadoCarpeta . ") AND (doc.activo = 'S')  ";

        $rs = json_decode($selectDAO->selectDAO($params));

        $returnArr = array();
        if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
                foreach ($value as $key2 => $value2) {
                    $returnArr[$key][$key2] = $value2;
                }
            }
        }
        return $returnArr;
    }

    private function obtenerEmailImputado($idImputadoCarpeta) {
        $selectDAO = new SelectDAO();
        $params["fields"] = "*";
        $params["tables"] = "  tbltelefonosimputadoscarpetas toc ";
        $params["conditions"] = " (toc.idImputadoCarpeta = " . $idImputadoCarpeta . ") AND (toc.activo = 'S')  ";

        $rs = json_decode($selectDAO->selectDAO($params));
        $returnArr = array();
        if ($rs->totalCount > 0) {
            foreach ($rs->resultados as $key => $value) {
//            $imputado .="{";
                foreach ($value as $key2 => $value2) {
                    $returnArr[$key][$key2] = $value2;
                }
            }
        }
        return $returnArr;
    }

}

//$impofedelCarpetasDto = new ImpofedelcarpetasDTO();
//$impofedelController = new ImpofedelcarpetasController();
//$impofedelCarpetasDto->setIdImpOfeDelCarpeta(3966);
//$impofedelCarpetasDto->setActivo("S");
//
//$datos = $impofedelController->consultaImpOfeDel($impofedelCarpetasDto);
//print_r($datos);
?>