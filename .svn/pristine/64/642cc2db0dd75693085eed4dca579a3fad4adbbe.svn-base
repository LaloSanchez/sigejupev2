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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/numerosdefensores/NumerosdefensoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/numerosdefensores/NumerosdefensoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class NumerosdefensoresController {
private $proveedor;
public function __construct() {
}
public function validarNumerosdefensores($NumerosdefensoresDto){
$NumerosdefensoresDto->setidnumerosdefensores(strtoupper(str_ireplace("'","",trim($NumerosdefensoresDto->getidnumerosdefensores()))));
$NumerosdefensoresDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($NumerosdefensoresDto->getidImputadoCarpeta()))));
$NumerosdefensoresDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim($NumerosdefensoresDto->getidCarpetaJudicial()))));
$NumerosdefensoresDto->setidDefensorImputadoCarpeta(strtoupper(str_ireplace("'","",trim($NumerosdefensoresDto->getidDefensorImputadoCarpeta()))));
$NumerosdefensoresDto->setnumeroDefensor(strtoupper(str_ireplace("'","",trim($NumerosdefensoresDto->getnumeroDefensor()))));
return $NumerosdefensoresDto;
}
public function selectNumerosdefensores($NumerosdefensoresDto,$proveedor=null){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresDao = new NumerosdefensoresDAO();
$NumerosdefensoresDto = $NumerosdefensoresDao->selectNumerosdefensores($NumerosdefensoresDto,$proveedor);
return $NumerosdefensoresDto;
}
public function insertNumerosdefensores($NumerosdefensoresDto,$proveedor=null){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresDao = new NumerosdefensoresDAO();
$NumerosdefensoresDto = $NumerosdefensoresDao->insertNumerosdefensores($NumerosdefensoresDto,$proveedor);
return $NumerosdefensoresDto;
}
public function updateNumerosdefensores($NumerosdefensoresDto,$proveedor=null){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresDao = new NumerosdefensoresDAO();
//$tmpDto = new NumerosdefensoresDTO();
//$tmpDto = $NumerosdefensoresDao->selectNumerosdefensores($NumerosdefensoresDto,$proveedor);
//if($tmpDto!=""){//$NumerosdefensoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$NumerosdefensoresDto = $NumerosdefensoresDao->updateNumerosdefensores($NumerosdefensoresDto,$proveedor);
return $NumerosdefensoresDto;
//}
//return "";
}
public function deleteNumerosdefensores($NumerosdefensoresDto,$proveedor=null){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresDao = new NumerosdefensoresDAO();
$NumerosdefensoresDto = $NumerosdefensoresDao->deleteNumerosdefensores($NumerosdefensoresDto,$proveedor);
return $NumerosdefensoresDto;
}
}
?>