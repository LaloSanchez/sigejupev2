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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class BitacorawsController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarBitacoraws($BitacorawsDto) {
        $BitacorawsDto->setidBitacoraws(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getidBitacoraws()))));
        $BitacorawsDto->setcveAccionws(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getcveAccionws()))));
        $BitacorawsDto->setdescEstatusBitacoraws(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getdescEstatusBitacoraws()))));
        $BitacorawsDto->setobservacionesOrigen(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getobservacionesOrigen()))));
        $BitacorawsDto->setobservacionesDestino(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getobservacionesDestino()))));
        $BitacorawsDto->sethrefOrigen(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->gethrefOrigen()))));
        $BitacorawsDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getfechaRegistro()))));
        $BitacorawsDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($BitacorawsDto->getfechaActualizacion()))));
        return $BitacorawsDto;
    }

    public function selectBitacoraws($BitacorawsDto, $param = '', $proveedor = null) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsDao = new BitacorawsDAO();
        $BitacorawsDtoss = $BitacorawsDao->selectBitacoraws($BitacorawsDto, $param);
        $tmp = array();
        if ($BitacorawsDtoss != '') {
            $param["fields"] = "count(idCateo)";
            $BitacorawsDtos = $BitacorawsDao->selectBitacoraws($BitacorawsDto, $param);
            $tmp["totalCount"] = count($BitacorawsDtoss);
            $contador = 0;
            foreach ($BitacorawsDtoss as $BitacorawsDto) {
                $tmp["data"][$contador] = $BitacorawsDto->toString();
                $contador++;
            }
            $tmp["paginas"] = $this->getPaginas($BitacorawsDtos, $param);
        } else {
            $tmp["totalCount"] = 0;
        }
        return $tmp;
    }

    public function insertBitacoraws($BitacorawsDto, $proveedor = null) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsDao = new BitacorawsDAO();
        $BitacorawsDto = $BitacorawsDao->insertBitacoraws($BitacorawsDto, $proveedor);
        return $BitacorawsDto;
    }

    public function updateBitacoraws($BitacorawsDto, $proveedor = null) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsDao = new BitacorawsDAO();
        $BitacorawsDto = $BitacorawsDao->updateBitacoraws($BitacorawsDto, $proveedor);
        return $BitacorawsDto;
    }

    public function deleteBitacoraws($BitacorawsDto, $proveedor = null) {
        $BitacorawsDto = $this->validarBitacoraws($BitacorawsDto);
        $BitacorawsDao = new BitacorawsDAO();
        $BitacorawsDto = $BitacorawsDao->deleteBitacoraws($BitacorawsDto, $proveedor);
        return $BitacorawsDto;
    }

    private function getPaginas($dto, $param) {
        $paginas = array();
        $Pages = (int) $dto[0] / $param["cantxPag"];
        $restoPages = (int) $dto[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        if ($totPages > 1) {
            for ($index = 1; $index <= $totPages; $index++) {
                $paginas[] = utf8_encode($index);
            }
        }
        return $paginas;
    }

}

?>