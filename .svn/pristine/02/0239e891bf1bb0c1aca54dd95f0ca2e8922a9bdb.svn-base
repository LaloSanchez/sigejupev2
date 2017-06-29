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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/beneficioses/BeneficiosesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/beneficioses/BeneficiosesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class BeneficiosesController {
private $proveedor;
public function __construct() {
}
public function validarBeneficioses($BeneficiosesDto){
$BeneficiosesDto->setidBeneficioES(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getidBeneficioES()))));
$BeneficiosesDto->setidActuacion(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getidActuacion()))));
$BeneficiosesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getidImputadoCarpeta()))));
$BeneficiosesDto->setidImputadoSancion(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getidImputadoSancion()))));
$BeneficiosesDto->setIdImputadoSancionNvo(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getIdImputadoSancionNvo()))));
$BeneficiosesDto->setApelada(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getApelada()))));
$BeneficiosesDto->setfechaInicio(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getfechaInicio()))));
$BeneficiosesDto->setfechaTermina(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getfechaTermina()))));
$BeneficiosesDto->setcveTipoSancion(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getcveTipoSancion()))));
$BeneficiosesDto->setcveTipoBeneficioES(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getcveTipoBeneficioES()))));
$BeneficiosesDto->setactivo(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getactivo()))));
$BeneficiosesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getfechaRegistro()))));
$BeneficiosesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($BeneficiosesDto->getfechaActualizacion()))));
return $BeneficiosesDto;
}
public function selectBeneficioses($BeneficiosesDto,$proveedor=null){
$BeneficiosesDto=$this->validarBeneficioses($BeneficiosesDto);
$BeneficiosesDao = new BeneficiosesDAO();
$BeneficiosesDto = $BeneficiosesDao->selectBeneficioses($BeneficiosesDto,$proveedor);
return $BeneficiosesDto;
}
public function insertBeneficioses($BeneficiosesDto,$proveedor=null){
$BeneficiosesDto=$this->validarBeneficioses($BeneficiosesDto);
$BeneficiosesDao = new BeneficiosesDAO();
$BeneficiosesDto = $BeneficiosesDao->insertBeneficioses($BeneficiosesDto,$proveedor);
return $BeneficiosesDto;
}
public function updateBeneficioses($BeneficiosesDto,$proveedor=null){
$BeneficiosesDto=$this->validarBeneficioses($BeneficiosesDto);
$BeneficiosesDao = new BeneficiosesDAO();
//$tmpDto = new BeneficiosesDTO();
//$tmpDto = $BeneficiosesDao->selectBeneficioses($BeneficiosesDto,$proveedor);
//if($tmpDto!=""){//$BeneficiosesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$BeneficiosesDto = $BeneficiosesDao->updateBeneficioses($BeneficiosesDto,$proveedor);
return $BeneficiosesDto;
//}
//return "";
}
public function deleteBeneficioses($BeneficiosesDto,$proveedor=null){
$BeneficiosesDto=$this->validarBeneficioses($BeneficiosesDto);
$BeneficiosesDao = new BeneficiosesDAO();
$BeneficiosesDto = $BeneficiosesDao->deleteBeneficioses($BeneficiosesDto,$proveedor);
return $BeneficiosesDto;
}
}
?>