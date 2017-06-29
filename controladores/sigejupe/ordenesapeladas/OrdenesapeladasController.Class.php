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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ordenesapeladas/OrdenesapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ordenesapeladas/OrdenesapeladasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OrdenesapeladasController {
private $proveedor;
public function __construct() {
}
public function validarOrdenesapeladas($OrdenesapeladasDto){
$OrdenesapeladasDto->setidOrdenApelada(strtoupper(str_ireplace("'","",trim($OrdenesapeladasDto->getidOrdenApelada()))));
$OrdenesapeladasDto->setidOrdenImputado(strtoupper(str_ireplace("'","",trim($OrdenesapeladasDto->getidOrdenImputado()))));
$OrdenesapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim($OrdenesapeladasDto->getcveSentido()))));
$OrdenesapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OrdenesapeladasDto->getfechaRegistro()))));
$OrdenesapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OrdenesapeladasDto->getfechaActualizacion()))));
return $OrdenesapeladasDto;
}
public function selectOrdenesapeladas($OrdenesapeladasDto,$proveedor=null){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasDao = new OrdenesapeladasDAO();
$OrdenesapeladasDto = $OrdenesapeladasDao->selectOrdenesapeladas($OrdenesapeladasDto,$proveedor);
return $OrdenesapeladasDto;
}
public function insertOrdenesapeladas($OrdenesapeladasDto,$proveedor=null){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasDao = new OrdenesapeladasDAO();
$OrdenesapeladasDto = $OrdenesapeladasDao->insertOrdenesapeladas($OrdenesapeladasDto,$proveedor);
return $OrdenesapeladasDto;
}
public function updateOrdenesapeladas($OrdenesapeladasDto,$proveedor=null){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasDao = new OrdenesapeladasDAO();
//$tmpDto = new OrdenesapeladasDTO();
//$tmpDto = $OrdenesapeladasDao->selectOrdenesapeladas($OrdenesapeladasDto,$proveedor);
//if($tmpDto!=""){//$OrdenesapeladasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OrdenesapeladasDto = $OrdenesapeladasDao->updateOrdenesapeladas($OrdenesapeladasDto,$proveedor);
return $OrdenesapeladasDto;
//}
//return "";
}
public function deleteOrdenesapeladas($OrdenesapeladasDto,$proveedor=null){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasDao = new OrdenesapeladasDAO();
$OrdenesapeladasDto = $OrdenesapeladasDao->deleteOrdenesapeladas($OrdenesapeladasDto,$proveedor);
return $OrdenesapeladasDto;
}
}
?>