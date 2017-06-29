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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/etapastiposcarpetas/EtapastiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/etapastiposcarpetas/EtapastiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EtapastiposcarpetasController {
private $proveedor;
public function __construct() {
}
public function validarEtapastiposcarpetas($EtapastiposcarpetasDto){
$EtapastiposcarpetasDto->setidEtapaTipoCarpeta(strtoupper(str_ireplace("'","",trim($EtapastiposcarpetasDto->getidEtapaTipoCarpeta()))));
$EtapastiposcarpetasDto->setcveEtapaProcesal(strtoupper(str_ireplace("'","",trim($EtapastiposcarpetasDto->getcveEtapaProcesal()))));
$EtapastiposcarpetasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim($EtapastiposcarpetasDto->getcveTipoCarpeta()))));
$EtapastiposcarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EtapastiposcarpetasDto->getfechaRegistro()))));
$EtapastiposcarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EtapastiposcarpetasDto->getfechaActualizacion()))));
return $EtapastiposcarpetasDto;
}
public function selectEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor=null){
$EtapastiposcarpetasDto=$this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
$EtapastiposcarpetasDao = new EtapastiposcarpetasDAO();
$EtapastiposcarpetasDto = $EtapastiposcarpetasDao->selectEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor);
return $EtapastiposcarpetasDto;
}
public function insertEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor=null){
$EtapastiposcarpetasDto=$this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
$EtapastiposcarpetasDao = new EtapastiposcarpetasDAO();
$EtapastiposcarpetasDto = $EtapastiposcarpetasDao->insertEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor);
return $EtapastiposcarpetasDto;
}
public function updateEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor=null){
$EtapastiposcarpetasDto=$this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
$EtapastiposcarpetasDao = new EtapastiposcarpetasDAO();
//$tmpDto = new EtapastiposcarpetasDTO();
//$tmpDto = $EtapastiposcarpetasDao->selectEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor);
//if($tmpDto!=""){//$EtapastiposcarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EtapastiposcarpetasDto = $EtapastiposcarpetasDao->updateEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor);
return $EtapastiposcarpetasDto;
//}
//return "";
}
public function deleteEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor=null){
$EtapastiposcarpetasDto=$this->validarEtapastiposcarpetas($EtapastiposcarpetasDto);
$EtapastiposcarpetasDao = new EtapastiposcarpetasDAO();
$EtapastiposcarpetasDto = $EtapastiposcarpetasDao->deleteEtapastiposcarpetas($EtapastiposcarpetasDto,$proveedor);
return $EtapastiposcarpetasDto;
}
}
?>