<?php
if (!isset($_SESSION)) session_start();

date_default_timezone_set('America/Mexico_City');


include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

// para copiar la solicitud de la audiencias desde los datos de toca
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

// para copiar de toca a solicitud imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");

// para copiar de toca a solicitud ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");

// para copiar de toca a delitos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");

// para copiar de toca a apelantes solicitudes
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantessolicitudes/ApelantessolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantessolicitudes/ApelantessolicitudesDAO.Class.php");

// para generar las relaciones impofedel
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");

// equivalencia de delitos electronico con delitos sigejupe
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoselectronico/DelitoselectronicoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoselectronico/DelitoselectronicoDAO.Class.php");

// para obtener la categoria de la audiencia
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

//para generar el contador de la toca (solicitud de audiencia)
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");

//para consultar carpeta judicial
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

//para la copia de imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

//para la copia de ofendidos carpetas
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");

//para consultar los apelantes de la carpeta judicial
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantescarpetas/ApelantescarpetasDAO.Class.php");

//para consultar los delitos de la carpeta juidcial
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

//para copiar la relacion de la carpeta judicial
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

//copiar domicilios imputado
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");

//copiar telefonos imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDAO.Class.php");

//copiar defensores imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");

//copiar drogas imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogas/ImputadosdrogasDAO.Class.php");


//copiar tutores imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputadoscarpetas/TutoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputados/TutoresimputadosDAO.Class.php");

//copiar Nacionalidades imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDAO.Class.php");


//copiar domicilios ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidoscarpetas/DomiciliosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");

//copiar telefonos ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDAO.Class.php");

//copiar defensores ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDAO.Class.php");

//copiar tutores ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscarpetas/TutoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidos/TutoresofendidosDAO.Class.php");

//copiar nacionalidades ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDAO.Class.php");

//copiar violencia de genero
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");


