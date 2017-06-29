<?php

/*
 * importar contadores controller para obtener numero año
 */
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");

/*
 * importar juzgados dto y dao
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

/*
 * dao y dto de audiencias
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

/*
 * aperturas juidico dao dto
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/aperturasjuicio/AperturasjuicioDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/aperturasjuicio/AperturasjuicioDTO.Class.php");

/*
 * Impoirtar archivos refentes a carpetas judiciales
 */


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");
//de los imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputadoscarpetas/TutoresimputadoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogascarpetas/ImputadosdrogascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogascarpetas/ImputadosdrogascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");
//de los ofnedidos
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
 * de los apelantes
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantessolicitudes/ApelantessolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantessolicitudes/ApelantessolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantescarpetas/ApelantescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantescarpetas/ApelantescarpetasDAO.Class.php");

/*
 * importar archivos referentes a la solicitud de audiencia
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelsolicitudes/ImpofedelsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelsolicitudes/ImpofedelsolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitossolicitudes/DelitossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");
//de los imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosimputadossolicitudes/TelefonosimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresimputados/TutoresimputadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresimputados/TutoresimputadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosdrogas/ImputadosdrogasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosdrogas/ImputadosdrogasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDAO.Class.php");
//de los ofendidos
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/domiciliosofendidossolicitudes/DomiciliosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidos/TutoresofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidos/TutoresofendidosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDAO.Class.php");

//de las relaciones
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidos/EfectosofendidosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/efectosofendidoscarpetas/EfectosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciadegenerocarpetas/ViolenciadegenerocarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonascarpetas/TrataspersonascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualescarpetas/SexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexualesconductascarpetas/SexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductas/DetallessexualesconductasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductas/DetallessexualesconductasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

/*
 * para actualizar reclusos con el id de imputado carpeta generado
 */
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/reclusos/ReclusosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/reclusos/ReclusosDAO.Class.php");

/*
 * logger
 */
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

class CarpetasjudicialesService {

    private $proveedor;
    private $relacionReclusos = [];

