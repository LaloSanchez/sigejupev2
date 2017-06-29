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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectossexualescarpetas/EfectossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/efectossexualescarpetas/EfectossexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EfectossexualescarpetasController {
private $proveedor;
public function __construct() {
}
public function validarEfectossexualescarpetas($EfectossexualescarpetasDto){
$EfectossexualescarpetasDto->setidEfectoSexualCarpeta(strtoupper(str_ireplace("'","",trim($EfectossexualescarpetasDto->getidEfectoSexualCarpeta()))));
$EfectossexualescarpetasDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim($EfectossexualescarpetasDto->getcveDetalleEfecto()))));
$EfectossexualescarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim($EfectossexualescarpetasDto->getidSexualCarpeta()))));
$EfectossexualescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EfectossexualescarpetasDto->getfechaRegistro()))));
$EfectossexualescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EfectossexualescarpetasDto->getfechaActualizacion()))));
return $EfectossexualescarpetasDto;
}
public function selectEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor=null){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasDao = new EfectossexualescarpetasDAO();
$EfectossexualescarpetasDto = $EfectossexualescarpetasDao->selectEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor);
return $EfectossexualescarpetasDto;
}
public function insertEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor=null){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasDao = new EfectossexualescarpetasDAO();
$EfectossexualescarpetasDto = $EfectossexualescarpetasDao->insertEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor);
return $EfectossexualescarpetasDto;
}
public function updateEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor=null){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasDao = new EfectossexualescarpetasDAO();
//$tmpDto = new EfectossexualescarpetasDTO();
//$tmpDto = $EfectossexualescarpetasDao->selectEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor);
//if($tmpDto!=""){//$EfectossexualescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EfectossexualescarpetasDto = $EfectossexualescarpetasDao->updateEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor);
return $EfectossexualescarpetasDto;
//}
//return "";
}
public function deleteEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor=null){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasDao = new EfectossexualescarpetasDAO();
$EfectossexualescarpetasDto = $EfectossexualescarpetasDao->deleteEfectossexualescarpetas($EfectossexualescarpetasDto,$proveedor);
return $EfectossexualescarpetasDto;
}
}
?>