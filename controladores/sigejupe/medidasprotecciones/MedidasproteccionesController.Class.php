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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidasprotecciones/MedidasproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/medidasprotecciones/MedidasproteccionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MedidasproteccionesController {
private $proveedor;
public function __construct() {
}
public function validarMedidasprotecciones($MedidasproteccionesDto){
$MedidasproteccionesDto->setidMedidaProteccion(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getidMedidaProteccion()))));
$MedidasproteccionesDto->setcveTipoProteccion(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getcveTipoProteccion()))));
$MedidasproteccionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getidActuacion()))));
$MedidasproteccionesDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getidOfendidoCarpeta()))));
$MedidasproteccionesDto->setactivo(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getactivo()))));
$MedidasproteccionesDto->setfechaInicio(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getfechaInicio()))));
$MedidasproteccionesDto->setfechaTermino(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getfechaTermino()))));
$MedidasproteccionesDto->setcveAutoridadEmisora(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getcveAutoridadEmisora()))));
$MedidasproteccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getfechaRegistro()))));
$MedidasproteccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MedidasproteccionesDto->getfechaActualizacion()))));
return $MedidasproteccionesDto;
}
public function selectMedidasprotecciones($MedidasproteccionesDto,$proveedor=null){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesDao = new MedidasproteccionesDAO();
$MedidasproteccionesDto = $MedidasproteccionesDao->selectMedidasprotecciones($MedidasproteccionesDto,$proveedor);
return $MedidasproteccionesDto;
}
public function insertMedidasprotecciones($MedidasproteccionesDto,$proveedor=null){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesDao = new MedidasproteccionesDAO();
$MedidasproteccionesDto = $MedidasproteccionesDao->insertMedidasprotecciones($MedidasproteccionesDto,$proveedor);
return $MedidasproteccionesDto;
}
public function updateMedidasprotecciones($MedidasproteccionesDto,$proveedor=null){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesDao = new MedidasproteccionesDAO();
//$tmpDto = new MedidasproteccionesDTO();
//$tmpDto = $MedidasproteccionesDao->selectMedidasprotecciones($MedidasproteccionesDto,$proveedor);
//if($tmpDto!=""){//$MedidasproteccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MedidasproteccionesDto = $MedidasproteccionesDao->updateMedidasprotecciones($MedidasproteccionesDto,$proveedor);
return $MedidasproteccionesDto;
//}
//return "";
}
public function deleteMedidasprotecciones($MedidasproteccionesDto,$proveedor=null){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesDao = new MedidasproteccionesDAO();
$MedidasproteccionesDto = $MedidasproteccionesDao->deleteMedidasprotecciones($MedidasproteccionesDto,$proveedor);
return $MedidasproteccionesDto;
}
}
?>