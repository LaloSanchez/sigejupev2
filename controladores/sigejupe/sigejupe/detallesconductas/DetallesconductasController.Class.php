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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/detallesconductas/DetallesconductasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DetallesconductasController {
private $proveedor;
public function __construct() {
}
public function validarDetallesconductas($DetallesconductasDto){
$DetallesconductasDto->setcveDetalleConducta(strtoupper(str_ireplace("'","",trim($DetallesconductasDto->getcveDetalleConducta()))));
$DetallesconductasDto->setcveConducta(strtoupper(str_ireplace("'","",trim($DetallesconductasDto->getcveConducta()))));
$DetallesconductasDto->setdesDetalleConducta(strtoupper(str_ireplace("'","",trim($DetallesconductasDto->getdesDetalleConducta()))));
$DetallesconductasDto->setactivo(strtoupper(str_ireplace("'","",trim($DetallesconductasDto->getactivo()))));
$DetallesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DetallesconductasDto->getfechaRegistro()))));
$DetallesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DetallesconductasDto->getfechaActualizacion()))));
return $DetallesconductasDto;
}
public function selectDetallesconductas($DetallesconductasDto,$proveedor=null){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasDao = new DetallesconductasDAO();
$DetallesconductasDto = $DetallesconductasDao->selectDetallesconductas($DetallesconductasDto,$proveedor);
return $DetallesconductasDto;
}
public function insertDetallesconductas($DetallesconductasDto,$proveedor=null){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasDao = new DetallesconductasDAO();
$DetallesconductasDto = $DetallesconductasDao->insertDetallesconductas($DetallesconductasDto,$proveedor);
return $DetallesconductasDto;
}
public function updateDetallesconductas($DetallesconductasDto,$proveedor=null){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasDao = new DetallesconductasDAO();
//$tmpDto = new DetallesconductasDTO();
//$tmpDto = $DetallesconductasDao->selectDetallesconductas($DetallesconductasDto,$proveedor);
//if($tmpDto!=""){//$DetallesconductasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DetallesconductasDto = $DetallesconductasDao->updateDetallesconductas($DetallesconductasDto,$proveedor);
return $DetallesconductasDto;
//}
//return "";
}
public function deleteDetallesconductas($DetallesconductasDto,$proveedor=null){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasDao = new DetallesconductasDAO();
$DetallesconductasDto = $DetallesconductasDao->deleteDetallesconductas($DetallesconductasDto,$proveedor);
return $DetallesconductasDto;
}
}
?>