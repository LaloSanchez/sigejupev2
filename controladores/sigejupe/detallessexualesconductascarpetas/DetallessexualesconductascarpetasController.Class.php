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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DetallessexualesconductascarpetasController {
private $proveedor;
public function __construct() {
}
public function validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto){
$DetallessexualesconductascarpetasDto->setidDetalleSexualConductaCarpeta(strtoupper(str_ireplace("'","",trim($DetallessexualesconductascarpetasDto->getidDetalleSexualConductaCarpeta()))));
$DetallessexualesconductascarpetasDto->setcveDetalleConducta(strtoupper(str_ireplace("'","",trim($DetallessexualesconductascarpetasDto->getcveDetalleConducta()))));
$DetallessexualesconductascarpetasDto->setidSexualConductaCarpeta(strtoupper(str_ireplace("'","",trim($DetallessexualesconductascarpetasDto->getidSexualConductaCarpeta()))));
$DetallessexualesconductascarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DetallessexualesconductascarpetasDto->getfechaRegistro()))));
$DetallessexualesconductascarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DetallessexualesconductascarpetasDto->getfechaActualizacion()))));
return $DetallessexualesconductascarpetasDto;
}
public function selectDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor=null){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->selectDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor);
return $DetallessexualesconductascarpetasDto;
}
public function insertDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor=null){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->insertDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor);
return $DetallessexualesconductascarpetasDto;
}
public function updateDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor=null){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
//$tmpDto = new DetallessexualesconductascarpetasDTO();
//$tmpDto = $DetallessexualesconductascarpetasDao->selectDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor);
//if($tmpDto!=""){//$DetallessexualesconductascarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->updateDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor);
return $DetallessexualesconductascarpetasDto;
//}
//return "";
}
public function deleteDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor=null){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasDao = new DetallessexualesconductascarpetasDAO();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasDao->deleteDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto,$proveedor);
return $DetallessexualesconductascarpetasDto;
}
}
?>