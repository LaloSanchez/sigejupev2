<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposefectos/TiposefectosDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposefectos/TiposefectosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/regionessalas/RegionessalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/regionessalas/RegionessalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/configuracionescargas/ConfiguracionescargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/configuracionescargas/ConfiguracionescargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlescargas/ControlescargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlescargas/ControlescargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/controlescargas/ControlescargasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/contadores/ContadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

class TocasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function Tocas($param, $proveedor) {
        $this->logger = new Logger("/../../logs/", "OficialiasServer");
        $this->logger->w_onError("Comenzamos con el programa para el sorteo de las salas ");
        try {
            $this->logger->w_onError("Json de entrada: ");
            $this->logger->w_onError($param);

            $cveOficialia = 0;
            $desOficialia = "NOSE ENCONTRO OFICIALIA PARA ESA MATERIA DE SEGUNDA INSTANCIA";

            $this->logger->w_onError("Decodificamos el json de entrada y validamos que no tenga errores");

            $param = json_decode($param, true);
            if ($this->json_error() == " - JSON_ERROR_NONE") {

                $this->logger->w_onError("El Json no contiene errores ahora verificamos que traega la estructura necesaria para realizar las acciones necesarias");

                $this->logger->w_onError("Se llena el arreglo asociado para poder continuar");

                $demanda = array();


                $demanda["cveSistema"] = $param["cveSistema"];
                $demanda["remision"] = $param["remision"];
                $demanda["cveRegion"] = $param["cveRegion"];
                $demanda["cveTipoNumero"] = $param["cveTipoNumero"];
                $demanda["constitucional"] = $param["constitucional"];
                $demanda["colegiada"] = $param["colegiada"];
                $demanda["apelacion"] = $param["apelacion"];
                $demanda["numExpediente"] = $param["numExpediente"];
                $demanda["aniExpediente"] = $param["aniExpediente"];
                $demanda["cveTipoExpediente"] = $param["cveTipoExpediente"];
                $demanda["cveJuzgadoProcedencia"] = $param["cveJuzgadoProcedencia"];
                $demanda["cveUsuario"] = $param["cveUsuario"];
                $demanda["reforma"] = $param["reforma"];
                $demanda["colegiada"] = $param["colegiada"];
                $demanda["tipoAsignacion"] = $param["tipoAsignacion"];


                $this->logger->w_onError(json_encode($demanda));


                if ($demanda["tipoAsignacion"] == "1") {
                    $demanda["cveJuzgado"] = $param["cveJuzgado"];
                }
                $carpeta = $this->guardarDemanda($demanda, $proveedor);

                if ($carpeta != "") {
                    if (!is_int($carpeta)) {
                        $carpeta = json_decode($carpeta, true);
                        return json_encode(array("cveAdscripcion" => $carpeta["cveJuzgado"], "numToca" => $carpeta["numero"], "aniToca" => $carpeta["anio"]));
                    } else {
                        switch ($carpeta) {
                            case -1:
                                $this->logger->w_onError("Ocurrio un error al buscar el antecedente");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "Ocurrio un error al buscar el antecedente"));
                                break;
                            case -2:
                                $this->logger->w_onError("No se localizaron juzgados con la configuracion deseada");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se localizaron juzgados con la configuracion deseada"));
                                break;
                            case -3:
                                $this->logger->w_onError("No le logro realizar la actualizacion de los asuntos asignados");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No le logro realizar la actualizacion de los asuntos asignados"));
                                break;
                            case -4:
                                $this->logger->w_onError("No se logro obtener el juzgado");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se logro obtener el juzgado"));
                                break;
                            case -5:
                                $this->logger->w_onError("No se localizaron secretarias para el juzgado");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se localizaron secretarias para el juzgado"));
                                break;
                            case -6:
                                $this->logger->w_onError("No se logro asignar la secretaria");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se logro asignar la secretaria"));
                                break;
                            case -7:
                                $this->logger->w_onError("Error al guardar el registro en carpetas judiciales");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "Error al guardar el registro en carpetas judiciales"));
                                break;
                            case -8:
                                $this->logger->w_onError("No se localizaron estatus materias para la carpeta judicial por lo cual no se podra cosntinuar con el registro");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se localizaron estatus materias para la carpeta judicial por lo cual no se podra cosntinuar con el registro"));
                                break;
                            case -9:
                                $this->logger->w_onError("No se logro realizar el registro del estatus ca la carpeta judicial ");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se logro realizar el registro del estatus ca la carpeta judicial "));
                                break;
                            case -10:
                                $this->logger->w_onError("No se logro obtener el contador ");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se logro obtener el contador "));
                                break;
                            case -11:
                                $this->logger->w_onError("No se encontro la materia liti en el sistema");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se encontro la materia liti en el sistema"));
                                break;
                            case -12:
                                $this->logger->w_onError("No se logro registrar la liti con las partes");
                                return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => "No se logro registrar la liti con las partes"));
                                break;
                        }
                    }
                }
            } else {
                throw new Exception("El json proporcionado no es valido", "100001", null);
            }
        } catch (Exception $e) {
            $this->logger->w_onError($e->getMessage() . "en la linea " . $e->getLine() . " del archivo " . $e->getFile());
//            var_dump($e);
            return json_encode(array("idCarpetaJudicial" => 0, "cveAdscripcion" => 0, "numToca" => 0, "aniToca" => "", "text" => $e->getMessage()));
        }
    }

    public function guardarDemanda($demanda, $proveedor) {
//        var_dump($demanda);
        /*
         * cveOficialia: Es la clave la de oficialian en la cual se realizara el sorteo de los juzgados o salas dependiendo de la instancia
         * tipoAsignacion: Sera el tipo de asignacion que puede tener los siguientes valores
         *                  0: Asignacion Automatica
         *                  1: Asignacion Manual
         * cveOficialia: 
         * razon: 
         * juzgadoAsignado: 
         * antecedente
         * error: 
         * 
         */
        $this->logger->w_onError("Estamos dentro de la funcion de guardar demanda inicial");

        $cveOficialia = 0;
        $tipoAsignacion = 0;
        $razon = 0;
        $JuzgadoAsignado = 0;
        $secretariaAsignada = 0;
        $antecedente = "";
        $error = false;
        $fechaActual;
        $fechaActualHora;

//        $proveedor = $this->proveedor = new Proveedor("mysql", "sigejupe");
//        $proveedor->connect();
//
//        $proveedor->execute("BEGIN");

        $proveedor->execute("SELECT DATE_FORMAT(NOW(),'%Y-%m-%d') as fecha,now() fechaHora");
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $row = $proveedor->fetch_array($proveedor->stmt, 0);
                $fechaActual = $row["fecha"];
                $fechaActualHora = $row["fechaHora"];
            }
        }

        $configuracionCargaDto = new ConfiguracionesCargasDTO ();
        $controlCargaDto = new ControlesCargasDTO ();
        $controlCargaDto->setCveTipoCarpeta($demanda["cveTipoNumero"]);

        $tipoAsignacion = $demanda["tipoAsignacion"]; #SI ES 0 = AUTOMATICA, SI ES 1= MANUAL

        $regionessalasDTO = new RegionessalasDTO();
        $regionessalasDTO->setCveRegion($demanda["cveRegion"]);

        if ((boolean) $demanda["constitucional"] === true) {
            $this->logger->w_onError("Se buscaran salas constitucionales");
            $regionessalasDTO->setTipoSala("CC"); # CC = CONSTITUCIONAL
        } elseif ((boolean) $demanda["constitucional"] === false) {
            $this->logger->w_onError("Se solicitan salas normales");
            $this->logger->w_onError("Materia penal");
            if ((boolean) $demanda["colegiada"] === true) {
                $this->logger->w_onError("Seran salas colegiadas");
                $regionessalasDTO->setTipoSala("CO"); # CO = COLEGIADA
            } elseif ((boolean) $demanda["colegiada"] === false) {
                $this->logger->w_onError("Seran salas unitarias");
                $regionessalasDTO->setTipoSala("UN"); # UN = UNITARIA
            }
        }
        $demanda["reforma"] = ((boolean) $demanda["reforma"] == true) ? "S" : "N";
        $demanda["colegiada"] = ((boolean) $demanda["colegiada"] == true) ? "S" : "N";
        $this->logger->w_onError(" VALIDACION PARA REMISION");
        $this->logger->w_onError("***********VALOR DE LA REMISION:" . $demanda["remision"]);
        if (array_key_exists("remision", $demanda) && ((boolean) $demanda["remision"])) {
            $antecedente = $this->antecedente($demanda);
        } else {
            $this->logger->w_onError("IN ARRAY EXIST");
            $this->logger->w_onError($demanda["cveJuzgado"]);
            $this->logger->w_onError("--------");
//            if(array_key_exists("cveJuzgado", $demanda) ){
            if (isset($demanda["cveJuzgado"])) {
                $this->logger->w_onError("EL USUARIO SELECCIONA A QUE TRIBUNAL DEBE ASIGNARSE LA TOCA");
                $antecedente = $demanda["cveJuzgado"];
            } else {
                $this->logger->w_onError("NO PROVIENE DE UNA REMISION PARA PODER BUSCAR EL ANTECEDES");
                $antecedente = 0;
            }
        }

        $this->logger->w_onError("Sala Antecedente: " . $antecedente);
        $this->logger->w_onError("Tipo Asignacion: " . $tipoAsignacion);

        #-1 = ERROR AL BUSCAR ANTECEDENTE
        if ((int) $antecedente != -1) {

            $this->logger->w_onError("Todo va funcionando de forma correcta");

            if (((int) $tipoAsignacion === 0) && ((int) $antecedente === 0)) { // Asignacion Automatica
                $configuracionCargaDto->setCveRegion($demanda["cveRegion"]);


                $this->logger->w_onError("Se considera que la asignacion sera de forma automatica");
                $this->logger->w_onError(json_encode($configuracionCargaDto->toString()));
                $this->logger->w_onError(json_encode($regionessalasDTO->toString()));
                $this->logger->w_onError(json_encode($controlCargaDto->toString()));
                $controlCarga = new ControlesCargasController ();
                $JuzgadoAsignado = $controlCarga->getJuzgado($configuracionCargaDto, $controlCargaDto, $regionessalasDTO, $proveedor);    #####PENDIENTE POR CHECAR
                $this->logger->w_onError("Juzgado asignado: " . $JuzgadoAsignado);

                if ((int) $JuzgadoAsignado == -2) {
                    $this->logger->w_onError("El horario de captura de la demanda inicial ha terminado");
                } elseif ((int) $JuzgadoAsignado == -3) {
                    $this->logger->w_onError("No existen juzgados en horario disponible");
                } elseif ((int) $JuzgadoAsignado == 0) {
                    $this->logger->w_onError("No existen juzgados");
                } elseif ((int) $JuzgadoAsignado == -1) {
                    $this->logger->w_onError("No existen configuracion para la oficialia");
                } elseif ((int) $JuzgadoAsignado == -4) {
                    $this->logger->w_onError("La clave de la oficialia llego en cero o esta vacio");
                }
            } elseif (((int) $tipoAsignacion == 1)) {//Asignacion Manual
                $this->logger->w_onError("Se considera que la asignacion sera manual");
                $regionessalasDTO->setCveJuzgado($demanda["cveJuzgado"]);

                $configuracionCargaDao = new ConfiguracionesCargasDAO ();
                $tmpConfig = $configuracionCargaDao->selectConfiguracionescargas($configuracionCargaDto, "", $proveedor);

                $configuracionCargaDto->setCveConfiguracionCarga($tmpConfig[0]->getCveConfiguracionCarga());

                $regionessalasDAO = new RegionessalasDAO ();
                $tmp = $regionessalasDAO->selectRegionessalas($regionessalasDTO, "", $proveedor);

                if ($tmp != "") {
                    $JuzgadoAsignado = $demanda["cveJuzgado"];
                    $this->logger->w_onError("Juzgado asignado: " . $JuzgadoAsignado);
                } else {
                    /*
                     * No se localizaron juzgados con la configuracion deseada
                     */
                    $this->logger->w_onError("No se localizaron juzgados con la configuracion deseada");
                    $proveedor->execute("ROLLBACK");
                    return -2;
                }

                $tmp[0]->setTotalTocas($tmp[0]->getTotalTocas() + 1);
                $tmp = $regionessalasDAO->updateRegionessalas($tmp[0], $proveedor);

                if ($tmp == "") {
                    /*
                     * No le logro realizar la actualizacion de los asuntos asignados
                     */
                    $this->logger->w_onError("No le logro realizar la actualizacion de los asuntos asignados");
                    $proveedor->execute("ROLLBACK");
                    return -3;
                }
            } else {
                $JuzgadoAsignado = $antecedente;
                $this->logger->w_onError("Juzgado asignado: " . $JuzgadoAsignado);
            }


            if (($JuzgadoAsignado > 0) && ((Boolean) $error == false)) {

                $contadoresDto = new ContadoresDTO();
                $contadoresDto->setCveJuzgado($JuzgadoAsignado);
                $contadoresDto->setCveTipoCarpeta("6");
                $contadoresDto->setAnio(date("Y"));
                $contadoresDto->setActivo("S");
                $contadoresController = new ContadoresController();
                $contadoresDto = $contadoresController->getContador($contadoresDto, $proveedor);
                if ($contadoresDto != "" && count($contadoresDto) > 0) {
                    $contadoresDto = $contadoresDto[0];


//                $contDTO = new ContadoresDTO ();
//                $contDTO->setCveJuzgado($JuzgadoAsignado);
//                $contDTO->setCveTipoCarpeta($demanda["cveTipoNumero"]);
//
//                #SE DEBE MODIFICAR POR EL CONTROLADOR DE SIGEJUPE
//                $contCont = new ContadoresController ();
//                $status = $contCont->obtenerNumeroContador($contDTO, $proveedor);
//
//
//                if ((int) $status["status"] === 1) {


                    $this->logger->w_onError("Error: " . $error);

                    if ($error == false) {
//                        echo "Carpeta Judicial" . json_encode($carpetasJudicialesDto->toString()) . "<br>";
//                        echo "Estatus CarpetaJudicial" . json_encode($estatuscarpetasDto->toString()) . "<br>";
//                        echo "Tocas Carpetas Jud" . json_encode($tocascarpetasjudDto->toString()) . "<br>";
                        $proveedor->execute("COMMIT");
                        $this->logger->w_onError("Se completo la tranccion de forma correcta");
                        $this->logger->w_onError("CarpetaJudicial: " . json_encode($contadoresDto->toString()));
                        return json_encode($contadoresDto->toString());
                    } else {
                        $this->logger->w_onError("Se completo la tranccion de forma correcta");
                        $proveedor->execute("ROLLBACK");
                    }
                } else {
                    $proveedor->execute("ROLLBACK");
                    $this->logger->w_onError("No se logro obtener el contador ");
//                    $this->logger->w_onError("Contadores: " . json_encode($status));
                    return -10;
                }
            } else {
                /*
                 * No se logro obtener el numero para la toca
                 */
                $proveedor->execute("ROLLBACK");
                $this->logger->w_onError("No se logro obtener el juzgado");
                return -4;
            }

//            echo "CveJuzgado: " . $JuzgadoAsignado;
        } else {
            /*
             * Al buscar el antecedente ocurrio un error
             */
            $proveedor->execute("ROLLBACK");
            $this->logger->w_onError("Ocurrio un error al buscar el antecedente");
            return -1;
        }

