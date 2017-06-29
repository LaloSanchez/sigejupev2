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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatussolicitudesmuestras/EstatussolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatussolicitudesmuestras/EstatussolicitudesmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudesmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto){
$EstatussolicitudesmuestrasDto->setcveEstatusSolicitudMuestra(strtoupper(str_ireplace("'","",trim($EstatussolicitudesmuestrasDto->getcveEstatusSolicitudMuestra()))));
$EstatussolicitudesmuestrasDto->setdesEstatusSolicitudMuestra(strtoupper(str_ireplace("'","",trim($EstatussolicitudesmuestrasDto->getdesEstatusSolicitudMuestra()))));
$EstatussolicitudesmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatussolicitudesmuestrasDto->getactivo()))));
$EstatussolicitudesmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatussolicitudesmuestrasDto->getfechaRegistro()))));
$EstatussolicitudesmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatussolicitudesmuestrasDto->getfechaActualizacion()))));
return $EstatussolicitudesmuestrasDto;
}
public function selectEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor=null){
$EstatussolicitudesmuestrasDto=$this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
$EstatussolicitudesmuestrasDao = new EstatussolicitudesmuestrasDAO();
$EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasDao->selectEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor);
return $EstatussolicitudesmuestrasDto;
}
public function insertEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor=null){
$EstatussolicitudesmuestrasDto=$this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
$EstatussolicitudesmuestrasDao = new EstatussolicitudesmuestrasDAO();
$EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasDao->insertEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor);
return $EstatussolicitudesmuestrasDto;
}
public function updateEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor=null){
$EstatussolicitudesmuestrasDto=$this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
$EstatussolicitudesmuestrasDao = new EstatussolicitudesmuestrasDAO();
//$tmpDto = new EstatussolicitudesmuestrasDTO();
//$tmpDto = $EstatussolicitudesmuestrasDao->selectEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor);
//if($tmpDto!=""){//$EstatussolicitudesmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasDao->updateEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor);
return $EstatussolicitudesmuestrasDto;
//}
//return "";
}
public function deleteEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor=null){
$EstatussolicitudesmuestrasDto=$this->validarEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto);
$EstatussolicitudesmuestrasDao = new EstatussolicitudesmuestrasDAO();
$EstatussolicitudesmuestrasDto = $EstatussolicitudesmuestrasDao->deleteEstatussolicitudesmuestras($EstatussolicitudesmuestrasDto,$proveedor);
return $EstatussolicitudesmuestrasDto;
}
}
?>