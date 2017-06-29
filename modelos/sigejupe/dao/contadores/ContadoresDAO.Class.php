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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ContadoresDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertContadores($contadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblcontadores(";
        if ($contadoresDto->getidContador() != "") {
            $sql.="idContador";
            if (($contadoresDto->getNumero() != "") || ($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getnumero() != "") {
            $sql.="numero";
            if (($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getanio() != "") {
            $sql.="anio";
            if (($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion";
            if (($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($contadoresDto->getidContador() != "") {
            $sql.="'" . $contadoresDto->getidContador() . "'";
            if (($contadoresDto->getNumero() != "") || ($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getnumero() != "") {
            $sql.="'" . $contadoresDto->getnumero() . "'";
            if (($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getanio() != "") {
            $sql.="'" . $contadoresDto->getanio() . "'";
            if (($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveTipoCarpeta() != "") {
            $sql.="'" . $contadoresDto->getcveTipoCarpeta() . "'";
            if (($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveTipoActuacion() != "") {
            $sql.="'" . $contadoresDto->getcveTipoActuacion() . "'";
            if (($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveJuzgado() != "") {
            $sql.="'" . $contadoresDto->getcveJuzgado() . "'";
            if (($contadoresDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getactivo() != "") {
            $sql.="'" . $contadoresDto->getactivo() . "'";
        }
        if ($contadoresDto->getfechaRegistro() != "") {
            
        }
        if ($contadoresDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ContadoresDTO();
            $tmp->setidContador($this->_proveedor->lastID());
            $tmp = $this->selectContadores($tmp, "", $this->_proveedor);
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

    public function updateContadores($contadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblcontadores SET ";
        if ($contadoresDto->getidContador() != "") {
            $sql.="idContador='" . $contadoresDto->getidContador() . "'";
            if (($contadoresDto->getNumero() != "") || ($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getnumero() != "") {
            $sql.="numero='" . $contadoresDto->getnumero() . "'";
            if (($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getanio() != "") {
            $sql.="anio='" . $contadoresDto->getanio() . "'";
            if (($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $contadoresDto->getcveTipoCarpeta() . "'";
            if (($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $contadoresDto->getcveTipoActuacion() . "'";
            if (($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $contadoresDto->getcveJuzgado() . "'";
            if (($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getactivo() != "") {
            $sql.="activo='" . $contadoresDto->getactivo() . "'";
            if (($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $contadoresDto->getfechaRegistro() . "'";
            if (($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($contadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $contadoresDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idContador='" . $contadoresDto->getidContador() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ContadoresDTO();
            $tmp->setidContador($contadoresDto->getidContador());
            $tmp = $this->selectContadores($tmp, "", $this->_proveedor);
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

    public function deleteContadores($contadoresDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblcontadores  WHERE idContador='" . $contadoresDto->getidContador() . "'";
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

    public function selectContadores($contadoresDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idContador,numero,anio,cveTipoCarpeta,cveTipoActuacion,cveJuzgado,activo,fechaRegistro,fechaActualizacion FROM tblcontadores ";
        if (($contadoresDto->getidContador() != "") || ($contadoresDto->getnumero() != "") || ($contadoresDto->getanio() != "") || ($contadoresDto->getcveTipoCarpeta() != "") || ($contadoresDto->getcveTipoActuacion() != "") || ($contadoresDto->getcveJuzgado() != "") || ($contadoresDto->getactivo() != "") || ($contadoresDto->getfechaRegistro() != "") || ($contadoresDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($contadoresDto->getidContador() != "") {
            $sql.="idContador='" . $contadoresDto->getIdContador() . "'";
            if (($contadoresDto->getNumero() != "") || ($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getnumero() != "") {
            $sql.="numero='" . $contadoresDto->getNumero() . "'";
            if (($contadoresDto->getAnio() != "") || ($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getanio() != "") {
            $sql.="anio='" . $contadoresDto->getAnio() . "'";
            if (($contadoresDto->getCveTipoCarpeta() != "") || ($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $contadoresDto->getCveTipoCarpeta() . "'";
            if (($contadoresDto->getCveTipoActuacion() != "") || ($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getcveTipoActuacion() != "") {
            $sql.="cveTipoActuacion='" . $contadoresDto->getCveTipoActuacion() . "'";
            if (($contadoresDto->getCveJuzgado() != "") || ($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $contadoresDto->getCveJuzgado() . "'";
            if (($contadoresDto->getActivo() != "") || ($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getactivo() != "") {
            $sql.="activo='" . $contadoresDto->getActivo() . "'";
            if (($contadoresDto->getFechaRegistro() != "") || ($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $contadoresDto->getFechaRegistro() . "'";
            if (($contadoresDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($contadoresDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $contadoresDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }

//        echo $sql;

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ContadoresDTO();
                    $tmp[$contador]->setIdContador($row["idContador"]);
                    $tmp[$contador]->setNumero($row["numero"]);
                    $tmp[$contador]->setAnio($row["anio"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
                    $tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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