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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AntecedesactuacionesController {
private $proveedor;
public function __construct() {
}
public function validarAntecedesactuaciones($AntecedesactuacionesDto){
$AntecedesactuacionesDto->setidAntecedesActuacion(strtoupper(str_ireplace("'","",trim($AntecedesactuacionesDto->getidAntecedesActuacion()))));
$AntecedesactuacionesDto->setidActuacionPadre(strtoupper(str_ireplace("'","",trim($AntecedesactuacionesDto->getidActuacionPadre()))));
$AntecedesactuacionesDto->setidActuacionHija(strtoupper(str_ireplace("'","",trim($AntecedesactuacionesDto->getidActuacionHija()))));
$AntecedesactuacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($AntecedesactuacionesDto->getactivo()))));
$AntecedesactuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($AntecedesactuacionesDto->getfechaRegistro()))));
$AntecedesactuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($AntecedesactuacionesDto->getfechaActualizacion()))));
return $AntecedesactuacionesDto;
}
public function selectAntecedesactuaciones($AntecedesactuacionesDto,$proveedor=null){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesDao = new AntecedesactuacionesDAO();
$AntecedesactuacionesDto = $AntecedesactuacionesDao->selectAntecedesactuaciones($AntecedesactuacionesDto,$proveedor);
return $AntecedesactuacionesDto;
}
public function insertAntecedesactuaciones($AntecedesactuacionesDto,$proveedor=null){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesDao = new AntecedesactuacionesDAO();
$AntecedesactuacionesDto = $AntecedesactuacionesDao->insertAntecedesactuaciones($AntecedesactuacionesDto,$proveedor);
return $AntecedesactuacionesDto;
}
public function updateAntecedesactuaciones($AntecedesactuacionesDto,$proveedor=null){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesDao = new AntecedesactuacionesDAO();
//$tmpDto = new AntecedesactuacionesDTO();
//$tmpDto = $AntecedesactuacionesDao->selectAntecedesactuaciones($AntecedesactuacionesDto,$proveedor);
//if($tmpDto!=""){//$AntecedesactuacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$AntecedesactuacionesDto = $AntecedesactuacionesDao->updateAntecedesactuaciones($AntecedesactuacionesDto,$proveedor);
return $AntecedesactuacionesDto;
//}
//return "";
}
public function deleteAntecedesactuaciones($AntecedesactuacionesDto,$proveedor=null){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesDao = new AntecedesactuacionesDAO();
$AntecedesactuacionesDto = $AntecedesactuacionesDao->deleteAntecedesactuaciones($AntecedesactuacionesDto,$proveedor);
return $AntecedesactuacionesDto;
}
}
?>