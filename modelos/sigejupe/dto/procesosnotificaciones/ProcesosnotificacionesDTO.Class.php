<?php

class ProcesosnotificacionesDTO {

    private $idProcesoNotificacion;
    private $tiempo;
    private $activo;
    private $fechaRegistro;
    private $fechaActualizacion;

    public function getIdProcesoNotificacion() {
        return $this->idProcesoNotificacion;
    }

    public function getTiempo() {
        return $this->tiempo;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    public function setIdProcesoNotificacion($idProcesoNotificacion) {
        $this->idProcesoNotificacion = $idProcesoNotificacion;
        return $this;
    }

    public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
        return $this;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
        return $this;
    }

    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;
        return $this;
    }

    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
        return $this;
    }

    public function toString() {
        return array(
            "idProcesoNotificacion" => $this->idProcesoNotificacion,
            "tiempo" => $this->tiempo,
            "activo" => $this->activo,
            "fechaRegistro" => $this->fechaRegistro,
            "fechaActualizacion" => $this->fechaActualizacion
        );
    }

}
