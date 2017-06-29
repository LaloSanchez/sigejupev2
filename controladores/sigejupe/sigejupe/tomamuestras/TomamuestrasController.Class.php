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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tomamuestras/TomamuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tomamuestras/TomamuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TomamuestrasController {
private $proveedor;
public function __construct() {
}
public function validarTomamuestras($TomamuestrasDto){
$TomamuestrasDto->setidTomaMuestra(strtoupper(str_ireplace("'","",trim($TomamuestrasDto->getidTomaMuestra()))));
$TomamuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim($TomamuestrasDto->getidSolicitudMuestra()))));
$TomamuestrasDto->setidImputadoMuestra(strtoupper(str_ireplace("'","",trim($TomamuestrasDto->getidImputadoMuestra()))));
$TomamuestrasDto->setidOfendidoMuestra(strtoupper(str_ireplace("'","",trim($TomamuestrasDto->getidOfendidoMuestra()))));
$TomamuestrasDto->setcveMuestra(strtoupper(str_ireplace("'","",trim($TomamuestrasDto->getcveMuestra()))));
return $TomamuestrasDto;
}
public function selectTomamuestras($TomamuestrasDto,$proveedor=null){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasDao = new TomamuestrasDAO();
$TomamuestrasDto = $TomamuestrasDao->selectTomamuestras($TomamuestrasDto,$proveedor);
return $TomamuestrasDto;
}
public function insertTomamuestras($TomamuestrasDto,$proveedor=null){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasDao = new TomamuestrasDAO();
$TomamuestrasDto = $TomamuestrasDao->insertTomamuestras($TomamuestrasDto,$proveedor);
return $TomamuestrasDto;
}
public function updateTomamuestras($TomamuestrasDto,$proveedor=null){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasDao = new TomamuestrasDAO();
//$tmpDto = new TomamuestrasDTO();
//$tmpDto = $TomamuestrasDao->selectTomamuestras($TomamuestrasDto,$proveedor);
//if($tmpDto!=""){//$TomamuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TomamuestrasDto = $TomamuestrasDao->updateTomamuestras($TomamuestrasDto,$proveedor);
return $TomamuestrasDto;
//}
//return "";
}
public function deleteTomamuestras($TomamuestrasDto,$proveedor=null){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasDao = new TomamuestrasDAO();
$TomamuestrasDto = $TomamuestrasDao->deleteTomamuestras($TomamuestrasDto,$proveedor);
return $TomamuestrasDto;
}
}
?>