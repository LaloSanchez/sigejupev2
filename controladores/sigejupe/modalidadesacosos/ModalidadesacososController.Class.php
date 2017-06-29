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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/modalidadesacosos/ModalidadesacososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/modalidadesacosos/ModalidadesacososDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ModalidadesacososController {
private $proveedor;
public function __construct() {
}
public function validarModalidadesacosos($ModalidadesacososDto){
$ModalidadesacososDto->setcveModalidadAcoso(strtoupper(str_ireplace("'","",trim($ModalidadesacososDto->getcveModalidadAcoso()))));
$ModalidadesacososDto->setdesModalidadAcoso(strtoupper(str_ireplace("'","",trim($ModalidadesacososDto->getdesModalidadAcoso()))));
$ModalidadesacososDto->setactivo(strtoupper(str_ireplace("'","",trim($ModalidadesacososDto->getactivo()))));
$ModalidadesacososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ModalidadesacososDto->getfechaRegistro()))));
$ModalidadesacososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ModalidadesacososDto->getfechaActualizacion()))));
return $ModalidadesacososDto;
}
public function selectModalidadesacosos($ModalidadesacososDto,$proveedor=null){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososDao = new ModalidadesacososDAO();
$ModalidadesacososDto = $ModalidadesacososDao->selectModalidadesacosos($ModalidadesacososDto,$proveedor);
return $ModalidadesacososDto;
}
public function insertModalidadesacosos($ModalidadesacososDto,$proveedor=null){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososDao = new ModalidadesacososDAO();
$ModalidadesacososDto = $ModalidadesacososDao->insertModalidadesacosos($ModalidadesacososDto,$proveedor);
return $ModalidadesacososDto;
}
public function updateModalidadesacosos($ModalidadesacososDto,$proveedor=null){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososDao = new ModalidadesacososDAO();
//$tmpDto = new ModalidadesacososDTO();
//$tmpDto = $ModalidadesacososDao->selectModalidadesacosos($ModalidadesacososDto,$proveedor);
//if($tmpDto!=""){//$ModalidadesacososDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ModalidadesacososDto = $ModalidadesacososDao->updateModalidadesacosos($ModalidadesacososDto,$proveedor);
return $ModalidadesacososDto;
//}
//return "";
}
public function deleteModalidadesacosos($ModalidadesacososDto,$proveedor=null){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososDao = new ModalidadesacososDAO();
$ModalidadesacososDto = $ModalidadesacososDao->deleteModalidadesacosos($ModalidadesacososDto,$proveedor);
return $ModalidadesacososDto;
}
}
?>