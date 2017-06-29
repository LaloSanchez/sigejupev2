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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/instancias/InstanciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/instancias/InstanciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class InstanciasController {
private $proveedor;
public function __construct() {
}
public function validarInstancias($InstanciasDto){
$InstanciasDto->setcveInstancia(strtoupper(str_ireplace("'","",trim($InstanciasDto->getcveInstancia()))));
$InstanciasDto->setdesInstancia(strtoupper(str_ireplace("'","",trim($InstanciasDto->getdesInstancia()))));
$InstanciasDto->setactivo(strtoupper(str_ireplace("'","",trim($InstanciasDto->getactivo()))));
$InstanciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($InstanciasDto->getfechaRegistro()))));
$InstanciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($InstanciasDto->getfechaActualizacion()))));
return $InstanciasDto;
}
public function selectInstancias($InstanciasDto,$proveedor=null){
$InstanciasDto=$this->validarInstancias($InstanciasDto);
$InstanciasDao = new InstanciasDAO();
$InstanciasDto = $InstanciasDao->selectInstancias($InstanciasDto,$proveedor);
return $InstanciasDto;
}
public function insertInstancias($InstanciasDto,$proveedor=null){
$InstanciasDto=$this->validarInstancias($InstanciasDto);
$InstanciasDao = new InstanciasDAO();
$InstanciasDto = $InstanciasDao->insertInstancias($InstanciasDto,$proveedor);
return $InstanciasDto;
}
public function updateInstancias($InstanciasDto,$proveedor=null){
$InstanciasDto=$this->validarInstancias($InstanciasDto);
$InstanciasDao = new InstanciasDAO();
//$tmpDto = new InstanciasDTO();
//$tmpDto = $InstanciasDao->selectInstancias($InstanciasDto,$proveedor);
//if($tmpDto!=""){//$InstanciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$InstanciasDto = $InstanciasDao->updateInstancias($InstanciasDto,$proveedor);
return $InstanciasDto;
//}
//return "";
}
public function deleteInstancias($InstanciasDto,$proveedor=null){
$InstanciasDto=$this->validarInstancias($InstanciasDto);
$InstanciasDao = new InstanciasDAO();
$InstanciasDto = $InstanciasDao->deleteInstancias($InstanciasDto,$proveedor);
return $InstanciasDto;
}
}
?>