    /**
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @param string $reclusosImputados
     * @return array
     */
    public function generarCarpetaDesdeSolicitud($idSolicitudAudiencia, $proveedor = null, $reclusosImputados = '') {
        $beginLog = "/**************************/ ";
        $endLog = " /**************************/";
        $logger = new Logger("/../../logs/", "CarpetasJudicialesService");


        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        try {

            if (is_null($proveedor)) {
                $this->proveedor->execute('BEGIN');
            }


            /*
             * obtenemos la fecha-hora actual desde el servidor sql
             */
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

            /*
             * obtenemos el array (decode del json recibido) de los reclusos imputados relacion
             */
            $logger->w_onError($beginLog . "DATOS RECIBIDOS DE RECLUSOS VARIABLE" . $endLog);
            $logger->w_onError($beginLog . $reclusosImputados . $endLog);


            if ($reclusosImputados != '') {
                $this->relacionReclusos = json_decode($reclusosImputados, true);
                $logger->w_onError($beginLog . "SERIALIZAMOS EL ARRAY RECLUSOS RECIBIDOS = " . serialize($this->relacionReclusos) . $endLog);
            }

            /*
             * validamos que la solicitud exista
             */
            $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudAudienciaDao = new SolicitudesaudienciasDAO();

            $solicitudAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            $solicitudAudienciaDto->setActivo('S');

            $getSolicitud = $solicitudAudienciaDao->selectSolicitudesaudiencias($solicitudAudienciaDto, '', '', $this->proveedor);

            if ($getSolicitud == '')
                throw new Exception('no se encontro una solicitud de audiencia con el id = ' . $idSolicitudAudiencia);
            /*
             *
             */

            /*
             * si el idreferencia de la solicitud es = a 0 entonces
             * 1.- se revisa la categoria de la audiencia de la solicitud campo(cveCatAudiencia)
             * 2.- si la categoria de la audiencia requiere causa se ingresa causa de control, si no se genera una de auxiliar esto es en la etapa procesal 1=auxiliar y 2=control
             * 3.- despues de copiar toda la informacion se regresa a modificar el idref de la solicitud por el id de la carpeta que se creó
             * 4.- insertar en la tabla antecedescarpetas
             */


            /*
             * se obtiene la categoria de la audiencia
             */
            $cveCatAudienciaSolicitud = $getSolicitud[0]->getCveCatAudiencia();

            $catAudienciasDto = new CataudienciasDTO();
            $catAudienciasDao = new CataudienciasDAO();

            $catAudienciasDto->setCveCatAudiencia($cveCatAudienciaSolicitud);
            $catAudienciasDto->setActivo('S');

            $getCatAudiencias = $catAudienciasDao->selectCataudiencias($catAudienciasDto, '', $this->proveedor);

            /*
             * se guarda la cat de la solicitud audiencia
             */
            $catAudiencia = $getCatAudiencias[0];
            if ($getCatAudiencias == '')
                throw new Exception('no se encontro la categoria de audiencia con id: ' . $cveCatAudienciaSolicitud . ', para obtener la etapa procesal');

            /*
             * obtenemos la etapa procesal de la categoria de la audiencia de la solicitud
             */
            $cveEtapaProcesal = $catAudiencia->getCveEtapaProcesal();

            if ($getSolicitud[0]->getIdReferencia() == 0 || is_null($getSolicitud[0]->getIdReferencia())) {

                /*
                 * validar que la categoria de audiencia tenga forzosamente etapa procesal 1 o 2 si es diferente de 6
                 */
                if ($cveEtapaProcesal > 2 && $cveEtapaProcesal != 6)
                    throw new Exception('la etapa procesal de la categoria de audiencia tiene que ser auxiliar o de control (1 o 2)');

                /*
                 * validar que que el nuc o carpeta inv de la solicitud no exista en otra carpeta judicial
                 */
                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                $carpetaJudicialDao = new CarpetasjudicialesDAO();

                if (!is_null($getSolicitud[0]->getCarpetaInv())) {
                    $carpetaJudicialDto->setCarpetaInv($getSolicitud[0]->getCarpetaInv());
                    $mensaje = 'ya existe una carpeta de investigación con el No: ' . $getSolicitud[0]->getCarpetaInv();
                } else if (!is_null($getSolicitud[0]->getNuc())) {
                    $carpetaJudicialDto->setNuc($getSolicitud[0]->getNuc());
                    $mensaje = 'ya existe una carpeta con el nuc: ' . $getSolicitud[0]->getNuc();
                } else {
                    if ($cveEtapaProcesal != 6) {
                        throw new Exception('no se encontro el nuc o la carpeta de inv.');
                    }
                }

                if ($cveEtapaProcesal != 6) {

                    $carpetaJudicialDto->setActivo('S');

                    $getCarpetaJudicialByNucOrCarpetaInv = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                    if ($getCarpetaJudicialByNucOrCarpetaInv != '')
                        throw new Exception($mensaje);
                }

                /*
                 * termina validar nuc o carpeta investigacion
                 */


                /*
                 * si requiere causa (campo causa == S) se genera de control
                 * * etapa procesal control = 2
                 * si no requiere causa (capo causa == N) se genera auxiliar
                 * etapa procesal auxiliar  = 1
                 */
                if ($cveEtapaProcesal == '6') {
                    $cveTipoCarpeta = 6;
                    $textTipoCarpeta = 'de toca';
                } else {
                    if ($catAudiencia->getCausa() == 'S') {
                        $cveTipoCarpeta = 2;
                        $textTipoCarpeta = 'de control';
                    } else if ($catAudiencia->getCausa() == 'N') {
                        $textTipoCarpeta = 'auxiliar';
                        $cveTipoCarpeta = 1;
                    } else {
                        throw new Exception('no se cuenta con el valor del campo causa de la solicitud para saber si requiere o no causa');
                    }
                }

                /*
                 * termina obtener etapa procesal dependiendo de la categoria de la audiencia
                 */

                /*
                 * obtenemos la ponderacion y la conclucion
                 */
                $cveConclucion = $this->getConclucion($getSolicitud);
                $ponderacion = $this->getPonderacion($idSolicitudAudiencia, $this->proveedor);

                /*
                 * obtenemos el cveJuzgado
                 */

                $tipoJuzgado = 1;

                if ($cveEtapaProcesal == 6) {
                    $tipoJuzgado = 5;
                }

                $getJuzgado = $this->getJuzgado($getSolicitud[0]->getCveJuzgado(), $tipoJuzgado, $this->proveedor);
                if ($getJuzgado['estatus'] == 'error')
                    throw new Exception($getJuzgado['mensaje']);
                $cveJuzgado = $getJuzgado['data'];

                /*
                 * obtenemos contador
                 */

                if ($tipoJuzgado === 5) {
                    $getSolicitud[0]->setNumero($getSolicitud[0]->getNumero());
                    $getSolicitud[0]->setAnio($getSolicitud[0]->getAnio());
                } else {
                    $contadorDto = new ContadoresDTO();
                    $contadorDto->setCveTipoCarpeta($cveTipoCarpeta);
                    $contadorDto->setAnio(date('Y'));
                    $contadorDto->setCveJuzgado($cveJuzgado);
                    $contadorController = new ContadoresController();

                    $getContador = $contadorController->getContador($contadorDto, $this->proveedor);


                    if ($getContador == '')
                        throw new Exception('no se pudo generar el contador');

                    $getSolicitud[0]->setNumero($getContador[0]->getNumero());
                    $getSolicitud[0]->setAnio($getContador[0]->getAnio());
                }

                /*
                 * creamos la carpeta judicial
                 */
                $crearCarpetaJudicial = $this->crearCarpetaJudicial($getSolicitud, $cveEtapaProcesal, $cveTipoCarpeta, $cveConclucion, $ponderacion, $cveJuzgado, $this->proveedor);
                if ($crearCarpetaJudicial['estatus'] == 'error')
                    throw new Exception($crearCarpetaJudicial['mensaje']);

                $idCarpetaJudicial = $crearCarpetaJudicial['data']->getIdCarpetaJudicial();

                /*
                 * si la carpeta se creó correctamente se copian desde la solicitud
                 * imputados
                 * ofendidos
                 * delitos
                 * relaciones (violencia de genero en caso de que exista)
                 */
                $copiarImputados = $this->CopiarImputados($idSolicitudAudiencia, $idCarpetaJudicial, $cveEtapaProcesal, $this->proveedor);
                $copiarOfendidos = $this->CopiarOfendidos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                $copiarDelitos = $this->CopiarDelitos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                $copiarRelacion = $this->CopiarRelacion($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                $copiarApelantes = $this->CopiarApelantes($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);

                if ($copiarImputados['estatus'] == 'error')
                    throw new Exception($copiarImputados['mensaje']);
                if ($copiarOfendidos['estatus'] == 'error')
                    throw new Exception($copiarOfendidos['mensaje']);
                if ($copiarDelitos['estatus'] == 'error')
                    throw new Exception($copiarDelitos['mensaje']);
                if ($copiarRelacion['estatus'] == 'error')
                    throw new Exception($copiarRelacion['mensaje']);
                if ($copiarApelantes['estatus'] == 'error')
                    throw new Exception($copiarApelantes['mensaje']);

                /*
                 * se inserta en antecedescarpetas
                 */
                $insertAntecedesCarpetas = $this->creaAntecedesCarpetas(0, $idCarpetaJudicial, $crearCarpetaJudicial, $this->proveedor);
                if ($insertAntecedesCarpetas['estatus'] == 'error')
                    throw new Exception($insertAntecedesCarpetas['mensaje']);

                /*
                 * editamos la solicitud de audiencia idReferencia, numero, anio, juzgado
                 */
                $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $crearCarpetaJudicial['data'], $this->proveedor);
                if ($editarSolicitudAudiencia['estatus'] == 'error')
                    throw new Exception($editarSolicitudAudiencia['mensaje']);

                $estatus = 'genero carpeta';
                $mensaje = 'se genero una carpeta ' . $textTipoCarpeta;
                $data = $editarSolicitudAudiencia['data'];
            } else {
                /*
                 * guardamos el id referencia de la solicitud
                 */
                $idReferencia = $getSolicitud[0]->getIdReferencia();

                /*
                 * verificamos su etapa procesal de la categoria de la audiencia
                 */
                $cveEtapaProcesal = $catAudiencia->getCveEtapaProcesal();


                /*
                 * verificamos que no se pueda pasar de una etapa procesal auxiliar a juicio
                 * forzozamente se tiene que encontrar en una de control para poder pasar a juicio o ejecucion
                 * preguntar si para toca tiene que existir una carpeta de control  para pasar a toca (inpugnación)?
                 */
                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                $carpetaJudicialDao = new CarpetasjudicialesDAO();

                $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                $carpetaJudicialDto->setActivo('S');

                $getCarpetaJudicialById = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                if ($getCarpetaJudicialById != '') {

                    $ultimaEtapaProcesal = $getCarpetaJudicialById[0]->getCveEtapaProcesal();
                    $ultimoTipoCarpeta = $getCarpetaJudicialById[0]->getCveTipoCarpeta();

                    /*
                     * si la etapa procesal de la carpeta judicial de referencia es 1 y la nueva es mayor a 2
                     * entonces no se puede continuar
                     * el tipo de carpeta debe de ser 2 (control) para poder cambiar a juicio o ejecución
                     */

                    if (($ultimoTipoCarpeta == 1 && $cveEtapaProcesal > 2)) {
                        throw new Exception('la etapa procesal de la carpeta judicial es auxiliar, debe existir una carpeta de control para poder pasar a juicio o ejecución.');
                    }

                    /*
                     * validar que no se pueda pasar a etapa 2 si no existe de control pero por etapa procesal
                     */
                    /* if ($ultimaEtapaProcesal == 1 && $cveEtapaProcesal > 2) {
                      throw new Exception('la etapa procesal de la carpeta judicial es auxiliar, debe existir una carpeta de control para poder pasar a juicio o ejecución.');
                      } */

                    /*
                     * si la nueva etapa procesal es menor a la ultima no se puede continuar
                     */
                    if (($ultimaEtapaProcesal > 2) && ($cveEtapaProcesal < $ultimaEtapaProcesal)) {
                        throw new Exception('no se puede regresar a una etapa procesal anterior');
                    }
                } else {
                    throw new Exception('no se encontro la carpeta judicial con id : ' . $idReferencia);
                }


                /*
                 * si la etapa procesal anterior es = 1 y la nueva es igual a uno pero requiere causa, entonces se genera una nueva carpeta de control
                 */

                //si la nueva etapa es igual a 1
                if ($cveEtapaProcesal == 1) {

                    //si la ultima carpeta es = 1
                    if ($ultimoTipoCarpeta == 1) {

                        //verificamos si la nueva requiere causa
                        //si requiere causa creamos una nueva carpeta de tipo carpeta = control (2)
                        if ($catAudiencia->getCausa() == 'S') {

                            $cveTipoCarpeta = 2;

                            /*
                             * obtenemos la ponderacion y la conclucion
                             */
                            $cveConclucion = $this->getConclucion($getSolicitud);
                            $ponderacion = $this->getPonderacion($idSolicitudAudiencia, $this->proveedor);

                            /*
                             * obtenemos el cveJuzgado
                             */
                            $getJuzgado = $this->getJuzgado($getSolicitud[0]->getCveJuzgado(), 1, $this->proveedor);
                            if ($getJuzgado['estatus'] == 'error')
                                throw new Exception($getJuzgado['mensaje']);
                            $cveJuzgado = $getJuzgado['data'];

                            /*
                             * obtenemos contador
                             */
                            if ($cveTipoCarpeta === 6) {
                                $getSolicitud[0]->setNumero($getSolicitud[0]->getNumero());
                                $getSolicitud[0]->setAnio($getSolicitud[0]->getAnio());
                            } else {
                                $contadorDto = new ContadoresDTO();
                                $contadorDto->setCveTipoCarpeta($cveTipoCarpeta);
                                $contadorDto->setAnio(date('Y'));
                                $contadorDto->setCveJuzgado($cveJuzgado);
                                $contadorController = new ContadoresController();

                                $getContador = $contadorController->getContador($contadorDto, $this->proveedor);

                                if ($getContador == '')
                                    throw new Exception('no se pudo generar el contador');

                                $getSolicitud[0]->setNumero($getContador[0]->getNumero());
                                $getSolicitud[0]->setAnio($getContador[0]->getAnio());
                            }
                            /*
                             * creamos la carpeta judicial
                             */
                            $crearCarpetaJudicial = $this->crearCarpetaJudicial($getSolicitud, $cveEtapaProcesal, $cveTipoCarpeta, $cveConclucion, $ponderacion, $cveJuzgado, $this->proveedor);
                            if ($crearCarpetaJudicial['estatus'] == 'error')
                                throw new Exception($crearCarpetaJudicial['mensaje']);

                            $idCarpetaJudicial = $crearCarpetaJudicial['data']->getIdCarpetaJudicial();

                            /*
                             * si la carpeta se creó correctamente se copian desde la solicitud
                             * imputados
                             * ofendidos
                             * delitos
                             * relaciones (violencia de genero en caso de que exista)
                             */
                            $copiarImputados = $this->CopiarImputados($idSolicitudAudiencia, $idCarpetaJudicial, $cveEtapaProcesal, $this->proveedor);
                            $copiarOfendidos = $this->CopiarOfendidos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                            $copiarDelitos = $this->CopiarDelitos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                            $copiarRelacion = $this->CopiarRelacion($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);

                            if ($copiarImputados['estatus'] == 'error')
                                throw new Exception($copiarImputados['mensaje']);
                            if ($copiarOfendidos['estatus'] == 'error')
                                throw new Exception($copiarOfendidos['mensaje']);
                            if ($copiarDelitos['estatus'] == 'error')
                                throw new Exception($copiarDelitos['mensaje']);
                            if ($copiarRelacion['estatus'] == 'error')
                                throw new Exception($copiarRelacion['mensaje']);

                            /*
                             * se modifica la fecha de radicacion de la carpeta anterior
                             */
                            $carpetaJudicialDto = new CarpetasjudicialesDTO();
                            $carpetaJudicialDao = new CarpetasjudicialesDAO();

                            $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                            $carpetaJudicialDto->setActivo('S');

                            $getCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                            if ($getCarpetaJudicial != '') {

                                $carpetaJudicialDto->setFechaRadicacion($fechaActual);
                                $updateCarpeta = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);
                                if ($updateCarpeta == '')
                                    throw new Exception('no se pudo modificar la fecha de radicación de la carpeta anterior con id : ' . $idReferencia);
                            }

                            /*
                             * insertar en antecedes carpetas
                             */
                            $insertAntecedesCarpetas = $this->creaAntecedesCarpetas($idReferencia, $idCarpetaJudicial, $crearCarpetaJudicial, $this->proveedor);
                            if ($insertAntecedesCarpetas['estatus'] == 'error')
                                throw new Exception($insertAntecedesCarpetas['mensaje']);
                            /*
                             * editamos la solicitud de audiencia idReferencia, numero, anio, juzgado
                             */
                            $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $crearCarpetaJudicial['data'], $this->proveedor);
                            if ($editarSolicitudAudiencia['estatus'] == 'error')
                                throw new Exception($editarSolicitudAudiencia['mensaje']);


                            /*
                             * modificamos cveEtapa procesal de los imputados carpeta de la solicitud
                             * intentamos cerrar carpeta si todos sus imputados se encuentran en una etapa posterior
                             */
                            $this->modificarEtapaProcesalImputadosCerrarCarpeta($cveEtapaProcesal, $getSolicitud[0]->getIdSolicitudAudiencia(), $this->proveedor);

                            $estatus = 'genero carpeta';
                            $mensaje = 'se genero una carpeta de control';
                            $data = $editarSolicitudAudiencia['data'];
                        } else { //si no requiere causa regresamos igual la soliciutd
                            $estatus = 'igual';
                            $mensaje = 'la etapa procesal es igual a la última';
                            $data = $getSolicitud;
                        }
                    } else { //si es tipo de carpeta = 2 (de control) regresamos carpeta igual
                        $estatus = 'igual';
                        $mensaje = 'la etapa procesal es igual a la última y ya se generó una carpeta de control';
                        $data = $getSolicitud;
                    }
                } else if ($cveEtapaProcesal == 2) {

                    if ($ultimoTipoCarpeta == 1) {

                        //verificamos si la nueva requiere causa
                        //si requiere causa creamos una nueva carpeta de tipo carpeta = control (2)
                        if ($catAudiencia->getCausa() == 'S') {

                            $cveTipoCarpeta = 2;

                            /*
                             * obtenemos la ponderacion y la conclucion
                             */
                            $cveConclucion = $this->getConclucion($getSolicitud);
                            $ponderacion = $this->getPonderacion($idSolicitudAudiencia, $this->proveedor);

                            /*
                             * obtenemos el cveJuzgado
                             */
                            $getJuzgado = $this->getJuzgado($getSolicitud[0]->getCveJuzgado(), 1, $this->proveedor);
                            if ($getJuzgado['estatus'] == 'error')
                                throw new Exception($getJuzgado['mensaje']);
                            $cveJuzgado = $getJuzgado['data'];

                            /*
                             * obtenemos contador
                             */
                            if ($cveTipoCarpeta === 6) {
                                $getSolicitud[0]->setNumero($getSolicitud[0]->getNumero());
                                $getSolicitud[0]->setAnio($getSolicitud[0]->getAnio());
                            } else {
                                $contadorDto = new ContadoresDTO();
                                $contadorDto->setCveTipoCarpeta($cveTipoCarpeta);
                                $contadorDto->setAnio(date('Y'));
                                $contadorDto->setCveJuzgado($cveJuzgado);
                                $contadorController = new ContadoresController();

                                $getContador = $contadorController->getContador($contadorDto, $this->proveedor);

                                if ($getContador == '')
                                    throw new Exception('no se pudo generar el contador');

                                $getSolicitud[0]->setNumero($getContador[0]->getNumero());
                                $getSolicitud[0]->setAnio($getContador[0]->getAnio());
                            }
                            /*
                             * creamos la carpeta judicial
                             */
                            $crearCarpetaJudicial = $this->crearCarpetaJudicial($getSolicitud, $cveEtapaProcesal, $cveTipoCarpeta, $cveConclucion, $ponderacion, $cveJuzgado, $this->proveedor);
                            if ($crearCarpetaJudicial['estatus'] == 'error')
                                throw new Exception($crearCarpetaJudicial['mensaje']);

                            $idCarpetaJudicial = $crearCarpetaJudicial['data']->getIdCarpetaJudicial();

                            /*
                             * si la carpeta se creó correctamente se copian desde la solicitud
                             * imputados
                             * ofendidos
                             * delitos
                             * relaciones (violencia de genero en caso de que exista)
                             */
                            $copiarImputados = $this->CopiarImputados($idSolicitudAudiencia, $idCarpetaJudicial, $cveEtapaProcesal, $this->proveedor);
                            $copiarOfendidos = $this->CopiarOfendidos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                            $copiarDelitos = $this->CopiarDelitos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                            $copiarRelacion = $this->CopiarRelacion($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);

                            if ($copiarImputados['estatus'] == 'error')
                                throw new Exception($copiarImputados['mensaje']);
                            if ($copiarOfendidos['estatus'] == 'error')
                                throw new Exception($copiarOfendidos['mensaje']);
                            if ($copiarDelitos['estatus'] == 'error')
                                throw new Exception($copiarDelitos['mensaje']);
                            if ($copiarRelacion['estatus'] == 'error')
                                throw new Exception($copiarRelacion['mensaje']);

                            /*
                             * se modifica la fecha de radicacion de la carpeta anterior
                             */
                            $carpetaJudicialDto = new CarpetasjudicialesDTO();
                            $carpetaJudicialDao = new CarpetasjudicialesDAO();

                            $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                            $carpetaJudicialDto->setActivo('S');

                            $getCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                            if ($getCarpetaJudicial != '') {

                                $carpetaJudicialDto->setFechaRadicacion($fechaActual);
                                $updateCarpeta = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);
                                if ($updateCarpeta == '')
                                    throw new Exception('no se pudo modificar la fecha de radicación de la carpeta anterior con id : ' . $idReferencia);
                            }

                            /*
                             * insertar en antecedes carpetas
                             */
                            $insertAntecedesCarpetas = $this->creaAntecedesCarpetas($idReferencia, $idCarpetaJudicial, $crearCarpetaJudicial, $this->proveedor);
                            if ($insertAntecedesCarpetas['estatus'] == 'error')
                                throw new Exception($insertAntecedesCarpetas['mensaje']);
                            /*
                             * editamos la solicitud de audiencia idReferencia, numero, anio, juzgado
                             */
                            $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $crearCarpetaJudicial['data'], $this->proveedor);
                            if ($editarSolicitudAudiencia['estatus'] == 'error')
                                throw new Exception($editarSolicitudAudiencia['mensaje']);

                            /*
                             * modificamos cveEtapa procesal de los imputados carpeta de la solicitud
                             * intentamos cerrar carpeta si todos sus imputados se encuentran en una etapa posterior
                             */
                            $this->modificarEtapaProcesalImputadosCerrarCarpeta($cveEtapaProcesal, $getSolicitud[0]->getIdSolicitudAudiencia(), $this->proveedor);


                            $estatus = 'genero carpeta';
                            $mensaje = 'se genero una carpeta de control';
                            $data = $editarSolicitudAudiencia['data'];
                        } else { //si no requiere causa la nueva categoria de la audiencia de la solicitud
                            //verificamos si hay cambio de etapa procesal
                            if ($ultimaEtapaProcesal == 1) { //si la etapa procesal anterior era = 1, entonces se edita la etapa procesal por la nueva que es = 2
                                //se hace la modificacion de la etapa procesal de la carpeta
                                $carpetaJudicialDto = new CarpetasjudicialesDTO();
                                $carpetaJudicialDao = new CarpetasjudicialesDAO();

                                $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                                $carpetaJudicialDto->setCveEtapaProcesal(2);
                                $carpetaJudicialDto->setActivo('S');

                                $updateEtapaCarpetaJudicial = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

                                if ($updateEtapaCarpetaJudicial == '')
                                    throw new Exception('no se pudo editar la etapa procesal de la carpeta judicial: ' . $idReferencia);

                                /*
                                 * editamos la solicitud de audiencia idReferencia, numero, anio, juzgado
                                 */
                                $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $updateEtapaCarpetaJudicial[0], $this->proveedor);
                                if ($editarSolicitudAudiencia['estatus'] == 'error')
                                    throw new Exception($editarSolicitudAudiencia['mensaje']);

                                $estatus = 'cambio etapa';
                                $mensaje = 'se cambió la etapa procesal de la carpeta id: ' . $idReferencia . ' de etapa 1 a etapa 2';
                                $data = $editarSolicitudAudiencia['data'];
                            } else { //si no hay cambio de etapa procesal se regresa igual la solicitud
                                $estatus = 'igual';
                                $mensaje = 'la etapa procesal es igual a la última';
                                $data = $getSolicitud;
                            }
                        }
                    } else { //si el tipo de carpeta ya era igual a 2
                        //solo se verifica si hay cambio de etapa procesal
                        //verificamos si hay cambio de etapa procesal
                        if ($ultimaEtapaProcesal == 1) { //si la etapa procesal anterior era = 1, entonces se edita la etapa procesal por la nueva que es = 2
                            //se hace la modificacion de la etapa procesal de la carpeta
                            $carpetaJudicialDto = new CarpetasjudicialesDTO();
                            $carpetaJudicialDao = new CarpetasjudicialesDAO();

                            $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                            $carpetaJudicialDto->setCveEtapaProcesal(2);
                            $carpetaJudicialDto->setActivo('S');

                            $updateEtapaCarpetaJudicial = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);

                            if ($updateEtapaCarpetaJudicial == '')
                                throw new Exception('no se pudo editar la etapa procesal de la carpeta judicial: ' . $idReferencia);


                            $getSolicitud[0]->setCveEtapaProcesal(2);

                            /*
                             * editamos la solicitud de audiencia y etapa procesal idReferencia, numero, anio, juzgado
                             */
                            $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $updateEtapaCarpetaJudicial[0], $this->proveedor);
                            if ($editarSolicitudAudiencia['estatus'] == 'error')
                                throw new Exception($editarSolicitudAudiencia['mensaje']);

                            $estatus = 'cambio etapa';
                            $mensaje = 'se cambió la etapa procesal de la carpeta id: ' . $idReferencia . ' de etapa 1 a etapa 2';
                            $data = $editarSolicitudAudiencia['data'];
                        } else { //si no hay cambio de etapa procesal se regresa igual la solicitud
                            $estatus = 'igual';
                            $mensaje = 'la etapa procesal es igual a la última';
                            $data = $getSolicitud;
                        }
                    }


                    //si la nueva etapa es igual a 3
                } else if ($cveEtapaProcesal == 3) {

                    //si la etapa procesal nueva es igual a la de referencia
                    if ($ultimaEtapaProcesal == 3) {

                        $estatus = 'igual';
                        $mensaje = 'la etapa procesal es igual a la última';
                        $data = $getSolicitud;

                        //si no se crea una nueva carpeta judicial con la etapa procesal 3
                    } else {
                        /*
                         * verificamos si la categoria de la audiencia requiere tribunal
                         */
                        if ($getSolicitud[0]->getTribunal() == 'S') {
                            $cveTipoCarpeta = 4;
                            $tipoJuzgado = 4;
                            $textTipoCarpeta = 'de tribunal';
                        } else {
                            $cveTipoCarpeta = 3;
                            $tipoJuzgado = 2;
                            $textTipoCarpeta = 'de juicio';
                        }


                        $imputadoSolicitudDto = new ImputadossolicitudesDTO();
                        $imputadoSolicitudDao = new ImputadossolicitudesDAO();

                        $imputadoSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
                        $imputadoSolicitudDto->setActivo('S');

                        $getImputados = $imputadoSolicitudDao->selectImputadossolicitudes($imputadoSolicitudDto, '', $this->proveedor);

                        if ($getImputados == '')
                            throw new Exception('no se encontraron imputados activos en el id solicitud : ' . $idSolicitudAudiencia);


                        /*
                         * verificamos que para los imputados que van a pasar a juicio tengan un auto a juicio oral
                         * - si no tienen auto se detiene el proceso de creación de carpeta judicial
                         */

                        $imputadosSinAperturaJuicio = '';
                        $errorPorFaltaAperturaJuicio = false;

                        foreach ($getImputados as $imputadoSolicitud) {

                            $idImputadoCarpeta = $imputadoSolicitud->getIdImputadoCarpeta();

                            $aperturaJuicioDto = new AperturasjuicioDTO();
                            $aperturaJuicioDao = new AperturasjuicioDAO();

                            $aperturaJuicioDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $aperturaJuicioDto->setActivo('S');

                            $responseAperturaJuicio = $aperturaJuicioDao->selectAperturasjuicio($aperturaJuicioDto, '', $this->proveedor);

                            if ($responseAperturaJuicio == '') {

                                $cveTipoPersonaImputadoSolicitud = $imputadoSolicitud->getCveTipoPersona();

                                $nombreImputado = '';

                                if ($cveTipoPersonaImputadoSolicitud == 1) {
                                    $nombreImputado = $imputadoSolicitud->getNombre() . ' ' . $imputadoSolicitud->getPaterno() . ' ' . $imputadoSolicitud->getMaterno();
                                } else if ($cveTipoPersonaImputadoSolicitud == 2 || $cveTipoPersonaImputadoSolicitud == 3) {
                                    $nombreImputado = $imputadoSolicitud->getNombreMoral();
                                }

                                $errorPorFaltaAperturaJuicio = true;
                                $imputadosSinAperturaJuicio .= "Imputado: " . $nombreImputado . "<br>";
                            }
                        }

                        if ($errorPorFaltaAperturaJuicio) {
                            throw new Exception("Él o los siguientes imputados no tienen un auto de apertura a juicio oral" . "<br>" . $imputadosSinAperturaJuicio);
                        }
                        /*
                         * termina verificar si alguno de los imputados en la solicitud no cuenta con auto de apertura a juicio oral
                         * esto es para el cambio a etapa procesal 3 (juicio)
                         */


                        /*
                         * verificamos que ningun imputado esté en la etapa procesal y tipo de carpeta (juicio o tribunal) a la que se quiere mover
                         */
                        foreach ($getImputados as $imputadoSolicitud) {
                            $idImputadoCarpeta = $imputadoSolicitud->getIdImputadoCarpeta();

                            $imputadosCarpetasDto = new ImputadoscarpetasDTO();
                            $imputadosCarpetasDao = new ImputadoscarpetasDAO();

                            $imputadosCarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $imputadosCarpetasDto->setActivo('S');

                            $getImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, '', $this->proveedor);

                            if ($getImputadosCarpetas != '') {

                                foreach ($getImputadosCarpetas as $imputadoCarpeta) {

                                    if (($imputadoCarpeta->getCveEtapaProcesal() == $cveEtapaProcesal)) {

                                        $carpetaJudicialDao = new CarpetasjudicialesDAO();
                                        $carpetaJudicialDto = new CarpetasjudicialesDTO();

                                        $carpetaJudicialDto->setIdCarpetaJudicial($imputadoCarpeta->getIdCarpetaJudicial());
                                        $carpetaJudicialDto->setActivo('S');

                                        $getCarpetaJudicialDto = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                                        if ($getCarpetaJudicialDto == '')
                                            throw new Exception('no se encontro la carpeta judicial con id: ' . $imputadoCarpeta->getIdCarpetaJudicial());

                                        $tipoCarpetaImputado = $getCarpetaJudicialDto[0]->getCveTipoCarpeta();

                                        if ($tipoCarpetaImputado == $cveTipoCarpeta) {
                                            throw new Exception('el imputado con id: ' . $imputadoSolicitud->getIdImputadoSolicitud() . ', de la solicitud con id :' . $idSolicitudAudiencia . ' ya se encuentra en la etapa procesal No. ' . $cveEtapaProcesal . ' y tipo de carpeta: ' . $textTipoCarpeta);
                                        }
                                    }
                                }
                            }
                        }

                        /*
                         * termina validar que ningun imputado se encuentre en la etapa a la que se quiere generar la carpeta
                         */


                        /*
                         * obtenemos la ponderacion y la conclución
                         */
                        $cveConclucion = $this->getConclucion($getSolicitud);
                        $ponderacion = $this->getPonderacion($idSolicitudAudiencia, $this->proveedor);

                        /*
                         * obtenemos el cveJuzgado
                         */
                        $getJuzgado = $this->getJuzgado($getSolicitud[0]->getCveJuzgado(), $tipoJuzgado, $this->proveedor);
                        if ($getJuzgado['estatus'] == 'error')
                            throw new Exception($getJuzgado['mensaje']);
                        $cveJuzgado = $getJuzgado['data'];

                        /*
                         * obtenemos contador
                         */
                        if ($cveTipoCarpeta === 6) {
                            $getSolicitud[0]->setNumero($getSolicitud[0]->getNumero());
                            $getSolicitud[0]->setAnio($getSolicitud[0]->getAnio());
                        } else {
                            $contadorDto = new ContadoresDTO();
                            $contadorDto->setCveTipoCarpeta($cveTipoCarpeta);
                            $contadorDto->setAnio(date('Y'));
                            $contadorDto->setCveJuzgado($cveJuzgado);
                            $contadorController = new ContadoresController();

                            $getContador = $contadorController->getContador($contadorDto, $this->proveedor);

                            if ($getContador == '')
                                throw new Exception('no se pudo generar el contador');

                            $getSolicitud[0]->setNumero($getContador[0]->getNumero());
                            $getSolicitud[0]->setAnio($getContador[0]->getAnio());
                        }
                        /*
                         * creamos la carpeta judicial
                         */
                        $crearCarpetaJudicial = $this->crearCarpetaJudicial($getSolicitud, $cveEtapaProcesal, $cveTipoCarpeta, $cveConclucion, $ponderacion, $cveJuzgado, $this->proveedor);
                        if ($crearCarpetaJudicial['estatus'] == 'error')
                            throw new Exception($crearCarpetaJudicial['mensaje']);

                        $idCarpetaJudicial = $crearCarpetaJudicial['data']->getIdCarpetaJudicial();


                        /*
                         * si la carpeta judicial se creó correctamente se copian imputados, ofendidos, delitos y relaciones
                         */
                        $copiarImputados = $this->CopiarImputados($idSolicitudAudiencia, $idCarpetaJudicial, $cveEtapaProcesal, $this->proveedor);
                        $copiarOfendidos = $this->CopiarOfendidos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                        $copiarDelitos = $this->CopiarDelitos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                        $copiarRelacion = $this->CopiarRelacion($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);

                        if ($copiarImputados['estatus'] == 'error')
                            throw new Exception($copiarImputados['mensaje']);
                        if ($copiarOfendidos['estatus'] == 'error')
                            throw new Exception($copiarOfendidos['mensaje']);
                        if ($copiarDelitos['estatus'] == 'error')
                            throw new Exception($copiarDelitos['mensaje']);
                        if ($copiarRelacion['estatus'] == 'error')
                            throw new Exception($copiarRelacion['mensaje']);

                        /*
                         * se modifica la fecha de radicacion de la carpeta anterior
                         */
                        $carpetaJudicialDto = new CarpetasjudicialesDTO();
                        $carpetaJudicialDao = new CarpetasjudicialesDAO();

                        $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                        $carpetaJudicialDto->setActivo('S');

                        $getCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                        if ($getCarpetaJudicial != '') {

                            $carpetaJudicialDto->setFechaRadicacion($fechaActual);
                            $updateCarpeta = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);
                            if ($updateCarpeta == '')
                                throw new Exception('no se pudo modificar la fecha de radicación de la carpeta anterior con id : ' . $idReferencia);
                        }

                        /*
                         * insertar en antecedes carpetas
                         */
                        $insertAntecedesCarpetas = $this->creaAntecedesCarpetas($idReferencia, $idCarpetaJudicial, $crearCarpetaJudicial, $this->proveedor);
                        if ($insertAntecedesCarpetas['estatus'] == 'error')
                            throw new Exception($insertAntecedesCarpetas['mensaje']);


                        /*
                         * editamos la solicitud de audiencia idReferencia, numero, anio, juzgado
                         */
                        $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $crearCarpetaJudicial['data'], $this->proveedor);
                        if ($editarSolicitudAudiencia['estatus'] == 'error')
                            throw new Exception($editarSolicitudAudiencia['mensaje']);


                        /*
                         * se cierra la carpeta anterior si el número de imputados es igual a la nueva
                         */
                        /* $cerrarCarpetaReferencia = $this->cerrarCarpeta($idReferencia, $idCarpetaJudicial, $this->proveedor);
                          if ($cerrarCarpetaReferencia['estatus'] == 'error') throw new Exception($cerrarCarpetaReferencia['mensaje']);
                         */

                        /*
                         * modificamos cveEtapa procesal de los imputados carpeta de la solicitud
                         * intentamos cerrar carpeta si todos sus imputados se encuentran en una etapa posterior
                         */
                        $this->modificarEtapaProcesalImputadosCerrarCarpeta($cveEtapaProcesal, $getSolicitud[0]->getIdSolicitudAudiencia(), $this->proveedor);


                        $estatus = 'genero carpeta';
                        $mensaje = 'se genero una carpeta ' . $textTipoCarpeta;
                        $data = $editarSolicitudAudiencia['data'];
                    }
                } else if ($cveEtapaProcesal == 4) {
                    //throw new Exception('falta un modulo para procesar esta etapa procesal');
                    $estatus = 'ejecucion';
                    $mensaje = 'Ya se habia generado anteriormente una carpeta de tipo expediente';
                    $data = $getSolicitud;
                } else if ($cveEtapaProcesal == 5) {

                    $estatus = 'procedimientos especiales';
                    $mensaje = 'No generar carpeta por procedimientos especiales';
                    $data = $getSolicitud;
                    //throw new Exception('etapa procesal = ' . $cveEtapaProcesal . ' Procedimientos especiales , falta que hacer con estas etapas procesales');
                } else if ($cveEtapaProcesal == 6) {

                    $cveTipoCarpeta = 6;

                    //si la etapa procesal nueva es igual a la de referencia
                    if ($ultimaEtapaProcesal == 6) {

                        $estatus = 'igual';
                        $mensaje = 'la etapa procesal es igual a la última';
                        $data = $getSolicitud;

                        //si no se crea una nueva carpeta judicial con la etapa procesal 3
                    } else {

                        /*
                         * obtenemos la ponderacion y la conclucion
                         */
                        $cveConclucion = $this->getConclucion($getSolicitud);
                        $ponderacion = $this->getPonderacion($idSolicitudAudiencia, $this->proveedor);

                        /*
                         * obtenemos el cveJuzgado
                         */
                        $getJuzgado = $this->getJuzgado($getSolicitud[0]->getCveJuzgado(), 5, $this->proveedor);
                        if ($getJuzgado['estatus'] == 'error')
                            throw new Exception($getJuzgado['mensaje']);
                        $cveJuzgado = $getJuzgado['data'];

                        /*
                         * obtenemos contador
                         */
                        if ($cveTipoCarpeta === 6) {
                            $getSolicitud[0]->setNumero($getSolicitud[0]->getNumero());
                            $getSolicitud[0]->setAnio($getSolicitud[0]->getAnio());
                        } else {
                            $contadorDto = new ContadoresDTO();
                            $contadorDto->setCveTipoCarpeta($cveTipoCarpeta);
                            $contadorDto->setAnio(date('Y'));
                            $contadorDto->setCveJuzgado($cveJuzgado);
                            $contadorController = new ContadoresController();

                            $getContador = $contadorController->getContador($contadorDto, $this->proveedor);

                            if ($getContador == '')
                                throw new Exception('no se pudo generar el contador');

                            $getSolicitud[0]->setNumero($getContador[0]->getNumero());
                            $getSolicitud[0]->setAnio($getContador[0]->getAnio());
                        }
                        /*
                         * creamos la carpeta judicial
                         */
                        $crearCarpetaJudicial = $this->crearCarpetaJudicial($getSolicitud, $cveEtapaProcesal, $cveTipoCarpeta, $cveConclucion, $ponderacion, $cveJuzgado, $this->proveedor);
                        if ($crearCarpetaJudicial['estatus'] == 'error')
                            throw new Exception($crearCarpetaJudicial['mensaje']);

                        $idCarpetaJudicial = $crearCarpetaJudicial['data']->getIdCarpetaJudicial();

                        /*
                         * si la carpeta se creó correctamente se copian desde la solicitud
                         * imputados
                         * ofendidos
                         * delitos
                         * relaciones (violencia de genero en caso de que exista)
                         */
                        $copiarImputados = $this->CopiarImputados($idSolicitudAudiencia, $idCarpetaJudicial, $cveEtapaProcesal, $this->proveedor);
                        $copiarOfendidos = $this->CopiarOfendidos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                        $copiarDelitos = $this->CopiarDelitos($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                        $copiarRelacion = $this->CopiarRelacion($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);
                        $copiarApelantes = $this->CopiarApelantes($idSolicitudAudiencia, $idCarpetaJudicial, $this->proveedor);

                        if ($copiarImputados['estatus'] == 'error')
                            throw new Exception($copiarImputados['mensaje']);
                        if ($copiarOfendidos['estatus'] == 'error')
                            throw new Exception($copiarOfendidos['mensaje']);
                        if ($copiarDelitos['estatus'] == 'error')
                            throw new Exception($copiarDelitos['mensaje']);
                        if ($copiarRelacion['estatus'] == 'error')
                            throw new Exception($copiarRelacion['mensaje']);
                        if ($copiarApelantes['estatus'] == 'error')
                            throw new Exception($copiarApelantes['mensaje']);

                        /*
                         * se modifica la fecha de radicacion de la carpeta anterior
                         */
                        $carpetaJudicialDto = new CarpetasjudicialesDTO();
                        $carpetaJudicialDao = new CarpetasjudicialesDAO();

                        $carpetaJudicialDto->setIdCarpetaJudicial($idReferencia);
                        $carpetaJudicialDto->setActivo('S');

                        $getCarpetaJudicial = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

                        if ($getCarpetaJudicial != '') {

                            $carpetaJudicialDto->setFechaRadicacion($fechaActual);
                            $updateCarpeta = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $this->proveedor);
                            if ($updateCarpeta == '')
                                throw new Exception('no se pudo modificar la fecha de radicación de la carpeta anterior con id : ' . $idReferencia);
                        }

                        /*
                         * insertar en antecedes carpetas
                         */
                        $insertAntecedesCarpetas = $this->creaAntecedesCarpetas($idReferencia, $idCarpetaJudicial, $crearCarpetaJudicial, $this->proveedor);
                        if ($insertAntecedesCarpetas['estatus'] == 'error')
                            throw new Exception($insertAntecedesCarpetas['mensaje']);
                        /*
                         * editamos la solicitud de audiencia idReferencia, numero, anio, juzgado
                         */
                        $editarSolicitudAudiencia = $this->updateSolicitudAudiencia($getSolicitud, $crearCarpetaJudicial['data'], $this->proveedor);
                        if ($editarSolicitudAudiencia['estatus'] == 'error')
                            throw new Exception($editarSolicitudAudiencia['mensaje']);


                        /*
                         * modificamos cveEtapa procesal de los imputados carpeta de la solicitud
                         * intentamos cerrar carpeta si todos sus imputados se encuentran en una etapa posterior
                         */
                        //$this->modificarEtapaProcesalImputadosCerrarCarpeta($cveEtapaProcesal, $getSolicitud[0]->getIdSolicitudAudiencia(), $this->proveedor);

                        $estatus = 'genero carpeta';
                        $mensaje = 'se genero una carpeta de tipo toca';
                        $data = $editarSolicitudAudiencia['data'];
                    }
                }

                /*
                 *
                 */
            }


            if (is_null($proveedor)) {
                $this->proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => $estatus,
                'mensaje' => $mensaje,
                'data' => $data
            ];
        } catch (Exception $e) {
            if (is_null($proveedor)) {
                $this->proveedor->execute('ROLLBACK');
            }
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage() . ', linea (' . $e->getLine() . ')' . ' Archivo: ' . $e->getFile() . ' Falta definir'
            ];
        }

        return $response;
    }

    /**
     * metodo para obtener la conclucion
     * @param $getSolicitud
     * @return int|string
     */
    public function getConclucion($getSolicitud) {
        $tipoCarpetaSolicitud = $getSolicitud[0]->getCveTipoCarpeta();

        $cveConclucion = '';

        if ($tipoCarpetaSolicitud == 1 || $tipoCarpetaSolicitud == 2) {
            $cveConclucion = 15;
        } else if ($tipoCarpetaSolicitud == 3 || $tipoCarpetaSolicitud == 4) {
            $cveConclucion = 14;
        }

        return $cveConclucion;
    }

    /**
     * @param $idCarpetaPadre
     * @param $idCarpetaHija
     * @param $carpetaJudicialNueva
     * @param null $proveedor
     * @return array
     */
    public function creaAntecedesCarpetas($idCarpetaPadre, $idCarpetaHija, $carpetaJudicialNueva, $proveedor = null) {
        /*
         * insertar en antecedescarpetas
         * idCarpetaPadre va a ser igual al id de la solicitud/carpeta de donde se va a mover la informacion
         * idCarpetaHija va a ser igual al id de la carpeta nueva a donde se copia la informacion
         * cveTipoCarpeta va a ser igual al tipo de la carpeta nueva
         */

        try {

            $antecedesCarpetasDto = new AntecedescarpetasDTO();
            $antecedesCarpetasDao = new AntecedescarpetasDAO();

            //$antecedesCarpetasDto->setIdCarpetaPadre($idSolicitudAudiencia);
            $antecedesCarpetasDto->setIdCarpetaPadre($idCarpetaPadre);
            $antecedesCarpetasDto->setIdCarpetaHija($idCarpetaHija);
            $antecedesCarpetasDto->setCveTipoCarpeta($carpetaJudicialNueva['data']->getCveTipoCarpeta());
            $antecedesCarpetasDto->setActivo('S');

            $insertAntecedesCarpetas = $antecedesCarpetasDao->insertAntecedescarpetas($antecedesCarpetasDto, $proveedor);

            if ($insertAntecedesCarpetas == '')
                throw new Exception('no se pudo insertar en antecedescarpetas, intenta nuevamente');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'se creó antecedes carpetas'
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
     * metodo para crear la carpeta judicial
     * @param $getSolicitud
     * @param $cveEtapaProcesal
     * @param $cveTipoCarpeta
     * @param $cveConclucion
     * @param $ponderacion
     * @param $cveJuzgado
     * @param null $proveedor
     * @return array
     */
    public function crearCarpetaJudicial($getSolicitud, $cveEtapaProcesal, $cveTipoCarpeta, $cveConclucion, $ponderacion, $cveJuzgado, $proveedor = null) {

        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        }
        try {


            /*
             * obtiene la fecha-hora actual del sistema mysql
             */
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

            /*
             * inicializamos dao y dto de carpetasjudiciales
             */
            $carpetaJudicialDto = new CarpetasjudicialesDTO();
            $carpetaJudicialDao = new CarpetasjudicialesDAO();


            if (is_null($getSolicitud[0]->getCveEtapaProcesal()))
                throw new Exception('la solicitud de audiencia a copiar no cuenta con clave de etapa procesal.');
            if (is_null($getSolicitud[0]->getCveConsignacion()))
                throw new Exception('la solicitud de audiencia a copiar no cuenta con clave de consignacion');
            //if (is_null($getSolicitud[0]->getCveTipoCarpeta())) throw new Exception('la solicitud de audiencia a copiar no cuenta con clave de tipo de carpeta');

            $carpetaJudicialDto->setCveEtapaProcesal($cveEtapaProcesal);
            $carpetaJudicialDto->setCveConsignacion($getSolicitud[0]->getCveConsignacion());
            //$carpetaJudicialDto->setCveTipoCarpeta($getSolicitud[0]->getCveTipoCarpeta());
            $carpetaJudicialDto->setCveTipoCarpeta($cveTipoCarpeta);
            $carpetaJudicialDto->setNumero($getSolicitud[0]->getNumero());
            $carpetaJudicialDto->setAnio($getSolicitud[0]->getAnio());
            $carpetaJudicialDto->setFechaRadicacion($fechaActual);
            $carpetaJudicialDto->setActivo('S');
            $carpetaJudicialDto->setCveJuzgado($cveJuzgado);
            $carpetaJudicialDto->setCarpetaInv($getSolicitud[0]->getCarpetaInv());
            $carpetaJudicialDto->setNuc($getSolicitud[0]->getNuc());
            $carpetaJudicialDto->setCveUsuario($getSolicitud[0]->getCveUsuario());
            $carpetaJudicialDto->setObservaciones($getSolicitud[0]->getObservaciones());
            $carpetaJudicialDto->setNumImputados($getSolicitud[0]->getNumImputados());
            $carpetaJudicialDto->setNumOfendidos($getSolicitud[0]->getNumOfendidos());
            $carpetaJudicialDto->setNumDelitos($getSolicitud[0]->getNumDelitos());
            //$carpetaJudicialDto->setCveEstatusCarpeta($getSolicitud[0]->getCveEstatusSolicitud());
            $carpetaJudicialDto->setCveEstatusCarpeta(1);
            //por revisar que va en este campo por default 1
            $carpetaJudicialDto->setIncompetencia('N');
            //por revisar que va en este campo por default 1
            $carpetaJudicialDto->setCveTipoIncompetencia('4');
            //por revisar que va en este campo, por defaul N
            $carpetaJudicialDto->setAcumulado('N');
            //por revisatr que va en este campo, por default vacio
            $carpetaJudicialDto->setNumAcumulado('');
            $carpetaJudicialDto->setFechaTermino('');
            //$carpetaJudicialDto->setCveConclucion($cveConclucion);
            $carpetaJudicialDto->setCveConclucion('');
            $carpetaJudicialDto->setPonderacion($ponderacion);


            /*
             * insertamos la carpetajudicial
             */
            $insertarCarpetaJudicial = $carpetaJudicialDao->insertCarpetasjudiciales($carpetaJudicialDto, $proveedor); // $this->proveedor


            if ($insertarCarpetaJudicial == '')
                throw new Exception('no se pudo crear la carpeta judicial, intenta nuevamente');


            if ($proveedor == null) {
                $proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'carpeta judicial creada correctamente',
                'data' => $insertarCarpetaJudicial[0]
            ];
        } catch (Exception $e) {
            if ($proveedor == null) {
                $proveedor->execute('ROLLBACK');
            }
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para copiar los imputados(junto con sus relaciones :  domicilios, telefonos, defensores, drogas, tutores, nacionalidades ) de una solicitud a carpetas judiciales
     * @param $idSolicitudAudiencia
     * @param $idCarpetaJudicial
     * @param $cveEtapaProcesal
     * @param null $proveedor
     * @param null $byIdImputado
     * @return array
     */
    public function CopiarImputados($idSolicitudAudiencia, $idCarpetaJudicial, $cveEtapaProcesal, $proveedor = null, $byIdImputado = null) {
        $beginLog = "/**************************/ ";
        $endLog = " /**************************/";
        $logger = new Logger("/../../logs/", "CarpetasJudicialesService");

        $tmp = $proveedor;
        if ($proveedor == null) {

            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        }

        try {


            $imputadoSolicitudDto = new ImputadossolicitudesDTO();
            $imputadoSolicitudDao = new ImputadossolicitudesDAO();


            $imputadoSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            if ($byIdImputado != null) {
                $imputadoSolicitudDto->setIdImputadoSolicitud($byIdImputado);
            }
            $imputadoSolicitudDto->setActivo('S');

            $getImputadosSolicitudes = $imputadoSolicitudDao->selectImputadossolicitudes($imputadoSolicitudDto, '', $proveedor); //$this->proveedor);


            if ($getImputadosSolicitudes != '') {

                $arrayImputadoCarpetaImputadoSolicitud = [];
                $logger->w_onError($beginLog . "INICIALIZAMOS ARRAY IMPUTADOS CARPETAS: = " . serialize($arrayImputadoCarpetaImputadoSolicitud) . $endLog);


                foreach ($getImputadosSolicitudes as $imputadoSolicitud) {

                    $imputadoCarpetaDto = new ImputadoscarpetasDTO();
                    $imputadoCarpetaDao = new ImputadoscarpetasDAO();

                    $imputadoCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
                    $imputadoCarpetaDto->setActivo($imputadoSolicitud->getActivo());
                    $imputadoCarpetaDto->setDetenido($imputadoSolicitud->getDetenido());
                    $imputadoCarpetaDto->setNombre($imputadoSolicitud->getNombre());
                    $imputadoCarpetaDto->setPaterno($imputadoSolicitud->getPaterno());
                    $imputadoCarpetaDto->setMaterno($imputadoSolicitud->getMaterno());
                    $imputadoCarpetaDto->setRfc($imputadoSolicitud->getRfc());
                    $imputadoCarpetaDto->setCurp($imputadoSolicitud->getCurp());
                    $imputadoCarpetaDto->setCveTipoDetencion($imputadoSolicitud->getCveTipoDetencion());
                    $imputadoCarpetaDto->setCveGenero(($imputadoSolicitud->getCveGenero() == 0) ? 3 : $imputadoSolicitud->getCveGenero());
                    $imputadoCarpetaDto->setCveTipoReligion($imputadoSolicitud->getCveTipoReligion());
                    $imputadoCarpetaDto->setAlias($imputadoSolicitud->getAlias());
                    $imputadoCarpetaDto->setFechaDeclaracion($imputadoSolicitud->getFechaDeclaracion());
                    $imputadoCarpetaDto->setCvePaisNacimiento($imputadoSolicitud->getCvePaisNacimiento());
                    $imputadoCarpetaDto->setCveEstadoNacimiento($imputadoSolicitud->getCveEstadoNacimiento());
                    $imputadoCarpetaDto->setCveMunicipioNacimiento($imputadoSolicitud->getCveMunicipioNacimiento());
                    $imputadoCarpetaDto->setFechaNacimiento($imputadoSolicitud->getFechaNacimiento());
                    $imputadoCarpetaDto->setEdad($imputadoSolicitud->getEdad());
                    $imputadoCarpetaDto->setCveTipoPersona($imputadoSolicitud->getCveTipoPersona());
                    $imputadoCarpetaDto->setNombreMoral($imputadoSolicitud->getNombreMoral());
                    $imputadoCarpetaDto->setCveNivelInstruccion($imputadoSolicitud->getCveNivelInstruccion());
                    $imputadoCarpetaDto->setCveEstadoCivil($imputadoSolicitud->getCveEstadoCivil());
                    $imputadoCarpetaDto->setCveEspanol($imputadoSolicitud->getCveEspanol());
                    $imputadoCarpetaDto->setCveAlfabetismo($imputadoSolicitud->getCveAlfabetismo());
                    $imputadoCarpetaDto->setCveDialectoIndigena($imputadoSolicitud->getCveDialectoIndigena());
                    $imputadoCarpetaDto->setCveTipoFamiliaLinguistica($imputadoSolicitud->getCveTipoFamiliaLinguistica());
                    $imputadoCarpetaDto->setCveOcupacion($imputadoSolicitud->getCveOcupacion());
                    $imputadoCarpetaDto->setCveInterprete($imputadoSolicitud->getCveInterprete());
                    $imputadoCarpetaDto->setCveEstadoPsicofisico($imputadoSolicitud->getCveEstadoPsicofisico());
                    $imputadoCarpetaDto->setFechaImputacion($imputadoSolicitud->getFechaImputacion());
                    $imputadoCarpetaDto->setFechaControlDet($imputadoSolicitud->getFechaControlDet());
                    $imputadoCarpetaDto->setFecTerminoCons($imputadoSolicitud->getFecTerminoCons());
                    $imputadoCarpetaDto->setFecCierreInv($imputadoSolicitud->getFecCierreInv());
                    $imputadoCarpetaDto->setEstadoNacimiento($imputadoSolicitud->getEstadoNacimiento());
                    $imputadoCarpetaDto->setMunicipioNacimiento($imputadoSolicitud->getMunicipioNacimiento());
                    $imputadoCarpetaDto->setRelacionMoral($imputadoSolicitud->getRelacionMoral());
                    $imputadoCarpetaDto->setPersonaMoral($imputadoSolicitud->getPersonaMoral());
                    $imputadoCarpetaDto->setCveCereso($imputadoSolicitud->getCveCereso());
                    //$imputadoCarpetaDto->setCveEtapaProcesal($imputadoSolicitud->getCveEtapaProcesal());
                    $imputadoCarpetaDto->setCveEtapaProcesal($cveEtapaProcesal);
                    $imputadoCarpetaDto->setCveTipoReincidencia($imputadoSolicitud->getCveTipoReincidencia());
                    $imputadoCarpetaDto->setIngresoMensual($imputadoSolicitud->getIngresoMensual());
                    $imputadoCarpetaDto->setCveGrupoEdnico($imputadoSolicitud->getCveGrupoEdnico());
                    $imputadoCarpetaDto->setTieneSobreseimiento($imputadoSolicitud->getTieneSobreseimiento());
                    $imputadoCarpetaDto->setFechaSobreseimiento($imputadoSolicitud->getFechaSobreseimiento());


                    $insertImputadoCarpeta = $imputadoCarpetaDao->insertImputadoscarpetas($imputadoCarpetaDto, $proveedor); //$this->proveedor);


                    if ($insertImputadoCarpeta == '')
                        throw new Exception('no se pudo copiar el imputado con id: ' . $imputadoSolicitud->getIdImputadoSolicitud() . ' a imputadoscarpetas, ocurrio un error');

                    //obtenemos el id del imputado que se guardo
                    $idImputadoCarpeta = $insertImputadoCarpeta[0]->getIdImputadoCarpeta();

                    /*
                     * guardamos en session los idimputadocarpeta que se van a generar para audiencia de juicio
                     */
                    $_SESSION['idImputadoCarpetaAuto'][] = $imputadoSolicitud->getIdImputadoCarpeta();

                    /*
                     * actualizamos en imputadossolicitudes el idimputadocarpeta creado en imputadoscarpetas
                     */
                    $imputadoSolicitudActualizaDao = new ImputadossolicitudesDAO();
                    $imputadoSolicitudActualizaDto = new ImputadossolicitudesDTO();

                    $imputadoSolicitudActualizaDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $imputadoSolicitudActualizaDto->setIdImputadoCarpeta($idImputadoCarpeta);

                    $actualizaImputadoSolicitud = $imputadoSolicitudActualizaDao->updateIdImputadoCarpetaSolicitud($imputadoSolicitudActualizaDto, $proveedor);

                    if ($actualizaImputadoSolicitud == '')
                        throw new Exception('no se pudo actualizar el idimputado carpeta en imputadosolicitud con id' . $imputadoSolicitud->getIdImputadoSolicitud());

                    /*
                     * termina de actualizar el id imputado carpeta en imputadossolicitudes
                     */


                    /*
                     * creamos una sesion para saber que id de imputado tenia el que se copio y cual es el el del imputado carpeta para posteriormente
                     * insertalo en la relacion
                     */

                    $_SESSION['imputados_copia'][$imputadoSolicitud->getIdImputadoSolicitud()] = $idImputadoCarpeta;


                    /*
                     * creamos el array de relacion reclusos con imputados carpetas
                     * primero como indice(clave) va el idimputadosolicitud y segundo como valor va el idimputadocarpeta
                     */
                    $arrayImputadoCarpetaImputadoSolicitud[$imputadoSolicitud->getIdImputadoSolicitud()] = $idImputadoCarpeta;


                    /*
                     *
                     */


                    /*
                     * 1.- copiar domicilios del imputado de la solicitud de audiencia a imputadoscarpetas
                     */

                    //obtenemos los domicilios del imputado de la solicitud
                    $DomicilioImputadoSolicitudDto = new DomiciliosimputadossolicitudesDTO();
                    $DomicilioImputadoSolicitudDao = new DomiciliosimputadossolicitudesDAO();

                    $DomicilioImputadoSolicitudDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $DomicilioImputadoSolicitudDto->setActivo('S');

                    $getDomiciliosImputadosSolicitud = $DomicilioImputadoSolicitudDao->selectDomiciliosimputadossolicitudes($DomicilioImputadoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if ($getDomiciliosImputadosSolicitud != '') {
                        //si hay domicilios del imputado en la solicitud entonces los copiamos a imputados carpetas.
                        foreach ($getDomiciliosImputadosSolicitud as $domicilioImputadoSolicitud) {

                            $DomicilioImputadoCarpetaDto = new DomiciliosimputadoscarpetasDTO();
                            $DomicilioImputadoCarpetaDao = new DomiciliosimputadoscarpetasDAO();

                            $DomicilioImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $DomicilioImputadoCarpetaDto->setDomicilioProcesal($domicilioImputadoSolicitud->getDomicilioProcesal());
                            $DomicilioImputadoCarpetaDto->setCvePais($domicilioImputadoSolicitud->getCvePais());
                            $DomicilioImputadoCarpetaDto->setCveEstado($domicilioImputadoSolicitud->getCveEstado());
                            $DomicilioImputadoCarpetaDto->setCveMunicipio($domicilioImputadoSolicitud->getCveMunicipio());
                            $DomicilioImputadoCarpetaDto->setDireccion($domicilioImputadoSolicitud->getDireccion());
                            $DomicilioImputadoCarpetaDto->setColonia($domicilioImputadoSolicitud->getColonia());
                            $DomicilioImputadoCarpetaDto->setNumInterior($domicilioImputadoSolicitud->getNumInterior());
                            $DomicilioImputadoCarpetaDto->setNumExterior($domicilioImputadoSolicitud->getNumExterior());
                            $DomicilioImputadoCarpetaDto->setCp($domicilioImputadoSolicitud->getCp());
                            $DomicilioImputadoCarpetaDto->setLatitud($domicilioImputadoSolicitud->getLatitud());
                            $DomicilioImputadoCarpetaDto->setLongitud($domicilioImputadoSolicitud->getLongitud());
                            $DomicilioImputadoCarpetaDto->setRecidenciaHabitual($domicilioImputadoSolicitud->getRecidenciaHabitual());
                            $DomicilioImputadoCarpetaDto->setEstado($domicilioImputadoSolicitud->getEstado());
                            $DomicilioImputadoCarpetaDto->setMunicipio($domicilioImputadoSolicitud->getMunicipio());
                            $DomicilioImputadoCarpetaDto->setCveConvivencia($domicilioImputadoSolicitud->getCveConvivencia());
                            $DomicilioImputadoCarpetaDto->setCveTipoDeVivienda($domicilioImputadoSolicitud->getCveTipoDeVivienda());
                            $DomicilioImputadoCarpetaDto->setActivo($domicilioImputadoSolicitud->getActivo());

                            $insertDomicilioImputadoCarpeta = $DomicilioImputadoCarpetaDao->insertDomiciliosimputadoscarpetas($DomicilioImputadoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertDomicilioImputadoCarpeta == '')
                                throw new Exception('no se puedo guardar un domicilio de un imputado, intenta nuevamente');
                        }
                    }


                    /*
                     * 2.- copiamos los telefonos de los imputados de la solicitud de audiencia a telefonosimpiutadoscarpetas
                     */

                    $TelefonoImputadoSolicitudDto = new TelefonosimputadossolicitudesDTO();
                    $TelefonoImputadoSolicitudDao = new TelefonosimputadossolicitudesDAO();

                    $TelefonoImputadoSolicitudDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $TelefonoImputadoSolicitudDto->setActivo('S');

                    //obtenemos los telefonos de imputado solicitud con el id del imputado a copiar
                    $getTelefonosImputadoSolicitud = $TelefonoImputadoSolicitudDao->selectTelefonosimputadossolicitudes($TelefonoImputadoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if ($getTelefonosImputadoSolicitud != '') {

                        foreach ($getTelefonosImputadoSolicitud as $telefonoImputadoSolicitud) {

                            $TelefonoImputadoCarpetaDto = new TelefonosimputadoscarpetasDTO();
                            $TelefonoImputadoCarpetaDao = new TelefonosimputadoscarpetasDAO();

                            $TelefonoImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $TelefonoImputadoCarpetaDto->setTelefono($telefonoImputadoSolicitud->getTelefono());
                            $TelefonoImputadoCarpetaDto->setCelular($telefonoImputadoSolicitud->getCelular());
                            $TelefonoImputadoCarpetaDto->setEmail($telefonoImputadoSolicitud->getEmail());
                            $TelefonoImputadoCarpetaDto->setActivo($telefonoImputadoSolicitud->getActivo());


                            $insertTelefonoImputadoCarpeta = $TelefonoImputadoCarpetaDao->insertTelefonosimputadoscarpetas($TelefonoImputadoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertTelefonoImputadoCarpeta == '')
                                throw new Exception('no se puedo insertar un telefono de un imputado, intenta nuevamente');
                        }
                    }


                    /*
                     * 3.- copiamos los defensores del imputado solicitud a defensotesimputadoscarpetas
                     */


                    $DefensorImputadoSolicitudDto = new DefensoresimputadossolicitudesDTO();
                    $DefensorImputadoSolicitudDao = new DefensoresimputadossolicitudesDAO();

                    $DefensorImputadoSolicitudDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $DefensorImputadoSolicitudDto->setActivo('S');

                    $getDefensoresImputadosSolicitud = $DefensorImputadoSolicitudDao->selectDefensoresimputadossolicitudes($DefensorImputadoSolicitudDto, '', $proveedor); //$this->proveedor);


                    if ($getDefensoresImputadosSolicitud != '') {

                        foreach ($getDefensoresImputadosSolicitud as $defensorImputadoSolicitud) {

                            $DefensorImputadoCarpetaDto = new DefensoresimputadoscarpetasDTO();
                            $DefensorImputadoCarpetaDao = new DefensoresimputadoscarpetasDAO();

                            $DefensorImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $DefensorImputadoCarpetaDto->setCveTipoDefensor($defensorImputadoSolicitud->getCveTipoDefensor());
                            $DefensorImputadoCarpetaDto->setNombre($defensorImputadoSolicitud->getNombre());
                            $DefensorImputadoCarpetaDto->setTelefono($defensorImputadoSolicitud->getTelefono());
                            $DefensorImputadoCarpetaDto->setCelular($defensorImputadoSolicitud->getCelular());
                            $DefensorImputadoCarpetaDto->setEmail($defensorImputadoSolicitud->getEmail());
                            $DefensorImputadoCarpetaDto->setActivo($defensorImputadoSolicitud->getActivo());

                            $insertDefensorImputadoCarpeta = $DefensorImputadoCarpetaDao->insertDefensoresimputadoscarpetas($DefensorImputadoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertDefensorImputadoCarpeta == '')
                                throw new Exception('no se pudo insertar un defensor de imputado, intenta nuevamente');
                        }
                    }


                    /*
                     * 4.- copiar los tutores del imputado solicitud a tutorescarpetas
                     */

                    $TutorImputadoSolicitudDto = new TutoresimputadosDTO();
                    $TutorImputadoSolicitudDao = new TutoresimputadosDAO();


                    $TutorImputadoSolicitudDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $TutorImputadoSolicitudDto->setActivo('S');

                    $getTutoresImputadosSolicitud = $TutorImputadoSolicitudDao->selectTutoresimputados($TutorImputadoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if ($getTutoresImputadosSolicitud != '') {

                        foreach ($getTutoresImputadosSolicitud as $tutorImputadoSolicitud) {

                            $TutorImputadoCarpetaDto = new TutoresimputadoscarpetasDTO();
                            $TutorImputadoCarpetaDao = new TutoresimputadoscarpetasDAO();

                            $TutorImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $TutorImputadoCarpetaDto->setCveTipoTutor($tutorImputadoSolicitud->getCveTipoTutor());
                            $TutorImputadoCarpetaDto->setProvDef($tutorImputadoSolicitud->getProvDef());
                            $TutorImputadoCarpetaDto->setCveGenero($tutorImputadoSolicitud->getCveGenero());
                            $TutorImputadoCarpetaDto->setNombre($tutorImputadoSolicitud->getNombre());
                            $TutorImputadoCarpetaDto->setPaterno($tutorImputadoSolicitud->getPaterno());
                            $TutorImputadoCarpetaDto->setMaterno($tutorImputadoSolicitud->getMaterno());
                            $TutorImputadoCarpetaDto->setFechaNacimiento($tutorImputadoSolicitud->getFechaNacimiento());
                            $TutorImputadoCarpetaDto->setEdad($tutorImputadoSolicitud->getEdad());
                            $TutorImputadoCarpetaDto->setActivo($tutorImputadoSolicitud->getActivo());

                            $insertTutorImputadoCarpeta = $TutorImputadoCarpetaDao->insertTutoresimputadoscarpetas($TutorImputadoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertTutorImputadoCarpeta == '')
                                throw new Exception('no se pudo guardar un tutor de imputado, intenta nuevamente');
                        }
                    }


                    /*
                     * 5.- copiar las drogas del imputado solicitud a drogasimputadocarpetas
                     */

                    $DrogaImputadoSolicitudDto = new ImputadosdrogasDTO();
                    $DrogaImputadoSolicitudDao = new ImputadosdrogasDAO();

                    $DrogaImputadoSolicitudDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $DrogaImputadoSolicitudDto->setActivo('S');

                    $getDrogasimputadosSolicitud = $DrogaImputadoSolicitudDao->selectImputadosdrogas($DrogaImputadoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if ($getDrogasimputadosSolicitud != '') {

                        foreach ($getDrogasimputadosSolicitud as $drogaImputadoSolicitud) {

                            $DrogaImputadoCarpetaDto = new ImputadosdrogascarpetasDTO();
                            $DrogaImputadoCarpetaDao = new ImputadosdrogascarpetasDAO();

                            $DrogaImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $DrogaImputadoCarpetaDto->setCveDroga($drogaImputadoSolicitud->getCveDroga());
                            $DrogaImputadoCarpetaDto->setActivo($drogaImputadoSolicitud->getActivo());

                            $insertDrogaImputadoCarpeta = $DrogaImputadoCarpetaDao->insertImputadosdrogascarpetas($DrogaImputadoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertDrogaImputadoCarpeta == '')
                                throw new Exception('no se pudo guardar una droga de imputado, intenta nuevamente');
                        }
                    }


                    /*
                     * 6.- copiar las nacionalidades del imputado solicitud a nacionalidadesimputadocarpetas
                     */

                    $NacionalidadImputadoSolicitudDto = new NacionalidadesimputadossolicitudesDTO();
                    $NacionalidadImputadoSolicitudDao = new NacionalidadesimputadossolicitudesDAO();

                    $NacionalidadImputadoSolicitudDto->setIdImputadoSolicitud($imputadoSolicitud->getIdImputadoSolicitud());
                    $NacionalidadImputadoSolicitudDto->setActivo('S');

                    $getNacionalidadesImputadosSolicitud = $NacionalidadImputadoSolicitudDao->selectNacionalidadesimputadossolicitudes($NacionalidadImputadoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if ($getNacionalidadesImputadosSolicitud != '') {

                        foreach ($getNacionalidadesImputadosSolicitud as $nacionalidadImputadoSolicitud) {

                            $NacionalidadImputadoCarpetaDto = new NacionalidadesimputadoscarpetasDTO();
                            $NacionalidadImputadoCarpetaDao = new NacionalidadesimputadoscarpetasDAO();

                            $NacionalidadImputadoCarpetaDto->setIdImputadoCarpeta($idImputadoCarpeta);
                            $NacionalidadImputadoCarpetaDto->setCvePais($nacionalidadImputadoSolicitud->getCvePais());
                            $NacionalidadImputadoCarpetaDto->setActivo($nacionalidadImputadoSolicitud->getActivo());

                            $insertNacionalidadImputadoCarpeta = $NacionalidadImputadoCarpetaDao->insertNacionalidadesimputadoscarpetas($NacionalidadImputadoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertNacionalidadImputadoCarpeta == '')
                                throw new Exception('no se pudo guardar una nacionalidad de imputado, intenta nuevamente');
                        }
                    }
                }

                /*
                 * invocamos el metodo para relacionar el imputado carpeta con idrecluso
                 */
                $logger->w_onError($beginLog . "EL ARRAY RECLUSOS SOLICITUDES GENERADO ES = " . serialize($arrayImputadoCarpetaImputadoSolicitud) . $endLog);
                $this->relacionarImputadosCarpetasReclusos($arrayImputadoCarpetaImputadoSolicitud, $proveedor);
            }

            if ($tmp == null) {
                $proveedor->excecute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'los imputados de la solicitud de audiencia con id . ' . $idSolicitudAudiencia . ' fueron copiados a carpetas judiciales con la carpeta id ' . $idCarpetaJudicial
            ];
        } catch (Exception $e) {

            if ($tmp == null) {
                $proveedor->excecute('ROLLBACK');
            }

            if (isset($_SESSION['imputados_copia']))
                unset($_SESSION['imputados_copia']);


            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para copiar los ofendidos de una solicitud a carpetas judiciales
     * @param $idSolicitudAudiencia
     * @param $idCarpetaJudicial
     * @param null $proveedor
     * @param null $byIdOfendido
     * @return array
     */
    public function CopiarOfendidos($idSolicitudAudiencia, $idCarpetaJudicial, $proveedor = null, $byIdOfendido = null) {
        $tmp = $proveedor;
        if ($proveedor == null) {

            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        }

        try {


            $ofendidoSolicitudDto = new OfendidossolicitudesDTO();
            $ofendidoSolicitudDao = new OfendidossolicitudesDAO();


            $ofendidoSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            if ($byIdOfendido != null) {
                $ofendidoSolicitudDto->setIdOfendidoSolicitud($byIdOfendido);
            }
            $ofendidoSolicitudDto->setActivo('S');

            $getOfendidosSolicitudes = $ofendidoSolicitudDao->selectOfendidossolicitudes($ofendidoSolicitudDto, '', $proveedor); //$this->proveedor);


            if (count($getOfendidosSolicitudes)) {

                foreach ($getOfendidosSolicitudes as $ofendidoSolicitud) {

                    $ofendidoCarpetaDto = new OfendidoscarpetasDTO();
                    $ofendidoCarpetaDao = new OfendidoscarpetasDAO();

                    $ofendidoCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
                    $ofendidoCarpetaDto->setActivo($ofendidoSolicitud->getActivo());
                    $ofendidoCarpetaDto->setNombre($ofendidoSolicitud->getNombre());
                    $ofendidoCarpetaDto->setPaterno($ofendidoSolicitud->getPaterno());
                    $ofendidoCarpetaDto->setMaterno($ofendidoSolicitud->getMaterno());
                    $ofendidoCarpetaDto->setRfc($ofendidoSolicitud->getRfc());
                    $ofendidoCarpetaDto->setCurp($ofendidoSolicitud->getCurp());
                    $ofendidoCarpetaDto->setCveOcupacion($ofendidoSolicitud->getCveOcupacion());
                    $ofendidoCarpetaDto->setCveTipoPersona($ofendidoSolicitud->getCveTipoPersona());
                    $ofendidoCarpetaDto->setCveGenero(($ofendidoSolicitud->getCveGenero() == 0) ? 3 : $ofendidoSolicitud->getCveGenero());
                    $ofendidoCarpetaDto->setCveTipoParte($ofendidoSolicitud->getCveTipoParte());
                    $ofendidoCarpetaDto->setCveTipoReligion($ofendidoSolicitud->getCveTipoReligion());
                    $ofendidoCarpetaDto->setFechaNacimiento($ofendidoSolicitud->getFechaNacimiento());
                    $ofendidoCarpetaDto->setEdad($ofendidoSolicitud->getEdad());
                    $ofendidoCarpetaDto->setCvePaisNacimiento($ofendidoSolicitud->getCvePaisNacimiento());
                    $ofendidoCarpetaDto->setCveEstadoNacimiento($ofendidoSolicitud->getCveEstadoNacimiento());
                    $ofendidoCarpetaDto->setEstadoNacimiento($ofendidoSolicitud->getEstadoNacimiento());
                    $ofendidoCarpetaDto->setCveMunicipioNacimiento($ofendidoSolicitud->getCveMunicipioNacimiento());
                    $ofendidoCarpetaDto->setMunicipioNacimiento($ofendidoSolicitud->getMunicipioNacimiento());
                    $ofendidoCarpetaDto->setCveEstadoCivil($ofendidoSolicitud->getCveEstadoCivil());
                    $ofendidoCarpetaDto->setCveAlfabetismo($ofendidoSolicitud->getCveAlfabetismo());
                    $ofendidoCarpetaDto->setCveNivelInstruccion($ofendidoSolicitud->getCveNivelInstruccion());
                    $ofendidoCarpetaDto->setCveEspanol($ofendidoSolicitud->getCveEspanol());
                    $ofendidoCarpetaDto->setCveDialectoIndigena($ofendidoSolicitud->getCveDialectoIndigena());
                    $ofendidoCarpetaDto->setCveTipoFamiliaLinguistica($ofendidoSolicitud->getCveTipoFamiliaLinguistica());
                    $ofendidoCarpetaDto->setCveInterprete($ofendidoSolicitud->getCveInterprete());
                    $ofendidoCarpetaDto->setCveOrdenProteccion($ofendidoSolicitud->getCveOrdenProteccion());
                    $ofendidoCarpetaDto->setCveEstadoPsicofisico($ofendidoSolicitud->getCveEstadoPsicofisico());
                    $ofendidoCarpetaDto->setNombreMoral($ofendidoSolicitud->getNombreMoral());
                    $ofendidoCarpetaDto->setCveVictimaDeLaDelincuenciaOrganizada($ofendidoSolicitud->getCveVictimaDeLaDelincuenciaOrganizada());
                    $ofendidoCarpetaDto->setCveVictimaDeViolenciaDeGenero($ofendidoSolicitud->getCveVictimaDeViolenciaDeGenero());
                    $ofendidoCarpetaDto->setCveVictimaDeTrata($ofendidoSolicitud->getCveVictimaDeTrata());
                    $ofendidoCarpetaDto->setCveVictimaDeAcoso($ofendidoSolicitud->getCveVictimaDeAcoso());
                    $ofendidoCarpetaDto->setDesaparecido($ofendidoSolicitud->getDesaparecido());
                    $ofendidoCarpetaDto->setNumHijos($ofendidoSolicitud->getNumHijos());
                    $ofendidoCarpetaDto->setEmbarazada($ofendidoSolicitud->getEmbarazada());
                    $ofendidoCarpetaDto->setCveGrupoEdnico($ofendidoSolicitud->getCveGrupoEdnico());


                    $insertOfendidoCarpeta = $ofendidoCarpetaDao->insertOfendidoscarpetas($ofendidoCarpetaDto, $proveedor); //$this->proveedor);


                    if ($insertOfendidoCarpeta == '') {
                        throw new Exception('no se pudo Copiar el ofendido de la solicitud con id: ' . $ofendidoSolicitud->getIdOfendidoSolicitud() . ' a ofendidosCarpetas');
                    }

                    //obtenemos el id del ofendido que se guardo
                    $idOfendidoCarpeta = $insertOfendidoCarpeta[0]->getIdOfendidoCarpeta();


                    /*
                     * guardamos la referencia en una variable de sesion para saber el id del ofendido carpeta nuevo que se genero de copiar el ofnedido solicitud
                     * esto para saber el id e insertar en la tabla relacion
                     */

                    $_SESSION['ofendidos_copia'][$ofendidoSolicitud->getIdOfendidoSolicitud()] = $idOfendidoCarpeta;


                    /*
                     * 1.- copiar domicilios del ofendido de la solicitud de audiencia a ofendidoscarpetas
                     */

                    //obtenemos los domicilios del imputado de la solicitud
                    $DomicilioOfendidoSolicitudDto = new DomiciliosofendidossolicitudesDTO();
                    $DomicilioOfendidoSolicitudDao = new DomiciliosofendidossolicitudesDAO();

                    $DomicilioOfendidoSolicitudDto->setIdOfendidoSolicitud($ofendidoSolicitud->getIdOfendidoSolicitud());
                    $DomicilioOfendidoSolicitudDto->setActivo('S');

                    $getDomiciliosOfendidosSolicitud = $DomicilioOfendidoSolicitudDao->selectDomiciliosofendidossolicitudes($DomicilioOfendidoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if (count($getDomiciliosOfendidosSolicitud)) {
                        //si hay domicilios del ofendido en la solicitud entonces los copiamos a ofendidos carpetas.
                        foreach ($getDomiciliosOfendidosSolicitud as $domicilioOfendidoSolicitud) {

                            $DomicilioOfendidoCarpetaDto = new DomiciliosofendidoscarpetasDTO();
                            $DomicilioOfendidoCarpetaDao = new DomiciliosofendidoscarpetasDAO();

                            $DomicilioOfendidoCarpetaDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                            $DomicilioOfendidoCarpetaDto->setDomicilioProcesal($domicilioOfendidoSolicitud->getDomicilioProcesal());
                            $DomicilioOfendidoCarpetaDto->setCvePais($domicilioOfendidoSolicitud->getCvePais());
                            $DomicilioOfendidoCarpetaDto->setCveEstado($domicilioOfendidoSolicitud->getCveEstado());
                            $DomicilioOfendidoCarpetaDto->setCveMunicipio($domicilioOfendidoSolicitud->getCveMunicipio());
                            $DomicilioOfendidoCarpetaDto->setDireccion(utf8_decode($domicilioOfendidoSolicitud->getDireccion()));
                            $DomicilioOfendidoCarpetaDto->setColonia(utf8_decode($domicilioOfendidoSolicitud->getColonia()));
                            $DomicilioOfendidoCarpetaDto->setNumInterior($domicilioOfendidoSolicitud->getNumInterior());
                            $DomicilioOfendidoCarpetaDto->setNumExterior($domicilioOfendidoSolicitud->getNumExterior());
                            $DomicilioOfendidoCarpetaDto->setCp($domicilioOfendidoSolicitud->getCp());
                            $DomicilioOfendidoCarpetaDto->setLatitud($domicilioOfendidoSolicitud->getLatitud());
                            $DomicilioOfendidoCarpetaDto->setLongitud($domicilioOfendidoSolicitud->getLongitud());
                            $DomicilioOfendidoCarpetaDto->setRecidenciaHabitual($domicilioOfendidoSolicitud->getRecidenciaHabitual());
                            $DomicilioOfendidoCarpetaDto->setEstado($domicilioOfendidoSolicitud->getEstado());
                            $DomicilioOfendidoCarpetaDto->setMunicipio($domicilioOfendidoSolicitud->getMunicipio());
                            $DomicilioOfendidoCarpetaDto->setCveConvivencia($domicilioOfendidoSolicitud->getCveConvivencia());
                            $DomicilioOfendidoCarpetaDto->setCveTipoDeVivienda($domicilioOfendidoSolicitud->getCveTipoDeVivienda());
                            $DomicilioOfendidoCarpetaDto->setActivo($domicilioOfendidoSolicitud->getActivo());

                            $insertDomicilioOfendidoCarpeta = $DomicilioOfendidoCarpetaDao->insertDomiciliosofendidoscarpetas($DomicilioOfendidoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertDomicilioOfendidoCarpeta == '')
                                throw new Exception('no se pudo copiar el domicilio del ofendido con id: ' . $domicilioOfendidoSolicitud->getIdDomicilioOfendidoSolicitud() . ', intenta nuevamente');
                        }
                    }


                    /*
                     * 2.- copiamos los telefonos de los ofendidos de la solicitud de audiencia a telefonosofendidoscarpetas
                     */

                    $TelefonoOfendidoSolicitudDto = new TelefonosofendidossolicitudesDTO();
                    $TelefonoOfendidoSolicitudDao = new TelefonosofendidossolicitudesDAO();

                    $TelefonoOfendidoSolicitudDto->setIdOfendidoSolicitud($ofendidoSolicitud->getIdOfendidoSolicitud());
                    $TelefonoOfendidoSolicitudDto->setActivo('S');

                    //obtenemos los telefonos de los ofendidos solicitud con el id del ofendido a copiar
                    $getTelefonosOfendidoSolicitud = $TelefonoOfendidoSolicitudDao->selectTelefonosofendidossolicitudes($TelefonoOfendidoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if (count($getTelefonosOfendidoSolicitud)) {

                        foreach ($getTelefonosOfendidoSolicitud as $telefonoOfendidoSolicitud) {

                            $TelefonoOfendidoCarpetaDto = new TelefonosofendidoscarpetasDTO();
                            $TelefonoOfendidoCarpetaDao = new TelefonosofendidoscarpetasDAO();

                            $TelefonoOfendidoCarpetaDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                            $TelefonoOfendidoCarpetaDto->setTelefono($telefonoOfendidoSolicitud->getTelefono());
                            $TelefonoOfendidoCarpetaDto->setCelular($telefonoOfendidoSolicitud->getCelular());
                            $TelefonoOfendidoCarpetaDto->setEmail($telefonoOfendidoSolicitud->getEmail());
                            $TelefonoOfendidoCarpetaDto->setActivo($telefonoOfendidoSolicitud->getActivo());


                            $insertTelefonoOfendidoCarpeta = $TelefonoOfendidoCarpetaDao->insertTelefonosofendidoscarpetas($TelefonoOfendidoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertTelefonoOfendidoCarpeta == '')
                                throw new Exception('no se puedo insertar un telefono de un ofendido, intenta nuevamente');
                        }
                    }


                    /*
                     * 3.- copiamos los defensores del ofendido solicitud a defensotesimputadoscarpetas
                     */


                    $DefensorOfendidoSolicitudDto = new DefensoresofendidossolicitudesDTO();
                    $DefensorOfendidoSolicitudDao = new DefensoresofendidossolicitudesDAO();

                    $DefensorOfendidoSolicitudDto->setIdOfendidoSolicitud($ofendidoSolicitud->getIdOfendidoSolicitud());
                    $DefensorOfendidoSolicitudDto->setActivo('S');

                    $getDefensoresOfendidosSolicitud = $DefensorOfendidoSolicitudDao->selectDefensoresofendidossolicitudes($DefensorOfendidoSolicitudDto, '', $proveedor); //$this->proveedor);


                    if (count($getDefensoresOfendidosSolicitud)) {

                        foreach ($getDefensoresOfendidosSolicitud as $defensorOfendidoSolicitud) {

                            $DefensorOfendidoCarpetaDto = new DefensoresofendidoscarpetasDTO();
                            $DefensorOfendidoCarpetaDao = new DefensoresofendidoscarpetasDAO();

                            $DefensorOfendidoCarpetaDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                            $DefensorOfendidoCarpetaDto->setCveTipoDefensor($defensorOfendidoSolicitud->getCveTipoAsesor());
                            $DefensorOfendidoCarpetaDto->setNombre(utf8_decode($defensorOfendidoSolicitud->getNombre()));
                            $DefensorOfendidoCarpetaDto->setTelefono($defensorOfendidoSolicitud->getTelefono());
                            $DefensorOfendidoCarpetaDto->setCelular($defensorOfendidoSolicitud->getCelular());
                            $DefensorOfendidoCarpetaDto->setEmail($defensorOfendidoSolicitud->getEmail());
                            $DefensorOfendidoCarpetaDto->setActivo($defensorOfendidoSolicitud->getActivo());

                            $insertDefensorOfendidoCarpeta = $DefensorOfendidoCarpetaDao->insertDefensoresofendidoscarpetas($DefensorOfendidoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertDefensorOfendidoCarpeta == '')
                                throw new Exception('no se pudo insertar un defensor de ofendido, intenta nuevamente');
                        }
                    }


                    /*
                     * 4.- copiar los tutores del ofnedido solicitud a tutorescarpetas
                     */

                    $TutorOfendidoSolicitudDto = new TutoresofendidosDTO();
                    $TutorOfendidoSolicitudDao = new TutoresofendidosDAO();


                    $TutorOfendidoSolicitudDto->setIdOfendidoSolicitud($ofendidoSolicitud->getIdOfendidoSolicitud());
                    $TutorOfendidoSolicitudDto->setActivo('S');

                    $getTutoresOfendidoSolicitud = $TutorOfendidoSolicitudDao->selectTutoresofendidos($TutorOfendidoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if ($getTutoresOfendidoSolicitud != '') {

                        foreach ($getTutoresOfendidoSolicitud as $tutorOfendidoSolicitud) {

                            $TutorOfendidoCarpetaDto = new TutoresofendidoscarpetasDTO();
                            $TutorOfendidoCarpetaDao = new TutoresofendidoscarpetasDAO();

                            $TutorOfendidoCarpetaDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                            $TutorOfendidoCarpetaDto->setCveTipoTutor($tutorOfendidoSolicitud->getCveTipoTutor());
                            $TutorOfendidoCarpetaDto->setProvDef($tutorOfendidoSolicitud->getProvDef());
                            $TutorOfendidoCarpetaDto->setCveGenero($tutorOfendidoSolicitud->getCveGenero());
                            $TutorOfendidoCarpetaDto->setNombre(utf8_decode($tutorOfendidoSolicitud->getNombre()));
                            $TutorOfendidoCarpetaDto->setPaterno(utf8_decode($tutorOfendidoSolicitud->getPaterno()));
                            $TutorOfendidoCarpetaDto->setMaterno(utf8_decode($tutorOfendidoSolicitud->getMaterno()));
                            $TutorOfendidoCarpetaDto->setFechaNacimiento($tutorOfendidoSolicitud->getFechaNacimiento());
                            $TutorOfendidoCarpetaDto->setEdad($tutorOfendidoSolicitud->getEdad());
                            $TutorOfendidoCarpetaDto->setActivo($tutorOfendidoSolicitud->getActivo());

                            $insertTutorOfendidoCarpeta = $TutorOfendidoCarpetaDao->insertTutoresofendidoscarpetas($TutorOfendidoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertTutorOfendidoCarpeta == '')
                                throw new Exception('no se pudo guardar un tutor de ofendido, intenta nuevamente');
                        }
                    }


                    /*
                     * 5.- copiar las nacionalidades del ofendido solicitud a nacionalidadesofendidoscarpetas
                     */

                    $NacionalidadOfendidoSolicitudDto = new NacionalidadesofendidossolicitudesDTO();
                    $NacionalidadOfendidoSolicitudDao = new NacionalidadesofendidossolicitudesDAO();

                    $NacionalidadOfendidoSolicitudDto->setIdOfendidoSolicitud($ofendidoSolicitud->getIdOfendidoSolicitud());
                    $NacionalidadOfendidoSolicitudDto->setActivo('S');

                    $getNacionalidadesOfendidosSolicitud = $NacionalidadOfendidoSolicitudDao->selectNacionalidadesofendidossolicitudes($NacionalidadOfendidoSolicitudDto, '', $proveedor); //$this->proveedor);

                    if (count($getNacionalidadesOfendidosSolicitud)) {

                        foreach ($getNacionalidadesOfendidosSolicitud as $nacionalidadOfendidoSolicitud) {

                            $NacionalidadOfendidoCarpetaDto = new NacionalidadesofendidoscarpetasDTO();
                            $NacionalidadOfendidoCarpetaDao = new NacionalidadesofendidoscarpetasDAO();

                            $NacionalidadOfendidoCarpetaDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
                            $NacionalidadOfendidoCarpetaDto->setCvePais($nacionalidadOfendidoSolicitud->getCvePais());
                            $NacionalidadOfendidoCarpetaDto->setActivo($nacionalidadOfendidoSolicitud->getActivo());

                            $insertNacionalidadImputadoCarpeta = $NacionalidadOfendidoCarpetaDao->insertNacionalidadesofendidoscarpetas($NacionalidadOfendidoCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertNacionalidadImputadoCarpeta == '')
                                throw new Exception('no se pudo guardar una nacionalidad del ofendido, intenta nuevamente');
                        }
                    }
                }
            }


            if ($tmp == null) {
                $proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'los ofendidos de la solicitud de audiencia con id . ' . $idSolicitudAudiencia . ' fueron copiados a carpetas judiciales con la carpeta id ' . $idCarpetaJudicial
            ];
        } catch (Exception $e) {

            if ($tmp == null) {
                $proveedor->execute('ROLLBACK');
            }

            if (isset($_SESSION['ofendidos_copia']))
                unset($_SESSION['ofendidos_copia']);

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }


        return $response;
    }

    /**
     * @param $idSolicitudAudiencia
     * @param $idCarpetaJudicial
     * @param null $proveedor
     * @param null $byIdApelante
     * @return array
     */
    public function CopiarApelantes($idSolicitudAudiencia, $idCarpetaJudicial, $proveedor = null, $byIdApelante = null) {

        $tmp = $proveedor;
        if ($proveedor == null) {

            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
            $proveedor->execute("BEGIN");
        }

        try {

            $apelantesSolicitudesDao = new ApelantessolicitudesDAO();
            $apelantesSolicitudesDto = new ApelantessolicitudesDTO();


            $apelantesSolicitudesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            if ($byIdApelante != null) {
                $apelantesSolicitudesDto->setIdApelanteSolicitud($byIdApelante);
            }
            $apelantesSolicitudesDto->setActivo('S');

            $getApelantesSolicitudes = $apelantesSolicitudesDao->selectApelantessolicitudes($apelantesSolicitudesDto, '', $proveedor);


            if ($getApelantesSolicitudes != '') {

                if (count($getApelantesSolicitudes)) {

                    foreach ($getApelantesSolicitudes as $apelanteSolicitud) {

                        $apelanteCarpetaDto = new ApelantescarpetasDTO();
                        $apelanteCarpetaDao = new ApelantescarpetasDAO();

                        $apelanteCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
                        $apelanteCarpetaDto->setNombre($apelanteSolicitud->getNombre());
                        $apelanteCarpetaDto->setPaterno($apelanteSolicitud->getPaterno());
                        $apelanteCarpetaDto->setMaterno($apelanteSolicitud->getMaterno());
                        $apelanteCarpetaDto->setCveGenero($apelanteSolicitud->getCveGenero());
                        $apelanteCarpetaDto->setCveTipoPersona($apelanteSolicitud->getCveTipoPersona());
                        $apelanteCarpetaDto->setNombreMoral($apelanteSolicitud->getNombreMoral());
                        $apelanteCarpetaDto->setCveTipoApelante($apelanteSolicitud->getCveTipoApelante());
                        $apelanteCarpetaDto->setActivo('S');


                        $insertApelanteCarpeta = $apelanteCarpetaDao->insertApelantescarpetas($apelanteCarpetaDto, $proveedor);


                        if ($insertApelanteCarpeta == '') {
                            throw new Exception('no se pudo Copiar el apelante de la solicitud con id: ' . $apelanteSolicitud->getIdApelanteSolicitud() . ' a apelantes carpetas');
                        }
                    }
                }
            }


            if ($tmp == null) {
                $proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'los apelantes de la solicitud de audiencia con id . ' . $idSolicitudAudiencia . ' fueron copiados a carpetas judiciales con la carpeta id ' . $idCarpetaJudicial
            ];
        } catch (Exception $e) {

            if ($tmp == null) {
                $proveedor->execute('ROLLBACK');
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }


        return $response;
    }

    /**
     * metodo para copiar los delitos
     * @param $idSolicitudAudiencia
     * @param $idCarpetaJudicial
     * @param null $proveedor
     * @param null $byIdDelito
     * @return array
     */
    public function CopiarDelitos($idSolicitudAudiencia, $idCarpetaJudicial, $proveedor = null, $byIdDelito = null) {
        $tmp = $proveedor;
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        try {

            if ($tmp == null) {
                $proveedor->execute("BEGIN");
            }

            $delitoSolicitudDto = new DelitossolicitudesDTO();
            $delitoSolicitudDao = new DelitossolicitudesDAO();

            $delitoSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            if ($byIdDelito != null) {
                $delitoSolicitudDto->setIdDelitoSolicitud($byIdDelito);
            }
            $delitoSolicitudDto->setActivo('S');

            $getDelitosSolicitud = $delitoSolicitudDao->selectDelitossolicitudes($delitoSolicitudDto, '', $proveedor); //$this->proveedor);

            if ($getDelitosSolicitud != '') {

                foreach ($getDelitosSolicitud as $delitoSolicitud) {
                    $delitoCarpetaDto = new DelitoscarpetasDTO();
                    $delitoCarpetaDao = new DelitoscarpetasDAO();

                    $delitoCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
                    $delitoCarpetaDto->setCveDelito($delitoSolicitud->getCveDelito());
                    $delitoCarpetaDto->setActivo($delitoSolicitud->getActivo());

                    $insertDelitoCarpeta = $delitoCarpetaDao->insertDelitoscarpetas($delitoCarpetaDto, $proveedor); //$this->proveedor);

                    if ($insertDelitoCarpeta == '')
                        throw new Exception('no se pudo copiar un delito de la solicitud a carpetas judiciales, intenta nuevamente');

                    $_SESSION['delitos_copia'][$delitoSolicitud->getIdDelitoSolicitud()] = $insertDelitoCarpeta[0]->getIdDelitoCarpeta();
                }
            }

            if ($tmp == null) {
                $proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'los delitos fueron copiados a carpetas judiciales'
            ];
        } catch (Exception $e) {

            if ($tmp == null) {
                $proveedor->execute('ROLLBACK');
            }

            if (isset($_SESSION['delitos_copia']))
                unset($_SESSION['delitos_copia']);

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * metodo para copiar la relacion entre imputados ofendidos y delitos y la violencia de genero si existe
     * @param $idSolicitudAudiencia
     * @param $idCarpetaJudicial
     * @param null $proveedor
     * @param null $byIdRelacion
     * @return array
     */
    public function CopiarRelacion($idSolicitudAudiencia, $idCarpetaJudicial, $proveedor = null, $byIdRelacion = null) {
        $tmp = $proveedor;
        if ($proveedor == null) {
            $proveedor = new Proveedor('mysql', 'sigejupe');
            $proveedor->connect();
        }

        try {

            if ($tmp == null) {
                $proveedor->execute("BEGIN");
            }


            $impOfeDelSolicitudDto = new ImpofedelsolicitudesDTO();
            $impOfeDelSolicitudDao = new ImpofedelsolicitudesDAO();

            $impOfeDelSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
            if ($byIdRelacion != null) {
                $impOfeDelSolicitudDto->setIdImpOfeDelSolicitud($byIdRelacion);
            }
            $impOfeDelSolicitudDto->setActivo('S');

            $getImoOfeDelSolicitud = $impOfeDelSolicitudDao->selectImpofedelsolicitudes($impOfeDelSolicitudDto, '', $proveedor);

            /* echo "<pre>";
              print_r("se muestran las relaciones de la solicitud de audiencia nu 45");
              print_r($getImoOfeDelSolicitud);
              echo "<hr>"; */

            if ($getImoOfeDelSolicitud != '') {

                foreach ($getImoOfeDelSolicitud as $relacionSolicitud) {

                    $relacionCarpetaDto = new ImpofedelcarpetasDTO();
                    $relacionCarpetaDao = new ImpofedelcarpetasDAO();

                    if (!isset($_SESSION['imputados_copia'][$relacionSolicitud->getIdImputadoSolicitud()]))
                        throw new Exception('la variable de sesión no esta inicializada, no se encontro la referencia del imputado de solicitud ' . $relacionSolicitud->getIdImputadoSolicitud());
                    if (!isset($_SESSION['ofendidos_copia'][$relacionSolicitud->getIdOfendidoSolicitud()]))
                        throw new Exception('la variable de sesión no esta inicializada, no se encontro la referencia del ofendido de solicitud ' . $relacionSolicitud->getIdOfendidoSolicitud());
                    if (!isset($_SESSION['delitos_copia'][$relacionSolicitud->getIdDelitoSolicitud()]))
                        throw new Exception('la variable de sesión no esta inicializada, no se encontro la referencia del delito de solicitud ' . $relacionSolicitud->getIdDelitoSolicitud());


                    $idImputadoRelacion = $_SESSION['imputados_copia'][$relacionSolicitud->getIdImputadoSolicitud()];
                    $idOfendidoRelacion = $_SESSION['ofendidos_copia'][$relacionSolicitud->getIdOfendidoSolicitud()];
                    $idDelitoRelacion = $_SESSION['delitos_copia'][$relacionSolicitud->getIdDelitoSolicitud()];

                    $relacionCarpetaDto->setIdCarpetaJudicial($idCarpetaJudicial);
                    $relacionCarpetaDto->setIdImputadoCarpeta($idImputadoRelacion);
                    $relacionCarpetaDto->setIdOfendidoCarpeta($idOfendidoRelacion);
                    $relacionCarpetaDto->setIdDelitoCarpeta($idDelitoRelacion);
                    $relacionCarpetaDto->setCveModalidad($relacionSolicitud->getCveModalidad());
                    $relacionCarpetaDto->setCveComision($relacionSolicitud->getCveComision());
                    $relacionCarpetaDto->setCveConcurso($relacionSolicitud->getCveConcurso());
                    $relacionCarpetaDto->setCveClasificacionDelitoOrden($relacionSolicitud->getCveClasificacionDelitoOrden());
                    $relacionCarpetaDto->setCveElementoComision($relacionSolicitud->getCveElementoComision());
                    $relacionCarpetaDto->setCveClasificacionDelito($relacionSolicitud->getCveClasificacionDelito());
                    $relacionCarpetaDto->setCveMunicipio($relacionSolicitud->getCveMunicipio());
                    $relacionCarpetaDto->setCveEntidad($relacionSolicitud->getCveEntidad());
                    $relacionCarpetaDto->setCveFormaAccion($relacionSolicitud->getCveFormaAccion());
                    $relacionCarpetaDto->setCveConsumacion($relacionSolicitud->getCveConsumacion());
                    $relacionCarpetaDto->setCveGradoParticipacion($relacionSolicitud->getCveGradoParticipacion());
                    $relacionCarpetaDto->setCveRelacionImpOfe($relacionSolicitud->getCveRelacionImpOfe());
                    $relacionCarpetaDto->setCveTerminacion($relacionSolicitud->getCveTerminacion());
                    $relacionCarpetaDto->setActivo($relacionSolicitud->getActivo());
                    $relacionCarpetaDto->setFechaDelito($relacionSolicitud->getFechaDelito());
                    $relacionCarpetaDto->setDireccion($relacionSolicitud->getDireccion());
                    $relacionCarpetaDto->setColonia($relacionSolicitud->getColonia());
                    $relacionCarpetaDto->setNumInterior($relacionSolicitud->getNumInterior());
                    $relacionCarpetaDto->setNumExterior($relacionSolicitud->getNumExterior());
                    $relacionCarpetaDto->setCp($relacionSolicitud->getCp());

                    $insertRelacionCarpeta = $relacionCarpetaDao->insertImpofedelcarpetas($relacionCarpetaDto, $proveedor); //$this->proveedor);

                    if ($insertRelacionCarpeta == '')
                        throw new Exception('no se pudo copiar una relación a carpetas judiciales');

                    $idRelacionCarpeta = $insertRelacionCarpeta[0]->getIdImpOfeDelCarpeta();

                    $idRelacionSolicitud = $relacionSolicitud->getIdImpOfeDelSolicitud();

                    /* print_r('INSERTA LA RELACION');
                      print_r($insertRelacionCarpeta); */


                    /*
                     * consultar en efectos ofendidos solicitudes a ver si existen registros con el id de relacion de impofedelsolicitud
                     * si existen registros los copiamos a carpetasefectos
                     */

                    $efectosOfendidosDto = new EfectosofendidosDTO();
                    $efectosOfendidosDao = new EfectosofendidosDAO();

                    $efectosOfendidosDto->setIdImpOfeDelSolicitud($idRelacionSolicitud);
                    $efectosOfendidosDto->setActivo('S');

                    $getEfectosOfendidosSolicitud = $efectosOfendidosDao->selectEfectosofendidos($efectosOfendidosDto, '', $proveedor); //$this->proveedor);

                    /* print_r($getEfectosOfendidosSolicitud); */

                    if ($getEfectosOfendidosSolicitud != '') {

                        foreach ($getEfectosOfendidosSolicitud as $efectoOfendidoSolicitud) {

                            //$efectoOfendidoSolicitud = new EfectosofendidosDTO();


                            /*
                              se consulta la referencia del efecto solicitud
                              $efectoOfendidoSolicitud->getIdReferencia()
                              y se consulta violencia de genero en solicitudes para insertar enc arpetas violencia de genero y
                              insertar la referencia en efectosofendidoscarpetas
                             */


                            $violenciaGeneroSolicitudDto = new ViolenciadegeneroDTO();
                            $violenciaGeneroSolicitudDao = new ViolenciadegeneroDAO();

                            $violenciaGeneroSolicitudDto->setIdViolenciaDeGenero($efectoOfendidoSolicitud->getIdReferencia());
                            $violenciaGeneroSolicitudDto->setIdImpOfeDelSolicitud($idRelacionSolicitud);

                            $violenciaGeneroSolicitudDto->setActivo('S');

                            $getViolenciaGeneroSolicitud = $violenciaGeneroSolicitudDao->selectViolenciadegenero($violenciaGeneroSolicitudDto, '', $proveedor); //$this->proveedor);

                            /* print_r("se consulta violencia de genero");
                              print_r($getViolenciaGeneroSolicitud); */


                            if ($getViolenciaGeneroSolicitud != '') {

                                foreach ($getViolenciaGeneroSolicitud as $violenciaGeneroSolicitud) {

                                    $violenciaGeneroCarpetaDto = new ViolenciadegenerocarpetasDTO();
                                    $violenciaGeneroCarpetaDao = new ViolenciadegenerocarpetasDAO();

                                    $violenciaGeneroCarpetaDto->setIdImpOfeDelCarpeta($idRelacionCarpeta);
                                    $violenciaGeneroCarpetaDto->setCveEfecto($violenciaGeneroSolicitud->getCveEfecto());
                                    $violenciaGeneroCarpetaDto->setActivo($violenciaGeneroSolicitud->getActivo());

                                    $insertViolenciaGeneroCarpeta = $violenciaGeneroCarpetaDao->insertViolenciadegenerocarpetas($violenciaGeneroCarpetaDto, $proveedor); //$this->proveedor);


                                    /* print_r("se inserto en violenciadegenro carpetas la siguiente:");
                                      print_r($insertViolenciaGeneroCarpeta); */

                                    if ($insertViolenciaGeneroCarpeta == '')
                                        throw new Exception('no se pudo copiar violencia genero a carpetas judiciales');

                                    $idViolenciaGeneroCarpeta = $insertViolenciaGeneroCarpeta[0]->getIdViolenciaDeGeneroCarpeta();

                                    /*
                                     * violencia factores sociales
                                     */

                                    $violenciaFactoresSocialesSolicitudDto = new ViolenciafactoressocialesDTO();
                                    $violenciaFactoresSocialesSolicitudDao = new ViolenciafactoressocialesDAO();

                                    $violenciaFactoresSocialesSolicitudDto->setIdViolenciaDeGenero($violenciaGeneroSolicitud->getIdViolenciaDeGenero());
                                    $violenciaFactoresSocialesSolicitudDto->setActivo('S');

                                    $getViolenciaFactoresSocialesSolicitud = $violenciaFactoresSocialesSolicitudDao->selectViolenciafactoressociales($violenciaFactoresSocialesSolicitudDto, '', $proveedor); //$this->proveedor);

                                    if ($getViolenciaFactoresSocialesSolicitud != '') {

                                        foreach ($getViolenciaFactoresSocialesSolicitud as $violenciaFactorSocialSolicitud) {

                                            $violenciaFactoresSocialesCarpetasDto = new ViolenciafactoressocialescarpetasDTO();
                                            $violenciaFactoresSocialesCarpetasDao = new ViolenciafactoressocialescarpetasDAO();

                                            $violenciaFactoresSocialesCarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaGeneroCarpeta);
                                            $violenciaFactoresSocialesCarpetasDto->setCveFactorCultural($violenciaFactorSocialSolicitud->getCveFactorCultural());
                                            $violenciaFactoresSocialesCarpetasDto->setActivo($violenciaFactorSocialSolicitud->getActivo());

                                            $insertViolenciaFactorSocialCarpeta = $violenciaFactoresSocialesCarpetasDao->insertViolenciafactoressocialescarpetas($violenciaFactoresSocialesCarpetasDto, $proveedor); //$this->proveedor);

                                            if ($insertViolenciaFactorSocialCarpeta == '')
                                                throw new Exception('no se pudo copiar violencia factores sociales a carpetas judiciales');
                                        }
                                    }
                                    /*
                                     * termina violencia factores sociales
                                     */


                                    /*
                                     * violencia homicidios dolosos
                                     */

                                    $violenciaHomicidiosDolososSolicitudesDto = new ViolenciahomicidiosdolososDTO();
                                    $violenciaHomicidiosDolososSolicitudesDao = new ViolenciahomicidiosdolososDAO();

                                    $violenciaHomicidiosDolososSolicitudesDto->setIdViolenciaDeGenero($violenciaGeneroSolicitud->getIdViolenciaDeGenero());
                                    $violenciaHomicidiosDolososSolicitudesDto->setActivo('S');

                                    $getViolenciaHomicidiosDolososSolicitud = $violenciaHomicidiosDolososSolicitudesDao->selectViolenciahomicidiosdolosos($violenciaHomicidiosDolososSolicitudesDto, '', $proveedor); //$this->proveedor);

                                    if ($getViolenciaHomicidiosDolososSolicitud != '') {

                                        foreach ($getViolenciaHomicidiosDolososSolicitud as $violenciaHomicidiosDolososSolicitud) {

                                            $violenciaHomicidiosDolososCarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();
                                            $violenciaHomicidiosDolososCarpetasDao = new ViolenciahomicidiosdolososcarpetasDAO();

                                            $violenciaHomicidiosDolososCarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaGeneroCarpeta);
                                            $violenciaHomicidiosDolososCarpetasDto->setCveHomicidioDoloso($violenciaHomicidiosDolososSolicitud->getCveHomicidioDoloso());
                                            $violenciaHomicidiosDolososCarpetasDto->setActivo($violenciaHomicidiosDolososSolicitud->getActivo());

                                            $insertViolenciaHomicidioDolosoCarpeta = $violenciaHomicidiosDolososCarpetasDao->insertViolenciahomicidiosdolososcarpetas($violenciaHomicidiosDolososCarpetasDto, $proveedor); //$this->proveedor);

                                            if ($insertViolenciaHomicidioDolosoCarpeta == '')
                                                throw new Exception('no se pudo copiar homicidios dolosos a carpetas judiciales');
                                        }
                                    }

                                    /*
                                     * termina violencia homicidios dolosos
                                     */
                                }
                            }

                            /*
                             * termina violencia de genero
                             */


                            $efectosOfendidosCarpetasDto = new EfectosofendidoscarpetasDTO();
                            $efectosOfendidosCarpetasDao = new EfectosofendidoscarpetasDAO();

                            $efectosOfendidosCarpetasDto->setIdImpOfeDelCarpeta($idRelacionCarpeta);
                            $efectosOfendidosCarpetasDto->setCveDetalleEfecto($efectoOfendidoSolicitud->getCveDetalleEfecto());
                            $efectosOfendidosCarpetasDto->setIdReferencia($idViolenciaGeneroCarpeta);
                            $efectosOfendidosCarpetasDto->setOrigen($efectoOfendidoSolicitud->getOrigen());
                            $efectosOfendidosCarpetasDto->setActivo($efectoOfendidoSolicitud->getActivo());

                            /* print_r("se va a insertar el efecto ofendido en carpetas");
                              print_r($efectosOfendidosCarpetasDto); */

                            $insertEfectosOfendidosCarpetas = $efectosOfendidosCarpetasDao->insertEfectosofendidoscarpetas($efectosOfendidosCarpetasDto, $proveedor); //$this->proveedor);

                            if ($insertEfectosOfendidosCarpetas == '')
                                throw new Exception('no se pudo copiar un efecto ofendido a carpetas judiciales');

                            /*
                             * termina consultar y copiar efectos ofendidos solicitudes a efectos ofendidos carpetas
                             */
                        }
                    }

                    /*
                     * consultar violencia de genero solicitudes y copiar a violencia de genero carpetas
                     */


                    /*
                     * inicia proceso para copiar trata de personas si existen
                     */

                    $trataPersonasSolicitudDto = new TrataspersonasDTO();
                    $trataPersonasSolicitudDao = new TrataspersonasDAO();

                    $trataPersonasSolicitudDto->setIdImpOfeDelSolicitud($idRelacionSolicitud);
                    $trataPersonasSolicitudDto->setActivo('S');

                    $getTrataPersonasSolicitud = $trataPersonasSolicitudDao->selectTrataspersonas($trataPersonasSolicitudDto, '', $proveedor);
                    ;

                    /* print_r("trata de personas en solicitudes audiencias");
                      print_r($getTrataPersonasSolicitud); */

                    if ($getTrataPersonasSolicitud != '') {

                        foreach ($getTrataPersonasSolicitud as $trataPersonaSolicitud) {

                            $trataPersonasCarpetaDto = new TrataspersonascarpetasDTO();
                            $trataPersonasCarpetaDao = new TrataspersonascarpetasDAO();

                            $trataPersonasCarpetaDto->setIdImpOfeDelCarpeta($idRelacionCarpeta);


                            $cveEstadoDestino = ($trataPersonaSolicitud->getCveEstadoDestino() == 0) ? null : $trataPersonaSolicitud->getCveEstadoDestino();
                            $cveMunicipioDestino = ($trataPersonaSolicitud->getCveMunicipioDestino() == 0) ? null : $trataPersonaSolicitud->getCveMunicipioDestino();
                            $cveEstadoOrigen = ($trataPersonaSolicitud->getCveEstadoOrigen() == 0) ? null : $trataPersonaSolicitud->getCveEstadoOrigen();
                            $cveMunicipioOrigen = ($trataPersonaSolicitud->getCveMunicipioOrigen() == 0) ? null : $trataPersonaSolicitud->getCveMunicipioOrigen();

                            $trataPersonasCarpetaDto->setCveEstadoDestino($cveEstadoDestino);
                            $trataPersonasCarpetaDto->setCveMunicipioDestino($cveMunicipioDestino);
                            $trataPersonasCarpetaDto->setCvePaisDestino($trataPersonaSolicitud->getCvePaisDestino());
                            $trataPersonasCarpetaDto->setEstadoDestino($trataPersonaSolicitud->getEstadoDestino());
                            $trataPersonasCarpetaDto->setMunicipioDestino($trataPersonaSolicitud->getMunicipioDestino());
                            $trataPersonasCarpetaDto->setCveEstadoOrigen($cveEstadoOrigen);
                            $trataPersonasCarpetaDto->setCveMunicipioOrigen($cveMunicipioOrigen);
                            $trataPersonasCarpetaDto->setCvePaisOrigen($trataPersonaSolicitud->getCvePaisOrigen());
                            $trataPersonasCarpetaDto->setEstadoOrigen($trataPersonaSolicitud->getEstadoOrigen());
                            $trataPersonasCarpetaDto->setMunicipioOrigen($trataPersonaSolicitud->getMunicipioOrigen());
                            $trataPersonasCarpetaDto->setCveTipoTrata($trataPersonaSolicitud->getCveTipoTrata());
                            $trataPersonasCarpetaDto->setCveTrasportacion($trataPersonaSolicitud->getCveTrasportacion());
                            $trataPersonasCarpetaDto->setActivo($trataPersonaSolicitud->getActivo());

                            $insertTrataPersonaCarpeta = $trataPersonasCarpetaDao->insertTrataspersonascarpetas($trataPersonasCarpetaDto, $proveedor); //$this->proveedor);

                            /* print_r("se inserta en trata personas carpetas los siguientes");
                              print_r($insertTrataPersonaCarpeta); */

                            if ($insertTrataPersonaCarpeta == '')
                                throw new Exception('no se pudo copiar trata de personas a carpetas judiciales');
                        }
                    }


                    /*
                     * termina copiar trata de personas
                     */


                    /*
                     * inicia proceso para copiar sexuales
                     */

                    $sexualesSolicitudesDto = new SexualesDTO();
                    $sexualesSolicitudesDao = new SexualesDAO();

                    $sexualesSolicitudesDto->setIdImpOfeDelSolicitud($idRelacionSolicitud);
                    $sexualesSolicitudesDto->setActivo('S');

                    $getSexualesSolicitud = $sexualesSolicitudesDao->selectSexuales($sexualesSolicitudesDto, '', $proveedor); //$this->proveedor);

                    if ($getSexualesSolicitud != '') {

                        foreach ($getSexualesSolicitud as $sexualSolicitud) {

                            $sexualCarpetaDto = new SexualescarpetasDTO();
                            $sexualCarpetaDao = new SexualescarpetasDAO();

                            $sexualCarpetaDto->setIdImpOfeDelCarpeta($idRelacionCarpeta);
                            $sexualCarpetaDto->setCveModalidadAcoso($sexualSolicitud->getCveModalidadAcoso());
                            $sexualCarpetaDto->setCveAmbitoAcoso($sexualSolicitud->getCveAmbitoAcoso());
                            $sexualCarpetaDto->setActivo($sexualSolicitud->getActivo());

                            $insertSexualCarpeta = $sexualCarpetaDao->insertSexualescarpetas($sexualCarpetaDto, $proveedor); //$this->proveedor);

                            if ($insertSexualCarpeta == '')
                                throw new Exception('no se pudo copiar sexuales a carpetas judiciales');


                            $idSexualCarpeta = $insertSexualCarpeta[0]->getIdSexualCarpeta();
                            /*
                             * testigos sexuales
                             */

                            $testigosSexualesSolicitudDto = new TestigossexualesDTO();
                            $testigosSexualesSolicitudDao = new TestigossexualesDAO();

                            $testigosSexualesSolicitudDto->setIdSexual($sexualSolicitud->getIdSexual());
                            $testigosSexualesSolicitudDto->setActivo('S');

                            $getTestigosSexualesSolicitud = $testigosSexualesSolicitudDao->selectTestigossexuales($testigosSexualesSolicitudDto, '', $proveedor); //$this->proveedor);

                            if ($getTestigosSexualesSolicitud != '') {

                                foreach ($getTestigosSexualesSolicitud as $testigoSexualSolicitud) {

                                    $testigoSexualCarpetaDto = new TestigossexualescarpetasDTO();
                                    $testigoSexualCarpetaDao = new TestigossexualescarpetasDAO();

                                    $testigoSexualCarpetaDto->setIdSexualCarpeta($idSexualCarpeta);
                                    $testigoSexualCarpetaDto->setPaterno($testigoSexualSolicitud->getPaterno());
                                    $testigoSexualCarpetaDto->setMaterno($testigoSexualSolicitud->getMaterno());
                                    $testigoSexualCarpetaDto->setNombre($testigoSexualSolicitud->getNombre());
                                    $testigoSexualCarpetaDto->setCveGenero($testigoSexualSolicitud->getCveGenero());
                                    $testigoSexualCarpetaDto->setActivo($testigoSexualSolicitud->getActivo());

                                    $insertTestigoSexualCarpeta = $testigoSexualCarpetaDao->insertTestigossexualescarpetas($testigoSexualCarpetaDto, $proveedor); //$this->proveedor);

                                    if ($insertTestigoSexualCarpeta == '')
                                        throw new Exception('no se pudo copiar testigos sexuales a carpetas judiciales');
                                }
                            }
                            /*
                             * termina testigos sexuales
                             */


                            /*
                             * sexuales conductas
                             */

                            $sexualesConductasSolicitudDto = new SexualesconductasDTO();
                            $sexualesConductasSolicitudDao = new SexualesconductasDAO();

                            $sexualesConductasSolicitudDto->setIdSexual($sexualSolicitud->getIdSexual());
                            $sexualesConductasSolicitudDto->setActivo('S');

                            $getSexualesConductasSolicitud = $sexualesConductasSolicitudDao->selectSexualesconductas($sexualesConductasSolicitudDto);

                            if ($getSexualesConductasSolicitud != '') {

                                foreach ($getSexualesConductasSolicitud as $sexualConductaSolicitud) {

                                    $sexualesConductasCarpetaDto = new SexualesconductascarpetasDTO();
                                    $sexualesConductasCarpetaDao = new SexualesconductascarpetasDAO();

                                    $sexualesConductasCarpetaDto->setIdSexualCarpeta($idSexualCarpeta);
                                    $sexualesConductasCarpetaDto->setCveConducta($sexualConductaSolicitud->getCveConducta());
                                    $sexualesConductasCarpetaDto->setActivo($sexualConductaSolicitud->getActivo());

                                    $insertSexualConductaCarpeta = $sexualesConductasCarpetaDao->insertSexualesconductascarpetas($sexualesConductasCarpetaDto, $proveedor); //$this->proveedor);

                                    if ($insertSexualConductaCarpeta == '')
                                        throw new Exception('no se pudo copiar sexuales conductas a carpetas judiciales');


                                    $idSexualConductaCarpeta = $insertSexualConductaCarpeta[0]->getIdSexualConductaCarpeta();

                                    $detalleSexualesConductasSolicitudDto = new DetallessexualesconductasDTO();
                                    $detalleSexualesConductasSolicitudDao = new DetallessexualesconductasDAO();

                                    $detalleSexualesConductasSolicitudDto->setIdSexualConducta($sexualConductaSolicitud->getIdSexualConducta());
                                    $detalleSexualesConductasSolicitudDto->setActivo('S');

                                    $getDetalleSexualesConductasSolicitud = $detalleSexualesConductasSolicitudDao->selectDetallessexualesconductas($detalleSexualesConductasSolicitudDto, '', $proveedor); //$this->proveedor);


                                    if ($getDetalleSexualesConductasSolicitud != '') {

                                        foreach ($getDetalleSexualesConductasSolicitud as $detalleSexualConductaSolicitud) {

                                            $detalleSexualConductaCarpetaDto = new DetallessexualesconductascarpetasDTO();
                                            $detalleSexualConductaCarpetaDao = new DetallessexualesconductascarpetasDAO();

                                            $detalleSexualConductaCarpetaDto->setIdSexualConductaCarpeta($idSexualConductaCarpeta);
                                            $detalleSexualConductaCarpetaDto->setCveDetalleConducta($detalleSexualConductaSolicitud->getCveDetalleConducta());
                                            $detalleSexualConductaCarpetaDto->setActivo($detalleSexualConductaSolicitud->getActivo());

                                            $insertDetalleSexualConductaCarpeta = $detalleSexualConductaCarpetaDao->insertDetallessexualesconductascarpetas($detalleSexualConductaCarpetaDto, $proveedor); //$this->proveedor);

                                            if ($insertDetalleSexualConductaCarpeta == '')
                                                throw new Exception('no se pudo copiar detalles sexuales conductas a carpetas judiciales');
                                        }
                                    }
                                }
                            }


                            /*
                             * termina sexuales conductas
                             */
                        }
                    }

                    /*
                     * termina proceso para copiar sexuales
                     */


                    //echo "<hr><br><br>";
                }
            }


            if ($tmp == null) {
                $proveedor->execute('COMMIT');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'la copia de la relación se realizó correctamente'
            ];
        } catch (Exception $e) {

            if ($tmp == null) {
                $proveedor->execute('ROLLBACK');
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    /**
     * la ponderacion se obtiene sumando todas las relaciones de la solicitud en donde
     * un imputado va a ser = 1
     * un ofendido va a ser = 1
     * y se tiene que sumar el peso del delito
     * imputado + pesodelito + ofendido
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @param null $byIdImputadoSolicitud
     * @return int
     * @throws Exception
     */
    public function getPonderacion($idSolicitudAudiencia, $proveedor = null, $byIdImputadoSolicitud = null) {

        $impofedelSolicitudDto = new ImpofedelsolicitudesDTO();
        $impofedelSolicitudDto->setActivo('S');
        $impofedelSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        if (!is_null($byIdImputadoSolicitud)) {
            $impofedelSolicitudDto->setIdImputadoSolicitud($byIdImputadoSolicitud);
        }

        $impofedelSolicitudDao = new ImpofedelsolicitudesDAO();

        $getImpofedelSolicitud = $impofedelSolicitudDao->selectImpofedelsolicitudes($impofedelSolicitudDto, '', $proveedor);

        if ($getImpofedelSolicitud == '')
            throw new Exception('no se encontro la relacion en impofedelsolicitud y no se puede calcular la ponderacion');

        $suma = 0;

        $DelitoSolicitudDto = new DelitossolicitudesDTO();
        $DelitoSolicitudDao = new DelitossolicitudesDAO();

        $DelitoDto = new DelitosDTO();
        $DelitoDao = new DelitosDAO();

        foreach ($getImpofedelSolicitud as $impofedelSolicitud) {

            $DelitoSolicitudDto->setIdDelitoSolicitud($impofedelSolicitud->getIdDelitoSolicitud());

            $DelitoSolicitudDto->setActivo('S');

            $getDelitoSolicitud = $DelitoSolicitudDao->selectDelitossolicitudes($DelitoSolicitudDto, '', $proveedor);

            if ($getDelitoSolicitud == '')
                throw new Exception('no se encontro el delitosolicitud con id ' . $impofedelSolicitud->getIdDelitoSolicitud());

            $DelitoDto->setCveDelito($getDelitoSolicitud[0]->getCveDelito());
            $DelitoDto->setActivo('S');

            $getDelito = $DelitoDao->selectDelitos($DelitoDto, '', $proveedor);

            if ($getDelito == '')
                throw new Exception('no se encontro el delito con el id ' . $getDelitoSolicitud[0]->getCveDelito());

            $imputado = 1;
            $ofendido = 1;

            $pesoDelito = (int) $getDelito[0]->getPeso();

            $suma = $suma + ($imputado + $pesoDelito + $ofendido);
        }

        return $suma;
    }

    /**
     * @param $cveJuzgado
     * @param $cveTipoJuzgado
     * @param $proveedor
     * @return array
     */
    public function getJuzgado($cveJuzgado, $cveTipoJuzgado, $proveedor) {
        try {

            $juzgadoDto = new JuzgadosDTO();
            $juzgadoDao = new JuzgadosDAO();

            $juzgadoDto->setCveJuzgado($cveJuzgado);
            $juzgadoDto->setActivo('S');

            $selectJuzgadoById = $juzgadoDao->selectJuzgados($juzgadoDto, '', $proveedor);

            if ($selectJuzgadoById == '') {
                throw new Exception('no se encontró el juzgado con la clave: ' . $cveJuzgado);
            }

            if ($cveTipoJuzgado === 5) {
                $cveJuzgado = $selectJuzgadoById[0]->getCveJuzgado();
            } else {
                $distritoJuzgado = $selectJuzgadoById[0]->getCveDistrito();

                $juzgadoDto->setCveJuzgado('');
                $juzgadoDto->setCveTipojuzgado($cveTipoJuzgado);
                $juzgadoDto->setCveDistrito($distritoJuzgado);
                $juzgadoDto->setActivo('S');

                $selectJuzgadosByDistrito = $juzgadoDao->selectJuzgados($juzgadoDto, '', $proveedor);

                if ($selectJuzgadosByDistrito == '') {
                    throw new Exception('no se encontraron juzgados con el distrito : ' . $distritoJuzgado . ' y el tipo de juzgado:' . $cveTipoJuzgado);
                }

                $cveJuzgado = $selectJuzgadosByDistrito[0]->getCveJuzgado();
            }
            $response = [
                'estatus' => 'ok',
                'mensaje' => 'el juzgado se obtuvo correctamente',
                'data' => $cveJuzgado
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
     * @param $getSolicitud //un dto de la solicitud sobre la cual se genero la carpeta
     * @param $carpetaJudicial //un dto de la carpeta judicial que se registró
     * @param null $proveedor
     * @return mixed
     */
    public function updateSolicitudAudiencia($getSolicitud, $carpetaJudicial, $proveedor = null) {
        try {

            /*
             * modificar el campo idreferencia en la solicitud audiencias con el id de la nueva carpeta creada
             */
            $solicitudAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudAudienciaDao = new SolicitudesaudienciasDAO();

            $solicitudAudienciaDto->setIdSolicitudAudiencia($getSolicitud[0]->getIdSolicitudAudiencia());
            $solicitudAudienciaDto->setNumero($carpetaJudicial->getNumero());
            $solicitudAudienciaDto->setAnio($carpetaJudicial->getAnio());
            $solicitudAudienciaDto->setCveEtapaProcesal($carpetaJudicial->getCveEtapaProcesal());
            $solicitudAudienciaDto->setCveJuzgadoDesahoga($carpetaJudicial->getCveJuzgado());
            $solicitudAudienciaDto->setCveJuzgado($carpetaJudicial->getCveJuzgado());
            $solicitudAudienciaDto->setCveTipoCarpeta($carpetaJudicial->getCveTipoCarpeta());
            $solicitudAudienciaDto->setIdReferencia($carpetaJudicial->getIdCarpetaJudicial());
            $solicitudAudienciaDto->setFechaEnvio(date("Y-m-d H:i:s"));


            $updateSolicitudAudiencias = $solicitudAudienciaDao->updateSolicitudesaudiencias($solicitudAudienciaDto, $proveedor);

            if ($updateSolicitudAudiencias == '')
                throw new Exception('no se pudo editar el id de referencia en la solicitud de audiencias');
            /*
             * termina modificar el campo de referencia de la solicitud
             */

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'solicitud de audiencia modificada correctamente',
                'data' => $updateSolicitudAudiencias
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage() . ' ' . ' linia(' . $e->getLine() . ')'
            ];
        }

        return $response;
    }

    /**
     * metodo para cerrar carpeta
     * éste metodo se va a quitar si el metodo modificarimputadosycerrarcarpeta funciona
     * @param $idCarpetaReferencia
     * @param $idCarpetaNueva
     * @param null $proveedor
     * @return array
     */
    public function cerrarCarpeta($idCarpetaReferencia, $idCarpetaNueva, $proveedor = null) {
        try {
            $carpetaJudicialDto = new CarpetasjudicialesDTO();
            $carpetaJudicialDao = new CarpetasjudicialesDAO();

            $carpetaJudicialDto->setIdCarpetaJudicial($idCarpetaReferencia);
            $carpetaJudicialDto->setActivo('S');

            $getCarpetaReferencia = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

            $carpetaJudicialDto->setIdCarpetaJudicial($idCarpetaNueva);
            $getCarpetaNueva = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

            if ($getCarpetaReferencia == '')
                throw new Exception('no se encontró la carpeta de referencia para cerrar');
            if ($getCarpetaNueva == '')
                throw new Exception('no se encontro la nueva carpeta para cerrar');

            $imputadosCarpetaReferencia = $getCarpetaReferencia[0]->getNumImputados();
            $imputadosCarpetaNueva = $getCarpetaNueva[0]->getNumImputados();

            //si el num de imputados de la nueva son igual a los de referencia se cierra la carpeta de referencia
            if ($imputadosCarpetaReferencia == $imputadosCarpetaNueva) {

                $carpetaJudicialDto->setIdCarpetaJudicial($idCarpetaReferencia);
                $carpetaJudicialDto->setFechaTermino(date("Y-m-d H:i:s"));
                $carpetaJudicialDto->setCveEstatusCarpeta(2);


                $updateCarpetaReferencia = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $proveedor);

                if ($updateCarpetaReferencia == '')
                    throw new Exception('no se pudo cerrar la carpeta de referencia, error al modificar los datos');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'la carpeta de referencia se cerró correctamente'
            ];
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage() . ' ' . $e->getLine()
            ];
        }

        return $response;
    }

    /**
     * cuando se crea una nueva carpeta
     * 1.-  regreso a modificar la etapa procesal nueva en los imputados de la carpeta anterior
     * 1.1.- recorrer los imputados de la solicitud
     * 1.2.- se toma el idImputadoCarpeta de cada imputado y se edita el cveEtapaProcesal en imputadosCarpetas
     * 2.- se verifica si la etapa procesal de cada imputado es posterior
     * 2.1.- si la etapa procesal de todos los imputados es superior entonces se cierra la carpeta
     * @param $nuevaEtapaProcesal
     * @param $idSolicitudAudiencia
     * @param null $proveedor
     * @throws Exception
     * @internal param $idReferencia
     */
    public function modificarEtapaProcesalImputadosCerrarCarpeta($nuevaEtapaProcesal, $idSolicitudAudiencia, $proveedor = null) {
        $imputadosSolicitudDto = new ImputadossolicitudesDTO();
        $imputadosSolicitudDao = new ImputadossolicitudesDAO();

        $imputadosSolicitudDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $imputadosSolicitudDto->setActivo('S');

        $getImputadosSolicitud = $imputadosSolicitudDao->selectImputadossolicitudes($imputadosSolicitudDto, '', $proveedor);

        if ($getImputadosSolicitud == '')
            throw new Exception('no se encontraron imputados en la solicitud');

        $imputadosCarpetasDto = new ImputadoscarpetasDTO();
        $imputadosCarpetasDao = new ImputadoscarpetasDAO();

        foreach ($getImputadosSolicitud as $imputadoSolicitud) {
            //editar cada imputadoCarpeta con la nueva etapa procesal
            $imputadosCarpetasDto->setIdImputadoCarpeta($imputadoSolicitud->getIdImputadoCarpeta());
            $imputadosCarpetasDto->setCveEtapaProcesal($nuevaEtapaProcesal);

            $modificarEtapaImputado = $imputadosCarpetasDao->updateImputadoscarpetas($imputadosCarpetasDto, $proveedor);

            if ($modificarEtapaImputado == '')
                throw new Exception('no se pudo modificar la nueva etapa procesal del imputadocarpeta id = ' . $imputadoSolicitud->getIdImputadoCarpeta());

            $idCarpetaJudicialImputadoCarpeta = $modificarEtapaImputado[0]->getIdCarpetaJudicial();
        }


        $carpetaJudicialDto = new CarpetasjudicialesDTO();
        $carpetaJudicialDao = new CarpetasjudicialesDAO();

        $carpetaJudicialDto->setIdCarpetaJudicial($idCarpetaJudicialImputadoCarpeta);
        $carpetaJudicialDto->setActivo('S');

        $getCarpeta = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $proveedor);

        if ($getCarpeta == '')
            throw new Exception('no se encontro la carpeta judicial id:' . $idCarpetaJudicialImputadoCarpeta . ', para intentar cerrar la carpeta');

        $etapaProcesalCarpeta = $getCarpeta[0]->getCveEtapaProcesal();
        $tipoCarpeta = $getCarpeta[0]->getCveTipoCarpeta();
        $imputadosCarpetasDto->setIdImputadoCarpeta('');
        $imputadosCarpetasDto->setIdCarpetaJudicial($getCarpeta[0]->getIdCarpetaJudicial());
        $imputadosCarpetasDto->setActivo('S');

        $getImputadosCarpetas = $imputadosCarpetasDao->selectImputadoscarpetas($imputadosCarpetasDto, '', $proveedor);

        if ($getImputadosCarpetas == '')
            throw new Exception('no se encontraron imputados');

        $countImputadosCarpeta = count($getImputadosCarpetas);
        $countCerrarCarpeta = 0;
        foreach ($getImputadosCarpetas as $imputadoCarpeta) {

            if ($tipoCarpeta == 1) {
                $countCerrarCarpeta ++;
            } else {
                if ($imputadoCarpeta->getCveEtapaProcesal() > $etapaProcesalCarpeta)
                    $countCerrarCarpeta ++;
            }
        }

        //si todos los imputados ya estan en una etapa superior se cierra la carpeta
        if ($countImputadosCarpeta == $countCerrarCarpeta) {

            $carpetaJudicialDto->setIdCarpetaJudicial($getCarpeta[0]->getIdCarpetaJudicial());
            $carpetaJudicialDto->setFechaTermino(date("Y-m-d H:i:s"));
            $carpetaJudicialDto->setCveEstatusCarpeta(2);

            $updateCarpetaReferencia = $carpetaJudicialDao->updateCarpetasjudiciales($carpetaJudicialDto, $proveedor);

            if ($updateCarpetaReferencia == '')
                throw new Exception('no se pudo cerrar la carpeta de referencia, error al modificar los datos');
        }
    }

    /**
     * @param $idAudiencia
     * @param null $proveedor
     * @return array
     */
    public function modificarAudienciaAperturasJuicio($idAudiencia, $proveedor = null) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        try {

            if (is_null($proveedor)) {
                $this->proveedor->execute('BEGIN');
            }

            if (isset($_SESSION['idImputadoCarpetaAuto'])) {

                foreach ($_SESSION['idImputadoCarpetaAuto'] as $idimputadoCarpera) {
                    $aperturaJuicioDao = new AperturasjuicioDAO();
                    $aperturaJuicioDto = new AperturasjuicioDTO();

                    $aperturaJuicioDto->setIdImputadoCarpeta($idimputadoCarpera);
                    $aperturaJuicioDto->setActivo('S');

                    $selectAperturasJuicio = $aperturaJuicioDao->selectAperturasjuicio($aperturaJuicioDto, '', $this->proveedor);

                    if ($selectAperturasJuicio != '') {

                        foreach ($selectAperturasJuicio as $aperturaJuicioDto) {

                            if ($aperturaJuicioDto->getIdAudienciaJuicio() == '') {
                                $idAperturaJuicio = $aperturaJuicioDto->getIdAperturaJuicio();

                                $aperturaJuicioDao = new AperturasjuicioDAO();
                                $aperturaJuicioDto = new AperturasjuicioDTO();

                                $aperturaJuicioDto->setIdAperturaJuicio($idAperturaJuicio);
                                $aperturaJuicioDto->setIdAudienciaJuicio($idAudiencia);

                                $modificarAperturaJuicio = $aperturaJuicioDao->updateAperturasjuicio($aperturaJuicioDto, $this->proveedor);

                                if ($modificarAperturaJuicio == '')
                                    throw new Exception('No se pudo modificar el auto de apertura a juicio con id apertura juicio: ' . $idAperturaJuicio);
                            }
                        }
                    }
                }
            }

            unset($_SESSION['idImputadoCarpetaAuto']);

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'se actualiz&oacute; correctamente el id de la audiencia en el auto de apertura a juicio'
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
     * metodo para actualizar el idimputadocarpeta con el id recluso
     * @param array $relacionReclusos
     * @param null $proveedor
     * @throws Exception
     */
    public function relacionarImputadosCarpetasReclusos($relacionReclusos = [], $proveedor = null) {

        $arrayRelacion = $this->relacionReclusos;

        if (count($arrayRelacion)) {

            if (count($relacionReclusos)) {

                foreach ($arrayRelacion as $relacion) {

                    $reclusosDao = new ReclusosDAO();
                    $reclusosDto = new ReclusosDTO();

                    if (!isset($relacionReclusos[$relacion['idImputadoSolicitud']]))
                        throw new Exception('No se encontro el idImputadoSolicitud en el array de relacion impsolicitud - impcarpeta');

                    $reclusosDto->setIdRecluso($relacion['idRecluso']);

                    $selectRecluso = $reclusosDao->selectReclusos($reclusosDto, '', $proveedor);

                    if ($selectRecluso == '')
                        throw new Exception('No se encontro el recluso con id ' . $relacion['idRecluso']);

                    $reclusosDto->setIdImputadoCarpeta($relacionReclusos[$relacion['idImputadoSolicitud']]);
                    $reclusosDto->setActivo('S');

                    $actualizaRecluso = $reclusosDao->updateReclusos($reclusosDto, $proveedor);

                    if ($actualizaRecluso == '')
                        throw new Exception('No se pudo actualizar un recluso');
                }
            }
        }
    }

}

/*$carpetasjudicialesController = new CarpetasjudicialesService();
$response = $carpetasjudicialesController->generarCarpetaDesdeSolicitud(45);
print_r($response);*/