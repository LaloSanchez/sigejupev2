<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/gruposjuzgados/GruposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class GruposjuzgadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertGruposjuzgados($gruposjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblgruposjuzgados(";
        if ($gruposjuzgadosDto->getCveGrupoJuzgado() != "") {
            $sql.="cveGrupoJuzgado";
            if (($gruposjuzgadosDto->getCveJuzgado() != "") || ($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getCveGrupoCateo() != "") {
            $sql.="cveGrupoCateo";
            if (($gruposjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($gruposjuzgadosDto->getCveGrupoJuzgado() != "") {
            $sql.="'" . $gruposjuzgadosDto->getCveGrupoJuzgado() . "'";
            if (($gruposjuzgadosDto->getCveJuzgado() != "") || ($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getCveJuzgado() != "") {
            $sql.="'" . $gruposjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getCveGrupoCateo() != "") {
            $sql.="'" . $gruposjuzgadosDto->getCveGrupoCateo() . "'";
            if (($gruposjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getActivo() != "") {
            $sql.="'" . $gruposjuzgadosDto->getActivo() . "'";
        }
        if ($gruposjuzgadosDto->getFechaRegistro() != "") {
            
        }
        if ($gruposjuzgadosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposjuzgadosDTO();
            $tmp->setcveGrupoJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectGruposjuzgados($tmp, "", $this->_proveedor);
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

    public function updateGruposjuzgados($gruposjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblgruposjuzgados SET ";
        if ($gruposjuzgadosDto->getCveGrupoJuzgado() != "") {
            $sql.="cveGrupoJuzgado='" . $gruposjuzgadosDto->getCveGrupoJuzgado() . "'";
            if (($gruposjuzgadosDto->getCveJuzgado() != "") || ($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $gruposjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getCveGrupoCateo() != "") {
            $sql.="cveGrupoCateo='" . $gruposjuzgadosDto->getCveGrupoCateo() . "'";
            if (($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getActivo() != "") {
            $sql.="activo='" . $gruposjuzgadosDto->getActivo() . "'";
            if (($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposjuzgadosDto->getFechaRegistro() . "'";
            if (($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposjuzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposjuzgadosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveGrupoJuzgado='" . $gruposjuzgadosDto->getCveGrupoJuzgado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposjuzgadosDTO();
            $tmp->setcveGrupoJuzgado($gruposjuzgadosDto->getCveGrupoJuzgado());
            $tmp = $this->selectGruposjuzgados($tmp, "", $this->_proveedor);
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

    public function deleteGruposjuzgados($gruposjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblgruposjuzgados  WHERE cveGrupoJuzgado='" . $gruposjuzgadosDto->getCveGrupoJuzgado() . "'";
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

    public function selectGruposjuzgados($gruposjuzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveGrupoJuzgado,cveJuzgado,cveGrupoCateo,activo,fechaRegistro,fechaActualizacion FROM tblgruposjuzgados ";
        if (($gruposjuzgadosDto->getCveGrupoJuzgado() != "") || ($gruposjuzgadosDto->getCveJuzgado() != "") || ($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($gruposjuzgadosDto->getCveGrupoJuzgado() != "") {
            $sql.="cveGrupoJuzgado='" . $gruposjuzgadosDto->getCveGrupoJuzgado() . "'";
            if (($gruposjuzgadosDto->getCveJuzgado() != "") || ($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $gruposjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposjuzgadosDto->getCveGrupoCateo() != "") || ($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposjuzgadosDto->getCveGrupoCateo() != "") {
            $sql.="cveGrupoCateo='" . $gruposjuzgadosDto->getCveGrupoCateo() . "'";
            if (($gruposjuzgadosDto->getActivo() != "") || ($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposjuzgadosDto->getActivo() != "") {
            $sql.="activo='" . $gruposjuzgadosDto->getActivo() . "'";
            if (($gruposjuzgadosDto->getFechaRegistro() != "") || ($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposjuzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposjuzgadosDto->getFechaRegistro() . "'";
            if (($gruposjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposjuzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposjuzgadosDto->getFechaActualizacion() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new GruposjuzgadosDTO();
                    $tmp[$contador]->setCveGrupoJuzgado($row["cveGrupoJuzgado"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveGrupoCateo($row["cveGrupoCateo"]);
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