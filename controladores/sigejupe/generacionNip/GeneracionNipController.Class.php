<?php

//session_start();
date_default_timezone_set("America/Mexico_City");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacioncateos/ProgramacioncateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionordenes/ProgramacionordenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionordenes/ProgramacionordenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/programacionmuestras/ProgramacionmuestrasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nipsolicitudes/NipsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nipsolicitudes/NipsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiemposesperasolicitudes/TiemposesperasolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiemposesperasolicitudes/TiemposesperasolicitudesDAO.Class.php");

class GeneracionNipController {

    /**
     * Metodo que genera los codigos aleatorios
     * @var in $tipo Tipo Proceso : 1-Cateo 2-Orden
     * @return json Json con la Informacion del Codigo Generado
     */
    public function generaCodigo($tipo) {
        $error = false;
        $tmp = array();
        $cveJuzgador = $_SESSION['cveUsuarioSistema'];

        /* Buscamos el Juez */
        $tmp = $this->obtieneJuzgador($cveJuzgador);
        if ($tmp['type'] == 'OK') {
            $juzgadoresDto = $tmp['data'];
        } else {
            $error = true;
        }

        if (!$error) {
            $tmp = $this->juezProgramacion($tipo, $juzgadoresDto->getIdJuzgador());
            if ($tmp != '') {
                $tmp = $tmp[0]->toString();
            } else {
                $error = true;
                $tmp['type'] = 'Error';
                $tmp['text'] = 'NO SE ENCONTRO EL JUZGADOR EN LA PROGRAMACION ';
            }
        }

        if (!$error) {
            $nipSolicitudDao = new NipsolicitudesDAO();
            $do = false;
            $codigo = '';
            do {
                $codigo = uniqid();
                $codigo = substr($codigo, strlen($codigo) - 6);
                $nipSolicitudDto = new NipsolicitudesDTO();
                $nipSolicitudDto->setNip($codigo);
                $nipSolicitudDto = $nipSolicitudDao->selectNipsolicitudes($nipSolicitudDto);
                if ($nipSolicitudDto != "") {
                    $do = false;
                } else {
                    $do = true;
                }
            } while (!$do);

            switch ($tipo) {
                case 1:
                    $cveTipoCarpeta = 9;
                    $cveTipoSolicitud = 5;
                    $carpeta = "EL CATEO:";
                    break;
                case 2:
                    $cveTipoCarpeta = 10;
                    $cveTipoSolicitud = 6;
                    $carpeta = "LA ORDEN DE APREHENSION:";
                    break;
                case 3:
                    $cveTipoCarpeta = 11;
                    $cveTipoSolicitud = 7;
                    $carpeta = "LA TOMA DE MUESTRA:";
                    break;
            }

//            $cveTipoCarpeta = ($tipo == 1) ? 9 : 10;
//            $cveTipoSolicitud = ($tipo == 1) ? 5 : 6;
//            $carpeta = ($tipo == 1) ? 'EL CATEO: ' : 'LA ORDEN DE APREHENSION: ';

            /**
             * Busca la Vigencia
             */
            $tiempoVigenciaDao = new TiemposesperasolicitudesDAO();
            $tiempoVigenciaDto = new TiemposesperasolicitudesDTO();
            $tiempoVigenciaDto->setActivo('S');
            $tiempoVigenciaDto->setCveTipoSolicitud($cveTipoSolicitud);
            $tiempoVigenciaDto = $tiempoVigenciaDao->selectTiemposesperasolicitudes($tiempoVigenciaDto);
            $fechaFinal = '';
            if ($tiempoVigenciaDto != '') {
                $today = date('Y-m-d H:i:s');
                $strtotime = strtotime('+' . $tiempoVigenciaDto[0]->getMunitosEspera() . ' minutes', strtotime($today));
                $fechaFinal = date('Y-m-d H:i:s', $strtotime);
            } else {
                $fechaFinal = $tmp['fechaFinal'];
            }


            $nipSolicitudDto = new NipsolicitudesDTO();
            $nipSolicitudDto->setActivo('S');
            $nipSolicitudDto->setNip($codigo);
            $nipSolicitudDto->setCveTipoCarpeta($cveTipoCarpeta);
            $nipSolicitudDto->setFechaInicial(date('Y-m-d H:i:s'));
            $nipSolicitudDto->setFechaFinal($fechaFinal);
            $nipSolicitudDto->setIdJuzgador($juzgadoresDto->getIdJuzgador());
            $nipSolicitudDto = $nipSolicitudDao->insertNipsolicitudes($nipSolicitudDto);
            if ($nipSolicitudDto != '') {
                $tmp = array();
                $tmp['type'] = 'OK';
                $tmp['text'] = 'NIP GENERADO PARA ' . $carpeta . $codigo;
            } else {
                $error = true;
                $tmp = array();
                $tmp['type'] = 'Error';
                $tmp['text'] = 'NO SE PUDO GENERAR EL NIP';
            }
        }

        return $tmp;
    }

