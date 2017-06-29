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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposprotecciones/TiposproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposprotecciones/TiposproteccionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposproteccionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposprotecciones($TiposproteccionesDto){
$TiposproteccionesDto->setcveTipoProteccion(strtoupper(str_ireplace("'","",trim($TiposproteccionesDto->getcveTipoProteccion()))));
$TiposproteccionesDto->setdesTipoProteccion(strtoupper(str_ireplace("'","",trim($TiposproteccionesDto->getdesTipoProteccion()))));
$TiposproteccionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposproteccionesDto->getactivo()))));
$TiposproteccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposproteccionesDto->getfechaRegistro()))));
$TiposproteccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposproteccionesDto->getfechaActualizacion()))));
return $TiposproteccionesDto;
}
public function selectTiposprotecciones($TiposproteccionesDto,$proveedor=null){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesDao = new TiposproteccionesDAO();
$TiposproteccionesDto = $TiposproteccionesDao->selectTiposprotecciones($TiposproteccionesDto,' ORDER BY desTipoProteccion ASC ',$proveedor);
return $TiposproteccionesDto;
}
public function insertTiposprotecciones($TiposproteccionesDto,$proveedor=null){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesDao = new TiposproteccionesDAO();
$TiposproteccionesDto = $TiposproteccionesDao->insertTiposprotecciones($TiposproteccionesDto,$proveedor);
return $TiposproteccionesDto;
}
public function updateTiposprotecciones($TiposproteccionesDto,$proveedor=null){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesDao = new TiposproteccionesDAO();
//$tmpDto = new TiposproteccionesDTO();
//$tmpDto = $TiposproteccionesDao->selectTiposprotecciones($TiposproteccionesDto,$proveedor);
//if($tmpDto!=""){//$TiposproteccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposproteccionesDto = $TiposproteccionesDao->updateTiposprotecciones($TiposproteccionesDto,$proveedor);
return $TiposproteccionesDto;
//}
//return "";
}
public function deleteTiposprotecciones($TiposproteccionesDto,$proveedor=null){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesDao = new TiposproteccionesDAO();
$TiposproteccionesDto = $TiposproteccionesDao->deleteTiposprotecciones($TiposproteccionesDto,$proveedor);
return $TiposproteccionesDto;
}
}
?>