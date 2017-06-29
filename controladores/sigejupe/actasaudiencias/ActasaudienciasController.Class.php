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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actasaudiencias/ActasaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actasaudiencias/ActasaudienciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");    // para descripcion de la relacion de la consulta de oficios
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
if(!isset($_SESSION)){
	session_start();
}
date_default_timezone_set('America/Mexico_City');

class ActasaudienciasController {
private $proveedor;
public function __construct() {
}
public function validarActasaudiencias($ActasaudienciasDto){
$ActasaudienciasDto->setidActasAudiencia(strtoupper(str_ireplace("'","",trim($ActasaudienciasDto->getidActasAudiencia()))));
$ActasaudienciasDto->setidActuacion(strtoupper(str_ireplace("'","",trim($ActasaudienciasDto->getidActuacion()))));
$ActasaudienciasDto->setidAudiencia(strtoupper(str_ireplace("'","",trim($ActasaudienciasDto->getidAudiencia()))));
$ActasaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ActasaudienciasDto->getfechaRegistro()))));
$ActasaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ActasaudienciasDto->getfechaActualizacion()))));
return $ActasaudienciasDto;
}
public function selectActasaudiencias($ActasaudienciasDto,$proveedor=null){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasDao = new ActasaudienciasDAO();
$ActasaudienciasDto = $ActasaudienciasDao->selectActasaudiencias($ActasaudienciasDto,$proveedor);
return $ActasaudienciasDto;
}
public function insertActasaudiencias($ActasaudienciasDto,$proveedor=null){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasDao = new ActasaudienciasDAO();
$ActasaudienciasDto = $ActasaudienciasDao->insertActasaudiencias($ActasaudienciasDto,$proveedor);
return $ActasaudienciasDto;
}
public function updateActasaudiencias($ActasaudienciasDto,$proveedor=null){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasDao = new ActasaudienciasDAO();
//$tmpDto = new ActasaudienciasDTO();
//$tmpDto = $ActasaudienciasDao->selectActasaudiencias($ActasaudienciasDto,$proveedor);
//if($tmpDto!=""){//$ActasaudienciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ActasaudienciasDto = $ActasaudienciasDao->updateActasaudiencias($ActasaudienciasDto,$proveedor);
return $ActasaudienciasDto;
//}
//return "";
}

public function updateAudiencia($ActasaudienciasDto,$proveedor=null){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasDao = new ActasaudienciasDAO();
$ActasaudienciasDto = $ActasaudienciasDao->updateAudiencia($ActasaudienciasDto,$proveedor);
return $ActasaudienciasDto;
}

public function borradoLogico($ActasaudienciasDto,$proveedor=null){
	$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
	$ActasaudienciasDao = new ActasaudienciasDAO();
	$ActasaudienciasDto = $ActasaudienciasDao->borradoLogico($ActasaudienciasDto,$proveedor);
    //INSERCION EN BITACORA
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(34,'BORRADO LOGICO','txt',  serialize($ActasaudienciasDto),'');

	return $ActasaudienciasDto;
}

	public function guardarRelacion($ActasaudienciasDto,$proveedor=null){
		$auxiliar = new ActasaudienciasDTO();
		$auxiliar = $ActasaudienciasDto;

		$idActuacionTmp = $auxiliar->getIdActuacion();
		$idAudienciaTmp = $auxiliar->getIdAudiencia();
		//asignaciOn de variables para la verificaciOn de relaciOn previa
		//validar si la relaciOn ya existe
		$ActasaudienciasDto->setActivo('N');
		$ActasaudienciasDto->setIdActuacion('');
		$ActasaudienciasDao = new ActasaudienciasDAO();
		$idExistente = $ActasaudienciasDao->selectActasaudienciasRegistrado($ActasaudienciasDto,$proveedor);
	    $bitacoraController = new BitacoramovimientosController();
		if($idExistente == 0){
			//si no existe, insertar
			/*************** INSERCION DE LA RELACION *********************/
			$ActasaudienciasDao2 = new ActasaudienciasDAO();
			$auxiliar->setIdActuacion($idActuacionTmp);
			$auxiliar->setIdAudiencia($idAudienciaTmp);
			$ActasaudienciasDao2 = $ActasaudienciasDao2->insertActasaudiencias($auxiliar,$proveedor);
		    //INSERCION EN BITACORA
	        $bitacoraController->agregar(32,'INSERCION','txt',  serialize($ActasaudienciasDao2),'');
			return $ActasaudienciasDao2;
		}elseif($idExistente > 0){
			//si exite, acualizar
			/*************** ACTUALIZACION DE LA RELACION *********************/
			$ActasaudienciasDao3 = new ActasaudienciasDAO();
			$auxiliar->setIdActuacion($idActuacionTmp);
			$auxiliar->setIdAudiencia($idAudienciaTmp);
			$auxiliar->setActivo('S');
			$auxiliar->setIdActasAudiencia($idExistente);
			$ActasaudienciasDao3 = $ActasaudienciasDao3->updateActasaudiencias($auxiliar,$proveedor);
		    //INSERCION EN BITACORA
	        $bitacoraController->agregar(33,'ACTUALIZACION','txt',  serialize($ActasaudienciasDao3),'');
			return $ActasaudienciasDao3;
		}
			
	}

public function deleteActasaudiencias($ActasaudienciasDto,$proveedor=null){
$ActasaudienciasDto=$this->validarActasaudiencias($ActasaudienciasDto);
$ActasaudienciasDao = new ActasaudienciasDAO();
$ActasaudienciasDto = $ActasaudienciasDao->deleteActasaudiencias($ActasaudienciasDto,$proveedor);
return $ActasaudienciasDto;
}
}
?>