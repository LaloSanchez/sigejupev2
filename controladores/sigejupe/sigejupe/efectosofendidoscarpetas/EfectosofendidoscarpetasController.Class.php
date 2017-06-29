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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EfectosofendidoscarpetasController {
private $proveedor;
public function __construct() {
}
public function validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto){
$EfectosofendidoscarpetasDto->setidEfectoOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getidEfectoOfendidoCarpeta()))));
$EfectosofendidoscarpetasDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getcveDetalleEfecto()))));
$EfectosofendidoscarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getidImpOfeDelCarpeta()))));
$EfectosofendidoscarpetasDto->setIdReferencia(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getIdReferencia()))));
$EfectosofendidoscarpetasDto->setorigen(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getorigen()))));
$EfectosofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getactivo()))));
$EfectosofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getfechaRegistro()))));
$EfectosofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EfectosofendidoscarpetasDto->getfechaActualizacion()))));
return $EfectosofendidoscarpetasDto;
}
public function selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor=null){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor);
return $EfectosofendidoscarpetasDto;
}
public function insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor=null){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasDao->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor);
return $EfectosofendidoscarpetasDto;
}
public function updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor=null){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
//$tmpDto = new EfectosofendidoscarpetasDTO();
//$tmpDto = $EfectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor);
//if($tmpDto!=""){//$EfectosofendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasDao->updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor);
return $EfectosofendidoscarpetasDto;
//}
//return "";
}
public function deleteEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor=null){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasDao->deleteEfectosofendidoscarpetas($EfectosofendidoscarpetasDto,$proveedor);
return $EfectosofendidoscarpetasDto;
}
}
?>