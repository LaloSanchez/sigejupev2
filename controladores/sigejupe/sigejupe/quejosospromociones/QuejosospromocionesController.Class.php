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
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejosospromociones/QuejosospromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/quejosospromociones/QuejosospromocionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");
//actuaciones
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
//quejosos promociones
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejosospromociones/QuejosospromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/quejosospromociones/QuejosospromocionesDAO.Class.php");
//queja promocion
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejapromociones/QuejapromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/quejapromociones/QuejapromocionesDAO.Class.php");
//actuaciones estatus
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuacionesestatus/ActuacionesestatusDAO.Class.php");
//tipos carpeta
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//estatus
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatus/EstatusDAO.Class.php");
//juzgadores
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
//tipos personas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");
//generos
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
//municipios
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
//imputados carpetas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
//ofendidos carpetas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
//juzgados
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");

class QuejosospromocionesController {
private $proveedor;
public function __construct() {
}
public function validarQuejosospromociones($QuejosospromocionesDto){
$QuejosospromocionesDto->setidQuejosoProm(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getidQuejosoProm()))));
$QuejosospromocionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getidActuacion()))));
$QuejosospromocionesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getidImputadoCarpeta()))));
$QuejosospromocionesDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getidOfendidoCarpeta()))));
$QuejosospromocionesDto->setpaternoQ(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getpaternoQ()))));
$QuejosospromocionesDto->setmaternoQ(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getmaternoQ()))));
$QuejosospromocionesDto->setnombreQ(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getnombreQ()))));
$QuejosospromocionesDto->setNombreMoral(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getNombreMoral()))));
$QuejosospromocionesDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getcveTipoPersona()))));
$QuejosospromocionesDto->setcveGenero(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getcveGenero()))));
$QuejosospromocionesDto->setdomicilio(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getdomicilio()))));
$QuejosospromocionesDto->setemail(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getemail()))));
$QuejosospromocionesDto->settelefono(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->gettelefono()))));
$QuejosospromocionesDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getcveMunicipio()))));
$QuejosospromocionesDto->setactivo(strtoupper(str_ireplace("'","",trim($QuejosospromocionesDto->getactivo()))));
return $QuejosospromocionesDto;
}
public function selectQuejosospromociones($QuejosospromocionesDto,$proveedor=null){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesDao = new QuejosospromocionesDAO();
$QuejosospromocionesDto = $QuejosospromocionesDao->selectQuejosospromociones($QuejosospromocionesDto,$proveedor);
return $QuejosospromocionesDto;
}
public function insertQuejosospromociones($QuejosospromocionesDto,$proveedor=null){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesDao = new QuejosospromocionesDAO();
$QuejosospromocionesDto = $QuejosospromocionesDao->insertQuejosospromociones($QuejosospromocionesDto,$proveedor);
return $QuejosospromocionesDto;
}
public function updateQuejosospromociones($QuejosospromocionesDto,$proveedor=null){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesDao = new QuejosospromocionesDAO();
//$tmpDto = new QuejosospromocionesDTO();
//$tmpDto = $QuejosospromocionesDao->selectQuejosospromociones($QuejosospromocionesDto,$proveedor);
//if($tmpDto!=""){//$QuejosospromocionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$QuejosospromocionesDto = $QuejosospromocionesDao->updateQuejosospromociones($QuejosospromocionesDto,$proveedor);
return $QuejosospromocionesDto;
//}
//return "";
}
public function deleteQuejosospromociones($QuejosospromocionesDto,$proveedor=null){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesDao = new QuejosospromocionesDAO();
$QuejosospromocionesDto = $QuejosospromocionesDao->deleteQuejosospromociones($QuejosospromocionesDto,$proveedor);
return $QuejosospromocionesDto;
}

	public function guardaQueja($QuejosospromocionesDto, $params){
	    $proveedor = new Proveedor('mysql', 'sigejupe');
	    $proveedor->connect();
	    $proveedor->execute("BEGIN");
	    $statusTransaccion = 0;
	    $mensaje = '';
	    $actuacion = '';

		//Proceso: 1.Registrar Actuacion. 2.Registrar QuejososPromociones. 3.Registrar QuejaPromociones. 4.Registrar ActuacionesEstatus
		//Proceso 1
		//$idActuacion = $QuejosospromocionesDto->getIdActuacion();
		$idActuacion = '0';
		$idAsignacionNumero = $params["idAsignacionNumero"];
 		$numActuacionManual = $params["numActuacionManual"];
		$anioActuacionManual = $params["anioActuacionManual"];
		$idReferencia = $params['idReferencia'];
		$cveCarpeta = $params['cveCarpeta'];
		$numero = $params['numero'];
		$anio = $params['anio'];
		$fojas = $params['fojas'];
		$sintesis = $params['sintesis'];
		$txtQueja = $params['txtQueja'];
		$emailNotificacion = $params['emailNotificacion'];

		//guardar en -actuaciones-
		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		//definiciOn de variables para obtener los valores del contador
	    $cveTipoActuacion = '27'; //dato fijo
	    $cveJuzgado = $params['cveJuzgado'];
	    if( $idAsignacionNumero == 1){
		    $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion);
		    $numActuacion = $numActuacion[0]->getNumero();
		    $aniActuacion = date("Y");
		}else{
		    $numActuacion = $numActuacionManual;
		    $aniActuacion = $anioActuacionManual;
		}
		$ActuacionesDTO->setCveUsuario( $_SESSION["cveUsuarioSistema"] );
		$ActuacionesDTO->setNumActuacion( $numActuacion );
		$ActuacionesDTO->setAniActuacion( $aniActuacion );
		$ActuacionesDTO->setCveTipoActuacion( $cveTipoActuacion );
		$ActuacionesDTO->setCveJuzgado( $cveJuzgado );
		$ActuacionesDTO->setIdReferencia( $idReferencia );
		$ActuacionesDTO->setCveTipoCarpeta( $cveCarpeta );
		$ActuacionesDTO->setNumero( $numero );
		$ActuacionesDTO->setAnio( $anio );
		$ActuacionesDTO->setNoFojas( $fojas );
		$ActuacionesDTO->setSintesis( strtoupper(str_ireplace("'","",trim( $sintesis))) );
		$ActuacionesDTO->setObservaciones( str_ireplace("'","",trim( $txtQueja)) );
		$ActuacionesDTO->setActivo( 'S' );
		$ActuacionesDTO = $ActuacionesDAO->insertActuaciones( $ActuacionesDTO, $proveedor );
		if( $ActuacionesDTO != ''){
			$statusTransaccion = 1;
			$estatus = 'OK';
			$idActuacion = $ActuacionesDTO[0]->getIdActuacion();
			$numActuacion = $ActuacionesDTO[0]->getNumActuacion();
			$aniActuacion = $ActuacionesDTO[0]->getAniActuacion();
			$idQuejososProm = '';
			$idQuejaProm = '';
			$idActuacionesEstatus = '';

			//Proceso 2
			//validacion de tipo de persona		
			$quienEmiteQueja = $params['idQuienEmiteQueja'];
			$idsQuejosos = json_decode( $params['idsQuejosos'] );
			$insercionQuejosos = false;
			if( $quienEmiteQueja == 1 ){ //fue emitida por un imputado
				foreach ($idsQuejosos as $idQuejoso) {
					$QuejosospromocionesDTO = new QuejosospromocionesDTO();
					$QuejosospromocionesDAO = new QuejosospromocionesDAO();
					$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
					$QuejosospromocionesDTO->setIdImputadoCarpeta( $idQuejoso );
					$QuejosospromocionesDTO->setEmail( $emailNotificacion );
					$QuejosospromocionesDTO->setActivo( 'S' );
					$QuejosospromocionesDTO = $QuejosospromocionesDAO->insertQuejosospromociones( $QuejosospromocionesDTO , $proveedor);
					if( $QuejosospromocionesDTO != '' ){

						$statusTransaccion = 1;
						$insercionQuejosos = true;
					}else{
						$statusTransaccion = 0;
						$insercionQuejosos = false;
						$mensaje = "No se insert&oacute; la informaci&oacute;n del Quejoso - Imputado. ";
						break;
					}
				}
			}elseif( $quienEmiteQueja == 2 ){ //fue emitida por un ofendido
				foreach ($idsQuejosos as $idQuejoso) {
					$QuejosospromocionesDTO = new QuejosospromocionesDTO();
					$QuejosospromocionesDAO = new QuejosospromocionesDAO();
					$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
					$QuejosospromocionesDTO->setIdOfendidoCarpeta( $idQuejoso );
					$QuejosospromocionesDTO->setEmail( $emailNotificacion );
					$QuejosospromocionesDTO->setActivo( 'S' );
					$QuejosospromocionesDTO = $QuejosospromocionesDAO->insertQuejosospromociones( $QuejosospromocionesDTO , $proveedor);
					if( $QuejosospromocionesDTO != '' ){
						$statusTransaccion = 1;
						$insercionQuejosos = true;
					}else{
						$statusTransaccion = 0;
						$insercionQuejosos = false;
						$mensaje = "No se insert&oacute; la informaci&oacute;n del Quejoso - Ofendido. ";
						break;
					}
				}
			}elseif( $quienEmiteQueja == 3 ){ //fue emitida por otra persona
				foreach (json_decode($params['datosQuejosos']) as $datosQuejoso) {
					//print_r($datosQuejoso->tipoPersona);
					$QuejosospromocionesDAO = new QuejosospromocionesDAO();
					$QuejosospromocionesDTO = new QuejosospromocionesDTO();
					$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
					if( $datosQuejoso->tipoPersona == 1 ){ //persona fisica
						$QuejosospromocionesDTO->setPaternoQ( strtoupper($datosQuejoso->quejosoPaterno) );
						$QuejosospromocionesDTO->setMaternoQ( strtoupper($datosQuejoso->quejosoMaterno) );
						$QuejosospromocionesDTO->setNombreQ( strtoupper($datosQuejoso->quejosoNombre) );
					}else{ //persona moral y otra
						$QuejosospromocionesDTO->setNombreMoral( strtoupper($datosQuejoso->quejosoNombre) );
					}
					$QuejosospromocionesDTO->setCveTipoPersona( $datosQuejoso->tipoPersona );
					$QuejosospromocionesDTO->setCveGenero( $datosQuejoso->quejosoGenero );
					$QuejosospromocionesDTO->setDomicilio( $datosQuejoso->quejosoDomicilio );
					$QuejosospromocionesDTO->setEmail( $datosQuejoso->quejosoCorreo );
					$QuejosospromocionesDTO->setTelefono( $datosQuejoso->quejosoTelefono );
					$QuejosospromocionesDTO->setCveMunicipio( $datosQuejoso->quejosoMunicipio );
					$QuejosospromocionesDTO->setActivo( 'S' );
					$QuejosospromocionesDTO = $QuejosospromocionesDAO->insertQuejosospromociones( $QuejosospromocionesDTO, $proveedor);
					if( $QuejosospromocionesDTO != '' ){
						$statusTransaccion = 1;
						$insercionQuejosos = true;
					}else{
						$statusTransaccion = 0;
						$insercionQuejosos = false;
						$mensaje = "No se insert&oacute; la informaci&oacute;n del Quejoso - Otro. ";
						break;
					}
				}
			}
			if( $QuejosospromocionesDTO != '' ){
				foreach ($QuejosospromocionesDTO as $Quejosospromociones) {
					$idQuejososProm[] = $Quejosospromociones->getIdQuejosoProm();
				}
			}

			//Proceso 3
			$insercionJuez = false;
			if( $insercionQuejosos == true ){
				$QuejaPromocionesDAO = new QuejapromocionesDAO();
				$QuejaPromocionesDTO = new QuejapromocionesDTO();
				$QuejaPromocionesDTO->setIdActuacion( $idActuacion );
				$QuejaPromocionesDTO->setIdJuzgador( $params["idJuzgador"] );
				$QuejaPromocionesDTO->setActivo( 'S' );
				$QuejaPromocionesDTO = $QuejaPromocionesDAO->insertQuejapromociones( $QuejaPromocionesDTO, $proveedor );
				if( $QuejaPromocionesDTO != '' ){
					$idQuejaProm = $QuejaPromocionesDTO[0]->getIdQuejaProm();
					$statusTransaccion = 1;
					$insercionJuez = true;
				}else{
					$statusTransaccion = 0;
					$mensaje .= "No se insert&oacute; la Informaci&oacute;n del Juez. ";
				}
			}

			//proceso 4
			if( $insercionJuez == true ){
				$ActuacionesestatusDAO = new ActuacionesestatusDAO();
				$ActuacionesestatusDTO = new ActuacionesestatusDTO();
				$ActuacionesestatusDTO->setIdActuacion( $idActuacion );
				$ActuacionesestatusDTO->setCveEstatus( '35' );
				$ActuacionesestatusDTO->setActivo( 'S' );
				$ActuacionesestatusDTO = $ActuacionesestatusDAO->insertActuacionesestatus( $ActuacionesestatusDTO, $proveedor);
				if( $ActuacionesestatusDTO != '' ){
					$idActuacionesEstatus = $ActuacionesestatusDTO[0]->getIdActuacionesEstatus();
					$statusTransaccion = 1;
				}else{
					$statusTransaccion = 0;
					$mensaje .= "No se insert&oacute; el Estatus de la Queja. ";
				}
			}

			$actuacion = array('idActuacion'=>$idActuacion,'numActuacion'=>$numActuacion,'aniActuacion'=>$aniActuacion,'idQuejososProm'=>$idQuejososProm,'idQuejaProm'=>$idQuejaProm,'idActuacionesEstatus'=>$idActuacionesEstatus);
		}else{
			$statusTransaccion = 0;
		}

		if( $statusTransaccion == 1){
			$proveedor->execute("COMMIT");
			$estatus = 'OK';
			$mensaje .= 'La Queja se guard&oacute; correctamente.';
		}else{
			$proveedor->execute("ROLLBACK");
			$estatus = 'ERROR';
			$mensaje .= 'Error. No se guard&oacute; la Queja. Intente nuevamente.';
		}
		$proveedor->close();

		$respuesta = array('estatus'=>$estatus,'mensaje'=>$mensaje,'datos'=>$actuacion);
		return json_encode($respuesta);
	}

	public function actualizaQueja($QuejosospromocionesDto, $params){
	    $proveedor = new Proveedor('mysql', 'sigejupe');
	    $proveedor->connect();
	    $proveedor->execute("BEGIN");
	    $statusTransaccion = 0;
	    $mensaje = '';
	    $actuacion = '';

		//Proceso: 1.Actualizar Actuacion. 2.Actualizar QuejososPromociones. 3.Actualizar QuejaPromociones.
		//Proceso 1
		$idActuacion = $QuejosospromocionesDto->getIdActuacion();
		$idAsignacionNumero = $params["idAsignacionNumero"];
 		$numActuacionManual = $params["numActuacionManual"];
		$anioActuacionManual = $params["anioActuacionManual"];
		$idReferencia = $params['idReferencia'];
		$cveCarpeta = $params['cveCarpeta'];
		$numero = $params['numero'];
		$anio = $params['anio'];
		$fojas = $params['fojas'];
		$sintesis = $params['sintesis'];
		$txtQueja = $params['txtQueja'];
		$emailNotificacion = $params['emailNotificacion'];

		//guardar en -actuaciones-
		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		//definiciOn de variables para obtener los valores del contador
		$ActuacionesDTO->setCveUsuario( $_SESSION["cveUsuarioSistema"] );
		$ActuacionesDTO->setIdActuacion( $idActuacion );
		$ActuacionesDTO->setNumActuacion( $numActuacion );
		$ActuacionesDTO->setAniActuacion( $aniActuacion );
		$ActuacionesDTO->setNumero( $numero );
		$ActuacionesDTO->setAnio( $anio );
		$ActuacionesDTO->setNoFojas( $fojas );
		$ActuacionesDTO->setSintesis( strtoupper(str_ireplace("'","",trim( $sintesis))) );
		$ActuacionesDTO->setObservaciones( $txtQueja );
		error_log('*************************************************************************************');
		error_log($ActuacionesDTO->getObservaciones());
		$ActuacionesDTO->setActivo( 'S' );
		$ActuacionesDTO->setFechaActualizacion( date("Y-m-d H:i:s") );
		$ActuacionesDTO = $ActuacionesDAO->updateActuaciones( $ActuacionesDTO, $proveedor );
		if( $ActuacionesDTO != ''){
			$statusTransaccion = 1;
			$estatus = 'OK';
			$idActuacion = $ActuacionesDTO[0]->getIdActuacion();
			$numActuacion = $ActuacionesDTO[0]->getNumActuacion();
			$aniActuacion = $ActuacionesDTO[0]->getAniActuacion();
			$idQuejososProm = '';
			$idQuejaProm = '';
			$idActuacionesEstatus = '';

			//Proceso 2
			//descativa a todos los quejosos relacionados con la actuacion
			$QuejosospromocionesDTO3 = new QuejosospromocionesDTO();
			$QuejosospromocionesDAO = new QuejosospromocionesDAO();
			$QuejosospromocionesDTO3->setIdActuacion( $idActuacion );
			$QuejosospromocionesDTO3->setActivo( 'S' );
			$QuejosospromocionesDTO3 = $QuejosospromocionesDAO->selectQuejosospromociones( $QuejosospromocionesDTO3,'', $proveedor );
			if( $QuejosospromocionesDTO3 != '' ){
				//obtencion de los ids a actualizar
				foreach ($QuejosospromocionesDTO3 as $Quejosospromociones) {
					$idsQuejosospromociones[] = $Quejosospromociones->getIdQuejosoProm();
				}
				//actualizacion de los registros
				foreach ($idsQuejosospromociones as $idsQuejosos) {
					$QuejosospromocionesDTO2 = new QuejosospromocionesDTO();
					$QuejosospromocionesDTO2->setIdQuejosoProm( $idsQuejosos );
					$QuejosospromocionesDTO2->setActivo( 'N' );
					$QuejosospromocionesDTO2 = $QuejosospromocionesDAO->updateQuejosospromociones( $QuejosospromocionesDTO2,$proveedor );
					if( $QuejosospromocionesDTO2 != '' ){
						$statusTransaccion = 1;
						$estatus = 'OK';
					}else{
						$statusTransaccion = 0;
						$estatus = 'ERROR';
						$mensaje .= "No se actualiz&oacute; la informaci&oacute;n de los Quejosos. ";
					}
				}
			}else{
				break;
			}

			//validacion de tipo de persona		
			$quienEmiteQueja = $params['idQuienEmiteQueja'];
			$idsQuejosos = json_decode( $params['idsQuejosos'] );
			$insercionQuejosos = false;
			if( $quienEmiteQueja == 1 ){ //fue emitida por un imputado
				foreach ($idsQuejosos as $idQuejoso) {
					$QuejosospromocionesDTO = new QuejosospromocionesDTO();
					$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
					$QuejosospromocionesDTO->setIdImputadoCarpeta( $idQuejoso );
					$QuejosospromocionesDTO->setEmail( $emailNotificacion );
					$QuejosospromocionesDTO->setActivo( 'S' );
					$QuejosospromocionesDTO = $QuejosospromocionesDAO->insertQuejosospromociones( $QuejosospromocionesDTO , $proveedor);
					if( $QuejosospromocionesDTO != '' ){

						$statusTransaccion = 1;
						$insercionQuejosos = true;
					}else{
						$statusTransaccion = 0;
						$insercionQuejosos = false;
						$mensaje = "No se insert&oacute; la informaci&oacute;n del Quejoso - Imputado. ";
						break;
					}
				}
			}elseif( $quienEmiteQueja == 2 ){ //fue emitida por un ofendido
				foreach ($idsQuejosos as $idQuejoso) {
					$QuejosospromocionesDTO = new QuejosospromocionesDTO();
					$QuejosospromocionesDAO = new QuejosospromocionesDAO();
					$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
					$QuejosospromocionesDTO->setIdOfendidoCarpeta( $idQuejoso );
					$QuejosospromocionesDTO->setEmail( $emailNotificacion );
					$QuejosospromocionesDTO->setActivo( 'S' );
					$QuejosospromocionesDTO = $QuejosospromocionesDAO->insertQuejosospromociones( $QuejosospromocionesDTO , $proveedor);
					if( $QuejosospromocionesDTO != '' ){
						$statusTransaccion = 1;
						$insercionQuejosos = true;
					}else{
						$statusTransaccion = 0;
						$insercionQuejosos = false;
						$mensaje = "No se insert&oacute; la informaci&oacute;n del Quejoso - Ofendido. ";
						break;
					}
				}
			}elseif( $quienEmiteQueja == 3 ){ //fue emitida por otra persona
				foreach (json_decode($params['datosQuejosos']) as $datosQuejoso) {
					//print_r($datosQuejoso->tipoPersona);
					$QuejosospromocionesDAO = new QuejosospromocionesDAO();
					$QuejosospromocionesDTO = new QuejosospromocionesDTO();
					$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
					if( $datosQuejoso->tipoPersona == 1 ){ //persona fisica
						$QuejosospromocionesDTO->setPaternoQ( strtoupper($datosQuejoso->quejosoPaterno) );
						$QuejosospromocionesDTO->setMaternoQ( strtoupper($datosQuejoso->quejosoMaterno) );
						$QuejosospromocionesDTO->setNombreQ( strtoupper($datosQuejoso->quejosoNombre) );
					}else{ //persona moral y otra
						$QuejosospromocionesDTO->setNombreMoral( strtoupper($datosQuejoso->quejosoNombre) );
					}
					$QuejosospromocionesDTO->setCveTipoPersona( $datosQuejoso->tipoPersona );
					$QuejosospromocionesDTO->setCveGenero( $datosQuejoso->quejosoGenero );
					$QuejosospromocionesDTO->setDomicilio( $datosQuejoso->quejosoDomicilio );
					$QuejosospromocionesDTO->setEmail( $datosQuejoso->quejosoCorreo );
					$QuejosospromocionesDTO->setTelefono( $datosQuejoso->quejosoTelefono );
					$QuejosospromocionesDTO->setCveMunicipio( $datosQuejoso->quejosoMunicipio );
					$QuejosospromocionesDTO->setActivo( 'S' );
					$QuejosospromocionesDTO = $QuejosospromocionesDAO->insertQuejosospromociones( $QuejosospromocionesDTO, $proveedor);
					if( $QuejosospromocionesDTO != '' ){
						$statusTransaccion = 1;
						$insercionQuejosos = true;
					}else{
						$statusTransaccion = 0;
						$insercionQuejosos = false;
						$mensaje = "No se insert&oacute; la informaci&oacute;n del Quejoso - Otro. ";
						break;
					}
				}
			}
			if( $QuejosospromocionesDTO != '' ){
				foreach ($QuejosospromocionesDTO as $Quejosospromociones) {
					$idQuejososProm[] = $Quejosospromociones->getIdQuejosoProm();
				}
			}

			//Proceso 3
			//obtencion del Id de la QuejaPromocion
			$idQuejaPromocion = 0;
			$QuejaPromocionesDAO = new QuejapromocionesDAO();
			$QuejaPromocionesDTO2 = new QuejapromocionesDTO();
			$QuejaPromocionesDTO2->setIdActuacion( $idActuacion );
			$QuejaPromocionesDTO2->setActivo( 'S' );
			$QuejaPromocionesDTO2 = $QuejaPromocionesDAO->selectQuejapromociones( $QuejaPromocionesDTO2,'', $proveedor );
			if( $QuejaPromocionesDTO2 != '' ){
				$idQuejaPromocion = $QuejaPromocionesDTO2[0]->getIdQuejaProm();
			}else{
				break;
			}

			//actualizacion del registro de QuejaPromocion
			$insercionJuez = false;
			if( $insercionQuejosos == true ){
				$QuejaPromocionesDTO = new QuejapromocionesDTO();
				$QuejaPromocionesDTO->setIdQuejaProm( $idQuejaPromocion );
				$QuejaPromocionesDTO->setIdJuzgador( $params["idJuzgador"] );
				$QuejaPromocionesDTO = $QuejaPromocionesDAO->updateQuejapromociones( $QuejaPromocionesDTO, $proveedor );
				if( $QuejaPromocionesDTO != '' ){
					$idQuejaProm = $QuejaPromocionesDTO[0]->getIdQuejaProm();
					$statusTransaccion = 1;
					$insercionJuez = true;
				}else{
					$statusTransaccion = 0;
					$mensaje .= "No se actualiz&oacute; la Informaci&oacute;n del Juez. ";
				}
			}

			$actuacion = array('idActuacion'=>$idActuacion,'numActuacion'=>$numActuacion,'aniActuacion'=>$aniActuacion,'idQuejososProm'=>$idQuejososProm,'idQuejaProm'=>$idQuejaProm);
		}else{
			$statusTransaccion = 0;
		}

		if( $statusTransaccion == 1){
			$proveedor->execute("COMMIT");
			$estatus = 'OK';
			$mensaje .= 'La Queja se actualiz&oacute; correctamente.';
		}else{
			$proveedor->execute("ROLLBACK");
			$estatus = 'ERROR';
			$mensaje .= 'Error. No se actualiz&oacute; la Queja. Intente nuevamente.';
		}
		$proveedor->close();

		$respuesta = array('estatus'=>$estatus,'mensaje'=>$mensaje,'datos'=>$actuacion);
		return json_encode($respuesta);
	}

	public function buscarQuejas($QuejosospromocionesDto, $parametros){
		error_log(print_r($QuejosospromocionesDto,true));
		$estatus = "";
		$totalRegistros = 0;
		$datos = "";
		$mensaje = "";
		$imputados = "";
		$ofendidos = "";
		$idQuienSeQueja = "";
		$quienSeQueja = "";
		$actuaciones = "";

		$cveJuzgado = $parametros['cveJuzgado'];
		$cveTipoCarpeta = $parametros['cveCarpeta'];
		$numero = $parametros['numero'];
		$anio = $parametros['anio'];
		$numeroActuacion = $parametros['numActuacion'];
		$anioActuacion = $parametros['aniActuacion'];
		$fechaInicial = $parametros['fechaDesde'];
		$fechaFinal = $parametros['fechaHasta'];

		$idActuacionUnica = $QuejosospromocionesDto->getIdActuacion();
		//obtencion de catalogos
		//municipios
		$municipios = array();
		$MunicipiosDTO = new MunicipiosDTO();
		$MunicipiosDAO = new MunicipiosDAO();
		$MunicipiosDTO->setActivo( 'S' );
		$MunicipiosDTO->setCveEstado( '15' );
		$MunicipiosDTO = $MunicipiosDAO->selectMunicipios( $MunicipiosDTO );
		//generos
		$generos = array();
		$GenerosDAO = new GenerosDAO();
		$GenerosDTO = new GenerosDTO();
		$GenerosDTO->setActivo( 'S' );
		$GenerosDTO = $GenerosDAO->selectGeneros($GenerosDTO);
		//Tipos personas
		$tipospersonas = array();
		$TipospersonasDAO = new TipospersonasDAO();
		$TipospersonasDTO = new TipospersonasDTO();
		$TipospersonasDTO->setActivo( 'S' );
		$TipospersonasDTO = $TipospersonasDAO->selectTipospersonas( $TipospersonasDTO );
		//Tipo de capeta
		$Tiposcarpetas = array();
		$TiposcarpetasDAO = new TiposcarpetasDAO();
		$TiposcarpetasDTO = new TiposcarpetasDTO();
		$TiposcarpetasDTO->setActivo('S');
		$TiposcarpetasDTO = $TiposcarpetasDAO->selectTiposcarpetas( $TiposcarpetasDTO );
		//Juzgados
		$Juzgados = array();
		$JuzgadosDTO = new JuzgadosDTO();
		$JuzgadosDAO = new JuzgadosDAO();
		$JuzgadosDTO->setActivo('S');
		$JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO);
		//fin obtencion de catalogos

		$cveTipoActuacion = '27';
		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		$ActuacionesDTO->setIdActuacion( $idActuacionUnica );
		$ActuacionesDTO->setNumActuacion( $numeroActuacion );
		$ActuacionesDTO->setAniActuacion( $anioActuacion );
		$ActuacionesDTO->setCveTipoActuacion( $cveTipoActuacion );
		$ActuacionesDTO->setNumero( $numero );
		$ActuacionesDTO->setAnio( $anio );
		$ActuacionesDTO->setCveJuzgado( $cveJuzgado );
		$ActuacionesDTO->setActivo( 'S' );
		$ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO, '', ' ORDER BY fechaRegistro DESC', $parametros );
		if( $ActuacionesDTO != '' ){

			foreach ($ActuacionesDTO as $actuacion) { //recorrido de actuaciones
				$idActuacion = $actuacion->getIdActuacion();
				$idReferencia = $actuacion->getIdReferencia();
				$cveEstatus = '';
				$desEstatus = '';
				$estatusQueja = array();

				if( $TiposcarpetasDTO != ''){ //agregar tipo carpeta
					foreach ($TiposcarpetasDTO as $Tipocarpeta) {
						if( $actuacion->getCveTipoCarpeta() == $Tipocarpeta->getCveTipoCarpeta()){
							$Tiposcarpetas = array('cveTipoCarpeta'=>$Tipocarpeta->getCveTipoCarpeta(),'desTipoCarpeta'=>$Tipocarpeta->getDesTipoCarpeta());
							break;
						}
					}
				}else{
					$Tiposcarpetas = array('cveTipoCarpeta'=>'-','desTipoCarpeta'=>'-');
				}

				//obtencion del estatus de la queja
				$ActuacionesestatusDTO = new ActuacionesestatusDTO();
				$ActuacionesestatusDAO = new ActuacionesestatusDAO();
				$ActuacionesestatusDTO->setIdActuacion( $idActuacion );
				$ActuacionesestatusDTO->setActivo('S');
				$ActuacionesestatusDTO = $ActuacionesestatusDAO->selectActuacionesestatus( $ActuacionesestatusDTO, ' ORDER BY idActuacionesEstatus DESC LIMIT 1' );
				$estatusQueja = array();
				if( $ActuacionesestatusDTO != '' ){ 
					$cveActuacionesEstatus = $ActuacionesestatusDTO[0]->getIdActuacionesEstatus();
					$cveEstatus = $ActuacionesestatusDTO[0]->getCveEstatus();
					$descEstatus = '';
					//obtencion de la descripcion del estatus de la queja
					$EstatusDAO = new EstatusDAO();
					$EstatusDTO = new EstatusDTO();
					$EstatusDTO->setActivo('S');
					$EstatusDTO->setCveEstatus( $cveEstatus );
					$EstatusDTO = $EstatusDAO->selectEstatus( $EstatusDTO );
					if( $EstatusDTO != ''){
						$descEstatus = $EstatusDTO[0]->getDescEstatus();
					}
					$estatusQueja = array('idActuacionesEstatus'=>$cveActuacionesEstatus,'cveEstatus'=>$cveEstatus,'descEstatus'=>$descEstatus);
				}

				//obtencion dej juzgador
				$quejaPromocion = array();
				$QuejapromocionesDTO = new QuejapromocionesDTO();
				$QuejapromocionesDAO = new QuejapromocionesDAO();
				$QuejapromocionesDTO->setActivo( 'S' );
				$QuejapromocionesDTO->setIdActuacion( $idActuacion );
				$QuejapromocionesDTO = $QuejapromocionesDAO->selectQuejapromociones( $QuejapromocionesDTO );
				if( $QuejapromocionesDTO != '' ){
					$idJuzgador = $QuejapromocionesDTO[0]->getIdJuzgador();
					$nombreJuzgador = "";
					//obtencion del juzgador
					$JuzgadoresDAO = new JuzgadoresDAO();
					$JuzgadoresDTO = new JuzgadoresDTO();
					$JuzgadoresDTO->setIdJuzgador( $idJuzgador );
					$JuzgadoresDTO = $JuzgadoresDAO->selectJuzgadores( $JuzgadoresDTO );
					if( $JuzgadoresDTO != '' ){
						$nombreJuzgador = $JuzgadoresDTO[0]->getTitulo() . ' ' . $JuzgadoresDTO[0]->getPaterno() . ' ' . $JuzgadoresDTO[0]->getMaterno() . ' ' . $JuzgadoresDTO[0]->getNombre();
					}
					$quejaPromocion = array('idQuejaPromocion'=>$QuejapromocionesDTO[0]->getIdQuejaProm(),
									'idJuzgador'=>$idJuzgador,
									'juzgador'=>$nombreJuzgador,
									'acuerdo'=>$QuejapromocionesDTO[0]->getAcuerdo(),
									'fechaAcuerdo'=>$QuejapromocionesDTO[0]->getFechaAcuerdo(),
									'resolucion'=>$QuejapromocionesDTO[0]->getResolucion(),
									'fechaResolucion'=>$QuejapromocionesDTO[0]->getFechaResolucion());
				}

				//obtencion de los imputados relacionados a la carpeta
				$imputados = array();
				$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
				$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
				$ImputadoscarpetasDTO->setIdCarpetaJudicial( $idReferencia );
				$ImputadoscarpetasDTO->setActivo( 'S' );
				$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->selectImputadoscarpetas( $ImputadoscarpetasDTO );
				if( $ImputadoscarpetasDTO != '' ){
					foreach ($ImputadoscarpetasDTO as $Imputadoscarpetas) {
						$nombre = '';
						if( $Imputadoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
							$nombre = $Imputadoscarpetas->getPaterno() . ' ' . $Imputadoscarpetas->getMaterno() . ' ' . getNombre();
						}else{
							$nombre = $Imputadoscarpetas->getNombreMoral();
						}
						$tipoPersona = $Imputadoscarpetas->getCveTipoPersona();
						$descTipoPersona = '';
						foreach ($TipospersonasDTO as $tp) {
							if( $tp->getCveTipoPersona() == $tipoPersona ){
								$descTipoPersona = $tp->getDesTipoPersona();
							}
						}
						$imputados[] = array('idImputadoCarpeta'=>$Imputadoscarpetas->getIdImputadoCarpeta(),
										'tipoPersona'=>$Imputadoscarpetas->getCveTipoPersona(),
										'descTipoPersona'=>$descTipoPersona,
										'nombre'=>$nombre);
					}
				}

				//obtencion de los ofendidos relacionados a la carpeta
				$ofendidos = array();
				$OfendidoscarpetasDAO = new OfendidoscarpetasDAO();
				$OfendidoscarpetasDTO = new OfendidoscarpetasDTO();
				$OfendidoscarpetasDTO->setIdCarpetaJudicial( $idReferencia );
				$OfendidoscarpetasDTO->setActivo( 'S' );
				$OfendidoscarpetasDTO = $OfendidoscarpetasDAO->selectOfendidoscarpetas( $OfendidoscarpetasDTO );
				if( $OfendidoscarpetasDTO != '' ){
					foreach ($OfendidoscarpetasDTO as $Ofendidoscarpetas) {
						$nombre = '';
						if( $Ofendidoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
							$nombre = $Ofendidoscarpetas->getPaterno() . ' ' . $Ofendidoscarpetas->getMaterno() . ' ' . getNombre();
						}else{
							$nombre = $Ofendidoscarpetas->getNombreMoral();
						}
						$tipoPersona = $Ofendidoscarpetas->getCveTipoPersona();
						$descTipoPersona = '';
						foreach ($TipospersonasDTO as $tp) {
							if( $tp->getCveTipoPersona() == $tipoPersona ){
								$descTipoPersona = $tp->getDesTipoPersona();
							}
						}
						$ofendidos[] = array('idOfendidoCarpeta'=>$Ofendidoscarpetas->getIdOfendidoCarpeta(),
										'tipoPersona'=>$Imputadoscarpetas->getCveTipoPersona(),
										'descTipoPersona'=>$descTipoPersona,
										'nombre'=>$nombre);
					}
				}

				//obtencion de los quejosos
				$quejosos = array();
				$QuejosospromocionesDTO = new QuejosospromocionesDTO();
				$QuejosospromocionesDAO = new QuejosospromocionesDAO();
				$QuejosospromocionesDTO->setActivo( 'S' );
				$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
				$QuejosospromocionesDTO = $QuejosospromocionesDAO->selectQuejosospromociones( $QuejosospromocionesDTO, ' ORDER BY paternoQ, maternoQ, nombreQ, NombreMoral ASC' );
				if( $QuejosospromocionesDTO != '' ){
					foreach ($QuejosospromocionesDTO as $Quejosospromociones) {
						$tipospersonas = array();
						if( $TipospersonasDTO != ''){ //obtencion del tipo de persona
							foreach ($TipospersonasDTO as $Tipospersonas) {
								if( $Quejosospromociones->getCveTipoPersona() == $Tipospersonas->getCveTipoPersona() ){
									$tipospersonas = array('cveTipoPersona'=>$Tipospersonas->getCveTipoPersona(),
														'desTipoPersona'=>$Tipospersonas->getDesTipoPersona());
									break;
								}
							}
						}
						if( $Quejosospromociones->getCveTipoPersona() == 1 ){ //persona fisica
							$nombreCompleto = $Quejosospromociones->getPaternoQ() . ' ' . $Quejosospromociones->getMaternoQ() . ' ' . $Quejosospromociones->getNombreQ();
						}elseif( $Quejosospromociones->getCveTipoPersona() == 2 || $Quejosospromociones->getCveTipoPersona() == 3 ){ //persona moral u otra
							$nombreCompleto = $Quejosospromociones->getNombreMoral();
						}

						$generos = array();
						if( $GenerosDTO != ''){ //obtencion del tipo de genero
							foreach ($GenerosDTO as $Generos) {
								if( $Quejosospromociones->getCveGenero() == $Generos->getCveGenero() ){
									$generos = array('cveGenero'=>$Generos->getCveGenero(),
													'desGenero'=>$Generos->getDesGenero());
									break;
								}
							}
						}
						$municipios = array();
						if( $MunicipiosDTO != ''){ //obtencion del municipio
							foreach ($MunicipiosDTO as $Municipios) {
								if( $Quejosospromociones->getCveMunicipio() == $Municipios->getCveMunicipio() ){
									$municipios = array('cveMunicipio'=>$Municipios->getCveMunicipio(),
														'desMunicipio'=>$Municipios->getDesMunicipio());
									break;
								}
							}
						}
						//obtencion de los nombres de los quejos en caso de ser imputados u ofendidos
						if( $Quejosospromociones->getIdImputadoCarpeta() != 0 ){  //se quejO el imputado
							$quienSeQueja = 'quejaImputados';
							$tipoQuejoso = 'Imputados';
							$idQuienSeQueja = 1;
							if( $ImputadoscarpetasDTO != '' ){
								foreach ($ImputadoscarpetasDTO as $Imputadoscarpetas) {
									if( $Quejosospromociones->getIdImputadoCarpeta() == $Imputadoscarpetas->getIdImputadoCarpeta() ){
										if( $Imputadoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
											$nombreCompleto = $Imputadoscarpetas->getPaterno() . ' ' . $Imputadoscarpetas->getMaterno() . ' ' . getNombre();
										}else{
											$nombreCompleto = $Imputadoscarpetas->getNombreMoral();
										}
									}
								}
							}
						}elseif( $Quejosospromociones->getIdOfendidoCarpeta() != 0 ){  //se quejO el ofendido
							$quienSeQueja = 'quejaOfendidos';
							$tipoQuejoso = 'Ofendidos';
							$idQuienSeQueja = 2;
							if( $OfendidoscarpetasDTO != '' ){
								$c=0;
								foreach ($OfendidoscarpetasDTO as $Ofendidoscarpetas) {
									if( $Quejosospromociones->getIdOfendidoCarpeta() == $Ofendidoscarpetas->getIdOfendidoCarpeta() ){
										if( $Ofendidoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
											$nombreCompleto = $Ofendidoscarpetas->getPaterno() . ' ' . $Ofendidoscarpetas->getMaterno() . ' ' . getNombre();
										}else{
											$nombreCompleto = $Ofendidoscarpetas->getNombreMoral();
										}
									}
								}
							}
						}else{  //se quejO otro
							$quienSeQueja = 'quejaOtros';
							$tipoQuejoso = 'Otros';
							$idQuienSeQueja = 3;
						}
						$quejosos[] = array('idQuejosoProm'=>$Quejosospromociones->getIdQuejosoProm(),
											'idImputadoCarpeta'=>$Quejosospromociones->getIdImputadoCarpeta(),
											'idOfendidoCarpeta'=>$Quejosospromociones->getIdOfendidoCarpeta(),
											'nombreCompleto'=>$nombreCompleto,
											'paterno'=>$Quejosospromociones->getPaternoQ(),
											'materno'=>$Quejosospromociones->getMaternoQ(),
											'nombre'=>$Quejosospromociones->getNombreQ(),
											'nombreMoral'=>$Quejosospromociones->getNombreMoral(),
											'cveTipoPersona'=>$tipospersonas,
											'cveGenero'=>$generos,
											'domicilio'=>$Quejosospromociones->getDomicilio(),
											'email'=>$Quejosospromociones->getEmail(),
											'telefono'=>$Quejosospromociones->getTelefono(),
											'cveMunicipio'=>$municipios,
											'activo'=>$Quejosospromociones->getActivo());
					}
				}

				//definicion de juzgado
				if( $JuzgadosDTO != ''){
					foreach ($JuzgadosDTO as $JuzgadosLista) {
						if( $actuacion->getCveJuzgado() == $JuzgadosLista->getCveJuzgado() ){
							$Juzgados = array('cveJuzgado'=>$JuzgadosLista->getCveJuzgado() . '/' . $JuzgadosLista->getCveTipojuzgado(),
											'desJuzgado'=>$JuzgadosLista->getDesJuzgado() );
							break;
						}
					}
				}

				$actuaciones[] = array('idActuacion'=>$actuacion->getIdActuacion(),
									'numActuacion'=>$actuacion->getNumActuacion(),
									'aniActuacion'=>$actuacion->getAniActuacion(),
									'cveTipoActuacion'=>$actuacion->getCveTipoActuacion(),
									'idReferencia'=>$actuacion->getIdReferencia(),
									'numero'=>$actuacion->getNumero(),
									'anio'=>$actuacion->getAnio(),
									'noFojas'=>$actuacion->getNoFojas(),
									'cveTipoCarpeta'=>$Tiposcarpetas,
									'cveJuzgado'=>$Juzgados,
									'sintesis'=>$actuacion->getSintesis(),
									'observaciones'=>$actuacion->getObservaciones(),
									'cveUsuario'=>$actuacion->getCveUsuario(),
									'activo'=>$actuacion->getActivo(),
									'fechaRegistro'=>$this->fechaNormal($actuacion->getFechaRegistro()),
									'fechaActualizacion'=>$this->fechaNormal($actuacion->getFechaActualizacion()),
									'imputados'=>$imputados,
									'ofendidos'=>$ofendidos,
									'estatusQueja'=>$estatusQueja,
									'quejaPromocion'=>$quejaPromocion,
									'quejosos'=>$quejosos,
									'quienSeQueja'=>$quienSeQueja,
									'idQuienSeQueja'=>$idQuienSeQueja,
									'tipoQuejoso'=>$tipoQuejoso
									);
			}
			$estatus = "OK";
			$mensaje = "Se encontraron coincidencias.";
			$totalRegistros = count($ActuacionesDTO);
		}else{
			$estatus = "ERROR";
			$mensaje .= "No se encuentran Quejas con estos parametros, intente con otros. ";
		}

		$respuesta = array('estatus'=>$estatus,'totalCount'=>$totalRegistros,'mensaje'=>$mensaje,'data'=>$actuaciones);
		return json_encode($respuesta);
	}

	public function eliminaQueja($QuejosospromocionesDto)
	{
	    $proveedor = new Proveedor('mysql', 'sigejupe');
	    $proveedor->connect();
	    $proveedor->execute("BEGIN");
	    $statusTransaccion = 0;
	    $mensaje = '';
	    $datos = array();

		$idActuacion = $QuejosospromocionesDto->getIdActuacion();
		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		$ActuacionesDTO->setIdActuacion( $idActuacion );
		$ActuacionesDTO->setActivo( 'N' );
		$ActuacionesDTO = $ActuacionesDAO->updateActuaciones( $ActuacionesDTO );

		if( $ActuacionesDTO != '' ){
			$statusTransaccion = 1;
			$mensaje = "La Queja se elimin&oacute; satisfactoriamente.";
			$estatus = 'OK';
			$datos = array('idActuacion'=>$ActuacionesDTO[0]->getIdActuacion());
		}else{
			$mensaje = "La Queja no se elimin&oacute;. Error: [ " + $proveedor->error() + " ]";
			$estatus = 'ERROR';
		}

		if( $statusTransaccion == 1){
			$proveedor->execute("COMMIT");
		}else{
			$proveedor->execute("ROLLBACK");
		}
		$proveedor->close();

		$respuesta = array('estatus'=>$estatus,'mensaje'=>$mensaje,'datos'=>$datos);
		return json_encode($respuesta);

	}

    private function obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion) {
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setCveJuzgado($cveJuzgado);
        $contadoresDto->setCveTipoActuacion($cveTipoActuacion);
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoCarpeta("");
        $contadoresDto = $contadorCrl->getContador($contadoresDto); 
        return $contadoresDto;
    }

	private function fechaNormal($fechaBase) {
		list($fecha, $hora) = explode(" ", $fechaBase);
		list($year, $mes, $dia) = explode("-", $fecha);
		return $dia . "/" . $mes . "/" . $year . " " . $hora;
	}
}
?>