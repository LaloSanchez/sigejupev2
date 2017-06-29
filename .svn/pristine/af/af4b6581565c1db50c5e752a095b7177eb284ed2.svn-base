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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/audienciasdistritos/AudienciasdistritosController.Class.php");


class DistritosController {

    private $proveedor;

    
    public function __construct() {
        
    }

    public function validarDistritos($DistritosDto) {
        $DistritosDto->setcveDistrito(strtoupper(str_ireplace("'", "", trim($DistritosDto->getcveDistrito()))));
        $DistritosDto->setcveRegion(strtoupper(str_ireplace("'", "", trim($DistritosDto->getcveRegion()))));
        $DistritosDto->setdesDistrito(strtoupper(str_ireplace("'", "", trim($DistritosDto->getdesDistrito()))));
        $DistritosDto->setactivo(strtoupper(str_ireplace("'", "", trim($DistritosDto->getactivo()))));
        $DistritosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DistritosDto->getfechaRegistro()))));
        $DistritosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DistritosDto->getfechaActualizacion()))));
        return $DistritosDto;
    }

    public function selectDistritos($DistritosDto, $proveedor = null) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosDao = new DistritosDAO();
        $DistritosDto = $DistritosDao->selectDistritos($DistritosDto, $proveedor);
        return $DistritosDto;
    }

    public function insertDistritos($DistritosDto, $proveedor = null) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosDao = new DistritosDAO();
        $DistritosDto = $DistritosDao->insertDistritos($DistritosDto, $proveedor);
        return $DistritosDto;
    }
    
    public function consaudienciasdistritos($DistritosDto,$paramcataudiencia,$proveedor=null){
    $CveDistrito="";
    $DesDistrito="";
    $cveGrupoautoresaudiencias="";
    $sancionesE="";
    $sancionesE=array();    
    $sancionesEnvia="";
    $sancionesEnvia=array();
    $respuesta="";
    $respuesta=array();
    
    $sancionesE2="";
    $sancionesE2=array();    
    $sancionesEnvia2="";
    $sancionesEnvia2=array();
    
    $DistritosDto=$this->validarDistritos($DistritosDto);
    $DistritosDao = new DistritosDAO();
    $consulta=$DistritosDto = $DistritosDao->selectDistritos($DistritosDto,$proveedor);
    
    
    $AudienciasdistritosController=new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
    $AudienciasdistritosDTO=new AudienciasdistritosDTO();
    
    //$AudienciasdistritosDTO->setActivo("S");
    $AudienciasdistritosDTO->setCveCatAudiencia($paramcataudiencia["idCatAudiencia"]);
    
    $audienciasdistritos=$AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO,$proveedor);
    if($audienciasdistritos!="")
    {
        if($consulta!="")
        {
            foreach($consulta as $cons)
            {
                $CveDistrito=$cons->getCveDistrito();
                $DesDistrito=$cons->getDesDistrito();

                $sancionesE=array("CveDistrito"=>$CveDistrito,
                "DesDistrito"=>$DesDistrito
                );

            array_push($sancionesEnvia, $sancionesE);
            }


            foreach($audienciasdistritos as $au)
            {
                $fej = "";
                $cvedistritoaudienciasdistritos=$au->getCveDistrito();
                $fej=$au->getFechaActualizacion();
                
                $f2 = $fej[8] . $fej[9] . "/" . $fej[5] . $fej[6] . "/" . $fej[0] . $fej[1] . $fej[2] . $fej[3];

                $sancionesE2=array("cvedistritoaudienciasdistritos"=>$cvedistritoaudienciasdistritos
                ,"fechaactualizacion"=>$f2        
                );

                array_push($sancionesEnvia2, $sancionesE2);

            }

            $respuesta=array("TotalCountdistritos"=>count($sancionesEnvia),"datosdistrito"=>$sancionesEnvia,"cvedistritoaudienciasdistritos"=>$sancionesEnvia2,"estatus" => "ok", "mensaje" => "Registros Encontrados");

        }
        else
        {
            $respuesta = array("TotalCountdistritos" => "0", "datosdistrito" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }
        
    }else
    {
        if($consulta!="")
        {
            foreach ($consulta as $cons)
            {
                $CveDistrito=$cons->getCveDistrito();
                $DesDistrito=$cons->getDesDistrito();

                $sancionesE=array("CveDistrito"=>$CveDistrito,
                "DesDistrito"=>$DesDistrito
                );

            array_push($sancionesEnvia, $sancionesE);
            }

            $respuesta=array("TotalCountdistritos"=>count($sancionesEnvia),"datosdistrito"=>$sancionesEnvia,"cvedistritoaudienciasdistritos"=>$sancionesEnvia2,"estatus" => "ok", "mensaje" => "Registros Encontrados");

        }
        else
        {
            $respuesta = array("TotalCountdistritos" => "0", "datosdistrito" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }
//        $respuesta = array("TotalCountgrupos" => "0", "datosgrupos" => "", "estatus" => "ok", "mensaje" => "No Hay Registros Correspondientes");
    }
    return $respuesta;
}


    public function updateDistritos($DistritosDto, $proveedor = null) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosDao = new DistritosDAO();
//$tmpDto = new DistritosDTO();
//$tmpDto = $DistritosDao->selectDistritos($DistritosDto,$proveedor);
//if($tmpDto!=""){//$DistritosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DistritosDto = $DistritosDao->updateDistritos($DistritosDto, $proveedor);
        return $DistritosDto;
//}
//return "";
    }

    public function deleteDistritos($DistritosDto, $proveedor = null) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosDao = new DistritosDAO();
        $DistritosDto = $DistritosDao->deleteDistritos($DistritosDto, $proveedor);
        return $DistritosDto;
    }

    public function selectDistritosActivos($DistritosDto) {

        $distritosController = new DistritosController();

        $distritosDto = new DistritosDTO();

        $distritosDto->setActivo("S");
        $distritos = $this->selectDistritos($distritosDto);

        $clave = "";
        $descripcion = "";
        if ($distritos != "") {
            $resultado = "";
            $registro = "";
            $respuesta = "";
            
            $resultado=array();
            $registtro=array();
            $respuesta=array();
            foreach ($distritos as $distrito) {
                $clave = $distrito->getcveDistrito();
                $descripcion = $distrito->getdesDistrito();

                $registro = array("clave" => $clave, "Descripcion" => $descripcion);
                array_push($resultado, $registro);
            }
            $respuesta = array("totalCount" => count($resultado), "datos" => $resultado);
        }

        return $respuesta;
    }

}

?>