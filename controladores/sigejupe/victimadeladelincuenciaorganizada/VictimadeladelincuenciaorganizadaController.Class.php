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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class VictimadeladelincuenciaorganizadaController {
private $proveedor;
public function __construct() {
}
public function validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto){
$VictimadeladelincuenciaorganizadaDto->setcveVictimaDeLaDelincuenciaOrganizada(strtoupper(str_ireplace("'","",trim($VictimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()))));
$VictimadeladelincuenciaorganizadaDto->setdesVictimaDeLaDelincuenciaOrganizada(strtoupper(str_ireplace("'","",trim($VictimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()))));
$VictimadeladelincuenciaorganizadaDto->setactivo(strtoupper(str_ireplace("'","",trim($VictimadeladelincuenciaorganizadaDto->getactivo()))));
$VictimadeladelincuenciaorganizadaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($VictimadeladelincuenciaorganizadaDto->getfechaRegistro()))));
$VictimadeladelincuenciaorganizadaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($VictimadeladelincuenciaorganizadaDto->getfechaActualizacion()))));
return $VictimadeladelincuenciaorganizadaDto;
}
public function selectVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor=null){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaDao = new VictimadeladelincuenciaorganizadaDAO();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaDao->selectVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor);
return $VictimadeladelincuenciaorganizadaDto;
}
public function insertVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor=null){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaDao = new VictimadeladelincuenciaorganizadaDAO();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaDao->insertVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor);
return $VictimadeladelincuenciaorganizadaDto;
}
public function updateVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor=null){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaDao = new VictimadeladelincuenciaorganizadaDAO();
//$tmpDto = new VictimadeladelincuenciaorganizadaDTO();
//$tmpDto = $VictimadeladelincuenciaorganizadaDao->selectVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor);
//if($tmpDto!=""){//$VictimadeladelincuenciaorganizadaDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaDao->updateVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor);
return $VictimadeladelincuenciaorganizadaDto;
//}
//return "";
}
public function deleteVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor=null){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaDao = new VictimadeladelincuenciaorganizadaDAO();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaDao->deleteVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto,$proveedor);
return $VictimadeladelincuenciaorganizadaDto;
}
}
?>