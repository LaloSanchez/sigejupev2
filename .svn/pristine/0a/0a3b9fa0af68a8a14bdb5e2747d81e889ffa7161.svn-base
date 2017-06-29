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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudesordenesController {
private $proveedor;
public function __construct() {
}
public function validarEstatussolicitudesordenes($EstatussolicitudesordenesDto){
$EstatussolicitudesordenesDto->setcveEstatusSolicitudOrdenes(strtoupper(str_ireplace("'","",trim($EstatussolicitudesordenesDto->getcveEstatusSolicitudOrdenes()))));
$EstatussolicitudesordenesDto->setdesEstatusSolicitudOrdenes(strtoupper(str_ireplace("'","",trim($EstatussolicitudesordenesDto->getdesEstatusSolicitudOrdenes()))));
$EstatussolicitudesordenesDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatussolicitudesordenesDto->getactivo()))));
$EstatussolicitudesordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatussolicitudesordenesDto->getfechaRegistro()))));
$EstatussolicitudesordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatussolicitudesordenesDto->getfechaActualizacion()))));
return $EstatussolicitudesordenesDto;
}
public function selectEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor=null, $orden = ""){
$EstatussolicitudesordenesDto=$this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
$EstatussolicitudesordenesDao = new EstatussolicitudesordenesDAO();
$EstatussolicitudesordenesDto = $EstatussolicitudesordenesDao->selectEstatussolicitudesordenes($EstatussolicitudesordenesDto,$orden,$proveedor);
return $EstatussolicitudesordenesDto;
}
public function insertEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor=null){
$EstatussolicitudesordenesDto=$this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
$EstatussolicitudesordenesDao = new EstatussolicitudesordenesDAO();
$EstatussolicitudesordenesDto = $EstatussolicitudesordenesDao->insertEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor);
return $EstatussolicitudesordenesDto;
}
public function updateEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor=null){
$EstatussolicitudesordenesDto=$this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
$EstatussolicitudesordenesDao = new EstatussolicitudesordenesDAO();
//$tmpDto = new EstatussolicitudesordenesDTO();
//$tmpDto = $EstatussolicitudesordenesDao->selectEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor);
//if($tmpDto!=""){//$EstatussolicitudesordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatussolicitudesordenesDto = $EstatussolicitudesordenesDao->updateEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor);
return $EstatussolicitudesordenesDto;
//}
//return "";
}
public function deleteEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor=null){
$EstatussolicitudesordenesDto=$this->validarEstatussolicitudesordenes($EstatussolicitudesordenesDto);
$EstatussolicitudesordenesDao = new EstatussolicitudesordenesDAO();
$EstatussolicitudesordenesDto = $EstatussolicitudesordenesDao->deleteEstatussolicitudesordenes($EstatussolicitudesordenesDto,$proveedor);
return $EstatussolicitudesordenesDto;
}
}
?>