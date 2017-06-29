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
if(session_status() == PHP_SESSION_NONE){
	@session_start();
}
date_default_timezone_set('America/Mexico_City');
/*define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/ActaMinimaController.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);*/
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");    // para descripcion de la relacion de la //carpetas judiciales
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
//audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
//catalogo de audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
//actas audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actasaudiencias/ActasaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actasaudiencias/ActasaudienciasDAO.Class.php");
//imputados solicitudes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");
//imputados carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
//tipos carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Juzgados JuzgadosDTO
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

class ActaMinimaController{
	private $proveedor;
	public function __construct() {
	}

	public function obtencionAudiencias($ActuacionesDto){
		$audiencias = array();
		$imputados = array();
		$totalImputados = 0;
		$totalRegistros = 0;
		$status = '';
		$mensaje = '';
		$respuesta = array('status' => '', 'totalRegistros' => '', 'totalRegistrosImputados'=>'', 'mensaje' => '', 'idReferencia' => '', 'data' => '' );
		$actasPreviasRegistradas = 0;
		//busqueda de los datos en la tabla -carpetajudicial-
		$CarpetasJudicialesDAO = new CarpetasJudicialesDAO();
		$CarpetasJudicialesDTO = new CarpetasJudicialesDTO();
		$CarpetasJudicialesDTO->setCveTipoCarpeta( $ActuacionesDto->getCveTipoCarpeta() );
		$CarpetasJudicialesDTO->setNumero( $ActuacionesDto->getNumero() );
		$CarpetasJudicialesDTO->setAnio( $ActuacionesDto->getAnio() );
		$CarpetasJudicialesDTO->setActivo( $ActuacionesDto->getActivo() );
		$CarpetasJudicialesDTO->setCveJuzgado( $ActuacionesDto->getCveJuzgado() );
		$CarpetasJudicialesDTO = $CarpetasJudicialesDAO->selectCarpetasJudiciales( $CarpetasJudicialesDTO );

		if( $CarpetasJudicialesDTO != '' ){
			//obtencion del Id de la carpeta Judicial para usarlo como ID de Referencia
			$idReferencia = $CarpetasJudicialesDTO[0]->getIdCarpetaJudicial();
			//busqueda de los datos en la tabla -actuaciones-
			$ActuacionesDAO = new ActuacionesDAO();
			$ActuacionesDTO = new ActuacionesDTO();
			$ActuacionesDTO->setIdReferencia( $idReferencia );
			$ActuacionesDTO->setCveTipoActuacion( $ActuacionesDto->getCveTipoActuacion() );
			$ActuacionesDTO->setActivo( 'S' );
			$ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO );
			//si no tiene registros continua con la busqueda de audiencias en -tblaudiencias-
			//si tiene registros, los guarda para excluirlos en la busqueda de audiencias
			$tieneActasPrevias = false;
			$sqlActasPrevias = '';
			$sqlActuacionesExistentes = '';
			$sqlActasExistentes = '';
			if( $ActuacionesDTO != '' ){ //tiene actuaciones (actas minimas) registradas, obtiene los id de estas
				$actasPreviasRegistradas = count($ActuacionesDTO);
				$mensaje = 'Existe(n) ' . count($actasPreviasRegistradas) . ' Acta(s) M&iacute;nima(s) previamente registrada(s) con los datos ingresados. <br/>';
				$idsRegistrados = '';
				foreach ($ActuacionesDTO as $actuacion) {
					$idsRegistrados .= $actuacion->getIdActuacion() . ',';
				}
				//busca en -actasaudiencias- los ids encontrados para obtener los ids de las audiencias
				$ActasaudienciasDTO = new ActasaudienciasDTO();
				$ActasaudienciasDAO = new ActasaudienciasDAO();
				//eliminacion de la ultima ','
				if( strlen( $idsRegistrados ) >1 ){
					$idsRegistrados = substr($idsRegistrados, 0, -1);
					$sqlActuacionesExistentes = " AND idActuacion IN (" . $idsRegistrados . ") ";
				}
				$ActasaudienciasDTO->setActivo('S');
				$ActasaudienciasDTO = $ActasaudienciasDAO->selectActasaudiencias( $ActasaudienciasDTO, $sqlActuacionesExistentes);
				if( $ActasaudienciasDTO != '' ){
					$idsRegistrados = '';
					foreach ($ActasaudienciasDTO as $Actasaudiencias) {
						$idsRegistrados .= $Actasaudiencias->getIdAudiencia() . ',';
					}
					if( strlen( $idsRegistrados ) >1 ){
						$idsRegistrados = substr($idsRegistrados, 0, -1);
						$tieneActasPrevias = true;
						$sqlActasExistentes = " AND idAudiencia NOT IN (" . $idsRegistrados . ") ";
					}
				}
			}
			$sqlActasExistentes .= " ORDER BY fechaRegistro ASC ";
			//busca las audiencias que conincidan con los datos de la carpeta judicial
			$AudienciasDTO = new AudienciasDTO();
			$AudienciasDAO = new AudienciasDAO();
			$AudienciasDTO->setActivo( 'S' );
			$AudienciasDTO->setNumero( $ActuacionesDto->getNumero() );
			$AudienciasDTO->setAnio( $ActuacionesDto->getAnio() );
			$AudienciasDTO->setCveTipoCarpeta( $ActuacionesDto->getCveTipoCarpeta() );
			$AudienciasDTO->setCveJuzgado( $ActuacionesDto->getCveJuzgado() );
			$AudienciasDTO->setCveEstatusAudiencia( '2' );
			$AudienciasDTO = $AudienciasDAO->selectAudiencias( $AudienciasDTO, $sqlActasExistentes );

			//obtiene la descripcion de las audiencias de la tabla -tblcataudiencias-
			$CataudienciasDTO = new CataudienciasDTO();
			$CataudienciasDAO = new CataudienciasDAO();
			$CataudienciasDTO->setActivo( 'S' );
			$CataudienciasDTO = $CataudienciasDAO->selectCataudiencias( $CataudienciasDTO, ' ORDER BY cveCatAudiencia ASC ' );

			if( $AudienciasDTO != '' ){
				$totalRegistros = count( $AudienciasDTO );
				$idsSolicitudAudiencias = '';
				foreach ($AudienciasDTO as $audiencia) {
					$descripcion = '';
					if( $CataudienciasDTO != '' ){
						foreach ($CataudienciasDTO as $cataudiencias) {
							if( $cataudiencias->getCveCatAudiencia() == $audiencia->getCveCatAudiencia() ){
								$descripcion = $cataudiencias->getDesCatAudiencia();
								break;
							}
						}
					}else{
						$descripcion = 'SIN DESCRIPCI&Oacute;N';
					}
					$audiencias[] = array( 'idAudiencia' => $audiencia->getIdAudiencia(),
										'cveCatAudiencia' => $audiencia->getCveCatAudiencia(),
										'fechaRegistro' => $this->fechaSalida( $audiencia->getFechaInicial() ),
										'desCatAudiencia' => $descripcion);
					//obtencion de ids de Audiencia
					$idsSolicitudAudiencias .= $audiencia->getIdSolicitudAudiencia() . ',';
				}
				$sqlIdImputadosSolicitudes = '';
				if( strlen($idsSolicitudAudiencias) > 0 ){
					$idsSolicitudAudiencias = substr($idsSolicitudAudiencias,0,strlen($idsSolicitudAudiencias)-1);
					$sqlIdImputadosSolicitudes = ' AND idSolicitudAudiencia in (' . $idsSolicitudAudiencias . ') AND idImputadoCarpeta<>0 GROUP BY idImputadoCarpeta ';
				}
				//obtencion de los imputados a través de -audiencias- -> -solicitudesaudiencias- -> -imputadossolicitudes- //obsoleto
				//obtencion de los imputados a través de -audiencias- -> -imputadossolicitudes- 
				$ImputadossolicitudesDTO = new ImputadossolicitudesDTO();
				$ImputadossolicitudesDAO = new ImputadossolicitudesDAO();
				$ImputadossolicitudesDTO->setActivo( 'S' );
				$ImputadossolicitudesDTO = $ImputadossolicitudesDAO->selectImputadossolicitudes( $ImputadossolicitudesDTO, $sqlIdImputadosSolicitudes );
				$idsImputados = '';
				if( $ImputadossolicitudesDTO != '' ){ //encontró imputados relacionados
					$sqlImputadosSolicitudes = '';
					foreach ($ImputadossolicitudesDTO as $Imputadossolicitudes) {
						$idsImputados .= $Imputadossolicitudes->getIdImputadoCarpeta() . ',';
					}
					//eliminacion de la ultima ','
					if( strlen( $idsImputados ) >1 ){
						$idsImputados = substr($idsImputados, 0, -1);
						$sqlImputadosSolicitudes = " AND idImputadoCarpeta IN (" . $idsImputados . ") ";
					}
					//obtencion de los nombres de los imputados de la tabla -imputadoscarpetas-
					$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
					$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
					$ImputadoscarpetasDTO->setActivo('S');
					$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->selectImputadoscarpetas( $ImputadoscarpetasDTO, $sqlImputadosSolicitudes.' ORDER BY nombreMoral, paterno, materno, nombre ASC ' );
					if( $ImputadoscarpetasDTO != '' ){ //existen imputados relacionados
						$totalImputados = count( $ImputadoscarpetasDTO );
						foreach ($ImputadoscarpetasDTO as $Imputadoscarpetas) {
							$nombre = '';
							//1-fisica, 2-moral, 3-otra
							if( $Imputadoscarpetas->getCveTipoPersona() == 1 ){
								$nombre = utf8_encode( $Imputadoscarpetas->getPaterno() ) . ' ' . utf8_encode( $Imputadoscarpetas->getMaterno() ) . ' ' . utf8_encode( $Imputadoscarpetas->getNombre() );
							}else{
								$nombre = utf8_encode( $Imputadoscarpetas->getNombreMoral() );
							}
							$imputados[] = array('idImputadoCarpeta'=>$Imputadoscarpetas->getIdImputadoCarpeta(),
										'nombre'=>$nombre,
										'LegalDetencion'=>$Imputadoscarpetas->getLegalDetencion(),
										'activo'=>$Imputadoscarpetas->getActivo(),
										'fechaRegistro'=>$Imputadoscarpetas->getFechaRegistro());
						}
					}
				}
				$mensaje = 'Audiencias encontradas. ';
			}else{
				//validaciOn de audiencias por celebrar
				$AudienciasDTO = new AudienciasDTO();
				$AudienciasDAO = new AudienciasDAO();
				$AudienciasDTO->setActivo( 'S' );
				$AudienciasDTO->setNumero( $ActuacionesDto->getNumero() );
				$AudienciasDTO->setAnio( $ActuacionesDto->getAnio() );
				$AudienciasDTO->setCveTipoCarpeta( $ActuacionesDto->getCveTipoCarpeta() );
				$AudienciasDTO->setCveJuzgado( $ActuacionesDto->getCveJuzgado() );
				$AudienciasDTO->setCveEstatusAudiencia( '1' );
				$AudienciasDTO = $AudienciasDAO->selectAudiencias( $AudienciasDTO, $sqlActasExistentes );
				if( $AudienciasDTO != ''){
					$mensaje = 'Existe la audiencia, sin embargo, a&uacute;n no esta celebrada. ';
				}else{
					$mensaje = 'No existen audiencias relacionadas. ';
				}
			}
			//armado final del array de respuesta
			$status = 'ok';
			$respuesta["idReferencia"] = $idReferencia;
			$respuesta['data']['audiencias'] = $audiencias;
			$respuesta['data']['imputados'] = $imputados;
		}else{
			$status = 'error';
			$mensaje = 'No existen Audiencias con los parametros introducidos.';
		}
		$respuesta['status'] = $status;
		$respuesta['mensaje'] = $mensaje;
		$respuesta['totalRegistros'] = $totalRegistros;
		$respuesta['totalRegistrosImputados'] = $totalImputados;
		return json_encode($respuesta);
	}

	public function guardaActaMinima($ActuacionesDto, $param){
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $respuesta = array('status' => '', 'mensaje' => '', 'data' => '' );
        $dataActuacion = array('idActuacion' => '','numActuacion'=>'', 'aniActuacion'=>'','cveTipoActuacion'=>'','idReferencia'=>'','numero'=>'','anio'=>'','cveTipoCarpeta'=>'','cveJuzgado'=>'','Sintesis'=>'','observaciones'=>'','cveUsuario'=>'','fechaRegistro'=>'','activo'=>'','actaAudiencia'=>'','imputadosCarpetas'=>'');
        $dataActaaudiencia = array('idActasAudiencia'=>'','idActuacion'=>'','idAudiencia'=>'','fechaRegistro'=>'','activo'=>'');
        $statusTransaccion = 1;
		$idActuacion = 0;
		$idAudiencia = $param["idAudiencia"];
		$listaImputados = explode(',', $param["listaImputados"] );
		$listaDetenidos = explode(',', $param["listaDetenidos"] );
		$status = "";
		$mensaje = "";
		//guardar en -actuaciones-
		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		//definiciOn de variables para obtener los valores del contador
        $cveTipoActuacion = '6'; //dato fijo por ser Acta MInima
        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion);
        $numActuacion = $numActuacion[0]->getNumero();
		$ActuacionesDTO->setCveUsuario( $_SESSION["cveUsuarioSistema"] );
		$ActuacionesDTO->setNumActuacion( $numActuacion );
		$ActuacionesDTO->setAniActuacion( date("Y") );
		$ActuacionesDTO->setCveTipoActuacion( $cveTipoActuacion );
		$ActuacionesDTO->setCveJuzgado( $ActuacionesDto->getCveJuzgado() );
		$ActuacionesDTO->setIdReferencia( $ActuacionesDto->getIdReferencia() );
		$ActuacionesDTO->setCveTipoCarpeta( $ActuacionesDto->getCveTipoCarpeta() );
		$ActuacionesDTO->setNumero( $ActuacionesDto->getNumero() );
		$ActuacionesDTO->setAnio( $ActuacionesDto->getAnio() );
		$ActuacionesDTO->setSintesis( $ActuacionesDto->getSintesis() );
		$ActuacionesDTO->setObservaciones( $ActuacionesDto->getObservaciones() );
		$ActuacionesDTO->setActivo( 'S' );
		$ActuacionesDTO = $ActuacionesDAO->insertActuaciones( $ActuacionesDTO, $proveedor );
		if( $ActuacionesDTO != '' ){ // se insertó la actuación
			//obtencion del id de actuación recien guardado
			$idActuacion = $ActuacionesDTO[0]->getIdActuacion();
        	$dataActuacion["idActuacion"] = $ActuacionesDTO[0]->getIdActuacion();
        	$dataActuacion["numActuacion"] = $ActuacionesDTO[0]->getNumActuacion();
        	$dataActuacion["aniActuacion"] = $ActuacionesDTO[0]->getAniActuacion();
        	$dataActuacion["cveTipoActuacion"] = $ActuacionesDTO[0]->getCveTipoActuacion();
        	$dataActuacion["idReferencia"] = $ActuacionesDTO[0]->getIdReferencia();
        	$dataActuacion["numero"] = $ActuacionesDTO[0]->getNumero();
        	$dataActuacion["anio"] = $ActuacionesDTO[0]->getAnio();
        	$dataActuacion["cveTipoCarpeta"] = $ActuacionesDTO[0]->getCveTipoCarpeta();
        	$dataActuacion["cveJuzgado"] = $ActuacionesDTO[0]->getCveJuzgado();
        	$dataActuacion["Sintesis"] = $ActuacionesDTO[0]->getSintesis();
        	$dataActuacion["observaciones"] = $ActuacionesDTO[0]->getObservaciones();
        	$dataActuacion["cveUsuario"] = $ActuacionesDTO[0]->getCveUsuario();
        	$dataActuacion["fechaRegistro"] = $ActuacionesDTO[0]->getFechaRegistro();
        	$dataActuacion["activo"] = $ActuacionesDTO[0]->getActivo();
		}else{
			$statusTransaccion = 0;
			$status = "error";
			$mensaje = "No se insert&oacute; la Actuaci&oacute;n, intente de nuevo.";
		}
		//inserción en -actasaudiencias-
		if( $idActuacion != 0 ){
			$ActasaudienciasDTO = new ActasaudienciasDTO();
			$ActasaudienciasDAO = new ActasaudienciasDAO();
			$ActasaudienciasDTO->setIdActuacion( $idActuacion );
			$ActasaudienciasDTO->setIdAudiencia( $idAudiencia );
			$ActasaudienciasDTO->setActivo( 'S' );
			$ActasaudienciasDTO = $ActasaudienciasDAO->insertActasaudiencias( $ActasaudienciasDTO,$proveedor );
			if( $ActasaudienciasDTO != '' ){ //se insertó el registro
		        $dataActaaudiencia = array('idActasAudiencia'=>'','idActuacion'=>'','idAudiencia'=>'','fechaRegistro'=>'','activo'=>'');
		        $dataActaaudiencia["idActasAudiencia"] = $ActasaudienciasDTO[0]->getIdActasAudiencia();
		        $dataActaaudiencia["idActuacion"] = $ActasaudienciasDTO[0]->getIdActuacion();
		        $dataActaaudiencia["idAudiencia"] = $ActasaudienciasDTO[0]->getIdAudiencia();
		        $dataActaaudiencia["fechaRegistro"] = $ActasaudienciasDTO[0]->getFechaRegistro();
		        $dataActaaudiencia["activo"] = $ActasaudienciasDTO[0]->getActivo();
	        	$dataActuacion["actaAudiencia"] = $dataActaaudiencia;
	        	$status = "ok";
	        	$mensaje = "Acta M&iacute;nima registrada satisfactoriamente.";
				//registro en bitacora
				//actualizacion de detención en -imputadoscarpetas-
				if( count( $listaDetenidos ) > 0 && $listaDetenidos[0] != ''){
					$legalDetencion = $this->actualizaLegalDetencion($listaImputados, $listaDetenidos, $proveedor);
					if( isset($legalDetencion['status']) && $legalDetencion['status'] == 'error' ){
						$statusTransaccion = $legalDetencion[1];
						$mensaje = $legalDetencion[2];
						$status = $legalDetencion[3];
					}else{
						$dataActuacion["imputadosCarpetas"] = $legalDetencion;
					}
				}
			}else{
				$statusTransaccion = 0;
				$mensaje = "No se insert&oacute; la relaci&oacute;n entre la Actuaci&oacute;n y la Audiencia, intente de nuevo.";
				$status = "error";
			}
		}
        $respuesta["status"] = $status;
        $respuesta["mensaje"] = $mensaje;
        $respuesta["data"] = $dataActuacion;
		if( $statusTransaccion == 1){
			$proveedor->execute("COMMIT");
		}else{
			$proveedor->execute("ROLLBACK");
		}
		$proveedor->close();
		return json_encode($respuesta);
	}

	public function actualizaActaMinima($ActuacionesDto, $param){
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $respuesta = array('status' => '', 'mensaje' => '', 'data' => '' );
        $dataActuacion = array('idActuacion' => '','numActuacion'=>'', 'aniActuacion'=>'','cveTipoActuacion'=>'','idReferencia'=>'','numero'=>'','anio'=>'','cveTipoCarpeta'=>'','cveJuzgado'=>'','Sintesis'=>'','observaciones'=>'','cveUsuario'=>'','fechaRegistro'=>'','activo'=>'', 'imputadosCarpetas'=>'');
        $statusTransaccion = 1;
		$idActuacion = 0;
		$idAudiencia = $param["idAudiencia"];
		$listaImputados = ( isset($param["listaImputados"]) && $param["listaImputados"] != '') ? explode(',', $param["listaImputados"]) : array();
		$listaDetenidos = ( isset($param["listaDetenidos"]) && $param["listaDetenidos"] != '') ? explode(',', $param["listaDetenidos"]) : array();
		$status = "";
		$mensaje = "";
		//guardar en -actuaciones-
		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesTempDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		//obtencion de los datos actuales
		$ActuacionesTempDTO->setIdActuacion( $ActuacionesDto->getIdActuacion() );
		$ActuacionesTempDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesTempDTO, $proveedor );
		if( $ActuacionesTempDTO == '' ){
			$ActuacionesTempDTO = 'Error en la obtencion de los datos previos';
		}
		//actualizacion de datos
		$ActuacionesDto->setFechaActualizacion( date("Y-m-d H:i:s") );
		$ActuacionesDto->setSintesis( ( $ActuacionesDto->getSintesis() ));
		$ActuacionesDTO = $ActuacionesDAO->updateActuaciones( $ActuacionesDto, $proveedor );
		if( $ActuacionesDTO != '' ){ // se actualizó la actuación
			//insercion en bitacora
	        $bitacoraController = new BitacoramovimientosController();
	        $bitacoraController->agregar(28, 'Actualizacion de Actuacion para Acta Minima', 'dto', $ActuacionesDTO, $ActuacionesTempDTO, $proveedor);
			//obtencion del id de actuación recien actualizada
			$idActuacion = $ActuacionesDTO[0]->getIdActuacion();
        	$dataActuacion["idActuacion"] = $ActuacionesDTO[0]->getIdActuacion();
        	$dataActuacion["numActuacion"] = $ActuacionesDTO[0]->getNumActuacion();
        	$dataActuacion["aniActuacion"] = $ActuacionesDTO[0]->getAniActuacion();
        	$dataActuacion["cveTipoActuacion"] = $ActuacionesDTO[0]->getCveTipoActuacion();
        	$dataActuacion["idReferencia"] = $ActuacionesDTO[0]->getIdReferencia();
        	$dataActuacion["numero"] = $ActuacionesDTO[0]->getNumero();
        	$dataActuacion["anio"] = $ActuacionesDTO[0]->getAnio();
        	$dataActuacion["cveTipoCarpeta"] = $ActuacionesDTO[0]->getCveTipoCarpeta();
        	$dataActuacion["cveJuzgado"] = $ActuacionesDTO[0]->getCveJuzgado();
        	$dataActuacion["Sintesis"] = $ActuacionesDTO[0]->getSintesis();
        	$dataActuacion["observaciones"] = $ActuacionesDTO[0]->getObservaciones();
        	$dataActuacion["cveUsuario"] = $ActuacionesDTO[0]->getCveUsuario();
        	$dataActuacion["fechaRegistro"] = $ActuacionesDTO[0]->getFechaRegistro();
        	$dataActuacion["fechaActualizacion"] = $ActuacionesDTO[0]->getFechaActualizacion();
        	$dataActuacion["activo"] = $ActuacionesDTO[0]->getActivo();
			$status = "ok";
			$mensaje = "Se actualiz&oacute; el Acta M&iacute;nima satisfactoriamente.";
			//actualizacion de detención en -imputadoscarpetas-
			$legalDetencion = $this->actualizaLegalDetencion($listaImputados, $listaDetenidos, $proveedor);
			if( isset($legalDetencion['status']) && $legalDetencion['status'] == 'error' ){
				$statusTransaccion = $legalDetencion[1];
				$mensaje = $legalDetencion[2];
				$status = $legalDetencion[3];
			}else{
				$dataActuacion["imputadosCarpetas"] = $legalDetencion;
			}
		}else{
			$statusTransaccion = 0;
			$status = "error";
			$mensaje = "No se actualiz&oacute; la Actuaci&oacute;n, intente de nuevo.";
		}
        $respuesta["status"] = $status;
        $respuesta["mensaje"] = $mensaje;
        $respuesta["data"] = $dataActuacion;
		if( $statusTransaccion == 1){
			$proveedor->execute("COMMIT");
		}else{
			$proveedor->execute("ROLLBACK");
		}
		$proveedor->close();
		return json_encode($respuesta);
	}

	public function actualizaLegalDetencion($listaImputados, $listaDetenidos, $proveedor){
		$status = 0;
		//se actualiza LegalDetencion a todos en 'N' y posteriormente a los seleccionados en 'S'
		$imputadosCarpetas = '';
		$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
		foreach ($listaImputados as $imputado) {
			error_log('$imputado');
			error_log($imputado);
			$bitacoraController = new BitacoramovimientosController();
			$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
			$ImputadoscarpetasDTOtemp = new ImputadoscarpetasDTO();
			//datos previos
			$ImputadoscarpetasDTOtemp->setIdImputadoCarpeta( $imputado );
			$ImputadoscarpetasDTOtemp = $ImputadoscarpetasDAO->selectImputadoscarpetas($ImputadoscarpetasDTOtemp,'',$proveedor);
			//datos nuevos
			$ImputadoscarpetasDTO->setIdImputadoCarpeta( $imputado );
			$ImputadoscarpetasDTO->setLegalDetencion( 'N' );
			$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->updateImputadoscarpetas( $ImputadoscarpetasDTO,$proveedor );
			if( $ImputadoscarpetasDTO != '' ){
				$imputadosCarpetas[] = array('idImputadoCarpeta'=>$ImputadoscarpetasDTO[0]->getIdImputadoCarpeta(),
										'activo'=>$ImputadoscarpetasDTO[0]->getActivo(),
										'LegalDetencion'=>$ImputadoscarpetasDTO[0]->getLegalDetencion());
				//bitacora
				$bitacoraController->agregar(28, 'Actualizacion de Actuacion para Acta Minima en Legal Detencion, se elimina la detenciOn.', 'dto', $ImputadoscarpetasDTO, $ImputadoscarpetasDTOtemp, $proveedor);
				$status = 1;
			}else{
				$status = 0;
				$error = array('status'=>'error','statusTransaccion'=>'0', 'mensaje'=>'No se actualiz&oacute; la informaci&oacute;n del imputado, intente de nuevo.','status'=>'error');
			}
		}
		//actualizacion de los detenidos
		if( count($listaDetenidos) > 0 ){
			$imputadosCarpetas = '';
			foreach ($listaDetenidos as $detenido) {
				$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
				$ImputadoscarpetasDTO->setIdImputadoCarpeta( $detenido );
				$ImputadoscarpetasDTO->setLegalDetencion( 'S' );
				$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->updateImputadoscarpetas( $ImputadoscarpetasDTO,$proveedor );
				if( $ImputadoscarpetasDTO != '' ){
					$status = 1;
					$imputadosCarpetas[] = array('idImputadoCarpeta'=>$ImputadoscarpetasDTO[0]->getIdImputadoCarpeta(),
											'activo'=>$ImputadoscarpetasDTO[0]->getActivo(),
											'LegalDetencion'=>$ImputadoscarpetasDTO[0]->getLegalDetencion());
					//bitacora
					$bitacoraController->agregar(28, 'Actualizacion de Actuacion para Acta Minima en Legal Detencion, imputado detenido', 'dto', $ImputadoscarpetasDTO, '', $proveedor);
				}else{
					$status = 0;
					$error = array('status'=>'error','statusTransaccion'=>'0', 'mensaje'=>'No se actualiz&oacute; la Detenci&oacute;n del imputado, intente de nuevo.','status'=>'error');
				}
			}
		}
		if( $status == 1 ){
			return $imputadosCarpetas;
		}else{
			return $error;
		}
	}

	public function eliminaActaMinima($ActuacionesDto){
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $respuesta = array('status' => '', 'mensaje' => '', 'idActuacion' => '', 'idActasAudiencia'=>'' );
        $statusTransaccion = 1;

		$ActuacionesDTO = new ActuacionesDTO();
		$ActuacionesDAO = new ActuacionesDAO();
		$ActuacionesDTO->setIdActuacion( $ActuacionesDto->getIdActuacion() );
		$ActuacionesDTO->setSintesis( $ActuacionesDto->getSintesis() );
		$ActuacionesDTO->setObservaciones( $ActuacionesDto->getObservaciones() );
		$ActuacionesDTO->setActivo('N');
		$ActuacionesDTO = $ActuacionesDAO->updateActuaciones( $ActuacionesDTO, $proveedor );
		if( $ActuacionesDTO != ''){ //actualizacion realizada
			$idActuacion = $ActuacionesDTO[0]->getIdActuacion();
			//obtencion del id de la tabla -actasaudiencias-
			$ActasaudienciasDTO = new ActasaudienciasDTO();
			$ActasaudienciasDAO = new ActasaudienciasDAO();
			$ActasaudienciasDTO->setIdActuacion( $idActuacion );
			$ActasaudienciasDTO = $ActasaudienciasDAO->selectActasaudiencias( $ActasaudienciasDTO, '', $proveedor );
			if( $ActasaudienciasDTO != '' ){ //actualizacion del estado a 'N'
				$ActasaudienciasDTO = $ActasaudienciasDTO[0];
				$ActasaudienciasDTO->setActivo('N');
				$ActasaudienciasDTO = $ActasaudienciasDAO->updateActasaudiencias( $ActasaudienciasDTO, $proveedor );
				if( $ActasaudienciasDTO != '' ){ //actualizacion correcta
					$status = 'ok';
					$mensaje = 'Acta M&iacute;nima eliminada satisfactoriamente.';
					$respuesta["idActuacion"] = $idActuacion;
					$respuesta["idActasAudiencia"] = $ActasaudienciasDTO[0]->getIdActasAudiencia();
				}else{
					$status = 'error';
					$mensaje = 'No se elimin&oacute; la relaci&oacute;n del Acta M&iacute;nima, intente nuevamente.';
					$statusTransaccion = 0;
				}
			}
		}else{
			$status = 'error';
			$mensaje = 'No se elimin&oacute; el Acta M&iacute;nima, intente nuevamente.';
			$statusTransaccion = 0;
		}
        $respuesta["status"] = $status;
        $respuesta["mensaje"] = $mensaje;
		if( $statusTransaccion == 1){
			$proveedor->execute("COMMIT");
		}else{
			$proveedor->execute("ROLLBACK");
		}
		$proveedor->close();
		return json_encode($respuesta);
	}

	public function rangoFechasBusqueda( $fechaInicio, $fechaFin ){
		if( $fechaInicio != '' ){
			$fechaInicio = explode('/', $fechaInicio);
			$fechaInicio = $fechaInicio[2] . '-' . $fechaInicio[1] . '-' . $fechaInicio[0] . " 00:00:00";
		}else{
			$fechaInicio = "1980-01-01 00:00:00";
		}
		if( $fechaFin != '' ){
			$fechaFin = explode('/', $fechaFin);
			$fechaFin = $fechaFin[2] . '-' . $fechaFin[1] . '-' . $fechaFin[0] . " 23:59:59";
		}else{
			$fechaFin = "2030-12-12 23:59:59";
		}
		return array('fechaInicio'=>$fechaInicio,'fechaFin'=>$fechaFin);
	}

	public function encuentraActasMinimas($ActuacionesDto, $param){
		$cveTipoActuacion = 6; //corresponde a Actas Mínimas
		$actasEncontradas = 0;
		$status = '';
		$mensaje = '';
		$idSolicitudAudiencia = 0;
		$respuesta = array('status'=>'','mensaje'=>'','totalRegistros'=>'','data'=>'');
		$actaminima = array();
		$cveTipoCarpeta = array();
		$actaAudiencia = array();
		//obtener audiencias--pendiente
		$audiencias = array();
		$imputados = array();
		$imputadoscarpetas = array();
		/*//asignacion de rango de fechas para busqueda
		$rangoFechas = $this->rangoFechasBusqueda( $param["fechaDesde"], $param["fechaHasta"]);
		$sqlRangoFechas = " AND (fechaRegistro >= '" . $rangoFechas['fechaInicio'] . "' AND fechaRegistro <= '" . $rangoFechas['fechaFin'] ."')";
        //definicion de el numero de pagina y los renglones por cada una
        $page = ( isset($param['pag']) ? $param['pag'] : 1 );
        $numRows = ( isset($param['cantxPag']) ? $param['cantxPag'] : 999999 );*/
		//búsqueda de actuaciones
		$ActuacionesDAO = new ActuacionesDAO();
		$ActuacionesDto->setCveTipoActuacion( $cveTipoActuacion );
		$ActuacionesDto->setActivo( 'S' );
		//$ActuacionesDto = $ActuacionesDAO->selectActuaciones( $ActuacionesDto, '', $sqlRangoFechas.' ORDER BY idActuacion DESC');
		$ActuacionesDto = $ActuacionesDAO->selectActuaciones( $ActuacionesDto, '', ' ORDER BY idActuacion DESC', $param );
		//obtención de tipos de carpetas
		$TiposcarpetasDTO = new TiposcarpetasDTO();
		$TiposcarpetasDAO = new TiposcarpetasDAO();
		$TiposcarpetasDTO->setActivo('S');
		$TiposcarpetasDTO = $TiposcarpetasDAO->selectTiposcarpetas( $TiposcarpetasDTO );

		if( $ActuacionesDto != ''){ //encontró actas
			$actasEncontradas = count($ActuacionesDto);
			foreach ($ActuacionesDto as $actuacion) {

				//obtencion de los datos del juzgado
				$cveTipoJuzgado = '';
				$JuzgadosDTO = new JuzgadosDTO();
				$JuzgadosDAO = new JuzgadosDAO();
				$JuzgadosDTO->setCveJuzgado( $actuacion->getCveJuzgado() );
				$JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO );
				if( $JuzgadosDTO != '' ){
					$cveTipoJuzgado = $JuzgadosDTO[0]->getCveTipoJuzgado();
				}

				$cvetipocarpeta = array();
				if( $TiposcarpetasDTO != '' ){
					foreach ($TiposcarpetasDTO as $tipocarpeta) {
						if( $actuacion->getCveTipoCarpeta() == $tipocarpeta->getCveTipoCarpeta() ){
							$cvetipocarpeta[] = array('cveTipoCarpeta'=>$tipocarpeta->getCveTipoCarpeta(),
												'desTipoCarpeta'=>$tipocarpeta->getDesTipoCarpeta());
						}
					}
				}

				//obtención de actasaudiencia
				$actasaudiencias = array();
				$ActasaudienciasDTO = new ActasaudienciasDTO();
				$ActasaudienciasDAO = new ActasaudienciasDAO();
				$ActasaudienciasDTO->setActivo('S');
				$ActasaudienciasDTO->setIdActuacion( $actuacion->getIdActuacion() );
				$ActasaudienciasDTO = $ActasaudienciasDAO->selectActasaudiencias( $ActasaudienciasDTO );

				if( $ActasaudienciasDTO != ''){
					foreach ($ActasaudienciasDTO as $actaaudiencia) {
						if( $actuacion->getIdActuacion() == $actaaudiencia->getIdActuacion() ){

							//obtencion de audiencias
							$audiencias = array();
							$AudienciasDTO = new AudienciasDTO();
							$AudienciasDAO = new AudienciasDAO();
							$AudienciasDTO->setIdAudiencia( $actaaudiencia->getIdAudiencia() );
							$AudienciasDTO = $AudienciasDAO->selectAudiencias( $AudienciasDTO );

							if( $AudienciasDTO != ''){ //datos de la audiencia
								$idsSolicitudAudiencias = '';
								foreach ($AudienciasDTO as $audiencia) {
									//obtencion de ids de Audiencia
									$idsSolicitudAudiencias .= $audiencia->getIdSolicitudAudiencia() . ',';
								}
								$sqlIdImputadosSolicitudes = '';
								if( strlen($idsSolicitudAudiencias) > 0 ){
									$idsSolicitudAudiencias = substr($idsSolicitudAudiencias,0,strlen($idsSolicitudAudiencias)-1);
									$sqlIdImputadosSolicitudes = ' AND idSolicitudAudiencia in (' . $idsSolicitudAudiencias . ') AND idImputadoCarpeta<>0 GROUP BY idImputadoCarpeta ';
								}

								$idSolicitudAudiencia = $AudienciasDTO[0]->getIdSolicitudAudiencia();
								//obtención del catalogo de audiencias
								$desCatAudiencia = '';
								$CataudienciasDTO = new CataudienciasDTO();
								$CataudienciasDAO = new CataudienciasDAO();
								$CataudienciasDTO->setActivo('S');
								$CataudienciasDTO->setCveCatAudiencia( $AudienciasDTO[0]->getCveCatAudiencia() );
								$CataudienciasDTO = $CataudienciasDAO->selectCataudiencias( $CataudienciasDTO );
								if( $CataudienciasDTO != '' ){
									$desCatAudiencia = $CataudienciasDTO[0]->getDesCatAudiencia();
								}

								//obtencion de los imputados a través de -imputadossolocitudes- -> -imputadoscarpetas-
								$imputados = array();
								$idsImputadosCarpeta = '';
								$totalimputadoscarpetas = 0;
								$ImputadossolicitudesDTO = new ImputadossolicitudesDTO();
								$ImputadossolicitudesDAO = new ImputadossolicitudesDAO();
								//$ImputadossolicitudesDTO->setIdSolicitudAudiencia( $idSolicitudAudiencia );
								$ImputadossolicitudesDTO->setActivo('S');
								$ImputadossolicitudesDTO = $ImputadossolicitudesDAO->selectImputadossolicitudes( $ImputadossolicitudesDTO, $sqlIdImputadosSolicitudes );
								if( $ImputadossolicitudesDTO != ''){ //existen imputados
									foreach ($ImputadossolicitudesDTO as $imputadosolicitud) {
										$idsImputadosCarpeta .= $imputadosolicitud->getIdImputadoCarpeta() . ',';
									}
									//eliminacion de la ultima ','
									$sqlImputadosCarpetas = '';
									if( strlen( $idsImputadosCarpeta ) >1 ){
										$idsImputadosCarpeta = rtrim($idsImputadosCarpeta, ',');
										$sqlImputadosCarpetas = " AND idImputadoCarpeta IN (" . $idsImputadosCarpeta . ") ";
									}

									//obtención de los imputados en -imputadoscarpetas-
									$imputados = array();
									$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
									$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
									$ImputadoscarpetasDTO->setActivo('S');
									$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->selectImputadoscarpetas( $ImputadoscarpetasDTO, $sqlImputadosCarpetas );
									if( $ImputadoscarpetasDTO != '' ){ //tiene imputados
										$totalimputadoscarpetas = count($ImputadoscarpetasDTO);
										foreach ($ImputadoscarpetasDTO as $imputadocarpeta) {
											$nombre = '';
											if( $imputadocarpeta->getCveTipoPersona() ==1 ){ //persona fisica
												$nombre = utf8_encode($imputadocarpeta->getPaterno()) . ' ' . utf8_encode($imputadocarpeta->getMaterno()) . ' ' . utf8_encode($imputadocarpeta->getNombre());
											}else{ //persona moral u otra
												$nombre = utf8_encode($imputadocarpeta->getNombreMoral());
											}
											$imputados[] = array('idImputadoCarpeta'=>$imputadocarpeta->getIdImputadoCarpeta(),
															'nombre'=>$nombre,
															'LegalDetencion'=>$imputadocarpeta->getLegalDetencion(),
															'activo'=>$imputadocarpeta->getActivo(),
															'fechaRegistro'=>$this->fechaSalida($imputadocarpeta->getFechaRegistro()));
										}
									}
								}

								 $audiencias[] = array('idAudiencia'=>$AudienciasDTO[0]->getIdAudiencia(),
												'idSolicitudAudiencia'=>$AudienciasDTO[0]->getIdSolicitudAudiencia(),
												'cveCatAudiencia'=>$AudienciasDTO[0]->getCveCatAudiencia(),
												'desCatAudiencia'=>$desCatAudiencia,
												'fechaRegistro'=>$this->fechaSalida($AudienciasDTO[0]->getFechaInicial()),
												'totalimputadoscarpetas'=>$totalimputadoscarpetas,
												'imputadoscarpetas'=>$imputados);
							}

							$actasaudiencias[] = array('idActasAudiencia'=>$actaaudiencia->getIdActasAudiencia(),'idActuacion'=>$actaaudiencia->getIdActuacion(),'idAudiencia'=>$actaaudiencia->getIdAudiencia(),'fechaRegistro'=>$this->fechaSalida($actaaudiencia->getFechaRegistro()),'activo'=>$actaaudiencia->getActivo(),'audiencia'=>$audiencias);

						}
					}
				}

				$actaminima[] = array('idActuacion'=>$actuacion->getIdActuacion(),'idReferencia'=>$actuacion->getIdReferencia(),'numero'=>$actuacion->getNumero(),'anio'=>$actuacion->getAnio(),'numActuacion'=>$actuacion->getNumActuacion(),'aniActuacion'=>$actuacion->getAniActuacion(), 'cveTipoCarpeta'=>$cvetipocarpeta,'cveJuzgado'=>$actuacion->getCveJuzgado(),'cveTipoJuzgado'=>$cveTipoJuzgado,'Sintesis'=> $actuacion->getSintesis(),'observaciones'=>$actuacion->getObservaciones(),'activo'=>$actuacion->getActivo(),'fechaRegistro'=>$this->fechaSalida($actuacion->getFechaRegistro()),'fechaActualizacion'=>$this->fechaSalida($actuacion->getFechaActualizacion()),'actaAudiencia'=>$actasaudiencias);
			}
			$status = 'ok';
			$mensaje = 'Actas M&iacute;nimas encontradas.';
		}else{
			$status = 'error';
			$mensaje = 'No se encontraron Actas M&iacute;nimas con los parametros de b&uacute;squeda seleccionados. Intente nuevamente.';
		}

		$respuesta['data'] = $actaminima;
		$respuesta['status'] = $status;
		$respuesta['mensaje'] = $mensaje;
		$respuesta['totalRegistros'] = $actasEncontradas;
		return json_encode($respuesta);
	}

    // *Proceso:
    // -ObtenciOn de los datos a traves del ID de carpeta judicial, para obtener la clave de Juzgado
    // -Obtener de la tabla tbljuzgados el id del juzgado obtenido y cveTipoJuzgado 
	public function carpetaArbol($param){
		$cveJuzgado = '0';
		$cveTipoJuzgado = '0';
		$respuesta = array( "idJuzgado" => "0/0" );
		$CarpetasjudicialesDTO = new CarpetasjudicialesDTO();
		$CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
		$CarpetasjudicialesDTO->setIdCarpetaJudicial( $param['idCarpetaJudicial'] );
		$CarpetasjudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales( $CarpetasjudicialesDTO );
		if( $CarpetasjudicialesDTO != '' ){
			$cveJuzgado = $CarpetasjudicialesDTO[0]->getCveJuzgado();
			$JuzgadosDTO = new JuzgadosDTO();
			$JuzgadosDAO = new JuzgadosDAO();
			$JuzgadosDTO->setCveJuzgado( $cveJuzgado );
			$JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO );
			if( $JuzgadosDTO != '' ){
				$cveTipoJuzgado = $JuzgadosDTO[0]->getCveTipoJuzgado();
				$respuesta = array( "idJuzgado" => $cveJuzgado . "/" . $cveTipoJuzgado );
			}
		}
		return json_encode($respuesta);
	}

    public function obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion) {
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setCveJuzgado($cveJuzgado);
        $contadoresDto->setCveTipoActuacion($cveTipoActuacion);
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoCarpeta("");
        $contadoresDto = $contadorCrl->getContador($contadoresDto); 
        return $contadoresDto;
    }

	public function fechaSalida( $fechaEntrada ){
		$tmpFecha = explode(' ', $fechaEntrada );
		$fecha = explode('-', $tmpFecha[0]);
		return ( $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] . ' ' . $tmpFecha[1] );
	}
}
?>
