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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TrataspersonascarpetasController {
private $proveedor;
public function __construct() {
}
public function validarTrataspersonascarpetas($TrataspersonascarpetasDto){
$TrataspersonascarpetasDto->setidTrataPersonaCarpeta(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getidTrataPersonaCarpeta()))));
$TrataspersonascarpetasDto->setcveEstadoDestino(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcveEstadoDestino()))));
$TrataspersonascarpetasDto->setcveMunicipioDestino(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcveMunicipioDestino()))));
$TrataspersonascarpetasDto->setcvePaisDestino(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcvePaisDestino()))));
$TrataspersonascarpetasDto->setestadoDestino(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getestadoDestino()))));
$TrataspersonascarpetasDto->setmunicipioDestino(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getmunicipioDestino()))));
$TrataspersonascarpetasDto->setcveEstadoOrigen(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcveEstadoOrigen()))));
$TrataspersonascarpetasDto->setcveMunicipioOrigen(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcveMunicipioOrigen()))));
$TrataspersonascarpetasDto->setcvePaisOrigen(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcvePaisOrigen()))));
$TrataspersonascarpetasDto->setestadoOrigen(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getestadoOrigen()))));
$TrataspersonascarpetasDto->setmunicipioOrigen(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getmunicipioOrigen()))));
$TrataspersonascarpetasDto->setcveTipoTrata(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcveTipoTrata()))));
$TrataspersonascarpetasDto->setcveTrasportacion(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getcveTrasportacion()))));
$TrataspersonascarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim($TrataspersonascarpetasDto->getidImpOfeDelCarpeta()))));
return $TrataspersonascarpetasDto;
}
public function selectTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor=null){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
$TrataspersonascarpetasDto = $TrataspersonascarpetasDao->selectTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor);
return $TrataspersonascarpetasDto;
}
public function insertTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor=null){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
$TrataspersonascarpetasDto = $TrataspersonascarpetasDao->insertTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor);
return $TrataspersonascarpetasDto;
}
public function updateTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor=null){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
//$tmpDto = new TrataspersonascarpetasDTO();
//$tmpDto = $TrataspersonascarpetasDao->selectTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor);
//if($tmpDto!=""){//$TrataspersonascarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TrataspersonascarpetasDto = $TrataspersonascarpetasDao->updateTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor);
return $TrataspersonascarpetasDto;
//}
//return "";
}
public function deleteTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor=null){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasDao = new TrataspersonascarpetasDAO();
$TrataspersonascarpetasDto = $TrataspersonascarpetasDao->deleteTrataspersonascarpetas($TrataspersonascarpetasDto,$proveedor);
return $TrataspersonascarpetasDto;
}
}
?>