//         $proveedor->close();
    }

    private function antecedente($demanda, $proveedor = null) {
        /*
         * Esta funcion sirve para consultar el antecedente de la carpeta judicial
         * para identificar a que tribunal de alsada fue asignada la ultima toca para
         * que se le de continuidad 
         */
        $this->logger->w_onError("Buscamos si la carpeta que se esta apelando esta ya tiene una toca asignada");
//        $d = array("campos" => "", "where" => array(), "limit" => "");
//        $p = array("tabla" => "", "d" => $d, "tmpSql" => array(
//            "campos" => "TC.idCarpetaJudicial,C.numero,C.anio,C.cveTipoNumero,C.cveAdscripcion,TC.numero,TC.anio,C.cveAdscripcionOrigen", 
//            "groups" => "", 
//            "tablas" => " tblcarpetasjudiciales C,tbltocascarpetasjud TC ", 
//            "where" => "C.idCarpetaJudicial=TC.idCarpetaJudicial And TC.numero=" . $demanda["numExpediente"] . " And TC.anio='" . $demanda["aniExpediente"] . "' And TC.activo='S' And C.cveAdscripcionOrigen = '" . $demanda["cveJuzgadoProcedencia"] . "' And C.activo='S' And C.cveMateria='" . $demanda["cveMateria"] . "' order by C.idCarpetaJudicial DESC"), 
//            "proveedor" => $proveedor);
//        $genericoDao = new GenericDAO();
//
//        $antecedentes = $genericoDao->select($p);

        $carpetasjudicialesDao = new CarpetasjudicialesDAO();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $carpetasjudicialesDto->setNumero($demanda["numExpediente"]);
        $carpetasjudicialesDto->setAnio($demanda["aniExpediente"]);
        $carpetasjudicialesDto->setCveTipoCarpeta($demanda["cveTipoExpediente"]);
        $carpetasjudicialesDto->setCveJuzgado($demanda["cveJuzgadoProcedencia"]);
        $carpetasjudicialesDto->setActivo("S");
        $carpetasjudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto, "", $proveedor);
        if ($carpetasjudicialesDto != "" && count($carpetasjudicialesDto) > 0) {
            $carpetasjudicialesDto = $carpetasjudicialesDto[0];
            $antecedescarpetasDao = new AntecedescarpetasDAO();
            $antecedescarpetasDto = new AntecedescarpetasDTO();
            $antecedescarpetasDto->setIdCarpetaPadre($carpetasjudicialesDto->getIdCarpetaJudicial());
            $antecedescarpetasDto->setCveTipoCarpeta("6"); #TOCAS
            $antecedescarpetasDto->setActivo("S");
            $antecedescarpetasDto = $antecedescarpetasDao->selectAntecedescarpetas($antecedescarpetasDto, "", $proveedor);
            if ($antecedescarpetasDto != "" && count($antecedescarpetasDto) > 0) {
                $antecedescarpetasDto = $antecedescarpetasDto[0];
                $carpetasjudicialesDto = new CarpetasjudicialesDTO();
                $carpetasjudicialesDto->setIdCarpetaJudicial($antecedescarpetasDto->getIdCarpetaHija());
                $carpetasjudicialesDto->setActivo("S");
                $carpetasjudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto, "", $proveedor);
                if ($carpetasjudicialesDto != "" && count($carpetasjudicialesDto) > 0) {
                    $carpetasjudicialesDto = $carpetasjudicialesDto[0];
                    /*
                     * Se regresa la clave del Tribunal de alsada en la cual se registro la ultima toca
                     */
                    $this->logger->w_onError("La carpeta ya cuenta con una toca anterior en la sala " . $carpetasjudicialesDto->getCveJuzgado());
                    return $carpetasjudicialesDto->getCveJuzgado();
                } else {
                    /*
                     * Se regresa cero si no se encontraron registros de antecedente
                     */
                    $this->logger->w_onError("La TOCA QUE SE UTILIZO PARA BUSCAR ANTECEDENTE NO EXISTE");
                    return -1;
                }
            } else {
                /*
                 * Se regresa cero si no se encontraron registros de antecedente
                 */
                $this->logger->w_onError("La carpeta no cuenta con una toca de antecedente");
                return 0;
            }
        } else {
            /*
             * Se regresa cero si no se encontraron registros de antecedente
             */
            $this->logger->w_onError("La carpeta no relacionada no existe");
            return -1;
        }
    }

    private function json_error() {
        /*
         * Esta funcion esta dise�ada para verificar que no existan errores al momento de 
         * decodificar un JSON
         */
        $error = "";
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $error = ' - JSON_ERROR_NONE';
                break;
            case JSON_ERROR_DEPTH:
                $error = ' - JSON_ERROR_DEPTH';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $error = ' - JSON_ERROR_STATE_MISMATCH';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $error = ' -  JSON_ERROR_CTRL_CHAR';
                break;
            case JSON_ERROR_SYNTAX:
                $error = "\r\n\r\n - SYNTAX ERROR \r\n\r\n";
                break;
            case JSON_ERROR_UTF8:
                $error = ' - JSON_ERROR_UTF8';
                break;
            default:
                $error = ' - Unknown erro';
                break;
        }
        return $error;
    }

}

