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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detencionessolicitudes/DetencionessolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/detencionessolicitudes/DetencionessolicitudesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DetencionessolicitudesController {
private $proveedor;
public function __construct() {
}
public function validarDetencionessolicitudes($DetencionessolicitudesDto){
$DetencionessolicitudesDto->setidDetencionSolicitud(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getidDetencionSolicitud()))));
$DetencionessolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getidImputadoSolicitud()))));
$DetencionessolicitudesDto->setactivo(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getactivo()))));
$DetencionessolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getfechaRegistro()))));
$DetencionessolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getfechaActualizacion()))));
$DetencionessolicitudesDto->setfechaDetencion(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getfechaDetencion()))));
$DetencionessolicitudesDto->setnumOficio(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getnumOficio()))));
$DetencionessolicitudesDto->setcveCereso(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getcveCereso()))));
$DetencionessolicitudesDto->setnombreAgente(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getnombreAgente()))));
$DetencionessolicitudesDto->setobservaciones(strtoupper(str_ireplace("'","",trim($DetencionessolicitudesDto->getobservaciones()))));
return $DetencionessolicitudesDto;
}
public function selectDetencionessolicitudes($DetencionessolicitudesDto,$proveedor=null){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesDao = new DetencionessolicitudesDAO();
$DetencionessolicitudesDto = $DetencionessolicitudesDao->selectDetencionessolicitudes($DetencionessolicitudesDto,$proveedor);
return $DetencionessolicitudesDto;
}
public function insertDetencionessolicitudes($DetencionessolicitudesDto,$proveedor=null){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesDao = new DetencionessolicitudesDAO();
$DetencionessolicitudesDto = $DetencionessolicitudesDao->insertDetencionessolicitudes($DetencionessolicitudesDto,$proveedor);
return $DetencionessolicitudesDto;
}
public function updateDetencionessolicitudes($DetencionessolicitudesDto,$proveedor=null){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesDao = new DetencionessolicitudesDAO();
//$tmpDto = new DetencionessolicitudesDTO();
//$tmpDto = $DetencionessolicitudesDao->selectDetencionessolicitudes($DetencionessolicitudesDto,$proveedor);
//if($tmpDto!=""){//$DetencionessolicitudesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DetencionessolicitudesDto = $DetencionessolicitudesDao->updateDetencionessolicitudes($DetencionessolicitudesDto,$proveedor);
return $DetencionessolicitudesDto;
//}
//return "";
}
public function deleteDetencionessolicitudes($DetencionessolicitudesDto,$proveedor=null){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesDao = new DetencionessolicitudesDAO();
$DetencionessolicitudesDto = $DetencionessolicitudesDao->deleteDetencionessolicitudes($DetencionessolicitudesDto,$proveedor);
return $DetencionessolicitudesDto;
}
}
?>