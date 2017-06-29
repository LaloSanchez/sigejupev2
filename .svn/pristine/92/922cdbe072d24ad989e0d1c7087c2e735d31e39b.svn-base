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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/comisiones/ComisionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ComisionesController {
private $proveedor;
public function __construct() {
}
public function validarComisiones($ComisionesDto){
$ComisionesDto->setcveComision(strtoupper(str_ireplace("'","",trim($ComisionesDto->getcveComision()))));
$ComisionesDto->setdesComision(strtoupper(str_ireplace("'","",trim($ComisionesDto->getdesComision()))));
$ComisionesDto->setactivo(strtoupper(str_ireplace("'","",trim($ComisionesDto->getactivo()))));
$ComisionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ComisionesDto->getfechaRegistro()))));
$ComisionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ComisionesDto->getfechaActualizacion()))));
return $ComisionesDto;
}
public function selectComisiones($ComisionesDto,$proveedor=null){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesDao = new ComisionesDAO();
$ComisionesDto = $ComisionesDao->selectComisiones($ComisionesDto," ORDER BY desComision ASC",$proveedor);
return $ComisionesDto;
}
public function insertComisiones($ComisionesDto,$proveedor=null){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesDao = new ComisionesDAO();
$ComisionesDto = $ComisionesDao->insertComisiones($ComisionesDto,$proveedor);
return $ComisionesDto;
}
public function updateComisiones($ComisionesDto,$proveedor=null){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesDao = new ComisionesDAO();
//$tmpDto = new ComisionesDTO();
//$tmpDto = $ComisionesDao->selectComisiones($ComisionesDto,$proveedor);
//if($tmpDto!=""){//$ComisionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ComisionesDto = $ComisionesDao->updateComisiones($ComisionesDto,$proveedor);
return $ComisionesDto;
//}
//return "";
}
public function deleteComisiones($ComisionesDto,$proveedor=null){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesDao = new ComisionesDAO();
$ComisionesDto = $ComisionesDao->deleteComisiones($ComisionesDto,$proveedor);
return $ComisionesDto;
}
}
?>