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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadeviolenciadegenero/VictimadeviolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/victimadeviolenciadegenero/VictimadeviolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class VictimadeviolenciadegeneroController {
private $proveedor;
public function __construct() {
}
public function validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto){
$VictimadeviolenciadegeneroDto->setcveVictimaDeViolenciaDeGenero(strtoupper(str_ireplace("'","",trim($VictimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()))));
$VictimadeviolenciadegeneroDto->setdesVictimaDeViolenciaDeGenero(strtoupper(str_ireplace("'","",trim($VictimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()))));
$VictimadeviolenciadegeneroDto->setactivo(strtoupper(str_ireplace("'","",trim($VictimadeviolenciadegeneroDto->getactivo()))));
$VictimadeviolenciadegeneroDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($VictimadeviolenciadegeneroDto->getfechaRegistro()))));
$VictimadeviolenciadegeneroDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($VictimadeviolenciadegeneroDto->getfechaActualizacion()))));
return $VictimadeviolenciadegeneroDto;
}
public function selectVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor=null){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroDao = new VictimadeviolenciadegeneroDAO();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroDao->selectVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor);
return $VictimadeviolenciadegeneroDto;
}
public function insertVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor=null){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroDao = new VictimadeviolenciadegeneroDAO();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroDao->insertVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor);
return $VictimadeviolenciadegeneroDto;
}
public function updateVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor=null){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroDao = new VictimadeviolenciadegeneroDAO();
//$tmpDto = new VictimadeviolenciadegeneroDTO();
//$tmpDto = $VictimadeviolenciadegeneroDao->selectVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor);
//if($tmpDto!=""){//$VictimadeviolenciadegeneroDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroDao->updateVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor);
return $VictimadeviolenciadegeneroDto;
//}
//return "";
}
public function deleteVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor=null){
$VictimadeviolenciadegeneroDto=$this->validarVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto);
$VictimadeviolenciadegeneroDao = new VictimadeviolenciadegeneroDAO();
$VictimadeviolenciadegeneroDto = $VictimadeviolenciadegeneroDao->deleteVictimadeviolenciadegenero($VictimadeviolenciadegeneroDto,$proveedor);
return $VictimadeviolenciadegeneroDto;
}
}
?>