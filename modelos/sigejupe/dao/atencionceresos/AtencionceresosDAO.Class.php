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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/atencionceresos/AtencionceresosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../../tribunal/validacion/Validacion.Class.php");

class AtencionceresosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAtencionceresos($atencionceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblatencionceresos(";
        if ($atencionceresosDto->getidAtencionCereso() != "") {
            $sql.="idAtencionCereso";
            if (($atencionceresosDto->getCveCereso() != "") || ($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getcveCereso() != "") {
            $sql.="cveCereso";
            if (($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($atencionceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($atencionceresosDto->getidAtencionCereso() != "") {
            $sql.="'" . $atencionceresosDto->getidAtencionCereso() . "'";
            if (($atencionceresosDto->getCveCereso() != "") || ($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getcveCereso() != "") {
            $sql.="'" . $atencionceresosDto->getcveCereso() . "'";
            if (($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getcveJuzgado() != "") {
            $sql.="'" . $atencionceresosDto->getcveJuzgado() . "'";
            if (($atencionceresosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getactivo() != "") {
            $sql.="'" . $atencionceresosDto->getactivo() . "'";
        }
        if ($atencionceresosDto->getfechaRegistro() != "") {
            
        }
        if ($atencionceresosDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AtencionceresosDTO();
            $tmp->setidAtencionCereso($this->_proveedor->lastID());
            $tmp = $this->selectAtencionceresos($tmp, $this->_proveedor, "", null,null);
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

    public function updateAtencionceresos($atencionceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblatencionceresos SET ";
        if ($atencionceresosDto->getidAtencionCereso() != "") {
            $sql.="idAtencionCereso='" . $atencionceresosDto->getidAtencionCereso() . "'";
            if (($atencionceresosDto->getCveCereso() != "") || ($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "") || ($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getcveCereso() != "") {
            $sql.="cveCereso='" . $atencionceresosDto->getcveCereso() . "'";
            if (($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "") || ($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $atencionceresosDto->getcveJuzgado() . "'";
            if (($atencionceresosDto->getActivo() != "") || ($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getactivo() != "") {
            $sql.="activo='" . $atencionceresosDto->getactivo() . "'";
            if (($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $atencionceresosDto->getfechaRegistro() . "'";
            if (($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($atencionceresosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $atencionceresosDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idAtencionCereso='" . $atencionceresosDto->getidAtencionCereso() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AtencionceresosDTO();
            $tmp->setidAtencionCereso($atencionceresosDto->getidAtencionCereso());
            $tmp = $this->selectAtencionceresos($tmp, $this->_proveedor, "", null,null);
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

    public function deleteAtencionceresos($atencionceresosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblatencionceresos  WHERE idAtencionCereso='" . $atencionceresosDto->getidAtencionCereso() . "'";
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

    
   //                                         $actuacionesDto, $proveedor = null, $orden = "", $param = null, $fields = null
    public function selectAtencionceresos($atencionceresosDto, $proveedor = null, $orden = "", $param = null, $fields = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        
        $sql = "SELECT";
        if ($fields === null) {
            $sql = "SELECT idAtencionCereso,cveCereso,cveJuzgado,activo,fechaRegistro,fechaActualizacion ";
        } else {
            $sql .= $fields;
        }
        $sql .= "FROM tblatencionceresos";
        
        if (($atencionceresosDto->getidAtencionCereso() != "") || ($atencionceresosDto->getcveCereso() != "") || ($atencionceresosDto->getcveJuzgado() != "") || ($atencionceresosDto->getactivo() != "") || ($atencionceresosDto->getfechaRegistro() != "") || ($atencionceresosDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($atencionceresosDto->getidAtencionCereso() != "") {
            $sql.="idAtencionCereso='" . $atencionceresosDto->getIdAtencionCereso() . "'";
            if (($atencionceresosDto->getCveCereso() != "") || ($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "") || ($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($atencionceresosDto->getcveCereso() != "") {
            $sql.="cveCereso='" . $atencionceresosDto->getCveCereso() . "'";
            if (($atencionceresosDto->getCveJuzgado() != "") || ($atencionceresosDto->getActivo() != "") || ($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($atencionceresosDto->getcveJuzgado() != "") {
            $sql.="cveJuzgado='" . $atencionceresosDto->getCveJuzgado() . "'";
            if (($atencionceresosDto->getActivo() != "") || ($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($atencionceresosDto->getactivo() != "") {
            $sql.="activo='" . $atencionceresosDto->getActivo() . "'";
            if (($atencionceresosDto->getFechaRegistro() != "") || ($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($atencionceresosDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $atencionceresosDto->getFechaRegistro() . "'";
            if (($atencionceresosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($atencionceresosDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $atencionceresosDto->getFechaActualizacion() . "'";
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
                        $tmp[$contador] = new AtencionceresosDTO();
                        $tmp[$contador]->setIdAtencionCereso($row["idAtencionCereso"]);
                        $tmp[$contador]->setCveCereso($row["cveCereso"]);
                        $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
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