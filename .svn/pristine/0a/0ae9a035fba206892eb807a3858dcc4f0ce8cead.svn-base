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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DetallessexualesconductasController {
private $proveedor;
public function __construct() {
}
public function validarDetallessexualesconductas($DetallessexualesconductasDto){
$DetallessexualesconductasDto->setidDetalleSexualConducta(strtoupper(str_ireplace("'","",trim($DetallessexualesconductasDto->getidDetalleSexualConducta()))));
$DetallessexualesconductasDto->setcveDetalleConducta(strtoupper(str_ireplace("'","",trim($DetallessexualesconductasDto->getcveDetalleConducta()))));
$DetallessexualesconductasDto->setidSexualConducta(strtoupper(str_ireplace("'","",trim($DetallessexualesconductasDto->getidSexualConducta()))));
$DetallessexualesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DetallessexualesconductasDto->getfechaRegistro()))));
$DetallessexualesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DetallessexualesconductasDto->getfechaActualizacion()))));
return $DetallessexualesconductasDto;
}
public function selectDetallessexualesconductas($DetallessexualesconductasDto,$proveedor=null){
$DetallessexualesconductasDto=$this->validarDetallessexualesconductas($DetallessexualesconductasDto);
$DetallessexualesconductasDao = new DetallessexualesconductasDAO();
$DetallessexualesconductasDto = $DetallessexualesconductasDao->selectDetallessexualesconductas($DetallessexualesconductasDto,$proveedor);
return $DetallessexualesconductasDto;
}
public function insertDetallessexualesconductas($DetallessexualesconductasDto,$proveedor=null){
$DetallessexualesconductasDto=$this->validarDetallessexualesconductas($DetallessexualesconductasDto);
$DetallessexualesconductasDao = new DetallessexualesconductasDAO();
$DetallessexualesconductasDto = $DetallessexualesconductasDao->insertDetallessexualesconductas($DetallessexualesconductasDto,$proveedor);
return $DetallessexualesconductasDto;
}
public function updateDetallessexualesconductas($DetallessexualesconductasDto,$proveedor=null){
$DetallessexualesconductasDto=$this->validarDetallessexualesconductas($DetallessexualesconductasDto);
$DetallessexualesconductasDao = new DetallessexualesconductasDAO();
//$tmpDto = new DetallessexualesconductasDTO();
//$tmpDto = $DetallessexualesconductasDao->selectDetallessexualesconductas($DetallessexualesconductasDto,$proveedor);
//if($tmpDto!=""){//$DetallessexualesconductasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DetallessexualesconductasDto = $DetallessexualesconductasDao->updateDetallessexualesconductas($DetallessexualesconductasDto,$proveedor);
return $DetallessexualesconductasDto;
//}
//return "";
}
public function deleteDetallessexualesconductas($DetallessexualesconductasDto,$proveedor=null){
$DetallessexualesconductasDto=$this->validarDetallessexualesconductas($DetallessexualesconductasDto);
$DetallessexualesconductasDao = new DetallessexualesconductasDAO();
$DetallessexualesconductasDto = $DetallessexualesconductasDao->deleteDetallessexualesconductas($DetallessexualesconductasDto,$proveedor);
return $DetallessexualesconductasDto;
}
}
?>