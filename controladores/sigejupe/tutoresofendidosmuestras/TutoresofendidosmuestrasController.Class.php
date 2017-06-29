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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tutoresofendidosmuestras/TutoresofendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tutoresofendidosmuestras/TutoresofendidosmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TutoresofendidosmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto){
$TutoresofendidosmuestrasDto->setidTutorOfendidoMuestra(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getidTutorOfendidoMuestra()))));
$TutoresofendidosmuestrasDto->setidOfendidoMuestra(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getidOfendidoMuestra()))));
$TutoresofendidosmuestrasDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getcveTipoTutor()))));
$TutoresofendidosmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getnombre()))));
$TutoresofendidosmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getpaterno()))));
$TutoresofendidosmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getmaterno()))));
$TutoresofendidosmuestrasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getcveGenero()))));
$TutoresofendidosmuestrasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getfechaNacimiento()))));
$TutoresofendidosmuestrasDto->setdomicilio(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getdomicilio()))));
$TutoresofendidosmuestrasDto->settelefono(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->gettelefono()))));
$TutoresofendidosmuestrasDto->setemail(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getemail()))));
$TutoresofendidosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getactivo()))));
$TutoresofendidosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getfechaRegistro()))));
$TutoresofendidosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TutoresofendidosmuestrasDto->getfechaActualizacion()))));
return $TutoresofendidosmuestrasDto;
}
public function selectTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor=null){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasDao = new TutoresofendidosmuestrasDAO();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasDao->selectTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor);
return $TutoresofendidosmuestrasDto;
}
public function insertTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor=null){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasDao = new TutoresofendidosmuestrasDAO();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasDao->insertTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor);
return $TutoresofendidosmuestrasDto;
}
public function updateTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor=null){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasDao = new TutoresofendidosmuestrasDAO();
//$tmpDto = new TutoresofendidosmuestrasDTO();
//$tmpDto = $TutoresofendidosmuestrasDao->selectTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor);
//if($tmpDto!=""){//$TutoresofendidosmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasDao->updateTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor);
return $TutoresofendidosmuestrasDto;
//}
//return "";
}
public function deleteTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor=null){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasDao = new TutoresofendidosmuestrasDAO();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasDao->deleteTutoresofendidosmuestras($TutoresofendidosmuestrasDto,$proveedor);
return $TutoresofendidosmuestrasDto;
}
}
?>