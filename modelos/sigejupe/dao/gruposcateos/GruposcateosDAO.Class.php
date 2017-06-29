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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/gruposcateos/GruposcateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class GruposcateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertGruposcateos($gruposcateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblgruposcateos(";
        if ($gruposcateosDto->getCveGrupoCateo() != "") {
            $sql.="cveGrupoCateo";
            if (($gruposcateosDto->getDesGrupoCateo() != "") || ($gruposcateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getDesGrupoCateo() != "") {
            $sql.="desGrupoCateo";
            if (($gruposcateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($gruposcateosDto->getCveGrupoCateo() != "") {
            $sql.="'" . $gruposcateosDto->getCveGrupoCateo() . "'";
            if (($gruposcateosDto->getDesGrupoCateo() != "") || ($gruposcateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getDesGrupoCateo() != "") {
            $sql.="'" . $gruposcateosDto->getDesGrupoCateo() . "'";
            if (($gruposcateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getActivo() != "") {
            $sql.="'" . $gruposcateosDto->getActivo() . "'";
        }
        if ($gruposcateosDto->getFechaRegistro() != "") {
            
        }
        if ($gruposcateosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposcateosDTO();
            $tmp->setcveGrupoCateo($this->_proveedor->lastID());
            $tmp = $this->selectGruposcateos($tmp, "", $this->_proveedor);
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

    public function updateGruposcateos($gruposcateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblgruposcateos SET ";
        if ($gruposcateosDto->getCveGrupoCateo() != "") {
            $sql.="cveGrupoCateo='" . $gruposcateosDto->getCveGrupoCateo() . "'";
            if (($gruposcateosDto->getDesGrupoCateo() != "") || ($gruposcateosDto->getActivo() != "") || ($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getDesGrupoCateo() != "") {
            $sql.="desGrupoCateo='" . $gruposcateosDto->getDesGrupoCateo() . "'";
            if (($gruposcateosDto->getActivo() != "") || ($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getActivo() != "") {
            $sql.="activo='" . $gruposcateosDto->getActivo() . "'";
            if (($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposcateosDto->getFechaRegistro() . "'";
            if (($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($gruposcateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposcateosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE cveGrupoCateo='" . $gruposcateosDto->getCveGrupoCateo() . "'";
        //print_r($sql);
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new GruposcateosDTO();
            $tmp->setcveGrupoCateo($gruposcateosDto->getCveGrupoCateo());
            $tmp = $this->selectGruposcateos($tmp, "", $this->_proveedor);
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

    public function deleteGruposcateos($gruposcateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblgruposcateos  WHERE cveGrupoCateo='" . $gruposcateosDto->getCveGrupoCateo() . "'";
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

    public function selectGruposcateos($gruposcateosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT cveGrupoCateo,desGrupoCateo,activo,fechaRegistro,fechaActualizacion FROM tblgruposcateos ";
        if (($gruposcateosDto->getCveGrupoCateo() != "") || ($gruposcateosDto->getDesGrupoCateo() != "") || ($gruposcateosDto->getActivo() != "") || ($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($gruposcateosDto->getCveGrupoCateo() != "") {
            $sql.="cveGrupoCateo='" . $gruposcateosDto->getCveGrupoCateo() . "'";
            if (($gruposcateosDto->getDesGrupoCateo() != "") || ($gruposcateosDto->getActivo() != "") || ($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposcateosDto->getDesGrupoCateo() != "") {
            $sql.="desGrupoCateo='" . $gruposcateosDto->getDesGrupoCateo() . "'";
            if (($gruposcateosDto->getActivo() != "") || ($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposcateosDto->getActivo() != "") {
            $sql.="activo='" . $gruposcateosDto->getActivo() . "'";
            if (($gruposcateosDto->getFechaRegistro() != "") || ($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposcateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $gruposcateosDto->getFechaRegistro() . "'";
            if (($gruposcateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($gruposcateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $gruposcateosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new GruposcateosDTO();
                    $tmp[$contador]->setCveGrupoCateo($row["cveGrupoCateo"]);
                    $tmp[$contador]->setDesGrupoCateo($row["desGrupoCateo"]);
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