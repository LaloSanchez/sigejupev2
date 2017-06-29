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

class JuzgadosDTO {

    private $cveJuzgado;
    private $desJuzgado;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $cveInstancia;
    private $desInstancia;
    private $cveMateria;
    private $desMateria;
    private $cveTipojuzgado;
    private $desTipoJuzgado;
    private $cveEdificio;
    private $cveDistrito;
    private $desDistrito;
    private $cveRegion;
    private $desRegion;
    private $Siglas;
    private $urlAuronix;

    public function getCveJuzgado()
    {
        return $this->cveJuzgado;
    }

    public function setCveJuzgado($cveJuzgado)
    {
        $this->cveJuzgado = $cveJuzgado;
    }

    public function getDesJuzgado()
    {
        return $this->desJuzgado;
    }

    public function setDesJuzgado($desJuzgado)
    {
        $this->desJuzgado = $desJuzgado;
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

    public function getCveInstancia()
    {
        return $this->cveInstancia;
    }

    public function setCveInstancia($cveInstancia)
    {
        $this->cveInstancia = $cveInstancia;
    }

    /**
     * @return mixed
     */
    public function getDesInstancia()
    {
        return $this->desInstancia;
    }

    /**
     * @param mixed $desInstancia
     */
    public function setDesInstancia($desInstancia)
    {
        $this->desInstancia = $desInstancia;
    }

    public function getCveMateria()
    {
        return $this->cveMateria;
    }

    public function setCveMateria($cveMateria)
    {
        $this->cveMateria = $cveMateria;
    }

    /**
     * @return mixed
     */
    public function getDesMateria()
    {
        return $this->desMateria;
    }

    /**
     * @param mixed $desMateria
     */
    public function setDesMateria($desMateria)
    {
        $this->desMateria = $desMateria;
    }


    public function getCveTipojuzgado()
    {
        return $this->cveTipojuzgado;
    }

    public function setCveTipojuzgado($cveTipojuzgado)
    {
        $this->cveTipojuzgado = $cveTipojuzgado;
    }

    /**
     * @return mixed
     */
    public function getDesTipoJuzgado()
    {
        return $this->desTipoJuzgado;
    }

    /**
     * @param mixed $desTipoJuzgado
     */
    public function setDesTipoJuzgado($desTipoJuzgado)
    {
        $this->desTipoJuzgado = $desTipoJuzgado;
    }


    public function getCveEdificio()
    {
        return $this->cveEdificio;
    }

    public function setCveEdificio($cveEdificio)
    {
        $this->cveEdificio = $cveEdificio;
    }

    public function getCveDistrito()
    {
        return $this->cveDistrito;
    }

    public function setCveDistrito($cveDistrito)
    {
        $this->cveDistrito = $cveDistrito;
    }

    /**
     * @return mixed
     */
    public function getDesDistrito()
    {
        return $this->desDistrito;
    }

    /**
     * @param mixed $desDistrito
     */
    public function setDesDistrito($desDistrito)
    {
        $this->desDistrito = $desDistrito;
    }


    public function getCveRegion()
    {
        return $this->cveRegion;
    }

    public function setCveRegion($cveRegion)
    {
        $this->cveRegion = $cveRegion;
    }

    /**
     * @return mixed
     */
    public function getDesRegion()
    {
        return $this->desRegion;
    }

    /**
     * @param mixed $desRegion
     */
    public function setDesRegion($desRegion)
    {
        $this->desRegion = $desRegion;
    }



    public function getSiglas()
    {
        return $this->Siglas;
    }

    public function setSiglas($Siglas)
    {
        $this->Siglas = $Siglas;
    }
    
    public function getUrlAuronix() {
        return $this->urlAuronix;
    }

    public function setUrlAuronix($urlAuronix) {
        $this->urlAuronix = $urlAuronix;
    }

    
    public function toString()
    {
        return array("cveJuzgado"         => $this->cveJuzgado,
                     "desJuzgado"         => $this->desJuzgado,
                     "activo"             => $this->activo,
                     "fechaRegistro"      => $this->fechaRegistro,
                     "fechaActualizacion" => $this->fechaActualizacion,
                     "cveInstancia"       => $this->cveInstancia,
                     "desInstancia"       => $this->desInstancia,
                     "cveMateria"         => $this->cveMateria,
                     "desMateria"         => $this->desMateria,
                     "cveTipojuzgado"     => $this->cveTipojuzgado,
                     "desTipoJuzgado"     => $this->desTipoJuzgado,
                     "cveEdificio"        => $this->cveEdificio,
                     "cveDistrito"        => $this->cveDistrito,
                     "desDistrito"        => $this->desDistrito,
                     "cveRegion"          => $this->cveRegion,
                     "desRegion"          => $this->desRegion,
                     "Siglas"             => $this->Siglas,
                     "urlAuronix"         => $this->urlAuronix);
    }
}

?>