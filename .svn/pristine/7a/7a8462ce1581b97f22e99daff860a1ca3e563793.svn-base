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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class JuzgadosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarJuzgados($JuzgadosDto) {
        $JuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveJuzgado()))));
        $JuzgadosDto->setdesJuzgado(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getdesJuzgado()))));
        $JuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getactivo()))));
        $JuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getfechaRegistro()))));
        $JuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getfechaActualizacion()))));
        $JuzgadosDto->setcveInstancia(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveInstancia()))));
        $JuzgadosDto->setcveMateria(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveMateria()))));
        $JuzgadosDto->setcveTipojuzgado(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveTipojuzgado()))));
        $JuzgadosDto->setcveEdificio(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveEdificio()))));
        $JuzgadosDto->setcveDistrito(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveDistrito()))));
        $JuzgadosDto->setcveRegion(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getcveRegion()))));
        $JuzgadosDto->setSiglas(strtoupper(str_ireplace("'", "", trim($JuzgadosDto->getSiglas()))));
        return $JuzgadosDto;
    }

    public function getJuzgadosSelect2Format($juzgadosDto, $proveedor = null) {
        $juzgados = $this->selectJuzgados($juzgadosDto);
        $juzgados_select = array();
        foreach ($juzgados as $juzgado) {
            $juzgados_select[] = [
                'id' => $juzgado->getCveJuzgado(),
                'text' => $juzgado->getDesJuzgado()
            ];
        }

        return $juzgados_select;
    }

    public function selectJuzgados($JuzgadosDto, $proveedor = null, $orden = "") {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, ($orden == "" ? " ORDER BY desJuzgado ASC" : $orden), $proveedor);
        return $JuzgadosDto;
    }

    public function selectJuzgadosAdminAudiencias($JuzgadosDto, $proveedor = null, $orden = "") {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "ORDER BY desJuzgado ASC", $proveedor);
        return $JuzgadosDto;
    }

    public function selectJuzgadosLike($JuzgadosDto, $proveedor = null) {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->selectJuzgadosLike($JuzgadosDto, $proveedor);

        return $JuzgadosDto;
    }

    public function insertJuzgados($JuzgadosDto, $proveedor = null) {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->insertJuzgados($JuzgadosDto, $proveedor);
        return $JuzgadosDto;
    }

    public function updateJuzgados($JuzgadosDto, $proveedor = null) {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
//$tmpDto = new JuzgadosDTO();
//$tmpDto = $JuzgadosDao->selectJuzgados($JuzgadosDto,$proveedor);
//if($tmpDto!=""){//$JuzgadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $JuzgadosDto = $JuzgadosDao->updateJuzgados($JuzgadosDto, $proveedor);
        return $JuzgadosDto;
//}
//return "";
    }

    public function deleteJuzgados($JuzgadosDto, $proveedor = null) {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->deleteJuzgados($JuzgadosDto, $proveedor);
        return $JuzgadosDto;
    }

    public function getPaginas($JuzgadosDto, $param) {
        $JuzgadosDao = new JuzgadosDAO();
        $numTot = $JuzgadosDao->selectJuzgadosLikeGral($JuzgadosDto, null, "", $param, " count(cveJuzgado) as totalCount ");
        $Pages = (int) $numTot[0] / $param["cantxPag"];
        $restoPages = $numTot[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);

        $json = "";
        $json .= '{"type":"OK",';
        $json .= '"totalCount":"' . $numTot[0] . '",';
        $json .= '"data":[';
        $x = 1;

        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index ++) {
                $json .= "{";
                $json .= '"pagina":' . json_encode(utf8_encode($index)) . "";
                $json .= "}";
                $x ++;
                if ($x <= ($totPages)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":{"total":""},';
            $json .= '"total":"' . ($index - 1) . '"';
            $json .= "}";
        }


        return $json;
    }

    public function consultaGeneral($JuzgadosDto, $param, $proveedor = null) {
        $JuzgadosDto = $this->validarJuzgados($JuzgadosDto);
        $JuzgadosDao = new JuzgadosDAO();
        $JuzgadosDto = $JuzgadosDao->selectJuzgadosLikeGral($JuzgadosDto, null, "", $param, null);
        $json = "";
        $x = 1;
        if ($JuzgadosDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($JuzgadosDto) . '",';
            $json .= '"data":[';
            foreach ($JuzgadosDto as $Juzgado) {
                $json .= "{";
                $json .= '"cveJuzgado":' . json_encode(($Juzgado->getCveJuzgado())) . ",";
                $json .= '"desJuzgado":' . json_encode(utf8_encode($Juzgado->getDesJuzgado())) . ",";
                $json .= '"activo":' . json_encode(($Juzgado->getActivo())) . ",";
                $json .= '"fechaRegistro":' . json_encode(($Juzgado->getFechaRegistro())) . ",";
                $json .= '"fechaActualizacion":' . json_encode(($Juzgado->getFechaActualizacion())) . ",";
                $json .= '"cveInstancia":' . json_encode(($Juzgado->getCveInstancia())) . ",";
                $json .= '"cveMateria":' . json_encode(($Juzgado->getCveMateria())) . ",";
                $json .= '"cveTipojuzgado":' . json_encode(($Juzgado->getCveTipojuzgado())) . ",";
                $json .= '"cveEdificio":' . json_encode(($Juzgado->getCveEdificio())) . ",";
                $json .= '"cveDistrito":' . json_encode(($Juzgado->getCveDistrito())) . ",";
                $json .= '"cveRegion":' . json_encode(($Juzgado->getCveRegion())) . ",";
                $json .= '"Siglas":' . json_encode(($Juzgado->getSiglas())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($JuzgadosDto)) {
                    $json .= ",";
                }
            }
            $json .= "],";
            $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
            $json .= '"total":"' . count($JuzgadosDto) . '"';
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function selectJuzgadosTribunales(){
        $respuesta = array();
        $JuzgadosDTO = new JuzgadosDTO();
        $JuzgadosDTO->setActivo("S");
        $JuzgadosDTO = $this->selectJuzgados($JuzgadosDTO, null, " AND cveTipoJuzgado in (1,2,3,5) ORDER BY desJuzgado ASC ");
        if( $JuzgadosDTO != '' ){
            foreach ($JuzgadosDTO as $juzgado) {
                $respuesta[] = array( "cveJuzgado" => $juzgado->getCveJuzgado() . "/" . $juzgado->getCveTipojuzgado() , "desJuzgado" => $juzgado->getDesJuzgado() );
}
        }
        return json_encode( array( "totalReg" => sizeof($respuesta), "data" => $respuesta ) );
    }

}

?>