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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AntecedescarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAntecedescarpetas($AntecedescarpetasDto) {
        $AntecedescarpetasDto->setidAntecedeCarpeta(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getidAntecedeCarpeta()))));
        $AntecedescarpetasDto->setidCarpetaPadre(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getidCarpetaPadre()))));
        $AntecedescarpetasDto->setidCarpetaHija(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getidCarpetaHija()))));
        $AntecedescarpetasDto->setCveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getCveTipoCarpeta()))));
        $AntecedescarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getactivo()))));
        $AntecedescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getfechaRegistro()))));
        $AntecedescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AntecedescarpetasDto->getfechaActualizacion()))));
        return $AntecedescarpetasDto;
    }

    public function selectAntecedescarpetas($AntecedescarpetasDto, $proveedor = null) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasDao = new AntecedescarpetasDAO();
        $AntecedescarpetasDto = $AntecedescarpetasDao->selectAntecedescarpetas($AntecedescarpetasDto, $proveedor);
        return $AntecedescarpetasDto;
    }

    public function insertAntecedescarpetas($AntecedescarpetasDto, $proveedor = null) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasDao = new AntecedescarpetasDAO();
        $AntecedescarpetasDto = $AntecedescarpetasDao->insertAntecedescarpetas($AntecedescarpetasDto, $proveedor);
        return $AntecedescarpetasDto;
    }

    public function updateAntecedescarpetas($AntecedescarpetasDto, $proveedor = null) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasDao = new AntecedescarpetasDAO();
//$tmpDto = new AntecedescarpetasDTO();
//$tmpDto = $AntecedescarpetasDao->selectAntecedescarpetas($AntecedescarpetasDto,$proveedor);
//if($tmpDto!=""){//$AntecedescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $AntecedescarpetasDto = $AntecedescarpetasDao->updateAntecedescarpetas($AntecedescarpetasDto, $proveedor);
        return $AntecedescarpetasDto;
//}
//return "";
    }

    public function deleteAntecedescarpetas($AntecedescarpetasDto, $proveedor = null) {
        $AntecedescarpetasDto = $this->validarAntecedescarpetas($AntecedescarpetasDto);
        $AntecedescarpetasDao = new AntecedescarpetasDAO();
        $AntecedescarpetasDto = $AntecedescarpetasDao->deleteAntecedescarpetas($AntecedescarpetasDto, $proveedor);
        return $AntecedescarpetasDto;
    }

}

?>