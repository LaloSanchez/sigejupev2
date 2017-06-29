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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DelitosController {
	private $proveedor;
	public function __construct() {
	}
	public function validarDelitos($DelitosDto){
		$DelitosDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DelitosDto->getcveDelito()))));
		$DelitosDto->setdesDelito(strtoupper(str_ireplace("'","",trim($DelitosDto->getdesDelito()))));
		$DelitosDto->setfechaVigencia(strtoupper(str_ireplace("'","",trim($DelitosDto->getfechaVigencia()))));
		$DelitosDto->setfechaInicio(strtoupper(str_ireplace("'","",trim($DelitosDto->getfechaInicio()))));
		$DelitosDto->setactivo(strtoupper(str_ireplace("'","",trim($DelitosDto->getactivo()))));
		$DelitosDto->setcveClasificacionDelito(strtoupper(str_ireplace("'","",trim($DelitosDto->getcveClasificacionDelito()))));
		$DelitosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DelitosDto->getfechaRegistro()))));
		$DelitosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DelitosDto->getfechaActualizacion()))));
		$DelitosDto->setarticulo(strtoupper(str_ireplace("'","",trim($DelitosDto->getarticulo()))));
		$DelitosDto->setpeso(strtoupper(str_ireplace("'","",trim($DelitosDto->getpeso()))));
		$DelitosDto->setcveBienJuridicoAfectado(strtoupper(str_ireplace("'","",trim($DelitosDto->getcveBienJuridicoAfectado()))));
		$DelitosDto->setcveCodigo(strtoupper(str_ireplace("'","",trim($DelitosDto->getcveCodigo()))));
		return $DelitosDto;
	}
	public function selectDelitos($DelitosDto,$proveedor=null){
		$DelitosDto=$this->validarDelitos($DelitosDto);
		$DelitosDao = new DelitosDAO();
		$DelitosDto = $DelitosDao->selectDelitos($DelitosDto," order by desDelito asc ",$proveedor);
		return $DelitosDto;
	}
	public function insertDelitos($DelitosDto,$proveedor=null){
		$DelitosDto=$this->validarDelitos($DelitosDto);
		$DelitosDao = new DelitosDAO();
		$DelitosDto = $DelitosDao->insertDelitos($DelitosDto,$proveedor);
		return $DelitosDto;
	}
        public function selectDelitosLike($DelitosDto,$proveedor=null){
		$DelitosDto=$this->validarDelitos($DelitosDto);
		$DelitosDao = new DelitosDAO();
		$DelitosDto = $DelitosDao->selectDelitosLike($DelitosDto,$proveedor);
		return $DelitosDto;
	}
	public function updateDelitos($DelitosDto,$proveedor=null){
		$DelitosDto=$this->validarDelitos($DelitosDto);
		$DelitosDao = new DelitosDAO();
//$tmpDto = new DelitosDTO();
//$tmpDto = $DelitosDao->selectDelitos($DelitosDto,$proveedor);
//if($tmpDto!=""){//$DelitosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
		$DelitosDto = $DelitosDao->updateDelitos($DelitosDto,$proveedor);
		return $DelitosDto;
//}
//return "";
	}
	public function deleteDelitos($DelitosDto,$proveedor=null){
		$DelitosDto=$this->validarDelitos($DelitosDto);
		$DelitosDao = new DelitosDAO();
		$DelitosDto = $DelitosDao->deleteDelitos($DelitosDto,$proveedor);
		return $DelitosDto;
	}
}
?>