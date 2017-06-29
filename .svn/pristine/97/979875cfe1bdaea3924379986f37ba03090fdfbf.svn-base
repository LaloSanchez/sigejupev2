<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salasjuzgadores/SalasjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salasjuzgadores/SalasjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlsalas/ControlsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlsalas/ControlsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraasignaciones/BitacoraasignacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraasignaciones/BitacoraasignacionesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");
include_once(dirname(__FILE__) . "/../../../aplicacion/configuracion.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/calendario/calendario.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/fechas/Fechas.Class.php");

class BuscarJuzgadores {

    private $proveedor;
    private $bitacoraAsignacion = array();
    private $logger;

    public function __construct($bitacora, $log) {
        $this->bitacoraAsignacion = $bitacora;
        $this->logger = $log;
    }

    public function obtenerJuzgador($solicitud, $cveJuzgado, $rolJuzgador, $delitosConEspecilidad, $fechaInicio, $fechaFinal, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mes, $year, $fechaMovimiento, $mesActual, $yearActual, $audienciasDistritos, $tribunal = 'N', $proveedor = null) {

        $horasParaSumar = 0;
        $cveFuncionJuzgador = array();
        $error = false;
        $year = "";
        $mes = "";
        $dia = "";
        $horas = "";
        $minutos = "";
        $segundos = "";

        $diasFestivos = array();
        $horasMinXSumar = 0;
        $horasMaxXSumar = 0;

        $horaMaxParaSumar = 0;

        $fechaPosibleAudiencia = "";

        $especial = "N";


        $juzgadoresGeneral = array();
        $juzgadoresAux = array();
        $juzgadoresFinal = array();

//        $fechaMovimiento = "";

        $juzgadorNuevo = true;

        $juez = 0;
        $sala = 0;

        $tengoSala = false;
        $tengoJuez = false;
        $continuar = false;
        $index = 0;
        $juez = 0;
        $sala = 0;
        $tipoJuzgadores = "";

        $asignacion = array();

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $movimiento = "--->Comenzamos con el sorteo de los juzgadores para la solicitud de audiencia para el juzgado ";
        $this->logger->w_onError("--->Comenzamos con el sorteo de los juzgadores para la solicitud de audiencia para el juzgado");
        $juzgado = $this->juzgado($cveJuzgado, $this->proveedor); //Obtenemos los datos del juzgado para determinar si es de juicio o de ejecucion
        $movimiento.=" <b>" . $juzgado->getDesJuzgado() . "</b><br>";
        $this->logger->w_onError("--->" . $juzgado->getDesJuzgado());
        $cveFuncionJuzgador = $this->funcionesJuzgador($juzgado->getCveTipojuzgado(), $tribunal);
        $juzgadorAnterior = $this->juzgadorAnterior($solicitud, $this->proveedor);

        $movimiento.="-->Buscamos si la solicitud de audiencia tiene algun antecedente <br>";
        $this->logger->w_onError("--->Buscamos si la solicitud de audiencia tiene algun antecedente");

        $year = substr($fechaFinal, 0, 4);
        $mes = substr($fechaFinal, 5, 2);
        $dia = substr($fechaFinal, 8, 2);
        $horas = substr($fechaFinal, 11, 2);
        $minutos = substr($fechaFinal, 14, 2);

        $fechaMax = mktime($horas, $minutos, 0, $mes, $dia, $year);
//        echo sizeof($juzgadorAnterior);
        if ((sizeof($juzgadorAnterior) > 0) && ($juzgadorAnterior != "")) {
            $movimiento.="-->La solicitud de audiencia ya cuenta con alguna audiencia celebrada con anterioridad o programada<br>";
            $this->logger->w_onError("--->La solicitud de audiencia ya cuenta con alguna audiencia celebrada con anterioridad o programada ");
            $juzgadorNuevo = false;
//            var_dump($juzgadorAnterior);
            $tmp = "";
            for ($index = 0; $index < sizeof($juzgadorAnterior); $index++) {
                $tmp .= $juzgadorAnterior[$index]->getIdJuzgador() . ",";
            }
            $tmp = substr($tmp, 0, -1);

            $movimiento.="-->" . ((sizeof($juzgadorAnterior) > 2) ? "Las claves de los juzgadores que conocieron son " : "La clave del juzgador que que conocio de es ") . " <b>" . $tmp . "</b><br>";
            $this->logger->w_onError("-->" . ((sizeof($juzgadorAnterior) > 2) ? "Las claves de los juzgadores que conocieron son " : "La clave del juzgador que que conocio de es ") . " " . $tmp . "");



            $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
            $juzgadoresjuzgadosDto->setIdJuzgador($tmp); //Se busca antecedente del juzgador
            $juzgadoresGeneral = $this->datosJuzgador($juzgadoresjuzgadosDto, $this->proveedor);
            $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
            $movimiento.="Juzgadores: " . json_encode($juzgadoresGeneral) . "<br>";

            $juzgadoresFinal = $this->filtramosJuzgadores($cveJuzgado, $fechaMovimiento, $solicitud, $juzgadoresGeneral, $delitosConEspecilidad, $fechaInicio, $fechaFinal, $rolJuzgador, $this->proveedor); //Filtramos los juzgadores por si requiere especialidad

            if (sizeof($juzgadoresFinal) <= 0) {
                $this->logger->w_onError("No regreso ningun juzgador se sortea entre todos los juzgadores del juzgado");
                $movimiento.="No regreso ningun juzgador se sortea entre todos los juzgadores del juzgado<br>";
                if (($solicitud->getCveTipoCarpeta() == 1) || ($solicitud->getCveTipoCarpeta() == 2)) {
                    $juzgadorNuevo = true;
                    $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                    $juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
		    $juzgadoresjuzgadosDto->setActivo("S");	
                    $juzgadoresGeneral = $this->obtenerJuzgadores($juzgadoresjuzgadosDto, $this->proveedor); //Obtenemos todos los juzgadores del juzgado
                    $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
                    $movimiento.="JuzgadoresGeneral: " . json_encode($juzgadoresGeneral) . "<br>";
                    $juzgadoresFinal = $this->filtramosJuzgadores($cveJuzgado, $fechaMovimiento, $solicitud, $juzgadoresGeneral, $delitosConEspecilidad, $fechaInicio, $fechaFinal, $rolJuzgador, $this->proveedor); //Filtramos los juzgadores por si requiere especialidad
                } else {
                    $this->logger->w_onError("La solicitud de audiencia no es de tipo de control por lo cual no se puede asignar a un juzgador nuevo");
                    $movimiento.="La solicitud de audiencia no es de tipo de control por lo cual no se puede asignar a un juzgador nuevo<br>";
                }
            }

            $this->logger->w_onError("Filtramos : " . json_encode($juzgadoresFinal));
            $movimiento.="Filtramos : " . json_encode($juzgadoresFinal) . "<br>";

            $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
            $rolesjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
            $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
            $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, " LIMIT 0,1", $this->proveedor);

            $movimiento.="-->Verificamos que tengan o que cuenten con el roll de <b>" . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "</b> que es necesario para fijar la audiencia<br>";
            $this->logger->w_onError("Verificamos que tengan o que cuenten con el roll de " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " que es necesario para fijar la audiencia");
        } else {

            if (($solicitud->getCveEtapaProcesal() == 1) || ($solicitud->getCveEtapaProcesal() == 2)) { // Etapa de INVESTIGACION E INTERMEDIA
                $carpetaPadre = $this->juzgadoresEtapasIntermedia($solicitud, $this->proveedor);
                if ($carpetaPadre != "") {
                    $tmpSolicitud = new SolicitudesaudienciasDTO();
                    $tmpSolicitud->setIdReferencia($carpetaPadre->getIdCarpetaJudicial());
                    $tmpSolicitud->setActivo("S");
                    $tmpSolicitud->setCveEstatusSolicitud(2);
                    $tmpSolicitudDao = new SolicitudesaudienciasDAO();
                    $tmpSolicitud = $tmpSolicitudDao->selectSolicitudesaudienciasGeneral($tmpSolicitud, $this->proveedor, " ORDER BY fechaEnvio DESC LIMIT 0,1 ");
                    if ($tmpSolicitud != "") {
                        $tmpSolicitud = $tmpSolicitud[0];
                        $this->logger->w_onError("-->Buscamos los antecedentes de la solicitud de audiencia: " . json_encode($tmpSolicitud->toString()));
                        $this->logger->w_onError("-->Solicitud Anterior: " . json_encode($tmpSolicitud->toString()));
                        $juzgadorAnterior = $this->juzgadorAnterior($tmpSolicitud, $this->proveedor);

                        $this->logger->w_onError("-->Juzgadores conocidos: " . json_encode($juzgadorAnterior));

                        if ((sizeof($juzgadorAnterior) > 0) && ($juzgadorAnterior != "")) {
                            $movimiento.="-->La solicitud de audiencia ya cuenta con alguna audiencia celebrada con anterioridad o programada<br>";
                            $this->logger->w_onError("--->La solicitud de audiencia ya cuenta con alguna audiencia celebrada con anterioridad o programada");
                            $juzgadorNuevo = false;
                            $tmp = "";
                            for ($index = 0; $index < sizeof($juzgadorAnterior); $index++) {
                                $tmp .= $juzgadorAnterior[$index]->getIdJuzgador() . ",";
                            }
                            $tmp = substr($tmp, 0, -1);

                            $movimiento.="-->" . ((sizeof($juzgadorAnterior) > 2) ? "Las claves de los juzgadores que conocieron son " : "La clave del juzgador que que conocio de es ") . " <b>" . $tmp . "</b><br>";
                            $this->logger->w_onError("-->" . ((sizeof($juzgadorAnterior) > 2) ? "Las claves de los juzgadores que conocieron son " : "La clave del juzgador que que conocio de es ") . " " . $tmp . "");
                            $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                            $juzgadoresjuzgadosDto->setIdJuzgador($tmp); //Se busca antecedente del juzgador
                            $juzgadoresGeneral = $this->datosJuzgador($juzgadoresjuzgadosDto, $this->proveedor);
                            $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
                        } else {
                            $this->logger->w_onError("La solicitud no cuenta con algun antecedente");
                            $juzgadorNuevo = true;
                            $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                            $juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
			    $juzgadoresjuzgadosDto->setActivo("S");
                            $juzgadoresGeneral = $this->obtenerJuzgadores($juzgadoresjuzgadosDto, $this->proveedor); //Obtenemos todos los juzgadores del juzgado
                            $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
                        }
                    } else {
                        $this->logger->w_onError("La solicitud no cuenta con algun antecedente");
                        $juzgadorNuevo = true;
                        $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                        $juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
			$juzgadoresjuzgadosDto->setActivo("S");
                        $juzgadoresGeneral = $this->obtenerJuzgadores($juzgadoresjuzgadosDto, $this->proveedor); //Obtenemos todos los juzgadores del juzgado
                        $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
                    }
                } else {
                    $this->logger->w_onError("La solicitud no cuenta con algun antecedente");
                    $juzgadorNuevo = true;
                    $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                    $juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
		    $juzgadoresjuzgadosDto->setActivo("S");
                    $juzgadoresGeneral = $this->obtenerJuzgadores($juzgadoresjuzgadosDto, $this->proveedor); //Obtenemos todos los juzgadores del juzgado
                    $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
                }
            } else {//No pertenece a la etapa de investigacion o intermedia
                $this->logger->w_onError("La solicitud no cuenta con algun antecedente");
                $juzgadorNuevo = true;
                $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
                $juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
		$juzgadoresjuzgadosDto->setActivo("S");
                $juzgadoresGeneral = $this->obtenerJuzgadores($juzgadoresjuzgadosDto, $this->proveedor); //Obtenemos todos los juzgadores del juzgado
                $this->logger->w_onError("Juzgadores General : " . json_encode($juzgadoresGeneral));
            }

            $juzgadoresFinal = $this->filtramosJuzgadores($cveJuzgado, $fechaMovimiento, $solicitud, $juzgadoresGeneral, $delitosConEspecilidad, $fechaInicio, $fechaFinal, $rolJuzgador, $this->proveedor); //Filtramos los juzgadores por si requiere especialidad
            $this->logger->w_onError("Filtramos : " . json_encode($juzgadoresFinal));
            $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
            $rolesjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
            $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
            $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, " LIMIT 0,1", $this->proveedor);

