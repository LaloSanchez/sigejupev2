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

class ImputadosejecsentenciasDTO {

    private $idImputadoEjecSentencia;
    private $idActuacion;
    private $idImpOfeDelCarpeta;
    private $numExp;
    private $AniExp;
    private $cveJuzgado;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdImputadoEjecSentencia()
    {
        return $this->idImputadoEjecSentencia;
    }

    public function setIdImputadoEjecSentencia($idImputadoEjecSentencia)
    {
        $this->idImputadoEjecSentencia = $idImputadoEjecSentencia;
    }

    public function getIdActuacion()
    {
        return $this->idActuacion;
    }

    public function setIdActuacion($idActuacion)
    {
        $this->idActuacion = $idActuacion;
    }

    public function getIdImpOfeDelCarpeta()
    {
        return $this->idImpOfeDelCarpeta;
    }

    public function setIdImpOfeDelCarpeta($idImpOfeDelCarpeta)
    {
        $this->idImpOfeDelCarpeta = $idImpOfeDelCarpeta;
    }

    public function getNumExp()
    {
        return $this->numExp;
    }

    public function setNumExp($numExp)
    {
        $this->numExp = $numExp;
    }

    public function getAniExp()
    {
        return $this->AniExp;
    }

    public function setAniExp($AniExp)
    {
        $this->AniExp = $AniExp;
    }

    public function getCveJuzgado()
    {
        return $this->cveJuzgado;
    }

    public function setCveJuzgado($cveJuzgado)
    {
        $this->cveJuzgado = $cveJuzgado;
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

    public function toString()
    {
        return array("idImputadoEjecSentencia" => $this->idImputadoEjecSentencia,
                     "idActuacion"             => $this->idActuacion,
                     "idImpOfeDelCarpeta"      => $this->idImpOfeDelCarpeta,
                     "numExp"                  => $this->numExp,
                     "AniExp"                  => $this->AniExp,
                     "cveJuzgado"              => $this->cveJuzgado,
                     "activo"                  => $this->activo,
                     "fechaRegistro"           => $this->fechaRegistro,
                     "fechaActualizacion"      => $this->fechaActualizacion);
    }
}

?>