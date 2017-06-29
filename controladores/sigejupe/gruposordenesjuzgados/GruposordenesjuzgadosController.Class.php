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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/gruposordenesjuzgados/GruposordenesjuzgadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/gruposordenesjuzgados/GruposordenesjuzgadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class GruposordenesjuzgadosController {
private $proveedor;
public function __construct() {
}
public function validarGruposordenesjuzgados($GruposordenesjuzgadosDto){
$GruposordenesjuzgadosDto->setcveGrupoOrdenJuzgado(strtoupper(str_ireplace("'","",trim($GruposordenesjuzgadosDto->getcveGrupoOrdenJuzgado()))));
$GruposordenesjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim($GruposordenesjuzgadosDto->getcveJuzgado()))));
$GruposordenesjuzgadosDto->setcveGrupoOrden(strtoupper(str_ireplace("'","",trim($GruposordenesjuzgadosDto->getcveGrupoOrden()))));
$GruposordenesjuzgadosDto->setactivo(strtoupper(str_ireplace("'","",trim($GruposordenesjuzgadosDto->getactivo()))));
$GruposordenesjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($GruposordenesjuzgadosDto->getfechaRegistro()))));
$GruposordenesjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($GruposordenesjuzgadosDto->getfechaActualizacion()))));
return $GruposordenesjuzgadosDto;
}
public function selectGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor=null){
$GruposordenesjuzgadosDto=$this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
$GruposordenesjuzgadosDao = new GruposordenesjuzgadosDAO();
$GruposordenesjuzgadosDto = $GruposordenesjuzgadosDao->selectGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor);
return $GruposordenesjuzgadosDto;
}
public function insertGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor=null){
$GruposordenesjuzgadosDto=$this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
$GruposordenesjuzgadosDao = new GruposordenesjuzgadosDAO();
$GruposordenesjuzgadosDto = $GruposordenesjuzgadosDao->insertGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor);
return $GruposordenesjuzgadosDto;
}
public function updateGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor=null){
$GruposordenesjuzgadosDto=$this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
$GruposordenesjuzgadosDao = new GruposordenesjuzgadosDAO();
//$tmpDto = new GruposordenesjuzgadosDTO();
//$tmpDto = $GruposordenesjuzgadosDao->selectGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor);
//if($tmpDto!=""){//$GruposordenesjuzgadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$GruposordenesjuzgadosDto = $GruposordenesjuzgadosDao->updateGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor);
return $GruposordenesjuzgadosDto;
//}
//return "";
}
public function deleteGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor=null){
$GruposordenesjuzgadosDto=$this->validarGruposordenesjuzgados($GruposordenesjuzgadosDto);
$GruposordenesjuzgadosDao = new GruposordenesjuzgadosDAO();
$GruposordenesjuzgadosDto = $GruposordenesjuzgadosDao->deleteGruposordenesjuzgados($GruposordenesjuzgadosDto,$proveedor);
return $GruposordenesjuzgadosDto;
}
}
?>