            $movimiento.="-->Verificamos que tengan o que cuenten con el roll de <b>" . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "</b> que es necesario para fijar la audiencia<br>";
            $this->logger->w_onError("Verificamos que tengan o que cuenten con el roll de " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " que es necesario para fijar la audiencia");
        }

        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");

        if ($juzgadorNuevo == true) {
            if (sizeof($cveFuncionJuzgador) == 1) {//Juez unitario
//Inicializamos la variables para obtener juez
                $tipoJuzgadores = "";

                if ($cveFuncionJuzgador[0] == 1) {
                    $tipoJuzgadores = "control";
                } else if ($cveFuncionJuzgador[0] == 2) {
                    $tipoJuzgadores = "juicio";
                } else if ($cveFuncionJuzgador[0] == 3) {
                    $tipoJuzgadores = "ejecucion";
                } else if ($cveFuncionJuzgador[0] == 7) {
                    $tipoJuzgadores = "magistrado";
                }

                $this->logger->w_onError("Juzgadores de juicio: " . json_encode($juzgadoresFinal));
                $this->logger->w_onError("Ordenamos los juzgadores por la carga de trabajo");
                $juzgadoresFinal = $this->ordenaJuzgadores($solicitud, "N", $juzgadoresFinal, $cveJuzgado, $mesActual, $yearActual, $cveFuncionJuzgador, $this->proveedor);
                $this->logger->w_onError("Juzgadores de juicio: " . json_encode($juzgadoresFinal));
                if (sizeof($juzgadoresFinal) > 0) {
                    $sorteo = $this->sortearJuzgador($fechaMovimiento, $cveJuzgado, $solicitud, $juzgadoresFinal, $cveFuncionJuzgador, $tipoJuzgadores, $rolJuzgador, $fechaInicio, $fechaFinal, $fechaMax, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $this->proveedor);

                    $sorteo = array_merge($sorteo, array("nuevo" => "S", "solicitud" => $solicitud->toString()));

                    if ($sorteo["estatus"] == "correcto") {
                        $asignacion = array("Estatus" => "correcto", "Nuevo" => "S", "TipoJuez" => "Unitario", "FechaInicial" => $sorteo["fechaInicial"], "FechaFinal" => $sorteo["fechaFinal"], "jueces" => $sorteo["juez"], "sala" => $sorteo["sala"], "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia");
                    } else {
                        $asignacion = array("Estatus" => "error", "TipoJuez" => "Unitario", "FechaInicial" => $sorteo["fechaInicial"], "FechaFinal" => $sorteo["fechaFinal"], "jueces" => $sorteo["juez"], "sala" => $sorteo["sala"], "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => $sorteo["mensaje"]);
                    }
                } else {
//                    echo "No se encontraron jueces para asignar la audiencia";
                    $this->logger->w_onError("No se encontraron jueces para asignar la audiencia");
                    $asignacion = array("Estatus" => "error", "TipoJuez" => "Unitario", "FechaInicial" => "", "FechaFinal" => "", "jueces" => "", "sala" => "", "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "No se encontraron juzgadores para poder asignar la audiencia");
                }
            } else if (sizeof($cveFuncionJuzgador) == 3) {//Juez de tribunal
                $this->logger->w_onError("Juzgadores para el tribunal: " . json_encode($juzgadoresFinal));
                $this->logger->w_onError("Ordenamos los juzgadores por la carga de trabajo");
                $juzgadoresFinal = $this->ordenaJuzgadores($solicitud, "N", $juzgadoresFinal, $cveJuzgado, $mesActual, $yearActual, $cveFuncionJuzgador, $this->proveedor);
                $this->logger->w_onError("Juzgadores para el tribunal: " . json_encode($juzgadoresFinal));
                $presidente = "";
                $secretario = "";
                $vocal = "";
                $sala = "";
                $juzgadoresAuxiliar = $juzgadoresFinal;
//                echo json_encode($juzgadoresFinal);
                $fechaAxuIni = $fechaInicio;
                $fechaAxuFin = $fechaFinal;
                $fechaAuxMax = $fechaMax;
                if (sizeof($juzgadoresFinal) > 0) {
                    $intentos = 0;
                    for ($index = 0; $index < sizeof($cveFuncionJuzgador); $index++) {
                        $tipoJuzgadores = "";

                        if ($cveFuncionJuzgador[$index] == 4) {
                            $tipoJuzgadores = "presidente";
                        } else if ($cveFuncionJuzgador[$index] == 5) {
                            $tipoJuzgadores = "secretario";
                        } else if ($cveFuncionJuzgador[$index] == 6) {
                            $tipoJuzgadores = "vocal";
                        }
                        $this->logger->w_onError("Sorteamos los jueces para obtener un juez en funciones de " . $tipoJuzgadores);
                        $sorteo = $this->sortearTribunal($fechaMovimiento, $cveJuzgado, $solicitud, $juzgadoresFinal, $cveFuncionJuzgador[$index], $tipoJuzgadores, $rolJuzgador, $fechaAxuIni, $fechaAxuFin, $fechaAuxMax, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $this->proveedor);
//                        echo json_encode($sorteo);
                        if ($sorteo["estatus"] == "correcto") {

                            if ($cveFuncionJuzgador[$index] == 4) {
                                $fechaAxuIni = $sorteo["fechaInicial"];
                                $fechaAxuFin = $sorteo["fechaFinal"];


                                $y = substr($fechaAxuFin, 0, 4);
                                $m = substr($fechaAxuFin, 5, 2);
                                $d = substr($fechaAxuFin, 8, 2);
                                $h = substr($fechaAxuFin, 11, 2);
                                $mm = substr($fechaAxuFin, 14, 2);

                                $fechaAuxMax = mktime($h, $mm + 0, 0, $m, $d, $y);

                                $juzgadoresFinal["secretario"] = $this->quitarJuzgador($sorteo["juez"], $juzgadoresFinal["secretario"]);
                                $juzgadoresFinal["vocal"] = $this->quitarJuzgador($sorteo["juez"], $juzgadoresFinal["vocal"]);
                                $presidente = $sorteo["juez"];
                                $sala = $sorteo["sala"];
                            } else if ($cveFuncionJuzgador[$index] == 5) {
                                $juzgadoresFinal["vocal"] = $this->quitarJuzgador($sorteo["juez"], $juzgadoresFinal["vocal"]);
                                $secretario = $sorteo["juez"];
                            } else {
                                $vocal = $sorteo["juez"];
                            }
                        } else if ($sorteo["estatus"] == "error") {
                            $this->logger->w_onError("No se encontraron jueces para conformar el tribunal alguno no tiene la disponibilidad para atender la audiencia $tipoJuzgadores en su intento $intentos");
                            $index = 0;
                            $presidente = "";
                            $secretario = "";
                            $vocal = "";
                            $sala = "";
                            $juzgadoresAuxiliar = $juzgadoresAuxiliar;
                            $intentos++;
                        }

                        $y = substr($fechaAxuIni, 0, 4);
                        $m = substr($fechaAxuIni, 5, 2);
                        $d = substr($fechaAxuIni, 8, 2);
                        $h = substr($fechaAxuIni, 11, 2);
                        $mm = substr($fechaAxuIni, 14, 2);

                        $fecIniAux = mktime($h, $mm + 0, 0, $m, $d, $y);

                        if ($fecIniAux >= $fechaMax) {
                            $this->logger->w_onError("Se llego a la fecha maxima para fijar la audiencia");
                            break;
                        } else if ($intentos >= 5) {
                            $this->logger->w_onError("Se sale del ciclo para evitar que el servidor se sobrecargue");
                            break;
                        }
//                        echo json_encode($sorteo);
//                        echo "<br>";
                    }

                    if (($presidente > 0) && ($secretario > 0) && ($vocal > 0) && ($sala > 0)) {
                        $sorteo = array_merge($sorteo, array("nuevo" => "S", "solicitud" => $solicitud->toString()));
                        $asignacion = array("Estatus" => "correcto", "Nuevo" => "S", "TipoJuez" => "Tribunal", "FechaInicial" => $fechaAxuIni, "FechaFinal" => $fechaAxuFin, "jueces" => array("presidente" => $presidente, "secretario" => $secretario, "vocal" => $vocal), "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia");
                    } else {
                        $asignacion = array("Estatus" => "error", "TipoJuez" => "Tribunal", "FechaInicial" => $fechaAxuIni, "FechaFinal" => $fechaAxuFin, "jueces" => array("presidente" => $presidente, "secretario" => $secretario, "vocal" => $vocal), "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "No se lograron obtener los juzgadores para conformar el tribunal");
                        $this->logger->w_onError("No se encontraron jueces para conformar el tribunal alguno no tiene la disponibilidad para atender la audiencia");
                    }
                } else {
                    $asignacion = array("Estatus" => "error", "TipoJuez" => "Tribunal", "FechaInicial" => $fechaAxuIni, "FechaFinal" => $fechaAxuFin, "jueces" => array("presidente" => $presidente, "secretario" => $secretario, "vocal" => $vocal), "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "No se lograron obtener los juzgadores para conformar el tribunal");
                    $this->logger->w_onError("No se encontraron jueces para conformar el tribunal");
                }
            }
        } else {
            $movimiento = "-->Se determina que se sorteara la audiencia entre los juzgadores que ya conocieron con anterioridad<br>";
            if (sizeof($cveFuncionJuzgador) == 1) {
//Inicializamos la variables para obtener juez
                $movimiento.="-->Se determina que se requiere un juez solamente<br>";
                $tipoJuzgadores = "";

                if ($cveFuncionJuzgador[0] == 1) {
                    $tipoJuzgadores = "control";
                } else if ($cveFuncionJuzgador[0] == 2) {
                    $tipoJuzgadores = "juicio";
                } else if ($cveFuncionJuzgador[0] == 3) {
                    $tipoJuzgadores = "ejecucion";
                } else if ($cveFuncionJuzgador[0] == 7) {
                    $tipoJuzgadores = "magistrado";
                }

                $movimiento.="-->Verificamos el tipo de juzgador que se necesita deacuerdo al juzgado <b>" . $tipoJuzgadores . "</b><br>";
                $movimiento.="-->Ordenamos los juzgadores deacuerdo a la carga de trabajo<br>";
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                $juzgadoresFinal = $this->ordenaJuzgadores($solicitud, "S", $juzgadoresFinal, $cveJuzgado, $mesActual, $yearActual, $cveFuncionJuzgador, $this->proveedor);

                if (sizeof($juzgadoresFinal) > 0) {
                    $sorteo = $this->sortearJuzgador($fechaMovimiento, $cveJuzgado, $solicitud, $juzgadoresFinal, $cveFuncionJuzgador, $tipoJuzgadores, $rolJuzgador, $fechaInicio, $fechaFinal, $fechaMax, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $this->proveedor);
                    $sorteo = array_merge($sorteo, array("nuevo" => "N", "solicitud" => $solicitud->toString()));

                    if ($sorteo["estatus"] == "correcto") {
                        $asignacion = array("Estatus" => "correcto", "Nuevo" => "N", "TipoJuez" => "Unitario", "FechaInicial" => $sorteo["fechaInicial"], "FechaFinal" => $sorteo["fechaFinal"], "jueces" => $sorteo["juez"], "sala" => $sorteo["sala"], "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia");
                        $movimiento = "-->" . $sorteo["mensaje"] . "<br>";
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), $sorteo["juez"], $sorteo["sala"], $cveJuzgado, $sorteo["fechaInicial"], $sorteo["fechaFinal"]);
                    } else {
                        $asignacion = array("Estatus" => "error", "TipoJuez" => "Unitario", "FechaInicial" => $sorteo["fechaInicial"], "FechaFinal" => $sorteo["fechaFinal"], "jueces" => $sorteo["juez"], "sala" => $sorteo["sala"], "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => $sorteo["mensaje"]);
                        $movimiento = "-->" . $sorteo["mensaje"] . "<br>";
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, $sorteo["fechaInicial"], $sorteo["fechaFinal"]);
                    }
                } else {
                    $movimiento = "-->No se encontraron jueces para asignar la audiencia ya que talvez no cuentan con el roll de " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "<br>";
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                    $asignacion = array("Estatus" => "error", "TipoJuez" => "Unitario", "FechaInicial" => $fechaInicio, "FechaFinal" => $fechaFinal, "jueces" => 0, "sala" => 0, "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "No se encontraron jueces para asignar la audiencia ya que talvez no cuentan con el roll de " . $rolesjuzgadoresDto[0]->getDesRolJuzgador());
                }
            } else if (sizeof($cveFuncionJuzgador) == 3) {//Juez de tribunal
                $movimiento.="-->Se determina que se requiere un Tribunal <br>";
                $movimiento.="-->Ordenamos los juzgadores deacuerdo a la carga de trabajo<br>";
                $juzgadoresFinal = $this->ordenaJuzgadores($solicitud, "S", $juzgadoresFinal, $cveJuzgado, $mesActual, $yearActual, $cveFuncionJuzgador, $this->proveedor);
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                $presidente = "";
                $secretario = "";
                $vocal = "";
                $sala = "";
                $juzgadoresAuxiliar = $juzgadoresFinal;
                $fechaAxuIni = $fechaInicio;
                $fechaAxuFin = $fechaFinal;
                $fechaAuxMax = $fechaMax;
                if (sizeof($juzgadoresFinal) > 0) {
                    $intentos = 0;
                    for ($index = 0; $index < sizeof($cveFuncionJuzgador); $index++) {
                        $tipoJuzgadores = "";

                        if ($cveFuncionJuzgador[$index] == 4) {
                            $tipoJuzgadores = "presidente";
                        } else if ($cveFuncionJuzgador[$index] == 5) {
                            $tipoJuzgadores = "secretario";
                        } else if ($cveFuncionJuzgador[$index] == 6) {
                            $tipoJuzgadores = "vocal";
                        }

                        $movimiento = "-->Vamos a buscar al juzgador para que este en funciones de  <b>" . $tipoJuzgadores . "</b><br>";
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, $fechaAxuIni, $fechaAxuFin);
//                        echo "buscamos ".$tipoJuzgadores;
//                        var_dump($juzgadoresFinal);

                        $sorteo = $this->sortearTribunal($fechaMovimiento, $cveJuzgado, $solicitud, $juzgadoresFinal, $cveFuncionJuzgador[$index], $tipoJuzgadores, $rolJuzgador, $fechaAxuIni, $fechaAxuFin, $fechaAuxMax, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $this->proveedor);

                        if ($sorteo["estatus"] == "correcto") {

                            if ($cveFuncionJuzgador[$index] == 4) {
                                $fechaAxuIni = $sorteo["fechaInicial"];
                                $fechaAxuFin = $sorteo["fechaFinal"];


                                $y = substr($fechaAxuFin, 0, 4);
                                $m = substr($fechaAxuFin, 5, 2);
                                $d = substr($fechaAxuFin, 8, 2);
                                $h = substr($fechaAxuFin, 11, 2);
                                $mm = substr($fechaAxuFin, 14, 2);

                                $fechaAuxMax = mktime($h, $mm + 0, 0, $m, $d, $y);

                                $juzgadoresFinal["secretario"] = $this->quitarJuzgador($sorteo["juez"], $juzgadoresFinal["secretario"]);
                                $juzgadoresFinal["vocal"] = $this->quitarJuzgador($sorteo["juez"], $juzgadoresFinal["vocal"]);
                                $presidente = $sorteo["juez"];
                                $sala = $sorteo["sala"];
                            } else if ($cveFuncionJuzgador[$index] == 5) {
                                $juzgadoresFinal["vocal"] = $this->quitarJuzgador($sorteo["juez"], $juzgadoresFinal["vocal"]);
                                $secretario = $sorteo["juez"];
                            } else {
                                $vocal = $sorteo["juez"];
                            }
                        } else if ($sorteo["estatus"] == "error") {
                            $index = 0;
                            $presidente = "";
                            $secretario = "";
                            $vocal = "";
                            $sala = "";
                            $juzgadoresAuxiliar = $juzgadoresAuxiliar;
                            $intentos++;
                            $movimiento = "-->No se encontro juzgador para asignar la funcion de <b>" . $tipoJuzgadores . "</b> en el intento " . $intentos . "<br>";
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                        }

                        $y = substr($fechaAxuIni, 0, 4);
                        $m = substr($fechaAxuIni, 5, 2);
                        $d = substr($fechaAxuIni, 8, 2);
                        $h = substr($fechaAxuIni, 11, 2);
                        $mm = substr($fechaAxuIni, 14, 2);

                        $fecIniAux = mktime($h, $mm + 0, 0, $m, $d, $y);

                        if ($fecIniAux >= $fechaMax) {
                            break;
                        } else if ($intentos >= 5) {
                            break;
                        }
                    }

                    if (($presidente > 0) && ($secretario > 0) && ($vocal > 0) && ($sala > 0)) {
                        $movimiento = "Se lograron obtener juzgadores para celebrar la audiencia";
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, $fechaAxuIni, $fechaAxuFin);
                        $sorteo = array_merge($sorteo, array("nuevo" => "N", "solicitud" => $solicitud->toString()));
                        $asignacion = array("Estatus" => "correcto", "Nuevo" => "N", "TipoJuez" => "Tribunal", "FechaInicial" => $fechaAxuIni, "FechaFinal" => $fechaAxuFin, "jueces" => array("presidente" => $presidente, "secretario" => $secretario, "vocal" => $vocal), "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia");
                    } else {
                        $movimiento = "-->No se encontraron juzgadores para conformar el tribunal<br>";
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                        $asignacion = array("Estatus" => "error", "TipoJuez" => "Tribunal", "FechaInicial" => $fechaAxuIni, "FechaFinal" => $fechaAxuFin, "jueces" => array(""), "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador, "Mensaje" => "No se lograron obtener juzgadores para celebrar la audiencia");
                    }
                } else {
                    $movimiento = "-->No se encontraron juzgadores para conformar el tribunal<br>";
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                    $asignacion = array("Estatus" => "error", "TipoJuez" => "Tribunal", "FechaInicial" => "", "FechaFinal" => "", "jueces" => array(""), "sala" => "", "cveFuncionJuzgador" => "", "Mensaje" => "No se lograron obtener juzgadores para celebrar la audiencia");
                }
            }
        }


        if ($proveedor == null) {
            $this->proveedor->stmt = $this->proveedor->free_result($this->proveedor->stmt);
            $this->proveedor->close();
        }


        $asignacion = array_merge($asignacion, array("bitacora" => $this->bitacoraAsignacion));


        return $asignacion;
    }

    public function sortearTribunal($fechaMovimiento, $cvejuzgado, $SolicitudesaudienciasDto, $juzgadoresFinal, $cveFuncionJuzgador, $tipoJuzgadores, $rolJuzgador, $fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $fechaMaxAudiencia, $cataudienciasDto, $diasFestivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $proveedor = null) {
        $error = false;

        $tengoSala = false;
        $tengoJuez = false;
        $continuar = false;
        $index = 0;
        $juez = 0;
        $sala = 0;
        $fechaAudiencia = $fechaPosibleAudiencia;
        $tmpFechaAudiencia = $fechaPosibleAudiencia;
        $tmpInicial = $fechaPosibleAudiencia;
        $tmpFinal = $fechaMaxPosibleAudiencia;

//        $horaMinParaSumar = $cataudienciasDto->getMinHorasDesahogar();
//        $horasMaxXSumar = $cataudienciasDto->getMaxHorasDesahogar();
        $horaMinParaSumar = $audienciasDistritos->getMinHorasDesahogar();
        $horasMaxXSumar = $audienciasDistritos->getMaxHorasDesahogar();

        $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
        $rolesjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
        $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
        $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, " LIMIT 0,1", $this->proveedor);

        $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();

        $fechas = new Fechas($this->logger);


        $tmp = $proveedor;

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
        $this->logger->w_onError("Entra a la funcion para sortear al juez en funciones de " . $tipoJuzgadores);
        while (( (($tengoSala == false) && (($cveFuncionJuzgador == 4) || ($cveFuncionJuzgador == 8))) || ($tengoJuez == false)) && ($error == false)) {

            if ($fechaAudiencia > $fechaMaxAudiencia) {
                $index += 1;
                $movimiento = "-->Se llego a la fecha maxima para fijar audiencia con el juzgador";
                $this->logger->w_onError("-->Se llego a la fecha maxima para fijar audiencia con el juzgador");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index - 1]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

                if ($index > (count($juzgadoresFinal[$tipoJuzgadores]) - 1)) {
                    $movimiento = "-->Se intentaro todos los juzgadores y no se logro encontrar alguno disponible";
                    $this->logger->w_onError("-->Se intentaro todos los juzgadores y no se logro encontrar alguno disponible");
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    $error = true;
                    $juez = 0;
                    $sala = 0;
                    break;
                } else {
                    $fechaPosibleAudiencia = $tmpFechaAudiencia;
                    $year = substr($fechaPosibleAudiencia, 0, 4);
                    $mes = substr($fechaPosibleAudiencia, 5, 2);
                    $dia = substr($fechaPosibleAudiencia, 8, 2);
                    $horas = substr($fechaPosibleAudiencia, 11, 2);
                    $minutos = substr($fechaPosibleAudiencia, 14, 2);
                    $horasParaSumar = 0;
                    $fechaAudiencia = mktime($horas + $horaMinParaSumar, $minutos, 0, $mes, $dia, $year);
                    $movimiento = "-->No recorremos al siguiente juzgador de la lista";
                    $this->logger->w_onError("-->No recorremos al siguiente juzgador de la lista");
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                }
            } else {
                $horasParaSumar = $fechas->avanzaDiaDisponible($fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $cataudienciasDto, true, $diasFestivos, $especial);
                $year = substr($fechaPosibleAudiencia, 0, 4);
                $mes = substr($fechaPosibleAudiencia, 5, 2);
                $dia = substr($fechaPosibleAudiencia, 8, 2);
                $horas = substr($fechaPosibleAudiencia, 11, 2);
                $minutos = substr($fechaPosibleAudiencia, 14, 2);

                $fechaInicialAudiencia = date("Y-m-d H:i", mktime($horas + $horasParaSumar, $minutos, 0, $mes, $dia, $year));

                $fechaFinalAudiencia = date("Y-m-d H:i", mktime($horas + $horasParaSumar, $minutos + $tiempoUtilizacion, 0, $mes, $dia, $year));
                $movimiento = "-->Verificamos si el juzgador cuenta con el roll <b>" . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "</b> para poder asignar la audiencia al juzgador " . $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"];
                $this->logger->w_onError("-->Verificamos si el juzgador cuenta con el roll " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " para poder asignar la audiencia");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                if ($this->buscaProgramacionJuez($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $rolJuzgador, $cvejuzgado, $proveedor)) {
                    $movimiento = "-->Verificamos que el juzgador no tenga asignada una audiencia para la siguiente fecha y hora <b>" . $fechaInicialAudiencia . "</b> hasta <b>" . $fechaFinalAudiencia . "</b>";
                    $this->logger->w_onError("-->Verificamos que el juzgador no tenga asignada una audiencia para la siguiente fecha y hora " . $fechaInicialAudiencia . " hasta " . $fechaFinalAudiencia . "");
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    if ($this->buscaDisponibilidadJuez($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $proveedor)) {
                        $tengoJuez = true;
                        $juez = $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"];

                        if (($cveFuncionJuzgador == 4) || ($cveFuncionJuzgador == 8)) {
                            $movimiento = "-->Buscamos si el juzgador tiene salas asignadas";
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            $salasJuzgadoresDto = new SalasjuzgadoresDTO();
                            $salasJuzgadoresDto->setIdJuzgador($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"]);
                            $salasJuzgadoresDao = new SalasjuzgadoresDAO();
                            $salasJuzgadoresDto = $salasJuzgadoresDao->selectSalasjuzgadores($salasJuzgadoresDto, " ORDER BY cveCondicion ASC ", $proveedor);
                            $sala = 0;

                            if (sizeof($salasJuzgadoresDto) > 0) {
                                $salas = array();
                                $historialSalas = array();
                                foreach ($salasJuzgadoresDto as $salaJuzgadorDto) {
                                    $encontroSala = false;
                                    if (sizeof($salas) > 0) {
                                        for ($z = 0; $z < count($salas); $z ++) {
                                            if ($salas[$z]["cveSala"] == $salaJuzgadorDto->getCveSala()) {
                                                $encontroSala = true;
                                                break;
                                            }
                                        }
                                    } else {
                                        $encontroSala = false;
                                    }

                                    if ($encontroSala == false) {
                                        $salas[] = array("cveSala" => $salaJuzgadorDto->getCveSala());
                                    }
                                }
                                $this->logger->w_onError("-->Salas: " . json_encode($salas));
                                if (sizeof($salas) > 1) {
                                    $salas = $this->ordenSala($salas, $mesActual, $yearActual, $proveedor);
                                    $indexSalas = 0;
                                     $movimiento = "-->Comenzamos con el sorteo de las salas<br>";
                                for ($indexSalas = 0; $indexSalas < sizeof($salas); $indexSalas++) {
                                    $sala = $salas[$indexSalas]["cveSala"];

                                    $movimiento .= "-->Verificamos si la sala tiene disponibilidad <b>" . $sala . "</b><br>";
                                    $audienciasDto = new AudienciasDTO();
                                    $audienciasDto->setCveSala($sala);
                                    $audienciasDto->setCveEstatusAudiencia(1);
                                    
                                    $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);
                                    
                                    if ($audienciasDto != "") {
                                        $movimiento .= "-->la sala <b>".$sala ."</b> esta ocupada y por lo tanto no podra asignarse una audiencia en ella";
                                        $tengoSala = false;
                                    } else {
                                        $movimiento .= "-->Encontramos sala <b>".$sala ."</b>";
                                        $tengoSala = true;
                                        break;
//                                        echo "Si se encontro sala";
                                    }
                                 
                                }
                                $movimiento .= "-->Termina el ciclo del sorteo de audiencias<br>";
//                                    while (($sala == 0) && ($tengoSala == false)) {
//                                        $sala = $salas[$indexSalas]["cveSala"];
//                                        $audienciasDto = new AudienciasDTO();
//                                        $audienciasDto->setCveSala($sala);
//                                        $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
//                                        $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
// ) ", $proveedor);
//
//                                        if ($audienciasDto != "") {
//                                            $tengoSala = false;
//                                            if ($indexSalas < sizeof($salas)) {
//                                                $indexSalas ++;
//                                            } else {
//                                                $sala = 0;
//                                                $tengoSala = false;
//                                                break;
//                                            }
//                                        } else {
//                                            $tengoSala = true;
//                                        }
//                                    }
                                    $movimiento .= "-->Salas " . json_encode($salas);
//                                    $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                    if (($tengoSala === false)) {
                                        $movimiento = "-->No se logro obtener la sala";
                                        $sala = 0;
                                    } else {
                                        $movimiento = "-->La sala disponible qeu se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                    }
                                    $this->logger->w_onError("-->La sala disponible qeu se logro obtener " . $sala);
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                } else if ((count($salas) > 0) && (count($salas) < 2)) {
                                    $sala = $salas[0]["cveSala"];
                                    $audienciasDto = new AudienciasDTO();
                                    $audienciasDto->setCveSala($sala);
                                    $audienciasDao = new AudienciasDAO();
                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);

                                    if ($audienciasDto != "") {
                                        $tengoSala = false;
                                        $sala = 0;
                                    } else {
                                        $tengoSala = true;
                                    }
//                                    $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                    if (($tengoSala === false)) {
                                        $movimiento = "-->No se logro obtener la sala";
                                        $sala = 0;
                                    } else {
                                        $movimiento = "-->La sala disponible qeu se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                    }
                                    $this->logger->w_onError("-->La sala disponible qeu se logro obtener " . $sala);
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                } else {
                                    $tengoSala = true;
                                    $error = true;
                                    $movimiento = "-->El juzgado no cuenta con salas verificar en el catalogo de atencion salas juzgados";
                                    $this->logger->w_onError("-->El juzgado no cuenta con salas verificar en el catalogo de atencion salas juzgados");
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    break;
                                }
                            } else {
                                $movimiento = "-->El Juzgador no tiene salas asignadas buscaremos las salas del juzgado que son comodinas";
                                $this->logger->w_onError("-->El Juzgador no tiene salas asignadas buscaremos las salas del juzgado que son comodinas");
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $atencionsalasDto = new AtencionsalasDTO();
                                $atencionsalasDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                                $atencionsalasDto->setCveCondicion(1);
                                $atencionsalasDao = new AtencionsalasDAO();
                                $atencionsalasDto = $atencionsalasDao->selectAtencionsalas($atencionsalasDto, "ORDER BY cveCondicion ASC ", $proveedor);

                                $salas = array();
                                $historialSalas = array();
                                if (count($atencionsalasDto) > 0) {
                                    foreach ($atencionsalasDto as $atencionsalaDto) {
                                        $salasDto = new SalasDTO();
                                        $salasDto->setCveSala($atencionsalaDto->getCveSala());
                                        $salasDto->setComodin("S");
                                        $salasDto->setSorteo("S");
                                        $salasDto->setActivo("S");
                                        $salasDao = new SalasDAO();
                                        $salasDto = $salasDao->selectSalas($salasDto, "LIMIT 0,1 ", $proveedor);
                                        if (count($salasDto) > 0) {
                                            $encontroSala = false;
                                            if (count($salas) > 0) {
                                                for ($z = 0; $z < count($salas); $z ++) {
                                                    if ($salas[$z]["cveSala"] == $atencionsalaDto->getCveSala()) {
                                                        $encontroSala = true;
                                                        break;
                                                    }
                                                }
                                            } else {
                                                $encontroSala = false;
                                            }
                                            if ($encontroSala == false) {
                                                $salas[] = array("cveSala" => $atencionsalaDto->getCveSala());
                                            }
                                        }
                                    }
                                }

                                if (count($salas) > 1) {
                                    $movimiento = "-->El juzgado cuenta con mas de una sala comodina";
                                    $this->logger->w_onError("-->El juzgado cuenta con mas de una sala comodina");
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    $salas = $this->ordenSala($salas, $mesActual, $yearActual, $proveedor);

                                    $indexSalas = 0;
                                    $movimiento = "-->Comenzamos con el sorteo de las salas<br>";
                                for ($indexSalas = 0; $indexSalas < sizeof($salas); $indexSalas++) {
                                    $sala = $salas[$indexSalas]["cveSala"];

                                    $movimiento .= "-->Verificamos si la sala tiene disponibilidad <b>" . $sala . "</b><br>";
                                    $audienciasDto = new AudienciasDTO();
                                    $audienciasDto->setCveSala($sala);
                                    $audienciasDto->setCveEstatusAudiencia(1);
                                    
                                    $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);
                                    
                                    if ($audienciasDto != "") {
                                        $movimiento .= "-->la sala <b>".$sala ."</b> esta ocupada y por lo tanto no podra asignarse una audiencia en ella";
                                        $tengoSala = false;
                                    } else {
                                        $movimiento .= "-->Encontramos sala <b>".$sala ."</b>";
                                        $tengoSala = true;
                                        break;
//                                        echo "Si se encontro sala";
                                    }
                                 
                                }
                                $movimiento .= "-->Termina el ciclo del sorteo de audiencias<br>";
//                                    while (($sala == 0) && ($tengoSala == false)) {
//                                        $sala = $salas[$indexSalas]["cveSala"];
//                                        $audienciasDto = new AudienciasDTO();
//                                        $audienciasDto->setCveSala($sala);
//                                        $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
//                                        $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
// ) ", $proveedor);
//
//                                        if ($audienciasDto != "") {
//                                            $tengoSala = false;
//                                            if ($indexSalas < sizeof($salas)) {
//                                                $indexSalas ++;
//                                            } else {
//                                                $sala = 0;
//                                                $tengoSala = false;
//                                                break;
//                                            }
//                                        } else {
//                                            $tengoSala = true;
//                                        }
//                                    }
//                                    $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                $movimiento .= "-->Salas " . json_encode($salas);
                                    if (($tengoSala === false)) {
                                        $movimiento = "-->No se logro obtener la sala";
                                        $sala = 0;
                                    } else {
                                        $movimiento = "-->La sala disponible qeu se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                    }
                                    $this->logger->w_onError("-->La sala disponible qeu se logro obtener " . $sala);
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                } else if ((count($salas) > 0) && (count($salas) < 2)) {
                                    $sala = $salas[0]["cveSala"];
                                    $audienciasDto = new AudienciasDTO();
                                    $audienciasDto->setCveSala($sala);
                                    $audienciasDao = new AudienciasDAO();
                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);

                                    if ($audienciasDto != "") {
                                        $tengoSala = false;
                                        $sala = 0;
                                    } else {
                                        $tengoSala = true;
                                    }
//                                    $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                    if (($tengoSala === false)) {
                                        $movimiento = "-->No se logro obtener la sala";
                                        $sala = 0;
                                    } else {
                                        $movimiento = "-->La sala disponible qeu se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                    }
                                    $this->logger->w_onError("-->La sala disponible qeu se logro obtener " . $sala);
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                } else {
                                    $tengoSala = true;
                                    $error = true;
                                    $movimiento = "-->El juzgado no cuenta con salas verificar en el catalogo de atencion salas juzgados";
                                    $this->logger->w_onError("-->El juzgado no cuenta con salas verificar en el catalogo de atencion salas juzgados");
                                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                    break;
                                }
                            }
                        }
                    } else {
//No se encontraron salas comodinas por lo tanto no se puede continuar con la asignacion verificar atencion salas
                        $movimiento = "-->Ej juzgador esta ocupado para la siguiente fecha y hora <b>" . $fechaInicialAudiencia . "</b> hasta <b>" . $fechaFinalAudiencia . "</b>";
                        $this->logger->w_onError("-->Ej juzgador esta ocupado para la siguiente fecha y hora " . $fechaInicialAudiencia . " hasta " . $fechaFinalAudiencia . "");
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    }
                } else {
//El juzgador no tiene programacion con el rol solicitado
                    $movimiento = "-->No cuenta con el roll para asignar la audiencia en las fechas <b>" . $fechaInicialAudiencia . "</b> hasta <b>" . $fechaFinalAudiencia . "</b>";
                    $this->logger->w_onError("-->No cuenta con el roll para asignar la audiencia en las fechas " . $fechaInicialAudiencia . " hasta " . $fechaFinalAudiencia . "");
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                }

                $yearFinal = substr($fechaFinalAudiencia, 0, 4);
                $mesFinal = substr($fechaFinalAudiencia, 5, 2);
                $diaFinal = substr($fechaFinalAudiencia, 8, 2);
                $horasFinal = substr($fechaFinalAudiencia, 11, 2);
                $minutosFinal = substr($fechaFinalAudiencia, 14, 2);

                if (($cataudienciasDto->getCveTipoAudiencia() == 1) || ($cataudienciasDto->getCveTipoAudiencia() == 3)) {
                    if (((int) $horas) >= 20) {
                        $horas = 8;
                        $horasParaSumar = 24;
                        $minutos = 30;
                    } else {
                        if (((int) $minutos >= 0) && ((int) $minutos < 15)) {
                            $minutos = 15;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 15) && ((int) $minutos < 30)) {
                            $minutos = 30;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 30) && ((int) $minutos < 45)) {
                            $minutos = 45;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 45) && ((int) $minutos < 60)) {
                            $minutos = 0;
                            $horasParaSumar = 1;
                        }
                    }
                } else {
                    if (((int) $horas) >= 20) {
                        $horas = 8;
                        $horasParaSumar = 24;
                        $minutos = 30;
                    } else {
                        if (((int) $minutos >= 0) && ((int) $minutos < 15)) {
                            $minutos = 15;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 15) && ((int) $minutos < 30)) {
                            $minutos = 30;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 30) && ((int) $minutos < 45)) {
                            $minutos = 45;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 45) && ((int) $minutos < 60)) {
                            $minutos = 0;
                            $horasParaSumar = 1;
                        }
                    }
                }
            }
            $fechaPosibleAudiencia = date("Y-m-d H:i", mktime($horas + $horasParaSumar, $minutos, 0, $mes, $dia, $year));
            $fechaAudiencia = mktime($horas + $horasParaSumar, $minutos, 0, $mes, $dia, $year);
        }

        if (($cveFuncionJuzgador == 4) || ($cveFuncionJuzgador == 8)) {
            if (($error == false) && ($juez > 0) && ($sala > 0)) {
                return array("estatus" => "correcto", "fechaInicial" => $fechaInicialAudiencia, "fechaFinal" => $fechaFinalAudiencia, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "Se encontro juez $tipoJuzgadores y sala de forma correcta");
            } else {
                if (($juez <= 0) && ($sala <= 0)) {
                    return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro juez $tipoJuzgadores y sala para fijar la audiencia ");
                } else if (($juez > 0) && ($sala <= 0)) {
                    return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro sala para fijar la audiencia");
                } else if (($juez <= 0) && ($sala > 0)) {
                    return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro juez para fijar la audiencia");
                }
            }
        } else {
            if (($error == false) && ($juez > 0)) {
                return array("estatus" => "correcto", "fechaInicial" => $fechaInicialAudiencia, "fechaFinal" => $fechaFinalAudiencia, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "Se encontro juez $tipoJuzgadores y sala de forma correcta");
            } else {
                if ($juez <= 0) {
                    return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro juez $tipoJuzgadores y sala para fijar la audiencia ");
                }
            }
        }

        if ($tmp == null) {
            $proveedor->close();
        }
    }

    public function sortearJuzgador($fechaMovimiento, $cvejuzgado, $SolicitudesaudienciasDto, $juzgadoresFinal, $cveFuncionJuzgador, $tipoJuzgadores, $rolJuzgador, $fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $fechaMaxAudiencia, $cataudienciasDto, $diasFestivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $proveedor = null) {
        $error = false;
//        var_dump($juzgadoresFinal);
        $tengoSala = false;
        $tengoJuez = false;
        $continuar = false;
        $index = 0;
        $juez = 0;
        $sala = 0;
        $fechaAudiencia = $fechaPosibleAudiencia;
        $tmpFechaAudiencia = $fechaPosibleAudiencia;
        $tmpInicial = $fechaPosibleAudiencia;
        $tmpFinal = $fechaMaxPosibleAudiencia;

//        $horaMinParaSumar = $cataudienciasDto->getMinHorasDesahogar();
//        $horasMaxXSumar = $cataudienciasDto->getMaxHorasDesahogar();
        $horaMinParaSumar = $audienciasDistritos->getMinHorasDesahogar();
        $horasMaxXSumar = $audienciasDistritos->getMaxHorasDesahogar();

        $cveJuzgado = $SolicitudesaudienciasDto->getCveJuzgado();

        $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
        $rolesjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
        $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
        $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, " LIMIT 0,1", $this->proveedor);

        $fechas = new Fechas($this->logger);

