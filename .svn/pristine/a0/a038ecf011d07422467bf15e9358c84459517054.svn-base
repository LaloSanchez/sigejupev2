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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class SalasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSalas($SalasDto) {
        $SalasDto->setcveSala(strtoupper(str_ireplace("'", "", trim($SalasDto->getcveSala()))));
        $SalasDto->setdesSala(strtoupper(str_ireplace("'", "", trim($SalasDto->getdesSala()))));
        $SalasDto->setactivo(strtoupper(str_ireplace("'", "", trim($SalasDto->getactivo()))));
        $SalasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SalasDto->getfechaRegistro()))));
        $SalasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SalasDto->getfechaActualizacion()))));
        $SalasDto->setsorteo(strtoupper(str_ireplace("'", "", trim($SalasDto->getsorteo()))));
        $SalasDto->setcveEdificio(strtoupper(str_ireplace("'", "", trim($SalasDto->getcveEdificio()))));
        $SalasDto->setcomodin(strtoupper(str_ireplace("'", "", trim($SalasDto->getcomodin()))));
        $SalasDto->setvariable(strtoupper(str_ireplace("'", "", trim($SalasDto->getvariable()))));
        return $SalasDto;
    }

    public function selectSalasRelacion($SalasDto, $proveedor = null) {
        $salasRelacionArray = array();
        $unique = array();
        $atencionsalasDto = new AtencionSalasDTO();
        $atencionsalasDto->setCveJuzgado($SalasDto->getvariable());
        $atencionsalasDao = new AtencionSalasDAO();
        $atencionsalasDto = $atencionsalasDao->selectatencionsalas($atencionsalasDto, "", $proveedor);

        $salasDto = new salasDTO();
        $salasDao = new salasDAO();
        $salasDto = $salasDao->selectsalas($salasDto, "", $proveedor);
        if ($atencionsalasDto != "") {
            foreach ($atencionsalasDto as $atencionsalaDto) {
                if (!in_array($atencionsalaDto->getCveSala(), $unique)) {
                    for ($index = 0; $index < count($salasDto); $index++) {
                        if (($salasDto[$index]->getCveSala() == $atencionsalaDto->getCveSala()) && ($salasDto[$index]->getActivo() == "S")) {
                            $salasRelacionArray["salas"][] = array("cveSala" => $salasDto[$index]->getCveSala(), "desSala" => $salasDto[$index]->getDesSala(), "activo" => $salasDto[$index]->getActivo());
                            $unique[] = $atencionsalaDto->getCveSala();
                            break;
                        }
                    }
                }
            }
        }
        $resultado = json_encode($salasRelacionArray);
        return $resultado;
    }

    public function selectSalas($SalasDto, $proveedor = null) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasDao = new SalasDAO();
        $SalasDto = $SalasDao->selectSalas($SalasDto, $proveedor);
        return $SalasDto;
    }

    public function selectSalasEdificio($SalasDto, $param, $proveedor = null) {
        $SalasDto = $this->validarSalas($SalasDto);
        $totalSalas = count($SalasDto);
        $json = "";
        $x = 1;
        if ($param["cveJuzgado"] != "") {
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto->setCveJuzgado($param["cveJuzgado"]);
            $rsJuzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($rsJuzgadosDto != "") {
                $SalasDao = new SalasDAO();
                $SalasDto->setCveEdificio($rsJuzgadosDto[0]->getCveEdificio());
                $rsSalasDto = $SalasDao->selectSalas($SalasDto, $proveedor);
                $totalSalas = count($rsSalasDto);
                if ($rsSalasDto != "" && $totalSalas > 0) {
                    if ($totalSalas > 0) {
                        $json .= "{";
                        $json .= '"status":"Ok",';
                        $json .= '"totalCount":"' . count($rsSalasDto) . '",';
                        $json .= '"data":[';
                        foreach ($rsSalasDto as $rsSala) {
                            $json .= "{";
                            $json .= '"desSala":' . json_encode(($rsSala->getDesSala())) . ",";
                            $json .= '"cveSala":' . json_encode(($rsSala->getCveSala())) . ",";
                            $json .= '"cveEdificio":' . json_encode(($rsSala->getCveEdificio())) . ",";
                            $json .= '"sorteo":' . json_encode(($rsSala->getSorteo())) . ",";
                            $json .= '"comodin":' . json_encode($rsSala->getComodin()) . ",";
                            $json .= '"activo":' . json_encode(($rsSala->getActivo())) . "";
                            $json .= "}" . "\n";
                            $x ++;
                            if ($x <= count($rsSalasDto)) {
                                $json .= ",";
                            }
                        }
                        $json .= "]";
                        $json .= "}";
                    }
                } else {
                    $json .= '{"estatus":"Fail",';
                    $json .= '"mnj":"No se encontraron salas."}';
                }
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"mnj":"No se encontraron juzgados."}';
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontro el id de juzgado."}';
        }

        return $json;
    }

    public function selectSalasJuzgado($SalasDto, $param, $proveedor = null) {
        $SalasDto = $this->validarSalas($SalasDto);

        $json = "";
        $x = 1;

        if ($param["cveJuzgado"] != "") {
            $atencionsalasDto = new AtencionsalasDTO ();
            $atencionsalasDao = new AtencionsalasDAO ();
            $SalasDao = new SalasDAO();
            $SalasAuxDto = new SalasDTO();


            $atencionsalasDto->setCveJuzgado($param["cveJuzgado"]);
            $atencionsalasDto = $atencionsalasDao->selectAtencionsalas($atencionsalasDto);

            if ($atencionsalasDto != "") {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($atencionsalasDto) . '",';
                $json .= '"data":[';
                foreach ($atencionsalasDto as $atencionsala) {
                    $SalasAuxDto->setCveSala($atencionsala->getCveSala());
                    $rsSalasAuxDto = $SalasDao->selectSalas($SalasAuxDto, $proveedor);

                    $json .= "{";
                    $json .= '"desSala":' . json_encode(($rsSalasAuxDto[0]->getDesSala())) . ",";
                    $json .= '"cveSala":' . json_encode(($rsSalasAuxDto[0]->getCveSala())) . ",";
                    $json .= '"cveEdificio":' . json_encode(($rsSalasAuxDto[0]->getCveEdificio())) . ",";
                    $json .= '"sorteo":' . json_encode(($rsSalasAuxDto[0]->getSorteo())) . ",";
                    $json .= '"comodin":' . json_encode($rsSalasAuxDto[0]->getComodin()) . ",";
                    $json .= '"activo":' . json_encode(($rsSalasAuxDto[0]->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($atencionsalasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            } else {
                $json .= '{"estatus":"Fail",';
                $json .= '"mnj":"No se encontraron atencion salas."}';
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontro el id de juzgado."}';
        }

        return $json;
    }

    public function insertSalas($SalasDto, $proveedor = null) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasDao = new SalasDAO();
        $SalasDto = $SalasDao->insertSalas($SalasDto, $proveedor);
        return $SalasDto;
    }

    public function updateSalas($SalasDto, $proveedor = null) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasDao = new SalasDAO();
//$tmpDto = new SalasDTO();
//$tmpDto = $SalasDao->selectSalas($SalasDto,$proveedor);
//if($tmpDto!=""){//$SalasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $SalasDto = $SalasDao->updateSalas($SalasDto, $proveedor);
        return $SalasDto;
//}
//return "";
    }

    public function deleteSalas($SalasDto, $proveedor = null) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasDao = new SalasDAO();
        $SalasDto = $SalasDao->deleteSalas($SalasDto, $proveedor);
        return $SalasDto;
    }

}

?>