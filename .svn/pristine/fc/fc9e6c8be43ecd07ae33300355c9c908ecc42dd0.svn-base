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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tercerosperjudicados/TercerosperjudicadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tercerosperjudicados/TercerosperjudicadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TercerosperjudicadosController {
private $proveedor;
public function __construct() {
}
public function validarTercerosperjudicados($TercerosperjudicadosDto){
$TercerosperjudicadosDto->setidTercero(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getidTercero()))));
$TercerosperjudicadosDto->setidAmparo(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getidAmparo()))));
$TercerosperjudicadosDto->setpaternoT(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getpaternoT()))));
$TercerosperjudicadosDto->setmaternoT(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getmaternoT()))));
$TercerosperjudicadosDto->setnombreT(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getnombreT()))));
$TercerosperjudicadosDto->setNombreMoral(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getNombreMoral()))));
$TercerosperjudicadosDto->setdomicilio(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getdomicilio()))));
$TercerosperjudicadosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getcveTipoPersona()))));
$TercerosperjudicadosDto->setemail(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getemail()))));
$TercerosperjudicadosDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getcveMunicipio()))));
$TercerosperjudicadosDto->setcveGenero(strtoupper(str_ireplace("'","",trim($TercerosperjudicadosDto->getcveGenero()))));
return $TercerosperjudicadosDto;
}
public function selectTercerosperjudicados($TercerosperjudicadosDto,$proveedor=null){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosDao = new TercerosperjudicadosDAO();
$TercerosperjudicadosDto = $TercerosperjudicadosDao->selectTercerosperjudicados($TercerosperjudicadosDto,$proveedor);
return $TercerosperjudicadosDto;
}
public function insertTercerosperjudicados($TercerosperjudicadosDto,$proveedor=null){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosDao = new TercerosperjudicadosDAO();
$TercerosperjudicadosDto = $TercerosperjudicadosDao->insertTercerosperjudicados($TercerosperjudicadosDto,$proveedor);
return $TercerosperjudicadosDto;
}
public function updateTercerosperjudicados($TercerosperjudicadosDto,$proveedor=null){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosDao = new TercerosperjudicadosDAO();
//$tmpDto = new TercerosperjudicadosDTO();
//$tmpDto = $TercerosperjudicadosDao->selectTercerosperjudicados($TercerosperjudicadosDto,$proveedor);
//if($tmpDto!=""){//$TercerosperjudicadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TercerosperjudicadosDto = $TercerosperjudicadosDao->updateTercerosperjudicados($TercerosperjudicadosDto,$proveedor);
return $TercerosperjudicadosDto;
//}
//return "";
}
public function deleteTercerosperjudicados($TercerosperjudicadosDto,$proveedor=null){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosDao = new TercerosperjudicadosDAO();
$TercerosperjudicadosDto = $TercerosperjudicadosDao->deleteTercerosperjudicados($TercerosperjudicadosDto,$proveedor);
return $TercerosperjudicadosDto;
}
}
?>