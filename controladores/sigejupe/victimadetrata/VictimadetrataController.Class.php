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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadetrata/VictimadetrataDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/victimadetrata/VictimadetrataDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class VictimadetrataController {
private $proveedor;
public function __construct() {
}
public function validarVictimadetrata($VictimadetrataDto){
$VictimadetrataDto->setcveVictimaDeTrata(strtoupper(str_ireplace("'","",trim($VictimadetrataDto->getcveVictimaDeTrata()))));
$VictimadetrataDto->setdesVictimaDeTrata(strtoupper(str_ireplace("'","",trim($VictimadetrataDto->getdesVictimaDeTrata()))));
$VictimadetrataDto->setactivo(strtoupper(str_ireplace("'","",trim($VictimadetrataDto->getactivo()))));
$VictimadetrataDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($VictimadetrataDto->getfechaRegistro()))));
$VictimadetrataDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($VictimadetrataDto->getfechaActualizacion()))));
return $VictimadetrataDto;
}
public function selectVictimadetrata($VictimadetrataDto,$proveedor=null){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataDao = new VictimadetrataDAO();
$VictimadetrataDto = $VictimadetrataDao->selectVictimadetrata($VictimadetrataDto,$proveedor);
return $VictimadetrataDto;
}
public function insertVictimadetrata($VictimadetrataDto,$proveedor=null){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataDao = new VictimadetrataDAO();
$VictimadetrataDto = $VictimadetrataDao->insertVictimadetrata($VictimadetrataDto,$proveedor);
return $VictimadetrataDto;
}
public function updateVictimadetrata($VictimadetrataDto,$proveedor=null){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataDao = new VictimadetrataDAO();
//$tmpDto = new VictimadetrataDTO();
//$tmpDto = $VictimadetrataDao->selectVictimadetrata($VictimadetrataDto,$proveedor);
//if($tmpDto!=""){//$VictimadetrataDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$VictimadetrataDto = $VictimadetrataDao->updateVictimadetrata($VictimadetrataDto,$proveedor);
return $VictimadetrataDto;
//}
//return "";
}
public function deleteVictimadetrata($VictimadetrataDto,$proveedor=null){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataDao = new VictimadetrataDAO();
$VictimadetrataDto = $VictimadetrataDao->deleteVictimadetrata($VictimadetrataDto,$proveedor);
return $VictimadetrataDto;
}
}
?>