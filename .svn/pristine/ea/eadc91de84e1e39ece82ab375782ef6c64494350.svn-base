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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/materias/MateriasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/materias/MateriasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MateriasController {
private $proveedor;
public function __construct() {
}
public function validarMaterias($MateriasDto){
$MateriasDto->setcveMateria(strtoupper(str_ireplace("'","",trim($MateriasDto->getcveMateria()))));
$MateriasDto->setdesMateria(strtoupper(str_ireplace("'","",trim($MateriasDto->getdesMateria()))));
$MateriasDto->setactivo(strtoupper(str_ireplace("'","",trim($MateriasDto->getactivo()))));
$MateriasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MateriasDto->getfechaRegistro()))));
$MateriasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MateriasDto->getfechaActualizacion()))));
return $MateriasDto;
}
public function selectMaterias($MateriasDto,$proveedor=null){
$MateriasDto=$this->validarMaterias($MateriasDto);
$MateriasDao = new MateriasDAO();
$MateriasDto = $MateriasDao->selectMaterias($MateriasDto,$proveedor);
return $MateriasDto;
}
public function insertMaterias($MateriasDto,$proveedor=null){
$MateriasDto=$this->validarMaterias($MateriasDto);
$MateriasDao = new MateriasDAO();
$MateriasDto = $MateriasDao->insertMaterias($MateriasDto,$proveedor);
return $MateriasDto;
}
public function updateMaterias($MateriasDto,$proveedor=null){
$MateriasDto=$this->validarMaterias($MateriasDto);
$MateriasDao = new MateriasDAO();
//$tmpDto = new MateriasDTO();
//$tmpDto = $MateriasDao->selectMaterias($MateriasDto,$proveedor);
//if($tmpDto!=""){//$MateriasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MateriasDto = $MateriasDao->updateMaterias($MateriasDto,$proveedor);
return $MateriasDto;
//}
//return "";
}
public function deleteMaterias($MateriasDto,$proveedor=null){
$MateriasDto=$this->validarMaterias($MateriasDto);
$MateriasDao = new MateriasDAO();
$MateriasDto = $MateriasDao->deleteMaterias($MateriasDto,$proveedor);
return $MateriasDto;
}
}
?>