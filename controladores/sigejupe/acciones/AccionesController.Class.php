<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/acciones/AccionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/acciones/AccionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class AccionesController {

    private $proveedor;

    public function __construct()
    {
    }

    public function validarAcciones($AccionesDto)
    {
        $AccionesDto->setcveAccion(strtoupper(str_ireplace("'", "", trim($AccionesDto->getcveAccion()))));
        $AccionesDto->setdesAccion(strtoupper(str_ireplace("'", "", trim($AccionesDto->getdesAccion()))));
        $AccionesDto->setactivo(strtoupper(str_ireplace("'", "", trim($AccionesDto->getactivo()))));
        $AccionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AccionesDto->getfechaRegistro()))));
        $AccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AccionesDto->getfechaActualizacion()))));

        return $AccionesDto;
    }

    public function selectAcciones($AccionesDto, $proveedor = null)
    {
        $AccionesDto = $this->validarAcciones($AccionesDto);
        $AccionesDao = new AccionesDAO();
        $AccionesDto = $AccionesDao->selectAcciones($AccionesDto, 'ORDER BY desAccion', $proveedor);

        return $AccionesDto;
    }

    public function insertAcciones($AccionesDto, $proveedor = null)
    {
        $AccionesDto = $this->validarAcciones($AccionesDto);
        $AccionesDao = new AccionesDAO();
        $AccionesDto = $AccionesDao->insertAcciones($AccionesDto, $proveedor);

        return $AccionesDto;
    }

    public function updateAcciones($AccionesDto, $proveedor = null)
    {
        $AccionesDto = $this->validarAcciones($AccionesDto);
        $AccionesDao = new AccionesDAO();
//$tmpDto = new AccionesDTO();
//$tmpDto = $AccionesDao->selectAcciones($AccionesDto,$proveedor);
//if($tmpDto!=""){//$AccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $AccionesDto = $AccionesDao->updateAcciones($AccionesDto, $proveedor);

        return $AccionesDto;
//}
//return "";
    }

    public function deleteAcciones($AccionesDto, $proveedor = null)
    {
        $AccionesDto = $this->validarAcciones($AccionesDto);
        $AccionesDao = new AccionesDAO();
        $AccionesDto = $AccionesDao->deleteAcciones($AccionesDto, $proveedor);

        return $AccionesDto;
    }
}

?>