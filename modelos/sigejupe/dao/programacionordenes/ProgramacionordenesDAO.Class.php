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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/programacionordenes/ProgramacionordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProgramacionordenesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertProgramacionordenes($programacionordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblprogramacionordenes(";
        if ($programacionordenesDto->getIdProgramacionOrden() != "") {
            $sql.="idProgramacionOrden";
            if (($programacionordenesDto->getIdJuzgador() != "") || ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getIdJuzgador() != "") {
            $sql.="idJuzgador";
            if (($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="cveGrupoOrdenJuzgado";
            if (($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaInicio() != "") {
            $sql.="fechaInicio";
            if (($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaFinal() != "") {
            $sql.="fechaFinal";
            if (($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($programacionordenesDto->getIdProgramacionOrden() != "") {
            $sql.="'" . $programacionordenesDto->getIdProgramacionOrden() . "'";
            if (($programacionordenesDto->getIdJuzgador() != "") || ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getIdJuzgador() != "") {
            $sql.="'" . $programacionordenesDto->getIdJuzgador() . "'";
            if (($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="'" . $programacionordenesDto->getCveGrupoOrdenJuzgado() . "'";
            if (($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaInicio() != "") {
            $sql.="'" . $programacionordenesDto->getFechaInicio() . "'";
            if (($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaFinal() != "") {
            $sql.="'" . $programacionordenesDto->getFechaFinal() . "'";
            if (($programacionordenesDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getActivo() != "") {
            $sql.="'" . $programacionordenesDto->getActivo() . "'";
        }
        if ($programacionordenesDto->getFechaRegistro() != "") {
            
        }
        if ($programacionordenesDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionordenesDTO();
            $tmp->setidProgramacionOrden($this->_proveedor->lastID());
            $tmp = $this->selectProgramacionordenes($tmp, "", $this->_proveedor);
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

    public function updateProgramacionordenes($programacionordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblprogramacionordenes SET ";
        if ($programacionordenesDto->getIdProgramacionOrden() != "") {
            $sql.="idProgramacionOrden='" . $programacionordenesDto->getIdProgramacionOrden() . "'";
            if (($programacionordenesDto->getIdJuzgador() != "") || ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionordenesDto->getIdJuzgador() . "'";
            if (($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="cveGrupoOrdenJuzgado='" . $programacionordenesDto->getCveGrupoOrdenJuzgado() . "'";
            if (($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionordenesDto->getFechaInicio() . "'";
            if (($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionordenesDto->getFechaFinal() . "'";
            if (($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getActivo() != "") {
            $sql.="activo='" . $programacionordenesDto->getActivo() . "'";
            if (($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionordenesDto->getFechaRegistro() . "'";
            if (($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacionordenesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionordenesDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idProgramacionOrden='" . $programacionordenesDto->getIdProgramacionOrden() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacionordenesDTO();
            $tmp->setidProgramacionOrden($programacionordenesDto->getIdProgramacionOrden());
            $tmp = $this->selectProgramacionordenes($tmp, "", $this->_proveedor);
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

    public function deleteProgramacionordenes($programacionordenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblprogramacionordenes  WHERE idProgramacionOrden='" . $programacionordenesDto->getIdProgramacionOrden() . "'";
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

    public function selectProgramacionordenes($programacionordenesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idProgramacionOrden,idJuzgador,cveGrupoOrdenJuzgado,fechaInicio,fechaFinal,activo,fechaRegistro,fechaActualizacion FROM tblprogramacionordenes ";
        if (($programacionordenesDto->getIdProgramacionOrden() != "") || ($programacionordenesDto->getIdJuzgador() != "") || ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($programacionordenesDto->getIdProgramacionOrden() != "") {
            $sql.="idProgramacionOrden='" . $programacionordenesDto->getIdProgramacionOrden() . "'";
            if (($programacionordenesDto->getIdJuzgador() != "") || ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacionordenesDto->getIdJuzgador() . "'";
            if (($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") || ($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getCveGrupoOrdenJuzgado() != "") {
            $sql.="cveGrupoOrdenJuzgado='" . $programacionordenesDto->getCveGrupoOrdenJuzgado() . "'";
            if (($programacionordenesDto->getFechaInicio() != "") || ($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacionordenesDto->getFechaInicio() . "'";
            if (($programacionordenesDto->getFechaFinal() != "") || ($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacionordenesDto->getFechaFinal() . "'";
            if (($programacionordenesDto->getActivo() != "") || ($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getActivo() != "") {
            $sql.="activo='" . $programacionordenesDto->getActivo() . "'";
            if (($programacionordenesDto->getFechaRegistro() != "") || ($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacionordenesDto->getFechaRegistro() . "'";
            if (($programacionordenesDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacionordenesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacionordenesDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ProgramacionordenesDTO();
                    $tmp[$contador]->setIdProgramacionOrden($row["idProgramacionOrden"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveGrupoOrdenJuzgado($row["cveGrupoOrdenJuzgado"]);
                    $tmp[$contador]->setFechaInicio($row["fechaInicio"]);
                    $tmp[$contador]->setFechaFinal($row["fechaFinal"]);
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