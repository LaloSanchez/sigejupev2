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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectos/EfectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/efectos/EfectosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EfectosController {
private $proveedor;
public function __construct() {
}
public function validarEfectos($EfectosDto){
$EfectosDto->setcveEfecto(strtoupper(str_ireplace("'","",trim($EfectosDto->getcveEfecto()))));
$EfectosDto->setdesEfecto(strtoupper(str_ireplace("'","",trim($EfectosDto->getdesEfecto()))));
$EfectosDto->setactivo(strtoupper(str_ireplace("'","",trim($EfectosDto->getactivo()))));
$EfectosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EfectosDto->getfechaRegistro()))));
$EfectosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EfectosDto->getfechaActualizacion()))));
return $EfectosDto;
}
public function selectEfectos($EfectosDto,$proveedor=null){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosDao = new EfectosDAO();
$EfectosDto = $EfectosDao->selectEfectos($EfectosDto,$proveedor);
return $EfectosDto;
}
public function insertEfectos($EfectosDto,$proveedor=null){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosDao = new EfectosDAO();
$EfectosDto = $EfectosDao->insertEfectos($EfectosDto,$proveedor);
return $EfectosDto;
}
public function updateEfectos($EfectosDto,$proveedor=null){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosDao = new EfectosDAO();
//$tmpDto = new EfectosDTO();
//$tmpDto = $EfectosDao->selectEfectos($EfectosDto,$proveedor);
//if($tmpDto!=""){//$EfectosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EfectosDto = $EfectosDao->updateEfectos($EfectosDto,$proveedor);
return $EfectosDto;
//}
//return "";
}
public function deleteEfectos($EfectosDto,$proveedor=null){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosDao = new EfectosDAO();
$EfectosDto = $EfectosDao->deleteEfectos($EfectosDto,$proveedor);
return $EfectosDto;
}
}
?>