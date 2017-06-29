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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/modalidades/ModalidadesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ModalidadesController {
private $proveedor;
public function __construct() {
}
public function validarModalidades($ModalidadesDto){
$ModalidadesDto->setcveModalidad(strtoupper(str_ireplace("'","",trim($ModalidadesDto->getcveModalidad()))));
$ModalidadesDto->setdesModalidad(strtoupper(str_ireplace("'","",trim($ModalidadesDto->getdesModalidad()))));
$ModalidadesDto->setactivo(strtoupper(str_ireplace("'","",trim($ModalidadesDto->getactivo()))));
$ModalidadesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ModalidadesDto->getfechaRegistro()))));
$ModalidadesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ModalidadesDto->getfechaActualizacion()))));
return $ModalidadesDto;
}
public function selectModalidades($ModalidadesDto,$proveedor=null){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesDao = new ModalidadesDAO();
$ModalidadesDto = $ModalidadesDao->selectModalidades($ModalidadesDto," ORDER BY desModalidad ASC",$proveedor);
return $ModalidadesDto;
}
public function insertModalidades($ModalidadesDto,$proveedor=null){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesDao = new ModalidadesDAO();
$ModalidadesDto = $ModalidadesDao->insertModalidades($ModalidadesDto,$proveedor);
return $ModalidadesDto;
}
public function updateModalidades($ModalidadesDto,$proveedor=null){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesDao = new ModalidadesDAO();
//$tmpDto = new ModalidadesDTO();
//$tmpDto = $ModalidadesDao->selectModalidades($ModalidadesDto,$proveedor);
//if($tmpDto!=""){//$ModalidadesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ModalidadesDto = $ModalidadesDao->updateModalidades($ModalidadesDto,$proveedor);
return $ModalidadesDto;
//}
//return "";
}
public function deleteModalidades($ModalidadesDto,$proveedor=null){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesDao = new ModalidadesDAO();
$ModalidadesDto = $ModalidadesDao->deleteModalidades($ModalidadesDto,$proveedor);
return $ModalidadesDto;
}
}
?>