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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RolesjuzgadoresController {
private $proveedor;
public function __construct() {
}
public function validarRolesjuzgadores($RolesjuzgadoresDto){
$RolesjuzgadoresDto->setcveRolJuzgador(strtoupper(str_ireplace("'","",trim($RolesjuzgadoresDto->getcveRolJuzgador()))));
$RolesjuzgadoresDto->setdesRolJuzgador(strtoupper(str_ireplace("'","",trim($RolesjuzgadoresDto->getdesRolJuzgador()))));
$RolesjuzgadoresDto->setactivo(strtoupper(str_ireplace("'","",trim($RolesjuzgadoresDto->getactivo()))));
$RolesjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RolesjuzgadoresDto->getfechaRegistro()))));
$RolesjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RolesjuzgadoresDto->getfechaActualizacion()))));
return $RolesjuzgadoresDto;
}
public function selectRolesjuzgadores($RolesjuzgadoresDto,$proveedor=null){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresDao = new RolesjuzgadoresDAO();
$RolesjuzgadoresDto = $RolesjuzgadoresDao->selectRolesjuzgadores($RolesjuzgadoresDto,$proveedor);
return $RolesjuzgadoresDto;
}
public function insertRolesjuzgadores($RolesjuzgadoresDto,$proveedor=null){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresDao = new RolesjuzgadoresDAO();
$RolesjuzgadoresDto = $RolesjuzgadoresDao->insertRolesjuzgadores($RolesjuzgadoresDto,$proveedor);
return $RolesjuzgadoresDto;
}
public function updateRolesjuzgadores($RolesjuzgadoresDto,$proveedor=null){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresDao = new RolesjuzgadoresDAO();
//$tmpDto = new RolesjuzgadoresDTO();
//$tmpDto = $RolesjuzgadoresDao->selectRolesjuzgadores($RolesjuzgadoresDto,$proveedor);
//if($tmpDto!=""){//$RolesjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RolesjuzgadoresDto = $RolesjuzgadoresDao->updateRolesjuzgadores($RolesjuzgadoresDto,$proveedor);
return $RolesjuzgadoresDto;
//}
//return "";
}
public function deleteRolesjuzgadores($RolesjuzgadoresDto,$proveedor=null){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresDao = new RolesjuzgadoresDAO();
$RolesjuzgadoresDto = $RolesjuzgadoresDao->deleteRolesjuzgadores($RolesjuzgadoresDto,$proveedor);
return $RolesjuzgadoresDto;
}
}
?>