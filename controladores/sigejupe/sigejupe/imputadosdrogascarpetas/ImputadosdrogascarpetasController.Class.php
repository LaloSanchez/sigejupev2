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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class ImputadosdrogascarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto){
        $ImputadosdrogascarpetasDto->setidImputadoDrogaCarpeta(strtoupper(str_ireplace("'","",trim($ImputadosdrogascarpetasDto->getidImputadoDrogaCarpeta()))));
        $ImputadosdrogascarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($ImputadosdrogascarpetasDto->getidImputadoCarpeta()))));
        $ImputadosdrogascarpetasDto->setcveDroga(strtoupper(str_ireplace("'","",trim($ImputadosdrogascarpetasDto->getcveDroga()))));
        $ImputadosdrogascarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($ImputadosdrogascarpetasDto->getactivo()))));
        $ImputadosdrogascarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ImputadosdrogascarpetasDto->getfechaRegistro()))));
        $ImputadosdrogascarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ImputadosdrogascarpetasDto->getfechaActualizacion()))));
        return $ImputadosdrogascarpetasDto;
    }
    public function selectImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor=null){
        $ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
        $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->selectImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor);
        return $ImputadosdrogascarpetasDto;
    }
    public function insertImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor=null){
        /*$ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
        $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->insertImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor);
        return $ImputadosdrogascarpetasDto;*/
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        if (!$validacion->num(1, 2, (int) $ImputadosdrogascarpetasDto->getCveDroga())) {
            if ($ImputadosdrogascarpetasDto->getCveDroga() <= 0) {
                $msg[] = array("La droga seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }
        if ((!$error)) {
            $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
            $ImputadosdrogascarpetasDto->setActivo('S');
            $rs = $ImputadosdrogascarpetasDao->selectImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
            if ($rs == "") {
                $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->insertImputadosdrogascarpetas($ImputadosdrogascarpetasDto, $this->proveedor);
                if ($ImputadosdrogascarpetasDto != "") {
                    $resultado = array(
                        "idImputadoDrogaCarpeta" => $ImputadosdrogascarpetasDto[0]->getIdImputadoDrogaCarpeta(),
                        "idImputadoCarpeta" => $ImputadosdrogascarpetasDto[0]->getIdImputadoCarpeta(),
                        "cveDroga" => $ImputadosdrogascarpetasDto[0]->getCveDroga(),
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la droga debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La droga ya existe para este imputado");
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
            $bitacoraOfendido = $bitacora->agregar(180, 'Insercion tblimputadosdrogascarpetas', 'txt', serialize($ImputadosdrogascarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion insertar drogas imputados carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor=null){
        /*$ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
        //$tmpDto = new ImputadosdrogascarpetasDTO();
        //$tmpDto = $ImputadosdrogascarpetasDao->selectImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor);
        //if($tmpDto!=""){//$ImputadosdrogascarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor);
        return $ImputadosdrogascarpetasDto;
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
        $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        if (!$validacion->num(1, 2, (int) $ImputadosdrogascarpetasDto->getCveDroga())) {
            if ($ImputadosdrogascarpetasDto->getCveDroga() <= 0) {
                $msg[] = array("La droga seleccionado no es valido en la posicion:" . $count);
                $error = true;
            }
        }
        if ((!$error)) {
            $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
            $drogasImputadoAux = new ImputadosdrogascarpetasDTO();
            $drogasImputadoAux->setIdImputadoCarpeta($ImputadosdrogascarpetasDto->getIdImputadoCarpeta());
            $drogasImputadoAux->setCveDroga($ImputadosdrogascarpetasDto->getCveDroga());
            $drogasImputadoAux->setActivo('S');
            $rs = $ImputadosdrogascarpetasDao->selectImputadosdrogascarpetas($drogasImputadoAux);
            if ($rs == "") {
                $ImputadosdrogascarpetasDto->setActivo('S');
                $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto, $this->proveedor);
                if ($ImputadosdrogascarpetasDto != "") {
                    $resultado = array(
                        "idImputadoDrogaCarpeta" => $ImputadosdrogascarpetasDto[0]->getIdImputadoDrogaCarpeta(),
                        "idImputadoCarpeta" => $ImputadosdrogascarpetasDto[0]->getIdImputadoCarpeta(),
                        "cveDroga" => $ImputadosdrogascarpetasDto[0]->getCveDroga(),
                    );
                    array_push($listaResultados, $resultado);
                } else {
                    $msg[] = array("No se logro registrar la droga debido a algun error en la transaccion");
                    $error = true;
                }
            } else {
                $msg[] = array("La droga ya existe para este imputado");
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
            $bitacoraOfendido = $bitacora->agregar(181, 'Modificacion tblimputadosdrogascarpetas', 'txt', serialize($ImputadosdrogascarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion modiifcar drogas imputados carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function deleteImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor=null){
        /*$ImputadosdrogascarpetasDto=$this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
        $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->deleteImputadosdrogascarpetas($ImputadosdrogascarpetasDto,$proveedor);
        return $ImputadosdrogascarpetasDto;*/
        $result = "";
        $validacion = new Validacion();
        $ImputadosdrogascarpetasDto = $this->validarImputadosdrogascarpetas($ImputadosdrogascarpetasDto);
        $ImputadosdrogascarpetasDao = new ImputadosdrogascarpetasDAO();
        $dto = new ImputadosdrogascarpetasDTO();
        $dto->setIdImputadoDrogaCarpeta($ImputadosdrogascarpetasDto->getIdImputadoDrogaCarpeta());
        $dto = $ImputadosdrogascarpetasDao->selectImputadosdrogascarpetas($dto);
        $ImputadosdrogascarpetasDto->setActivo('N');
        $ImputadosdrogascarpetasDto = $ImputadosdrogascarpetasDao->updateImputadosdrogascarpetas($ImputadosdrogascarpetasDto, $proveedor);

        if ($ImputadosdrogascarpetasDto != "") {
            $result = array(
                "status" => "Ok",
                "totalCount" => "La droga se elimino de forma correcta"
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(182, 'Borrado logico tblimputadosdrogascarpetas', 'txt', serialize($dto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion borrado logico drogas imputados carpetas en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => "No se pudo eliminar la droga");
            $result = ($result);
        }
        echo json_encode($result);
    }
}
?>