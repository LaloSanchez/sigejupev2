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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class TelefonosimputadoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto->setidTelefonoImputadosCarpeta(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getidTelefonoImputadosCarpeta()))));
        $TelefonosimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getidImputadoCarpeta()))));
        $TelefonosimputadoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->gettelefono()))));
        $TelefonosimputadoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getcelular()))));
        $TelefonosimputadoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getemail()))));
        $TelefonosimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getactivo()))));
        $TelefonosimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getfechaRegistro()))));
        $TelefonosimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TelefonosimputadoscarpetasDto->getfechaActualizacion()))));
        return $TelefonosimputadoscarpetasDto;
    }
    public function selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor);
        return $TelefonosimputadoscarpetasDto;
    }
    
    public function insertTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->insertTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor);
        return $TelefonosimputadoscarpetasDto;
    }
    
    public function agregarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $TelefonosimputadoscarpetasDto = $this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();

        if ($TelefonosimputadoscarpetasDto->getTelefono() == "" && $TelefonosimputadoscarpetasDto->getCelular() == "" && $TelefonosimputadoscarpetasDto->getEmail() == "") {
            $msg[] = array("Debe de ingresar un telefono o celular o correo:");
            $error = true;
        }
        if ($TelefonosimputadoscarpetasDto->getTelefono() != "") {
            if (!$validacion->telefono((string) $TelefonosimputadoscarpetasDto->getTelefono())) {
                $msg[] = array("No ingreso un Telefono correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ($TelefonosimputadoscarpetasDto->getCelular() != "") {
            if (!$validacion->telefono((string) $TelefonosimputadoscarpetasDto->getCelular())) {
                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                $error = true;
            }
        }

        /*if ($TelefonosimputadoscarpetasDto->getEmail() != "") {
            if (!$validacion->email((string) $TelefonosimputadoscarpetasDto->getEmail())) {
                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                $error = true;
            }
        }*/

        if ((!$error)) {
            $telefenosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
            $TelefonosimputadoscarpetasDto->setActivo('S');
            $TelefonosimputadoscarpetasDto = $telefenosimputadoscarpetasDao->insertTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto, $proveedor);

            if ($TelefonosimputadoscarpetasDto != "") {
                $resultado = array(
                    "idTelefonoImputadosCarpeta" => $TelefonosimputadoscarpetasDto[0]->getIdTelefonoImputadosCarpeta(),
                    "idImputadoCarpeta" => $TelefonosimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "telefono" => $TelefonosimputadoscarpetasDto[0]->getTelefono(),
                    "celular" => $TelefonosimputadoscarpetasDto[0]->getCelular(),
                    "email" => $TelefonosimputadoscarpetasDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el telefono debido a algun error en la transaccion");
                $error = true;
            }
        } /*else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }*/
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(174, 'Insercion tbltelefonosimputadoscarpetas', 'txt', serialize($TelefonosimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion insertar telefono imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function updateTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
        //$tmpDto = new TelefonosimputadoscarpetasDTO();
        //$tmpDto = $TelefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$TelefonosimputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->updateTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor);
        return $TelefonosimputadoscarpetasDto;
        //}
        //return "";
    }
    
    public function modificarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $TelefonosimputadoscarpetasDto = $this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
        if ($TelefonosimputadoscarpetasDto->getTelefono() == "" && $TelefonosimputadoscarpetasDto->getCelular() == "" && $TelefonosimputadoscarpetasDto->getEmail() == "") {
            $msg[] = array("Debe de ingresar un telefono o celular o email:" . $count);
            $error = true;
        }
        if ($TelefonosimputadoscarpetasDto->getTelefono() != "") {
            if (!$validacion->telefono((string) $TelefonosimputadoscarpetasDto->getTelefono())) {
                $msg[] = array("No ingreso un Telefono correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ($TelefonosimputadoscarpetasDto->getCelular() != "") {
            if (!$validacion->telefono((string) $TelefonosimputadoscarpetasDto->getCelular())) {
                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                $error = true;
            }
        }

        /*if ($TelefonosimputadoscarpetasDto->getEmail() != "") {
            if (!$validacion->email((string) $TelefonosimputadoscarpetasDto->getEmail())) {
                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                $error = true;
            }
        }*/

        if ((!$error)) {
            $telefenosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
            $TelefonosimputadoscarpetasDto->setActivo('S');
            $TelefonosimputadoscarpetasDto = $telefenosimputadoscarpetasDao->modificarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto, $proveedor);

            if ($TelefonosimputadoscarpetasDto != "") {
                $resultado = array(
                    "idTelefonoImputadosCarpeta" => $TelefonosimputadoscarpetasDto[0]->getIdTelefonoImputadosCarpeta(),
                    "idImputadoCarpeta" => $TelefonosimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "telefono" => $TelefonosimputadoscarpetasDto[0]->getTelefono(),
                    "celular" => $TelefonosimputadoscarpetasDto[0]->getCelular(),
                    "email" => $TelefonosimputadoscarpetasDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el telefono debido a algun error en la transaccion");
                $error = true;
            }
        } /*else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }*/
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(175, 'Modificacion tbltelefonosimputadoscarpetas', 'txt', serialize($TelefonosimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion modificar telefono imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    public function deleteTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->deleteTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor);
        return $TelefonosimputadoscarpetasDto;
    }
    
    public function eliminarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto,$proveedor=null){
        $result = "";
        $TelefonosimputadoscarpetasDto = $this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasDao = new TelefonosimputadoscarpetasDAO();
        $dto = new TelefonosimputadoscarpetasDTO();
        $dto->setIdTelefonoImputadosCarpeta($TelefonosimputadoscarpetasDto->getIdTelefonoImputadosCarpeta());
        $dto = $TelefonosimputadoscarpetasDao->selectTelefonosimputadoscarpetas($dto);
        $TelefonosimputadoscarpetasDto->setActivo('N');
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasDao->eliminarTelefonosimputadoscarpetasByIdImputado($TelefonosimputadoscarpetasDto, $proveedor);

        if ($TelefonosimputadoscarpetasDto != "") {
            $result = array(
                "status" => "Ok",
                "totalCount" => "El registro se elimino de forma correcta",
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(176, 'Borrado logico tbltelefonosimputadoscarpetas', 'txt', serialize($dto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion borrado logico telefono imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => "No se pudo eliminar el telefono");
            $result = ($result);
        }
        echo json_encode($result);
    }
}
?>