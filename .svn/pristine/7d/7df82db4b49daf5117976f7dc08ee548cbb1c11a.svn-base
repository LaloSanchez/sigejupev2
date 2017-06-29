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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detencionescarpetas/DetencionescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/detencionescarpetas/DetencionescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DetencionescarpetasController {
private $proveedor;
public function __construct() {
}
public function validarDetencionescarpetas($DetencionescarpetasDto){
$DetencionescarpetasDto->setidDetencionCarpeta(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getidDetencionCarpeta()))));
$DetencionescarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getidImputadoCarpeta()))));
$DetencionescarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getactivo()))));
$DetencionescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getfechaRegistro()))));
$DetencionescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getfechaActualizacion()))));
$DetencionescarpetasDto->setfechaDetencion(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getfechaDetencion()))));
$DetencionescarpetasDto->setnumOficio(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getnumOficio()))));
$DetencionescarpetasDto->setcveCereso(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getcveCereso()))));
$DetencionescarpetasDto->setnombreAgente(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getnombreAgente()))));
$DetencionescarpetasDto->setobservaciones(strtoupper(str_ireplace("'","",trim($DetencionescarpetasDto->getobservaciones()))));
return $DetencionescarpetasDto;
}
public function selectDetencionescarpetas($DetencionescarpetasDto,$proveedor=null){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasDao = new DetencionescarpetasDAO();
$DetencionescarpetasDto = $DetencionescarpetasDao->selectDetencionescarpetas($DetencionescarpetasDto,$proveedor);
return $DetencionescarpetasDto;
}
public function insertDetencionescarpetas($DetencionescarpetasDto,$proveedor=null){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasDao = new DetencionescarpetasDAO();
$DetencionescarpetasDto = $DetencionescarpetasDao->insertDetencionescarpetas($DetencionescarpetasDto,$proveedor);
return $DetencionescarpetasDto;
}
public function updateDetencionescarpetas($DetencionescarpetasDto,$proveedor=null){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasDao = new DetencionescarpetasDAO();
//$tmpDto = new DetencionescarpetasDTO();
//$tmpDto = $DetencionescarpetasDao->selectDetencionescarpetas($DetencionescarpetasDto,$proveedor);
//if($tmpDto!=""){//$DetencionescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DetencionescarpetasDto = $DetencionescarpetasDao->updateDetencionescarpetas($DetencionescarpetasDto,$proveedor);
return $DetencionescarpetasDto;
//}
//return "";
}
public function deleteDetencionescarpetas($DetencionescarpetasDto,$proveedor=null){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasDao = new DetencionescarpetasDAO();
$DetencionescarpetasDto = $DetencionescarpetasDao->deleteDetencionescarpetas($DetencionescarpetasDto,$proveedor);
return $DetencionescarpetasDto;
}
}
?>