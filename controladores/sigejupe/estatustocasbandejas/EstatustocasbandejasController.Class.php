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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatustocasbandejas/EstatustocasbandejasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatustocasbandejas/EstatustocasbandejasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatustocasbandejasController {
private $proveedor;
public function __construct() {
}
public function validarEstatustocasbandejas($EstatustocasbandejasDto){
$EstatustocasbandejasDto->setidEstatusTocaBandeja(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getidEstatusTocaBandeja()))));
$EstatustocasbandejasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getidCarpetaJudicial()))));
$EstatustocasbandejasDto->setrecibido(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getrecibido()))));
$EstatustocasbandejasDto->setcveUsuario(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getcveUsuario()))));
$EstatustocasbandejasDto->setorigen(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getorigen()))));
$EstatustocasbandejasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getcveTipoCarpeta()))));
$EstatustocasbandejasDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getactivo()))));
$EstatustocasbandejasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getfechaRegistro()))));
$EstatustocasbandejasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatustocasbandejasDto->getfechaActualizacion()))));
return $EstatustocasbandejasDto;
}
public function selectEstatustocasbandejas($EstatustocasbandejasDto,$proveedor=null){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasDao = new EstatustocasbandejasDAO();
$EstatustocasbandejasDto = $EstatustocasbandejasDao->selectEstatustocasbandejas($EstatustocasbandejasDto,$proveedor);
return $EstatustocasbandejasDto;
}
public function insertEstatustocasbandejas($EstatustocasbandejasDto,$proveedor=null){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasDao = new EstatustocasbandejasDAO();
$EstatustocasbandejasDto = $EstatustocasbandejasDao->insertEstatustocasbandejas($EstatustocasbandejasDto,$proveedor);
return $EstatustocasbandejasDto;
}
public function updateEstatustocasbandejas($EstatustocasbandejasDto,$proveedor=null){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasDao = new EstatustocasbandejasDAO();
//$tmpDto = new EstatustocasbandejasDTO();
//$tmpDto = $EstatustocasbandejasDao->selectEstatustocasbandejas($EstatustocasbandejasDto,$proveedor);
//if($tmpDto!=""){//$EstatustocasbandejasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatustocasbandejasDto = $EstatustocasbandejasDao->updateEstatustocasbandejas($EstatustocasbandejasDto,$proveedor);
return $EstatustocasbandejasDto;
//}
//return "";
}
public function deleteEstatustocasbandejas($EstatustocasbandejasDto,$proveedor=null){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasDao = new EstatustocasbandejasDAO();
$EstatustocasbandejasDto = $EstatustocasbandejasDao->deleteEstatustocasbandejas($EstatustocasbandejasDto,$proveedor);
return $EstatustocasbandejasDto;
}
}
?>