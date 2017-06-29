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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/delitossolicitudes/DelitossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class DelitossolicitudesDAO {

    protected $_proveedor;
    protected $_proveedor2;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
        $this->_proveedor2 = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
        $this->_proveedor2->connect();
    }

    public function insertDelitossolicitudes($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldelitossolicitudes(";
        if ($delitossolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud";
            if (($delitossolicitudesDto->getCveDelito() != "") || ($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getcveDelito() != "") {
            $sql.="cveDelito";
            if (($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getactivo() != "") {
            $sql.="activo";
            if (($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($delitossolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="'" . $delitossolicitudesDto->getidDelitoSolicitud() . "'";
            if (($delitossolicitudesDto->getCveDelito() != "") || ($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getcveDelito() != "") {
            $sql.="'" . $delitossolicitudesDto->getcveDelito() . "'";
            if (($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getactivo() != "") {
            $sql.="'" . $delitossolicitudesDto->getactivo() . "'";
            if (($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getfechaRegistro() != "") {
            if (($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getfechaActualizacion() != "") {
            if (($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="'" . $delitossolicitudesDto->getidSolicitudAudiencia() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DelitossolicitudesDTO();
            $tmp->setidDelitoSolicitud($this->_proveedor->lastID());
            $tmp = $this->selectDelitossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDelitossolicitudes($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldelitossolicitudes SET ";
        if ($delitossolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud='" . $delitossolicitudesDto->getidDelitoSolicitud() . "'";
            if (($delitossolicitudesDto->getCveDelito() != "") || ($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getFechaRegistro() != "") || ($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getcveDelito() != "") {
            $sql.="cveDelito='" . $delitossolicitudesDto->getcveDelito() . "'";
            if (($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getFechaRegistro() != "") || ($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $delitossolicitudesDto->getactivo() . "'";
            if (($delitossolicitudesDto->getFechaRegistro() != "") || ($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $delitossolicitudesDto->getfechaRegistro() . "'";
            if (($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $delitossolicitudesDto->getfechaActualizacion() . "'";
            if (($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=",";
            }
        }
        if ($delitossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $delitossolicitudesDto->getidSolicitudAudiencia() . "'";
        }
        $sql.=" WHERE idDelitoSolicitud='" . $delitossolicitudesDto->getidDelitoSolicitud() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DelitossolicitudesDTO();
            $tmp->setidDelitoSolicitud($delitossolicitudesDto->getidDelitoSolicitud());
            $tmp = $this->selectDelitossolicitudes($tmp, "", $this->_proveedor);
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

    public function updateDelitos($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $cveDelitos = $delitossolicitudesDto->getCveDelito();
        foreach ($cveDelitos as $key => $value) {
            $arrayCveDelito = $value;
            $sql = "SELECT * FROM tbldelitossolicitudes WHERE cveDelito=" . $arrayCveDelito . " AND idSolicitudAudiencia=" . $delitossolicitudesDto->getIdSolicitudAudiencia() . " AND activo='S';";
            $this->_proveedor->execute($sql);
            $count1 = $this->_proveedor->rows($this->_proveedor->stmt);
            if ($count1 == 0) {
                $sqlInserta = "INSERT INTO tbldelitossolicitudes VALUES (default,$arrayCveDelito,'S',NOW(),NOW()," . $delitossolicitudesDto->getIdSolicitudAudiencia() . ");";
                $this->_proveedor2->execute($sqlInserta);
            }
        }
        $tmp = true;
        return $tmp;
    }

    public function eliminaDelitos($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $cveDelitos = $delitossolicitudesDto->getCveDelito();
        foreach ($cveDelitos as $key => $value) {
            $arrayCveDelito = $value;
            $sql = "SELECT * FROM tbldelitossolicitudes WHERE cveDelito=" . $arrayCveDelito . " AND idSolicitudAudiencia=" . $delitossolicitudesDto->getIdSolicitudAudiencia() . " AND activo='S';";
            $this->_proveedor->execute($sql);
            $count1 = $this->_proveedor->rows($this->_proveedor->stmt);
            if ($count1 > 0) {
                $sqlUpdate = "UPDATE tbldelitossolicitudes SET activo = 'N' WHERE cveDelito=" . $arrayCveDelito . " AND idSolicitudAudiencia=" . $delitossolicitudesDto->getIdSolicitudAudiencia() . " AND activo='S' LIMIT 1;";
                $this->_proveedor2->execute($sqlUpdate);
            }
        }
        $tmp = true;
        return $tmp;
    }

    public function deleteDelitossolicitudes($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldelitossolicitudes  WHERE idDelitoSolicitud='" . $delitossolicitudesDto->getidDelitoSolicitud() . "'";
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

    public function selectDelitosInner($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT s.idDelitoSolicitud as idDelitoSolicitud, s.cveDelito as cveDelito, d.desDelito as desDelito, s.activo, s.fechaRegistro, s.fechaActualizacion, s.idSolicitudAudiencia FROM tbldelitossolicitudes s INNER JOIN tbldelitos d ON s.cveDelito = d.cveDelito
					WHERE s.idSolicitudAudiencia=" . $delitossolicitudesDto->getIdSolicitudAudiencia() . " AND s.activo = 'S' ORDER BY s.idDelitoSolicitud";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DelitossolicitudesDTO();
                    $tmp[$contador]->setIdDelitoSolicitud($row["idDelitoSolicitud"]);
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setDesDelito($row["desDelito"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
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

    public function selectDelitossolicitudestotales($delitossolicitudesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT * FROM tbldelitossolicitudes
					WHERE idSolicitudAudiencia=" . $delitossolicitudesDto->getIdSolicitudAudiencia() . " AND activo = 'S' ORDER BY idDelitoSolicitud";
        $this->_proveedor->execute($sql);
        $count = $this->_proveedor->rows($this->_proveedor->stmt);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new DelitossolicitudesDTO();
                    $tmp[$contador]->setIdDelitoSolicitud($row["idDelitoSolicitud"]);
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
        return $count;
    }

    public function selectDelitossolicitudes($delitossolicitudesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDelitoSolicitud,cveDelito,activo,fechaRegistro,fechaActualizacion,idSolicitudAudiencia FROM tbldelitossolicitudes ";
        if (($delitossolicitudesDto->getidDelitoSolicitud() != "") || ($delitossolicitudesDto->getcveDelito() != "") || ($delitossolicitudesDto->getactivo() != "") || ($delitossolicitudesDto->getfechaRegistro() != "") || ($delitossolicitudesDto->getfechaActualizacion() != "") || ($delitossolicitudesDto->getidSolicitudAudiencia() != "")) {
            $sql.=" WHERE ";
        }
        if ($delitossolicitudesDto->getidDelitoSolicitud() != "") {
            $sql.="idDelitoSolicitud='" . $delitossolicitudesDto->getIdDelitoSolicitud() . "'";
            if (($delitossolicitudesDto->getCveDelito() != "") || ($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getFechaRegistro() != "") || ($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitossolicitudesDto->getcveDelito() != "") {
            $sql.="cveDelito='" . $delitossolicitudesDto->getCveDelito() . "'";
            if (($delitossolicitudesDto->getActivo() != "") || ($delitossolicitudesDto->getFechaRegistro() != "") || ($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitossolicitudesDto->getactivo() != "") {
            $sql.="activo='" . $delitossolicitudesDto->getActivo() . "'";
            if (($delitossolicitudesDto->getFechaRegistro() != "") || ($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitossolicitudesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $delitossolicitudesDto->getFechaRegistro() . "'";
            if (($delitossolicitudesDto->getFechaActualizacion() != "") || ($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitossolicitudesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $delitossolicitudesDto->getFechaActualizacion() . "'";
            if (($delitossolicitudesDto->getIdSolicitudAudiencia() != "")) {
                $sql.=" AND ";
            }
        }
        if ($delitossolicitudesDto->getidSolicitudAudiencia() != "") {
            $sql.="idSolicitudAudiencia='" . $delitossolicitudesDto->getIdSolicitudAudiencia() . "'";
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
                    $tmp[$contador] = new DelitossolicitudesDTO();
                    $tmp[$contador]->setIdDelitoSolicitud($row["idDelitoSolicitud"]);
                    $tmp[$contador]->setCveDelito($row["cveDelito"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
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