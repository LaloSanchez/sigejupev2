<?php

/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DTOS
* Licensed under the MIT license
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

class NacionalidadesofendidossolicitudesDTO {

    private $idNacionalidadOfendidoSolicitud;
    private $cvePais;
    private $desPais;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $idOfendidoSolicitud;

    public function getIdNacionalidadOfendidoSolicitud()
    {
        return $this->idNacionalidadOfendidoSolicitud;
    }

    public function setIdNacionalidadOfendidoSolicitud($idNacionalidadOfendidoSolicitud)
    {
        $this->idNacionalidadOfendidoSolicitud = $idNacionalidadOfendidoSolicitud;
    }

    public function getCvePais()
    {
        return $this->cvePais;
    }

    public function setCvePais($cvePais)
    {
        $this->cvePais = $cvePais;
    }

    /**
     * @return mixed
     */
    public function getDesPais()
    {
        return $this->desPais;
    }

    /**
     * @param mixed $desPais
     */
    public function setDesPais($desPais)
    {
        $this->desPais = $desPais;
    }


    public function getActivo()
    {
        return $this->activo;
    }

    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function getIdOfendidoSolicitud()
    {
        return $this->idOfendidoSolicitud;
    }

    public function setIdOfendidoSolicitud($idOfendidoSolicitud)
    {
        $this->idOfendidoSolicitud = $idOfendidoSolicitud;
    }

    public function toString()
    {
        return array("idNacionalidadOfendidoSolicitud" => $this->idNacionalidadOfendidoSolicitud,
                     "cvePais"                         => $this->cvePais,
                     "desPais"                         => $this->desPais,
                     "activo"                          => $this->activo,
                     "fechaRegistro"                   => $this->fechaRegistro,
                     "fechaActualizacion"              => $this->fechaActualizacion,
                     "idOfendidoSolicitud"             => $this->idOfendidoSolicitud);
    }
}