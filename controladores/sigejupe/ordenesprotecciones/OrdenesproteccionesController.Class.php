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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ordenesprotecciones/OrdenesproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ordenesprotecciones/OrdenesproteccionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OrdenesproteccionesController {
private $proveedor;
public function __construct() {
}
public function validarOrdenesprotecciones($OrdenesproteccionesDto){
$OrdenesproteccionesDto->setcveOrdenProteccion(strtoupper(str_ireplace("'","",trim($OrdenesproteccionesDto->getcveOrdenProteccion()))));
$OrdenesproteccionesDto->setdesOrdenProteccion(strtoupper(str_ireplace("'","",trim($OrdenesproteccionesDto->getdesOrdenProteccion()))));
$OrdenesproteccionesDto->setactivo(strtoupper(str_ireplace("'","",trim($OrdenesproteccionesDto->getactivo()))));
$OrdenesproteccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OrdenesproteccionesDto->getfechaRegistro()))));
$OrdenesproteccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OrdenesproteccionesDto->getfechaActualizacion()))));
return $OrdenesproteccionesDto;
}
public function selectOrdenesprotecciones($OrdenesproteccionesDto,$proveedor=null){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesDao = new OrdenesproteccionesDAO();
$OrdenesproteccionesDto = $OrdenesproteccionesDao->selectOrdenesprotecciones($OrdenesproteccionesDto,$proveedor);
return $OrdenesproteccionesDto;
}
public function insertOrdenesprotecciones($OrdenesproteccionesDto,$proveedor=null){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesDao = new OrdenesproteccionesDAO();
$OrdenesproteccionesDto = $OrdenesproteccionesDao->insertOrdenesprotecciones($OrdenesproteccionesDto,$proveedor);
return $OrdenesproteccionesDto;
}
public function updateOrdenesprotecciones($OrdenesproteccionesDto,$proveedor=null){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesDao = new OrdenesproteccionesDAO();
//$tmpDto = new OrdenesproteccionesDTO();
//$tmpDto = $OrdenesproteccionesDao->selectOrdenesprotecciones($OrdenesproteccionesDto,$proveedor);
//if($tmpDto!=""){//$OrdenesproteccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OrdenesproteccionesDto = $OrdenesproteccionesDao->updateOrdenesprotecciones($OrdenesproteccionesDto,$proveedor);
return $OrdenesproteccionesDto;
//}
//return "";
}
public function deleteOrdenesprotecciones($OrdenesproteccionesDto,$proveedor=null){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesDao = new OrdenesproteccionesDAO();
$OrdenesproteccionesDto = $OrdenesproteccionesDao->deleteOrdenesprotecciones($OrdenesproteccionesDto,$proveedor);
return $OrdenesproteccionesDto;
}
}
?>