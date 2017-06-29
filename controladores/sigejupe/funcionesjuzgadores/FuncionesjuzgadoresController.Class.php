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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/funcionesjuzgadores/FuncionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/funcionesjuzgadores/FuncionesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class FuncionesjuzgadoresController {
private $proveedor;
public function __construct() {
}
public function validarFuncionesjuzgadores($FuncionesjuzgadoresDto){
$FuncionesjuzgadoresDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'","",trim($FuncionesjuzgadoresDto->getcveFuncionJuzgador()))));
$FuncionesjuzgadoresDto->setdesFuncionJuzgador(strtoupper(str_ireplace("'","",trim($FuncionesjuzgadoresDto->getdesFuncionJuzgador()))));
$FuncionesjuzgadoresDto->setactivo(strtoupper(str_ireplace("'","",trim($FuncionesjuzgadoresDto->getactivo()))));
$FuncionesjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($FuncionesjuzgadoresDto->getfechaRegistro()))));
$FuncionesjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($FuncionesjuzgadoresDto->getfechaActualizacion()))));
return $FuncionesjuzgadoresDto;
}
public function selectFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor=null){
$FuncionesjuzgadoresDto=$this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
$FuncionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
$FuncionesjuzgadoresDto = $FuncionesjuzgadoresDao->selectFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor);
return $FuncionesjuzgadoresDto;
}
public function insertFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor=null){
$FuncionesjuzgadoresDto=$this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
$FuncionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
$FuncionesjuzgadoresDto = $FuncionesjuzgadoresDao->insertFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor);
return $FuncionesjuzgadoresDto;
}
public function updateFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor=null){
$FuncionesjuzgadoresDto=$this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
$FuncionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
//$tmpDto = new FuncionesjuzgadoresDTO();
//$tmpDto = $FuncionesjuzgadoresDao->selectFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor);
//if($tmpDto!=""){//$FuncionesjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$FuncionesjuzgadoresDto = $FuncionesjuzgadoresDao->updateFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor);
return $FuncionesjuzgadoresDto;
//}
//return "";
}
public function deleteFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor=null){
$FuncionesjuzgadoresDto=$this->validarFuncionesjuzgadores($FuncionesjuzgadoresDto);
$FuncionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
$FuncionesjuzgadoresDto = $FuncionesjuzgadoresDao->deleteFuncionesjuzgadores($FuncionesjuzgadoresDto,$proveedor);
return $FuncionesjuzgadoresDto;
}
}
?>