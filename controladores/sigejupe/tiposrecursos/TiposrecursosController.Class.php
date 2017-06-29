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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposrecursos/TiposrecursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposrecursos/TiposrecursosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposrecursosController {
private $proveedor;
public function __construct() {
}
public function validarTiposrecursos($TiposrecursosDto){
$TiposrecursosDto->setcveRecurso(strtoupper(str_ireplace("'","",trim($TiposrecursosDto->getcveRecurso()))));
$TiposrecursosDto->setdesRecurso(strtoupper(str_ireplace("'","",trim($TiposrecursosDto->getdesRecurso()))));
$TiposrecursosDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposrecursosDto->getactivo()))));
$TiposrecursosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposrecursosDto->getfechaRegistro()))));
$TiposrecursosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposrecursosDto->getfechaActualizacion()))));
return $TiposrecursosDto;
}
public function selectTiposrecursos($TiposrecursosDto,$orden=null,$proveedor=null){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosDao = new TiposrecursosDAO();
$TiposrecursosDto = $TiposrecursosDao->selectTiposrecursos($TiposrecursosDto,$orden,$proveedor);
return $TiposrecursosDto;
}
public function insertTiposrecursos($TiposrecursosDto,$proveedor=null){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosDao = new TiposrecursosDAO();
$TiposrecursosDto = $TiposrecursosDao->insertTiposrecursos($TiposrecursosDto,$proveedor);
return $TiposrecursosDto;
}
public function updateTiposrecursos($TiposrecursosDto,$proveedor=null){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosDao = new TiposrecursosDAO();
//$tmpDto = new TiposrecursosDTO();
//$tmpDto = $TiposrecursosDao->selectTiposrecursos($TiposrecursosDto,$proveedor);
//if($tmpDto!=""){//$TiposrecursosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposrecursosDto = $TiposrecursosDao->updateTiposrecursos($TiposrecursosDto,$proveedor);
return $TiposrecursosDto;
//}
//return "";
}
public function deleteTiposrecursos($TiposrecursosDto,$proveedor=null){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosDao = new TiposrecursosDAO();
$TiposrecursosDto = $TiposrecursosDao->deleteTiposrecursos($TiposrecursosDto,$proveedor);
return $TiposrecursosDto;
}
}
?>