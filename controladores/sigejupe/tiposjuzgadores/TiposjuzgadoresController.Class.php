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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposjuzgadoresController {
private $proveedor;
public function __construct() {
}
public function validarTiposjuzgadores($TiposjuzgadoresDto){
$TiposjuzgadoresDto->setcveTipoJuzgador(strtoupper(str_ireplace("'","",trim($TiposjuzgadoresDto->getcveTipoJuzgador()))));
$TiposjuzgadoresDto->setdesTipoJuzgador(strtoupper(str_ireplace("'","",trim($TiposjuzgadoresDto->getdesTipoJuzgador()))));
$TiposjuzgadoresDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposjuzgadoresDto->getactivo()))));
$TiposjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposjuzgadoresDto->getfechaRegistro()))));
$TiposjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposjuzgadoresDto->getfechaActualizacion()))));
return $TiposjuzgadoresDto;
}
public function selectTiposjuzgadores($TiposjuzgadoresDto,$proveedor=null){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresDao = new TiposjuzgadoresDAO();
$TiposjuzgadoresDto = $TiposjuzgadoresDao->selectTiposjuzgadores($TiposjuzgadoresDto,$proveedor);
return $TiposjuzgadoresDto;
}
public function insertTiposjuzgadores($TiposjuzgadoresDto,$proveedor=null){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresDao = new TiposjuzgadoresDAO();
$TiposjuzgadoresDto = $TiposjuzgadoresDao->insertTiposjuzgadores($TiposjuzgadoresDto,$proveedor);
return $TiposjuzgadoresDto;
}
public function updateTiposjuzgadores($TiposjuzgadoresDto,$proveedor=null){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresDao = new TiposjuzgadoresDAO();
//$tmpDto = new TiposjuzgadoresDTO();
//$tmpDto = $TiposjuzgadoresDao->selectTiposjuzgadores($TiposjuzgadoresDto,$proveedor);
//if($tmpDto!=""){//$TiposjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposjuzgadoresDto = $TiposjuzgadoresDao->updateTiposjuzgadores($TiposjuzgadoresDto,$proveedor);
return $TiposjuzgadoresDto;
//}
//return "";
}
public function deleteTiposjuzgadores($TiposjuzgadoresDto,$proveedor=null){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresDao = new TiposjuzgadoresDAO();
$TiposjuzgadoresDto = $TiposjuzgadoresDao->deleteTiposjuzgadores($TiposjuzgadoresDto,$proveedor);
return $TiposjuzgadoresDto;
}
}
?>