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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autosapelados/AutosapeladosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/autosapelados/AutosapeladosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AutosapeladosController {
private $proveedor;
public function __construct() {
}
public function validarAutosapelados($AutosapeladosDto){
$AutosapeladosDto->setIdAutoApelado(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getIdAutoApelado()))));
$AutosapeladosDto->setIdAutoImputado(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getIdAutoImputado()))));
$AutosapeladosDto->setCveSentido(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getCveSentido()))));
$AutosapeladosDto->setNumToca(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getNumToca()))));
$AutosapeladosDto->setAnioToca(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getAnioToca()))));
$AutosapeladosDto->setCveSala(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getCveSala()))));
$AutosapeladosDto->setFechaRegistro(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getFechaRegistro()))));
$AutosapeladosDto->setFechaActualizacion(strtoupper(str_ireplace("'","",trim($AutosapeladosDto->getFechaActualizacion()))));
return $AutosapeladosDto;
}
public function selectAutosapelados($AutosapeladosDto,$proveedor=null){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosDao = new AutosapeladosDAO();
$AutosapeladosDto = $AutosapeladosDao->selectAutosapelados($AutosapeladosDto,$proveedor);
return $AutosapeladosDto;
}
public function insertAutosapelados($AutosapeladosDto,$proveedor=null){
	$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
	$AutosapeladosDao = new AutosapeladosDAO();
	$AutosapeladosDto = $AutosapeladosDao->insertAutosapelados($AutosapeladosDto,$proveedor);
    //INSERCION EN BITACORA
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(88,'','txt',  serialize($AutosapeladosDto),'');
	return $AutosapeladosDto;
}
public function updateAutosapelados($AutosapeladosDto,$proveedor=null){
	$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
	$AutosapeladosDao = new AutosapeladosDAO();
	$AutosapeladosDto = $AutosapeladosDao->updateAutosapelados($AutosapeladosDto,$proveedor);
    //INSERCION EN BITACORA
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(89,'','txt',  serialize($AutosapeladosDto),'');
	return $AutosapeladosDto;
}
public function deleteAutosapelados($AutosapeladosDto,$proveedor=null){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosDao = new AutosapeladosDAO();
$AutosapeladosDto = $AutosapeladosDao->deleteAutosapelados($AutosapeladosDto,$proveedor);
return $AutosapeladosDto;
}
/************* FUNCIONES NUEVAS ******************/
public function deleteAutosapeladosImputado($AutosapeladosDto,$proveedor=null){
	//asignar Id de AutoImputado
	$idAutoImputado = $AutosapeladosDto->getIdAutoImputado();
	$tmpAutosapeladosDto = new AutosapeladosDTO;
	$tmpAutosapeladosDao = new AutosapeladosDAO;
	$tmpAutosapeladosDto->setIdAutoImputado($idAutoImputado);
	$tmpAutosapeladosDto = $tmpAutosapeladosDao->selectAutosapelados($tmpAutosapeladosDto);
	if(isset($tmpAutosapeladosDto[0])){
		$idAutoApelado = $tmpAutosapeladosDto[0]->getIdAutoApelado();
		$AutosapeladosDto->setIdAutoApelado($idAutoApelado);
	    //INSERCION EN BITACORA
	    $bitacoraController = new BitacoramovimientosController();
	    $bitacoraController->agregar(91,'','txt',  serialize($AutosapeladosDto),'');
		$AutosapeladosDto = $tmpAutosapeladosDao->deleteAutosapelados($AutosapeladosDto);
	}
	return $AutosapeladosDto;
}
/************** FIN FUNCIONES NUEVAS ****************/

}
?>