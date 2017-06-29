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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposprocedimientos/TiposprocedimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposprocedimientos/TiposprocedimientosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposprocedimientosController {
private $proveedor;
public function __construct() {
}
public function validarTiposprocedimientos($TiposprocedimientosDto){
$TiposprocedimientosDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'","",trim($TiposprocedimientosDto->getcveTipoProcedimiento()))));
$TiposprocedimientosDto->setdesTipoProcedimiento(strtoupper(str_ireplace("'","",trim($TiposprocedimientosDto->getdesTipoProcedimiento()))));
$TiposprocedimientosDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposprocedimientosDto->getactivo()))));
$TiposprocedimientosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposprocedimientosDto->getfechaRegistro()))));
$TiposprocedimientosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposprocedimientosDto->getfechaActualizacion()))));
return $TiposprocedimientosDto;
}
public function selectTiposprocedimientos($TiposprocedimientosDto,$proveedor=null){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosDao = new TiposprocedimientosDAO();
$TiposprocedimientosDto = $TiposprocedimientosDao->selectTiposprocedimientos($TiposprocedimientosDto,$proveedor);
return $TiposprocedimientosDto;
}
public function insertTiposprocedimientos($TiposprocedimientosDto,$proveedor=null){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosDao = new TiposprocedimientosDAO();
$TiposprocedimientosDto = $TiposprocedimientosDao->insertTiposprocedimientos($TiposprocedimientosDto,$proveedor);
return $TiposprocedimientosDto;
}
public function updateTiposprocedimientos($TiposprocedimientosDto,$proveedor=null){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosDao = new TiposprocedimientosDAO();
//$tmpDto = new TiposprocedimientosDTO();
//$tmpDto = $TiposprocedimientosDao->selectTiposprocedimientos($TiposprocedimientosDto,$proveedor);
//if($tmpDto!=""){//$TiposprocedimientosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposprocedimientosDto = $TiposprocedimientosDao->updateTiposprocedimientos($TiposprocedimientosDto,$proveedor);
return $TiposprocedimientosDto;
//}
//return "";
}
public function deleteTiposprocedimientos($TiposprocedimientosDto,$proveedor=null){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosDao = new TiposprocedimientosDAO();
$TiposprocedimientosDto = $TiposprocedimientosDao->deleteTiposprocedimientos($TiposprocedimientosDto,$proveedor);
return $TiposprocedimientosDto;
}
}
?>