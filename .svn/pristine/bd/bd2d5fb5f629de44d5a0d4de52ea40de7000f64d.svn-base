<?php
date_default_timezone_set("America/Mexico_City");
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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
if(session_status() == PHP_SESSION_NONE){
	@session_start();
}            

class BitacoramovimientosController {
private $proveedor;
public function __construct() {
}
public function validarBitacoramovimientos($BitacoramovimientosDto){
$BitacoramovimientosDto->setidBitacoraMovimiento(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getidBitacoraMovimiento()))));
$BitacoramovimientosDto->setcveAccion(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getcveAccion()))));
$BitacoramovimientosDto->setfechaMovimiento(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getfechaMovimiento()))));
$BitacoramovimientosDto->setobservaciones(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getobservaciones()))));
$BitacoramovimientosDto->setcveUsuario(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getcveUsuario()))));
$BitacoramovimientosDto->setcvePerfil(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getcvePerfil()))));
$BitacoramovimientosDto->setcveAdscripcion(strtoupper(str_ireplace("'","",trim($BitacoramovimientosDto->getcveAdscripcion()))));
return $BitacoramovimientosDto;
}
public function selectBitacoramovimientos($BitacoramovimientosDto,$proveedor=null){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosDao = new BitacoramovimientosDAO();
$BitacoramovimientosDto = $BitacoramovimientosDao->selectBitacoramovimientos($BitacoramovimientosDto,$proveedor);
return $BitacoramovimientosDto;
}
public function insertBitacoramovimientos($BitacoramovimientosDto,$proveedor=null){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosDao = new BitacoramovimientosDAO();
$BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto,$proveedor);
return $BitacoramovimientosDto;
}
public function updateBitacoramovimientos($BitacoramovimientosDto,$proveedor=null){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosDao = new BitacoramovimientosDAO();
//$tmpDto = new BitacoramovimientosDTO();
//$tmpDto = $BitacoramovimientosDao->selectBitacoramovimientos($BitacoramovimientosDto,$proveedor);
//if($tmpDto!=""){//$BitacoramovimientosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$BitacoramovimientosDto = $BitacoramovimientosDao->updateBitacoramovimientos($BitacoramovimientosDto,$proveedor);
return $BitacoramovimientosDto;
//}
//return "";
}
public function deleteBitacoramovimientos($BitacoramovimientosDto,$proveedor=null){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosDao = new BitacoramovimientosDAO();
$BitacoramovimientosDto = $BitacoramovimientosDao->deleteBitacoramovimientos($BitacoramovimientosDto,$proveedor);
return $BitacoramovimientosDto;
}
	/**
	* FunciOn para gregar un registro a la Bitacora
	*@param $idAccion Debe corresponder al ID de la acciOn de la tabla -tblacciones-
	*@param $txtAccion Debe contener un breve texto informativo referente a la accion. Ej: INSERCION
	*@param $tipoObservacion Recibe unicamente 'txt' o 'dto' como valores; con 'txt' se agrega un texto libre, con 'dto' se envIa el DTO del CRUD
	*@param $observacion Recibe texto libre o un DTO
	*@param $observacionPrevia Recibe texto libre o un DTO, usado para la actulizacion, corresponde a los datos previos a la actualizaciOn
	*/
	public function agregar($idAccion,$txtAccion,$tipoObservacion='txt',$observacion,$observacionPrevia=null, $proveedor  = null){
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        
	    $CveUsuario = $_SESSION['cveUsuarioSistema'];
	    $CvePerfil = $_SESSION['cvePerfil'];
	    $CveAdscripcion = $_SESSION['cveAdscripcion'];

	    $bitacoraDTO = new BitacoramovimientosDTO();
	    $bitacoraDTO->setCveAccion($idAccion); 
	    $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); 
	    if($tipoObservacion == 'dto'){
	    	if($observacion!=""){
			    $dtoToJson = new DtoToJson($observacion);
			    $observacion = $dtoToJson->toJson($txtAccion);
			    if($observacionPrevia!="" && is_array($observacionPrevia)){
			    	$dtoToJsonPrevia = new DtoToJson($observacionPrevia);
				    $bitacoraDTO->setObservaciones(' ===DATOS PREVIOS A LA ACTUALIZACION=== ' . $dtoToJsonPrevia->toJson($txtAccion) . ' >>>DATOS NUEVOS>>> ' . $observacion);
			    }else{
				    $bitacoraDTO->setObservaciones($observacion); 
			    }
			}else{ // el dto viene vacio
				$bitacoraDTO->setObservaciones('ERROR en el envIo del DTO, estA vacIo.'); 
			}
		}elseif ($tipoObservacion == 'txt') {
	 	   $bitacoraDTO->setObservaciones($observacion); 
			/*if(!isset($observacionPrevia)){
		 	   $bitacoraDTO->setObservaciones($observacion); 
			}else{
		 	   $bitacoraDTO->setObservaciones($observacionPrevia . ' >>> ' . $observacion); 
			}*/
		}
	    $bitacoraDTO->setCveUsuario($CveUsuario);
	    $bitacoraDTO->setCvePerfil($CvePerfil); // variable de session
	    $bitacoraDTO->setCveAdscripcion($CveAdscripcion); // variable de session
	    $bitacoraDTO = $this->insertBitacoramovimientos($bitacoraDTO, $this->proveedor);
	    return $bitacoraDTO;
	}
}
?>