/*
 * para los juzgados
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

class TocaElectronicoService {

    private $proveedor;

    /**
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function validarConsultaToca($data)
    {
        $data['numero'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['numero'])))));
        $data['anio'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['anio'])))));
        $data['sala'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['sala'])))));

        if ($data['numero'] == '') {
            throw new Exception('* El número de toca es requerido');
        }

        if (!is_numeric($data['numero'])) {
            throw new Exception('* El número de toca tiene que ser un valor numerico');
        }

        if ($data['anio'] == '') {
            throw new Exception('* El año de toca es requerido');
        }

        if (!is_numeric($data['anio'])) {
            throw new Exception('* El año tiene que ser un valor numerico');
        }

        if ($data['sala'] == '' || $data['sala'] == 0) {
            throw new Exception('* La sala de toca es querida');
        }

        if (!is_numeric($data['sala'])) {
            throw new Exception('* La sala no es válida');
        }

        return $data;

    }

    /**
     * metodo para consultar la toca
     * se tiene que ingresar forzozamente numero, año y juzgado
     * @param $cveCatAudiencia
     * @param $data
     * $data = [$
     * @param null $proveedor
     * @return array
     */
    public function consultaToca($cveCatAudiencia, $data, $proveedor = null)
    {
        try {


            //valida la busqueda de la toca
            $data = $this->validarConsultaToca($data);

            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            if ($proveedor == null) {
                $this->proveedor->execute('BEGIN');
            }


            ini_set("default_socket_timeout", 200);
            ini_set("soap.wsdl_cache_enabled", "0");
            $tocas = new SoapClient("http://electronico.pjedomex.gob.mx/electronico/webservice/servidor/tocas/TocasScramble.wsdl");

            $data = json_encode($data);

            $responseTocas = $tocas->consultaToca($data, '0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571');

            if (is_soap_fault($responseTocas)) {
                throw new Exception("SOAP Fault: (faultcode:" . $responseTocas->faultcode . ", faultstring: " . $responseTocas->faultstring . ")");
            }

            $responseTocas = json_decode($responseTocas, true);


            if ($responseTocas['status'] == 'error') {
                throw new Exception('No se encontro la Toca');
            }


            $idSolicitudAudiencia = $this->creaSolicitudDesdeToca($cveCatAudiencia, $responseTocas['toca'], $this->proveedor);

            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }

            $response = [
                'estatus'              => 'ok',
                'mensaje'              => 'Se guardo correctamente la solicitud',
                'data'                 => $responseTocas['toca'],
                'idSolicitudAudiencia' => $idSolicitudAudiencia
            ];

        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }

            $response = [
                'estatus'   => 'error',
                'lineError' => $e->getLine(),
                'mensaje'   => $e->getMessage(),
            ];
        }


        return $response;
    }


    /**
     * metodo para crear solicitud a partir de una toca
     * @param $cveCatAudiencia
     * @param $toca
     * @param null $proveedor
     * @throws Exception
     */
    public function creaSolicitudDesdeToca($cveCatAudiencia, $toca, $proveedor = null)
    {

        if (!count($toca)) throw new Exception('la toca proporcinada no contiene registros');

        $toca = $toca[0];

        /*
         * guardamos numero, anio, juzgadoOrigen de detalle toca
         */
        $numeroDetalleToca = $toca['detalleToca'][0]['numero'];
        $anioDetalleToca = $toca['detalleToca'][0]['anio'];
        $juzgadoOrigen = $toca['detalleToca'][0]['juzgadoOrigen'];

        /*
         * consulta los datos de la cat de audiencia
         */
        $catAudienciaDao = new CataudienciasDAO();
        $catAudienciaDto = new CataudienciasDTO();

        $catAudienciaDto->setCveCatAudiencia($cveCatAudiencia);
        $catAudienciaDto->setActivo('S');


        $getCatAudienciasResponse = $catAudienciaDao->selectCataudiencias($catAudienciaDto, '', $proveedor);

        if ($getCatAudienciasResponse == '') throw new Exception('No se encontro la categoria de audiencias seleccionada');


        $cveEtapaProcesal = $getCatAudienciasResponse[0]->getCveEtapaProcesal();

        if ((int) $cveEtapaProcesal != 6) throw new Exception('La etapa procesar de la catergoria de audiencia seleccionada no indica que es una toca');

        $cveCatTipoAudiencia = $getCatAudienciasResponse[0]->getCveTipoAudiencia();
        $cveNaturaleza = $getCatAudienciasResponse[0]->getCveNaturaleza();
        /*
         * termina de consultar datos de la cat de audiencias
         */

        /*
         * se genera el contador de la solicitud
         */
        /*$contadorActuaciones = $this->getContadorActuaciones('', $toca['cveAdscripcion'], $proveedor);
        if ($contadorActuaciones == '') {
            throw new Exception('Ocurrio un error al generar el contador de la actuacion');
        }
        $numeroSolicitud = $contadorActuaciones[0]->getNumero();
        $anioSolicitud = $contadorActuaciones[0]->getAnio();*/
        /*
         *
         */

        /*
         * se obtiene numero y año de la toca
         */
        $numeroSolicitud = $toca['numero'];
        $anioSolicitud = $toca['anio'];

        /*
         * verificamos si hay una carpeta judicial con los datos de la toca
         */


        $carpetaJudicialToca = $this->buscaCarpetaToca($numeroDetalleToca, $anioDetalleToca, $juzgadoOrigen, $proveedor);



        $idReferencia = ($carpetaJudicialToca != '') ? $carpetaJudicialToca[0]->getIdCarpetaJudicial() : 0;
        $carpetaInv = ($carpetaJudicialToca != '') ? $carpetaJudicialToca[0]->getCarpetaInv() : '';
        $nuc = ($carpetaJudicialToca != '') ? $carpetaJudicialToca[0]->getNuc() : '';

        /*
         * termina verificar si hay carpeta judicial con los datos de toca
         */


        $numeroOfendidosEnToca = $this->getNumeroOfendidos($toca['partes']);
        $numeroImputadosEnToca = $this->getNumeroImputados($toca['partes']);
        $numeroDelitosEnToca = $this->getNumeroDelitos($toca['litis']);

        if ($numeroOfendidosEnToca == 0) {
            $numeroOfendidosEnSolicitud = $this->getNumeroOfendidosCarpeta($carpetaJudicialToca, $proveedor);
        } else {
            $numeroOfendidosEnSolicitud = $numeroOfendidosEnToca;
        }

        if ($numeroImputadosEnToca == 0) {
            $numeroImputadosEnSolicitud = $this->getNumeroImputadosCarpeta($carpetaJudicialToca, $proveedor);
        } else {
            $numeroImputadosEnSolicitud = $numeroImputadosEnToca;
        }

        if ($numeroDelitosEnToca == 0) {
            $numeroDelitosEnSolicitud = $this->getNumeroDelitosCarpeta($carpetaJudicialToca, $proveedor);
        } else {
            $numeroDelitosEnSolicitud = $numeroDelitosEnToca;
        }

        /*
         * se proecede a copiar la informacion a una solicitud de audiencia
         */
        $solicitudAudienciaDao = new SolicitudesaudienciasDAO();
        $solicitudAudienciaDto = new SolicitudesaudienciasDTO();

        $solicitudAudienciaDto->setCveCatAudiencia($cveCatAudiencia);
        //$solicitudAudienciaDto->setCveJuzgadoDesahoga($toca['cveAdscripcion']);
        //daniel dijo que el juzgado a desahogar es el de la sesion
        $solicitudAudienciaDto->setCveJuzgadoDesahoga($_SESSION['cveAdscripcion']);
        $solicitudAudienciaDto->setCveJuzgado($toca['cveAdscripcion']);
        $solicitudAudienciaDto->setCveConsignacion('4');
        $solicitudAudienciaDto->setCveEtapaProcesal($cveEtapaProcesal);
        $solicitudAudienciaDto->setIdReferencia($idReferencia);
        $solicitudAudienciaDto->setFechaEnvio('');
        $solicitudAudienciaDto->setCveTipoCarpeta(6);
        //$solicitudAudienciaDto->setNumero($toca['numero']);
        $solicitudAudienciaDto->setNumero($numeroSolicitud);
        //$solicitudAudienciaDto->setAnio($toca['anio']);
        $solicitudAudienciaDto->setAnio($anioSolicitud);
        $solicitudAudienciaDto->setActivo('S');
        $solicitudAudienciaDto->setCarpetaInv($carpetaInv);
        $solicitudAudienciaDto->setNuc($nuc);
        $solicitudAudienciaDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
        $solicitudAudienciaDto->setCveAdscripcionSolicita(''); //que va aquí preguntar?
        $solicitudAudienciaDto->setMismoJuzgador('N');
        $solicitudAudienciaDto->setTribunal('N');
        $solicitudAudienciaDto->setCveEstatusSolicitud('1');
        $solicitudAudienciaDto->setObservaciones($toca['observaciones']);
        $solicitudAudienciaDto->setNumImputados($numeroImputadosEnSolicitud);
        $solicitudAudienciaDto->setNumDelitos($numeroDelitosEnSolicitud);
        $solicitudAudienciaDto->setNumOfendidos($numeroOfendidosEnSolicitud);
        $solicitudAudienciaDto->setCveNaturaleza($cveNaturaleza);
        $solicitudAudienciaDto->setCveTipoAudiencia($cveCatTipoAudiencia);


        $guardaSolicitudResponse = $solicitudAudienciaDao->insertSolicitudesaudiencias($solicitudAudienciaDto, $proveedor);

        if ($guardaSolicitudResponse == '') throw new Exception('No se pudo copiar los datos de toca a solicitud de audiencia');


        /*
         * termina la copia de la toca a solicitud
         */

        //guardamos el id de la solicitud de audiencia registrada
        $idSolicitudAudiencia = $guardaSolicitudResponse[0]->getIdSolicitudAudiencia();


        /*
         * inicia copia de imputados
         */
        //prueba copia de imputados carpeta
        //$this->copiarImputadosDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);
        $numeroImputados = $this->copiarImputados($idSolicitudAudiencia, $toca['partes'], $proveedor);
        if ($numeroImputados == 0) {
            if ($carpetaJudicialToca != '') {
                $this->copiarImputadosDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudial(), $idSolicitudAudiencia, $proveedor);
            }
        }
        /*
         * termina copia de imputados
         */


        /*
         * inicia copia de ofendidos
         */
        //prueba copiar de ofendidos carpetas
        //$this->copiarOfendidosDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);
        $numeroOfendidos = $this->copiarOfendidos($idSolicitudAudiencia, $toca['partes'], $proveedor);
        if ($numeroOfendidos == 0) {
            if ($carpetaJudicialToca != '') {
                $this->copiarOfendidosDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);
            }

        }
        /*
         * termina copia de ofendidos
         */

        /*
         * inicia copia de apelantes
         */
        // prueba copia de apelantes
        //$this->copiarApelantesDeCarpeta($carpetaJudicialToca[0]->getidCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);
        //obtenemos el tipo apelante y verificamos que exista en tablas sigejupe
        $tipoApelante = $toca['detalleToca'][0]['cveParteApela'];
        $numeroApelantes = $this->copiarApelantes($idSolicitudAudiencia, $tipoApelante, $toca['partes'], $proveedor);
        if ($numeroApelantes == 0) {
            if ($carpetaJudicialToca != '') {
                $this->copiarApelantesDeCarpeta($carpetaJudicialToca[0]->getidCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);
            }
        }
        /*
         * termina copia de apelantes
         */

        /*
         * inicia copiar de delitos
         */
        //prueba copia de delitos de carpeta
        //$this->copiarDelitosDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);

        $numeroDelitos = $this->copiarDelitos($idSolicitudAudiencia, $toca['litis'], $proveedor);
        if ($numeroDelitos == 0) {
            if ($carpetaJudicialToca != '') {
                $this->copiarDelitosDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);
            }
        }
        /*
         * termina copia de delitos
         */

        /*
         * si no hubo ningun dato en la toca de ofendidos,imputados,delitos
         * se procede a copiar la relacion de la carpeta
         * inicia relacion todos a todos IMPOFEDEL
         */
        if ($numeroImputados == 0 && $numeroOfendidos == 0 && $numeroDelitos == 0) {

            $this->copiarRelacionDeCarpeta($carpetaJudicialToca[0]->getIdCarpetaJudicial(), $idSolicitudAudiencia, $proveedor);

        } else {
            //si hubo algunos datos en la toca como ofendido,imputados,delitos : se procede a relacionar todos contra todos imputados - ofendidos - delitos
            $this->relacionarImpOfeDel($idSolicitudAudiencia, $proveedor);
        }

        /*
         * termina relacion IMPOFEDEL
         */

        return $idSolicitudAudiencia;


    }

    /**
     * obitnene la fecha actual desl sistema mysql
     * @param $proveedor
     * @return string
     */
    public function getFechaActualMysql($proveedor)
    {

        $proveedor->execute("SELECT NOW() AS FechaActual");
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

    /**
     * obtiene el numero de ofendidos en la toca
     * @param $arrayPartes
     * @return int
     */
    public function getNumeroOfendidos($arrayPartes)
    {
        $numeroOfendidos = 0;
        foreach ($arrayPartes as $parte) {
            if ($parte['cveTipoParte'] == 2) $numeroOfendidos ++;
        }

        return $numeroOfendidos;
    }


    public function getNumeroOfendidosCarpeta($carpetaJudicial, $proveedor = null)
    {
        $numeroOfendidos = 0;

        $idCarpetaJudicial = $carpetaJudicial[0]->getIdCarpetaJudicial();

        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();

        $ofendidosCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $ofendidosCarpetasDto->setActivo('S');

        $selectOfendidosCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, '', $proveedor);

        if ($selectOfendidosCarpetas == '') return $numeroOfendidos;

        return count($selectOfendidosCarpetas);

    }

    /**
     * obtiene el numero de imputados en la toca
     * @param $arrayPartes
     * @return int
     */
    public function getNumeroImputados($arrayPartes)
    {
        $numeroImputados = 0;
        foreach ($arrayPartes as $parte) {
            if ($parte['cveTipoParte'] == 14) $numeroImputados ++;
        }

        return $numeroImputados;

    }

    public function getNumeroImputadosCarpeta($carpetaJudicial, $proveedor = null)
    {

        $numeroImputados = 0;

        $idCarpetaJudicial = $carpetaJudicial[0]->getIdCarpetaJudicial();

        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $imputadosCarpetasDto = new ImputadoscarpetasDTO();

        $imputadosCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $imputadosCarpetasDto->setActivo('S');

        $selectImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, '', $proveedor);

        if ($selectImputadosCarpetas == '') return $numeroImputados;

        return count($selectImputadosCarpetas);

    }

    /**
     * obtiene el numero de delitos en la toca
     * @param $arrayLitis
     * @return int
     */
    public function getNumeroDelitos($arrayLitis)
    {
        return count($arrayLitis);
    }

    public function getNumeroDelitosCarpeta($carpetaJudicial, $proveedor = null)
    {

        $numeroDelitos = 0;

        $idCarpetaJudicial = $carpetaJudicial[0]->getIdCarpetaJudicial();

        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetasDto = new DelitoscarpetasDTO();

        $delitosCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $delitosCarpetasDto->setActivo('S');

        $selectDelitosCarpetas = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, '', $proveedor);

        if ($selectDelitosCarpetas == '') return $numeroDelitos;

        return count($selectDelitosCarpetas);

    }

    /**
     * copia los ofendidos de la toca a la solicitud
     * si no tiene regresa 0 para copiar ofendido desde una carpeta judicial
     * @param $idSolicitudAudiencia
     * @param $arrayPartes
     * @param null $proveedor
     * @return int
     * @throws Exception
     */
    public function copiarOfendidos($idSolicitudAudiencia, $arrayPartes, $proveedor = null)
    {

        $ofendidosSolicitudesDao = new  OfendidossolicitudesDAO();
        $ofendidosSolicitudesDto = new OfendidossolicitudesDTO();

        $cuentaOfendido = 0;

        foreach ($arrayPartes as $parte) {
            if ($parte['cveTipoParte'] == 2) {

                $ofendidosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $ofendidosSolicitudesDto->setActivo('S');
                $ofendidosSolicitudesDto->setNombre($parte['nombre']);
                $ofendidosSolicitudesDto->setPaterno($parte['paterno']);
                $ofendidosSolicitudesDto->setMaterno($parte['materno']);
                $ofendidosSolicitudesDto->setRfc('');
                $ofendidosSolicitudesDto->setCurp($parte['CURP']);
                $ofendidosSolicitudesDto->setFechaNacimiento($parte['fechanacimiento']);
                $ofendidosSolicitudesDto->setCveOcupacion('4');
                $ofendidosSolicitudesDto->setCveTipoPersona($parte['cveTipoPersona']);
                $ofendidosSolicitudesDto->setCveGenero($this->getCveGenero($parte['cveGenero']));
                $ofendidosSolicitudesDto->setCveTipoParte('2');
                $ofendidosSolicitudesDto->setCveTipoReligion('8');
                $ofendidosSolicitudesDto->setEdad($parte['edad']);
                $ofendidosSolicitudesDto->setCvePaisNacimiento('119');
                $ofendidosSolicitudesDto->setCveEstadoNacimiento('15');
                $ofendidosSolicitudesDto->setEstadoNacimiento('');
                $ofendidosSolicitudesDto->setCveMunicipioNacimiento('0');
                $ofendidosSolicitudesDto->setMunicipioNacimiento('');
                $ofendidosSolicitudesDto->setCveEstadoCivil('3');
                $ofendidosSolicitudesDto->setCveAlfabetismo('4');
                $ofendidosSolicitudesDto->setCveNivelInstruccion('11');
                $ofendidosSolicitudesDto->setCveEspanol('4');
                $ofendidosSolicitudesDto->setCveDialectoIndigena('3');
                $ofendidosSolicitudesDto->setCveTipoFamiliaLinguistica('15');
                $ofendidosSolicitudesDto->setCveInterprete('3');
                $ofendidosSolicitudesDto->setCveOrdenProteccion('8');
                $ofendidosSolicitudesDto->setCveEstadoPsicofisico('6');
                $ofendidosSolicitudesDto->setNombreMoral($parte['nombrePersonaMoral']);
                $ofendidosSolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada('3');
                $ofendidosSolicitudesDto->setCveVictimaDeViolenciaDeGenero('3');
                $ofendidosSolicitudesDto->setCveVictimaDeTrata('3');
                $ofendidosSolicitudesDto->setCveVictimaDeAcoso('3');
                $ofendidosSolicitudesDto->setDesaparecido('N');
                $ofendidosSolicitudesDto->setNumHijos('0');
                $ofendidosSolicitudesDto->setEmbarazada('N');
                $ofendidosSolicitudesDto->setCveGrupoEdnico('72');

                $guardaOfendidosSolicitudesResponse = $ofendidosSolicitudesDao->insertOfendidossolicitudes($ofendidosSolicitudesDto, $proveedor);

                if ($guardaOfendidosSolicitudesResponse == '') throw new Exception('No se pudo insertar algún ofendido, intenta nuevamente');

                $cuentaOfendido ++;

                /*
                 * guardamos el id del ofendido creado
                 */
                $idOfendidoSolicitud = $guardaOfendidosSolicitudesResponse[0]->getIdOfendidoSolicitud();

                /*
                 * crear un domicilio del ofendido
                 */
                $domiciliosOfendidosSolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                $domiciliosOfendidosSolicitudesDto = new DomiciliosofendidossolicitudesDTO();


                $domiciliosOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                $domiciliosOfendidosSolicitudesDto->setDomicilioProcesal('N');
                $domiciliosOfendidosSolicitudesDto->setDomicilioProcesal('N');
                $domiciliosOfendidosSolicitudesDto->setCvePais('119');
                $domiciliosOfendidosSolicitudesDto->setCveEstado('15');
                $domiciliosOfendidosSolicitudesDto->setCveMunicipio('0');
                $domiciliosOfendidosSolicitudesDto->setDireccion('ACTUALIZAME');
                $domiciliosOfendidosSolicitudesDto->setColonia('ACTUALIZAME');
                $domiciliosOfendidosSolicitudesDto->setNumInterior('00000');
                $domiciliosOfendidosSolicitudesDto->setNumExterior('00000');
                $domiciliosOfendidosSolicitudesDto->setCp('00000');
                $domiciliosOfendidosSolicitudesDto->setRecidenciaHabitual('N');
                $domiciliosOfendidosSolicitudesDto->setCveConvivencia('9');
                $domiciliosOfendidosSolicitudesDto->setCveTipoDeVivienda('5');
                $domiciliosOfendidosSolicitudesDto->setActivo('S');

                $guardaDomicilioOfendidoSolicitud = $domiciliosOfendidosSolicitudesDao->insertDomiciliosofendidossolicitudes($domiciliosOfendidosSolicitudesDto, $proveedor);

                if ($guardaDomicilioOfendidoSolicitud == '') throw new Exception('No se pudo crear el domicilio de un ofendido');


                /*
                 * crear un defensor del ofendido
                 */

                $defensoresOfendidosSolicitudesDao = new DefensoresofendidossolicitudesDAO();
                $defensoresOfendidosSolicitudesDto = new DefensoresofendidossolicitudesDTO();

                $defensoresOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                $defensoresOfendidosSolicitudesDto->setCveTipoAsesor('5');
                $defensoresOfendidosSolicitudesDto->setNombre('ACTUALIZAME');
                $defensoresOfendidosSolicitudesDto->setActivo('S');

                $guardaDefensorOfendidoSolicitud = $defensoresOfendidosSolicitudesDao->insertDefensoresofendidossolicitudes($defensoresOfendidosSolicitudesDto, $proveedor);

                if ($guardaDefensorOfendidoSolicitud == '') throw new Exception('No se pudo crear el defensor de un ofendido');


                /*
                 * crear una nacionalidad del ofendido
                 */

                $nacionalidadesOfendidosSolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
                $nacionalidadesOfendidosSolicitudesDto = new NacionalidadesofendidossolicitudesDTO();

                $nacionalidadesOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                $nacionalidadesOfendidosSolicitudesDto->setCvePais('119');
                $nacionalidadesOfendidosSolicitudesDto->setActivo('S');

                $guardaNacionalidadOfendidoSolicitud = $nacionalidadesOfendidosSolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadesOfendidosSolicitudesDto, $proveedor);

                if ($guardaNacionalidadOfendidoSolicitud == '') throw new Exception('No se pudo crear la nacionalidad de un ofendido');


            }
        }

        return $cuentaOfendido;

    }

    /**
     * copia imputados de la toca a la solicitud y si
     * regresa 0 es que no habia imputados en la toca y se procede a copiar imputados desde una carpeta judicial
     * @param $idSolicitudAudiencia
     * @param $arrayPartes
     * @param null $proveedor
     * @return int
     * @throws Exception
     */
    public function copiarImputados($idSolicitudAudiencia, $arrayPartes, $proveedor = null)
    {

        $imputadosSolicitudesDao = new ImputadossolicitudesDAO();
        $imputadosSolicitudesDto = new ImputadossolicitudesDTO();

        $cuentaImputados = 0;

        foreach ($arrayPartes as $parte) {
            if ($parte['cveTipoParte'] == 14) {

                $imputadosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $imputadosSolicitudesDto->setActivo('S');
                $imputadosSolicitudesDto->setDetenido($this->getDetenido($parte['detenido']));
                $imputadosSolicitudesDto->setNombre($parte['nombre']);
                $imputadosSolicitudesDto->setPaterno($parte['paterno']);
                $imputadosSolicitudesDto->setMaterno($parte['materno']);
                $imputadosSolicitudesDto->setRfc('');
                $imputadosSolicitudesDto->setCurp($parte['CURP']);
                $imputadosSolicitudesDto->setCveTipoDetencion('4');
                $imputadosSolicitudesDto->setCveGenero($this->getCveGenero($parte['cveGenero']));
                $imputadosSolicitudesDto->setAlias('');
                $imputadosSolicitudesDto->setFechaDeclaracion('');
                $imputadosSolicitudesDto->setCvePaisNacimiento('119');
                $imputadosSolicitudesDto->setCveEstadoNacimiento('15');
                $imputadosSolicitudesDto->setCveMunicipioNacimiento('0');
                $imputadosSolicitudesDto->setFechaNacimiento($parte['fechanacimiento']);
                $imputadosSolicitudesDto->setEdad($parte['edad']);
                $imputadosSolicitudesDto->setCveTipoPersona($parte['cveTipoPersona']);
                $imputadosSolicitudesDto->setCveTipoReligion('8');
                $imputadosSolicitudesDto->setNombreMoral($parte['nombrePersonaMoral']);
                $imputadosSolicitudesDto->setCveNivelInstruccion('11');
                $imputadosSolicitudesDto->setCveEstadoCivil('3');
                $imputadosSolicitudesDto->setCveEspanol('4');
                $imputadosSolicitudesDto->setCveAlfabetismo('4');
                $imputadosSolicitudesDto->setCveDialectoIndigena('3');
                $imputadosSolicitudesDto->setCveTipoFamiliaLinguistica('15');
                $imputadosSolicitudesDto->setCveOcupacion('15');
                $imputadosSolicitudesDto->setCveInterprete('3');
                $imputadosSolicitudesDto->setCveEstadoPsicofisico('6');
                $imputadosSolicitudesDto->setFechaImputacion('');
                $imputadosSolicitudesDto->setFechaControlDet('');
                $imputadosSolicitudesDto->setFecTerminoCons('');
                $imputadosSolicitudesDto->setFecCierreInv('');
                $imputadosSolicitudesDto->setEstadoNacimiento('');
                $imputadosSolicitudesDto->setMunicipioNacimiento('');
                $imputadosSolicitudesDto->setRelacionMoral('N');
                $imputadosSolicitudesDto->setPersonaMoral('');
                $imputadosSolicitudesDto->setCveCereso('1');
                $imputadosSolicitudesDto->setCveEtapaProcesal('6');
                $imputadosSolicitudesDto->setCveTipoReincidencia('5');
                $imputadosSolicitudesDto->setIngresoMensual('0');
                $imputadosSolicitudesDto->setCveGrupoEdnico('72');
                $imputadosSolicitudesDto->setTieneSobreseimiento('N');
                $imputadosSolicitudesDto->setFechaSobreseimiento('');
                $imputadosSolicitudesDto->setIdImputadoCarpeta('');

                $guardaImputadoSolicitudResponse = $imputadosSolicitudesDao->insertImputadossolicitudes($imputadosSolicitudesDto, $proveedor);

                if ($guardaImputadoSolicitudResponse == '') throw new Exception('no se pudo guardar algún imputado, intenta nuevamente');

                $cuentaImputados ++;

                /*
                 * obtenemos el id imputado creado
                 */
                $idImputadoSolicitud = $guardaImputadoSolicitudResponse[0]->getIdImputadoSolicitud();
                /*
                 * creamos domicilio del imputado
                 */
                $domicilioImputadoSolicitudDao = new DomiciliosimputadossolicitudesDAO();
                $domicilioImputadoSolicitudDto = new DomiciliosimputadossolicitudesDTO();

                $domicilioImputadoSolicitudDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $domicilioImputadoSolicitudDto->setDomicilioProcesal('N');
                $domicilioImputadoSolicitudDto->setCvePais('119');
                $domicilioImputadoSolicitudDto->setCveEstado('15');
                $domicilioImputadoSolicitudDto->setCveMunicipio('0');
                $domicilioImputadoSolicitudDto->setDireccion('ACTUALIZAME');
                $domicilioImputadoSolicitudDto->setColonia('ACTUALIZAME');
                $domicilioImputadoSolicitudDto->setNumInterior('00000');
                $domicilioImputadoSolicitudDto->setNumExterior('00000');
                $domicilioImputadoSolicitudDto->setCp('00000');
                $domicilioImputadoSolicitudDto->setRecidenciaHabitual('N');
                $domicilioImputadoSolicitudDto->setCveConvivencia('9');
                $domicilioImputadoSolicitudDto->setCveTipoDeVivienda('5');
                $domicilioImputadoSolicitudDto->setActivo('S');

                $guardaDomicilioImputadoSolicitud = $domicilioImputadoSolicitudDao->insertDomiciliosimputadossolicitudes($domicilioImputadoSolicitudDto, $proveedor);

                if ($guardaDomicilioImputadoSolicitud == '') throw new Exception('No se pudo crear el domicilio de un imputado');

                /*
                 * agregamos un defensor al imputado solicitud
                 */
                $defensorImputadoSolicitudDao = new DefensoresimputadossolicitudesDAO();
                $defensorImputadoSolicitudDto = new DefensoresimputadossolicitudesDTO();

                $defensorImputadoSolicitudDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $defensorImputadoSolicitudDto->setCveTipoDefensor('5');
                $defensorImputadoSolicitudDto->setNombre('ACTUALIZAME');
                $defensorImputadoSolicitudDto->setActivo('S');

                $guardaDefensorImputadoSolicitud = $defensorImputadoSolicitudDao->insertDefensoresimputadossolicitudes($defensorImputadoSolicitudDto, $proveedor);

                if ($guardaDefensorImputadoSolicitud == '') throw new Exception('No se pudo crear el defensor de un imputado');

                /*
                 * agregar nacionalidad del imputado
                 */
                $nacionalidadImputadoSolicitudDao = new NacionalidadesimputadossolicitudesDAO();
                $nacionalidadImputadoSolicitudDto = new NacionalidadesimputadossolicitudesDTO();

                $nacionalidadImputadoSolicitudDto->setIdImputadoSolicitud($idImputadoSolicitud);
                $nacionalidadImputadoSolicitudDto->setCvePais('119');
                $nacionalidadImputadoSolicitudDto->setActivo('S');

                $guardaNacionalidadImputadoSolicitud = $nacionalidadImputadoSolicitudDao->insertNacionalidadesimputadossolicitudes($nacionalidadImputadoSolicitudDto, $proveedor);

                if ($guardaNacionalidadImputadoSolicitud == '') throw new Exception('No se pudo crear la nacionalidad de un imputado');

            }
        }

        return $cuentaImputados;

    }

    /**
     * copia apelantes de la toca a solicitud y si el metodo regresa 0
     * es que no habia apelantes en la toca y se procede a copiar apelantes desde una carpeta judicial
     * @param $idSolicitudAudiencia
     * @param $tipoApelante
     * @param $arrayPartes
     * @param null $proveedor
     * @return int
     * @throws Exception
     */
    public function copiarApelantes($idSolicitudAudiencia, $tipoApelante, $arrayPartes, $proveedor = null)
    {
        $apelantesSolicitudesDao = new ApelantessolicitudesDAO();
        $apelantesSolicitudesDto = new ApelantessolicitudesDTO();

        $cuentaApelantes = 0;

        foreach ($arrayPartes as $parte) {

            if ($parte['cveTipoParte'] == 13) {


                $nombre = ($parte['nombre'] == '') ? 'NO IDENTIFICADO' : $parte['nombre'];
                $paterno = ($parte['paterno'] == '') ? 'NO IDENTIFICADO' : $parte['paterno'];
                $materno = ($parte['materno'] == '') ? 'NO IDENTIFICADO' : $parte['materno'];

                $apelantesSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $apelantesSolicitudesDto->setNombre($nombre);
                $apelantesSolicitudesDto->setPaterno($paterno);
                $apelantesSolicitudesDto->setMaterno($materno);
                $apelantesSolicitudesDto->setCveGenero($this->getCveGenero($parte['cveGenero']));
                $apelantesSolicitudesDto->setCveTipoPersona($parte['cveTipoPersona']);
                $apelantesSolicitudesDto->setNombreMoral($parte['nombrePersonaMoral']);
                $apelantesSolicitudesDto->setCveTipoApelante($tipoApelante);
                $apelantesSolicitudesDto->setActivo('S');

                $guardaApelanteSolicitud = $apelantesSolicitudesDao->insertApelantessolicitudes($apelantesSolicitudesDto, $proveedor);

                if ($guardaApelanteSolicitud == '') throw new Exception('No se pudo guardar algún apelante');

                $cuentaApelantes ++;

            }


        }

        return $cuentaApelantes;
    }

    /**
     * copia delitos de toca a solicitud y si em metodo regresa 0
     * es que no habia delitos en la toca y se procede a copiar delitos desde una carpeta judicial
     * @param $idSolicitudAudiencia
     * @param $arrayLitis
     * @param $proveedor
     * @return int
     * @throws Exception
     */
    public function copiarDelitos($idSolicitudAudiencia, $arrayLitis, $proveedor)
    {

        $delitosSolicitudesDao = new DelitossolicitudesDAO();
        $delitosSolicitudesDto = new DelitossolicitudesDTO();

        $delitosElectronicoDao = new DelitoselectronicoDAO();
        $delitosElectronicoDto = new DelitoselectronicoDTO();

        $cuentaDelitos = 0;

        foreach ($arrayLitis as $delito) {

            $delitosElectronicoDto->setIdMateriaLiti($delito['idMateriaLiti']);
            $delitosElectronicoDto->setActivo('S');

            $selectDelitoResponse = $delitosElectronicoDao->selectDelitoselectronico($delitosElectronicoDto, '', $proveedor);
//            var_dump($selectDelitoResponse);
            
            
            if ($selectDelitoResponse == '') {
                throw new Exception('algun delito de la toca no tiene equivalencia');
            }    

            $cveDelito = $selectDelitoResponse[0]->getCveDelito();

            $delitosSolicitudesDto->setCveDelito($cveDelito);
            $delitosSolicitudesDto->setActivo('S');
            $delitosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);


            $guardaDelitoSolicitudResponse = $delitosSolicitudesDao->insertDelitossolicitudes($delitosSolicitudesDto, $proveedor);

            if ($guardaDelitoSolicitudResponse == '') throw new Exception('No se pudo insertar algun delito, intenta nuevamente');

            $cuentaDelitos ++;

        }

        return $cuentaDelitos;

    }

    /**
     * copiar ofendidos carpetas a solicitud si la toca no contenia ofendidos
     * @param $idCarpetaJudicial
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     */
    public function copiarOfendidosDeCarpeta($idCarpetaJudicial, $idSolicitudAudiencia, $proveedor = null)
    {

        $ofendidosCarpetasDao = new OfendidoscarpetasDAO();
        $ofendidosCarpetasDto = new OfendidoscarpetasDTO();

        $ofendidosCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $ofendidosCarpetasDto->setActivo('S');

        $selectOfendidosCarpetas = $ofendidosCarpetasDao->selectOfendidoscarpetas($ofendidosCarpetasDto, '', $proveedor);

        if ($selectOfendidosCarpetas != '') {

            foreach ($selectOfendidosCarpetas as $ofendidoCarpeta) {

                $ofendidosSolicitudesDao = new OfendidossolicitudesDAO();
                $ofendidosSolicitudesDto = new OfendidossolicitudesDTO();

                $ofendidosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $ofendidosSolicitudesDto->setActivo('S');
                $ofendidosSolicitudesDto->setNombre($ofendidoCarpeta->getNombre());
                $ofendidosSolicitudesDto->setPaterno($ofendidoCarpeta->getPaterno());
                $ofendidosSolicitudesDto->setMaterno($ofendidoCarpeta->getMaterno());
                $ofendidosSolicitudesDto->setRfc($ofendidoCarpeta->getRfc());
                $ofendidosSolicitudesDto->setCurp($ofendidoCarpeta->getCurp());
                $ofendidosSolicitudesDto->setFechaNacimiento($ofendidoCarpeta->getFechaNacimiento());
                $ofendidosSolicitudesDto->setCveOcupacion($ofendidoCarpeta->getCveOcupacion());
                $ofendidosSolicitudesDto->setCveTipoPersona($ofendidoCarpeta->getCveTipoPersona());
                $ofendidosSolicitudesDto->setCveGenero($ofendidoCarpeta->getCveGenero());
                $ofendidosSolicitudesDto->setCveTipoParte($ofendidoCarpeta->getCveTipoParte());
                $ofendidosSolicitudesDto->setCveTipoReligion($ofendidoCarpeta->getCveTipoReligion());
                $ofendidosSolicitudesDto->setEdad($ofendidoCarpeta->getEdad());
                $ofendidosSolicitudesDto->setCvePaisNacimiento($ofendidoCarpeta->getCvePaisNacimiento());
                $ofendidosSolicitudesDto->setCveEstadoNacimiento($ofendidoCarpeta->getCveEstadoNacimiento());
                $ofendidosSolicitudesDto->setEstadoNacimiento($ofendidoCarpeta->getEstadoNacimiento());
                $ofendidosSolicitudesDto->setCveMunicipioNacimiento($ofendidoCarpeta->getCveMunicipioNacimiento());
                $ofendidosSolicitudesDto->setMunicipioNacimiento($ofendidoCarpeta->getMunicipioNacimiento());
                $ofendidosSolicitudesDto->setCveEstadoCivil($ofendidoCarpeta->getCveEstadoCivil());
                $ofendidosSolicitudesDto->setCveAlfabetismo($ofendidoCarpeta->getCveAlfabetismo());
                $ofendidosSolicitudesDto->setCveNivelInstruccion($ofendidoCarpeta->getCveNivelInstruccion());
                $ofendidosSolicitudesDto->setCveEspanol($ofendidoCarpeta->getCveEspanol());
                $ofendidosSolicitudesDto->setCveDialectoIndigena($ofendidoCarpeta->getCveDialectoIndigena());
                $ofendidosSolicitudesDto->setCveTipoFamiliaLinguistica($ofendidoCarpeta->getCveTipoFamiliaLinguistica());
                $ofendidosSolicitudesDto->setCveInterprete($ofendidoCarpeta->getCveInterprete());
                $ofendidosSolicitudesDto->setCveOrdenProteccion($ofendidoCarpeta->getCveOrdenProteccion());
                $ofendidosSolicitudesDto->setCveEstadoPsicofisico($ofendidoCarpeta->getCveEstadoPsicofisico());
                $ofendidosSolicitudesDto->setNombreMoral($ofendidoCarpeta->getNombreMoral());
                $ofendidosSolicitudesDto->setCveVictimaDeLaDelincuenciaOrganizada($ofendidoCarpeta->getCveVictimaDeLaDelincuenciaOrganizada());
                $ofendidosSolicitudesDto->setCveVictimaDeViolenciaDeGenero($ofendidoCarpeta->getCveVictimaDeViolenciaDeGenero());
                $ofendidosSolicitudesDto->setCveVictimaDeTrata($ofendidoCarpeta->getCveVictimaDeTrata());
                $ofendidosSolicitudesDto->setCveVictimaDeAcoso($ofendidoCarpeta->getCveVictimaDeAcoso());
                $ofendidosSolicitudesDto->setDesaparecido($ofendidoCarpeta->getDesaparecido());
                $ofendidosSolicitudesDto->setNumHijos($ofendidoCarpeta->getNumHijos());
                $ofendidosSolicitudesDto->setEmbarazada($ofendidoCarpeta->getEmbarazada());
                $ofendidosSolicitudesDto->setCveGrupoEdnico($ofendidoCarpeta->getCveGrupoEdnico());

                $guardaOfendidoSolicitud = $ofendidosSolicitudesDao->insertOfendidossolicitudes($ofendidosSolicitudesDto, $proveedor);

                if ($guardaOfendidoSolicitud == '') throw new Exception('No se pudo copiar un ofendido desde carpeta judicial');

                /*
                 * obtenemos el idofendidocarpeta a copiar y el idofendido solicitud creado
                 */
                $idOfendidoCarpeta = $ofendidoCarpeta->getIdOfendidoCarpeta();
                $idOfendidoSolicitud = $guardaOfendidoSolicitud[0]->getIdOfendidoSolicitud();


                /*
                 * creamos una sesion para saber que id de ofendido tenia el que se copio y cual es el el del ofendido solicitud para posteriormente
                 * insertalo en la relacion
                 */
                $_SESSION['ofendidos_copia_carpetas'][$ofendidoCarpeta->getIdOfendidoCarpeta()] = $idOfendidoSolicitud;


                /*
                 * copiar domicilios ofendidos carpetas a domicilios ofendidos solicitudes
                 */
                $domiciliosOfendidosCarpetasDao = new DomiciliosofendidoscarpetasDAO();
                $domiciliosOfendidosCarpetasDto = new DomiciliosofendidoscarpetasDTO();


                $domiciliosOfendidosCarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                $domiciliosOfendidosCarpetasDto->setActivo('S');

                $selectDomiciliosOfendidosCarpetas = $domiciliosOfendidosCarpetasDao->selectDomiciliosofendidoscarpetas($domiciliosOfendidosCarpetasDto, '', $proveedor);

                if ($selectDomiciliosOfendidosCarpetas != '') {

                    foreach ($selectDomiciliosOfendidosCarpetas as $domicilioOfendidoCarpeta) {

                        $domiciliosOfendidosSolicitudesDao = new DomiciliosofendidossolicitudesDAO();
                        $domiciliosOfendidosSolicitudesDto = new DomiciliosofendidossolicitudesDTO();

                        $domiciliosOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                        $domiciliosOfendidosSolicitudesDto->setDomicilioProcesal($domicilioOfendidoCarpeta->getDomicilioProcesal());
                        $domiciliosOfendidosSolicitudesDto->setCvePais($domicilioOfendidoCarpeta->getCvePais());
                        $domiciliosOfendidosSolicitudesDto->setCveEstado($domicilioOfendidoCarpeta->getCveEstado());
                        $domiciliosOfendidosSolicitudesDto->setCveMunicipio($domicilioOfendidoCarpeta->getCveMunicipio());
                        $domiciliosOfendidosSolicitudesDto->setDireccion($domicilioOfendidoCarpeta->getDireccion());
                        $domiciliosOfendidosSolicitudesDto->setColonia($domicilioOfendidoCarpeta->getColonia());
                        $domiciliosOfendidosSolicitudesDto->setNumInterior($domicilioOfendidoCarpeta->getNumInterior());
                        $domiciliosOfendidosSolicitudesDto->setCp($domicilioOfendidoCarpeta->getCp());
                        $domiciliosOfendidosSolicitudesDto->setLatitud($domicilioOfendidoCarpeta->getLatitud());
                        $domiciliosOfendidosSolicitudesDto->setLongitud($domicilioOfendidoCarpeta->getLongitud());
                        $domiciliosOfendidosSolicitudesDto->setRecidenciaHabitual($domicilioOfendidoCarpeta->getRecidenciaHabitual());
                        $domiciliosOfendidosSolicitudesDto->setEstado($domicilioOfendidoCarpeta->getEstado());
                        $domiciliosOfendidosSolicitudesDto->setMunicipio($domicilioOfendidoCarpeta->getMunicipio());
                        $domiciliosOfendidosSolicitudesDto->setCveConvivencia($domicilioOfendidoCarpeta->getCveConvivencia());
                        $domiciliosOfendidosSolicitudesDto->setCveTipoDeVivienda($domicilioOfendidoCarpeta->getCveTipoDeVivienda());
                        $domiciliosOfendidosSolicitudesDto->setActivo('S');

                        $guardaDomicilioOfendidoSolicitud = $domiciliosOfendidosSolicitudesDao->insertDomiciliosofendidossolicitudes($domiciliosOfendidosSolicitudesDto, $proveedor);

                        if ($guardaDomicilioOfendidoSolicitud == '') throw new Exception('no se pudo copiar el domicilio de un ofendido desde carpeta');


                    }
                }


                /*
                 *
                 */


                /*
                 * copiar telefonos ofendidos carpetas a telefonos ofendidos solicitudes
                 */

                $telefonosOfendidosCarpetasDao = new TelefonosofendidoscarpetasDAO();
                $telefonosOfendidosCarpetasDto = new TelefonosofendidoscarpetasDTO();

                $telefonosOfendidosCarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                $telefonosOfendidosCarpetasDto->setActivo('S');

                $selectTelefonosOfendidosCarpetas = $telefonosOfendidosCarpetasDao->selectTelefonosofendidoscarpetas($telefonosOfendidosCarpetasDto, '', $proveedor);

                if ($selectTelefonosOfendidosCarpetas != '') {

                    foreach ($selectTelefonosOfendidosCarpetas as $telefonoOfendidoCarpeta) {

                        $telefonosOfendidosSolicitudesDao = new TelefonosofendidossolicitudesDAO();
                        $telefonosOfendidosSolicitudesDto = new TelefonosofendidossolicitudesDTO();

                        $telefonosOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                        $telefonosOfendidosSolicitudesDto->setTelefono($telefonoOfendidoCarpeta->getTelefono());
                        $telefonosOfendidosSolicitudesDto->setCelular($telefonoOfendidoCarpeta->getCelular());
                        $telefonosOfendidosSolicitudesDto->setEmail($telefonoOfendidoCarpeta->getEmail());
                        $telefonosOfendidosSolicitudesDto->setActivo('S');

                        $guardaTelefonoOfendidoSolicitud = $telefonosOfendidosSolicitudesDao->insertTelefonosofendidossolicitudes($telefonosOfendidosSolicitudesDto, $proveedor);

                        if ($guardaTelefonoOfendidoSolicitud == '') throw new Exception('no se pudo copiar un telefono de ofendido desde carpeta');


                    }
                }

                /*
                 *
                 */


                /*
                 * copiar defensores ofendidos carpetas a defensores ofendidos solicitudes
                 */

                $defensoresOfendidosCarpetasDao = new DefensoresofendidoscarpetasDAO();
                $defensoresOfendidosCarpetasDto = new DefensoresofendidoscarpetasDTO();


                $defensoresOfendidosCarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                $defensoresOfendidosCarpetasDto->setActivo('S');

                $selectDefensoresOfendidosCarpetas = $defensoresOfendidosCarpetasDao->selectDefensoresofendidoscarpetas($defensoresOfendidosCarpetasDto, '', $proveedor);

                if ($selectDefensoresOfendidosCarpetas != '') {

                    foreach ($selectDefensoresOfendidosCarpetas as $defensorOfendidoCarpeta) {

                        $defensoresOfendidosSolicitudesDao = new DefensoresofendidossolicitudesDAO();
                        $defensoresOfendidosSolicitudesDto = new DefensoresofendidossolicitudesDTO();


                        $defensoresOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                        $defensoresOfendidosSolicitudesDto->setCveTipoAsesor($defensorOfendidoCarpeta->getCveTipoDefensor());
                        $defensoresOfendidosSolicitudesDto->setNombre($defensorOfendidoCarpeta->getNombre());
                        $defensoresOfendidosSolicitudesDto->setTelefono($defensorOfendidoCarpeta->getTelefono());
                        $defensoresOfendidosSolicitudesDto->setCelular($defensorOfendidoCarpeta->getCelular());
                        $defensoresOfendidosSolicitudesDto->setEmail($defensorOfendidoCarpeta->getEmail());
                        $defensoresOfendidosSolicitudesDto->setActivo('S');


                        $guardaDefensorOfendidoSolicitud = $defensoresOfendidosSolicitudesDao->insertDefensoresofendidossolicitudes($defensoresOfendidosSolicitudesDto, $proveedor);

                        if ($guardaDefensorOfendidoSolicitud == '') throw new Exception('no se pudo copiar un defensor de ofendido desde carpeta');


                    }

                }


                /*
                 *
                 */


                /*
                 * copiar tutores ofendidos carpetas a tutores ofendidos solicitudes
                 */

                $tutoresOfendidosCarpetasDao = new TutoresofendidoscarpetasDAO();
                $tutoresOfendidosCarpetasDto = new TutoresofendidoscarpetasDTO();


                $tutoresOfendidosCarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                $tutoresOfendidosCarpetasDto->setActivo('S');

                $selectTutoresOfendidosCarpetas = $tutoresOfendidosCarpetasDao->selectTutoresofendidoscarpetas($tutoresOfendidosCarpetasDto, '', $proveedor);

                if ($selectTutoresOfendidosCarpetas != '') {

                    foreach ($selectTutoresOfendidosCarpetas as $tutorOfendidoCarpeta) {

                        $tutoresOfendidosSolicitudesDao = new TutoresofendidosDAO();
                        $tutoresOfendidosSolicitudesDto = new TutoresofendidosDTO();

                        $tutoresOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                        $tutoresOfendidosSolicitudesDto->setCveTipoTutor($tutorOfendidoCarpeta->getCveTipoTutor());
                        $tutoresOfendidosSolicitudesDto->setProvDef($tutorOfendidoCarpeta->getProvDef());
                        $tutoresOfendidosSolicitudesDto->setNombre($tutorOfendidoCarpeta->getNombre());
                        $tutoresOfendidosSolicitudesDto->setPaterno($tutorOfendidoCarpeta->getPaterno());
                        $tutoresOfendidosSolicitudesDto->setMaterno($tutorOfendidoCarpeta->getMaterno());
                        $tutoresOfendidosSolicitudesDto->setFechaNacimiento($tutorOfendidoCarpeta->getFechaNacimiento());
                        $tutoresOfendidosSolicitudesDto->setEdad($tutorOfendidoCarpeta->getEdad());
                        $tutoresOfendidosSolicitudesDto->setActivo('S');
                        $tutoresOfendidosSolicitudesDto->setCveGenero($tutorOfendidoCarpeta->getCveGenero());


                        $guardaTutorOfendidoSolicitud = $tutoresOfendidosSolicitudesDao->insertTutoresofendidos($tutoresOfendidosSolicitudesDto, $proveedor);

                        if ($guardaTutorOfendidoSolicitud == '') throw new Exception('no se pudo copiar un tutor de ofendido desde carpeta');

                    }

                }


                /*
                 *
                 */


                /*
                 * copiar nacionalidades ofendidos carpetas a nacionalidades ofendidos solicitudes
                 */

                $nacionalidadesOfendidosCarpetasDao = new NacionalidadesofendidoscarpetasDAO();
                $nacionalidadesOfendidosCarpetasDto = new NacionalidadesofendidoscarpetasDTO();

                $nacionalidadesOfendidosCarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                $nacionalidadesOfendidosCarpetasDto->setActivo('S');

                $selectNacionalidadesOfendidosCarpetas = $nacionalidadesOfendidosCarpetasDao->selectNacionalidadesofendidoscarpetas($nacionalidadesOfendidosCarpetasDto, '', $proveedor);

                if ($selectNacionalidadesOfendidosCarpetas != '') {

                    foreach ($selectNacionalidadesOfendidosCarpetas as $nacionalidadOfendidoCarpeta) {

                        $nacionalidadesOfendidosSolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
                        $nacionalidadesOfendidosSolicitudesDto = new NacionalidadesofendidossolicitudesDTO();

                        $nacionalidadesOfendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
                        $nacionalidadesOfendidosSolicitudesDto->setCvePais($nacionalidadOfendidoCarpeta->getCvePais());
                        $nacionalidadesOfendidosSolicitudesDto->setActivo('S');

                        $guardaNacionalidadOfendidoSolicitud = $nacionalidadesOfendidosSolicitudesDao->insertNacionalidadesofendidossolicitudes($nacionalidadesOfendidosSolicitudesDto, $proveedor);

                        if ($guardaNacionalidadOfendidoSolicitud == '') throw new Exception('no se pudo copiar una nacionalidad de ofendido desde carpeta');

                    }

                }


                /*
                 *
                 */

            }
        }

    }

    /**
     * copiar imputados carpetas a solicitud si la toca no contenia imputados
     * @param $idCarpetaJudicial
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     */
    public function copiarImputadosDeCarpeta($idCarpetaJudicial, $idSolicitudAudiencia, $proveedor = null)
    {

        $imputadosCarpetasDao = new ImputadoscarpetasDAO();
        $imputadosCarpetasDto = new ImputadoscarpetasDTO();

        $imputadosCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $imputadosCarpetasDto->setActivo('S');

        $selectImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, '', $proveedor);

        if ($selectImputadosCarpetas != '') {

            foreach ($selectImputadosCarpetas as $imputadoCarpeta) {

                $imputadosSolicitudesDao = new ImputadossolicitudesDAO();
                $imputadosSolicitudesDto = new ImputadossolicitudesDTO();

                $imputadosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $imputadosSolicitudesDto->setActivo('S');
                $imputadosSolicitudesDto->setDetenido($imputadoCarpeta->getDetenido());
                $imputadosSolicitudesDto->setNombre($imputadoCarpeta->getNombre());
                $imputadosSolicitudesDto->setPaterno($imputadoCarpeta->getPaterno());
                $imputadosSolicitudesDto->setMaterno($imputadoCarpeta->getMaterno());
                $imputadosSolicitudesDto->setRfc($imputadoCarpeta->getRfc());
                $imputadosSolicitudesDto->setCurp($imputadoCarpeta->getCurp());
                $imputadosSolicitudesDto->setCveTipoDetencion($imputadoCarpeta->getCveTipoDetencion());
                $imputadosSolicitudesDto->setCveGenero($imputadoCarpeta->getCveGenero());
                $imputadosSolicitudesDto->setAlias($imputadoCarpeta->getAlias());
                $imputadosSolicitudesDto->setFechaDeclaracion($imputadoCarpeta->getFechaDeclaracion());
                $imputadosSolicitudesDto->setCvePaisNacimiento($imputadoCarpeta->getCvePaisNacimiento());
                $imputadosSolicitudesDto->setCveEstadoNacimiento($imputadoCarpeta->getCveEstadoNacimiento());
                $imputadosSolicitudesDto->setCveMunicipioNacimiento($imputadoCarpeta->getCveMunicipioNacimiento());
                $imputadosSolicitudesDto->setFechaNacimiento($imputadoCarpeta->getFechaNacimiento());
                $imputadosSolicitudesDto->setEdad($imputadoCarpeta->getEdad());
                $imputadosSolicitudesDto->setCveTipoPersona($imputadoCarpeta->getCveTipoPersona());
                $imputadosSolicitudesDto->setCveTipoReligion($imputadoCarpeta->getCveTipoReligion());
                $imputadosSolicitudesDto->setNombreMoral($imputadoCarpeta->getNombreMoral());
                $imputadosSolicitudesDto->setCveNivelInstruccion($imputadoCarpeta->getCveNivelInstruccion());
                $imputadosSolicitudesDto->setCveEstadoCivil($imputadoCarpeta->getCveEstadoCivil());
                $imputadosSolicitudesDto->setCveEspanol($imputadoCarpeta->getCveEspanol());
                $imputadosSolicitudesDto->setCveAlfabetismo($imputadoCarpeta->getCveAlfabetismo());
                $imputadosSolicitudesDto->setCveDialectoIndigena($imputadoCarpeta->getCveDialectoIndigena());
                $imputadosSolicitudesDto->setCveTipoFamiliaLinguistica($imputadoCarpeta->getCveTipoFamiliaLinguistica());
                $imputadosSolicitudesDto->setCveOcupacion($imputadoCarpeta->getCveOcupacion());
                $imputadosSolicitudesDto->setCveInterprete($imputadoCarpeta->getCveInterprete());
                $imputadosSolicitudesDto->setCveEstadoPsicofisico($imputadoCarpeta->getCveEstadoPsicofisico());
                $imputadosSolicitudesDto->setFechaImputacion($imputadoCarpeta->getFechaImputacion());
                $imputadosSolicitudesDto->setFechaControlDet($imputadoCarpeta->getFechaControlDet());
                $imputadosSolicitudesDto->setFecTerminoCons($imputadoCarpeta->getFecTerminoCons());
                $imputadosSolicitudesDto->setFecCierreInv($imputadoCarpeta->getFecCierreInv());
                $imputadosSolicitudesDto->setEstadoNacimiento($imputadoCarpeta->getEstadoNacimiento());
                $imputadosSolicitudesDto->setMunicipioNacimiento($imputadoCarpeta->getMunicipioNacimiento());
                $imputadosSolicitudesDto->setRelacionMoral($imputadoCarpeta->getRelacionMoral());
                $imputadosSolicitudesDto->setPersonaMoral($imputadoCarpeta->getPersonaMoral());
                $imputadosSolicitudesDto->setCveCereso($imputadoCarpeta->getCveCereso());
                $imputadosSolicitudesDto->setCveEtapaProcesal($imputadoCarpeta->getCveEtapaProcesal());
                $imputadosSolicitudesDto->setCveTipoReincidencia($imputadoCarpeta->getCveTipoReincidencia());
                $imputadosSolicitudesDto->setIngresoMensual($imputadoCarpeta->getIngresoMensual());
                $imputadosSolicitudesDto->setCveGrupoEdnico($imputadoCarpeta->getCveGrupoEdnico());
                $imputadosSolicitudesDto->setTieneSobreseimiento($imputadoCarpeta->getTieneSobreseimiento());
                $imputadosSolicitudesDto->setFechaSobreseimiento($imputadoCarpeta->getFechaSobreseimiento());

                $guardaImputadoSolicitud = $imputadosSolicitudesDao->insertImputadossolicitudes($imputadosSolicitudesDto, $proveedor);

                if ($guardaImputadoSolicitud == '') throw new Exception('No se pudo copiar un imputado desde carpetas judiciales');


                //obtenemos el id del imputado carpeta a copiar y el id de imputado solicitud generado
                $idImputadoCarpeta = $imputadoCarpeta->getIdImputadoCarpeta();
                $idImputadoSolicitud = $guardaImputadoSolicitud[0]->getIdImputadoSolicitud();
                /*
                 * creamos una sesion para saber que id de imputado tenia el que se copio y cual es el el del imputado carpeta para posteriormente
                 * insertalo en la relacion
                 */


                $_SESSION['imputados_copia_carpetas'][$imputadoCarpeta->getIdImputadoCarpeta()] = $idImputadoSolicitud;


                /*
                 * copia domicilios imputado carpeta a domicilios imputado solicitudes
                 */

                $domiciliosImputadosCarpetasDao = new DomiciliosimputadoscarpetasDAO();
                $domiciliosImputadosCarpetasDto = new DomiciliosimputadoscarpetasDTO();

                $domiciliosImputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $domiciliosImputadosCarpetasDto->setActivo('S');

                $selectDomiciliosImputadosCarpetas = $domiciliosImputadosCarpetasDao->selectDomiciliosimputadoscarpetas($domiciliosImputadosCarpetasDto, '', $proveedor);

                if ($selectDomiciliosImputadosCarpetas != '') {

                    foreach ($selectDomiciliosImputadosCarpetas as $domicilioImputadoCarpeta) {

                        $domiciliosImputadosSolicitudesDao = new DomiciliosimputadossolicitudesDAO();
                        $domiciliosImputadosSolicitudesDto = new DomiciliosimputadossolicitudesDTO();

                        $domiciliosImputadosSolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                        $domiciliosImputadosSolicitudesDto->setDomicilioProcesal($domicilioImputadoCarpeta->getDomicilioProcesal());
                        $domiciliosImputadosSolicitudesDto->setCvePais($domicilioImputadoCarpeta->getCvePais());
                        $domiciliosImputadosSolicitudesDto->setCveEstado($domicilioImputadoCarpeta->getCveEstado());
                        $domiciliosImputadosSolicitudesDto->setCveMunicipio($domicilioImputadoCarpeta->getCveMunicipio());
                        $domiciliosImputadosSolicitudesDto->setDireccion($domicilioImputadoCarpeta->getDireccion());
                        $domiciliosImputadosSolicitudesDto->setColonia($domicilioImputadoCarpeta->getColonia());
                        $domiciliosImputadosSolicitudesDto->setNumInterior($domicilioImputadoCarpeta->getNumInterior());
                        $domiciliosImputadosSolicitudesDto->setNumExterior($domicilioImputadoCarpeta->getNumExterior());
                        $domiciliosImputadosSolicitudesDto->setCp($domicilioImputadoCarpeta->getCp());
                        $domiciliosImputadosSolicitudesDto->setLatitud($domicilioImputadoCarpeta->getLatitud());
                        $domiciliosImputadosSolicitudesDto->setLongitud($domicilioImputadoCarpeta->getLongitud());
                        $domiciliosImputadosSolicitudesDto->setRecidenciaHabitual($domicilioImputadoCarpeta->getRecidenciaHabitual());
                        $domiciliosImputadosSolicitudesDto->setEstado($domicilioImputadoCarpeta->getEstado());
                        $domiciliosImputadosSolicitudesDto->setMunicipio($domicilioImputadoCarpeta->getMunicipio());
                        $domiciliosImputadosSolicitudesDto->setCveConvivencia($domicilioImputadoCarpeta->getCveConvivencia());
                        $domiciliosImputadosSolicitudesDto->setCveTipoDeVivienda($domicilioImputadoCarpeta->getCveTipoDeVivienda());
                        $domiciliosImputadosSolicitudesDto->setActivo('S');

                        $guardaDomicilioImputadoSolicitud = $domiciliosImputadosSolicitudesDao->insertDomiciliosimputadossolicitudes($domiciliosImputadosSolicitudesDto, $proveedor);

                        if ($guardaDomicilioImputadoSolicitud == '') throw new Exception('ocurrio un error al copiar un domicilio de un imputado');
                    }
                }

                /*
                 *
                 */

                /*
                 * copiar telefonos imputado carpeta a telefonos imputado solicitudes
                 */
                $telefonosImputadosCarpetasDao = new TelefonosimputadoscarpetasDAO();
                $telefonosImputadosCarpetasDto = new TelefonosimputadoscarpetasDTO();

                $telefonosImputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $telefonosImputadosCarpetasDto->setActivo('S');

                $selectTelefonosImputadosCarpetas = $telefonosImputadosCarpetasDao->selectTelefonosimputadoscarpetas($telefonosImputadosCarpetasDto, '', $proveedor);

                if ($selectTelefonosImputadosCarpetas != '') {

                    foreach ($selectTelefonosImputadosCarpetas as $telefonoImputadoCarpeta) {

                        $telefonosImputadosSolicitudesDao = new TelefonosimputadossolicitudesDAO();
                        $telefonosImputadosSolicitudesDto = new TelefonosimputadossolicitudesDTO();

                        $telefonosImputadosSolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                        $telefonosImputadosSolicitudesDto->setTelefono($telefonoImputadoCarpeta->getTelefono());
                        $telefonosImputadosSolicitudesDto->setCelular($telefonoImputadoCarpeta->getCelular());
                        $telefonosImputadosSolicitudesDto->setEmail($telefonoImputadoCarpeta->getEmail());
                        $telefonosImputadosSolicitudesDto->setActivo('S');

                        $guardaTelefonoImputadoSolicitud = $telefonosImputadosSolicitudesDao->insertTelefonosimputadossolicitudes($telefonosImputadosSolicitudesDto, $proveedor);

                        if ($guardaTelefonoImputadoSolicitud == '') throw new Exception('No se pudo copiar el telefono de un imputado desde carpeta');

                    }
                }

                /*
                 *
                 */

                /*
                 * copiar defensores imputados carpetas a defensores imputados solicitudes
                 */

                $defensoresImputadosCarpetasDao = new DefensoresimputadoscarpetasDAO();
                $defensoresImputadosCarpetasDto = new DefensoresimputadoscarpetasDTO();

                $defensoresImputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $defensoresImputadosCarpetasDto->setActivo('S');

                $selectDefensoresImputadosCarpetas = $defensoresImputadosCarpetasDao->selectDefensoresimputadoscarpetas($defensoresImputadosCarpetasDto, '', $proveedor);

                if ($selectDefensoresImputadosCarpetas != '') {

                    foreach ($selectDefensoresImputadosCarpetas as $defensorImputadoCarpeta) {

                        $defensoresImputadosSolicitudesDao = new DefensoresimputadossolicitudesDAO();
                        $defensoresImputadosSolicitudesDto = new DefensoresimputadossolicitudesDTO();

                        $defensoresImputadosSolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                        $defensoresImputadosSolicitudesDto->setCveTipoDefensor($defensorImputadoCarpeta->getCveTipoDefensor());
                        $defensoresImputadosSolicitudesDto->setNombre($defensorImputadoCarpeta->getNombre());
                        $defensoresImputadosSolicitudesDto->setTelefono($defensorImputadoCarpeta->getTelefono());
                        $defensoresImputadosSolicitudesDto->setCelular($defensorImputadoCarpeta->getCelular());
                        $defensoresImputadosSolicitudesDto->setEmail($defensorImputadoCarpeta->getEmail());
                        $defensoresImputadosSolicitudesDto->setActivo('S');

                        $guardaDefensorImputadoSolicitud = $defensoresImputadosSolicitudesDao->insertDefensoresimputadossolicitudes($defensoresImputadosSolicitudesDto, $proveedor);

                        if ($guardaDefensorImputadoSolicitud == '') throw new Exception('No se pudo copiar un defensor de un imputado desde carpetas');
                    }

                }


                /*
                 *
                 */

                /*
                 * copiar drogas imputados carpetas a drogas imputados solicitudes
                 */

                $drogasImputadosCarpetasDao = new ImputadosdrogascarpetasDAO();
                $drogasImputadosCarpetasDto = new ImputadosdrogascarpetasDTO();

                $drogasImputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $drogasImputadosCarpetasDto->setActivo('S');

                $selectDrogasImputadosCarpetas = $drogasImputadosCarpetasDao->selectImputadosdrogascarpetas($drogasImputadosCarpetasDto, '', $proveedor);

                if ($selectDrogasImputadosCarpetas != '') {

                    foreach ($selectDrogasImputadosCarpetas as $drogaImputadoCarpeta) {

                        $drogasImputadosSolicitudesDao = new ImputadosdrogasDAO();
                        $drogasImputadosSolicitudesDto = new ImputadosdrogasDTO();


                        $drogasImputadosSolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                        $drogasImputadosSolicitudesDto->setCveDroga($drogaImputadoCarpeta->getCveDroga());
                        $drogasImputadosSolicitudesDto->setActivo('S');

                        $guardaDrogaImputadoSolicitud = $drogasImputadosSolicitudesDao->insertImputadosdrogas($drogasImputadosSolicitudesDto, $proveedor);

                        if ($guardaDrogaImputadoSolicitud == '') throw new Exception('No se pudo copiar una droga de un imputado desde carpeta');

                    }

                }


                /*
                 *
                 */


                /*
                 * copiar tutores imputados carpetas a tutores imputados solicitudes
                 */

                $tutoresImputadosCarpetasDao = new TutoresimputadoscarpetasDAO();
                $tutoresImputadosCarpetasDto = new TutoresimputadoscarpetasDTO();

                $tutoresImputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $tutoresImputadosCarpetasDto->setActivo('S');

                $selectTutoresImputadosCarpetas = $tutoresImputadosCarpetasDao->selectTutoresimputadoscarpetas($tutoresImputadosCarpetasDto, '', $proveedor);

                if ($selectTutoresImputadosCarpetas != '') {

                    foreach ($selectTutoresImputadosCarpetas as $tutorImputadoCarpeta) {

                        $tutoresImputadosSolicitudesDao = new TutoresimputadosDAO();
                        $tutoresImputadosSolicitudesDto = new TutoresimputadosDTO();

                        $tutoresImputadosSolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                        $tutoresImputadosSolicitudesDto->setCveTipoTutor($tutorImputadoCarpeta->getCveTipoTutor());
                        $tutoresImputadosSolicitudesDto->setProvDef($tutorImputadoCarpeta->getProvDef());
                        $tutoresImputadosSolicitudesDto->setNombre($tutorImputadoCarpeta->getNombre());
                        $tutoresImputadosSolicitudesDto->setPaterno($tutorImputadoCarpeta->getPaterno());
                        $tutoresImputadosSolicitudesDto->setMaterno($tutorImputadoCarpeta->getMaterno());
                        $tutoresImputadosSolicitudesDto->setFechaNacimiento($tutorImputadoCarpeta->getFechaNacimiento());
                        $tutoresImputadosSolicitudesDto->setEdad($tutorImputadoCarpeta->getEdad());
                        $tutoresImputadosSolicitudesDto->setActivo('S');
                        $tutoresImputadosSolicitudesDto->setCveGenero($tutorImputadoCarpeta->getCveGenero());

                        $guardaTutorImputadoSolicitud = $tutoresImputadosSolicitudesDao->insertTutoresimputados($tutoresImputadosSolicitudesDto, $proveedor);

                        if ($guardaTutorImputadoSolicitud == '') throw new Exception('No se pudo copiar un tutor de imputado desde carpeta');
                    }
                }

                /*
                 *
                 */


                /*
                 * copiar nacionalidades imputados carpetas a nacionalidades imputados solicitudes
                 */

                $nacionalidadesImputadosCarpetasDao = new NacionalidadesimputadoscarpetasDAO();
                $nacionalidadesImputadosCarpetasDto = new NacionalidadesimputadoscarpetasDTO();

                $nacionalidadesImputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                $nacionalidadesImputadosCarpetasDto->setActivo('S');

                $selectNacionalidadesImputadosCarpetas = $nacionalidadesImputadosCarpetasDao->selectNacionalidadesimputadoscarpetas($nacionalidadesImputadosCarpetasDto, '', $proveedor);

                if ($selectNacionalidadesImputadosCarpetas != '') {

                    foreach ($selectNacionalidadesImputadosCarpetas as $nacionalidadImputadoCarpeta) {

                        $nacionalidadesImputadosSolicitudesDao = new NacionalidadesimputadossolicitudesDAO();
                        $nacionalidadesImputadosSolicitudesDto = new NacionalidadesimputadossolicitudesDTO();

                        $nacionalidadesImputadosSolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
                        $nacionalidadesImputadosSolicitudesDto->setCvePais($nacionalidadImputadoCarpeta->getCvePais());
                        $nacionalidadesImputadosSolicitudesDto->setActivo('S');

                        $guardaNacionalidadImputadoSolicitud = $nacionalidadesImputadosSolicitudesDao->insertNacionalidadesimputadossolicitudes($nacionalidadesImputadosSolicitudesDto, $proveedor);

                        if ($guardaNacionalidadImputadoSolicitud == '') throw new Exception('No se pudo copiar una nacionalidad de imputado desde carpeta');

                    }

                }

                /*
                 *
                 */


            }
        }

    }

    /**
     * copia apelantes carpetas a solicitud si la toca no contenia apelantes
     * @param $idCarpetaJudicial
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     */
    public function copiarApelantesDeCarpeta($idCarpetaJudicial, $idSolicitudAudiencia, $proveedor = null)
    {
        $apelantesCarpetasDao = new ApelantescarpetasDAO();
        $apelantesCarpetasDto = new ApelantescarpetasDTO();

        $apelantesCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $apelantesCarpetasDto->setActivo('S');

        $selectApelantesCarpetas = $apelantesCarpetasDao->selectApelantescarpetas($apelantesCarpetasDto, '', $proveedor);

        if ($selectApelantesCarpetas != '') {

            foreach ($selectApelantesCarpetas as $apelanteCarpeta) {

                $apelantesSolicitudesDao = new ApelantessolicitudesDAO();
                $apelantesSolicitudesDto = new ApelantessolicitudesDTO();

                $apelantesSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $apelantesSolicitudesDto->setNombre($apelanteCarpeta->getNombre());
                $apelantesSolicitudesDto->setPaterno($apelanteCarpeta->getPaterno());
                $apelantesSolicitudesDto->setMaterno($apelanteCarpeta->getMaterno());
                $apelantesSolicitudesDto->setCveGenero($apelanteCarpeta->getCveGenero());
                $apelantesSolicitudesDto->setCveTipoPersona($apelanteCarpeta->getCveTipoPersona());
                $apelantesSolicitudesDto->setNombreMoral($apelanteCarpeta->getNombreMoral());
                $apelantesSolicitudesDto->setCveTipoApelante($apelanteCarpeta->getCVeTipoApelante());
                $apelantesSolicitudesDto->setActivo('S');

                $guardaApelanteSolicitud = $apelantesSolicitudesDao->insertApelantessolicitudes($apelantesSolicitudesDto, $proveedor);

                if ($guardaApelanteSolicitud == '') throw new Exception('no se pudo copiar un apelante desde la carpeta');

            }
        }

    }

    /**
     * copia delitos carpetas a solicitud si la toca no contenia apelantes
     * @param $idCarpetaJudicial
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     */
    public function copiarDelitosDeCarpeta($idCarpetaJudicial, $idSolicitudAudiencia, $proveedor = null)
    {
        $delitosCarpetasDao = new DelitoscarpetasDAO();
        $delitosCarpetasDto = new DelitoscarpetasDTO();

        $delitosCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $delitosCarpetasDto->setActivo('S');

        $selectDelitosCarpeta = $delitosCarpetasDao->selectDelitoscarpetas($delitosCarpetasDto, '', $proveedor);

        if ($selectDelitosCarpeta != '') {

            foreach ($selectDelitosCarpeta as $delitoCarpeta) {

                $delitosSolicitudesDao = new DelitossolicitudesDAO();
                $delitosSolicitudesDto = new DelitossolicitudesDTO();

                $delitosSolicitudesDto->setCveDelito($delitoCarpeta->getCveDelito());
                $delitosSolicitudesDto->setActivo('S');
                $delitosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);

                $guardaDelitoSolicitud = $delitosSolicitudesDao->insertDelitossolicitudes($delitosSolicitudesDto, $proveedor);

                if ($guardaDelitoSolicitud == '') throw new Exception('no se pudo copiar un delito desde la carpeta');

                /*
                 * creamos una sesion para saber que id de delito tenia el que se copio y cual es el el del delito solicitud para posteriormente
                 * insertalo en la relacion
                 */
                $_SESSION['delitos_copia_carpetas'][$delitoCarpeta->getIdDelitoCarpeta()] = $guardaDelitoSolicitud[0]->getIdDelitoSolicitud();


            }

        }
    }


    /**
     * copia la relacion de carpeta judicial a solicitud
     * y copia violencia de genero de impofedel carpeta de violencia de genero solicitud
     * @param $idCarpetaJudicial
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     */
    public function copiarRelacionDeCarpeta($idCarpetaJudicial, $idSolicitudAudiencia, $proveedor = null)
    {

        $impofedelCarpetasDao = new ImpofedelcarpetasDAO();
        $impofedelCarpetasDto = new ImpofedelcarpetasDTO();

        $impofedelCarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
        $impofedelCarpetasDto->setActivo('S');

        $selectImpofedeCarpetas = $impofedelCarpetasDao->selectImpofedelcarpetas($impofedelCarpetasDto, '', $proveedor);

        if ($selectImpofedeCarpetas != '') {

            foreach ($selectImpofedeCarpetas as $impofedelCarpeta) {


                if (isset($_SESSION['imputados_copia_carpetas'][$impofedelCarpeta->getIdImputadoCarpeta()])
                    && isset($_SESSION['ofendidos_copia_carpetas'][$impofedelCarpeta->getIdOfendidoCarpeta()])
                    && isset($_SESSION['delitos_copia_carpetas'][$impofedelCarpeta->getIdDelitoCarpeta()])
                ) {

                    $impofedelSolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impofedelSolicitudesDto = new ImpofedelsolicitudesDTO();

                    $impofedelSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                    $impofedelSolicitudesDto->setIdImputadoSolicitud($_SESSION['imputados_copia_carpetas'][$impofedelCarpeta->getIdImputadoCarpeta()]);
                    $impofedelSolicitudesDto->setIdOfendidoSolicitud($_SESSION['ofendidos_copia_carpetas'][$impofedelCarpeta->getIdOfendidoCarpeta()]);
                    $impofedelSolicitudesDto->setIdDelitoSolicitud($_SESSION['delitos_copia_carpetas'][$impofedelCarpeta->getIdDelitoCarpeta()]);
                    $impofedelSolicitudesDto->setCveModalidad($impofedelCarpeta->getCveModalidad());
                    $impofedelSolicitudesDto->setCveComision($impofedelCarpeta->getCveComision());
                    $impofedelSolicitudesDto->setCveConcurso($impofedelCarpeta->getCveConcurso());
                    $impofedelSolicitudesDto->setCveClasificacionDelitoOrden($impofedelCarpeta->getCveClasificacionDelitoOrden());
                    $impofedelSolicitudesDto->setCveElementoComision($impofedelCarpeta->getCveElementoComision());
                    $impofedelSolicitudesDto->setCveClasificacionDelito($impofedelCarpeta->getCveClasificacionDelito());
                    $impofedelSolicitudesDto->setCveFormaAccion($impofedelCarpeta->getCveFormaAccion());
                    $impofedelSolicitudesDto->setCveConsumacion($impofedelCarpeta->getCveConsumacion());
                    $impofedelSolicitudesDto->setCveMunicipio($impofedelCarpeta->getCveMunicipio());
                    $impofedelSolicitudesDto->setCveEntidad($impofedelCarpeta->getCveEntidad());
                    $impofedelSolicitudesDto->setCveGradoParticipacion($impofedelCarpeta->getCveGradoParticipacion());
                    $impofedelSolicitudesDto->setCveRelacionImpOfe($impofedelCarpeta->getCveRelacionImpOfe());
                    $impofedelSolicitudesDto->setCveTerminacion($impofedelCarpeta->getCveTerminacion());
                    $impofedelSolicitudesDto->setActivo('S');
                    $impofedelSolicitudesDto->setFechaDelito($impofedelCarpeta->getFechaDelito());
                    $impofedelSolicitudesDto->setDireccion($impofedelCarpeta->getDireccion());
                    $impofedelSolicitudesDto->setColonia($impofedelCarpeta->getColonia());
                    $impofedelSolicitudesDto->setNumInterior($impofedelCarpeta->getNumInterior());
                    $impofedelSolicitudesDto->setNumExterior($impofedelCarpeta->getNumExterior());
                    $impofedelSolicitudesDto->setCp($impofedelCarpeta->getCp());

                    $guardaImpofedelSolicitud = $impofedelSolicitudesDao->insertImpofedelsolicitudes($impofedelSolicitudesDto, $proveedor);


                    if ($guardaImpofedelSolicitud == '') throw new Exception('no se pudo copiar algun registro de la relacion carpetas judiciales');

                    /*
                     * guardamos el id de carpeta relacion (impofedelcarpeta) y el id solicitud relacion (impofedelsolicitu)
                     */
                    $idImpofedelCarpeta = $impofedelCarpeta->getIdImpOfeDelCarpeta();
                    $idImpofedelSolicitud = $guardaImpofedelSolicitud[0]->getIdImpOfeDelSolicitud();
                    /*
                     * COPIAMOS LOS EFECTOS DEL DELITO y OFENDIDO
                     */
                    $efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();
                    $efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($idImpofedelCarpeta);
                    $efectosofendidoscarpetasDto->setActivo("S");
                    $efectosofendidoscarpetasDao = new EfectosofendidoscarpetasDAO();
                    $efectosofendidoscarpetasDto = $efectosofendidoscarpetasDao->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto, "", $proveedor);


                    if ($efectosofendidoscarpetasDto != "") {
                        for ($x = 0; $x < count($efectosofendidoscarpetasDto); $x ++) {
                            $efectosofendidosDto = new EfectosofendidosDTO();
                            $efectosofendidosDto->setcveDetalleEfecto($efectosofendidoscarpetasDto[$x]->getCveDetalleEfecto());
                            $efectosofendidosDto->setidImpOfeDelSolicitud($idImpofedelSolicitud);
                            $efectosofendidosDto->setactivo("S");

                            $efectosofendidosDao = new EfectosofendidosDAO();
                            $efectosofendidosDto = $efectosofendidosDao->insertEfectosofendidos($efectosofendidosDto, $proveedor);

                            if ($efectosofendidosDto == "") throw new Exception('Ocurrio un error al copiar los efectos de la victima a la solicitud');
                        }
                    }


                    /*
                     * TERMINAMOS DE COPIAR LOS EFECTOS DEL DELITO ASIA EL OFENDIDO
                     */

                    /*
                     * COMENZAMOS A COPIAR LOS DATOS DE TRATA DE PERSONAS
                     */

                    $trataspersonascarpetasDto = new TrataspersonascarpetasDTO();
                    $trataspersonascarpetasDto->setIdImpOfeDelCarpeta($idImpofedelCarpeta);
                    $trataspersonascarpetasDto->setActivo("S");
                    $trataspersonascarpetasDao = new TrataspersonascarpetasDAO();
                    $trataspersonascarpetasDto = $trataspersonascarpetasDao->selectTrataspersonascarpetas($trataspersonascarpetasDto, "", $proveedor);

                    if ($trataspersonascarpetasDto != "") {
                        for ($x = 0; $x < count($trataspersonascarpetasDto); $x ++) {
                            $trataspersonasDto = new TrataspersonasDTO();
                            $trataspersonasDto->setcveEstadoDestino($trataspersonascarpetasDto[$x]->getCveEstadoDestino());
                            $trataspersonasDto->setcveMunicipioDestino($trataspersonascarpetasDto[$x]->getCveMunicipioDestino());
                            $trataspersonasDto->setcvePaisDestino($trataspersonascarpetasDto[$x]->getCvePaisDestino());
                            $trataspersonasDto->setestadoDestino($trataspersonascarpetasDto[$x]->getEstadoDestino());
                            $trataspersonasDto->setmunicipioDestino($trataspersonascarpetasDto[$x]->getMunicipioDestino());
                            $trataspersonasDto->setcveEstadoOrigen($trataspersonascarpetasDto[$x]->getCveEstadoOrigen());
                            $trataspersonasDto->setcveMunicipioOrigen($trataspersonascarpetasDto[$x]->getCveMunicipioOrigen());
                            $trataspersonasDto->setcvePaisOrigen($trataspersonascarpetasDto[$x]->getCvePaisOrigen());
                            $trataspersonasDto->setestadoOrigen($trataspersonascarpetasDto[$x]->getEstadoOrigen());
                            $trataspersonasDto->setmunicipioOrigen($trataspersonascarpetasDto[$x]->getMunicipioOrigen());
                            $trataspersonasDto->setcveTipoTrata($trataspersonascarpetasDto[$x]->getCveTipoTrata());
                            $trataspersonasDto->setcveTrasportacion($trataspersonascarpetasDto[$x]->getCveTrasportacion());
                            $trataspersonasDto->setidImpOfeDelSolicitud($idImpofedelSolicitud);
                            $trataspersonasDto->setActivo("S");

                            $trataspersonasDao = new TrataspersonasDAO();
                            $trataspersonasDto = $trataspersonasDao->insertTrataspersonas($trataspersonasDto, $proveedor);
                            if ($trataspersonasDto == "") throw new Exception('Ocurrio un error al copiar las tratas de personas a la solicitud');
                        }
                    }

                    /*
                     * TERMINAMOS DE COPIAR LA INFORMACION DE TRATA DE PERSONAS
                     */

                    /*
                     * COMENZAMOS A COPIAR LA VIOLENCIA DE GENERO
                     */

                    $violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();
                    $violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($idImpofedelCarpeta);
                    $violenciadegenerocarpetasDto->setActivo("S");

                    $violenciadegenerocarpetasDao = new ViolenciadegenerocarpetasDAO();
                    $violenciadegenerocarpetasDto = $violenciadegenerocarpetasDao->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto, "", $proveedor);

                    if ($violenciadegenerocarpetasDto != "") {
                        for ($x = 0; $x < count($violenciadegenerocarpetasDto); $x ++) {
                            $violenciadegeneroDto = new ViolenciadegeneroDTO();
                            $violenciadegeneroDto->setCveEfecto($violenciadegenerocarpetasDto[$x]->getCveEfecto());
                            $violenciadegeneroDto->setIdImpOfeDelSolicitud($idImpofedelSolicitud);
                            $violenciadegeneroDto->setActivo("S");

                            $violenciadegeneroDao = new ViolenciadegeneroDAO();
                            $violenciadegeneroDto = $violenciadegeneroDao->selectViolenciadegenero($violenciadegeneroDto, "", $proveedor);
                            if ($violenciadegeneroDto != "") {
                                $violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                $violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                $violenciahomicidiosdolososcarpetasDto->setActivo("S");

                                $violenciahomicidiosdolososcarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();
                                $violenciahomicidiosdolososcarpetasDto = $violenciahomicidiosdolososcarpetasDao->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto, "", $proveedor);

                                if ($violenciahomicidiosdolososcarpetasDto != "") {
                                    for ($y = 0; $y < count($violenciahomicidiosdolososcarpetasDto); $y ++) {
                                        $violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();
                                        $violenciahomicidiosdolososDto->setIdViolenciaDeGenero($violenciadegeneroDto[0]->getIdViolenciaDeGenero());
                                        $violenciahomicidiosdolososDto->setCveHomicidioDoloso($violenciahomicidiosdolososcarpetasDto->getCveHomicidioDoloso());
                                        $violenciahomicidiosdolososDto->setActivo("S");

                                        $violenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
                                        $violenciahomicidiosdolososDto = $violenciahomicidiosdolososDao->insertViolenciahomicidiosdolosos($violenciahomicidiosdolososDto, $proveedor);
                                        if ($violenciahomicidiosdolososDto == "") throw new Exception('Ocurrio un error al copiar los registros de violencia de genero a la solicitud');
                                    }
                                }

                                $violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                $violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($violenciadegenerocarpetasDto[$x]->getIdViolenciaDeGeneroCarpeta());
                                $violenciafactoressocialescarpetasDto->setActivo("S");

                                $violenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
                                $violenciafactoressocialescarpetasDto = $violenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto, "", $proveedor);

                                if ($violenciafactoressocialescarpetasDto != "") {
                                    for ($y = 0; $y < count($violenciafactoressocialescarpetasDto); $y ++) {
                                        $violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();
                                        $violenciafactoressocialesDto->setIdViolenciaDeGenero($violenciadegeneroDto[0]->getIdViolenciaDeGenero());
                                        $violenciafactoressocialesDto->setActivo("S");
                                        $violenciafactoressocialesDto->setCveFactorCultural($violenciafactoressocialescarpetasDto[$y]->getCveFactorCultural());
                                        $violenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
                                        $violenciafactoressocialesDto = $violenciafactoressocialesDao->insertViolenciafactoressociales($violenciafactoressocialesDto, $proveedor);
                                        if ($violenciafactoressocialesDto != "") throw new Exception('Ocurrio un error al copiar los registros de violencia de genero a la solicitud');
                                    }
                                }
                            } else {
                            }
                        }
                    }
                    /*
                     * TERMINAMOS DE COPIAR LA VIOLENCIA DE GENERO
                     */

                    /*
                     * HOSTIGAMIENTO Y ACOSO SEXUAL
                     */
                    $sexualescarpetasDto = new SexualescarpetasDTO();
                    $sexualescarpetasDto->setIdImpOfeDelCarpeta($idImpofedelCarpeta);
                    $sexualescarpetasDto->setActivo("S");

                    $sexualescarpetasDao = new SexualescarpetasDAO();
                    $sexualescarpetasDto = $sexualescarpetasDao->selectSexualescarpetas($sexualescarpetasDto, "", $proveedor);
                    if ($sexualescarpetasDto != "") {
                        for ($x = 0; $x < count($sexualescarpetasDto); $x ++) {
                            $sexualesDto = new SexualesDTO();
                            $sexualesDto->setCveModalidadAcoso($sexualescarpetasDto[$x]->getCveModalidadAcoso());
                            $sexualesDto->setCveAmbitoAcoso($sexualescarpetasDto[$x]->getCveAmbitoAcoso());
                            $sexualesDto->setIdImpOfeDelSolicitud($idImpofedelSolicitud);
                            $sexualesDto->setActivo("S");
                            $sexualesDao = new SexualesDAO();

                            $sexualesDto = $sexualesDao->insertSexuales($sexualesDto, $proveedor);

                            if ($sexualesDto != "") {
                                //Sexuales conductas
                                $sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();
                                $sexualesconductascarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                $sexualesconductascarpetasDto->setActivo("S");
                                $sexualesconductascarpetasDao = new SexualesconductascarpetasDAO();
                                $sexualesconductascarpetasDto = $sexualesconductascarpetasDao->selectSexualesconductascarpetas($sexualesconductascarpetasDto, "", $proveedor);

                                if ($sexualesconductascarpetasDto != "") {
                                    for ($y = 0; $y < count($sexualesconductascarpetasDto); $y ++) {
                                        $sexualesconductasDto = new SexualesconductasDTO();
                                        $sexualesconductasDto->setIdSexual($sexualesDto[0]->getIdSexual());
                                        $sexualesconductasDto->setActivo("S");
                                        $sexualesconductasDto->setCveConducta($sexualesconductascarpetasDto[$y]->getCveConducta());
                                        $sexualesconductasDao = new SexualesconductasDAO();
                                        $sexualesconductasDto = $sexualesconductasDao->insertSexualesconductas($sexualesconductasDto, $proveedor);
                                        if ($sexualesconductasDto == "") throw new Exception('Ocurrio un error al copiar el acoso y hostigamiento sexual');
                                    }
                                }


                                //Los testigos sexuales
                                $testigossexualescarpetasDto = new TestigossexualescarpetasDTO();
                                $testigossexualescarpetasDto->setIdSexualCarpeta($sexualescarpetasDto[$x]->getIdSexualCarpeta());
                                $testigossexualescarpetasDto->setActivo("S");
                                $testigossexualescarpetasDao = new TestigossexualescarpetasDAO();
                                $testigossexualescarpetasDto = $testigossexualescarpetasDao->selectTestigossexualescarpetas($testigossexualescarpetasDto, "", $proveedor);

                                if ($testigossexualescarpetasDto != "") {
                                    for ($y = 0; $y < count($testigossexualescarpetasDto); $y ++) {
                                        $testigossexualesDto = new TestigossexualesDTO();
                                        $testigossexualesDto->setidSexual($sexualesDto[0]->getIdSexual());
                                        $testigossexualesDto->setpaterno($testigossexualescarpetasDto[$y]->getPaterno());
                                        $testigossexualesDto->setmaterno($testigossexualescarpetasDto[$y]->getMaterno());
                                        $testigossexualesDto->setnombre($testigossexualescarpetasDto[$y]->getNombre());
                                        $testigossexualesDto->setcveGenero($testigossexualescarpetasDto[$y]->getCveGenero());
                                        $testigossexualesDto->setactivo("S");

                                        $testigossexualesDao = new TestigossexualesDAO();
                                        $testigossexualesDto = $testigossexualesDao->insertTestigossexuales($testigossexualesDto, $proveedor);

                                        if ($testigossexualesDto == "") throw new Exception('Ocurrio un error al copiar el acoso y hostigamiento sexual');
                                    }
                                }
                            } else {
                                throw new Exception('Ocurrio un error al copiar el acoso y hostigamiento sexual');
                            }
                        }
                    }


                    /*
                     * TERMINAMOS HOSTIGAMIENTO Y ACOSO SEXUAL
                     */
                }

            }
        }

        if (isset($_SESSION['imputados_copia_carpetas'])) unset($_SESSION['imputados_copia_carpetas']);
        if (isset($_SESSION['ofendidos_copia_carpetas'])) unset($_SESSION['ofendidos_copia_carpetas']);
        if (isset($_SESSION['delitos_copia_carpetas'])) unset($_SESSION['delitos_copia_carpetas']);

    }

    /**
     * @param $numeroDetalleToca
     * @param $anioDetalleToca
     * @param $juzgadoOrigen
     * @param null $proveedor
     * @return string $carpetaJudicialToca = $this->buscaCarpetaToca($numeroDetalleToca, $anioDetalleToca, $juzgadoOrigen, $proveedor);
     * $carpetaJudicialToca = $this->buscaCarpetaToca($numeroDetalleToca, $anioDetalleToca, $juzgadoOrigen, $proveedor);
     * @throws Exception
     * @internal param $toca
     */

    public function buscaCarpetaToca($numeroDetalleToca, $anioDetalleToca, $juzgadoOrigen, $proveedor = null)
    {

        /*
         * buscamos el tipo de cveJuzgado ($adscripcionToca)
         */
        $juzgadosDao = new JuzgadosDAO();
        $juzgadosDto = new JuzgadosDTO();

        $juzgadosDto->setCveJuzgado($juzgadoOrigen);
        $juzgadosDto->setActivo('S');

        $selectJuzgado = $juzgadosDao->selectJuzgados($juzgadosDto, '', $proveedor);

        if ($selectJuzgado == '') throw new Exception('No se encontro el juzgado de la toca en juzgados sigejupe');

        $cveTipoJuzgado = $selectJuzgado[0]->getCveTipoJuzgado();
        /*
         *
         */


        /*
         * buscamos carpeta judicial dependiendo del tipo de juzgado
         */

        $carpetaJudicialDao = new CarpetasjudicialesDAO();
        $carpetaJudicialDto = new CarpetasjudicialesDTO();
        $carpetaJudicialDto->setNumero($numeroDetalleToca);
        $carpetaJudicialDto->setAnio($anioDetalleToca);
        $carpetaJudicialDto->setCveJuzgado($juzgadoOrigen);
        //$carpetaJudicialDto->setIdCarpetaJudicial('1980');
        $carpetaJudicialDto->setActivo('S');

        $selectCarpetaJudicial = '';

        if ($cveTipoJuzgado == 1) {
            //si el tipo de juzgado es de control (1) buscamos en carpetas judiciales con tipo de carpeta = 1(auxiliar) o = 2(control)
            //prioridad carpeta de control y luego carpeta de juicio

            //buscamos primero con tipo de carpeta control
            $carpetaJudicialDto->setCveTipoCarpeta(2);
            $selectCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

            if ($selectCarpetaJudicial == '') {

                //si no hay carpeta judicial de control buscamos tipo 1 (auxiliar)
                $carpetaJudicialDto->setCveTipoCarpeta(2);
                $selectCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

                //if ($selectCarpetaJudicial == '') throw new Exception('no se encontro ninguna carpeta de referencia');

            }


        } else if ($cveTipoJuzgado == 2) {
            //si el tipo de juzgado es de juicio (2) buscamos carpetas con tipo tipo de carpeta = 3 (causa de juicio)
            $carpetaJudicialDto->setCveTipoCarpeta(2);
            $selectCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

        } else if ($cveTipoJuzgado == 3) {
            //si el tipo de juzgado es de ejecucion (3) buscamos en carpetas con tipo de carpeta = 5 (expediente)
            $carpetaJudicialDto->setCveTipoCarpeta(5);
            $selectCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

        } else if ($cveTipoJuzgado == 4) {
            //si el tipo de juzgado es de tribunal (4) buscamos en carpetas con tipo de carpeta = 4 (causa de tribunal)
            $carpetaJudicialDto->setCveTipoCarpeta(4);
            $selectCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

        }

        /*
         *
         */

        return $selectCarpetaJudicial;

    }

    /**
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     */
    public function relacionarImpOfeDel($idSolicitudAudiencia, $proveedor = null)
    {

        //consulta imputados de la solicitud de audiencia guardar

        $imputadosSolicitudesDao = new ImputadossolicitudesDAO();
        $imputadosSolicitudesDto = new ImputadossolicitudesDTO();

        $imputadosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $imputadosSolicitudesDto->setActivo('S');

        $selectImputadosSolicitud = $imputadosSolicitudesDao->selectImputadossolicitudes($imputadosSolicitudesDto, '', $proveedor);

        // termina de consultar los imputados de la solicitud especificada


        //si tiene algun imputado se consultan los ofendidos
        if ($selectImputadosSolicitud != '') {

            /*
             * se consultan todos los ofendidos de la solicitud especificada para proceder con la relacion
             */
            $ofendidosSolicitudesDao = new OfendidossolicitudesDAO();
            $ofendidosSolicitudesDto = new OfendidossolicitudesDTO();

            $ofendidosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            $ofendidosSolicitudesDto->setActivo('S');

            $selectOfendidoSolicitud = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto, '', $proveedor);

            /*
             * se terminan de consultar los ofendidos a ver si se continua con la relacion de impofedel
             */

            if ($selectOfendidoSolicitud != '') {

                /*
                 * consulta los delitos de la solicitud para proceder con la relacion impofedel
                 */
                $delitosSolicitudesDao = new DelitossolicitudesDAO();
                $delitosSolicitudesDto = new DelitossolicitudesDTO();

                $delitosSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                $delitosSolicitudesDto->setActivo('S');

                $selectDelitosSolicitud = $delitosSolicitudesDao->selectDelitossolicitudes($delitosSolicitudesDto, '', $proveedor);
                /*
                 * termina de consultar los delitos de la solicitud
                 */

                if ($selectDelitosSolicitud != '') {


                    /*
                     * comienza el proceso de relacion de los imputados, ofendidos y delitos.
                     */

                    $impOfeDelSolicitudesDao = new ImpofedelsolicitudesDAO();
                    $impOfeDelSolicitudesDto = new ImpofedelsolicitudesDTO();

                    foreach ($selectImputadosSolicitud as $imputadoSolicitud) {

                        foreach ($selectOfendidoSolicitud as $ofendidoSolicitud) {

                            foreach ($selectDelitosSolicitud as $delitoSolicitud) {

                                $impOfeDelSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                                $impOfeDelSolicitudesDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                                $impOfeDelSolicitudesDto->setIdOfendidoSolicitud($ofendidoSolicitud->getIdOfendidoSolicitud());
                                $impOfeDelSolicitudesDto->setIdDelitoSolicitud($delitoSolicitud->getIdDelitoSolicitud());
                                $impOfeDelSolicitudesDto->setCveModalidad(7);
                                $impOfeDelSolicitudesDto->setCveComision(4);
                                $impOfeDelSolicitudesDto->setCveConcurso(4);
                                $impOfeDelSolicitudesDto->setCveClasificacionDelitoOrden(5);
                                $impOfeDelSolicitudesDto->setCveElementoComision(6);
                                $impOfeDelSolicitudesDto->setCveClasificacionDelito(4);
                                $impOfeDelSolicitudesDto->setCveFormaAccion(4);
                                $impOfeDelSolicitudesDto->setCveConsumacion(4);
                                $impOfeDelSolicitudesDto->setCveMunicipio('');
                                $impOfeDelSolicitudesDto->setCveEntidad('');
                                $impOfeDelSolicitudesDto->setCveGradoParticipacion(10);
                                $impOfeDelSolicitudesDto->setCveRelacionImpOfe(10);
                                $impOfeDelSolicitudesDto->setCveTerminacion(1); // observacion: radicado por defecto
                                $impOfeDelSolicitudesDto->setActivo("S");
                                $impOfeDelSolicitudesDto->setFechaDelito('0000-00-00 00:00:00');
                                $impOfeDelSolicitudesDto->setDireccion('');
                                $impOfeDelSolicitudesDto->setColonia('');
                                $impOfeDelSolicitudesDto->setNumInterior('');
                                $impOfeDelSolicitudesDto->setNumExterior('');
                                $impOfeDelSolicitudesDto->setCp('');

                                /*
                                 * insertamos la impofedelrelacion
                                 */

                                $guardaImpOfeDelRelacion = $impOfeDelSolicitudesDao->insertImpofedelsolicitudes($impOfeDelSolicitudesDto, $proveedor);

                                if ($guardaImpOfeDelRelacion == '') throw new Exception('No se pudo guardar alguna relación, intenta nuevamente');

                            }

                        }

                    }


                    /*
                     * termina proceso para relacion de los imputados, ofendidos y delitos.
                     */


                }


            }

        }

    }


    /*
     * metodos de equivalencias de campos
     */

    /**
     * @param $cveGenero
     * @return int
     */
    public function getCveGenero($cveGenero)
    {

        if ($cveGenero == '' || $cveGenero == 0) $cveGenero = 3;

        return $cveGenero;

    }

    /**
     * @param $detenido
     * @return string
     */
    public function getDetenido($detenido)
    {
        if ($detenido == '') $detenido = 'N';

        return $detenido;
    }

    /**
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
}

/*
$tocaClass = new TocaElectronicoService();

$data = [
    'numero' => 1,
    'anio'   => '2014',
    'sala'   => '10168'
];


$cveCatAudiencia = 95;

$response = $tocaClass->consultaToca($cveCatAudiencia, $data);

echo "<pre>";
print_r($response);
*/