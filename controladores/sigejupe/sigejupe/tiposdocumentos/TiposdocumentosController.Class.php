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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdocumentos/TiposdocumentosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposdocumentos/TiposdocumentosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposdocumentosController {
private $proveedor;
public function __construct() {
}
public function validarTiposdocumentos($TiposdocumentosDto){
$TiposdocumentosDto->setcveTipoDocumento(strtoupper(str_ireplace("'","",trim($TiposdocumentosDto->getcveTipoDocumento()))));
$TiposdocumentosDto->setdescTipoDocumento(strtoupper(str_ireplace("'","",trim($TiposdocumentosDto->getdescTipoDocumento()))));
$TiposdocumentosDto->setextencion(strtoupper(str_ireplace("'","",trim($TiposdocumentosDto->getextencion()))));
$TiposdocumentosDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposdocumentosDto->getactivo()))));
$TiposdocumentosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposdocumentosDto->getfechaActualizacion()))));
$TiposdocumentosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposdocumentosDto->getfechaRegistro()))));
return $TiposdocumentosDto;
}
public function selectTiposdocumentos($TiposdocumentosDto,$proveedor=null){
$TiposdocumentosDto=$this->validarTiposdocumentos($TiposdocumentosDto);
$TiposdocumentosDao = new TiposdocumentosDAO();
$TiposdocumentosDto = $TiposdocumentosDao->selectTiposdocumentos($TiposdocumentosDto,$proveedor);
return $TiposdocumentosDto;
}
public function insertTiposdocumentos($TiposdocumentosDto,$proveedor=null){
$TiposdocumentosDto=$this->validarTiposdocumentos($TiposdocumentosDto);
$TiposdocumentosDao = new TiposdocumentosDAO();
$TiposdocumentosDto = $TiposdocumentosDao->insertTiposdocumentos($TiposdocumentosDto,$proveedor);
return $TiposdocumentosDto;
}
public function updateTiposdocumentos($TiposdocumentosDto,$proveedor=null){
$TiposdocumentosDto=$this->validarTiposdocumentos($TiposdocumentosDto);
$TiposdocumentosDao = new TiposdocumentosDAO();
//$tmpDto = new TiposdocumentosDTO();
//$tmpDto = $TiposdocumentosDao->selectTiposdocumentos($TiposdocumentosDto,$proveedor);
//if($tmpDto!=""){//$TiposdocumentosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposdocumentosDto = $TiposdocumentosDao->updateTiposdocumentos($TiposdocumentosDto,$proveedor);
return $TiposdocumentosDto;
//}
//return "";
}
public function deleteTiposdocumentos($TiposdocumentosDto,$proveedor=null){
$TiposdocumentosDto=$this->validarTiposdocumentos($TiposdocumentosDto);
$TiposdocumentosDao = new TiposdocumentosDAO();
$TiposdocumentosDto = $TiposdocumentosDao->deleteTiposdocumentos($TiposdocumentosDto,$proveedor);
return $TiposdocumentosDto;
}
}
?>