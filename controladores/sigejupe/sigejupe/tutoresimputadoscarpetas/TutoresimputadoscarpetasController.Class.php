<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tutoresimputadoscarpetas/TutoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class TutoresimputadoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto->setidTutorImputadoCarpeta(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getidTutorImputadoCarpeta()))));
        $TutoresimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getidImputadoCarpeta()))));
        $TutoresimputadoscarpetasDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getcveTipoTutor()))));
        $TutoresimputadoscarpetasDto->setProvDef(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getProvDef()))));
        $TutoresimputadoscarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getcveGenero()))));
        $TutoresimputadoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getnombre()))));
        $TutoresimputadoscarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getpaterno()))));
        $TutoresimputadoscarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getmaterno()))));
        $TutoresimputadoscarpetasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getfechaNacimiento()))));
        $TutoresimputadoscarpetasDto->setedad(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getedad()))));
        $TutoresimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getactivo()))));
        $TutoresimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getfechaRegistro()))));
        $TutoresimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TutoresimputadoscarpetasDto->getfechaActualizacion()))));
        return $TutoresimputadoscarpetasDto;
    }
    public function selectTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor);
        return $TutoresimputadoscarpetasDto;
    }
    
    public function agregarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $TutoresimputadoscarpetasDto = $this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        if (!$validacion->num(1, 2, (int) $TutoresimputadoscarpetasDto->getCveGenero())) {
            if ($TutoresimputadoscarpetasDto->getCveGenero() <= 0) {
                $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->num(1, 2, (int) $TutoresimputadoscarpetasDto->getCveTipoTutor())) {
            if ($TutoresimputadoscarpetasDto->getCveTipoTutor() <= 0) {
                $msg[] = array("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }
        if ((!$error)) {
            $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
            $TutoresimputadoscarpetasDto->setActivo('S');
            $TutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->insertTutoresimputadoscarpetas($TutoresimputadoscarpetasDto, $this->proveedor);
            if ($TutoresimputadoscarpetasDto != "") {
                $resultado = array(
                    "idTutorImputadoCarpeta" => $TutoresimputadoscarpetasDto[0]->getIdTutorImputadoCarpeta(),
                    "idImputadoCarpeta" => $TutoresimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "cveGenero" => $TutoresimputadoscarpetasDto[0]->getCveGenero(),
                    "cveTipoTutor" => $TutoresimputadoscarpetasDto[0]->getCveTipoTutor(),
                    "ProvDef" => $TutoresimputadoscarpetasDto[0]->getProvDef(),
                    "nombre" => utf8_encode($TutoresimputadoscarpetasDto[0]->getNombre()),
                    "paterno" => utf8_encode($TutoresimputadoscarpetasDto[0]->getPaterno()),
                    "materno" => utf8_encode($TutoresimputadoscarpetasDto[0]->getMaterno()),
                    "fechaNacimiento" => $TutoresimputadoscarpetasDto[0]->getFechaNacimiento(),
                    "edad" => $TutoresimputadoscarpetasDto[0]->getEdad()
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el tutor debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(183, 'Insercion tbltutoresimputadoscarpetas', 'txt', serialize($TutoresimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion insercion tutores imputados carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function modificarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $TutoresimputadoscarpetasDto = $this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        if (!$validacion->num(1, 2, (int) $TutoresimputadoscarpetasDto->getCveGenero())) {
            if ($TutoresimputadoscarpetasDto->getCveGenero() <= 0) {
                $msg[] = array("El genero seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->num(1, 2, (int) $TutoresimputadoscarpetasDto->getCveTipoTutor())) {
            if ($TutoresimputadoscarpetasDto->getCveTipoTutor() <= 0) {
                $msg[] = array("El tipo de tutor seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if ((!$error)) {
            $tutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
            $TutoresimputadoscarpetasDto->setActivo('S');
            $TutoresimputadoscarpetasDto = $tutoresimputadoscarpetasDao->modificarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto, $this->proveedor);
            if ($TutoresimputadoscarpetasDto != "") {
                $resultado = array(
                    "idTutorImputadoCarpeta" => $TutoresimputadoscarpetasDto[0]->getIdTutorImputadoCarpeta(),
                    "idImputadoCarpeta" => $TutoresimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "cveGenero" => $TutoresimputadoscarpetasDto[0]->getCveGenero(),
                    "cveTipoTutor" => $TutoresimputadoscarpetasDto[0]->getCveTipoTutor(),
                    "ProvDef" => $TutoresimputadoscarpetasDto[0]->getProvDef(),
                    "nombre" => utf8_encode($TutoresimputadoscarpetasDto[0]->getNombre()),
                    "paterno" => utf8_encode($TutoresimputadoscarpetasDto[0]->getPaterno()),
                    "materno" => utf8_encode($TutoresimputadoscarpetasDto[0]->getMaterno()),
                    "fechaNacimiento" => $TutoresimputadoscarpetasDto[0]->getFechaNacimiento(),
                    "edad" => $TutoresimputadoscarpetasDto[0]->getEdad()
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el tutor debido a algun error en la transaccion");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(184, 'Modificacion tbltutoresimputadoscarpetas', 'txt', serialize($TutoresimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion modificacion tutores imputados carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function eliminarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $result = "";
        $TutoresimputadoscarpetasDto = $this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
        $TutoresimputadoscarpetasDto->setActivo('N');
        $dto = new TutoresimputadoscarpetasDTO();
        $dto->setIdTutorImputadoCarpeta($TutoresimputadoscarpetasDto->getIdTutorImputadoCarpeta());
        $dto = $TutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($dto);
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasDao->eliminarTutoresimputadoscarpetasByIdImputado($TutoresimputadoscarpetasDto, $this->proveedor);

        if ($TutoresimputadoscarpetasDto) {
            $result = array(
                "status" => "Ok",
                "totalCount" => "El tutor se elimino de forma correcta"
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(185, 'Borrado logico tbltutoresimputadoscarpetas', 'txt', serialize($dto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion borrado logico tutores imputados carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => "No se pudo eliminar al tutot");
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function insertTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasDao->insertTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor);
        return $TutoresimputadoscarpetasDto;
        
    }
    
    public function updateTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
        //$tmpDto = new TutoresimputadoscarpetasDTO();
        //$tmpDto = $TutoresimputadoscarpetasDao->selectTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$TutoresimputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasDao->updateTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor);
        return $TutoresimputadoscarpetasDto;
        //}
        //return "";
    }
    
    public function deleteTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor=null){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasDao = new TutoresimputadoscarpetasDAO();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasDao->deleteTutoresimputadoscarpetas($TutoresimputadoscarpetasDto,$proveedor);
        return $TutoresimputadoscarpetasDto;
    }
}
?>