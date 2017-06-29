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
 *///actualizacion

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personascomparecencias/PersonascomparecenciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personascomparecencias/PersonascomparecenciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class PersonascomparecenciasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarPersonascomparecencias($PersonascomparecenciasDto) {
        $PersonascomparecenciasDto->setidPersonacomparecencia(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getidPersonacomparecencia()))));
        $PersonascomparecenciasDto->setidComparecencia(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getidComparecencia()))));
        $PersonascomparecenciasDto->setcveTipoParte(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getcveTipoParte()))));
        $PersonascomparecenciasDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getcveTipoPersona()))));
        $PersonascomparecenciasDto->setnombre(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getnombre()))));
        $PersonascomparecenciasDto->setpaterno(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getpaterno()))));
        $PersonascomparecenciasDto->setmaterno(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getmaterno()))));
        $PersonascomparecenciasDto->setnombrePersonaMoral(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getnombrePersonaMoral()))));
        $PersonascomparecenciasDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getcveGenero()))));
        $PersonascomparecenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getfechaActualizacion()))));
        $PersonascomparecenciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($PersonascomparecenciasDto->getfechaRegistro()))));
        return $PersonascomparecenciasDto;
    }

    public function selectPersonascomparecencias($PersonascomparecenciasDto, $proveedor = null) {
        $PersonascomparecenciasDto = $this->validarPersonascomparecencias($PersonascomparecenciasDto);
        $PersonascomparecenciasDao = new PersonascomparecenciasDAO();
        $PersonascomparecenciasDto = $PersonascomparecenciasDao->selectPersonascomparecencias($PersonascomparecenciasDto, $proveedor);
        return $PersonascomparecenciasDto;
    }

    public function insertPersonascomparecencias($PersonascomparecenciasDto, $proveedor = null) {
        $PersonascomparecenciasDto = $this->validarPersonascomparecencias($PersonascomparecenciasDto);
        $PersonascomparecenciasDao = new PersonascomparecenciasDAO();
        $PersonascomparecenciasDto = $PersonascomparecenciasDao->insertPersonascomparecencias($PersonascomparecenciasDto, $proveedor);
        return $PersonascomparecenciasDto;
    }

    public function updatePersonascomparecencias($PersonascomparecenciasDto, $proveedor = null) {
        $PersonascomparecenciasDto = $this->validarPersonascomparecencias($PersonascomparecenciasDto);
        $PersonascomparecenciasDao = new PersonascomparecenciasDAO();
//$tmpDto = new PersonascomparecenciasDTO();
//$tmpDto = $PersonascomparecenciasDao->selectPersonascomparecencias($PersonascomparecenciasDto,$proveedor);
//if($tmpDto!=""){//$PersonascomparecenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $PersonascomparecenciasDto = $PersonascomparecenciasDao->updatePersonascomparecencias($PersonascomparecenciasDto, $proveedor);
        return $PersonascomparecenciasDto;
//}
//return "";
    }

    public function deletePersonascomparecencias($PersonascomparecenciasDto, $proveedor = null) {
        $PersonascomparecenciasDto = $this->validarPersonascomparecencias($PersonascomparecenciasDto);
        $PersonascomparecenciasDao = new PersonascomparecenciasDAO();
        $PersonascomparecenciasDto = $PersonascomparecenciasDao->deletePersonascomparecencias($PersonascomparecenciasDto, $proveedor);
        return $PersonascomparecenciasDto;
    }

    public function obtenerListaPersonas($comparecenciaId, $cveTipoParte = null) {
        //echo "\nobtenerListaPersonasComparecencias\n";
        $personasComparecenciasDao = new PersonascomparecenciasDAO();
        $personasComparecenciasDto = new PersonascomparecenciasDTO();
        $personasCompArray = array();
        $personasComparecenciasDto->setActivo("S");
        $personasComparecenciasDto->setIdComparecencia($comparecenciaId);
        if($cveTipoParte != null)
            $personasComparecenciasDto->setCveTipoParte($cveTipoParte);
        $personasComparecencias = $personasComparecenciasDao->selectPersonascomparecencias($personasComparecenciasDto);
        //var_dump($personasComparecencias);
        if ($personasComparecencias != "") {
            //echo "*** * OBTIENE PERSONASs ******";
            foreach ($personasComparecencias as $personaComparecencia) {
                $perCompArray = array(
                    "idPersonacomparecencia" => $personaComparecencia->getIdPersonacomparecencia(),
                    "idComparecencia" => $personaComparecencia->getIdComparecencia(),
                    "cveTipoParte" => $personaComparecencia->getCveTipoParte(),
                    "cveTipoPersona" => $personaComparecencia->getCveTipoPersona(),
                    "nombre" => $personaComparecencia->getNombre(),
                    "paterno" => $personaComparecencia->getPaterno(),
                    "materno" => $personaComparecencia->getMaterno(),
                    "nombrePersonaMoral" => $personaComparecencia->getNombrePersonaMoral(),
                    "cveGenero" => $personaComparecencia->getCveGenero()
                );
                array_push($personasCompArray, $perCompArray);
            }
            return $personasCompArray;
        }
        return "";
    }

}

?>