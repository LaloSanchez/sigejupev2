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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatus/EstatusDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatusController {
private $proveedor;
public function __construct() {
}
public function validarEstatus($EstatusDto){
$EstatusDto->setcveEstatus(strtoupper(str_ireplace("'","",trim($EstatusDto->getcveEstatus()))));
$EstatusDto->setdescEstatus(strtoupper(str_ireplace("'","",trim($EstatusDto->getdescEstatus()))));
$EstatusDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatusDto->getactivo()))));
$EstatusDto->setcveTipoEstatus(strtoupper(str_ireplace("'","",trim($EstatusDto->getcveTipoEstatus()))));
$EstatusDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatusDto->getfechaActualizacion()))));
$EstatusDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatusDto->getfechaRegistro()))));
return $EstatusDto;
}
public function selectEstatus($EstatusDto,$proveedor=null){
$EstatusDto=$this->validarEstatus($EstatusDto);
$EstatusDao = new EstatusDAO();
$EstatusDto = $EstatusDao->selectEstatus($EstatusDto," order by descEstatus ",$proveedor);
return $EstatusDto;
}
public function insertEstatus($EstatusDto,$proveedor=null){
$EstatusDto=$this->validarEstatus($EstatusDto);
$EstatusDao = new EstatusDAO();
$EstatusDto = $EstatusDao->insertEstatus($EstatusDto,$proveedor);
return $EstatusDto;
}
public function updateEstatus($EstatusDto,$proveedor=null){
$EstatusDto=$this->validarEstatus($EstatusDto);
$EstatusDao = new EstatusDAO();
//$tmpDto = new EstatusDTO();
//$tmpDto = $EstatusDao->selectEstatus($EstatusDto,$proveedor);
//if($tmpDto!=""){//$EstatusDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatusDto = $EstatusDao->updateEstatus($EstatusDto,$proveedor);
return $EstatusDto;
//}
//return "";
}
public function deleteEstatus($EstatusDto,$proveedor=null){
$EstatusDto=$this->validarEstatus($EstatusDto);
$EstatusDao = new EstatusDAO();
$EstatusDto = $EstatusDao->deleteEstatus($EstatusDto,$proveedor);
return $EstatusDto;
}
}
?>