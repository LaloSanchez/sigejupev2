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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposresoluciones/TiposresolucionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposresoluciones/TiposresolucionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposresolucionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposresoluciones($TiposresolucionesDto){
$TiposresolucionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'","",trim($TiposresolucionesDto->getcveTipoResolucion()))));
$TiposresolucionesDto->setdesTipoResolucion(strtoupper(str_ireplace("'","",trim($TiposresolucionesDto->getdesTipoResolucion()))));
$TiposresolucionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposresolucionesDto->getactivo()))));
$TiposresolucionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposresolucionesDto->getfechaRegistro()))));
$TiposresolucionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposresolucionesDto->getfechaActualizacion()))));
return $TiposresolucionesDto;
}
public function selectTiposresoluciones($TiposresolucionesDto,$proveedor=null){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesDao = new TiposresolucionesDAO();
$TiposresolucionesDto = $TiposresolucionesDao->selectTiposresoluciones($TiposresolucionesDto," order by desTipoResolucion ",$proveedor);
return $TiposresolucionesDto;
}
public function insertTiposresoluciones($TiposresolucionesDto,$proveedor=null){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesDao = new TiposresolucionesDAO();
$TiposresolucionesDto = $TiposresolucionesDao->insertTiposresoluciones($TiposresolucionesDto,$proveedor);
return $TiposresolucionesDto;
}
public function updateTiposresoluciones($TiposresolucionesDto,$proveedor=null){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesDao = new TiposresolucionesDAO();
//$tmpDto = new TiposresolucionesDTO();
//$tmpDto = $TiposresolucionesDao->selectTiposresoluciones($TiposresolucionesDto,$proveedor);
//if($tmpDto!=""){//$TiposresolucionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposresolucionesDto = $TiposresolucionesDao->updateTiposresoluciones($TiposresolucionesDto,$proveedor);
return $TiposresolucionesDto;
//}
//return "";
}
public function deleteTiposresoluciones($TiposresolucionesDto,$proveedor=null){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesDao = new TiposresolucionesDAO();
$TiposresolucionesDto = $TiposresolucionesDao->deleteTiposresoluciones($TiposresolucionesDto,$proveedor);
return $TiposresolucionesDto;
}
}
?>