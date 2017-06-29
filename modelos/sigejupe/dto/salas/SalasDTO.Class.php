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

class SalasDTO {

    private $cveSala;
    private $desSala;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $sorteo;
    private $cveEdificio;
    private $comodin;
    private $variable;

    public function getCveSala()
    {
        return $this->cveSala;
    }

    public function setCveSala($cveSala)
    {
        $this->cveSala = $cveSala;
    }

    public function getDesSala()
    {
        return $this->desSala;
    }

    public function setDesSala($desSala)
    {
        $this->desSala = $desSala;
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

    public function getSorteo()
    {
        return $this->sorteo;
    }

    public function setSorteo($sorteo)
    {
        $this->sorteo = $sorteo;
    }

    public function getCveEdificio()
    {
        return $this->cveEdificio;
    }

    public function setCveEdificio($cveEdificio)
    {
        $this->cveEdificio = $cveEdificio;
    }

    public function getComodin()
    {
        return $this->comodin;
    }

    public function setComodin($comodin)
    {
        $this->comodin = $comodin;
    }

    public function getVariable()
    {
        return $this->variable;
    }

    public function setVariable($variable)
    {
        $this->variable = $variable;
    }

    public function toString()
    {
        return array("cveSala"            => $this->cveSala,
                     "desSala"            => $this->desSala,
                     "activo"             => $this->activo,
                     "fechaRegistro"      => $this->fechaRegistro,
                     "fechaActualizacion" => $this->fechaActualizacion,
                     "sorteo"             => $this->sorteo,
                     "cveEdificio"        => $this->cveEdificio,
                     "comodin"            => $this->comodin,
                     "variable"            => $this->variable);
    }
}

?>