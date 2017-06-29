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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autoridadesemisoras/AutoridadesemisorasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/autoridadesemisoras/AutoridadesemisorasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AutoridadesemisorasController {
private $proveedor;
public function __construct() {
}
public function validarAutoridadesemisoras($AutoridadesemisorasDto){
$AutoridadesemisorasDto->setcveAutoridadEmisora(strtoupper(str_ireplace("'","",trim($AutoridadesemisorasDto->getcveAutoridadEmisora()))));
$AutoridadesemisorasDto->setdesAutoridadEmisora(strtoupper(str_ireplace("'","",trim($AutoridadesemisorasDto->getdesAutoridadEmisora()))));
$AutoridadesemisorasDto->setactivo(strtoupper(str_ireplace("'","",trim($AutoridadesemisorasDto->getactivo()))));
$AutoridadesemisorasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($AutoridadesemisorasDto->getfechaRegistro()))));
$AutoridadesemisorasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($AutoridadesemisorasDto->getfechaActualizacion()))));
return $AutoridadesemisorasDto;
}
public function selectAutoridadesemisoras($AutoridadesemisorasDto,$proveedor=null){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasDao = new AutoridadesemisorasDAO();
$AutoridadesemisorasDto = $AutoridadesemisorasDao->selectAutoridadesemisoras($AutoridadesemisorasDto,' ORDER BY desAutoridadEmisora ASC ',$proveedor);
return $AutoridadesemisorasDto;
}
public function insertAutoridadesemisoras($AutoridadesemisorasDto,$proveedor=null){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasDao = new AutoridadesemisorasDAO();
$AutoridadesemisorasDto = $AutoridadesemisorasDao->insertAutoridadesemisoras($AutoridadesemisorasDto,$proveedor);
return $AutoridadesemisorasDto;
}
public function updateAutoridadesemisoras($AutoridadesemisorasDto,$proveedor=null){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasDao = new AutoridadesemisorasDAO();
//$tmpDto = new AutoridadesemisorasDTO();
//$tmpDto = $AutoridadesemisorasDao->selectAutoridadesemisoras($AutoridadesemisorasDto,$proveedor);
//if($tmpDto!=""){//$AutoridadesemisorasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$AutoridadesemisorasDto = $AutoridadesemisorasDao->updateAutoridadesemisoras($AutoridadesemisorasDto,$proveedor);
return $AutoridadesemisorasDto;
//}
//return "";
}
public function deleteAutoridadesemisoras($AutoridadesemisorasDto,$proveedor=null){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasDao = new AutoridadesemisorasDAO();
$AutoridadesemisorasDto = $AutoridadesemisorasDao->deleteAutoridadesemisoras($AutoridadesemisorasDto,$proveedor);
return $AutoridadesemisorasDto;
}
}
?>