    /**
     * Funcion que nos regresa la Informacion del Juez en la Programacion
     * @var int $tipo 1 - Cateo 2- Orden
     * @var int $idJuez Identificador del Juez que se buscara en la Programacion
     * @return array Datos del Juez o Error
     */
    private function juezProgramacion($tipo, $idJuez) {
        $tmp = array();
        if (((int) $tipo) > 0) {

            $fechaInicio = explode(" ", date('Y-m-d H:i:s'));
            $fechaInicioJuzgadorCateo = $fechaInicio[0] . " 08:30:00";
            $fechaFinJuzgadorCateo = $fechaInicio[0] . " 08:29:59";

            $horasFecha = explode(":", $fechaInicio[1]);
            $ajustaDiaInicio = false;
            if ((int) $horasFecha[0] < 8) {
                $ajustaDiaInicio = true;
            } else {
                if ((int) $horasFecha[0] == 8) {
                    if ((int) $horasFecha[1] < 30) {
                        $ajustaDiaInicio = true;
                    }
                }
            }
            if ($ajustaDiaInicio) {
                $nuevafecha = new DateTime($fechaInicio[0]);
                $nuevafecha->modify('-1 day');
                $fechaInicioJuzgadorCateo = $nuevafecha->format('Y-m-d') . " 08:30:00";
            }

            $ajustaDiaFinal = false;
            if ((int) $horasFecha[0] >= 9) {
                $ajustaDiaFinal = true;
            } else {
                if ((int) $horasFecha[0] == 8) {
                    if ((int) $horasFecha[1] > 30) {
                        $ajustaDiaFinal = true;
                    }
                }
            }

            if ($ajustaDiaFinal) {
                $nuevafecha = new DateTime($fechaInicio[0]);
                $nuevafecha->modify('+1 day');
                $fechaFinJuzgadorCateo = $nuevafecha->format('Y-m-d') . " 08:29:59";
            }

            switch ($tipo) {
                case 1:
                    $programacionDao = new ProgramacioncateosDAO();
                    $programacionDto = new ProgramacioncateosDTO();
                    $programacionDto->setActivo('S');
                    $programacionDto->setIdJuzgador($idJuez);
                    $orden = " AND fechaInicio >= '" . $fechaInicioJuzgadorCateo . "' 
                                           AND fechaInicio <= '" . $fechaFinJuzgadorCateo . "' ORDER BY idJuzgador DESC";
                    $tmp = $programacionDao->selectProgramacioncateos($programacionDto, $orden);
                    break;
                case 2:
                    $programacionDao = new ProgramacionordenesDAO();
                    $programacionDto = new ProgramacionordenesDTO();
                    $programacionDto->setActivo('S');
                    $programacionDto->setIdJuzgador($idJuez);
                    $orden = " AND fechaInicio >= '" . $fechaInicioJuzgadorCateo . "'
                                           AND fechaInicio <= '" . $fechaFinJuzgadorCateo . "' ORDER BY idJuzgador DESC";
                    $tmp = $programacionDao->selectProgramacionordenes($programacionDto, $orden);
                    break;
                case 3:
                    $programacionDao = new ProgramacionmuestrasDAO();
                    $programacionDto = new ProgramacionmuestrasDTO();
                    $programacionDto->setActivo('S');
                    $programacionDto->setIdJuzgador($idJuez);
                    $orden = " AND fechaInicio >= '" . $fechaInicioJuzgadorCateo . "'
                                           AND fechaInicio <= '" . $fechaFinJuzgadorCateo . "' ORDER BY idJuzgador DESC";
                    $tmp = $programacionDao->selectProgramacionmuestras($programacionDto, $orden);
                    break;
                default :
                    $tmp['type'] = 'Error';
                    $tmp['text'] = 'NO SE ENCONTRO EL JUEZ EN LA PROGRAMACION*';
                    break;
            }
        } else {
            $tmp['type'] = 'Error';
            $tmp['text'] = 'NO SE ENCONTRO EL JUEZ EN LA PROGRAMACION';
        }
        return $tmp;
    }

