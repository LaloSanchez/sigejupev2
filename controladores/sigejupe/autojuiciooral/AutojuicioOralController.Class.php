<?php

if (!isset($_SESSION)) session_start();

date_default_timezone_set('America/Mexico_City');

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/contadores/ContadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/aperturasjuicio/AperturasjuicioDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/aperturasjuicio/AperturasjuicioDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/aperturasapeladas/AperturasapeladasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/aperturasapeladas/AperturasapeladasDTO.Class.php");


class AutojuicioOralController {

    private $proveedor;

    /**
     * metodo para validar la consulta de los imputados para generar auto de juicio oral
     * @param $autoJuicioOralDto
     * @return mixed
     * @throws Exception
     */
    public function validarConsulta($autoJuicioOralDto)
    {

        $autoJuicioOralDto->cveJuzgado = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $autoJuicioOralDto->cveJuzgado)))));
        $autoJuicioOralDto->cveTipoCarpeta = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $autoJuicioOralDto->cveTipoCarpeta)))));
        $autoJuicioOralDto->activo = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $autoJuicioOralDto->activo)))));
        $autoJuicioOralDto->numero = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $autoJuicioOralDto->numero)))));
        $autoJuicioOralDto->anio = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $autoJuicioOralDto->anio)))));

        if ($autoJuicioOralDto->cveJuzgado == '') {
            throw new Exception('* El juzgado es requerido');
        }
        if ($autoJuicioOralDto->cveTipoCarpeta != 2) {
            throw new Exception('* El tipo de carpeta judicial debe ser de control');
        }
        if ($autoJuicioOralDto->numero == '') {
            throw  new Exception('* El n&uacute;mero de causa es requerido');
        }
        if (!is_numeric($autoJuicioOralDto->numero)) {
            throw new Exception('* El n&uacute;mero debe ser numerico');
        }
        if ($autoJuicioOralDto->anio == '') {
            throw new Exception('* El a&ntilde;o de causa es requerido');
        }
        if (!is_numeric($autoJuicioOralDto->anio)) {
            throw new Exception('* El a&ntilde;o debe ser numerico');
        }

        return $autoJuicioOralDto;

    }

    /**
     * metodo para validar la entrada de datos para generar auto de juicio oral
     * @param $data
     * @throws Exception
     */
    public function validaGenerarAutoJuicioOral($data)
    {
        $data['motivo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['motivo'])))));
        $data['fechaInicio'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['fechaInicio'])))));
        $data['numeroApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['numeroApelacion'])))));
        $data['anioApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['anioApelacion'])))));
        $data['salaApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['salaApelacion'])))));
        $data['sentidoResolucionApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['sentidoResolucionApelacion'])))));
        $data['numeroAmparo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['numeroAmparo'])))));
        $data['anioAmparo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['anioAmparo'])))));
        $data['juzgadoDistritoAmparo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['juzgadoDistritoAmparo'])))));
        $data['sintesis'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['sintesis'])))));

        if (!count($data['imputado'])) {
            throw new Exception('* Tienes que seleccionar al menos un imputado de la lista');
        }

        if ($data['fechaInicio'] == '') {
            throw new Exception('* La fecha del Auto es requerida');
        } else {
            if (!$this->esFecha($data['fechaInicio'])) {
                throw new Exception('* La fecha del Auto no es valida, el formato es valido: dd/mm/aaaa');
            }
        }


        if (isset($data['interpone_recurso'])) {

            if ($data['motivo'] == '') {
                throw new Exception('* El motivo es requerido');
            }

            //validar datos por apelacion
            if ($data['motivo'] == '1') {

                if ($data['numeroApelacion'] == '') {
                    throw  new Exception('* El n&uacute;mero de toca es requerido');
                }

                if (!is_numeric($data['numeroApelacion'])) {
                    throw  new Exception('* El n&uacute;mero de toca debe ser numerico');
                }

                if ($data['anioApelacion'] == '') {
                    throw new Exception('* El a&ntilde;o de toca es requerido');
                }

                if (!is_numeric($data['anioApelacion'])) {
                    throw new Exception('* El a&ntilde;o de toca debe ser numerico');
                }

                if ($data['salaApelacion'] == '') {
                    throw new Exception('* La sala para el motivo de apelaci&oacute;n es requerida');
                }

                if ($data['sentidoResolucionApelacion'] == '') {
                    throw new Exception('* El sentido de resoluci&oacute;n para el motivo de apelaci&oacute;n es requerido');
                }

                //validar datos por amparo
            } else if ($data['motivo'] == '2') {

                if ($data['numeroAmparo'] == '') {
                    throw  new Exception('* El n&uacute;mero de amparo es requerido');
                }

                if (!is_numeric($data['numeroAmparo'])) {
                    throw  new Exception('* El n&uacute;mero de amparo debe ser numerico');
                }

                if ($data['anioAmparo'] == '') {
                    throw new Exception('* El a&ntilde;o de amparo es requerido');
                }

                if (!is_numeric($data['anioAmparo'])) {
                    throw new Exception('* El a&ntilde;o de amparo debe ser numerico');
                }

                if ($data['juzgadoDistritoAmparo'] == '') {
                    throw new Exception('* El juzgado de distrito para el motivo de amparo es requerido');
                }

            }

        }


        if ($data['sintesis'] == '') {
            throw new Exception('* La sintesis es requerida');
        }

        if (!isset($data['editorValue']) || $data['editorValue'] == '') {
            throw new Exception('* El contenido del documento es requerido');
        }

        return $data;

    }

    /**
     * @param $data
     * @return
     * @throws Exception
     * @internal param $ $ data
     */
    public function validaEditarAutoJuicioOral($data)
    {

        $data['motivo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['motivo'])))));
        $data['fechaInicio'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['fechaInicio'])))));
        $data['numeroApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['numeroApelacion'])))));
        $data['anioApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['anioApelacion'])))));
        $data['salaApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['salaApelacion'])))));
        $data['sentidoResolucionApelacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['sentidoResolucionApelacion'])))));
        $data['numeroAmparo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['numeroAmparo'])))));
        $data['anioAmparo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['anioAmparo'])))));
        $data['juzgadoDistritoAmparo'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['juzgadoDistritoAmparo'])))));
        $data['sintesis'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['sintesis'])))));


        if (!$this->esFecha($data['fechaInicio'])) {
            throw new Exception('* La fecha de inicio no es valida, el formato es valido: dd/mm/aaaa');
        }


        if (isset($data['interpone_recurso']) && $data['interpone_recurso'] == 'on') {
            if ($data['motivo'] == '') {
                throw new Exception('* El motivo es requerido');
            }

            //validar datos por apelacion
            if ($data['motivo'] == '1') {

                if ($data['numeroApelacion'] == '') {
                    throw  new Exception('* El n&uacute;mero de toca es requerido');
                }

                if (!is_numeric($data['numeroApelacion'])) {
                    throw  new Exception('* El n&uacute;mero de toca debe ser numerico');
                }

                if ($data['anioApelacion'] == '') {
                    throw new Exception('* El a&ntilde;o de toca es requerido');
                }

                if (!is_numeric($data['anioApelacion'])) {
                    throw new Exception('* El a&ntilde;o de toca debe ser numerico');
                }

                if ($data['salaApelacion'] == '') {
                    throw new Exception('* La sala para el motivo de apelaci&oacute;n es requerida');
                }

                if ($data['sentidoResolucionApelacion'] == '') {
                    throw new Exception('* El sentido de resoluci&oacute;n para el motivo de apelaci&oacute;n es requerido');
                }

                //validar datos por amparo
            } else if ($data['motivo'] == '2') {

                if ($data['numeroAmparo'] == '') {
                    throw  new Exception('* El n&uacute;mero de amparo es requerido');
                }

                if (!is_numeric($data['numeroAmparo'])) {
                    throw  new Exception('* El n&uacute;mero de amparo debe ser numerico');
                }

                if ($data['anioAmparo'] == '') {
                    throw new Exception('* El a&ntilde;o de amparo es requerido');
                }

                if (!is_numeric($data['anioAmparo'])) {
                    throw new Exception('* El a&ntilde;o de amparo debe ser numerico');
                }

                if ($data['juzgadoDistritoAmparo'] == '') {
                    throw new Exception('* El juzgado de distrito para el motivo de amparo es requerido');
                }

            }
        }


        if ($data['sintesis'] == '') {
            throw new Exception('* La sintesis es requerida');
        }

        if (!isset($data['editorEditarValue']) || $data['editorEditarValue'] == '') {
            throw new Exception('* El contenido del documento es requerido');
        }

        return $data;

    }


    /**
     * metodo para consultar sólo los juzgados que se encuentran en carpetas judiciales
     * @return string
     */
    public function consultaJuzgadosEnCarpetas()
    {

        $selectDao = new SelectDAO();

        $parametros['fields'] = "j.cveJuzgado, j.desJuzgado";
        $parametros['tables'] = "tbljuzgados j";
        $parametros['conditions'] = 'j.cveJuzgado = ' . $_SESSION['cveAdscripcion'];

        //$parametros['conditions'] = "j.cveJuzgado IN (SELECT cveJuzgado FROM tblcarpetasjudiciales WHERE activo = 'S')";

        $responseSelectDao = $selectDao->selectDAO($parametros);

        return $responseSelectDao;

    }

    /**
     * metodo para consultar los imputados para generar juicio oral
     * @param $autoJuicioOralDto
     * @return array
     */
    public function consultarImputados($autoJuicioOralDto)
    {

        try {

            $autoJuicioOralDto = $this->validarConsulta($autoJuicioOralDto);


            $selectDao = new SelectDAO();

            $parametros['fields'] = "ic.idImputadoCarpeta, ic.cveTipoPersona, CONCAT_WS (' ', ic.nombre, ic.paterno, ic.materno) as nombreFisica";
            $parametros['fields'] .= " ,ic.nombreMoral, ic.idCarpetaJudicial, a.numActuacion, a.aniActuacion";
            $parametros['tables'] = "tblimputadoscarpetas ic JOIN tblcarpetasjudiciales cj ON cj.idCarpetaJudicial = ic.idCarpetaJudicial";
            $parametros['tables'] .= " LEFT JOIN tblaperturasjuicio aj ON aj.idImputadoCarpeta = ic.idImputadoCarpeta AND aj.activo = 'S'";
            $parametros['tables'] .= " LEFT JOIN tblactuaciones a ON a.idActuacion = aj.idActuacion AND a.activo = 'S'";
            $parametros['conditions'] = "cj.cveTipoCarpeta = 2 AND cj.numero = " . $autoJuicioOralDto->numero . " AND cj.anio = " . $autoJuicioOralDto->anio;
            $parametros['conditions'] .= " AND cj.cveJuzgado = " . $autoJuicioOralDto->cveJuzgado;
            $parametros['conditions'] .= " AND cj.activo = 'S'";
            $parametros['conditions'] .= " AND ic.activo = 'S'";
            $parametros['conditions'] .= " AND ic.TieneSobreseimiento = 'N'";
            //$parametros['conditions'] .= " AND ic.idImputadoCarpeta IN (SELECT idImputadoCarpeta FROM tblaperturasjuicio)";


            $responseImputados = $selectDao->selectDAO($parametros);

            $responseImputados = json_decode($responseImputados, true);

            if ($responseImputados['Estatus'] == 'Fail') {
                throw new Exception($responseImputados['mnj']);
            }

            $data = [];

            if ($responseImputados['totalCount'] == 0) {
                throw  new Exception('* No se encontraron resultados con los par&aacute;metros especificados.');
            }

            foreach ($responseImputados['resultados'] as $imputado) {
                $data['idCarpetaJudicial'] = $imputado['idCarpetaJudicial'];

                $generado = ($imputado['numActuacion'] != '' && $imputado['aniActuacion'] != '') ? 1 : 0;

                $data['imputados'][] = [
                    'idImputadoCarpeta' => $imputado['idImputadoCarpeta'],
                    'cveTipoPersona'    => $imputado['cveTipoPersona'],
                    'nombreFisica'      => $imputado['nombreFisica'],
                    'nombreMoral'       => $imputado['nombreMoral'],
                    'generado'          => $generado,
                    'numActuacion'      => $imputado['numActuacion'],
                    'aniActuacion'      => $imputado['aniActuacion']

                ];
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'consulta realizada de forma correcta',
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
     * metodo para generar auto de juicio oral para los imputados seleccionados
     * @param $data
     * @param string $proveedor
     * @return array
     */
    public function generarAutoJuicioOral($data, $proveedor = '')
    {
        try {

            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            $this->proveedor->execute('BEGIN');

            $data = $this->validaGenerarAutoJuicioOral($data);

            /*
             * obtener los datos de la carpeta judicial
             */
            $carpetaJudicialDao = new CarpetasjudicialesDAO();
            $carpetaJudicialDto = new CarpetasjudicialesDTO();

            $carpetaJudicialDto->setIdCarpetaJudicial($data['idCarpetaJudicial']);
            $carpetaJudicialDto->setActivo('S');

            $carpetaJudicialResponse = $carpetaJudicialDao->selectCarpetasjudiciales($carpetaJudicialDto, '', $this->proveedor);

            if ($carpetaJudicialResponse == '') {
                throw new Exception('* No se encontro la carpeta judicial de los imputados seleccionados');
            }

            $idReferencia = $carpetaJudicialResponse[0]->getIdCarpetaJudicial();
            $numero = $carpetaJudicialResponse[0]->getNumero();
            $anio = $carpetaJudicialResponse[0]->getAnio();
            $cveTipoCarpeta = $carpetaJudicialResponse[0]->getCveTipoCarpeta();
            $cveJuzgado = $carpetaJudicialResponse[0]->getCveJuzgado();


            /*
             * obtener contador para actuacion
             */
            $contadorActuaciones = $this->getContadorActuaciones(23, $cveJuzgado, $this->proveedor);
            if ($contadorActuaciones == '') {
                throw new Exception('Ocurrio un error al generar el contador de la actuacion');
            }
            $numeroActuacion = $contadorActuaciones[0]->getNumero();
            $anioActuacion = $contadorActuaciones[0]->getAnio();

            $actuacionesDao = new ActuacionesDAO();
            $actuacionesDto = new ActuacionesDTO();

            $actuacionesDto->setNumActuacion($numeroActuacion);
            $actuacionesDto->setAniActuacion($anioActuacion);
            $actuacionesDto->setCveTipoActuacion(23);
            $actuacionesDto->setIdReferencia($idReferencia);
            $actuacionesDto->setNumero($numero);
            $actuacionesDto->setAnio($anio);
            $actuacionesDto->setCveTipoCarpeta($cveTipoCarpeta);
            $actuacionesDto->setCveJuzgado($cveJuzgado);
            $actuacionesDto->setSintesis($data['sintesis']);
            $actuacionesDto->setObservaciones(utf8_decode($data['editorValue']));
            $actuacionesDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $actuacionesDto->setActivo('S');


            $insertActuacion = $actuacionesDao->insertActuaciones($actuacionesDto, $this->proveedor);


            if ($insertActuacion == '') {
                throw new Exception('Ocurrio un error al generar la actuaci&oacute;n');
            }

            $idActuacion = $insertActuacion[0]->getIdActuacion();


            /*
             * recorremos los imputados seleccionados para generar registro en tabla apertura de juicio
             */

            $dataRegistroGenerado = [];

            foreach ($data['imputado'] as $idImputadoCarpeta => $imputado) {

                $aperturaJuicioDao = new AperturasjuicioDAO();
                $aperturaJuicioDto = new AperturasjuicioDTO();

                $aperturaJuicioDto->setIdActuacion($idActuacion);
                $aperturaJuicioDto->setIdImputadoCarpeta($idImputadoCarpeta);

                $apelada = (isset($data['interpone_recurso']) && $data['motivo'] == 1) ? 'S' : 'N';
                //$apelada = isset($data['apelada']) ? 'S' : 'N';
                $aperturaJuicioDto->setApelada($apelada);
                $aperturaJuicioDto->setActivo('S');
                $aperturaJuicioDto->setFechaInicio($this->fechaMysql($data['fechaInicio']));

                $insertAperturaJuicio = $aperturaJuicioDao->insertAperturasjuicio($aperturaJuicioDto, $this->proveedor);

                if ($insertAperturaJuicio == '') {
                    throw new Exception('No se pudo insertar la apertura de juicio');
                }

                $idAperturaJuicio = $insertAperturaJuicio[0]->getIdAperturaJuicio();

                if (isset($data['interpone_recurso'])) {

                    $aperturaApeladaDao = new AperturasapeladasDAO();
                    $aperturaApeladaDto = new AperturasapeladasDTO();

                    $aperturaApeladaDto->setIdAperturaJuicio($idAperturaJuicio);


                    if ($data['motivo'] == 1) {

                        $aperturaApeladaDto->setCveSentido($data['sentidoResolucionApelacion']);
                        $aperturaApeladaDto->setNumToca($data['numeroApelacion']);
                        $aperturaApeladaDto->setAnioToca($data['anioApelacion']);
                        $aperturaApeladaDto->setCveSala($data['salaApelacion']);


                    } else if ($data['motivo'] == 2) {

                        $aperturaApeladaDto->setCveSentido(1);
                        $aperturaApeladaDto->setNumAmp($data['numeroAmparo']);
                        $aperturaApeladaDto->setAnioAmp($data['anioAmparo']);
                        $aperturaApeladaDto->setJuzDistrito($data['juzgadoDistritoAmparo']);

                    }

                    $aperturaApeladaDto->setActivo('S');

                    $insertAperturaApelada = $aperturaApeladaDao->insertAperturasapeladas($aperturaApeladaDto, $this->proveedor);

                    if ($insertAperturaApelada == '') {
                        throw new Exception('Error al generar la apertura apelada');
                    }

                }


                $dataRegistroGenerado[] = [
                    'numero'            => $insertActuacion[0]->getNumActuacion(),
                    'anio'              => $insertActuacion[0]->getAniActuacion(),
                    'idImputadoCarpeta' => $idImputadoCarpeta
                ];

            }

            $this->proveedor->execute('COMMIT');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Auto de Juicio Generado Correctamente.',
                'data'    => $dataRegistroGenerado
            ];

        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage(),
                'data'
            ];
        }


        return $response;

    }

    /**
     * @param $data
     * @param string $proveedor
     * @return array
     */
    public function editarAutoJuicioOral($data, $proveedor = '')
    {
        try {

            if ($proveedor == null) {
                $this->proveedor = new Proveedor('mysql', 'sigejupe');
                $this->proveedor->connect();
            } else {
                $this->proveedor = $proveedor;
            }

            $this->proveedor->execute('BEGIN');

            $data = $this->validaEditarAutoJuicioOral($data);

            $actuacionesDao = new ActuacionesDAO();
            $actuacionesDto = new ActuacionesDTO();

            $actuacionesDto->setIdActuacion($data['idActuacion']);
            $actuacionesDto->setSintesis($data['sintesis']);
            $actuacionesDto->setObservaciones(utf8_decode($data['editorEditarValue']));

            $editaActuaciones = $actuacionesDao->updateActuaciones($actuacionesDto, $this->proveedor);

            if ($editaActuaciones == '') throw new Exception('No se pudo editar la actuacion');


            $aperturaJuicioDao = new AperturasjuicioDAO();
            $aperturaJuicioDto = new AperturasjuicioDTO();

            //$aperturaJuicioDto->setIdAperturaJuicio($data['idAperturaJuicio']);
            $aperturaJuicioDto->setIdActuacion($data['idActuacion']);
            $aperturaJuicioDto->setActivo('S');
            //consultar si la apertura a juicio existe y está activa
            $aperturaJuicioById = $aperturaJuicioDao->selectAperturasjuicio($aperturaJuicioDto, '', $this->proveedor);

            if ($aperturaJuicioById == '') {
                throw new Exception('el auto de apertura a juicio no existe o se encuentra inactivo, favor verificar');
            }


            foreach ($aperturaJuicioById as $aperturaJuicio) {

                $aperturaJuicioDao = new AperturasjuicioDAO();
                $aperturaJuicioDto = new AperturasjuicioDTO();

                $aperturaJuicioDto->setIdAperturaJuicio($aperturaJuicio->getIdAperturaJuicio());

                $apelada = (isset($data['interpone_recurso']) && $data['motivo'] == 1) ? 'S' : 'N';
                $aperturaJuicioDto->setApelada($apelada);
                $aperturaJuicioDto->setActivo('S');
                $aperturaJuicioDto->setFechaInicio($this->fechaMysql($data['fechaInicio']));

                $updateAperturaJuicioResponse = $aperturaJuicioDao->updateAperturasjuicio($aperturaJuicioDto, $this->proveedor);

                if ($updateAperturaJuicioResponse == '') {
                    throw new Exception('No se pudo editar aperturas a juicio');
                }

                $aperturaApeladaDao = new AperturasapeladasDAO();
                $aperturaApeladaDto = new AperturasapeladasDTO();
                $aperturaApeladaDto->setIdAperturaJuicio($updateAperturaJuicioResponse[0]->getIdAperturaJuicio());

                $selectAperturasApeladas = $aperturaApeladaDao->selectAperturasapeladas($aperturaApeladaDto, '', $this->proveedor);

                if ($selectAperturasApeladas != '') {

                    foreach ($selectAperturasApeladas as $aperturaApelada) {

                        $aperturaApeladaDao = new AperturasapeladasDAO();
                        $aperturaApeladaDto = new AperturasapeladasDTO();

                        $aperturaApeladaDto->setIdAperturaApelada($aperturaApelada->getIdAperturaApelada());

                        if (isset($data['interpone_recurso'])) {

                            if ($data['motivo'] == 1) {

                                $aperturaApeladaDto->setCveSentido($data['sentidoResolucionApelacion']);
                                $aperturaApeladaDto->setNumToca($data['numeroApelacion']);
                                $aperturaApeladaDto->setAnioToca($data['anioApelacion']);
                                $aperturaApeladaDto->setCveSala($data['salaApelacion']);

                                $aperturaApeladaDto->setNumAmp('0');
                                $aperturaApeladaDto->setAnioAmp('0');
                                $aperturaApeladaDto->setJuzDistrito('0');


                            } else if ($data['motivo'] == 2) {

                                $aperturaApeladaDto->setCveSentido(1);
                                $aperturaApeladaDto->setNumAmp($data['numeroAmparo']);
                                $aperturaApeladaDto->setAnioAmp($data['anioAmparo']);
                                $aperturaApeladaDto->setJuzDistrito($data['juzgadoDistritoAmparo']);

                                $aperturaApeladaDto->setNumToca('0');
                                $aperturaApeladaDto->setAnioToca('0');
                                $aperturaApeladaDto->setCveSala('0');

                            }

                            $aperturaApeladaDto->setActivo('S');

                        } else {
                            $aperturaApeladaDto->setActivo('N');
                        }


                        $updateAperturaApelada = $aperturaApeladaDao->updateAperturasapeladas($aperturaApeladaDto, $this->proveedor);

                        if ($updateAperturaApelada == '') {
                            throw new Exception('No se pudo editar correctamente la apertura apelada');
                        }

                    }


                } else {

                    $aperturaApeladaDao = new AperturasapeladasDAO();
                    $aperturaApeladaDto = new AperturasapeladasDTO();

                    $aperturaApeladaDto->setIdAperturaJuicio($updateAperturaJuicioResponse[0]->getIdAperturaJuicio());

                    if (isset($data['interpone_recurso'])) {

                        if ($data['motivo'] == 1) {

                            $aperturaApeladaDto->setCveSentido($data['sentidoResolucionApelacion']);
                            $aperturaApeladaDto->setNumToca($data['numeroApelacion']);
                            $aperturaApeladaDto->setAnioToca($data['anioApelacion']);
                            $aperturaApeladaDto->setCveSala($data['salaApelacion']);

                            $aperturaApeladaDto->setNumAmp('0');
                            $aperturaApeladaDto->setAnioAmp('0');
                            $aperturaApeladaDto->setJuzDistrito('0');


                        } else if ($data['motivo'] == 2) {

                            $aperturaApeladaDto->setCveSentido(1);
                            $aperturaApeladaDto->setNumAmp($data['numeroAmparo']);
                            $aperturaApeladaDto->setAnioAmp($data['anioAmparo']);
                            $aperturaApeladaDto->setJuzDistrito($data['juzgadoDistritoAmparo']);

                            $aperturaApeladaDto->setNumToca('0');
                            $aperturaApeladaDto->setAnioToca('0');
                            $aperturaApeladaDto->setCveSala('0');

                        }

                        $aperturaApeladaDto->setActivo('S');

                        $updateAperturaApelada = $aperturaApeladaDao->insertAperturasapeladas($aperturaApeladaDto, $this->proveedor);

                        if ($updateAperturaApelada == '') {
                            throw new Exception('No se pudo editar correctamente la apertura apelada');
                        }

                    }


                }


            }

            $this->proveedor->execute('COMMIT');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'Auto de Juicio Editado Correctamente.'
            ];


        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            $response = [
                'estatus'       => 'error',
                'mensaje'       => 'No se pudo editar el auto de apertura a juicio, contacta al administrador',
                'mensaje_error' => $e->getMessage() . ' - ' . $e->getLine()
            ];

        }

        return $response;

    }

    /**
     * @param $data
     * @return array
     */
    public function consulta($data)
    {
        try {

            /*
             * validar los datos
             */
            $data['nombreImputado'] = (trim(mb_strtoupper(str_replace("'", "", $data['nombreImputado']))));
            $data['numeroActuacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['numeroActuacion'])))));
            $data['anioActuacion'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['anioActuacion'])))));
            $data['fechaInicio'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['fechaInicio'])))));
            $data['fechaFin'] = (trim(mb_strtoupper(utf8_decode(str_replace("'", "", $data['fechaFin'])))));

            if(!isset($data['cveJuzgadoconsulta']) || $data['cveJuzgadoconsulta'] == ''){
                throw new Exception('el Juzgado es requerido');
            }

            if ($this->esFecha($data['fechaInicio'])) {
                $data['fechaInicio'] = $this->fechaMysql($data['fechaInicio']);
            }

            if ($this->esFecha($data['fechaFin'])) {
                $data['fechaFin'] = $this->fechaMysql($data['fechaFin']);
            }


            if ($data['fechaInicio'] == '' && $data['fechaFin'] == '') {

                if ($data['numeroActuacion'] == '') {
                    throw new Exception('el n&uacute;mero es requerido');
                }

                if (!is_numeric($data['numeroActuacion'])) {
                    throw new Exception('el n&uacute;mero debe ser numerico');
                }

                if ($data['anioActuacion'] == '') {
                    throw new Exception('el a&ntilde;o es requerido');
                }

                if (!is_numeric($data['anioActuacion'])) {
                    throw new Exception('el a&ntilde;o debe ser numerico');
                }

                $data['fechaInicio'] = '';
                $data['fechaFin'] = '';

            }


            $selectDao = new SelectDAO();



            $parametros['fields'] = "a.idActuacion, a.fechaRegistro,ic.idImputadoCarpeta, ic.cveTipoPersona, CONCAT_WS (' ', ic.nombre, ic.paterno, ic.materno) as nombreFisica,";
            $parametros['fields'] .= "ic.nombreMoral, ic.idCarpetaJudicial,a.numActuacion, a.aniActuacion,a.numero, a.anio, a.sintesis, a.observaciones, aj.idAperturaJuicio, aj.apelada, DATE_FORMAT(aj.fechaInicio,'%d/%m/%Y') as fechaInicio,";
            $parametros['fields'] .= "aa.idAperturaApelada, sr.cveSentido, sr.desSentido, aa.NumToca, aa.AnioToca,j.cveJuzgado, j.desJuzgado as desSala, aa.NumAmp, aa.AnioAmp, aa.JuzDistrito";
            $parametros['tables'] = "tblactuaciones a";
            $parametros['tables'] .= " JOIN tblaperturasjuicio aj ON a.idActuacion = aj.idActuacion";
            $parametros['tables'] .= " JOIN tblimputadoscarpetas ic ON aj.idImputadoCarpeta = ic.idImputadoCarpeta";
            $parametros['tables'] .= " LEFT JOIN tblaperturasapeladas aa ON aj.idAperturaJuicio = aa.idAperturaJuicio AND aa.activo = 'S'";
            $parametros['tables'] .= " LEFT JOIN tblsentidosresoluciones sr ON aa.cveSentido = sr.cveSentido";
            $parametros['tables'] .= " LEFT JOIN tbljuzgados j ON aa.cveSala = j.cveJuzgado";
            $parametros['conditions'] = "a.cveTipoActuacion = '23'";
            if ($data['numeroActuacion'] != '' && $data['anioActuacion'] != '') {
                $parametros['conditions'] .= "AND a.numero = " . $data['numeroActuacion'] . " AND a.anio = " . $data['anioActuacion'];
            } else {
                $parametros['conditions'] .= " AND DATE(a.fechaRegistro) BETWEEN '" . $data['fechaInicio'] . "' AND '" . $data['fechaFin'] . "'";
            }
            $parametros['conditions'] .= " AND a.cveJuzgado = " . $data['cveJuzgadoconsulta'];
            $parametros['conditions'] .= " AND a.activo = 'S'";
            $parametros['conditions'] .= " AND ic.activo = 'S'";
            $parametros['conditions'] .= " AND aj.activo = 'S'";
            $parametros['conditions'] .= " AND IF(ic.cveTipoPersona = 1, CONCAT_WS(' ', ic.nombre, ic.paterno, ic.materno) LIKE '%" . $data['nombreImputado'] . "%', ic.nombreMoral LIKE '%" . $data['nombreImputado'] . "%')";

            $parametros['fields'] .= ", GROUP_CONCAT(IF(ic.cveTipoPersona = '1', 'FISICA', IF(ic.cveTipoPersona = '2' , 'MORAL', 'OTRA')), ' - ' , IF(ic.cveTipoPersona = '1', CONCAT_WS (' ', ic.nombre, ic.paterno, ic.materno), ic.nombreMoral), '.' SEPARATOR '<br>') as Nombres";
            $parametros['conditions'] .= " GROUP BY aj.idActuacion";

            $totalRegistros = $selectDao->selectDAO($parametros);

            $totalRegistros = json_decode($totalRegistros, true);

            $totalRegistros = $totalRegistros['totalCount'];


            /*
             * datos para paginacion
             */
            $paginacion = [
                'paginacion' => 'true',
                'pag'        => $data['pagina'],
                'cantxPag'   => $data['porPagina']
            ];
            $responseConsulta = $selectDao->selectDAO($parametros, '', $paginacion);

            /*
             * termina datos para paginacion
             */


            $responseConsulta = json_decode($responseConsulta, true);

            if ($responseConsulta['Estatus'] == 'Fail') {
                throw new Exception($responseConsulta['mnj']);
            }

            if ($responseConsulta['totalCount'] == 0 || $responseConsulta['totalCount'] == '') {
                throw new Exception('no se encontraron resultados con los parametros de busqueda especificados');
            }


            $responseAutosJuicio = [];

            foreach ($responseConsulta['resultados'] as $index => $resultado) {

                $motivo = "N/A";
                $idMotivo = "";

                if ($resultado['NumToca'] != 0 && $resultado['AnioToca'] != '') {
                    $idMotivo = 1;
                    $motivo = 'POR APELACI&Oacute;N';
                }
                if ($resultado['NumAmp'] != 0 && $resultado['AnioAmp'] != '') {
                    $idMotivo = 2;
                    $motivo = 'POR AMPARO';
                }

                $responseConsulta['resultados'][$index]['idMotivo'] = $idMotivo;
                $responseConsulta['resultados'][$index]['desMotivo'] = $motivo;
                $responseConsulta['resultados'][$index]['sintesis'] = $resultado['sintesis'];
                $responseConsulta['resultados'][$index]['observaciones'] = $resultado['observaciones'];

                $idActuacion = $resultado['idActuacion'];

                $nombreImputado = '';
                $tipoPersona = '';
                if ($resultado['cveTipoPersona'] == '1') {

                    $tipoPersona = 'FISICA';
                    $nombreImputado = $resultado['nombreFisica'];


                } else if ($resultado['cveTipoPersona'] == '2' || $resultado['cveTipoPersona'] == '3') {

                    if ($resultado['cveTipoPersona'] == '2') $tipoPersona = 'MORAL';
                    if ($resultado['cveTipoPersona'] == '3') $tipoPersona = 'OTRA';

                    $nombreImputado = $resultado['nombreMoral'];
                }

                if (!isset($responseAutosJuicio[$idActuacion])) {

                    $responseAutosJuicio[$idActuacion]['idActuacion'] = $resultado['idActuacion'];
                    $responseAutosJuicio[$idActuacion]['idAperturaApelada'] = $resultado['idAperturaApelada'];
                    $responseAutosJuicio[$idActuacion]['idImputadoCarpeta'] = $resultado['idImputadoCarpeta'];
                    $responseAutosJuicio[$idActuacion]['cveTipoPersona'] = $resultado['cveTipoPersona'];
                    $responseAutosJuicio[$idActuacion]['nombreFisica'] = $resultado['nombreFisica'];
                    $responseAutosJuicio[$idActuacion]['nombreMoral'] = $resultado['nombreMoral'];
                    $responseAutosJuicio[$idActuacion]['idCarpetaJudicial'] = $resultado['idCarpetaJudicial'];
                    $responseAutosJuicio[$idActuacion]['numActuacion'] = $resultado['numActuacion'];
                    $responseAutosJuicio[$idActuacion]['aniActuacion'] = $resultado['aniActuacion'];
                    $responseAutosJuicio[$idActuacion]['numero'] = $resultado['numero'];
                    $responseAutosJuicio[$idActuacion]['anio'] = $resultado['anio'];
                    $responseAutosJuicio[$idActuacion]['sintesis'] = $resultado['sintesis'];
                    $responseAutosJuicio[$idActuacion]['observaciones'] = $resultado['observaciones'];
                    $responseAutosJuicio[$idActuacion]['idAperturaJuicio'] = $resultado['idAperturaJuicio'];
                    $responseAutosJuicio[$idActuacion]['apelada'] = $resultado['apelada'];
                    $responseAutosJuicio[$idActuacion]['fechaInicio'] = $resultado['fechaInicio'];
                    $responseAutosJuicio[$idActuacion]['cveSentido'] = $resultado['cveSentido'];
                    $responseAutosJuicio[$idActuacion]['desSentido'] = $resultado['desSentido'];
                    $responseAutosJuicio[$idActuacion]['NumToca'] = $resultado['NumToca'];
                    $responseAutosJuicio[$idActuacion]['AnioToca'] = $resultado['AnioToca'];
                    $responseAutosJuicio[$idActuacion]['cveJuzgado'] = $resultado['cveJuzgado'];
                    $responseAutosJuicio[$idActuacion]['desSala'] = $resultado['desSala'];
                    $responseAutosJuicio[$idActuacion]['NumAmp'] = $resultado['NumAmp'];
                    $responseAutosJuicio[$idActuacion]['AnioAmp'] = $resultado['AnioAmp'];
                    $responseAutosJuicio[$idActuacion]['JuzDistrito'] = $resultado['JuzDistrito'];
                    $responseAutosJuicio[$idActuacion]['idMotivo'] = $idMotivo;
                    $responseAutosJuicio[$idActuacion]['desMotivo'] = $motivo;
                    $responseAutosJuicio[$idActuacion]['nombresImputados'] = $tipoPersona . ' - ' . $nombreImputado . '.<br>';
                    $responseAutosJuicio[$idActuacion]['interponeRecurso'] = ($resultado['idAperturaApelada'] != '') ? 'S' : 'N';
                    $responseAutosJuicio[$idActuacion]['Nombres'] = $resultado['Nombres'];

                } else {
                    $responseAutosJuicio[$idActuacion]['nombresImputados'] .= $tipoPersona . ' - ' . $nombreImputado . '.<br>';

                }
            }

            $response = [
                'estatus'   => 'ok',
                'mensaje'   => 'se encontraron resultados',
                'total'     => $totalRegistros,
                'porPagina' => $data['porPagina'],
                'pagina'    => $data['pagina'],
                'data'      => $responseAutosJuicio
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
     * @param $fecha
     * @return bool
     */
    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    /**
     * @param $fecha
     * @return string
     */
    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

}