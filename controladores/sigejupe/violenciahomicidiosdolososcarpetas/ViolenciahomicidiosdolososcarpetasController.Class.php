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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ViolenciahomicidiosdolososcarpetasController {
private $proveedor;
public function __construct() {
}
public function validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto){
$ViolenciahomicidiosdolososcarpetasDto->setidViolenciaHomicidioDolosoCarpeta(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaHomicidioDolosoCarpeta()))));
$ViolenciahomicidiosdolososcarpetasDto->setidViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaDeGeneroCarpeta()))));
$ViolenciahomicidiosdolososcarpetasDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososcarpetasDto->getcveHomicidioDoloso()))));
$ViolenciahomicidiosdolososcarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososcarpetasDto->getfechaRegistro()))));
$ViolenciahomicidiosdolososcarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososcarpetasDto->getfechaActualizacion()))));
return $ViolenciahomicidiosdolososcarpetasDto;
}
public function selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor=null){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor);
return $ViolenciahomicidiosdolososcarpetasDto;
}
public function insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor=null){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor);
return $ViolenciahomicidiosdolososcarpetasDto;
}
public function updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor=null){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
//$tmpDto = new ViolenciahomicidiosdolososcarpetasDTO();
//$tmpDto = $ViolenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor);
//if($tmpDto!=""){//$ViolenciahomicidiosdolososcarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor);
return $ViolenciahomicidiosdolososcarpetasDto;
//}
//return "";
}
public function deleteViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor=null){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasDao->deleteViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto,$proveedor);
return $ViolenciahomicidiosdolososcarpetasDto;
}
}
?>