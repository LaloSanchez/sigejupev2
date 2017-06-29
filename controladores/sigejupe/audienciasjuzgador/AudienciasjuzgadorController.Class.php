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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audienciasjuzgador/AudienciasjuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audienciasjuzgador/AudienciasjuzgadorDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatusaudiencias/EstatusaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/funcionesjuzgadores/FuncionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/funcionesjuzgadores/FuncionesjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

date_default_timezone_set('America/Mexico_City');

class AudienciasjuzgadorController {
    private $proveedor;

    public function validarAudienciasjuzgador($AudienciasjuzgadorDto) {
        $AudienciasjuzgadorDto->setidAudienciaJuez(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getidAudienciaJuez()))));
        $AudienciasjuzgadorDto->setidAudiencia(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getidAudiencia()))));
        $AudienciasjuzgadorDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getidJuzgador()))));
        $AudienciasjuzgadorDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getcveFuncionJuzgador()))));
        $AudienciasjuzgadorDto->setactivo(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getactivo()))));
        $AudienciasjuzgadorDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getfechaRegistro()))));
        $AudienciasjuzgadorDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AudienciasjuzgadorDto->getfechaActualizacion()))));
        return $AudienciasjuzgadorDto;
    }

    public function selectreporteaudiencias($AudienciasjuzgadorDto, $proveedor = null) {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->selectAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);
        return $AudienciasjuzgadorDto;
    }

    public function selectAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor = null) {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->selectAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);
        return $AudienciasjuzgadorDto;
    }

    public function insertAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor = null) {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->insertAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);
        return $AudienciasjuzgadorDto;
    }

    public function updateAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor = null) {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->updateAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);
        return $AudienciasjuzgadorDto;
    }

    public function deleteAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor = null) {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->deleteAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);
        return $AudienciasjuzgadorDto;
    }

    public function selectAgendajuzgador($AudienciasjuzgadorDto, $params) {
        /* 1. Obtencion del Id del Juzgador */
        /* 2. Obtencion de las audiencias por juzgado y fecha */
        /* 3. Obtencion de las Audiencias del Juzgador a partir del punto anterior*/
        /* 4. Obtencion del detalle de las audiencias */

        $proveedor = new Proveedor("MYSQL", "sigejupe");
        $proveedor->connect();

        $transaccion = false;
        $mensaje = '';
        $contador = 0;
        $data = [];
        $respuesta = [];

        $idsAudiencias = '';
        // $cveJuzgadoDesahoga = $params['cveJuzgado'];
        $cveJuzgadoDesahoga = '';
        $fechaBusqueda = $params['fechaBusqueda'];
        $fechaBusqueda = str_replace(' ', '', $fechaBusqueda);
        $fechaBusqueda = explode('/', $fechaBusqueda);
        $fechaBusqueda = $fechaBusqueda[2] . '-' . $fechaBusqueda[1] . '-' . $fechaBusqueda[0];

        $descAudiencias = [];
        $descCarpetas = [];
        $descSalas = [];
        $descEstatus = [];
        /* ObtenciOn de descripciones de audiencia*/
        $CataudienciasDTO = new CataudienciasDTO();
        $CataudienciasDAO = new CataudienciasDAO();
        $CataudienciasDTO->setActivo('S');
        $CataudienciasDTO = $CataudienciasDAO->selectCataudiencias( $CataudienciasDTO, '', $proveedor );

        /* ObtenciOn de tipo de carpeta */
        $TiposcarpetasDTO = new TiposcarpetasDTO();
        $TiposcarpetasDAO = new TiposcarpetasDAO();
        $TiposcarpetasDTO->setActivo('S');
        $TiposcarpetasDTO = $TiposcarpetasDAO->selectTiposcarpetas( $TiposcarpetasDTO, '', $proveedor );

        /* ObtenciOn de Salas */
        $SalasDTO = new SalasDTO();
        $SalasDAO = new SalasDAO();
        $SalasDTO->setActivo('S');
        $SalasDTO = $SalasDAO->selectSalas( $SalasDTO, '', $proveedor );

        /* ObtenciOn de Estatus*/
        $EstatusaudienciasDTO = new EstatusaudienciasDTO();
        $EstatusaudienciasDAO = new EstatusaudienciasDAO();
        $EstatusaudienciasDTO->setActivo('S');
        $EstatusaudienciasDTO = $EstatusaudienciasDAO->SelectEstatusaudiencias( $EstatusaudienciasDTO, '', $proveedor );

        /* Paso 1 */
        $JuzgadoresDTO = new JuzgadoresDTO();
        $JuzgadoresDAO = new JuzgadoresDAO();
        $JuzgadoresDTO->setCveUsuario( $AudienciasjuzgadorDto->getIdJuzgador() );
        $JuzgadoresDTO->setActivo('S');
        $JuzgadoresDTO = $JuzgadoresDAO->selectJuzgadores( $JuzgadoresDTO );
        if( $JuzgadoresDTO != '' ){
            $transaccion = true;
            // $AudienciasjuzgadorDto->setIdJuzgador( '' );
            $AudienciasjuzgadorDto->setIdJuzgador( $JuzgadoresDTO[0]->getIdJuzgador() );
        }else{
            $transaccion = false;
            $mensaje = 'No se encuentra o no existe el Juzgador. Intente nuevamente.';
        }

        if( $transaccion ){
            /* Paso 2 */
            $orden = " AND fechaInicial>='" . $fechaBusqueda . " 00:00:00' and fechaInicial<='" . $fechaBusqueda . " 23:59:59'";
            $AudienciasDAO = new AudienciasDAO();
            $AudienciasDTO = new AudienciasDTO();
            $AudienciasDTO2 = new AudienciasDTO();
            $AudienciasDTO->setActivo('S');
            $AudienciasDTO->setFechaInicial( $fechaBusqueda );
            $tempCveJuzgadoDesahoga = ( $cveJuzgadoDesahoga != '' ) ? $cveJuzgadoDesahoga : '';
            $AudienciasDTO->setCveJuzgadoDesahoga( $tempCveJuzgadoDesahoga );
            // $AudienciasDTO = $AudienciasDAO->selectAudiencias( $AudienciasDTO, $orden, $proveedor );
            $AudienciasDTO = $AudienciasDAO->selectAudienciasConsejo( $AudienciasDTO, $AudienciasjuzgadorDto, $orden, $proveedor );
            if( $AudienciasDTO != '' ){
                foreach ($AudienciasDTO as $audiencia) {
                    $idsAudiencias .= $audiencia['idAudiencia'] . ',';
                }
                //eliminar la ultima ',' y agrega al formato para busqueda
                $orden = 'AND idAudiencia IN (' . rtrim( $idsAudiencias, ',') . ')';
        
                /* Paso 3 */
                $audienciasJuez = false;
                $AudienciasjuzgadorDTO = new AudienciasjuzgadorDTO();
                $AudienciasjuzgadorDAO = new AudienciasjuzgadorDAO();
                $AudienciasjuzgadorDTO->setIdJuzgador( $AudienciasjuzgadorDto->getIdJuzgador() );
                $AudienciasjuzgadorDTO->setActivo( 'S' );
                $AudienciasjuzgadorDTO = $AudienciasjuzgadorDAO->selectAudienciasjuzgador($AudienciasjuzgadorDTO, $orden, $proveedor);
                $idsAudiencias = '';
                if( $AudienciasjuzgadorDTO != '' ){
                    foreach ($AudienciasjuzgadorDTO as $audienciajuzgador) {
                        $idsAudiencias .= $audienciajuzgador->getIdAudiencia() . ',';
                    }
                    //eliminar la ultima ',' y agrega al formato para busqueda
                    $orden = ' AND idAudiencia IN (' . rtrim( $idsAudiencias, ',') . ') ORDER BY fechaInicial ASC';
                    $audienciasJuez = true;
                }else{
                    $mensaje = 'Usted no tiene Audiencias en esta fecha. M2.';
                }
                /* Paso 4 */
                if( $audienciasJuez ){
                    $AudienciasDTO2->setActivo('S');
                    $AudienciasDTO2 = $AudienciasDAO->selectAudiencias( $AudienciasDTO2, $orden, $proveedor);
                    if( $AudienciasDTO2 != '' ){
                        foreach ($AudienciasDTO2 as $Audiencia) {
                            //definicion de horario
                            $horaInicial = explode(' ', $Audiencia->getFechaInicial() );
                            $horaInicial = explode(':', $horaInicial[1]);
                            $horaInicial = $horaInicial[0] . ':' . $horaInicial[1];
                            $horaFinal = explode(' ', $Audiencia->getFechaFinal() );
                            $horaFinal = explode(':', $horaFinal[1]);
                            $horaFinal = $horaFinal[0] . ':' . $horaFinal[1];
                            $horario = $horaInicial . ' - '. $horaFinal;
                            //definiciOn de causa
                            $causa = $Audiencia->getNumero() . ' / ' . $Audiencia->getAnio();
                            //definiciOn de Detenido
                            $detenido = ( $Audiencia->getDetenido() == 'S' ) ? 'S&iacute;' : 'No';
                            //definiciOn del Estatus
                            $descEstatus = 'No definido';
                            foreach ($EstatusaudienciasDTO as $Estatusaudiencia) {
                                if( $Estatusaudiencia->getCveEstatusAudiencia() == $Audiencia->getCveEstatusAudiencia() ){
                                    $descEstatus = $Estatusaudiencia->getDesEstatusAudiencia();
                                    break;
                                }
                            }
                            
                            //definicion de descripciOn de la audiencia
                            $descAudiencia = 'No definido';
                            foreach ($CataudienciasDTO as $Cataudiencias) {
                                if( $Cataudiencias->getCveCatAudiencia() == $Audiencia->getCveCatAudiencia() ){
                                    $descAudiencia = $Cataudiencias->getDesCatAudiencia();
                                    break;
                                }
                            }
                            //definicion de tipo de carpeta
                            $descTipocarpeta = 'No definido';
                            foreach ($TiposcarpetasDTO as $Tipocarpeta) {
                                if( $Tipocarpeta->getCveTipoCarpeta() == $Audiencia->getCveTipoCarpeta() ){
                                    $descTipocarpeta = $Tipocarpeta->getDesTipoCarpeta();
                                    break;
                                }
                            }
                            //definicion de salas
                            $descSala = 'No definido';
                            foreach ($SalasDTO as $Sala) {
                                if( $Sala->getCveSala() == $Audiencia->getCveSala() ){
                                    $descSala = $Sala->getDesSala();
                                    break;
                                }
                            }

                            $respuesta[] = array('horario'=>$horario,'idAudiencia'=>$Audiencia->getIdAudiencia(),'audiencia'=>$descAudiencia, 'causa'=>$causa, 'tipoCarpeta'=>$Audiencia->getCveTipoCarpeta(), 'carpeta'=>$descTipocarpeta,'cveSala'=>$Audiencia->getCveSala(),'sala'=>$descSala, 'detenido'=>$detenido,'estatus'=>$Audiencia->getCveEstatusAudiencia(), 'descEstatus'=>$descEstatus);
                        }
                        $mensaje = 'Usted tiene Audiencia(s) asignada(s).';
                    }else{
                        $mensaje = 'Usted no tiene Audiencias en esta fecha. M3.';
                    }
                }
            }else{
                $mensaje = 'Usted no tiene Audiencias en esta fecha. M1.';
            }
        }

        $response = json_encode( ['total'=>sizeof($respuesta),'data'=>$respuesta, 'msg'=>$mensaje] );
        return $response;

        $proveedor->close();
    }

    public function juzgadoresByCveAudiencia($AudienciasjuzgadorDto, $proveedor = null) {
        try {

            $idAudiencia = $AudienciasjuzgadorDto->getIdAudiencia();

            /*
             * query para obtener los juzgadores de la audiencia
             * obtiene su titulo, nombre(paterno y materno) y su funcion
             *
              SELECT CONCAT_WS(' ',j.titulo, j.nombre, j.paterno, j.materno, CONCAT(' - ', fj.desFuncionJuzgador)) as juzgado
              FROM tblaudienciasjuzgador aj
              LEFT JOIN tbljuzgadores j ON aj.idJuzgador = j.idJuzgador
              LEFT JOIN tblfuncionesjuzgadores fj ON aj.cveFuncionJuzgador = fj.cveFuncionJuzgador
              WHERE aj.idAudiencia = 1199 AND aj.activo = 'S'
             */

            $selectDao = new SelectDAO();

            $parametros['fields'] = "CONCAT_WS(' ',j.titulo, j.nombre, j.paterno, j.materno) as juzgador, fj.desFuncionJuzgador";
            $parametros['tables'] = "tblaudienciasjuzgador aj";
            $parametros['tables'] .= " LEFT JOIN tbljuzgadores j ON aj.idJuzgador = j.idJuzgador";
            $parametros['tables'] .= " LEFT JOIN tblfuncionesjuzgadores fj ON aj.cveFuncionJuzgador = fj.cveFuncionJuzgador";
            $parametros['conditions'] = "aj.idAudiencia = " . $idAudiencia . " AND aj.activo = 'S'";

            $responseJuzgadores = $selectDao->selectDAO($parametros);

            $responseJuzgadores = json_decode($responseJuzgadores, true);

            if ($responseJuzgadores['Estatus'] == 'Fail') {
                throw new Exception($responseJuzgadores['mnj']);
            }


            if ($responseJuzgadores['totalCount'] == 0) {
                throw new Exception('* No se encontraron resultados con los par&aacute;metros especificados.');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => $responseJuzgadores['mnj'],
                'data' => $responseJuzgadores['resultados']
            ];
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage(),
                'data' => ''
            ];
        }

        return $response;
    }

}

?>
