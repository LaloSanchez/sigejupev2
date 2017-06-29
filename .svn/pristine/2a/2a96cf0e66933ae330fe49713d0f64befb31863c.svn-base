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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/comparecencias/ComparecenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/comparecencias/ComparecenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ComparecenciasController {
private $proveedor;
public function __construct() {
}
public function validarComparecencias($ComparecenciasDto){
$ComparecenciasDto->setidComparecencia(strtoupper(str_ireplace("'","",trim($ComparecenciasDto->getidComparecencia()))));
$ComparecenciasDto->setidActuacion(strtoupper(str_ireplace("'","",trim($ComparecenciasDto->getidActuacion()))));
$ComparecenciasDto->setnumEmpleadoFePublica(strtoupper(str_ireplace("'","",trim($ComparecenciasDto->getnumEmpleadoFePublica()))));
$ComparecenciasDto->setlugarComparecencia(strtoupper(str_ireplace("'","",trim($ComparecenciasDto->getlugarComparecencia()))));
$ComparecenciasDto->sethoraComparecencia(strtoupper(str_ireplace("'","",trim($ComparecenciasDto->gethoraComparecencia()))));
return $ComparecenciasDto;
}
public function selectComparecencias($ComparecenciasDto,$proveedor=null){
$ComparecenciasDto=$this->validarComparecencias($ComparecenciasDto);
$ComparecenciasDao = new ComparecenciasDAO();
$ComparecenciasDto = $ComparecenciasDao->selectComparecencias($ComparecenciasDto,$proveedor);
return $ComparecenciasDto;
}
public function insertComparecencias($ComparecenciasDto,$proveedor=null){
$ComparecenciasDto=$this->validarComparecencias($ComparecenciasDto);
$ComparecenciasDao = new ComparecenciasDAO();
$ComparecenciasDto = $ComparecenciasDao->insertComparecencias($ComparecenciasDto,$proveedor);
return $ComparecenciasDto;
}
public function updateComparecencias($ComparecenciasDto,$proveedor=null){
$ComparecenciasDto=$this->validarComparecencias($ComparecenciasDto);
$ComparecenciasDao = new ComparecenciasDAO();
//$tmpDto = new ComparecenciasDTO();
//$tmpDto = $ComparecenciasDao->selectComparecencias($ComparecenciasDto,$proveedor);
//if($tmpDto!=""){//$ComparecenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ComparecenciasDto = $ComparecenciasDao->updateComparecencias($ComparecenciasDto,$proveedor);
return $ComparecenciasDto;
//}
//return "";
}
public function deleteComparecencias($ComparecenciasDto,$proveedor=null){
$ComparecenciasDto=$this->validarComparecencias($ComparecenciasDto);
$ComparecenciasDao = new ComparecenciasDAO();
$ComparecenciasDto = $ComparecenciasDao->deleteComparecencias($ComparecenciasDto,$proveedor);
return $ComparecenciasDto;
}
}
?>