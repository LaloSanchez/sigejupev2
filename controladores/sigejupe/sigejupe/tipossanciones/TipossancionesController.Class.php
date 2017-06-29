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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipossanciones/TipossancionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipossancionesController {
private $proveedor;
public function __construct() {
}
public function validarTipossanciones($TipossancionesDto){
$TipossancionesDto->setcveTipoSancion(strtoupper(str_ireplace("'","",trim($TipossancionesDto->getcveTipoSancion()))));
$TipossancionesDto->setdesTipoSancion(strtoupper(str_ireplace("'","",trim($TipossancionesDto->getdesTipoSancion()))));
$TipossancionesDto->setBeneficio(strtoupper(str_ireplace("'","",trim($TipossancionesDto->getBeneficio()))));
$TipossancionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TipossancionesDto->getactivo()))));
$TipossancionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipossancionesDto->getfechaRegistro()))));
$TipossancionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipossancionesDto->getfechaActualizacion()))));
return $TipossancionesDto;
}

public function seleccionarsanciones($TipossancionesDto,$proveedor=null){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesDao = new TipossancionesDAO();
$TipossancionesDto = $TipossancionesDao->selectTipossanciones($TipossancionesDto,$proveedor);
$contador=0;
foreach($TipossancionesDto as $sele){
    $TipossancionesDto[$contador]->setDesTipoSancion(utf8_encode($sele->getDesTipoSancion()));
    $contador++;
    
}




return $TipossancionesDto;
}

public function selectTipossanciones($TipossancionesDto,$proveedor=null){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesDao = new TipossancionesDAO();
$orden="ORDER BY desTipoSancion ASC";
$TipossancionesDto = $TipossancionesDao->selectTipossanciones($TipossancionesDto,$orden,$proveedor);
return $TipossancionesDto;
}
public function insertTipossanciones($TipossancionesDto,$proveedor=null){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesDao = new TipossancionesDAO();
$TipossancionesDto = $TipossancionesDao->insertTipossanciones($TipossancionesDto,$proveedor);
return $TipossancionesDto;
}
public function updateTipossanciones($TipossancionesDto,$proveedor=null){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesDao = new TipossancionesDAO();
//$tmpDto = new TipossancionesDTO();
//$tmpDto = $TipossancionesDao->selectTipossanciones($TipossancionesDto,$proveedor);
//if($tmpDto!=""){//$TipossancionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipossancionesDto = $TipossancionesDao->updateTipossanciones($TipossancionesDto,$proveedor);
return $TipossancionesDto;
//}
//return "";
}
public function deleteTipossanciones($TipossancionesDto,$proveedor=null){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesDao = new TipossancionesDAO();
$TipossancionesDto = $TipossancionesDao->deleteTipossanciones($TipossancionesDto,$proveedor);
return $TipossancionesDto;
}
}
?>