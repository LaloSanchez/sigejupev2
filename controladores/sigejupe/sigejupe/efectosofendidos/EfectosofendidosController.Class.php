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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EfectosofendidosController {
private $proveedor;
public function __construct() {
}
public function validarEfectosofendidos($EfectosofendidosDto){
$EfectosofendidosDto->setidEfectoOfendido(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getidEfectoOfendido()))));
$EfectosofendidosDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getcveDetalleEfecto()))));
$EfectosofendidosDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getidImpOfeDelSolicitud()))));
$EfectosofendidosDto->setIdReferencia(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getIdReferencia()))));
$EfectosofendidosDto->setorigen(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getorigen()))));
$EfectosofendidosDto->setactivo(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getactivo()))));
$EfectosofendidosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getfechaRegistro()))));
$EfectosofendidosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EfectosofendidosDto->getfechaActualizacion()))));
return $EfectosofendidosDto;
}
public function selectEfectosofendidos($EfectosofendidosDto,$proveedor=null){
$EfectosofendidosDto=$this->validarEfectosofendidos($EfectosofendidosDto);
$EfectosofendidosDao = new EfectosofendidosDAO();
$EfectosofendidosDto = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosDto,$proveedor);
return $EfectosofendidosDto;
}
public function insertEfectosofendidos($EfectosofendidosDto,$proveedor=null){
$EfectosofendidosDto=$this->validarEfectosofendidos($EfectosofendidosDto);
$EfectosofendidosDao = new EfectosofendidosDAO();
$EfectosofendidosDto = $EfectosofendidosDao->insertEfectosofendidos($EfectosofendidosDto,$proveedor);
return $EfectosofendidosDto;
}
public function updateEfectosofendidos($EfectosofendidosDto,$proveedor=null){
$EfectosofendidosDto=$this->validarEfectosofendidos($EfectosofendidosDto);
$EfectosofendidosDao = new EfectosofendidosDAO();
//$tmpDto = new EfectosofendidosDTO();
//$tmpDto = $EfectosofendidosDao->selectEfectosofendidos($EfectosofendidosDto,$proveedor);
//if($tmpDto!=""){//$EfectosofendidosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EfectosofendidosDto = $EfectosofendidosDao->updateEfectosofendidos($EfectosofendidosDto,$proveedor);
return $EfectosofendidosDto;
//}
//return "";
}
public function deleteEfectosofendidos($EfectosofendidosDto,$proveedor=null){
$EfectosofendidosDto=$this->validarEfectosofendidos($EfectosofendidosDto);
$EfectosofendidosDao = new EfectosofendidosDAO();
$EfectosofendidosDto = $EfectosofendidosDao->deleteEfectosofendidos($EfectosofendidosDto,$proveedor);
return $EfectosofendidosDto;
}
}
?>