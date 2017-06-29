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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposincompetencias/TiposincompetenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposincompetencias/TiposincompetenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposincompetenciasController {
private $proveedor;
public function __construct() {
}
public function validarTiposincompetencias($TiposincompetenciasDto){
$TiposincompetenciasDto->setcveTipoIncompetencia(strtoupper(str_ireplace("'","",trim($TiposincompetenciasDto->getcveTipoIncompetencia()))));
$TiposincompetenciasDto->setdesTipoIncompetencia(strtoupper(str_ireplace("'","",trim($TiposincompetenciasDto->getdesTipoIncompetencia()))));
$TiposincompetenciasDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposincompetenciasDto->getactivo()))));
$TiposincompetenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposincompetenciasDto->getfechaRegistro()))));
$TiposincompetenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposincompetenciasDto->getfechaActualizacion()))));
return $TiposincompetenciasDto;
}
public function selectTiposincompetencias($TiposincompetenciasDto,$proveedor=null){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasDao = new TiposincompetenciasDAO();
$TiposincompetenciasDto = $TiposincompetenciasDao->selectTiposincompetencias($TiposincompetenciasDto,$proveedor);
return $TiposincompetenciasDto;
}
public function insertTiposincompetencias($TiposincompetenciasDto,$proveedor=null){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasDao = new TiposincompetenciasDAO();
$TiposincompetenciasDto = $TiposincompetenciasDao->insertTiposincompetencias($TiposincompetenciasDto,$proveedor);
return $TiposincompetenciasDto;
}
public function updateTiposincompetencias($TiposincompetenciasDto,$proveedor=null){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasDao = new TiposincompetenciasDAO();
//$tmpDto = new TiposincompetenciasDTO();
//$tmpDto = $TiposincompetenciasDao->selectTiposincompetencias($TiposincompetenciasDto,$proveedor);
//if($tmpDto!=""){//$TiposincompetenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposincompetenciasDto = $TiposincompetenciasDao->updateTiposincompetencias($TiposincompetenciasDto,$proveedor);
return $TiposincompetenciasDto;
//}
//return "";
}
public function deleteTiposincompetencias($TiposincompetenciasDto,$proveedor=null){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasDao = new TiposincompetenciasDAO();
$TiposincompetenciasDto = $TiposincompetenciasDao->deleteTiposincompetencias($TiposincompetenciasDto,$proveedor);
return $TiposincompetenciasDto;
}
}
?>