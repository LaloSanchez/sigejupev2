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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatuscarpetas/EstatuscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatuscarpetas/EstatuscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatuscarpetasController {
private $proveedor;
public function __construct() {
}
public function validarEstatuscarpetas($EstatuscarpetasDto){
$EstatuscarpetasDto->setcveEstatusCarpeta(strtoupper(str_ireplace("'","",trim($EstatuscarpetasDto->getcveEstatusCarpeta()))));
$EstatuscarpetasDto->setdesEstatusCarpeta(strtoupper(str_ireplace("'","",trim($EstatuscarpetasDto->getdesEstatusCarpeta()))));
$EstatuscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatuscarpetasDto->getactivo()))));
$EstatuscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatuscarpetasDto->getfechaRegistro()))));
$EstatuscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatuscarpetasDto->getfechaActualizacion()))));
return $EstatuscarpetasDto;
}
public function selectEstatuscarpetas($EstatuscarpetasDto,$proveedor=null){
$EstatuscarpetasDto=$this->validarEstatuscarpetas($EstatuscarpetasDto);
$EstatuscarpetasDao = new EstatuscarpetasDAO();
$EstatuscarpetasDto = $EstatuscarpetasDao->selectEstatuscarpetas($EstatuscarpetasDto,$proveedor);
return $EstatuscarpetasDto;
}
public function insertEstatuscarpetas($EstatuscarpetasDto,$proveedor=null){
$EstatuscarpetasDto=$this->validarEstatuscarpetas($EstatuscarpetasDto);
$EstatuscarpetasDao = new EstatuscarpetasDAO();
$EstatuscarpetasDto = $EstatuscarpetasDao->insertEstatuscarpetas($EstatuscarpetasDto,$proveedor);
return $EstatuscarpetasDto;
}
public function updateEstatuscarpetas($EstatuscarpetasDto,$proveedor=null){
$EstatuscarpetasDto=$this->validarEstatuscarpetas($EstatuscarpetasDto);
$EstatuscarpetasDao = new EstatuscarpetasDAO();
//$tmpDto = new EstatuscarpetasDTO();
//$tmpDto = $EstatuscarpetasDao->selectEstatuscarpetas($EstatuscarpetasDto,$proveedor);
//if($tmpDto!=""){//$EstatuscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatuscarpetasDto = $EstatuscarpetasDao->updateEstatuscarpetas($EstatuscarpetasDto,$proveedor);
return $EstatuscarpetasDto;
//}
//return "";
}
public function deleteEstatuscarpetas($EstatuscarpetasDto,$proveedor=null){
$EstatuscarpetasDto=$this->validarEstatuscarpetas($EstatuscarpetasDto);
$EstatuscarpetasDao = new EstatuscarpetasDAO();
$EstatuscarpetasDto = $EstatuscarpetasDao->deleteEstatuscarpetas($EstatuscarpetasDto,$proveedor);
return $EstatuscarpetasDto;
}
}
?>