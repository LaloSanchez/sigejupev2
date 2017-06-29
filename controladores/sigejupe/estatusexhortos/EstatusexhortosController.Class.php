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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatusexhortos/EstatusexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatusexhortos/EstatusexhortosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatusexhortosController {
private $proveedor;
public function __construct() {
}
public function validarEstatusexhortos($EstatusexhortosDto){
$EstatusexhortosDto->setcveEstatusExhorto(strtoupper(str_ireplace("'","",trim($EstatusexhortosDto->getcveEstatusExhorto()))));
$EstatusexhortosDto->setdesEstatusExhorto(strtoupper(str_ireplace("'","",trim($EstatusexhortosDto->getdesEstatusExhorto()))));
$EstatusexhortosDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatusexhortosDto->getactivo()))));
$EstatusexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatusexhortosDto->getfechaRegistro()))));
$EstatusexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatusexhortosDto->getfechaActualizacion()))));
return $EstatusexhortosDto;
}
public function selectEstatusexhortos($EstatusexhortosDto,$proveedor=null){
$EstatusexhortosDto=$this->validarEstatusexhortos($EstatusexhortosDto);
$EstatusexhortosDao = new EstatusexhortosDAO();
$EstatusexhortosDto = $EstatusexhortosDao->selectEstatusexhortos($EstatusexhortosDto,$proveedor);
return $EstatusexhortosDto;
}
public function insertEstatusexhortos($EstatusexhortosDto,$proveedor=null){
$EstatusexhortosDto=$this->validarEstatusexhortos($EstatusexhortosDto);
$EstatusexhortosDao = new EstatusexhortosDAO();
$EstatusexhortosDto = $EstatusexhortosDao->insertEstatusexhortos($EstatusexhortosDto,$proveedor);
return $EstatusexhortosDto;
}
public function updateEstatusexhortos($EstatusexhortosDto,$proveedor=null){
$EstatusexhortosDto=$this->validarEstatusexhortos($EstatusexhortosDto);
$EstatusexhortosDao = new EstatusexhortosDAO();
//$tmpDto = new EstatusexhortosDTO();
//$tmpDto = $EstatusexhortosDao->selectEstatusexhortos($EstatusexhortosDto,$proveedor);
//if($tmpDto!=""){//$EstatusexhortosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatusexhortosDto = $EstatusexhortosDao->updateEstatusexhortos($EstatusexhortosDto,$proveedor);
return $EstatusexhortosDto;
//}
//return "";
}
public function deleteEstatusexhortos($EstatusexhortosDto,$proveedor=null){
$EstatusexhortosDto=$this->validarEstatusexhortos($EstatusexhortosDto);
$EstatusexhortosDao = new EstatusexhortosDAO();
$EstatusexhortosDto = $EstatusexhortosDao->deleteEstatusexhortos($EstatusexhortosDto,$proveedor);
return $EstatusexhortosDto;
}
}
?>