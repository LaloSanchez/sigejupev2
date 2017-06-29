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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlescargas/ControlescargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlescargas/ControlescargasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/configuracionescargas/ConfiguracionescargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/configuracionescargas/ConfiguracionescargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

class ControlescargasController {

    private $proveedor;
    private $name;

    public function __construct() {
        
    }

    private function getFecha($proveedor) {
        $sql = "Select date_format(now(),'%Y-%m-%d') as fecha";
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $fecha = $proveedor->fetch_array($proveedor->stmt, 0);
                return $fecha["fecha"];
            }
        }
    }

    private function getHora($proveedor) {
        $sql = "Select date_format(now(),'%H:%i:%s') as hora";
        $proveedor->execute($sql);
        if (!$proveedor->error()) {
            if ($proveedor->rows($proveedor->stmt) > 0) {
                $fecha = $proveedor->fetch_array($proveedor->stmt, 0);
                return $fecha["hora"];
            }
        }
    }

    public function noDispinibilidadJuzgado($regionesSalasDto, $fecha) {
        if (date('YmdHis', strtotime($regionesSalasDto->getFechaNoDisponibilidadIncio())) <= date('YmdHis', strtotime($fecha))) {
            if (date('YmdHis', strtotime($regionesSalasDto->getFechaNoDisponibilidadTermino())) >= date('YmdHis', strtotime($fecha))) {
                return true;
            }
        }
        return false;
    }

    private function burbuja($controlesCargasDto) {
        if (count($controlesCargasDto) > 0) {
            $this->logger->w_onError("******Se procede a ordenar el listado de juzgados por el total de asignados******");
            $aux = "";
            for ($x = 0; $x < count($controlesCargasDto); $x++) {
                for ($y = 0; $y < count($controlesCargasDto) - 1; $y++) {
                    if ($controlesCargasDto[$y]->getTotalAsignados() < $controlesCargasDto[$y + 1]->getTotalAsignados()) {
                        $aux = $controlesCargasDto[$y];
                        $controlesCargasDto[$y] = $controlesCargasDto[$y + 1];
                        $controlesCargasDto[$y + 1] = $aux;
                    }
                }
            }
            $this->logger->w_onError("******Termina de ordenar******");
            return $controlesCargasDto;
        }
        return "";
    }

    public function getJuzgado($configuracionesCargasDto = "", $controlesCargasDto = "", $regionesSalasDto, $proveedor = null) {
        $this->logger = new Logger("/../../logs/", "ControlescargasController");
        $this->logger->w_onError("Comenzamos con el programa para el sorteo de las salas ");
        if ($configuracionesCargasDto == "") {
            $configuracionesCargasDto = new ConfiguracionesCargasDTO();
        }

        if (((int) $configuracionesCargasDto->getCveRegion()) > 0) {

            $this->name = "ControlescargasController_" . $configuracionesCargasDto->getCveRegion();

            $this->logger->w_onError("******INICIA PROCESO DE DISTRIBUCION DE CARGA******");
            $this->logger->w_onError("******BUSCANDO CONFIGURACION DE LA OFICIALIA******");
            if ($this->getDisponibilidad($configuracionesCargasDto, $proveedor) == 0) {
                $sorteo = array();
                $proceso = 1;
                $juzgado = 0;
                $count = 0;

                $configuracionesCargasDto->setActivo('S');
                $configuracionesCargasDao = new ConfiguracionesCargasDAO(null, true, $this->name);
                $configuracionesCargasDto = $configuracionesCargasDao->selectConfiguracionescargas($configuracionesCargasDto, " order by fechaRegistro DESC", $proveedor);
                if ($configuracionesCargasDto != "") {

                    $this->logger->w_onError("******Configuracion Total: " . count($configuracionesCargasDto));
                    $this->logger->w_onError("******Descripcion Configuracion \nOficialia: " . $configuracionesCargasDto[0]->getCveRegion());

                    $this->logger->w_onError("******BUSCAMOS LOS JUZGADOS DE LA OFICIALIA : ");
                    //////HASTA AQUI TODO BIEN
//                    $regionesSalasDao = new RegionessalasDAO(null, true, $this->name);
                    $regionesSalasDao = new RegionessalasDAO();
                    $regionesSalasDto->setActivo("S");
                    $regionesSalasDto = $regionesSalasDao->selectRegionessalas($regionesSalasDto, " order by proporcion DESC", $proveedor);
                    $this->logger->w_onError("******TOTAL DE JUZGADOS ENCONTRADOS: " . count($regionesSalasDto));
                    if ($regionesSalasDto != "") {

                        $fecha = $this->getFecha($proveedor);
                        $hora = $this->getHora($proveedor);
                        $fecha.=" " . $hora;

                        $count = 0;
                        for ($index = 0; $index < count($regionesSalasDto); $index++) {
                            if (!$this->noDispinibilidadJuzgado($regionesSalasDto[$index], $fecha)) {
                                $sorteo[$count] = $regionesSalasDto[$index];
                                $count++;
                            }
                        }

                        if (count($sorteo) > 0) {
                            if ($controlesCargasDto->getCveTipoCarpeta() != "3") {
                                $this->logger->w_onError("******IDENTIFICAMOS SI SERA POR TOPE CARGA O PROPORCION");
                                $this->logger->w_onError("******EL PROCESO POR DEFAULT: " . $proceso);

                                if (count($sorteo) > 0) {
                                    for ($index = 0; $index < count($sorteo); $index++) {
                                        if ((int) $sorteo[$index]->getProporcion() > 1) {
                                            $this->logger->w_onError("******LA PROPORCION ES MAYOR A 1 (int) " . $sorteo[$index]->getProporcion() . " > 1");
                                            $proceso = 2;
                                            break;
                                        }
                                    }
                                }
                            } else if ($controlesCargasDto->getCveTipoCarpeta() == "3") {
                                $this->logger->w_onError("******IDENTIFICAMOS SI SERA POR TOPE CARGA O PROPORCION PARA EXHORTO");
                                $this->logger->w_onError("******EL PROCESO POR DEFAULT: " . $proceso);

                                if (count($sorteo) > 0) {
                                    $this->logger->w_onError(print_r($sorteo, true));
                                    for ($index = 0; $index < count($sorteo); $index++) {

                                        if ((int) $sorteo[$index]->getProporcionExhorto() > 1) {
                                            $this->logger->w_onError("******LA PROPORCION ES MAYOR A 1 (int) " . $sorteo[$index]->getProporcionExhorto() . " > 1");
                                            $proceso = 2;
                                            break;
                                        }
                                    }
                                }
                            }


                            if ($proceso == 1) {
                                $this->logger->w_onError("******SE CONSIDERA QUE SERA POR TOPE CARGA");
                                $juzgado = $this->topeCarga($sorteo, $configuracionesCargasDto[0], $controlesCargasDto, $proveedor);
                                $this->logger->w_onError("******TERMINA PROCESO DE DISTRIBUCION DE CARGA******");
                                return $juzgado;
                            } else if ($proceso == 2) {
                                $this->logger->w_onError("******SE CONSIDERA QUE SERA POR PROPORCION");
                                $juzgado = $this->proporcion($sorteo, $configuracionesCargasDto[0], $controlesCargasDto, $proveedor);
                                $this->logger->w_onError("******TERMINA PROCESO DE DISTRIBUCION DE CARGA******");
                                return $juzgado;
                            }
                        } else {
                            $this->logger->w_onError("******NO EXISTEN JUZGADOS EN HORARIO DISPONIBLE");
                            return -3;
                        }
                    } else {
                        echo "NO EXISTE JUZGADO";
                        $this->logger->w_onError("******NO EXISTEN JUZGADOS");
                        return 0;
                    }
                } else {
                    $this->logger->w_onError("******NO EXISTEN CONFIGURACION PARA LA OFICIALIA******");
                    return -1;
                }
                return $juzgado;
            } else {
                /* No esta en horario de atencion */
                $this->logger->w_onError("******NO SE ENCUENTRA EN HORARIO DE ATENCION******");
                return -2;
            }
        } else {
            $this->logger->w_onError("******LA CLAVE DE OFICIALIA LLEGO VACIO O IGUAL A CERO******");
            return -4;
        }
    }

    private function topeCarga($sorteo, $configuracionesCargasDto, $controlesCargasDto, $proveedor) {
        $this->logger->w_onError("******COMIENZA CON EL METODO TOPE DE CARGA******");
        $auxControlCargaDto = $controlesCargasDto;
        $historial = array();
        $count = 0;
        $aux = $sorteo;
        $this->logger->w_onError("******Revisamos que existan juzgados: " . count($sorteo));
        if (count($sorteo) > 0) {
            $controlesCargasDao = new ControlesCargasDAO(null, true, $this->name);
            for ($index = 0; $index < count($sorteo); $index++) {
                $this->logger->w_onError("******BUSCAMOS EL ANTECEDENTE DE LOS TOTALES ASIGNADOS******");
                $controlesCargasDto = new ControlesCargasDTO();

                $controlesCargasDto->setCveTipoCarpeta($auxControlCargaDto->getCveTipoCarpeta());
                $controlesCargasDto->setIdRegionSala($sorteo[$index]->getIdRegionSala());
                $controlesCargasDto->setAnioControl(date('Y', strtotime($this->getFecha($proveedor))));
                $controlesCargasDto->setCveJuzgado($sorteo[$index]->getCveJuzgado());
                $controlesCargasDto->setCveConfiguracionCarga($configuracionesCargasDto->getCveConfiguracionCarga());

                $controlesCargasDto = $controlesCargasDao->selectControlescargas($controlesCargasDto, "", $proveedor);
                if ($controlesCargasDto != "") {
                    $historial[$count] = $controlesCargasDto[0];
                    $totalAsignados = 0;
                    foreach ($controlesCargasDto as $controlCarga) {
                        $totalAsignados+=$controlCarga->getTotalAsignados();
                    }
                    $historial[$count]->setTotalAsignados($totalAsignados);
                    $count++;
                } else {
                    $historial[$count] = new ControlesCargasDTO();
                    $historial[$count]->setCveTipoCarpeta($auxControlCargaDto->getCveTipoCarpeta());
                    $historial[$count]->setIdRegionSala($sorteo[$index]->getIdRegionSala());
                    $historial[$count]->setAnioControl(date('Y', strtotime($this->getFecha($proveedor))));
                    $historial[$count]->setCveJuzgado($sorteo[$index]->getCveJuzgado());
                    $historial[$count]->setCveConfiguracionCarga($configuracionesCargasDto->getCveConfiguracionCarga());
                    $historial[$count]->setTotalAsignados(0);
                    $count++;
                }
            }

            if (count($historial) > 0) {
                $historial = $this->burbuja($historial);

                $this->logger->w_onError("Juzgados ordernados =>" . print_r($historial, true));
                if ($historial != "") {
                    $this->logger->w_onError("******Se revisa que el metodo de ordenamiento regrese el listado******");
                    $mayor = 0;
                    $menor = count($historial) - 1;
                    $sorteo = array();
                    $count = 0;
                    $this->logger->w_onError("******Se comienza ha ver que juzgados estaran disponibles para el sorteo******");
                    for ($x = count($historial) - 1; $x >= 0; $x--) {
                        for ($i = 0; $i < count($aux); $i++) {
                            if ($aux[$i]->getCveJuzgado() == $historial[$x]->getCveJuzgado()) {
                                $resultado = $historial[$x]->getTotalAsignados() + $aux[$i]->getControl();
                                break;
                            }
                        }
                        $this->logger->w_onError("Operacion  =>" . $resultado . "-" . $historial[$mayor]->getTotalAsignados());
//                        echo "Operacion  =>" . $resultado . "-" . $historial[$mayor]->getTotalAsignados();
                        $resultado = $resultado - $historial[$mayor]->getTotalAsignados();
                        $this->logger->w_onError("Resultado =>" . $resultado . " Para el Juzgado =>" . $historial[$x]->getCveJuzgado());
//                        echo "Resultado =>" . $resultado . " Para el Juzgado =>" . $historial[$x]->getCveJuzgado();
                        if ($resultado < 0) { //$configuracionesCargasDto->getTopeCarga()
                            $this->logger->w_onError("La diferencia =>" . $historial[$x]->getTotalAsignados() . "-" . $historial[$menor]->getTotalAsignados());
//                            echo"La diferencia =>" . $historial[$x]->getTotalAsignados() . "-" . $historial[$menor]->getTotalAsignados();
                            $diferencia = $historial[$x]->getTotalAsignados() - $historial[$menor]->getTotalAsignados();
                            $this->logger->w_onError("La diferencia =>" . $diferencia . "Control Carga =>" . $configuracionesCargasDto->getTopeCarga());
//                            echo"La diferencia =>" . $diferencia . "Control Carga =>" . $configuracionesCargasDto->getTopeCarga();
                            if ($diferencia <= $configuracionesCargasDto->getTopeCarga()) {
                                $this->logger->w_onError("=============  Juzgado para sorteo" . print_r($historial[$x], true));
//                                echo"=============  Juzgado para sorteo" . print_r($historial[$x], true);
                                $sorteo[$count] = $historial[$x];
                                //   $this->logger->w_onError("******juzgado para sorteo numero " . $count . ": " . $historial[$x]->getCveJuzgado());
                            }



                            $count++;
                        }
                    }
                    //   error_log(print_r($sorteo,true));
                    if (count($sorteo) > 0) {
                        $sorteo[$count] = $historial[$menor];
                        $count++;
                    }

                    $this->logger->w_onError("******Revisamos que el listado de juzgados sea mayor a 0");
                    if (count($sorteo) <= 0) {
                        $this->logger->w_onError("******Como el listado es menor a 0 significa que todos los juzgados estan iguales y se contemplan todos para el sorteo");
                        $sorteo = $aux;
                    } else {
                        $juzgados = array();
                        $count = 0;
                        for ($index = 0; $index < count($sorteo); $index++) {
                            for ($i = 0; $i < count($aux); $i++) {
                                if ($aux[$i]->getCveJuzgado() == $sorteo[$index]->getCveJuzgado()) {
                                    $juzgados[$count] = $aux[$i];
                                    $count++;
                                    break;
                                }
                            }
                        }
                    }
                    shuffle($sorteo);
                    $this->logger->w_onError("Arreglo des ordenado" . print_r($sorteo, true));
                    $limite = count($sorteo) - 1;
                    $this->logger->w_onError("******Obtenemos el limite de indices para sortear: " . $limite);
                    while (1) {
                        $index = rand(0, $limite);
                        $this->logger->w_onError("******Obtenemos juzgado aleatorio: " . $sorteo[$index]->getCveJuzgado());
                        $controlesCargasDto = new ControlesCargasDTO();
                        $controlesCargasDto->setCveTipoCarpeta($auxControlCargaDto->getCveTipoCarpeta());
                        $controlesCargasDto->setIdRegionSala($sorteo[$index]->getIdRegionSala());
                        $controlesCargasDto->setAnioControl(date('Y', strtotime($this->getFecha($proveedor))));
                        $controlesCargasDto->setCveJuzgado($sorteo[$index]->getCveJuzgado());
                        $controlesCargasDto->setCveConfiguracionCarga($configuracionesCargasDto->getCveConfiguracionCarga());
                        $controlesCargasDao = new ControlescargasDAO();
                        $tmp = $controlesCargasDao->selectControlescargas($controlesCargasDto, "", $proveedor);
                        $this->logger->w_onError("******Revisamos que exista el antecedente");
                        if ($tmp != "") {
                            $this->logger->w_onError("******Se determina que existe se actualiza");
                            $tmp = $tmp[0];
                            $tmp->setTotalAsignados($tmp->getTotalAsignados() + 1);
                            $tmp = $controlesCargasDao->updateControlescargas($tmp, $proveedor);
                            if ($tmp != "") {
                                $this->logger->w_onError("******Se actualizo de forma correcta");
                                $this->logger->w_onError("******El juzgado a regresar : " . $sorteo[$index]->getCveJuzgado());
                                return $sorteo[$index]->getCveJuzgado();
                            } else {
                                $this->logger->w_onError("******Ocurrio un error al actualizar el registro");
                                $this->logger->w_onError("******El juzgado a regresar : " . $sorteo[$index]->getCveJuzgado());
                                return 0;
                            }
                        } else {
                            $this->logger->w_onError("******Se determina que no existe antecedente");
                            $this->logger->w_onError("******Se inserta uno nuevo");
                            $this->logger->w_onError("******El juzgado a regresar : " . $sorteo[$index]->getCveJuzgado());
                            $controlesCargasDto->setTotalAsignados(1);
                            $tmp = $controlesCargasDao->insertControlescargas($controlesCargasDto, $proveedor);
                            if ($tmp != "") {
                                $this->logger->w_onError("******Se inserto de forma correcta");
                                $this->logger->w_onError("******El juzgado a regresar : " . $sorteo[$index]->getCveJuzgado());
                                return $sorteo[$index]->getCveJuzgado();
                            } else {
                                $this->logger->w_onError("******Ocurrio un error al actualizar el registro");
                                $this->logger->w_onError("******El juzgado a regresar : " . $sorteo[$index]->getCveJuzgado());
                                return 0;
                            }
                        }
                    }
                } else {
                    $this->logger->w_onError("******TERMINA CON EL METODO TOPE DE CARGA******");
                    return 0;
                }
            }
        }
        $this->logger->w_onError("******TERMINA CON EL METODO TOPE DE CARGA******");
        return 0;
    }

    public function getDisponibilidad($configuracionesCargasDto, $proveedor = null) {
        $this->logger->w_onError("******REVISAMOS QUE LA OFICIALIA ESTE EN EL HORARIO DE ATENCION******");
        $configuracionesCargasDto->setActivo('S');
        $configuracionesCargasDto->setInicia($this->getHora($proveedor));
        $configuracionesCargasDao = new ConfiguracionesCargasDAO(null, true, $this->name);
        $configuracionesCargasDto = $configuracionesCargasDao->selectConfiguracionescargas($configuracionesCargasDto, " order by fechaRegistro DESC", $proveedor);

        if ($configuracionesCargasDto != "") {
            $this->logger->w_onError("******LA OFICIALIA ESTA EN EL HORARIO DE ATENCION******");
            return 0;
        } else {
            $this->logger->w_onError("******LA OFICIALIA NO ESTA EN EL HORARIO DE ATENCION******");
            return -2;
        }
    }

    private function proporcion($sorteo, $configuracionesCargasDto, $controlesCargasDto, $proveedor) {
        $this->logger->w_onError("******COMIENZA CON EL METODO DE PROPORCION******");
        $auxControlCargaDto = $controlesCargasDto;
        $historial = array();
        $count = 0;
        $this->logger->w_onError("******COMIENZA CON EL METODO PROPORCION******");
        $limite = count($sorteo) - 1;
        $this->logger->w_onError("******OBTENEMOS EL LIMITE DE INDICES PARA SORTEAR:" . $limite);

        while (1) {//Comienza Ciclo
            $this->logger->w_onError("******COMIENZA EL CICLO PARA OBTENER UN JUZGADO******");
            $index = rand(0, $limite);
            $this->logger->w_onError("******INDICE DEL VECTOR: " . $index . " JUZGADO: " . $sorteo[$index]->getCveJuzgado() . " PROPORCION: " . $sorteo[$index]->getProporcion() . " ASIGNADOS: " . $sorteo[$index]->getTotalTocas());
            $this->logger->w_onError("******REVISAMOS QUE EL NUMERO DE INTENTOS NO SEA MAYOR AL NUMERO DE JUZGADOS");
            $this->logger->w_onError("******TOTAL DE JUZGADOS: " . count($sorteo) . " HISTORIAL DE INTENTOS: " . count($historial));

            if (count($sorteo) > count($historial)) {

                $this->logger->w_onError("******SE DETERMINA QUE EL NUMERO DE INTENTOS ES PERMITIDO");
                $encontrado = false;
                if (count($historial) != 0) {
                    $this->logger->w_onError("******SE BUSCA EL INDICE EL EL HISTORIAL PARA NO INTENTAR ASIGNAR DE NUEVO");
                    for ($x = 0; $x < count($historial); $x++) {
                        if ($historial[$x] == $sorteo[$index]->getCveJuzgado()) {
                            $this->logger->w_onError("******SE ENCONTRO EN EL HISTORIAL: " . $index . " JUZGADO: " . $sorteo[$index]->getCveJuzgado() . " PROPORCION: " . $sorteo[$index]->getProporcion() . " ASIGNADOS: " . $sorteo[$index]->getTotalTocas());
                            $encontrado = true;
                            break;
                        }
                    }
                }

                $this->logger->w_onError("******SE REVISA EL RESULTADO DE LA BUSQUEDA ANTERIOR");

                if (!$encontrado) {
                    $this->logger->w_onError("******NO SE ENCONTRO EN EL HISTORIAL");
                    $this->logger->w_onError("******SE REVISA QUE LAS VECES QUE SE LE HA ASIGNADO NO EXCEDA LA PROPORCION DESTINADA");
                    if (($sorteo[$index]->getTotalTocas() < $sorteo[$index]->getProporcion()) && ($auxControlCargaDto->getCveTipoCarpeta() != 7)) {
                        $this->logger->w_onError("******JUZGADO POSIBLE : " . $index . " JUZGADO: " . $sorteo[$index]->getCveJuzgado() . " PROPORCION: " . $sorteo[$index]->getProporcion() . " ASIGNADOS: " . $sorteo[$index]->getTotalTocas());
                        $this->logger->w_onError("******OBTENEMOS EL CONTROL CARGA");
                        $controlesCargasDto = new ControlesCargasDTO();
                        $controlesCargasDto->setCveTipoCarpeta($auxControlCargaDto->getCveTipoCarpeta());
                        $controlesCargasDto->setIdRegionSala($sorteo[$index]->getIdRegionSala());
                        $controlesCargasDto->setAnioControl(date('Y', strtotime($this->getFecha($proveedor))));
                        $controlesCargasDto->setCveJuzgado($sorteo[$index]->getCveJuzgado());
                        $controlesCargasDto->setCveConfiguracionCarga($configuracionesCargasDto->getCveConfiguracionCarga());
                        $controlesCargasDao = new ControlesCargasDAO();
                        $tmp = $controlesCargasDao->selectControlescargas($controlesCargasDto, "", $proveedor);

                        if ($tmp != "") {
                            $this->logger->w_onError("******SE ENCONTRARON LOS ANTECEDENTES");
                            $this->logger->w_onError("******SE ACTUALIZA EL REGISTRO");
                            $tmp = $tmp[0];
                            $tmp->setTotalAsignados($tmp->getTotalAsignados() + 1);
                            $tmp = $controlesCargasDao->updateControlescargas($tmp, $proveedor);
                            if ($tmp != "") {
                                $this->logger->w_onError("******SE ACTUALIZA EL NUMERO DE ASIGNADOS EN LA TABA DE OFICIALIASJUZ asignandos =>" . $sorteo[$index]->getTotalTocas() . "despues =>" . $sorteo[$index]->getTotalTocas() + 1);
                                $sorteo[$index]->setTotalTocas($sorteo[$index]->getTotalTocas() + 1);
                                $regionesSalasDao = new RegionessalasDAO();
                                $tmp = $regionesSalasDao->updateRegionessalas($sorteo[$index], $proveedor);
                                if ($tmp != "") {
                                    $this->logger->w_onError("******EL JUZGADO A REGRESAR: " . $sorteo[$index]->getCveJuzgado());
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return $sorteo[$index]->getCveJuzgado();
                                } else {
                                    $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return 0;
                                }
                            } else {
                                $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                return 0;
                            }
                        } else {
                            $this->logger->w_onError("******NO SE ENCONTRO UN ANTECEDENTE");
                            $this->logger->w_onError("******CREAMOS EL REGISTRO NUEVO");
                            $controlesCargasDto->setTotalAsignados(1);
                            $tmp = $controlesCargasDao->insertControlescargas($controlesCargasDto, $proveedor);
                            if ($tmp != "") {
                                $this->logger->w_onError("******SE ACTUALIZA EL NUMERO DE ASIGNADOS EN LA TABA DE OFICIALIASJUZ");
                                $sorteo[$index]->setTotalTocas($sorteo[$index]->getTotalTocas() + 1);
                                $regionesSalasDao = new RegionessalasDAO();
                                $tmp = $regionesSalasDao->updateRegionessalas($sorteo[$index], $proveedor);
                                if ($tmp != "") {
                                    $this->logger->w_onError("******EL JUZGADO A REGRESAR: " . $sorteo[$index]->getCveJuzgado());
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return $sorteo[$index]->getCveJuzgado();
                                } else {
                                    $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return 0;
                                }
                            } else {
                                $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                return 0;
                            }
//                            break;
                        }
                    } else if (($sorteo[$index]->getTotalExhortos() < $sorteo[$index]->getProporcionExhorto()) && ($auxControlCargaDto->getCveTipoCarpeta() == 7)) {
                        $this->logger->w_onError("******JUZGADO POSIBLE : " . $index . " JUZGADO: " . $sorteo[$index]->getCveJuzgado() . " PROPORCION: " . $sorteo[$index]->getProporcion() . " ASIGNADOS: " . $sorteo[$index]->getTotalTocas());
                        $this->logger->w_onError("******OBTENEMOS EL CONTROL CARGA PARA EXHORTOS ASIGNADOS:" . $sorteo[$index]->getTotalExhortos());
                        $controlesCargasDto = new ControlesCargasDTO();
                        $controlesCargasDto->setCveTipoCarpeta($auxControlCargaDto->getCveTipoCarpeta());
                        $controlesCargasDto->setIdRegionSala($sorteo[$index]->getIdRegionSala());
                        $controlesCargasDto->setAnioControl(date('Y', strtotime($this->getFecha($proveedor))));
                        $controlesCargasDto->setCveJuzgado($sorteo[$index]->getCveJuzgado());
                        $controlesCargasDto->setCveConfiguracionCarga($configuracionesCargasDto->getCveConfiguracionCarga());
                        $controlesCargasDao = new ControlescargasDAO();
                        $tmp = $controlesCargasDao->selectControlescargas($controlesCargasDto, "", $proveedor);

                        if ($tmp != "") {
                            $this->logger->w_onError("******SE ENCONTRARON LOS ANTECEDENTES");
                            $this->logger->w_onError("******SE ACTUALIZA EL REGISTRO");
                            $tmp = $tmp[0];
                            $tmp->setTotalAsignados($tmp->getTotalAsignados() + 1);
                            $tmp = $controlesCargasDao->updateControlCarga($tmp, $proveedor);
                            if ($tmp != "") {
                                $this->logger->w_onError("******SE ACTUALIZA EL NUMERO DE ASIGNADOS EN LA TABA DE OFICIALIASJUZ");
                                $sorteo[$index]->setTotalExhortos($sorteo[$index]->getTotalExhortos() + 1);
//                                $regionesSalasDao = new OficialiasJuzDAO(null, true, $this->name);
                                $regionesSalasDao = new RegionessalasDAO();
                                $tmp = $regionesSalasDao->updateRegionessalas($sorteo[$index], $proveedor);
                                if ($tmp != "") {
                                    $this->logger->w_onError("******EL JUZGADO A REGRESAR: " . $sorteo[$index]->getCveJuzgado());
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return $sorteo[$index]->getCveJuzgado();
                                } else {
                                    $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return 0;
                                }
                            } else {
                                $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                return 0;
                            }
                        } else {
                            $this->logger->w_onError("******NO SE ENCONTRO UN ANTECEDENTE");
                            $this->logger->w_onError("******CREAMOS EL REGISTRO NUEVO");
                            $controlesCargasDto->setTotalAsignados(1);
                            $tmp = $controlesCargasDao->insertControlescargas($controlesCargasDto, $proveedor);
                            if ($tmp != "") {
                                $this->logger->w_onError("******SE ACTUALIZA EL NUMERO DE ASIGNADOS EN LA TABA DE OFICIALIASJUZ");
                                $sorteo[$index]->setTotalExhortos($sorteo[$index]->getTotalExhortos() + 1);
                                $regionesSalasDao = new RegionessalasDAO();
                                $tmp = $regionesSalasDao->updateRegionessalas($sorteo[$index], $proveedor);
                                if ($tmp != "") {
                                    $this->logger->w_onError("******EL JUZGADO A REGRESAR: " . $sorteo[$index]->getCveJuzgado());
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return $sorteo[$index]->getCveJuzgado();
                                } else {
                                    $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                    $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                    return 0;
                                }
                            } else {
                                $this->logger->w_onError("******NO SE LOGRO ACTUALIZAR EL NUMERO DE ASIGNADOS EN LA TABLA DE OFICIALIASJUZ");
                                $this->logger->w_onError("******TERMINA CON EL METODO PROPORCION******");
                                return 0;
                            }
//                            break;
                        }
                    } else {
                        $this->logger->w_onError("******SE SOBREPASO EL NUMERO DE ASIGNADOS CON EL DE LA PROPORCION");
                        $historial[$count] = $sorteo[$index]->getCveJuzgado();
                        $this->logger->w_onError("******SE GUARDA EN EL HISTORIAL EL JUZGADO: " . $sorteo[$index]->getCveJuzgado());
                        $count++;
                    }
                }
            } else {
                $this->logger->w_onError("******LOS JUZGADOS YA EXCEDIERON LAPROPORCION DESTINADA");
                $this->logger->w_onError("******SE REINICIA TODOS LOS JUZGADOS PARA PODER COMENZAR EL CICLO DEL SORTEO");
                for ($x = 0; $x < count($sorteo); $x++) {
                    if ($auxControlCargaDto->getCveTipoCarpeta() != 7) {
                        $sorteo[$x]->setTotalTocas("0");
                    } else if ($auxControlCargaDto->getCveTipoCarpeta() == 7) {
                        $sorteo[$x]->setTotalExhortos("0");
                    }
//                    $regionesSalasDao = new OficialiasJuzDAO(null, true, $this->name);
                    $regionesSalasDao = new RegionessalasDAO();
                    $tmp = $regionesSalasDao->updateRegionessalas($sorteo[$x], $proveedor);
                    $this->logger->w_onError("******JUZGADO INICIALIZADO: " . $sorteo[$x]->getCveJuzgado() . "\n");
                    if ($tmp != "") {
//                        $this->logger->w_onError("******JUZGADO INICIALIZADO: ".$sorteo[$x]->getCveJuzgado());
                        //$sorteo[$x]->setTotalTocas(0);
                        if ($auxControlCargaDto->getCveTipoCarpeta() != 7) {
                            $sorteo[$x]->setTotalTocas("0");
                        } else if ($auxControlCargaDto->getCveTipoCarpeta() == 7) {
                            $sorteo[$x]->setTotalExhortos("0");
                        }
                    }
                }
                $this->logger->w_onError("******SE LIMPIA EL VECTOR DE HISTORIAL");
                $historial = array();
            }
        }//Termina Ciclo

        $this->logger->w_onError("******TERMINA CON EL METODO DE PROPORCION******");
    }

}

?>