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
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/notificaciones/NotificacionesController.Class.php");

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejapromociones/QuejapromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/quejapromociones/QuejapromocionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
//carpetas judiciales
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
//imputados carpetas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
//ofendidos carpetas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
//tipos de personas
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
//actuaciones
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
//actuaciones
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
//actuaciones
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/quejosospromociones/QuejosospromocionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejosospromociones/QuejosospromocionesDTO.Class.php");

class QuejapromocionesController {
private $proveedor;
private $cveTipoActuacionQueja = '27';
public function __construct() {
}
public function validarQuejapromociones($QuejapromocionesDto){
$QuejapromocionesDto->setidQuejaProm(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getidQuejaProm()))));
$QuejapromocionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getidActuacion()))));
$QuejapromocionesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getidJuzgador()))));
$QuejapromocionesDto->setacuerdo(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getacuerdo()))));
$QuejapromocionesDto->setfechaAcuerdo(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getfechaAcuerdo()))));
$QuejapromocionesDto->setresolucion(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getresolucion()))));
$QuejapromocionesDto->setfechaResolucion(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getfechaResolucion()))));
$QuejapromocionesDto->setactivo(strtoupper(str_ireplace("'","",trim($QuejapromocionesDto->getactivo()))));
return $QuejapromocionesDto;
}
public function selectQuejapromociones($QuejapromocionesDto,$proveedor=null){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesDao = new QuejapromocionesDAO();
$QuejapromocionesDto = $QuejapromocionesDao->selectQuejapromociones($QuejapromocionesDto,$proveedor);
return $QuejapromocionesDto;
}
public function insertQuejapromociones($QuejapromocionesDto,$proveedor=null){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesDao = new QuejapromocionesDAO();
$QuejapromocionesDto = $QuejapromocionesDao->insertQuejapromociones($QuejapromocionesDto,$proveedor);
return $QuejapromocionesDto;
}
public function updateQuejapromociones($QuejapromocionesDto,$proveedor=null){
	$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
	$QuejapromocionesDao = new QuejapromocionesDAO();
	$QuejapromocionesDto = $QuejapromocionesDao->updateQuejapromociones($QuejapromocionesDto,$proveedor);

	$estado = false;
	$correos = array();
	$resolvio = 'NO ESPECIFICADO';
	if( $QuejapromocionesDto != ''){
		$resolvio = ( $QuejapromocionesDto[0]->getResolucion() != '' ) ? 'Consejo de la Judicatura del Poder Judicial del Estado de M&eacute;xico' : 'Juez';
		//obtencion del id de actuacion
		$idActuacion = $QuejapromocionesDto[0]->getIdActuacion();
		//obtencion de los quejosos en -quejosospromociones-
		$QuejosospromocionesDTO = new QuejosospromocionesDTO();
		$QuejosospromocionesDAO = new QuejosospromocionesDAO();
		$QuejosospromocionesDTO->setIdActuacion( $idActuacion );
		$QuejosospromocionesDTO->setActivo( 'S' );
		$QuejosospromocionesDTO = $QuejosospromocionesDAO->selectQuejosospromociones( $QuejosospromocionesDTO );
		if( $QuejosospromocionesDTO != '' ){
			foreach ($QuejosospromocionesDTO as $Quejosopromocion) {
				$correos[] = $Quejosopromocion->getEmail();
			}
			array_push($correos, 'israelhs@lithos.com.mx');
			$estado = true;
		}
	}

	if( $estado ){
		foreach ($correos as $correo) {
			$nombrePersona = '';
			$fecha = '';
			$subject = 'Notificaci&oacute;n de Queja contra Juzgador.';
			$strCuerpoEmail = '<p><img src="http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/img/logoLogin.png" style="width: 100px; height: 129px;"></p>'
							. '<p>El <b>Sistema de Gesti&oacute;n Judicial Penal del Estado de M&eacute;xico</b> le informa que la queja que usted registr&oacute; fue resuelta por el <b>' . $resolvio . '.</b></p>'
							. '<p>Por favor acuda a la oficina donde la registr&oacute; para conocer los detalles de esta Resoluci&oacute;n.</p>';
			$NotificacionesController = new NotificacionesController();
		    $respuesta = $NotificacionesController->generaCorreo($correo,$nombrePersona,$fecha,$subject,$strCuerpoEmail);
		    if( $respuesta ){
		    	$respuesta = 'OK';
		    }else{
		    	$respuesta = 'ERROR';
		    }
		}
	}

	return $QuejapromocionesDto;
}
public function deleteQuejapromociones($QuejapromocionesDto,$proveedor=null){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesDao = new QuejapromocionesDAO();
$QuejapromocionesDto = $QuejapromocionesDao->deleteQuejapromociones($QuejapromocionesDto,$proveedor);
return $QuejapromocionesDto;
}

	public function enviaNotificacionQueja( $json )
	{
		$objeto = json_decode($json);
		// print_r($objeto->status);
		$dt = $objeto->data[0];
		$desJuzgado = $dt->desTipoJuzgado;
		$desCarpeta = $dt->descTipoCarpeta;
		$numero = $dt->numero;
		$anio = $dt->anio;
		$sintesis = $dt->sintesis;
		$tipoNotificacion = $dt->descTipoNotificacion;
		$documento = $dt->observaciones;
		$imputados = $dt->imputados;
		$medidascautelares = $dt->medidascautelares;
		$listaImputados = '<ul>';
		foreach( $imputados as $imputado ){
			$listaImputados .= '<li><i>- Imputado: </i>' . $imputado->nombreImputado . '<br/>';
			foreach ( $medidascautelares as $medidacautelar ) {
				if( $imputado->idImputado == $medidacautelar->idImputadoCarpeta ){
					$apelacion = ( $medidacautelar->Apelada == 'S' ) ? 'SI' : 'NO';
					$listaImputados .= '<ul><li>Medida cautelar: ' . $medidacautelar->desMedidaCautelar . '<br/><ul>'
								. '<li>Fecha inicio: ' . $medidacautelar->fechaInicio . '</li>'
								. '<li>Fecha fin: ' . $medidacautelar->fechaTermina . '</li>'
								 . '<li>Medida apelada: ' . $apelacion . '</li>'
								. '</ul></li></ul>';
				}
			}
			$listaImputados .= '</li>';
		}
		$listaImputados .= '</ul>';

		$respuesta = '';
		$cedula = 'cemecaedomex'; //'tmp.israel.hernandez';
		$nombrePersona = '';
		$fecha = '';
		$subject = 'MC - ' . $desJuzgado . ' - ' . $desCarpeta . ' ' . $numero . ' / ' . $anio;		
		$strCuerpoEmail = '<b>* Sintesis:</b>'. $sintesis . '<br/><br/>'
					. '<b>* Tipo de Notificacion:</b>' . $tipoNotificacion . '<br/><br/>'
					. '<b>* Medidas cautelares:</b><br/>' . $listaImputados . '<br/>'
					. '<b>* Contenido del documento:</b><br/>'
					. $documento . '<br/><br/><br/>'
					. 'Fecha Registro: ' . $dt->fechaRegistro . ' - Fecha Actualizaci&oacute;n: ' . $dt->fechaActualizacion . '</br></br></br>'
					. '<a href="http://sigejupe2.pjedomex.gob.mx/" target="_blank">Ingrese al Sistema</a> para ver el detalle completo de esta(s) Medida(s) Cautelar(es). ';

		$NotificacionesController = new NotificacionesController();
	    $respuesta = $NotificacionesController->generaCorreo($cedula,$nombrePersona,$fecha,$subject,$strCuerpoEmail);
	    if( $respuesta ){
	    	$respuesta = 'OK';
	    }else{
	    	$respuesta = 'ERROR';
	    }
	    error_log('Estado del envio de correo a Medida Cautelares: ' . $respuesta);
	    return $respuesta;
	}

    public function consultarJuzgadoresQuejas(){
        $respuesta = array();
        $nombreJuzgador = '';
        $JuzgadoresDao = new JuzgadoresDAO();
        $JuzgadoresDto = new JuzgadoresDTO();
        $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto, 'ORDER BY paterno, materno, nombre ASC');
        if ($JuzgadoresDto != '') {
            foreach ($JuzgadoresDto as $Juzgador) {
                $estadoJuzgador = '';
                if ($Juzgador->getActivo() == 'N') {
                    $estadoJuzgador = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(INACTIVO)';
                }
                $nombreJuzgador = $Juzgador->getTitulo() . ' ' . $Juzgador->getPaterno() . ' ' . $Juzgador->getMaterno() . ' ' . $Juzgador->getNombre() . $estadoJuzgador;
                $juzgadores[] = array('idJuzgador'     => $Juzgador->getIdJuzgador(),
                                      'nombreJuzgador' => $nombreJuzgador);
            }
            $respuesta = array('estatus' => 'OK', 'totalCount' => count($JuzgadoresDto), 'datos' => $juzgadores);
        } else {
            $respuesta = array('estatus' => 'ERROR', 'totalCount' => count($JuzgadoresDto), 'datos' => '');
        }
        return json_encode($respuesta);
    }

	public function buscaRelacionParaQueja($QuejapromocionesDto,$params){
		$estatus = '';
		$mensaje = '';
		$imputados = array();
		$ofendidos = array();
		$datos = array();
		$respuesta = array();
		$tmpTP = '';
		$cveJuzgado = explode('/', $params['cveJuzgado'])[0];
		// Proceso: Busqueda en las carpetas judiciales los datos de los imputados y ofendidos
		$CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
		$CarpetasjudicialesDTO = new CarpetasjudicialesDTO();
		$CarpetasjudicialesDTO->setCveJuzgado( $cveJuzgado );
		$CarpetasjudicialesDTO->setCveTipoCarpeta( $params['cveTipoCarpeta'] );
		$CarpetasjudicialesDTO->setNumero( $params['numero'] );
		$CarpetasjudicialesDTO->setAnio( $params['anio'] );
		$CarpetasjudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales( $CarpetasjudicialesDTO );
		if( $CarpetasjudicialesDTO != ''){
			$tmp = $CarpetasjudicialesDTO[0];

			//validacion de regitro existente en actuaciones
			$ActuacionesDTO = new ActuacionesDTO();
			$ActuacionesDAO = new ActuacionesDAO();
			$ActuacionesDTO->setActivo( 'S' );
			$ActuacionesDTO->setCveTipoActuacion( $this->cveTipoActuacionQueja );
			$ActuacionesDTO->setIdReferencia( $tmp->getIdCarpetaJudicial() );
			$ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO );

			if( $ActuacionesDTO == '' ){
				//obtencion de tipo de personas
				$TipospersonasDTO = new TipospersonasDTO();
				$TipospersonasDAO = new TipospersonasDAO();
				$TipospersonasDTO->setActivo('S');
				$TipospersonasDTO = $TipospersonasDAO->selectTipospersonas( $TipospersonasDTO );
				if( $TipospersonasDTO != ''){
					$tmpTP = $TipospersonasDTO;
				}

				//obtenciOn de imputados
				$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
				$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
				$ImputadoscarpetasDTO->setIdCarpetaJudicial( $tmp->getIdCarpetaJudicial() );
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
						foreach ($tmpTP as $tp) {
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
				//obtenciOn de ofendidos
				$OfendidoscarpetasDAO = new OfendidoscarpetasDAO();
				$OfendidoscarpetasDTO = new OfendidoscarpetasDTO();
				$OfendidoscarpetasDTO->setIdCarpetaJudicial( $tmp->getIdCarpetaJudicial() );
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
						foreach ($tmpTP as $tp) {
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
				$datos = array('idReferencia'=>$tmp->getIdCarpetaJudicial(), 'imputados'=>$imputados,'ofendidos'=>$ofendidos);
				$estatus = 'OK';
				$mensaje = 'Los datos son validos, continue con la captura.';
			}else{
				$estatus = 'ERROR';
				$mensaje = 'Ya existe un registro con estos datos.<br/>Realice una consulta para ver la informaci&oacute;n almacenada &oacute;, verifique e intente nuevamente.';
			}
		}else{
			//no existen registros con la informacion ingresada
			$estatus = 'ERROR';
			$mensaje = 'No existe informaci&oacute;n relacionada. Verifique.';
		}
		$respuesta = array('estatus'=>$estatus,'mensaje'=>$mensaje, 'datos'=>$datos);
		return json_encode($respuesta);
	}
}
?>