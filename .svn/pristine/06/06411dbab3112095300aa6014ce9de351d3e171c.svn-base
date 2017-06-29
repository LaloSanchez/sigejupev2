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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TutoresofendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltutoresofendidoscarpetas(";
        if ($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() != "") {
            $sql.="idTutorOfendidoCarpeta";
            if (($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
            if (($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") {
            $sql.="cveTipoTutor";
            if (($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getProvDef() != "") {
            $sql.="ProvDef";
            if (($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getNombre() != "") {
            $sql.="nombre";
            if (($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getPaterno() != "") {
            $sql.="paterno";
            if (($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getMaterno() != "") {
            $sql.="materno";
            if (($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="fechaNacimiento";
            if (($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getEdad() != "") {
            $sql.="edad";
            if (($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo";
            if (($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() . "'";
            if (($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getCveTipoTutor() . "'";
            if (($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getProvDef() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getProvDef() . "'";
            if (($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getNombre() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getNombre() . "'";
            if (($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getPaterno() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getPaterno() . "'";
            if (($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getMaterno() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getMaterno() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getEdad() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getEdad() . "'";
            if (($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getActivo() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getActivo() . "'";
            if (($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") {
            if (($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") {
            if (($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveGenero() != "") {
            $sql.="'" . $tutoresofendidoscarpetasDto->getCveGenero() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidoscarpetasDTO();
            $tmp->setIdTutorOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectTutoresofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidoscarpetas SET ";
        if ($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() != "") {
            $sql.="idTutorOfendidoCarpeta='" . $tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() . "'";
            if (($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") {
            $sql.="cveTipoTutor='" . $tutoresofendidoscarpetasDto->getCveTipoTutor() . "'";
            if (($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getProvDef() != "") {
            $sql.="ProvDef='" . $tutoresofendidoscarpetasDto->getProvDef() . "'";
            if (($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getNombre() != "") {
            $sql.="nombre='" . $tutoresofendidoscarpetasDto->getNombre() . "'";
            if (($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getPaterno() != "") {
            $sql.="paterno='" . $tutoresofendidoscarpetasDto->getPaterno() . "'";
            if (($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getMaterno() != "") {
            $sql.="materno='" . $tutoresofendidoscarpetasDto->getMaterno() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $tutoresofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getEdad() != "") {
            $sql.="edad='" . $tutoresofendidoscarpetasDto->getEdad() . "'";
            if (($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $tutoresofendidoscarpetasDto->getActivo() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tutoresofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tutoresofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=",";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $tutoresofendidoscarpetasDto->getCveGenero() . "'";
        }
        $sql.=" WHERE idTutorOfendidoCarpeta='" . $tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidoscarpetasDTO();
            $tmp->setIdTutorOfendidoCarpeta($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta());
            $tmp = $this->selectTutoresofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltutoresofendidoscarpetas  WHERE idTutorOfendidoCarpeta='" . $tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() . "'";
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

    public function selectTutoresofendidoscarpetas($tutoresofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = NULL;
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTutorOfendidoCarpeta,idOfendidoCarpeta,cveTipoTutor,ProvDef,nombre,paterno,materno,fechaNacimiento,edad,activo,fechaRegistro,fechaActualizacion,cveGenero FROM tbltutoresofendidoscarpetas ";
        if (($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() != "") || ($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
            $sql.=" WHERE ";
        }
        if ($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() != "") {
            $sql.="idTutorOfendidoCarpeta='" . $tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta() . "'";
            if (($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $tutoresofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") || ($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveTipoTutor() != "") {
            $sql.="cveTipoTutor='" . $tutoresofendidoscarpetasDto->getCveTipoTutor() . "'";
            if (($tutoresofendidoscarpetasDto->getProvDef() != "") || ($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getProvDef() != "") {
            $sql.="ProvDef='" . $tutoresofendidoscarpetasDto->getCveTipoTutor() . "'";
            if (($tutoresofendidoscarpetasDto->getNombre() != "") || ($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getNombre() != "") {
            $sql.="nombre='" . $tutoresofendidoscarpetasDto->getNombre() . "'";
            if (($tutoresofendidoscarpetasDto->getPaterno() != "") || ($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getPaterno() != "") {
            $sql.="paterno='" . $tutoresofendidoscarpetasDto->getPaterno() . "'";
            if (($tutoresofendidoscarpetasDto->getMaterno() != "") || ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getMaterno() != "") {
            $sql.="materno='" . $tutoresofendidoscarpetasDto->getMaterno() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") || ($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaNacimiento() != "") {
            $sql.="fechaNacimiento='" . $tutoresofendidoscarpetasDto->getFechaNacimiento() . "'";
            if (($tutoresofendidoscarpetasDto->getEdad() != "") || ($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getEdad() != "") {
            $sql.="edad='" . $tutoresofendidoscarpetasDto->getEdad() . "'";
            if (($tutoresofendidoscarpetasDto->getActivo() != "") || ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getActivo() != "") {
            $sql.="activo='" . $tutoresofendidoscarpetasDto->getActivo() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaRegistro() != "") || ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $tutoresofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") || ($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $tutoresofendidoscarpetasDto->getFechaActualizacion() . "'";
            if (($tutoresofendidoscarpetasDto->getCveGenero() != "")) {
                $sql.=" AND ";
            }
        }
        if ($tutoresofendidoscarpetasDto->getCveGenero() != "") {
            $sql.="cveGenero='" . $tutoresofendidoscarpetasDto->getCveGenero() . "'";
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
                    $tmp[$contador] = new TutoresofendidoscarpetasDTO();
                    $tmp[$contador]->setIdTutorOfendidoCarpeta($row["idTutorOfendidoCarpeta"]);
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setCveTipoTutor($row["cveTipoTutor"]);
                    $tmp[$contador]->setProvDef($row["ProvDef"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setPaterno($row["paterno"]);
                    $tmp[$contador]->setMaterno($row["materno"]);
                    $tmp[$contador]->setFechaNacimiento($row["fechaNacimiento"]);
                    $tmp[$contador]->setEdad($row["edad"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setCveGenero($row["cveGenero"]);
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
    
    /*
     * Modificar tutores ofendidos carpetas
     */
    public function modificarTutoresofendidoscarpetas($tutoresofendidoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql="UPDATE tbltutoresofendidoscarpetas SET ";
        $sql.=" cveTipoTutor='".$tutoresofendidoscarpetasDto->getCveTipoTutor()."'";
        $sql.=" ,ProvDef='".$tutoresofendidoscarpetasDto->getProvDef()."'";
        $sql.=" ,cveGenero='".$tutoresofendidoscarpetasDto->getCveGenero()."'";
        $sql.=" ,nombre='".$tutoresofendidoscarpetasDto->getNombre()."'";
        $sql.=" ,paterno='".$tutoresofendidoscarpetasDto->getPaterno()."'";
        $sql.=" ,materno='".$tutoresofendidoscarpetasDto->getMaterno()."'";
        $sql.=" ,fechaNacimiento='".$tutoresofendidoscarpetasDto->getFechaNacimiento()."'";
        $sql.=" ,edad='".$tutoresofendidoscarpetasDto->getEdad()."'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idTutorOfendidoCarpeta='".$tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidoscarpetasDTO();
            $tmp->setIdTutorOfendidoCarpeta($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta());
            $tmp = $this->selectTutoresofendidoscarpetas($tmp,"",$this->_proveedor);
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
    
    /*
     * Borrado logico de tutores imputados carptas
     */
    public function eliminarTutoresofendidoscarpetasByIdOfendido($tutoresofendidoscarpetasDto,$proveedor=null){
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltutoresofendidoscarpetas SET activo='N', fechaActualizacion=NOW()";
        $sql.=" WHERE idTutorOfendidoCarpeta='".$tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta()."'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TutoresofendidoscarpetasDTO();
            $tmp->setIdTutorOfendidoCarpeta($tutoresofendidoscarpetasDto->getIdTutorOfendidoCarpeta());
            $tmp = $this->selectTutoresofendidoscarpetas($tmp,"",$this->_proveedor);
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