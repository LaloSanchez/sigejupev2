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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatussolicitudescateos/EstatussolicitudescateosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudescateosController {
private $proveedor;
public function __construct() {
}
public function validarEstatussolicitudescateos($EstatussolicitudescateosDto){
$EstatussolicitudescateosDto->setcveEstatusSolicitudCateo(strtoupper(str_ireplace("'","",trim($EstatussolicitudescateosDto->getcveEstatusSolicitudCateo()))));
$EstatussolicitudescateosDto->setdesEstatusSolicitudCateo(strtoupper(str_ireplace("'","",trim($EstatussolicitudescateosDto->getdesEstatusSolicitudCateo()))));
$EstatussolicitudescateosDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatussolicitudescateosDto->getactivo()))));
$EstatussolicitudescateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatussolicitudescateosDto->getfechaRegistro()))));
$EstatussolicitudescateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatussolicitudescateosDto->getfechaActualizacion()))));
return $EstatussolicitudescateosDto;
}
public function selectEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor=null){
$EstatussolicitudescateosDto=$this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
$EstatussolicitudescateosDao = new EstatussolicitudescateosDAO();
$EstatussolicitudescateosDto = $EstatussolicitudescateosDao->selectEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor);
return $EstatussolicitudescateosDto;
}
public function insertEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor=null){
$EstatussolicitudescateosDto=$this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
$EstatussolicitudescateosDao = new EstatussolicitudescateosDAO();
$EstatussolicitudescateosDto = $EstatussolicitudescateosDao->insertEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor);
return $EstatussolicitudescateosDto;
}
public function updateEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor=null){
$EstatussolicitudescateosDto=$this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
$EstatussolicitudescateosDao = new EstatussolicitudescateosDAO();
//$tmpDto = new EstatussolicitudescateosDTO();
//$tmpDto = $EstatussolicitudescateosDao->selectEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor);
//if($tmpDto!=""){//$EstatussolicitudescateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatussolicitudescateosDto = $EstatussolicitudescateosDao->updateEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor);
return $EstatussolicitudescateosDto;
//}
//return "";
}
public function deleteEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor=null){
$EstatussolicitudescateosDto=$this->validarEstatussolicitudescateos($EstatussolicitudescateosDto);
$EstatussolicitudescateosDao = new EstatussolicitudescateosDAO();
$EstatussolicitudescateosDto = $EstatussolicitudescateosDao->deleteEstatussolicitudescateos($EstatussolicitudescateosDto,$proveedor);
return $EstatussolicitudescateosDto;
}
}
?>