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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SexualesconductascarpetasController {
private $proveedor;
public function __construct() {
}
public function validarSexualesconductascarpetas($SexualesconductascarpetasDto){
$SexualesconductascarpetasDto->setidSexualConductaCarpeta(strtoupper(str_ireplace("'","",trim($SexualesconductascarpetasDto->getidSexualConductaCarpeta()))));
$SexualesconductascarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim($SexualesconductascarpetasDto->getidSexualCarpeta()))));
$SexualesconductascarpetasDto->setcveConducta(strtoupper(str_ireplace("'","",trim($SexualesconductascarpetasDto->getcveConducta()))));
$SexualesconductascarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SexualesconductascarpetasDto->getfechaRegistro()))));
$SexualesconductascarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SexualesconductascarpetasDto->getfechaActualizacion()))));
return $SexualesconductascarpetasDto;
}
public function selectSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor=null){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
$SexualesconductascarpetasDto = $SexualesconductascarpetasDao->selectSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor);
return $SexualesconductascarpetasDto;
}
public function insertSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor=null){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
$SexualesconductascarpetasDto = $SexualesconductascarpetasDao->insertSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor);
return $SexualesconductascarpetasDto;
}
public function updateSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor=null){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
//$tmpDto = new SexualesconductascarpetasDTO();
//$tmpDto = $SexualesconductascarpetasDao->selectSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor);
//if($tmpDto!=""){//$SexualesconductascarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SexualesconductascarpetasDto = $SexualesconductascarpetasDao->updateSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor);
return $SexualesconductascarpetasDto;
//}
//return "";
}
public function deleteSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor=null){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
$SexualesconductascarpetasDto = $SexualesconductascarpetasDao->deleteSexualesconductascarpetas($SexualesconductascarpetasDto,$proveedor);
return $SexualesconductascarpetasDto;
}
}
?>