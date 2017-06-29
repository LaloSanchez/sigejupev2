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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/nivelesinstrucciones/NivelesinstruccionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class NivelesinstruccionesController {
private $proveedor;
public function __construct() {
}
public function validarNivelesinstrucciones($NivelesinstruccionesDto){
$NivelesinstruccionesDto->setcveNivelInstruccion(strtoupper(str_ireplace("'","",trim($NivelesinstruccionesDto->getcveNivelInstruccion()))));
$NivelesinstruccionesDto->setdesNivelInstruccion(strtoupper(str_ireplace("'","",trim($NivelesinstruccionesDto->getdesNivelInstruccion()))));
$NivelesinstruccionesDto->setactivo(strtoupper(str_ireplace("'","",trim($NivelesinstruccionesDto->getactivo()))));
$NivelesinstruccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($NivelesinstruccionesDto->getfechaRegistro()))));
$NivelesinstruccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($NivelesinstruccionesDto->getfechaActualizacion()))));
return $NivelesinstruccionesDto;
}
public function selectNivelesinstrucciones($NivelesinstruccionesDto,$proveedor=null){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesDao = new NivelesinstruccionesDAO();
$NivelesinstruccionesDto = $NivelesinstruccionesDao->selectNivelesinstrucciones($NivelesinstruccionesDto,$proveedor);
return $NivelesinstruccionesDto;
}
public function insertNivelesinstrucciones($NivelesinstruccionesDto,$proveedor=null){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesDao = new NivelesinstruccionesDAO();
$NivelesinstruccionesDto = $NivelesinstruccionesDao->insertNivelesinstrucciones($NivelesinstruccionesDto,$proveedor);
return $NivelesinstruccionesDto;
}
public function updateNivelesinstrucciones($NivelesinstruccionesDto,$proveedor=null){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesDao = new NivelesinstruccionesDAO();
//$tmpDto = new NivelesinstruccionesDTO();
//$tmpDto = $NivelesinstruccionesDao->selectNivelesinstrucciones($NivelesinstruccionesDto,$proveedor);
//if($tmpDto!=""){//$NivelesinstruccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$NivelesinstruccionesDto = $NivelesinstruccionesDao->updateNivelesinstrucciones($NivelesinstruccionesDto,$proveedor);
return $NivelesinstruccionesDto;
//}
//return "";
}
public function deleteNivelesinstrucciones($NivelesinstruccionesDto,$proveedor=null){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesDao = new NivelesinstruccionesDAO();
$NivelesinstruccionesDto = $NivelesinstruccionesDao->deleteNivelesinstrucciones($NivelesinstruccionesDto,$proveedor);
return $NivelesinstruccionesDto;
}
}
?>