//        var_dump($rolesjuzgadoresDto);

        $tmp = $proveedor;

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        while (($tengoSala === false) || ($tengoJuez === false) && ($error === false)) {
            $movimiento = "";
            if ($fechaAudiencia > $fechaMaxAudiencia) {
                $index += 1;
                $movimiento = "-->Se llego a la fecha maxima para fijar audiencia con el juzgador";
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index - 1]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                if ($index > (count($juzgadoresFinal[$tipoJuzgadores]) - 1)) {
                    $movimiento = "-->Se intentaro todos los juzgadores y no se logro encontrar alguno disponible $index de " . (count($juzgadoresFinal[$tipoJuzgadores]) - 1);
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    $error = true;
                    $juez = 0;
                    $sala = 0;
                    break;
                } else {
                    $fechaPosibleAudiencia = $tmpFechaAudiencia;
                    $year = substr($fechaPosibleAudiencia, 0, 4);
                    $mes = substr($fechaPosibleAudiencia, 5, 2);
                    $dia = substr($fechaPosibleAudiencia, 8, 2);
                    $horas = substr($fechaPosibleAudiencia, 11, 2);
                    $minutos = substr($fechaPosibleAudiencia, 14, 2);
                    $horasParaSumar = 0;
                    $fechaAudiencia = mktime($horas + $horaMinParaSumar, $minutos, 0, $mes, $dia, $year);
                    $movimiento = "-->No recorremos al siguiente juzgador de la lista";
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                }
            } else {
                $horasParaSumar = $fechas->avanzaDiaDisponible($fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $cataudienciasDto, true, $diasFestivos, $especial);

                $year = substr($fechaPosibleAudiencia, 0, 4);
                $mes = substr($fechaPosibleAudiencia, 5, 2);
                $dia = substr($fechaPosibleAudiencia, 8, 2);
                $horas = substr($fechaPosibleAudiencia, 11, 2);
                $minutos = substr($fechaPosibleAudiencia, 14, 2);

                $fechaInicialAudiencia = date("Y-m-d H:i", mktime($horas + $horasParaSumar, $minutos, 0, $mes, $dia, $year));
                $fechaFinalAudiencia = date("Y-m-d H:i", mktime($horas + $horasParaSumar, $minutos + $tiempoUtilizacion, 0, $mes, $dia, $year));
                $this->logger->w_onError($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"] . " ----->" . $sala . "----->" . $fechaInicialAudiencia . "------>" . $fechaFinalAudiencia . "---->" . $error . "<br>");
                $movimiento = "-->Verificamos si el juzgador cuenta con el roll <b>" . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . "</b> para poder asignar la audiencia";
                $this->logger->w_onError($movimiento);
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                if ($this->buscaProgramacionJuez($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $rolJuzgador, $cvejuzgado, $proveedor)) {
                    $movimiento = "-->Verificamos que el juzgador no tenga asignada una audiencia para la siguiente fecha y hora <b>" . $fechaInicialAudiencia . "</b> hasta <b>" . $fechaFinalAudiencia . "</b> IdJuzgador:<b>" . $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"] . "</b>";
                    $this->logger->w_onError($movimiento);
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                    if ($this->buscaDisponibilidadJuez($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $proveedor)) {
                        $tengoJuez = true;
                        $juez = $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"];

                        $movimiento = "-->Buscamos si el juzgador tiene salas asignadas";
                        $this->logger->w_onError($movimiento);
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

                        $salasJuzgadoresDto = new SalasjuzgadoresDTO();
                        $salasJuzgadoresDto->setIdJuzgador($juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"]);
                        $salasJuzgadoresDao = new SalasjuzgadoresDAO();
                        $salasJuzgadoresDto = $salasJuzgadoresDao->selectSalasjuzgadores($salasJuzgadoresDto, " ORDER BY cveCondicion ASC ", $proveedor);

                        $sala = 0;

                        if (count($salasJuzgadoresDto) > 0) {
                            $salas = array();
                            $historialSalas = array();
                            foreach ($salasJuzgadoresDto as $salaJuzgadorDto) {
                                $encontroSala = false;
                                if (sizeof($salas) > 0) {
                                    for ($z = 0; $z < count($salas); $z ++) {
                                        if ($salas[$z]["cveSala"] == $salaJuzgadorDto->getCveSala()) {
                                            $encontroSala = true;
                                            break;
                                        }
                                    }
                                } else {
                                    $encontroSala = false;
                                }

                                if ($encontroSala == false) {
                                    $salas[] = array("cveSala" => $salaJuzgadorDto->getCveSala());
                                }
                            }

                            if (sizeof($salas) > 1) {
                                $salas = $this->ordenSala($salas, $mesActual, $yearActual, $proveedor);
                                $indexSalas = 0;
                                //$indexSalas = 0;
//                                var_dump($salas);
                                $movimiento = "-->Comenzamos con el sorteo de las salas<br>";
                                for ($indexSalas = 0; $indexSalas < sizeof($salas); $indexSalas++) {
                                    $sala = $salas[$indexSalas]["cveSala"];

                                    $movimiento .= "-->Verificamos si la sala tiene disponibilidad <b>" . $sala . "</b><br>";
                                    $audienciasDto = new AudienciasDTO();
                                    $audienciasDto->setCveSala($sala);
                                    $audienciasDto->setCveEstatusAudiencia(1);
                                    
                                    $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);
                                    
                                    if ($audienciasDto != "") {
                                        $movimiento .= "-->la sala <b>".$sala ."</b> esta ocupada y por lo tanto no podra asignarse una audiencia en ella";
                                        $tengoSala = false;
                                    } else {
                                        $movimiento .= "-->Encontramos sala <b>".$sala ."</b>";
                                        $tengoSala = true;
                                        break;
//                                        echo "Si se encontro sala";
                                    }
                                 
                                }
                                $movimiento .= "-->Termina el ciclo del sorteo de audiencias<br>";
//                                while (($sala == 0) && ($tengoSala == false)) {
//                                    $sala = $salas[$indexSalas]["cveSala"];
//                                    $movimiento = "-->Verificamos si la sala tiene disponibilidad <b>" . $sala . "</b>";
//                                    $audienciasDto = new AudienciasDTO();
//                                    $audienciasDto->setCveSala($sala);
//                                    $audienciasDto->setCveEstatusAudiencia(1);
//                                    $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
//                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
// ) ", $proveedor);
//
//                                    if ($audienciasDto != "") {
//                                        $movimiento .= "-->la sala <b>" . $sala . "</b> esta ocupada y por lo tanto no podra asignarse una audiencia en ella";
//                                        $tengoSala = false;
//                                        if ($indexSalas < sizeof($salas)) {
//                                            $indexSalas ++;
//                                            $movimiento .= "-->Nos movemos a la siguiente sala";
//                                        } else {
//                                            $sala = 0;
//                                            $tengoSala = false;
//                                            $indexSalas = 0;
//                                            $movimiento .= "-->Terminamos el ciclo llegamos al numero maximo de salas";
//                                            break;
//                                        }
//                                    } else {
//                                        $movimiento .= "-->Encontramos sala <b>" . $sala . "</b>";
//                                        $tengoSala = true;
//                                    }
//                                }
//                                $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                $movimiento .= "-->Salas " . json_encode($salas);
                                if (($tengoSala === false)) {
                                    $movimiento .= "-->No se logro obtener la sala";
                                    $sala = 0;
                                } else {
                                    $movimiento .= "-->La sala disponible que se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                }
                                $this->logger->w_onError($movimiento);
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            } else if ((count($salas) > 0) && (count($salas) < 2)) {
                                $sala = $salas[0]["cveSala"];
                                $audienciasDto = new AudienciasDTO();
                                $audienciasDto->setCveSala($sala);
                                $audienciasDto->setCveEstatusAudiencia(1);
                                $audienciasDao = new AudienciasDAO();
                                $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);

                                if ($audienciasDto != "") {
                                    $tengoSala = false;
                                    $sala = 0;
                                } else {
                                    $tengoSala = true;
                                }
//                                $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                if (($tengoSala === false)) {
                                    $movimiento = "-->No se logro obtener la sala";
                                    $sala = 0;
                                } else {
                                    $movimiento = "-->La sala disponible qeu se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                }
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            } else {
                                $tengoSala = true;
                                $error = true;
                                $movimiento = "-->El juzgado no cuenta con salas verificar en el catalogo de atencion salas juzgados";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                break;
                            }
                        } else {
                            $movimiento = "-->El Juzgador no tiene salas asignadas buscaremos las salas del juzgado que son comodinas";
                            $this->logger->w_onError($movimiento);
                            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            $atencionsalasDto = new AtencionsalasDTO();
                            $atencionsalasDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
                            $atencionsalasDto->setCveCondicion(1);
                            $atencionsalasDao = new AtencionsalasDAO();
                            $atencionsalasDto = $atencionsalasDao->selectAtencionsalas($atencionsalasDto, "ORDER BY cveCondicion ASC ", $proveedor);

                            $salas = array();
                            $historialSalas = array();
                            if (count($atencionsalasDto) > 0) {
                                foreach ($atencionsalasDto as $atencionsalaDto) {
                                    $salasDto = new SalasDTO();
                                    $salasDto->setCveSala($atencionsalaDto->getCveSala());
                                    $salasDto->setComodin("S");
                                    $salasDto->setSorteo("S");
                                    $salasDto->setActivo("S");
                                    $salasDao = new SalasDAO();
                                    $salasDto = $salasDao->selectSalas($salasDto, "LIMIT 0,1 ", $proveedor);
                                    if (count($salasDto) > 0) {
                                        $encontroSala = false;
                                        if (count($salas) > 0) {
                                            for ($z = 0; $z < count($salas); $z ++) {
                                                if ($salas[$z]["cveSala"] == $atencionsalaDto->getCveSala()) {
                                                    $encontroSala = true;
                                                    break;
                                                }
                                            }
                                        } else {
                                            $encontroSala = false;
                                        }
                                        if ($encontroSala == false) {
                                            $salas[] = array("cveSala" => $atencionsalaDto->getCveSala());
                                        }
                                    }
                                }
                            }

                            if (count($salas) > 1) {
                                $movimiento = "-->El juzgado cuenta con mas de una sala comodina";
                                $this->logger->w_onError($movimiento);
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

                                $movimiento = "-->Ordenamos las salas obtenidas: " . json_encode($salas);
                                $this->logger->w_onError($movimiento);
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                $salas = $this->ordenSala($salas, $mesActual, $yearActual, $proveedor);

                                $movimiento = "-->Salas ordenadas: " . json_encode($salas);
                                $this->logger->w_onError($movimiento);
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

                                $indexSalas = 0;
//                                var_dump($salas);
                                $movimiento = "-->Comenzamos con el sorteo de las salas<br>";
                                for ($indexSalas = 0; $indexSalas < sizeof($salas); $indexSalas++) {
                                    $sala = $salas[$indexSalas]["cveSala"];

                                    $movimiento .= "-->Verificamos si la sala tiene disponibilidad <b>" . $sala . "</b><br>";
                                    $audienciasDto = new AudienciasDTO();
                                    $audienciasDto->setCveSala($sala);
                                    $audienciasDto->setCveEstatusAudiencia(1);
                                    
                                    $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);
                                    
                                    if ($audienciasDto != "") {
                                        $movimiento .= "-->la sala <b>".$sala ."</b> esta ocupada y por lo tanto no podra asignarse una audiencia en ella";
                                        $tengoSala = false;
                                    } else {
                                        $movimiento .= "-->Encontramos sala <b>".$sala ."</b>";
                                        $tengoSala = true;
                                        break;
//                                        echo "Si se encontro sala";
                                    }
                                 
                                }
                                $movimiento .= "-->Termina el ciclo del sorteo de audiencias<br>";




//                                while (($sala == 0) && ($tengoSala == false)) {
//                                    $sala = $salas[$indexSalas]["cveSala"];
//                                    $movimiento .= "-->Verificamos si la sala tiene disponibilidad <b>".$sala ."</b><br>";
//                                    $audienciasDto = new AudienciasDTO();
//                                    $audienciasDto->setCveSala($sala);
//                                    $audienciasDao = new AudienciasDAO(); //$fechaInicialAudiencia, $fechaFinalAudiencia
//                                    $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
//  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
//  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
// ) ", $proveedor);
//                                    if ($audienciasDto != "") {
//                                        $movimiento .= "-->la sala <b>".$sala ."</b> esta ocupada y por lo tanto no podra asignarse una audiencia en ella";
//                                        $tengoSala = false;
//                                        if ($indexSalas < sizeof($salas)) {
//                                            $movimiento .= "-->Nos movemos a la siguiente sala";
//                                            $indexSalas ++;
//                                            //$sala = 0;
////                                            echo "avanza";
//                                        } else {
//                                            $sala = 0;
//                                            $tengoSala = false;
//                                            $indexSalas = 0;
//                                            $movimiento .= "-->Terminamos el ciclo llegamos al numero maximo de salas";
//                                            break;
//                                        }
//                                    } else {
//                                        $movimiento .= "-->Encontramos sala <b>".$sala ."</b>";
//                                        $tengoSala = true;
//                                        break;
////                                        echo "Si se encontro sala";
//                                    }
//                                }
                                $movimiento .= "-->Salas " . json_encode($salas);

                                if (($tengoSala === false)) {
                                    $movimiento .= "-->No se logro obtener la sala con el siguiente indice: " . $indexSalas;
                                    $sala = 0;
                                    $tengoSala = false;
                                } else {
                                    $movimiento .= "-->La sala disponible que se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                }
                                $movimiento.="<b>APARENTEMENTE TODO VA FUNCIONANDO DE FORMA CORRECTA</b><br>";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            } else if ((count($salas) > 0) && (count($salas) < 2)) {
                                $sala = $salas[0]["cveSala"];
                                $audienciasDto = new AudienciasDTO();
                                $audienciasDto->setCveSala($sala);
                                $audienciasDao = new AudienciasDAO();
                                $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto, " And ((fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "') or 
  (fechaInicial>='" . $fechaInicialAudiencia . "' And fechaFinal<='" . $fechaFinalAudiencia . "' And fechaInicial<'" . $fechaFinalAudiencia . "' And fechaFinal>'" . $fechaInicialAudiencia . "') or
  (fechaInicial<='" . $fechaInicialAudiencia . "' And fechaFinal>='" . $fechaFinalAudiencia . "') 
 ) ", $proveedor);

                                if ($audienciasDto != "") {
                                    $tengoSala = false;
                                    $sala = 0;
                                } else {
                                    $tengoSala = true;
                                }
//                                $movimiento = "-->La sala disponible qeu se logro obtener " . $sala;
                                if (($tengoSala === false)) {
                                    $movimiento = "-->No se logro obtener la sala";
                                    $sala = 0;
                                } else {
                                    $movimiento = "-->La sala disponible qeu se logro obtener " . $sala . " error: " . $error . " tengoSala: " . $tengoSala;
                                }
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], $sala, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                            } else {
                                $tengoSala = true;
                                $error = true;
                                $movimiento = "-->El juzgado no cuenta con salas verificar en el catalogo de atencion salas juzgados";
                                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
                                break;
                            }
                        }
                    } else {
                        $movimiento = "-->Ej juzgador esta ocupado para la siguiente fecha y hora <b>" . $fechaInicialAudiencia . "</b> hasta <b>" . $fechaFinalAudiencia . "</b>";
                        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//No se encontraron salas comodinas por lo tanto no se puede continuar con la asignacion verificar atencion salas
//                        $error = true;
//
                    }
                } else {
                    $movimiento = "-->No cuenta con el roll para asignar la audiencia en las fechas <b>" . $fechaInicialAudiencia . "</b> hasta <b>" . $fechaFinalAudiencia . "</b>";
                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), $juzgadoresFinal[$tipoJuzgadores][$index]["idJuzgador"], 0, $cveJuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);
