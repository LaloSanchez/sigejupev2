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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class NacionalidadesimputadoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto){
        $NacionalidadesimputadoscarpetasDto->setidNacionalidadImputadoCarpeta(strtoupper(str_ireplace("'","",trim($NacionalidadesimputadoscarpetasDto->getidNacionalidadImputadoCarpeta()))));
        $NacionalidadesimputadoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim($NacionalidadesimputadoscarpetasDto->getcvePais()))));
        $NacionalidadesimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($NacionalidadesimputadoscarpetasDto->getactivo()))));
        $NacionalidadesimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($NacionalidadesimputadoscarpetasDto->getfechaRegistro()))));
        $NacionalidadesimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($NacionalidadesimputadoscarpetasDto->getfechaActualizacion()))));
        $NacionalidadesimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($NacionalidadesimputadoscarpetasDto->getidImputadoCarpeta()))));
        return $NacionalidadesimputadoscarpetasDto;
    }
    public function selectNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor=null){
        $NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor);
        return $NacionalidadesimputadoscarpetasDto;
    }
    public function insertNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor=null){
        /*$NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasDao->insertNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor);
        return $NacionalidadesimputadoscarpetasDto;*/
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $NacionalidadesimputadoscarpetasDto = $this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        if (!$validacion->num(1, 2, (int) $NacionalidadesimputadoscarpetasDto->getCvePais())) {
            if ($NacionalidadesimputadoscarpetasDto->getCvePais() <= 0) {
                $msg[] = array("El pais seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }
        if ((!$error)) {
            $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
            $NacionalidadesimputadoscarpetasDto->setActivo('S');
            $rs = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto, $this->proveedor);
            if ($rs == "") {
                $NacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->insertNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto, $this->proveedor);

                if ($NacionalidadesimputadoscarpetasDto != "") {
                    $bitacora = new BitacoramovimientosController();
                    $bitacoraTutor = $bitacora->agregar(186, 'INSERCION tblnacionalidadesimputadoscarpetas', 'txt', serialize($NacionalidadesimputadoscarpetasDto[0]), '', null);

                    if (!count($bitacoraTutor)) throw new Exception('no se pudo guardar la accion agregar nacionalidad en bitacora');
                    $resultado = array(
                        "idNacionalidadImputadoCarpeta" => $NacionalidadesimputadoscarpetasDto[0]->getIdNacionalidadImputadoCarpeta(),
                        "idImputadoCarpeta" => $NacionalidadesimputadoscarpetasDto[0]->getIdNacionalidadImputadoCarpeta(),
                        "cvePais" => $NacionalidadesimputadoscarpetasDto[0]->getCvePais()
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La nacionalidad ya existe para este imputado");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor=null){
        /*$NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
        //$tmpDto = new NacionalidadesimputadoscarpetasDTO();
        //$tmpDto = $NacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$NacionalidadesimputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasDao->updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor);
        return $NacionalidadesimputadoscarpetasDto;
        //}
        //return "";
         */
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $NacionalidadesimputadoscarpetasDto = $this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        if (!$validacion->num(1, 2, (int) $NacionalidadesimputadoscarpetasDto->getCvePais())) {
            if ($NacionalidadesimputadoscarpetasDto->getCvePais() <= 0) {
                $msg[] = array("El pais seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }
        if ((!$error)) {
            $nacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
            $nacionalidadAux = new NacionalidadesimputadoscarpetasDTO();
            $nacionalidadAux->setIdImputadoCarpeta($NacionalidadesimputadoscarpetasDto->getIdImputadoCarpeta());
            $nacionalidadAux->setCvePais($NacionalidadesimputadoscarpetasDto->getCvePais());
            $nacionalidadAux->setActivo('S');
            $rs = $nacionalidadesimputadoscarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadAux, $this->proveedor);
            if ($rs == "") {
                $NacionalidadesimputadoscarpetasDto->setActivo('S');
                $NacionalidadesimputadoscarpetasDto = $nacionalidadesimputadoscarpetasDao->updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto, $this->proveedor);

                if ($NacionalidadesimputadoscarpetasDto != "") {
                    $bitacora = new BitacoramovimientosController();
                    $bitacoraTutor = $bitacora->agregar(187, 'MODIFICACION tblnacionalidadesimputadoscarpetas', 'txt', serialize($NacionalidadesimputadoscarpetasDto[0]), '', null);

                    if (!count($bitacoraTutor)) throw new Exception('no se pudo guardar la accion modificar nacionalidad en bitacora');
                    $resultado = array(
                        "idNacionalidadImputadoCarpeta" => $NacionalidadesimputadoscarpetasDto[0]->getIdNacionalidadImputadoCarpeta(),
                        "idImputadoCarpeta" => $NacionalidadesimputadoscarpetasDto[0]->getIdNacionalidadImputadoCarpeta(),
                        "cvePais" => $NacionalidadesimputadoscarpetasDto[0]->getCvePais()
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la nacionalidad debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La nacionalidad ya existe para este imputado");
                $error = true;
            }
        }
        if ((!$error)) {
            $result = array(
                "status" => "Ok",
                "totalCount" => count($listaResultados),
                "resultados" => $listaResultados,
            );
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function deleteNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor=null){
        /*$NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasDao->deleteNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto,$proveedor);
        return $NacionalidadesimputadoscarpetasDto;*/
        $result = "";
        $NacionalidadesimputadoscarpetasDto = $this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasDao = new NacionalidadesimputadoscarpetasDAO();
        $NacionalidadesimputadoscarpetasDto->setActivo('N');
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasDao->updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto, $this->proveedor);

        if ($NacionalidadesimputadoscarpetasDto != "") {
            $bitacora = new BitacoramovimientosController();
            $bitacoraTutor = $bitacora->agregar(188, 'BORRADO LOGICO tblnacionalidadesimputadoscarpetas', 'txt', serialize($NacionalidadesimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraTutor)) throw new Exception('no se pudo guardar la accion borrado logico nacionalidad en bitacora');
            $result = array(
                "status" => "Ok",
                "totalCount" => "La nacionalidad se elimino de forma correcta"
            );
        } else {
            $result = array("status" => "Error", "msj" => "No se puedo eliminar la nacionalidad");
            $result = ($result);
        }
        echo json_encode($result);
    }
}
?>