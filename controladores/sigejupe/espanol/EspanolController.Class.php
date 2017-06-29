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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/espanol/EspanolDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/espanol/EspanolDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EspanolController {
private $proveedor;
public function __construct() {
}
public function validarEspanol($EspanolDto){
$EspanolDto->setcveEspanol(strtoupper(str_ireplace("'","",trim($EspanolDto->getcveEspanol()))));
$EspanolDto->setdesEspanol(strtoupper(str_ireplace("'","",trim($EspanolDto->getdesEspanol()))));
$EspanolDto->setactivo(strtoupper(str_ireplace("'","",trim($EspanolDto->getactivo()))));
$EspanolDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EspanolDto->getfechaRegistro()))));
$EspanolDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EspanolDto->getfechaActualizacion()))));
return $EspanolDto;
}
public function selectEspanol($EspanolDto,$proveedor=null){
$EspanolDto=$this->validarEspanol($EspanolDto);
$EspanolDao = new EspanolDAO();
$EspanolDto = $EspanolDao->selectEspanol($EspanolDto,$proveedor);
return $EspanolDto;
}
public function insertEspanol($EspanolDto,$proveedor=null){
$EspanolDto=$this->validarEspanol($EspanolDto);
$EspanolDao = new EspanolDAO();
$EspanolDto = $EspanolDao->insertEspanol($EspanolDto,$proveedor);
return $EspanolDto;
}
public function updateEspanol($EspanolDto,$proveedor=null){
$EspanolDto=$this->validarEspanol($EspanolDto);
$EspanolDao = new EspanolDAO();
//$tmpDto = new EspanolDTO();
//$tmpDto = $EspanolDao->selectEspanol($EspanolDto,$proveedor);
//if($tmpDto!=""){//$EspanolDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EspanolDto = $EspanolDao->updateEspanol($EspanolDto,$proveedor);
return $EspanolDto;
//}
//return "";
}
public function deleteEspanol($EspanolDto,$proveedor=null){
$EspanolDto=$this->validarEspanol($EspanolDto);
$EspanolDao = new EspanolDAO();
$EspanolDto = $EspanolDao->deleteEspanol($EspanolDto,$proveedor);
return $EspanolDto;
}
}
?>