//El juzgador no tiene programacion con el rol solicitado
                }

                $yearFinal = substr($fechaFinalAudiencia, 0, 4);
                $mesFinal = substr($fechaFinalAudiencia, 5, 2);
                $diaFinal = substr($fechaFinalAudiencia, 8, 2);
                $horasFinal = substr($fechaFinalAudiencia, 11, 2);
                $minutosFinal = substr($fechaFinalAudiencia, 14, 2);

                if (($cataudienciasDto->getCveTipoAudiencia() == 1) || ($cataudienciasDto->getCveTipoAudiencia() == 3)) {
                    if (((int) $horas) >= 20) {
                        $horas = 8;
                        $horasParaSumar = 24;
                        $minutos = 30;
                    } else {
                        if (((int) $minutos >= 0) && ((int) $minutos < 15)) {
                            $minutos = 15;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 15) && ((int) $minutos < 30)) {
                            $minutos = 30;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 30) && ((int) $minutos < 45)) {
                            $minutos = 45;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 45) && ((int) $minutos < 60)) {
                            $minutos = 0;
                            $horasParaSumar = 1;
                        }
                    }
                } else {
                    if (((int) $horas) >= 20) {
                        $horas = 8;
                        $horasParaSumar = 24;
                        $minutos = 30;
                    } else {
                        if (((int) $minutos >= 0) && ((int) $minutos < 15)) {
                            $minutos = 15;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 15) && ((int) $minutos < 30)) {
                            $minutos = 30;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 30) && ((int) $minutos < 45)) {
                            $minutos = 45;
                            $horasParaSumar = 0;
                        } else if (((int) $minutos >= 45) && ((int) $minutos < 60)) {
                            $minutos = 0;
                            $horasParaSumar = 1;
                        }
                    }
                }
            }
            $fechaPosibleAudiencia = date("Y-m-d H:i", mktime($horas + $horasParaSumar, $minutos, 0, $mes, $dia, $year));
            $fechaAudiencia = mktime($horas + $horasParaSumar, $minutos, 0, $mes, $dia, $year);
        }