    /**
     * Obtiene la informacion de un juzgador
     * @param int $cveJuzgador Clave del Juez a Buscar
     * @return array Informacion del Juez
     */
    private function obtieneJuzgador($cveJuzgador) {
        $tmp = array();
        $juzgadoresDao = new JuzgadoresDAO();
        $juzgadoresDto = new JuzgadoresDTO();
        $juzgadoresDto->setActivo('S');
        $juzgadoresDto->setCveUsuario($cveJuzgador);
        $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto, '');
        if ($juzgadoresDto != "") {
            $tmp['type'] = 'OK';
            $tmp['data'] = $juzgadoresDto[0];
        } else {
            $error = true;
            $tmp['type'] = 'Error';
            $tmp['text'] = 'NO SE ENCONTRO EL JUZGADOR';
        }
        return $tmp;
    }

    public function getNips($datos) {
        if (is_array($datos) && (count($datos) > 0)) {
            $error = false;
            $cveJuzgador = $_SESSION['cveUsuarioSistema'];

            /* Buscamos el Juez */
            $tmp = $this->obtieneJuzgador($cveJuzgador);
            if ($tmp['type'] == 'OK') {
                $juzgadoresDto = $tmp['data'];
            } else {
                $error = true;
            }

            if (!$error) {
                $nipSolicitudesDao = new NipsolicitudesDAO();
                $nipSolicitudesDto = new NipsolicitudesDTO();
                $nipSolicitudesDto->setNip($datos['nip']);
                $nipSolicitudesDto->setIdJuzgador($juzgadoresDto->getIdJuzgador());
                $orden = '';
                if (($datos['fechaFinal'] == '') && ($datos['nip'] == '')) {
                    $orden = ' AND Date(fechaInicial) >= "' . date('Y-m-d') . '" ORDER BY idNipSolicitud DESC';
                } else {
                    $orden = '';
                    $fecha = explode('/', $datos['fechaInicial']);
                    $fechaInicial = $fecha[2] . '-' . $fecha[1] . '-' . $fecha[0];
                    $fecha = explode('/', $datos['fechaFinal']);
                    $fechaFinal = $fecha[2] . '-' . $fecha[1] . '-' . $fecha[0];
                    if ($fechaInicial == $fechaFinal) {
                        $orden .= " AND fechaRegistro >= '" . $fechaInicial . " 00:00:00'";
                        $orden .= " AND fechaRegistro <= '" . $fechaInicial . " 23:59:59'";
                    } else {
                        $orden .= " AND fechaRegistro >= '" . $fechaInicial . " 00:00:00'";
                        $orden .= " AND fechaRegistro <= '" . $fechaFinal . " 23:59:59'";
                    }
                    $orden .= " ORDER BY idNipSolicitud DESC";
                }

                $nipSolicitudesDto = $nipSolicitudesDao->selectNipsolicitudes($nipSolicitudesDto, $orden);
                if ($nipSolicitudesDto != '') {
                    $tmp = array();
                    $tmp['type'] = 'OK';
                    $contador = 0;
                    foreach ($nipSolicitudesDto as $nip) {
                        $tmp['data'][$contador]['nip'] = $nip->getNip();
                        $tmp['data'][$contador]['vigencia'] = $this->getFecha($nip->getFechaInicial()) . ' al ' . $this->getFecha($nip->getFechaFinal());
                        switch ($nip->getCveTipoCarpeta()) {
                            case 9:
                                $carpeta = "Cateos";
                                break;
                            case 10:
                                $carpeta = "Orden de Aprehension";
                                break;
                            case 11:
                                $carpeta = "Toma de Muestras";
                                break;
                        }
                        $tmp['data'][$contador]['carpeta'] = $carpeta;
                        $fecactual = strtotime(date("d-m-Y H:i:00", time()));
                        $fecNip = strtotime($nip->getFechaFinal());
                        $status = '';
                        if ($nip->getActivo() == 'N') {
                            $status = 'Utilizado';
                        } else {
                            $status = ($fecactual < $fecNip) ? 'Vigente' : 'Expirado';
                        }
                        $tmp['data'][$contador]['status'] = $status;
                        $contador++;
                    }
                } else {
                    $tmp['type'] = 'Error';
                    $tmp['text'] = 'NO HAY INFORMACION';
                }
            }
            return $tmp;
        }
        return array('type' => 'Error', 'text' => 'NO HAY RESULTADOS');
    }

    private function getFecha($fecha) {
        $fechaTime = explode(' ', $fecha);
        $tiempo = $fechaTime[1];
        $fechaSplit = explode('-', $fechaTime[0]);
        return $fechaSplit[2] . '/' . $fechaSplit[1] . '/' . $fechaSplit[0] . ' ' . $tiempo;
    }

}
