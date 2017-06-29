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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/certificaciones/CertificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/certificaciones/CertificacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
date_default_timezone_set('America/Mexico_City');
class CertificacionesController {
private $proveedor;
public function __construct() {
}
public function validarCertificaciones($CertificacionesDto){
$CertificacionesDto->setIdCertificacion(strtoupper(str_ireplace("'","",trim($CertificacionesDto->getIdCertificacion()))));
$CertificacionesDto->setIdActuacion(strtoupper(str_ireplace("'","",trim($CertificacionesDto->getIdActuacion()))));
$CertificacionesDto->setNumEmpleadoAutCertificacion(strtoupper(str_ireplace("'","",trim($CertificacionesDto->getNumEmpleadoAutCertificacion()))));
$CertificacionesDto->setLugarCertificacion(strtoupper(str_ireplace("'","",trim($CertificacionesDto->getLugarCertificacion()))));
$CertificacionesDto->setHoraCertificacion(strtoupper(str_ireplace("'","",trim($CertificacionesDto->getHoraCertificacion()))));
return $CertificacionesDto;
}
public function selectCertificaciones($CertificacionesDto,$proveedor=null){
$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
$CertificacionesDao = new CertificacionesDao();
$CertificacionesDto = $CertificacionesDao->selectCertificaciones($CertificacionesDto,$proveedor);
return $CertificacionesDto;
}
public function insertCertificaciones($CertificacionesDto,$proveedor=null){
	$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
	$CertificacionesDao = new CertificacionesDao();
	$CertificacionesDto = $CertificacionesDao->insertCertificaciones($CertificacionesDto,$proveedor);
    //INSERCION EN BITACORA
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(51,'INSERCION tblcertificaciones','dto', $CertificacionesDto,'');
return $CertificacionesDto;
}
public function updateCertificaciones($CertificacionesDto,$proveedor=null){
	$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
	$CertificacionesDao = new CertificacionesDao();
    //obtencion de datos previos a la actualizacion
    $CertificacionesDTOPrevios = new CertificacionesDTO();
    $CertificacionesDAOPrevio = new CertificacionesDAO();
    $CertificacionesDTOPrevios->setIdCertificacion($CertificacionesDto->getIdCertificacion());
    $CertificacionesDTOPrevios = $CertificacionesDAOPrevio->selectCertificaciones($CertificacionesDTOPrevios);
    //actualizacion
	$CertificacionesDto = $CertificacionesDao->updateCertificaciones($CertificacionesDto,$proveedor);
    //insercion en bitacora
    $bitacoraController = new BitacoramovimientosController();
    $bitacoraController->agregar(52,'ACTUALIZACION tblactuaciones','dto', $CertificacionesDto, $CertificacionesDTOPrevios);
	return $CertificacionesDto;
}
public function deleteCertificaciones($CertificacionesDto,$proveedor=null){
$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
$CertificacionesDao = new CertificacionesDao();
$CertificacionesDto = $CertificacionesDao->deleteCertificaciones($CertificacionesDto,$proveedor);
return $CertificacionesDto;
}
}
?>