//        echo $juez . " ----->" . $sala . "----->" . $fechaInicialAudiencia . "------>" . $fechaFinalAudiencia . "---->" . $error . "<br>";
        if (($error == false) && ((int) $juez > 0) && ((int) $sala > 0)) {
            return array("estatus" => "correcto", "fechaInicial" => $fechaInicialAudiencia, "fechaFinal" => $fechaFinalAudiencia, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "Se encontro juez y sala de forma correcta");
        } else {
            if (($juez <= 0) && ($sala <= 0)) {
                return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro juez y sala para fijar la audiencia");
            } else if (($juez > 0) && ($sala <= 0)) {
                return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro sala para fijar la audiencia");
            } else if (($juez <= 0) && ($sala > 0)) {
                return array("estatus" => "error", "fechaInicial" => $tmpInicial, "fechaFinal" => $tmpFinal, "juez" => $juez, "sala" => $sala, "cveFuncionJuzgador" => $cveFuncionJuzgador[0], "mensaje" => "No se encontro juez para fijar la audiencia");
            }
        }

//        if($juez)

        if ($tmp == null) {
            $proveedor->close();
        }
    }

    public function quitarJuzgador($idJuzgador, $juzgadoresTotales) {
        $historial = array();
//        var_dump($juzgadoresTotales);
        for ($index = 0; $index < sizeof($juzgadoresTotales); $index++) {
            if ($juzgadoresTotales[$index]["idJuzgador"] == $idJuzgador) {
                
            } else {
                $historial[] = $juzgadoresTotales[$index];
            }
        }
//        var_dump($historial);
        return $historial;
    }

    public function bitacoraAsignacion($movimiento, $fechaMovimiento, $idSolicitud, $idJuzgador, $cveSala, $cveJuzgado, $fechaInicial, $fechaFinal) {
        $this->bitacoraAsignacion[] = new BitacoraasignacionesDTO();
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setObservaciones($movimiento);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setFechaMovimiento($fechaMovimiento);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setIdSolicitudAudiencia($idSolicitud);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setIdJuzgador($idJuzgador);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setCveSala($cveSala);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setCveJuzgado($cveJuzgado);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setFechaInicial($fechaInicial);
        $this->bitacoraAsignacion[sizeof($this->bitacoraAsignacion) - 1]->setFechaFInal($fechaFinal);
    }

    public function juzgadorAnterior($solictud, $proveedor = null) {
        $tmp = $proveedor;
        $audianciasJuzgadorDto = array();

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $idAudiencia = 0;

        $sql = "SELECT * FROM htsj_sigejupe.tblaudiencias Where idReferencia='" . $solictud->getIdReferencia() . "' And cveEstatusAudiencia in(1,2) order by fechaInicial DESC LIMIT 0,1";
        $this->logger->w_onError("-->" . $sql);
        $proveedor->execute($sql);

        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $row = $proveedor->fetch_array($proveedor->stmt, 0);
                $idAudiencia = $row["idAudiencia"];
            }
        }

        if ($idAudiencia > 0) {
            $this->logger->w_onError("-->" . $idAudiencia);
            $audianciasJuzgadorDto = new AudienciasjuzgadorDTO();
            $audianciasJuzgadorDto->setActivo("S");
            $audianciasJuzgadorDto->setIdAudiencia($idAudiencia);

            $audianciasJuzgadorDao = new AudienciasjuzgadorDAO();
            $audianciasJuzgadorDto = $audianciasJuzgadorDao->selectAudienciasjuzgador($audianciasJuzgadorDto, " Order By cveFuncionJuzgador ASC", $proveedor);
            //$this->logger->w_onError(var_dump($audianciasJuzgadorDto));
        } else {
//          $audianciasJuzgadorDto = array();  
        }

        if ($tmp == null) {
            $proveedor->close();
        }
