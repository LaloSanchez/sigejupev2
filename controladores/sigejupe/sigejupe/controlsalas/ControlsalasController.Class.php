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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/controlsalas/ControlsalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/controlsalas/ControlsalasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ControlsalasController {
private $proveedor;
public function __construct() {
}
public function validarControlsalas($ControlsalasDto){
$ControlsalasDto->setidControlSala(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getidControlSala()))));
$ControlsalasDto->setanio(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getanio()))));
$ControlsalasDto->setcveMes(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getcveMes()))));
$ControlsalasDto->setcveSala(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getcveSala()))));
$ControlsalasDto->settotalHoras(strtoupper(str_ireplace("'","",trim($ControlsalasDto->gettotalHoras()))));
$ControlsalasDto->setcontrol(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getcontrol()))));
$ControlsalasDto->settotalAsignados(strtoupper(str_ireplace("'","",trim($ControlsalasDto->gettotalAsignados()))));
$ControlsalasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getfechaRegistro()))));
$ControlsalasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ControlsalasDto->getfechaActualizacion()))));
return $ControlsalasDto;
}
public function selectControlsalas($ControlsalasDto,$proveedor=null){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasDao = new ControlsalasDAO();
$ControlsalasDto = $ControlsalasDao->selectControlsalas($ControlsalasDto,$proveedor);
return $ControlsalasDto;
}
public function insertControlsalas($ControlsalasDto,$proveedor=null){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasDao = new ControlsalasDAO();
$ControlsalasDto = $ControlsalasDao->insertControlsalas($ControlsalasDto,$proveedor);
return $ControlsalasDto;
}
public function updateControlsalas($ControlsalasDto,$proveedor=null){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasDao = new ControlsalasDAO();
//$tmpDto = new ControlsalasDTO();
//$tmpDto = $ControlsalasDao->selectControlsalas($ControlsalasDto,$proveedor);
//if($tmpDto!=""){//$ControlsalasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ControlsalasDto = $ControlsalasDao->updateControlsalas($ControlsalasDto,$proveedor);
return $ControlsalasDto;
//}
//return "";
}
public function deleteControlsalas($ControlsalasDto,$proveedor=null){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasDao = new ControlsalasDAO();
$ControlsalasDto = $ControlsalasDao->deleteControlsalas($ControlsalasDto,$proveedor);
return $ControlsalasDto;
}
}
?>