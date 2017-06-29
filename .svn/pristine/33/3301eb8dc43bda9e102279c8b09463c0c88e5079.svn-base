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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/magistradosproyectistas/MagistradosproyectistasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/magistradosproyectistas/MagistradosproyectistasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class MagistradosProyectistasController {

    private $proveedor;

    public function __construct() {
        
    }


    public function consultarPersonal() {
       $cveAdscripcion =  $_SESSION["cveAdscripcion"];
       // $personalCliente = new PersonalCliente();
       // $respuesta = $personalCliente->getPersonalAdscripcion($cveAdscripcion);
       // $respuesta = json_decode($respuesta);
       $usuariosCliente = new UsuarioCliente();
       $res = $usuariosCliente->selectUsuariosGrupoSistema(224,38,$cveAdscripcion);
        return $res;
    }
    public function cargarPersonalSeleccionado() {
       $magistradosProyectistasDao = new MagistradosproyectistasDAO();
       $magistradosProyectistasDto = new MagistradosproyectistasDTO();
       $cveUsuarioMagistrado = $_SESSION["cveUsuarioSistema"];
       $magistradosProyectistasDto->setCveUsuarioMagistrado($cveUsuarioMagistrado);
       $magistradosProyectistasDto->setActivo("S");
       $magistradosProyectistasDto = $magistradosProyectistasDao->selectMagistradosproyectistas($magistradosProyectistasDto);
        return $magistradosProyectistasDto;
    }
    public function guardarMagistradoProyectista($params) { 
        $proveedor = new Proveedor('mysql', 'sigejupe');
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $error = false;
        // $listaProyectistas =  json_decode($params["listaProyectistas"]);
        $idMagistradoProyectista =  $params["idMagistradoProyectista"];
        $seleccionado =  $params["seleccionado"];
        $cveUsuarioMagistrado =  $params["cveUsuarioMagistrado"];
        $cveUsuarioProyectista =  $params["cveUsuarioProyectista"];
           $magistradosProyectistasDao = new MagistradosproyectistasDAO();
        // foreach ($listaProyectistas as $value) {
           $magistradosProyectistasDto = new MagistradosproyectistasDTO();
           if($idMagistradoProyectista == ""){
               $magistradosProyectistasDto->setCveUsuarioMagistrado($cveUsuarioMagistrado);
               $magistradosProyectistasDto->setCveUsuarioProyectista($cveUsuarioProyectista);
               $magistradosProyectistasDto->setActivo("S");
               $magistradosProyectistasDto->setFechaActualizacion("now()");
               $magistradosProyectistasDto->setFechaRegistro("now()");
               $magistradosProyectistasDto = $magistradosProyectistasDao->insertMagistradosproyectistas($magistradosProyectistasDto);
               $accion = "insertado";
           }else{
            if($seleccionado == "false"){
                $accion = "editado";
                $magistradosProyectistasDto->setIdMagistradoProyectista($idMagistradoProyectista);
                $magistradosProyectistasDto->setActivo("N");
                $magistradosProyectistasDto = $magistradosProyectistasDao->updateMagistradosproyectistas($magistradosProyectistasDto);
            }
           }
           if($magistradosProyectistasDto == ""){
                $error = true;
           }
        // }
        if (!$error) {
            $proveedor->execute("COMMIT");
             $respuesta = array(
                "status" => "success",
                "accion" => $accion
                 );
        } else {
            $proveedor->execute("ROLLBACK");
            $respuesta = array(
                "status" => "error"
                 );
        }

        return json_encode($respuesta);
    }

    public function fechaMySQLaNormal($fecha) {
        if ($fecha != "") {
            $fecha = explode(" ", $fecha);
            $fechavec = explode("-", $fecha[0]);
            $fechaNormal = $fechavec[2] . "/" . $fechavec[1] . "/" . $fechavec[0];
            $fechaHora = explode(":", $fecha[1]);
            $fechaHora = $fechaHora[0] . ":" . $fechaHora[1];
        } else {
            $fechaNormal = "";
            $fechaHora = "";
        }
        return $fechaNormal . " " . $fechaHora;
    }

    public function fechaMySQL($fecha) {
        if ($fecha != "") {
            $fecha = explode(" ", $fecha);
            $fechavec = explode("-", $fecha[0]);
            $fechaNormal = $fechavec[2] . "/" . $fechavec[1] . "/" . $fechavec[0];
        } else {
            $fechaNormal = "";
        }
        return $fechaNormal;
    }

}

?>