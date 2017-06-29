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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ViolenciadegenerocarpetasController {
private $proveedor;
public function __construct() {
}
public function validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto){
$ViolenciadegenerocarpetasDto->setidViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'","",trim($ViolenciadegenerocarpetasDto->getidViolenciaDeGeneroCarpeta()))));
$ViolenciadegenerocarpetasDto->setcveEfecto(strtoupper(str_ireplace("'","",trim($ViolenciadegenerocarpetasDto->getcveEfecto()))));
$ViolenciadegenerocarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim($ViolenciadegenerocarpetasDto->getidImpOfeDelCarpeta()))));
$ViolenciadegenerocarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ViolenciadegenerocarpetasDto->getfechaRegistro()))));
$ViolenciadegenerocarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ViolenciadegenerocarpetasDto->getfechaActualizacion()))));
return $ViolenciadegenerocarpetasDto;
}
public function selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor=null){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor);
return $ViolenciadegenerocarpetasDto;
}
public function insertViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor=null){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasDao->insertViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor);
return $ViolenciadegenerocarpetasDto;
}
public function updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor=null){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
//$tmpDto = new ViolenciadegenerocarpetasDTO();
//$tmpDto = $ViolenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor);
//if($tmpDto!=""){//$ViolenciadegenerocarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasDao->updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor);
return $ViolenciadegenerocarpetasDto;
//}
//return "";
}
public function deleteViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor=null){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasDao->deleteViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto,$proveedor);
return $ViolenciadegenerocarpetasDto;
}
}
?>