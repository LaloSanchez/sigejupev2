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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidosordenes/OfendidosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ofendidosordenes/OfendidosordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OfendidosordenesController {
private $proveedor;
public function __construct() {
}
public function validarOfendidosordenes($OfendidosordenesDto){
$OfendidosordenesDto->setidOfendidoOrden(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getidOfendidoOrden()))));
$OfendidosordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getidSolicitudOrden()))));
$OfendidosordenesDto->setactivo(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getactivo()))));
$OfendidosordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getfechaRegistro()))));
$OfendidosordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getfechaActualizacion()))));
$OfendidosordenesDto->setnombre(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getnombre()))));
$OfendidosordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getpaterno()))));
$OfendidosordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getmaterno()))));
$OfendidosordenesDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getcveTipoPersona()))));
$OfendidosordenesDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getnombreMoral()))));
$OfendidosordenesDto->setcveGenero(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getcveGenero()))));
$OfendidosordenesDto->setdomicilio(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getdomicilio()))));
$OfendidosordenesDto->settelefono(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->gettelefono()))));
$OfendidosordenesDto->setemail(strtoupper(str_ireplace("'","",trim($OfendidosordenesDto->getemail()))));
return $OfendidosordenesDto;
}
public function selectOfendidosordenes($OfendidosordenesDto,$proveedor=null){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesDao = new OfendidosordenesDAO();
$OfendidosordenesDto = $OfendidosordenesDao->selectOfendidosordenes($OfendidosordenesDto,$proveedor);
return $OfendidosordenesDto;
}
public function insertOfendidosordenes($OfendidosordenesDto,$proveedor=null){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesDao = new OfendidosordenesDAO();
$OfendidosordenesDto = $OfendidosordenesDao->insertOfendidosordenes($OfendidosordenesDto,$proveedor);
return $OfendidosordenesDto;
}
public function updateOfendidosordenes($OfendidosordenesDto,$proveedor=null){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesDao = new OfendidosordenesDAO();
//$tmpDto = new OfendidosordenesDTO();
//$tmpDto = $OfendidosordenesDao->selectOfendidosordenes($OfendidosordenesDto,$proveedor);
//if($tmpDto!=""){//$OfendidosordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OfendidosordenesDto = $OfendidosordenesDao->updateOfendidosordenes($OfendidosordenesDto,$proveedor);
return $OfendidosordenesDto;
//}
//return "";
}
public function deleteOfendidosordenes($OfendidosordenesDto,$proveedor=null){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesDao = new OfendidosordenesDAO();
$OfendidosordenesDto = $OfendidosordenesDao->deleteOfendidosordenes($OfendidosordenesDto,$proveedor);
return $OfendidosordenesDto;
}
}
?>