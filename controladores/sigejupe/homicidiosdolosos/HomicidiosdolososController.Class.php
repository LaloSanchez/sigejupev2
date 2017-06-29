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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/homicidiosdolosos/HomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/homicidiosdolosos/HomicidiosdolososDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class HomicidiosdolososController {
private $proveedor;
public function __construct() {
}
public function validarHomicidiosdolosos($HomicidiosdolososDto){
$HomicidiosdolososDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'","",trim($HomicidiosdolososDto->getcveHomicidioDoloso()))));
$HomicidiosdolososDto->setdesHomicidioDoloso(strtoupper(str_ireplace("'","",trim($HomicidiosdolososDto->getdesHomicidioDoloso()))));
$HomicidiosdolososDto->setactivo(strtoupper(str_ireplace("'","",trim($HomicidiosdolososDto->getactivo()))));
$HomicidiosdolososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($HomicidiosdolososDto->getfechaRegistro()))));
$HomicidiosdolososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($HomicidiosdolososDto->getfechaActualizacion()))));
return $HomicidiosdolososDto;
}
public function selectHomicidiosdolosos($HomicidiosdolososDto,$proveedor=null){
$HomicidiosdolososDto=$this->validarHomicidiosdolosos($HomicidiosdolososDto);
$HomicidiosdolososDao = new HomicidiosdolososDAO();
$HomicidiosdolososDto = $HomicidiosdolososDao->selectHomicidiosdolosos($HomicidiosdolososDto,$proveedor);
return $HomicidiosdolososDto;
}
public function insertHomicidiosdolosos($HomicidiosdolososDto,$proveedor=null){
$HomicidiosdolososDto=$this->validarHomicidiosdolosos($HomicidiosdolososDto);
$HomicidiosdolososDao = new HomicidiosdolososDAO();
$HomicidiosdolososDto = $HomicidiosdolososDao->insertHomicidiosdolosos($HomicidiosdolososDto,$proveedor);
return $HomicidiosdolososDto;
}
public function updateHomicidiosdolosos($HomicidiosdolososDto,$proveedor=null){
$HomicidiosdolososDto=$this->validarHomicidiosdolosos($HomicidiosdolososDto);
$HomicidiosdolososDao = new HomicidiosdolososDAO();
//$tmpDto = new HomicidiosdolososDTO();
//$tmpDto = $HomicidiosdolososDao->selectHomicidiosdolosos($HomicidiosdolososDto,$proveedor);
//if($tmpDto!=""){//$HomicidiosdolososDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$HomicidiosdolososDto = $HomicidiosdolososDao->updateHomicidiosdolosos($HomicidiosdolososDto,$proveedor);
return $HomicidiosdolososDto;
//}
//return "";
}
public function deleteHomicidiosdolosos($HomicidiosdolososDto,$proveedor=null){
$HomicidiosdolososDto=$this->validarHomicidiosdolosos($HomicidiosdolososDto);
$HomicidiosdolososDao = new HomicidiosdolososDAO();
$HomicidiosdolososDto = $HomicidiosdolososDao->deleteHomicidiosdolosos($HomicidiosdolososDto,$proveedor);
return $HomicidiosdolososDto;
}
}
?>