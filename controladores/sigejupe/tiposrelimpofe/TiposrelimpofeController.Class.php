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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposrelimpofe/TiposrelimpofeDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposrelimpofe/TiposrelimpofeDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposrelimpofeController {
private $proveedor;
public function __construct() {
}
public function validarTiposrelimpofe($TiposrelimpofeDto){
$TiposrelimpofeDto->setcveRelacionImpOfe(strtoupper(str_ireplace("'","",trim($TiposrelimpofeDto->getcveRelacionImpOfe()))));
$TiposrelimpofeDto->setdesRelacionImpOfe(strtoupper(str_ireplace("'","",trim($TiposrelimpofeDto->getdesRelacionImpOfe()))));
$TiposrelimpofeDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposrelimpofeDto->getactivo()))));
$TiposrelimpofeDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposrelimpofeDto->getfechaRegistro()))));
$TiposrelimpofeDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposrelimpofeDto->getfechaActualizacion()))));
return $TiposrelimpofeDto;
}
public function selectTiposrelimpofe($TiposrelimpofeDto,$proveedor=null){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeDao = new TiposrelimpofeDAO();
$TiposrelimpofeDto = $TiposrelimpofeDao->selectTiposrelimpofe($TiposrelimpofeDto," ORDER BY desRelacionImpOfe ASC",$proveedor);
return $TiposrelimpofeDto;
}
public function insertTiposrelimpofe($TiposrelimpofeDto,$proveedor=null){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeDao = new TiposrelimpofeDAO();
$TiposrelimpofeDto = $TiposrelimpofeDao->insertTiposrelimpofe($TiposrelimpofeDto,$proveedor);
return $TiposrelimpofeDto;
}
public function updateTiposrelimpofe($TiposrelimpofeDto,$proveedor=null){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeDao = new TiposrelimpofeDAO();
//$tmpDto = new TiposrelimpofeDTO();
//$tmpDto = $TiposrelimpofeDao->selectTiposrelimpofe($TiposrelimpofeDto,$proveedor);
//if($tmpDto!=""){//$TiposrelimpofeDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposrelimpofeDto = $TiposrelimpofeDao->updateTiposrelimpofe($TiposrelimpofeDto,$proveedor);
return $TiposrelimpofeDto;
//}
//return "";
}
public function deleteTiposrelimpofe($TiposrelimpofeDto,$proveedor=null){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeDao = new TiposrelimpofeDAO();
$TiposrelimpofeDto = $TiposrelimpofeDao->deleteTiposrelimpofe($TiposrelimpofeDto,$proveedor);
return $TiposrelimpofeDto;
}
}
?>