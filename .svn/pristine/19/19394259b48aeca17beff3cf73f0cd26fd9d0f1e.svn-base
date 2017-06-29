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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/gruposordenesjuzgados/GruposordenesjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class GruposordenesjuzgadosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertGruposordenesjuzgados($gruposordenesjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblgruposordenesjuzgados(";
        if ($gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="cveGrupoOrdenJuzgado";
            if (($gruposordenesjuzgadosDto->getCveJuzgado() != "") || ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado";
            if (($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") {
            $sql.="cveGrupoOrden";
            if (($gruposordenesjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="'" . $gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() . "'";
            if (($gruposordenesjuzgadosDto->getCveJuzgado() != "") || ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveJuzgado() != "") {
            $sql.="'" . $gruposordenesjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") {
            $sql.="'" . $gruposordenesjuzgadosDto->getCveGrupoOrden() . "'";
            if (($gruposordenesjuzgadosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getActivo() != "") {
            $sql.="'" . $gruposordenesjuzgadosDto->getActivo() . "'";
        }
        if ($gruposordenesjuzgadosDto->getFechaRegistro() != "") {
            
        }
        if ($gruposordenesjuzgadosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposordenesjuzgadosDTO();
            $tmp->setcveGrupoOrdenJuzgado($this->_proveedor->lastID());
            $tmp = $this->selectGruposordenesjuzgados($tmp, "", $this->_proveedor);
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

    public function updateGruposordenesjuzgados($gruposordenesjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblgruposordenesjuzgados SET ";
        if ($gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="cveGrupoOrdenJuzgado='" . $gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() . "'";
            if (($gruposordenesjuzgadosDto->getCveJuzgado() != "") || ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $gruposordenesjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") {
            $sql.="cveGrupoOrden='" . $gruposordenesjuzgadosDto->getCveGrupoOrden() . "'";
            if (($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getActivo() != "") {
            $sql.="activo='" . $gruposordenesjuzgadosDto->getActivo() . "'";
            if (($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposordenesjuzgadosDto->getFechaRegistro() . "'";
            if (($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposordenesjuzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposordenesjuzgadosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveGrupoOrdenJuzgado='" . $gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposordenesjuzgadosDTO();
            $tmp->setcveGrupoOrdenJuzgado($gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado());
            $tmp = $this->selectGruposordenesjuzgados($tmp, "", $this->_proveedor);
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

    public function deleteGruposordenesjuzgados($gruposordenesjuzgadosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblgruposordenesjuzgados  WHERE cveGrupoOrdenJuzgado='" . $gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() . "'";
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

    public function selectGruposordenesjuzgados($gruposordenesjuzgadosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveGrupoOrdenJuzgado,cveJuzgado,cveGrupoOrden,activo,fechaRegistro,fechaActualizacion FROM tblgruposordenesjuzgados ";
        if (($gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() != "") || ($gruposordenesjuzgadosDto->getCveJuzgado() != "") || ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="cveGrupoOrdenJuzgado='" . $gruposordenesjuzgadosDto->getCveGrupoOrdenJuzgado() . "'";
            if (($gruposordenesjuzgadosDto->getCveJuzgado() != "") || ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveJuzgado() != "") {
            $sql.="cveJuzgado='" . $gruposordenesjuzgadosDto->getCveJuzgado() . "'";
            if (($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") || ($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposordenesjuzgadosDto->getCveGrupoOrden() != "") {
            $sql.="cveGrupoOrden='" . $gruposordenesjuzgadosDto->getCveGrupoOrden() . "'";
            if (($gruposordenesjuzgadosDto->getActivo() != "") || ($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposordenesjuzgadosDto->getActivo() != "") {
            $sql.="activo='" . $gruposordenesjuzgadosDto->getActivo() . "'";
            if (($gruposordenesjuzgadosDto->getFechaRegistro() != "") || ($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposordenesjuzgadosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposordenesjuzgadosDto->getFechaRegistro() . "'";
            if (($gruposordenesjuzgadosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposordenesjuzgadosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposordenesjuzgadosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new GruposordenesjuzgadosDTO();
                    $tmp[$contador]->setCveGrupoOrdenJuzgado($row["cveGrupoOrdenJuzgado"]);
                    $tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
                    $tmp[$contador]->setCveGrupoOrden($row["cveGrupoOrden"]);
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