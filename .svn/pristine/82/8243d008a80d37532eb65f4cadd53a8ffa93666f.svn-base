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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/drogas/DrogasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DrogasController {
private $proveedor;
public function __construct() {
}
public function validarDrogas($DrogasDto){
$DrogasDto->setcveDroga(strtoupper(str_ireplace("'","",trim($DrogasDto->getcveDroga()))));
$DrogasDto->setdesDroga(strtoupper(str_ireplace("'","",trim($DrogasDto->getdesDroga()))));
$DrogasDto->setactivo(strtoupper(str_ireplace("'","",trim($DrogasDto->getactivo()))));
$DrogasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DrogasDto->getfechaRegistro()))));
$DrogasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DrogasDto->getfechaActualizacion()))));
return $DrogasDto;
}
public function selectDrogas($DrogasDto,$proveedor=null){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasDao = new DrogasDAO();
$DrogasDto = $DrogasDao->selectDrogas($DrogasDto,$proveedor);
return $DrogasDto;
}
public function insertDrogas($DrogasDto,$proveedor=null){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasDao = new DrogasDAO();
$DrogasDto = $DrogasDao->insertDrogas($DrogasDto,$proveedor);
return $DrogasDto;
}
public function updateDrogas($DrogasDto,$proveedor=null){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasDao = new DrogasDAO();
//$tmpDto = new DrogasDTO();
//$tmpDto = $DrogasDao->selectDrogas($DrogasDto,$proveedor);
//if($tmpDto!=""){//$DrogasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DrogasDto = $DrogasDao->updateDrogas($DrogasDto,$proveedor);
return $DrogasDto;
//}
//return "";
}
public function deleteDrogas($DrogasDto,$proveedor=null){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasDao = new DrogasDAO();
$DrogasDto = $DrogasDao->deleteDrogas($DrogasDto,$proveedor);
return $DrogasDto;
}
}
?>