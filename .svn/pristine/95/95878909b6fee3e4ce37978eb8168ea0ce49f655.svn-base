<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DAOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/personasnotificar/PersonasnotificarDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class PersonasnotificarDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertPersonasnotificar($personasnotificarDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblpersonasnotificar(";
        if ($personasnotificarDto->getIdPersonasNotificar() != "") {
            $sql.="idPersonasNotificar";
            if (($personasnotificarDto->getIdActuacion() != "") || ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getIdActuacion() != "") {
            $sql.="idActuacion";
            if (($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="idRelacionExpedienteJuzgado";
            if (($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaNotificacion() != "") {
            $sql.="fechaNotificacion";
            if (($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getActivo() != "") {
            $sql.="activo";
            if (($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaModificacion() != "") {
            $sql.="fechaModificacion";
            if (($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getInstructivo() != "") {
            $sql.="Instructivo";
            if (($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getCorreo() != "") {
            $sql.="Correo";
        }
        $sql.=",fechaRegistro";
        $sql.=") VALUES(";
        if ($personasnotificarDto->getIdPersonasNotificar() != "") {
            $sql.="'" . $personasnotificarDto->getIdPersonasNotificar() . "'";
            if (($personasnotificarDto->getIdActuacion() != "") || ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getIdActuacion() != "") {
            $sql.="'" . $personasnotificarDto->getIdActuacion() . "'";
            if (($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="'" . $personasnotificarDto->getIdRelacionExpedienteJuzgado() . "'";
            if (($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaNotificacion() != "") {
            $sql.="'" . $personasnotificarDto->getFechaNotificacion() . "'";
            if (($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getActivo() != "") {
            $sql.="'" . $personasnotificarDto->getActivo() . "'";
            if (($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaRegistro() != "") {
            if (($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaModificacion() != "") {
            $sql.="'" . $personasnotificarDto->getFechaModificacion() . "'";
            if (($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getInstructivo() != "") {
            $sql.="'" . $personasnotificarDto->getInstructivo() . "'";
            if (($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getCorreo() != "") {
            $sql.="'" . $personasnotificarDto->getCorreo() . "'";
        }
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new PersonasnotificarDTO();
            $tmp->setidPersonasNotificar($this->_proveedor->lastID());
            $tmp = $this->selectPersonasnotificar($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function updatePersonasnotificar($personasnotificarDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblpersonasnotificar SET ";
        if ($personasnotificarDto->getIdPersonasNotificar() != "") {
            $sql.="idPersonasNotificar='" . $personasnotificarDto->getIdPersonasNotificar() . "'";
            if (($personasnotificarDto->getIdActuacion() != "") || ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $personasnotificarDto->getIdActuacion() . "'";
            if (($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="idRelacionExpedienteJuzgado='" . $personasnotificarDto->getIdRelacionExpedienteJuzgado() . "'";
            if (($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaNotificacion() != "") {
            $sql.="fechaNotificacion='" . $personasnotificarDto->getFechaNotificacion() . "'";
            if (($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getActivo() != "") {
            $sql.="activo='" . $personasnotificarDto->getActivo() . "'";
            if (($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $personasnotificarDto->getFechaRegistro() . "'";
            if (($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getFechaModificacion() != "") {
            $sql.="fechaModificacion='" . $personasnotificarDto->getFechaModificacion() . "'";
            if (($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getInstructivo() != "") {
            $sql.="Instructivo='" . $personasnotificarDto->getInstructivo() . "'";
            if (($personasnotificarDto->getCorreo() != "")) {
                $sql.=",";
            }
        }
        if ($personasnotificarDto->getCorreo() != "") {
            $sql.="Correo='" . $personasnotificarDto->getCorreo() . "'";
        }
        $sql.=" WHERE idPersonasNotificar='" . $personasnotificarDto->getIdPersonasNotificar() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new PersonasnotificarDTO();
            $tmp->setidPersonasNotificar($personasnotificarDto->getIdPersonasNotificar());
            $tmp = $this->selectPersonasnotificar($tmp, "", $this->_proveedor);
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function deletePersonasnotificar($personasnotificarDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblpersonasnotificar  WHERE idPersonasNotificar='" . $personasnotificarDto->getIdPersonasNotificar() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = true;
        } else {
            $tmp = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

    public function selectPersonasnotificar($personasnotificarDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idPersonasNotificar,idActuacion,idRelacionExpedienteJuzgado,fechaNotificacion,activo,fechaRegistro,fechaModificacion,Instructivo,Correo FROM tblpersonasnotificar ";
        if (($personasnotificarDto->getIdPersonasNotificar() != "") || ($personasnotificarDto->getIdActuacion() != "") || ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
            $sql.=" WHERE ";
        }
        if ($personasnotificarDto->getIdPersonasNotificar() != "") {
            $sql.="idPersonasNotificar='" . $personasnotificarDto->getIdPersonasNotificar() . "'";
            if (($personasnotificarDto->getIdActuacion() != "") || ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getIdActuacion() != "") {
            $sql.="idActuacion='" . $personasnotificarDto->getIdActuacion() . "'";
            if (($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") || ($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getIdRelacionExpedienteJuzgado() != "") {
            $sql.="idRelacionExpedienteJuzgado='" . $personasnotificarDto->getIdRelacionExpedienteJuzgado() . "'";
            if (($personasnotificarDto->getFechaNotificacion() != "") || ($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getFechaNotificacion() != "") {
            $sql.="fechaNotificacion='" . $personasnotificarDto->getFechaNotificacion() . "'";
            if (($personasnotificarDto->getActivo() != "") || ($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getActivo() != "") {
            $sql.="activo='" . $personasnotificarDto->getActivo() . "'";
            if (($personasnotificarDto->getFechaRegistro() != "") || ($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $personasnotificarDto->getFechaRegistro() . "'";
            if (($personasnotificarDto->getFechaModificacion() != "") || ($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getFechaModificacion() != "") {
            $sql.="fechaModificacion='" . $personasnotificarDto->getFechaModificacion() . "'";
            if (($personasnotificarDto->getInstructivo() != "") || ($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getInstructivo() != "") {
            $sql.="Instructivo='" . $personasnotificarDto->getInstructivo() . "'";
            if (($personasnotificarDto->getCorreo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($personasnotificarDto->getCorreo() != "") {
            $sql.="Correo='" . $personasnotificarDto->getCorreo() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new PersonasnotificarDTO();
                    $tmp[$contador]->setIdPersonasNotificar($row["idPersonasNotificar"]);
                    $tmp[$contador]->setIdActuacion($row["idActuacion"]);
                    $tmp[$contador]->setIdRelacionExpedienteJuzgado($row["idRelacionExpedienteJuzgado"]);
                    $tmp[$contador]->setFechaNotificacion($row["fechaNotificacion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaModificacion($row["fechaModificacion"]);
                    $tmp[$contador]->setInstructivo($row["Instructivo"]);
                    $tmp[$contador]->setCorreo($row["Correo"]);
                    $contador++;
                }
            } else {
                $error = true;
            }
        } else {
            $error = true;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        unset($contador);
        unset($sql);
        return $tmp;
    }

}

?>