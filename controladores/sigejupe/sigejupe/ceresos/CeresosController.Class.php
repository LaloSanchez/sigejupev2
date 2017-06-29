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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ceresos/CeresosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class CeresosController {
private $proveedor;
public function __construct() {
}
public function validarCeresos($CeresosDto){
$CeresosDto->setcveCereso(strtoupper(str_ireplace("'","",trim($CeresosDto->getcveCereso()))));
$CeresosDto->setdesCereso(strtoupper(str_ireplace("'","",trim($CeresosDto->getdesCereso()))));
$CeresosDto->setactivo(strtoupper(str_ireplace("'","",trim($CeresosDto->getactivo()))));
$CeresosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($CeresosDto->getfechaRegistro()))));
$CeresosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($CeresosDto->getfechaActualizacion()))));
return $CeresosDto;
}
public function selectCeresos($CeresosDto,$proveedor=null){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosDao = new CeresosDAO();
$CeresosDto = $CeresosDao->selectCeresos($CeresosDto," order by desCereso ",$proveedor);
return $CeresosDto;
}
public function insertCeresos($CeresosDto,$proveedor=null){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosDao = new CeresosDAO();
$CeresosDto = $CeresosDao->insertCeresos($CeresosDto,$proveedor);
return $CeresosDto;
}
public function updateCeresos($CeresosDto,$proveedor=null){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosDao = new CeresosDAO();
//$tmpDto = new CeresosDTO();
//$tmpDto = $CeresosDao->selectCeresos($CeresosDto,$proveedor);
//if($tmpDto!=""){//$CeresosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$CeresosDto = $CeresosDao->updateCeresos($CeresosDto,$proveedor);
return $CeresosDto;
//}
//return "";
}
public function deleteCeresos($CeresosDto,$proveedor=null){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosDao = new CeresosDAO();
$CeresosDto = $CeresosDao->deleteCeresos($CeresosDto,$proveedor);
return $CeresosDto;
}
}
?>