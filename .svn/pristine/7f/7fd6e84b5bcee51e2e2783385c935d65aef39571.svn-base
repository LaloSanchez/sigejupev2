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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class AntecedescarpetasDAO {
    /*
     * Se agrega atributo cveTipoCarpeta
     */
    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertAntecedescarpetas($antecedescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblantecedescarpetas(";
        if ($antecedescarpetasDto->getidAntecedeCarpeta() != "") {
            $sql.="idAntecedeCarpeta";
            if (($antecedescarpetasDto->getIdCarpetaPadre() != "") || ($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getcveTipoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaPadre() != "") {
            $sql.="idCarpetaPadre";
            if (($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getcveTipoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaHija() != "") {
            $sql.="idCarpetaHija";
            if (($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getcveTipoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getcveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta";
            if (($antecedescarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($antecedescarpetasDto->getidAntecedeCarpeta() != "") {
            $sql.="'" . $antecedescarpetasDto->getidAntecedeCarpeta() . "'";
            if (($antecedescarpetasDto->getIdCarpetaPadre() != "") || ($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaPadre() != "") {
            $sql.="'" . $antecedescarpetasDto->getidCarpetaPadre() . "'";
            if (($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaHija() != "") {
            $sql.="'" . $antecedescarpetasDto->getidCarpetaHija() . "'";
            if (($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getCveTipoCarpeta() != "") {
            $sql.="'" . $antecedescarpetasDto->getCveTipoCarpeta() . "'";
            if (($antecedescarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getactivo() != "") {
            $sql.="'" . $antecedescarpetasDto->getactivo() . "'";
        }
        if ($antecedescarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($antecedescarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AntecedescarpetasDTO();
            $tmp->setidAntecedeCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectAntecedescarpetas($tmp, "", $this->_proveedor);
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

    public function updateAntecedescarpetas($antecedescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblantecedescarpetas SET ";
        if ($antecedescarpetasDto->getidAntecedeCarpeta() != "") {
            $sql.="idAntecedeCarpeta='" . $antecedescarpetasDto->getidAntecedeCarpeta() . "'";
            if (($antecedescarpetasDto->getIdCarpetaPadre() != "") || ($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaPadre() != "") {
            $sql.="idCarpetaPadre='" . $antecedescarpetasDto->getidCarpetaPadre() . "'";
            if (($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaHija() != "") {
            $sql.="idCarpetaHija='" . $antecedescarpetasDto->getidCarpetaHija() . "'";
            if (($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $antecedescarpetasDto->getCveTipoCarpeta() . "'";
            if (($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getactivo() != "") {
            $sql.="activo='" . $antecedescarpetasDto->getactivo() . "'";
            if (($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $antecedescarpetasDto->getfechaRegistro() . "'";
            if (($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($antecedescarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $antecedescarpetasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idAntecedeCarpeta='" . $antecedescarpetasDto->getidAntecedeCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new AntecedescarpetasDTO();
            $tmp->setidAntecedeCarpeta($antecedescarpetasDto->getidAntecedeCarpeta());
            $tmp = $this->selectAntecedescarpetas($tmp, "", $this->_proveedor);
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

    public function deleteAntecedescarpetas($antecedescarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblantecedescarpetas  WHERE idAntecedeCarpeta='" . $antecedescarpetasDto->getidAntecedeCarpeta() . "'";
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

    public function selectAntecedescarpetas($antecedescarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idAntecedeCarpeta,idCarpetaPadre,idCarpetaHija,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion FROM tblantecedescarpetas ";
        if (($antecedescarpetasDto->getidAntecedeCarpeta() != "") || ($antecedescarpetasDto->getidCarpetaPadre() != "") || ($antecedescarpetasDto->getidCarpetaHija() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getactivo() != "") || ($antecedescarpetasDto->getfechaRegistro() != "") || ($antecedescarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($antecedescarpetasDto->getidAntecedeCarpeta() != "") {
            $sql.="idAntecedeCarpeta='" . $antecedescarpetasDto->getIdAntecedeCarpeta() . "'";
            if (($antecedescarpetasDto->getIdCarpetaPadre() != "") || ($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaPadre() != "") {
            $sql.="idCarpetaPadre='" . $antecedescarpetasDto->getIdCarpetaPadre() . "'";
            if (($antecedescarpetasDto->getIdCarpetaHija() != "") || ($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedescarpetasDto->getidCarpetaHija() != "") {
            $sql.="idCarpetaHija='" . $antecedescarpetasDto->getIdCarpetaHija() . "'";
            if (($antecedescarpetasDto->getCveTipoCarpeta() != "") || ($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedescarpetasDto->getCveTipoCarpeta() != "") {
            $sql.="cveTipoCarpeta='" . $antecedescarpetasDto->getCveTipoCarpeta() . "'";
            if (($antecedescarpetasDto->getActivo() != "") || ($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedescarpetasDto->getactivo() != "") {
            $sql.="activo='" . $antecedescarpetasDto->getActivo() . "'";
            if (($antecedescarpetasDto->getFechaRegistro() != "") || ($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedescarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $antecedescarpetasDto->getFechaRegistro() . "'";
            if (($antecedescarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($antecedescarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $antecedescarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new AntecedescarpetasDTO();
                    $tmp[$contador]->setIdAntecedeCarpeta($row["idAntecedeCarpeta"]);
                    $tmp[$contador]->setIdCarpetaPadre($row["idCarpetaPadre"]);
                    $tmp[$contador]->setIdCarpetaHija($row["idCarpetaHija"]);
                    $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
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