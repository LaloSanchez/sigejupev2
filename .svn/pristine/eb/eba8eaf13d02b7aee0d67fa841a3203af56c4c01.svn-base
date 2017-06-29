<?php
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
//Medidas Cautelares
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenesimputados/OrdenesimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenesimputados/OrdenesimputadosDAO.Class.php");
//Medidas Apeladas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenesapeladas/OrdenesapeladasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenesapeladas/OrdenesapeladasDAO.Class.php");
//Tipos Suspension condicional
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposordenes/TiposordenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposordenes/TiposordenesDTO.Class.php");
//Tipos de Actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");
//Actuaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
//Imputados Exhortos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");
//imputados carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
//Juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

date_default_timezone_set('America/Mexico_City');

    if(session_status() == PHP_SESSION_NONE){
        @session_start();
    }

	class Ordenesaprehension {
	    private $proveedor;
	    public function __construct() {}

	    public function insertActuaciones($ActuacionesDto, $proveedor = null) {
	        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
	        $ActuacionesDao = new ActuacionesDAO();
	        $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);
	        return $ActuacionesDto;
	    }

	    public function updateActuaciones($ActuacionesDto, $proveedor = null) {
	        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
	        $ActuacionesDao = new ActuacionesDAO();
	        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);
	        return $ActuacionesDto;
	    }

	    public function validarActuaciones($ActuacionesDto) {
	        $ActuacionesDto->setIdActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getidActuacion()))));
	        $ActuacionesDto->setnumActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getnumActuacion()))));
	        $ActuacionesDto->setaniActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getaniActuacion()))));
	        $ActuacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoActuacion()))));
	        $ActuacionesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getidReferencia()))));
	        $ActuacionesDto->setnumero(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getnumero()))));
	        $ActuacionesDto->setanio(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getanio()))));
	        $ActuacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoCarpeta()))));
	        $ActuacionesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveJuzgado()))));
	        $ActuacionesDto->setsintesis(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getsintesis()))));
	        $ActuacionesDto->setobservaciones((str_ireplace("'", "", trim($ActuacionesDto->getobservaciones()))));
	        $ActuacionesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveUsuario()))));
	        $ActuacionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getactivo()))));
	        $ActuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaRegistro()))));
	        $ActuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaActualizacion()))));
	        $ActuacionesDto->setcveEstado(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveEstado()))));
	        $ActuacionesDto->setcveJuzgadoDestino(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveJuzgadoDestino()))));
	        $ActuacionesDto->setjuzgadoDestino(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getjuzgadoDestino()))));
	        $ActuacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoNotificacion()))));
	        $ActuacionesDto->setcveTipoSentencia(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoSentencia()))));
	        $ActuacionesDto->setcveTipoAuto(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoAuto()))));
	        $ActuacionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoResolucion()))));
	        $ActuacionesDto->setcveTipoOrden(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoOrden()))));
	        $ActuacionesDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getcveTipoProcedimiento()))));
	        $ActuacionesDto->setfechaSentencia(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaSentencia()))));
	        $ActuacionesDto->setfechaEjecutoria(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getfechaEjecutoria()))));
	        $ActuacionesDto->setIdJuzgadorAcuerdo(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getIdJuzgadorAcuerdo()))));

	        return $ActuacionesDto;
	    }

	    public function guardaOrdenesAprehension($ActuacionesDto, $listaImputados, $medidas, $apelaciones){
	    	$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
	        $proveedor = new Proveedor('mysql', 'sigejupe');
	        $proveedor->connect();
	        $proveedor->execute("BEGIN");
	        $transaccion = false;
	        //guarda en tabla -tblactuaciones-
	        $respuesta = '';
	        $error = false;
	        $errorDesc = '';
	        //GUARDA DATOS EN -tblactuaciones-
	        //dato fijo por ser Certificacion
	        $cveTipoActuacion = $ActuacionesDto->getCveTipoActuacion();
	        //definiciOn de variables para obtener los valores del contador
	        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
	        //obtenciOn de nUmero de la tabla contadores
	        $numActuacion = $this->obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion,$proveedor);
	        if (isset($numActuacion[0])) {
	            $numActuacion = $numActuacion[0]->getNumero();
	        } elseif (isset($numActuacion)) {
	            $numActuacion = $numActuacion->getNumero();
	        }
	        //asignaciOn de variables en el DTO de las actuaciones
	        $ActuacionesDto->setNumActuacion($numActuacion);
	        $ActuacionesDto->setAniActuacion(date("Y"));
	        //inserciOn de la ActuaciOn
	        $ActuacionesDto = $this->insertActuaciones($ActuacionesDto, $proveedor);
	        if( $ActuacionesDto != ''){ // se insertO
	        	$transaccion = true;
		        //INSERCION EN BITACORA
		        $bitacoraController = new BitacoramovimientosController();
		        $bitacoraController->agregar(28, 'tblactuaciones', 'dto', $ActuacionesDto,'','',$proveedor);
		        //guarda en tabla -tblmedidascautelares-
		        /*         * ******* insercion de la relacion actuacion-imputado ************ */
		        //obtencion del id de actuacion
		        $idActuacion = $ActuacionesDto[0]->getIdActuacion();
		        foreach ($medidas as $medida) {
		            $MedidascautelaresDTO = new OrdenesimputadosDTO(); // MedidascautelaresDTO();;
		            $MedidascautelaresDAO = new OrdenesimputadosDAO(); // SuspensioncondicionalesDAO();
		            $MedidascautelaresDTO->setIdActuacion($idActuacion);
		            $MedidascautelaresDTO->setIdImputadoCarpeta($medida['idImputadoCarpeta']);
		            $MedidascautelaresDTO->setApelacion($medida['apelacion']);
		            $MedidascautelaresDTO->setActivo('S');
		            $MedidascautelaresDTO->setCveTipoOrden($medida['idMedida']);
		            //$MedidascautelaresDTO->setCveAutoridadEmisora($medida['autoridad']);
		            $MedidascautelaresDTO = $MedidascautelaresDAO->insertOrdenesimputados($MedidascautelaresDTO,$proveedor);
		            //$MedidascautelaresDTO = $MedidascautelaresDAO->insertMedidascautelares($MedidascautelaresDTO,$proveedor);
		            if ($MedidascautelaresDTO != '') {
		            	$transaccion = true;
		                //se inserto un registro
		                //insercion en bitacroa
		                $bitacoraController->agregar(361, 'tblordenesimputados', 'dto', $MedidascautelaresDTO,'',$proveedor);
		                //se inserta la apelacion relacionada
		                if ($MedidascautelaresDTO[0]->getApelacion() == 'S') {
		                	if( count($apelaciones) > 0 ){
			                    foreach ($apelaciones as $apelacion) {
			                        if ($apelacion['idImputadoCarpeta'] == $MedidascautelaresDTO[0]->getIdImputadoCarpeta()) {
			                            //EL IMPUTADO TIENE UNA APELACION ESTABLECIDA
			                            //se inserta la apelacion
			                            //guarda en table -tblmedidasapeladas-
			                            $MedidasapeladasDTO = new OrdenesapeladasDTO(); //MedidasapeladasDTO();
			                            $MedidasapeladasDAO = new OrdenesapeladasDAO(); //MedidasapeladasDAO();
			                            //$MedidasapeladasDTO->setIdMedidaCautelar($MedidascautelaresDTO[0]->getIdMedidaCautelarXXX());
			                            $MedidasapeladasDTO->setIdOrdenImputado($MedidascautelaresDTO[0]->getIdOrdenImputado());
			                            $MedidasapeladasDTO->setCveSentido($apelacion['apelacionSentido']);
			                            $MedidasapeladasDTO->setNumToca($apelacion['apelacionNumero']);
			                            $MedidasapeladasDTO->setAnioToca($apelacion['apelacionAnio']);
			                            $MedidasapeladasDTO->setCveSala($apelacion['apelacionSala']);
			                            $MedidasapeladasDTO->setFechaActualizacion(date("Y-m-d H:i:s"));
			                            //$MedidasapeladasDTO = $MedidasapeladasDAO->insertSuspensioncondicionales($MedidasapeladasDTO,$proveedor) ->insertMedidasapeladaXXs;
			                            $MedidasapeladasDTO = $MedidasapeladasDAO->insertOrdenesapeladas($MedidasapeladasDTO,$proveedor);
			                            if (is_array($MedidasapeladasDTO)) {
			                                //se inserto el registro
			                                $transaccion = true;
			                                //insercion en bitacroa
			                                $bitacoraController->agregar(365, 'tblordenesapeladas', 'dto', $MedidascautelaresDTO,'',$proveedor);
			                            } else {
			                            	$transaccion = false;
			                                $error = 'OCURRIO UN ERROR AL TRATAR DE INSERTAR LA APELACION DE LA ORDEN DE APREHENSI&Oacute;N.';
			                                break;
			                            }
			                        }
			                    } // foreach/
			                }
		                }
		            } else {
		            	$transaccion = false;
		                $error = 'OCURRIO UN ERROR AL TRATAR DE INSERTAR LA ORDEN DE APREHENSI&Oacute;N.';
		                break;
		            }
		        }
	        }else{ // no se insertó
	        	$transaccion = false;
	        }
	        if( $transaccion ){
	        	$proveedor->execute("COMMIT");
	        }else{
	        	$proveedor->execute("ROLLBACK");
	        }
	        $proveedor->close();
	        return $ActuacionesDto;
	    }

	    public function actualizaOrdenesAprehension($ActuacionesDto, $listaImputados, $medidas, $apelaciones) {
	        //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
	        $proveedor = new Proveedor('mysql', 'sigejupe');
	        $proveedor->connect();
	        $proveedor->execute("BEGIN");
	        $transaccion = false;
	        //actualiza la tabla actuaciones
	        //Id de la actuacion
	        $idActuacion = $ActuacionesDto->getIdActuacion();
	        //obtencion de los datos previos
	        $tmpActuacionesDto = new ActuacionesDTO();
	        $tmpActuacionesDao = new ActuacionesDAO();
	        $tmpActuacionesDto->setIdActuacion($idActuacion);
	        $tmpActuacionesDto = $tmpActuacionesDao->selectActuaciones($tmpActuacionesDto,$proveedor);
	        //asigna fecha de actualizacion
	        $ActuacionesDto->setFechaActualizacion(date("Y-m-d H:i:s"));
	        //ActualizaciOn de la ActuaciOn
	        $ActuacionesDto = $this->updateActuaciones($ActuacionesDto, $proveedor);
	        if($ActuacionesDto!=''){
	        	$transaccion = true;
		        //INSERCION EN BITACORA
		        $bitacoraController = new BitacoramovimientosController();
		        $bitacoraController->agregar(29, 'tblactuaciones', 'dto', $ActuacionesDto, $tmpActuacionesDto,$proveedor);

		        $idActuacion = $ActuacionesDto[0]->getIdActuacion();
		        $tmpMedidasCautelares = new OrdenesimputadosDTO();
		        $MedidasCautelaresDTO = new OrdenesimputadosDTO();
		        $MedidasCautelaresDAO = new OrdenesimputadosDAO();
		        $MedidasCautelaresDTO->setIdActuacion($idActuacion);
		        $MedidasCautelaresDTO = $MedidasCautelaresDAO->selectOrdenesimputados($MedidasCautelaresDTO,'',$proveedor);

		        if ($MedidasCautelaresDTO != '') {
		            foreach ($MedidasCautelaresDTO as $MedidasCautelares) {
		                $idMedidaCautelar = $MedidasCautelares->getIdOrdenImputado();
		                /* ****** busqueda y eliminacion logica de las medidas apeladas ******* */
		                $MedidasapeladasDTO = new OrdenesapeladasDTO();
		                $MedidasapeladasDAO = new OrdenesapeladasDAO();
		                $MedidasapeladasDTO->setIdOrdenImputado($idMedidaCautelar);
		                $MedidasapeladasDTO = $MedidasapeladasDAO->selectOrdenesapeladas($MedidasapeladasDTO,'',$proveedor);
		                if ($MedidasapeladasDTO != '') { //si existe una apelacion relacionada al imputado
		                    //bitacora
		                    $bitacoraController->agregar(365, 'tblordenesapeladas', 'dto', $MedidasapeladasDTO,'',$proveedor);
		                    //eliminacion lOgica
		                    $MedidasapeladasDTO[0]->setActivo('N');
		                    $MedidasapeladasDTO[0]->setFechaActualizacion(date("Y-m-d H:i:s"));
		                    $MedidasapeladasDTO = $MedidasapeladasDAO->updateOrdenesapeladas($MedidasapeladasDTO[0],$proveedor);
		                    if($MedidasapeladasDTO != ''){
		                    	$transaccion = true;
		                    }else{
		                    	$transaccion = false;
		                    	break;
		                    }
		                }
		                //bitacora
		                $bitacoraController->agregar(361, 'tblordenesimputados', 'dto', $MedidasCautelares,'',$proveedor);
		                //eliminacion logica de la medida cautelar
		                $tmpMedidasCautelaresDTO = new OrdenesimputadosDTO();
		                $tmpMedidasCautelaresDAO = new OrdenesimputadosDAO();
		                $tmpMedidasCautelaresDTO->setIdOrdenImputado($idMedidaCautelar);
		                $tmpMedidasCautelaresDTO->setActivo('N');
		                $tmpMedidasCautelaresDTO = $tmpMedidasCautelaresDAO->updateOrdenesimputados($tmpMedidasCautelaresDTO,$proveedor);
		                if($tmpMedidasCautelaresDTO != ''){
		                	//se actualizo
		                	$MedidasapeladasDTO = true;
		                	$transaccion = true;
		                }else{
		                	//no se actualizo
		                	$transaccion = false;
		                	break;
		                }
		            } //fin foreach
		        } else {
		            //no existen medidas cautelares asignadas a la actuacion
		        }
		        /*         * ******** INSERCION DE LOS NUEVOS DATOS ************ */
		        /*         * ******* insercion de la relacion actuacion-imputado ************ */
		        /**********insercion nueva**************/
		        foreach ($medidas as $medida) {
		        	$banderaMedida = false;
		        	//busca si ya existe una previa
		        	$MedidascautelaresDTO = new OrdenesimputadosDTO();
		        	$MedidascautelaresDTO2 = new OrdenesimputadosDTO();
		        	$MedidascautelaresDAO = new OrdenesimputadosDAO();
		        	$MedidascautelaresDTO->setIdActuacion( $idActuacion );
		        	$MedidascautelaresDTO->setIdImputadoCarpeta( $medida['idImputadoCarpeta'] );
		        	$MedidascautelaresDTO->setCveTipoOrden( $medida['idMedida'] );
		        	$MedidascautelaresDTO = $MedidascautelaresDAO->selectOrdenesimputados( $MedidascautelaresDTO,'',$proveedor );
		        	if( $MedidascautelaresDTO != ''){
		        		//actualiza la medida existente
						$MedidascautelaresDTO2->setIdOrdenImputado( $MedidascautelaresDTO[0]->getIdOrdenImputado() );
						$MedidascautelaresDTO2->setApelacion( $medida['apelacion'] );
						$MedidascautelaresDTO2->setActivo( 'S' );
						//$MedidascautelaresDTO2->setCveAutoridadEmisora( $medida['autoridad'] );
						$MedidascautelaresDTO2 = $MedidascautelaresDAO->updateOrdenesimputados( $MedidascautelaresDTO2,$proveedor );
						if( $MedidascautelaresDTO2 != ''){
							$transaccion = true;
							//se actualizO la medida
							$banderaMedida = true;
							$idMedidaCautelar = $MedidascautelaresDTO2[0]->getIdOrdenImputado();
						}else{
							$transaccion = false;
							break;
							//no se actualizO la medida
						}
		        	}else{
		        		//no existe la medida, la inserta
			        	$MedidascautelaresDTO2->setIdActuacion( $idActuacion );
			        	$MedidascautelaresDTO2->setIdImputadoCarpeta( $medida['idImputadoCarpeta'] );
						$MedidascautelaresDTO2->setApelacion( $medida['apelacion'] );
						$MedidascautelaresDTO2->setActivo( 'S' );
			        	$MedidascautelaresDTO2->setCveTipoOrden( $medida['idMedida'] );
						//$MedidascautelaresDTO2->setCveAutoridadEmisora( $medida['autoridad'] );
						$MedidascautelaresDTO2 = $MedidascautelaresDAO->insertOrdenesimputados( $MedidascautelaresDTO2,$proveedor );
						if( $MedidascautelaresDTO2 != ''){
							$transaccion = true;
							//se insertO la medida
							$banderaMedida = true;
							$idMedidaCautelar = $MedidascautelaresDTO2[0]->getIdOrdenImputado();
						}else{
							//no se insertO la medida
							$transaccion = false;
							break;
						}
		        	}

		        	//validacion de actualizaciOn o inserciOn de la apelacion
		        	if( $banderaMedida == true ){
		        		if( count($apelaciones) > 0 ){
			        		foreach ($apelaciones as $apelacion) {
			        			if( $medida['apelacion'] == 'S' && $apelacion['idImputadoCarpeta'] == $medida['idImputadoCarpeta'] && $apelacion['idMedidaCautelar'] == $medida['idMedida'] ){
					        		$MedidasapeladasDTO = new OrdenesapeladasDTO();
					        		$MedidasapeladasDTO2 = new OrdenesapeladasDTO();
					        		$MedidasapeladasDAO = new OrdenesapeladasDAO();
					        		$MedidasapeladasDTO->setIdOrdenImputado( $idMedidaCautelar );
					        		$MedidasapeladasDTO = $MedidasapeladasDAO->selectOrdenesapeladas( $MedidasapeladasDTO,'',$proveedor);
					        		if( $MedidasapeladasDTO != '' ){
					        			//existe la apelacion, se actualiza
					        			$MedidasapeladasDTO2->setIdOrdenapelada( $MedidasapeladasDTO[0]->getIdOrdenApelada() );
					        			$MedidasapeladasDTO2->setCveSentido( $apelacion['apelacionSentido'] );
					        			$MedidasapeladasDTO2->setNumToca( $apelacion['apelacionNumero'] );
					        			$MedidasapeladasDTO2->setAnioToca( $apelacion['apelacionAnio'] );
					        			$MedidasapeladasDTO2->setCveSala( $apelacion['apelacionSala'] );
					        			$MedidasapeladasDTO2->setActivo( 'S' );
					        			$MedidasapeladasDTO2->setFechaActualizacion( date("Y-m-d H:i:s") );
					        			$MedidasapeladasDTO2 = $MedidasapeladasDAO->updateOrdenesapeladas( $MedidasapeladasDTO2,$proveedor );
					        			if( $MedidasapeladasDTO2 != '' ){
					        				//seactualizO la apelaciOn
					        				$transaccion = true;
					        			}else{
					        				//no se actualizO la apelaciOn
					        				$transaccion = false;
					        				break;
					        			}
					        		}else{
					        			//no existe la apelacion, se inserta
					        			$MedidasapeladasDTO2->setIdOrdenImputado( $idMedidaCautelar );
					        			$MedidasapeladasDTO2->setCveSentido( $apelacion['apelacionSentido'] );
					        			$MedidasapeladasDTO2->setNumToca( $apelacion['apelacionNumero'] );
					        			$MedidasapeladasDTO2->setAnioToca( $apelacion['apelacionAnio'] );
					        			$MedidasapeladasDTO2->setCveSala( $apelacion['apelacionSala'] );
					        			$MedidasapeladasDTO2->setActivo( 'S' );
					        			$MedidasapeladasDTO2 = $MedidasapeladasDAO->insertOrdenesapeladas( $MedidasapeladasDTO2,$proveedor );
					        			if( $MedidasapeladasDTO2 != '' ){
					        				//se actualizO la apelaciOn
					        				$transaccion = true;
					        			}else{
					        				//no se actualizO la apelaciOn
					        				$transaccion = false;
					        				break;
					        			}
					        		}
			        			}
			        		}
			        	}
		        	}
		        }
	        }else{
	        	$transaccion = false;
	        }
	        if( $transaccion ){
	        	$proveedor->execute("COMMIT");
	        }else{
	        	$proveedor->execute("ROLLBACK");
	        }
	        $proveedor->close();
	        return $ActuacionesDto;
	    }

	    public function borraOrdenesAprehension($ActuacionesDto) {
	        $idActuacion = $ActuacionesDto->getIdActuacion();
	        //eliminaciOn lOgica de la actuacOn
	        $ActuacionesDTOtmp = new ActuacionesDTO();
	        $ActuacionesDAOtmp = new ActuacionesDAO();
	        $ActuacionesDTOtmp = $ActuacionesDAOtmp->updateActuaciones($ActuacionesDto);
	        //INSERCION EN BITACORA
	        $bitacoraController = new BitacoramovimientosController();
	        $bitacoraController->agregar(30, 'tblactuaciones', 'txt', 'Id eliminado lOgicamente:' . $idActuacion, '');
	        return $ActuacionesDTOtmp;
	    }

	    public function buscarOrdenesAprehension($ActuacionesDto, $param) {
	        //obtiene los datos de la actuacion
	        $proveedor = null;
	        $json = array();
	        $cveJuzgado = $ActuacionesDto->getCveJuzgado();
	        //obtencion de las actuaciones. obtiene 1 solo registro
	        $ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
	        $ActuacionesDao = new ActuacionesDAO();
	        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, $proveedor, " ORDER BY fechaRegistro DESC", $param);
	        $totalRows = count($ActuacionesDto);
	        $counter = 0;
	        $content = false;
	        //recorre los registros en busca de certificaciones
	        if ($ActuacionesDto != '') {
	            foreach ($ActuacionesDto as $Actuaciones) {
		        	$imputadosInfo = array();
	                //El ID de actuaciOn de cada registro se valida en la tabla -tblautosimputados-
	                $idActuacion = $Actuaciones->getIdActuacion();
	                $idReferencia = $Actuaciones->getIdReferencia();
	                $MedidascautelaresDto = new OrdenesimputadosDTO();
	                $MedidascautelaresDao = new OrdenesimputadosDAO();
	                $MedidascautelaresDto->setIdActuacion($idActuacion);
	                $MedidascautelaresDto->setActivo('S');
	                $MedidascautelaresDto = $MedidascautelaresDao->selectOrdenesimputados($MedidascautelaresDto, $proveedor);
	                //si la consulta de -tblmedidascautelares- trae informaciOn
	                if ($MedidascautelaresDto != '') { //la medida cautelar tiene datos
			        	//obtencion de los imputados
			        	$GenericoDTO = '';
			            if( $MedidascautelaresDto[0]->getCveTipoOrden() == 7){
			            	//los imputados provienen de un exhorto
			                $ImputadosexhortosDAO = new ImputadosexhortosDAO();
			                $ImputadosexhortosDTO = new ImputadosexhortosDTO();
			                $ImputadosexhortosDTO->setIdImputadoExhorto($idReferencia);
			                $ImputadosexhortosDTO->setActivo('S');
			                $ImputadosexhortosDTO = $ImputadosexhortosDAO->selectImputadosexhortos($ImputadosexhortosDTO);
			                $GenericoDTO = $ImputadosexhortosDTO;
			            }else{
			            	//los imputados provienen de la imputadoscarpeta
			                $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
			                $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
			                $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
			                $ImputadosCarpetasDTO->setActivo('S');
			                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
			                $GenericoDTO = $ImputadosCarpetasDTO;
			            }
			            if ($GenericoDTO!='') { //SI hay imputados relacionados
			                foreach ($GenericoDTO as $Imputado) {
			                	$idImputado = '';
			                	if( $MedidascautelaresDto[0]->getCveTipoOrden() == 7 ){ //proviene de exhortos
			                		$idImputado  = $Imputado->getIdImputadoExhorto();
			                	}else{ //proviene de carpeta
			                		$idImputado = $Imputado->getIdImputadoCarpeta();
			                	}
			                	$nombre = '';
			                	if( $Imputado->getCveTipoPersona() == 1 ){ // es persona fisica
			                		$nombre = utf8_encode( $Imputado->getPaterno() . ' ' . $Imputado->getMaterno() . ' ' . $Imputado->getNombre() );
			                	}else{ //es otro tipo de persona
			                		$nombre = utf8_encode( $Imputado->getNombreMoral() );
			                	}
			                	//recorre las medidas en busca de las asigandas a los imputados vinculados a la carpeta o exhortos
			                	$imputadoCheck = false;
			                	$imputadoFechaRegistro = '';
			                	foreach ($MedidascautelaresDto as $medidaCautelar) {
			                		if( $medidaCautelar->getIdImputadoCarpeta() == $idImputado ){
			                			$imputadoCheck = true;
			                			$imputadoFechaRegistro = $this->formatoFecha($Actuaciones->getFechaRegistro(), 'fechaHora', 'pjem','fechaHora');
			                			break;
			                		}
			                	}
			                	$imputadoActivoDiferenteActuacion = '';
			                	//busca si el imputado esta vinculado a una medida cautelar distinta a la activa
			                	$MedidasCautelaresDTOotros = new OrdenesimputadosDTO();
			                	$MedidasCautelaresDAOotros = new OrdenesimputadosDAO();
			                	$MedidasCautelaresDTOotros->setIdImputadoCarpeta($idImputado);
			                	$MedidasCautelaresDTOotros->setActivo('S');
			                	$MedidasCautelaresDTOotros = $MedidasCautelaresDAOotros->selectOrdenesimputados( $MedidasCautelaresDTOotros, ' AND idActuacion<>' . $MedidascautelaresDto[0]->getIdActuacion() . ' GROUP BY idActuacion' );
			                	if( $MedidasCautelaresDTOotros != ''){
			                		$sqlOtros = '';
			                		foreach ($MedidasCautelaresDTOotros as $medidasOtros) {
			                			$sqlOtros .= $medidasOtros->getIdActuacion() . ',';
			                		}
			                		$sqlOtros = rtrim($sqlOtros, ",");
			                		if( strlen( $sqlOtros ) > 0 ){
				                		//busqueda de las actuaciones coincidentes para verificar si el imputado esta activo en alguna de ellas
				                		$ActuacionesDTOotros = new ActuacionesDTO();
				                		$ActuacionesDAOotros = new ActuacionesDAO();
				                		$ActuacionesDTOotros->setActivo('S');
				                		$ActuacionesDTOotros = $ActuacionesDAOotros->selectActuaciones( $ActuacionesDTOotros, '', ' AND idActuacion in (' . $sqlOtros . ')');
				                		if( $ActuacionesDTOotros != ''){
				                			//el imputado esta activo en otra actuacion
				                			$imputadoActivoDiferenteActuacion = $this->formatoFecha( $ActuacionesDTOotros[0]->getFechaRegistro(),'fechaHora','pjem','fechaHora');
				                		}
				                	}
			                	}

			                    $imputadosInfo[] = array('status'=>'ok','imputadoCheck'=>$imputadoCheck,'idImputado'=>$idImputado,'nombreImputado'=>$nombre,'tipoPersona'=>$Imputado->getCveTipoPersona(),'fechaRegistro'=>$imputadoFechaRegistro,'imputadoActivoDiferenteActuacion'=>$imputadoActivoDiferenteActuacion);
			                }
			            } else {//no hay imputados
		                    $imputadosInfo = array('status'=>'error','mensaje'=>'NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE.');
			            }

	                    //obtiene la descripcion del TipoCarpeta
	                    $TipoCarpetaDTO = new TiposcarpetasDTO();
	                    $TipoCarpetaDAO = new TiposcarpetasDAO();
	                    $TipoCarpetaDTO->setActivo('S');
	                    $TipoCarpetaDTO->setCveTipoCarpeta($Actuaciones->getCveTipoCarpeta());
	                    $TipoCarpetaDTO = $TipoCarpetaDAO->selectTiposcarpetas($TipoCarpetaDTO);
	                    $descTipoCarpeta = $TipoCarpetaDTO[0]->getDesTipoCarpeta();

	                    //obtener tipo de juzgado
	                    $cveTipoJuzgado = 0;
	                    $JuzgadosDTO = new JuzgadosDTO();
	                    $JuzgadosDAO = new JuzgadosDAO();
	                    $JuzgadosDTO->setCveJuzgado( $cveJuzgado );
	                    $JuzgadosDTO = $JuzgadosDAO->selectJuzgados( $JuzgadosDTO );
	                    if( $JuzgadosDTO != ''){ //el registro de juzgados tiene informaciOn
	                    	$cveTipoJuzgado = $JuzgadosDTO[0]->getCveTipoJuzgado();
	                    }

	                    $content = true;
	                    //validacion de vinculaciOn con la tabla -tblautosimputados-
	                    $jsonImp = array();
	                    foreach ($MedidascautelaresDto as $MedidaCautelar) {
	                    	//obtiene la descripcion de la medida cautelar
	                    	$TiposmedidascautelaresDTO = new TiposordenesDTO(); //TiposmedidascautelaresDTO();
	                    	$TiposmedidascautelaresDAO = new TiposordenesDAO(); //TiposmedidascautelaresDAO();
	                    	$TiposmedidascautelaresDTO->setCveTipoOrden($MedidaCautelar->getCveTipoOrden());
	                    	$TiposmedidascautelaresDTO->setActivo('S');
	                    	$TiposmedidascautelaresDTO = $TiposmedidascautelaresDAO->selectTiposordenes( $TiposmedidascautelaresDTO );
	                    	$desMedida = '';
	                    	if( $TiposmedidascautelaresDTO != '' ){
	                    		$desMedida = $TiposmedidascautelaresDTO[0]->getDesTipoOrden();
	                    	}
	                        //datos de la apelacion
	                        $apelacion = array();
	                        $tma_idMedidaApelada = '';
	                        $tma_idMedidaCautelar = '';
	                        $tma_cveSentido = 0;
	                        $tma_numToca = '';
	                        $tma_numAnio = '';
	                        $tma_cveSala = 0;
	                        $tma_fechaRegistro = '';
	                        $tma_fechaActualizacion = '';
	                        if ($MedidaCautelar->getApelacion() == 'S') {
	                            //obtiene los datos de la apelacion en -tblautosapelados-
	                            $MedidasapeladasDTO = new OrdenesapeladasDTO();
	                            $MedidasapeladasDAO = new OrdenesapeladasDAO();
	                            //asigan el Id del -MedidaCautelar-
	                            $MedidasapeladasDTO->setIdOrdenImputado($MedidaCautelar->getIdOrdenImputado());
	                            //busca en la tabla 
	                            $MedidasapeladasDTO = $MedidasapeladasDAO->selectOrdenesapeladas($MedidasapeladasDTO);
	                            if ($MedidasapeladasDTO != '' && is_array($MedidasapeladasDTO)) {
	                                $tma_idMedidaApelada = $MedidasapeladasDTO[0]->getIdOrdenApelada();
	                                $tma_idMedidaCautelar = $MedidasapeladasDTO[0]->getIdOrdenImputado();
	                                $tma_cveSentido = $MedidasapeladasDTO[0]->getCveSentido();
	                                $tma_numToca = $MedidasapeladasDTO[0]->getNumToca();
	                                $tma_numAnio = $MedidasapeladasDTO[0]->getAnioToca();
	                                $tma_cveSala = $MedidasapeladasDTO[0]->getCveSala();
	                                $tma_fechaRegistro = $MedidasapeladasDTO[0]->getFechaRegistro();
	                                $tma_fechaActualizacion = $MedidasapeladasDTO[0]->getFechaActualizacion();
	                            }
	                        }
	                        $apelacion['idMedidaApelada'] = $tma_idMedidaApelada;
	                        $apelacion['idMedidaCautelar'] = $tma_idMedidaCautelar;
	                        $apelacion['cveSentido'] = $tma_cveSentido;
	                        $apelacion['numToca'] = $tma_numToca;
	                        $apelacion['numAnio'] = $tma_numAnio;
	                        $apelacion['cveSala'] = $tma_cveSala;
	                        $apelacion['fechaRegistro'] =  $this->formatoFecha( $tma_fechaRegistro, 'fechaHora', 'pjem','fecha' ) ;
	                        $apelacion['fechaActualizacion'] =  $this->formatoFecha( $tma_fechaActualizacion, 'fechaHora', 'pjem','fecha' );

	                    	$jsonImp[] = array('idMedidaCautelar'=>$MedidaCautelar->getIdOrdenImputado(),
	                        		'desMedidaCautelar'=>$desMedida,
	                        		'idActuacion'=>$MedidaCautelar->getIdActuacion(),
	                        		'idImputadoCarpeta'=>$MedidaCautelar->getIdImputadoCarpeta(),
	                        		'cveTipoMedidaCautelar'=>$MedidaCautelar->getCveTipoOrden(),
	                        		//'cveAutoridadEmisora'=>$MedidaCautelar->getCveAutoridadEmisora(),
	                        		'Apelada'=>$MedidaCautelar->getApelacion(),
	                        		'autosapelados'=>$apelacion);
	                    }
	                    //datos de la actuacion
	                    $json[] = array('idActuacion'=>$Actuaciones->getIdActuacion(),
	                    		'numActuacion'=>$Actuaciones->getNumActuacion(),
	                    		'aniActuacion'=>$Actuaciones->getAniActuacion(),
	                    		'cveTipoActuacion'=>$Actuaciones->getCveTipoActuacion(),
	                    		'idReferencia'=>$Actuaciones->getIdReferencia(),
	                    		'numero'=>$Actuaciones->getNumero(),
	                    		'anio'=>$Actuaciones->getAnio(),
	                    		'cveTipocarpeta'=>$Actuaciones->getCveTipocarpeta(),
	                    		'cveJuzgado'=>$Actuaciones->getCveJuzgado(),
	                    		'cveTipojuzgado'=>$cveTipoJuzgado,
	                    		'sintesis'=>$Actuaciones->getSintesis(),
	                    		'observaciones'=> ($Actuaciones->getObservaciones()),
	                    		'cveUsuario'=>$Actuaciones->getCveUsuario(),
	                    		'activo'=>$Actuaciones->getActivo(),
	                    		'fechaRegistro'=> $this->formatoFecha( $Actuaciones->getFechaRegistro(), 'fechaHora', 'pjem', 'fechaHora' ),
	                    		'fechaActualizacion'=> $this->formatoFecha( $Actuaciones->getFechaActualizacion(),'fechaHora', 'pjem','fechaHora' ),
	                    		'descTipoCarpeta'=>$descTipoCarpeta,
	                    		'imputados'=>$imputadosInfo,
	                    		'medidascautelares'=>$jsonImp);
	                    $counter++;
	                }
	            }
	        }
	        if ($content) {
	            $jsonFinal = json_encode( array('status'=>'OK','totalCount'=>$counter,'data'=>$json) );
	        } else {
	            $jsonFinal = json_encode( array('status'=>'ERROR','totalCount'=>'0','data'=>'') );
	        }
	        return $jsonFinal;
	    }

	    public function imputadosSuspensionCondicional($ActuacionesDto) {
	        /*
	         * Proceso:
	         * 1 Obtencion de los id's de Actuación de -tblactuaciones- a través de idReferencia y activo 'S'
	         * 2 Obtencion de idActuacion y idImputadoCarpeta de -tblmedidascautelares- a través de los ids del punto 1
	         * 3 Obtencion del idActuacion y fechaRegistro de -tblactuaciones- a través de los ids de Actuación del punto 2
	         * 4 Unir los datos del punto 2 con el punto 3
	         */

	        $proveedor = new Proveedor('mysql', 'sigejupe'); //sigejupe
	        $proveedor->connect();

	        $ActuacionesDAO = new ActuacionesDAO();
	        $ActuacionesDAO2 = new ActuacionesDAO();
	        $ActuacionesDTOp1 = new ActuacionesDTO();
	        $ActuacionesDTOp3 = new ActuacionesDTO();
	        $MedidascautelaresDTO = new SuspensioncondicionalesDTO();
	        $MedidascautelaresDAO = new SuspensioncondicionalesDAO();

	        $idsActuacionesP1 = '';
	        $idsActuacionesP2 = '';
	        $idsActuacionesP3 = '';

	        $respuesta = array('imputadosMC' => '');
	        $respuestaMC = array();
	        $idActuacionActivo = $ActuacionesDto->getIdActuacion();
	        $ActuacionesDto->setIdActuacion('');

	        //***** P1
	        $ActuacionesDTOp1->setIdReferencia($ActuacionesDto->getIdReferencia());
	        $ActuacionesDTOp1->setActivo('S');
	        $ActuacionesDTOp1 = $ActuacionesDAO->selectActuaciones($ActuacionesDTOp1, $proveedor, '');
	        if ($ActuacionesDTOp1 != '') {
	            foreach ($ActuacionesDTOp1 as $Actuaciones) {
	                $idsActuacionesP1 .= $Actuaciones->getIdActuacion() . ',';
	            }
	            $idsActuacionesP1 = substr($idsActuacionesP1, 0, strlen($idsActuacionesP1) - 1);
	        }

	        //***** P2
	        $MedidascautelaresDTO->setActivo('S');
	        //$MedidascautelaresDTO = $MedidascautelaresDAO->selectMedidascautelares($MedidascautelaresDTO, ' AND idActuacion in (' . $idsActuacionesP1 . ') AND idActuacion!=' . $idActuacionActivo, $proveedor);
	        $MedidascautelaresDTO = $MedidascautelaresDAO->selectSuspensioncondicionales($MedidascautelaresDTO, ' AND idActuacion in (' . $idsActuacionesP1 . ') AND idActuacion!=' . $idActuacionActivo, $proveedor);
	        if ($MedidascautelaresDTO != '') {
	            foreach ($MedidascautelaresDTO as $Medidascautelares) {
	                $idsActuacionesP2 .= $Medidascautelares->getIdActuacion() . ',';
	                $respuestaMC[] = array('idActuacion' => $Medidascautelares->getIdActuacion(),
	                    'idImputado' => $Medidascautelares->getIdImputadoCarpeta(),
	                    'fecha' => '');
	            }
	            $idsActuacionesP2 = substr($idsActuacionesP2, 0, strlen($idsActuacionesP2) - 1);
	        }

	        //***** P3
	        $ActuacionesDTOp3->setActivo('S');
	        $ActuacionesDTOp3 = $ActuacionesDAO2->selectActuaciones($ActuacionesDTOp3, $proveedor, ' AND idActuacion in (' . $idsActuacionesP2 . ')');
	        if ($ActuacionesDTOp3 != '') {
	            foreach ($ActuacionesDTOp3 as $Actuaciones) {
	                $contador = 0;
	                foreach ($respuestaMC as $respuestaM) {
	                    if ($Actuaciones->getIdActuacion() == $respuestaM['idActuacion']) {
	                        $tmpFecha = explode(' ', $Actuaciones->getFechaRegistro());
	                        $fecha = explode('-', $tmpFecha[0]);
	                        $fecha = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0] . ' ' . $tmpFecha[1];
	                        $respuestaMC[$contador]['fecha'] = $fecha;
	                    }
	                    $contador++;
	                }
	            }
	        }
	        $proveedor->close();
	        $respuesta['imputadosMC'] = $respuestaMC;
	        return json_encode($respuesta);
	    }

	    public function buscarImputadosOrdenesAprehension($ActuacionesDto){
	        $fechaRegistro = '';
	        $medidasAplicadas = array();
	        $imputadosIds = array();
	        $tmpNumero = $ActuacionesDto->getNumero();
	        $tmpAnio = $ActuacionesDto->getAnio();
	        $tmpCveTipoCarpeta = $ActuacionesDto->getCveTipoCarpeta();
	        $tmpCveJuzgado = $ActuacionesDto->getCveJuzgado();
	        //obtencion del Id de Referencia de acuerdo a la carpeta seleccionada
	        $idReferencia = $this->tipoCarpeta($ActuacionesDto);
	        if ($idReferencia > 0) { //si existe el registro con los datos proporcionados
	            //buscar que no este duplicado el registro en -tblactuaciones-
	            $ActuacionesDAO = new ActuacionesDAO(); //inicio validacion de un solo regitro de medidas cautelares
	            $ActuacionesDto->setIdReferencia($idReferencia);
	            $ActuacionesDto = $ActuacionesDAO->selectActuaciones($ActuacionesDto);
	            if ($ActuacionesDto != '') { //el registro ya existe en la tabla, obtiene los datos de la fecha de registro y los imputados vinculados
	            	$sqlMedidas = '';
	                foreach ($ActuacionesDto as $Actuaciones) {
		            	//busca en medidas cautelares
			/*		            	$MedidascautelaresDTOtemp = new MedidascautelaresDTO();
		            	$MedidascautelaresDAOtemp = new MedidascautelaresDAO();*/
		            	$MedidascautelaresDTOtemp = new OrdenesimputadosDTO();
		            	$MedidascautelaresDAOtemp = new OrdenesimputadosDAO();
		            	$MedidascautelaresDTOtemp->setActivo('S');
		            	$MedidascautelaresDTOtemp->setIdActuacion( $Actuaciones->getIdActuacion() );
		            	$MedidascautelaresDTOtemp = $MedidascautelaresDAOtemp->selectOrdenesimputados( $MedidascautelaresDTOtemp, ' GROUP BY idImputadoCarpeta ' );
		            	if( $MedidascautelaresDTOtemp != '' ){ //si existen datos previos registrados
		            		foreach ($MedidascautelaresDTOtemp as $medidasTmp) {
		                		$medidasAplicadas[] = array('idImputado' => $medidasTmp->getIdImputadoCarpeta(), 'fecha' => $this->formatoFecha( $Actuaciones->getFechaRegistro(),'fechaHora','pjem','fechaHora'));
		            		}
		            	}
		            } //fin foreach
	            }
	            //Validacion de la carpeta, obtencion de los imputados desde la carpeta judicial o de la carpeta de exhortos
	            $GenericoDTO = '';
	            if ($tmpCveTipoCarpeta == 7) { //carpeta de exhortos
	                $ImputadosexhortosDAO = new ImputadosexhortosDAO();
	                $ImputadosexhortosDTO = new ImputadosexhortosDTO();
	                $ImputadosexhortosDTO->setIdImputadoExhorto($idReferencia);
	                $ImputadosexhortosDTO->setActivo('S');
	                $ImputadosexhortosDTO = $ImputadosexhortosDAO->selectImputadosexhortos($ImputadosexhortosDTO);
	                $GenericoDTO = $ImputadosexhortosDTO;
	            } else { //carpeta judicial
	                //obtencion de los imputados desde -tblimputadoscarpetas-
	                $ImputadosCarpetasDTO = new ImputadoscarpetasDTO();
	                $ImputadosCarpetasDAO = new ImputadoscarpetasDAO();
	                $ImputadosCarpetasDTO->setIdCarpetaJudicial($idReferencia);
	                $ImputadosCarpetasDTO->setActivo('S');
	                $ImputadosCarpetasDTO = $ImputadosCarpetasDAO->selectImputadoscarpetas($ImputadosCarpetasDTO);
	                $GenericoDTO = $ImputadosCarpetasDTO;
	            }
	            if (is_array($GenericoDTO)) { //SI hay imputados relacionados
	                foreach ($GenericoDTO as $Imputadoscarpetas) {
	                    $Imputadoscarpetas->setNombreMoral(utf8_encode($Imputadoscarpetas->getNombreMoral()));
	                    $Imputadoscarpetas->setNombre(utf8_encode($Imputadoscarpetas->getNombre()));
	                    $Imputadoscarpetas->setPaterno(utf8_encode($Imputadoscarpetas->getPaterno()));
	                    $Imputadoscarpetas->setMaterno(utf8_encode($Imputadoscarpetas->getMaterno()));
	                }
	                $referencia = '[{"numero":"' . $tmpNumero . '","anio":"' . $tmpAnio . '","cveTipoCarpeta":"' . $tmpCveTipoCarpeta . '","cveJuzgado":"' . $tmpCveJuzgado . '","idReferencia":"' . $idReferencia . '","medidasImputados":' . json_encode($medidasAplicadas) . '}]';
	                $dataTemp = new DtoToJson($GenericoDTO);
	                $salida = $dataTemp->toJson("RESULTADOS\",\"referencia\":" . $referencia . ",\"STATUS\":\"OK");
	            } else {//no hay imputados
	                $salida = '{"status":"ERROR","totalCount":"0","text":"NO EXISTEN IMPUTADOS RELACIONADOS, VERIFIQUE."}';
	            }
	            //} //fin validacion unico registro de medidas cautelares
	        } else { //no existe relacion
	            $salida = '{"status":"ERROR","totalCount":"0","text":"LOS DATOS DE RELACION NO EXISTEN, VERIFIQUE."}';
	        }
	        return $salida;	    	
	    }

	    public function tipoCarpeta($ActuacionesDto) {
	        $carpeta = $ActuacionesDto->getCveTipoCarpeta();
	        $idReferencia = 0;
	        if ($carpeta == 7) { //exhorto
	            $ExhortosDTO = new ExhortosDTO();
	            $ExhortosDAO = new ExhortosDAO();
	            $ExhortosDTO->setNumExhorto($ActuacionesDto->getNumero());
	            $ExhortosDTO->setAniExhorto($ActuacionesDto->getAnio());
	            $ExhortosDTO->setCveJuzgado($ActuacionesDto->getCveJuzgado());
	            $ExhortosDTO->setActivo('S');
	            $ExhortosDTO = $ExhortosDAO->selectExhortos($ExhortosDTO);
	            if ($ExhortosDTO != '') {
	                $idReferencia = $ExhortosDTO[0]->getIdExhorto();
	            }
	        } else { //carpeta judicial
	            $CarpetasjudicialesDTO = new CarpetasjudicialesDTO();
	            $CarpetasjudicialesDAO = new CarpetasjudicialesDAO();
	            $CarpetasjudicialesDTO->setNumero($ActuacionesDto->getNumero());
	            $CarpetasjudicialesDTO->setAnio($ActuacionesDto->getAnio());
	            $CarpetasjudicialesDTO->setCveTipoCarpeta($ActuacionesDto->getCveTipoCarpeta());
	            $CarpetasjudicialesDTO->setCveJuzgado($ActuacionesDto->getCveJuzgado());
	            $CarpetasjudicialesDTO->setActivo($ActuacionesDto->getActivo());
	            $CarpetasjudicialesDTO = $CarpetasjudicialesDAO->selectCarpetasjudiciales($CarpetasjudicialesDTO);
	            if ($CarpetasjudicialesDTO != '') {
	                $idReferencia = $CarpetasjudicialesDTO[0]->getIdCarpetaJudicial();
	            }
	        }
	        return $idReferencia;
	    }

	    public function obtenerContadorActuacion($cveJuzgado, $cveTipoActuacion, $proveedor) {
	        $contadorCrl = new ContadoresController();
	        $contadoresDto = new ContadoresDTO();
	        $contadoresDto->setCveJuzgado($cveJuzgado);
	        $contadoresDto->setCveTipoActuacion($cveTipoActuacion);
	        $contadoresDto->setAnio(date("Y"));
	        $contadoresDto->setCveTipoCarpeta("");
	        $contadoresDto = $contadorCrl->getContador($contadoresDto,$proveedor);
	        return $contadoresDto;
	    }

	    /**
	    * FunciOn para transformar el formato de salida o entrada, segUn sea el caso
	    * @param date|datetime $fechaEntrada Opciones: AAAA-MM-DD | AAAA-MM-DD HH:MM:SS | DD/MM/AAAA | DD/MM/AAAA HH:MM:SSS Es la fecha de entrada
	    * @param text $fechaEntrada Opciones: fecha | fechaHora Es el formato en que se recibe la fecha
	    * @param text $formatoSalida Opciones: pjem | mysql Corresponde al formato de salida. pjem: DD/MM/AAAA | DD/MM/AAA HH:MM:SS, mysql: AAAA-MM-DD | AAAA-MM-DD HH:MM:SS
	    */
	    public function formatoFecha($fechaEntrada, $tipo, $formatoSalida, $tipoSalida){
	    	$fechaEntrada = ( $fechaEntrada != '' ) ? $fechaEntrada : '0000-00-00 00:00:00';
	    	$formatoSalida = ( $formatoSalida == 'pjem') ? 'pjem' : 'mysql';
	    	$tipo = ( $tipo == 'fecha' ) ? 'fecha' : 'fechaHora';
	    	$tipoSalida = ( $tipoSalida == 'fecha') ? 'fecha' : 'fechaHora';
	    	$delimitador = ( $formatoSalida == 'mysql' ) ? array( 'origen'=>'/','destino'=>'-') : array('origen'=>'-','destino'=>'/');
	    	$fechaSalida = '';
	    	if( $tipo == 'fecha' ){
	    		$tmpFecha = explode($delimitador['origen'], $fechaEntrada);
				$fechaSalida = $tmpFecha[2] . $delimitador['destino'] . $tmpFecha[1] . $delimitador['destino'] . $tmpFecha[0];
	    		if( $tipoSalida == 'fechaHora'){
	    			$fechaSalida .= ' 00:00:00';
	    		}
	    	}elseif ( $tipo == 'fechaHora' ) {
	    		$tmpCompleto = explode(' ', $fechaEntrada);
	    		$tmpFecha = explode($delimitador['origen'], $tmpCompleto[0]);
				$fechaSalida = $tmpFecha[2] . $delimitador['destino'] . $tmpFecha[1] . $delimitador['destino'] . $tmpFecha[0];
	    		if( $tipoSalida == 'fechaHora'){
	    			$fechaSalida .= ' ' . $tmpCompleto[1];
	    		}
	    	}
	    	return $fechaSalida;
	    }



	}

?>