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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MunicipiosController {
private $proveedor;
public function __construct() {
}
public function validarMunicipios($MunicipiosDto){
$MunicipiosDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($MunicipiosDto->getcveMunicipio()))));
$MunicipiosDto->setdesMunicipio(strtoupper(str_ireplace("'","",trim($MunicipiosDto->getdesMunicipio()))));
$MunicipiosDto->setactivo(strtoupper(str_ireplace("'","",trim($MunicipiosDto->getactivo()))));
$MunicipiosDto->setcveEstado(strtoupper(str_ireplace("'","",trim($MunicipiosDto->getcveEstado()))));
$MunicipiosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MunicipiosDto->getfechaRegistro()))));
$MunicipiosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MunicipiosDto->getfechaActualizacion()))));
return $MunicipiosDto;
}
public function selectMunicipios($MunicipiosDto,$proveedor=null){
$MunicipiosDto=$this->validarMunicipios($MunicipiosDto);
$MunicipiosDao = new MunicipiosDAO();
$MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto," ORDER BY desMunicipio ASC",$proveedor);
return $MunicipiosDto;
}
public function insertMunicipios($MunicipiosDto,$proveedor=null){
$MunicipiosDto=$this->validarMunicipios($MunicipiosDto);
$MunicipiosDao = new MunicipiosDAO();
$MunicipiosDto = $MunicipiosDao->insertMunicipios($MunicipiosDto,$proveedor);
return $MunicipiosDto;
}
public function updateMunicipios($MunicipiosDto,$proveedor=null){
$MunicipiosDto=$this->validarMunicipios($MunicipiosDto);
$MunicipiosDao = new MunicipiosDAO();
//$tmpDto = new MunicipiosDTO();
//$tmpDto = $MunicipiosDao->selectMunicipios($MunicipiosDto,$proveedor);
//if($tmpDto!=""){//$MunicipiosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MunicipiosDto = $MunicipiosDao->updateMunicipios($MunicipiosDto,$proveedor);
return $MunicipiosDto;
//}
//return "";
}
public function deleteMunicipios($MunicipiosDto,$proveedor=null){
$MunicipiosDto=$this->validarMunicipios($MunicipiosDto);
$MunicipiosDao = new MunicipiosDAO();
$MunicipiosDto = $MunicipiosDao->deleteMunicipios($MunicipiosDto,$proveedor);
return $MunicipiosDto;
}
}
?>