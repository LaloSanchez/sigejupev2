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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php"); // nombre de tabla mal escrito
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php"); // cambiar ruta

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitosexhortos/DelitosexhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitosexhortos/DelitosexhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ceresos/CeresosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");

include_once(dirname(__FILE__) . "/../bitacoramovimientos/BitacoramovimientosController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuacionesestatus/ActuacionesestatusDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortosgenerados/ExhortosgeneradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortosgenerados/ExhortosgeneradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortosgenerados/ExhortosgeneradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortosgenerados/ExhortosgeneradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuacionesestatus/ActuacionesestatusDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatus/EstatusDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatus/EstatusDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
//
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

class ExhortosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarExhortos($ExhortosDto) {

        $ExhortosDto->setidExhorto(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getidExhorto()))));
        $ExhortosDto->setIdExhortoGenerado(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getIdExhortoGenerado()))));
        $ExhortosDto->setnumExhorto(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getnumExhorto()))));
        $ExhortosDto->setaniExhorto(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getaniExhorto()))));
        $ExhortosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcveJuzgado()))));
        $ExhortosDto->setcveEstadoProcedencia(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcveEstadoProcedencia()))));
        $ExhortosDto->setcveJuzgadoProcedencia(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcveJuzgadoProcedencia()))));
        $ExhortosDto->setjuzgadoProcedencia(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getjuzgadoProcedencia()))));
        $ExhortosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcarpetaInv()))));
        $ExhortosDto->setnuc(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getnuc()))));
        $ExhortosDto->setnumero(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getnumero()))));
        $ExhortosDto->setCveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcveTipoCarpeta()))));

        $ExhortosDto->setanio(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getanio()))));
        $ExhortosDto->setnumOficio(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getnumOficio()))));
        $ExhortosDto->setsintesis(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getsintesis()))));
        $ExhortosDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getobservaciones()))));
        $ExhortosDto->setcveConsignacion(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcveConsignacion()))));
        $ExhortosDto->setcveEstatusExhorto(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getcveEstatusExhorto()))));
        $ExhortosDto->setactivo(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getactivo()))));
        $ExhortosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getfechaRegistro()))));
        $ExhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ExhortosDto->getfechaActualizacion()))));
        return $ExhortosDto;
    }

    public function selectExhortos($ExhortosDto, $param = null, $proveedor = null) {

        $JuzgadosDto = new JuzgadosDTO();
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, $proveedor); ///se llama objeto juzgados

        $nombreCaptura = "";
        $desJuzgadoDestino = "";
        if ($param['imprimir'] == 1) {

            $cveUsuario = $_SESSION['cveUsuarioSistema'];
            $usuarioCliente = new UsuarioCliente();
            $usuarios = $usuarioCliente->selectUsuarios_In($cveUsuario);
            $usuarios = json_decode($usuarios, true);


            foreach ($usuarios["data"] as $usuario) {
                $nombreCaptura = $usuario["nombre"] . " " . $usuario["paterno"] . " " . $usuario["materno"];
            }


            foreach ($JuzgadosDto as $juzgado) {

                if ($_SESSION['cveAdscripcion'] == $juzgado->getcveJuzgado()) {
                    $desJuzgadoDestino = $juzgado->getDesJuzgado();
                }
            }
        }
        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $ExhortosDao = new ExhortosDAO();
        $orden = "";
        $limit = "";
        if ($ExhortosDto->getIdExhorto() == "") {

            if ($ExhortosDto->getNumExhorto() == "" && $ExhortosDto->getAniExhorto() == "") {

                $orden.=" AND fechaRegistro >= '" . $param['fechaInicial'] . "' AND fechaRegistro <= '" . $param['fechaFinal'] . "'";
            }

            if ($param['totalRegistros'] == 0) {
                $inicio = ($param["pagina"] - 1) * $param['nRegistros'];
                $limit = " LIMIT " . $inicio . "," . $param['nRegistros'] . "";
            }

            if (isset($param['generico']) && $param['generico'] == 'sinIdExhortoGenerado') {
                $orden .= ' AND IdExhortoGenerado IS NULL ';
            }

            $orden.= " ORDER BY fechaRegistro DESC " . $limit . "";
        }

        $ExhortosDto = $ExhortosDao->selectExhortos($ExhortosDto, $orden, $proveedor);
        $totalRows = count($ExhortosDto);

        if ($ExhortosDto != "") {

            $response = [];
            $data = [];

            $count = 0;

            $DelitosDto = new DelitosDTO();
            $DelitosDao = new DelitosDAO();
            $DelitosDto = $DelitosDao->selectDelitos($DelitosDto, $proveedor); ////se llama objeto delitos            

            $EstadosDto = new EstadosDTO();
            $EstadosDao = new EstadosDAO();
            $EstadosDto = $EstadosDao->selectEstados($EstadosDto, $proveedor); //se llama objeto estados

            $MunicipiosDto = new MunicipiosDTO();
            $MunicipiosDao = new MunicipiosDAO();
            $MunicipiosDto = $MunicipiosDao->selectMunicipios($MunicipiosDto, $proveedor); //se llama objeto municipios

            $ConsignacionesDto = new ConsignacionesDTO();
            $ConsignacionesDao = new ConsignacionesDAO();
            $ConsignacionesDto = $ConsignacionesDao->selectConsignaciones($ConsignacionesDto, $proveedor); //se llama objeto consignaciones

            $GenerosDto = new GenerosDTO();
            $GenerosDao = new GenerosDAO();
            $GenerosDto = $GenerosDao->selectGeneros($GenerosDto, $proveedor); //se llama objeto generos

            $CeresosDto = new CeresosDTO();
            $CeresosDao = new CeresosDAO();
            $CeresosDto = $CeresosDao->selectCeresos($CeresosDto, $proveedor); //se llama objeto ceresos

            $TipospersonasDto = new TipospersonasDTO();
            $TipospersonasDao = new TipospersonasDAO();
            $TipospersonasDto = $TipospersonasDao->selectTipospersonas($TipospersonasDto, $proveedor); //se llama objeto tipopersona

            foreach ($ExhortosDto as $key => $exhorto) {

                $desJuzgado = "";
                foreach ($JuzgadosDto as $juzgado) {

                    if ($exhorto->getcveJuzgadoProcedencia() == $juzgado->getcveJuzgado()) {
                        $desJuzgado = $juzgado->getDesJuzgado();
                        $exhorto->setcveJuzgadoProcedencia($exhorto->getcveJuzgadoProcedencia() . "/" . $juzgado->getCveTipojuzgado());
                    }
                }
                $desEstado = "";
                foreach ($EstadosDto as $estado) {

                    if ($exhorto->getCveEstadoProcedencia() == $estado->getcveEstado()) {
                        $desEstado = $estado->getDesEstado();
                    }
                }

                $idExhorto = $exhorto->getIdExhorto();

                $ImputadosexhortosDto = new ImputadosexhortosDTO();
                $ImputadosexhortosDao = new ImputadosexhortosDAO();
                $ImputadosexhortosDto->setIdExhorto($idExhorto);
                $ImputadosexhortosDto->setActivo('S');
                $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto, $proveedor);
                $listaImputados = array();

                if ($ImputadosexhortosDto != '') {

                    foreach ($ImputadosexhortosDto as $imputado) {
                        $desConsignacion = "";
                        foreach ($ConsignacionesDto as $consignacion) {
                            if ($imputado->getCveConsignacion() == $consignacion->getCveConsignacion()) {
                                $desConsignacion = $consignacion->getdesConsignacion();
                            }
                        }
                        $desGenero = "";
                        foreach ($GenerosDto as $genero) {
                            if ($imputado->getcveGenero() == $genero->getcveGenero()) {
                                $desGenero = $genero->getdesGenero();
                            }
                        }
                        $desEstadoI = "";
                        foreach ($EstadosDto as $estadoI) {
                            if ($imputado->getCveEstado() == $estadoI->getcveEstado()) {
                                $desEstadoI = $estadoI->getDesEstado();
                            }
                        }
                        $desMunicipioI = "";
                        foreach ($MunicipiosDto as $municipioI) {
                            if ($imputado->getcveMunicipio() == $municipioI->getcveMunicipio()) {
                                $desMunicipioI = $municipioI->getdesMunicipio();
                            }
                        }
                        $desCereso = "";
                        foreach ($CeresosDto as $cereso) {
                            if ($imputado->getcveCereso() == $cereso->getcveCereso()) {
                                $desCereso = $cereso->getdesCereso();
                            }
                        }
                        $desTipoPersona = "";
                        foreach ($TipospersonasDto as $tipo) {
                            if ($imputado->getcveTipoPersona() == $tipo->getcveTipoPersona()) {
                                $desTipoPersona = $tipo->getdesTipoPersona();
                            }
                        }

                        $resultadoI = array(
                            "idImputadoExhorto" => $imputado->getidImputadoExhorto(),
                            "idExhorto" => $imputado->getIdExhorto(),
                            "cveConsignacion" => $imputado->getCveConsignacion(),
                            "desConsignacion" => utf8_encode($desConsignacion),
                            "paterno" => utf8_encode($imputado->getpaterno()),
                            "materno" => utf8_encode($imputado->getmaterno()),
                            "nombre" => utf8_encode($imputado->getNombre()),
                            "cveGenero" => $imputado->getcveGenero(),
                            "desGenero" => $desGenero,
                            "cveEstado" => $imputado->getcveEstado(),
                            "desEstado" => utf8_encode($desEstadoI),
                            "cveMunicipio" => $imputado->getcveMunicipio(),
                            "desMunicipio" => utf8_encode($desMunicipioI),
                            "domicilio" => utf8_encode($imputado->getdomicilio()),
                            "alias" => utf8_encode($imputado->getalias()),
                            "telefono" => $imputado->gettelefono(),
                            "cveCereso" => $imputado->getcveCereso(),
                            "desCereso" => utf8_encode($desCereso),
                            "fechaRegistro" => $imputado->getFechaRegistro(),
                            "fechaActualizacion" => $imputado->getFechaActualizacion(),
                            "cveTipoPersona" => $imputado->getcveTipoPersona(),
                            "desTipoPersona" => utf8_encode($desTipoPersona),
                            "nombreMoral" => utf8_encode($imputado->getnombreMoral())
                        );

                        array_push($listaImputados, $resultadoI);
                    }
                }
                $OfenfendidosexhortosDto = new OfenfendidosexhortosDTO();
                $OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
                $OfenfendidosexhortosDto->setIdExhorto($idExhorto);
                $OfenfendidosexhortosDto->setActivo('S');
                $OfenfendidosexhortosDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto, $proveedor);
                $listaOfendidos = array();

                if ($OfenfendidosexhortosDto != '') {

                    foreach ($OfenfendidosexhortosDto as $ofendido) {

                        $desTipoPersonaO = "";
                        foreach ($TipospersonasDto as $tipo) {
                            if ($ofendido->getcveTipoPersona() == $tipo->getcveTipoPersona()) {
                                $desTipoPersonaO = $tipo->getdesTipoPersona();
                            }
                        }
                        $desEstadoO = "";
                        foreach ($EstadosDto as $estadoO) {
                            if ($ofendido->getCveEstado() == $estadoO->getcveEstado()) {
                                $desEstadoO = $estadoO->getDesEstado();
                            }
                        }
                        $desMunicipioO = "";
                        foreach ($MunicipiosDto as $municipioO) {
                            if ($ofendido->getcveMunicipio() == $municipioO->getcveMunicipio()) {
                                $desMunicipioO = $municipioO->getdesMunicipio();
                            }
                        }
                        $desGeneroO = "";
                        foreach ($GenerosDto as $generoO) {
                            if ($ofendido->getcveGenero() == $generoO->getcveGenero()) {
                                $desGeneroO = $generoO->getdesGenero();
                            }
                        }

                        $resultadoO = array(
                            "idOfenfendidoExhorto" => $ofendido->getidOfenfendidoExhorto(),
                            "idExhorto" => $ofendido->getIdExhorto(),
                            "paterno" => utf8_encode($ofendido->getpaterno()),
                            "materno" => utf8_encode($ofendido->getmaterno()),
                            "nombre" => utf8_encode($ofendido->getNombre()),
                            "domicilio" => utf8_encode($ofendido->getdomicilio()),
                            "telefono" => $ofendido->gettelefono(),
                            "cveTipoPersona" => $ofendido->getcveTipoPersona(),
                            "desTipoPersona" => utf8_encode($desTipoPersonaO),
                            "nombreMoral" => utf8_encode($ofendido->getnombreMoral()),
                            "activo" => $ofendido->getactivo(),
                            "cveEstado" => $ofendido->getcveEstado(),
                            "desEstadoO" => utf8_encode($desEstadoO),
                            "cveMunicipio" => $ofendido->getcveMunicipio(),
                            "desMunicipio" => utf8_encode($desMunicipioO),
                            "fechaRegistro" => $ofendido->getFechaRegistro(),
                            "fechaActualizacion" => $ofendido->getFechaActualizacion(),
                            "cveGenero" => $ofendido->getcveGenero(),
                            "desGenero" => $desGeneroO
                        );
                        array_push($listaOfendidos, $resultadoO);
                    }
                }
                $DelitosexhortosDto = new DelitosexhortosDTO();
                $DelitosexhortosDao = new DelitosexhortosDAO();
                $DelitosexhortosDto->setIdExhorto($idExhorto);
                $DelitosexhortosDto->setActivo('S');
                $DelitosexhortosDto = $DelitosexhortosDao->selectDelitosexhortos($DelitosexhortosDto, $proveedor);
                $listaDelitos = array();

                if ($DelitosexhortosDto != '') {

                    foreach ($DelitosexhortosDto as $delito) {
                        $desDelito = "";
                        foreach ($DelitosDto as $del) {
                            if ($delito->getcveDelito() == $del->getcveDelito()) {
                                $desDelito = $del->getdesDelito();
                            }
                        }

                        $resultadoD = array(
                            "idDelitoExhorto" => $delito->getidDelitoExhorto(),
                            "idExhorto" => $delito->getIdExhorto(),
                            "cveDelito" => $delito->getcveDelito(),
                            "desDelito" => utf8_encode($desDelito)
                        );

                        array_push($listaDelitos, $resultadoD);
                    }
                }


                $desConsignacionE = "";
                foreach ($ConsignacionesDto as $consignacion) {
                    if ($exhorto->getCveConsignacion() == $consignacion->getCveConsignacion()) {
                        $desConsignacionE = $consignacion->getdesConsignacion();
                    }
                }

                #busca juzgado destino del la impresion
                if ($param['imprimir'] == 1) {
                    foreach ($JuzgadosDto as $juzgado) {
                        if ($exhorto->getCveJuzgado()    == $juzgado->getcveJuzgado()) {
                            $desJuzgadoDestino = $juzgado->getDesJuzgado();
                            break;
                        }
                    }
                }

                $data[$count]['idExhorto'] = $exhorto->getIdExhorto();
                $data[$count]['IdExhortoGenerado'] = $exhorto->getIdExhortoGenerado();
                $data[$count]['numExhorto'] = $exhorto->getNumExhorto();
                $data[$count]['aniExhorto'] = $exhorto->getAniExhorto();
                $data[$count]['cveJuzgado'] = $exhorto->getCveJuzgado();
                $data[$count]['desJuzgadoDestino'] = utf8_encode($desJuzgadoDestino);
                $data[$count]['cveEstadoProcedencia'] = $exhorto->getCveEstadoProcedencia();
                $data[$count]['desEstadoProcedencia'] = utf8_encode($desEstado);
                $data[$count]['cveJuzgadoProcedencia'] = $exhorto->getcveJuzgadoProcedencia();
                $data[$count]['desJuzgadoProcedencia'] = utf8_encode($desJuzgado);
                $data[$count]['JuzgadoProcedencia'] = utf8_encode($exhorto->getJuzgadoProcedencia());
                $data[$count]['carpetaInv'] = $exhorto->getCarpetaInv();
                $data[$count]['nuc'] = $exhorto->getNuc();
                $data[$count]['numero'] = $exhorto->getNumero();
                $data[$count]['anio'] = $exhorto->getAnio();
                $data[$count]['cveTipoCarpeta'] = $exhorto->getCveTipoCarpeta();
                $data[$count]['numOficio'] = $exhorto->getNumOficio();
                $data[$count]['anioOficio'] = $exhorto->getAniOficio();
                $data[$count]['sintesis'] = json_encode($exhorto->getSintesis()) == "" ? ($exhorto->getSintesis()) : utf8_encode($exhorto->getSintesis());
                $data[$count]['observaciones'] = json_encode($exhorto->getObservaciones()) == "" ? utf8_encode($exhorto->getObservaciones()) : $exhorto->getObservaciones();
                $data[$count]['cveConsignacion'] = $exhorto->getCveConsignacion();
                $data[$count]['desConsignacion'] = utf8_encode($desConsignacionE);
                $data[$count]['cveEstatusExhorto'] = $exhorto->getCveEstatusExhorto();
                $data[$count]['activo'] = $exhorto->getActivo();
                $data[$count]['fechaRegistro'] = $exhorto->getFechaRegistro();
                $data[$count]['fechaActualizacion'] = $exhorto->getFechaActualizacion();
                $data[$count]['nombreCaptura'] = $nombreCaptura;
                $data[$count]['listaImputados'] = $listaImputados;
                $data[$count]['listaOfendidos'] = $listaOfendidos;
                $data[$count]['listaDelitos'] = $listaDelitos;

                $count ++;
            }

            $response = [
                'estatus' => 'ok',
                'totalCount' => $totalRows,
                'mensaje' => 'resultado de la consulta',
                'data' => $data
            ];
        } else {

            $response = [

                'estatus' => 'error',
                'mensaje' => 'No se encontraron resultados'
            ];
        }
        return $response;
    }

    public function selectTotalExhortos($ExhortosDto, $param = null, $proveedor = null) {

        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $ExhortosDao = new ExhortosDAO();
        $orden = "";
        $limit = "";
        if ($ExhortosDto->getIdExhorto() == "") {

            if ($ExhortosDto->getNumExhorto() == "" && $ExhortosDto->getAniExhorto() == "") {

                $orden.=" AND fechaRegistro >= '" . $param['fechaInicial'] . "' AND fechaRegistro <= '" . $param['fechaFinal'] . "'";
            }
            // if ($param['totalRegistros'] == 0) {
            //     $inicio = ($param["pagina"] - 1) * 15;
            //     $limit = " LIMIT " . $inicio . ",15";
            // }
            if (isset($param['generico']) && $param['generico'] == 'sinIdExhortoGenerado') {
                $orden .= ' AND IdExhortoGenerado IS NULL ';
            }

            $orden.= " ORDER BY fechaRegistro DESC " . $limit . "";
        }

        $ExhortosDto = $ExhortosDao->selectExhortos($ExhortosDto, $orden, $proveedor);
        $totalRows = count($ExhortosDto);
        if ($ExhortosDto != "") {

            $response = [];
            $data = [];
            $count = 0;

            $response = [
                'estatus' => 'ok',
                'totalCount' => $totalRows,
                'mensaje' => 'resultado de la consulta',
                'data' => $data
            ];
        } else {

            $response = [

                'estatus' => 'error',
                'mensaje' => 'No se encontraron resultados'
            ];
        }
        return $response;
    }

    public function insertExhortos($ExhortosDto, $proveedor = null, $listaImputados, $listaOfendidos, $listaDelitos) {
        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $mensaje = "";
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $numOficio = $ExhortosDto->getNumOficio();
        $numOficio = explode("/", $numOficio);
        $ExhortosDto->setNumOficio($numOficio[0]);
        $ExhortosDto->setAniOficio($numOficio[1]);

        $contadoresDto->setCveJuzgado($ExhortosDto->getCveJuzgado()); /// variable desesion
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoCarpeta(7);
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
        if ($contadoresDto != "") {
            $ExhortosDto->setNumExhorto($contadoresDto[0]->getNumero());
            $ExhortosDto->setAniExhorto($contadoresDto[0]->getAnio());
            $ExhortosDao = new ExhortosDAO();
            $ExhortosDto = $ExhortosDao->insertExhortos($ExhortosDto, $proveedor); ////INSERCION DE EXHORTO
            if ($ExhortosDto == "") {
                $transaccion = 0;
                $mensaje .= "Error al insertar el exhorto";
                error_log($proveedor->error());
            }
            $ExhortosDto2 = $ExhortosDto;
            $ExhortosDto = $ExhortosDto[0];

            if ($ExhortosDto->getIdExhortoGenerado() != "") {

                $ExhortosgeneradosDto = new ExhortosgeneradosDTO();
                $ExhortosgeneradosDao = new ExhortosgeneradosDAO();
                $ExhortosgeneradosDto->setIdExhortoGenerado($ExhortosDto->getIdExhortoGenerado());
                $ExhortosgeneradosDto = $ExhortosgeneradosDao->selectExhortosgenerados($ExhortosgeneradosDto, "", $proveedor);

                $ActuacionesestatusDto = new ActuacionesestatusDTO();
                $ActuacionesestatusDao = new ActuacionesestatusDAO();
                $ActuacionesestatusDto->setIdActuacion($ExhortosgeneradosDto[0]->getIdActuacion());
                $ActuacionesestatusDto->setActivo('S');
                $ActuacionesestatusDto = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto);

                $ActuacionesestatusDto2 = new ActuacionesestatusDTO();
                $ActuacionesestatusDao2 = new ActuacionesestatusDAO();
                $ActuacionesestatusDto2->setIdActuacionesEstatus($ActuacionesestatusDto[0]->getidActuacionesEstatus());
                $ActuacionesestatusDto2->setActivo('N');
                $ActuacionesestatusDto2 = $ActuacionesestatusDao2->updateActuacionesestatus($ActuacionesestatusDto2, $proveedor);
                if ($ActuacionesestatusDto2 == "") {
                    $transaccion = 0;
                    $mensaje .="No se cambio el estatus del exhorto generado";
                }

                $ActuacionesestatusDto3 = new ActuacionesestatusDTO();
                $ActuacionesestatusDao3 = new ActuacionesestatusDAO();
                $ActuacionesestatusDto3->setIdActuacion($ExhortosgeneradosDto[0]->getIdActuacion());
                $ActuacionesestatusDto3->setCveEstatus(19);
                $ActuacionesestatusDto3->setActivo('S');
                $ActuacionesestatusDto3 = $ActuacionesestatusDao3->insertActuacionesestatus($ActuacionesestatusDto3, $proveedor);
                if ($ActuacionesestatusDto3 == "") {
                    $transaccion = 0;
                    $mensaje.="No se inserto el estatus del exhorto generado";
                }
            } else {
                $mensaje.="No tiene exhorto generado";
            }

            //////INSERCION DE IMPUTADOS
            if ($listaImputados != "") {
                $listaImputados = json_decode($listaImputados, true);
                $imputadosexhortosDao = new ImputadosexhortosDAO();
                foreach ($listaImputados as $imputado) {
                    $imputadosexhortosDto = new ImputadosexhortosDTO();

                    $imputadosexhortosDto->setIdExhorto($ExhortosDto->getIdExhorto());
                    $imputadosexhortosDto->setCveTipoPersona($imputado["cveTipoPersona"]);
                    $imputadosexhortosDto->setNombreMoral(utf8_decode($imputado["nombreMoral"]));
                    if ($imputado["cveTipoPersona"] == 1) {
                        $imputadosexhortosDto->setCveConsignacion($imputado["consignacion"]);
                        $imputadosexhortosDto->setCveGenero($imputado["cveGenero"]);
                        $imputadosexhortosDto->setCveEstado($imputado["cveEstado"]);
                        $imputadosexhortosDto->setCveMunicipio($imputado["cveMunicipio"]);
                        $imputadosexhortosDto->setDomicilio(utf8_decode($imputado["domicilio"]));
                        $imputadosexhortosDto->setAlias(utf8_decode($imputado["alias"]));
                        $imputadosexhortosDto->setTelefono($imputado["telefono"]);
                        $imputadosexhortosDto->setCveCereso($imputado["cveCereso"]);
                        $imputadosexhortosDto->setPaterno(utf8_decode($imputado["paterno"]));
                        $imputadosexhortosDto->setMaterno(utf8_decode($imputado["materno"]));
                        $imputadosexhortosDto->setNombre(utf8_decode($imputado["nombre"]));
                    } else if ($imputado["cveTipoPersona"] == 2 || $imputado["cveTipoPersona"] == 3) {
                        $imputadosexhortosDto->setCveConsignacion($imputado["consignacion"]);
                        //$imputadosexhortosDto->setCveConsignacion(2); ////////////pendienete con persona moral
                        $imputadosexhortosDto->setCveGenero(3);
                        $imputadosexhortosDto->setCveEstado($imputado["cveEstado"]);
                        $imputadosexhortosDto->setCveMunicipio($imputado["cveMunicipio"]);
                        $imputadosexhortosDto->setDomicilio(utf8_decode($imputado["domicilio"]));
                        $imputadosexhortosDto->setCveCereso(1);
                    }
                    //  print_r($imputadosexhortosDto);
                    $imputadosexhortos = $imputadosexhortosDao->insertImputadosexhortos($imputadosexhortosDto, $proveedor);

                    $bitacoraController = new BitacoramovimientosController();
                    $bitacoraController->agregar(264, 'INSERCION tblimputadosexhortos', 'dto', $imputadosexhortos, '');

                    if ($imputadosexhortos == "") {
                        $transaccion = 0;
                        $mensajeEx = "Verifique y actualice los campos de los imputados agregados";
                        //print_r("Error al registrar Imputados");
                        error_log("Error al registrar Imputados" . $proveedor->error());
                        break;
                    }
                }
            }
            //print_r($imputadosexhortos);
            //////INSERCION DE OFENDIDOS
            if ($listaOfendidos != "") {
                $listaOfendidos = json_decode($listaOfendidos, true);
                $ofenfendidosexhortosDao = new OfenfendidosexhortosDAO();
                foreach ($listaOfendidos as $ofendido) {
                    $ofenfendidosexhortosDto = new OfenfendidosexhortosDTO();

                    $ofenfendidosexhortosDto->setIdExhorto($ExhortosDto->getIdExhorto());
                    $ofenfendidosexhortosDto->setCveTipoPersona($ofendido["cveTipoPersona"]);
                    $ofenfendidosexhortosDto->setNombreMoral(utf8_decode($ofendido["nombreMoral"]));
                    if ($ofendido["cveTipoPersona"] == 1) {
                        $ofenfendidosexhortosDto->setCveGenero($ofendido["cveGenero"]);
                        $ofenfendidosexhortosDto->setCveEstado($ofendido["cveEstado"]);
                        $ofenfendidosexhortosDto->setCveMunicipio($ofendido["cveMunicipio"]);
                        $ofenfendidosexhortosDto->setDomicilio(utf8_decode($ofendido["domicilio"]));
                        $ofenfendidosexhortosDto->setTelefono($ofendido["telefono"]);
                        $ofenfendidosexhortosDto->setPaterno(utf8_decode($ofendido["paterno"]));
                        $ofenfendidosexhortosDto->setMaterno(utf8_decode($ofendido["materno"]));
                        $ofenfendidosexhortosDto->setNombre(utf8_decode($ofendido["nombre"]));
                        $ofenfendidosexhortosDto->setActivo('S');
                    } else if ($ofendido["cveTipoPersona"] == 2 || $ofendido["cveTipoPersona"] == 3) {
                        $ofenfendidosexhortosDto->setCveGenero(3);
                        $ofenfendidosexhortosDto->setCveEstado($ofendido["cveEstado"]);
                        $ofenfendidosexhortosDto->setCveMunicipio($ofendido["cveMunicipio"]);
                        $ofenfendidosexhortosDto->setDomicilio(utf8_decode($ofendido["domicilio"]));
                        $ofenfendidosexhortosDto->setActivo('S');
                    }

                    $ofendidosexhortos = $ofenfendidosexhortosDao->insertOfenfendidosexhortos($ofenfendidosexhortosDto, $proveedor);

                    $bitacoraController = new BitacoramovimientosController();
                    $bitacoraController->agregar(265, 'INSERCION tblofendidosexhortos', 'dto', $ofendidosexhortos, '');

                    if ($ofendidosexhortos == "") {
                        $transaccion = 0;
                        $mensajeEx = "Verifique y actualice los campos de los ofendidos agregados";
                        //print_r("Error al registrar Ofendidos");
                        error_log("Error al registrar Ofendidos");
                        break;
                    }
                    //print_r($ofenfendidosexhortosDto);
                }
            }
            ///////INSERCION DE DELITOS
            $listaDelitos = json_decode($listaDelitos, true);
            $delitosexhortosDao = new DelitosexhortosDAO();
            foreach ($listaDelitos as $delito) {
                $delitosexhortosDto = new DelitosexhortosDTO();

                $delitosexhortosDto->setIdExhorto($ExhortosDto->getIdExhorto());
                $delitosexhortosDto->setCveDelito($delito["cveDelito"]);

                $delitosexhortos = $delitosexhortosDao->insertDelitosexhortos($delitosexhortosDto, $proveedor);

                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(266, 'INSERCION tbldelitosexhortos', 'dto', $delitosexhortos, '');

                if ($delitosexhortos == "") {
                    $transaccion = 0;
                    //  print_r("Error al registrar Delitos");
                    error_log("Error al registrar Delitos");
                    break;
                }
                //print_r($delitosexhortos);
            }
        } else {
            $transaccion = 0;
            $mensaje.="error de contadores";
        }
        if ($transaccion == 1) {

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(121, 'INSERCION tblexhortos', 'dto', $ExhortosDto2, '');

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "REGISTRO DE EXHORTO REALIZADO DE FORMA CORRECTA",
                "idExhorto" => $ExhortosDto->getIdExhorto(),
                "numExhorto" => $ExhortosDto->getnumExhorto(), "aniExhorto" => $ExhortosDto->getaniExhorto());
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $ExhortosDto = "";
            $respuesta = array("totalCount" => "0", "Estatus" => "Error", "Mensaje" => $mensajeEx);

            $ExhortosDto2 = "";
        }
        error_log($mensaje);
        $respuesta = json_encode($respuesta);
        $proveedor->close();
        return $respuesta;
    }

    public function updateExhortos($ExhortosDto, $proveedor = null, $listaImputados, $listaOfendidos, $listaDelitos) {
        $idExhorto = $ExhortosDto->getIdExhorto();
        $transaccion = 1;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $ExhortosDao = new ExhortosDAO();
        $tmpExhortosDTO = new ExhortosDTO();
        //obtiene los datos previos para guardarlos en bitacora
        $tmpExhortosDTO->setIdExhorto($idExhorto);
        $tmpExhortosDTO = $ExhortosDao->selectExhortos($tmpExhortosDTO);
        //asigna los datos nuevos al DTO
        $ExhortosDto->setfechaActualizacion(date("Y-m-d H:i:s"));
        $ExhortosDto = $ExhortosDao->updateExhortos($ExhortosDto, $proveedor);

        $listaImputados = json_decode($listaImputados, true);
        $ImputadosexhortosDto = new ImputadosexhortosDTO();
        $ImputadosexhortosDao = new ImputadosexhortosDAO();
        $ImputadosexhortosDto->setIdExhorto($idExhorto);
        $ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto, "", $proveedor);

        $listaOfendidos = json_decode($listaOfendidos, true);
        $OfenfendidosexhortosDto = new OfenfendidosexhortosDTO();
        $OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
        $OfenfendidosexhortosDto->setIdExhorto($idExhorto);
        $OfenfendidosexhortosDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto, "", $proveedor);

        $listaDelitos = json_decode($listaDelitos, true);
        $DelitosexhortosDto = new DelitosexhortosDTO();
        $DelitosexhortosDao = new DelitosexhortosDAO();
        $DelitosexhortosDto->setIdExhorto($idExhorto);
        $DelitosexhortosDto = $DelitosexhortosDao->selectDelitosexhortos($DelitosexhortosDto, "", $proveedor);
        if ($listaImputados != "") {
            foreach ($listaImputados as $imputado) {
                $conImputado = 0;
                foreach ($ImputadosexhortosDto as $imputadoExistente) {

                    if ($imputado['idImputadoExhorto'] == $imputadoExistente->getIdImputadoExhorto()) {

                        $imputadosexhortosNewDto = new ImputadosexhortosDTO();
                        $imputadosexhortosNewDto->setIdImputadoExhorto($imputado["idImputadoExhorto"]);
                        $imputadosexhortosNewDto->setIdExhorto($idExhorto);
                        $imputadosexhortosNewDto->setCveTipoPersona($imputado["cveTipoPersona"]);
                        if ($imputado["cveTipoPersona"] == 1) {
                            $imputadosexhortosNewDto->setCveConsignacion($imputado["consignacion"]);
                            $imputadosexhortosNewDto->setCveGenero($imputado["cveGenero"]);
                            $imputadosexhortosNewDto->setCveEstado($imputado["cveEstado"]);
                            $imputadosexhortosNewDto->setCveMunicipio($imputado["cveMunicipio"]);
                            $imputadosexhortosNewDto->setDomicilio(utf8_decode($imputado["domicilio"]));
                            $imputadosexhortosNewDto->setAlias(utf8_decode($imputado["alias"]));
                            $imputadosexhortosNewDto->setTelefono($imputado["telefono"]);
                            $imputadosexhortosNewDto->setCveCereso($imputado["cveCereso"]);
                            $imputadosexhortosNewDto->setPaterno(utf8_decode($imputado["paterno"]));
                            $imputadosexhortosNewDto->setMaterno(utf8_decode($imputado["materno"]));
                            $imputadosexhortosNewDto->setNombre(utf8_decode($imputado["nombre"]));
                        } else if ($imputado["cveTipoPersona"] == 2 || $imputado["cveTipoPersona"] == 3) {
                            $imputadosexhortosNewDto->setNombreMoral(utf8_decode($imputado["nombreMoral"]));
                            $imputadosexhortosNewDto->setCveConsignacion($imputado["consignacion"]);
                            $imputadosexhortosNewDto->setCveGenero(3);
                            $imputadosexhortosNewDto->setCveEstado($imputado["cveEstado"]);
                            $imputadosexhortosNewDto->setCveMunicipio($imputado["cveMunicipio"]);
                            $imputadosexhortosNewDto->setDomicilio(utf8_decode($imputado["domicilio"]));
                            $imputadosexhortosNewDto->setCveCereso(1);
                        }
                        $imputadosexhortos = $ImputadosexhortosDao->updateImputadosexhortos($imputadosexhortosNewDto, $proveedor);
                    }
                    ///////valido que no existan imputados
                    if ($imputado["cveTipoPersona"] == 1) {

                        if ($imputado["cveTipoPersona"] == $imputadoExistente->getcveTipoPersona() &&
                                $imputado["nombreMoral"] == $imputadoExistente->getnombreMoral() &&
                                $imputado["consignacion"] == $imputadoExistente->getcveConsignacion() &&
                                $imputado["paterno"] == $imputadoExistente->getpaterno() &&
                                $imputado["materno"] == $imputadoExistente->getmaterno() &&
                                $imputado["nombre"] == $imputadoExistente->getnombre() &&
                                $imputado["cveEstado"] == $imputadoExistente->getcveEstado() &&
                                $imputado["cveMunicipio"] == $imputadoExistente->getcveMunicipio() &&
                                $imputado["alias"] == $imputadoExistente->getalias() &&
                                $imputado["cveCereso"] == $imputadoExistente->getcveCereso()) {
                            $conImputado++;
                        } else {
                            
                        }
                    } else {

                        if ($imputado["cveTipoPersona"] == $imputadoExistente->getcveTipoPersona() &&
                                $imputado["nombreMoral"] == $imputadoExistente->getnombreMoral() &&
                                $imputado["consignacion"] == $imputadoExistente->getcveConsignacion() &&
                                $imputado["cveEstado"] == $imputadoExistente->getcveEstado() &&
                                $imputado["cveMunicipio"] == $imputadoExistente->getcveMunicipio()) {
                            $conImputado++;
                        } else {
                            
                        }
                    }
                }
                if (($imputado['idImputadoExhorto'] == "" || $imputado['idImputadoExhorto'] == 0) && $conImputado == 0) {

                    $imputadosexhortosNewDto = new ImputadosexhortosDTO();
                    $imputadosexhortosNewDto->setIdExhorto($idExhorto);
                    $imputadosexhortosNewDto->setCveTipoPersona($imputado["cveTipoPersona"]);
                    if ($imputado["cveTipoPersona"] == 1) {
                        $imputadosexhortosNewDto->setCveConsignacion($imputado["consignacion"]);
                        $imputadosexhortosNewDto->setCveGenero($imputado["cveGenero"]);
                        $imputadosexhortosNewDto->setCveEstado($imputado["cveEstado"]);
                        $imputadosexhortosNewDto->setCveMunicipio($imputado["cveMunicipio"]);
                        $imputadosexhortosNewDto->setDomicilio(utf8_decode($imputado["domicilio"]));
                        $imputadosexhortosNewDto->setAlias(utf8_decode($imputado["alias"]));
                        $imputadosexhortosNewDto->setTelefono($imputado["telefono"]);
                        $imputadosexhortosNewDto->setCveCereso($imputado["cveCereso"]);
                        $imputadosexhortosNewDto->setPaterno(utf8_decode($imputado["paterno"]));
                        $imputadosexhortosNewDto->setMaterno(utf8_decode($imputado["materno"]));
                        $imputadosexhortosNewDto->setNombre(utf8_decode($imputado["nombre"]));
                    } else if ($imputado["cveTipoPersona"] == 2 || $imputado["cveTipoPersona"] == 3) {
                        $imputadosexhortosNewDto->setNombreMoral(utf8_decode($imputado["nombreMoral"]));
                        $imputadosexhortosNewDto->setCveConsignacion($imputado["consignacion"]);
                        $imputadosexhortosNewDto->setCveGenero(3);
                        $imputadosexhortosNewDto->setCveEstado($imputado["cveEstado"]);
                        $imputadosexhortosNewDto->setCveMunicipio($imputado["cveMunicipio"]);
                        $imputadosexhortosNewDto->setDomicilio(utf8_decode($imputado["domicilio"]));
                        $imputadosexhortosNewDto->setCveCereso(1);
                    }
                    $imputadosexhortos = $ImputadosexhortosDao->insertImputadosexhortos($imputadosexhortosNewDto, $proveedor);

                    $bitacoraController = new BitacoramovimientosController();
                    $bitacoraController->agregar(264, 'INSERCION tblimputadosexhortos', 'dto', $imputadosexhortos, '');
                }

                if ($imputadosexhortos == "") {
                    $transaccion = 0;
                    error_log("Error al registrar Imputados");
                    // break;
                }
            }
        }
        if ($listaOfendidos != "") {
            foreach ($listaOfendidos as $ofendido) {
                $conOfendidos = 0;
                foreach ($OfenfendidosexhortosDto as $ofendidoExistente) {

                    if ($ofendido['idOfenfendidoExhorto'] == $ofendidoExistente->getidOfenfendidoExhorto()) {

                        $ofenfendidosexhortosNewDto = new OfenfendidosexhortosDTO();
                        $ofenfendidosexhortosNewDto->setIdOfenfendidoExhorto($ofendido['idOfenfendidoExhorto']);
                        $ofenfendidosexhortosNewDto->setIdExhorto($idExhorto);
                        $ofenfendidosexhortosNewDto->setCveTipoPersona($ofendido["cveTipoPersona"]);

                        if ($ofendido["cveTipoPersona"] == 1) {
                            $ofenfendidosexhortosNewDto->setCveGenero($ofendido["cveGenero"]);
                            $ofenfendidosexhortosNewDto->setCveEstado($ofendido["cveEstado"]);
                            $ofenfendidosexhortosNewDto->setCveMunicipio($ofendido["cveMunicipio"]);
                            $ofenfendidosexhortosNewDto->setDomicilio(utf8_decode($ofendido["domicilio"]));
                            $ofenfendidosexhortosNewDto->setTelefono($ofendido["telefono"]);
                            $ofenfendidosexhortosNewDto->setPaterno(utf8_decode($ofendido["paterno"]));
                            $ofenfendidosexhortosNewDto->setMaterno(utf8_decode($ofendido["materno"]));
                            $ofenfendidosexhortosNewDto->setNombre(utf8_decode($ofendido["nombre"]));
                            $ofenfendidosexhortosNewDto->setActivo('S');
                        } else if ($ofendido["cveTipoPersona"] == 2 || $ofendido["cveTipoPersona"] == 3) {
                            $ofenfendidosexhortosNewDto->setNombreMoral(utf8_decode($ofendido["nombreMoral"]));
                            $ofenfendidosexhortosNewDto->setCveGenero(3);
                            $ofenfendidosexhortosNewDto->setCveEstado($ofendido["cveEstado"]);
                            $ofenfendidosexhortosNewDto->setCveMunicipio($ofendido["cveMunicipio"]);
                            $ofenfendidosexhortosNewDto->setDomicilio(utf8_decode($ofendido["domicilio"]));
                        }

                        $ofendidosexhortos = $OfenfendidosexhortosDao->updateOfenfendidosexhortos($ofenfendidosexhortosNewDto, $proveedor);
                    }
                    if ($ofendido["cveTipoPersona"] == 1) {

                        if ($ofendido["cveTipoPersona"] == $ofendidoExistente->getcveTipoPersona() &&
                                $ofendido["nombreMoral"] == $ofendidoExistente->getnombreMoral() &&
                                $ofendido["paterno"] == $ofendidoExistente->getpaterno() &&
                                $ofendido["materno"] == $ofendidoExistente->getmaterno() &&
                                $ofendido["nombre"] == $ofendidoExistente->getnombre() &&
                                $ofendido["cveEstado"] == $ofendidoExistente->getcveEstado() &&
                                $ofendido["cveMunicipio"] == $ofendidoExistente->getcveMunicipio()) {
                            $conOfendidos++;
                        } else {
                            
                        }
                    } else {

                        if ($ofendido["cveTipoPersona"] == $ofendidoExistente->getcveTipoPersona() &&
                                $ofendido["nombreMoral"] == $ofendidoExistente->getnombreMoral() &&
                                $ofendido["cveEstado"] == $ofendidoExistente->getcveEstado() &&
                                $ofendido["cveMunicipio"] == $ofendidoExistente->getcveMunicipio()) {
                            $conOfendidos++;
                        } else {
                            
                        }
                    }
                }
                if (($ofendido['idOfenfendidoExhorto'] == "" || $ofendido['idOfenfendidoExhorto'] == 0) && $conOfendidos == 0) {

                    $ofenfendidosexhortosNewDto = new OfenfendidosexhortosDTO();
                    $ofenfendidosexhortosNewDto->setIdExhorto($idExhorto);
                    $ofenfendidosexhortosNewDto->setCveTipoPersona($ofendido["cveTipoPersona"]);

                    if ($ofendido["cveTipoPersona"] == 1) {
                        $ofenfendidosexhortosNewDto->setCveGenero($ofendido["cveGenero"]);
                        $ofenfendidosexhortosNewDto->setCveEstado($ofendido["cveEstado"]);
                        $ofenfendidosexhortosNewDto->setCveMunicipio($ofendido["cveMunicipio"]);
                        $ofenfendidosexhortosNewDto->setDomicilio(utf8_decode($ofendido["domicilio"]));
                        $ofenfendidosexhortosNewDto->setTelefono($ofendido["telefono"]);
                        $ofenfendidosexhortosNewDto->setPaterno(utf8_decode($ofendido["paterno"]));
                        $ofenfendidosexhortosNewDto->setMaterno(utf8_decode($ofendido["materno"]));
                        $ofenfendidosexhortosNewDto->setNombre(utf8_decode($ofendido["nombre"]));
                        $ofenfendidosexhortosNewDto->setActivo('S');
                    } else if ($ofendido["cveTipoPersona"] == 2 || $ofendido["cveTipoPersona"] == 3) {
                        $ofenfendidosexhortosNewDto->setNombreMoral(utf8_decode($ofendido["nombreMoral"]));
                        $ofenfendidosexhortosNewDto->setCveGenero(3);
                        $ofenfendidosexhortosNewDto->setCveEstado($ofendido["cveEstado"]);
                        $ofenfendidosexhortosNewDto->setCveMunicipio($ofendido["cveMunicipio"]);
                        $ofenfendidosexhortosNewDto->setDomicilio(utf8_decode($ofendido["domicilio"]));
                        $ofenfendidosexhortosNewDto->setActivo('S');
                    }

                    $ofendidosexhortos = $OfenfendidosexhortosDao->insertOfenfendidosexhortos($ofenfendidosexhortosNewDto, $proveedor);

                    $bitacoraController = new BitacoramovimientosController();
                    $bitacoraController->agregar(265, 'INSERCION tblofendidosexhortos', 'dto', $ofendidosexhortos, '');
                }
                if ($ofendidosexhortos == "") {
                    $transaccion = 0;
                    //print_r("Error al registrar Ofendidos");
                    error_log("Error al registrar Ofendidos");
                }
            }
        }
        foreach ($listaDelitos as $delito) {
            $conDelito = 0;
            foreach ($DelitosexhortosDto as $delitoExistente) {
                if ($delito['cveDelito'] == $delitoExistente->getcveDelito()) {
                    $conDelito++;
                }
            }
            if (($delito['idDelitoExhorto'] == "" || $delito['idDelitoExhorto'] == 0) && $conDelito == 0) {
                $delitosexhortosNewDto = new DelitosexhortosDTO();

                $delitosexhortosNewDto->setIdExhorto($idExhorto);
                $delitosexhortosNewDto->setCveDelito($delito["cveDelito"]);
                $delitosexhortos = $DelitosexhortosDao->insertDelitosexhortos($delitosexhortosNewDto, $proveedor);

                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(266, 'INSERCION tbldelitosexhortos', 'dto', $delitosexhortos, '');

                if ($delitosexhortos == "") {
                    $transaccion = 0;
                    error_log("Error al registrar Delitos");
                }
            }
        }

        if ($transaccion == 1) {

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(122, 'ACTUALIZACION tblexhortos', 'dto', $ExhortosDto, '');

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se actualizo el exhorto");
        } else if ($transaccion == 0) {


            $proveedor->execute("ROLLBACK");
            $ExhortosDto = "";
            $respuesta = array("totalCount" => "0", "estatus" => "Error", "text" => "No se actualizo el exhorto");

            $ExhortosDto = "";
        }



        return $ExhortosDto;
    }

    public function deleteExhortos($ExhortosDto, $proveedor = null) {
        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $ExhortosDao = new ExhortosDAO();
        $ExhortosDto = $ExhortosDao->deleteExhortos($ExhortosDto, $proveedor);

        return $ExhortosDto;
    }

    public function eliminar_impofedel($ExhortosDto, $proveedor = null, $param, $lista_impofedel) {
        $idExhorto = $ExhortosDto->getIdExhorto();

        if ($param["tipo"] == "imputados") {
            $imputadosexhortosDao = new ImputadosexhortosDAO();
            $imputadosexhortosDto = new ImputadosexhortosDTO();

            $imputadosexhortosDto->setIdImputadoExhorto($lista_impofedel[0]['idImputadoExhorto']);
            $imputadosexhortosDto->setActivo('N');
            $imputadosexhortosDto = $imputadosexhortosDao->updateImputadosexhortos($imputadosexhortosDto, $proveedor);

            if ($imputadosexhortosDto) {

                $response = [
                    'estatus' => 'ok',
                    'mensaje' => 'borrado logico Imputado',
                ];


                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(124, 'BORRADO LOGICO tblimputadosexhortos', 'dto', $imputadosexhortosDto, '');
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'No se borrado imputado'
                ];
            }
        }

        if ($param["tipo"] == "ofendidos") {

            $ofenfendidosexhortosDao = new OfenfendidosexhortosDAO();
            $ofenfendidosexhortosDto = new OfenfendidosexhortosDTO();

            $ofenfendidosexhortosDto->setIdOfenfendidoExhorto($lista_impofedel[0]['idOfenfendidoExhorto']);
            $ofenfendidosexhortosDto->setActivo('N');
            $ofenfendidosexhortosDto = $ofenfendidosexhortosDao->updateOfenfendidosexhortos($ofenfendidosexhortosDto, $proveedor);

            if ($ofenfendidosexhortosDto) {

                $response = [
                    'estatus' => 'ok',
                    'mensaje' => 'borrado logico ofendido',
                ];
                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(125, 'BORRADO LOGICO tblofendidosexhortos', 'dto', $ofenfendidosexhortosDto, '');
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'No se borrado ofendido'
                ];
            }
        }
        if ($param["tipo"] == "delitos") {

            $delitosexhortosDao = new DelitosexhortosDAO();
            $delitosexhortosDto = new DelitosexhortosDTO();


            $delitosexhortosDto->setIdDelitoExhorto($lista_impofedel[0]['idDelitoExhorto']);
            $delitosexhortosDto->setActivo('N');
            $delitosexhortosDto = $delitosexhortosDao->updateDelitosexhortos($delitosexhortosDto, $proveedor);

            if ($delitosexhortosDto) {

                $response = [
                    'estatus' => 'ok',
                    'mensaje' => 'borrado logico delito',
                ];

                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(126, 'BORRADO LOGICO tbldelitosexhortos', 'dto', $delitosexhortosDto, '');
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'No se borrado de delito'
                ];
            }
        }
        return $response;
    }

    public function actualizar_impofedel($ExhortosDto, $proveedor = null, $param, $lista_impofedel) {
        $idExhorto = $ExhortosDto->getIdExhorto();

        if ($param["tipo"] == "imputados") {

            $imputadosexhortosDao = new ImputadosexhortosDAO();
            $imputadosexhortosDto = new ImputadosexhortosDTO();

            $imputadosexhortosDto->setIdImputadoExhorto($lista_impofedel[0]['idImputadoExhorto']);
            $imputadosexhortosDto->setCveTipoPersona($lista_impofedel[0]["cveTipoPersona"]);

            if ($lista_impofedel[0]["cveTipoPersona"] == 1) {

                $imputadosexhortosDto->setCveConsignacion($lista_impofedel[0]["consignacion"]);
                $imputadosexhortosDto->setCveGenero($lista_impofedel[0]["cveGenero"]);
                $imputadosexhortosDto->setCveEstado($lista_impofedel[0]["cveEstado"]);
                $imputadosexhortosDto->setCveMunicipio($lista_impofedel[0]["cveMunicipio"]);
                $imputadosexhortosDto->setDomicilio(utf8_decode($lista_impofedel[0]["domicilio"]));
                $imputadosexhortosDto->setAlias(utf8_decode($lista_impofedel[0]["alias"]));
                $imputadosexhortosDto->setTelefono($lista_impofedel[0]["telefono"]);
                $imputadosexhortosDto->setCveCereso($lista_impofedel[0]["cveCereso"]);
                $imputadosexhortosDto->setPaterno(utf8_decode($lista_impofedel[0]["paterno"]));
                $imputadosexhortosDto->setMaterno(utf8_decode($lista_impofedel[0]["materno"]));
                $imputadosexhortosDto->setNombre(utf8_decode($lista_impofedel[0]["nombre"]));

                $imputadosexhortosDto->setNombreMoral('-');
            } else {
                $imputadosexhortosDto->setCveConsignacion($lista_impofedel[0]["consignacion"]);
                $imputadosexhortosDto->setNombreMoral(utf8_decode($lista_impofedel[0]["nombreMoral"]));
                $imputadosexhortosDto->setCveEstado($lista_impofedel[0]["cveEstado"]);
                $imputadosexhortosDto->setCveMunicipio($lista_impofedel[0]["cveMunicipio"]);
                $imputadosexhortosDto->setDomicilio(utf8_decode($lista_impofedel[0]["domicilio"]));

                $imputadosexhortosDto->setPaterno('-');
                $imputadosexhortosDto->setMaterno('-');
                $imputadosexhortosDto->setNombre('-');
                $imputadosexhortosDto->setCveGenero(3);
                $imputadosexhortosDto->setAlias('-');
                $imputadosexhortosDto->setTelefono('0');
                $imputadosexhortosDto->setCveCereso(1);
            }
            $imputadosexhortosDto = $imputadosexhortosDao->updateImputadosexhortos($imputadosexhortosDto, $proveedor);

            if ($imputadosexhortosDto) {

                $response = [
                    'estatus' => 'ok',
                    'mensaje' => 'Se actualizo Imputado',
                ];


                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(267, 'ACTUALIZACION tblimputadosexhortos', 'dto', $imputadosexhortosDto, '');
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'No se realizo la actualizacion de imputado'
                ];
            }
        }

        if ($param["tipo"] == "ofendidos") {

            $ofenfendidosexhortosDao = new OfenfendidosexhortosDAO();
            $ofenfendidosexhortosDto = new OfenfendidosexhortosDTO();

            $ofenfendidosexhortosDto->setIdOfenfendidoExhorto($lista_impofedel[0]['idOfenfendidoExhorto']);
            $ofenfendidosexhortosDto->setCveTipoPersona($lista_impofedel[0]["cveTipoPersona"]);

            if ($lista_impofedel[0]["cveTipoPersona"] == 1) {
                $ofenfendidosexhortosDto->setCveGenero($lista_impofedel[0]["cveGenero"]);
                $ofenfendidosexhortosDto->setCveEstado($lista_impofedel[0]["cveEstado"]);
                $ofenfendidosexhortosDto->setCveMunicipio($lista_impofedel[0]["cveMunicipio"]);
                $ofenfendidosexhortosDto->setDomicilio(utf8_decode($lista_impofedel[0]["domicilio"]));
                $ofenfendidosexhortosDto->setTelefono($lista_impofedel[0]["telefono"]);
                $ofenfendidosexhortosDto->setPaterno(utf8_decode($lista_impofedel[0]["paterno"]));
                $ofenfendidosexhortosDto->setMaterno(utf8_decode($lista_impofedel[0]["materno"]));
                $ofenfendidosexhortosDto->setNombre(utf8_decode($lista_impofedel[0]["nombre"]));

                $ofenfendidosexhortosDto->setNombreMoral('-');
            } else {
                $ofenfendidosexhortosDto->setNombreMoral(utf8_decode($lista_impofedel[0]["nombreMoral"]));
                $ofenfendidosexhortosDto->setCveEstado($lista_impofedel[0]["cveEstado"]);
                $ofenfendidosexhortosDto->setCveMunicipio($lista_impofedel[0]["cveMunicipio"]);
                $ofenfendidosexhortosDto->setDomicilio(utf8_decode($lista_impofedel[0]["domicilio"]));

                $ofenfendidosexhortosDto->setCveGenero(3);
                $ofenfendidosexhortosDto->setTelefono('0');
                $ofenfendidosexhortosDto->setPaterno('-');
                $ofenfendidosexhortosDto->setMaterno('-');
                $ofenfendidosexhortosDto->setNombre('-');
            }
            $ofenfendidosexhortosDto = $ofenfendidosexhortosDao->updateOfenfendidosexhortos($ofenfendidosexhortosDto, $proveedor);

            if ($ofenfendidosexhortosDto) {

                $response = [
                    'estatus' => 'ok',
                    'mensaje' => 'Se actualizo ofendido',
                ];
                $bitacoraController = new BitacoramovimientosController();
                $bitacoraController->agregar(268, 'ACTUALIZACION tblofendidosexhortos', 'dto', $ofenfendidosexhortosDto, '');
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'No se actualizo ofendido'
                ];
            }
        }
        // if ($param["tipo"] == "delitos") {
        //     $delitosexhortosDao = new DelitosexhortosDAO();
        //     $delitosexhortosDto = new DelitosexhortosDTO();
        //     $delitosexhortosDto->setIdExhorto($idExhorto);
        //     $delitosexhortosDto->setCveDelito($lista_impofedel[0]["cveDelito"]);
        //     $delitosexhortosDto = $delitosexhortosDao->selectDelitosexhortos($delitosexhortosDto, $proveedor);
        //     $delitosexhortosDto2 = $delitosexhortosDto;
        //     $delitosexhortosDto[0]->setActivo('N');
        //     $delitosexhortosDto = $delitosexhortosDao->updateDelitosexhortos($delitosexhortosDto[0], $proveedor);
        //     if ($delitosexhortosDto) {
        //         $response = [
        //             'estatus' => 'ok',
        //             'mensaje' => 'borrado logico delito',
        //         ];
        //         // $bitacoraController = new BitacoramovimientosController();
        //         // $bitacoraController->agregar(126, 'BORRADO LOGICO tbldelitosexhortos', 'dto', $delitosexhortosDto2, '');
        //     } else {
        //         $response = [
        //             'estatus' => 'error',
        //             'mensaje' => 'No se realizo borrado de delito'
        //         ];
        //     }
        // }
        return $response;
    }

    public function eliminar_exhorto($ExhortosDto, $proveedor = null) {
        $ExhortosDao = new ExhortosDAO();
        $ExhortosDto = $ExhortosDao->updateExhortos($ExhortosDto, $proveedor);
        if ($ExhortosDto) {

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Eliminacion Logica de Exhorto',
            ];

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(123, 'BORRADO LOGICO tblexhortos', 'dto', $ExhortosDto, '');
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'No se elimino Exhorto'
            ];
        }

        return $response;
    }

    public function insertar_exhortoGenerado($ExhortosDto, $proveedor = null, $requisitoria, $datos) {

        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();
        $transaccion = 1;
        $relacion = "";
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $response = array();

        $cveUsuario = $_SESSION['cveUsuarioSistema'];

        $contadoresDto->setCveJuzgado($_SESSION['cveAdscripcion']); /// variable de sesion
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoActuacion(8);
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
        if ($contadoresDto != "") {

            $ActuacionesDto = new ActuacionesDTO();
            $ActuacionesDao = new ActuacionesDAO();
            $estatus = $ExhortosDto->getcveEstatusExhorto();

            ////se busca idReferencia en carpetasjudiciales
            $relacion = $this->buscar_relacion($ExhortosDto, $proveedor);
            $idReferencia = $relacion['idReferencia'];


            if ($idReferencia != "") {

                $ActuacionesDto->setCveUsuario($cveUsuario);
                $ActuacionesDto->setNumActuacion($contadoresDto[0]->getNumero());
                $ActuacionesDto->setAniActuacion($contadoresDto[0]->getAnio());
                $ActuacionesDto->setIdReferencia($idReferencia);
                $ActuacionesDto->setCveJuzgado($_SESSION['cveAdscripcion']);
                $ActuacionesDto->setCveTipoActuacion(8);
                $ActuacionesDto->setActivo('S');
                $ActuacionesDto->setCveTipoCarpeta($ExhortosDto->getCveTipoCarpeta());
                $ActuacionesDto->setNumero($ExhortosDto->getNumero());
                $ActuacionesDto->setAnio($ExhortosDto->getAnio());
                $ActuacionesDto->setSintesis($ExhortosDto->getSintesis());
                $ActuacionesDto->setcveEstado($ExhortosDto->getcveEstadoProcedencia());
                $ActuacionesDto->setcveJuzgadoDestino($ExhortosDto->getcveJuzgadoProcedencia());
                $ActuacionesDto->setJuzgadoDestino($ExhortosDto->getJuzgadoProcedencia());
                $ActuacionesDto->setobservaciones($ExhortosDto->getObservaciones());

                $ActuacionesDto = $ActuacionesDao->insertActuaciones($ActuacionesDto, $proveedor);

                if ($ActuacionesDto != '') {

                    $idActuacion = $ActuacionesDto[0]->getIdActuacion();

                    $ActuacionesestatusDto = new ActuacionesestatusDTO();
                    $ActuacionesestatusDao = new ActuacionesestatusDAO();
                    $ActuacionesestatusDto->setIdActuacion($idActuacion);
                    $ActuacionesestatusDto->setCveEstatus($estatus);
                    $ActuacionesestatusDto->setActivo('S');
                    $ActuacionesestatusDto = $ActuacionesestatusDao->insertActuacionesestatus($ActuacionesestatusDto, $proveedor);
                    if ($ActuacionesestatusDto == "") {
                        $transaccion = 0;
                    }

                    $Fechaoficio = str_replace("/", "-", $datos['fechaInicioEG']);
                    $Fechatermino = str_replace("/", "-", $datos['fechaTerminoEG']);
                    $partesFechaoficio = explode("-", $Fechaoficio);
                    $Fechaoficio = $partesFechaoficio[2] . "-" . $partesFechaoficio[1] . "-" . $partesFechaoficio[0];
                    $partesFechatermino = explode("-", $Fechatermino);
                    $Fechatermino = $partesFechatermino[2] . "-" . $partesFechatermino[1] . "-" . $partesFechatermino[0];

                    $ExhortosgeneradosDto = new ExhortosgeneradosDTO();
                    $ExhortosgeneradosDao = new ExhortosgeneradosDAO();
                    $ExhortosgeneradosDto->setIdActuacion($idActuacion);
                    $ExhortosgeneradosDto->setRequisitoria($requisitoria);
                    $ExhortosgeneradosDto->setNumOficio($ExhortosDto->getNumOficio());
                    $ExhortosgeneradosDto->setAniOficio($datos['anioOficio']);
                    $ExhortosgeneradosDto->setFecOficio($Fechaoficio);
                    $ExhortosgeneradosDto->setFecTermino($Fechatermino);
                    $ExhortosgeneradosDto->setTextoExhorto($datos['textoExhorto']);
                    $ExhortosgeneradosDto->setTelefono($datos['telefonoEG']);
                    $ExhortosgeneradosDto->setCorreo($datos['correoEG']);
                    $ExhortosgeneradosDto->setFacultadoAcordar($datos['facultadoAcordar']);


                    $ExhortosgeneradosDto = $ExhortosgeneradosDao->insertExhortosgenerados($ExhortosgeneradosDto, $proveedor);
                    if ($ExhortosgeneradosDto == "") {
                        $transaccion = 0;
                    }
                    $actuaciones_array = $ActuacionesDto[0]->toString();

                    $response = [
                        'estatus' => 'ok',
                        'mensaje' => 'REGISTRO REALIZADO DE FORMA CORRECTA',
                        'data' => $actuaciones_array,
                        'idExhortoGenerado' => $ExhortosgeneradosDto[0]->getIdExhortoGenerado()
                    ];
                } else {

                    $response = [
                        'estatus' => 'error',
                        'mensaje' => 'OCURRIO UN ERROR AL REALIZAR EL REGISTRO'
                    ];
                    $transaccion = 0;
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'No Existe Relacion'
                ];
                $transaccion = 0;
            }
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'Error de Contadores'
            ];
            $transaccion = 0;
        }
        if ($transaccion == 1) {

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(127, 'INSERCION tblactuaciones', 'dto', $ActuacionesDto, '');

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se registro el exhorto Generado");
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $respuesta = array("Estatus" => "Error", "Mensaje" => "No se registro el exhorto Generado");
        }

        $respuesta = json_encode($respuesta);
        $proveedor->close();
        error_log(print_r($response, true));

        return $response;
    }

    public function buscar_exhortoGenerado($ExhortosgeneradosDto, $proveedor = null, $param, $idActuacion) {


        $JuzgadosDto = new JuzgadosDTO();
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, $proveedor); ///se llama objeto juzgados

        $nombreCaptura = "";
        $desJuzgadoProcedencia = "";
        if ($param['imprimir'] == 1) {

            $cveUsuario = $_SESSION['cveUsuarioSistema'];
            $usuarioCliente = new UsuarioCliente();
            $usuarios = $usuarioCliente->selectUsuarios_In($cveUsuario);
            $usuarios = json_decode($usuarios, true);


            foreach ($usuarios["data"] as $usuario) {
                $nombreCaptura = $usuario["nombre"] . " " . $usuario["paterno"] . " " . $usuario["materno"];
            }

            foreach ($JuzgadosDto as $juzgado) {

                if ($_SESSION['cveAdscripcion'] == $juzgado->getcveJuzgado()) {
                    $desJuzgadoProcedencia = $juzgado->getDesJuzgado();
                }
            }
        }

        $ActuacionesDto = new ActuacionesDTO();
        $ActuacionesDao = new ActuacionesDAO();

        $ActuacionesDto->setNumActuacion($ExhortosgeneradosDto->getNumExhorto());
        $ActuacionesDto->setAniActuacion($ExhortosgeneradosDto->getAniExhorto());
        $ActuacionesDto->setCveTipoActuacion(8);
        $ActuacionesDto->setCveJuzgado($ExhortosgeneradosDto->getcveJuzgado());     /////// variable de sesion
        $ActuacionesDto->setActivo($ExhortosgeneradosDto->getActivo());
        $ActuacionesDto->setCveTipoCarpeta($ExhortosgeneradosDto->getCveTipoCarpeta());
        $ActuacionesDto->setNumero($ExhortosgeneradosDto->getNumero());
        $ActuacionesDto->setAnio($ExhortosgeneradosDto->getAnio());
        //$ActuacionesDto->setSintesis($ExhortosgeneradosDto->getSintesis());
        $ActuacionesDto->setcveEstado($ExhortosgeneradosDto->getcveEstadoProcedencia());
        $ActuacionesDto->setcveJuzgadoDestino($ExhortosgeneradosDto->getcveJuzgadoProcedencia());


        $orden = "";
        $limit = "";

        if ($idActuacion == "") {

            if ($ActuacionesDto->getnumActuacion() == "" && $ActuacionesDto->getaniActuacion() == "") {

                $orden.=" AND fechaRegistro >= '" . $param['fechaInicial'] . "' AND fechaRegistro <= '" . $param['fechaFinal'] . "'";
            }

            if ($ExhortosgeneradosDto->getCveEstatusExhorto() == "") {

                if ($param['totalRegistros'] == 0) {
                    $inicio = ($param["pagina"] - 1) * $param['nRegistros'];
                    $limit = " LIMIT " . $inicio . "," . $param['nRegistros'];
                }

                $orden.= " ORDER BY fechaRegistro DESC " . $limit . "";
            }
        } else {
            $ActuacionesDto->setIdActuacion($idActuacion);
        }


        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, $orden);
        error_log("Consulta de exhorto para total =>" . print_r($ActuacionesDto, true));
        $totalRows = count($ActuacionesDto);

        if ($ActuacionesDto != "") {

            $response = [];
            $data = [];
            $count = 0;

            $EstadosDto = new EstadosDTO();
            $EstadosDao = new EstadosDAO();
            $EstadosDto = $EstadosDao->selectEstados($EstadosDto, $proveedor); //se llama objeto estados

            $EstatusDto = new EstatusDTO();
            $EstatusDao = new EstatusDAO();
            $EstatusDto = $EstatusDao->selectEstatus($EstatusDto, $proveedor); //se llama objeto estatus


            $TiposcarpetasDto = new TiposcarpetasDTO();
            $TiposcarpetasDao = new TiposcarpetasDAO();
            $TiposcarpetasDto = $TiposcarpetasDao->selectTiposcarpetas($TiposcarpetasDto, $proveedor); //se llama objeto tipocarpeta
//            $ActuacionesestatusDto2 = new ActuacionesestatusDTO();
//            $ActuacionesestatusDao2 = new ActuacionesestatusDAO();
//            $ActuacionesestatusDto2->setIdActuacion();
//
//            $ActuacionesestatusDto2 = $ActuacionesestatusDao2->selectActuacionesestatus($ActuacionesestatusDto2);

            if ($ExhortosgeneradosDto->getCveEstatusExhorto() != "") {

                $cadenaIdActuacion = "";
                foreach ($ActuacionesDto as $key => $actuacion) {

                    $cadenaIdActuacion.=$actuacion->getIdActuacion() . ",";
                }
                $cadenaIdActuacion = trim($cadenaIdActuacion, ',');

                $ActuacionesestatusDto = new ActuacionesestatusDTO();
                $ActuacionesestatusDao = new ActuacionesestatusDAO();
                $ActuacionesestatusDto->setCveEstatus($ExhortosgeneradosDto->getCveEstatusExhorto());
                $ActuacionesestatusDto->setIdActuacion($cadenaIdActuacion);
                $ActuacionesestatusDto->setActivo('S');
                $ActuacionesestatusDto = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto);

                $cadenaIdActuacion2 = "";
                foreach ($ActuacionesestatusDto as $key => $actuacion) {

                    $cadenaIdActuacion2.=$actuacion->getIdActuacion() . ",";
                }
                $cadenaIdActuacion2 = trim($cadenaIdActuacion2, ',');

                if ($param['totalRegistros'] == 0) {
                    $inicio = ($param["pagina"] - 1) * $param['nRegistros'];
                    $limit = " LIMIT " . $inicio . "," . $param['nRegistros'];
                }

                $orden.= " ORDER BY fechaRegistro DESC " . $limit . "";

                $ActuacionesDto2 = new ActuacionesDTO();
                $ActuacionesDao2 = new ActuacionesDAO();
                $ActuacionesDto2->setIdActuacion($cadenaIdActuacion2);
                $ActuacionesDto2 = $ActuacionesDao2->selectActuaciones($ActuacionesDto2, null, $orden);
                $totalRows = count($ActuacionesDto2);

                $ActuacionesDto = $ActuacionesDto2; ////se sobreescribe ActuacionesDto       
            }
            foreach ($ActuacionesDto as $key => $actuacion) {

                $desJuzgado = "";
                foreach ($JuzgadosDto as $juzgado) {

                    if ($actuacion->getcveJuzgadoDestino() == $juzgado->getcveJuzgado()) {
                        $desJuzgado = $juzgado->getDesJuzgado();
                    }
                }
                $desEstado = "";
                foreach ($EstadosDto as $estado) {

                    if ($actuacion->getCveEstado() == $estado->getcveEstado()) {
                        $desEstado = $estado->getDesEstado();
                    }
                }

                $desTipoCarpeta = "";
                foreach ($TiposcarpetasDto as $tipos) {

                    if ($actuacion->getCveTipoCarpeta() == $tipos->getCveTipoCarpeta()) {
                        $desTipoCarpeta = $tipos->getdesTipoCarpeta();
                    }
                }

                $ExhortosgeneradosDto2 = new ExhortosgeneradosDTO();
                $ExhortosgeneradosDao2 = new ExhortosgeneradosDAO();
                $ExhortosgeneradosDto2->setIdActuacion($actuacion->getIdActuacion());
                $ExhortosgeneradosDto2 = $ExhortosgeneradosDao2->selectExhortosgenerados($ExhortosgeneradosDto2, $proveedor); //se llama objeto actuaciones estatus

                $ActuacionesestatusDto3 = new ActuacionesestatusDTO();
                $ActuacionesestatusDao3 = new ActuacionesestatusDAO();
                $ActuacionesestatusDto3->setIdActuacion($actuacion->getIdActuacion());
                $ActuacionesestatusDto3->setActivo('S');
                $ActuacionesestatusDto3 = $ActuacionesestatusDao3->selectActuacionesestatus($ActuacionesestatusDto3, $proveedor); //se llama objeto exhortosgenerados

                $desEstatus = "";
                foreach ($EstatusDto as $estatus) {

                    if ($ActuacionesestatusDto3[0]->getCveEstatus() == $estatus->getCveEstatus()) {
                        $desEstatus = $estatus->getDescEstatus();
                        break;
                    }
                }
                $ExhortosDto2 = new ExhortosDTO();
                $ExhortosDao2 = new ExhortosDAO();
                $ExhortosDto2->setIdExhortoGenerado($ExhortosgeneradosDto2[0]->getIdExhortoGenerado());
                $ExhortosDto2 = $ExhortosDao2->selectExhortos($ExhortosDto2);

                $generado = "";
                $idExhorto = "";
                if ($ExhortosDto2) {
                    $generado = 1;
                    $idExhorto = $ExhortosDto2[0]->getIdExhorto();
                } else {
                    $generado = 0;
                }


                $idReferencia = $actuacion->getIdReferencia();
                $listaImputadosCarpetas = array();
                if ($idReferencia != "" && $actuacion->getCveTipoCarpeta() != 7 && $actuacion->getCveTipoCarpeta() != 8) {

                    $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
                    $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
                    $ImputadoscarpetasDto->setIdCarpetaJudicial($idReferencia);
                    $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);

                    if ($ImputadoscarpetasDto != '') {

                        foreach ($ImputadoscarpetasDto as $imputado) {

                            $resultadoI = array(
                                "idImputadoCarpeta" => $imputado->getIdImputadoCarpeta(),
                                "cveTipoPersona" => $imputado->getCveTipoPersona(),
                                "nombre" => utf8_encode($imputado->getNombre()),
                                "paterno" => utf8_encode($imputado->getPaterno()),
                                "materno" => utf8_encode($imputado->getMaterno()),
                                "nombreMoral" => utf8_encode($imputado->getnombreMoral())
                            );

                            array_push($listaImputadosCarpetas, $resultadoI);
                        }
                    }
                }



                $data[$count]['idActuacion'] = $actuacion->getIdActuacion();
                $data[$count]['numActuacion'] = $actuacion->getnumActuacion();
                $data[$count]['aniActuacion'] = $actuacion->getaniActuacion();
                $data[$count]['idReferencia'] = $actuacion->getIdReferencia();
                $data[$count]['cveJuzgado'] = $actuacion->getcveJuzgado();
                $data[$count]['desJuzgadoProcedencia'] = utf8_encode($desJuzgadoProcedencia);
                $data[$count]['cveEstado'] = $actuacion->getCveEstado();
                $data[$count]['desEstado'] = $desEstado;
                $data[$count]['cveJuzgadoDestino'] = $actuacion->getcveJuzgadoDestino();
                $data[$count]['desJuzgadoDestino'] = utf8_encode($desJuzgado);
                $data[$count]['JuzgadoDestino'] = utf8_encode($actuacion->getJuzgadoDestino());
                $data[$count]['numero'] = $actuacion->getNumero();
                $data[$count]['anio'] = $actuacion->getAnio();
                $data[$count]['cveTipoCarpeta'] = $actuacion->getCveTipoCarpeta();
                $data[$count]['desTipoCarpeta'] = $desTipoCarpeta;
                $data[$count]['sintesis'] = $actuacion->getSintesis();
                $data[$count]['observaciones'] = $actuacion->getObservaciones();
                $data[$count]['activo'] = $actuacion->getActivo();
                $data[$count]['fechaRegistro'] = $actuacion->getFechaRegistro();
                $data[$count]['fechaActualizacion'] = $actuacion->getFechaActualizacion();
                $data[$count]['idExhortoGenerado'] = $ExhortosgeneradosDto2[0]->getIdExhortoGenerado();
                $data[$count]['Requisitoria'] = $ExhortosgeneradosDto2[0]->getRequisitoria();
                $data[$count]['numOficio'] = $ExhortosgeneradosDto2[0]->getNumOficio();
                $data[$count]['aniOficio'] = $ExhortosgeneradosDto2[0]->getAniOficio();
                $data[$count]['fecOficio'] = $ExhortosgeneradosDto2[0]->getFecOficio();
                $data[$count]['fecTermino'] = $ExhortosgeneradosDto2[0]->getFecTermino();
                $data[$count]['textoExhorto'] = $ExhortosgeneradosDto2[0]->getTextoExhorto();
                $data[$count]['telefono'] = $ExhortosgeneradosDto2[0]->getTelefono();
                $data[$count]['correo'] = $ExhortosgeneradosDto2[0]->getCorreo();
                $data[$count]['FacultadoAcordar'] = $ExhortosgeneradosDto2[0]->getFacultadoAcordar();
                $data[$count]['cveEstatus'] = $ActuacionesestatusDto3[0]->getCveEstatus();
                $data[$count]['desEstatus'] = $desEstatus;
                $data[$count]['generado'] = $generado;
                $data[$count]['idExhorto'] = $idExhorto;
                $data[$count]['nombreCaptura'] = $nombreCaptura;
                $data[$count]['listaImputados'] = $listaImputadosCarpetas;

                $count ++;

                $response = [
                    'estatus' => 'ok',
                    'totalCount' => $totalRows,
                    'mensaje' => 'resultado de la consulta',
                    'data' => $data
                ];
            }
        } else {

            $response = [

                'estatus' => 'error',
                'mensaje' => 'No se encontraron resultados'
            ];
        }

        return $response;
    }

    public function buscar_TotalGenerado($ExhortosgeneradosDto, $proveedor = null, $param) {

        $ActuacionesDto = new ActuacionesDTO();
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto->setNumActuacion($ExhortosgeneradosDto->getNumExhorto());
        $ActuacionesDto->setAniActuacion($ExhortosgeneradosDto->getAniExhorto());
        $ActuacionesDto->setCveTipoActuacion(8);
        $ActuacionesDto->setCveJuzgado($ExhortosgeneradosDto->getcveJuzgado());     /////// variable de sesion
        $ActuacionesDto->setActivo($ExhortosgeneradosDto->getActivo());
        $ActuacionesDto->setCveTipoCarpeta($ExhortosgeneradosDto->getCveTipoCarpeta());
        $ActuacionesDto->setNumero($ExhortosgeneradosDto->getNumero());
        $ActuacionesDto->setAnio($ExhortosgeneradosDto->getAnio());
        $ActuacionesDto->setSintesis($ExhortosgeneradosDto->getSintesis());
        $ActuacionesDto->setcveEstado($ExhortosgeneradosDto->getcveEstadoProcedencia());
        $ActuacionesDto->setcveJuzgadoDestino($ExhortosgeneradosDto->getcveJuzgadoProcedencia());

        $orden = "";
        $limit = "";

        if ($ActuacionesDto->getnumActuacion() == "" && $ActuacionesDto->getaniActuacion() == "") {

            $orden.=" AND fechaRegistro >= '" . $param['fechaInicial'] . "' AND fechaRegistro <= '" . $param['fechaFinal'] . "'";
        }

        $orden.= " ORDER BY fechaRegistro DESC " . $limit . "";

        $ActuacionesDto = $ActuacionesDao->selectActuaciones($ActuacionesDto, null, $orden);

        error_log("Total de exhortos generados " . print_r($ActuacionesDto, true));
        $totalRows = count($ActuacionesDto);
        $response = [];
        $data = [];
        if ($ActuacionesDto != "") {


            if ($ExhortosgeneradosDto->getCveEstatusExhorto() != "") {

                $cadena = "";
                foreach ($ActuacionesDto as $key => $actuacion) {

                    $cadena.=$actuacion->getIdActuacion() . ",";
                }
                $cadena = trim($cadena, ',');

                $ActuacionesestatusDto = new ActuacionesestatusDTO();
                $ActuacionesestatusDao = new ActuacionesestatusDAO();
                $ActuacionesestatusDto->setActivo('S');
                $ActuacionesestatusDto->setCveEstatus($ExhortosgeneradosDto->getCveEstatusExhorto());

                $ActuacionesestatusDto->setIdActuacion($cadena);
                $ActuacionesestatusDto = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto);

                //  error_log("Total Count".print_r($ActuacionesestatusDto,true));

                if ($ActuacionesestatusDto) {

                    $response = [
                        'estatus' => 'ok',
                        'totalCount' => count($ActuacionesestatusDto),
                        'mensaje' => 'resultado de la consulta',
                        'data' => $data
                    ];
                } else {

                    $response = [
                        'estatus' => 'error',
                        'mensaje' => 'No se encontraron resultados'
                    ];
                }
            } else {   /// fin if si existe cveEstatus
                $response = [
                    'estatus' => 'ok',
                    'totalCount' => $totalRows,
                    'mensaje' => 'resultado de la consulta',
                    'data' => $data
                ];
            }
        } else { ///fin if $ActuacionesDto
            $response = [

                'estatus' => 'error',
                'mensaje' => 'No se encontraron resultados'
            ];
        }
        return $response;
    }

    public function eliminar_exhortoGenerado($proveedor = null, $idActuacion) {

        $response = [];

        $ActuacionesDto = new ActuacionesDTO();
        $ActuacionesDao = new ActuacionesDAO();
        $ActuacionesDto->setIdActuacion($idActuacion);
        $ActuacionesDto->setActivo('N');
        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto, $proveedor);

        $ActuacionesestatusDto = new ActuacionesestatusDTO();
        $ActuacionesestatusDao = new ActuacionesestatusDAO();
        $ActuacionesestatusDto->setIdActuacion($idActuacion);
        $ActuacionesestatusDto->setActivo('S');
        $ActuacionesestatusDto = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto);


        $ActuacionesestatusDto[0]->setIdActuacionesEstatus($ActuacionesestatusDto[0]->getidActuacionesEstatus());
        $ActuacionesestatusDto[0]->setActivo('N');
        $ActuacionesestatusDto = $ActuacionesestatusDao->updateActuacionesestatus($ActuacionesestatusDto[0]);

        $ActuacionesestatusDto = new ActuacionesestatusDTO();
        $ActuacionesestatusDao = new ActuacionesestatusDAO();
        $ActuacionesestatusDto->setIdActuacion($idActuacion);
        $ActuacionesestatusDto->setCveEstatus(9);
        $ActuacionesestatusDto->setActivo('S');
        $ActuacionesestatusDto = $ActuacionesestatusDao->insertActuacionesestatus($ActuacionesestatusDto);


        if ($ActuacionesDto) {

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Eliminacion Logica de Exhorto Generado',
            ];

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(129, 'BORRADO LOGICO tblactuaciones', 'dto', $ActuacionesDto, '');
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'No se Elimino Exhorto Generado'
            ];
        }
        return $response;
    }

    public function actualizar_enviarexhortoGenerado($ExhortosDto, $proveedor = null, $requisitoria, $idActuacion) {
        //        valido exhortos             
        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $transaccion = 1;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
//        contador exhorto
        $contadorCrl = new ContadoresController();
        $contadoresDto = new ContadoresDTO();

        $contadoresDto->setCveJuzgado($ExhortosDto->getCveJuzgado()); /// variable desesion
        $contadoresDto->setAnio(date("Y"));
        $contadoresDto->setCveTipoCarpeta(7);
        $contadoresDto = $contadorCrl->getContador($contadoresDto, $proveedor);
        if ($contadoresDto != "") {
            $ExhortosDto->setNumExhorto($contadoresDto[0]->getNumero());
            $ExhortosDto->setAniExhorto($contadoresDto[0]->getAnio());
//        Obtengo el idexhorto generado
            $ExhortosgeneradosDto = new ExhortosgeneradosDTO();
            $ExhortosgeneradosDao = new ExhortosgeneradosDAO();
            $ExhortosgeneradosDto->setIdActuacion($idActuacion);
            $ExhortosgeneradosDtoSelec = $ExhortosgeneradosDao->selectExhortosgenerados($ExhortosgeneradosDto);
            $idExhortoGenerado = $ExhortosgeneradosDtoSelec[0]->getIdExhortoGenerado();
//        comparo si ya existe exhorto relacionado con el exhorto generado
            $ExhortosDTO = new ExhortosDTO();
            $ExhortosDAO = new ExhortosDAO();
            $ExhortosDTO->setIdExhortoGenerado($idExhortoGenerado);
            $exhortosConsulta = $ExhortosDAO->selectExhortos($ExhortosDTO);
            if ($exhortosConsulta == "") {

//        obtengo el idreferencia para traer la relacion de imputados y ofendidos
                $actuacionDTO = new ActuacionesDTO();
                $actuacionDAO = new ActuacionesDAO();
                $actuacionDTO->setIdActuacion($idActuacion);
                $actuacionRes = $actuacionDAO->selectActuaciones($actuacionDTO);
                $idReferencia = $actuacionRes[0]->getidReferencia();
//        obtengo nuc y carpeta inv
                $carpJudDTO = new CarpetasjudicialesDTO();
                $carpJudDAO = new CarpetasjudicialesDAO();
                $carpJudDTO->setIdCarpetaJudicial($idReferencia);
                $carpJudDTO->setCveJuzgado($ExhortosDto->getcveJuzgadoProcedencia());
                $carpJudRes = $carpJudDAO->selectCarpetasjudiciales($carpJudDTO, "", $proveedor);
                $carpInv = "";
                $Nuc = "";
                if ($carpJudRes != "") {
                    $carpInv = $carpJudRes[0]->getCarpetaInv();
                    $Nuc = $carpJudRes[0]->getNuc();
                }
//      inserto en exhortos          
                if ($detenidoValor == 1) {
                    $detenidoVal = "1";
                } else {
                    $detenidoVal = "2";
                }
                $status = $ExhortosDto->getCveEstatusExhorto();
                $ExhortosDTO->setCveTipoCarpeta($ExhortosDto->getCveTipoCarpeta());
                $ExhortosDTO->setNumero($ExhortosDto->getNumero());
                $ExhortosDTO->setAnio($ExhortosDto->getAnio());
                $ExhortosDTO->setSintesis(($ExhortosDto->getSintesis()));
                $ExhortosDTO->setCveEstadoProcedencia($ExhortosDto->getcveEstadoProcedencia());
                $ExhortosDTO->setCveJuzgadoProcedencia($ExhortosDto->getcveJuzgadoProcedencia());
                $ExhortosDTO->setCveJuzgado($ExhortosDto->getcveJuzgado());
                $ExhortosDTO->setJuzgadoProcedencia($ExhortosDto->getJuzgadoProcedencia());
                $ExhortosDTO->setobservaciones(($ExhortosDto->getObservaciones()));
                $ExhortosDTO->setfechaActualizacion(date("Y-m-d H:i:s"));
//        $ExhortosDTO->setCveEstatusExhorto($status);
                $ExhortosDTO->setCveConsignacion($detenidoVal);
                $ExhortosDTO->setCveEstatusExhorto(2);
                $ExhortosDTO->setActivo("S");
                $ExhortosDTO->setNumExhorto($ExhortosDto->getNumExhorto());
                $ExhortosDTO->setAniExhorto($ExhortosDto->getAniExhorto());
                $ExhortosDTO->setCarpetaInv($carpInv);
                $ExhortosDTO->setNuc($Nuc);
                $exhortos = $ExhortosDAO->insertExhortos($ExhortosDTO, $proveedor);
//        si todo va bien, actualizo informacion de exhortos
                print_r($exhortos);
                echo $transaccion;
                if ($exhortos != '') {
                    $delitosCarpetaDTO = new DelitoscarpetasDTO();
                    $delistoCarpetaDAO = new DelitoscarpetasDAO();
                    $delitosCarpetaDTO->setIdCarpetaJudicial($idReferencia);
                    $delistosCarpetaRes = $delistoCarpetaDAO->selectDelitoscarpetas($delitosCarpetaDTO);
                    echo $transaccion;
                    print_r($delistosCarpetaRes);
                    if ($delistosCarpetaRes != "") {
                        foreach ($delistosCarpetaRes as $Res) {
                            $delitoExhortoDTO = new DelitosexhortosDTO();
                            $delitoExhortoDAO = new DelitosexhortosDAO();
                            $delitoExhortoDTO->setActivo($Res->getActivo());
                            $delitoExhortoDTO->setCveDelito($Res->getCveDelito());
                            $delitoExhortoDTO->setIdExhorto($exhortos[0]->getIdExhorto());
                            $delitoExhortoRes = $delitoExhortoDAO->insertDelitosexhortos($delitoExhortoDTO, $proveedor);
                            if ($delitoExhortoRes == "") {
                                $transaccion = 0;
                            }
                        }
                    }

                    $imputadosERes = 1;
                    $ExhortosDTO2 = new ExhortosDTO();
                    $ExhortosDTO2->setIdExhorto($exhortos[0]->getIdExhorto());
                    $ExhortosDTO2->setIdExhortoGenerado($idExhortoGenerado);
                    $ExhortosDTO2->setNumOficio($ExhortosgeneradosDtoSelec[0]->getNumOficio());
                    $ExhortosDTO2->setAniOficio($ExhortosgeneradosDtoSelec[0]->getAniOficio());
                    $ExhortosDTO2->setFecOficio($ExhortosgeneradosDtoSelec[0]->getFecOficio());
                    $ExhortosDTO2->setFecTermino($ExhortosgeneradosDtoSelec[0]->getFecTermino());
                    $ExhortosDTO2->setTextoExhorto($ExhortosgeneradosDtoSelec[0]->getTextoExhorto());
                    $ExhortosDTO2->setTelefono($ExhortosgeneradosDtoSelec[0]->getTelefono());
                    $ExhortosDTO2->setCorreo($ExhortosgeneradosDtoSelec[0]->getCorreo());
                    $ExhortosDTO2->setFacultadoAcordar($ExhortosgeneradosDtoSelec[0]->getFacultadoAcordar());
                    $Exhortosupdate = $ExhortosDAO->updateExhortos($ExhortosDTO2, $proveedor);

//  obtengo imputados y ofendidos            
                    $imputadosDTO = new ImputadoscarpetasDTO();
                    $imputadosDAO = new ImputadoscarpetasDAO();
                    $imputadosDTO->setIdCarpetaJudicial($idReferencia);
                    $imputados = $imputadosDAO->selectImputadoscarpetas($imputadosDTO, "", $proveedor);
                    $nombresImputados = array();
                    $detenidos = array();
                    $detenidoValor = 0;
                    if ($imputados != "") {
                        $imputadosEDTO = new ImputadosexhortosDTO();
                        $imputadosEDAO = new ImputadosexhortosDAO();
                        $impuDomicilioDAO = new DomiciliosimputadoscarpetasDAO();
                        $impuDomicilioDTO = new DomiciliosimputadoscarpetasDTO();

                        foreach ($imputados as $imputados) {
                            $impuDomicilioDTO->setIdImputadoCarpeta($imputados->getidImputadoCarpeta());
                            $resDom = $impuDomicilioDAO->selectDomiciliosimputadoscarpetas($impuDomicilioDTO, "", $proveedor);
                            $detenido = $imputados->getDetenido();
                            if ($detenido == "N" || $detenido == "") {
                                $detenidoValor = 2;
                            } else if ($detenido == "S") {
                                $detenidoValor = 1;
                            }
                            $imputadosEDTO->setIdExhorto($exhortos[0]->getIdExhorto());
                            $imputadosEDTO->setCveConsignacion($detenidoValor);
                            $imputadosEDTO->setPaterno($imputados->getPaterno());
                            $imputadosEDTO->setMaterno($imputados->getMaterno());
                            $imputadosEDTO->setNombre($imputados->getNombre());
                            $imputadosEDTO->setNombreMoral($imputados->getNombreMoral());
                            $imputadosEDTO->setCveGenero($imputados->getCveGenero());
                            $imputadosEDTO->setCveEstado($imputados->getCveEstadoNacimiento());
                            $imputadosEDTO->setCveMunicipio($imputados->getCveMunicipioNacimiento());
                            if ($resDom != "") {
                                $imputadosEDTO->setDomicilio($resDom[0]->getDireccion());
                            }
                            $imputadosEDTO->setAlias($imputados->getAlias());
                            $imputadosEDTO->setCveCereso($imputados->getCveCereso());
                            $imputadosEDTO->setActivo($imputados->getActivo());
                            $imputadosEDTO->setFechaRegistro($imputados->getFechaRegistro());
                            $imputadosEDTO->setFechaActualizacion($imputados->getFechaActualizacion());
                            $imputadosEDTO->setCveTipoPersona($imputados->getCveTipoPersona());
                            $imputadosEDTO->setCvePais($imputados->getCvePaisNacimiento());
                            $imputadosEDTO->setEstado($imputados->getEstadoNacimiento());
                            $imputadosEDTO->setMunicipio($imputados->getMunicipioNacimiento());
                            $imputadosERes = $imputadosEDAO->insertImputadosexhortos($imputadosEDTO, $proveedor);
                            if ($imputadosERes == "") {
                                $transaccion = 0;
                            }
//            
//                if ($imputados->getcveTipoPersona() == 1) {
//                    $nombre = $imputados->getNombre();
//                } else if ($imputados->getcveTipoPersona() == 2 || $imputados->getcveTipoPersona() == 3) {
//                    $nombre = $imputados->getNombreMoral();
//                }
//                $materno = $imputados->getMaterno();
//                $paterno = $imputados->getPaterno();
//                if ($imputados->getDetenido() == "") {
//                    $detenido = "sin conocer";
//                } else {
//                    $detenido = $imputados->getDetenido();
//                    if ($detenido == "N") {
//                        $detenidoValor = 0;
//                    } else if ($detenido == "S") {
//                        $detenidoValor = 1;
//                    }
//                }
//                $nombreImputado = utf8_encode($nombre) . " " . utf8_encode($paterno) . " " . utf8_encode($materno) . " Detenido: " . $detenido;
//                array_push($nombresImputados, ($nombreImputado));
//                array_push($detenidos, $detenido);
                        }
                    }
                    $ofendidosDTO = new OfendidoscarpetasDTO();
                    $ofendidosDAO = new OfendidoscarpetasDAO();
                    $ofendidosDTO->setIdCarpetaJudicial($idReferencia);
                    $ofendidos = $ofendidosDAO->selectOfendidoscarpetas($ofendidosDTO, "", $proveedor);
                    $nombresOfendidos = array();

                    if ($ofendidos != "") {
                        $ofendidosEDAO = new OfenfendidosexhortosDAO();
                        $ofendidosEDTO = new OfenfendidosexhortosDTO();
                        foreach ($ofendidos as $ofendidos) {
                            $ofendidosEDTO->setIdExhorto($exhortos[0]->getIdExhorto());
                            $ofendidosEDTO->setPaterno($ofendidos->getPaterno());
                            $ofendidosEDTO->setMaterno($ofendidos->getMaterno());
                            $ofendidosEDTO->setNombre($ofendidos->getNombre());
                            $ofendidosEDTO->setDomicilio("");
                            $ofendidosEDTO->setTelefono("");
                            $ofendidosEDTO->setCveTipoPersona($ofendidos->getcveTipoPersona());
                            $ofendidosEDTO->setNombreMoral($ofendidos->getNombreMoral());
                            $ofendidosEDTO->setActivo($ofendidos->getActivo());
                            $ofendidosEDTO->setCveEstado($ofendidos->getCveEstadoNacimiento());
                            $ofendidosEDTO->setCveMunicipio($ofendidos->getCveMunicipioNacimiento());
                            $ofendidosEDTO->setFechaRegistro($ofendidos->getFechaRegistro());
                            $ofendidosEDTO->setFechaActualizacion($ofendidos->getFechaActualizacion());
                            $ofendidosEDTO->setCveGenero($ofendidos->getCveGenero());
                            $ofendidosResE = $ofendidosEDAO->insertOfenfendidosexhortos($ofendidosEDTO, $proveedor);

                            if ($ofendidosResE == "") {
                                $transaccion = 0;
                            }
//                if ($ofendidos->getcveTipoPersona() == 1) {
//                    $nombre = $ofendidos->getNombre();
//                } else if ($ofendidos->getcveTipoPersona() == 2 || $ofendidos->getcveTipoPersona() == 3) {
//                    $nombre = $ofendidos->getNombreMoral();
//                }
//                $materno = $ofendidos->getMaterno();
//                $paterno = $ofendidos->getPaterno();
//                $nombreOfendido = utf8_encode($nombre) . " " . utf8_encode($paterno) . " " . utf8_encode($materno);
//
//                array_push($nombresOfendidos, ($nombreOfendido));
                        }
                    }
//            regreso la respuesta
//            if ($Exhortosupdate != "") {
//                $transaccion = 1;
//                $actuaciones_array = $exhortos[0]->toString();
//
//                $response = [
//                    'estatus' => 'ok',
//                    'mensaje' => 'REGISTRO ACTUALIZADO DE FORMA CORRECTA',
//                    'data' => $actuaciones_array
//                ];
//            }else{
//                $transaccion = 0;
//            }
                } else {
                    $transaccion = 0;
                    $response = [
                        'estatus' => 'error',
                        'mensaje' => 'OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION'
                    ];
                }
            } else {
                $transaccion = 0;
                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'EL EXHORTO YA FUE ENVIADO Y ACTUALIZADO CORRECTAMENTE'
                ];
            }
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION'
            ];
            $transaccion = 0;
        }


        if ($transaccion == 1) {

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(121, 'INSERCION ENVIO A tblexhortos', 'dto', $Exhortosupdate, '');

            $proveedor->execute("COMMIT");
            $respuesta = array("estatus" => "Ok", "mensaje" => "Se actualizo el exhorto Generado");
            $response = $respuesta;
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $respuesta = array("estatus" => "Error", "mensaje" => "No se actualizo el exhorto Generado - " . $response['mensaje']);
            $response = $respuesta;
        }
        $respuesta = json_encode($respuesta);
        $proveedor->close();



        return $response;
    }

    public function actualizar_exhortoGenerado($ExhortosDto, $proveedor = null, $requisitoria, $idActuacion) {

        $ExhortosDto = $this->validarExhortos($ExhortosDto);
        $transaccion = 1;
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");

        $ActuacionesDto = new ActuacionesDTO();
        $ActuacionesDao = new ActuacionesDAO();
        $estatus = $ExhortosDto->getcveEstatusExhorto();

        //// se pasa la informacion al object de actuaciones
        $ActuacionesDto->setIdActuacion($idActuacion);
        $ActuacionesDto->setCveTipoCarpeta($ExhortosDto->getCveTipoCarpeta());
        $ActuacionesDto->setNumero($ExhortosDto->getNumero());
        $ActuacionesDto->setAnio($ExhortosDto->getAnio());
        $ActuacionesDto->setSintesis(($ExhortosDto->getSintesis()));
        $ActuacionesDto->setcveEstado($ExhortosDto->getcveEstadoProcedencia());
        $ActuacionesDto->setcveJuzgadoDestino($ExhortosDto->getcveJuzgado());
        $ActuacionesDto->setCveJuzgado($ExhortosDto->getCveJuzgadoProcedencia());
        $ActuacionesDto->setJuzgadoDestino($ExhortosDto->getJuzgadoProcedencia());
        $ActuacionesDto->setobservaciones($ExhortosDto->getObservaciones());
        $ActuacionesDto->setfechaActualizacion(date("Y-m-d H:i:s"));

        $ActuacionesDto = $ActuacionesDao->updateActuaciones($ActuacionesDto);

        if ($ActuacionesDto != '') {

            $ActuacionesestatusDto = new ActuacionesestatusDTO();
            $ActuacionesestatusDao = new ActuacionesestatusDAO();
            $ActuacionesestatusDto->setIdActuacion($idActuacion);
            $ActuacionesestatusDto->setActivo('S');
            $ActuacionesestatusDtoSelec = $ActuacionesestatusDao->selectActuacionesestatus($ActuacionesestatusDto);
            $ActuacionesestatusDto->setIdActuacionesEstatus($ActuacionesestatusDtoSelec[0]->getidActuacionesEstatus());
            $ActuacionesestatusDto->setCveEstatus($estatus);
            $ActuacionesestatusDto = $ActuacionesestatusDao->updateActuacionesestatus($ActuacionesestatusDto);

            $ExhortosgeneradosDto = new ExhortosgeneradosDTO();
            $ExhortosgeneradosDao = new ExhortosgeneradosDAO();
            $ExhortosgeneradosDto->setIdActuacion($idActuacion);
            $ExhortosgeneradosDtoSelec = $ExhortosgeneradosDao->selectExhortosgenerados($ExhortosgeneradosDto);
            $ExhortosgeneradosDto->setIdExhortoGenerado($ExhortosgeneradosDtoSelec[0]->getIdExhortoGenerado());
            $ExhortosgeneradosDto->setRequisitoria($requisitoria);
            $ExhortosgeneradosDto = $ExhortosgeneradosDao->updateExhortosgenerados($ExhortosgeneradosDto);

            $actuaciones_array = $ActuacionesDto[0]->toString();

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'REGISTRO ACTUALIZADO DE FORMA CORRECTA',
                'data' => $actuaciones_array
            ];
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION'
            ];
            $transaccion = 0;
        }



        if ($transaccion == 1) {

            $bitacoraController = new BitacoramovimientosController();
            $bitacoraController->agregar(128, 'ACTUALIZACION tblactuaciones', 'dto', $ActuacionesDto, '');

            $proveedor->execute("COMMIT");
            $respuesta = array("Estatus" => "Ok", "Mensaje" => "Se actualizo el exhorto Generado");
        } else if ($transaccion == 0) {
            $proveedor->execute("ROLLBACK");
            $respuesta = array("Estatus" => "Error", "Mensaje" => "No se actualizo el exhorto Generado");
        }
        $respuesta = json_encode($respuesta);
        $proveedor->close();



        return $response;
    }

    public function buscar_relacion($ExhortosDto, $proveedor = null) {

        $response = [];
        $idReferencia = "";
        $ExhortosDto = $this->validarExhortos($ExhortosDto);


        switch ($ExhortosDto->getCveTipoCarpeta()) {
            case "8": // amparo
                $amparoDTO = new AmparosDTO();
                $amparoDAO = new AmparosDAO();
                $amparoDTO->setNumAmparo($ExhortosDto->getNumero());
                $amparoDTO->setAniAmparo($ExhortosDto->getAnio());
                $amparoDTO->setCveJuzgado($ExhortosDto->getCveJuzgado());
                error_log(print_r($amparoDTO, true));
                $amparoDTO = $amparoDAO->selectAmparos($amparoDTO);
                if ($amparoDTO) {
                    $idReferencia = $amparoDTO[0]->getidAmparo();
                }

                break;
            case "7": // exhorto
                $exhortoDTO = new ExhortosDTO();
                $exhortoDAO = new ExhortosDAO();
                $exhortoDTO->setNumExhorto($ExhortosDto->getNumero());
                $exhortoDTO->setAniExhorto($ExhortosDto->getAnio());
                $exhortoDTO->setCveJuzgado($ExhortosDto->getCveJuzgado());
                error_log(print_r($exhortoDTO, true));
                $exhortoDTO = $exhortoDAO->selectExhortos($exhortoDTO);
                if ($exhortoDTO) {
                    $idReferencia = $exhortoDTO[0]->getIdExhorto();
                }

                break;
            default :
                $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
                $CarpetasjudicialesDto->setCveTipoCarpeta($ExhortosDto->getCveTipoCarpeta());
                $CarpetasjudicialesDto->setNumero($ExhortosDto->getNumero());
                $CarpetasjudicialesDto->setAnio($ExhortosDto->getAnio());
                $CarpetasjudicialesDto->setCveJuzgado($ExhortosDto->getCveJuzgado());
                error_log(print_r($CarpetasjudicialesDto, true));
                $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
                if ($CarpetasjudicialesDto) {
                    $idReferencia = $CarpetasjudicialesDto[0]->getIdCarpetaJudicial();
                    $carpetaInv = $CarpetasjudicialesDto[0]->getCarpetaInv();
                    $Nuc = $CarpetasjudicialesDto[0]->getNuc();
                }

                break;
        }

        $imputadosDTO = new ImputadoscarpetasDTO();
        $imputadosDAO = new ImputadoscarpetasDAO();
        $imputadosDTO->setIdCarpetaJudicial($idReferencia);
        $imputados = $imputadosDAO->selectImputadoscarpetas($imputadosDTO);
        $nombresImputados = array();
        $detenidos = array();
        if ($imputados != "") {
            foreach ($imputados as $imputados) {
                if ($imputados->getcveTipoPersona() == 1) {
                    $nombre = $imputados->getNombre();
                } else if ($imputados->getcveTipoPersona() == 2 || $imputados->getcveTipoPersona() == 3) {
                    $nombre = $imputados->getNombreMoral();
                }
                $materno = $imputados->getMaterno();
                $paterno = $imputados->getPaterno();
                if ($imputados->getDetenido() == "") {
                    $detenido = "sin conocer";
                } else {
                    $detenido = $imputados->getDetenido();
                }
                $nombreImputado = utf8_encode($nombre) . " " . utf8_encode($paterno) . " " . utf8_encode($materno) . " Detenido: " . $detenido;
                array_push($nombresImputados, ($nombreImputado));
                array_push($detenidos, $detenido);
            }
        }
//        print_r($nombresImputados);       
        $ofendidosDTO = new OfendidoscarpetasDTO();
        $ofendidosDAO = new OfendidoscarpetasDAO();
        $ofendidosDTO->setIdCarpetaJudicial($idReferencia);
        $ofendidos = $ofendidosDAO->selectOfendidoscarpetas($ofendidosDTO);
        $nombresOfendidos = array();
        if ($ofendidos != "") {
            foreach ($ofendidos as $ofendidos) {
                if ($ofendidos->getcveTipoPersona() == 1) {
                    $nombre = $ofendidos->getNombre();
                } else if ($ofendidos->getcveTipoPersona() == 2 || $ofendidos->getcveTipoPersona() == 3) {
                    $nombre = $ofendidos->getNombreMoral();
                }
                $materno = $ofendidos->getMaterno();
                $paterno = $ofendidos->getPaterno();
                $nombreOfendido = utf8_encode($nombre) . " " . utf8_encode($paterno) . " " . utf8_encode($materno);

                array_push($nombresOfendidos, ($nombreOfendido));
            }
        }
//        print_r($nombresOfendidos);
        $delitosDTO = new DelitoscarpetasDTO();
        $delitosDAO = new DelitoscarpetasDAO();
        $delitosDTO->setIdCarpetaJudicial($idReferencia);
        $delitos = $delitosDAO->selectDelitoscarpetas($delitosDTO);
        if ($delitos != "") {
            $cveDelito = $delitos[0]->getCveDelito();
            $descDelitoDTO = new DelitosDTO();
            $descDelitoDAO = new DelitosDAO();
            $descDelitoDTO->setCveDelito($cveDelito);
            $desDelito = $descDelitoDAO->selectDelitos($descDelitoDTO);
            $desDelito = $desDelito[0]->getDesDelito();
        }
//        print_r($desDelito);

        if ($idReferencia != "") {

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Encontrado',
                'idReferencia' => $idReferencia,
                'carpetaInv' => $carpetaInv,
                'Nuc' => $Nuc,
                'NombreImputado' => $nombresImputados,
                'NombreOfendido' => $nombresOfendidos,
                'desDelito' => $desDelito,
                'dentenido' => $detenidos
            ];
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'No Encontrado',
                'idReferencia' => $idReferencia
            ];
        }
        return $response;
    }

    public function buscar_impofedel($ExhortosDto, $proveedor = null) {

        $response = [];
        $ExhortosDto = $this->validarExhortos($ExhortosDto);

        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto->setCveTipoCarpeta($ExhortosDto->getCveTipoCarpeta());
        $CarpetasjudicialesDto->setNumero($ExhortosDto->getNumero());
        $CarpetasjudicialesDto->setAnio($ExhortosDto->getAnio());
        $CarpetasjudicialesDto->setcveJuzgado($ExhortosDto->getCveJuzgado());
        $CarpetasjudicialesDto->setActivo($ExhortosDto->getActivo());
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto) {

            $idCarpetaJudicial = $CarpetasjudicialesDto[0]->getIdCarpetaJudicial();
            $listaImputadosCarpetas = array();
            $listaOfendidosCarpetas = array();
            $listaDelitosCarpetas = array();

            $ImputadoscarpetasDto = new ImputadoscarpetasDTO();
            $ImputadoscarpetasDao = new ImputadoscarpetasDAO();
            $ImputadoscarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $ImputadoscarpetasDto = $ImputadoscarpetasDao->selectImputadoscarpetas($ImputadoscarpetasDto);
            if ($ImputadoscarpetasDto != '') {

                foreach ($ImputadoscarpetasDto as $imputado) {

                    $resultadoI = array(
                        "idImputadoCarpeta" => $imputado->getIdImputadoCarpeta(),
                        "cveTipoPersona" => $imputado->getCveTipoPersona(),
                        "nombreMoral" => $imputado->getnombreMoral(),
                        "detenido" => $imputado->getdetenido(),
                        "cveGenero" => $imputado->getcveGenero(),
                        "cveEstado" => $imputado->getcveEstadoNacimiento(),
                        "cveMunicipio" => $imputado->getcveMunicipioNacimiento(),
                        "domicilio" => "conocido", // no tiene campo
                        "alias" => $imputado->getalias(),
                        "telefono" => "", // no tiene campo
                        "cveCereso" => $imputado->getcveCereso(),
                        "nombre" => utf8_encode($imputado->getNombre()),
                        "paterno" => utf8_encode($imputado->getPaterno()),
                        "materno" => utf8_encode($imputado->getMaterno())
                    );

                    array_push($listaImputadosCarpetas, $resultadoI);
                }
            }
            $OfendidoscarpetasDto = new OfendidoscarpetasDTO();
            $OfendidoscarpetasDao = new OfendidoscarpetasDAO();
            $OfendidoscarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $OfendidoscarpetasDto = $OfendidoscarpetasDao->selectOfendidoscarpetas($OfendidoscarpetasDto);
            if ($OfendidoscarpetasDto != '') {

                foreach ($OfendidoscarpetasDto as $ofendido) {

                    $resultadoO = array(
                        "idOfendidoCarpeta" => $ofendido->getidOfendidoCarpeta(),
                        "cveTipoPersona" => $ofendido->getCveTipoPersona(),
                        "nombreMoral" => $ofendido->getnombreMoral(),
                        "cveGenero" => $ofendido->getcveGenero(),
                        "cveEstado" => $ofendido->getcveEstadoNacimiento(),
                        "cveMunicipio" => $ofendido->getcveMunicipioNacimiento(),
                        "domicilio" => "conocido", // no tiene campo
                        "telefono" => "", // no tiene campo
                        "nombre" => utf8_encode($ofendido->getNombre()),
                        "paterno" => utf8_encode($ofendido->getPaterno()),
                        "materno" => utf8_encode($ofendido->getMaterno())
                    );

                    array_push($listaOfendidosCarpetas, $resultadoO);
                }
            }
            $DelitoscarpetasDto = new DelitoscarpetasDTO();
            $DelitoscarpetasDao = new DelitoscarpetasDAO();
            $DelitoscarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $DelitoscarpetasDto = $DelitoscarpetasDao->selectDelitoscarpetas($DelitoscarpetasDto);

            $DelitosDto = new DelitosDTO();
            $DelitosDao = new DelitosDAO();
            $DelitosDto = $DelitosDao->selectDelitos($DelitosDto, $proveedor);

            if ($DelitoscarpetasDto != '') {

                foreach ($DelitoscarpetasDto as $delito) {
                    $desDelito = "";
                    foreach ($DelitosDto as $del) {

                        if ($delito->getcveDelito() == $del->getcveDelito()) {

                            $desDelito = $del->getdesDelito();
                        }
                    }

                    if ($delito->getcveDelito() > 0) {

                        $resultadoD = array(
                            "idDelitoCarpeta" => $delito->getidDelitoCarpeta(),
                            "cveDelito" => $delito->getcveDelito(),
                            "desDelito" => $desDelito
                        );
                        array_push($listaDelitosCarpetas, $resultadoD);
                    }
                }
            }
        }

        if ($CarpetasjudicialesDto != "") {

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Encontrado',
                'listaImputados' => $listaImputadosCarpetas,
                'listaOfendidos' => $listaOfendidosCarpetas,
                'listaDelitos' => $listaDelitosCarpetas
            ];
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => 'No Encontrado',
            ];
        }
        return $response;
    }

    /*     * ************** ACTUALIZACION DE EXHORTOS - ISRAELHS ***************** */

    /**
     * FunciOn para la busqueda de Exhortos que se pueden actualizar por el perfil Administrador
     * @param {DTO} exhortosDto Recibe el DTO del Exhorto a buscar
     * @param {DTO} return Regresa un DTO o Vacio, No importa el DTO que regese, solo tiene que contener al menos un registro para indicar que la validación es correcta
     */
    public function consultarExhortosEliminados($exhortosDto) {
        $ExhortosDTO = new ExhortosDTO();
        $ExhortosDAO = new ExhortosDAO();
        //validar que no exista un dato previo activo
        $ExhortosDTO = $exhortosDto;
        $ExhortosDTO->setActivo('S');
        $ExhortosDTO = $ExhortosDAO->selectExhortos($ExhortosDTO);
        if ($ExhortosDTO == '') { //el registro no existe
            //si no existe, validar que exista como inactivo
            $orden = ' AND IdExhortoGenerado IS NULL ';
            $exhortosDto->setActivo('N');
            $ExhortosDTO = $ExhortosDAO->selectExhortos($exhortosDto, $orden);
            if ($ExhortosDTO == '') { //no existe dato inactivo
                //se buscará en los contadores, si el numero buscado esta en el rango valido del contador, se acepta
                //esta situacion aplica para los casos en que se regresa al numero orginal del exhorto o se cambia por un numero valido no eliminado, pero si inactivo (procedente de un cambio)
                //ej, exorto A: numero 25/2016, cambia por: 18/2016, y el exhorto B: numero 43/2016 cambia por 25/2016, el '43' esta inactivo pero no eliminado
                $ContadoresDTO = new ContadoresDTO();
                $ContadoresDAO = new ContadoresDAO();
                $ContadoresDTO->setCveJuzgado($exhortosDto->getCveJuzgado());
                $ContadoresDTO->setCveTipoActuacion('8'); //corresponde al id de actuacion de exhorto generado
                $ContadoresDTO->setAnio($exhortosDto->getAniExhorto());
                $ContadoresDTO->setActivo('S');
                $ContadoresDTO = $ContadoresDAO->selectContadores($ContadoresDTO);
                if ($ContadoresDTO != '') {
                    $numero = $ContadoresDTO[0]->getNumero();
                    if ($exhortosDto->getNumExhorto() <= $numero) {
                        return $ContadoresDTO;
                    } else {
                        return '';
                    }
                }
            }
            return $ExhortosDTO;
        } else {
            return '';
        }
    }

    /*     * ************** ACTUALIZACION DE EXHORTOS - ISRAELHS/ ***************** */
}

?>
