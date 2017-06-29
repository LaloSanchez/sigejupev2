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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class DefensoresimputadoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto){
        $DefensoresimputadoscarpetasDto->setidDefensorImputadoCarpeta(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getidDefensorImputadoCarpeta()))));
        $DefensoresimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getidImputadoCarpeta()))));
        $DefensoresimputadoscarpetasDto->setcveTipoDefensor(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getcveTipoDefensor()))));
        $DefensoresimputadoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getnombre()))));
        $DefensoresimputadoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->gettelefono()))));
        $DefensoresimputadoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getcelular()))));
        $DefensoresimputadoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getemail()))));
        $DefensoresimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getactivo()))));
        $DefensoresimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getfechaRegistro()))));
        $DefensoresimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DefensoresimputadoscarpetasDto->getfechaActualizacion()))));
        return $DefensoresimputadoscarpetasDto;
    }
    public function selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor);
        return $DefensoresimputadoscarpetasDto;
    }
    
    public function insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor);
        return $DefensoresimputadoscarpetasDto;
    }
    
    /*
     * Agregar defensroes imputados carpteas
     */
    public function agregarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if (!$validacion->text(1, 2, (int) $DefensoresimputadoscarpetasDto->getCveTipoDefensor())) {
            if ($DefensoresimputadoscarpetasDto->getCveTipoDefensor() <= 0) {
                $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 500, (string) $DefensoresimputadoscarpetasDto->getNombre())) {
            if ($DefensoresimputadoscarpetasDto->getNombre() == "") {
                $msg[] = array("No ingreso un nombre correcto en la posicion:" . $count);
                $error = true;
            }
        }
        if ($DefensoresimputadoscarpetasDto->getTelefono() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getTelefono())) {
                $msg[] = array("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ($DefensoresimputadoscarpetasDto->getCelular() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getCelular())) {
                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                $error = true;
            }
        }

        /*if ($DefensoresimputadoscarpetasDto->getEmail() != "") {
            if (!$validacion->email((string) $DefensoresimputadoscarpetasDto->getEmail())) {
                $msg[] = array("No ingreso un email correcto en la posicion:" . $count);
                $error = true;
            }
        }*/
        if ((!$error)) {
            $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
            $DefensoresimputadoscarpetasDto->setActivo('S');
            $DefensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->insertDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);

            if ($DefensoresimputadoscarpetasDto != "") {
                $resultado = array(
                    "idDefensorImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta(),
                    "idImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "cveTipoDefensor" => $DefensoresimputadoscarpetasDto[0]->getCveTipoDefensor(),
                    "nombre" => utf8_encode($DefensoresimputadoscarpetasDto[0]->getNombre()),
                    "telefono" => $DefensoresimputadoscarpetasDto[0]->getTelefono(),
                    "celular" => $DefensoresimputadoscarpetasDto[0]->getCelular(),
                    "email" => $DefensoresimputadoscarpetasDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
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
            $bitacoraOfendido = $bitacora->agregar(177, 'Insercion tbldefensoresimputadoscarpetas', 'txt', serialize($DefensoresimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion insertar defensor imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function updateDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        //$tmpDto = new DefensoresimputadoscarpetasDTO();
        //$tmpDto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$DefensoresimputadoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->updateDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor);
        return $DefensoresimputadoscarpetasDto;
        //}
        //return "";
    }
    
    /*
     * Método para editar campos no requeridos en defensoresimputadoscarpetas
     */
    public function modificarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        if (!$validacion->text(1, 2, (int) $DefensoresimputadoscarpetasDto->getCveTipoDefensor())) {
            if ($DefensoresimputadoscarpetasDto->getCveTipoDefensor() <= 0) {
                $msg[] = array("El tipo de defensor no es valido en la posicion:" . $count);
                $error = true;
            }
        }

        if (!$validacion->text(1, 500, (string) $DefensoresimputadoscarpetasDto->getNombre())) {
            if ($DefensoresimputadoscarpetasDto->getNombre() == "") {
                $msg[] = array("No ingreso un nombre correcto en la posicion:" . $count);
                $error = true;
            }
        }
        if ($DefensoresimputadoscarpetasDto->getTelefono() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getTelefono())) {
                $msg[] = array("No ingreso un Telefono correcto correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ($DefensoresimputadoscarpetasDto->getCelular() != "") {
            if (!$validacion->telefono((string) $DefensoresimputadoscarpetasDto->getCelular())) {
                $msg[] = array("No ingreso un celular correcto en la posicion:" . $count);
                $error = true;
            }
        }

        if ((!$error)) {
            $defensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
            $DefensoresimputadoscarpetasDto->setActivo('S');
            $DefensoresimputadoscarpetasDto = $defensoresimputadoscarpetasDao->modificarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto, $proveedor);

            if ($DefensoresimputadoscarpetasDto != "") {
                $resultado = array(
                     "idDefensorImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdDefensorImputadoCarpeta(),
                    "idImputadoCarpeta" => $DefensoresimputadoscarpetasDto[0]->getIdImputadoCarpeta(),
                    "cveTipoDefensor" => $DefensoresimputadoscarpetasDto[0]->getCveTipoDefensor(),
                    "nombre" => utf8_encode($DefensoresimputadoscarpetasDto[0]->getNombre()),
                    "telefono" => $DefensoresimputadoscarpetasDto[0]->getTelefono(),
                    "celular" => $DefensoresimputadoscarpetasDto[0]->getCelular(),
                    "email" => $DefensoresimputadoscarpetasDto[0]->getEmail(),
                );
                array_push($listaResultados, $resultado);
            } else {
                $msg[] = array("No se logro registrar el defensor debido a algun error en la transaccion");
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
            $bitacoraOfendido = $bitacora->agregar(178, 'Modificacion tbldefensoresimputadoscarpetas', 'txt', serialize($DefensoresimputadoscarpetasDto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion modificar defensor imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => $msg);
            $result = ($result);
        }
        echo json_encode($result);
    }
    
    public function deleteDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        $DefensoresimputadoscarpetasDto=$this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->deleteDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor);
        return $DefensoresimputadoscarpetasDto;
    }
    
    /*
     * Borrado logico de defensores imputados carpetas
     */
    public function eliminarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto,$proveedor=null){
        /**/
        $error = false;
        $result = "";
        $validacion = new Validacion();
        $msg = array();
        $count = 1;
        $indexCount = 0;
        $arrayAuxiliar = array();
        $listaResultados = array();
        $DefensoresimputadoscarpetasDao = new DefensoresimputadoscarpetasDAO();
        $DefensoresimputadoscarpetasDto = $this->validarDefensoresimputadoscarpetas($DefensoresimputadoscarpetasDto);
        $dto = new DefensoresimputadoscarpetasDTO();
        $dto->setIdDefensorImputadoCarpeta($DefensoresimputadoscarpetasDto->getIdDefensorImputadoCarpeta());
        $dto = $DefensoresimputadoscarpetasDao->selectDefensoresimputadoscarpetas($dto);
        $DefensoresimputadoscarpetasDto->setActivo('N');
        $DefensoresimputadoscarpetasDto = $DefensoresimputadoscarpetasDao->eliminarDefensoresimputadoscarpetasByIdImputado($DefensoresimputadoscarpetasDto, $proveedor);
        if ($DefensoresimputadoscarpetasDto != "") {
            $result = array(
                "status" => "Ok",
                "totalCount" => "El defensor de elimino de forma correcta"
            );
            $bitacora = new BitacoramovimientosController();
            $bitacoraOfendido = $bitacora->agregar(179, 'Borrado logico tbldefensoresimputadoscarpetas', 'txt', serialize($dto[0]), '', null);

            if (!count($bitacoraOfendido)) throw new Exception('no se pudo guardar la accion borrado logico defensor imputado carpeta en bitacora');
        } else {
            $result = array("status" => "Error", "msj" => "No se puedo eliminar el defensor");
            $result = ($result);
        }
        echo json_encode($result);
    }
}
?>