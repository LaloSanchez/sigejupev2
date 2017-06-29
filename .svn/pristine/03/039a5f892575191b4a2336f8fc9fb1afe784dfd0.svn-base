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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasdistritos/AudienciasdistritosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlsalas/ControlsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlsalas/ControlsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/rolesjuzgadores/RolesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgados/TiposjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/funcionesjuzgadores/FuncionesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/funcionesjuzgadores/FuncionesjuzgadoresDTO.Class.php");

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

        try {

            $juzgadoDto = "";
            $juzgadoresCarpetasDto = "";
            $juzgadores = array();
            $cveFuncionJuzgador = array();
            $juzgadorNuevo = false;
            $respuesta = array();

            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }
            //$this->proveedor = new Proveedor('mysql', 'sigejupe');
            $movimiento = "-->Comenzamos a buscar el juzgador que podra llevar acabo la audiencia<br>";
            $this->logger->w_onError("-->Comenzamos a buscar el juzgador que podra llevar acabo la audiencia");
            $movimiento .= "-->solicitada por el juzgado ";
            $this->logger->w_onError("-->solicitada por el juzgado ");

            $juzgadoDto = $this->juzgado($cveJuzgado, $this->proveedor);

            if ($juzgadoDto != "") {
                $movimiento .= "<b>" . $juzgadoDto->getDesJuzgado() . "</b> al cual pertenece la solicitud de la audiencia<br>";
                $this->logger->w_onError("-->" . $juzgadoDto->getDesJuzgado() . " al cual pertenece la solicitud de la audiencia");
            } else {
                $movimiento .= "--> <b>La clave del juzgado no se encuentra en el catalogo</b> <br>";
                $this->logger->w_onError("-->La clave del juzgado no se encuentra en el catalogo");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                throw new Exception("El Juzgado no esta definido en el catalogo de juzgados " . $cveJuzgado, "10001");
            }

            $movimiento .= "-->Todo va de forma correcta ahora procedemos a buscar al juez propietario de la carpeta judicial<br>";
            $this->logger->w_onError("-->Todo va de forma correcta ahora procedemos a buscar al juez propietario de la carpeta judicial");

            $juzgadoresCarpetasDto = $this->juzgadorCarpeta($solicitud->getIdReferencia(), $this->proveedor);

            if (($juzgadoresCarpetasDto != "") && (sizeof($juzgadoresCarpetasDto) > 0)) {
                $juzgadoresCarpetasDto = $juzgadoresCarpetasDto[0];
                $movimiento .= "-->Se encontro juez propietario con clave " . $juzgadoresCarpetasDto["idJuzgador"] . "<br>";
                $this->logger->w_onError("-->Se encontro juez propietario con clave " . $juzgadoresCarpetasDto["idJuzgador"] . "<br>");
                $juzgadores[0] = $juzgadoresCarpetasDto;
            } else {
                $movimiento .= "-->La carpeta no cuenta con un juzgador propietario se asignara al que desahogue la audiencia<br>";
                $this->logger->w_onError("-->La carpeta no cuenta con un juzgador propietario se asignara al que desahogue la audiencia");
            }

            $movimiento .= "-->Todo va de forma correcta ahora procedemos a buscar el historia de audiencias celebradas para buscar el antecedente<br>";
            $movimiento .= "-->Ordenandolas por fecha de la mas antigua a la mas reciente<br>";
            $this->logger->w_onError("-->Todo va de forma correcta ahora procedemos a buscar el historia de audiencias celebradas para buscar el antecedente");
            $this->logger->w_onError("-->Ordenandolas por fecha de la mas antigua a la mas reciente");

            $juzgadores = $this->historiaAudiencias($solicitud, $juzgadores, $this->proveedor);

            $movimiento .= "-->Se enconraron un total de " . sizeof($juzgadores) . " juzgadores que conocieron sobre la carpeta<br>";
            $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . "<br>";
            $this->logger->w_onError("-->Se enconraron un total de " . sizeof($juzgadores) . " juzgadores que conocieron sobre la carpeta");
            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
