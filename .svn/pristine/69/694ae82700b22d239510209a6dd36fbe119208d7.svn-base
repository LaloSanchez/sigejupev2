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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/gruposednicos/GruposednicosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/gruposednicos/GruposednicosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class GruposednicosController {
private $proveedor;
public function __construct() {
}
public function validarGruposednicos($GruposednicosDto){
$GruposednicosDto->setcveGrupoEdnico(strtoupper(str_ireplace("'","",trim($GruposednicosDto->getcveGrupoEdnico()))));
$GruposednicosDto->setdesGrupoEdnico(strtoupper(str_ireplace("'","",trim($GruposednicosDto->getdesGrupoEdnico()))));
$GruposednicosDto->setactivo(strtoupper(str_ireplace("'","",trim($GruposednicosDto->getactivo()))));
$GruposednicosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($GruposednicosDto->getfechaRegistro()))));
$GruposednicosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($GruposednicosDto->getfechaActualizacion()))));
return $GruposednicosDto;
}
public function selectGruposednicos($GruposednicosDto,$proveedor=null){
$GruposednicosDto=$this->validarGruposednicos($GruposednicosDto);
$GruposednicosDao = new GruposednicosDAO();
$GruposednicosDto = $GruposednicosDao->selectGruposednicos($GruposednicosDto,$proveedor);
return $GruposednicosDto;
}
public function insertGruposednicos($GruposednicosDto,$proveedor=null){
$GruposednicosDto=$this->validarGruposednicos($GruposednicosDto);
$GruposednicosDao = new GruposednicosDAO();
$GruposednicosDto = $GruposednicosDao->insertGruposednicos($GruposednicosDto,$proveedor);
return $GruposednicosDto;
}
public function updateGruposednicos($GruposednicosDto,$proveedor=null){
$GruposednicosDto=$this->validarGruposednicos($GruposednicosDto);
$GruposednicosDao = new GruposednicosDAO();
//$tmpDto = new GruposednicosDTO();
//$tmpDto = $GruposednicosDao->selectGruposednicos($GruposednicosDto,$proveedor);
//if($tmpDto!=""){//$GruposednicosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$GruposednicosDto = $GruposednicosDao->updateGruposednicos($GruposednicosDto,$proveedor);
return $GruposednicosDto;
//}
//return "";
}
public function deleteGruposednicos($GruposednicosDto,$proveedor=null){
$GruposednicosDto=$this->validarGruposednicos($GruposednicosDto);
$GruposednicosDao = new GruposednicosDAO();
$GruposednicosDto = $GruposednicosDao->deleteGruposednicos($GruposednicosDto,$proveedor);
return $GruposednicosDto;
}
}
?>