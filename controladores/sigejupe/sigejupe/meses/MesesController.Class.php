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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/meses/MesesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/meses/MesesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MesesController {
private $proveedor;
public function __construct() {
}
public function validarMeses($MesesDto){
$MesesDto->setcveMes(strtoupper(str_ireplace("'","",trim($MesesDto->getcveMes()))));
$MesesDto->setdesMes(strtoupper(str_ireplace("'","",trim($MesesDto->getdesMes()))));
$MesesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MesesDto->getfechaRegistro()))));
$MesesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MesesDto->getfechaActualizacion()))));
return $MesesDto;
}
public function selectMeses($MesesDto,$proveedor=null){
$MesesDto=$this->validarMeses($MesesDto);
$MesesDao = new MesesDAO();
$MesesDto = $MesesDao->selectMeses($MesesDto,$proveedor);
return $MesesDto;
}
public function insertMeses($MesesDto,$proveedor=null){
$MesesDto=$this->validarMeses($MesesDto);
$MesesDao = new MesesDAO();
$MesesDto = $MesesDao->insertMeses($MesesDto,$proveedor);
return $MesesDto;
}
public function updateMeses($MesesDto,$proveedor=null){
$MesesDto=$this->validarMeses($MesesDto);
$MesesDao = new MesesDAO();
//$tmpDto = new MesesDTO();
//$tmpDto = $MesesDao->selectMeses($MesesDto,$proveedor);
//if($tmpDto!=""){//$MesesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MesesDto = $MesesDao->updateMeses($MesesDto,$proveedor);
return $MesesDto;
//}
//return "";
}
public function deleteMeses($MesesDto,$proveedor=null){
$MesesDto=$this->validarMeses($MesesDto);
$MesesDao = new MesesDAO();
$MesesDto = $MesesDao->deleteMeses($MesesDto,$proveedor);
return $MesesDto;
}
}
?>