//$param = array(
//    "cveSistema" => 38,
//    "cveUsuario" => "7250",
//    "cveRegion" => "1",
//    "remision" => true,
//    "apelacion" => true,
//    "reforma" => false,
//    "colegiada" => true,
//    "cveJuzgado" => "367",
//    "cveJuzgadoProcedencia" => "762",
//    "numExpediente" => "11",
//    "aniExpediente" => "2017",
//    "cveTipoExpediente" => "2",
//    "cveTipoNumero" => "2",
//    "tipoAsignacion" => "0",
//    "constitucional" => false,
////    "cveSistema" => "38",
////    "cveUsuario" => "80",
////    "cveAdscripcionRegistro" => "1",
////    "cveRegion" => "1",
////    "apelacion" => true,
////    "reforma" => false,
////    "colegiada" => true,
////    "cveMateria" => "1",
////    "cveInstancia" => "1",
////    "cveJuzgadoProcedencia" => "10066",
////    "numExpediente" => "187",
////    "aniExpediente" => "2015",
////    "carpetaInv" => "",
////    "cveVia" => "19",
////    "cveTipoRecurso" => "",
////    "cveTipoApelacion" => "",
////    "numFojas" => 1,
////    "fechaResolucion" => "",
////    "sintesis" => "Este es un ejemplo de apelacion",
////    "cveTipoApelante" => "2",
////    "cveTipoNumero" => "6",
////    "constitucional" => false,
////    "remision" => false,
////    "cveJuzgado" => "19",
////    "cveLitis" => array("178"),
////    "apelante" => array(array("nombre" => "FIDEL ALEJANDRO", "paterno" => "MORENO", "materno" => "VILLAVICENCIO", "cveTipoPersona" => 1, "nombreMoral" => ""), array("nombre" => "EDGAR", "paterno" => "ESPINO", "materno" => "HERRERA", "cveTipoPersona" => 1, "nombreMoral" => "")),
////    "actor" => array(array("nombre" => "DANIEL ALEJANDRO", "paterno" => "GAONA", "materno" => "MERCADO", "cveTipoPersona" => 1, "nombreMoral" => ""), array("nombre" => "", "paterno" => "", "materno" => "", "cveTipoPersona" => 2, "nombreMoral" => "COOPEL")),
////    "demandado" => array(array("nombre" => "FIDEL ALEJANDRO", "paterno" => "MORENO", "materno" => "VILLAVICENCIO", "cveTipoPersona" => 1, "nombreMoral" => ""), array("nombre" => "", "paterno" => "", "materno" => "", "cveTipoPersona" => 2, "nombreMoral" => "OXXO"))
//);
//$param = json_encode($param);
//
//
//$TocasController = new TocasController();
//echo $TocasController->Tocas($param);
?>

