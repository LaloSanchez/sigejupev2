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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/reclusos/ReclusosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ReclusosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertReclusos($reclusosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblreclusos(";
        if ($reclusosDto->getIdRecluso() != "") {
            $sql.="idRecluso";
            if (($reclusosDto->getIdIngresoCereso() != "") || ($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso";
            if (($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta";
            if (($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getNombre() != "") {
            $sql.="nombre";
            if (($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getPaterno() != "") {
            $sql.="paterno";
            if (($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getMaterno() != "") {
            $sql.="materno";
            if (($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getAlias() != "") {
            $sql.="alias";
            if (($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getDetenido() != "") {
            $sql.="detenido";
            if (($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getCveGenero() != "") {
            $sql.="cveGenero";
            if (($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getCveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico";
            if (($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=") VALUES(";
        if ($reclusosDto->getIdRecluso() != "") {
            $sql.="'" . $reclusosDto->getIdRecluso() . "'";
            if (($reclusosDto->getIdIngresoCereso() != "") || ($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getIdIngresoCereso() != "") {
            $sql.="'" . $reclusosDto->getIdIngresoCereso() . "'";
            if (($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getIdImputadoCarpeta() != "") {
            $sql.="'" . $reclusosDto->getIdImputadoCarpeta() . "'";
            if (($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getNombre() != "") {
            $sql.="'" . $reclusosDto->getNombre() . "'";
            if (($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getPaterno() != "") {
            $sql.="'" . $reclusosDto->getPaterno() . "'";
            if (($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getMaterno() != "") {
            $sql.="'" . $reclusosDto->getMaterno() . "'";
            if (($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getAlias() != "") {
            $sql.="'" . $reclusosDto->getAlias() . "'";
            if (($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getDetenido() != "") {
            $sql.="'" . $reclusosDto->getDetenido() . "'";
            if (($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getCveGenero() != "") {
            $sql.="'" . $reclusosDto->getCveGenero() . "'";
            if (($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getCveEstadoPsicofisico() != "") {
            $sql.="'" . $reclusosDto->getCveEstadoPsicofisico() . "'";
            if (($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getActivo() != "") {
            $sql.="'" . $reclusosDto->getActivo() . "'";
        }
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ReclusosDTO();
            $tmp->setidRecluso($this->_proveedor->lastID());
            $tmp = $this->selectReclusos($tmp, "", $this->_proveedor);
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

    public function updateReclusos($reclusosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblreclusos SET ";
        if ($reclusosDto->getIdRecluso() != "") {
            $sql.="idRecluso='" . $reclusosDto->getIdRecluso() . "'";
            if (($reclusosDto->getIdIngresoCereso() != "") || ($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso='" . $reclusosDto->getIdIngresoCereso() . "'";
            if (($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta='" . $reclusosDto->getIdImputadoCarpeta() . "'";
            if (($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getNombre() != "") {
            $sql.="nombre='" . $reclusosDto->getNombre() . "'";
            if (($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getPaterno() != "") {
            $sql.="paterno='" . $reclusosDto->getPaterno() . "'";
            if (($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getMaterno() != "") {
            $sql.="materno='" . $reclusosDto->getMaterno() . "'";
            if (($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getAlias() != "") {
            $sql.="alias='" . $reclusosDto->getAlias() . "'";
            if (($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getDetenido() != "") {
            $sql.="detenido='" . $reclusosDto->getDetenido() . "'";
            if (($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $reclusosDto->getCveGenero() . "'";
            if (($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getCveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $reclusosDto->getCveEstadoPsicofisico() . "'";
            if (($reclusosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($reclusosDto->getActivo() != "") {
            $sql.="activo='" . $reclusosDto->getActivo() . "'";
        }
        $sql.=" WHERE idRecluso='" . $reclusosDto->getIdRecluso() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ReclusosDTO();
            $tmp->setidRecluso($reclusosDto->getIdRecluso());
            $tmp = $this->selectReclusos($tmp, "", $this->_proveedor);
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

    public function deleteReclusos($reclusosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblreclusos  WHERE idRecluso='" . $reclusosDto->getIdRecluso() . "'";
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

    public function selectReclusos($reclusosDto, $orden = "", $proveedor = null, $param = null,$fields=null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT ";
        if($fields === null){
           $sql.= " idRecluso,idIngresoCereso,idImputadoCarpeta,nombre,paterno,materno,alias,detenido,cveGenero,cveEstadoPsicofisico,activo ";
        }else{
            $sql.=$fields;
        }
        $sql.=" FROM tblreclusos ";//
        
        if (($reclusosDto->getIdRecluso() != "") || ($reclusosDto->getIdIngresoCereso() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
            $sql.=" WHERE ";
        }
        if ($reclusosDto->getIdRecluso() != "") {
            $sql.="idRecluso=".$reclusosDto->getIdRecluso();
            if (($reclusosDto->getIdIngresoCereso() != "") || ($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getIdIngresoCereso() != "") {
            $sql.="idIngresoCereso=".$reclusosDto->getIdIngresoCereso();
            if (($reclusosDto->getIdImputadoCarpeta() != "") || ($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getIdImputadoCarpeta() != "") {
            $sql.="idImputadoCarpeta=". $reclusosDto->getIdImputadoCarpeta();
            if (($reclusosDto->getNombre() != "") || ($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getNombre() != "") {
            $sql.="nombre='" . $reclusosDto->getNombre() . "'";
            if (($reclusosDto->getPaterno() != "") || ($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getPaterno() != "") {
            $sql.="paterno='" . $reclusosDto->getPaterno() . "'";
            if (($reclusosDto->getMaterno() != "") || ($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getMaterno() != "") {
            $sql.="materno='" . $reclusosDto->getMaterno() . "'";
            if (($reclusosDto->getAlias() != "") || ($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getAlias() != "") {
            $sql.="alias='" . $reclusosDto->getAlias() . "'";
            if (($reclusosDto->getDetenido() != "") || ($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getDetenido() != "") {
            $sql.="detenido='" . $reclusosDto->getDetenido() . "'";
            if (($reclusosDto->getCveGenero() != "") || ($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $reclusosDto->getCveGenero() . "'";
            if (($reclusosDto->getCveEstadoPsicofisico() != "") || ($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getCveEstadoPsicofisico() != "") {
            $sql.="cveEstadoPsicofisico='" . $reclusosDto->getCveEstadoPsicofisico() . "'";
            if (($reclusosDto->getActivo() != "")) {
                $sql.=" AND ";
            }
        }
        if ($reclusosDto->getActivo() != "") {
            $sql.="activo='" . $reclusosDto->getActivo() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        $inicial="";
        if ($param != "" || $param != null) {
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
            }
        }
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                $numField = mysqli_num_fields($this->_proveedor->stmt);
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    if ($fields === null) {
                    $tmp[$contador] = new ReclusosDTO();
                    $tmp[$contador]->setIdRecluso($row["idRecluso"]);
                    $tmp[$contador]->setIdIngresoCereso($row["idIngresoCereso"]);
                    $tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setAlias($row["alias"]);
                    $tmp[$contador]->setDetenido($row["detenido"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
                    $tmp[$contador]->setCveEstadoPsicofisico($row["cveEstadoPsicofisico"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    } else { // HSAY VA 
                        $tmp[$contador] = array();
                        for ($i = 0; $i < $numField; $i++){
                            $fieldInfo = mysqli_fetch_field_direct($this->_proveedor->stmt, $i);
                            $tmp[$contador][$fieldInfo->name] = $row[$fieldInfo->name];
                        } 
                    }
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
