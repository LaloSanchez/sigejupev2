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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SexualescarpetasController {
private $proveedor;
public function __construct() {
}
public function validarSexualescarpetas($SexualescarpetasDto){
$SexualescarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim($SexualescarpetasDto->getidSexualCarpeta()))));
$SexualescarpetasDto->setcveModalidadAcoso(strtoupper(str_ireplace("'","",trim($SexualescarpetasDto->getcveModalidadAcoso()))));
$SexualescarpetasDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'","",trim($SexualescarpetasDto->getcveAmbitoAcoso()))));
$SexualescarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim($SexualescarpetasDto->getidImpOfeDelCarpeta()))));
$SexualescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SexualescarpetasDto->getfechaRegistro()))));
$SexualescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SexualescarpetasDto->getfechaActualizacion()))));
return $SexualescarpetasDto;
}
public function selectSexualescarpetas($SexualescarpetasDto,$proveedor=null){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasDao = new SexualescarpetasDAO();
$SexualescarpetasDto = $SexualescarpetasDao->selectSexualescarpetas($SexualescarpetasDto,$proveedor);
return $SexualescarpetasDto;
}
public function insertSexualescarpetas($SexualescarpetasDto,$proveedor=null){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasDao = new SexualescarpetasDAO();
$SexualescarpetasDto = $SexualescarpetasDao->insertSexualescarpetas($SexualescarpetasDto,$proveedor);
return $SexualescarpetasDto;
}
public function updateSexualescarpetas($SexualescarpetasDto,$proveedor=null){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasDao = new SexualescarpetasDAO();
//$tmpDto = new SexualescarpetasDTO();
//$tmpDto = $SexualescarpetasDao->selectSexualescarpetas($SexualescarpetasDto,$proveedor);
//if($tmpDto!=""){//$SexualescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SexualescarpetasDto = $SexualescarpetasDao->updateSexualescarpetas($SexualescarpetasDto,$proveedor);
return $SexualescarpetasDto;
//}
//return "";
}
public function deleteSexualescarpetas($SexualescarpetasDto,$proveedor=null){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasDao = new SexualescarpetasDAO();
$SexualescarpetasDto = $SexualescarpetasDao->deleteSexualescarpetas($SexualescarpetasDto,$proveedor);
return $SexualescarpetasDto;
}
}
?>