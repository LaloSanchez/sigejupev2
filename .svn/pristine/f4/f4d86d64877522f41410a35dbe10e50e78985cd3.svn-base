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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/especialidades/EspecialidadesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/especialidades/EspecialidadesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EspecialidadesController {
private $proveedor;
public function __construct() {
}
public function validarEspecialidades($EspecialidadesDto){
$EspecialidadesDto->setcveEspecialidad(strtoupper(str_ireplace("'","",trim($EspecialidadesDto->getcveEspecialidad()))));
$EspecialidadesDto->setdesSala(strtoupper(str_ireplace("'","",trim($EspecialidadesDto->getdesSala()))));
$EspecialidadesDto->setactivo(strtoupper(str_ireplace("'","",trim($EspecialidadesDto->getactivo()))));
$EspecialidadesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EspecialidadesDto->getfechaRegistro()))));
$EspecialidadesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EspecialidadesDto->getfechaActualizacion()))));
return $EspecialidadesDto;
}
public function selectEspecialidades($EspecialidadesDto,$proveedor=null){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesDao = new EspecialidadesDAO();
$EspecialidadesDto = $EspecialidadesDao->selectEspecialidades($EspecialidadesDto,$proveedor);
return $EspecialidadesDto;
}
public function insertEspecialidades($EspecialidadesDto,$proveedor=null){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesDao = new EspecialidadesDAO();
$EspecialidadesDto = $EspecialidadesDao->insertEspecialidades($EspecialidadesDto,$proveedor);
return $EspecialidadesDto;
}
public function updateEspecialidades($EspecialidadesDto,$proveedor=null){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesDao = new EspecialidadesDAO();
//$tmpDto = new EspecialidadesDTO();
//$tmpDto = $EspecialidadesDao->selectEspecialidades($EspecialidadesDto,$proveedor);
//if($tmpDto!=""){//$EspecialidadesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EspecialidadesDto = $EspecialidadesDao->updateEspecialidades($EspecialidadesDto,$proveedor);
return $EspecialidadesDto;
//}
//return "";
}
public function deleteEspecialidades($EspecialidadesDto,$proveedor=null){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesDao = new EspecialidadesDAO();
$EspecialidadesDto = $EspecialidadesDao->deleteEspecialidades($EspecialidadesDto,$proveedor);
return $EspecialidadesDto;
}
}
?>