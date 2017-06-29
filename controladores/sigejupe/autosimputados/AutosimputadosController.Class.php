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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autosimputados/AutosimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/autosimputados/AutosimputadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
class AutosimputadosController {
private $proveedor;
public function __construct() {
}
public function validarAutosimputados($AutosimputadosDto){
$AutosimputadosDto->setidAutoImputado(strtoupper(str_ireplace("'","",trim($AutosimputadosDto->getidAutoImputado()))));
$AutosimputadosDto->setidActuacion(strtoupper(str_ireplace("'","",trim($AutosimputadosDto->getidActuacion()))));
$AutosimputadosDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($AutosimputadosDto->getidImputadoCarpeta()))));
$AutosimputadosDto->setApelacion(strtoupper(str_ireplace("'","",trim($AutosimputadosDto->getApelacion()))));
return $AutosimputadosDto;
}
public function selectAutosimputados($AutosimputadosDto,$proveedor=null){
$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
$AutosimputadosDao = new AutosimputadosDAO();
$AutosimputadosDto = $AutosimputadosDao->selectAutosimputados($AutosimputadosDto,$proveedor);
return $AutosimputadosDto;
}
public function insertAutosimputados($AutosimputadosDto,$proveedor=null){
	$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
	$AutosimputadosDao = new AutosimputadosDAO();
	$AutosimputadosDto = $AutosimputadosDao->insertAutosimputados($AutosimputadosDto,$proveedor);
    //INSERCION EN BITACORA
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(84,'','txt',  serialize($AutosimputadosDto),'');
	return $AutosimputadosDto;
}
public function updateAutosimputados($AutosimputadosDto,$proveedor=null){
	$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
	$AutosimputadosDao = new AutosimputadosDAO();
	$AutosimputadosDto = $AutosimputadosDao->updateAutosimputados($AutosimputadosDto,$proveedor);
    //INSERCION EN BITACORA
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(85,'','txt',  serialize($AutosimputadosDto),'');
	return $AutosimputadosDto;
}
public function deleteAutosimputados($AutosimputadosDto,$proveedor=null){
$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
$AutosimputadosDao = new AutosimputadosDAO();
$AutosimputadosDto = $AutosimputadosDao->deleteAutosimputados($AutosimputadosDto,$proveedor);
return $AutosimputadosDto;
}
/********************* INICIO - FUNCION PARA LA INSERCION O ACTUALIZACION DE AUTOSIMPUTADOS *********************/
public function deleteAutosimputadosFull($AutosimputadosDto,$proveedor=null){
	$existeAutosimputadosDao = new AutosimputadosDAO();
	$existeAutosimputadosDto = new AutosimputadosDTO();
	$existeAutosimputadosDto->setIdActuacion($AutosimputadosDto->getIdActuacion());
	$existeAutosimputadosDto->setIdImputadoCarpeta($AutosimputadosDto->getIdImputadoCarpeta());
	$existeAutosimputadosDto = $this->selectAutosimputados($existeAutosimputadosDto);
	if(isset($existeAutosimputadosDto[0])){//el autoimputado existe, se actualiza en la tabla
		$idAutosImputados = $existeAutosimputadosDto[0]->getIdAutoImputado();
		$AutosimputadosDto->setIdAutoImputado($idAutosImputados);
	    //INSERCION EN BITACORA
	    $bitacoraController = new BitacoramovimientosController();
	    $bitacoraController->agregar(87,'','txt',  serialize($AutosimputadosDto),'');
	    //ELIMINACION FISICA
		$AutosimputadosDto = $this->deleteAutosimputados($AutosimputadosDto);
	}
	return $AutosimputadosDto;
}
/********************* TERMINO - FUNCION PARA LA INSERCION O ACTUALIZACION DE AUTOSIMPUTADOS *********************/


}
?>