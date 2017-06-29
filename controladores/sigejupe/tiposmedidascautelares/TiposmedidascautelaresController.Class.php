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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposmedidascautelares/TiposmedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposmedidascautelares/TiposmedidascautelaresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposmedidascautelaresController {
private $proveedor;
public function __construct() {
}
public function validarTiposmedidascautelares($TiposmedidascautelaresDto){
$TiposmedidascautelaresDto->setcveTipoMedidaCautelar(strtoupper(str_ireplace("'","",trim($TiposmedidascautelaresDto->getcveTipoMedidaCautelar()))));
$TiposmedidascautelaresDto->setdesTipoMedidaCautelar(strtoupper(str_ireplace("'","",trim($TiposmedidascautelaresDto->getdesTipoMedidaCautelar()))));
$TiposmedidascautelaresDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposmedidascautelaresDto->getactivo()))));
$TiposmedidascautelaresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposmedidascautelaresDto->getfechaRegistro()))));
$TiposmedidascautelaresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposmedidascautelaresDto->getfechaActualizacion()))));
return $TiposmedidascautelaresDto;
}
public function selectTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor=null){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresDao = new TiposmedidascautelaresDAO();
$TiposmedidascautelaresDto = $TiposmedidascautelaresDao->selectTiposmedidascautelares($TiposmedidascautelaresDto,' ORDER BY desTipoMedidaCautelar ASC ',$proveedor);
return $TiposmedidascautelaresDto;
}
public function insertTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor=null){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresDao = new TiposmedidascautelaresDAO();
$TiposmedidascautelaresDto = $TiposmedidascautelaresDao->insertTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor);
return $TiposmedidascautelaresDto;
}
public function updateTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor=null){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresDao = new TiposmedidascautelaresDAO();
//$tmpDto = new TiposmedidascautelaresDTO();
//$tmpDto = $TiposmedidascautelaresDao->selectTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor);
//if($tmpDto!=""){//$TiposmedidascautelaresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposmedidascautelaresDto = $TiposmedidascautelaresDao->updateTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor);
return $TiposmedidascautelaresDto;
//}
//return "";
}
public function deleteTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor=null){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresDao = new TiposmedidascautelaresDAO();
$TiposmedidascautelaresDto = $TiposmedidascautelaresDao->deleteTiposmedidascautelares($TiposmedidascautelaresDto,$proveedor);
return $TiposmedidascautelaresDto;
}
}
?>