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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/concursos/ConcursosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConcursosController {
private $proveedor;
public function __construct() {
}
public function validarConcursos($ConcursosDto){
$ConcursosDto->setcveConcurso(strtoupper(str_ireplace("'","",trim($ConcursosDto->getcveConcurso()))));
$ConcursosDto->setdesConcurso(strtoupper(str_ireplace("'","",trim($ConcursosDto->getdesConcurso()))));
$ConcursosDto->setactivo(strtoupper(str_ireplace("'","",trim($ConcursosDto->getactivo()))));
$ConcursosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConcursosDto->getfechaRegistro()))));
$ConcursosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConcursosDto->getfechaActualizacion()))));
return $ConcursosDto;
}
public function selectConcursos($ConcursosDto,$proveedor=null){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosDao = new ConcursosDAO();
$ConcursosDto = $ConcursosDao->selectConcursos($ConcursosDto," ORDER BY desConcurso ASC",$proveedor);
return $ConcursosDto;
}
public function insertConcursos($ConcursosDto,$proveedor=null){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosDao = new ConcursosDAO();
$ConcursosDto = $ConcursosDao->insertConcursos($ConcursosDto,$proveedor);
return $ConcursosDto;
}
public function updateConcursos($ConcursosDto,$proveedor=null){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosDao = new ConcursosDAO();
//$tmpDto = new ConcursosDTO();
//$tmpDto = $ConcursosDao->selectConcursos($ConcursosDto,$proveedor);
//if($tmpDto!=""){//$ConcursosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConcursosDto = $ConcursosDao->updateConcursos($ConcursosDto,$proveedor);
return $ConcursosDto;
//}
//return "";
}
public function deleteConcursos($ConcursosDto,$proveedor=null){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosDao = new ConcursosDAO();
$ConcursosDto = $ConcursosDao->deleteConcursos($ConcursosDto,$proveedor);
return $ConcursosDto;
}
}
?>