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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatussolicitudes/EstatussolicitudesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudesController {
private $proveedor;
public function __construct() {
}
public function validarEstatussolicitudes($EstatussolicitudesDto){
$EstatussolicitudesDto->setcveEstatusSolicitud(strtoupper(str_ireplace("'","",trim($EstatussolicitudesDto->getcveEstatusSolicitud()))));
$EstatussolicitudesDto->setdesEstatusSolicitud(strtoupper(str_ireplace("'","",trim($EstatussolicitudesDto->getdesEstatusSolicitud()))));
$EstatussolicitudesDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatussolicitudesDto->getactivo()))));
$EstatussolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatussolicitudesDto->getfechaRegistro()))));
$EstatussolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatussolicitudesDto->getfechaActualizacion()))));
return $EstatussolicitudesDto;
}
public function selectEstatussolicitudes($EstatussolicitudesDto,$proveedor=null){
$EstatussolicitudesDto=$this->validarEstatussolicitudes($EstatussolicitudesDto);
$EstatussolicitudesDao = new EstatussolicitudesDAO();
$EstatussolicitudesDto = $EstatussolicitudesDao->selectEstatussolicitudes($EstatussolicitudesDto,$proveedor);
return $EstatussolicitudesDto;
}
public function insertEstatussolicitudes($EstatussolicitudesDto,$proveedor=null){
$EstatussolicitudesDto=$this->validarEstatussolicitudes($EstatussolicitudesDto);
$EstatussolicitudesDao = new EstatussolicitudesDAO();
$EstatussolicitudesDto = $EstatussolicitudesDao->insertEstatussolicitudes($EstatussolicitudesDto,$proveedor);
return $EstatussolicitudesDto;
}
public function updateEstatussolicitudes($EstatussolicitudesDto,$proveedor=null){
$EstatussolicitudesDto=$this->validarEstatussolicitudes($EstatussolicitudesDto);
$EstatussolicitudesDao = new EstatussolicitudesDAO();
//$tmpDto = new EstatussolicitudesDTO();
//$tmpDto = $EstatussolicitudesDao->selectEstatussolicitudes($EstatussolicitudesDto,$proveedor);
//if($tmpDto!=""){//$EstatussolicitudesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatussolicitudesDto = $EstatussolicitudesDao->updateEstatussolicitudes($EstatussolicitudesDto,$proveedor);
return $EstatussolicitudesDto;
//}
//return "";
}
public function deleteEstatussolicitudes($EstatussolicitudesDto,$proveedor=null){
$EstatussolicitudesDto=$this->validarEstatussolicitudes($EstatussolicitudesDto);
$EstatussolicitudesDao = new EstatussolicitudesDAO();
$EstatussolicitudesDto = $EstatussolicitudesDao->deleteEstatussolicitudes($EstatussolicitudesDto,$proveedor);
return $EstatussolicitudesDto;
}
}
?>