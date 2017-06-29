<?php
if (!isset($_SESSION)) session_start();
date_default_timezone_set('America/Mexico_City');

/*
 * clase logger
 */
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

/*
 * imputadossentencias
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossentencias/ImputadossentenciasDAO.Class.php");

/*
 * imputadosejecsentencias
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosejecsentencias/ImputadosejecsentenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosejecsentencias/ImputadosejecsentenciasDAO.Class.php");


/*
 * importar contadores controller para obtener numero año
 */
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autoradicacionejecucion/AutoRadicacionEjecucionDAO.Class.php");
/*
 * requeridos para la crear expediente por cada imputado
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

/*
 * actuaciones
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

/*
 * antecedesActuaciones
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");

/*
 * antecedes carpetas
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");


/*
 * delitos
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

/*
 * incluir archivos relacionados al imputadocarpeta para realizar la copia
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputadoscarpetas/TutoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");


/*
 * de ofendidos
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscarpetas/TutoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");

/*
 * de los delitos
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

/*
 * de la relacion impofedelscarpetas
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");


class AutoRadicacionEjecucionController {

    private $proveedor;

    /**
     * @param $ActuacionesDto
     * @return mixed
     */
    public function validarActuaciones($ActuacionesDto)
    {
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
        $ActuacionesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($ActuacionesDto->getobservaciones()))));
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

        return $ActuacionesDto;
    }

    /**
     * @param $actuacionesDto
     * @return array
     */
    public function validation($actuacionesDto)
    {
        try {

            $mensajes = "";
            $error = false;

            if ($actuacionesDto->getCveTipoCarpeta() == '') {
                $error = true;
                $mensajes .= "&#8226; El campo referenciado con es obligatorio.\n<br>";
            }

            if ($actuacionesDto->getNumero() == '') {
                $error = true;
                $mensajes .= "&#8226; El campo número de causa es obligatorio.\n<br>";
            }

            if ($actuacionesDto->getAnio() == '') {
                $error = true;
                $mensajes .= "&#8226; El campo año de causa es obligatorio.\n<br>";
            }

            if ($error) {
                throw new Exception($mensajes);
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'datos validados correctamente'
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * @param $actuacionesDto
     * @param null $proveedor
     * @return array
     */
    public function consultaSentencias($actuacionesDto, $proveedor = null)
    {
        try {

            $actuacionesDto = $this->validarActuaciones($actuacionesDto);

            $validation = $this->validation($actuacionesDto);

            if ($validation['estatus'] == 'error') {
                throw new Exception($validation['mensaje']);
            }

            $autoRadicacionEjecucionDao = new AutoRadicacionEjecucionDao();

            //busca sentencias que sean condenatorias o mixtas
            //busca por el juszgado adscripcion

            /*
             * setea el juzgado de adscripcion(el que viene en la sesion) en el dto de actuaciones
             */
            if (!isset($_SESSION['cveAdscripcion'])) throw new Exception('No se encontro la adscripcion en la sesion, inicia sesion nuevamente.');

            $cveAdscripcion = $_SESSION['cveAdscripcion'];

            $cveTipoCarpetaReferenciado = $actuacionesDto->getCveTipoCarpeta();

            if ($cveTipoCarpetaReferenciado == 2) {
                $tipoJuzgado = 1;
            } else if ($cveTipoCarpetaReferenciado == 3) {
                $tipoJuzgado = 2;
            } else if ($cveTipoCarpetaReferenciado == 4) {
                $tipoJuzgado = 4;
            }

            $getjuzgado = $this->getJuzgado($cveAdscripcion, $tipoJuzgado, $proveedor);

            if ($getjuzgado['estatus'] == 'error') throw new Exception('no se pudo obtener el juzgador');


            $actuacionesDto->setCveJuzgado($getjuzgado['data']);

            /*
             *
             */

            $data = $autoRadicacionEjecucionDao->selectSentencias($actuacionesDto, ' ORDER BY fechaRegistro DESC');


            if ($data == '') {
                throw new Exception('no se encontraron sentencias con los parametros especificados');
            }


            foreach ($data as $index => $sentencias) {

                /*
                 * obtener los imputados sentencias agrupados por el idimputadocarpeta en impofedelscarpetas
                 */
                $imputadossentencias = $autoRadicacionEjecucionDao->selectImputadosDeSentenciaByIdImputadoSentencia($sentencias['idActuacion'], ' GROUP BY imfd.idImputadoCarpeta');

                $imputadosEjecucionSentenciasDto = new ImputadosejecsentenciasDTO();
                $imputadosEjecucionSentenciasDao = new ImputadosejecsentenciasDAO();


                if ($imputadossentencias != '') {
                    foreach ($imputadossentencias as $imputadosentencia) {


                        //sacar los delitos de los imputados
                        $idImputadoCarpeta = $imputadosentencia['idImputadoCarpeta'];
                        $delitos = $this->getDelitosImputado($idImputadoCarpeta);

                        $imputadosEjecucionSentenciasDto->setIdImpOfeDelCarpeta($imputadosentencia['idImpOfeDelCarpeta']);
                        $imputadosEjecucionSentenciasDto->setActivo('S');

                        $getImputadosEjecucionSentencia = $imputadosEjecucionSentenciasDao->selectImputadosejecsentencias($imputadosEjecucionSentenciasDto);


                        $tipoPersona = "";
                        $nombrePersona = "";

                        switch ($imputadosentencia['cveTipoPersona']) {
                            case 1:
                                $tipoPersona = "FISICA";
                                $nombrePersona = $imputadosentencia['nombreFisica'];
                                break;
                            case 2:
                                $tipoPersona = "MORAL";
                                $nombrePersona = $imputadosentencia['nombreMoral'];
                                break;
                            case 3:
                                $tipoPersona = "OTRA";
                                $nombrePersona = $imputadosentencia['nombreMoral'];
                                break;
                        }

                        $generado = 0;
                        $numero = "";
                        $anio = "";

                        if ($getImputadosEjecucionSentencia != '') {
                            $generado = 1;
                            $numero = $getImputadosEjecucionSentencia[0]->getNumExp();
                            $anio = $getImputadosEjecucionSentencia[0]->getAniExp();
                        }

                        $data[$index]['imputados'][] = [
                            'tipoPersona'   => $tipoPersona,
                            'nombrePersona' => $nombrePersona,
                            'delitos'       => $delitos,
                            'generado'      => $generado,
                            'numero'        => $numero,
                            'anio'          => $anio,

                        ];
                    }
                } else {
                    unset($data[$index]);
                }


            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'consulta correcta',
                'data'    => $data
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * @param $actuacionesDto
     * @param null $proveedor
     * @return array
     */
    public function mostrarImputadosActuacion($actuacionesDto, $proveedor = null)
    {
        try {

            $actuacionesDto = $this->validarActuaciones($actuacionesDto);

            if ($actuacionesDto->getIdActuacion() == '') throw new Exception('no se seleccion&oacute; una sentencia.');

            $autoRadicacionEjecucionDao = new AutoRadicacionEjecucionDao();

            $data = $autoRadicacionEjecucionDao->selectImputadosDeSentencia($actuacionesDto);

            if ($data == '') throw new Exception('no se encontraron imputados sin generar expediente en la sentencia seleccionada.');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'consulta generada de forma correcta',
                'data'    => $data
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * @param $data contiene los id's de los imputadosCarpetas a generar expediente
     * @param $idActuacion
     * @param null $proveedor
     * @return array
     */
    public function generaEjecucionSentencia($data, $idActuacion, $proveedor = null)
    {

        $beginLog = "/**************************/ ";
        $endLog = " /**************************/";
        $logger = new Logger("/../../logs/", "AutoRadicacionEjecucion");

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();

        } else {

            $this->proveedor = $proveedor;

        }

        try {

            $logger->w_onError($beginLog . "INICIA PROCESO PARA GENERAR AUTO DE RADICACION DE EJECUCION" . $endLog);

            /*
             * validaciones
             */
            if (!isset($data) || $data == '') {
                $logger->w_onError($beginLog . "EL PARAMETRO DATA NO CONTIENE DATOS PARA INICIAR EL PROCESO DE AUTO RADICACION DE EJECUCION" . $endLog);
                throw new Exception('tienes que seleccionar al menos un imputado');
            }
            if (!count($data)) {
                $logger->w_onError($beginLog . "EL PARAMETRO DATA NO CONTIENE DATOS PARA INICIAR EL PROCESO DE AUTO RADICACION DE EJECUCION" . $endLog);
                throw new Exception('tienes que seleccionar al menos un imputado');
            }
            /*
             * termina validaciones
             */


            /*
             * se obtiene la cveUsuarioSistema de la session
             */
            if (!isset($_SESSION['cveUsuarioSistema'])) {
                $logger->w_onError("ERROR: OCURRIO UN ERROR AL OBTENER EL USUARIO DEL SISTEMA, SESSION NO INICIALIZADA");
                throw new Exception('Ocurrio un error al generar el expediente: tu sesión ha finalizado, inicia sesión nuevamente');
            }
            $cveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
            /*
             * termina de obtener el cveUsuarioSistema de la session
             */

            /*
             * inicia la transaccionalidad
             */
            $this->proveedor->execute('BEGIN');
            /*
             * termina la transaccionalidad
             */

            /*
             * se procede a generar la actuacion nueva
             */

            //se consulta la actuacion anterior
            $logger->w_onError($beginLog . "SE CONSULTA LA ACTUACION ANTERIOR CON ID: " . $idActuacion);

            $actuacionDto = new ActuacionesDTO();
            $actuacionDao = new ActuacionesDAO();

            $logger->w_onError("SET IDACTUACION: " . $idActuacion);
            $logger->w_onError("SET ACTIVO: S");

            $actuacionDto->setIdActuacion($idActuacion);
            $actuacionDto->setActivo('S');

            $getActuacionAnterior = $actuacionDao->selectActuaciones($actuacionDto, $this->proveedor);

            if ($getActuacionAnterior == "") {
                $logger->w_onError("ERROR: NO SE ENCONTRO LA ACTUACION CON ID: " . $idActuacion . " O SE ENCUENTRA INACTIVA");
                throw new Exception('Ocurrio un error al generar el expediente');
            }

            $logger->w_onError("SE ENCONTRO CORRECTAMENTE LA ACTUACION CON ID: " . $idActuacion);

            //se genera el contador de la nueva actuacion
            $logger->w_onError($beginLog . "SE PROCEDE A GENERAR EL CONTADOR PARA ACTUACIONES");
            $logger->w_onError("PARAMETROS PASADOS A FUNCION getContadorActuaciones(22," . $getActuacionAnterior[0]->getCveJuzgado() . ",proveedor)");
            $contadorActuaciones = $this->getContadorActuaciones(22, $getActuacionAnterior[0]->getCveJuzgado(), $this->proveedor);
            if ($contadorActuaciones == '') {
                $logger->w_onError("ERROR: NO SE PUDO GENERAR EL CONTADOR PARA ACTUACIONES");
                throw new Exception('Ocurrio un error al generar el expediente');
            }
            $numeroActuacionNueva = $contadorActuaciones[0]->getNumero();
            $anioActuacionNueva = $contadorActuaciones[0]->getAnio();

            //se inserta la nueva actuacion con copia de la anterior
            $logger->w_onError($beginLog . "SE PROCEDE A CREAR LA NUEVA ACTUACION");

            $actuacionDto->setIdActuacion('');
            $actuacionDto->setNumActuacion($numeroActuacionNueva);
            $actuacionDto->setAniActuacion($anioActuacionNueva);
            $actuacionDto->setCveTipoActuacion(22);
            $actuacionDto->setIdReferencia($getActuacionAnterior[0]->getIdReferencia()); //idref de la actuacion anterior
            $actuacionDto->setNumero($getActuacionAnterior[0]->getNumero()); //numero de la actuacion anterior
            $actuacionDto->setAnio($getActuacionAnterior[0]->getAnio()); //anio de la actuacion anterior
            $actuacionDto->setNoFojas($getActuacionAnterior[0]->getNoFojas());
            $actuacionDto->setCveTipoCarpeta($getActuacionAnterior[0]->getCveTipoCarpeta()); //tipo de carpeta de la actuacion anterior
            $actuacionDto->setCveJuzgado($getActuacionAnterior[0]->getCveJuzgado()); //cve juzgado de la carpeta anterior
            $actuacionDto->setSintesis($getActuacionAnterior[0]->getSintesis());
            $actuacionDto->setObservaciones($getActuacionAnterior[0]->getObservaciones());
            $actuacionDto->setCveUsuario($cveUsuarioSistema);
            $actuacionDto->setActivo('S');
            $actuacionDto->setCveEstado($getActuacionAnterior[0]->getCveEstado());
            $actuacionDto->setCveJuzgadoDestino($getActuacionAnterior[0]->getCveJuzgadoDestino());
            $actuacionDto->setJuzgadoDestino($getActuacionAnterior[0]->getJuzgadoDestino());
            $actuacionDto->setCveTipoNotificacion($getActuacionAnterior[0]->getCveTipoNotificacion());
            $actuacionDto->setCveTipoSentencia($getActuacionAnterior[0]->getCveTipoSentencia());
            $actuacionDto->setCveTipoAuto($getActuacionAnterior[0]->getCveTipoAuto());
            $actuacionDto->setCveTipoResolucion($getActuacionAnterior[0]->getCveTipoResolucion());
            $actuacionDto->setCveTipoOrden($getActuacionAnterior[0]->getCveTipoOrden());
            $actuacionDto->setCveTipoProcedimiento($getActuacionAnterior[0]->getCveTipoProcedimiento());
            $actuacionDto->setFechaSentencia($getActuacionAnterior[0]->getFechaSentencia());
            $actuacionDto->setFechaEjecutoria($getActuacionAnterior[0]->getFechaEjecutoria());

            $logger->w_onError("SE SETEAN EL DTO DE ACTUACIONES CON LOS VALORES: " . serialize($actuacionDto));

            $insertNuevaActuacion = $actuacionDao->insertActuaciones($actuacionDto, $this->proveedor);

            if ($insertNuevaActuacion == '') {
                $logger->w_onError('NO SE PUDO INSERTAR LA ACTUACION NUEVA');
                throw new Exception('Ocurrio un error al generar el expediente');
            }
            $logger->w_onError("SE CREÓ CORRECTAMENTE LA NUEVA ACTUACION CON LOS DATOS: " . serialize($insertNuevaActuacion[0]));

            //se guarda el id de la nueva actuacion
            $idActuacionNueva = $insertNuevaActuacion[0]->getIdActuacion();
            $logger->w_onError("ID DE LA NUEVA ACTUACION: " . $idActuacionNueva);
            /*
             * termina de generar la actuacion nueva
             */

            /*
             * se inserta en antecedes actuaciones la nueva es hija la actuacion anterior es la padre
             */

            $antecedesActuacionesDao = new AntecedesactuacionesDAO();
            $antecedesActuacionesDto = new AntecedesactuacionesDTO();

            $antecedesActuacionesDto->setIdActuacionPadre($idActuacion);
            $antecedesActuacionesDto->setIdActuacionHija($idActuacionNueva);
            $antecedesActuacionesDto->setActivo('S');

            $insertAntecedeActuaciones = $antecedesActuacionesDao->insertAntecedesactuaciones($antecedesActuacionesDto, $this->proveedor);

            $logger->w_onError("INSERTAR EN ANTECEDES ACTUACIONES CON ID ACTUACION PADRE = : " . $idActuacion . " Y ACTUACION HIJA = " . $idActuacionNueva);
            if ($insertAntecedeActuaciones == '') throw new Exception('No se pudo insertar en antecedes actuaciones');
            /*
             *
             */


            /*
             * inicia proceso para recorrer cada imputado enviado y generar carpeta, copiar imputado, copiar ofendidos, delitos (de sus relaciones)
             */

            foreach ($data as $index => $idImputadoCarpetaIdImpOfeDelCarpeta) {

                //se obtiene con explode el idImputadoCarpeta
                $explodeImputadoRelacion = explode(',', $idImputadoCarpetaIdImpOfeDelCarpeta);

                @$idImputadoCarpeta = $explodeImputadoRelacion[0];
                @$idImpOfeDelCarpeta = $explodeImputadoRelacion[1];

                if ($idImputadoCarpeta == '') {
                    $logger->w_onError("ERROR: NO SE ENCONTRÓ VALOR DEL ID IMPUTADO CARPETA");
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                if ($idImpOfeDelCarpeta == '') {
                    $logger->w_onError("ERROR: NO SE ENCONTRÓ VALOR DEL ID IMPOFEDELCARPETA");
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                // se valida que no se haya generado ya un expediente (tblimputadosejecsentencias) para el imputado
                $imputadoEjecSentenciaDto = new ImputadosejecsentenciasDTO();
                $imputadoEjecSentenciaDao = new ImputadosejecsentenciasDAO();

                $imputadoEjecSentenciaDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
                $imputadoEjecSentenciaDto->setActivo('S');

                $selectImputadoEjecSentencia = $imputadoEjecSentenciaDao->selectImputadosejecsentencias($imputadoEjecSentenciaDto, '', $this->proveedor);

                if ($selectImputadoEjecSentencia != '') {

                    $logger->w_onError($beginLog . "YA SE ENCONTRO UN REGISTRO EN IMPUTADOEJECSENTENCIA CON IDIMPOFEDELCARPETA: " . $idImpOfeDelCarpeta);
                    throw new Exception('Ya se tiene un expediente generado de alguno de los imputados seleccionados');

                }


                $logger->w_onError($beginLog . "SE CONSULTA DATOS DE IMPUTADOCARPETA(tblimputadoscarpetas) CON ID: " . $idImputadoCarpeta);

                //obtener la carpeta del imputado
                $imputadoCarpetaDto = new ImputadoscarpetasDTO();
                $imputadoCarpetaDao = new ImputadoscarpetasDAO();

                $logger->w_onError("SET IDIMPUTADOCARPETA: " . $idImputadoCarpeta);
                $logger->w_onError("SET ACTIVO: S");

                $imputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $imputadoCarpetaDto->setActivo('S');

                $getImputadoCarpeta = $imputadoCarpetaDao->selectImputadoscarpetas($imputadoCarpetaDto, '', $this->proveedor);

                if ($getImputadoCarpeta == '') {
                    $logger->w_onError("ERROR: NO SE ENCONTRO EL IMPUTADOCARPETA CON ID: " . $idImputadoCarpeta . $endLog);
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                $idCarpetaJudicial = $getImputadoCarpeta[0]->getIdCarpetaJudicial();
                $logger->w_onError("LA CARPETA JUDICIAL DEL IMPUTADOCARPETA: " . $idImputadoCarpeta . " ES IDCARPETAJUDICIAL: " . $idCarpetaJudicial);


                //consultar datos de la carpeta del imputado a generar expediente para realizar la copia de carpeta
                $logger->w_onError($beginLog . "SE CONSULTAN DATOS DE LA CARPETA JUDICIAL CON ID: " . $idCarpetaJudicial);
                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                $carpetaJudicialDao = new CarpetasjudicialesDAO();

                $logger->w_onError("SET IDCARPETAJUCIAL: " . $idCarpetaJudicial);
                $logger->w_onError("SET ACTIVO: S");
                $carpetaJudicialDto->setIdCarpetaJudicial($idCarpetaJudicial);
                $carpetaJudicialDto->setActivo('S');

                $getCarpetaJudicialImputado = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                if ($getCarpetaJudicialImputado == '') {
                    $logger->w_onError("ERROR: NO SE ENCOTRÓ LA CARPETA CON ID: " . $idCarpetaJudicial);
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                /*
                 * se obtiene el juzgado
                 */
                $logger->w_onError($beginLog . "SE OBTIENE EL JUZGADO");
                $juzgado = $this->getJuzgado($getCarpetaJudicialImputado[0]->getCveJuzgado(), 3, $this->proveedor);

                if ($juzgado['estatus'] == "error") {
                    $logger->w_onError($juzgado['mensaje']);
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                /*
                 * se obtiene el contador
                 */
                $logger->w_onError($beginLog . "SE OBTIENE EL CONTADOR");
                $logger->w_onError("PASAR PARAMETRO CVETIPOCARPETA = 5 A FUNCTION GETCONTADOR");
                $logger->w_onError("PASAR PARAMETRO CVEJUZGADO = " . $juzgado['data'] . " A FUNCTION GETCONTADOR");
                $contador = $this->getContador(5, $juzgado['data'], $this->proveedor);

                if ($contador == '') {
                    $logger->w_onError("OCURRIO UN ERROR AL OBTENER EL CONTADOR");
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                /*
                 *se guarda el cveJuzgado, numero y año del contador
                 */
                $cveJuzgado = $juzgado['data'];
                $numeroContador = $contador[0]->getNumero();
                $anioContador = $contador[0]->getAnio();

                /*
                 * obtenemos la fecha y hora actual del sistema mysql
                 */
                $fechaHoraActual = $this->getFechaHoraMysql();

                if ($fechaHoraActual == '') {
                    $logger->w_onError('NO SE PUDO OBTENER LA FECHA Y HORA ACTUAL DE LA CONSULTA MYSQL');
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                /*
                 * se procede a generar la nueva carpeta judicial
                 */

                $logger->w_onError($beginLog . "SE PROCEDE A GENERAR LA NUEVA CARPETA JUDICIAL(tblcarpetasjudiciales)");
                $carpetaJudicialDto->setIdCarpetaJudicial('');
                $carpetaJudicialDto->setCveEtapaProcesal(4);
                $carpetaJudicialDto->setCveConsignacion(1);
                $carpetaJudicialDto->setCveTipoCarpeta(5);
                $carpetaJudicialDto->setCveConsignacionA($getCarpetaJudicialImputado[0]->getCveConsignacionA());
                $carpetaJudicialDto->setNumero($numeroContador);
                $carpetaJudicialDto->setAnio($anioContador);
                $carpetaJudicialDto->setFechaRadicacion($fechaHoraActual);
                $carpetaJudicialDto->setActivo('S');
                $carpetaJudicialDto->setCveJuzgado($cveJuzgado);
                $carpetaJudicialDto->setCarpetaInv($getCarpetaJudicialImputado[0]->getCarpetaInv());
                $carpetaJudicialDto->setNuc($getCarpetaJudicialImputado[0]->getNuc());
                $carpetaJudicialDto->setCveUsuario($cveUsuarioSistema);
                $carpetaJudicialDto->setObservaciones($getCarpetaJudicialImputado[0]->getObservaciones());
                $carpetaJudicialDto->setNumImputados(1);
                $carpetaJudicialDto->setNumOfendidos(1);
                $carpetaJudicialDto->setNumDelitos(1);
                $carpetaJudicialDto->setCveEstatusCarpeta(1);
                $carpetaJudicialDto->setIncompetencia($getCarpetaJudicialImputado[0]->getIncompetencia());
                $carpetaJudicialDto->setCveTipoIncompetencia($getCarpetaJudicialImputado[0]->getCveTipoIncompetencia());
                $carpetaJudicialDto->setAcumulado($getCarpetaJudicialImputado[0]->getAcumulado());
                $carpetaJudicialDto->setNumAcumulado($getCarpetaJudicialImputado[0]->getNumAcumulado());
                //preguntar que va en cveConclucion
                $carpetaJudicialDto->setCveConclucion($getCarpetaJudicialImputado[0]->getCveConclucion());
                $carpetaJudicialDto->setPonderacion(1);

                $logger->w_onError("DATOS SETEADOS EN CARPETASJUDICIALESDTO = " . serialize($carpetaJudicialDto));

                $crearCarpetaJudicial = $carpetaJudicialDao->insertCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

                if ($crearCarpetaJudicial == '') {
                    $logger->w_onError("ERROR: NO SE PUDO GENERAR LA NUEVA CARPETA JUDICIAL DE EJECUCION");
                    throw new Exception('Ocurrio un error al generar el expediente');
                }

                $logger->w_onError("SE CREÓ LA CARPETA JUDICIAL CON ID: " . $crearCarpetaJudicial[0]->getIdCarpetaJudicial());

                //se guarda el id de la carpeta judicial nueva
                $idCarpetaJudicialNueva = $crearCarpetaJudicial[0]->getIdCarpetaJudicial();
                /*
                 * termina de generar la nueva carpeta judicial
                 */


                /*
                 * se procede a insertar un registro en antecedes carpetas
                 */
                $logger->w_onError($beginLog . "SE PROCEDE A GENERAR UN NUEVO REGISTRO EN ANTECEDES CARPETAS CON NUEVA CARPETA ID: " . $idCarpetaJudicialNueva);
                $antecedesCarpetasDto = new AntecedescarpetasDTO();
                $antecedesCarpetasDao = new AntecedescarpetasDAO();
                $antecedesCarpetasDto->setIdCarpetaPadre($idCarpetaJudicial);
                $antecedesCarpetasDto->setIdCarpetaHija($idCarpetaJudicialNueva);
                $antecedesCarpetasDto->setCveTipoCarpeta(5);
                $antecedesCarpetasDto->setActivo("S");

                $antecedesCarpetasDto = $antecedesCarpetasDao->insertAntecedescarpetas($antecedesCarpetasDto, $this->proveedor);
                if ($antecedesCarpetasDto == "") {
                    $logger->w_onError("ERROR: NO SE PUDO GENERAR EL REGISTRO EN ANTECEDES CARPETAS");
                    throw new Exception('Ocurrio un error al generar el expediente');
                }
                $logger->w_onError("SE GENERÓ CORRECTAMENTE EL REGISTRO EN ANTECEDESCARPETAS CON ID: " . $antecedesCarpetasDto[0]->getIdAntecedeCarpeta());
                /*
                 *
                 */

                /*
                 * se copia los datos del imputado carpeta a uno nuevo
                 */
                $logger->w_onError($beginLog . "COMIENZA EL PROCESO COPIAR LOS DATOS DEL IMPUTADO CON EL IMPUTADO CON ID: " . $idImputadoCarpeta);
                $generarExpedientePorCadaImputado = $this->copiarImputadoCarpeta($idCarpetaJudicialNueva, $idImputadoCarpeta, $this->proveedor);

                /*
                 *
                 */

                if ($generarExpedientePorCadaImputado['estatus'] == 'error') {
                    $logger->w_onError("ERROR: " . $generarExpedientePorCadaImputado['mensaje']);
                    throw new Exception('Ocurrio un error al generar el expediente');
                }
                $logger->w_onError("SE COPIÓ CORRECTAMENTE EL IMPUTADO CARPETA CON ID: " . $idImputadoCarpeta);

                //se guarda el id del imputado nuevo generado
                $idImputadoNuevo = $generarExpedientePorCadaImputado['data']->getIdImputadoCarpeta();


                //obtener imputados sentencias con cada una de sus relaciones para generar la copia
                //de impofedelcarpeta y todos su datos relacionados
                $autoRadicacionEjecucionDao = new AutoRadicacionEjecucionDao();
                $imputadosSentencias = $autoRadicacionEjecucionDao->selectImputadosDeSentenciaByIdImputadoSentencia($idActuacion, " AND imfd.idImputadoCarpeta = $idImputadoCarpeta", $this->proveedor);

                /*
                 * inicia proceso para copiar las relaciones y todos los ofendido y delitos (violencia de genero, trata de personas etc)
                 */

                if ($imputadosSentencias != '') {

                    $ofendidosArrayValidar = [];
                    $ofendidosReferencia = [];
                    $delitosArrayValidar = [];
                    $delitosReferencia = [];

                    foreach ($imputadosSentencias as $imputadoSentencia) {

                        //se guarda idimpofedelcarpeta
                        $idImpOfeDelCarpetaImputadoSentencia = $imputadoSentencia['idImpOfeDelCarpeta'];

                        //se consulta la impofedelcarpeta anterior
                        $logger->w_onError($beginLog . "SE OBTIENE IMPOFEDELCARPETA DTO CON ID:" . $idImpOfeDelCarpetaImputadoSentencia);
                        $impOfeDelCarpetaDto = new ImpofedelcarpetasDTO();
                        $impOfeDelCarpetaDao = new ImpofedelcarpetasDAO();

                        $impOfeDelCarpetaDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaImputadoSentencia);
                        $impOfeDelCarpetaDto->setActivo('S');

                        $selectImpofedelCarpeta = $impOfeDelCarpetaDao->selectImpofedelcarpetas($impOfeDelCarpetaDto, '', $this->proveedor);

                        if ($selectImpofedelCarpeta == '') {
                            $logger->w_onError("ERROR: NO SE ENCONTRO NINGUN REGISTRO EN IMPOFEDELCARPETA CON EL ID: " . $idImpOfeDelCarpetaImputadoSentencia);
                            throw new Exception('Ocurrio un error al generar el expediente');
                        }

                        $impOfeDelCarpetaAnteriorDto = $selectImpofedelCarpeta[0];

                        $logger->w_onError("IMPOFEDELCARPETA CON ID: " . $idImpOfeDelCarpetaImputadoSentencia . " ENCONTRADA CORRECTAMENTE");

                        //se guarda el idofendidocarpetaanterior y el iddelitocarpetaanterior
                        $idOfendidoCarpetaAnterior = $impOfeDelCarpetaAnteriorDto->getidOfendidoCarpeta();
                        $idDelitoCarpetaAnterior = $impOfeDelCarpetaAnteriorDto->getIdDelitoCarpeta();
                        //el el idofendido no esta en el array es que es uno diferente y se procede a copiar su informacion

                        if (!in_array($idOfendidoCarpetaAnterior, $ofendidosArrayValidar)) {
                            array_push($ofendidosArrayValidar, $idOfendidoCarpetaAnterior);
                            /*
                             *comienza proceso para copiar los datos del ofendido
                             */
                            $logger->w_onError($beginLog . "COMIENZA PROCESO COPIAR LOS DATOS DEL OFENDIDO QUE SE ENCUENTRA EN LA RELACION IMPOFEDELCARPETA CON ID: " . $idImpOfeDelCarpetaImputadoSentencia);
                            $copiarOfendidoCarpeta = $this->copiarOfendidoCarpeta($impOfeDelCarpetaAnteriorDto, $idCarpetaJudicialNueva, $this->proveedor);

                            if ($copiarOfendidoCarpeta['estatus'] == 'error') {
                                $logger->w_onError("ERROR: " . $copiarOfendidoCarpeta['mensaje']);
                                throw new Exception('Ocurrio un error al generar el expediente');
                            }
                            $logger->w_onError("SE COPIÓ EL OFENDIDO CORRECTAMENTE");
                            $idOfendidoNuevo = $copiarOfendidoCarpeta['data'];
                            /*
                             * termina proceso para copiar los datos del ofendido
                             */
                            $ofendidosReferencia[$idOfendidoCarpetaAnterior] = $idOfendidoNuevo;

                        } else {
                            $idOfendidoNuevo = $ofendidosReferencia[$idOfendidoCarpetaAnterior];
                        }

                        /*
                         * termina copiar ofendidos
                         */


                        /*
                         * inicia proceso para copiar los delitos
                         */

                        if (!in_array($idDelitoCarpetaAnterior, $delitosArrayValidar)) {
                            array_push($delitosArrayValidar, $idDelitoCarpetaAnterior);

                            $logger->w_onError($beginLog . "COMIENZA PROCESO COPIAR DELITO QUE SE ENCUENTRA EN LA RELACION IMPOFEDELCARPETA CON ID: " . $idImpOfeDelCarpetaImputadoSentencia);
                            $copiarDelito = $this->copiarDelitoCarpeta($impOfeDelCarpetaAnteriorDto, $idCarpetaJudicialNueva, $this->proveedor);

                            if ($copiarDelito['estatus'] == 'error') {
                                $logger->w_onError("ERROR: " . $copiarDelito['mensaje']);
                                throw new Exception('Ocurrio un error al generar el expediente');
                            }
                            $logger->w_onError("SE COPIÓ EL DELITO CORRECTAMENTE");

                            $idDelitoNuevo = $copiarDelito['data'];

                            $delitosReferencia[$idDelitoCarpetaAnterior] = $idDelitoNuevo;
                        } else {
                            $idDelitoNuevo = $delitosReferencia[$idDelitoCarpetaAnterior];
                        }
                        /*
                         * termina proceso para copiar los delitos
                         */


                        /*
                         * se procede a copiar la relacion anterior a una nueva con los nuevos idcarpeta, idofendido, idimputado, iddelito
                         */

                        $dataRegistrosGenerados = [
                            'idCarpetaJudicial' => $idCarpetaJudicialNueva,
                            'idImputadoCarpeta' => $idImputadoNuevo,
                            'idOfendidoCarpeta' => $idOfendidoNuevo,
                            'idDelitoCarpeta'   => $idDelitoNuevo
                        ];

                        $logger->w_onError($beginLog . "SE PROCEDE A COPIAR IMPOFEDELCARPETA RELACION CON ID: " . $idImpOfeDelCarpetaImputadoSentencia);
                        $copiarRelacion = $this->copiarRelacion($impOfeDelCarpetaAnteriorDto, $dataRegistrosGenerados, $this->proveedor);
                        if ($copiarRelacion['estatus'] == 'error') {
                            $logger->w_onError($copiarRelacion['mensaje']);
                            throw new Exception('Ocurrio un error al generar el expediente');
                        }
                        $logger->w_onError("SE COPIÓ CORRECTAMENTE LA RELACION");
                        $impOfeDelCarpetaNueva = $copiarRelacion['data'];

                        /*
                         * termina copiar la relacion anterior a una nueva con los nuevos idcarpeta, idofendido, idimputado, iddelito
                         */


                        /*
                         * se procede a generar imputados con ejecucion de sentencia(tblimputadosejecsentencias)
                         */

                        $logger->w_onError($beginLog . "SE PROCEDE A GENERAR NUEVO REGISTRO EN (tblimputadosejecsentencias)");

                        $imputadoEjecSentenciaDto->setIdActuacion($idActuacionNueva);
                        $imputadoEjecSentenciaDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaImputadoSentencia);
                        $imputadoEjecSentenciaDto->setNumExp($numeroContador);
                        $imputadoEjecSentenciaDto->setAniExp($anioContador);
                        $imputadoEjecSentenciaDto->setCveJuzgado($cveJuzgado);
                        $imputadoEjecSentenciaDto->setActivo("S");

                        $logger->w_onError("DATOS SETEADOS EN DTO IMPUTADOSEJECSENTENCIAS: " . serialize($imputadoEjecSentenciaDto));

                        $insertImputadoEjecSentencia = $imputadoEjecSentenciaDao->insertImputadosejecsentencias($imputadoEjecSentenciaDto, $this->proveedor);

                        if ($insertImputadoEjecSentencia == "") {
                            $logger->w_onError("OCURRIO UN ERROR AL GENERAR REGISTRO EN (tblimputadosejecsentencias)");
                            throw new Exception('Ocurrio un error al generar el expediente');
                        }

                        $logger->w_onError("SE GENERO CORRECTAMENTE EL REGISTRO EN (tblimputadosejecsentencias) CON DATOS:" . serialize($insertImputadoEjecSentencia[0]));

                        /*
                         * termina generar imputados con ejecucion de sentencia
                         */

                    }

                } else {
                    $logger->w_onError("ERROR: NO SE ENCONTRARON IMPUTADOS EN TBLIMPUTADOSSENTENCIAS PARA GENERAR LA COPIA DE CADA RELACION");
                    throw new Exception('Ocurrio un error al generar el expediente');
                }


                /*
                 * inicia proceso para generar cerrar carpeta judicial
                 */
                $logger->w_onError($beginLog . "COMIENZA PROCESO PARA CERRAR LA CARPETA JUDICIAL SI TODOS LOS IMPUTADOS SE ENCUENTRAN EN UNA ETAPA PROCESAL DIFERENTE");
                $logger->w_onError($beginLog . "El id ofendido carpeta anterior es: " . $idCarpetaJudicial);
                //$cerrarCarpetaJudicialAnterior = $this->terminarCarpetaJudicial($idOfendidoCarpetaAnterior, $this->proveedor);
                $cerrarCarpetaJudicialAnterior = $this->terminarCarpetaJudicial($idCarpetaJudicial, $this->proveedor);
                if ($cerrarCarpetaJudicialAnterior['estatus'] == 'error') {
                    $logger->w_onError($cerrarCarpetaJudicialAnterior['mensaje']);
                    throw new Exception('Ocurrio un error al generar el expediente');
                } else {
                    $logger->w_onError($cerrarCarpetaJudicialAnterior['mensaje']);
                }

                /*
                 * termina
                 */

                $dataResponse[] = [
                    'idregistro' => $idImputadoCarpeta . '' . $idImpOfeDelCarpeta,
                    'numero'     => $numeroContador,
                    'anio'       => $anioContador,
                ];


            }

            /*
             * termina proceso para recorrer cada imputado enviado y generar carpeta, copiar imputado, copiar ofendidos, delitos (de sus relaciones)
             */
            $this->proveedor->execute('COMMIT');

            $logger->w_onError("TERMINA PROCESO DE AUTO RADICACION CORRECTAMENTE" . $endLog);

            $response = [
                'estatus' => 'ok',
                'mensaje' => '',
                'data'    => $dataResponse
            ];

        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            $logger->w_onError("TERMINA PROCESO DE AUTO RADICACION CON ERRORES" . $endLog);

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];


            //fin del log
            $logger->w_onError("*************************************************************FIN*************************************************************");
        }

        return $response;

    }

    /**
     * metodo para consultar los autos de radicacion de ejecucion de sentencias
     * @param $data
     * @param null $proveedor
     * @return array
     */
    public function consultarAutosRadicacion($data, $proveedor = null)
    {

        try {

            $error = false;
            $mensajes = '';
            /*
             * validar los parametros de entrada
             */

            $data->cveJuzgado = addslashes(trim($data->cveJuzgado));

            if ($data->cveJuzgado == '') {
                $error = true;
                $mensajes .= "&#8226; El campo juzgado es requerido\n<br>";
            }

            $data->nombreImputado = addslashes(trim($data->nombreImputado));

            if ($data->numeroExpediente != '') {
                if (!is_numeric($data->numeroExpediente)) {
                    $error = true;
                    $mensajes .= "&#8226; El campo Num.Expediente debe de ser número\n<br>";
                }
            }

            if ($data->anioExpediente != '') {
                if (!is_numeric($data->anioExpediente)) {
                    $error = true;
                    $mensajes .= "&#8226; El campo Año Expediente debe de ser número\n<br>";
                }
            }

            if ($data->numerocausa == '' && $data->aniocausa == '') {

                if ($data->fechaInicio != '') {
                    if (!$this->esFecha($data->fechaInicio)) {
                        $error = true;
                        $mensajes .= "&#8226; El campo Fecha Inicio debe de ser en formato (dd/mm/aaaa)\n<br>";
                    } else {
                        $data->fechaInicio = $this->fechaMysql($data->fechaInicio);
                    }

                } else {
                    $error = true;
                    $mensajes .= "&#8226; El campo Fecha Inicio es requerido\n<br>";
                }

                if ($data->fechaFin != '') {
                    if (!$this->esFecha($data->fechaFin)) {
                        $error = true;
                        $mensajes .= "&#8226; El campo Fecha Final debe de ser en formato (dd/mm/aaaa)\n<br>";
                    } else {
                        $data->fechaFin = $this->fechaMysql($data->fechaFin);
                    }


                } else {
                    $error = true;
                    $mensajes .= "&#8226; El campo Fecha Final es requerido\n<br>";
                }

            } else {
                $data->fechaInicio = '';
                $data->fechaFin = '';

                if($data->numerocausa == ''){
                    $error = true;
                    $mensajes .= "&#8226; El numero de causa es requerido\n<br>";
                }

                if($data->aniocausa == ''){
                    $error = true;
                    $mensajes .= "&#8226; El anio de causa es requerido\n<br>";
                }

            }


            if ($error) {
                throw new Exception($mensajes);
            }


            if ($data->nombreImputado == '') {


                if (strtotime($data->fechaInicio) > strtotime($data->fechaFin)) {
                    $error = true;
                    $mensajes .= "&#8226; La fecha inicial debe ser menor a la fecha final<br>";
                }

            } else {

                if ($data->fechaInicio != '' && $data->fechaFin == '') {
                    $error = true;
                    $mensajes .= '&#8226; La fecha final es requerida si existe la fecha inicial<br>';
                }

                if ($data->fechaFin != '' && $data->fechaInicio == '') {
                    $error = true;
                    $mensajes .= '&#8226; La fecha inicial es requerida si existe la fecha final<br>';
                }

            }

            if ($error) {
                throw new Exception($mensajes);
            }

            $getAutosRadicacionEjecSentencias = new AutoRadicacionEjecucionDao();


            //$cveAdscripcion = $_SESSION['cveAdscripcion'];

            $cveAdscripcion = $data->cveJuzgado;

            $data = $getAutosRadicacionEjecSentencias->selectAutosRadicacionEjecucionSentencias($data, " AND a.cveJuzgado = $cveAdscripcion GROUP BY imfd.idImputadoCarpeta");

            if ($data['registros'] == '') {
                throw new Exception('no se encontraron registros con los parametros de busqueda');
            }

            //obtener delitos de los imputados
            foreach ($data['registros'] as $index => $imputado) {

                $idImputadoCarpeta = $imputado['idImputadoCarpeta'];
                $delitos = $this->getDelitosImputado($idImputadoCarpeta);

                $data['registros'][$index]['delitos'] = $delitos;

            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'consulta realizada de forma correcta',
                'total'   => $data['total'],
                'pagina'  => $data['pagina'],
                'data'    => $data['registros']
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];

        }

        return $response;

    }

    /**
     * copia los datos de un imputado a un nuevo registro y le asigna el idCarpetaJudicial indicada
     * @param $idCarpetaJudicial //la nueva carpeta que se creo con etapa procesal ejecucuion de sentencia
     * @param $idImputadoCarpeta
     * @param null $proveedor
     * @return array
     */
    public function copiarImputadoCarpeta($idCarpetaJudicial, $idImputadoCarpeta, $proveedor = null)
    {

        try {

            if ($proveedor == null) {
                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
            }

            if ($proveedor == null) {
                $proveedor->execute('BEGIN');
            }

            $imputadoCarpetaDto = new ImputadoscarpetasDTO();
            $imputadoCarpetaDao = new ImputadoscarpetasDAO();

            $imputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $imputadoCarpetaDto->setActivo('S');

            $selectImputadoCarpeta = $imputadoCarpetaDao->selectImputadoscarpetas($imputadoCarpetaDto, '', $proveedor);

            if ($selectImputadoCarpeta == '') {
                throw new Exception('NO SE ENCONTRO EL IMPUTADO CARPETA CON ID: ' . $idImputadoCarpeta);
            }

            /*
             * asignamos el imputado seleccionado a variable imputado
             */
            $imputado = $selectImputadoCarpeta[0];

            $imputadoDto = new ImputadoscarpetasDTO();
            $imputadoDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $imputadoDto->setActivo("S");
            $imputadoDto->setDetenido('S');
            $imputadoDto->setNombre($imputado->getNombre());
            $imputadoDto->setPaterno($imputado->getPaterno());
            $imputadoDto->setMaterno($imputado->getMaterno());
            $imputadoDto->setRfc($imputado->getRfc());
            $imputadoDto->setCurp($imputado->getCurp());
            $imputadoDto->setCveTipoDetencion($imputado->getCveTipoDetencion());
            $imputadoDto->setCveGenero($imputado->getCveGenero());
            $imputadoDto->setAlias($imputado->getAlias());
            $imputadoDto->setFechaDeclaracion($imputado->getFechaDeclaracion());
            $imputadoDto->setCvePaisNacimiento($imputado->getCvePaisNacimiento());
            $imputadoDto->setCveEstadoNacimiento($imputado->getCveEstadoNacimiento());
            $imputadoDto->setCveMunicipioNacimiento($imputado->getCveMunicipioNacimiento());
            $imputadoDto->setFechaNacimiento($imputado->getFechaNacimiento());
            $imputadoDto->setEdad($imputado->getEdad());
            $imputadoDto->setCveTipoPersona($imputado->getCveTipoPersona());
            $imputadoDto->setNombreMoral($imputado->getNombreMoral());
            $imputadoDto->setCveNivelInstruccion($imputado->getCveNivelInstruccion());
            $imputadoDto->setCveEstadoCivil($imputado->getCveEstadoCivil());
            $imputadoDto->setCveEspanol($imputado->getCveEspanol());
            $imputadoDto->setCveAlfabetismo($imputado->getCveAlfabetismo());
            $imputadoDto->setCveDialectoIndigena($imputado->getCveDialectoIndigena());
            $imputadoDto->setCveTipoFamiliaLinguistica($imputado->getCveTipoFamiliaLinguistica());
            $imputadoDto->setCveOcupacion($imputado->getCveOcupacion());
            $imputadoDto->setCveInterprete($imputado->getCveInterprete());
            $imputadoDto->setCveEstadoPsicofisico($imputado->getCveEstadoPsicofisico());
            $imputadoDto->setFechaImputacion($imputado->getFechaImputacion());
            $imputadoDto->setFechaControlDet($imputado->getFechaControlDet());
            $imputadoDto->setFecTerminoCons($imputado->getFecTerminoCons());
            $imputadoDto->setFecCierreInv($imputado->getFecCierreInv());
            $imputadoDto->setEstadoNacimiento($imputado->getEstadoNacimiento());
            $imputadoDto->setMunicipioNacimiento($imputado->getMunicipioNacimiento());
            $imputadoDto->setRelacionMoral($imputado->getRelacionMoral());
            $imputadoDto->setPersonaMoral($imputado->getPersonaMoral());
            $imputadoDto->setCveCereso($imputado->getCveCereso());
            $imputadoDto->setCveEtapaProcesal(4);
            $imputadoDto->setCveTipoReincidencia($imputado->getCveTipoReincidencia());
            $imputadoDto->setIngresoMensual($imputado->getIngresoMensual());
            $imputadoDto->setCveGrupoEdnico($imputado->getCveGrupoEdnico());
            $imputadoDto->setTieneSobreseimiento("N");


            $insertNuevoImputadoCarpeta = $imputadoCarpetaDao->insertImputadoscarpetas($imputadoDto, $proveedor);

            if ($insertNuevoImputadoCarpeta == '') {
                throw new Exception('NO SE PUDO INSERTAR EL IMPUTADOCARPETA');
            }

            /*
             * borrado logico del imputado
             * solamente se edita la etapa procesal del imputado
             * y no se borra logicamente.
             */
            $imputadoCarpetaTmpDto = new ImputadoscarpetasDTO();
            $imputadoCarpetaTmpDto->setIdImputadoCarpeta($imputado->getIdImputadoCarpeta());
            $imputadoCarpetaTmpDto->setCveEtapaProcesal(4);
            //$imputadoCarpetaTmpDto->setActivo("N");
            $imputadoCarpetaTmpDto->setActivo("S");

            $inactivarImputado = $imputadoCarpetaDao->updateImputadoscarpetas($imputadoCarpetaTmpDto, $proveedor);

            if ($inactivarImputado == '') {
                throw new Exception('NO SE PUDO CAMBIAR LA ETAPA PROCESAL DEL IMPUTADO CARPETA A ETAPA 4,NO SE PUDO BORRAR LOGICAMENTE EL IMPUTADO CARPETA CON ID : ' . $imputado->getIdImputadoCarpeta());
            }

            //guardamos id del imputado carpeta que se genero
            $idImputadoCarpetaNuevo = $insertNuevoImputadoCarpeta[0]->getIdImputadoCarpeta();

            /*
             *  copiar domicilios del imputado
             */
            $domicilioImputadoCarpetaDto = new DomiciliosimputadoscarpetasDTO();
            $domicilioImputadoCarpetaDao = new DomiciliosimputadoscarpetasDAO();

            $domicilioImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $domicilioImputadoCarpetaDto->setActivo('S');

            $selectDomiciliosImputadosCarpetas = $domicilioImputadoCarpetaDao->selectDomiciliosimputadoscarpetas($domicilioImputadoCarpetaDto, '', $proveedor);
            if ($selectDomiciliosImputadosCarpetas != '') {

                foreach ($selectDomiciliosImputadosCarpetas as $domicilioImputadoCarpeta) {

                    $domicilioImputadoCarpetaDto->setIdDomicilioImputadoCarpeta('');
                    $domicilioImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpetaNuevo);
                    $domicilioImputadoCarpetaDto->setCvePais($domicilioImputadoCarpeta->getCvePais());
                    $domicilioImputadoCarpetaDto->setCveEstado($domicilioImputadoCarpeta->getCveEstado());
                    $domicilioImputadoCarpetaDto->setCveMunicipio($domicilioImputadoCarpeta->getCveMunicipio());
                    $domicilioImputadoCarpetaDto->setDireccion($domicilioImputadoCarpeta->getDireccion());
                    $domicilioImputadoCarpetaDto->setColonia($domicilioImputadoCarpeta->getColonia());
                    $domicilioImputadoCarpetaDto->setNumInterior($domicilioImputadoCarpeta->getNumInterior());
                    $domicilioImputadoCarpetaDto->setNumExterior($domicilioImputadoCarpeta->getNumExterior());
                    $domicilioImputadoCarpetaDto->setCp($domicilioImputadoCarpeta->getCp());
                    $domicilioImputadoCarpetaDto->setLatitud($domicilioImputadoCarpeta->getLatitud());
                    $domicilioImputadoCarpetaDto->setLongitud($domicilioImputadoCarpeta->getLongitud());
                    $domicilioImputadoCarpetaDto->setRecidenciaHabitual($domicilioImputadoCarpeta->getRecidenciaHabitual());
                    $domicilioImputadoCarpetaDto->setEstado($domicilioImputadoCarpeta->getEstado());
                    $domicilioImputadoCarpetaDto->setMunicipio($domicilioImputadoCarpeta->getMunicipio());
                    $domicilioImputadoCarpetaDto->setCveConvivencia($domicilioImputadoCarpeta->getCveConvivencia());
                    $domicilioImputadoCarpetaDto->setCveTipoDeVivienda($domicilioImputadoCarpeta->getCveTipoDeVivienda());
                    $domicilioImputadoCarpetaDto->setActivo("S");

                    $insertDomicilioImputadoCarpetaNuevo = $domicilioImputadoCarpetaDao->insertDomiciliosimputadoscarpetas($domicilioImputadoCarpetaDto, $proveedor);

                    if ($insertDomicilioImputadoCarpetaNuevo == '') {
                        throw new Exception('OCURRIO ERROR AL COPIAR EL DOMICILIO CON ID: ' . $domicilioImputadoCarpeta->getIdDomicilioImputadoCarpeta() . ' DEL IMPUTADO CARPETA');
                    }

                    /*
                     * borrado logico de los domicilios del imputado pasado
                     */
                    $domicilioImputadoCarpetaTmpDto = new DomiciliosimputadoscarpetasDTO();
                    $domicilioImputadoCarpetaTmpDto->setIdDomicilioImputadoCarpeta($domicilioImputadoCarpeta->getIdDomicilioImputadoCarpeta());
                    $domicilioImputadoCarpetaTmpDto->setActivo('N');

                    $inactivarDomicilio = $domicilioImputadoCarpetaDao->updateDomiciliosimputadoscarpetas($domicilioImputadoCarpetaTmpDto, $proveedor);

                    if ($inactivarDomicilio == '') {
                        throw new Exception('NO SE PUDO BORRAR LOGICAMENTE EL DOMICILIO IMPUTADO CARPETA CON ID : ' . $domicilioImputadoCarpeta->getIdDomicilioImputadoCarpeta());
                    }
                }

            }

            /*
             * copiar telefonos del imputado
             */

            $telefonosImputadoCarpetaDto = new TelefonosimputadoscarpetasDTO();
            $telefonosImputadoCarpetaDao = new TelefonosimputadoscarpetasDAO();

            $telefonosImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $telefonosImputadoCarpetaDto->setActivo('S');

            $selectTelefonosImputadosCarpetas = $telefonosImputadoCarpetaDao->selectTelefonosimputadoscarpetas($telefonosImputadoCarpetaDto, '', $proveedor);

            if ($selectTelefonosImputadosCarpetas != '') {
                foreach ($selectTelefonosImputadosCarpetas as $telefonoImputadoCarpeta) {
                    $telefonosImputadoCarpetaDto->setIdTelefonoImputadosCarpeta('');
                    $telefonosImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpetaNuevo);
                    $telefonosImputadoCarpetaDto->setTelefono($telefonoImputadoCarpeta->getTelefono());
                    $telefonosImputadoCarpetaDto->setCelular($telefonoImputadoCarpeta->getCelular());
                    $telefonosImputadoCarpetaDto->setEmail($telefonoImputadoCarpeta->getEmail());
                    $telefonosImputadoCarpetaDto->setActivo("S");

                    $insertTelefonoImputadoCarpetaNuevo = $telefonosImputadoCarpetaDao->insertTelefonosimputadoscarpetas($telefonosImputadoCarpetaDto, $proveedor);

                    if ($insertTelefonoImputadoCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL TELEFONO IMPUTADO CARPETA CON ID:' . $telefonoImputadoCarpeta->getIdTelefonoImputadosCarpeta());
                    }

                    /*
                     * borrado logico de los teléfonos del imputado pasado
                     */
                    $telefonoImputadoCarpetaTmpDto = new TelefonosimputadoscarpetasDTO();
                    $telefonoImputadoCarpetaTmpDto->setIdTelefonoImputadosCarpeta($telefonoImputadoCarpeta->getIdTelefonoImputadosCarpeta());
                    $telefonoImputadoCarpetaTmpDto->setActivo('N');

                    $inactivarTelefono = $telefonosImputadoCarpetaDao->updateTelefonosimputadoscarpetas($telefonoImputadoCarpetaTmpDto, $proveedor);

                    if ($inactivarTelefono == '') {
                        throw new Exception('NO SE PUDO BORRAR LOGICAMENTE EL TELEFONO IMPUTADO CARPETA CON ID : ' . $telefonoImputadoCarpeta->getIdTelefonoImputadosCarpeta());
                    }
                }
            }

            /*
             * copiar defensores del imputado
             */

            $defensoresImputadoCarpetaDto = new DefensoresimputadoscarpetasDTO();
            $defensoresImputadoCarpetaDao = new DefensoresimputadoscarpetasDAO();

            $defensoresImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $defensoresImputadoCarpetaDto->setActivo('S');

            $selectDefensoresImputadoCarpeta = $defensoresImputadoCarpetaDao->selectDefensoresimputadoscarpetas($defensoresImputadoCarpetaDto, '', $proveedor);

            if ($selectDefensoresImputadoCarpeta != '') {
                foreach ($selectDefensoresImputadoCarpeta as $defensorImputadoCarpeta) {
                    $defensoresImputadoCarpetaDto->setIdDefensorImputadoCarpeta('');
                    $defensoresImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpetaNuevo);
                    $defensoresImputadoCarpetaDto->setCveTipoDefensor($defensorImputadoCarpeta->getCveTipoDefensor());
                    $defensoresImputadoCarpetaDto->setNombre($defensorImputadoCarpeta->getNombre());
                    $defensoresImputadoCarpetaDto->setTelefono($defensorImputadoCarpeta->getTelefono());
                    $defensoresImputadoCarpetaDto->setCelular($defensorImputadoCarpeta->getCelular());
                    $defensoresImputadoCarpetaDto->setEmail($defensorImputadoCarpeta->getEmail());
                    $defensoresImputadoCarpetaDto->setActivo("S");

                    $insertDefensorImputadoCarpetaNuevo = $defensoresImputadoCarpetaDao->insertDefensoresimputadoscarpetas($defensoresImputadoCarpetaDto, $proveedor);

                    if ($insertDefensorImputadoCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL DEFENSOR IMPUTADO CARPETA CON ID: ' . $defensorImputadoCarpeta->getIdDefensorImputadoCarpeta());
                    }


                    /*
                     * borrado logico de los defensores del imputado pasado
                     */
                    $defensorImputadoCarpetaTmpDto = new DefensoresimputadoscarpetasDTO();
                    $defensorImputadoCarpetaTmpDto->setIdDefensorImputadoCarpeta($defensorImputadoCarpeta->getIdDefensorImputadoCarpeta());
                    $defensorImputadoCarpetaTmpDto->setActivo('N');

                    $inactivarDefensor = $defensoresImputadoCarpetaDao->updateDefensoresimputadoscarpetas($defensorImputadoCarpetaTmpDto, $proveedor);

                    if ($inactivarDefensor == '') {
                        throw new Exception('NO SE PUDO BORRAR LOGICAMENTE EL DEFENSOR IMPUTADO CARPETA CON ID : ' . $defensorImputadoCarpeta->getIdDefensorImputadoCarpeta());
                    }
                }
            }

            /*
             * copiar drogas del imputado
             */

            $drogasImputadoCarpetaDto = new ImputadosdrogascarpetasDTO();
            $drogasImputadoCarpetaDao = new ImputadosdrogascarpetasDAO();

            $drogasImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $drogasImputadoCarpetaDto->setActivo('S');

            $selectDrogasImputadoCarpeta = $drogasImputadoCarpetaDao->selectImputadosdrogascarpetas($drogasImputadoCarpetaDto, '', $proveedor);

            if ($selectDrogasImputadoCarpeta != '') {

                foreach ($selectDrogasImputadoCarpeta as $drogaImputadoCarpeta) {

                    $drogasImputadoCarpetaDto->setIdImputadoDrogaCarpeta('');
                    $drogasImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpetaNuevo);
                    $drogasImputadoCarpetaDto->setcveDroga($drogaImputadoCarpeta->getCveDroga());
                    $drogasImputadoCarpetaDto->setactivo("S");

                    $insertDrogaImputadoCarpetaNuevo = $drogasImputadoCarpetaDao->insertImputadosdrogascarpetas($drogasImputadoCarpetaDto, $proveedor);

                    if ($insertDrogaImputadoCarpetaNuevo == '') {
                        throw new Exception("NO SE PUDO COPIAR LA DROGA IMPUTADO CARPETA CON ID: " . $drogaImputadoCarpeta->getIdImputadoDrogaCarpeta());
                    }

                    /*
                     * borrado logico de las drogas del imputado pasado
                     */
                    $drogaImputadoCarpetaTmpDto = new ImputadosdrogascarpetasDTO();
                    $drogaImputadoCarpetaTmpDto->setIdImputadoDrogaCarpeta($drogaImputadoCarpeta->getIdImputadoDrogaCarpeta());
                    $drogaImputadoCarpetaTmpDto->setActivo('N');

                    $inactivarDroga = $drogasImputadoCarpetaDao->updateImputadosdrogascarpetas($drogaImputadoCarpetaTmpDto, $proveedor);
                    if ($inactivarDroga == '') {
                        throw new Exception('NO SE PUDO BORRAR LOGICAMENTE LA DROGA IMPUTADO CARPETA CON ID : ' . $drogaImputadoCarpeta->getIdImputadoDrogaCarpeta());
                    }

                }

            }


            /*
             * copiar tutores del imputado
             */

            $tutoresImputadoCarpetaDto = new TutoresimputadoscarpetasDTO();
            $tutoresImputadoCarpetaDao = new TutoresimputadoscarpetasDAO();

            $tutoresImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $tutoresImputadoCarpetaDto->setActivo('S');

            $selectTutoresImputadoCarpeta = $tutoresImputadoCarpetaDao->selectTutoresimputadoscarpetas($tutoresImputadoCarpetaDto, '', $proveedor);

            if ($selectTutoresImputadoCarpeta != '') {
                foreach ($selectTutoresImputadoCarpeta as $tutorImputadoCarpeta) {
                    $tutoresImputadoCarpetaDto->setIdTutorImputadoCarpeta('');
                    $tutoresImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpetaNuevo);
                    $tutoresImputadoCarpetaDto->setCveGenero($tutorImputadoCarpeta->getCveGenero());
                    $tutoresImputadoCarpetaDto->setCveTipoTutor($tutorImputadoCarpeta->getCveTipoTutor());
                    $tutoresImputadoCarpetaDto->setNombre($tutorImputadoCarpeta->getNombre());
                    $tutoresImputadoCarpetaDto->setPaterno($tutorImputadoCarpeta->getPaterno());
                    $tutoresImputadoCarpetaDto->setMaterno($tutorImputadoCarpeta->getMaterno());
                    $tutoresImputadoCarpetaDto->setFechaNacimiento($tutorImputadoCarpeta->getFechaNacimiento());
                    $tutoresImputadoCarpetaDto->setEdad($tutorImputadoCarpeta->getEdad());
                    $tutoresImputadoCarpetaDto->setActivo("S");

                    $insertTutorImputadoCarpetaNuevo = $tutoresImputadoCarpetaDao->insertTutoresimputadoscarpetas($tutoresImputadoCarpetaDto, $proveedor);

                    if ($insertTutorImputadoCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL TUTOR IMPUTADO CARPETA CON ID: ' . $tutorImputadoCarpeta->getIdTutorImputadoCarpeta());
                    }

                    /*
                     * borrado logico de los tutores del imputado pasado
                     */
                    $tutorImputadoCarpetaTmpDto = new TutoresimputadoscarpetasDTO();
                    $tutorImputadoCarpetaTmpDto->setIdTutorImputadoCarpeta($tutorImputadoCarpeta->getIdTutorImputadoCarpeta());
                    $tutorImputadoCarpetaTmpDto->setActivo('N');

                    $inactivarTutor = $tutoresImputadoCarpetaDao->updateTutoresimputadoscarpetas($tutorImputadoCarpetaTmpDto, $proveedor);

                    if ($inactivarTutor == '') {
                        throw new Exception('NO SE PUDO BORRAR LOGICAMENTE EL TUTOR IMPUTADO CARPETA CON ID : ' . $tutorImputadoCarpeta->getIdTutorImputadoCarpeta());
                    }
                }
            }

            /*
             * copiar nacionalidades del imputado
             */

            $nacionalidadesImputadoCarpetaDto = new NacionalidadesimputadoscarpetasDTO();
            $nacionalidadesImputadoCarpetaDao = new NacionalidadesimputadoscarpetasDAO();

            $nacionalidadesImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
            $nacionalidadesImputadoCarpetaDto->setActivo('S');

            $selectNacionalidadesImputadoCarpeta = $nacionalidadesImputadoCarpetaDao->selectNacionalidadesimputadoscarpetas($nacionalidadesImputadoCarpetaDto, '', $proveedor);

            if ($selectNacionalidadesImputadoCarpeta != '') {

                foreach ($selectNacionalidadesImputadoCarpeta as $nacionalidadImputadoCarpeta) {

                    $nacionalidadesImputadoCarpetaDto->setIdNacionalidadImputadoCarpeta('');
                    $nacionalidadesImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpetaNuevo);
                    $nacionalidadesImputadoCarpetaDto->setcvePais($nacionalidadImputadoCarpeta->getCvePais());
                    $nacionalidadesImputadoCarpetaDto->setactivo("S");

                    $insertNacionalidadImputadoCarpetaNuevo = $nacionalidadesImputadoCarpetaDao->insertNacionalidadesimputadoscarpetas($nacionalidadesImputadoCarpetaDto, $proveedor);

                    if ($insertNacionalidadImputadoCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR LA NACIONALIDAD IMPUTADO CARPETA CON ID: ' . $nacionalidadImputadoCarpeta->getIdNacionalidadImputadoCarpeta());
                    }

                    /*
                     * borrado logico de las nacionalidades del imputado pasado
                     */
                    $nacionalidadImputadoCarpetaTmpDto = new NacionalidadesimputadoscarpetasDTO();
                    $nacionalidadImputadoCarpetaTmpDto->setIdNacionalidadImputadoCarpeta($nacionalidadImputadoCarpeta->getIdNacionalidadImputadoCarpeta());
                    $nacionalidadImputadoCarpetaTmpDto->setActivo('N');

                    $inactivarNacionalidad = $nacionalidadesImputadoCarpetaDao->updateNacionalidadesimputadoscarpetas($nacionalidadImputadoCarpetaTmpDto, $proveedor);

                    if ($inactivarNacionalidad == '') {
                        throw new Exception('NO SE PUDO BORRAR LOGICAMENTE LA NACIONALIDAD IMPUTADO CARPETA CON ID : ' . $tutorImputadoCarpeta->getIdTutorImputadoCarpeta($nacionalidadImputadoCarpeta->getIdNacionalidadImputadoCarpeta()));
                    }

                }

            }

            if ($proveedor == null) {
                $proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'imputado copiado correctamente en la carpeta: ' . $idCarpetaJudicial,
                'data'    => $insertNuevoImputadoCarpeta[0]
            ];

        } catch (Exception $e) {

            if ($proveedor == null) {
                $proveedor->execute('ROLLBACK');
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage() . ', en la linea: ' . $e->getLine()
            ];

        }

        return $response;

    }


    /**
     * copiar los datos de un ofendido carpeta a uno nueva
     * @param $impOfeDelCarpetaAnteriorDto
     * @param $idCarpetaJudicial //id de la carpeta judicial nueva
     * @param null $proveedor
     * @internal param $idImpOfeDelCarpeta //id de la relacion anterior
     * @return array
     */
    public function copiarOfendidoCarpeta($impOfeDelCarpetaAnteriorDto, $idCarpetaJudicial, $proveedor)
    {

        try {

            //obtenemos el id del ofendido anterior de la impofedelcarpeta anterior
            $idOfendidoAnterior = $impOfeDelCarpetaAnteriorDto->getIdOfendidoCarpeta();

            $ofendidoCarpetaDto = new OfendidoscarpetasDTO();
            $ofendidoCarpetaDao = new OfendidoscarpetasDAO();

            $ofendidoCarpetaDto->setIdOfendidoCarpeta($idOfendidoAnterior);
            $ofendidoCarpetaDto->setActivo('S');

            $selectOfendidoCarpetaAnterior = $ofendidoCarpetaDao->selectOfendidoscarpetas($ofendidoCarpetaDto, '', $proveedor);

            if ($selectOfendidoCarpetaAnterior == '') {
                throw new Exception('NO SE ENCONTRO OFENDIDOCARPETA A COPIAR CON EL ID: ' . $idOfendidoAnterior);
            }

            $selectOfendidoCarpetaAnterior = $selectOfendidoCarpetaAnterior[0];

            //se procede a copiar el ofendido encontrado a uno nuevo
            $ofendidoCarpetaDto->setIdOfendidoCarpeta('');
            $ofendidoCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $ofendidoCarpetaDto->setActivo($selectOfendidoCarpetaAnterior->getActivo());
            $ofendidoCarpetaDto->setNombre($selectOfendidoCarpetaAnterior->getNombre());
            $ofendidoCarpetaDto->setPaterno($selectOfendidoCarpetaAnterior->getPaterno());
            $ofendidoCarpetaDto->setMaterno($selectOfendidoCarpetaAnterior->getMaterno());
            $ofendidoCarpetaDto->setRfc($selectOfendidoCarpetaAnterior->getRfc());
            $ofendidoCarpetaDto->setCurp($selectOfendidoCarpetaAnterior->getCurp());
            $ofendidoCarpetaDto->setCveOcupacion($selectOfendidoCarpetaAnterior->getCveOcupacion());
            $ofendidoCarpetaDto->setCveTipoPersona($selectOfendidoCarpetaAnterior->getCveTipoPersona());
            $ofendidoCarpetaDto->setCveGenero($selectOfendidoCarpetaAnterior->getCveGenero());
            $ofendidoCarpetaDto->setFechaNacimiento($selectOfendidoCarpetaAnterior->getFechaNacimiento());
            $ofendidoCarpetaDto->setEdad($selectOfendidoCarpetaAnterior->getEdad());
            $ofendidoCarpetaDto->setCvePaisNacimiento($selectOfendidoCarpetaAnterior->getCvePaisNacimiento());
            $ofendidoCarpetaDto->setCveEstadoNacimiento($selectOfendidoCarpetaAnterior->getCveEstadoNacimiento());
            $ofendidoCarpetaDto->setEstadoNacimiento($selectOfendidoCarpetaAnterior->getEstadoNacimiento());
            $ofendidoCarpetaDto->setCveMunicipioNacimiento($selectOfendidoCarpetaAnterior->getCveMunicipioNacimiento());
            $ofendidoCarpetaDto->setMunicipioNacimiento($selectOfendidoCarpetaAnterior->getMunicipioNacimiento());
            $ofendidoCarpetaDto->setCveEstadoCivil($selectOfendidoCarpetaAnterior->getCveEstadoCivil());
            $ofendidoCarpetaDto->setCveAlfabetismo($selectOfendidoCarpetaAnterior->getCveAlfabetismo());
            $ofendidoCarpetaDto->setCveNivelInstruccion($selectOfendidoCarpetaAnterior->getCveNivelInstruccion());
            $ofendidoCarpetaDto->setCveEspanol($selectOfendidoCarpetaAnterior->getCveEspanol());
            $ofendidoCarpetaDto->setCveDialectoIndigena($selectOfendidoCarpetaAnterior->getCveDialectoIndigena());
            $ofendidoCarpetaDto->setCveTipoFamiliaLinguistica($selectOfendidoCarpetaAnterior->getCveTipoFamiliaLinguistica());
            $ofendidoCarpetaDto->setCveInterprete($selectOfendidoCarpetaAnterior->getCveInterprete());
            $ofendidoCarpetaDto->setCveOrdenProteccion($selectOfendidoCarpetaAnterior->getCveOrdenProteccion());
            $ofendidoCarpetaDto->setCveEstadoPsicofisico($selectOfendidoCarpetaAnterior->getCveEstadoPsicofisico());
            $ofendidoCarpetaDto->setNombreMoral($selectOfendidoCarpetaAnterior->getNombreMoral());
            $ofendidoCarpetaDto->setCveVictimaDeLaDelincuenciaOrganizada($selectOfendidoCarpetaAnterior->getCveVictimaDeLaDelincuenciaOrganizada());
            $ofendidoCarpetaDto->setCveVictimaDeViolenciaDeGenero($selectOfendidoCarpetaAnterior->getCveVictimaDeViolenciaDeGenero());
            $ofendidoCarpetaDto->setCveVictimaDeTrata($selectOfendidoCarpetaAnterior->getCveVictimaDeTrata());
            $ofendidoCarpetaDto->setDesaparecido($selectOfendidoCarpetaAnterior->getDesaparecido());
            $ofendidoCarpetaDto->setNumHijos($selectOfendidoCarpetaAnterior->getNumHijos());
            $ofendidoCarpetaDto->setEmbarazada($selectOfendidoCarpetaAnterior->getEmbarazada());
            $ofendidoCarpetaDto->setCveGrupoEdnico($selectOfendidoCarpetaAnterior->getCveGrupoEdnico());

            $creaOfendidoCarpetaNuevo = $ofendidoCarpetaDao->insertOfendidoscarpetas($ofendidoCarpetaDto, $proveedor);

            if ($creaOfendidoCarpetaNuevo == '') {
                throw new Exception('NO SE PUDO COPIAR EL OFENDIDO CON ID: ' . $idOfendidoAnterior);
            }

            //se obtiene el id ofendido nuevo
            $idOfendidoNuevo = $creaOfendidoCarpetaNuevo[0]->getIdOfendidoCarpeta();

            /*
             * copiar domicilios del ofendido anterior
             */
            $domicilioCarpetaDto = new DomiciliosofendidoscarpetasDTO();
            $domicilioCarpetaDao = new DomiciliosofendidoscarpetasDAO();

            $domicilioCarpetaDto->setIdOfendidoCarpeta($idOfendidoAnterior);
            $domicilioCarpetaDto->setActivo('S');

            $selectDomiciliosCarpetas = $domicilioCarpetaDao->selectDomiciliosofendidoscarpetas($domicilioCarpetaDto, '', $proveedor);

            if ($selectDomiciliosCarpetas != '') {

                foreach ($selectDomiciliosCarpetas as $domicilioCarpeta) {

                    $domicilioCarpetaDto->setIdDomicilioOfendidoCarpeta('');
                    $domicilioCarpetaDto->setIdOfendidoCarpeta($idOfendidoNuevo);
                    $domicilioCarpetaDto->setCvePais($domicilioCarpeta->getCvePais());
                    $domicilioCarpetaDto->setCveEstado($domicilioCarpeta->getCveEstado());
                    $domicilioCarpetaDto->setCveMunicipio($domicilioCarpeta->getCveMunicipio());
                    $domicilioCarpetaDto->setDireccion($domicilioCarpeta->getDireccion());
                    $domicilioCarpetaDto->setColonia($domicilioCarpeta->getColonia());
                    $domicilioCarpetaDto->setNumInterior($domicilioCarpeta->getNumInterior());
                    $domicilioCarpetaDto->setNumExterior($domicilioCarpeta->getNumExterior());
                    $domicilioCarpetaDto->setCp($domicilioCarpeta->getCp());
                    $domicilioCarpetaDto->setLatitud($domicilioCarpeta->getLatitud());
                    $domicilioCarpetaDto->setLongitud($domicilioCarpeta->getLongitud());
                    $domicilioCarpetaDto->setRecidenciaHabitual($domicilioCarpeta->getRecidenciaHabitual());
                    $domicilioCarpetaDto->setEstado($domicilioCarpeta->getEstado());
                    $domicilioCarpetaDto->setMunicipio($domicilioCarpeta->getMunicipio());
                    $domicilioCarpetaDto->setCveConvivencia($domicilioCarpeta->getCveConvivencia());
                    $domicilioCarpetaDto->setCveTipoDeVivienda($domicilioCarpeta->getCveTipoDeVivienda());
                    $domicilioCarpetaDto->setActivo($domicilioCarpeta->getActivo());

                    $insertDomicilioCarpetaNuevo = $domicilioCarpetaDao->insertDomiciliosofendidoscarpetas($domicilioCarpetaDto, $proveedor);

                    if ($insertDomicilioCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL DOMICILIO CARPETA CON ID: ' . $domicilioCarpeta->getIdDomicilioOfendidoCarpeta());
                    }

                }

            }


            /*
             * copiar telefonos del ofendido anterior
             */

            $telefonoCarpetaDto = new TelefonosofendidoscarpetasDTO();
            $telefonoCarpetaDao = new TelefonosofendidoscarpetasDAO();

            $telefonoCarpetaDto->setIdOfendidoCarpeta($idOfendidoAnterior);
            $telefonoCarpetaDto->setActivo('S');

            $selectTelefonosCarpetas = $telefonoCarpetaDao->selectTelefonosofendidoscarpetas($telefonoCarpetaDto, '', $proveedor);

            if ($selectTelefonosCarpetas != '') {

                foreach ($selectTelefonosCarpetas as $telefonoCarpeta) {

                    $telefonoCarpetaDto->setIdTelefonoOfendidoCarpeta('');
                    $telefonoCarpetaDto->setIdOfendidoCarpeta($idOfendidoNuevo);
                    $telefonoCarpetaDto->setTelefono($telefonoCarpeta->getTelefono());
                    $telefonoCarpetaDto->setCelular($telefonoCarpeta->getCelular());
                    $telefonoCarpetaDto->setEmail($telefonoCarpeta->getEmail());
                    $telefonoCarpetaDto->setActivo($telefonoCarpeta->getActivo());

                    $insertTelefonoCarpetaNuevo = $telefonoCarpetaDao->insertTelefonosofendidoscarpetas($telefonoCarpetaDto, $proveedor);

                    if ($insertTelefonoCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL TELEFONO CARPETA CON ID: ' . $telefonoCarpeta->getIdTelefonoOfendidoCarpeta());
                    }

                }

            }


            /*
             * copiar defensores del ofendido anterior
             */

            $defensorCarpetaDto = new DefensoresofendidoscarpetasDTO();
            $defensorCarpetaDao = new DefensoresofendidoscarpetasDAO();

            $defensorCarpetaDto->setIdOfendidoCarpeta($idOfendidoAnterior);
            $defensorCarpetaDto->setActivo('S');

            $selectDefensoresCarpetas = $defensorCarpetaDao->selectDefensoresofendidoscarpetas($defensorCarpetaDto, '', $proveedor);

            if ($selectDefensoresCarpetas != '') {

                foreach ($selectDefensoresCarpetas as $defensorCarpeta) {

                    $defensorCarpetaDto->setIdDefensorOfendidoCarpeta('');
                    $defensorCarpetaDto->setIdOfendidoCarpeta($idOfendidoNuevo);
                    $defensorCarpetaDto->setCveTipoDefensor($defensorCarpeta->getCveTipoDefensor());
                    $defensorCarpetaDto->setNombre($defensorCarpeta->getNombre());
                    $defensorCarpetaDto->setTelefono($defensorCarpeta->getTelefono());
                    $defensorCarpetaDto->setCelular($defensorCarpeta->getCelular());
                    $defensorCarpetaDto->setEmail($defensorCarpeta->getEmail());
                    $defensorCarpetaDto->setActivo($defensorCarpeta->getActivo());

                    $insertDefensorCarpetaNuevo = $defensorCarpetaDao->insertDefensoresofendidoscarpetas($defensorCarpetaDto, $proveedor);

                    if ($insertDefensorCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL DEFENSOR CARPETA CON ID: ' . $defensorCarpeta->getIdDefensorOfendidoCarpeta());
                    }

                }
            }


            /*
             * copiar tutores del ofendido anterior
             */

            $tutorCarpetaDto = new TutoresofendidoscarpetasDTO();
            $tutorCarpetaDao = new TutoresofendidoscarpetasDAO();

            $tutorCarpetaDto->setIdOfendidoCarpeta($idOfendidoAnterior);
            $tutorCarpetaDto->setActivo('S');

            $selectTutoresCarpetas = $tutorCarpetaDao->selectTutoresofendidoscarpetas($tutorCarpetaDto, '', $proveedor);

            if ($selectTutoresCarpetas != '') {

                foreach ($selectTutoresCarpetas as $tutorCarpeta) {

                    $tutorCarpetaDto->setIdTutorOfendidoCarpeta('');
                    $tutorCarpetaDto->setIdOfendidoCarpeta($idOfendidoNuevo);
                    $tutorCarpetaDto->setCveTipoTutor($tutorCarpeta->getCveTipoTutor());
                    $tutorCarpetaDto->setNombre($tutorCarpeta->getNombre());
                    $tutorCarpetaDto->setPaterno($tutorCarpeta->getPaterno());
                    $tutorCarpetaDto->setMaterno($tutorCarpeta->getMaterno());
                    $tutorCarpetaDto->setFechaNacimiento($tutorCarpeta->getFechaNacimiento());
                    $tutorCarpetaDto->setEdad($tutorCarpeta->getEdad());
                    $tutorCarpetaDto->setActivo($tutorCarpeta->getActivo());
                    $tutorCarpetaDto->setCveGenero($tutorCarpeta->getCveGenero());

                    $insertTutorCarpetaNuevo = $tutorCarpetaDao->insertTutoresofendidoscarpetas($tutorCarpetaDto, $proveedor);

                    if ($insertTutorCarpetaNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL TUTOR CARPETA CON ID: ' . $tutorCarpeta->getIdTutorOfendidoCarpeta());
                    }

                }

            }

            /*
             * copiar nacionalidades del ofendido anterior
             */
            $nacionalidadCarpetaDto = new NacionalidadesofendidoscarpetasDTO();
            $nacionalidadCarpetaDao = new NacionalidadesofendidoscarpetasDAO();

            $nacionalidadCarpetaDto->setIdOfendidoCarpeta($idOfendidoAnterior);
            $nacionalidadCarpetaDto->setActivo('S');

            $selectNacionalidadesCarpetas = $nacionalidadCarpetaDao->selectNacionalidadesofendidoscarpetas($nacionalidadCarpetaDto, '', $proveedor);

            if ($selectNacionalidadesCarpetas != '') {

                foreach ($selectNacionalidadesCarpetas as $nacionalidadCarpeta) {

                    $nacionalidadCarpetaDto->setIdNacionalidadOfendidoCarpeta('');
                    $nacionalidadCarpetaDto->setIdOfendidoCarpeta($idOfendidoNuevo);
                    $nacionalidadCarpetaDto->setCvePais($nacionalidadCarpeta->getCvePais());
                    $nacionalidadCarpetaDto->setActivo($nacionalidadCarpeta->getActivo());

                    $insertNacionalidadCarpetNuevo = $nacionalidadCarpetaDao->insertNacionalidadesofendidoscarpetas($nacionalidadCarpetaDto, $proveedor);

                    if ($insertNacionalidadCarpetNuevo == '') {
                        throw new Exception('NO SE PUDO COPIAR EL TUTOR CARPETA CON ID: ' . $nacionalidadCarpeta->getIdNacionalidadOfendidoCarpeta());
                    }

                }

            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'se copió correctamente el ofendido',
                'data'    => $idOfendidoNuevo
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;


    }

    /**
     * copiar el delito carpeta a uno nuevo
     * @param $impOfeDelCarpetaAnteriorDto
     * @param $idCarpetaJudicial
     * @param $proveedor
     * @return array
     * @throws Exception
     */
    public function copiarDelitoCarpeta($impOfeDelCarpetaAnteriorDto, $idCarpetaJudicial, $proveedor)
    {
        try {

            $idDelitoAnterior = $impOfeDelCarpetaAnteriorDto->getIdDelitoCarpeta();

            $delitoCarpetaDto = new DelitoscarpetasDTO();
            $delitoCarpetaDao = new DelitoscarpetasDAO();

            $delitoCarpetaDto->setIdDelitoCarpeta($idDelitoAnterior);
            $delitoCarpetaDto->setActivo('S');

            $selectDelitosCarpetas = $delitoCarpetaDao->selectDelitoscarpetas($delitoCarpetaDto, '', $proveedor);

            if ($selectDelitosCarpetas == '') {
                throw new Exception('EL DELITO A COPIAR NO SE ENCONTRÓ IDDELITOCARPETA: ' . $idDelitoAnterior);
            }

            $delitoCarpetaDto->setIdDelitoCarpeta('');
            $delitoCarpetaDto->setCveDelito($selectDelitosCarpetas[0]->getCveDelito());
            $delitoCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $delitoCarpetaDto->setActivo($selectDelitosCarpetas[0]->getActivo());

            $insertDelitoCarpetaNuevo = $delitoCarpetaDao->insertDelitoscarpetas($delitoCarpetaDto, $proveedor);

            if ($insertDelitoCarpetaNuevo == '') {
                throw new Exception('NO SE PUDO COPIAR EL DELITO CARPETA CON ID: ' . $idDelitoAnterior);
            }

            $idDelitoNuevo = $insertDelitoCarpetaNuevo[0]->getIdDelitoCarpeta();

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'delito copiado correctamente',
                'data'    => $idDelitoNuevo
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];

        }

        return $response;
    }


    /**
     * @param $impOfeDelCarpetaAnteriorDto //dto de la relacion anterior para crear una copia de esta
     * @param $generados //id de los nuevos registros generados : ofendidocarpeta, imputadocarpeta, delitocarpeta y carpetajudicial
     * @param $proveedor
     * @return array
     */
    public function copiarRelacion($impOfeDelCarpetaAnteriorDto, $generados, $proveedor)
    {

        try {

            $impofedelCarpetaDto = new ImpofedelcarpetasDTO();
            $impofedelCarpetaDao = new ImpofedelcarpetasDAO();

            $impofedelCarpetaDto->setIdCarpetaJudicial($generados['idCarpetaJudicial']);
            $impofedelCarpetaDto->setIdImputadoCarpeta($generados['idImputadoCarpeta']);
            $impofedelCarpetaDto->setIdOfendidoCarpeta($generados['idOfendidoCarpeta']);
            $impofedelCarpetaDto->setIdDelitoCarpeta($generados['idDelitoCarpeta']);
            $impofedelCarpetaDto->setCveModalidad($impOfeDelCarpetaAnteriorDto->getCveModalidad());
            $impofedelCarpetaDto->setCveComision($impOfeDelCarpetaAnteriorDto->getCveComision());
            $impofedelCarpetaDto->setCveConcurso($impOfeDelCarpetaAnteriorDto->getCveConcurso());
            $impofedelCarpetaDto->setCveClasificacionDelitoOrden($impOfeDelCarpetaAnteriorDto->getCveClasificacionDelitoOrden());
            $impofedelCarpetaDto->setCveElementoComision($impOfeDelCarpetaAnteriorDto->getCveElementoComision());
            $impofedelCarpetaDto->setCveClasificacionDelito($impOfeDelCarpetaAnteriorDto->getCveClasificacionDelito());
            $impofedelCarpetaDto->setCveMunicipio($impOfeDelCarpetaAnteriorDto->getCveMunicipio());
            $impofedelCarpetaDto->setCveEntidad($impOfeDelCarpetaAnteriorDto->getCveEntidad());
            $impofedelCarpetaDto->setCveFormaAccion($impOfeDelCarpetaAnteriorDto->getCveFormaAccion());
            $impofedelCarpetaDto->setCveConsumacion($impOfeDelCarpetaAnteriorDto->getCveConsumacion());
            $impofedelCarpetaDto->setCveGradoParticipacion($impOfeDelCarpetaAnteriorDto->getCveGradoParticipacion());
            $impofedelCarpetaDto->setCveRelacionImpOfe($impOfeDelCarpetaAnteriorDto->getCveRelacionImpOfe());
            $impofedelCarpetaDto->setCveTerminacion($impOfeDelCarpetaAnteriorDto->getCveTerminacion());
            $impofedelCarpetaDto->setActivo("S");
            $impofedelCarpetaDto->setFechaDelito($impOfeDelCarpetaAnteriorDto->getFechaDelito());
            $impofedelCarpetaDto->setDireccion($impOfeDelCarpetaAnteriorDto->getDireccion());
            $impofedelCarpetaDto->setColonia($impOfeDelCarpetaAnteriorDto->getColonia());
            $impofedelCarpetaDto->setNumInterior($impOfeDelCarpetaAnteriorDto->getNumInterior());
            $impofedelCarpetaDto->setNumExterior($impOfeDelCarpetaAnteriorDto->getNumExterior());
            $impofedelCarpetaDto->setCp($impOfeDelCarpetaAnteriorDto->getCp());

            $insertNuevaRelacion = $impofedelCarpetaDao->insertImpofedelcarpetas($impofedelCarpetaDto, $proveedor);

            if ($insertNuevaRelacion == '') {
                throw new Exception('ERROR: NO SE PUDO REALIZAR LA COPIA DE LA RELACION(IMPOFEDELCARPETA) CON ID: ' . $impOfeDelCarpetaAnteriorDto->getIdImpOfeDelCarpeta());
            }


            $idImpOfeDelCarpetaAnterior = $impOfeDelCarpetaAnteriorDto->getIdImpOfeDelCarpeta();
            $idImpOfeDelCarpetaNueva = $insertNuevaRelacion[0]->getIdImpOfeDelCarpeta();

            /*
             * se procede a copiar la relacion de cada impofedelcarpeta
             */


            //copiar los efectos
            $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
            $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();

            $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaAnterior);
            $efectosofendidoscarpetasDto->setActivo("S");

            $insertefectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $proveedor);


            if ($insertefectosofendidoscarpetasDto != '') {

                foreach ($insertefectosofendidoscarpetasDto as $efectoOfendidoCarpeta) {

                    $efectosofendidoscarpetasDto->setIdEfectoOfendidoCarpeta('');
                    $efectosofendidoscarpetasDto->setcveDetalleEfecto($efectoOfendidoCarpeta->getCveDetalleEfecto());
                    $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaNueva);
                    $efectosofendidoscarpetasDto->setIdReferencia($efectoOfendidoCarpeta->getIdReferencia());
                    $efectosofendidoscarpetasDto->setOrigen($efectoOfendidoCarpeta->getOrigen());
                    $efectosofendidoscarpetasDto->setactivo("S");

                    $guardarEfectosOfendidosCarpetas = $efectosofendidoscarpetasDao->insertEfectosofendidoscarpetas($efectosofendidoscarpetasDto, $proveedor);

                    if ($guardarEfectosOfendidosCarpetas == '') {
                        throw new Exception("ERROR: NO SE PUDO COPIAR EL EFECTOOFENDIDOPERSONACARPETAS CON ID: " . $efectoOfendidoCarpeta->getIdEfectoOfendidoCarpeta());
                    }
                }

            }

            //termina copiar efectos


            //copiar datos de tratas de personas

            $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
            $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaAnterior);
            $trataspersonascarpetasDto->setActivo("S");

            $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
            $trataspersonascarpetasResponse = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $proveedor);

            if ($trataspersonascarpetasResponse != '') {
                foreach ($trataspersonascarpetasDto as $tataPersonaCarpeta) {

                    $trataspersonascarpetasDto->setIdTrataPersonaCarpeta('');
                    $trataspersonascarpetasDto->setCveEstadoDestino($tataPersonaCarpeta->getCveEstadoDestino());
                    $trataspersonascarpetasDto->setCveMunicipioDestino($tataPersonaCarpeta->getCveMunicipioDestino());
                    $trataspersonascarpetasDto->setCvePaisDestino($tataPersonaCarpeta->getCvePaisDestino());
                    $trataspersonascarpetasDto->setEstadoDestino($tataPersonaCarpeta->getEstadoDestino());
                    $trataspersonascarpetasDto->setMunicipioDestino($tataPersonaCarpeta->getMunicipioDestino());
                    $trataspersonascarpetasDto->setCveEstadoOrigen($tataPersonaCarpeta->getCveEstadoOrigen());
                    $trataspersonascarpetasDto->setCveMunicipioOrigen($tataPersonaCarpeta->getCveMunicipioOrigen());
                    $trataspersonascarpetasDto->setCvePaisOrigen($tataPersonaCarpeta->getCvePaisOrigen());
                    $trataspersonascarpetasDto->setEstadoOrigen($tataPersonaCarpeta->getEstadoOrigen());
                    $trataspersonascarpetasDto->setMunicipioOrigen($tataPersonaCarpeta->getMunicipioOrigen());
                    $trataspersonascarpetasDto->setCveTipoTrata($tataPersonaCarpeta->getCveTipoTrata());
                    $trataspersonascarpetasDto->setCveTrasportacion($tataPersonaCarpeta->getCveTrasportacion());
                    $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaNueva);
                    $trataspersonascarpetasDto->setActivo("S");

                    $guardarTrataPersonasCarpetas = $trataspersonascarpetasDao->insertTrataspersonascarpetas($trataspersonascarpetasDto, $proveedor);

                    if ($guardarTrataPersonasCarpetas == '') {
                        throw new Exception('ERROR: NO SE PUDO COPIAR TRATAPERSONASCARPETAS CON ID: ' . $tataPersonaCarpeta->getIdTrataPersonaCarpeta());
                    }
                }
            }

            //termina copiar datos de tratas de personas


            //copiar datos de violencia de genero

            $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
            $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();

            $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaAnterior);
            $violenciadegenerocarpetasDto->setActivo("S");

            $selectViolenciaDeGeneroCarpetas = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $proveedor);

            if ($selectViolenciaDeGeneroCarpetas != '') {

                foreach ($selectViolenciaDeGeneroCarpetas as $violenciaDeGeneroCarpeta) {

                    $idViolenciaDeGeneroAnterior = $violenciaDeGeneroCarpeta->getIdViolenciaDeGeneroCarpeta();

                    $violenciadegenerocarpetasDto->setCveEfecto($violenciaDeGeneroCarpeta->getCveEfecto());
                    $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaNueva);
                    $violenciadegenerocarpetasDto->setActivo("S");

                    $insertViolenciaDeGeneroCarpeta = $violenciadegenerocarpetasDao->insertViolenciadegenerocarpetas($violenciadegenerocarpetasDto, $proveedor);

                    if ($insertViolenciaDeGeneroCarpeta == '') {
                        throw new Exception("ERROR: NO SE PUDO COPIAR VIOLENCIADEGENEROCARPETAS CON ID: " . $idViolenciaDeGeneroAnterior);
                    }

                    $idViolenciaDeGeneroNuevo = $insertViolenciaDeGeneroCarpeta[0]->getIdViolenciaDeGeneroCarpeta();

                    $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                    $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroAnterior);
                    $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                    $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                    $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $proveedor);

                    if ($violenciahomicidiosdolososcarpetasDto != '') {

                        foreach ($violenciahomicidiosdolososcarpetasDto as $violenciaHomicidioDolosoCarpeta) {

                            $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososcarpetasDTO();
                            $violenciahomicidiosdolososDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroNuevo);
                            $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciaHomicidioDolosoCarpeta->getCveHomicidioDoloso());
                            $violenciahomicidiosdolososDto->setActivo("S");

                            $insertViolenciaHomicidioDoloso = $violenciahomicidiosdolososcarpetasDao->insertViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososDto, $proveedor);

                            if ($insertViolenciaHomicidioDoloso == '') {
                                throw new Exception("ERROR: NO SE PUDO COPIAR VIOLENCIAHOMICIDIODOLOSO CON ID: " . $violenciaHomicidioDolosoCarpeta->getIdViolenciaHomicidioDolosoCarpeta());
                            }

                        }

                    }


                    //copiar violencia factores sociales
                    $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                    $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroAnterior);
                    $violenciafactoressocialescarpetasDto->setActivo("S");

                    $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                    $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $this->proveedor);

                    if ($violenciafactoressocialescarpetasDto != '') {

                        foreach ($violenciafactoressocialescarpetasDto as $violenciaFactorSocialCarpeta) {

                            $violenciafactoressocialesDto = new ViolenciafactoressocialescarpetasDTO();
                            $violenciafactoressocialesDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroNuevo);
                            $violenciafactoressocialesDto->setActivo("S");
                            $violenciafactoressocialesDto->setCveFactorCultural($violenciaFactorSocialCarpeta->getCveFactorCultural());

                            $insertViolenciaFactoresSociales = $violenciafactoressocialescarpetasDao->insertViolenciafactoressocialescarpetas($violenciafactoressocialesDto, $proveedor);

                            if ($insertViolenciaFactoresSociales == '') {
                                throw new Exception("ERROR: NO SE PUDO COPIAR VIOLENCIAFACTORSOCIAL CON ID: " . $violenciaFactorSocialCarpeta->getIdViolenciaFactorSocialCarpeta());
                            }


                        }

                    }


                }

            }

            //termina copiar datos de violencia de genero


            //inicia copia de hostigamiento y acoso sexual

            $sexualescarpetasDto = new SexualescarpetasDTO();
            $sexualescarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaAnterior);
            $sexualescarpetasDto->setActivo("S");

            $sexualescarpetasDao = new SexualescarpetasDAO();
            $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $proveedor);

            if ($sexualescarpetasDto != '') {

                foreach ($sexualescarpetasDto as $sexualcarpeta) {

                    $sexualesDto = new SexualescarpetasDTO();
                    $sexualesDto->setCveModalidadAcoso($sexualcarpeta->getCveModalidadAcoso());
                    $sexualesDto->setCveAmbitoAcoso($sexualcarpeta->getCveAmbitoAcoso());
                    $sexualesDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpetaNueva);
                    $sexualesDto->setActivo("S");

                    $sexualesDto = $sexualescarpetasDao->insertSexualescarpetas($sexualesDto, $proveedor);

                    if ($sexualesDto == '') {
                        throw new Exception('ERROR: NO SE PUDO COPIAR HOSTIGAMIENTO Y ACOSO SEXUAL (SEXUALESCARPETAS) CON ID: ' . $sexualcarpeta->getIdSexualCarpeta());
                    }

                    $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                    $sexualesconductascarpetasDto->setIdSexualCarpeta($idImpOfeDelCarpetaAnterior);
                    $sexualesconductascarpetasDto->setActivo("S");
                    $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                    $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $proveedor);

                    if ($sexualesconductascarpetasDto != '') {

                        foreach ($sexualesconductascarpetasDto as $sexualConducta) {

                            $sexualesconductasDto = new SexualesconductascarpetasDTO();
                            $sexualesconductasDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                            $sexualesconductasDto->setActivo("S");
                            $sexualesconductasDto->setCveConducta($sexualConducta->getCveConducta());

                            $sexualesconductasDto = $sexualesconductascarpetasDao->insertSexualesconductascarpetas($sexualesconductasDto, $proveedor);

                            if ($sexualesconductasDto == '') {
                                throw new Exception('ERROR: NO SE PUDO COPIAR SEXUALCONDUCTA CON ID: ' . $sexualConducta->getIdSexualConductaCarpeta());
                            }

                            $detallesSexualesConductasCarpetasDto = new DetallessexualesconductascarpetasDTO();
                            $detallesSexualesConductasCarpetasDao = new DetallessexualesconductascarpetasDAO();
                            $detallesSexualesConductasCarpetasDto->setIdSexualConductaCarpeta($sexualConducta->getIdSexualConductaCarpeta());
                            $detallesSexualesConductasCarpetasDto->setActivo("S");

                            $detallesSexualesConductasCarpetasDto = $detallesSexualesConductasCarpetasDao->selectDetallessexualesconductascarpetas($detallesSexualesConductasCarpetasDto, "", $proveedor);

                            if ($detallesSexualesConductasCarpetasDto != '') {

                                foreach ($detallesSexualesConductasCarpetasDto as $detalleSexualConducta) {

                                    $detallesSexualesConductasDto = new DetallessexualesconductascarpetasDTO();
                                    $detallesSexualesConductasDto->setCveDetalleConducta($detalleSexualConducta->getCveDetalleConducta());
                                    $detallesSexualesConductasDto->setIdSexualConductaCarpeta($sexualesconductasDto[0]->getIdSexualConductaCarpeta());
                                    $detallesSexualesConductasDto->setActivo("S");

                                    $detallesSexualesConductasDto = $detallesSexualesConductasCarpetasDao->insertDetallessexualesconductascarpetas($detallesSexualesConductasDto, $proveedor);

                                    if ($detallesSexualesConductasDto == "") {

                                        throw new Exception('ERROR: NO SE PUDO COPIAR DETALLESSEXUALESCONDUCTAS CON ID: ' . $detalleSexualConducta->getIdDetalleSexualConductaCarpeta());

                                    }

                                }

                            }

                        }


                    }


                    //se procede a copiar testigos sexuales
                    $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                    $testigossexualescarpetasDto->setIdSexualCarpeta($sexualcarpeta->getIdSexualCarpeta());
                    $testigossexualescarpetasDto->setActivo("S");
                    $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                    $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $proveedor);

                    if ($testigossexualescarpetasDto != '') {

                        foreach ($testigossexualescarpetasDto as $testigoSexual) {

                            $testigossexualesDto = new TestigossexualescarpetasDTO();
                            $testigossexualesDto->setIdSexualCarpeta($sexualesDto[0]->getIdSexualCarpeta());
                            $testigossexualesDto->setPaterno($testigoSexual->getPaterno());
                            $testigossexualesDto->setMaterno($testigoSexual->getMaterno());
                            $testigossexualesDto->setNombre($testigoSexual->getNombre());
                            $testigossexualesDto->setCveGenero($testigoSexual->getCveGenero());
                            $testigossexualesDto->setActivo("S");

                            $testigossexualesDto = $testigossexualescarpetasDao->insertTestigossexualescarpetas($testigossexualesDto, $proveedor);

                            if ($testigossexualesDto == '') {
                                throw new Exception('ERROR: NO SE PUDO COPIAR TESTIGO SEXUAL CON ID: ' . $testigoSexual->getIdTestigoSexualCarpeta());
                            }

                        }

                    }
                    //termina de copiar testigos sexuales

                }

            }

            //termina copia de hostigamiento y acoso sexual


            /*
             *  termina de copiar las relaciones
             */

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'relacion copiada correctamente',
                'data'    => $insertNuevaRelacion
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;

    }

    /**
     * @param $idCarpetaJudicial //id de la carpeta judicial anterior
     * @param null $proveedor
     * @return array
     * @throws Exception
     */
    public function terminarCarpetaJudicial($idCarpetaJudicial, $proveedor = null)
    {
        try {

            $beginLog = "/**************************/ ";
            $logger = new Logger("/../../logs/", "AutoRadicacionEjecucion");

            $imputadosCarpetas = new ImputadoscarpetasDTO();
            $imputadoCarpetaDao = new ImputadoscarpetasDAO();
            $imputadosCarpetas->setIdCarpetaJudicial($idCarpetaJudicial);
            $imputadosCarpetas->setActivo("S");
            $imputadosCarpetas->setTieneSobreseimiento("N");

            $logger->w_onError($beginLog . "Se consulta imputadosCarpetas con idcarpetajudicial: " . $idCarpetaJudicial . " que esten activos y no tengan sobreseimiento");
            $logger->w_onError($beginLog . "Se consulta imputadosCarpetas con datos: " . serialize($imputadosCarpetas));

            //se consultan todos los imputados de la carpeta id, para saber cuantos hay en total sin importar la etapa procesal en la que se encuentran
            $imputadosCarpetas = $imputadoCarpetaDao->selectImputadoscarpetas($imputadosCarpetas, "", $proveedor);

            /*
             *se consultan los imputados carpetas con id carpeta que contengan la etapa procesal 4 (ejecucion de sentencia)
             */
            $imputadosCarpetasEtapaDto = new ImputadoscarpetasDTO();
            $imputadosCarpetasEtapaDao = new ImputadoscarpetasDAO();
            $imputadosCarpetasEtapaDto->setIdCarpetaJudicial($idCarpetaJudicial);
            $imputadosCarpetasEtapaDto->setActivo("S");
            $imputadosCarpetasEtapaDto->setTieneSobreseimiento("N");
            $imputadosCarpetasEtapaDto->setCveEtapaProcesal(4);
            $imputadosCarpetasEtapa = $imputadosCarpetasEtapaDao->selectImputadoscarpetas($imputadosCarpetasEtapaDto, "", $proveedor);
            /*
             *
             */


            /*
             * validamos que los imputados consultados por id de carpeta y
             * los imputados consultados por id carpeta y etapa procesal sean igual en numero
             * ! si son igual en numero quiere decir que todos estan en una etapa procesal = a ejecucion de sentencia y se cierra la
             * carpeta judicial
             */
            if ($imputadosCarpetas != '' && $imputadosCarpetasEtapa != '') {
                if (count($imputadosCarpetas) == count($imputadosCarpetasEtapa)) {

                    $carpetasDto = new CarpetasjudicialesDTO();
                    $carpetasDao = new CarpetasjudicialesDAO();

                    $carpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
                    $carpetasDto->setFechaActualizacion($this->getFechaHoraMysql());
                    $carpetasDto->setCveConclucion($this->getConclucion($idCarpetaJudicial, $proveedor));
                    $carpetasDto->setCveEstatusCarpeta(2);
                    $carpetasDto->setFechaTermino($this->getFechaHoraMysql());

                    $logger->w_onError($beginLog . "se va a cerrar la carpeta judicial con id:" . $idCarpetaJudicial);

                    $carpetasDto = $carpetasDao->updateCarpetasjudiciales($carpetasDto, $proveedor);

                    if ($carpetasDto == '') {
                        throw new Exception('NO SE PUDO CERRAR LA CARPETA JUDICIAL CON ID: ' . $idCarpetaJudicial);
                    }
                    $mensaje = 'SE CERRÓ LA CARPETA CON ID :' . $idCarpetaJudicial;
                } else {
                    $mensaje = 'LA CARPETA CON ID :' . $idCarpetaJudicial . ' AUN TIENE IMPUTADOS ACTIVOS';
                }
            } else {
                $mensaje = 'LA CARPETA CON ID :' . $idCarpetaJudicial . ' AUN TIENE IMPUTADOS ACTIVOS';
            }


            /*if ($imputadosCarpetas == '') {

                $carpetasDto = new CarpetasjudicialesDTO();
                $carpetasDao = new CarpetasjudicialesDAO();

                $carpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
                $carpetasDto->setFechaActualizacion($this->getFechaHoraMysql());
                $carpetasDto->setCveConclucion($this->getConclucion($idCarpetaJudicial, $proveedor));
                $carpetasDto->setCveEstatusCarpeta(2);
                $carpetasDto->setFechaTermino($this->getFechaHoraMysql());

                $logger->w_onError($beginLog . "se va a cerrar la carpeta judicial con id:" . $idCarpetaJudicial);

                $carpetasDto = $carpetasDao->updateCarpetasjudiciales($carpetasDto, $proveedor);

                if ($carpetasDto == '') {
                    throw new Exception('NO SE PUDO CERRAR LA CARPETA JUDICIAL CON ID: ' . $idCarpetaJudicial);
                }

                $mensaje = 'SE CERRÓ LA CARPETA CON ID :' . $idCarpetaJudicial;

            } else {
                $mensaje = 'LA CARPETA CON ID :' . $idCarpetaJudicial . ' AUN TIENE IMPUTADOS ACTIVOS';
            }
            */

            $response = [
                'estatus' => 'ok',
                'mensaje' => $mensaje
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;


    }

    /**
     * @param $cveJuzgado
     * @param $cveTipoJuzgado
     * @param $proveedor
     * @return array
     */
    public function getJuzgado($cveJuzgado, $cveTipoJuzgado, $proveedor)
    {
        try {

            $juzgadoDto = new JuzgadosDTO();
            $juzgadoDao = new JuzgadosDAO();

            $juzgadoDto->setCveJuzgado($cveJuzgado);
            $juzgadoDto->setActivo('S');

            $selectJuzgadoById = $juzgadoDao->selectJuzgados($juzgadoDto, '', $proveedor);

            if ($selectJuzgadoById == '') throw new Exception('no se encontró el juzgado con la clave: ' . $cveJuzgado);

            $distritoJuzgado = $selectJuzgadoById[0]->getCveDistrito();

            $juzgadoDto->setCveJuzgado('');
            $juzgadoDto->setCveTipojuzgado($cveTipoJuzgado);
            $juzgadoDto->setCveDistrito($distritoJuzgado);
            $juzgadoDto->setActivo('S');

            $selectJuzgadosByDistrito = $juzgadoDao->selectJuzgados($juzgadoDto, '', $proveedor);

            if ($selectJuzgadosByDistrito == '') throw new Exception('no se encontraron juzgados con el distrito : ' . $distritoJuzgado . ' y el tipo de juzgado:' . $cveTipoJuzgado);

            $cveJuzgado = $selectJuzgadosByDistrito[0]->getCveJuzgado();

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el juzgado se obtuvo correctamente',
                'data'    => $cveJuzgado
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage() . ' linea(' . $e->getLine() . ')'
            ];
        }

        return $response;


    }

    /**
     * obtiene el contador para actuaciones
     * @param $cveTipoActuacion
     * @param $cveJuzgado
     * @param null $proveedor
     * @return ContadoresDTO|string
     */
    public function getContadorActuaciones($cveTipoActuacion, $cveJuzgado, $proveedor = null)
    {
        $contadorDto = new ContadoresDTO();
        $contadorDto->setCveTipoActuacion($cveTipoActuacion);
        $contadorDto->setAnio(date('Y'));
        $contadorDto->setCveJuzgado($cveJuzgado);

        $contadorController = new ContadoresController();

        $getContador = $contadorController->getContador($contadorDto, $proveedor);

        return $getContador;
    }

    /**
     * obtiene el contador para carpetas judiciales
     * @param $cveTipoCarpeta
     * @param $cveJuzgado
     * @param null $proveedor
     * @return ContadoresDTO|string
     */
    public function getContador($cveTipoCarpeta, $cveJuzgado, $proveedor = null)
    {
        $contadorDto = new ContadoresDTO();
        $contadorDto->setCveTipoCarpeta($cveTipoCarpeta);
        $contadorDto->setAnio(date('Y'));
        $contadorDto->setCveJuzgado($cveJuzgado);
        $contadorController = new ContadoresController();

        $getContador = $contadorController->getContador($contadorDto, $proveedor);

        return $getContador;

    }

    /**
     * obtiene la fecha y hora actual del sistema BD mysql
     * @return string
     */
    public function getFechaHoraMysql()
    {

        $this->proveedor->execute("SELECT NOW() AS FechaActual");
        if (!$this->proveedor->error()) {
            if ($this->proveedor->rows($this->proveedor->stmt) > 0) {
                while ($row = $this->proveedor->fetch_array($this->proveedor->stmt, 0)) {
                    $fechaActual = $row['FechaActual'];
                }
            } else {
                $fechaActual = "";
            }
        }

        return $fechaActual;
    }


    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }


    public function getDelitosImputado($idImputadoCarpeta)
    {

        $delitos = [];
        $impofedelcarpetaDto = new ImpofedelcarpetasDTO();
        $impofedelcarpetaDao = new ImpofedelcarpetasDAO();

        $impofedelcarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
        $impofedelcarpetaDto->setActivo('S');

        $getImpofedelCarpetas = $impofedelcarpetaDao->selectImpofedelcarpetas($impofedelcarpetaDto, ' GROUP BY idDelitoCarpeta');


        if ($getImpofedelCarpetas != '') {

            foreach ($getImpofedelCarpetas as $imputadodelitos) {

                $idDelitoCarpeta = $imputadodelitos->getIdDelitoCarpeta();

                $delitosCarpetasDto = new DelitoscarpetasDTO();
                $delitosCarpetasDao = new DelitoscarpetasDAO();

                $delitosCarpetasDto->setIdDelitoCarpeta($idDelitoCarpeta);
                $delitosCarpetasDto->setActivo('S');

                $getDelitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, '');

                if ($getDelitosCarpetas != '') {

                    foreach ($getDelitosCarpetas as $delitoCarpeta) {

                        $delitosDto = new DelitosDTO();
                        $delitosDao = new DelitosDao();

                        $delitosDto->setCveDelito($delitoCarpeta->getCveDelito());
                        $delitosDto->setActivo('S');

                        $getDelitos = $delitosDao->selectDelitos($delitosDto, '');

                        if ($getDelitos != '') {
                            $delitos[] = utf8_encode($getDelitos[0]->getDesDelito());
                        }

                    }

                }

            }

        }

        return $delitos;
    }

    /*
     * verificar la conclucion,
     * se da el id de la carpeta a cerrar
     * y se verifica en que etapa procesal estaba para calcular la conlucion
     * de control a ejecucion - procedimiento abreviado
     * de juicio a ejecucion - por sentencia
     */
    public function getConclucion($idCarpetaJudicialCerrar, $proveedor = null)
    {

        $carpetasDto = new CarpetasjudicialesDTO();
        $carpetasDao = new CarpetasjudicialesDAO();

        $carpetasDto->setIdCarpetaJudicial($idCarpetaJudicialCerrar);
        $carpetasDto->setActivo('S');

        $selectCarpeta = $carpetasDao = $carpetasDao->selectCarpetasjudiciales($carpetasDto, '', $proveedor);

        $cveConclucion = "14";

        if ($selectCarpeta != '') {

            $etapa = $selectCarpeta[0]->getCveEtapaProcesal();

            switch ($etapa) {
                case '1':
                    $cveConclucion = '3';
                    break;
                case '2':
                    $cveConclucion = '3';
                    break;
                case '3':
                    $cveConclucion = '9';
                    break;
            }
        }

        return $cveConclucion;

    }

}