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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/ceresosadscripciones/CeresosadscripcionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/validacion/Validacion.Class.php");

class CeresosadscripcionesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertCeresosadscripciones($ceresosadscripcionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblceresosadscripciones(";
        if ($ceresosadscripcionesDto->getIdCeresoAdscripcion() != "") {
            $sql.="idCeresoAdscripcion";
            if (($ceresosadscripcionesDto->getCveCereso() != "") || ($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getcveCereso() != "") {
            $sql.="cveCereso";
            if (($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getcveAdscripcion() != "") {
            $sql.="cveAdscripcion";
            if (($ceresosadscripcionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($ceresosadscripcionesDto->getIdCeresoAdscripcion() != "") {
            $sql.="'" . $ceresosadscripcionesDto->getIdCeresoAdscripcion() . "'";
            if (($ceresosadscripcionesDto->getCveCereso() != "") || ($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getcveCereso() != "") {
            $sql.="'" . $ceresosadscripcionesDto->getcveCereso() . "'";
            if (($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getcveAdscripcion() != "") {
            $sql.="'" . $ceresosadscripcionesDto->getcveAdscripcion() . "'";
            if (($ceresosadscripcionesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getactivo() != "") {
            $sql.="'" . $ceresosadscripcionesDto->getactivo() . "'";
        }
        if ($ceresosadscripcionesDto->getfechaRegistro() != "") {
            
        }
        if ($ceresosadscripcionesDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CeresosadscripcionesDTO();
            $tmp->setidCeresoAdscripcion($this->_proveedor->lastID());
            $tmp = $this->selectCeresosadscripciones($tmp, $this->_proveedor, "", null,null);
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

    public function updateCeresosadscripciones($ceresosadscripcionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblceresosadscripciones SET ";
        if ($ceresosadscripcionesDto->getIdCeresoAdscripcion() != "") {
            $sql.="idCeresoAdscripcion='" . $ceresosadscripcionesDto->getIdCeresoAdscripcion() . "'";
            if (($ceresosadscripcionesDto->getCveCereso() != "") || ($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "") || ($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getcveCereso() != "") {
            $sql.="cveCereso='" . $ceresosadscripcionesDto->getcveCereso() . "'";
            if (($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "") || ($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getcveAdscripcion() != "") {
            $sql.="cveAdscripcion='" . $ceresosadscripcionesDto->getcveAdscripcion() . "'";
            if (($ceresosadscripcionesDto->getActivo() != "") || ($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getactivo() != "") {
            $sql.="activo='" . $ceresosadscripcionesDto->getactivo() . "'";
            if (($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ceresosadscripcionesDto->getfechaRegistro() . "'";
            if (($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($ceresosadscripcionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ceresosadscripcionesDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idCeresoAdscripcion='" . $ceresosadscripcionesDto->getIdCeresoAdscripcion() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new CeresosadscripcionesDTO();
            $tmp->setidCeresoAdscripcion($ceresosadscripcionesDto->getIdCeresoAdscripcion());
            $tmp = $this->selectCeresosadscripciones($tmp,$this->_proveedor, "", null,null);
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

    public function deleteCeresosadscripciones($ceresosadscripcionesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblceresosadscripciones  WHERE idCeresoAdscripcion='" . $ceresosadscripcionesDto->getIdCeresoAdscripcion() . "'";
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

                                            //      ($actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
    public function selectCeresosadscripciones($ceresosadscripcionesDto,$proveedor = null, $orden = "",$param = null,$fields = null ) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
//        $sql = "SELECT idCeresoAdscripcion,cveCereso,cveAdscripcion,activo,fechaRegistro,fechaActualizacion FROM tblceresosadscripciones ";
        $sql = "SELECT";

        if ($fields === null) {
            $sql .= " idCeresoAdscripcion,cveCereso,cveAdscripcion,activo,fechaRegistro,fechaActualizacion ";
        } else {
            $sql .= $fields;
        }

        $sql .= "FROM tblceresosadscripciones";
        if (($ceresosadscripcionesDto->getIdCeresoAdscripcion() != "") || ($ceresosadscripcionesDto->getcveCereso() != "") || ($ceresosadscripcionesDto->getcveAdscripcion() != "") || ($ceresosadscripcionesDto->getactivo() != "") || ($ceresosadscripcionesDto->getfechaRegistro() != "") || ($ceresosadscripcionesDto->getfechaActualizacion() != "") || $param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
            $sql.=" WHERE ";
        }
        if ($ceresosadscripcionesDto->getIdCeresoAdscripcion() != "") {
            $sql.="idCeresoAdscripcion='" . $ceresosadscripcionesDto->getIdCeresoAdscripcion() . "'";
            if (($ceresosadscripcionesDto->getCveCereso() != "") || ($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "") || ($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosadscripcionesDto->getcveCereso() != "") {
            $sql.="cveCereso='" . $ceresosadscripcionesDto->getCveCereso() . "'";
            if (($ceresosadscripcionesDto->getCveAdscripcion() != "") || ($ceresosadscripcionesDto->getActivo() != "") || ($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosadscripcionesDto->getcveAdscripcion() != "") {
            $sql.="cveAdscripcion='" . $ceresosadscripcionesDto->getCveAdscripcion() . "'";
            if (($ceresosadscripcionesDto->getActivo() != "") || ($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosadscripcionesDto->getactivo() != "") {
            $sql.="activo='" . $ceresosadscripcionesDto->getActivo() . "'";
            if (($ceresosadscripcionesDto->getFechaRegistro() != "") || ($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosadscripcionesDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $ceresosadscripcionesDto->getFechaRegistro() . "'";
            if (($ceresosadscripcionesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($ceresosadscripcionesDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $ceresosadscripcionesDto->getFechaActualizacion() . "'";
        }
        
        $validacion = new Validacion();
        if ($param != "" || $param != null) {
            if ($param["fechaDesde"] != "" && $param["fechaHasta"] != "") {
                if ($param["fechaDesde"] != "") {
                    $param["fechaDesde"] = $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00";
                }
                if ($param["fechaHasta"] != "") {
                    $param["fechaHasta"] = $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59";
                }
                $sql .=" and fechaRegistro >= '" . $param["fechaDesde"] . "'";
                $sql .=" and fechaRegistro <= '" . $param["fechaHasta"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }

            if ($param["fechaDesde"] != "" && $param["fechaHasta"] == "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaDesde"]) . " 23:59:59'";
            }

            if ($param["fechaDesde"] == "" && $param["fechaHasta"] != "") {
                $sql .=" and fechaRegistro >= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 00:00:00'";
                $sql .=" and fechaRegistro <= '" . $validacion->normalToMysql($param["fechaHasta"]) . " 23:59:59'";
            }

            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                
            }
        }
        
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        if ($param != "" || $param != null) {
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
        }
        error_log("sql => ".$sql);
//        echo $sql;
        
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                        $tmp[$contador] = new CeresosadscripcionesDTO();
                        $tmp[$contador]->setIdCeresoAdscripcion($row["idCeresoAdscripcion"]);
                        $tmp[$contador]->setCveCereso($row["cveCereso"]);
                        $tmp[$contador]->setCveAdscripcion($row["cveAdscripcion"]);
                        $tmp[$contador]->setActivo($row["activo"]);
                        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                        $contador++;
                    }else{
                        $tmp[$contador] = $row["totalCount"];
                        $contador++;
                    }
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