//        var_dump($audianciasJuzgadorDto);
        return $audianciasJuzgadorDto;
    }

    public function juzgadoresEtapasIntermedia($SolicitudesaudienciasDto, $proveedor = null) {
        $tmp = $proveedor;

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
        $this->logger->w_onError("-->Buscamos la Solicitud: " . json_encode($SolicitudesaudienciasDto->toString()));
        $carpetasJudicialesDto = new CarpetasjudicialesDTO();
        $carpetasJudicialesDao = new CarpetasjudicialesDAO();
        $carpetasJudicialesDto->setNumero($SolicitudesaudienciasDto->getNumero());
        $carpetasJudicialesDto->setAnio($SolicitudesaudienciasDto->getAnio());
        $carpetasJudicialesDto->setCveJuzgado($SolicitudesaudienciasDto->getCveJuzgado());
        $carpetasJudicialesDto->setCveTipoCarpeta($SolicitudesaudienciasDto->getCveTipoCarpeta()); // Buscamos si tiene una carpeta de control
        $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);

        if ($carpetasJudicialesDto != "") {
            $carpetasJudicialesDto = $carpetasJudicialesDto[0];
            $this->logger->w_onError("-->Buscamos la carpeta judicial: " . json_encode($carpetasJudicialesDto->toString()));
            $antecedescarpetasDto = new AntecedescarpetasDTO();
            $antecedescarpetasDto->setCveTipoCarpeta(2);
            if ($carpetasJudicialesDto->getCveTipoCarpeta() == 1) {//Auxiliar
                $antecedescarpetasDto->setIdCarpetaPadre($carpetasJudicialesDto->getIdCarpetaJudicial());
                //Buscamos los hijos de auxiliar que sean de control
            } else if ($carpetasJudicialesDto->getCveTipoCarpeta() == 2) {//Control
                $antecedescarpetasDto->setIdCarpetaHija($carpetasJudicialesDto->getIdCarpetaJudicial());
                //Buscamos el padre de control que sean auxiliares
            }
            $antecedescarpetasDto->setActivo("S");
            $antecedescarpetasDao = new AntecedescarpetasDAO();
            $antecedescarpetasDto = $antecedescarpetasDao->selectAntecedescarpetas($antecedescarpetasDto, "");

            if ($antecedescarpetasDto != "") {
                $antecedescarpetasDto = $antecedescarpetasDto[0];
                $this->logger->w_onError("-->Buscamos el antecedes de carpeta judicial: " . json_encode($antecedescarpetasDto->toString()));
                $carpetasJudicialesDto = new CarpetasjudicialesDTO();
                $carpetasJudicialesDto->setIdCarpetaJudicial($antecedescarpetasDto->getIdCarpetaPadre());
                $carpetasJudicialesDto = $carpetasJudicialesDao->selectCarpetasjudiciales($carpetasJudicialesDto);
                if ($carpetasJudicialesDto != "") {
                    $carpetasJudicialesDto = $carpetasJudicialesDto[0];
                    $this->logger->w_onError("-->Buscamos el padre principal: " . json_encode($carpetasJudicialesDto->toString()));
                }
            }
        } else {
            $this->logger->w_onError("-->No se encontraron resultados de la carpeta judicial: " . json_encode($SolicitudesaudienciasDto->toString()));
        }

        if ($tmp == null) {
            $proveedor->close();
        }
        if ($carpetasJudicialesDto != "") {
            $this->logger->w_onError("-->Carpeta que regresa : " . json_encode($carpetasJudicialesDto->toString()));
        } else {
            $this->logger->w_onError("No se encontro el antecedente");
        }
        return $carpetasJudicialesDto;
    }

    public function ultimaFuncionJuzgador($solictud, $idJuzgador, $cveFuncionJuzgador, $proveedor = null) {
        $tmp = $proveedor;
        $audianciasJuzgadorDto = array();

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $idAudiencia = 0;

        $sql = "SELECT * FROM htsj_sigejupe.tblaudiencias Where idReferencia='" . $solictud->getIdReferencia() . "' And cveEstatusAudiencia in(1,2) order by fechaInicial DESC LIMIT 0,1";
        $proveedor->execute($sql);

        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $row = $proveedor->fetch_array($proveedor->stmt, 0);
                $idAudiencia = $row["idAudiencia"];
            }
        }

        if ($idAudiencia > 0) {
            $audianciasJuzgadorDto = new AudienciasjuzgadorDTO();
            $audianciasJuzgadorDto->setActivo("S");
            $audianciasJuzgadorDto->setIdAudiencia($idAudiencia);
            $audianciasJuzgadorDto->setIdJuzgador($idJuzgador);
            $audianciasJuzgadorDto->setCveFuncionJuzgador($cveFuncionJuzgador);

            $audianciasJuzgadorDao = new AudienciasjuzgadorDAO();
            $audianciasJuzgadorDto = $audianciasJuzgadorDao->selectAudienciasjuzgador($audianciasJuzgadorDto, " Order By cveFuncionJuzgador ASC", $proveedor);
        }

        if ($tmp == null) {
            $proveedor->close();
        }
