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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bienesjuridicosafectados/BienesjuridicosafectadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bienesjuridicosafectados/BienesjuridicosafectadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class BienesjuridicosafectadosController {
private $proveedor;
public function __construct() {
}
public function validarBienesjuridicosafectados($BienesjuridicosafectadosDto){
$BienesjuridicosafectadosDto->setcveBienJuridicoAfectado(strtoupper(str_ireplace("'","",trim($BienesjuridicosafectadosDto->getcveBienJuridicoAfectado()))));
$BienesjuridicosafectadosDto->setdesBienJuridicoAfectado(strtoupper(str_ireplace("'","",trim($BienesjuridicosafectadosDto->getdesBienJuridicoAfectado()))));
$BienesjuridicosafectadosDto->setactivo(strtoupper(str_ireplace("'","",trim($BienesjuridicosafectadosDto->getactivo()))));
$BienesjuridicosafectadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($BienesjuridicosafectadosDto->getfechaRegistro()))));
$BienesjuridicosafectadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($BienesjuridicosafectadosDto->getfechaActualizacion()))));
return $BienesjuridicosafectadosDto;
}
public function selectBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor=null){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosDao = new BienesjuridicosafectadosDAO();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosDao->selectBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor);
return $BienesjuridicosafectadosDto;
}
public function insertBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor=null){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosDao = new BienesjuridicosafectadosDAO();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosDao->insertBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor);
return $BienesjuridicosafectadosDto;
}
public function updateBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor=null){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosDao = new BienesjuridicosafectadosDAO();
//$tmpDto = new BienesjuridicosafectadosDTO();
//$tmpDto = $BienesjuridicosafectadosDao->selectBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor);
//if($tmpDto!=""){//$BienesjuridicosafectadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosDao->updateBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor);
return $BienesjuridicosafectadosDto;
//}
//return "";
}
public function deleteBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor=null){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosDao = new BienesjuridicosafectadosDAO();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosDao->deleteBienesjuridicosafectados($BienesjuridicosafectadosDto,$proveedor);
return $BienesjuridicosafectadosDto;
}
}
?>