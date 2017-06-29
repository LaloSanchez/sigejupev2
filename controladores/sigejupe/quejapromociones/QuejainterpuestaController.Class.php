<?php
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
//juzgadores
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

class QuejainterpuestaController {
	private $proveedor;
	private $cveTipoActuacionQueja = '27';
	public function __construct() {
	}

	public function buscaQuejasInterpuestas($QuejapromocionesDto,$params){
		$idsActuaciones = '';
		$sqlIdsActuaciones = '';
		$estado = false;
		$totalRegistros = 0;

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
		$JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO );


		//obtencion de las actuaciones con los status que se necesitan
		$sqlActuacionesEstatus = ' AND cveEstatus IN (37,39,40) '; //acordada por el juez, revisada por el consejo y resuelta por el consejo
		$ActuacionesestatusDTO = new ActuacionesestatusDTO();
		$ActuacionesestatusDAO = new ActuacionesestatusDAO();
		$ActuacionesestatusDTO->setActivo('S');
		$ActuacionesestatusDTO = $ActuacionesestatusDAO->selectActuacionesestatus( $ActuacionesestatusDTO, $sqlActuacionesEstatus );
		if( $ActuacionesestatusDTO != '' ){
			//guarda los ids de actuaciones
			foreach ($ActuacionesestatusDTO as $Actuacionestatus) {
				$idsActuaciones .= $Actuacionestatus->getIdActuacion() . ',';
			}
			//eliminacion de la ultima ','
			if( strlen( $idsActuaciones ) >1 ){
				$sqlIdsActuaciones = " AND idActuacion IN (" . substr($idsActuaciones, 0, -1) . ") ";
			}
			$estado = true;
		}