//        var_dump($audianciasJuzgadorDto);
        return $audianciasJuzgadorDto;
    }

    public function funcionesJuzgador($cveTipoJuzgado, $tribunal) {

        $cveFuncionJuzgador = array();
        if (($cveTipoJuzgado == 1) && ($tribunal == 'N')) {//Identificamos si el juez sera de control
            $cveFuncionJuzgador[] = 1; //Juez de Control
        } else if (($cveTipoJuzgado == 2) && ($tribunal == 'N')) {
            $cveFuncionJuzgador[] = 2; //Juez de Juicio
        } else if (($cveTipoJuzgado == 3) && ($tribunal == 'N')) {
            $cveFuncionJuzgador[] = 3; //Juez de Ejecucion
        } else if (($cveTipoJuzgado == 4) && ($tribunal == 'S')) {
            $cveFuncionJuzgador[] = 4; //Juez de juicio presidente
            $cveFuncionJuzgador[] = 5; //Juez de juicio secretario
            $cveFuncionJuzgador[] = 6; //juez de juicio vocal
        } else if (($cveTipoJuzgado == 5) && ($tribunal == 'N')) {
            $cveFuncionJuzgador[] = 7; //Magistrado
        } else if (($cveTipoJuzgado == 5) && ($tribunal == 'S')) {
            $cveFuncionJuzgador[] = 8; //Magistrado presidente
            $cveFuncionJuzgador[] = 9; //Magistrado secretario
            $cveFuncionJuzgador[] = 10; //Magistrado vocal
        }
        return $cveFuncionJuzgador;
    }

    public function juzgado($cveJuzgado, $proveedor = null) {
        $tmp = $proveedor;

        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDto->setCveJuzgado($cveJuzgado);
        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "", $proveedor);

        if ($juzgadosDto != "") {
            $juzgadosDto = $juzgadosDto[0];
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        return $juzgadosDto;
    }

    public function filtramosJuzgadores($cveJuzgado, $fechaMovimiento, $SolicitudesaudienciasDto, $juzgadoresGeneral, $delitosConEspecilidad, $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor = null) {
        $tmp = $proveedor;
        $juzgadoresFinal = array();
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $movimiento = "-->Buscaremos los juzgadores si es que se necesita alguno con especialidad <br>";
        $this->logger->w_onError("-->Buscaremos los juzgadores si es que se necesita alguno con especialidad");
        $movimiento.= "-->La audiencia " . ((sizeof($delitosConEspecilidad) > 0) ? "" : " no ") . " requiere un juez con especilidad <br>";
        $this->logger->w_onError("-->La audiencia " . ((sizeof($delitosConEspecilidad) > 0) ? "" : " no ") . " requiere un juez con especilidad");
        for ($index = 0; $index < count($juzgadoresGeneral); $index ++) {
            if (sizeof($delitosConEspecilidad) > 0) {//Verificamos si la solicitud requiere un juez con especialidad
                if ($delitosConEspecilidad[0]->getCveEspecialidad() == $juzgadoresGeneral[$index]["cveEspecialidad"]) {
                    if ($this->juezParaSorteo($juzgadoresGeneral[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor) == true) {
                        $juzgadoresFinal[] = $juzgadoresGeneral[$index];
                    }
                }
            } else {

                if ($juzgadoresGeneral[$index]["cveEspecialidad"] == 1) { //Juesgador sin especialidad
                    if ($this->juezParaSorteo($juzgadoresGeneral[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor) == true) {
                        $juzgadoresFinal[] = $juzgadoresGeneral[$index];
                    }
                }
            }
        }


        if (sizeof($juzgadoresFinal) > 0) {
            $movimiento.= "-->Juzgadores con especialidad " . json_encode($juzgadoresFinal) . "<br>";
            $this->logger->w_onError("-->Juzgadores con especialidad " . json_encode($juzgadoresFinal));
        } else {
            $movimiento.= "-->No se encontraron juzgadores con la especialidad requerida se sorteara la audiencia entre los juzgadores del juzgado<br>";
            $this->logger->w_onError("-->No se encontraron juzgadores con la especialidad requerida se sorteara la audiencia entre los juzgadores del juzgado");
            $movimiento.= "-->Que cuenten con el roll que se necesita";
            $this->logger->w_onError("-->Que cuenten con el roll que se necesita");
            for ($index = 0; $index < count($juzgadoresGeneral); $index ++) {
                if ($juzgadoresGeneral[$index]["cveEspecialidad"] == 1) { //Juesgador sin especialidad
                    if ($this->juezParaSorteo($juzgadoresGeneral[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor) == true) {
                        $juzgadoresFinal[] = $juzgadoresGeneral[$index];
                    }
                }
            }

            $movimiento.= "-->Juzgadores " . json_encode($juzgadoresFinal) . "<br>";
            $this->logger->w_onError("-->Juzgadores " . json_encode($juzgadoresFinal));
        }

        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $SolicitudesaudienciasDto->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");


        if ($tmp == null) {
            $proveedor->close();
        }

//        var_dump($juzgadoresFinal);

        return $juzgadoresFinal;
    }

    public function obtenerJuzgadores($juzgadoresjuzgadosDto, $proveedor = null) {//$fechaInicial,$fechaFinal
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $error = false;
        $juzgadores = array();

        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, "", $proveedor);

        if ($juzgadoresjuzgadosDto != "") {
            for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDto->setIdJuzgador($juzgadoresjuzgadosDto[$index]->getIdJuzgador());
                $juzgadoresDto->setActivo("S");
                $juzgadoresDto->setSorteo("S");
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $proveedor);

                if ($juzgadoresDto != "") {
                    for ($x = 0; $x < count($juzgadoresDto); $x++) {
                        $juzgadores[] = array("Nombre" => $juzgadoresDto[$x]->getNombre() . " " . $juzgadoresDto[$x]->getPaterno() . " " . $juzgadoresDto[$x]->getMaterno(), "idJuzgador" => $juzgadoresDto[$x]->getIdJuzgador(), "sorteo" => $juzgadoresDto[$x]->getSorteo(), "cveTipoJuzgador" => $juzgadoresDto[$x]->getCveTipoJuzgador(), "cveEspecialidad" => $juzgadoresDto[$x]->getCveEspecialidad());
                    }
                }
            }
        } else {
            $error = true;
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        if (!$error) {
            return $juzgadores;
        }
    }

    public function datosAntecedentesJuzgador($juzgadoresjuzgadosDto, $proveedor = null) {//$fechaInicial,$fechaFinal
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $error = false;
        $juzgadores = array();

        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " GROUP BY idJuzgador", $proveedor);

        if ($juzgadoresjuzgadosDto != "") {
            for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDto->setIdJuzgador($juzgadoresjuzgadosDto[$index]->getIdJuzgador());
                $juzgadoresDto->setActivo("S");
//                $juzgadoresDto->setSorteo("S");
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $proveedor);

                if ($juzgadoresDto != "") {
                    for ($x = 0; $x < count($juzgadoresDto); $x++) {

                        $juzgadores[] = array("Nombre" => $juzgadoresDto[$x]->getNombre() . " " . $juzgadoresDto[$x]->getPaterno() . " " . $juzgadoresDto[$x]->getMaterno(), "idJuzgador" => $juzgadoresDto[$x]->getIdJuzgador(), "sorteo" => $juzgadoresDto[$x]->getSorteo(), "cveTipoJuzgador" => $juzgadoresDto[$x]->getCveTipoJuzgador(), "cveEspecialidad" => $juzgadoresDto[$x]->getCveEspecialidad());
                    }
                }
            }
        } else {
            $error = true;
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        if (!$error) {
//            var_dump($juzgadores);
            return $juzgadores;
        }
    }

    public function datosJuzgador($juzgadoresjuzgadosDto, $proveedor = null) {//$fechaInicial,$fechaFinal
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $error = false;
        $juzgadores = array();

        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, " GROUP BY idJuzgador", $proveedor);

        if ($juzgadoresjuzgadosDto != "") {
            for ($index = 0; $index < count($juzgadoresjuzgadosDto); $index++) {
                $juzgadoresDto = new JuzgadoresDTO();
                $juzgadoresDto->setIdJuzgador($juzgadoresjuzgadosDto[$index]->getIdJuzgador());
                $juzgadoresDto->setActivo("S");
//                $juzgadoresDto->setSorteo("S");
                $juzgadoresDao = new JuzgadoresDAO();
                $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, "", $proveedor);

                if ($juzgadoresDto != "") {
                    for ($x = 0; $x < count($juzgadoresDto); $x++) {
                        $juzgadores[] = array("Nombre" => $juzgadoresDto[$x]->getNombre() . " " . $juzgadoresDto[$x]->getPaterno() . " " . $juzgadoresDto[$x]->getMaterno(), "idJuzgador" => $juzgadoresDto[$x]->getIdJuzgador(), "sorteo" => $juzgadoresDto[$x]->getSorteo(), "cveTipoJuzgador" => $juzgadoresDto[$x]->getCveTipoJuzgador(), "cveEspecialidad" => $juzgadoresDto[$x]->getCveEspecialidad());
                    }
                }
            }
        } else {
            $error = true;
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        if (!$error) {
//            var_dump($juzgadores);
            return $juzgadores;
        }
    }

    public function juezParaSorteo($idJuzgador, $fechaInicio, $fechaFinal, $rolJuzgador, $proveedor = null) {
        $tmp = $proveedor;
        $disponible = false;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $sql = "SELECT idProgramacionJuzgador,idJuzgador,cveRolJuzgador,fechaInicio,fechaFinal,activo,fechaRegistro,fechaActualizacion,idProgramacion FROM tblprogramacionjuzgadores WHERE idJuzgador='" . $idJuzgador . "' AND cveRolJuzgador='" . $rolJuzgador . "' AND fechaFinal>='" . $fechaInicio . "' AND fechaInicio<='" . $fechaFinal . "'";
        $this->logger->w_onError($sql);
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $disponible = true;
            } else {
                $disponible = false;
            }
        } else {
            $disponible = false;
        }


        if ($tmp == null) {
            $proveedor->close();
        }

        return $disponible;
    }

    public function buscaProgramacionJuez($idJuzgador, $fechaInicio, $fechaFinal, $rolJuzgador, $cveJuzgado, $proveedor = null) {
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }
        $disponible = false;
        $sql = "SELECT PJ.idProgramacionJuzgador,PJ.idJuzgador,PJ.cveRolJuzgador,PJ.fechaInicio,PJ.fechaFinal,PJ.activo,PJ.fechaRegistro,PJ.fechaActualizacion,PJ.idProgramacion,P.cveJuzgado 
