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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/gradoparticipaciones/GradoparticipacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class GradoparticipacionesController {
private $proveedor;
public function __construct() {
}
public function validarGradoparticipaciones($GradoparticipacionesDto){
$GradoparticipacionesDto->setcveGradoParticipacion(strtoupper(str_ireplace("'","",trim($GradoparticipacionesDto->getcveGradoParticipacion()))));
$GradoparticipacionesDto->setdesGradoParticipacion(strtoupper(str_ireplace("'","",trim($GradoparticipacionesDto->getdesGradoParticipacion()))));
$GradoparticipacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($GradoparticipacionesDto->getactivo()))));
$GradoparticipacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($GradoparticipacionesDto->getfechaRegistro()))));
$GradoparticipacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($GradoparticipacionesDto->getfechaActualizacion()))));
return $GradoparticipacionesDto;
}
public function selectGradoparticipaciones($GradoparticipacionesDto,$proveedor=null){
$GradoparticipacionesDto=$this->validarGradoparticipaciones($GradoparticipacionesDto);
$GradoparticipacionesDao = new GradoparticipacionesDAO();
$GradoparticipacionesDto = $GradoparticipacionesDao->selectGradoparticipaciones($GradoparticipacionesDto," ORDER BY desGradoParticipacion ASC",$proveedor);
return $GradoparticipacionesDto;
}
public function insertGradoparticipaciones($GradoparticipacionesDto,$proveedor=null){
$GradoparticipacionesDto=$this->validarGradoparticipaciones($GradoparticipacionesDto);
$GradoparticipacionesDao = new GradoparticipacionesDAO();
$GradoparticipacionesDto = $GradoparticipacionesDao->insertGradoparticipaciones($GradoparticipacionesDto,$proveedor);
return $GradoparticipacionesDto;
}
public function updateGradoparticipaciones($GradoparticipacionesDto,$proveedor=null){
$GradoparticipacionesDto=$this->validarGradoparticipaciones($GradoparticipacionesDto);
$GradoparticipacionesDao = new GradoparticipacionesDAO();
//$tmpDto = new GradoparticipacionesDTO();
//$tmpDto = $GradoparticipacionesDao->selectGradoparticipaciones($GradoparticipacionesDto,$proveedor);
//if($tmpDto!=""){//$GradoparticipacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$GradoparticipacionesDto = $GradoparticipacionesDao->updateGradoparticipaciones($GradoparticipacionesDto,$proveedor);
return $GradoparticipacionesDto;
//}
//return "";
}
public function deleteGradoparticipaciones($GradoparticipacionesDto,$proveedor=null){
$GradoparticipacionesDto=$this->validarGradoparticipaciones($GradoparticipacionesDto);
$GradoparticipacionesDao = new GradoparticipacionesDAO();
$GradoparticipacionesDto = $GradoparticipacionesDao->deleteGradoparticipaciones($GradoparticipacionesDto,$proveedor);
return $GradoparticipacionesDto;
}
}
?>