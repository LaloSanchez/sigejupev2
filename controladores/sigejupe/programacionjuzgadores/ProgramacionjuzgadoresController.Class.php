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
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
ini_set('max_execution_time', 900);
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionjuzgadores/ProgramacionjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionjuzgadores/ProgramacionjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programaciones/ProgramacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programaciones/ProgramacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/configuracionesjuzgadores/ConfiguracionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/configuracionesjuzgadores/ConfiguracionesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/horariosjuzgadores/HorariosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/horariosjuzgadores/HorariosjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/secuencias/SecuenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/secuencias/SecuenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ultimoroljuzgador/UltimoroljuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionsalas/ProgramacionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionsalas/ProgramacionsalasController.Class.php");
//Audiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
//Audiencias juzgador
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
//Salas juzgadores
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salasjuzgadores/SalasjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salasjuzgadores/SalasjuzgadoresDAO.Class.php");

class ProgramacionjuzgadoresController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionjuzgadores($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto->setidProgramacionJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getIdProgramacionJuzgador()))));
        $ProgramacionjuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getidJuzgador()))));
        $ProgramacionjuzgadoresDto->setcveRolJuzgador(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getcveRolJuzgador()))));
        $ProgramacionjuzgadoresDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getfechaInicio()))));
        $ProgramacionjuzgadoresDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getfechaFinal()))));
        $ProgramacionjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getactivo()))));
        $ProgramacionjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getfechaRegistro()))));
        $ProgramacionjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getfechaActualizacion()))));
        $ProgramacionjuzgadoresDto->setidProgramacion(strtoupper(str_ireplace("'", "", trim($ProgramacionjuzgadoresDto->getidProgramacion()))));
        return $ProgramacionjuzgadoresDto;
    }

    public function selectProgramacionjuzgadoresindividual($ProgramacionjuzgadoresDto, $cveusuario, $anio, $mes, $tipo, $finicio, $ffin, $juzgado) {


         $contador=0;
         $response=[
                'total' => 0,
                  'msg' => 'Sin resultados'
            ];
        $idJuzgador = "";
        $JuzgadoresDAO = new JuzgadoresDAO();
        $JuzgadoresDTO = new JuzgadoresDTO();
        $JuzgadoresDTO->setCveUsuario($cveusuario);
        $conscvejuz = $JuzgadoresDAO->selectJuzgadoreCveUsario($JuzgadoresDTO); ///////////////arreglo de el id del juzgador
      if($conscvejuz!=""){
        foreach ($conscvejuz as $rowcvejdr) {
            $idJuzgador = $rowcvejdr->getIdJuzgador(); //////id de juzgador
        }

        $orden = "order by fechaInicio,cveRolJuzgador asc";
        $consda = "";
        if ($tipo == 2) {///dias
            $progjuzDT0 = new ProgramacionjuzgadoresDTO();
            $progjuzDA0 = new ProgramacionjuzgadoresDAO();
            $progjuzDT0->setIdJuzgador($idJuzgador);
            $finicio = $finicio[6] . $finicio[7] . $finicio[8] . $finicio[9] . "-" . $finicio[3] . $finicio[4] . "-" . $finicio[0] . $finicio[1];
            $ffin = $ffin[6] . $ffin[7] . $ffin[8] . $ffin[9] . "-" . $ffin[3] . $ffin[4] . "-" . $ffin[0] . $ffin[1];
            $orden = " and fechaInicio>='" . $finicio . " 00:00:00' and fechaInicio<='" . $ffin . " 23:59:59'";
            $consda = $progjuzDA0->selectProgramacionjuzgadores($progjuzDT0, $orden);
        }

        if ($tipo == 1) {
            $tbprogrmcionDAO = new ProgramacionesDAO();
            $tbprogrmcionDTO = new ProgramacionesDTO();
            $tbprogrmcionDTO->setCveMes($mes);
            $tbprogrmcionDTO->setAnio($anio);
            $tbprogrmcionDTO->setCveJuzgado($juzgado);
            $cn = $tbprogrmcionDAO->selectProgramaciones($tbprogrmcionDTO);
            $idpgm = "";

            if ($cn == "") {

                $response = [
                    'total' => 0,
                    'msg' => 'Sin resultados'];
                return $response;
            }


            foreach ($cn as $rowh) {
                $idpgm = $rowh->getIdProgramacion();
            }

            $progjuzDT0 = new ProgramacionjuzgadoresDTO();
            $progjuzDA0 = new ProgramacionjuzgadoresDAO();
            $progjuzDT0->setIdJuzgador($idJuzgador);
            $progjuzDT0->setIdProgramacion($idpgm);
            $consda = $progjuzDA0->selectProgramacionjuzgadores($progjuzDT0, $orden);
        }




        $rolDAO = new RolesjuzgadoresDAO();
        $rolDTO = new RolesjuzgadoresDTO();

        $contador = 0;
        $response = [];


        $array_dias['Sunday'] = "Domingo";
        $array_dias['Monday'] = "Lunes";
        $array_dias['Tuesday'] = "Martes";
        $array_dias['Wednesday'] = "Miercoles";
        $array_dias['Thursday'] = "Jueves";
        $array_dias['Friday'] = "Viernes";
        $array_dias['Saturday'] = "Sabado";

        $response = [
            'total' => 0,
            'msg' => 'Sin resultados'];
        if ($consda == "") {
            return $response;
        }

        foreach ($consda as $row) {
            $rol = "";
            $fech = "";
            $d = "";
            $h = "";

            ////////////////////////////////////////////////////////////horario  
            $inicial = explode(" ", $row->getFechaInicio());
            $inicial = explode(":", $inicial[1]);
            $inicial = $inicial[0] . ":" . $inicial[1];
            $final = explode(" ", $row->getFechaFinal());
            $final = explode(":", $final[1]);
            $final = $final[0] . ":" . $final[1];
            $h = $inicial . " " . $final;
            $fech = explode(" ", $row->getFechaInicio());
            $fech = $fech[0];
            $rolDTO->setCveRolJuzgador($row->getCveRolJuzgador());
            $crol = $rolDAO->selectRolesjuzgadores($rolDTO);
            foreach ($crol as $cb) {
                $rol = $cb->getDesRolJuzgador();
            }

            $d = $array_dias[date('l', strtotime($fech))];
            $response[$contador] = array(
                'rol' => $rol,
                'fecha' => str_replace("-", "/", date('d-m-Y', strtotime($fech))),
                'dia' => $d,
                'horario' => $h
            );

            $contador++;
        }

      }
        if ($contador > 0) {

            $response = [
                'total' => $contador,
                'data' => $response
            ];
        }

        return $response;


//print_r($response);
        // return $response;
    }

    public function selectProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor = null) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresDao->selectProgramacionjuzgadores($ProgramacionjuzgadoresDto, "", $proveedor);
        return $ProgramacionjuzgadoresDto;
    }

    public function insertProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor = null) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresDao->insertProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor);
        return $ProgramacionjuzgadoresDto;
    }

    public function updateProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor = null) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresDao->updateProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor);
        return $ProgramacionjuzgadoresDto;
    }

    public function deleteProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor = null) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresDao->deleteProgramacionjuzgadores($ProgramacionjuzgadoresDto, $proveedor);
        return $ProgramacionjuzgadoresDto;
    }

    public function programacion($juzgadosDto, $programacionesDto = null, $proveedor = null) {
//        var_dump($programacionesDto);
        $error = false;
        $year = "";
        $mes = "";
        $diasFestivos = array();
        $secuencias = array();
        $juzgadores = array();
        $roles = array();
        $msg[] = array();
        $logger = new Logger("/../../logs/", "ProgramacionJuzgadores");
        $logger->w_onError("**********COMIENZA EL PROGRAMA DE PROGRAMACION DE JUZGADORES**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }


        $logger->w_onError("**********OBTENEMOS LA FECHA DEL SERVIDOR DE MYSQL");
        $logger->w_onError("**********Select date_format(now(),'%Y') year,date_format(now(),'%m') mes");
        $this->proveedor->execute("Select date_format(now(),'%Y') year,date_format(now(),'%m') mes");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $year = $row["year"];
                    $mes = $row["mes"];
                    $logger->w_onError("**********AÑO: " . $year . " MES: " . $mes);
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE LOGRO OBTENER LA FECHA DE LA BASE DE DATOS");
                $msg[] = array("Error al obtener la fecha de programacion");
            }
        } else {
            $error = true;
            $logger->w_onError("**********ERROR AL OBTENER LA FECHA DEL SERVIDOR DE MYSQL DESCRIPCION: " . $this->proveedor->error());
            $msg[] = array("Ocurrio un error al obtener la fecha de programacion");
        }
        $tipoJuzgado = 0;
        $logger->w_onError("**********CONSULTAR EL TIPO DE JUZGADO");
        $dtoJuzgados = new JuzgadosDTO();
        $daoJuzgados = new JuzgadosDAO();
        $dtoJuzgados->setCveJuzgado($juzgadosDto->getCveJuzgado());
        $dtoJuzgados = $daoJuzgados->selectJuzgados($dtoJuzgados, "", $this->proveedor);
        if ( $dtoJuzgados != "" ) {
            $tipoJuzgado = (int)$dtoJuzgados[0]->getCveTipojuzgado();
            $logger->w_onError("**********TIPO DE JUZGADO: " . $tipoJuzgado);
        } else {
            $error = true;
            $msg[] = array("Ocurrio un error al consultar los datos del juzgado");
        }

        $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
        $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
        $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor->error());

        if ($rolesjuzgadoresDto != "") {
            for ($index = 0; $index < count($rolesjuzgadoresDto); $index++) {
                $roles[$rolesjuzgadoresDto[$index]->getCveRolJuzgador()] = $rolesjuzgadoresDto[$index]->getDesRolJuzgador();
            }
        }

        $logger->w_onError("**********OBTENEMOS LA INCOFMACION DE LA TABLA DE PROGRAMACIONES DEL MES SOLICITADO");
        $logger->w_onError("**********DATOS PARA LA BUSQUEDA");

        if ($programacionesDto == null) {
            $logger->w_onError("**********SE DETERMINA QUE NO INDICO MES Y AÑO Y SE AGREGAN POR DEFAULT");
            $programacionesDto = new ProgramacionesDTO();
            $programacionesDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
            $programacionesDto->setCveMes($mes);
            $programacionesDto->setAnio($year);
        } else {
            $programacionesDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
        }

        $logger->w_onError("**********MES: " . $programacionesDto->getCveMes());
        $logger->w_onError("**********AÑO: " . $programacionesDto->getAnio());
        $logger->w_onError("**********CVEJUZGADO: " . $programacionesDto->getCveJuzgado());

        $logger->w_onError("**********REALIZAMOS LA BUSQUEDA DE LA INFORMACION");

        $programacionesDao = new ProgramacionesDAO();
        $aux = $programacionesDao->selectProgramaciones($programacionesDto, "", $this->proveedor);

        if ($aux != "") {
            $logger->w_onError("**********SE DETERMINA QUE LA PROGRAMACION DE TBLPROGRAMACIONES YA EXISTIA CON ANTERIORIDAD");
            $logger->w_onError("**********DATOS DE LA PROGRAMACION");
            $logger->w_onError("**********MES: " . $aux[0]->getCveMes());
            $logger->w_onError("**********A�O: " . $aux[0]->getAnio());
            $logger->w_onError("**********JUZGADO: " . $aux[0]->getCveJuzgado());
            $logger->w_onError("**********IDPROGRAMACION: " . $aux[0]->getIdProgramacion());
            $programacionesDto = $aux[0];
        } else {
            $logger->w_onError("**********SE DETERMINA QUE LA PROGRAMACION DE TBLPROGRAMACIONES NO CUENTA CON REGISTROS");
            $logger->w_onError("**********OBTENEMOS LAS FECHA DE INICIO Y DE TERMINO DEL MES CONSIDERANDO QUE SON SEMANS COMPLETAS");
            $programacionesController = new ProgramacionesController();
            $programacionesDto = $programacionesController->ObtenerFechas($programacionesDto);

            $logger->w_onError("**********GUARDAMOS LA INFORMACION EN LA BASE DE DATOS");
            $programacionesDto = $programacionesDao->insertProgramaciones($programacionesDto[0], $this->proveedor);

            if ($programacionesDto == "") {
                $logger->w_onError("**********SE DETERMINA QUE OCURRIO UN ERORR AL REGISTRAR LA INFORMACION EN LA BASE DE DATOS");
                $error = true;
                $msg[] = array("Ocurrio un errro al guardar la programacion mensual");
            } else {
                $logger->w_onError("**********LA PROGRAMACION SE CORRIO DE FORMA EXITOSA");
                $logger->w_onError("**********DATOS DE LA PROGRAMACION");
                $logger->w_onError("**********MES: " . $programacionesDto[0]->getCveMes());
                $logger->w_onError("**********AÑO: " . $programacionesDto[0]->getAnio());
                $logger->w_onError("**********JUZGADO: " . $programacionesDto[0]->getCveJuzgado());
                $logger->w_onError("**********IDPROGRAMACION: " . $programacionesDto[0]->getIdProgramacion());
                $programacionesDto = $programacionesDto[0];
            }
        }


        if ((!$error) && ($programacionesDto->getIdProgramacion() > 0)) {
//            echo  $programacionesDto->getIdProgramacion();
            $logger->w_onError("**********SE DETERMINA TODO VA SALIENDO BIEN CON EL PROGRAMA");

            $logger->w_onError("**********BUSCAMOS EL MES ANTERIOR DE LA PROGRAMACION DEL MES QUE SOLICITA PARA PROGRAMAR");
            $logger->w_onError("**********DATOS DEL MES SOLICITADO");
            $logger->w_onError("**********MES: " . $programacionesDto->getCveMes());
            $logger->w_onError("**********AÑO: " . $programacionesDto->getAnio());
            $logger->w_onError("**********CVEJUZGADO: " . $programacionesDto->getCveJuzgado());

            $mesAnterior = 0;
            $anioAnterior = "";
            if ($programacionesDto->getCveMes() == 1) {
                $mesAnterior = 12;
                $anioAnterior = (((int) $programacionesDto->getAnio()) - 1);
            } else {
                $mesAnterior = (((int) $programacionesDto->getCveMes()) - 1);
                $anioAnterior = $programacionesDto->getAnio();
            }

            $logger->w_onError("**********DATOS DEL MES ANTERIOR A LA SOLICITADO");
            $logger->w_onError("**********MES: " . $mesAnterior);
            $logger->w_onError("**********AÑO: " . $anioAnterior);
            $logger->w_onError("**********CVEJUZGADO: " . $programacionesDto->getCveJuzgado());

            $logger->w_onError("**********BUSCAMOS EL MES ANTERIOR DE LA PROGRAMACION");

            $aux = new ProgramacionesDTO();
            $aux->setCveJuzgado($programacionesDto->getCveJuzgado());
            $aux->setCveMes($mesAnterior);
            $aux->setAnio($anioAnterior);
            $aux = $programacionesDao->selectProgramaciones($aux, "", $this->proveedor);

            if ($aux != "") {
                $aux = $aux[0];
            }else{
                $aux = $programacionesDto;
            }

            $logger->w_onError("**********BUSCAMOS LOS DIAS FESTIVOS EN GESTION");

            $calendario = new Calendario();
            $strJSON = "{";
            $strJSON .= "\"type\": \"select\",";
            $strJSON .= "\"calendario\": {";
            $strJSON .= "\"idDiasFestivos\": \"\",";
            $strJSON .= "\"Tipo\": \"\",";
            $strJSON .= "\"Fecha\": \"\",";
            $strJSON .= "\"Descripcion\": \"\"";
            $strJSON .= "},";
            $strJSON .= "\"params\": {";
            $strJSON .= "\"FechaInicio\": \"" . $programacionesDto->getFechaInicial() . "\","; // ejem. 2015-07-01
            $strJSON .= "\"FechaFin\": \"" . $programacionesDto->getFechaFinal() . "\","; // ejem. 2015-07-31
            $strJSON .= "\"Orden\": \"Fecha ASC\""; // Fecha ASC
            $strJSON .= "}";
            $strJSON .= "}";
            $logger->w_onError("**********JSON DE PETICION: " . $strJSON);
            $festivos = $calendario->getCalendario($strJSON);
            $logger->w_onError("**********JSON DE RESPUESTA: " . $festivos);

            $json = new Decode_JSON();
            $festivos = $json->decode($festivos, true);

            for ($index = 0; $index < count($festivos["data"]); $index++) {
                $diasFestivos[] = $festivos["data"][$index]->Fecha;
            }

            $logger->w_onError("**********BUSCAMOS LA SECUENCIA DEL JUZGADO " . $juzgadosDto->getCveJuzgado());

            $secuenciasDto = new SecuenciasDTO();
            $secuenciasDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
            $secuenciasDto->setActivo("S");
            $secuenciasDao = new SecuenciasDAO();
            $secuenciasDto = $secuenciasDao->selectSecuenciasGenerico($secuenciasDto, " ORDER BY orden ASC", $this->proveedor);

            if ($secuenciasDto != "") {
                for ($index = 0; $index < count($secuenciasDto); $index++) {
                    $secuencias[] = array("cveRolJuzgador" => $secuenciasDto[$index]->getCveRolJuzgador(), "aparicion" => $secuenciasDto[$index]->getAparicion(), "orden" => $secuenciasDto[$index]->getOrden(), "descansaFinSemana" => $secuenciasDto[$index]->getDescansaFinSemana());
                    $logger->w_onError("**********" . $index . " : CVEROLjUZGADOR: " . $secuenciasDto[$index]->getCveRolJuzgador() . " APARICION: " . $secuenciasDto[$index]->getAparicion() . " DESCANSAFINDESEMANA: " . $secuenciasDto[$index]->getDescansaFinSemana());
                }
            } else {
                $error = true;
                $logger->w_onError("**********EL JUZGADO NO CUENTA CON UNA SECUENCIA");
                $msg[] = array("El juzgado no cuenta con una secuencia definida");
            }

            $logger->w_onError("**********BUSCAMOS LOS JUZGADORES DEL JUZGADO " . $juzgadosDto->getCveJuzgado());

            $juzgadoresJuzgadosDto = new JuzgadoresjuzgadosDTO();
            $juzgadoresJuzgadosDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
            $juzgadoresJuzgadosDto->setActivo("S");

            $juzgadoresJuzgadosDao = new JuzgadoresjuzgadosDAO();
            $juzgadoresJuzgadosDto = $juzgadoresJuzgadosDao->selectJuzgadoresjuzgados($juzgadoresJuzgadosDto, "", $this->proveedor);
            if ($juzgadoresJuzgadosDto != "") {
                for ($index = 0; $index < count($juzgadoresJuzgadosDto); $index++) {
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDto->setActivo("S");
                    $juzgadoresDto->setIdJuzgador($juzgadoresJuzgadosDto[$index]->getIdJuzgador());

                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);

                    if ($juzgadoresDto != "") {
                        $juzgadoresDto = $juzgadoresDto[0];
                        if ($juzgadoresDto->getProgramable() == "S") {
                            $juzgadores[] = $juzgadoresJuzgadosDto[$index]->getIdJuzgador();
                            $logger->w_onError("********** " . ($index + 1) . " JUZGADOR " . $juzgadoresJuzgadosDto[$index]->getIdJuzgador());
                        } else {
                            $logger->w_onError("********** " . ($index + 1) . " JUZGADOR " . $juzgadoresJuzgadosDto[$index]->getIdJuzgador() . " NO ESTA MARCADO COMO PROGRAMABLE");
                            $juzgadoresTmp = new JuzgadoresDTO();
                            $juzgadoresDao = new JuzgadoresDAO();
                            $juzgadoresTmp->setIdJuzgador($juzgadoresJuzgadosDto[$index]->getIdJuzgador());
                            $juzgadoresTmp = $juzgadoresDao->selectJuzgadores($juzgadoresTmp, "", $this->proveedor);
                            if ($juzgadoresTmp != "") {
                                $nombreJuzgador = utf8_encode($juzgadoresTmp[0]->getNombre()) . " " . utf8_encode($juzgadoresTmp[0]->getPaterno()) . " " . utf8_encode($juzgadoresTmp[0]->getMaterno());
                                $msg[] = array("El juzgador: " . $nombreJuzgador . " no esta marcado como programable");
                            } else {
                                $error = true;
                                $msg[] = array("Error al consultar los datos del juzgador");
                                $logger->w_onError("**********Error al consultar los datos del juzgador: " . $juzgadoresJuzgadosDto[$index]->getIdJuzgador());
                            }
                        }
                    } else {
                        $logger->w_onError("********** " . ($index + 1) . " JUZGADOR " . $juzgadoresJuzgadosDto[$index]->getIdJuzgador() . " NO ESTA ACTIVO EN EL SISTEMA");
                    }
                }
            } else {
                $error = true;
                $logger->w_onError("**********EL JUZGADO NO CUENTA CON JUZGADORES ACTIVOS");
                $msg[] = array(" El juzgado no cuenta con juzgadores activos, favor de verificar ");
            }


            $logger->w_onError("********** FECHA INICIAL: " . $programacionesDto->getFechaInicial());
            $logger->w_onError("********** FECHA FINAL: " . $programacionesDto->getFechaFinal());
            $fechaInicial = $programacionesDto->getFechaInicial();
            $fechaFinal = $programacionesDto->getFechaFinal();


            if ((count($secuencias) - 1) == (count($juzgadores) - 1)) {

                for ($index = 0; $index < count($juzgadores); $index++) {

                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDto->setActivo("S");
                    $juzgadoresDto->setIdJuzgador($juzgadores[$index]);

                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);

                    if ($juzgadoresDto != "") {
                        $juzgadoresDto = $juzgadoresDto[0];
                        if ($juzgadoresDto->getProgramable() == "S") {

                            $diaAuxiliarInicial = strtotime('+' . 0 . ' day', strtotime($fechaInicial));
                            $diaAuxiliarFinal = strtotime('+' . 0 . ' day', strtotime($fechaFinal));
                            $logger->w_onError("**********COMIENZA EL CICLO PARA DEFINIR LA PROGRAMACION DEL JUZGADOR " . $juzgadores[$index]);

                            $logger->w_onError("**********BUSCAMOS EL ULTIMO ROL JUZGADOR ");
                            $logger->w_onError("**********DATOS ");
                            $ultimoroljuzgadorDto = new UltimoroljuzgadorDTO();
                            $ultimoroljuzgadorDto->setIdJuzgador($juzgadores[$index]);

                            $ultimoroljuzgadorDto->setIdProgramacion($aux->getIdProgramacion());
                            $logger->w_onError("**********IDPROGRAMACION: " . $aux->getIdProgramacion());

                            $ultimoroljuzgadorDao = new UltimoroljuzgadorDAO();
                            $ultimoroljuzgadorDto = $ultimoroljuzgadorDao->selectUltimoroljuzgador($ultimoroljuzgadorDto, " ORDER BY numSemana DESC LIMIT 0,1", $this->proveedor);
                            //var_dump($ultimoroljuzgadorDto);
                            if ($ultimoroljuzgadorDto != "" && count($ultimoroljuzgadorDto) > 0) {
                                $logger->w_onError("**********SE OBTIENE EL ULTIMO ROL DEL JUZGADOR");
                                $ultimoroljuzgadorDto = $ultimoroljuzgadorDto[0];
                                
                                for ($y = 0; $y < count($secuencias); $y++) {
                                    if (($secuencias[$y]["cveRolJuzgador"] == $ultimoroljuzgadorDto->getCveRolJuzgador()) && ($secuencias[$y]["aparicion"] == $ultimoroljuzgadorDto->getAparicion())) {
                                        if ($y < (count($secuencias) - 1)) {
                                            $cveRolJuzgador = $secuencias[$y + 1]["cveRolJuzgador"];
                                            $aparicion = $secuencias[$y + 1]["aparicion"];
                                            $descansaFinSemana = $secuencias[$y + 1]["descansaFinSemana"];
                                            $indice = $y + 1;
                                        } else {
                                            $cveRolJuzgador = $secuencias[0]["cveRolJuzgador"];
                                            $aparicion = $secuencias[0]["aparicion"];
                                            $descansaFinSemana = $secuencias[0]["descansaFinSemana"];
                                            $indice = 0;
                                        }
                                        break;
                                    }
                                }
                            } else {
                                $nombre = utf8_encode($juzgadoresDto->getNombre()) . " " . utf8_encode($juzgadoresDto->getPaterno()) . " " . utf8_encode($juzgadoresDto->getMaterno());
                                $msg[] = array("No existe registro de ultimo rol del juzgador para el juez: " . $nombre);
                                $error = true;
                                $logger->w_onError("**********NO EXISTE REGISTRO DEL ULTIMO ROL DE JUZGADOR PARA EL JUEZ: " . $nombre);
                                break;
                            }

                            $logger->w_onError("**********CVEROLJUZGADOR: " . $cveRolJuzgador . " DESC: " . $roles[$cveRolJuzgador] . " APARICION: " . $aparicion . " DESCANSAFINSEMANA: " . $descansaFinSemana . " INDICE: " . $indice);

                            $tmpHorariosJuzgadoresDto = new HorariosjuzgadoresDTO();
                            $tmpHorariosJuzgadoresDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
                            $tmpHorariosJuzgadoresDto->setActivo("S");

                            $tmpHorariosJuzgadoresDao = new HorariosjuzgadoresDAO();
                            $tmpHorariosJuzgadoresDto = $tmpHorariosJuzgadoresDao->selectHorariosjuzgadores($tmpHorariosJuzgadoresDto, "", $this->proveedor);


                            if ($tmpHorariosJuzgadoresDto != "") {
                                $configuracionesJuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
                                $configuracionesJuzgadoresDto->setIdJuzgador($juzgadores[$index]);
                                $configuracionesJuzgadoresDto->setIdHorarioJuzgador($tmpHorariosJuzgadoresDto[0]->getIdHorarioJuzgador());

                                $configuracionesJuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
                                $configuracionesJuzgadoresDto = $configuracionesJuzgadoresDao->selectConfiguracionesjuzgadores($configuracionesJuzgadoresDto, "", $this->proveedor);

                                $horario = array();
                                $numSemana = 1;

                                if ($configuracionesJuzgadoresDto != "") {
                                    for ($x = 0; $x < count($configuracionesJuzgadoresDto); $x++) {
                                        $horariosJuzgadoresDto = new HorariosjuzgadoresDTO();
                                        $horariosJuzgadoresDto->setCveJuzgado($juzgadosDto->getCveJuzgado());
                                        $horariosJuzgadoresDto->setIdHorarioJuzgador($configuracionesJuzgadoresDto[$x]->getIdHorarioJuzgador());

                                        $horariosJuzgadoresDao = new HorariosjuzgadoresDAO();
                                        $horariosJuzgadoresDto = $horariosJuzgadoresDao->selectHorariosjuzgadores($horariosJuzgadoresDto, "", $this->proveedor);

                                        if ($horariosJuzgadoresDto != "") {
                                            $horario[] = $horariosJuzgadoresDto[0];
//                                $horariosJuzgadoresDto->getHorarioInicial()
                                            break;
                                        } else {
                                            $logger->w_onError("**********EL JUZGADOR NO CUENTA CON UN HORARIO DEFINIDO, ID JUZGADOR : " . $juzgadores[$index]);
                                            $juzgadoresTmp = new JuzgadoresDTO();
                                            $juzgadoresDao = new JuzgadoresDAO();
                                            $juzgadoresTmp->setIdJuzgador($juzgadores[$index]);
                                            $juzgadoresTmp = $juzgadoresDao->selectJuzgadores($juzgadoresTmp, "", $this->proveedor);
                                            if ($juzgadoresTmp != "") {
                                                $nombreJuzgador = utf8_encode($juzgadoresTmp[0]->getNombre()) . " " . utf8_encode($juzgadoresTmp[0]->getPaterno()) . " " . utf8_encode($juzgadoresTmp[0]->getMaterno());
                                                $msg[] = array("El juzgador: " . $nombreJuzgador . " no cuenta con un horario definido");
                                            } else {
                                                $error = true;
                                                $msg[] = array("Error al consultar los datos del juzgador");
                                            }
                                            $error = true;
                                            break;
                                        }
                                    }
                                } else {
                                    $logger->w_onError("**********EL JUZGADOR NO CUENTA CON UNA CONFIGURACION DEFINIDA, ID JUZGADOR : " . $juzgadores[$index]);
                                    $juzgadoresTmp = new JuzgadoresDTO();
                                    $juzgadoresDao = new JuzgadoresDAO();
                                    $juzgadoresTmp->setIdJuzgador($juzgadores[$index]);
                                    $juzgadoresTmp = $juzgadoresDao->selectJuzgadores($juzgadoresTmp, "", $this->proveedor);
                                    if ($juzgadoresTmp != "") {
                                        $nombreJuzgador = utf8_encode($juzgadoresTmp[0]->getNombre()) . " " . utf8_encode($juzgadoresTmp[0]->getPaterno()) . " " . utf8_encode($juzgadoresTmp[0]->getMaterno());
                                        $msg[] = array("El juzgador: " . $nombreJuzgador . " no cuenta con una configuracion definida");
                                    } else {
                                        $error = true;
                                        $msg[] = array("Error al consultar los datos del juzgador");
                                    }
                                    $error = true;
                                    break;
                                }

                                while ($diaAuxiliarInicial <= $diaAuxiliarFinal) {
                                    $diaFestivo = false;
                                    $dia = date('Y-m-d', $diaAuxiliarInicial);
                                    $logger->w_onError("**********DIA " . $dia);
                                    /*
                                     * Dia de la semana
                                     * Lunes 1 Martes 2 Miercoles 3 Jueves 4 Viernes 5 Sabado 6 Domingo 0
                                     */

                                    $fechaTmp = explode("-", $dia);
                                    $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));

                                    for ($x = 0; $x < count($diasFestivos); $x++) {
                                        $diaAuxiliar1 = strtotime('+' . 0 . ' day', strtotime($diasFestivos[$x]));
                                        $diaAuxiliar2 = strtotime('+' . 0 . ' day', strtotime($dia));
                                        if ($diaAuxiliar1 == $diaAuxiliar2) {
                                            $diaFestivo = true;
                                            $logger->w_onError("**********DIA FESTIVO ");
                                            break;
                                        }
                                    }

                                    

                                    $programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();
                                    $programacionjuzgadoresDto->setIdJuzgador($juzgadores[$index]);
                                    $programacionjuzgadoresDto->setActivo("S");
                                    $programacionjuzgadoresDto->setIdProgramacion($programacionesDto->getIdProgramacion());

                                    if (($cveRolJuzgador == 1) || ($cveRolJuzgador == 3)) { // PROGRAMADAS Y DESPACHO
                                        $logger->w_onError("**********VERIFICAMOS SI EL DIA NO ES SABADO O DOMINGO YA QUE LOS JUECES DE PROGRAMADAS SOLO TRABAJAN  ");
                                        $logger->w_onError("**********DE LUNES A VIERNES");
                                        if (($diaSemana > 0) && ($diaSemana < 6)) {
                                            $programacionjuzgadoresDto->setFechaInicio($dia . " " . $horario[0]->getHorarioInicial());
                                            $programacionjuzgadoresDto->setFechaFinal($dia . " " . $horario[0]->getHorarioFinal());
                                            $programacionjuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);

                                            $logger->w_onError("**********GUARDAMOS LA PROGRAMACION DEL JUZGADOR");
                                            $programacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();

                                            $auxDto = new ProgramacionjuzgadoresDTO();
                                            $auxDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                                            $auxDto->setIdJuzgador($juzgadores[$index]);
                                            $auxDto = $programacionjuzgadoresDao->selectProgramacionjuzgadores($auxDto, " And FechaInicio>='" . $dia . " " . $horario[0]->getHorarioInicial() . "' And FechaFinal<='" . $dia . " " . $horario[0]->getHorarioFinal() . "'", $this->proveedor);
                                            $logger->w_onError("**********BUSCAMOS SI ESE DIA NO ESTA PROGRAMADO PARA ESE JUZGADOR " . $dia);
                                            if (($auxDto == "") && (!$diaFestivo)) {
                                                $programacionjuzgadoresDto = $programacionjuzgadoresDao->insertProgramacionjuzgadores($programacionjuzgadoresDto, $this->proveedor);

                                                if ($programacionjuzgadoresDto == "") {
                                                    $logger->w_onError("**********NO SE LOGRO REGISTRAR LA PROGRAMACION DEL JUZGADOR " . $dia);
                                                }
                                            } else {
                                                $logger->w_onError("**********NO SE REGISTRA P�RQUE YA EXISTE ESE DIA PROGRAMADO " . $dia);
                                            }
                                        } else {
                                            $logger->w_onError("**********ESTE DIA ES FIN DE SEMANA " . $diaSemana);
                                            if ($diaSemana == 0) {
                                                $logger->w_onError("**********ESTE DIA DOMINGO");
                                                $logger->w_onError("**********GUARDAMOS UN REGISTRO EN EL ULTIMO ROL JUZGADOR");
                                                $ultimoroljuzgadorDto = new UltimoroljuzgadorDTO();
                                                $ultimoroljuzgadorDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                                                $ultimoroljuzgadorDto->setIdJuzgador($juzgadores[$index]);
                                                $ultimoroljuzgadorDto->setNumSemana($numSemana);
                                                $ultimoroljuzgadorDto->setCveRolJuzgador($cveRolJuzgador);
                                                $ultimoroljuzgadorDto->setAparicion($aparicion);

                                                $logger->w_onError("**********BUSCAMOS SI YA TIENE UN ULTIMO ROL REGISTRADO PARA ESA SEMANA");
                                                $logger->w_onError("**********ID JUZGADOR: " . $juzgadores[$index]);
                                                $logger->w_onError("**********NUM SEMANA: " . $numSemana);
                                                $logger->w_onError("**********CVE ROL JUZGADOR: " . $cveRolJuzgador);
                                                $logger->w_onError("**********ID PROGRAMACION: " . $programacionesDto->getIdProgramacion());
                                                $auxUltDto = new UltimoroljuzgadorDTO();
                                                $auxUltDto->setIdJuzgador($juzgadores[$index]);
                                                $auxUltDto->setNumSemana($numSemana);
                                                $auxUltDto->setCveRolJuzgador($cveRolJuzgador);
                                                $auxUltDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                                                $ultimoroljuzgadorDao = new UltimoroljuzgadorDAO();
                                                $auxUltDto = $ultimoroljuzgadorDao->selectUltimoroljuzgador($auxUltDto, "", $this->proveedor);

                                                if ( $auxUltDto == "" && count($auxUltDto) > 0 ) {
                                                    $logger->w_onError("**********SE DETERMINA QUE YA EXISTE UN ULTIMO ROL JUZGADOR PARA ESA SEMANA");
                                                } else {
                                                    $logger->w_onError("**********SE DETERMINA QUE NO EXISTE UN ULTIMO ROL JUZGADOR PARA ESA SEMANA");
                                                    $ultimoroljuzgadorDto = $ultimoroljuzgadorDao->insertUltimoroljuzgador($ultimoroljuzgadorDto, $this->proveedor);

                                                    if ($ultimoroljuzgadorDto == "") {
                                                        $logger->w_onError("**********NO SE LOGRO REGISTRAR EL ULTIMO ROL JUZGADOR");
                                                        $error = true;
                                                        $msg[] = array("Ocurrio un error al registrar el ultimo rol juzgador");
                                                    }
                                                }

                                                if ($indice < (count($secuencias) - 1)) {
                                                    $cveRolJuzgador = $secuencias[$indice + 1]["cveRolJuzgador"];
                                                    $aparicion = $secuencias[$indice + 1]["aparicion"];
                                                    $descansaFinSemana = $secuencias[$indice + 1]["descansaFinSemana"];
                                                    $indice++;
                                                } else {
                                                    $cveRolJuzgador = $secuencias[0]["cveRolJuzgador"];
                                                    $aparicion = $secuencias[0]["aparicion"];
                                                    $descansaFinSemana = $secuencias[0]["descansaFinSemana"];
                                                    $indice = 0;
                                                }

                                                $logger->w_onError("**********NOS MOVEMOS AL SIGUIENTE ROL DEFINIDO EN LA SECUENCIA");
                                                $logger->w_onError("**********CVEROLJUZGADOR: " . $cveRolJuzgador . " DESC: " . $roles[$cveRolJuzgador] . " APARICION: " . $aparicion . " DESCANSAFINSEMANA: " . $descansaFinSemana . " INDICE: " . $indice);

                                                $numSemana++;
                                            }
                                        }
                                    } else { // URGENTES
                                        if (($descansaFinSemana == "S") && ( ($diaSemana == 0) || ($diaSemana == 6))) {
                                            $logger->w_onError("**********NO SE REGISTRA EL DIA PORQUE ESA SECUENCIA DEFINE QUE ESTE ROL DESCANSA EL FIN DE SEMANA");
                                        } else {
                                            if ( $diaFestivo == true || $diaSemana == 0 || $diaSemana == 6 ) {
                                                $logger->w_onError("**********PARA EL CASO DE SABADOS, DOMINGOS, FESTIVOS Y VACACIONES SE MODIFICA EL HORARIO DE DISPONIBILIDAD");
                                                $logger->w_onError("**********FECHA INICIAL: " . $dia . " 08:30:00");
                                                $logger->w_onError("**********FECHA FINAL: " . $dia . " 17:20:00");
                                                $programacionjuzgadoresDto->setFechaInicio($dia . " 08:30:00");
                                                $programacionjuzgadoresDto->setFechaFinal($dia . " 17:20:00");
                                            } else {
                                                $programacionjuzgadoresDto->setFechaInicio($dia . " " . $horario[0]->getHorarioInicial());
                                                $programacionjuzgadoresDto->setFechaFinal($dia . " " . $horario[0]->getHorarioFinal());
                                            }
                                            
                                            $programacionjuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);

                                            $logger->w_onError("**********GUARDAMOS LA PROGRAMACION DEL JUZGADOR");
                                            $programacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();
                                            $auxDto = new ProgramacionjuzgadoresDTO();
                                            $auxDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                                            $auxDto->setIdJuzgador($juzgadores[$index]);
                                            $auxDto = $programacionjuzgadoresDao->selectProgramacionjuzgadores($auxDto, " And FechaInicio>='" . $dia . " " . $horario[0]->getHorarioInicial() . "' And FechaFinal<='" . $dia . " " . $horario[0]->getHorarioFinal() . "'", $this->proveedor);
                                            $logger->w_onError("**********BUSCAMOS SI ESE DIA NO ESTA PROGRAMADO PARA ESE JUZGADOR " . $dia);
                                            if ($auxDto == "") {
                                                if ( ($tipoJuzgado == 2) && ( ($diaSemana == 0) || ($diaSemana == 6) || ($diaFestivo == true)) ) {
                                                    $logger->w_onError("**********NO SE REGISTRA DEBIDO A QUE PARA FINES DE SEMANA O FESTIVOS, SOLO SE PROGRAMA ROL DE URGENTES PARA JUZGADOS DE CONTROL");
                                                } else {
                                                   $programacionjuzgadoresDto = $programacionjuzgadoresDao->insertProgramacionjuzgadores($programacionjuzgadoresDto, $this->proveedor);

                                                    if ($programacionjuzgadoresDto == "") {
                                                        $logger->w_onError("**********NO SE LOGRO REGISTRAR LA PROGRAMACION DEL JUZGADOR " . $dia);
                                                    } 
                                                }
                                                
                                                
                                            } else {
                                                $logger->w_onError("**********NO SE REGISTRA P�RQUE YA EXISTE ESE DIA PROGRAMADO " . $dia);
                                            }
                                        }

                                        if ($diaSemana == 0) {
                                            $logger->w_onError("**********ESTE DIA DOMINGO");
                                            $logger->w_onError("**********GUARDAMOS UN REGISTRO EN EL ULTIMO ROL JUZGADOR");
                                            $ultimoroljuzgadorDto = new UltimoroljuzgadorDTO();
                                            $ultimoroljuzgadorDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                                            $ultimoroljuzgadorDto->setIdJuzgador($juzgadores[$index]);
                                            $ultimoroljuzgadorDto->setNumSemana($numSemana);
                                            $ultimoroljuzgadorDto->setCveRolJuzgador($cveRolJuzgador);
                                            $ultimoroljuzgadorDto->setAparicion($aparicion);

                                            $logger->w_onError("**********BUSCAMOS SI YA TIENE UN ULTIMO ROL REGISTRADO PARA ESA SEMANA");
                                            $logger->w_onError("**********ID JUZGADOR: " . $juzgadores[$index]);
                                            $logger->w_onError("**********NUM SEMANA: " . $numSemana);
                                            $logger->w_onError("**********CVE ROL JUZGADOR: " . $cveRolJuzgador);
                                            $logger->w_onError("**********ID PROGRAMACION: " . $programacionesDto->getIdProgramacion());
                                            $auxUltDto = new UltimoroljuzgadorDTO();
                                            $auxUltDto->setIdJuzgador($juzgadores[$index]);
                                            $auxUltDto->setNumSemana($numSemana);
                                            $auxUltDto->setCveRolJuzgador($cveRolJuzgador);
                                            $auxUltDto->setIdProgramacion($programacionesDto->getIdProgramacion());

                                            $ultimoroljuzgadorDao = new UltimoroljuzgadorDAO();
                                            $auxUltDto = $ultimoroljuzgadorDao->selectUltimoroljuzgador($auxUltDto, "", $this->proveedor);

                                            if ( $auxUltDto == "" && count($auxUltDto) > 0 ) {
                                                $logger->w_onError("**********SE DETERMINA QUE YA EXISTE UN ULTIMO ROL JUZGADOR PARA ESA SEMANA");
                                            } else {
                                                $logger->w_onError("**********SE DETERMINA QUE NO EXISTE UN ULTIMO ROL JUZGADOR PARA ESA SEMANA");
                                                $ultimoroljuzgadorDto = $ultimoroljuzgadorDao->insertUltimoroljuzgador($ultimoroljuzgadorDto, $this->proveedor);

                                                if ($ultimoroljuzgadorDto == "") {
                                                    $logger->w_onError("**********NO SE LOGRO REGISTRAR EL ULTIMO ROL JUZGADOR");
                                                    $error = true;
                                                    $msg[] = array("No se logro registrar el ultimo rol del juzgador");
                                                }
                                            }


                                            if ($indice < (count($secuencias) - 1)) {
                                                $cveRolJuzgador = $secuencias[$indice + 1]["cveRolJuzgador"];
                                                $aparicion = $secuencias[$indice + 1]["aparicion"];
                                                $descansaFinSemana = $secuencias[$indice + 1]["descansaFinSemana"];
                                                $indice++;
                                            } else {
                                                $cveRolJuzgador = $secuencias[0]["cveRolJuzgador"];
                                                $aparicion = $secuencias[0]["aparicion"];
                                                $descansaFinSemana = $secuencias[0]["descansaFinSemana"];
                                                $indice = 0;
                                            }

                                            $logger->w_onError("**********NOS MOVEMOS AL SIGUIENTE ROL DEFINIDO EN LA SECUENCIA");
                                            $logger->w_onError("**********CVEROLJUZGADOR: " . $cveRolJuzgador . " DESC: " . $roles[$cveRolJuzgador] . " APARICION: " . $aparicion . " DESCANSAFINSEMANA: " . $descansaFinSemana . " INDICE: " . $indice);

                                            $numSemana++;
                                        }
                                    }



                                    $logger->w_onError("**********SUMAMOS UN DIA A LA FECHA: " . $dia);
                                    $diaAuxiliarInicial = strtotime('+' . 1 . ' day', strtotime($dia));
                                    if ($error) {
                                        $logger->w_onError("**********LO SACAMOS DEL CICLO YA EN ALGUNO DE LOS PROCESOS OCURRIO UN ERROR");
                                        break;
                                    }
                                }
                            } else {
                                $logger->w_onError("**********El juzgado no cuenta con un horario definido");
                                $msg[] = array("El juzgado no cuenta con un horario definido, favor de verificar");
                                $error=true;
                            }

                            if ($error) {
                                $logger->w_onError("**********LO SACAMOS DEL CICLO YA EN ALGUNO DE LOS PROCESOS OCURRIO UN ERROR");
                                break;
                            }

                            $logger->w_onError("**********CAMBIAMOS DE JUZGADOR");
                        } else {
                            $logger->w_onError("**********EL JUZGADOR NO ESTA MARCADO COMO PROGRAMABLE " . $juzgadores[$index]);
                            $juzgadoresTmp = new JuzgadoresDTO();
                            $juzgadoresDao = new JuzgadoresDAO();
                            $juzgadoresTmp->setIdJuzgador($juzgadores[$index]);
                            $juzgadoresTmp = $juzgadoresDao->selectJuzgadores($juzgadoresTmp, "", $this->proveedor);
                            if ($juzgadoresTmp != "") {
                                $nombreJuzgador = utf8_encode($juzgadoresTmp[0]->getNombre()) . " " . utf8_encode($juzgadoresTmp[0]->getPaterno()) . " " . utf8_encode($juzgadoresTmp[0]->getMaterno());
                                $msg[] = array("El juzgador: " . $nombreJuzgador . " no esta marcado como programable");
                            } else {
                                $error = true;
                                $msg[] = array("Error al consultar los datos del juzgador");
                            }
                        }
                    } else {
                        $logger->w_onError("**********EL JUZGADOR NO SE ENCUENTRA ACTIVO REVISE " . $juzgadores[$index]);
                        $juzgadoresTmp = new JuzgadoresDTO();
                        $juzgadoresDao = new JuzgadoresDAO();
                        $juzgadoresTmp->setIdJuzgador($juzgadores[$index]);
                        $juzgadoresTmp = $juzgadoresDao->selectJuzgadores($juzgadoresTmp, "", $this->proveedor);
                        if ($juzgadoresTmp != "") {
                            $nombreJuzgador = utf8_encode($juzgadoresTmp[0]->getNombre()) . " " . utf8_encode($juzgadoresTmp[0]->getPaterno()) . " " . utf8_encode($juzgadoresTmp[0]->getMaterno());
                            $msg[] = array("El juzgador: " . $nombreJuzgador . " no esta activo");
                        } else {
                            $error = true;
                            $msg[] = array("Error al consultar los datos del juzgador");
                        }
                    }
                }
            } else {
                $error = true;
                $logger->w_onError("**********EL NUMERO DE SECUENCIAS DEFINIDAS NO CORRESPONDE CON EL NUMERO DE JUECES DEFINIDOS PARA EL JUZGADO SECUENCIAS " . (count($secuencias) - 1) . " JUZGADORES " . (count($juzgadores) - 1));
                $msg[] = array("El numero de secuencias definidas no corresponde con el numero de jueces para el juzgado, secuencias: " . (count($secuencias) - 1) . " ,juzgadores: " . (count($juzgadores) - 1));
            }
        } else {
            $error = true;
            $logger->w_onError("**********EL PROGRAMA TERMINA YA QUE EXISTIO UN ERROR EN ALGUNO DE LOS APARTADOS ANTERIORES");
            $logger->w_onError("**********SE APLICARA UN ROLLBACK A LA INFORMACION QUE FUE AFECTADA EN LA TRANSACCION");
        }

        /*
         * Ageragar la programacion de salas
         */
        if ( !$error ) {
            $logger->w_onError("**********INICIA EL REGISTRO DE PROGRAMACION DE SALAS");
            $dto = new ProgramacionSalasDTO();
            $controller = new ProgramacionsalasController();
            $dto = $controller->obtenerProgramacionsalas($programacionesDto, "", $this->proveedor);
            //print_r($dto);
            //echo $dto[0]["Estatus"];
            if ( $dto != "" ) {
                if( count($dto) > 0 ) {
                    for($n = 0; $n < count($dto); $n++){
                        $diaFestivoSalas = false;
                        $logger->w_onError("**********VERIFICAR SI EL REGISTRO EXISTE EN LA BASE DE DATOS**********");
                        if((int)$dto[$n]->getIdDisponibilidadSala() == 0){
                            $logger->w_onError("**********EL ID DE DISPONIBILIDAD SALA ES 0, SIGNIFICA QUE EL REGISTRO NO EXISTE**********");
                            //echo "<br>Se inserta: " . $dto[$n]->getIdProgramacion() . " - " . $dto[$n]->getCveJuzgado() . " - " . $dto[$n]->getCveSala() . " - " . $dto[$n]->getFechaInicio() . " - " . $dto[$n]->getFechaTermino();
                            $diaInicio = explode(" ", $dto[$n]->getFechaInicio());
                            for ($x = 0; $x < count($diasFestivos); $x++) {
                                $diaAuxiliarSala1 = strtotime('+' . 0 . ' day', strtotime($diasFestivos[$x]));
                                $diaAuxiliarSala2 = strtotime('+' . 0 . ' day', strtotime($diaInicio[0]));
                                if ($diaAuxiliarSala1 == $diaAuxiliarSala2) {
                                    $diaFestivoSalas = true;
                                    $logger->w_onError("**********DIA FESTIVO PARA PROGRAMACION DE SALAS");
                                    break;
                                }
                            }
                            $fechaAux = explode("-",$diaInicio[0]);
                            $diaSemanaSalas = date("w", mktime(0, 0, 0, $fechaAux[1], $fechaAux[2], $fechaAux[0]));
                            $programacionSalasDto = new ProgramacionsalasDTO();
                            $logger->w_onError("**********TIPO DE JUZGDO PARA PROGRAMACION DE SALAS: " . $tipoJuzgado);
                            if ( $tipoJuzgado == 1 ) {
                                $logger->w_onError("**********EL JUZGADO ES DE CONTROL, VERIFICAR SI SE DEBE MODIFICAR EL HORARIO DE DISPONIBILIDAD");
                                if ( ($diaFestivoSalas == true) || (int)$diaSemanaSalas == 0 || (int)$diaSemanaSalas == 6 ) {
                                
                                    $logger->w_onError("**********ES FIN DE SEMANA O DIA FESTIVO, SE MODIFICA EL HORARIO DE DISPONIBILIDAD SOLO EN CONTROL");
                                    $logger->w_onError("**********DIA SEMANA: " . $diaSemanaSalas);
                                    if ( count($diaInicio) > 0 ) {
                                        $inicio = $diaInicio[0] . " 08:30:00";
                                        $fin = $diaInicio[0] . " 17:20:00";
                                        $logger->w_onError("**********FECHA INICIO:" . $inicio);
                                        $logger->w_onError("**********FECHA FIN:" . $fin);
                                        $programacionSalasDto->setFechaInicio($inicio);
                                        $programacionSalasDto->setFechaTermino($fin);
                                    } else {
                                        $error = true;
                                        $msg[] = array("Ocurrio un error al obtener la fecha de inicio y fin para la programacion");
                                        $logger->w_onError("**********OCURRIO UN ERROR AL CALCULAR EL HORARIO DE DISPONIBILIDAD");
                                    }
                                } else {
                                    $logger->w_onError("**********DIA SEMANA: " . $diaSemanaSalas);
                                    $logger->w_onError("**********FECHA INICIO:" . $dto[$n]->getFechaInicio());
                                    $logger->w_onError("**********FECHA FIN:" . $dto[$n]->getFechaTermino());
                                    $programacionSalasDto->setFechaInicio($dto[$n]->getFechaInicio());
                                    $programacionSalasDto->setFechaTermino($dto[$n]->getFechaTermino());
                                } 
                            } else {
                                $logger->w_onError("**********EL JUZGADO NO ES DE CONTROL, SE TOMA EL HORARIO DE CONFIGURACION");
                                $logger->w_onError("**********FECHA INICIO:" . $dto[$n]->getFechaInicio());
                                $logger->w_onError("**********FECHA FIN:" . $dto[$n]->getFechaTermino());
                                $programacionSalasDto->setFechaInicio($dto[$n]->getFechaInicio());
                                $programacionSalasDto->setFechaTermino($dto[$n]->getFechaTermino());
                            }
                            
                            
                            $programacionSalasDto->setCveSala($dto[$n]->getCveSala());
                            $programacionSalasDto->setIdProgramacion($dto[$n]->getIdProgramacion());
                            $programacionSalasDto->setCveCondicion($dto[$n]->getCveCondicion());
                            $programacionSalasDto->setCveHorario($dto[$n]->getCveHorario());
                            $logger->w_onError("**********ID DE PROGRAMACION: " . $dto[$n]->getIdProgramacion());
                            $logger->w_onError("**********CVE SALA: " . $dto[$n]->getCveSala());
                            $logger->w_onError("**********CVE CONDICION: " . $dto[$n]->getCveCondicion());
                            $logger->w_onError("**********CVE HORARIO: " . $dto[$n]->getCveHorario());
                            $logger->w_onError("**********FECHA INICIO: " . $dto[$n]->getFechaInicio());
                            $logger->w_onError("**********FECHA TERMINO: " . $dto[$n]->getFechaTermino());
                            if ( $tipoJuzgado != 1 && (($diaFestivoSalas == true) || (int)$diaSemanaSalas == 0 || (int)$diaSemanaSalas == 6) ) {
                                $logger->w_onError("**********NO SE INSERTA EL REGISTRO DEBIDO A QUE NO ES JUZGADO DE CONTROL Y ES FIN DE SEMANA O DIA FESTIVO");
                            } else {
                                $programacionSalasDao = new ProgramacionsalasDAO();
                                $programacionSalasDto = $programacionSalasDao->insertProgramacionsalas($programacionSalasDto, $this->proveedor);
                                if($programacionSalasDto == ""){
                                    $error = true;
                                    $logger->w_onError("**********OCURRI� UN ERROR AL INSERTAR EL REGISTRO DE PROGRAMACION DE SALAS**********");
                                    $msg[] = array("Ocurrio un error al insertar el registro de programacion de salas");
                                } else {
                                    $error = false;
                                    $logger->w_onError("**********EL REGISTRO DE PROGRAMACION DE SALAS FUE INSERTADO CORRECTAMENTE**********");
                                }
                            }
                            
                            if($error){
                                break;
                                $logger->w_onError("**********OCURRI� UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS DE PROGRAMACION DE SALAS, SALIR DEL CICLO Y APLICAR ROLLBACK**********");
                            }
                        }
                    }
                } else {
                    $error = true;
                    $logger->w_onError("**********NO SE ENCONTRARON REGISTROS DE SALAS O NO HAY HORARIOS ASIGNADOS**********");
                    $msg[] = array("No se encontraron registros de salas o no hay horarios asignados");
                }
            } else {
                $error = true;
                $msg[] = array("El juzgado no cuenta con una configuracion de horarios de salas, favor de verificar");
                $logger->w_onError("**********EL JUZGADO NO CUENTA CON CONFIGURACION DE HORARIOS DE SALAS**********");
            }
        }
        //Termina la programacion de salas
        
        /*
         * Guardar el bitacora las acciones realizadas
         */
        if ( !$error ) {
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $bitacoraMovimientosDao = new BitacoramovimientosDAO();
            $cveAccion = 15;
            $observaciones = "INSERT TABLA tblprogramaciones id: " . $programacionesDto->getIdProgramacion();
            $fecha = date("Y-m-d H:i:s");
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($observaciones);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $insertar = $bitacoraMovimientosDao->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if($insertar != "") {
                $error = false;
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al guardar en bitacora el registro de la programacion mensual");
                $logger->w_onError("**********OCURRIO UN ERROR AL GUARDAR EN BITACORA EL REGISTRO DE LA PROGRAMACION MENSUAL");
            }

            $cveAccionJuzgadores = 48;
            $descripcionJuzgadores = "Insercion en tblprogramacionjuzgadores idProgramacion: " . $programacionesDto->getIdProgramacion();
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $bitacoramovimientosDto->setCveAccion($cveAccionJuzgadores);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($descripcionJuzgadores);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $insertarBitacora = $bitacoraMovimientosDao->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if( $insertarBitacora != "" ) {
                $error = false;
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al guardar en bitacora el registro de la programacion de juzgadores");
                $logger->w_onError("**********OCURRIO UN ERROR AL GUARDAR EN BITACORA EL REGISTRO DE LA PROGRAMACION DE JUZGADORES");
            }
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $cveAccionSalas = 17;
            $observacionesSalas = "INSERT TABLA tblprogramacionsalas idProgramacion: " . $programacionesDto->getIdProgramacion();
            $bitacoramovimientosDto->setCveAccion($cveAccionSalas);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($observacionesSalas);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $insertarProgramacionSalas = $bitacoraMovimientosDao->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if ( $insertarProgramacionSalas != "" ) {
                $error = false;
            } else {
                $error = true;
                $msg[] = array("Ocurrio un error al guardar en bitacora el registro de la programacion de salas");
                $logger->w_onError("**********OCURRIO UN ERROR AL GUARDAR EN BITACORA EL REGISTRO DE LA PROGRAMACION DE SALAS");
            }
        }
        
        //fin guardado en bitacora
        
        if ($proveedor == null) {
            if (!$error) {
                $this->proveedor->execute("COMMIT");
                
                $programacionesDao = new ProgramacionesDAO();
                $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto);
                $logger->w_onError("**********EL PROGRAMA TERMINA CORRECTAMENTE");
                $json = new DtoToJson($programacionesDto);
                $json = $json->toJson("PROGRAMACION GENERADA DE FORMA CORRECTA");
                return $json;
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********OCURRIO ALGUN ERROR DURANTE LA TRANSACCION, APLICAR ROLLBACK Y TERMINA EL PROGRAMA");

                return json_encode($msg);
            }
        }


        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }

    public function reporteProgramacionJuzgadores($programacionesDto, $programacionJuzgadoresDto = "", $proveedor = null) {
        $datos = array();
        $result = array();
        $dias = array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $programacionesDao = new ProgramacionesDAO();
        $programacionesDto = $programacionesDao->selectProgramaciones($programacionesDto, "", $this->proveedor);


        if ($programacionesDto != "") {
            $programacionesDto = $programacionesDto[0];

//            $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
//            $juzgadoresjuzgadosDto->setCveJuzgado($programacionesDto->getCveJuzgado());
//            $juzgadoresjuzgadosDto->setActivo("S");
//            if ($programacionJuzgadoresDto->getIdJuzgador() != "") {
//                $juzgadoresjuzgadosDto->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
//            }
//            $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
//            $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " ORDER BY idJuzgador ASC ", $this->proveedor);


            //if ($juzgadoresjuzgadosDto != "") {
                //for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {

//                    $juzgadoresDto = new JuzgadoresDTO();
//                    $juzgadoresDto->setIdJuzgador($juzgadoresjuzgadosDto[$index]->getIdJuzgador());
//                    $juzgadoresDto->setActivo("S");
//                    $juzgadoresDao = new JuzgadoresDAO();
//                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);

                    //if ($juzgadoresDto != "") {
//                        $juzgadoresDto = $juzgadoresDto[0];

                        $programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();
                        $programacionjuzgadoresDto->setIdProgramacion($programacionesDto->getIdProgramacion());
                        if ($programacionJuzgadoresDto->getIdJuzgador() != "") {
                            //$juzgadoresjuzgadosDto->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
                            $programacionjuzgadoresDto->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
                        }
                        if ($programacionJuzgadoresDto->getCveRolJuzgador() != "") {
                            $programacionjuzgadoresDto->setCveRolJuzgador($programacionJuzgadoresDto->getCveRolJuzgador());
                        }
                        if ($programacionJuzgadoresDto->getFechaInicio() != "" && $programacionJuzgadoresDto->getFechaFinal() != "") {
                            $orden = " AND SUBSTRING(fechaInicio, 1, 10) >= '" . $programacionJuzgadoresDto->getFechaInicio() . "' 
                                       AND SUBSTRING(fechaFinal, 1, 10) <= '" . $programacionJuzgadoresDto->getFechaFinal() . "' 
                                    ORDER BY idJuzgador, fechaInicio, fechaFinal";
                        } else {
                            $orden = " ORDER BY idJuzgador, fechaInicio, fechaFinal";
                        }
                        $programacionjuzgadoresDto->setActivo('S');
                        $programacionjuzgadoresDao = new ProgramacionjuzgadoresDAO();

                        $programacionjuzgadoresDto = $programacionjuzgadoresDao->selectProgramacionjuzgadores($programacionjuzgadoresDto, $orden, $this->proveedor);

                        if ($programacionjuzgadoresDto != "") {
                            //echo $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno() . "<br>";

                            foreach ($programacionjuzgadoresDto as $programacionjuzgadorDto) {
                                //echo "Horario: " . $programacionjuzgadorDto->getFechaInicio() . " " . $programacionjuzgadorDto->getFechaFinal() . "<br>";
                                $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
                                $rolesjuzgadoresDto->setCveRolJuzgador($programacionjuzgadorDto->getCveRolJuzgador());
                                $rolesjuzgadoresDto->setActivo("S");
                                $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
                                $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor);
                                if ($rolesjuzgadoresDto != "") {
                                    //echo "ROl: " .  $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "<br>";
                                    $rol = $rolesjuzgadoresDto[0]->getDesRolJuzgador();
                                    $cveRol = $rolesjuzgadoresDto[0]->getCveRolJuzgador();
                                } else {
                                    $rol = "";
                                    $cveRol = 0;
                                }
                                /*
                                 * Datos de los jueces
                                 */
                                $juzgadoresDto = new JuzgadoresDTO();
                                $juzgadoresDto->setIdJuzgador($programacionjuzgadorDto->getIdJuzgador());
                                $juzgadoresDto->setActivo("S");
                                $juzgadoresDao = new JuzgadoresDAO();
                                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);
                                $juzgadoresDto = $juzgadoresDto[0];
                                
                                $fechaAux = explode(" ", $programacionjuzgadorDto->getFechaInicio());
                                $fechaTmp = explode("-", $fechaAux[0]);
                                $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                                $datos[] = array(
                                    "FechaInicio" => $programacionjuzgadorDto->getFechaInicio(),
                                    "FechaFin" => $programacionjuzgadorDto->getFechaFinal(),
                                    "Nombre" => utf8_encode($juzgadoresDto->getNombre()) . " " . utf8_encode($juzgadoresDto->getPaterno()) . " " . utf8_encode($juzgadoresDto->getMaterno()),
                                    "idProgramacionJuzgador" => $programacionjuzgadorDto->getIdProgramacionJuzgador(),
                                    "IdJuzgador" => $juzgadoresDto->getIdJuzgador(),
                                    "cveRolJuzgador" => $cveRol,
                                    "Rol" => $rol,
                                    "Dia" => $dias[$diaSemana]
                                );
                            }
                        }
                    //}
                //}
            //}
        } else {
            //echo "No existe una programacion para este juzgado";
            $datos = null;
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
        if (count($datos) > 0) {
            array_multisort($datos, SORT_ASC);
        }
        return $datos;
    }

    public function obtenerJuzgadores($juzgadoresjuzgadosDto, $proveedor = null) {//$fechaInicial,$fechaFinal
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $error = false;
        $juzgadores = array();

//        $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, "", $this->proveedor);

        if ($juzgadoresjuzgadosDto != "") {
            for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDto->setIdJuzgador($juzgadoresjuzgadosDto[$index]->getIdJuzgador());
                $juzgadoresDto->setActivo("S");
                $juzgadoresDto->setSorteo("S");
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $this->proveedor);

                if ($juzgadoresDto != "") {
                    for ($x = 0; $x < count($juzgadoresDto); $x++) {
                        $juzgadores[] = array("idJuzgador" => $juzgadoresDto[$x]->getIdJuzgador(), "sorteo" => $juzgadoresDto[$x]->getSorteo(), "cveTipoJuzgador" => $juzgadoresDto[$x]->getCveTipoJuzgador(), "cveEspecialidad" => $juzgadoresDto[$x]->getCveEspecialidad());
                    }
                }
            }
        } else {
            $error = true;
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }

        if (!$error) {
            return $juzgadores;
        }
    }

    public function buscaProgramacionJuez($idJuzgador, $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();
        $programacionjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
        $programacionjuzgadoresDto->setIdJuzgador($idJuzgador);

        $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
        $programacionjuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionjuzgadoresDto, " AND fechaInicio<='" . $fechaInicio . "' AND fechaFinal>='" . $fechaFinal . "' ", $proveedor);

        if ($proveedor == null) {
            $this->proveedor->close();
        }

        if ($programacionjuzgadoresDto != "") {
            return true;
        } else {
            return false;
        }
    }

    public function juezParaSorteo($idJuzgador, $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();
        $programacionjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
        $programacionjuzgadoresDto->setIdJuzgador($idJuzgador);

        $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
        $programacionjuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionjuzgadoresDto, " AND fechaFinal>='" . $fechaInicio . "' AND fechaInicio<='" . $fechaFinal . "' ", $proveedor);

        if ($proveedor == null) {
            $this->proveedor->close();
        }

        if ($programacionjuzgadoresDto != "") {
            return true;
        } else {
            return false;
        }
    }

    public function buscaDisponibilidadJuez($idJuzgador, $fechaInicio, $fechaFinal, $proveedor = null) { //Este metodo me ayuda a saber si un juez tiene audiencias asignadas
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $disponible = false;
        /* ((A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "') 
          or (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "')
          or (A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>'" . $fechaFinal . "')
          or (A.fechaInicial< '" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "')) */
        /* $sql = "SELECT A.idAudiencia FROM htsj_sigejupe.tblaudiencias A,tblaudienciasjuzgador AJ 
          Where ((A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaFinal>='" . $fechaInicio . "') or
          (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' And A.fechaInicial<='" . $fechaFinal . "') or
          (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "') or
          (A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>'" . $fechaFinal . "')
          ) And AJ.idJuzgador='" . $idJuzgador . "'
          And AJ.idAudiencia=A.idAudiencia"; */

        $sql = " SELECT * FROM htsj_sigejupe.tblaudiencias A,tblaudienciasjuzgador AJ 
 Where 
 ((A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "') or
  (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "') or 
  (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "') or
  (A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "') 
 )
 And AJ.idJuzgador='" . $idJuzgador . "' And AJ.idAudiencia=A.idAudiencia;";

        //or (A.fechaInicial< '" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "')
        $this->proveedor->execute($sql);
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) <= 0) {
                $disponible = true;
            } else {
                $disponible = false;
            }
        } else {
            $disponible = false;
        }

        return $disponible;
    }

    public function listaJuzgadores($juzgadoresjuzgadosDto, $esSecretario = '', $proveedor = null) {
        $datos = array();
        $juzgadores = array();
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, "", $this->proveedor);


        if ($juzgadoresjuzgadosDto != "") {
            for ($j = 0; $j < count($juzgadoresjuzgadosDto); $j++) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDto->setIdJuzgador($juzgadoresjuzgadosDto[$j]->getIdJuzgador());
                $juzgadoresDto->setActivo("S");
                if ( $esSecretario != "" && $esSecretario == "S" ) {
                    $juzgadoresDto->setCveTipoJuzgador(6);//fix secretario de sala
                }
                $juzgadoresDao = new JuzgadoresDAO();
                $orden = " ORDER BY nombre";
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, $orden, $this->proveedor);
                if ($juzgadoresDto != "") {
                    for ($s = 0; $s < count($juzgadoresDto); $s++) {
                        $datos[] = array(
                            "nombre" => utf8_encode($juzgadoresDto[$s]->getNombre()),
                            "paterno" => utf8_encode($juzgadoresDto[$s]->getPaterno()),
                            "materno" => utf8_encode($juzgadoresDto[$s]->getMaterno()),
                            "idJuzgador" => $juzgadoresDto[$s]->getIdJuzgador(),
                            "cveTipoJuzgador" => $juzgadoresDto[$s]->getCveTipoJuzgador(),
                            "titulo" => utf8_encode($juzgadoresDto[$s]->getTitulo())
                        );
                    }
                }
            }
        } else {
            $datos = null;
        }
        if (count($datos) > 0) {
            asort($datos);
        }
        return $datos;
    }

    public function bajaProgramacionJuzgadoresManual($programacionesDto, $programacionJuzgadoresDto, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $mensajeError = "";
        $logger = new Logger("/../../logs/", "ProgramacionJuzgadores");
        $logger->w_onError("**********COMIENZA EL PROCESO DE BORRADO FISICO DE PROGRAMACION JUZGADORES**********");
        $idProgramacionjuzgadores = array();
        $dias = array();
        $error = true;
        $programacionDto = new ProgramacionesDTO();
        $programacionesController = new ProgramacionesController();
        $programacionDto = $programacionesController->selectProgramaciones($programacionesDto);
        $logger->w_onError("**********BUSCAMOS LA PROGRAMACION MENSUAL CON LOS DATOS ENVIADOS:");
        $logger->w_onError("**********JUZGADO : " . $programacionesDto->getCveJuzgado());
        $logger->w_onError("**********MES : " . $programacionesDto->getCveMes());
        $logger->w_onError("**********AÑO : " . $programacionesDto->getAnio());
        $daoBitacora = new BitacoramovimientosDAO();
        if ($programacionDto != "") {
            $programacionDto = $programacionDto[0];
            $logger->w_onError("**********SE OBTUVO EL ID DE PROGRAMACION : " . $programacionDto->getIdProgramacion());
            $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE BORRADO");
            $fechaInicial = $programacionJuzgadoresDto->getFechaInicio();
            $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
            $fechaFinal = $programacionJuzgadoresDto->getFechaFinal();
            $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);
            while ($fechaInicial <= $fechaFinal) {
                $dias[] = $fechaInicial;
                $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicial));
                $fechaInicial = date('Y-m-d', $fechaInicialTmp);
            }
            //print_r($dias);
            $programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();
            $programacionjuzgadoresDto->setCveRolJuzgador($programacionJuzgadoresDto->getCveRolJuzgador());
            $programacionjuzgadoresDto->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
            $programacionjuzgadoresDto->setIdProgramacion($programacionDto->getIdProgramacion());
            $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
            $programacionjuzgadoresDto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacionjuzgadoresDto, ' ORDER BY fechaInicio ', $this->proveedor);
            $logger->w_onError("**********CONSULTAMOS LOS REGISTROS DE LA TABLA PROGRAMACION JUZGADORES");
            $logger->w_onError("**********CVE ROL JUZGADOR: " . $programacionJuzgadoresDto->getCveRolJuzgador());
            $logger->w_onError("**********ID JUZGADOR: " . $programacionJuzgadoresDto->getIdJuzgador());
            $logger->w_onError("**********ID PROGRAMACION: " . $programacionDto->getIdProgramacion());
            if ($programacionjuzgadoresDto != "") {
                $logger->w_onError("**********SE ENCONTRARON RESULTADOS, CONTINUAMOS CON EL PROCESO");
                for ($n = 0; $n < count($programacionjuzgadoresDto); $n++) {
                    $dia = $programacionjuzgadoresDto[$n]->getFechaInicio();
                    //echo $dia . "<br>";
                    $fechaInicio = explode(" ", $dia);
                    $fechaTmp = $fechaInicio[0];
                    //echo $fechaTmp . "<br>";
                    if (in_array($fechaTmp, $dias)) {
                        $daoProgramacionJuzgadores = new ProgramacionjuzgadoresDAO();
                        $eliminar = $daoProgramacionJuzgadores->deleteProgramacionjuzgadores($programacionjuzgadoresDto[$n]);
                        if ($eliminar) {
                            $error = false;
                            $idProgramacionjuzgadores[] = $programacionjuzgadoresDto[$n]->getIdProgramacionJuzgador();
                            $logger->w_onError("**********SE BORRA FISICAMENTE EL REGISTRO CON ID DE PROGRAMACION JUZGADORES: " . $programacionjuzgadoresDto[$n]->getIdProgramacionJuzgador());
                            $fecha = date("Y-m-d H:i:s");
                            $cveAccion = 50;
                            $descripcion = "borrado fisico en tblprogramacionjuzgadores: " . json_encode($programacionjuzgadoresDto[$n]->toString());
                            
                            $bitacoramovimientosDto = new BitacoramovimientosDTO();
                            $bitacoramovimientosDto->setCveAccion($cveAccion);
                            $bitacoramovimientosDto->setFechaMovimiento($fecha);
                            $bitacoramovimientosDto->setObservaciones($descripcion);
                            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                            
                            $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                            if ( $insertarBitacora == "" ) {
                                $error = true;
                                $mensajeError = "OCURRIO UN ERROR AL REGISTRAR EN BITACORA LA ACCION REALIZADA POR EL USUARIO";
                                $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR EN BITACORA LA ACCION REALIZADA POR EL USUARIO ");
                            }
                        } else {
                            $error = true;
                            $logger->w_onError("**********ERROR AL BORRAR FISICAMENTE EL REGISTRO CON ID DE PROGRAMACION JUZGADORES: " . $programacionjuzgadoresDto[$n]->getIdProgramacionJuzgador());
                            $mensajeError = "NO SE PUDO BORRAR FISICAMENTE EL REGISTRO";
                        }
                    } else {
                        $logger->w_onError("**********NO SE DEBEN ELIMINAR LOS REGISTROS DE PROGRAMACIONES EN LA FECHA: " . $fechaTmp);
                        continue;
                        $mensajeError = "NO HAY DATOS A ELIMINAR";
                    }
                    if ($error) {
                        break;
                    }
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE ENCONTRARON RESULTADOS EN LA TABLA PROGRAMACION JUZGADORES, TERMINA EL PROCESO");
                $mensajeError = "NO HAY DATOS A ELIMINAR";
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE ENCONTRO EL ID DE PROGRAMACION, TERMINA EL PROCESO");
            $mensajeError = "NO SE ENCONTRO LA PROGRAMACION PARA EL JUZGADO, MES Y A�O SELECCIONADOS";
        }
        if ($proveedor == null) {
            if (!$error) {
                $this->proveedor->execute("COMMIT");
//                $fecha = date("Y-m-d H:i:s");
//                $cveAccion = 50;
//                $programacionJuzgadores = implode(",", $idProgramacionjuzgadores);
//                $descripcion = "borrado fisico en tblprogramacionjuzgadores idProgramacionJuzgadores: " . $programacionJuzgadores;
//                $bitacoramovimientosDto = new BitacoramovimientosDTO();
//                $bitacoramovimientosDto->setCveAccion($cveAccion);
//                $bitacoramovimientosDto->setFechaMovimiento($fecha);
//                $bitacoramovimientosDto->setObservaciones($descripcion);
//                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
//                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
//                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
//                $daoBitacora = new BitacoramovimientosDAO();
//                $insertarBitacora = $daoBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS ELIMINADOS DE FORMA CORRECTA"));
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********OCURRIO UN ERROR, SE DESHACEN LOS CAMBIOS EN LA BASE DE DATOS Y TERMINA EL PROCESO");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL BORRAR LOS REGISTROS: " . $mensajeError));
            }
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }

    public function altaProgramacionJuzgadoresManual($programacionDto, $programacionJuzgadoresDto, $proveedor = null) {
        $error = false;
        $year = "";
        $mes = "";
        $dias = array();
        $diasFestivos = array();
        $secuencias = array();
        $juzgadores = array();
        $roles = array();
        $horaInicio = "";
        $horaFin = "";
        $mensajeError = "";
        $idProgramacionesInsert = array();
        $idProgramacionesUpdate = array();
        $logger = new Logger("/../../logs/", "ProgramacionJuzgadores");
        $logger->w_onError("**********COMIENZA EL PROCESO MANUAL DE PROGRAMACION DE JUZGADORES**********");
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }

        $logger->w_onError("**********OBTENEMOS LA INFORMACION DE LA TABLA DE PROGRAMACIONES DEL MES SOLICITADO");
        $logger->w_onError("**********DATOS PARA LA BUSQUEDA");
        $programacionesDto = new ProgramacionesDTO();
        $programacionesController = new ProgramacionesController();
        $programacionesDto = $programacionesController->selectProgramaciones($programacionDto);

        if ($programacionesDto != "") {
            $programacionesDto = $programacionesDto[0];
            $logger->w_onError("**********SE OBTUVO EL ID DE PROGRAMACION : " . $programacionesDto->getIdProgramacion());
            $logger->w_onError("**********JUZGADO : " . $programacionesDto->getCveJuzgado());
            $logger->w_onError("**********MES : " . $programacionesDto->getCveMes());
            $logger->w_onError("**********A�O : " . $programacionesDto->getAnio());
            $logger->w_onError("**********SE DETERMINAN LAS FECHAS DE INICIO Y FIN PARA REALIZAR EL CICLO DE REGISTRO");
            $fechaInicial = $programacionJuzgadoresDto->getFechaInicio();
            $fechaInicialAux = explode(" ", $fechaInicial);
            $fechaInicioAux = $fechaInicialAux[0];
            $horaInicioAux = $fechaInicialAux[1];
            $logger->w_onError("**********FECHA INICIAL : " . $fechaInicial);
            $fechaFinal = $programacionJuzgadoresDto->getFechaFinal();
            $fechaFinalAux = explode(" ", $fechaFinal);
            $fechaFinAux = $fechaFinalAux[0];
            $horaFinAux = $fechaFinalAux[1];
            $logger->w_onError("**********FECHA FINAL : " . $fechaFinal);
            $logger->w_onError("**********BUSCAMOS LOS DIAS FESTIVOS EN GESTION");
            $calendario = new Calendario();
            $strJSON = "{";
            $strJSON .= "\"type\": \"select\",";
            $strJSON .= "\"calendario\": {";
            $strJSON .= "\"idDiasFestivos\": \"\",";
            $strJSON .= "\"Tipo\": \"\",";
            $strJSON .= "\"Fecha\": \"\",";
            $strJSON .= "\"Descripcion\": \"\"";
            $strJSON .= "},";
            $strJSON .= "\"params\": {";
            $strJSON .= "\"FechaInicio\": \"" . $fechaInicioAux . "\","; // ejem. 2015-07-01
            $strJSON .= "\"FechaFin\": \"" . $fechaFinAux . "\","; // ejem. 2015-07-31
            $strJSON .= "\"Orden\": \"Fecha ASC\""; // Fecha ASC
            $strJSON .= "}";
            $strJSON .= "}";
            $logger->w_onError("**********JSON DE PETICION: " . $strJSON);
            $festivos = $calendario->getCalendario($strJSON);
            $logger->w_onError("**********JSON DE RESPUESTA: " . $festivos);

            $json = new Decode_JSON();
            $festivos = $json->decode($festivos, true);

            for ($index = 0; $index < count($festivos["data"]); $index++) {
                $diasFestivos[] = $festivos["data"][$index]->Fecha;
            }
            //print_r($diasFestivos);

            $logger->w_onError("**********BUSCAMOS EL HORARIO ASIGANDO AL JUZGADOR EN LA TABLA CONFIGURACIONES JUZGADORES");
            $configuracioinesJuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
            $configuracioinesJuzgadoresDto->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
            $configuracioinesJuzgadoresDto->setActivo("S");
            $configuracionesJuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
            $configuracioinesJuzgadoresDto = $configuracionesJuzgadoresDao->selectConfiguracionesjuzgadores($configuracioinesJuzgadoresDto);
            if ($configuracioinesJuzgadoresDto != "") {
                for ($c = 0; $c < count($configuracioinesJuzgadoresDto); $c++) {
                    $horariosjuzgadoresDto = new HorariosjuzgadoresDTO();
                    $horariosjuzgadoresDto->setIdHorarioJuzgador($configuracioinesJuzgadoresDto[$c]->getIdHorarioJuzgador());
                    $horariosjuzgadoresDto->setCveJuzgado($programacionesDto->getCveJuzgado());
                    $horariosjuzgadoresDto->setActivo("S");
                    $horariosJuzgadoresDao = new HorariosjuzgadoresDAO();
                    $horariosjuzgadoresDto = $horariosJuzgadoresDao->selectHorariosjuzgadores($horariosjuzgadoresDto);
                    if ($horariosjuzgadoresDto != "") {
                        $horaInicio = $horariosjuzgadoresDto[0]->getHorarioInicial();
                        $horaFin = $horariosjuzgadoresDto[0]->getHorarioFinal();
                    } else {
                        $error = true;
                        $logger->w_onError("**********NO SE ENCONTRO EL HORARIO ASIGNADO AL JUZGADOR, TERMINA EL PROCESO");
                        $mensajeError = "NO SE ENCONTRO EL HORARIO ASIGNADO AL JUZGADOR";
                    }
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE ENCONTRO LA CONFIGURACION ASIGNADA AL JUZGADOR, TERMINA EL PROCESO");
                $mensajeError = "NO SE ENCONTRO LA CONFIGURACION DE HORARIOS ASIGNADA AL JUZGADOR";
            }
            if ($horaInicio != "" && $horaFin != "") {
                $logger->w_onError("**********HORA INICIAL: " . $horaInicio);
                $logger->w_onError("**********HORA FINAL: " . $horaFin);
                while ($fechaInicioAux <= $fechaFinAux) {
                    $fechaTmp = explode("-", $fechaInicioAux);
                    $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));
                    //Si el rol es despacho
                    if ($programacionJuzgadoresDto->getCveRolJuzgador() == 3) {
                        //si es s�bado o domingo se omiten esos d�as ya que los jueces de despacho solo laboran de lunes a viernes
                        if ($diaSemana > 0 && $diaSemana < 6) {
                            if (!in_array($fechaInicioAux, $diasFestivos)) {
                                $dias[] = $fechaInicioAux;
                            } else {
                                $logger->w_onError("**********ES DIA FESTIVO: " . $fechaInicioAux);
                            }
                        } else {
                            $logger->w_onError("**********ES FIN DE SEMANA: " . $fechaInicioAux);
                        }
                    } else if ($programacionJuzgadoresDto->getCveRolJuzgador() == 1 || $programacionJuzgadoresDto->getCveRolJuzgador() == 2) {
                        //Si el rol es programadas o turno, no se validan dias festivos ni fines de semana
                        $dias[] = $fechaInicioAux;
                    }

                    $fechaInicialTmp = strtotime('+1 day', strtotime($fechaInicioAux));
                    $fechaInicioAux = date('Y-m-d', $fechaInicialTmp);
                }
                if (count($dias) > 0) {
                    for ($n = 0; $n < count($dias); $n++) {
                        $programacion = new ProgramacionjuzgadoresDTO();
                        $programacion->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
                        $programacion->setCveRolJuzgador($programacionJuzgadoresDto->getCveRolJuzgador());
                        $programacion->setFechaInicio($dias[$n]);
                        $programacion->setFechaFinal($dias[$n]);
                        $programacion->setActivo("S");
                        $programacion->setIdProgramacion($programacionesDto->getIdProgramacion());
                        $programacionJuzgadoresDao = new ProgramacionjuzgadoresDAO();
                        $dto = new ProgramacionjuzgadoresDTO();
                        $dto = $programacionJuzgadoresDao->selectProgramacionjuzgadores($programacion, "", $this->proveedor);
                        //print_r($dto);
                        if ($dto == "") {
                            $fechaHoraInicio = $dias[$n] . " " . $horaInicio;
                            $fechaHoraFin = $dias[$n] . " " . $horaFin;
                            $programacion = new ProgramacionjuzgadoresDTO();
                            $programacion->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
                            $programacion->setCveRolJuzgador($programacionJuzgadoresDto->getCveRolJuzgador());
                            $programacion->setFechaInicio($fechaHoraInicio);
                            $programacion->setFechaFinal($fechaHoraFin);
                            $programacion->setActivo("S");
                            $programacion->setIdProgramacion($programacionesDto->getIdProgramacion());
                            $programacion = $programacionJuzgadoresDao->insertProgramacionjuzgadores($programacion, $this->proveedor);
                            //$programacion = "";
                            if ($programacion != "") {
                                $error = false;
                                $idProgramacionesInsert[] = $programacion[0]->getIdProgramacionJuzgador();
                                $logger->w_onError("**********SE AGREGA EL REGISTRO CON ID DE PROGRAMACION JUZGADORES: " . $programacion[0]->getIdProgramacionJuzgador());
                            } else {
                                $error = true;
                                $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR EL REGISTRO");
                                $logger->w_onError("**********ID JUZGADOR: " . $programacionJuzgadoresDto->getIdJuzgador());
                                $logger->w_onError("**********CVE ROL JUZGADOR: " . $programacionJuzgadoresDto->getCveRolJuzgador());
                                $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                                $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                                $logger->w_onError("**********ID PROGRAMACION: " . $programacionesDto->getIdProgramacion());
                                $mensajeError = "OCURRIO UN ERROR AL INSERTAR EL REGISTRO";
                            }
                            if ($error) {
                                break;
                                $logger->w_onError("**********OCURRIO UN ERROR AL INSERTAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                            }
                        } else {
                            $logger->w_onError("**********EL ID DE PROGRAMACION DEL JUZGADOR ES " . $dto[0]->getIdProgramacionJuzgador() . ", SE ACTUALIZARAN LOS DATOS");
                            $fechaHoraInicio = $dias[$n] . " " . $horaInicioAux;
                            $fechaHoraFin = $dias[$n] . " " . $horaFinAux;
                            $programacion = new ProgramacionjuzgadoresDTO();
                            $programacion->setIdProgramacionJuzgador($dto[0]->getIdProgramacionJuzgador());
                            $programacion->setIdJuzgador($programacionJuzgadoresDto->getIdJuzgador());
                            $programacion->setCveRolJuzgador($programacionJuzgadoresDto->getCveRolJuzgador());
                            $programacion->setFechaInicio($fechaHoraInicio);
                            $programacion->setFechaFinal($fechaHoraFin);
                            $programacion->setActivo("S");
                            $programacion->setIdProgramacion($programacionesDto->getIdProgramacion());
                            $logger->w_onError("**********ID JUZGADOR: " . $programacionJuzgadoresDto->getIdJuzgador());
                            $logger->w_onError("**********CVE ROL JUZGADOR: " . $programacionJuzgadoresDto->getCveRolJuzgador());
                            $logger->w_onError("**********FECHA INICIAL: " . $fechaHoraInicio);
                            $logger->w_onError("**********FECHA FINAL: " . $fechaHoraFin);
                            $logger->w_onError("**********ID PROGRAMACION: " . $programacionesDto->getIdProgramacion());
                            $logger->w_onError("**********ID PROGRAMACION JUZGADORES: " . $dto[0]->getIdProgramacionJuzgador());

                            $programacion = $programacionJuzgadoresDao->updateProgramacionjuzgadores($programacion, $this->proveedor);
                            if ($programacion != "") {
                                $error = false;
                                $logger->w_onError("**********EL REGISTRO FUE ACTUALIZADO CORRECTAMENTE");
                                $idProgramacionesUpdate[] = $programacion[0]->getIdProgramacionJuzgador();
                                $fecha = date("Y-m-d H:i:s");
                                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                                
                                $cveAccion = 49;
                                $descripcion = "UPDATE tabla tblprogramacionjuzgadores registro original: " . json_encode($dto[0]->toString()) . " ,registro modificado: " . json_encode($programacion[0]->toString());
                                $bitacoramovimientosDto->setCveAccion($cveAccion);
                                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                                $bitacoramovimientosDto->setObservaciones($descripcion);
                                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                                $controllerBitacora = new BitacoramovimientosController();
                                $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
                                if ( $insertarBitacora == "" ) {
                                    $error = true;
                                    $mensajeError = "OCURRIO UN ERROR AL REGISTRAR EN BITACORA LA ACCION REALIZADA POR EL USUARIO";
                                    $logger->w_onError("**********OCURRIO UN ERROR AL REGISTRAR EN BITACORA");
                                }
                            } else {
                                $error = true;
                                $logger->w_onError("**********ERROR AL ACTUALIZAR EL REGISTRO");
                                $mensajeError = "NO SE PUDO ACTUALIZAR EL REGISTRO";
                            }
                            if ($error) {
                                break;
                                $logger->w_onError("**********OCURRIO UN ERROR AL ACTUALIZAR ALGUNO DE LOS REGISTROS, SALIR DEL CICLO Y APLICAR ROLLBACK");
                            }
                        }
                    }
                } else {
                    $error = true;
                    $logger->w_onError("**********SE DETERMINA QUE NO SE PUEDE REALIZAR LA PROGRAMACI�N EN LOS D�AS SELECCIONADOS");
                    $logger->w_onError("**********PROBABLEMENTE SE INTENTA GUARDAR UN ROL PROGRAMADAS O DESPACHO EN FINES DE SEMANA O EN DIAS FESTIVOS");
                    $mensajeError = "NO SE PUEDEN INSERTAR LOS REGISTROS EN LAS FECHAS SELECCIONADAS, NOTA: PARA EL ROL PROGRAMADAS NO SE PUEDEN AGREGAR REGISTROS EN FINES DE SEMANA Y DIAS FESTIVOS";
                }
            } else {
                $error = true;
                $logger->w_onError("**********NO SE PUEDEN INSERTAR LOS REGISTROS ENTRE LAS FECHAS SELECIONADAS");
                $mensajeError = "NO SE PUEDEN GUARDAR LOS DATOS DEBIDO A QUE EL JUZGADOR SELECCIONADO NO CUENTA CON CONFIGURACION DE HORARIO, PARA ELLO INGRESE AL MENU HERRAMIENTAS / HORARIOS DE LOS JUZGADORES";
            }
        } else {
            $error = true;
            $logger->w_onError("**********NO SE ENCONTRO EL ID DE PROGRAMACION, TERMINA EL PROCESO");
            $mensajeError = "NO SE ENCONTRO LA PROGRAMACION PARA EL JUZGADO, MES Y A�O SELECCIONADOS";
        }
        if ($proveedor == null) {
            if (!$error) {
                $this->proveedor->execute("COMMIT");
                if (count($idProgramacionesInsert) > 0) {
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $registrosInsert = implode(",", $idProgramacionesInsert);
                    $cveAccion = 48;
                    $descripcion = "INSERT tabla tblprogramacionjuzgadores registros: " . $registrosInsert;
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fecha);
                    $bitacoramovimientosDto->setObservaciones($descripcion);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosController();
                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                } else if (count($idProgramacionesUpdate) > 0) {
//                    $fecha = date("Y-m-d H:i:s");
//                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
//                    $registrosInsert = implode(",", $idProgramacionesUpdate);
//                    $cveAccion = 49;
//                    $descripcion = "UPDATE tabla tblprogramacionjuzgadores registros: " . $registrosInsert;
//                    $bitacoramovimientosDto->setCveAccion($cveAccion);
//                    $bitacoramovimientosDto->setFechaMovimiento($fecha);
//                    $bitacoramovimientosDto->setObservaciones($descripcion);
//                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
//                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
//                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
//                    $controllerBitacora = new BitacoramovimientosController();
//                    $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                }

                $logger->w_onError("**********EL PROCESO TERMINA CORRECTAMENTE");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS GUARDADOS DE FORMA CORRECTA"));
            } else {
                $this->proveedor->execute("ROLLBACK");
                $logger->w_onError("**********OCURRIO UN ERROR, SE DESHACEN LOS CAMBIOS EN LA BASE DE DATOS Y TERMINA EL PROCESO");
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL INSERTAR LOS REGISTROS: " . $mensajeError));
            }
        }

        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }
    
    public function permutarJuzgadores($programacionjuzgadoresDto, $programacionesDto, $param, $proveedor = null) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }
        $fechaActual = "";
        $this->proveedor->execute("SELECT NOW() AS fechaActual");
        
        if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
            while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                $fechaActual = $row["fechaActual"];
            }
        } else {
            $fechaActual = date("Y-m-d H:i:s");
        }
        
        $error = false;
        $msg = array();
        $result = array();
        $anio = 0;
        $idProgramaciones = array();
        $idProgramacionRol = array();
        $cadenaIdProgramacion = "";
        $cadenaIdProgramacionRol = "";
        $idProgramacionJuzgadores = array();
        $fechaAux = explode("-", (string)$programacionjuzgadoresDto->getFechaInicio());
        if ( $fechaAux != null && $fechaAux != "" ) {
            $anio = $fechaAux[0];
        } else {
            $anio = date("Y");
        }
        $programacionDto = new ProgramacionesDTO();
        $programacionDao = new ProgramacionesDAO();
        $programacionDto->setCveJuzgado($programacionesDto->getCveJuzgado());
        $programacionDto->setAnio($anio);
        
        $programacionDto = $programacionDao->selectProgramaciones($programacionDto, "", $this->proveedor);
        if ( $programacionDto != "" ) {
            /*
             * Actualizar los registros de programacion de juzgadores donde $programacionjuzgadoresDto->getIdJuzgador()
             * sera reemplazado por $param[idJuzgadorDestino] a partir de la fecha inicial 
             */
            $error = false;
            foreach ( $programacionDto as $programacion ) {
                if ( !in_array($programacion->getIdProgramacion(), $idProgramaciones) ) {
                    $idProgramaciones[] = $programacion->getIdProgramacion();
                }
            }
            $cadenaIdProgramacion = implode(",", $idProgramaciones);
            
            $programacionJuzgadrDto = new ProgramacionjuzgadoresDTO();
            $programacionJuzgadrDao = new ProgramacionjuzgadoresDAO();

            $programacionJuzgadrDto->setIdJuzgador($programacionjuzgadoresDto->getIdJuzgador());
            $programacionJuzgadrDto->setActivo('S');
            $order = " AND CAST(fechaInicio AS DATE) >= CAST('" . $programacionjuzgadoresDto->getFechaInicio() . "' AS DATE) AND idProgramacion IN(" . $cadenaIdProgramacion . ") ORDER BY fechaInicio";

            $programacionJuzgadrDto = $programacionJuzgadrDao->selectProgramacionjuzgadores($programacionJuzgadrDto, $order, $this->proveedor);
            //var_dump($programacionJuzgadrDto);
            if ( $programacionJuzgadrDto != "" ) {
                foreach ( $programacionJuzgadrDto as $programacionJuzgador ) {
                    if ( !in_array($programacionJuzgador->getIdProgramacion(), $idProgramacionRol) ) {
                        $idProgramacionRol[] = $programacionJuzgador->getIdProgramacion();
                    }
                    $programacionJuzgadoresTmp = new ProgramacionjuzgadoresDTO();
                    $programacionJuzgadoresTmp->setIdProgramacionJuzgador($programacionJuzgador->getIdProgramacionJuzgador());
                    $programacionJuzgadoresTmp->setIdJuzgador($param['idJuzgadorDestino']);
                    $programacionJuzgadoresTmp->setCveRolJuzgador($programacionJuzgador->getCveRolJuzgador());
                    $programacionJuzgadoresTmp->setFechaInicio($programacionJuzgador->getFechaInicio());
                    $programacionJuzgadoresTmp->setFechaFinal($programacionJuzgador->getFechaFinal());
                    $programacionJuzgadoresTmp->setActivo($programacionJuzgador->getActivo());
                    $programacionJuzgadoresTmp->setFechaActualizacion($fechaActual);
                    $programacionJuzgadoresTmp->setIdProgramacion($programacionJuzgador->getIdProgramacion());
                    $programacionJuzgadoresTmp = $programacionJuzgadrDao->updateProgramacionjuzgadores($programacionJuzgadoresTmp, $this->proveedor);
                    if ( $programacionJuzgadoresTmp == "" ) {
                        $error = true;
                        $msg[] = array("Ocurrio un error al actualziar la programacion de juzgadores para el juez seleccionado");
                    } else {
                        $error = false;
                        $idProgramacionJuzgadores[] = $programacionJuzgadoresTmp[0]->getIdProgramacionJuzgador();
                    }
                    if ( $error ) {
                        break;
                    }
                }
                $cadenaIdProgramacionRol = implode(",", $idProgramacionRol);
            } else {
                //$error = true;
                $msg[] = array("No se encontraron datos de programacion de juzgadores para el juez y juzgado a partir de la fecha seleccionada");
            }
            
            /*
             * Actualizar la configuracion de horario donde $programacionjuzgadoresDto->getIdJuzgador()
             * sera reemplazado por $param[idJuzgadorDestino]
             */
            if ( !$error ) {
                $horariosJuzgadoresDto = new HorariosjuzgadoresDTO();
                $horariosJuzgadoresDao = new HorariosjuzgadoresDAO();
                $configuracionesJuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
                $horariosJuzgadoresDto->setCveJuzgado($programacionesDto->getCveJuzgado());
                $horariosJuzgadoresDto->setActivo('S');
                $horariosJuzgadoresDto = $horariosJuzgadoresDao->selectHorariosjuzgadores($horariosJuzgadoresDto, "", $this->proveedor);
                if ( $horariosJuzgadoresDto != "" ) {
                    foreach ( $horariosJuzgadoresDto as $horario ) {
                        $configuracionesJuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
                        $configuracionesJuzgadoresDto->setIdHorarioJuzgador($horario->getIdHorarioJuzgador());
                        $configuracionesJuzgadoresDto->setIdJuzgador($programacionjuzgadoresDto->getIdJuzgador());
                        $configuracionesJuzgadoresDto->setActivo('S');
                        $configuracionesJuzgadoresDto = $configuracionesJuzgadoresDao->selectConfiguracionesjuzgadores($configuracionesJuzgadoresDto, "", $this->proveedor);
                        if ( $configuracionesJuzgadoresDto != "" ) {
                            foreach ( $configuracionesJuzgadoresDto as $configuracion ) {
                                $configuracionesTmp = new ConfiguracionesjuzgadoresDTO();
                                $configuracionesTmp->setIdConfiguracionJuzgador($configuracion->getIdConfiguracionJuzgador());
                                $configuracionesTmp->setIdHorarioJuzgador($configuracion->getIdHorarioJuzgador());
                                $configuracionesTmp->setActivo('S');
                                $configuracionesTmp->setIdJuzgador($param['idJuzgadorDestino']);
                                $configuracionesTmp->setFechaActualizacion($fechaActual);
                                $configuracionesTmp = $configuracionesJuzgadoresDao->updateConfiguracionesjuzgadores($configuracionesTmp, $this->proveedor);
                                if ( $configuracionesTmp != "" ) {
                                    $error = false;
                                } else {
                                    $error = true;
                                    $msg[] = array("Ocurrio un error al actualizar la configuracion de horarios para el juez seleccionado");
                                }
                                if ( $error ) {
                                    break;
                                }
                            }
                        }
                    }
                } else {
                    $msg[] = array("El juzgado seleccionado no cuenta con horarios activos");
                }
            }
            
            /*
             * Actualizar el registro del ultimo rol del juzgador
             */
            if ( !$error ) {
                $ultimoRolJuzgadorDto = new UltimoroljuzgadorDTO();
                $ultimoRolJuzgadorDao = new UltimoroljuzgadorDAO();
                $ultimoRolJuzgadorDto->setIdJuzgador($programacionjuzgadoresDto->getIdJuzgador());
                $orden = " AND idProgramacion IN(" . $cadenaIdProgramacionRol . ") ";
                $ultimoRolJuzgadorDto = $ultimoRolJuzgadorDao->selectUltimoroljuzgador($ultimoRolJuzgadorDto, $orden, $this->proveedor);
                if ( $ultimoRolJuzgadorDto != "" ) {
                    foreach ( $ultimoRolJuzgadorDto as $ultimoRol ) {
                        $ultimoRolJuzgadorTmp = new UltimoroljuzgadorDTO();
                        $ultimoRolJuzgadorTmp->setIdUltimoRolJuzgador($ultimoRol->getIdUltimoRolJuzgador());
                        $ultimoRolJuzgadorTmp->setIdJuzgador($param['idJuzgadorDestino']);
                        $ultimoRolJuzgadorTmp = $ultimoRolJuzgadorDao->updateUltimoroljuzgador($ultimoRolJuzgadorTmp, $this->proveedor);
                        if ( $ultimoRolJuzgadorTmp != "" ) {
                            $error = false;
                        } else {
                            $error = true;
                            $msg[] = array("Ocurrio un error al actualizar los registros del ultimo rol juzgador");
                        }
                        if ( $error ) {
                            break;
                        }
                    }
                } else {
                    $msg[] = array("El juzgador seleccionado no cuenta con registros de ultimo rol juzgador");
                }
            }
            
            /*
             * Actualizar el registro de salas juzgadores
             */
            if ( !$error ) {
                $salasJuzgadoresDto = new SalasjuzgadoresDTO();
                $salasJuzgadoresDao = new SalasjuzgadoresDAO();
                $salasJuzgadoresDto->setIdJuzgador($programacionjuzgadoresDto->getIdJuzgador());
                $salasJuzgadoresDto->setActivo('S');
                $orderSalasJuzgador = " AND cveJuzgado='" . $programacionesDto->getCveJuzgado() . "'";
                $salasJuzgadoresDto = $salasJuzgadoresDao->selectSalasjuzgadores($salasJuzgadoresDto, $orderSalasJuzgador, $this->proveedor);
                if ( $salasJuzgadoresDto != "" ) {
                    foreach ( $salasJuzgadoresDto as $salaJuzgador ) {
                        $salasJuzgadoresAux = new SalasjuzgadoresDTO();
                        $salasJuzgadoresAux->setIdSalasJuzgador($salaJuzgador->getIdSalasJuzgador());
                        $salasJuzgadoresAux->setIdJuzgador($param['idJuzgadorDestino']);
                        $salasJuzgadoresAux = $salasJuzgadoresDao->updateSalasjuzgadores($salasJuzgadoresAux, $this->proveedor);
                        if ( $salasJuzgadoresAux == "" && $salasJuzgadoresAux == null ) {
                            $error = true;
                            $msg[] = array("Ocurrio un error al actualizar el registro de salas juzgadores");
                        }
                        if ( $error ) {
                            break;
                        }
                    }
                }
            }
            
            if ( !$error ) {
                /*
                 * Si se selecciona la opcion de transferir audiencias por celebrar
                 */
                if (array_key_exists('transferirAudiencias', $param) && $param['transferirAudiencias'] == 'S' ) {
                    $audienciasDto = new AudienciasDTO();
                    $audienciasDao = new AudienciasDAO();
                    $audienciasJuzgadorDao = new AudienciasjuzgadorDAO();
                    $audienciasDto->setCveJuzgado($programacionesDto->getCveJuzgado());
                    $audienciasDto->setActivo('S');
                    $audienciasDto->setCveEstatusAudiencia(1);
                    $ordenAudiencia = " AND CAST(fechaInicial AS DATE) >= CAST('" . $programacionjuzgadoresDto->getFechaInicio() . "' AS DATE)";
                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, $ordenAudiencia, $this->proveedor);
                    if ( $audienciasDto != "" ) {
                        foreach ( $audienciasDto as $audiencia ) {
                            $audienciasJuzgadorDto = new AudienciasjuzgadorDTO();
                            $audienciasJuzgadorDto->setIdAudiencia($audiencia->getIdAudiencia());
                            $audienciasJuzgadorDto->setIdJuzgador($programacionjuzgadoresDto->getIdJuzgador());
                            $audienciasJuzgadorDto->setActivo('S');
                            $audienciasJuzgadorDto = $audienciasJuzgadorDao->selectAudienciasjuzgador($audienciasJuzgadorDto, "", $this->proveedor);
                            if ( $audienciasJuzgadorDto != "" ) {
                                foreach ( $audienciasJuzgadorDto as $audienciaJuzgador ) {
                                    $audienciaJuzgadorTmp = new AudienciasjuzgadorDTO();
                                    $audienciaJuzgadorTmp->setIdAudienciaJuez($audienciaJuzgador->getIdAudienciaJuez());
                                    $audienciaJuzgadorTmp->setIdJuzgador($param['idJuzgadorDestino']);
                                    $audienciaJuzgadorTmp = $audienciasJuzgadorDao->updateAudienciasjuzgador($audienciaJuzgadorTmp, $this->proveedor);
                                    if ( $audienciaJuzgadorTmp == "" ) {
                                        $error = true;
                                        $msg[] = array("Ocurrio un error al actualizar el registro de audiencias juzgadores");
                                    }
                                    if ( $error ) {
                                        break;
                                    }
                                }
                            }
                        }
                    } else {
                        $msg[] = array("No hay audiencias por celebrar activas a transferir");
                    }
                }
            }
            
        } else {
            $error = true;
            $msg[] = array("No se encontraron datos de programacion para el juzgado seleccionado");
        }
        
        if ( !$error ) {
            $fecha = date("Y-m-d H:i:s");
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $registrosInsert = implode(",", $idProgramacionJuzgadores);
            $cveAccion = 49;
            $descripcion = "UPDATE tabla tblprogramacionjuzgadores registros: " . $registrosInsert;
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($descripcion);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $bitacoramovimientosDao = new BitacoramovimientosDAO();
            $insertarBitacora = $bitacoramovimientosDao->insertBitacoramovimientos($bitacoramovimientosDto, $this->proveedor);
            if ( $insertarBitacora == "" || $insertarBitacora == null ) {
                $error = true;
                $msg[] = array("Ocurrio un error al guardar en bitacora la accion realizada por el usuario");
            } else {
                $error = false;
            }
        }
        
        if ( !$error ) {
            $this->proveedor->execute("COMMIT");
            $result = array(
                'estatus' => 'ok',
                'msj'     => 'Datos actualizados correctamente'
            );
        } else {
            $this->proveedor->execute("ROLLBACK");
            $result = array(
                'estatus' => 'error',
                'msj'     => $msg
            );
        }
        return $result;
    }

}

?>