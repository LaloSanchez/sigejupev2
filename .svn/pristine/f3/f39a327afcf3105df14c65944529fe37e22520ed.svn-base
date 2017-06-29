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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/reasignaciontocas/ReasignaciontocasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/reasignaciontocas/ReasignaciontocasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ReasignaciontocasController {
private $proveedor;
public function __construct() {
}
public function validarReasignaciontocas($ReasignaciontocasDto){
$ReasignaciontocasDto->setidReasignacionToca(strtoupper(str_ireplace("'","",trim($ReasignaciontocasDto->getidReasignacionToca()))));
$ReasignaciontocasDto->setidReferenciaOrigen(strtoupper(str_ireplace("'","",trim($ReasignaciontocasDto->getidReferenciaOrigen()))));
$ReasignaciontocasDto->setidReferenciaDestino(strtoupper(str_ireplace("'","",trim($ReasignaciontocasDto->getidReferenciaDestino()))));
$ReasignaciontocasDto->setactivo(strtoupper(str_ireplace("'","",trim($ReasignaciontocasDto->getactivo()))));
$ReasignaciontocasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ReasignaciontocasDto->getfechaRegistro()))));
$ReasignaciontocasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ReasignaciontocasDto->getfechaActualizacion()))));
return $ReasignaciontocasDto;
}
public function selectReasignaciontocas($ReasignaciontocasDto,$proveedor=null){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasDao = new ReasignaciontocasDAO();
$ReasignaciontocasDto = $ReasignaciontocasDao->selectReasignaciontocas($ReasignaciontocasDto,$proveedor);
return $ReasignaciontocasDto;
}
public function insertReasignaciontocas($ReasignaciontocasDto,$proveedor=null){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasDao = new ReasignaciontocasDAO();
$ReasignaciontocasDto = $ReasignaciontocasDao->insertReasignaciontocas($ReasignaciontocasDto,$proveedor);
return $ReasignaciontocasDto;
}
public function updateReasignaciontocas($ReasignaciontocasDto,$proveedor=null){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasDao = new ReasignaciontocasDAO();
//$tmpDto = new ReasignaciontocasDTO();
//$tmpDto = $ReasignaciontocasDao->selectReasignaciontocas($ReasignaciontocasDto,$proveedor);
//if($tmpDto!=""){//$ReasignaciontocasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ReasignaciontocasDto = $ReasignaciontocasDao->updateReasignaciontocas($ReasignaciontocasDto,$proveedor);
return $ReasignaciontocasDto;
//}
//return "";
}
public function deleteReasignaciontocas($ReasignaciontocasDto,$proveedor=null){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasDao = new ReasignaciontocasDAO();
$ReasignaciontocasDto = $ReasignaciontocasDao->deleteReasignaciontocas($ReasignaciontocasDto,$proveedor);
return $ReasignaciontocasDto;
}
}
?>