FROM tblprogramacionjuzgadores PJ,tblprogramaciones P
WHERE PJ.idJuzgador='" . $idJuzgador . "' AND PJ.cveRolJuzgador='" . $rolJuzgador . "' 
AND PJ.idProgramacion=P.idProgramacion
And P.cveJuzgado='" . $cveJuzgado . "'
AND PJ.fechaFinal>='" . $fechaFinal . "' AND PJ.fechaInicio<='" . $fechaInicio . "'";

        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $disponible = true;
            } else {
                $disponible = false;
            }
        } else {
            $disponible = false;
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        return $disponible;
    }

    public function buscaDisponibilidadJuez($idJuzgador, $fechaInicio, $fechaFinal, $proveedor = null) { //Este metodo me ayuda a saber si un juez tiene audiencias asignadas
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $disponible = false;

        $sql = " SELECT * FROM htsj_sigejupe.tblaudiencias A,tblaudienciasjuzgador AJ 
 Where 
 ((A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "') or
  (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "') or 
  (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "') or
  (A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "') 
 )
 And AJ.idJuzgador='" . $idJuzgador . "' And A.activo='S' And A.cveEstatusAudiencia='1' And AJ.idAudiencia=A.idAudiencia";

        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) <= 0) {
                $disponible = true;
            } else {
                $disponible = false;
            }
        } else {
            $disponible = false;
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        return $disponible;
    }

    public function ponderacionAsunto($impofedel, $proveedor) {
        $peso = 0;
        $delitosDao = new DelitosDAO();
        $delitosSolicitudesDao = new DelitossolicitudesDAO();
        $impofedelsolicitudesDto = new ImpofedelsolicitudesDTO();

        for ($index = 0; $index < sizeof($impofedel); $index ++) {
            $delitosSolicitudesDto = new DelitossolicitudesDTO();
            $delitosSolicitudesDto->setIdDelitoSolicitud($impofedel[$index]->getIdDelitoSolicitud());
            $delitosSolicitudesDto->setActivo("S");

            $delitosSolicitudesDto = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto, "", $proveedor);

            if ($delitosSolicitudesDto != "") {
                $delitosDto = new DelitosDTO();
                $delitosDto->setCveDelito($delitosSolicitudesDto[0]->getCveDelito());
                $delitosDto = $delitosDao->selectDelitos($delitosDto, "", $proveedor);
                if ($delitosDto != "") {
                    $peso += 1 + 1 + $delitosDto[0]->getPeso();
                }
            }
        }

        return $peso;
    }

    public function ordenSala($salas, $mes, $year, $proveedor) {
        $historial = array();
        $controlsalasDao = new ControlsalasDAO();
        for ($index = 0; $index < sizeof($salas); $index ++) {
            $controlsalasDto = new ControlsalasDTO();
            $controlsalasDto->setCveSala($salas[$index]["cveSala"]);

            $controlsalasDto = $controlsalasDao->selectControlsalas($controlsalasDto, " AND cveMes='" . $mes . "' AND anio='" . $year . "' ORDER BY totalHoras ASC ", $proveedor);

            if ($controlsalasDto != "") {
                $historial[] = array("cveSala" => $controlsalasDto[0]->getCveSala(), "totalHoras" => $controlsalasDto[0]->getTotalHoras(), "control" => $controlsalasDto[0]->getControl());
            } else {
                $historial[] = array("cveSala" => $salas[$index]["cveSala"], "totalHoras" => 0, "control" => 0);
            }
        }
        $historial = $this->burbujaSalas($historial);
        return $historial;
    }

    public function ordenaJuzgadores($solicitud, $antecedente = "N", $juzgadores, $cveJuzgado, $mes, $year, $funcionJuzgador, $proveedor) {
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $historial = array();

        $numjuzgadores = sizeof($funcionJuzgador);
        $index = 0;

        $controlcargasDao = new ControlcargasDAO();

        if (sizeof($funcionJuzgador) == 1) {//Juez unitario
            $tipoJuzgadores = "";
            if ($funcionJuzgador[0] == 1) {
                $tipoJuzgadores = "control";
            } else if ($funcionJuzgador[0] == 2) {
                $tipoJuzgadores = "juicio";
            } else if ($funcionJuzgador[0] == 3) {
                $tipoJuzgadores = "ejecucion";
            } else if ($funcionJuzgador[0] == 7) {
                $tipoJuzgadores = "magistrado";
            }
            $this->logger->w_onError("-->Juez Unitario " . $tipoJuzgadores);
            for ($index = 0; $index < sizeof($juzgadores); $index ++) {
                $controlcargasDto = new ControlcargasDTO();
                $controlcargasDto->setIdJuzgador($juzgadores[$index]["idJuzgador"]);
                $controlcargasDto->setCveFuncionJuzgador($funcionJuzgador[0]);
                $controlcargasDto->setCveJuzgado($cveJuzgado);
                $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga='" . $year . "' And cveMes='" . $mes . "' ORDER BY totalPuntaje ASC", $proveedor); //FOR UPDATE
                if ($controlcargasDto != "") {
                    $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => $controlcargasDto[0]->getTotalAsignado(), "puntageTotal" => $controlcargasDto[0]->getTotalPuntaje(), "control" => $controlcargasDto[0]->getControl());
                } else {
                    $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => 0, "puntageTotal" => 0, "control" => 0);
                }
            }
            $this->logger->w_onError("-->Juzgadores " . json_encode($historial));
            if (sizeof($historial) > 0) {
                $this->logger->w_onError("-->Lo enviamos a el metodo de la burbuja ");
                $historial[$tipoJuzgadores] = $this->burbuja($historial[$tipoJuzgadores]);
            }
        } else if (sizeof($funcionJuzgador) == 3) {//Tribunal
            if ($antecedente == "N") {
                for ($x = 0; $x < sizeof($funcionJuzgador); $x ++) {
                    $tipoJuzgadores = "";
                    if ($funcionJuzgador[$x] == 4) {
                        $tipoJuzgadores = "presidente";
                    } else if ($funcionJuzgador[$x] == 5) {
                        $tipoJuzgadores = "secretario";
                    } else if ($funcionJuzgador[$x] == 6) {
                        $tipoJuzgadores = "vocal";
                    }

                    for ($index = 0; $index < sizeof($juzgadores); $index ++) {
                        $controlcargasDto = new ControlcargasDTO();
                        $controlcargasDto->setIdJuzgador($juzgadores[$index]["idJuzgador"]);
                        $controlcargasDto->setCveFuncionJuzgador($funcionJuzgador[$x]);
                        $controlcargasDto->setCveJuzgado($cveJuzgado);
                        $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga='" . $year . "' And cveMes='" . $mes . "' ORDER BY totalPuntaje ASC", $proveedor);
                        if ($controlcargasDto != "") {
                            $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => $controlcargasDto[0]->getTotalAsignado(), "puntageTotal" => $controlcargasDto[0]->getTotalPuntaje(), "control" => $controlcargasDto[0]->getControl());
                        } else {
                            $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => 0, "puntageTotal" => 0, "control" => 0);
                        }
                    }
                }
                if (sizeof($historial) > 0) {
                    $historial[$tipoJuzgadores] = $this->burbuja($historial["presidente"]);
                    $historial[$tipoJuzgadores] = $this->burbuja($historial["secretario"]);
                    $historial[$tipoJuzgadores] = $this->burbuja($historial["vocal"]);
                }
            } else if ($antecedente == "S") { //Aqui falta buscar los juzgadores deacuerdo a la ultima audiencia que se tubo
                for ($x = 0; $x < sizeof($funcionJuzgador); $x ++) {
                    $tipoJuzgadores = "";
                    if ($funcionJuzgador[$x] == 4) {
                        $tipoJuzgadores = "presidente";
                    } else if ($funcionJuzgador[$x] == 5) {
                        $tipoJuzgadores = "secretario";
                    } else if ($funcionJuzgador[$x] == 6) {
                        $tipoJuzgadores = "vocal";
                    }
                    //ultimaFuncionJuzgador($solictud, $idJuzgador,$cveFuncionJuzgador, $proveedor = null)
                    for ($index = 0; $index < sizeof($juzgadores); $index ++) {
                        $audianciasJuzgadorDto = $this->ultimaFuncionJuzgador($solicitud, $juzgadores[$index]["idJuzgador"], $funcionJuzgador[$x], $proveedor);
                        if ($audianciasJuzgadorDto != "") {
                            $controlcargasDto = new ControlcargasDTO();
                            $controlcargasDto->setIdJuzgador($juzgadores[$index]["idJuzgador"]);
                            $controlcargasDto->setCveFuncionJuzgador($funcionJuzgador[$x]);
                            $controlcargasDto->setCveJuzgado($cveJuzgado);
                            $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga=date_Format(now(),'%Y')", $proveedor);
                            if ($controlcargasDto != "") {
                                $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => $controlcargasDto[0]->getTotalAsignado(), "puntageTotal" => $controlcargasDto[0]->getTotalPuntaje(), "control" => $controlcargasDto[0]->getControl());
                            } else {
                                $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => 0, "puntageTotal" => 0, "control" => 0);
                            }
                        }
                    }


//                    for ($index = 0; $index < sizeof($juzgadores); $index ++) {
//                        $controlcargasDto = new ControlcargasDTO();
//                        $controlcargasDto->setIdJuzgador($juzgadores[$index]["idJuzgador"]);
//                        $controlcargasDto->setCveFuncionJuzgador($funcionJuzgador[$x]);
//                        $controlcargasDto->setCveJuzgado($cveJuzgado);
//                        $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga=date_Format(now(),'%Y')", $proveedor);
//                        if ($controlcargasDto != "") {
//                            $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => $controlcargasDto[0]->getTotalAsignado(), "puntageTotal" => $controlcargasDto[0]->getTotalPuntaje(), "control" => $controlcargasDto[0]->getControl());
//                        } else {
//                            $historial[$tipoJuzgadores][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "totalAsignados" => 0, "puntageTotal" => 0, "control" => 0);
//                        }
//                    }
                }
                if (sizeof($historial) > 0) {
//                    $historial[$tipoJuzgadores] = $this->burbuja($historial["presidente"]);
//                    $historial[$tipoJuzgadores] = $this->burbuja($historial["secretario"]);
//                    $historial[$tipoJuzgadores] = $this->burbuja($historial["vocal"]);
                }
            }
        }

//        var_dump($historial);

        if ($tmp == null) {
            $proveedor->close();
        }
//        echo json_encode($historial);
        return $historial;
    }

    public function burbujaSalas($vector) {//Metodo para ordenar por carga de trabajo deacuerdo a la ponderacion de asuntos radicados
        if (sizeof($vector) > 0) {
            $aux = "";
            for ($x = 0; $x < sizeof($vector); $x ++) {
                for ($y = 0; $y < sizeof($vector) - 1; $y ++) {
                    $total1 = ($vector[$y]["totalHoras"] + (int) $vector[$y]["control"]);
                    $total2 = ($vector[$y + 1]["totalHoras"] + (int) $vector[$y]["control"]);
                    $this->logger->w_onError("-->Sala " . $vector[$y]["cveSala"] . ":" . $total1 . "===" . $total2);
                    if ($total1 > $total2) {
                        $aux = $vector[$y];
                        $vector[$y] = $vector[$y + 1];
                        $vector[$y + 1] = $aux;
                    }
                }
            }

            $this->logger->w_onError("-->Salas ordenadas " . json_encode($vector));

            return $vector;
        }

        return "";
    }

    public function burbuja($vector) {//Metodo para ordenar por carga de trabajo deacuerdo a la ponderacion de asuntos radicados
        if (sizeof($vector) > 0) {
            $aux = "";
            $this->logger->w_onError("-->Vector:  " . json_encode($vector));
            for ($x = 0; $x < sizeof($vector); $x ++) {
                for ($y = 0; $y < sizeof($vector) - 1; $y ++) {
                    $total1 = ($vector[$y]["puntageTotal"] + $vector[$y]["control"]);
                    $total2 = ($vector[$y + 1]["puntageTotal"] + $vector[$y]["control"]);
                    $this->logger->w_onError("-->Juzgador:  " . $vector[$y]["idJuzgador"] . ":" . $total1 . "===" . $total2);
                    if ($total1 > $total2) {
                        $aux = $vector[$y];
                        $vector[$y] = $vector[$y + 1];
                        $vector[$y + 1] = $aux;
                    }
                }
            }

            $this->logger->w_onError("-->Vector ordenado:  " . json_encode($vector));
            return $vector;
        }

        return "";
    }

}

//$SolicitudesaudienciasDTO = new SolicitudesaudienciasDTO();
//$SolicitudesaudienciasDTO->setIdSolicitudAudiencia(2851);
//$SolicitudesaudienciasDAO = new SolicitudesaudienciasDAO();
//$SolicitudesaudienciasDTO = $SolicitudesaudienciasDAO->selectSolicitudesaudiencias($SolicitudesaudienciasDTO);
//
//$cataudienciasDto = new CataudienciasDTO();
//$cataudienciasDto->setCveCatAudiencia($SolicitudesaudienciasDTO[0]->getCveCatAudiencia());
//$cataudienciasDao = new CataudienciasDAO();
//$cataudienciasDto = $cataudienciasDao->selectCataudiencias($cataudienciasDto, "");
//
//$fechaMovimiento = "2016-02-09 12:59:00";
//
//$buscarJuzgadores = new BuscarJuzgadores();
//$buscarJuzgadores->obtenerJuzgador($SolicitudesaudienciasDTO[0], 10041, 1, array(), "2016-02-09 10:12", "2016-03-13 10:12", $cataudienciasDto[0], array(), "S", "30", "02", "2016", $fechaMovimiento, "02", "2016");
//$buscarJuzgadores->juzgadorAnterior($SolicitudesaudienciasDTO[0]);
?>
