<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Tecnologias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

define('WP_DEBUG', true); // enable debugging mode
ini_set("error_log", dirname(__FILE__) . "/../../../logs/RadicarAmparosController.log");
ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/contadores/ContadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/quejosos/QuejososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tercerosperjudicados/TercerosperjudicadosDTO.Class.php");

include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../quejosos/QuejososController.Class.php");
include_once(dirname(__FILE__) . "/../tercerosperjudicados/TercerosperjudicadosController.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/carpetasjudiciales/CarpetasjudicialesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipoamparo/TipoamparoController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipoamparo/TipoamparoDTO.Class.php");

class RadicarAmparosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAmparos($AmparosDto) {
        $AmparosDto->setidAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getidAmparo()))));
        $AmparosDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim($AmparosDto->getidCarpetaJudicial()))));
        $AmparosDto->setcveTipoAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcveTipoAmparo()))));
        $AmparosDto->setnumAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumAmparo()))));
        $AmparosDto->setaniAmparo(strtoupper(str_ireplace("'", "", trim($AmparosDto->getaniAmparo()))));
        $AmparosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcveJuzgado()))));
        $AmparosDto->setautoridadProcedencia(strtoupper(str_ireplace("'", "", trim($AmparosDto->getautoridadProcedencia()))));
        $AmparosDto->setnumeroProcedencia(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumeroProcedencia()))));
        $AmparosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcarpetaInv()))));
        $AmparosDto->setnumOficio(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumOficio()))));
        $AmparosDto->settoca(strtoupper(str_ireplace("'", "", trim($AmparosDto->gettoca()))));
        $AmparosDto->setexhorto(strtoupper(str_ireplace("'", "", trim($AmparosDto->getexhorto()))));
        $AmparosDto->setnumSala(strtoupper(str_ireplace("'", "", trim($AmparosDto->getnumSala()))));
        $AmparosDto->setcveSala(strtoupper(str_ireplace("'", "", trim($AmparosDto->getcveSala()))));
        $AmparosDto->setactoReclamado(strtoupper(str_ireplace("'", "", trim($AmparosDto->getactoReclamado()))));
        $AmparosDto->setobservaciones((str_ireplace("'", "", trim($AmparosDto->getobservaciones()))));
        $AmparosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AmparosDto->getfechaRegistro()))));
        $AmparosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AmparosDto->getfechaActualizacion()))));
        return $AmparosDto;
    }

    public function selectAmparos($AmparosDto, $proveedor = null, $params) {

        $orden = "";
        $totalRegistros = "";
        if ($params != "") {
            error_log("parametros de fecha => " . print_r($params, true));
            $fecha1 = explode("/", $params["fechaDesde"]);
            $fecha2 = explode("/", $params["fechaHasta"]);

            $fecha1 = $fecha1[2] . "-" . $fecha1[1] . "-" . $fecha1[0];
            $fecha2 = $fecha2[2] . "-" . $fecha2[1] . "-" . $fecha2[0];
            $orden = " AND fechaRegistro>='" . $fecha1 . " 00:00:00' AND fechaRegistro<='" . $fecha2 . " 23:59:00'";

            $orden .= " ORDER BY fechaRegistro DESC";
            if ($params['cantxPag'] != "") {
                $orden .= " LIMIT " . $params['cantxPag'];
            }
        }

        error_log(print_r($AmparosDto, true));
        $AmparosDto = $this->validarAmparos($AmparosDto);

        $AmparosDto->setActivo("S");
//        $AmparosDto->setFechaRegistro($fecha1);
//        $AmparosDto->setFechaActualizacion($fecha2);
        $AmparosDao = new AmparosDAO();
        $totalRegistros = $AmparosDao->selectAmparos($AmparosDto, $orden, null, " count(idAmparo) as totalCount ");
        $AmparosDto = $AmparosDao->selectAmparos($AmparosDto, $orden, "");
        $regtotal = "";
//        print_r($AmparosDto);
//        
//        
//        exit();
        $regtotal = "";
        $idsCarpetasJudiciales = "";
        if ($AmparosDto != "") {

            $listaAmparos = array();
            $causa = "";
            $exhorto = "";
            $tipoAmparoDto = new TipoamparoDTO();

            $tiposAmparosController = new TipoamparoController();
            $tiposAmparos = $tiposAmparosController->selectTipoamparo($tipoAmparoDto);
            error_log("TiposAmparos => " . print_r($tiposAmparos, true));



            foreach ($AmparosDto as $amparo) {
                $idCarpetaJudicial = $amparo->getIdCarpetaJudicial();
                $carpetasJudicialesController = new CarpetasjudicialesController();
                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDto->setActivo("S");
                $carpetasJudicialesDto->setIdCarpetaJudicial($idCarpetaJudicial);
                if ($idCarpetaJudicial != "") {
                    $carpetasJudiciales = $carpetasJudicialesController->selectCarpetasjudiciales($carpetasJudicialesDto);
                } else {
                    $carpetasJudiciales = "";
                }

                if ($carpetasJudiciales != "") {
                    $numCarpeta = $carpetasJudiciales[0]->getNumero();
                    $aniCarpeta = $carpetasJudiciales[0]->getAnio();
                    $cveTipoCarpeta = $carpetasJudiciales[0]->getcveTIpoCarpeta();
                    $causa = $numCarpeta . "/" . $aniCarpeta;
                } else {
                    $numCarpeta = "";
                    $aniCarpeta = "";
                    $cveTipoCarpeta = "";
                }
                error_log(print_r($carpetasJudiciales, true));
                $QuejososController = new QuejososController();
                $TercerosController = new TercerosperjudicadosController();
                $TercerosperjudicadosDto = new TercerosperjudicadosDTO();
                $TercerosperjudicadosDto->setIdAmparo($amparo->getIdAmparo());
                $TercerosperjudicadosDto->setActivo("S");
                $quejososDto = new QuejososDTO();
                $quejososDto->setIdAmparo($amparo->getIdAmparo());
                $quejososDto->setActivo("S");
                $Terceros = $TercerosController->selectTercerosperjudicados($TercerosperjudicadosDto);

                $Quejosos = $QuejososController->selectQuejosos($quejososDto);
                $listaQuejosos = array();
                $listaTerceros = array();
                if ($Terceros != "") {
                    foreach ($Terceros as $tercero) {
                        $nombre = "";
                        if ($tercero->getcveTipoPersona() == "1") {
                            $nombre = $tercero->getNombreT();
                        } else {
                            $nombre = $tercero->getNombreMoral();
                        }
                        $persona = array(
                            "nombre" => (json_encode($nombre) == "") ? utf8_encode($nombre) : $nombre,
                            "paterno" => (json_encode($tercero->getPaternoT()) == "") ? utf8_encode($tercero->getPaternoT()) : $tercero->getPaternoT(),
                            "materno" => (json_encode($tercero->getMaternoT()) == "") ? utf8_encode($tercero->getMaternoT()) : $tercero->getMaternoT(),
//                            "nombre" =>utf8_encode($nombre),
//                            "paterno" => utf8_encode($tercero->getPaternoT()),
//                            "materno" =>  utf8_encode($tercero->getMaternoT()),
                            "cveTipoPersona" => ($tercero->getcveTipoPersona()),
                            "cveGenero" => ( $tercero->getcveGenero()),
                            "idTercero" => ($tercero->getIdTercero()),
                        );
                        array_push($listaTerceros, $persona);
                    }
                }
                if ($Quejosos != "") {
                    foreach ($Quejosos as $quejoso) {

                        $nombre = "";
                        if ($quejoso->getcveTipoPersona() == "1") {
                            $nombre = $quejoso->getNombreQ();
                        } else {
                            $nombre = $quejoso->getNombreMoral();
                        }
                        $persona = array(
                            "nombre" => (json_encode($nombre) == "") ? utf8_encode($nombre) : $nombre,
                            "paterno" => (json_encode($quejoso->getPaternoQ()) == "") ? utf8_encode($quejoso->getPaternoQ()) : $quejoso->getPaternoQ(),
                            "materno" => (json_encode($quejoso->getMaternoQ()) == "") ? utf8_encode($quejoso->getMaternoQ()) : $quejoso->getMaternoQ(),
//                            "nombre" => utf8_encode($nombre),
//                            "paterno" => utf8_encode($quejoso->getPaternoQ()),
//                            "materno" => utf8_encode($quejoso->getMaternoQ()),
                            "cveTipoPersona" => $quejoso->getcveTipoPersona(),
                            "cveGenero" => $quejoso->getcveGenero(),
                            "idQuejoso" => $quejoso->getIdQuejoso(),
                        );
                        array_push($listaQuejosos, $persona);
                    }
                }
                $descTipoAmparo = "";
                if ($tiposAmparos != "") {
                    foreach ($tiposAmparos as $tipoAmparo) {
                        if ($tipoAmparo->getcveTipoAmparo() == $amparo->getCveTipoAmparo()) {
                            $descTipoAmparo = $tipoAmparo->getDesTipoAmparo();
                            break;
                        }
                    }
                }
                $resultado = array(
                    "idAmparo" => $amparo->getIdAmparo(),
                    "idCarpetaJudicial" => $amparo->getIdCarpetaJudicial(),
                    "numeroAmparo" => $amparo->getNumAmparo(),
                    "anioAmparo" => $amparo->getAniAmparo(),
                    "TipoAmparo" => $amparo->getCveTipoAmparo(),
                    "carpetaInv" => utf8_encode($amparo->getCarpetaInv()),
                    "noOficio" => $amparo->getNumOficio(),
                    "amparoFederal" => $amparo->getNumeroProcedencia(),
                    "autoridadFederal" => utf8_encode($amparo->getAutoridadProcedencia()),
                    "numAmparoSala" => $amparo->getNumSala(),
                    "cveSala" => utf8_encode($amparo->getCveSala()),
                    "actoReclamado" => utf8_encode($amparo->getActoReclamado()),
                    "toca" => $amparo->getToca(),
                    "causa" => $causa,
                    "exhorto" => $amparo->getExhorto(),
                    "listaQuejosos" => $listaQuejosos,
                    "listaTerceros" => $listaTerceros,
                    "fechaRegistro" => $amparo->getFechaRegistro(),
                    "observaciones" => utf8_encode($amparo->getObservaciones()),
                    "numCarpeta" => $numCarpeta,
                    "aniCarpeta" => $aniCarpeta,
                    "cveTipoCarpeta" => $cveTipoCarpeta,
                    "desTipoAmparo" => $descTipoAmparo,
                    "cveJuzgado" => $amparo->getCveJuzgado(),
                );
                array_push($listaAmparos, $resultado);
            }
            if ($totalRegistros != "") {
                foreach ($totalRegistros as $regtotal) {
                    $regtotal = $regtotal['totalCount'];
                }
            } else {
                $regtotal = "";
            }
            $respuesta = array("estatus" => "ok", "totalRegistros" => $regtotal, "estatus" => "ok", "datos" => $listaAmparos);
        } else {
            $respuesta = array("datos" => "", "estatus" => "error", "totalRegistros" => $regtotal);
        }
        error_log(print_r($respuesta, true));
        return $respuesta;
    }

    public function insertAmparos($AmparosDto, $proveedor = null, $listaQuejosos, $listaTerceros, $tipoPersonaAdd) {
        $AmparosDto = $this->validarAmparos($AmparosDto);
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";
        $transaccion = 1;
        $contadorDao = new ContadoresDAO();
        $contadoresDto = new ContadoresDTO();

        // parametros para contadores
        $contadoresDto->setCveJuzgado($AmparosDto->getCveJuzgado());             // variable de sesion
        $contadoresDto->setCveTipoCarpeta("8"); // Tipo de carpeta Amparo 8
        $contadoresDto->setAnio($AmparosDto->getAniAmparo()); // AÑO EN EL QUE SE VA A BUSCAR EL CONTADOR
        $contador = $contadorDao->selectContadores($contadoresDto, "", $proveedor);

        #SI EL AÑO DEL AMPARO ES MAYOR O  IGUAL AL AÑO ACTUAL SE VALIDA EL CONTADOR, EN OTRO CASO SE GUARDA COMO MANDEN EL NUMERO Y AÑO
        if ($AmparosDto->getAniAmparo() >= date("Y")) {
            if ($contador != "") {
                #SE VERIFICA QUE EL NUMERO DEL AMPARO NO SOBREPASE EL CONTADOR ACTUAL
                if ($AmparosDto->getNumAmparo() > $contador[0]->getNumero()) {
                    $transaccion = 0;
                    error_log("No esta configurado el contador");
                    $mensaje .= "EL NUMERO DE AMPARO NO PUEDE SER MAYOR AL DEL CONTADOR";
                }
            } else {
                $transaccion = 0;
                error_log("No esta configurado el contador");
                $mensaje .= "NO SE ENCONTRO LA CONFIGURACIÓN DE LOS CONTADORES PARA EL ANIO ACTUAL";
            }
        }

        $AmparosDao = new AmparosDAO();
        #VERIFICA QUE NO EXISTA UN NUMERO DE AMPARO IGUAL
        $AmparosAuxDto = new AmparosDTO();
        $AmparosAuxDto->setNumAmparo($AmparosDto->getNumAmparo());
        $AmparosAuxDto->setAniAmparo($AmparosDto->getAniAmparo());
        $AmparosAuxDto->setActivo("S");
        $cveJuzgadoAmparoAux = explode("/", $AmparosDto->getCveJuzgado());
        $AmparosAuxDto->setCveJuzgado($cveJuzgadoAmparoAux[0]);
        $AmparosAuxDto = $AmparosDao->selectAmparos($AmparosAuxDto, "", $proveedor);
        if ($AmparosAuxDto == "" || count($AmparosAuxDto) <= 0) {

            $AmparosDto->setObservaciones(utf8_decode($AmparosDto->getObservaciones()));
            $AmparosDto = $AmparosDao->insertAmparos($AmparosDto, $proveedor);
            if ($AmparosDto != "") {
                $tmpAmparo = $AmparosDto[0];
                $idAmparo = $tmpAmparo->getIdAmparo();
                $quejososController = new QuejososController();
                $tercerosController = new TercerosperjudicadosController();

                $tercerosController = new TercerosperjudicadosController();
                foreach ($listaQuejosos as $quejoso) {
                    $quejoso["cveTipoPersona"] = $quejoso[0];
                    $quejoso["nombre"] = $quejoso[1];
                    $quejoso["paterno"] = $quejoso[2];
                    $quejoso["materno"] = $quejoso[3];
                    $quejoso["cveGenero"] = $quejoso[4];
                    $quejoso["idOfendidoOimputado"] = $quejoso[5];
                    if ($quejoso["cveTipoPersona"] != '0' & $quejoso["nombre"] != '0' & $quejoso["paterno"] != '0' & $quejoso["materno"] != '0' & $quejoso["cveGenero"] != '0') {
                        $quejososDto = new QuejososDTO();
                        $quejososDto->setCveGenero($quejoso["cveGenero"]);
                        $quejososDto->setCveTipoPersona($quejoso["cveTipoPersona"]);
                        $quejososDto->setIdAmparo($idAmparo);
                        if ($quejoso["cveTipoPersona"] == 1) {
                            $quejososDto->setMaternoQ($quejoso["materno"]);
                            $quejososDto->setPaternoQ($quejoso["paterno"]);
                            //$quejososDto->setNombreMoral($quejoso["nombre"]);
                            $quejososDto->setNombreQ($quejoso["nombre"]);
                        } else if ($quejoso["cveTipoPersona"] == 2 || $quejoso["cveTipoPersona"] == 3) {
                            $quejososDto->setMaternoQ("");
                            $quejososDto->setPaternoQ("");
                            $quejososDto->setNombreMoral($quejoso["nombre"]);
                            $quejososDto->setNombreQ("");
                        }
                        if ($tipoPersonaAdd == 1) {
                            $quejososDto->setIdImputadoCarpeta($quejoso["idOfendidoOimputado"]);
                        }
                        if ($tipoPersonaAdd == 2) {
                            $quejososDto->setidOfendidoCarpeta($quejoso["idOfendidoOimputado"]);
                        }
                        $resultado = $quejososController->insertQuejosos($quejososDto, $proveedor);
                        if ($resultado == "") {
                            $transaccion = 0;
                            error_log("error al insertar quejoso" . print_r($quejoso, true));
                            $mensaje .= "ERROR AL INSERTAR AL QUEJOSO";
                            break;
                        }
                    }
                }
                if ($transaccion == 1) {
                    if ($listaTerceros != "") {
                        foreach ($listaTerceros as $tercero) {
                            $tercero["cveTipoPersona"] = $tercero[0];
                            $tercero["nombre"] = $tercero[1];
                            $tercero["paterno"] = $tercero[2];
                            $tercero["materno"] = $tercero[3];
                            $tercero["cveGenero"] = $tercero[4];
                            if ($tercero["cveTipoPersona"] != '0' & $tercero["nombre"] != '0' & $tercero["paterno"] != '0' & $tercero["materno"] != '0' & $tercero["cveGenero"] != '0') {
                                $terceroDto = new TercerosperjudicadosDTO();

                                $terceroDto->setCveGenero($tercero["cveGenero"]);
                                $terceroDto->setCveTipoPersona($tercero["cveTipoPersona"]);
                                $terceroDto->setIdAmparo($idAmparo);
                                if ($tercero["cveTipoPersona"] == 1) {
                                    $terceroDto->setMaternoT($tercero["materno"]);
                                    $terceroDto->setPaternoT($tercero["paterno"]);
//                        $terceroDto->setNombreMoral($tercero["nombre"]);
                                    $terceroDto->setNombreT($tercero["nombre"]);
                                } else if ($tercero["cveTipoPersona"] == 2 || $tercero["cveTipoPersona"] == 3) {
                                    $terceroDto->setMaternoT("");
                                    $terceroDto->setPaternoT("");
                                    $terceroDto->setNombreMoral($tercero["nombre"]);
                                    $terceroDto->setNombreT("");
                                }
                                $resultado = $tercerosController->insertTercerosperjudicados($terceroDto, $proveedor);
                                if ($resultado == "") {
                                    $transaccion = 0;
                                    error_log("error al insertar tercero" . print_r($tercero, true));
                                    $mensaje .= "ERROR AL INSERTAR AL TERCERO";
                                    break;
                                }
                            }
                        }
                    }
                }
            } else {
                $transaccion = 0;
                error_log("Ocurrio un error al insertar el amparo");
                $mensaje .= "ERROR AL INSERTAR EL AMPARO";
            }
        } else {
            $transaccion = 0;
            error_log("ya existia amparo con numero y año proporcionado");
            $mensaje .= "YA EXISTE EL AMPARO CON EL NUMERO Y ANIO ESPECIFICADO";
        }

        if ($transaccion == 1) {
//            $proveedor->execute("ROLLBACK");
            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro el amparo", "idAmparo" => $AmparosDto[0]->getIdAmparo(),
                "numAmparo" => $AmparosDto[0]->getNumAmparo(), "anioAmparo" => $AmparosDto[0]->getAniAmparo());
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $AmparosDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
        }
        $proveedor->close();
        return $respuesta;
    }

    public function updateAmparos($AmparosDto, $proveedor = null, $listaQuejosos, $listaTerceros, $tipoPersonaAdd) {
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";
        $transaccion = 1;
        $AmparosDto = $this->validarAmparos($AmparosDto);
        $AmparosDao = new AmparosDAO();
        $quejososController = new QuejososController();
        $tercerosController = new TercerosperjudicadosController();
        $quejososDto = new QuejososDTO();
        $quejososDto->setIdAmparo($AmparosDto->getIdAmparo());
        $quejososDto->setActivo("S");
        $quejososDb = $quejososController->selectQuejosos($quejososDto);
        if ($listaQuejosos != '') {
            foreach ($listaQuejosos as $quejoso) {
                if (isset($quejoso[0])) {
                    $quejoso["cveTipoPersona"] = $quejoso[0];
                    $quejoso["nombre"] = $quejoso[1];
                    $quejoso["paterno"] = $quejoso[2];
                    $quejoso["materno"] = $quejoso[3];
                    $quejoso["cveGenero"] = $quejoso[4];
                    $quejoso["idOfendidoOimputado"] = $quejoso[5];
                    if ($quejoso["cveTipoPersona"] != '0' & $quejoso["nombre"] != '0' & $quejoso["paterno"] != '0' & $quejoso["materno"] != '0' & $quejoso["cveGenero"] != '0') {
                        $quejososDto = new QuejososDTO();
                        $quejososDto->setCveGenero($quejoso["cveGenero"]);
                        $quejososDto->setCveTipoPersona($quejoso["cveTipoPersona"]);
                        $quejososDto->setIdAmparo($AmparosDto->getIdAmparo());
                        if ($quejoso["cveTipoPersona"] == 1) {
                            $quejososDto->setMaternoQ($quejoso["materno"]);
                            $quejososDto->setPaternoQ($quejoso["paterno"]);
                            //$quejososDto->setNombreMoral($quejoso["nombre"]);
                            $quejososDto->setNombreQ($quejoso["nombre"]);
                        } else if ($quejoso["cveTipoPersona"] == 2 || $quejoso["cveTipoPersona"] == 3) {
                            $quejososDto->setMaternoQ("");
                            $quejososDto->setPaternoQ("");
                            $quejososDto->setNombreMoral($quejoso["nombre"]);
                            $quejososDto->setNombreQ("");
                        }
                        if ($tipoPersonaAdd == 1) {
                            $quejososDto->setIdImputadoCarpeta($quejoso["idOfendidoOimputado"]);
                        }
                        if ($tipoPersonaAdd == 2) {
                            $quejososDto->setidOfendidoCarpeta($quejoso["idOfendidoOimputado"]);
                        }
                        $resultado = $quejososController->insertQuejosos($quejososDto, $proveedor);
                        if ($resultado == "") {
                            $transaccion = 0;
                            error_log("error al insertar quejoso" . print_r($quejoso, true));
                            break;
                        }
                    }
                } else {
                    error_log("Elemento quejoso seleccionado" . print_r($quejoso, true));

//            if ($quejoso["idQuejoso"] == 0) {
                    error_log("EDIT quejoso");
                    $quejososDto = new QuejososDTO();
                    $quejososDto->setCveGenero($quejoso["cveGenero"]);
                    $quejososDto->setCveTipoPersona($quejoso["cveTipoPersona"]);
                    $quejososDto->setIdAmparo($AmparosDto->getIdAmparo());
                    $quejososDto->setIdQuejoso($quejoso["idQuejoso"]);
                    if ($quejoso["cveTipoPersona"] == 1) {
                        $quejososDto->setMaternoQ($quejoso["materno"]);
                        $quejososDto->setPaternoQ($quejoso["paterno"]);
                        //$quejososDto->setNombreMoral($quejoso["nombre"]);
                        $quejososDto->setNombreQ($quejoso["nombre"]);
                    } else if ($quejoso["cveTipoPersona"] == 2 || $quejoso["cveTipoPersona"] == 3) {
                        $quejososDto->setMaternoQ("");
                        $quejososDto->setPaternoQ("");
                        $quejososDto->setNombreMoral($quejoso["nombre"]);
                        $quejososDto->setNombreQ("");
                    }

//                error_log("QuejosoDto insertat" . print_r($quejososDto, true));
//                $resultado = $quejososController->insertQuejosos($quejososDto, $proveedor);
//                if ($resultado == "") {
//                    $transaccion = 0;
//                    error_log("error al insertar quejoso");
//                    break;
//                }
//            } else {
                    $resultado = $quejososController->updateQuejosos($quejososDto, $proveedor);
                    if ($resultado == "") {
                        $transaccion = 0;
                        error_log("error al insertar quejoso");
                        break;
                    }
//            }
                }
            }
        }
//        $quejosostmpDto = new QuejososDTO();
//        foreach ($quejososDb as $quejosodb) {
//            $encontrado = false;
//            foreach ($listaQuejosos as $quejoso) {
//                if(!isset($quejoso[0])){
//                    if ($quejosodb->getIdQuejoso() == $quejoso["idQuejoso"]) {
//                        $encontrado = true;
//                        error_log("encontrado Quejoso => " . $quejosodb->getIdQuejoso());
//                        break;
//                    }
//                }else{
//                    $encontrado = true;
//                }
//            }
//            if ($encontrado == false) {
//
//                $quejosostmpDto->setIdQuejoso($quejosodb->getIdQuejoso());
//                $quejosostmpDto->setActivo("N");
//                error_log("QuejososTmp => " . print_r($quejosostmpDto, true));
//                $resultado = $quejososController->updateQuejosos($quejosostmpDto, $proveedor);
//                if (!$resultado) {
//                    $transaccion = 0;
//                    error_log($proveedor->error());
//                    break;
//                }
//            }
//        }
//        $quejosostmpDto = new QuejososDTO();


        $TercerosController = new TercerosperjudicadosController();
        $TercerosDto = new TercerosperjudicadosDTO();
        $TercerosDto->setIdAmparo($AmparosDto->getIdAmparo());
        $TercerosDto->setActivo("S");

        $TercerosDb = $TercerosController->selectTercerosperjudicados($TercerosDto);
        $tercerostmpDto = new TercerosperjudicadosDTO();

        if ($listaTerceros != '') {
            foreach ($listaTerceros as $ltstercero) {

                error_log("elemento tercero seleccionado " . print_r($ltstercero, true));
                if (isset($ltstercero[0])) {
                    $ltstercero["cveTipoPersona"] = $ltstercero[0];
                    $ltstercero["nombre"] = $ltstercero[1];
                    $ltstercero["paterno"] = $ltstercero[2];
                    $ltstercero["materno"] = $ltstercero[3];
                    $ltstercero["cveGenero"] = $ltstercero[4];
                    if ($ltstercero["cveTipoPersona"] != '0' & $ltstercero["nombre"] != '0' & $ltstercero["paterno"] != '0' & $ltstercero["materno"] != '0' & $ltstercero["cveGenero"] != '0') {
                        $terceroDto = new TercerosperjudicadosDTO();

                        $terceroDto->setCveGenero($ltstercero["cveGenero"]);
                        $terceroDto->setCveTipoPersona($ltstercero["cveTipoPersona"]);
                        $terceroDto->setIdAmparo($AmparosDto->getIdAmparo());
                        if ($ltstercero["cveTipoPersona"] == 1) {
                            $terceroDto->setMaternoT($ltstercero["materno"]);
                            $terceroDto->setPaternoT($ltstercero["paterno"]);
//                        $terceroDto->setNombreMoral($ltstercero["nombre"]);
                            $terceroDto->setNombreT($ltstercero["nombre"]);
                        } else if ($ltstercero["cveTipoPersona"] == 2 || $ltstercero["cveTipoPersona"] == 3) {
                            $terceroDto->setMaternoT("");
                            $terceroDto->setPaternoT("");
                            $terceroDto->setNombreMoral($ltstercero["nombre"]);
                            $terceroDto->setNombreT("");
                        }
                        $resultado = $tercerosController->insertTercerosperjudicados($terceroDto, $proveedor);
                        if ($resultado == "") {
                            $transaccion = 0;
                            error_log("error al insertar tercero" . print_r($ltstercero, true));
                            break;
                        }
                    }
                } else {
//            if ($ltstercero["idTercero"] == "0") {
                    $terceroDto = new TercerosperjudicadosDTO();

                    $terceroDto->setCveGenero($ltstercero["cveGenero"]);
                    $terceroDto->setCveTipoPersona($ltstercero["cveTipoPersona"]);
                    $terceroDto->setIdAmparo($AmparosDto->getIdAmparo());
                    $terceroDto->setIdTercero($ltstercero["idTercero"]);
                    if ($ltstercero["cveTipoPersona"] == 1) {
                        $terceroDto->setMaternoT($ltstercero["materno"]);
                        $terceroDto->setPaternoT($ltstercero["paterno"]);
//                        $terceroDto->setNombreMoral($tercero["nombre"]);
                        $terceroDto->setNombreT($ltstercero["nombre"]);
                    } else if ($ltstercero["cveTipoPersona"] == 2 || $ltstercero["cveTipoPersona"] == 3) {
                        $terceroDto->setMaternoT("");
                        $terceroDto->setPaternoT("");
                        $terceroDto->setNombreMoral($ltstercero["nombre"]);
                        $terceroDto->setNombreT("");
                    }
//                $resultado = $tercerosController->insertTercerosperjudicados($terceroDto, $proveedor);
//                if ($resultado == "") {
//                    $transaccion = 0;
//                    error_log("error al insertar tercero");
//                    break;
//                }
//            } else {
                    $resultado = $tercerosController->updateTercerosperjudicados($terceroDto, $proveedor);
                    if ($resultado == "") {
                        $transaccion = 0;
                        error_log("error al insertar tercero");
                        break;
                    }
//            }
                }
            }
        }
//        foreach ($TercerosDb as $tercerosdb) {
//            $encontrado = false;
//            foreach ($listaTerceros as $ltstercero) {
//                if(!isset($ltstercero[0])){
//                    if ($tercerosdb->getIdTercero() == $ltstercero["idTercero"]) {
//                        $encontrado = true;
//                        error_log("encontrado tercero perjudicado");
//                        break;
//                    }
//                }else{
//                    $encontrado = true;
//                }
//            }
//            if ($encontrado == false) {
//                error_log("No encontrado tercero perjudicado" . print_r($tercerosdb, true));
//                $tercerostmpDto->setIdTercero($tercerosdb->getIdTercero());
//                $tercerostmpDto->setActivo("N");
//                $resultado = $tercerosController->updateTercerosperjudicados($tercerostmpDto, $proveedor);
//                if (!$resultado) {
//                    $transaccion = 0;
//                    error_log($proveedor->error());
//                    break;
//                }
//            }
//        }

        if ($transaccion == 1) {
            $AmparosDto->setObservaciones(utf8_decode($AmparosDto->getObservaciones()));
            $AmparosDto->setAutoridadProcedencia($AmparosDto->getAutoridadProcedencia());
            $AmparosDto->setIdAmparo($AmparosDto->getIdAmparo());
            $AmparosDto = $AmparosDao->updateAmparos($AmparosDto, $proveedor);
            if ($AmparosDto == "") {
                $transaccion = 0;
                error_log($proveedor->error());
            }
        }

        if ($transaccion == 1) {
//            $bitacoraDTO = new BitacoramovimientosDTO();
//            $bitacoraCtrl = new BitacoramovimientosController();
//            $bitacoraDTO->setCveAccion(92); // insercion de oficio / acuerdo
//            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
//            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
//            $dtoToJson->toJson("INSERCION");
//            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
//            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
//            $bitacoraDTO->setCvePerfil("100"); // variable de session
//            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
//            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro la promocion", "idAmparo" => $AmparosDto[0]->getIdAmparo(),
                "numAmparo" => $AmparosDto[0]->getNumAmparo(), $AmparosDto[0]->getAniAmparo());
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $AmparosDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
        }

        return $AmparosDto;
