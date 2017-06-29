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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadeacoso/VictimadeacosoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/victimadeacoso/VictimadeacosoDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class VictimadeacosoController {
private $proveedor;
public function __construct() {
}
public function validarVictimadeacoso($VictimadeacosoDto){
$VictimadeacosoDto->setcveVictimaDeAcoso(strtoupper(str_ireplace("'","",trim($VictimadeacosoDto->getcveVictimaDeAcoso()))));
$VictimadeacosoDto->setdesVictimaDeAcoso(strtoupper(str_ireplace("'","",trim($VictimadeacosoDto->getdesVictimaDeAcoso()))));
$VictimadeacosoDto->setactivo(strtoupper(str_ireplace("'","",trim($VictimadeacosoDto->getactivo()))));
$VictimadeacosoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($VictimadeacosoDto->getfechaRegistro()))));
$VictimadeacosoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($VictimadeacosoDto->getfechaActualizacion()))));
return $VictimadeacosoDto;
}
public function selectVictimadeacoso($VictimadeacosoDto,$proveedor=null){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoDao = new VictimadeacosoDAO();
$VictimadeacosoDto = $VictimadeacosoDao->selectVictimadeacoso($VictimadeacosoDto,$proveedor);
return $VictimadeacosoDto;
}
public function insertVictimadeacoso($VictimadeacosoDto,$proveedor=null){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoDao = new VictimadeacosoDAO();
$VictimadeacosoDto = $VictimadeacosoDao->insertVictimadeacoso($VictimadeacosoDto,$proveedor);
return $VictimadeacosoDto;
}
public function updateVictimadeacoso($VictimadeacosoDto,$proveedor=null){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoDao = new VictimadeacosoDAO();
//$tmpDto = new VictimadeacosoDTO();
//$tmpDto = $VictimadeacosoDao->selectVictimadeacoso($VictimadeacosoDto,$proveedor);
//if($tmpDto!=""){//$VictimadeacosoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$VictimadeacosoDto = $VictimadeacosoDao->updateVictimadeacoso($VictimadeacosoDto,$proveedor);
return $VictimadeacosoDto;
//}
//return "";
}
public function deleteVictimadeacoso($VictimadeacosoDto,$proveedor=null){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoDao = new VictimadeacosoDAO();
$VictimadeacosoDto = $VictimadeacosoDao->deleteVictimadeacoso($VictimadeacosoDto,$proveedor);
return $VictimadeacosoDto;
}
}
?>