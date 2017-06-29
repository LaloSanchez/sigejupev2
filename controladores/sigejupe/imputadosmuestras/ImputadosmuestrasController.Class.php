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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/imputadosmuestras/ImputadosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/imputadosmuestras/ImputadosmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ImputadosmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarImputadosmuestras($ImputadosmuestrasDto){
$ImputadosmuestrasDto->setidImputadoMuestra(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getidImputadoMuestra()))));
$ImputadosmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getidSolicitudMuestra()))));
$ImputadosmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getnombre()))));
$ImputadosmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getpaterno()))));
$ImputadosmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getmaterno()))));
$ImputadosmuestrasDto->setalias(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getalias()))));
$ImputadosmuestrasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getcveGenero()))));
$ImputadosmuestrasDto->setdetenido(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getdetenido()))));
$ImputadosmuestrasDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getcveTipoPersona()))));
$ImputadosmuestrasDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getnombreMoral()))));
$ImputadosmuestrasDto->setdomicilio(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getdomicilio()))));
$ImputadosmuestrasDto->settelefono(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->gettelefono()))));
$ImputadosmuestrasDto->setemail(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getemail()))));
$ImputadosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getactivo()))));
$ImputadosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getfechaRegistro()))));
$ImputadosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ImputadosmuestrasDto->getfechaActualizacion()))));
return $ImputadosmuestrasDto;
}
public function selectImputadosmuestras($ImputadosmuestrasDto,$proveedor=null){
$ImputadosmuestrasDto=$this->validarImputadosmuestras($ImputadosmuestrasDto);
$ImputadosmuestrasDao = new ImputadosmuestrasDAO();
$ImputadosmuestrasDto = $ImputadosmuestrasDao->selectImputadosmuestras($ImputadosmuestrasDto,$proveedor);
return $ImputadosmuestrasDto;
}
public function insertImputadosmuestras($ImputadosmuestrasDto,$proveedor=null){
$ImputadosmuestrasDto=$this->validarImputadosmuestras($ImputadosmuestrasDto);
$ImputadosmuestrasDao = new ImputadosmuestrasDAO();
$ImputadosmuestrasDto = $ImputadosmuestrasDao->insertImputadosmuestras($ImputadosmuestrasDto,$proveedor);
return $ImputadosmuestrasDto;
}
public function updateImputadosmuestras($ImputadosmuestrasDto,$proveedor=null){
$ImputadosmuestrasDto=$this->validarImputadosmuestras($ImputadosmuestrasDto);
$ImputadosmuestrasDao = new ImputadosmuestrasDAO();
//$tmpDto = new ImputadosmuestrasDTO();
//$tmpDto = $ImputadosmuestrasDao->selectImputadosmuestras($ImputadosmuestrasDto,$proveedor);
//if($tmpDto!=""){//$ImputadosmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ImputadosmuestrasDto = $ImputadosmuestrasDao->updateImputadosmuestras($ImputadosmuestrasDto,$proveedor);
return $ImputadosmuestrasDto;
//}
//return "";
}
public function deleteImputadosmuestras($ImputadosmuestrasDto,$proveedor=null){
$ImputadosmuestrasDto=$this->validarImputadosmuestras($ImputadosmuestrasDto);
$ImputadosmuestrasDao = new ImputadosmuestrasDAO();
$ImputadosmuestrasDto = $ImputadosmuestrasDao->deleteImputadosmuestras($ImputadosmuestrasDto,$proveedor);
return $ImputadosmuestrasDto;
}
}
?>