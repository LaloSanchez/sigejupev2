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

class SalasjuzgadoresDTO {

    private $idSalasJuzgador;
    private $cveSala;
    private $idJuzgador;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $activo;
    private $cveCondicion;
    private $cveJuzgado;


    public function getIdSalasJuzgador()
    {
        return $this->idSalasJuzgador;
    }

    public function setIdSalasJuzgador($idSalasJuzgador)
    {
        $this->idSalasJuzgador = $idSalasJuzgador;
    }

    public function getCveSala()
    {
        return $this->cveSala;
    }

    public function setCveSala($cveSala)
    {
        $this->cveSala = $cveSala;
    }

    public function getIdJuzgador()
    {
        return $this->idJuzgador;
    }

    public function setIdJuzgador($idJuzgador)
    {
        $this->idJuzgador = $idJuzgador;
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

    public function getActivo()
    {
        return $this->activo;
    }

    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    public function getCveCondicion()
    {
        return $this->cveCondicion;
    }

    public function setCveCondicion($cveCondicion)
    {
        $this->cveCondicion = $cveCondicion;
    }

    /**
     * @return mixed
     */
    public function getCveJuzgado()
    {
        return $this->cveJuzgado;
    }

    /**
     * @param mixed $cveJuzgado
     */
    public function setCveJuzgado($cveJuzgado)
    {
        $this->cveJuzgado = $cveJuzgado;
    }


    public function toString()
    {
        return array("idSalasJuzgador"    => $this->idSalasJuzgador,
                     "cveSala"            => $this->cveSala,
                     "idJuzgador"         => $this->idJuzgador,
                     "fechaRegistro"      => $this->fechaRegistro,
                     "fechaActualizacion" => $this->fechaActualizacion,
                     "activo"             => $this->activo,
                     "cveCondicion"       => $this->cveCondicion,
                     "cveJuzgado"         => $this->cveJuzgado
        );
    }
}