		//obtencion de las actuaciones
		if( $estado ){
			$ActuacionesDTO = new ActuacionesDTO();
			$ActuacionesDAO = new ActuacionesDAO();
			$ActuacionesDTO->setActivo('S');
			$ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO, '', $sqlIdsActuaciones );
			if( $ActuacionesDTO != '' ){
				foreach ($ActuacionesDTO as $Actuacion) {
					$actuacionesRef[] = array('idActuacion'=>$Actuacion->getIdActuacion(),'idReferencia'=>$Actuacion->getIdReferencia());
				}
				$estado = true;
			}else{
				$mensaje = 'No se encuentran Actuaciones relacionadas.';
				$estado = false;
			}
		}

		//obtencion de quejas promociones, juzgadores y quejosos
		if( $estado ){
			$totalRegistros = count($ActuacionesDTO);
			foreach ($ActuacionesDTO as $actuacion) {
				$idActuacion = $actuacion->getIdActuacion();
				$idReferencia = $actuacion->getIdReferencia();

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

				$estatusQueja = array();
				$ActuacionesestatusDTO = new ActuacionesestatusDTO();
				$ActuacionesestatusDAO = new ActuacionesestatusDAO();
				$ActuacionesestatusDTO->setActivo('S');
				$ActuacionesestatusDTO->setIdActuacion($idActuacion);
				$ActuacionesestatusDTO = $ActuacionesestatusDAO->selectActuacionesestatus( $ActuacionesestatusDTO );
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


				$QuejapromocionesDAO = new QuejapromocionesDAO();
				$QuejapromocionesDTO = new QuejapromocionesDTO();
				$QuejapromocionesDTO->setActivo( 'S' );
				$QuejapromocionesDTO->setIdActuacion( $idActuacion );
				$QuejapromocionesDTO = $QuejapromocionesDAO->selectQuejapromociones( $QuejapromocionesDTO );
				if( $QuejapromocionesDTO != '' ){
					$nombreJuzgador = "";
					//obtencion del juzgador
					$JuzgadoresDAO = new JuzgadoresDAO();
					$JuzgadoresDTO = new JuzgadoresDTO();
					$JuzgadoresDTO->setIdJuzgador( $QuejapromocionesDTO[0]->getIdJuzgador() );
					$JuzgadoresDTO = $JuzgadoresDAO->selectJuzgadores( $JuzgadoresDTO );
					if( $JuzgadoresDTO != '' ){
						$nombreJuzgador = $JuzgadoresDTO[0]->getTitulo() . ' ' . $JuzgadoresDTO[0]->getPaterno() . ' ' . $JuzgadoresDTO[0]->getMaterno() . ' ' . $JuzgadoresDTO[0]->getNombre();
					}
					$quejaPromocion = array('idQuejaPromocion'=>$QuejapromocionesDTO[0]->getIdQuejaProm(),
									'idJuzgador'=>$QuejapromocionesDTO[0]->getIdJuzgador(),
									'juzgador'=>$nombreJuzgador,
									'acuerdo'=>$QuejapromocionesDTO[0]->getAcuerdo(),
									'fechaAcuerdo'=>$QuejapromocionesDTO[0]->getFechaAcuerdo(),
									'resolucion'=>$QuejapromocionesDTO[0]->getResolucion(),
									'fechaResolucion'=>$QuejapromocionesDTO[0]->getFechaResolucion());

					//obtencion de los imputados relacionados a la carpeta
					$imputados = array();
					if( $idReferencia != '' ){
						$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
						$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
						$ImputadoscarpetasDTO->setIdCarpetaJudicial( $idReferencia );
						$ImputadoscarpetasDTO->setActivo( 'S' );
						$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->selectImputadoscarpetas( $ImputadoscarpetasDTO );
						if( $ImputadoscarpetasDTO != '' ){
							foreach ($ImputadoscarpetasDTO as $Imputadoscarpetas) {
								$nombre = '';
								if( $Imputadoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
									$nombre = $Imputadoscarpetas->getPaterno() . ' ' . $Imputadoscarpetas->getMaterno() . ' ' . $Imputadoscarpetas->getNombre();
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
												'tipoPersona'=>$tipoPersona, //$Imputadoscarpetas->getCveTipoPersona(),
												'descTipoPersona'=>$descTipoPersona,
												'nombre'=>$nombre);
							}
						}
					}

					//obtencion de los ofendidos relacionados a la carpeta
					$ofendidos = array();
					if( $idReferencia != '' ){
						$OfendidoscarpetasDAO = new OfendidoscarpetasDAO();
						$OfendidoscarpetasDTO = new OfendidoscarpetasDTO();
						$OfendidoscarpetasDTO->setIdCarpetaJudicial( $idReferencia );
						$OfendidoscarpetasDTO->setActivo( 'S' );
						$OfendidoscarpetasDTO = $OfendidoscarpetasDAO->selectOfendidoscarpetas( $OfendidoscarpetasDTO );
						if( $OfendidoscarpetasDTO != '' ){
							foreach ($OfendidoscarpetasDTO as $Ofendidoscarpetas) {
								$nombre = '';
								if( $Ofendidoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
									$nombre = $Ofendidoscarpetas->getPaterno() . ' ' . $Ofendidoscarpetas->getMaterno() . ' ' . $Ofendidoscarpetas->getNombre();
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
												'tipoPersona'=>$tipoPersona, //$Imputadoscarpetas->getCveTipoPersona(),
												'descTipoPersona'=>$descTipoPersona,
												'nombre'=>$nombre);
							}
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

					//definicion de juzgado xxx
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



					$estatus = true;
					$mensaje = 'Se encontraron coincidencias.';
				}else{
					$mensaje = 'No se encuentran Quejas relacionadas.';
					$estatus = false;
				}
			}
		}

		$estatus = ( $estatus ) ? 'OK' : 'ERROR';

		$respuesta = array('estatus'=>$estatus,'totalRegistros'=>$totalRegistros,'mensaje'=>$mensaje,'data'=>$actuaciones);
		return json_encode( $respuesta );
	}

	
	public function buscaQuejasInterpuestasJuez($QuejapromocionesDto,$params)
	{
		/*
		Proceso:
		1. Obtener el ID del Juzgador a traves del No. de Empleado
		2. Buscar registros en -tblquejapromociones- a travEs de -idJuzgador- y obtener el -idActuacion-
		3. Buscar en -tblactuaciones- los registros a travEs de -idActuacion- y obtener la informaciOn de las tablas relacionadas
		*/

		$estatus = false;
		$mensaje = '';
		$datos = '';
		$respuesta = '';
		$idJuzgador = '';
		$idsActuaciones = array();
		$sqlIdsActuaciones = '';
		$cveTipoActuacion = 27;

		$totalRegistros = 0;
		$imputados = "";
		$ofendidos = "";
		$idQuienSeQueja = "";
		$quienSeQueja = "";
		$actuaciones = "";

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
		$JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO );
		//fin obtencion de catalogos

		//Paso 1
		$JuzgadoresDTO = new JuzgadoresDTO();
		$JuzgadoresDAO = new JuzgadoresDAO();
		$JuzgadoresDTO->setNumEmpleado( $params['numEmpleado'] );
		$JuzgadoresDTO->setActivo( 'S' );
		$JuzgadoresDTO = $JuzgadoresDAO->selectJuzgadores( $JuzgadoresDTO );
		if( $JuzgadoresDTO != '' ){
			$idJuzgador = $JuzgadoresDTO[0]->getIdJuzgador();
			$estatus = true;
		}else{
			$estatus = false;
			$mensaje = 'No se encuentra informaci&oacute;n del Juzgador.';
		}

		//Paso 2
		if( $estatus ){
			$QuejapromocionesDAO = new QuejapromocionesDAO();
			$QuejapromocionesDTO = new QuejapromocionesDTO();
			$QuejapromocionesDTO->setIdJuzgador( $idJuzgador );
			$QuejapromocionesDTO->setActivo( 'S' );
			$QuejapromocionesDTO = $QuejapromocionesDAO->selectQuejapromociones( $QuejapromocionesDTO );
			if( $QuejapromocionesDTO != '' ){
				foreach ( $QuejapromocionesDTO as $Quejapromociones ) {
					$idsActuaciones[] = $Quejapromociones->getIdActuacion();
				}
				$estatus = true;
			}else{
				$mensaje = 'No se encuentran Quejas relacionadas a este Juzgador.';
				$estatus = false;
			}
		}

		//Paso 3
		if( $estatus ){
			foreach ( $idsActuaciones as $idActuacion ) {
				$sqlIdsActuaciones .= $idActuacion . ',';
			}
			//eliminacion de la ultima ','
			if( strlen( $sqlIdsActuaciones ) >1 ){
				$sqlIdsActuaciones = " AND idActuacion IN (" . substr($sqlIdsActuaciones, 0, -1) . ") ";
			}
			$ActuacionesDAO = new ActuacionesDAO();
			$ActuacionesDTO = new ActuacionesDTO();
			$ActuacionesDTO->setCveJuzgado( $params['cveJuzgado'] );
			$ActuacionesDTO->setCveTipoCarpeta( $params['cveTipoCarpeta'] );
			$ActuacionesDTO->setNumero( $params['numero'] );
			$ActuacionesDTO->setAnio( $params['anio'] );
			$ActuacionesDTO->setNumActuacion( $params['numActuacion'] );
			$ActuacionesDTO->setAniActuacion( $params['aniActuacion'] );
			$ActuacionesDTO->setCveTipoActuacion( $cveTipoActuacion );
			$ActuacionesDTO = $ActuacionesDAO->selectActuaciones( $ActuacionesDTO, '', $sqlIdsActuaciones, $params );
			if( $ActuacionesDTO != '' ){
				$estatus = true;
				$mensaje = 'Quejas encontradas.';
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
					if( $idReferencia != '' ){
						$ImputadoscarpetasDAO = new ImputadoscarpetasDAO();
						$ImputadoscarpetasDTO = new ImputadoscarpetasDTO();
						$ImputadoscarpetasDTO->setIdCarpetaJudicial( $idReferencia );
						$ImputadoscarpetasDTO->setActivo( 'S' );
						$ImputadoscarpetasDTO = $ImputadoscarpetasDAO->selectImputadoscarpetas( $ImputadoscarpetasDTO );
						if( $ImputadoscarpetasDTO != '' ){
							foreach ($ImputadoscarpetasDTO as $Imputadoscarpetas) {
								$nombre = '';
								if( $Imputadoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
									$nombre = $Imputadoscarpetas->getPaterno() . ' ' . $Imputadoscarpetas->getMaterno() . ' ' . $Imputadoscarpetas->getNombre();
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
												'tipoPersona'=>$tipoPersona, //$Imputadoscarpetas->getCveTipoPersona(),
												'descTipoPersona'=>$descTipoPersona,
												'nombre'=>$nombre);
							}
						}
					}

					//obtencion de los ofendidos relacionados a la carpeta
					$ofendidos = array();
					if( $idReferencia != '' ){
						$OfendidoscarpetasDAO = new OfendidoscarpetasDAO();
						$OfendidoscarpetasDTO = new OfendidoscarpetasDTO();
						$OfendidoscarpetasDTO->setIdCarpetaJudicial( $idReferencia );
						$OfendidoscarpetasDTO->setActivo( 'S' );
						$OfendidoscarpetasDTO = $OfendidoscarpetasDAO->selectOfendidoscarpetas( $OfendidoscarpetasDTO );
						if( $OfendidoscarpetasDTO != '' ){
							foreach ($OfendidoscarpetasDTO as $Ofendidoscarpetas) {
								$nombre = '';
								if( $Ofendidoscarpetas->getCveTipoPersona() == 1 ){ //persona fisica
									$nombre = $Ofendidoscarpetas->getPaterno() . ' ' . $Ofendidoscarpetas->getMaterno() . ' ' . $Ofendidoscarpetas->getNombre();
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
												'tipoPersona'=>$tipoPersona, //$Imputadoscarpetas->getCveTipoPersona(),
												'descTipoPersona'=>$descTipoPersona,
												'nombre'=>$nombre);
							}
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
				$estatus = false;
				$mensaje = 'No se encuentra la informaci&oacute;n de la(s) queja(s) relacionada(s).';
			}
		}

		$estatus = ( $estatus ) ? 'OK' : 'ERROR';

		$respuesta = array('estatus'=>$estatus,'totalRegistros'=>$totalRegistros,'mensaje'=>$mensaje,'data'=>$actuaciones);
		return json_encode( $respuesta );

	}

	private function fechaNormal($fechaBase) {
		list($fecha, $hora) = explode(" ", $fechaBase);
		list($year, $mes, $dia) = explode("-", $fecha);
		return $dia . "/" . $mes . "/" . $year . " " . $hora;
	}

	    // $proveedor = new Proveedor('mysql', 'sigejupe');
	    // $proveedor->connect();
	    // $proveedor->execute("BEGIN");
	    // $statusTransaccion = 0;

}
?>