//}
//return "";
    }

    public function deleteAmparos($AmparosDto, $proveedor = null) {

        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $mensaje = "";
        $transaccion = 1;
        $AmparosDto = $this->validarAmparos($AmparosDto);
        $quejososController = new QuejososController();
        $tercerosController = new TercerosperjudicadosController();
        $quejososDto = new QuejososDTO();
        $quejososDto->setIdAmparo($AmparosDto->getIdAmparo());
        $quejososDto->setActivo("S");
        $quejososDb = $quejososController->selectQuejosos($quejososDto);

        $quejosostmpDto = new QuejososDTO();
        if ($quejososDb != "") {
            foreach ($quejososDb as $quejosodb) {

                $quejosostmpDto->setIdQuejoso($quejosodb->getIdQuejoso());
                $quejosostmpDto->setActivo("N");
                error_log("QuejososTmp => " . print_r($quejosostmpDto, true));
                $resultado = $quejososController->updateQuejosos($quejosostmpDto, $proveedor);
                if (!$resultado) {
                    $transaccion = 0;
                    error_log($proveedor->error());
                    break;
                }
            }
        }

        $TercerosDto = new TercerosperjudicadosDTO();
        $TercerosDto->setIdAmparo($AmparosDto->getIdAmparo());
        $TercerosDto->setActivo("S");

        $TercerosDb = $tercerosController->selectTercerosperjudicados($TercerosDto);

        $tercerostmpDto = new TercerosperjudicadosDTO();
        if ($TercerosDb != "") {
            foreach ($TercerosDb as $tercerosdb) {
                $tercerostmpDto->setIdTercero($tercerosdb->getIdTercero());
                $tercerostmpDto->setActivo("N");
                $resultado = $tercerosController->updateTercerosperjudicados($tercerostmpDto, $proveedor);
                if (!$resultado) {
                    $transaccion = 0;
                    error_log($proveedor->error());
                    break;
                }
            }
        }
        $AmparosDao = new AmparosDAO();
        $AmparosDto->setActivo("N");
        $AmparosDto = $AmparosDao->updateAmparos($AmparosDto, $proveedor);
        if ($AmparosDto == "") {
            $transaccion = 0;
            error_log("no se actualizo amparo " . $proveedor->error());
        } else {
            error_log(print_r($AmparosDto, true));
        }

        if ($transaccion == 1) {
//            $bitacoraDTO = new BitacoramovimientosDTO();
//            $bitacoraCtrl = new BitacoramovimientosController();
//            $bitacoraDTO->setCveAccion(92); // insercion de oficio / acuerdo
//            $bitacoraDTO->setFechaMovimiento(date("Y-m-d H:i:s")); //
//            $dtoToJson = new DtoToJson($ActuacionesDtoTmp);
//            $dtoToJson->toJson("INSERCION");
//            $bitacoraDTO->setObservaciones($dtoToJson->toJson("INSERCION")); //
//            $bitacoraDTO->setCveUsuario($ActuacionesDto->getCveUsuario());
//            $bitacoraDTO->setCvePerfil("100"); // variable de session
//            $bitacoraDTO->setCveAdscripcion($ActuacionesDto->getCveJuzgado()); // variable de session
//            $bitacoraCtrl->insertBitacoramovimientos($bitacoraDTO);

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se elimino el amparo", "AmparoDto" => $AmparosDto,
            );
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $AmparosDto = "";
            $respuesta = array("Estatus" => "Error", "Mensaje" => $mensaje);
        }
        $proveedor->close();
        return $respuesta;
    }

}

?>