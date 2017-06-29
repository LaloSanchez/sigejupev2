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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/contadores/ContadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class ContadoresController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarContadores($contadoresDto) {
        $contadoresDto->setidContador(strtoupper(str_ireplace("'", "", trim($contadoresDto->getidContador()))));
        $contadoresDto->setnumero(strtoupper(str_ireplace("'", "", trim($contadoresDto->getnumero()))));
        $contadoresDto->setanio(strtoupper(str_ireplace("'", "", trim($contadoresDto->getanio()))));
        $contadoresDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($contadoresDto->getcveTipoCarpeta()))));
        $contadoresDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim($contadoresDto->getcveTipoActuacion()))));
        $contadoresDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($contadoresDto->getcveJuzgado()))));
        $contadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim($contadoresDto->getactivo()))));
        $contadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($contadoresDto->getfechaRegistro()))));
        $contadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($contadoresDto->getfechaActualizacion()))));
        return $contadoresDto;
    }

    public function selectContadores($contadoresDto, $proveedor = null) {
        $contadoresDto = $this->validarContadores($contadoresDto);
        $ContadoresDao = new ContadoresDAO();
        $contadoresDto = $ContadoresDao->selectContadores($contadoresDto, $proveedor);
        return $contadoresDto;
    }

    public function insertContadores($contadoresDto, $proveedor = null) {
        $contadoresDto = $this->validarContadores($contadoresDto);
        $ContadoresDao = new ContadoresDAO();
        $contadoresDto = $ContadoresDao->insertContadores($contadoresDto, $proveedor);
        return $contadoresDto;
    }

    public function updateContadores($contadoresDto, $proveedor = null) {
        $contadoresDto = $this->validarContadores($contadoresDto);
        $ContadoresDao = new ContadoresDAO();
//$tmpDto = new ContadoresDTO();
//$tmpDto = $ContadoresDao->selectContadores($contadoresDto,$proveedor);
//if($tmpDto!=""){//$contadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $contadoresDto = $ContadoresDao->updateContadores($contadoresDto, $proveedor);
        return $contadoresDto;
//}
//return "";
    }

    public function deleteContadores($contadoresDto, $proveedor = null) {
        $contadoresDto = $this->validarContadores($contadoresDto);
        $ContadoresDao = new ContadoresDAO();
        $contadoresDto = $ContadoresDao->deleteContadores($contadoresDto, $proveedor);
        return $contadoresDto;
    }

    public function getContador($contadoresDto, $proveedor = null) {

        $error = false;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }

        $tmpDto = $contadoresDto;

        $contadoresDao = new ContadoresDAO();
        $tmpDto = $contadoresDao->selectContadores($tmpDto, " FOR UPDATE ", $this->proveedor); // CONSULTAMOS Y BLOQUEMOS EL REGISTRO

        if ($tmpDto != "") {
            $numero = (int) $tmpDto[0]->getNumero(); // Obtnemos el numero
            $numero = $numero + 1;                          // Incrementamos el numero

            $tmpDto[0]->setNumero($numero);          //setiamos el numero para realizar la actualizacion en la base de datos

            $tmpDto = $contadoresDao->updateContadores($tmpDto[0], $this->proveedor); // Actualizamos el registro en la tabla de contadores
//            var_dump($tmpDto);

            if ($tmpDto == "") {
                $error = true;
            }
        } else {
            $tmpDto = new ContadoresDTO();
            $tmpDto->setCveJuzgado($contadoresDto->getCveJuzgado());
            $tmpDto->setCveTipoActuacion($contadoresDto->getCveTipoActuacion());
            $tmpDto->setCveTipoCarpeta($contadoresDto->getCveTipoCarpeta());
            $tmpDto->setAnio($contadoresDto->getAnio());
            $tmpDto->setNumero(1);

            $tmpDto = $contadoresDao->insertContadores($tmpDto, $this->proveedor); // INsertamos un nuevo contador en uno

            if ($tmpDto == "") {
                $error = true;
            }
        }

        if ($proveedor == null) {
            if ($error == false) {
                $this->proveedor->execute("COMMIT");
            } else {
                $this->proveedor->execute("ROLLBACK");
            }
        }


        if ($proveedor == null) {
            $this->proveedor->close();
        }

        return $tmpDto;
    }

}

//$contadoresDto = new ContadoresDTO();
//$contadoresDto->setCveJuzgado(762);
//$contadoresDto->setCveTipoActuacion(7);
//$contadoresDto->setCveTipoCarpeta("");
//$contadoresDto->setAnio("2015");
//
//$contadoresController = new ContadoresController();
//$contadoresDto = $contadoresController->getContador($contadoresDto);
//var_dump($contadoresDto);
?>