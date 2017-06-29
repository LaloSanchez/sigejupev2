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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/objetos/ObjetosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/objetos/ObjetosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ObjetosController {
private $proveedor;
public function __construct() {
}
public function validarObjetos($ObjetosDto){
$ObjetosDto->setidObjeto(strtoupper(str_ireplace("'","",trim($ObjetosDto->getidObjeto()))));
$ObjetosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($ObjetosDto->getidSolicitudCateo()))));
$ObjetosDto->setdesObjeto(strtoupper(str_ireplace("'","",trim($ObjetosDto->getdesObjeto()))));
$ObjetosDto->setdomicilio(strtoupper(str_ireplace("'","",trim($ObjetosDto->getdomicilio()))));
$ObjetosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ObjetosDto->getfechaRegistro()))));
$ObjetosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ObjetosDto->getfechaActualizacion()))));
return $ObjetosDto;
}
public function selectObjetos($ObjetosDto,$proveedor=null){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosDao = new ObjetosDAO();
$ObjetosDto = $ObjetosDao->selectObjetos($ObjetosDto,$proveedor);
return $ObjetosDto;
}
public function insertObjetos($ObjetosDto,$proveedor=null){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosDao = new ObjetosDAO();
$ObjetosDto = $ObjetosDao->insertObjetos($ObjetosDto,$proveedor);
return $ObjetosDto;
}
public function updateObjetos($ObjetosDto,$proveedor=null){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosDao = new ObjetosDAO();
//$tmpDto = new ObjetosDTO();
//$tmpDto = $ObjetosDao->selectObjetos($ObjetosDto,$proveedor);
//if($tmpDto!=""){//$ObjetosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ObjetosDto = $ObjetosDao->updateObjetos($ObjetosDto,$proveedor);
return $ObjetosDto;
//}
//return "";
}
public function deleteObjetos($ObjetosDto,$proveedor=null){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosDao = new ObjetosDAO();
$ObjetosDto = $ObjetosDao->deleteObjetos($ObjetosDto,$proveedor);
return $ObjetosDto;
}
}
?>