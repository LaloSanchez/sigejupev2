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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/etapasprocesales/EtapasprocesalesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EtapasprocesalesController {
private $proveedor;
public function __construct() {
}
public function validarEtapasprocesales($EtapasprocesalesDto){
$EtapasprocesalesDto->setcveEtapaProcesal(strtoupper(str_ireplace("'","",trim($EtapasprocesalesDto->getcveEtapaProcesal()))));
$EtapasprocesalesDto->setdesEtapaProcesal(strtoupper(str_ireplace("'","",trim($EtapasprocesalesDto->getdesEtapaProcesal()))));
$EtapasprocesalesDto->setactivo(strtoupper(str_ireplace("'","",trim($EtapasprocesalesDto->getactivo()))));
$EtapasprocesalesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EtapasprocesalesDto->getfechaRegistro()))));
$EtapasprocesalesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EtapasprocesalesDto->getfechaActualizacion()))));
return $EtapasprocesalesDto;
}
public function selectEtapasprocesales($EtapasprocesalesDto,$proveedor=null){
$EtapasprocesalesDto=$this->validarEtapasprocesales($EtapasprocesalesDto);
$EtapasprocesalesDao = new EtapasprocesalesDAO();
$orden="ORDER BY desEtapaProcesal ASC";
$EtapasprocesalesDto = $EtapasprocesalesDao->selectEtapasprocesales($EtapasprocesalesDto, $orden,$proveedor);
return $EtapasprocesalesDto;
}
public function insertEtapasprocesales($EtapasprocesalesDto,$proveedor=null){
$EtapasprocesalesDto=$this->validarEtapasprocesales($EtapasprocesalesDto);
$EtapasprocesalesDao = new EtapasprocesalesDAO();
$EtapasprocesalesDto = $EtapasprocesalesDao->insertEtapasprocesales($EtapasprocesalesDto,$proveedor);
return $EtapasprocesalesDto;
}
public function updateEtapasprocesales($EtapasprocesalesDto,$proveedor=null){
$EtapasprocesalesDto=$this->validarEtapasprocesales($EtapasprocesalesDto);
$EtapasprocesalesDao = new EtapasprocesalesDAO();
//$tmpDto = new EtapasprocesalesDTO();
//$tmpDto = $EtapasprocesalesDao->selectEtapasprocesales($EtapasprocesalesDto,$proveedor);
//if($tmpDto!=""){//$EtapasprocesalesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EtapasprocesalesDto = $EtapasprocesalesDao->updateEtapasprocesales($EtapasprocesalesDto,$proveedor);
return $EtapasprocesalesDto;
//}
//return "";
}
public function deleteEtapasprocesales($EtapasprocesalesDto,$proveedor=null){
$EtapasprocesalesDto=$this->validarEtapasprocesales($EtapasprocesalesDto);
$EtapasprocesalesDao = new EtapasprocesalesDAO();
$EtapasprocesalesDto = $EtapasprocesalesDao->deleteEtapasprocesales($EtapasprocesalesDto,$proveedor);
return $EtapasprocesalesDto;
}
}
?>