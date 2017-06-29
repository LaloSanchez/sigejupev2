<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DTOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

class JuzgadoresDTO {

    private $idJuzgador;
    private $cveUsuario;
    private $numEmpleado;
    private $titulo;
    private $paterno;
    private $materno;
    private $nombre;
    private $cveTipoJuzgador;
    private $cveEspecialidad;
    private $sorteo;
    private $programable;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;
    private $juzgados;
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE INNER////////////////
    //////////////////////////////////////////////////////
    private $desTipoJuzgador;
    private $cveJuzgado;
    private $desJuzgado;
    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE PAGINACION////////////////
    //////////////////////////////////////////////////////
    private $totalPaginas;
    private $pagina;
    private $param;

    public function getIdJuzgador() {
        return $this->idJuzgador;
    }

    public function setIdJuzgador($idJuzgador) {
        $this->idJuzgador = $idJuzgador;
    }

    public function getCveUsuario() {
        return $this->cveUsuario;
    }

    public function setCveUsuario($cveUsuario) {
        $this->cveUsuario = $cveUsuario;
    }

    public function getNumEmpleado() {
        return $this->numEmpleado;
    }

    public function setNumEmpleado($numEmpleado) {
        $this->numEmpleado = $numEmpleado;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getPaterno() {
        return $this->paterno;
    }

    public function setPaterno($paterno) {
        $this->paterno = $paterno;
    }

    public function getMaterno() {
        return $this->materno;
    }

    public function setMaterno($materno) {
        $this->materno = $materno;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCveTipoJuzgador() {
        return $this->cveTipoJuzgador;
    }

    public function setCveTipoJuzgador($cveTipoJuzgador) {
        $this->cveTipoJuzgador = $cveTipoJuzgador;
    }

    public function getSorteo() {
        return $this->sorteo;
    }

    public function setSorteo($sorteo) {
        $this->sorteo = $sorteo;
    }

    public function getProgramable() {
        return $this->programable;
    }

    public function setProgramable($programable) {
        $this->programable = $programable;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    public function getJuzgados() {
        return $this->juzgados;
    }

    public function setJuzgados($juzgados) {
        $this->juzgados = $juzgados;
    }

    function getCveEspecialidad() {
        return $this->cveEspecialidad;
    }

    function setCveEspecialidad($cveEspecialidad) {
        $this->cveEspecialidad = $cveEspecialidad;
    }

    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE INNER////////////////
    //////////////////////////////////////////////////////
    public function getDesTipoJuzgador() {
        return $this->desTipoJuzgador;
    }

    public function setDesTipoJuzgador($desTipoJuzgador) {
        $this->desTipoJuzgador = $desTipoJuzgador;
    }

    public function getCveJuzgado() {
        return $this->cveJuzgado;
    }

    public function setCveJuzgado($cveJuzgado) {
        $this->cveJuzgado = $cveJuzgado;
    }

    public function getDesJuzgado() {
        return $this->desJuzgado;
    }

    public function setDesJuzgado($desJuzgado) {
        $this->desJuzgado = $desJuzgado;
    }

    //////////////////////////////////////////////////////
    //////////////PARAMETROS DE PAGINACION////////////////
    //////////////////////////////////////////////////////
    public function getTotalPaginas() {
        return $this->totalPaginas;
    }

    public function setTotalPaginas($totalPaginas) {
        $this->totalPaginas = $totalPaginas;
    }

    public function getPagina() {
        return $this->pagina;
    }

    public function setPagina($pagina) {
        $this->pagina = $pagina;
    }

    public function getParam() {
        return $this->param;
    }

    public function setParam($param) {
        $this->param = $param;
    }

    public function toString() {
        return array("idJuzgador" => $this->idJuzgador,
            "cveUsuario" => $this->cveUsuario,
            "numEmpleado" => $this->numEmpleado,
            "titulo" => $this->titulo,
            "paterno" => $this->paterno,
            "materno" => $this->materno,
            "nombre" => $this->nombre,
            "cveTipoJuzgador" => $this->cveTipoJuzgador,
            "cveEspecialidad" => $this->cveEspecialidad,
            "sorteo" => $this->sorteo,
            "programable" => $this->programable,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion,
            "desTipoJuzgador" => $this->desTipoJuzgador,
            "cveJuzgado" => $this->cveJuzgado,
            "desJuzgado" => $this->desJuzgado,
            "juzgados" => $this->juzgados,
            "totalPaginas" => $this->totalPaginas,
            "pagina" => $this->pagina,
            "param" => $this->param);
    }

}

?>