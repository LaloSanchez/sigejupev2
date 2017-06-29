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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/imputadosordenes/ImputadosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/imputadosordenes/ImputadosordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ImputadosordenesController {
private $proveedor;
public function __construct() {
}
public function validarImputadosordenes($ImputadosordenesDto){
$ImputadosordenesDto->setidImputadoOrden(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getidImputadoOrden()))));
$ImputadosordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getidSolicitudOrden()))));
$ImputadosordenesDto->setactivo(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getactivo()))));
$ImputadosordenesDto->setnombre(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getnombre()))));
$ImputadosordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getpaterno()))));
$ImputadosordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getmaterno()))));
$ImputadosordenesDto->setalias(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getalias()))));
$ImputadosordenesDto->setcveGenero(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getcveGenero()))));
$ImputadosordenesDto->setdetenido(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getdetenido()))));
$ImputadosordenesDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getcveTipoPersona()))));
$ImputadosordenesDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getnombreMoral()))));
$ImputadosordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getfechaRegistro()))));
$ImputadosordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getfechaActualizacion()))));
$ImputadosordenesDto->setdomicilio(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getdomicilio()))));
$ImputadosordenesDto->settelefono(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->gettelefono()))));
$ImputadosordenesDto->setemail(strtoupper(str_ireplace("'","",trim($ImputadosordenesDto->getemail()))));
return $ImputadosordenesDto;
}
public function selectImputadosordenes($ImputadosordenesDto,$proveedor=null){
$ImputadosordenesDto=$this->validarImputadosordenes($ImputadosordenesDto);
$ImputadosordenesDao = new ImputadosordenesDAO();
$ImputadosordenesDto = $ImputadosordenesDao->selectImputadosordenes($ImputadosordenesDto,$proveedor);
return $ImputadosordenesDto;
}
public function insertImputadosordenes($ImputadosordenesDto,$proveedor=null){
$ImputadosordenesDto=$this->validarImputadosordenes($ImputadosordenesDto);
$ImputadosordenesDao = new ImputadosordenesDAO();
$ImputadosordenesDto = $ImputadosordenesDao->insertImputadosordenes($ImputadosordenesDto,$proveedor);
return $ImputadosordenesDto;
}
public function updateImputadosordenes($ImputadosordenesDto,$proveedor=null){
$ImputadosordenesDto=$this->validarImputadosordenes($ImputadosordenesDto);
$ImputadosordenesDao = new ImputadosordenesDAO();
//$tmpDto = new ImputadosordenesDTO();
//$tmpDto = $ImputadosordenesDao->selectImputadosordenes($ImputadosordenesDto,$proveedor);
//if($tmpDto!=""){//$ImputadosordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ImputadosordenesDto = $ImputadosordenesDao->updateImputadosordenes($ImputadosordenesDto,$proveedor);
return $ImputadosordenesDto;
//}
//return "";
}
public function deleteImputadosordenes($ImputadosordenesDto,$proveedor=null){
$ImputadosordenesDto=$this->validarImputadosordenes($ImputadosordenesDto);
$ImputadosordenesDao = new ImputadosordenesDAO();
$ImputadosordenesDto = $ImputadosordenesDao->deleteImputadosordenes($ImputadosordenesDto,$proveedor);
return $ImputadosordenesDto;
}
}
?>