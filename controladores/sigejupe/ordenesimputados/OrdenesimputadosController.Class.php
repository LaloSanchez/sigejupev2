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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ordenesimputados/OrdenesimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ordenesimputados/OrdenesimputadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OrdenesimputadosController {
private $proveedor;
public function __construct() {
}
public function validarOrdenesimputados($OrdenesimputadosDto){
$OrdenesimputadosDto->setidOrdenImputado(strtoupper(str_ireplace("'","",trim($OrdenesimputadosDto->getidOrdenImputado()))));
$OrdenesimputadosDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($OrdenesimputadosDto->getidImputadoCarpeta()))));
$OrdenesimputadosDto->setidActuacion(strtoupper(str_ireplace("'","",trim($OrdenesimputadosDto->getidActuacion()))));
$OrdenesimputadosDto->setcveTipoOrden(strtoupper(str_ireplace("'","",trim($OrdenesimputadosDto->getcveTipoOrden()))));
$OrdenesimputadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OrdenesimputadosDto->getfechaRegistro()))));
$OrdenesimputadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OrdenesimputadosDto->getfechaActualizacion()))));
return $OrdenesimputadosDto;
}
public function selectOrdenesimputados($OrdenesimputadosDto,$proveedor=null){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosDao = new OrdenesimputadosDAO();
$OrdenesimputadosDto = $OrdenesimputadosDao->selectOrdenesimputados($OrdenesimputadosDto,$proveedor);
return $OrdenesimputadosDto;
}
public function insertOrdenesimputados($OrdenesimputadosDto,$proveedor=null){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosDao = new OrdenesimputadosDAO();
$OrdenesimputadosDto = $OrdenesimputadosDao->insertOrdenesimputados($OrdenesimputadosDto,$proveedor);
return $OrdenesimputadosDto;
}
public function updateOrdenesimputados($OrdenesimputadosDto,$proveedor=null){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosDao = new OrdenesimputadosDAO();
//$tmpDto = new OrdenesimputadosDTO();
//$tmpDto = $OrdenesimputadosDao->selectOrdenesimputados($OrdenesimputadosDto,$proveedor);
//if($tmpDto!=""){//$OrdenesimputadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OrdenesimputadosDto = $OrdenesimputadosDao->updateOrdenesimputados($OrdenesimputadosDto,$proveedor);
return $OrdenesimputadosDto;
//}
//return "";
}
public function deleteOrdenesimputados($OrdenesimputadosDto,$proveedor=null){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosDao = new OrdenesimputadosDAO();
$OrdenesimputadosDto = $OrdenesimputadosDao->deleteOrdenesimputados($OrdenesimputadosDto,$proveedor);
return $OrdenesimputadosDto;
}
}
?>