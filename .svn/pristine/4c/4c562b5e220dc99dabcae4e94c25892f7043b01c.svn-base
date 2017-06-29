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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estadosciviles/EstadoscivilesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estadosciviles/EstadoscivilesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstadoscivilesController {
private $proveedor;
public function __construct() {
}
public function validarEstadosciviles($EstadoscivilesDto){
$EstadoscivilesDto->setcveEstadoCivil(strtoupper(str_ireplace("'","",trim($EstadoscivilesDto->getcveEstadoCivil()))));
$EstadoscivilesDto->setdesEstadoCivil(strtoupper(str_ireplace("'","",trim($EstadoscivilesDto->getdesEstadoCivil()))));
$EstadoscivilesDto->setactivo(strtoupper(str_ireplace("'","",trim($EstadoscivilesDto->getactivo()))));
$EstadoscivilesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstadoscivilesDto->getfechaRegistro()))));
$EstadoscivilesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstadoscivilesDto->getfechaActualizacion()))));
return $EstadoscivilesDto;
}
public function selectEstadosciviles($EstadoscivilesDto,$proveedor=null){
$EstadoscivilesDto=$this->validarEstadosciviles($EstadoscivilesDto);
$EstadoscivilesDao = new EstadoscivilesDAO();
$EstadoscivilesDto = $EstadoscivilesDao->selectEstadosciviles($EstadoscivilesDto,$proveedor);
return $EstadoscivilesDto;
}
public function insertEstadosciviles($EstadoscivilesDto,$proveedor=null){
$EstadoscivilesDto=$this->validarEstadosciviles($EstadoscivilesDto);
$EstadoscivilesDao = new EstadoscivilesDAO();
$EstadoscivilesDto = $EstadoscivilesDao->insertEstadosciviles($EstadoscivilesDto,$proveedor);
return $EstadoscivilesDto;
}
public function updateEstadosciviles($EstadoscivilesDto,$proveedor=null){
$EstadoscivilesDto=$this->validarEstadosciviles($EstadoscivilesDto);
$EstadoscivilesDao = new EstadoscivilesDAO();
//$tmpDto = new EstadoscivilesDTO();
//$tmpDto = $EstadoscivilesDao->selectEstadosciviles($EstadoscivilesDto,$proveedor);
//if($tmpDto!=""){//$EstadoscivilesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstadoscivilesDto = $EstadoscivilesDao->updateEstadosciviles($EstadoscivilesDto,$proveedor);
return $EstadoscivilesDto;
//}
//return "";
}
public function deleteEstadosciviles($EstadoscivilesDto,$proveedor=null){
$EstadoscivilesDto=$this->validarEstadosciviles($EstadoscivilesDto);
$EstadoscivilesDao = new EstadoscivilesDAO();
$EstadoscivilesDto = $EstadoscivilesDao->deleteEstadosciviles($EstadoscivilesDto,$proveedor);
return $EstadoscivilesDto;
}
}
?>