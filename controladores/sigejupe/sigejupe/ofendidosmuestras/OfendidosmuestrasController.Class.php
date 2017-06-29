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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidosmuestras/OfendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ofendidosmuestras/OfendidosmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OfendidosmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarOfendidosmuestras($OfendidosmuestrasDto){
$OfendidosmuestrasDto->setidOfendidoMuestra(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getidOfendidoMuestra()))));
$OfendidosmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getidSolicitudMuestra()))));
$OfendidosmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getnombre()))));
$OfendidosmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getpaterno()))));
$OfendidosmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getmaterno()))));
$OfendidosmuestrasDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getcveTipoPersona()))));
$OfendidosmuestrasDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getnombreMoral()))));
$OfendidosmuestrasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getcveGenero()))));
$OfendidosmuestrasDto->setdomicilio(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getdomicilio()))));
$OfendidosmuestrasDto->settelefono(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->gettelefono()))));
$OfendidosmuestrasDto->setemail(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getemail()))));
$OfendidosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getactivo()))));
$OfendidosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getfechaRegistro()))));
$OfendidosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OfendidosmuestrasDto->getfechaActualizacion()))));
return $OfendidosmuestrasDto;
}
public function selectOfendidosmuestras($OfendidosmuestrasDto,$proveedor=null){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasDao = new OfendidosmuestrasDAO();
$OfendidosmuestrasDto = $OfendidosmuestrasDao->selectOfendidosmuestras($OfendidosmuestrasDto,$proveedor);
return $OfendidosmuestrasDto;
}
public function insertOfendidosmuestras($OfendidosmuestrasDto,$proveedor=null){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasDao = new OfendidosmuestrasDAO();
$OfendidosmuestrasDto = $OfendidosmuestrasDao->insertOfendidosmuestras($OfendidosmuestrasDto,$proveedor);
return $OfendidosmuestrasDto;
}
public function updateOfendidosmuestras($OfendidosmuestrasDto,$proveedor=null){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasDao = new OfendidosmuestrasDAO();
//$tmpDto = new OfendidosmuestrasDTO();
//$tmpDto = $OfendidosmuestrasDao->selectOfendidosmuestras($OfendidosmuestrasDto,$proveedor);
//if($tmpDto!=""){//$OfendidosmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OfendidosmuestrasDto = $OfendidosmuestrasDao->updateOfendidosmuestras($OfendidosmuestrasDto,$proveedor);
return $OfendidosmuestrasDto;
//}
//return "";
}
public function deleteOfendidosmuestras($OfendidosmuestrasDto,$proveedor=null){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasDao = new OfendidosmuestrasDAO();
$OfendidosmuestrasDto = $OfendidosmuestrasDao->deleteOfendidosmuestras($OfendidosmuestrasDto,$proveedor);
return $OfendidosmuestrasDto;
}
}
?>