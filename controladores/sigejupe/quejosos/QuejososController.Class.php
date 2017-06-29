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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejosos/QuejososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/quejosos/QuejososDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class QuejososController {
private $proveedor;
public function __construct() {
}
public function validarQuejosos($QuejososDto){
$QuejososDto->setidQuejoso(strtoupper(str_ireplace("'","",trim($QuejososDto->getidQuejoso()))));
$QuejososDto->setidAmparo(strtoupper(str_ireplace("'","",trim($QuejososDto->getidAmparo()))));
$QuejososDto->setpaternoQ(strtoupper(str_ireplace("'","",trim($QuejososDto->getpaternoQ()))));
$QuejososDto->setmaternoQ(strtoupper(str_ireplace("'","",trim($QuejososDto->getmaternoQ()))));
$QuejososDto->setnombreQ(strtoupper(str_ireplace("'","",trim($QuejososDto->getnombreQ()))));
$QuejososDto->setNombreMoral(strtoupper(str_ireplace("'","",trim($QuejososDto->getNombreMoral()))));
$QuejososDto->setdomicilio(strtoupper(str_ireplace("'","",trim($QuejososDto->getdomicilio()))));
$QuejososDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($QuejososDto->getcveTipoPersona()))));
$QuejososDto->setemail(strtoupper(str_ireplace("'","",trim($QuejososDto->getemail()))));
$QuejososDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($QuejososDto->getcveMunicipio()))));
$QuejososDto->setcveGenero(strtoupper(str_ireplace("'","",trim($QuejososDto->getcveGenero()))));
return $QuejososDto;
}
public function selectQuejosos($QuejososDto,$proveedor=null){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososDao = new QuejososDAO();
$QuejososDto = $QuejososDao->selectQuejosos($QuejososDto,$proveedor);
return $QuejososDto;
}
public function insertQuejosos($QuejososDto,$proveedor=null){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososDao = new QuejososDAO();
$QuejososDto = $QuejososDao->insertQuejosos($QuejososDto,$proveedor);
return $QuejososDto;
}
public function updateQuejosos($QuejososDto,$proveedor=null){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososDao = new QuejososDAO();
//$tmpDto = new QuejososDTO();
//$tmpDto = $QuejososDao->selectQuejosos($QuejososDto,$proveedor);
//if($tmpDto!=""){//$QuejososDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$QuejososDto = $QuejososDao->updateQuejosos($QuejososDto,$proveedor);
return $QuejososDto;
//}
//return "";
}
public function deleteQuejosos($QuejososDto,$proveedor=null){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososDao = new QuejososDAO();
$QuejososDto = $QuejososDao->deleteQuejosos($QuejososDto,$proveedor);
return $QuejososDto;
}
}
?>