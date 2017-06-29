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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/muestras/MuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/muestras/MuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MuestrasController {
private $proveedor;
public function __construct() {
}
public function validarMuestras($MuestrasDto){
$MuestrasDto->setcveMuestra(strtoupper(str_ireplace("'","",trim($MuestrasDto->getcveMuestra()))));
$MuestrasDto->setdesMuestra(strtoupper(str_ireplace("'","",trim($MuestrasDto->getdesMuestra()))));
$MuestrasDto->setTipo(strtoupper(str_ireplace("'","",trim($MuestrasDto->getTipo()))));
$MuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($MuestrasDto->getactivo()))));
$MuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MuestrasDto->getfechaRegistro()))));
$MuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MuestrasDto->getfechaActualizacion()))));
return $MuestrasDto;
}
public function selectMuestras($MuestrasDto,$proveedor=null){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasDao = new MuestrasDAO();
$MuestrasDto = $MuestrasDao->selectMuestras($MuestrasDto,$proveedor);
return $MuestrasDto;
}
public function insertMuestras($MuestrasDto,$proveedor=null){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasDao = new MuestrasDAO();
$MuestrasDto = $MuestrasDao->insertMuestras($MuestrasDto,$proveedor);
return $MuestrasDto;
}
public function updateMuestras($MuestrasDto,$proveedor=null){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasDao = new MuestrasDAO();
//$tmpDto = new MuestrasDTO();
//$tmpDto = $MuestrasDao->selectMuestras($MuestrasDto,$proveedor);
//if($tmpDto!=""){//$MuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MuestrasDto = $MuestrasDao->updateMuestras($MuestrasDto,$proveedor);
return $MuestrasDto;
//}
//return "";
}
public function deleteMuestras($MuestrasDto,$proveedor=null){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasDao = new MuestrasDAO();
$MuestrasDto = $MuestrasDao->deleteMuestras($MuestrasDto,$proveedor);
return $MuestrasDto;
}
}
?>