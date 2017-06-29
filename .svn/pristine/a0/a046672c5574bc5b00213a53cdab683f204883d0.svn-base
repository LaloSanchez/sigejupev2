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

class AudienciasjuzgadorController {

    private $proveedor;

    public function __construct() {
        
    }

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
//$tmpDto = new AudienciasjuzgadorDTO();
//$tmpDto = $AudienciasjuzgadorDao->selectAudienciasjuzgador($AudienciasjuzgadorDto,$proveedor);
//if($tmpDto!=""){//$AudienciasjuzgadorDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->updateAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);

        return $AudienciasjuzgadorDto;
//}
//return "";
    }

    public function deleteAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor = null) {
        $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
        $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
        $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->deleteAudienciasjuzgador($AudienciasjuzgadorDto, $proveedor);

        return $AudienciasjuzgadorDto;
    }

    public function selectAgendajuzgador($AudienciasjuzgadorDto, $fecha, $idjuzgador) {
        date_default_timezone_set('America/Mexico_City');

        $JuzgadoresDAO = new JuzgadoresDAO();
        $JuzgadoresDTO = new JuzgadoresDTO();
        $JuzgadoresDTO->setCveUsuario($idjuzgador); ////asignamos variable de sesion a dto
        $conscvejuz = $JuzgadoresDAO->selectJuzgadoreCveUsario($JuzgadoresDTO); ///////////////arreglo de el id del juzgador
        $contador = 0;
        if ($conscvejuz != "") {
            foreach ($conscvejuz as $rowcvejdr) {
                $idjuzgador = $rowcvejdr->getIdJuzgador(); //////id de juzgador
            }


            $orden = " and idJuzgador=" . $idjuzgador; /////////////////////preparamos la variable orden para traer audiencias
            $AudienciasjuzgadorDto = $this->validarAudienciasjuzgador($AudienciasjuzgadorDto);
            $AudienciasjuzgadorDao = new AudienciasjuzgadorDAO();
            $AudienciasjuzgadorDto = $AudienciasjuzgadorDao->selectAudienciasjuzgador($AudienciasjuzgadorDto, $orden, $provedor = ""); ////arreglo de las audiencias


            $provedor = new Proveedor("MYSQL", "sigejupe");
            $provedor->connect();
            $provedor->execute("select CURDATE() as fecha,CURTIME() as hora,DATE_ADD(CURDATE(), INTERVAL 2 DAY) as mdia;");
            $st = $provedor->fetch_object($provedor->stmt);

            $fechaserver = $st[0]['fecha'] . " " . $st[0]['hora'];
            $fechaserver2 = $st[0]['fecha'] . " " . $st[0]['hora'];
            $hra = $st[0]['hora'];
            $fechaserverm1dia = $st[0]['mdia'];
            $provedor->close();


            $response = ['total' => 0, 'msg' => 'Sin resultados'];

            if (is_array($AudienciasjuzgadorDto)) {
                if (count($AudienciasjuzgadorDto) < 1) {
                    return $response;
                }
            } else {
                if (strlen($AudienciasjuzgadorDto) == 0) {
                    return $response;
                }
            }

            $AudienciasDto = new AudienciasDTO();
            $AudienciasDAO = new AudienciasDAO();
            $CataaudDTO = new CataudienciasDTO();
            $CataaudDAO = new CataudienciasDAO();
            $CsalaDTO = new SalasDTO();
            $CSalaDAO = new SalasDAO();
            $tcarDTO = new TiposcarpetasDTO();
            $tcarDAO = new TiposcarpetasDAO();
            $tcestaudDTO = new EstatusaudienciasDTO();
            $tcestaudDAO = new EstatusaudienciasDAO();
            $funcjuzDAO = new FuncionesjuzgadoresDAO();
            $funcjuzDTO = new FuncionesjuzgadoresDTO();
            $data = [];
            $contador = 0;

            $orden = "";
            $fecha = str_replace("/", "-", $fecha);
            $fecha = $fecha[6] . $fecha[7] . $fecha[8] . $fecha[9] . "-" . $fecha[3] . $fecha[4] . "-" . $fecha[0] . $fecha[1];
            $fechamas1dia = date($fechaserver, (strtotime("+1 day")));

            $fecha24horas = date($fechaserver, (strtotime("+24 Hours")));

//echo $fecha." vs ".$fechaserver;
            if ($fecha > $fechaserverm1dia) {
                //echo "1.-".$fecha."  ".$fechaserver. "  f1d  ".$fechamas1dia;
                return $response;
            }
            if ($fecha < $fechaserver || $fecha == $fechaserver) {//es menor o igual
                // echo "2.-".$fecha."  ".$fechaserver;
                $orden = "and fechaInicial>='" . $fecha . " 00:00:00' and fechaInicial<='" . $fecha . " 23:59:59'";
            }
            if ($fecha > $fechaserver) {/////es mayor con 1 dia
                //echo "3.-".$fecha."  ".$fechaserver;
                $hoy = $fechaserver;

                $orden = "and fechaInicial>='" . $fecha . " 00:00:00' and fechaInicial<='" . $fecha . " " . $hra . "'";
            }
            $orden.=" and cveEstatusAudiencia <>3 ";

//  $CataaudDTO->setCveCatAudiencia($aud->getCveCatAudiencia());
            $condescat = $CataaudDAO->selectCataudiencias($CataaudDTO);
            $ressala = $CSalaDAO->selectSalas($CsalaDTO);
            $catestaud = $tcestaudDAO->selectEstatusaudiencias($tcestaudDTO);

            foreach ($AudienciasjuzgadorDto AS $row) {/////////////////audienciasJuzgador
                $audiencia = "";
                $horario = "";
                $sala = "";
                $detenidos = "";
                $causa = "";
                $tipocarpeta = "";
                $tipo = "";
                $rol = "";
                $proveedor = "";


                $AudienciasDto->setIdAudiencia($row->getIdAudiencia()); ///////////////  id de audiencia
                $consultaAudiencia = $AudienciasDAO->selectAudiencias($AudienciasDto, $orden);
                $constcar = $tcarDAO->selectTiposcarpetas($tcarDTO);

                if ($consultaAudiencia != "") {

                    foreach ($consultaAudiencia AS $aud) {

                        ////////////////////////////////////////////////////////////horario
                        $inicial = explode(" ", $aud->getFechaInicial());
                        $inicial = explode(":", $inicial[1]);
                        $inicial = $inicial[0] . ":" . $inicial[1];
                        $final = explode(" ", $aud->getFechaFinal());
                        $final = explode(":", $final[1]);
                        $final = $final[0] . ":" . $final[1];
                        $horario = $inicial . " " . $final;

                        ////////////////////////////////////////////////////////////Audiencia

                        foreach ($condescat as $rowcat) {
                            if ($rowcat->getCveCatAudiencia() == $aud->getCveCatAudiencia()) {
                                $audiencia = $rowcat->getDesCatAudiencia();
                                break;
                            }
                        }
                        ////////////////////////////////////////////////////// fin sala


                        foreach ($ressala as $rowsala) {
                            if ($rowsala->getCveSala() == $aud->getCveSala()) {
                                $sala = $rowsala->getDesSala();
                                break;
                            }
                        }
                        ////////////////////////////////////////////////////// inicio tiposcrapetas

                        foreach ($constcar as $rowcarp) {
                            if ($rowcarp->getCveTipoCarpeta() == $aud->getCveTipoCarpeta()) {
                                $tipocarpeta = $rowcarp->getDesTipoCarpeta();
                                break;
                            }
                        }
                        ////////////////////////////////////////////////////// inicio tiposcrapetas

                        foreach ($catestaud as $roeestaud) {
                            if($roeestaud->getCveEstatusAudiencia()==$aud->getCveEstatusAudiencia())
                            $tipo = $roeestaud->getDesEstatusAudiencia();
                        }
                    }

                    ////////////////////////////////////////////////////// funcion rol
                    $funcjuzDTO->setCveFuncionJuzgador($row->getCveFuncionJuzgador());
                    $consfuncjuz = $funcjuzDAO->selectFuncionesjuzgadores($funcjuzDTO);
                    foreach ($consfuncjuz as $fjg) {
                        $rol = $fjg->getDesFuncionJuzgador();
                    }
                    $detenidos = $aud->getDetenido();
                    $causa = $aud->getNumero() . "/" . $aud->getAnio();

                    $data[$contador] = array(
                        'id' => $aud->getIdAudiencia(),
                        'horario' => $horario,
                        'audiencia' => $audiencia,
                        'causa' => $causa,
                        'carpeta' => $tipocarpeta,
                        'sala' => $sala,
                        'detenido' => $detenidos,
                        'tipo' => $tipo,
                        'rol' => $rol);

                    $contador ++;
                }
            }
        }
        if ($contador > 0) {

            $response = [
                'total' => $contador,
                'data' => $data
            ];
        } else {
            $response = [
                'total' => 0,
                'msg' => 'Sin resultados'
            ];
        }

        return $response;
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