//            $juzgadores = array();
//            $solicitud->setCveTipoCarpeta(2);
            if ((sizeof($juzgadores) <= 0) || ($juzgadores == "")) {
                $juzgadores = array();
                $movimiento .= "-->Como no existen juzgadores de antecedente para la carpeta judicial se procede a subir el nivel<br>";
                $this->logger->w_onError("-->Como no existen juzgadores de antecedente para la carpeta judicial se procede a subir el nivel<br>");
                $movimiento .= "-->A la carpeta padre<br>";
                $this->logger->w_onError("-->A la carpeta padre");

                $solicitudTmp = new SolicitudesaudienciasDTO();

                if ($solicitud->getCveTipoCarpeta() == 1) {//AUXILIAR
                    /*
                     * En esta opcion ya no podremos escalar porque ya estamos en el numero de carpeta donde pueden llegar a nacer las 
                     * causas de control
                     */
                    $movimiento .= "-->Si la carpeta es de tipo AUXILIAR se reconoce que no tiene padres<br>";
                    $this->logger->w_onError("-->Si la carpeta es de tipo AUXILIAR se reconoce que no tiene padres");
                    $movimiento .= "-->Entonces no hay a donde subir<br>";
                    $this->logger->w_onError("-->Entonces no hay a donde subir");
                    $this->logger->w_onError("-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado");
                    $movimiento .= "-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado<br>";
                    $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                    $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                    $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . "<br>";
                    $juzgadorNuevo = true;
                } elseif ($solicitud->getCveTipoCarpeta() == 2) {//CAUSA DE CONTROL
                    $movimiento .= "-->Si la carpeta es de tipo CAUSA DE CONTROL se reconoce que su carpeta padre es un auxiliar<br>";
                    $this->logger->w_onError("-->Si la carpeta es de tipo CAUSA DE CONTROL se reconoce que su carpeta padre es un auxiliar");
                    $movimiento .= "-->Subimos un nivel para revizar que exista<br>";
                    $this->logger->w_onError("-->Subimos un nivel para revizar que exista");
                    $solicitudTmp->setIdReferencia($this->carpetaPadre($solicitudTmp->getIdReferencia(), 2, $this->proveedor));
                    $solicitudTmp->setCveJuzgado($solicitud->getCveJuzgado());
                    $this->logger->w_onError("-->" . json_encode($solicitudTmp->toString()));
                    if ((int) $solicitudTmp->getIdReferencia() == 0) {
                        $this->logger->w_onError("-->La carpeta judicial no tiene una carpeta judicial de antecedente");
                        $movimiento .= "-->La carpeta judicial no tiene una carpeta judicial de antecedente<br>";

                        $this->logger->w_onError("-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado");
                        $movimiento .= "-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado<br>";
                        $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                        $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                        $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . "<br>";
                        $juzgadorNuevo = true;
                    } elseif (((int) $solicitudTmp->getIdReferencia() > 0) && ($solicitudTmp->getIdReferencia() != null)) {
                        $this->logger->w_onError("-->La carpeta judicial tiene una carpeta padre idReferencia: " . $solicitudTmp->getIdReferencia());
                        $this->logger->w_onError("-->Buscaremos los juzgadores que ha conocido de la carpeta padre para poder sortear la audiencia entre ellos");
                        $this->logger->w_onError("-->y continuar con el principio de carpeta unica");
                        $movimiento .= "-->La carpeta judicial tiene una carpeta padre idReferencia: " . $solicitudTmp->getIdReferencia() . "<br>";
                        $movimiento .= "-->Buscaremos los juzgadores que ha conocido de la carpeta padre para poder sortear la audiencia entre ellos<br>";
                        $movimiento .= "-->y continuar con el principio de carpeta unica<br>";

                        $juzgadoresCarpetasDto = $this->juzgadorCarpeta($solicitudTmp->getIdReferencia(), $this->proveedor);

                        if (($juzgadoresCarpetasDto != "") && (sizeof($juzgadoresCarpetasDto) > 0)) {
                            $juzgadoresCarpetasDto = $juzgadoresCarpetasDto[0];
                            $movimiento .= "-->Se encontro juez propietario con clave " . $juzgadoresCarpetasDto["idJuzgador"] . "<br>";
                            $this->logger->w_onError("-->Se encontro juez propietario con clave " . $juzgadoresCarpetasDto["idJuzgador"] . "<br>");
                            $juzgadores[0] = $juzgadoresCarpetasDto;
                        } else {
                            $movimiento .= "-->La carpeta padre no cuenta con un juzgador propietario se asignara al que desahogue la audiencia<br>";
                            $this->logger->w_onError("-->La carpeta padre no cuenta con un juzgador propietario se asignara al que desahogue la audiencia");
                        }

                        $juzgadores = $this->historiaAudiencias($solicitudTmp, $juzgadores, $this->proveedor);

                        $movimiento .= "-->Se enconraron un total de " . sizeof($juzgadores) . " juzgadores que conocieron sobre la carpeta judicial Padre<br>";
                        $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . "<br>";
                        $this->logger->w_onError("-->Se enconraron un total de " . sizeof($juzgadores) . " juzgadores que conocieron sobre la carpeta judicial padre");
                        $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));

                        if ((sizeof($juzgadores) <= 0) || ($juzgadores == "")) {
                            $juzgadores = array();
                            $this->logger->w_onError("-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado");
                            $movimiento .= "-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado<br>";
                            $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                            $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . "<br>";
                            $juzgadorNuevo = true;
                        }
                    }
                } elseif ($solicitud->getCveTipoCarpeta() == 3) { //CAUSA DE JUICIO
                    /*
                     * Cuando es una causa de juicio se determina que tendra que ser un juez que no haya conocido sobre el asunto 
                     * en control
                     */
                    $movimiento .= "-->Si la carpeta es de tipo CAUSA DE JUICIO se reconoce que su carpeta padre es un causa de control<br>";
                    $movimiento .= "-->Por lo cual se procede a buscar las clave de referencia padre<br>";
                    /*
                     * Aqui se verifica que el juzgador de juicio no haya conocido o celebrado audiencia en la etapa de investigacion
                     * o intermedia
                     */

                    $juzgadores = array();
                    $this->logger->w_onError("-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado de juicio");
                    $movimiento .= "-->La audiencia se tendra que sortear entre todos los juzgadores del juzgado de juicio<br>";
                    $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                    $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores) . " de juicio");
                    $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . " de juicio<br>";
                    $juzgadorNuevo = true;
                    $juzgadores = $this->juecesJuicio($solicitud, $juzgadores, $cveJuzgado, $this->proveedor);
                    $movimiento .= "-->Filtamos los juzgadores que ya conocieron sobre la etapa de control y los quitamos de la lista de candidatos<br>";
                    $movimiento .= "-->para asignar la audiencia<br>";
                    $movimiento .= "-->Juzgadores Resultantes: " . json_encode($juzgadores) . " de juicio<br>";
                    
                    $movimiento .= "-->Terminamos de descartar jueces que ya conocieron<br>";

                    /*
                     * Termina la vefificacion de la causa de juicio
                     */

                    $this->logger->w_onError("-->Si la carpeta es de tipo CAUSA DE JUICIO se reconoce que su carpeta padre es un causa de control");
                } elseif ($solicitud->getCveTipoCarpeta() == 4) { //CAUSA DE TRIBUNAL
                    $movimiento .= "-->Si la carpeta es de tipo CAUSA DE TRIBUNAL se reconoce que su carpeta padre es un causa de control<br>";
                    $this->logger->w_onError("-->Si la carpeta es de tipo CAUSA DE TRIBUNAL se reconoce que su carpeta padre es un causa de control");
                } elseif ($solicitud->getCveTipoCarpeta() == 5) { //EXPEDIENTE
                    $movimiento .= "-->Si la carpeta es de tipo EXPEDIENTE se reconoce que su carpeta padre puede ser causa de control � causa de juicio<br>";
                    $this->logger->w_onError("-->-->Si la carpeta es de tipo EXPEDIENTE se reconoce que su carpeta padre puede ser causa de control � causa de juicio");
                }
            }

            $movimiento .= "-->Ya que tenemos los juzgadores procedemos a realizar el filtro de los juzgadores<br>";
            $this->logger->w_onError("-->Ya que tenemos los juzgadores procedemos a realizar el filtro de los juzgadores");

            $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
            $rolesjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
            $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
            $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor);

            $this->logger->w_onError("-->De acuerdo al tipo de roll que se necesita " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ");
            if (($solicitud->getCveTipoCarpeta() == 1) || ($solicitud->getCveTipoCarpeta() == 2)) {//Auxiliar � Control
                $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
                $rolesjuzgadoresDto->setCveRolJuzgador($rolJuzgador);
                $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
                $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor);
                $this->logger->w_onError("-->De acuerdo a que es una solicitud de audiencia para un auxiliar o causa de contro se respeta el roll de " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ");
                $movimiento .= "-->De acuerdo a que es una solicitud de audiencia para un auxiliar o causa de contro se respeta el roll de " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ";
            } elseif ($solicitud->getCveTipoCarpeta() == 3) { //causa de juicio
                $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
                $rolesjuzgadoresDto->setCveRolJuzgador(1);
                $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
                $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor);
                $this->logger->w_onError("-->De acuerdo a que es una solicitud de audiencia para una causa de juicio se cambia a " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ");
                $movimiento .= "-->De acuerdo a que es una solicitud de audiencia para una causa de juicio se cambia a " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ";
                $rolJuzgador = 1;
            } elseif ($solicitud->getCveTipoCarpeta() == 5) { //Expediente
                $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
                $rolesjuzgadoresDto->setCveRolJuzgador(1);
                $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
                $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor);
                $this->logger->w_onError("-->De acuerdo a que es una solicitud de audiencia para un expediente se cambia a " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ");
                $movimiento .= "-->De acuerdo a que es una solicitud de audiencia para un expediente se cambia a " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ";
                $rolJuzgador = 1;
            } elseif ($solicitud->getCveTipoCarpeta() == 4) { //causa de juicio tribunal
                $rolesjuzgadoresDto = new RolesjuzgadoresDTO();
                $rolesjuzgadoresDto->setCveRolJuzgador(1);
                $rolesjuzgadoresDao = new RolesjuzgadoresDAO();
                $rolesjuzgadoresDto = $rolesjuzgadoresDao->selectRolesjuzgadores($rolesjuzgadoresDto, "", $this->proveedor);
                $this->logger->w_onError("-->De acuerdo a que es una solicitud de audiencia para una causa de tribunal se cambia a " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ");
                $movimiento .= "-->De acuerdo a que es una solicitud de audiencia para una causa de tribunal se cambia a " . $rolesjuzgadoresDto[0]->getDesRolJuzgador() . " la audiencia ";
                $rolJuzgador = 1;
            }

            $historial = array();
            $count = 0;
            for ($index = 0; $index < sizeof($juzgadores); $index++) {
                if ($this->juezParaSorteo($juzgadores[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $cveJuzgado, $this->proveedor)) {
                    $historial[$count] = $juzgadores[$index];
                    $count++;
                }
            }

            $juzgadores = $historial;
            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
            $movimiento .= "-->Juzgadores: " . json_encode($juzgadores);

            if ((sizeof($juzgadores) <= 0) || ($juzgadores == "")) {
                $juzgadorNuevo = true;
                $this->logger->w_onError("-->Los juzgadores que conocieron sobre esa carpeta no tienen o no cuentan con el roll necesario el sistema tendra que tomar todos los juzgadores");
                $movimiento .= "-->Los juzgadores que conocieron sobre esa carpeta no tienen o no cuentan con el roll necesario el sistema tendra que tomar todos los juzgadores";
                $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                $movimiento .= "-->Juzgadores: " . json_encode($juzgadores) . "<br>";

                $historial = array();
                $count = 0;
                for ($index = 0; $index < sizeof($juzgadores); $index++) {
                    if ($this->juezParaSorteo($juzgadores[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $cveJuzgado, $this->proveedor)) {
                        $historial[$count] = $juzgadores[$index];
                        $count++;
                    }
                }

                $juzgadores = $historial;
                $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                $movimiento .= "-->Juzgadores: " . json_encode($juzgadores);
            }

//            $juzgadores = array();
            if ((sizeof($juzgadores) <= 0) || ($juzgadores == "")) {
                $movimiento .= "-->No se encontraron juzgadores para la fecha solicitada de audiencia porque talvez no exista la programacion de los juzgadores revizar con INFORMATICA";
                $this->logger->w_onError("-->No se encontraron juzgadores para la fecha solicitada de audiencia porque talvez no exista la programacion de los juzgadores revizar con INFORMATICA");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
                throw new Exception("No se encontraron juzgadores para realizar el sorteo de la audiencia en el juzgado " . $cveJuzgado, "10002");
            } else {
                //$juzgadorNuevo = true;
            }

            $this->logger->w_onError("-->Todo va funcionando de forma correcta");
            $this->logger->w_onError("-->De acuerdo al juzgado se determinan la funcion que realizara el juzgador ");
            $movimiento .= "-->Todo va funcionando de forma correcta";
            $movimiento .= "-->De acuerdo al juzgado se determinan la funcion que realizara el juzgador ";

            $tiposJuzgadosDto = new TiposjuzgadosDTO();
            $tiposJuzgadosDto->setCveTipoJuzgado($juzgadoDto->getCveTipojuzgado());
            $tiposJuzgadosDao = new TiposjuzgadosDAO();
            $tiposJuzgadosDto = $tiposJuzgadosDao->selectTiposjuzgados($tiposJuzgadosDto, "", $this->proveedor);

            $this->logger->w_onError("-->El tipo de juzgado es " . $tiposJuzgadosDto[0]->getDesTipoJuzgado());
            $movimiento .= "-->El tipo de juzgado es " . $tiposJuzgadosDto[0]->getDesTipoJuzgado();

            $cveFuncionJuzgador = $this->funcionesJuzgador($juzgadoDto->getCveTipojuzgado(), $tribunal);

            $this->logger->w_onError("-->funciones juzgadores " . sizeof($cveFuncionJuzgador));
            $movimiento .= "-->funciones juzgadores " . sizeof($cveFuncionJuzgador);
            $this->logger->w_onError("-->funciones juzgadores " . json_encode($cveFuncionJuzgador));
            $movimiento .= "-->funciones juzgadores " . json_encode($cveFuncionJuzgador);

            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
            /*
             * Se comienza a realizar los filtros necesarios para realizar la asignacion de audiencias
             * deacuerdo a las reglas externadas por el mgdo Palemon y el maestro laurents 
             * 
             */

            if ((boolean) $juzgadorNuevo == true) {
                $movimiento = "-->Todo va funcionando de forma correcta entonces se considera que el sistema puede continuar su flujo normal";
                $this->logger->w_onError("-->Todo va funcionando de forma correcta entonces se considera que el sistema puede continuar su flujo normal");
                $movimiento .= "-->Se considera que la audiencia se marca como asunto nuevo porque no se encontro un juzgador en el antecedente";
                $this->logger->w_onError("-->Se considera que la audiencia se marca como asunto nuevo porque no se encontro un juzgador en el antecedente");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");

                if (sizeof($cveFuncionJuzgador) == 1) {//JUEZ UNITARIO
                    $funcionesjuzgadoresDto = new FuncionesjuzgadoresDTO();
                    $funcionesjuzgadoresDto->setActivo("S");
                    $funcionesjuzgadoresDto->setCveFuncionJuzgador($cveFuncionJuzgador[0]);
                    $funcionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
                    $funcionesjuzgadoresDto = $funcionesjuzgadoresDao->selectFuncionesjuzgadores($funcionesjuzgadoresDto, "", $this->proveedor);
                    $funcionesjuzgadoresDto = $funcionesjuzgadoresDto[0];

                    $juzgadores = $this->ordenaJuzgadores($solicitud, (boolean) $juzgadorNuevo, $juzgadores, $cveJuzgado, $mesActual, $yearActual, $funcionesjuzgadoresDto, $this->proveedor);

                    $this->logger->w_onError("-->Lista de juzgadores ordenada: " . json_encode($juzgadores));
                    $movimiento = "Listaremos los juzgadores y los ordenaremos deacuerdo a la carga de trabajo de los asuntos radicados<br>";
                    $movimiento .= "deacuerdo al numero de audiencias iniciales<br>";
                    $movimiento .= "Lista de juzgadores: " . json_encode($juzgadores) . "<br>";

//                    $this->logger->w_onError("-->Se intentara una ves con el juez del antecedente y si no logra asignarla se tendra que sortear entre todos los juzgadores");
//                    $this->logger->w_onError("-->del juzgado que cumplan con el roll necesario que se ocupa para la audiencia");
//                    $movimiento .= "-->Se intentara una ves con el juez del antecedente y si no logra asignarla se tendra que sortear entre todos los juzgadores<br>";
//                    $movimiento .= "-->del juzgado que cumplan con el roll necesario que se ocupa para la audiencia<br>";

                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");

                    /*
                     * Comenzaremos con los intentos para realizar la asignacion de las audiencias
                     * 
                     * 1.- Se intenta con los jueces del antecedente pero es necesario ver si no estan ocupados y se puede asignar la audiencia
                     * 2.- Se intenta con todos los juzgadores del juzgado para realizar la asignacion siempre y cuando cuenten con el roll
                     * 
                     * Este caso solo es para las audiencias de tipo URGENTE
                     * En ambos casos se buscaran los espacios libres de los juzgadores para poder asignar la audiencia
                     * y si no se contaran con los espacios libres se empalmaran las audiencias que sean de tipo PROGRAMADAS y 
                     * ya se encuentren registradas para el juzgador
                     * 
                     * En caso de ser audiencias de tipo PROGRAMADAS O MIXTAS 
                     * Se respetara la asignacion tratando de buscar solo los espacios don de el juzgador no este ocupado con 
                     * una audiencia y respetando el roll PROGRAMADAS que es necesario para asignar la audiencia
                     */

                    /*
                     * Ciclo de asignacion de audiencia
                     */

                    $juzgador = false;
                    $sala = false;
                    $intento = 0;

                    $idJuzgador = 0;
                    $cveSala = 0;
                    $resultado = array();

                    while (((boolean) $juzgador == false) || ((boolean) $sala == false)) {

                        if ($intento < 2) {
                            $resultado = $this->sorteaJuzgador($fechaMovimiento, $cveJuzgado, $solicitud, $juzgadores, $funcionesjuzgadoresDto, $rolJuzgador, $fechaInicio, $fechaFinal, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $juzgadorNuevo, $this->proveedor);

                            if ($resultado["idJuzgador"] > 0) {
                                $juzgador = true;
                                $idJuzgador = $resultado["idJuzgador"];
                            }

                            if ($resultado["cveSala"] > 0) {
                                $sala = true;
                                $cveSala = $resultado["cveSala"];
                            }
                        } else {
                            $this->logger->w_onError("-->Se realizaron todos los intentos y no se logro asignar al juzgador y la sala");
//                            $juzgador = true;
//                            $sala = true;
                            break;
                        }

                        if (((boolean) $juzgador == false) || ((boolean) $sala == false)) {
                            $this->logger->w_onError("-->En el intento numero " . $intento . " no se logro asignar la audiencia y por lo tanto se tendra que ver otro intento mas");
                            $intento++;
                        }

                        if (((int) $intento == 1) && ((boolean) $juzgadorNuevo == false)) {
                            $juzgadorNuevo = true;
                            $idJuzgador = 0;
                            $cveSala = 0;
                            $juzgador = false;
                            $sala = false;
                            $this->logger->w_onError("-->No se logro asignar la audiencia en el primer intento y se realizara otro intento mas");
                            $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));

                            $historial = array();
                            $count = 0;
                            for ($index = 0; $index < sizeof($juzgadores); $index++) {
                                if ($this->juezParaSorteo($juzgadores[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $cveJuzgado, $this->proveedor)) {
                                    $historial[$count] = $juzgadores[$index];
                                    $count++;
                                }
                            }

                            $juzgadores = $historial;
                            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                            $movimiento .= "-->Juzgadores: " . json_encode($juzgadores);

                            $juzgadores = $this->ordenaJuzgadores($solicitud, (boolean) $juzgadorNuevo, $juzgadores, $cveJuzgado, $mesActual, $yearActual, $funcionesjuzgadoresDto, $this->proveedor);
                        } else {
                            $this->logger->w_onError("-->La asignacion no se logro realizar porque los juzgadores talvez esten ocupados y como es un asunto nuevo ");
                            $this->logger->w_onError("-->Solo se realizara un intento porque ya se comprovaron todos los juzgadores");
                        }
                    }

                    if ((boolean) $juzgadorNuevo == true) {
                        $nuevo = "S";
                    } else {
                        $nuevo = "N";
                    }

//                    if (((boolean) $juzgador == true) && ((boolean) $sala == true)) {
//                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " y sala " . $cveSala . " para la fecha desde " . $resultado["fechaInicial"] . " hasta " . $resultado["fechaFinal"] . " Tipo de juez UNITARIO");
//                    } elseif (((boolean) $juzgador == false) && ((boolean) $sala == true)) {
//                        $this->logger->w_onError("-->NO SE LOGRO OBTENER JUEZ  pero sala " . $cveSala . " para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
//                    } elseif (((boolean) $juzgador == true) && ((boolean) $sala == false)) {
//                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " PERO SALA NO  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
//                    } elseif (((boolean) $juzgador == false) && ((boolean) $sala == false)) {
//                        $this->logger->w_onError("-->NO SE LOGRO OBTENER JUEZ NI SALA  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
//                    }
//                    if (((boolean) $juzgador == true) && ((boolean) $sala == true)) {
//                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " y sala " . $cveSala . " para la fecha desde " . $resultado["fechaInicial"] . " hasta " . $resultado["fechaFinal"] . " Tipo de juez UNITARIO");
////                        $respuesta = array("estatus" => "correcto", "fechaInicial" => $resultado["fechaInicial"], "fechaFinal" => $resultado["fechaFinal"], "juez" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "mensaje" => "Se encontro juez " . $funcionesjuzgadoresDto->getDesFuncionJuzgador() . " y sala de forma correcta");
//                        $respuesta = array("Estatus" => "correcto", "Nuevo" => "S", "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia", "bitacora" => $this->bitacoraAsignacion);
//                    }

                    if (((boolean) $juzgador == true) && ((boolean) $sala == true)) {
                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " y sala " . $cveSala . " para la fecha desde " . $resultado["fechaInicial"] . " hasta " . $resultado["fechaFinal"] . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "correcto", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia", "bitacora" => $this->bitacoraAsignacion);
                    } elseif (((boolean) $juzgador == false) && ((boolean) $sala == true)) {
                        $this->logger->w_onError("-->NO SE LOGRO OBTENER JUEZ  pero sala " . $cveSala . " para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "error", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "NO SE LOGRO OBTENER JUEZ  pero sala " . $cveSala . " para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO", "bitacora" => $this->bitacoraAsignacion);
                    } elseif (((boolean) $juzgador == true) && ((boolean) $sala == false)) {
                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " PERO SALA NO  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "error", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "Se logro obtener juez " . $idJuzgador . " PERO SALA NO  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO", "bitacora" => $this->bitacoraAsignacion);
                    } elseif (((boolean) $juzgador == false) && ((boolean) $sala == false)) {
                        $this->logger->w_onError("-->NO SE LOGRO OBTENER JUEZ NI SALA  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "error", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "NO SE LOGRO OBTENER JUEZ NI SALA  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO", "bitacora" => $this->bitacoraAsignacion);
                    }

                    /*
                     * Terminael ciclo de asigancion de audiencia
                     */


                    /*
                     * Termina los intentos de asignacion 
                     */
                } elseif (sizeof($cveFuncionJuzgador) > 1) {//TRIBUNAL
                    $tmp = "";
                    for ($index = 0; $index <= sizeof($cveFuncionJuzgador); $index++) {
                        $tmp .= $cveFuncionJuzgador[$index] . ", ";
                    }
                    $funcionesjuzgadoresDto = new FuncionesjuzgadoresDTO();
                    $funcionesjuzgadoresDto->setActivo("S");
                    $funcionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
                    $funcionesjuzgadoresDto = $funcionesjuzgadoresDao->selectFuncionesjuzgadores($funcionesjuzgadoresDto, " And cveFuncionJuzgador in (" . $tmp . ")", $this->proveedor);
                }
            } elseif ((boolean) $juzgadorNuevo == false) {
                $movimiento = "-->Todo va funcionando de forma correcta entonces se considera que el sistema puede continuar su flujo normal";
                $this->logger->w_onError("-->Todo va funcionando de forma correcta entonces se considera que el sistema puede continuar su flujo normal");
                $movimiento .= "-->Se considera que la audiencia se marca como asunto con antecedente";
                $this->logger->w_onError("-->Se considera que la audiencia se marca como asunto con antecedente");
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");

                if (sizeof($cveFuncionJuzgador) == 1) {//JUEZ UNITARIO
                    $funcionesjuzgadoresDto = new FuncionesjuzgadoresDTO();
                    $funcionesjuzgadoresDto->setActivo("S");
                    $funcionesjuzgadoresDto->setCveFuncionJuzgador($cveFuncionJuzgador[0]);
                    $funcionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
                    $funcionesjuzgadoresDto = $funcionesjuzgadoresDao->selectFuncionesjuzgadores($funcionesjuzgadoresDto, "", $this->proveedor);
                    $funcionesjuzgadoresDto = $funcionesjuzgadoresDto[0];

                    $juzgadores = $this->ordenaJuzgadores($solicitud, (boolean) $juzgadorNuevo, $juzgadores, $cveJuzgado, $mesActual, $yearActual, $funcionesjuzgadoresDto, $this->proveedor);

                    $this->logger->w_onError("-->Lista de juzgadores ordenada: " . json_encode($juzgadores));
                    $movimiento = "Listaremos los juzgadores y los ordenaremos deacuerdo a la carga de trabajo de los asuntos radicados<br>";
                    $movimiento .= "deacuerdo al numero de audiencias iniciales<br>";
                    $movimiento .= "Lista de juzgadores: " . json_encode($juzgadores) . "<br>";

//                    $this->logger->w_onError("-->Se intentara una ves con el juez del antecedente y si no logra asignarla se tendra que sortear entre todos los juzgadores");
//                    $this->logger->w_onError("-->del juzgado que cumplan con el roll necesario que se ocupa para la audiencia");
//                    $movimiento .= "-->Se intentara una ves con el juez del antecedente y si no logra asignarla se tendra que sortear entre todos los juzgadores<br>";
//                    $movimiento .= "-->del juzgado que cumplan con el roll necesario que se ocupa para la audiencia<br>";

                    $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");

                    /*
                     * Comenzaremos con los intentos para realizar la asignacion de las audiencias
                     * 
                     * 1.- Se intenta con los jueces del antecedente pero es necesario ver si no estan ocupados y se puede asignar la audiencia
                     * 2.- Se intenta con todos los juzgadores del juzgado para realizar la asignacion siempre y cuando cuenten con el roll
                     * 
                     * Este caso solo es para las audiencias de tipo URGENTE
                     * En ambos casos se buscaran los espacios libres de los juzgadores para poder asignar la audiencia
                     * y si no se contaran con los espacios libres se empalmaran las audiencias que sean de tipo PROGRAMADAS y 
                     * ya se encuentren registradas para el juzgador
                     * 
                     * En caso de ser audiencias de tipo PROGRAMADAS O MIXTAS 
                     * Se respetara la asignacion tratando de buscar solo los espacios don de el juzgador no este ocupado con 
                     * una audiencia y respetando el roll PROGRAMADAS que es necesario para asignar la audiencia
                     */

                    /*
                     * Ciclo de asignacion de audiencia
                     */

                    $juzgador = false;
                    $sala = false;
                    $intento = 0;
                    $idJuzgador = 0;
                    $cveSala = 0;
                    $resultado = array();
//                    $juzgadoresTmp = $juzgadores;

                    while (((boolean) $juzgador == false) || ((boolean) $sala == false)) {

                        if ($intento < 2) {
                            $resultado = $this->sorteaJuzgador($fechaMovimiento, $cveJuzgado, $solicitud, $juzgadores, $funcionesjuzgadoresDto, $rolJuzgador, $fechaInicio, $fechaFinal, $catAudiencias, $festivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $juzgadorNuevo, $this->proveedor);
                            if ($resultado["idJuzgador"] > 0) {
                                $juzgador = true;
                                $idJuzgador = $resultado["idJuzgador"];
                            }

                            if ($resultado["cveSala"] > 0) {
                                $sala = true;
                                $cveSala = $resultado["cveSala"];
                            }
                        } else {
                            $this->logger->w_onError("-->Se realizaron todos los intentos y no se logro asignar al juzgador y la sala");
//                            $juzgador = true;
//                            $sala = true;
                            break;
                        }

                        if (((boolean) $juzgador == false) || ((boolean) $sala == false)) {
                            $this->logger->w_onError("-->En el intento numero " . $intento . " no se logro asignar la audiencia y por lo tanto se tendra que ver otro intento mas");
                            $intento++;
                        }

                        if (((int) $intento == 1) && ((boolean) $juzgadorNuevo == false)) {
                            $juzgadorNuevo = true;
                            $idJuzgador = 0;
                            $cveSala = 0;
                            $juzgador = false;
                            $sala = false;
                            $this->logger->w_onError("-->No se logro asignar la audiencia en el primer intento y se realizara otro intento mas");
                            $juzgadores = $this->juzgadoresJuzgados($cveJuzgado, $this->proveedor);
                            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));

                            $historial = array();
                            $count = 0;
                            for ($index = 0; $index < sizeof($juzgadores); $index++) {
                                if ($this->juezParaSorteo($juzgadores[$index]["idJuzgador"], $fechaInicio, $fechaFinal, $rolJuzgador, $cveJuzgado, $this->proveedor)) {
                                    $historial[$count] = $juzgadores[$index];
                                    $count++;
                                }
                            }

                            $juzgadores = $historial;
                            $historial = array();

                            $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores));
                            $movimiento .= "-->Juzgadores: " . json_encode($juzgadores);

                            $juzgadores = $this->ordenaJuzgadores($solicitud, (boolean) $juzgadorNuevo, $juzgadores, $cveJuzgado, $mesActual, $yearActual, $funcionesjuzgadoresDto, $this->proveedor);
                        }
                    }

                    if ((boolean) $juzgadorNuevo == true) {
                        $nuevo = "S";
                    } else {
                        $nuevo = "N";
                    }

                    if (((boolean) $juzgador == true) && ((boolean) $sala == true)) {
                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " y sala " . $cveSala . " para la fecha desde " . $resultado["fechaInicial"] . " hasta " . $resultado["fechaFinal"] . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "correcto", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "Se lograron obtener juzgadores para celebrar la audiencia", "bitacora" => $this->bitacoraAsignacion);
                    } elseif (((boolean) $juzgador == false) && ((boolean) $sala == true)) {
                        $this->logger->w_onError("-->NO SE LOGRO OBTENER JUEZ  pero sala " . $cveSala . " para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "error", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "NO SE LOGRO OBTENER JUEZ  pero sala " . $cveSala . " para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO", "bitacora" => $this->bitacoraAsignacion);
                    } elseif (((boolean) $juzgador == true) && ((boolean) $sala == false)) {
                        $this->logger->w_onError("-->Se logro obtener juez " . $idJuzgador . " PERO SALA NO  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "error", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "Se logro obtener juez " . $idJuzgador . " PERO SALA NO  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO", "bitacora" => $this->bitacoraAsignacion);
                    } elseif (((boolean) $juzgador == false) && ((boolean) $sala == false)) {
                        $this->logger->w_onError("-->NO SE LOGRO OBTENER JUEZ NI SALA  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
                        $respuesta = array("Estatus" => "error", "Nuevo" => $nuevo, "TipoJuez" => "Unitario", "FechaInicial" => $resultado["fechaInicial"], "FechaFinal" => $resultado["fechaFinal"], "jueces" => $idJuzgador, "sala" => $cveSala, "cveFuncionJuzgador" => $funcionesjuzgadoresDto->getCveFuncionJuzgador(), "Mensaje" => "NO SE LOGRO OBTENER JUEZ NI SALA  para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO", "bitacora" => $this->bitacoraAsignacion);
                    }



                    /*
                     * Terminael ciclo de asigancion de audiencia
                     */


                    /*
                     * Termina los intentos de asignacion 
                     */
                } elseif (sizeof($cveFuncionJuzgador) > 1) {
                    $tmp = "";
                    for ($index = 0; $index <= sizeof($cveFuncionJuzgador); $index++) {
                        $tmp .= $cveFuncionJuzgador[$index] . ", ";
                    }
                    $funcionesjuzgadoresDto = new FuncionesjuzgadoresDTO();
                    $funcionesjuzgadoresDto->setActivo("S");
                    $funcionesjuzgadoresDao = new FuncionesjuzgadoresDAO();
                    $funcionesjuzgadoresDto = $funcionesjuzgadoresDao->selectFuncionesjuzgadores($funcionesjuzgadoresDto, " And cveFuncionJuzgador in (" . $tmp . ")", $this->proveedor);
                }
            }

            /*
             * Termina el programa que realiza el sorteo 
             */

//            $juzgadores



            if ($proveedor == null) {
//                $this->proveedor->free_result($this->proveedor->stmt);
                $this->proveedor->close();
            }
        } catch (Exception $e) {
            $movimiento = " --> Error: " . $e->getCode() . " Archivo: " . $e->getFile() . " Linea: " . $e->getLine() . " Mensaje: " . $e->getMessage() . " para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal;
            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
            $this->logger->w_onError(" --> Error: " . $e->getCode() . " Archivo: " . $e->getFile() . " Linea: " . $e->getLine() . " Mensaje: " . $e->getMessage() . " Tracert: " . $e->getTraceAsString
                    ());
            $this->logger->w_onError("-->Se logro obtener juez 0 y sala 0 para la fecha desde " . $fechaInicio . " hasta " . $fechaFinal . " Tipo de juez UNITARIO");
            $respuesta = array("Estatus" => "error", "Nuevo" => "N", "TipoJuez" => "Unitario", "FechaInicial" => $fechaInicio, "FechaFinal" => $fechaFinal, "jueces" => 0, "sala" => 0, "cveFuncionJuzgador" => 0, "Mensaje" => "No se lograron obtener juzgadores para celebrar la audiencia", "bitacora" => $this->bitacoraAsignacion);
        }
        return $respuesta;
    }

    public function sorteaJuzgador($fechaMovimiento, $cvejuzgado, $solicitud, $juzgadores, $funcionesjuzgadoresDto, $rolJuzgador, $fechaInicial, $fechaFinal, $audiencia, $diasFestivos, $especial, $tiempoUtilizacion, $mesActual, $yearActual, $audienciasDistritos, $nuevo, $proveedor = null) {
        $tengoSala = false;
        $tengoJuez = false;
        $error = false;
        $sala = 0;
        $juez = 0;
        $this->logger->w_onError("-->Comienza la funcion para recorrer y asignar la audiencia entre los juzgadores que cumplen con las condiciones");
        $movimiento = "-->Comienza la funcion para recorrer y asignar la audiencia entre los juzgadores que cumplen con las condiciones<br>";
        $this->logger->w_onError("-->necesarias para celrbrar la audiencia");
        $movimiento .= "-->necesarias para celrbrar la audiencia<br>";
        $this->logger->w_onError("");
        $this->logger->w_onError("");
        $movimiento .= "--><br><br>";

        $this->logger->w_onError("-->Fecha Inicial: " . $fechaInicial);
        $movimiento .= "-->Fecha Inicial: " . $fechaInicial . "<br>";
        $this->logger->w_onError("-->Fecha Final: " . $fechaFinal);
        $movimiento .= "-->Fecha Final: " . $fechaFinal . "<br>";
        $this->logger->w_onError("-->TotalJuzgadores: " . sizeof($funcionesjuzgadoresDto->getDesFuncionJuzgador()));
        $movimiento .= "-->TotalJuzgadores: " . sizeof($funcionesjuzgadoresDto->getDesFuncionJuzgador()) . "<br>";
        $this->logger->w_onError("-->Juzgado: " . $cvejuzgado);
        $movimiento .= "-->Juzgado: " . $cvejuzgado . "<br>";
//            $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cveJuzgado, "", "");
        /*
         * Descomponemos la fecha final para tenerla como fecha maxima
         */
        list($fecha, $horas) = explode(' ', $fechaFinal);
        list($anio, $mes, $dia) = explode('-', $fecha);
        list($hora, $minuto) = explode(':', $horas);

        $fechaMax = mktime($hora, $minuto, 0, $mes, $dia, $anio);
        $this->logger->w_onError("-->Fecha Max (int): " . $fechaMax);
        $this->logger->w_onError("-->FuncionesJuzgadores: " . json_encode($funcionesjuzgadoresDto->toString()));
        $movimiento .= "-->FuncionesJuzgadores: " . json_encode($funcionesjuzgadoresDto->toString()) . "<br>";
        $this->logger->w_onError("-->Juzgadores: " . json_encode($juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()]));
        $movimiento .= "-->Juzgadores: " . json_encode($juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()]) . "<br>";

        $fechaPosibleAudiencia = $fechaInicial;
        $horasParaSumar = 0;
        $fechaAudiencia = 0;
        (int) $index = 0;
        $fechas = new Fechas($this->logger);

        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cvejuzgado, "", "");

        while (((boolean) $tengoSala === false) || ((boolean) $tengoJuez === false) && ((boolean) $error === false)) {
            $movimiento = "";
            if ($fechaAudiencia > $fechaMax) {
                $this->logger->w_onError("-->Se llego a la fecha maxima para fijar la audiencia se va al siguiente juez");
                $movimiento = "-->Se llego a la fecha maxima para fijar la audiencia  se va al siguiente juez";
                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"], 0, $cvejuzgado, "", "");
                $index++;
                if (sizeof($juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()]) > $index) {
                    $this->logger->w_onError("-->Se llego a la fecha maxima para fijar la audiencia se va al siguiente juez");
                    $fechaPosibleAudiencia = $fechaInicial;
                    $horasParaSumar = 0;
                    $fechaAudiencia = 0;
                } else {
                    break;
                }
            } else {
                /*
                 * Descomponemos la fecha final para tenerla como fecha maxima
                 */

                $horasParaSumar = $fechas->avanzaDiaDisponible($fechaPosibleAudiencia, $fechaFinal, $audiencia, true, $diasFestivos, $especial);

                list($fecha, $horas) = explode(' ', $fechaPosibleAudiencia);
                list($anio, $mes, $dia) = explode('-', $fecha);
                list($hora, $minuto) = explode(':', $horas);

                $fechaInicialAudiencia = date("Y-m-d H:i", mktime($hora + $horasParaSumar, $minuto, 0, $mes, $dia, $anio));
                $fechaFinalAudiencia = date("Y-m-d H:i", mktime($hora + $horasParaSumar, $minuto + $tiempoUtilizacion, 0, $mes, $dia, $anio));


                $this->logger->w_onError($index . "--->" . $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"] . " Nombre: " . $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["nombre"] . " ----->" . $sala . "----->" . $fechaInicialAudiencia . "------>" . $fechaFinalAudiencia . "---->" . $error . "<br>");
                $movimiento.=$juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"] . " Nombre: " . $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["nombre"] . " ----->" . $sala . "----->" . $fechaInicialAudiencia . "------>" . $fechaFinalAudiencia . "---->" . $error . "<br>";
                $this->logger->w_onError("Verificamos que la fecha sea valida para el tipo de audiencia solicitada");
                $movimiento.="Verificamos que la fecha sea valida para el tipo de audiencia solicitada";
                if ($this->diasFestivo($fechaInicialAudiencia, $diasFestivos, $rolJuzgador)) {
                    $this->logger->w_onError("La fecha es valida para el tipo de audiencia se procede a revizar que el juez este de " . $rolJuzgador . " para poder serguir con la asignacion de la audiencia");
                    $movimiento.="La fecha es valida para el tipo de audiencia se procede a revizar que el juez este de " . $rolJuzgador . " para poder serguir con la asignacion de la audiencia";
                    if ($this->buscaProgramacionJuez($juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $rolJuzgador, $cvejuzgado, $proveedor)) {
			/*
			 * El sistema ya no empalmara audiencias por indicaciones de la direccion de los juzgados de control el dia 17/10/2016 a las 16:05
			 * Cual quier duda preguntar con moy
			 */
                        if (((int) $rolJuzgador === 1) || ((int) $rolJuzgador === 3) || ((int) $rolJuzgador === 2) ) {//Programadas , Mixta y Urgentes
                            if ($this->buscaDisponibilidadJuez($juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $proveedor)) {
                                /*
                                 * El juez cumple con todas las condiciones para realizar la asignacion de la audiencia por lo tanto se procede a 
                                 * realizar la busqueda de la sala para llevar acabo la audiencia
                                 */
                                $tengoJuez = true;
                                $juez = $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"];
                                $this->logger->w_onError("El juez esta disponible y cuenta con el roll necesario para asignar la audiencia");
                                $movimiento.="El juez esta disponible y cuenta con el roll necesario para asignar la audiencia";
                                $sala = $this->sorteaSalas($juez, $cvejuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $rolJuzgador, $solicitud, $fechaMovimiento, $this->proveedor);

                                if ((int) $sala > 0) {
                                    $tengoSala = true;
                                    $movimiento.="Se encontro sala " . $sala;
                                }
                            } else {
                                $this->logger->w_onError("El juez esta ocupado en la fecha por lo cual no se lograra asignar la audiencia en esa fecha");
                                $movimiento.="El juez esta ocupado en la fecha por lo cual no se lograra asignar la audiencia en esa fecha";
                            }
                        } /*else {
                            if ($this->buscaHorarioDeNoUrgente($juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"], $fechaInicialAudiencia, $fechaFinalAudiencia, $proveedor)) {*/
                                /*
                                 * El juez cumple con todas las condiciones para realizar la asignacion de la audiencia por lo tanto se procede a 
                                 * realizar la busqueda de la sala para llevar acabo la audiencia
                                 */
                              /*  $tengoJuez = true;
                                $juez = $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"];
                                $this->logger->w_onError("El juez esta disponible y cuenta con el roll necesario para asignar la audiencia");
                                $movimiento.="El juez esta disponible y cuenta con el roll necesario para asignar la audiencia";
                                $sala = $this->sorteaSalas($juez, $cvejuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia, $rolJuzgador, $solicitud, $fechaMovimiento, $this->proveedor);

                                if ((int) $sala > 0) {
                                    $tengoSala = true;
                                }
                            } else {
                                $this->logger->w_onError("El juzgador no podra llevar acabo en esa fecha la audiencia ya que no tiene audiencias programadas o el horario disponible para asignar la audiencia");
                                $movimiento.="El juzgador no podra llevar acabo en esa fecha la audiencia ya que no tiene audiencias programadas o el horario disponible para asignar la audiencia";
                            }
                        }*/
                    } else {
                        $this->logger->w_onError("El juez no cuenta con el roll necesario para poder asignar la audiencia");
                        $movimiento.="El juez no cuenta con el roll necesario para poder asignar la audiencia";
                    }
                } else {
                    $this->logger->w_onError("La fecha no es valida para el tipo de audiencia solicitada");
                    $movimiento.="La fecha no es valida para el tipo de audiencia solicitada";
                }


                if (((int) $minuto >= 0) && ((int) $minuto < 15)) {
                    $minuto = 15;
                    $horasParaSumar = 0;
                } elseif (((int) $minuto >= 15) && ((int) $minuto < 30)) {
                    $minuto = 30;
                    $horasParaSumar = 0;
                } elseif (((int) $minuto >= 30) && ((int) $minuto < 45)) {
                    $minuto = 45;
                    $horasParaSumar = 0;
                } elseif (((int) $minuto >= 45) && ((int) $minuto < 60)) {
                    $minuto = 0;
                    $horasParaSumar = 1;
                }

                $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), $juzgadores[$funcionesjuzgadoresDto->getDesFuncionJuzgador()][$index]["idJuzgador"], 0, $cvejuzgado, $fechaInicialAudiencia, $fechaFinalAudiencia);

                $fechaPosibleAudiencia = date("Y-m-d H:i", mktime($hora + $horasParaSumar, $minuto, 0, $mes, $dia, $anio));
                $fechaAudiencia = mktime($hora + $horasParaSumar, $minuto, 0, $mes, $dia, $anio);
            }
        }

        $movimiento = "";
        if (($juez > 0) && ($sala > 0)) {
            $this->logger->w_onError("Se logro obtener sala : $sala y juez: $juez");
            $movimiento .= "Se logro obtener sala : $sala y juez: $juez";
        }

        $this->logger->w_onError("");
        $this->logger->w_onError("");
        $this->logger->w_onError("-->Termina la funcion para recorrer y asiganar la audiencia");
        $movimiento .= "-->Termina la funcion para recorrer y asiganar la audiencia";

        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), 0, 0, $cvejuzgado, "", "");

        return array("idJuzgador" => $juez, "cveSala" => $sala, "fechaInicial" => $fechaInicialAudiencia, "fechaFinal" => $fechaFinalAudiencia);
    }

    public function sorteaSalas($idJuzgador, $cvejuzgado, $fechaInicial, $fechaFinal, $roll, $solicitud, $fechaMovimiento, $proveedor = null) {
        $sala = 0;
        $salas = array();
        $historialSalas = array();
        $encontroSala = false;
        $movimiento = "";
        $this->logger->w_onError("Entro a la funcion para sortear la sala para poder desahogar la audiencia");
        $movimiento .= "Entro a la funcion para sortear la sala para poder desahogar la audiencia<br>";
        $this->logger->w_onError("en la fecha que el juez tiene disponibilidad");
        $movimiento .= "en la fecha que el juez tiene disponibilidad<br>";
        $this->logger->w_onError("Revizamos si el juzgador tiene una sala asignada para desahogar sus audiencias");
        $movimiento .= "Revizamos si el juzgador tiene una sala asignada para desahogar sus audiencias<br>";
        $salasJuzgadoresDto = new SalasjuzgadoresDTO();
        $salasJuzgadoresDto->setIdJuzgador($idJuzgador);
        $salasJuzgadoresDto->setActivo("S");
        $salasJuzgadoresDao = new SalasjuzgadoresDAO();
        $salasJuzgadoresDto = $salasJuzgadoresDao->selectSalasjuzgadores($salasJuzgadoresDto, " ORDER BY cveCondicion ASC ", $proveedor);

        if (sizeof($salasJuzgadoresDto) > 0) {
            $this->logger->w_onError("El juzgador tiene salas asignadas");
            $movimiento .= "El juzgador tiene salas asignadas<br>";

            $this->logger->w_onError("Guardamos en un arreglo todas las salas que tiene el juez asignadas");
            $movimiento .= "Guardamos en un arreglo todas las salas que tiene el juez asignadas<br>";

            for ($index = 0; $index < sizeof($salasJuzgadoresDto); $index++) {
                $encontroSala = false;
                for ($z = 0; $z < sizeof($salas); $z++) {
                    if ((int) $salasJuzgadoresDto[$index]->getCveSala() == (int) $salas[$z]["cveSala"]) {
                        $encontroSala = true;
                        break;
                    }
                }

                if ((boolean) $encontroSala == false) {
                    $salas[] = array("cveSala" => (int) $salasJuzgadoresDto[$index]->getCveSala());
                }
            }
        } else {
            $atencionsalasDto = new AtencionsalasDTO();
            $atencionsalasDto->setCveJuzgado($cvejuzgado);
            $atencionsalasDto->setCveCondicion(1); //Normal
            $atencionsalasDao = new AtencionsalasDAO();
            $atencionsalasDto = $atencionsalasDao->selectAtencionsalas($atencionsalasDto, "ORDER BY cveCondicion ASC ", $proveedor);

            for ($index = 0; $index < sizeof($atencionsalasDto); $index++) {
                $salasDto = new SalasDTO();
                $salasDto->setCveSala($atencionsalasDto[$index]->getCveSala());
                $salasDto->setComodin("S");
                $salasDto->setSorteo("S");
                $salasDto->setActivo("S");
                $salasDao = new SalasDAO();
                $salasDto = $salasDao->selectSalas($salasDto, "LIMIT 0,1 ", $proveedor);
                if (sizeof($salasDto) > 0) {
                    $encontroSala = false;
                    for ($z = 0; $z < sizeof($salas); $z++) {
                        if ((int) $atencionsalasDto[$index]->getCveSala() == (int) $salas[$z]["cveSala"]) {
                            $encontroSala = true;
                            break;
                        }
                    }

                    if ((boolean) $encontroSala == false) {
                        $salas[] = array("cveSala" => (int) $atencionsalasDto[$index]->getCveSala());
                    }
                }
            }
        }

        $this->logger->w_onError("Listado de salas posibles para asignar la audiencia");
        $movimiento .= "Listado de salas posibles para asignar la audiencia<br>";
        $this->logger->w_onError(json_encode($salas));
        $movimiento .= json_encode($salas) . "<br>";

        if ((sizeof($salas) > 0) && (sizeof($salas) < 2)) {
            if (((int) $roll == 1) || ((int) $roll == 3)) {
                if ((boolean) $this->disponibilidadSala($salas[0]["cveSala"], $fechaInicial, $fechaFinal, $proveedor) == true) {
                    $sala = $salas[0]["cveSala"];
                } else {
                    $sala = 0;
                }
            } elseif (((int) $roll == 2)) {
                if ((boolean) $this->disponibilidadSalaNoUrgente($salas[0]["cveSala"], $fechaInicial, $fechaFinal, $proveedor) == true) {
                    $sala = $salas[0]["cveSala"];
                } else {
                    $sala = 0;
                }
            }
        } elseif ((sizeof($salas) > 1)) {
            for ($index = 0; $index < sizeof($salas); $index++) {
                if (((int) $roll == 1) || ((int) $roll == 3)) {
                    if ((boolean) $this->disponibilidadSala($salas[$index]["cveSala"], $fechaInicial, $fechaFinal, $proveedor) == true) {
                        $sala = $salas[$index]["cveSala"];
			$this->logger->w_onError("La sala disponible es : ".$salas[$index]["cveSala"]);
			break;
                    } else {
                        $sala = 0;
                    }
                } elseif (((int) $roll == 2)) {
                    if ((boolean) $this->disponibilidadSalaNoUrgente($salas[$index]["cveSala"], $fechaInicial, $fechaFinal, $proveedor) == true) {
                        $sala = $salas[$index]["cveSala"];
		        $this->logger->w_onError("La sala disponible es : ".$salas[$index]["cveSala"]);
		      break;		
                    } else {
                        $sala = 0;
                    }
                }
            }
        }


        if ($sala > 0) {
            $this->logger->w_onError("Se logro obtener la sala " . $sala);
            $movimiento .= "Se logro obtener la sala " . $sala . "<br>";
        } else {
            $this->logger->w_onError("No se cuenta con una sala disponible");
            $movimiento .= "No se cuenta con una sala disponible<br>";
        }
        $this->logger->w_onError("Sale de la funcion para obtener la sala");
        $movimiento .= "Sale de la funcion para obtener la sala<br>";
        $this->bitacoraAsignacion($movimiento, $fechaMovimiento, $solicitud->getIdSolicitudAudiencia(), $idJuzgador, $sala, $cvejuzgado, $fechaInicial, $fechaFinal);
        return $sala;
    }

    public function disponibilidadSala($sala, $fechaInicial, $fechaFinal, $proveedor) {
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $disponible = false;

        $sql = " SELECT * FROM htsj_sigejupe.tblaudiencias A, tblcataudiencias CA
                        Where
                        ((fechaInicial<='" . $fechaInicial . "' And fechaFinal<='" . $fechaFinal . "' And fechaFinal>'" . $fechaInicial . "') or
  (fechaInicial>='" . $fechaInicial . "' And fechaFinal>='" . $fechaFinal . "' And fechaInicial<'" . $fechaFinal . "') or 
  (fechaInicial>='" . $fechaInicial . "' And fechaFinal<='" . $fechaFinal . "' And fechaInicial<'" . $fechaFinal . "' And fechaFinal>'" . $fechaInicial . "') or
  (fechaInicial<='" . $fechaInicial . "' And fechaFinal>='" . $fechaFinal . "') 
 ) And A.cveSala='" . $sala . "' And A.activo = 'S' And A.cveEstatusAudiencia = '1' And A.cveCatAudiencia = CA.cveCatAudiencia";
        $this->logger->w_onError("Sql: " . $sql);
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
	    $this->logger->w_onError("Query sin errores");
            if ($proveedor->rows($proveedor->stmt) <= 0) {
		$this->logger->w_onError("La sala esta disponible");	
                $disponible = true;
            } else {
		$this->logger->w_onError("La sala no esta disponible");
                $disponible = false;
            }
        } else {
	    $this->logger->w_onError("El query tiene un error");
            $disponible = false;
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        return $disponible;
    }

    public function disponibilidadSalaNoUrgente($sala, $fechaInicial, $fechaFinal, $proveedor) {
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $disponible = false;

        $sql = " SELECT * FROM htsj_sigejupe.tblaudiencias A, tblcataudiencias CA
                        Where
                        ((fechaInicial<='" . $fechaInicial . "' And fechaFinal<='" . $fechaFinal . "' And fechaFinal>'" . $fechaInicial . "') or
  (fechaInicial>='" . $fechaInicial . "' And fechaFinal>='" . $fechaFinal . "' And fechaInicial<'" . $fechaFinal . "') or 
  (fechaInicial>='" . $fechaInicial . "' And fechaFinal<='" . $fechaFinal . "' And fechaInicial<'" . $fechaFinal . "' And fechaFinal>'" . $fechaInicial . "') or
  (fechaInicial<='" . $fechaInicial . "' And fechaFinal>='" . $fechaFinal . "') 
 ) And A.cveSala='" . $sala . "' And A.activo = 'S' And A.cveEstatusAudiencia = '1' And A.cveCatAudiencia = CA.cveCatAudiencia And ((CA.cveTipoAudiencia = 2) OR (CA.cveTipoAudiencia = 1 AND CA.cveEtapaProcesal=3) )";
        $this->logger->w_onError("Sql: " . $sql);
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

    public function diasFestivo($fechaPropuesta, $festivos, $cveRoll) {
        $fecha = explode("-", $fechaPropuesta);
        $fecha[2] = explode(" ", $fecha[2]);
        $fecha = $fecha[0] . "-" . $fecha[1] . "-" . $fecha[2][0];

        $fechaTmp = explode("-", $fecha);
        $diaSemana = date("w", mktime(0, 0, 0, $fechaTmp[1], $fechaTmp[2], $fechaTmp[0]));

        $diaFestivo = false;
        $diaDisponible = false;

        if (((int) $cveRoll === 1)) { //PROGRAMADA
            if (($diaSemana >= 1) && ($diaSemana <= 5)) {
                for ($index = 0; $index < count($festivos); $index++) {
                    $diaFestivo = false;
                    $diaAuxiliar1 = strtotime('+' . 0 . ' day', strtotime($festivos[$index]["fecha"]));
                    $diaAuxiliar2 = strtotime('+' . 0 . ' day', strtotime($fecha));
                    if ($diaAuxiliar1 == $diaAuxiliar2) {
                        $diaFestivo = true;
                        break;
                    }
                }

                if ($diaFestivo) {//Avanzamos un dia porque ese dia no lo podemos contemplar 
                    $diaDisponible = false;
                } else { //Ese dia es valido para comenzar con la programacion de las audiencias
                    $diaDisponible = true;
                }
            }
        } else if (((int) $cveRoll === 2) || ((int) $cveRoll === 3)) { //URGENTE O MIXTA
            for ($index = 0; $index < count($festivos); $index++) {

                $diaAuxiliar1 = strtotime('+' . 0 . ' day', strtotime($festivos[$index]["fecha"]));
                $diaAuxiliar2 = strtotime('+' . 0 . ' day', strtotime($fecha));
                if ($diaAuxiliar1 == $diaAuxiliar2) {
                    if (($festivos[$index]["Tipo"] == 'S') && ((int) $cveRoll === 3)) {
                        $diaFestivo = true;
                        break;
                    }
                }
            }

            if ($diaFestivo) {
                $diaDisponible = false;
            } else {
                $diaDisponible = true;
            }
        }
        return $diaDisponible;
    }

    public function burbuja($juzgadores) {//Metodo para ordenar por carga de trabajo deacuerdo a la ponderacion de asuntos radicados
        if (sizeof($juzgadores) > 0) {
            $aux = "";
            $this->logger->w_onError("-->Listado de juzgadores :  " . json_encode($juzgadores) . " lo cuales se tendran que ordenar de menor a mayor");
            $this->logger->w_onError("-->deacuerdo al numero de asuntos radicados en el juzgado ");
            for ($x = 0; $x < sizeof($juzgadores); $x ++) {
                for ($y = 0; $y < sizeof($juzgadores) - 1; $y ++) {
                    $total1 = ($juzgadores[$y]["totalAsignados"] + $juzgadores[$y]["control"]);
                    $total2 = ($juzgadores[$y + 1]["totalAsignados"] + $juzgadores[$y]["control"]);
                    if ($total1 > $total2) {
                        $aux = $juzgadores[$y];
                        $juzgadores[$y] = $juzgadores[$y + 1];
                        $juzgadores[$y + 1] = $aux;
                    }
                }
            }
        }

        $this->logger->w_onError("-->Lista de juzgadores ordenada " . json_encode($juzgadores) . " de menor carga a mayor carga");
        return $juzgadores;
    }

    public function ordenaJuzgadores($solicitud, $asuntoNuevo = false, $juzgadores, $cveJuzgado, $mesActual, $yearActual, $funcionJuzgador, $proveedor) {
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $historial = array();


        $this->logger->w_onError(" -->Obtendremos la carga de trabajos de los juzgadores que cumplen con las condiciones para ser candidatos para asignar la audiencia");
        $this->logger->w_onError(" -->llegaron un total de " . sizeof($funcionJuzgador) . " funciones de juzgador");
        $this->logger->w_onError(" -->llegaron un total de " . sizeof($juzgadores) . " juzgadores");

        if (sizeof($funcionJuzgador) == 1) {
            $controlcargasDao = new ControlcargasDAO();
            $tipoJuzgador = $funcionJuzgador->getDesFuncionJuzgador();
            $this->logger->w_onError(" -->La funcion que tendra el juzgador es " . $tipoJuzgador . " y por la cual se buscaran las cargas de trabajo");
            $this->logger->w_onError(" -->Comenzamos a traer la informacion de los juzgadores");

            for ($index = 0; $index < sizeof($juzgadores); $index ++) {
                $controlcargasDto = new ControlcargasDTO();
                $controlcargasDto->setIdJuzgador($juzgadores[$index]["idJuzgador"]);
                $controlcargasDto->setCveFuncionJuzgador($funcionJuzgador->getCveFuncionJuzgador());
                $controlcargasDto->setCveJuzgado($cveJuzgado);
                $controlcargasDto = $controlcargasDao->selectControlcargas($controlcargasDto, " And anioCarga='" . $yearActual . "' And cveMes='" . $mesActual . "' ORDER BY totalPuntaje ASC", $proveedor);
                if ($controlcargasDto != "") {
                    $historial[$tipoJuzgador][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "nombre" => $juzgadores[$index]["nombre"], "totalAsignados" => $controlcargasDto[0]->getTotalAsignado(), "puntageTotal" => $controlcargasDto[0]->getTotalPuntaje(), "control" => $controlcargasDto[0]->getControl());
                } else {
                    $historial[$tipoJuzgador][] = array("idJuzgador" => $juzgadores[$index]["idJuzgador"], "nombre" => $juzgadores[$index]["nombre"], "totalAsignados" => 0, "puntageTotal" => 0, "control" => 0);
                }
            }
            $this->logger->w_onError(" -->La carga de los juzgadores actual " . json_encode($historial) . "");
            if (sizeof($historial) > 0) {
                $this->logger->w_onError(" -->Si se encontraron cargas para los juzgadores recibidos");
                $this->logger->w_onError(" -->Si los juzgadores corresponden a antecedenteno se ordenan en caso contrario se ordenan de menor a mayor");

                if ((boolean) $asuntoNuevo == true) {
                    $this->logger->w_onError(" -->Se ordenaran loz juzgadores de acuerdo a la carga de trabajo porque es un asunto nuevo ");
                    $historial[$tipoJuzgador] = $this->burbuja($historial[$tipoJuzgador]);
                }
            }
        }

        return $historial;

//        $numjuzgadores = sizeof($funcionJuzgador);
//        $index = 0;
//        if ($numjuzgadores) {
//            
//        }
    }

    public function juecesJuicio($solicitud, $juzgadores = array(), $cveJuzgado, $proveedor = null) {
        $tmp = $proveedor;
        $historial = array();
        $count = 0;
        $idReferencia = 0;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $this->logger->w_onError("Buscaremos la carpeta padre de la causa de juicio para poder revizar que los jueces de juicio no tengan alguna");
        $this->logger->w_onError("Audiencia en la etapa de control por los jueces que son de JUICIO Y CONTROL");
        $idReferencia = $this->carpetaPadre($solicitud->getIdReferencia(), 3, $proveedor);

        if ((int) $idReferencia > 0) {
            $this->logger->w_onError("Al existir una causa de control padre se procede a revizar los jueces de juicio para revizar que no hayan conocido");
            $this->logger->w_onError("en alguna audiencia");
            $count = 0;
            for ($index = 0; $index < sizeof($juzgadores); $index++) {
                $sql = "SELECT A.idAudiencia, A.fechaInicial, A.fechaFinal, AJ.idJuzgador, AJ.cveFuncionJuzgador, concat_ws(' ', J.nombre, J.paterno, J.materno) as xNombre FROM tblaudiencias A, tblaudienciasjuzgador AJ, tbljuzgadores J Where A.idReferencia = '" . $idReferencia . "' And A.cveEstatusAudiencia in(1, 2) And AJ.idAudiencia = A.idAudiencia And AJ.idJuzgador = J.idJuzgador And J.idJuzgador='" . $juzgadores[$index]["idJuzgador"] . "' order by A.fechaInicial ASC";
                $this->logger->w_onError(" -->Sql: " . $sql);
                $proveedor->execute($sql);

                if (!$proveedor->error()) {
                    if ($proveedor->rows($proveedor->stmt) <= 0) {
                        $historial[$count] = $juzgadores[$index];
                        $count++;
                    }
                }
            }

            $juzgadores = $historial;
            $idReferencia = 0;
            $historial = array();

            $idReferencia = $this->carpetaPadre($solicitud->getIdReferencia(), 2, $proveedor);
            if ((int) $idReferencia > 0) {
                $count = 0;
                for ($index = 0; $index < sizeof($juzgadores); $index++) {
                    $sql = "SELECT A.idAudiencia, A.fechaInicial, A.fechaFinal, AJ.idJuzgador, AJ.cveFuncionJuzgador, concat_ws(' ', J.nombre, J.paterno, J.materno) as xNombre FROM tblaudiencias A, tblaudienciasjuzgador AJ, tbljuzgadores J Where A.idReferencia = '" . $idReferencia . "' And A.cveEstatusAudiencia in(1, 2) And AJ.idAudiencia = A.idAudiencia And AJ.idJuzgador = J.idJuzgador And J.idJuzgador='" . $juzgadores[$index]["idJuzgador"] . "' order by A.fechaInicial ASC";
                    $this->logger->w_onError(" -->Sql: " . $sql);
                    $proveedor->execute($sql);

                    if (!$proveedor->error()) {
                        if ($proveedor->rows($proveedor->stmt) <= 0) {
                            $historial[$count] = $juzgadores[$index];
                            $count++;
                        }
                    }
                }

                $juzgadores = $historial;
            }
        } else {
            $this->logger->w_onError("La causa de juicio no tien causa de control como padre se tiene que revizar porque por proceso no puede");
            $this->logger->w_onError("haver un caso asi a menos que venga de una incompetencia de otro distrito REVIZAR");
            $this->logger->w_onError("Para no entorpecer las actividades del juzgado se procede a obtener todos los juzgadores del juzgado");
            $this->logger->w_onError("de juicio ");
            $historial = $juzgadores;
        }

        if (sizeof($juzgadores) <= 0) {
            $historial = array();
            $juzgadores = array();
        } else {
            $historial = $juzgadores;
            $this->logger->w_onError("Juzgadores Filtados: " . json_encode($historial));
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        $proveedor->free_result($proveedor->stmt);

        $proveedor->stmt = null;

        unset($juzgadores);
        unset($idReferencia);
        unset($count);
        unset($index);

        return $historial;
    }

    public function historiaAudiencias($solicitud, $juzgadores = array(), $proveedor = null) {
        $tmp = $proveedor;
        $count = sizeof($juzgadores);
        $historial = array();
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }
//        mysqli_store_result();
        $sql = "SELECT A.idAudiencia, A.fechaInicial, A.fechaFinal, AJ.idJuzgador, AJ.cveFuncionJuzgador, concat_ws(' ', J.nombre, J.paterno, J.materno) as xNombre FROM tblaudiencias A, tblaudienciasjuzgador AJ, tbljuzgadores J Where A.idReferencia = '" . $solicitud->getIdReferencia() . "' And A.cveEstatusAudiencia in(1, 2) And AJ.idAudiencia = A.idAudiencia And AJ.idJuzgador = J.idJuzgador order by A.fechaInicial ASC";
        $this->logger->w_onError(" -->Sql: " . $sql);
        $proveedor->execute($sql);

        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $stmp = $proveedor->stmt;
//                $proveedor->stmt = $proveedor->free_result($stmp);
                $this->logger->w_onError(" -->Se localizaron un total de " . $proveedor->rows($stmp) . " audiencias relacionadas con esa carpeta");
                while ($audiencia = $proveedor->fetch_array($stmp, 0)) {
                    $this->logger->w_onError(" -->Buscaremos al juzgador " . $audiencia["xNombre"] . " que llevo acabo la audiencia de fecha " . $audiencia["fechaInicial"] . " se  encuentra activo dentro del juzgado ");
                    $sql = "Select * FROM tbljuzgadoresjuzgados JJ Where JJ.idJuzgador = '" . $audiencia["idJuzgador"] . "' And JJ.activo = 'S' And JJ.cveJuzgado = '" . $solicitud->getCveJuzgado() . "'";
                    $this->logger->w_onError(" -->Sql: " . $sql);
                    $proveedor->execute($sql);
                    $this->logger->w_onError(" -->Error: " . $proveedor->error());
                    if (!$proveedor->error()) {
                        if ($proveedor->rows($proveedor->stmt) > 0) {
                            $this->logger->w_onError(" -->El juzgador se encuentra activo en juzgado");
                            $juzgadores[$count] = array("idJuzgador" => $audiencia["idJuzgador"], "nombre" => $audiencia["xNombre"]);
                            $count++;
                        }
                    }
                }
                //$proveedor->store_result($stmp);
            } else {
                $this->logger->w_onError(" -->No se localizaron audiencia para el idReferencia de la carpeta judicial");
            }
        } else {
            $this->logger->w_onError(" -->Error al consultar la bd : " . $proveedor->errorNo() . " Mensaje: " . $proveedor->error());
        }

        $count = 0;
        $this->logger->w_onError("Juzgadores: " . json_encode($juzgadores));
        if (sizeof($juzgadores) > 0) {
            $this->logger->w_onError(" -->Procedemos a realizar limpia de juzgadores para evitar duplicados");
            for ($index = 0; $index < sizeof($juzgadores); $index++) {
                if (sizeof($historial) > 0) {
                    $juezEncontrado = false;

                    for ($x = 0; $x < sizeof($historial); $x++) {

                        if ($historial[$x]["idJuzgador"] == $juzgadores[$index]["idJuzgador"]) {
                            $juezEncontrado = true;
                            break;
                        }
                    }

                    if ((Boolean) $juezEncontrado == false) {
                        $historial[$count] = $juzgadores[$index];
                        $count++;
                    }
                } else {
                    $historial[$count] = $juzgadores[$index];
                    $count++;
                }
            }
        } else {
            $juzgadores = array();
        }


        if ($tmp == null) {
            $proveedor->close();
        }

        $proveedor->free_result($proveedor->stmt);
        //$proveedor->store_result($proveedor->stmt);
        //$proveedor->store_result($proveedor->stmt);
        $proveedor->stmt = null;
        $this->logger->w_onError(" -->Jueces que han conocido sobre esta carpeta: " . json_encode($historial));

        return $historial;
    }

    public function funcionesJuzgador(
    $cveTipoJuzgado, $tribunal) {

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

    public function juzgadoresJuzgados($cveJuzgado, $proveedor = null) {
        $tmp = $proveedor;

        $historial = array();
        $count = 0;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $sql = "Select concat_ws(' ', JU.nombre, JU.paterno, JU.materno) as xNombre, JU.idJuzgador FROM tbljuzgadoresjuzgados JJ, tbljuzgados J, tbljuzgadores JU Where JJ.cveJuzgado = J.cveJuzgado And JJ.activo = 'S' And JJ.cveJuzgado = '" . $cveJuzgado . "' And JJ.idJuzgador = JU.idJuzgador GROUP BY JU.idJuzgador";
        $this->logger->w_onError(" -->Sql: " . $sql);
        $proveedor->execute($sql);

        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                while ($juzgadores = $proveedor->fetch_array($proveedor->stmt, 0)) {
                    $historial[$count] = array("idJuzgador" => $juzgadores["idJuzgador"], "nombre" => $juzgadores["xNombre"]);
                    $count++;
                }
            } else {
                $this->
                logger->w_onError(" --> El Juzgado no tien juzgadores relacionados");
            }
        } else {
            $this->logger->w_onError(" -->Error al consultar la bd : " . $proveedor->errorNo() . " Mensaje: " . $proveedor->error());
        }


        if ($tmp == null) {
            $proveedor->close();
        }
        $proveedor->stmt = null;
        $proveedor->free_result($proveedor->stmt);
        //$proveedor->store_result($proveedor->stmt);

        return $historial;
    }

    public function carpetaPadre($idCarpetaJudicial, $cveTipoCarpeta, $proveedor = null) {
        $tmp = $proveedor;

        $historial = 0;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $sql = "Select idAntecedeCarpeta, idCarpetaPadre, idCarpetaHija, cveTipoCarpeta, activo, fechaRegistro, fechaActualizacion FROM tblantecedescarpetas Where idCarpetaHija = '" . $idCarpetaJudicial . "' And cveTipoCarpeta='" . $cveTipoCarpeta . "' And activo = 'S' order by idAntecedeCarpeta DESC LIMIT 0, 1";
        $this->logger->w_onError(" -->Sql: " . $sql);
        $proveedor->execute($sql);

        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $carpeta = $proveedor->fetch_array($proveedor->stmt, 0);

//                $historial = $carpeta["idCarpetaPadre "];
                $historial = $carpeta[1];
            } else {
                $this->logger->w_onError(" -- > Sin Carpeta principal");
            }
        } else {


            $this->logger->w_onError("  -->Error al consultar la bd : " . $proveedor->errorNo() . " Mensaje: " . $proveedor->error());
        }


        if ($tmp == null) {
            $proveedor->close();
        }
        $proveedor->stmt = null;
        $proveedor->free_result($proveedor->stmt);
        //$proveedor->store_result($proveedor->stmt);

        return $historial;
    }

    public function juzgadorCarpeta($idReferencia, $proveedor = null) {
        $tmp = $proveedor;
        $juzgadores = array();
        $count = 0;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        $juzgadoresCarpetasDto = new JuzgadorescarpetasDTO();
        $juzgadoresCarpetasDto->setIdCarpetaJudicial($idReferencia);
        $juzgadoresCarpetasDto->setActivo("S");
        $juzgadoresCarpetasDao = new JuzgadorescarpetasDAO();
        $juzgadoresCarpetasDto = $juzgadoresCarpetasDao->selectJuzgadorescarpetas($juzgadoresCarpetasDto, " Order By idJuzgadorCarpeta DESC LIMIT 0, 1 ", $proveedor);

        if (($juzgadoresCarpetasDto != "") && (sizeof($juzgadoresCarpetasDto) > 0)) {
            $juzgadoresCarpetasDto = $juzgadoresCarpetasDto[0];

            $sql = "Select concat_ws(' ',   JU.nombre, JU.paterno, JU.materno) as xNombre, JU.idJuzgador FROM tbljuzgadoresjuzgados JJ, tbljuzgados J, tbljuzgadores JU Where JJ.cveJuzgado = J.cveJuzgado And JJ.activo = 'S' And JJ.idJuzgador = '" . $juzgadoresCarpetasDto->getIdJuzgador() . "' And JJ.idJuzgador = JU.idJuzgador GROUP BY JU.idJuzgador";
            $this->logger->w_onError(" -->Sql: " . $sql);
            $proveedor->execute($sql);

            if (!$proveedor->error()) {
                if ($proveedor->rows($proveedor->stmt) > 0) {
                    $juzgador = $proveedor->fetch_array($proveedor->stmt, 0);
                    $juzgadores[$count] = array("idJuzgador" => $juzgadoresCarpetasDto->getIdJuzgador(), "nombre" => $juzgador["xNombre"]);
                    $count++;
                } else {
                    $this->logger->w_onError(" -->El juzgador no se localizo en el juzgado");
                }
            } else {
                $this->logger->w_onError(" -->Error al consultar la bd : " . $proveedor->errorNo() . " Mensaje: " . $proveedor->error());
            }
        }

        if ($tmp == null) {
            $proveedor->close();
        }


        return $juzgadores;
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

        if (($juzgadosDto != "") && (sizeof($juzgadosDto) > 0)) {
            $juzgadosDto = $juzgadosDto[0];
        }

        if ($tmp == null) {
            $proveedor->close();
        }

        return $juzgadosDto;
    }

    public function juezParaSorteo($idJuzgador, $fechaInicio, $fechaFinal, $rolJuzgador, $cveJuzgado, $proveedor = null) {
        $tmp = $proveedor;
        $disponible = false;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $sql = "SELECT PJ.idProgramacionJuzgador, PJ.idJuzgador, PJ.cveRolJuzgador, PJ.fechaInicio, PJ.fechaFinal, PJ.activo, PJ.fechaRegistro, PJ.fechaActualizacion, PJ.idProgramacion FROM tblprogramacionjuzgadores PJ, tblprogramaciones P, tbljuzgadoresjuzgados JJ WHERE PJ.idJuzgador = '" . $idJuzgador . "' AND PJ.cveRolJuzgador = '" . $rolJuzgador . "' AND PJ.fechaFinal>='" . $fechaInicio . "' AND PJ.fechaInicio<='" . $fechaFinal . "' And P.idProgramacion = PJ.idProgramacion And PJ.idJuzgador = JJ.idJuzgador And JJ.cveJuzgado = P.cveJuzgado And JJ.activo = 'S' And JJ.cveJuzgado = '" . $cveJuzgado . "'";
        $this->logger->w_onError(" -->Sorteo de juzgador " . $sql);
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
        $sql = "SELECT PJ.idProgramacionJuzgador, PJ.idJuzgador, PJ.cveRolJuzgador, PJ.fechaInicio, PJ.fechaFinal, PJ.activo, PJ.fechaRegistro, PJ.fechaActualizacion, PJ.idProgramacion, P.cveJuzgado
                        FROM tblprogramacionjuzgadores PJ, tblprogramaciones P, tbljuzgadoresjuzgados JJ
                        WHERE PJ.idJuzgador = '" . $idJuzgador . "' AND PJ.cveRolJuzgador = '" . $rolJuzgador . "'
                        AND JJ.idJuzgador = PJ.idJuzgador
                        AND PJ.idProgramacion = P.idProgramacion
                        And P.cveJuzgado = JJ.cveJuzgado
                        And JJ.activo = 'S'
                        And P.cveJuzgado = '" . $cveJuzgado . "'
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

    public function buscaHorarioDeNoUrgente($idJuzgador, $fechaInicio, $fechaFinal, $proveedor = null) { //Este metodo me ayuda a saber si un juez tiene audiencias asignadas
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $disponible = false;

        $sql = " SELECT * FROM htsj_sigejupe.tblaudiencias A, tblaudienciasjuzgador AJ, tblcataudiencias CA
                        Where
                        ((A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "' ) or
                        (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "' ) or
                        (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "' ) or
                        (A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' )
                        )
                        And AJ.idJuzgador = '" . $idJuzgador . "' And A.activo = 'S' And A.cveEstatusAudiencia = '1' And AJ.idAudiencia = A.idAudiencia And A.cveCatAudiencia = CA.cveCatAudiencia And ((CA.cveTipoAudiencia = 2) OR (CA.cveTipoAudiencia = 1 AND CA.cveEtapaProcesal=3) )";

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

    public function buscaDisponibilidadJuez($idJuzgador, $fechaInicio, $fechaFinal, $proveedor = null) { //Este metodo me ayuda a saber si un juez tiene audiencias asignadas
        $tmp = $proveedor;
        if ($tmp == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->proveedor->connect();
        }

        $disponible = false;

        $sql = " SELECT * FROM htsj_sigejupe.tblaudiencias A, tblaudienciasjuzgador AJ
                        Where
                        ((A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "' ) or
                        (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "' ) or
                        (A.fechaInicial>='" . $fechaInicio . "' And A.fechaFinal<='" . $fechaFinal . "' And A.fechaInicial<'" . $fechaFinal . "' And A.fechaFinal>'" . $fechaInicio . "' ) or
                        (A.fechaInicial<='" . $fechaInicio . "' And A.fechaFinal>='" . $fechaFinal . "' )
                        )
                        And AJ.idJuzgador = '" . $idJuzgador . "' And A.activo = 'S' And A.cveEstatusAudiencia = '1' And AJ.idAudiencia = A.idAudiencia";

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

}

/*
  $SolicitudesaudienciasDTO = new SolicitudesaudienciasDTO();
  $SolicitudesaudienciasDTO->setIdSolicitudAudiencia(1126707);
  //$SolicitudesaudienciasDTO->setIdSolicitudAudiencia(1108851);
  $SolicitudesaudienciasDAO = new SolicitudesaudienciasDAO();
  $SolicitudesaudienciasDTO = $SolicitudesaudienciasDAO->selectSolicitudesaudiencias($SolicitudesaudienciasDTO);

  $cataudienciasDto = new CataudienciasDTO();
  $cataudienciasDto->setCveCatAudiencia($SolicitudesaudienciasDTO[0]->getCveCatAudiencia());
  $cataudienciasDao = new CataudienciasDAO();
  $cataudienciasDto = $cataudienciasDao->selectCataudiencias($cataudienciasDto, "");

  //var_dump($cataudienciasDto);

  $juzgadosDto = new JuzgadosDTO();
  $juzgadosDto->setCveJuzgado($SolicitudesaudienciasDTO[0]->getCveJuzgado());
  $juzgadosDao = new JuzgadosDAO();
  $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto, "");

  $audienciasDistrito = new AudienciasdistritosDTO();
  $audienciasDistrito->setCveDistrito($juzgadosDto[0]->getCveDistrito());
  $audienciasDistritoDao = new AudienciasdistritosDAO();
  $audienciasDistrito = $audienciasDistritoDao->selectAudienciasdistritos($audienciasDistrito, "");


  $fechaMovimiento = "2016-08-01 12:59:00";

  $bitacoraAsignacion = array();
  $logger = new Logger("/../../logs/", "EnvioSolicitudDeAudiencias");
  $logger->w_onError("**********COMIENZA EL PROGRAMA PARA EL ENVIO DE LA SOLICITUD DE AUDIENCIA**********");


  $buscarJuzgadores = new BuscarJuzgadores($bitacoraAsignacion, $logger);
  //$SolicitudesaudienciasDto, $SolicitudesaudienciasDto->getCveJuzgado(), $rolJuzgador, $delitosConEspecilidad, $fechaPosibleAudiencia, $fechaMaxPosibleAudiencia, $cataudienciasDto, $diasFestivos, $especial, $tiempoUtilizacion, $mes, $year, $fechaMovimiento, $mesActual, $yearActual, $audienciasDistritosDto, $SolicitudesaudienciasDto->getTribunal(), $this->proveedor
  $buscarJuzgadores->obtenerJuzgador($SolicitudesaudienciasDTO[0], $juzgadosDto[0]->getCveJuzgado(), 1, array(), "2016-08-31 10:12", "2016-09-04 18:12", $cataudienciasDto[0], array(), "S", "30", "08", "2016", $fechaMovimiento, "08", "2016", $audienciasDistrito[0], $SolicitudesaudienciasDTO[0]->getTribunal());
 */
?>
