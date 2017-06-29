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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ultimoroljuzgador/UltimoroljuzgadorDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class UltimoroljuzgadorController {
	private $proveedor;
	public function __construct() {
	}
	public function validarUltimoroljuzgador($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto->setidUltimoRolJuzgador(strtoupper(str_ireplace("'","",trim($UltimoroljuzgadorDto->getidUltimoRolJuzgador()))));
		$UltimoroljuzgadorDto->setidProgramacion(strtoupper(str_ireplace("'","",trim($UltimoroljuzgadorDto->getidProgramacion()))));
		$UltimoroljuzgadorDto->setcveRolJuzgador(strtoupper(str_ireplace("'","",trim($UltimoroljuzgadorDto->getcveRolJuzgador()))));
		$UltimoroljuzgadorDto->setaparicion(strtoupper(str_ireplace("'","",trim($UltimoroljuzgadorDto->getaparicion()))));
		$UltimoroljuzgadorDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($UltimoroljuzgadorDto->getidJuzgador()))));
		$UltimoroljuzgadorDto->setnumSemana(strtoupper(str_ireplace("'","",trim($UltimoroljuzgadorDto->getnumSemana()))));
		return $UltimoroljuzgadorDto;
	}
	public function selectUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->selectUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
	}
	public function selectUltimoroljuzgadorSecuencia($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->selectUltimoroljuzgadorSecuencia($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
	}
	public function selectSecuenciasRoles($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->selectSecuenciasRoles($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
	}
	public function insertUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->insertUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
	}
	public function updateUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
//$tmpDto = new UltimoroljuzgadorDTO();
//$tmpDto = $UltimoroljuzgadorDao->selectUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
//if($tmpDto!=""){//$UltimoroljuzgadorDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->updateUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
//}
//return "";
	}
	public function deleteUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->deleteUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
	}
	public function borraUltimoRol($UltimoroljuzgadorDto,$proveedor=null){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorDao->borraUltimoRol($UltimoroljuzgadorDto,$proveedor);
		return $UltimoroljuzgadorDto;
	}
	public function guardaUltimoRol($parametros,$proveedor=null){
		//$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$mensaje["resultados"] = array();
		$UltimoroljuzgadorDao = new UltimoroljuzgadorDAO();
		$parametrosDecode = json_decode($parametros);
		foreach ($parametrosDecode as $key => $value) {
			$UltimoroljuzgadorDto = new UltimoroljuzgadorDTO();
			$UltimoroljuzgadorDto->setIdProgramacion($value->idProgramacion);
			$UltimoroljuzgadorDto->setNumSemana($value->numSemana);
			$UltimoroljuzgadorDao->borraUltimoRol($UltimoroljuzgadorDto,$proveedor);
		}
		foreach ($parametrosDecode as $key => $valueInsert) {
			$UltimoroljuzgadorDto = new UltimoroljuzgadorDTO();
			$UltimoroljuzgadorDto->setIdJuzgador($valueInsert->idJuzgador);
			$UltimoroljuzgadorDto->setIdProgramacion($valueInsert->idProgramacion);
			$UltimoroljuzgadorDto->setCveRolJuzgador($valueInsert->cveRolJuzgador);
			$UltimoroljuzgadorDto->setAparicion ($valueInsert->aparicion);
			$UltimoroljuzgadorDto->setNumSemana($valueInsert->numSemana);
			if($valueInsert->idJuzgador != 0){
				$UltimoroljuzgadorDtoSelect = new UltimoroljuzgadorDTO();
				$UltimoroljuzgadorDtoSelect->setIdJuzgador($valueInsert->idJuzgador);
				$UltimoroljuzgadorDtoSelect->setIdProgramacion($valueInsert->idProgramacion);
				$UltimoroljuzgadorDtoSelect->setNumSemana($valueInsert->numSemana);
				$validaUltimoRol = $UltimoroljuzgadorDao->selectUltimoroljuzgador($UltimoroljuzgadorDtoSelect);
				if(count($validaUltimoRol)){
					$mensaje["resultados"][] = array("mensaje"=>"ESTE JUZGADOR SE ENCUENTRA OCUPADO");
				}else{
					$UltimoroljuzgadorDao->insertUltimoroljuzgador($UltimoroljuzgadorDto,$proveedor);
					$mensaje["resultados"][] = array("mensaje"=>"SE REGISTRO EXITOSAMENTE");
				}
			}else{
				$mensaje["resultados"][] = array("mensaje"=>"ES NECESARIO ELEGIR UN JUEZ");
			}
		}
		return json_encode($mensaje);
	}
}
?>