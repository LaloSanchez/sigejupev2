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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/codigos/CodigosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/codigos/CodigosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class CodigosController {
private $proveedor;
public function __construct() {
}
public function validarCodigos($CodigosDto){
$CodigosDto->setcveCodigo(strtoupper(str_ireplace("'","",trim($CodigosDto->getcveCodigo()))));
$CodigosDto->setdesCodigo(strtoupper(str_ireplace("'","",trim($CodigosDto->getdesCodigo()))));
$CodigosDto->setactivo(strtoupper(str_ireplace("'","",trim($CodigosDto->getactivo()))));
$CodigosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($CodigosDto->getfechaRegistro()))));
$CodigosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($CodigosDto->getfechaActualizacion()))));
return $CodigosDto;
}
public function selectCodigos($CodigosDto,$proveedor=null){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosDao = new CodigosDAO();
$CodigosDto = $CodigosDao->selectCodigos($CodigosDto,$proveedor);
return $CodigosDto;
}
public function insertCodigos($CodigosDto,$proveedor=null){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosDao = new CodigosDAO();
$CodigosDto = $CodigosDao->insertCodigos($CodigosDto,$proveedor);
return $CodigosDto;
}
public function updateCodigos($CodigosDto,$proveedor=null){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosDao = new CodigosDAO();
//$tmpDto = new CodigosDTO();
//$tmpDto = $CodigosDao->selectCodigos($CodigosDto,$proveedor);
//if($tmpDto!=""){//$CodigosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$CodigosDto = $CodigosDao->updateCodigos($CodigosDto,$proveedor);
return $CodigosDto;
//}
//return "";
}
public function deleteCodigos($CodigosDto,$proveedor=null){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosDao = new CodigosDAO();
$CodigosDto = $CodigosDao->deleteCodigos($CodigosDto,$proveedor);
return $CodigosDto;
}
}
?>