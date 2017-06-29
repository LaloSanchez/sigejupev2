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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadoresexternos/ContadoresexternosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/contadoresexternos/ContadoresexternosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class ContadoresexternosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarContadoresexternos($ContadoresexternosDto) {
        $ContadoresexternosDto->setidContadorExterno(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getidContadorExterno()))));
        $ContadoresexternosDto->setnumero(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getnumero()))));
        $ContadoresexternosDto->setanio(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getanio()))));
        $ContadoresexternosDto->setcveTipoActuacion(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getcveTipoActuacion()))));
        $ContadoresexternosDto->setcveAdscripcion(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getcveAdscripcion()))));
        $ContadoresexternosDto->setactivo(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getactivo()))));
        $ContadoresexternosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getfechaRegistro()))));
        $ContadoresexternosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ContadoresexternosDto->getfechaActualizacion()))));
        return $ContadoresexternosDto;
    }

    public function selectContadoresexternos($ContadoresexternosDto, $proveedor = null) {
        $ContadoresexternosDto = $this->validarContadoresexternos($ContadoresexternosDto);
        $ContadoresexternosDao = new ContadoresexternosDAO();
        $ContadoresexternosDto = $ContadoresexternosDao->selectContadoresexternos($ContadoresexternosDto, $proveedor);
        return $ContadoresexternosDto;
    }

    public function insertContadoresexternos($ContadoresexternosDto, $proveedor = null) {
        $ContadoresexternosDto = $this->validarContadoresexternos($ContadoresexternosDto);
        $ContadoresexternosDao = new ContadoresexternosDAO();
        $ContadoresexternosDto = $ContadoresexternosDao->insertContadoresexternos($ContadoresexternosDto, $proveedor);
        return $ContadoresexternosDto;
    }

    public function updateContadoresexternos($ContadoresexternosDto, $proveedor = null) {
        $ContadoresexternosDto = $this->validarContadoresexternos($ContadoresexternosDto);
        $ContadoresexternosDao = new ContadoresexternosDAO();
//$tmpDto = new ContadoresexternosDTO();
//$tmpDto = $ContadoresexternosDao->selectContadoresexternos($ContadoresexternosDto,$proveedor);
//if($tmpDto!=""){//$ContadoresexternosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ContadoresexternosDto = $ContadoresexternosDao->updateContadoresexternos($ContadoresexternosDto, $proveedor);
        return $ContadoresexternosDto;
//}
//return "";
    }

    public function deleteContadoresexternos($ContadoresexternosDto, $proveedor = null) {
        $ContadoresexternosDto = $this->validarContadoresexternos($ContadoresexternosDto);
        $ContadoresexternosDao = new ContadoresexternosDAO();
        $ContadoresexternosDto = $ContadoresexternosDao->deleteContadoresexternos($ContadoresexternosDto, $proveedor);
        return $ContadoresexternosDto;
    }

    public function getContadorExterno($contadoresExtDto, $proveedor = null) {
        
        $error = false;

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
}

        $tmpDto = $contadoresExtDto;

        $contadoresDao = new ContadoresexternosDAO();
        $tmpDto = $contadoresDao->selectContadoresexternos($tmpDto, " FOR UPDATE ", $this->proveedor); // CONSULTAMOS Y BLOQUEMOS EL REGISTRO

        if ($tmpDto != "") {
            $numero = (int) $tmpDto[0]->getNumero(); // Obtnemos el numero
            $numero = $numero + 1;                          // Incrementamos el numero

            $tmpDto[0]->setNumero($numero);          //setiamos el numero para realizar la actualizacion en la base de datos

            $tmpDto = $contadoresDao->updateContadoresexternos($tmpDto[0], $this->proveedor); // Actualizamos el registro en la tabla de contadores
            
            if ($tmpDto == "") {
                $error = true;
            }
        } else {
            $tmpDto = new ContadoresexternosDTO();
            $tmpDto->setCveAdscripcion($contadoresExtDto->getCveAdscripcion());
            $tmpDto->setCveTipoActuacion($contadoresExtDto->getCveTipoActuacion());
//            $tmpDto->setCveTipoCarpeta($contadoresExtDto->getCveTipoCarpeta());
            $tmpDto->setAnio($contadoresExtDto->getAnio());
            $tmpDto->setNumero(1);

            $tmpDto = $contadoresDao->insertContadoresexternos($tmpDto, $this->proveedor); // INsertamos un nuevo contador en uno

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