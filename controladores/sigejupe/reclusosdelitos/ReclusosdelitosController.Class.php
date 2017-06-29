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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/reclusosdelitos/ReclusosdelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/reclusosdelitos/ReclusosdelitosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ReclusosdelitosController {
private $proveedor;
public function __construct() {
}
public function validarReclusosdelitos($ReclusosdelitosDto){
$ReclusosdelitosDto->setidReclusoDelito(strtoupper(str_ireplace("'","",trim($ReclusosdelitosDto->getidReclusoDelito()))));
$ReclusosdelitosDto->setcveDelito(strtoupper(str_ireplace("'","",trim($ReclusosdelitosDto->getcveDelito()))));
$ReclusosdelitosDto->setidRecluso(strtoupper(str_ireplace("'","",trim($ReclusosdelitosDto->getidRecluso()))));
$ReclusosdelitosDto->setactivo(strtoupper(str_ireplace("'","",trim($ReclusosdelitosDto->getactivo()))));
$ReclusosdelitosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ReclusosdelitosDto->getfechaRegistro()))));
$ReclusosdelitosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ReclusosdelitosDto->getfechaActualizacion()))));
return $ReclusosdelitosDto;
}
public function selectReclusosdelitos($ReclusosdelitosDto,$proveedor=null){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosDao = new ReclusosdelitosDAO();
$ReclusosdelitosDto = $ReclusosdelitosDao->selectReclusosdelitos($ReclusosdelitosDto,$proveedor);
return $ReclusosdelitosDto;
}
public function insertReclusosdelitos($ReclusosdelitosDto,$proveedor=null){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosDao = new ReclusosdelitosDAO();
$ReclusosdelitosDto = $ReclusosdelitosDao->insertReclusosdelitos($ReclusosdelitosDto,$proveedor);
return $ReclusosdelitosDto;
}
public function updateReclusosdelitos($ReclusosdelitosDto,$proveedor=null){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosDao = new ReclusosdelitosDAO();
//$tmpDto = new ReclusosdelitosDTO();
//$tmpDto = $ReclusosdelitosDao->selectReclusosdelitos($ReclusosdelitosDto,$proveedor);
//if($tmpDto!=""){//$ReclusosdelitosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ReclusosdelitosDto = $ReclusosdelitosDao->updateReclusosdelitos($ReclusosdelitosDto,$proveedor);
return $ReclusosdelitosDto;
//}
//return "";
}
public function deleteReclusosdelitos($ReclusosdelitosDto,$proveedor=null){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosDao = new ReclusosdelitosDAO();
$ReclusosdelitosDto = $ReclusosdelitosDao->deleteReclusosdelitos($ReclusosdelitosDto,$proveedor);
return $ReclusosdelitosDto;
}
}
?>