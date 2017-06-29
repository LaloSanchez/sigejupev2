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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuacionesestatus/ActuacionesestatusDAO.Class.php");
//etsatus
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatus/EstatusDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
date_default_timezone_set('America/Mexico_City');
class ActuacionesestatusController {
private $proveedor;
public function __construct() {
}
public function validarActuacionesestatus($ActuacionesestatusDto){
$ActuacionesestatusDto->setidActuacionesEstatus(strtoupper(str_ireplace("'","",trim($ActuacionesestatusDto->getidActuacionesEstatus()))));
$ActuacionesestatusDto->setidActuacion(strtoupper(str_ireplace("'","",trim($ActuacionesestatusDto->getidActuacion()))));
$ActuacionesestatusDto->setcveEstatus(strtoupper(str_ireplace("'","",trim($ActuacionesestatusDto->getcveEstatus()))));
$ActuacionesestatusDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ActuacionesestatusDto->getfechaRegistro()))));
$ActuacionesestatusDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ActuacionesestatusDto->getfechaActualizacion()))));
$ActuacionesestatusDto->setactivo(strtoupper(str_ireplace("'","",trim($ActuacionesestatusDto->getactivo()))));
return $ActuacionesestatusDto;
}
public function selectActuacionesestatus($ActuacionesestatusDto,$proveedor=null){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusDao = new ActuacionesestatusDAO();
$ActuacionesestatusDto = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto,$proveedor);
return $ActuacionesestatusDto;
}
public function insertActuacionesestatus($ActuacionesestatusDto,$proveedor=null){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusDao = new ActuacionesestatusDAO();
$ActuacionesestatusDto = $ActuacionesestatusDao->insertActuacionesestatus($ActuacionesestatusDto,$proveedor);
return $ActuacionesestatusDto;
}
public function updateActuacionesestatus($ActuacionesestatusDto,$proveedor=null){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusDao = new ActuacionesestatusDAO();
//$tmpDto = new ActuacionesestatusDTO();
//$tmpDto = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto,$proveedor);
//if($tmpDto!=""){//$ActuacionesestatusDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ActuacionesestatusDto = $ActuacionesestatusDao->updateActuacionesestatus($ActuacionesestatusDto,$proveedor);
return $ActuacionesestatusDto;
//}
//return "";
}
public function updateActuacionesestatusJuez($ActuacionesestatusDto,$proveedor=null){
	$respuesta = '';
	$estatusBase = 0;
	$estatus = 'ERROR';
	$idActuacionEstatus = 'null';
	$idActuacion = 'null';
	$cveEstatus = 'null';
	$desEstatus = '-----';
	$estatusEntrada = $ActuacionesestatusDto->getCveEstatus();
	$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
	$ActuacionesestatusDao = new ActuacionesestatusDAO();
	$ActuacionesestatusDTO2 = new ActuacionesestatusDTO();
	//obtencion de los datos actuales
	$ActuacionesestatusDTO2->setIdActuacionesEstatus( $ActuacionesestatusDto->getIdActuacionesEstatus() );
	$ActuacionesestatusDTO2 = $ActuacionesestatusDao->selectActuacionesestatus( $ActuacionesestatusDTO2 );
	if( $ActuacionesestatusDTO2 != '' ){
		$estatusBase = $ActuacionesestatusDTO2[0]->getCveEstatus();
	}

	$actualizacion = false;
	switch ($estatusBase) {
		case 35: //esta registrada
			$actualizacion = ( $estatusEntrada == 36 ) ? true : false; //solo cambia a Revisada por el Juez
			break;
		case 36: //esta revisada por el juez
			$actualizacion = ( $estatusEntrada == 37 || $estatusEntrada == 38 || $estatusEntrada == 41 ) ? true : false; //puede cambiar a Acordada o Resuelta por el Juez o Cancelada
			break;
		case 37: //esta acordada por el juez
			$actualizacion = ( $estatusEntrada == 39 ) ? true : false; //solo cambia a Revisada por el Consejo
			break;
		case 39: //esta revisada por el consejo
			$actualizacion = ( $estatusEntrada == 40 ) ? true : false; //solo cambia a Resuelta por el Consejo
			break;
		default: //38( resuelta por el juez), 40(resuelta por el consejo)
			$actualizacion = false;
			break;
	}

	if( $actualizacion ){
		//actualizacion del estado
		$ActuacionesestatusDto->setFechaActualizacion( date("Y-m-d H:i:s") );
		$ActuacionesestatusDto = $ActuacionesestatusDao->updateActuacionesestatus($ActuacionesestatusDto,$proveedor);
		if( $ActuacionesestatusDto != '' ){
			//obtencion de la descripcion del estatus
			$descEstatus = '';
			$EstatusDTO = new EstatusDTO();
			$EstatusDAO = new EstatusDAO();
			$EstatusDTO->setCveEstatus( $ActuacionesestatusDto[0]->getCveEstatus() );
			$EstatusDTO = $EstatusDAO->selectEstatus( $EstatusDTO );
			if( $EstatusDTO != '' ){
				$descEstatus = $EstatusDTO[0]->getDescEstatus();
			}

			$estatus = 'OK';
			$idActuacionEstatus = $ActuacionesestatusDto[0]->getIdActuacionesEstatus();
			$idActuacion = $ActuacionesestatusDto[0]->getIdActuacion();
			$cveEstatus = $ActuacionesestatusDto[0]->getCveEstatus();
			$desEstatus = $descEstatus;
		}
	}
	$respuesta = array('estatus'=>$estatus,'idActuacionEstatus'=>$idActuacionEstatus,'idActuacion'=>$idActuacion,'cveEstatus'=>$cveEstatus,'descEstatus'=>$desEstatus);

	return json_encode( $respuesta );
}

public function deleteActuacionesestatus($ActuacionesestatusDto,$proveedor=null){
$ActuacionesestatusDto=$this->validarActuacionesestatus($ActuacionesestatusDto);
$ActuacionesestatusDao = new ActuacionesestatusDAO();
$ActuacionesestatusDto = $ActuacionesestatusDao->deleteActuacionesestatus($ActuacionesestatusDto,$proveedor);
return $ActuacionesestatusDto;
}
}
?>