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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ProgramacioncateosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertProgramacioncateos($programacioncateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblprogramacioncateos(";
        if ($programacioncateosDto->getIdProgramacionCateo() != "") {
            $sql.="idProgramacionCateo";
            if (($programacioncateosDto->getIdJuzgador() != "") || ($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getIdJuzgador() != "") {
            $sql.="idJuzgador";
            if (($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getCveGrupoJuzgado() != "") {
            $sql.="cveGrupoJuzgado";
            if (($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaInicio() != "") {
            $sql.="fechaInicio";
            if (($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaFinal() != "") {
            $sql.="fechaFinal";
            if (($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getActivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($programacioncateosDto->getIdProgramacionCateo() != "") {
            $sql.="'" . $programacioncateosDto->getIdProgramacionCateo() . "'";
            if (($programacioncateosDto->getIdJuzgador() != "") || ($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getIdJuzgador() != "") {
            $sql.="'" . $programacioncateosDto->getIdJuzgador() . "'";
            if (($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getCveGrupoJuzgado() != "") {
            $sql.="'" . $programacioncateosDto->getCveGrupoJuzgado() . "'";
            if (($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaInicio() != "") {
            $sql.="'" . $programacioncateosDto->getFechaInicio() . "'";
            if (($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaFinal() != "") {
            $sql.="'" . $programacioncateosDto->getFechaFinal() . "'";
            if (($programacioncateosDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getActivo() != "") {
            $sql.="'" . $programacioncateosDto->getActivo() . "'";
        }
        if ($programacioncateosDto->getFechaRegistro() != "") {
            
        }
        if ($programacioncateosDto->getFechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacioncateosDTO();
            $tmp->setidProgramacionCateo($this->_proveedor->lastID());
            $tmp = $this->selectProgramacioncateos($tmp, "", $this->_proveedor);
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

    public function updateProgramacioncateos($programacioncateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblprogramacioncateos SET ";
        if ($programacioncateosDto->getIdProgramacionCateo() != "") {
            $sql.="idProgramacionCateo='" . $programacioncateosDto->getIdProgramacionCateo() . "'";
            if (($programacioncateosDto->getIdJuzgador() != "") || ($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacioncateosDto->getIdJuzgador() . "'";
            if (($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getCveGrupoJuzgado() != "") {
            $sql.="cveGrupoJuzgado='" . $programacioncateosDto->getCveGrupoJuzgado() . "'";
            if (($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacioncateosDto->getFechaInicio() . "'";
            if (($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacioncateosDto->getFechaFinal() . "'";
            if (($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getActivo() != "") {
            $sql.="activo='" . $programacioncateosDto->getActivo() . "'";
            if (($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacioncateosDto->getFechaRegistro() . "'";
            if (($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($programacioncateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacioncateosDto->getFechaActualizacion() . "'";
        }
        $sql.=" WHERE idProgramacionCateo='" . $programacioncateosDto->getIdProgramacionCateo() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ProgramacioncateosDTO();
            $tmp->setidProgramacionCateo($programacioncateosDto->getIdProgramacionCateo());
            $tmp = $this->selectProgramacioncateos($tmp, "", $this->_proveedor);
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

    public function deleteProgramacioncateos($programacioncateosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblprogramacioncateos  WHERE idProgramacionCateo='" . $programacioncateosDto->getIdProgramacionCateo() . "'";
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

    public function selectProgramacioncateos($programacioncateosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idProgramacionCateo,idJuzgador,cveGrupoJuzgado,fechaInicio,fechaFinal,activo,fechaRegistro,fechaActualizacion FROM tblprogramacioncateos ";
        if (($programacioncateosDto->getIdProgramacionCateo() != "") || ($programacioncateosDto->getIdJuzgador() != "") || ($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($programacioncateosDto->getIdProgramacionCateo() != "") {
            $sql.="idProgramacionCateo='" . $programacioncateosDto->getIdProgramacionCateo() . "'";
            if (($programacioncateosDto->getIdJuzgador() != "") || ($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getIdJuzgador() != "") {
            $sql.="idJuzgador='" . $programacioncateosDto->getIdJuzgador() . "'";
            if (($programacioncateosDto->getCveGrupoJuzgado() != "") || ($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getCveGrupoJuzgado() != "") {
            $sql.="cveGrupoJuzgado='" . $programacioncateosDto->getCveGrupoJuzgado() . "'";
            if (($programacioncateosDto->getFechaInicio() != "") || ($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getFechaInicio() != "") {
            $sql.="fechaInicio='" . $programacioncateosDto->getFechaInicio() . "'";
            if (($programacioncateosDto->getFechaFinal() != "") || ($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getFechaFinal() != "") {
            $sql.="fechaFinal='" . $programacioncateosDto->getFechaFinal() . "'";
            if (($programacioncateosDto->getActivo() != "") || ($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getActivo() != "") {
            $sql.="activo='" . $programacioncateosDto->getActivo() . "'";
            if (($programacioncateosDto->getFechaRegistro() != "") || ($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $programacioncateosDto->getFechaRegistro() . "'";
            if (($programacioncateosDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($programacioncateosDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $programacioncateosDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new ProgramacioncateosDTO();
                    $tmp[$contador]->setIdProgramacionCateo($row["idProgramacionCateo"]);
                    $tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
                    $tmp[$contador]->setCveGrupoJuzgado($row["cveGrupoJuzgado"]);
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