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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidascautelares/MedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/medidascautelares/MedidascautelaresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MedidascautelaresController {
private $proveedor;
public function __construct() {
}
public function validarMedidascautelares($MedidascautelaresDto){
$MedidascautelaresDto->setidMedidaCautelar(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getidMedidaCautelar()))));
$MedidascautelaresDto->setidActuacion(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getidActuacion()))));
$MedidascautelaresDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getidImputadoCarpeta()))));
$MedidascautelaresDto->setApelada(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getApelada()))));
$MedidascautelaresDto->setfechaInicio(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getfechaInicio()))));
$MedidascautelaresDto->setfechaTermina(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getfechaTermina()))));
$MedidascautelaresDto->setcveTipoMedidaCautelar(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getcveTipoMedidaCautelar()))));
$MedidascautelaresDto->setcveAutoridadEmisora(strtoupper(str_ireplace("'","",trim($MedidascautelaresDto->getcveAutoridadEmisora()))));
return $MedidascautelaresDto;
}
public function selectMedidascautelares($MedidascautelaresDto,$proveedor=null){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresDao = new MedidascautelaresDAO();
$MedidascautelaresDto = $MedidascautelaresDao->selectMedidascautelares($MedidascautelaresDto,$proveedor);
return $MedidascautelaresDto;
}
public function insertMedidascautelares($MedidascautelaresDto,$proveedor=null){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresDao = new MedidascautelaresDAO();
$MedidascautelaresDto = $MedidascautelaresDao->insertMedidascautelares($MedidascautelaresDto,$proveedor);
return $MedidascautelaresDto;
}
public function updateMedidascautelares($MedidascautelaresDto,$proveedor=null){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresDao = new MedidascautelaresDAO();
//$tmpDto = new MedidascautelaresDTO();
//$tmpDto = $MedidascautelaresDao->selectMedidascautelares($MedidascautelaresDto,$proveedor);
//if($tmpDto!=""){//$MedidascautelaresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MedidascautelaresDto = $MedidascautelaresDao->updateMedidascautelares($MedidascautelaresDto,$proveedor);
return $MedidascautelaresDto;
//}
//return "";
}
public function deleteMedidascautelares($MedidascautelaresDto,$proveedor=null){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresDao = new MedidascautelaresDAO();
$MedidascautelaresDto = $MedidascautelaresDao->deleteMedidascautelares($MedidascautelaresDto,$proveedor);
return $MedidascautelaresDto;
}
}
?>