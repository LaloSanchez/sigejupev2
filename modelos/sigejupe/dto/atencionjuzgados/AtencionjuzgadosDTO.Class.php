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

class AtencionjuzgadosDTO {

    private $idAtencionJuzgado;
    private $cveAdscripcion;
    private $cveJuzgado;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveCondicion;
    private $cveTipoUsuario;

    public function getIdAtencionJuzgado()
    {
        return $this->idAtencionJuzgado;
    }

    public function setIdAtencionJuzgado($idAtencionJuzgado)
    {
        $this->idAtencionJuzgado = $idAtencionJuzgado;
    }

    public function getCveAdscripcion()
    {
        return $this->cveAdscripcion;
    }

    public function setCveAdscripcion($cveAdscripcion)
    {
        $this->cveAdscripcion = $cveAdscripcion;
    }

    public function getCveJuzgado()
    {
        return $this->cveJuzgado;
    }

    public function setCveJuzgado($cveJuzgado)
    {
        $this->cveJuzgado = $cveJuzgado;
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

    public function getCveCondicion()
    {
        return $this->cveCondicion;
    }

    public function setCveCondicion($cveCondicion)
    {
        $this->cveCondicion = $cveCondicion;
    }

    public function getCveTipoUsuario()
    {
        return $this->cveTipoUsuario;
    }

    public function setCveTipoUsuario($cveTipoUsuario)
    {
        $this->cveTipoUsuario = $cveTipoUsuario;
    }

    public function toString()
    {
        return [
            "idAtencionJuzgado"  => $this->idAtencionJuzgado,
            "cveAdscripcion"     => $this->cveAdscripcion,
            "cveJuzgado"         => $this->cveJuzgado,
            "fechaRegistro"      => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "cveCondicion"       => $this->cveCondicion,
            "cveTipoUsuario"     => $this->cveTipoUsuario
        ];
    }
}
