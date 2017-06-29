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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/conclusiones/ConclusionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/conclusiones/ConclusionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConclusionesController {
private $proveedor;
public function __construct() {
}
public function validarConclusiones($ConclusionesDto){
$ConclusionesDto->setcveConclusion(strtoupper(str_ireplace("'","",trim($ConclusionesDto->getcveConclusion()))));
$ConclusionesDto->setdesConclusion(strtoupper(str_ireplace("'","",trim($ConclusionesDto->getdesConclusion()))));
$ConclusionesDto->setjuicio(strtoupper(str_ireplace("'","",trim($ConclusionesDto->getjuicio()))));
$ConclusionesDto->setactivo(strtoupper(str_ireplace("'","",trim($ConclusionesDto->getactivo()))));
$ConclusionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConclusionesDto->getfechaRegistro()))));
$ConclusionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConclusionesDto->getfechaActualizacion()))));
return $ConclusionesDto;
}
public function selectConclusiones($ConclusionesDto,$proveedor=null){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesDao = new ConclusionesDAO();
$ConclusionesDto = $ConclusionesDao->selectConclusiones($ConclusionesDto,$proveedor);
return $ConclusionesDto;
}
public function selectConclusionesOrden($ConclusionesDto,$orden,$proveedor=null){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesDao = new ConclusionesDAO();
$ConclusionesDto = $ConclusionesDao->selectConclusiones($ConclusionesDto,$orden,$proveedor);
return $ConclusionesDto;
}
public function insertConclusiones($ConclusionesDto,$proveedor=null){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesDao = new ConclusionesDAO();
$ConclusionesDto = $ConclusionesDao->insertConclusiones($ConclusionesDto,$proveedor);
return $ConclusionesDto;
}
public function updateConclusiones($ConclusionesDto,$proveedor=null){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesDao = new ConclusionesDAO();
//$tmpDto = new ConclusionesDTO();
//$tmpDto = $ConclusionesDao->selectConclusiones($ConclusionesDto,$proveedor);
//if($tmpDto!=""){//$ConclusionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConclusionesDto = $ConclusionesDao->updateConclusiones($ConclusionesDto,$proveedor);
return $ConclusionesDto;
//}
//return "";
}
public function deleteConclusiones($ConclusionesDto,$proveedor=null){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesDao = new ConclusionesDAO();
$ConclusionesDto = $ConclusionesDao->deleteConclusiones($ConclusionesDto,$proveedor);
return $ConclusionesDto;
}
}
?>