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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DefensoresofendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbldefensoresofendidoscarpetas(";
        if ($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() != "") {
            $sql.="idDefensorOfendidoCarpeta";
            if (($defensoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
            if (($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor";
            if (($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre";
            if (($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->gettelefono() != "") {
            $sql.="telefono";
            if (($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcelular() != "") {
            $sql.="celular";
            if (($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getemail() != "") {
            $sql.="email";
            if (($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() . "'";
            if (($defensoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcveTipoDefensor() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getcveTipoDefensor() . "'";
            if (($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getnombre() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getnombre() . "'";
            if (($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->gettelefono() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->gettelefono() . "'";
            if (($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcelular() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getcelular() . "'";
            if (($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getemail() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getemail() . "'";
            if (($defensoresofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getactivo() != "") {
            $sql.="'" . $defensoresofendidoscarpetasDto->getactivo() . "'";
        }
        if ($defensoresofendidoscarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($defensoresofendidoscarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresofendidoscarpetasDTO();
            $tmp->setidDefensorOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectDefensoresofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresofendidoscarpetas SET ";
        if ($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() != "") {
            $sql.="idDefensorOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() . "'";
            if (($defensoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor='" . $defensoresofendidoscarpetasDto->getcveTipoDefensor() . "'";
            if (($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $defensoresofendidoscarpetasDto->getnombre() . "'";
            if (($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->gettelefono() != "") {
            $sql.="telefono='" . $defensoresofendidoscarpetasDto->gettelefono() . "'";
            if (($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcelular() != "") {
            $sql.="celular='" . $defensoresofendidoscarpetasDto->getcelular() . "'";
            if (($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getemail() != "") {
            $sql.="email='" . $defensoresofendidoscarpetasDto->getemail() . "'";
            if (($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $defensoresofendidoscarpetasDto->getactivo() . "'";
            if (($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $defensoresofendidoscarpetasDto->getfechaRegistro() . "'";
            if (($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($defensoresofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $defensoresofendidoscarpetasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idDefensorOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresofendidoscarpetasDTO();
            $tmp->setidDefensorOfendidoCarpeta($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta());
            $tmp = $this->selectDefensoresofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbldefensoresofendidoscarpetas  WHERE idDefensorOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() . "'";
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

    public function selectDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idDefensorOfendidoCarpeta,idOfendidoCarpeta,cveTipoDefensor,nombre,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbldefensoresofendidoscarpetas ";
        if (($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() != "") || ($defensoresofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($defensoresofendidoscarpetasDto->getcveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getnombre() != "") || ($defensoresofendidoscarpetasDto->gettelefono() != "") || ($defensoresofendidoscarpetasDto->getcelular() != "") || ($defensoresofendidoscarpetasDto->getemail() != "") || ($defensoresofendidoscarpetasDto->getactivo() != "") || ($defensoresofendidoscarpetasDto->getfechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() != "") {
            $sql.="idDefensorOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getIdDefensorOfendidoCarpeta() . "'";
            if (($defensoresofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($defensoresofendidoscarpetasDto->getCveTipoDefensor() != "") || ($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcveTipoDefensor() != "") {
            $sql.="cveTipoDefensor='" . $defensoresofendidoscarpetasDto->getCveTipoDefensor() . "'";
            if (($defensoresofendidoscarpetasDto->getNombre() != "") || ($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getnombre() != "") {
            $sql.="nombre='" . $defensoresofendidoscarpetasDto->getNombre() . "'";
            if (($defensoresofendidoscarpetasDto->getTelefono() != "") || ($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->gettelefono() != "") {
            $sql.="telefono='" . $defensoresofendidoscarpetasDto->getTelefono() . "'";
            if (($defensoresofendidoscarpetasDto->getCelular() != "") || ($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getcelular() != "") {
            $sql.="celular='" . $defensoresofendidoscarpetasDto->getCelular() . "'";
            if (($defensoresofendidoscarpetasDto->getEmail() != "") || ($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getemail() != "") {
            $sql.="email='" . $defensoresofendidoscarpetasDto->getEmail() . "'";
            if (($defensoresofendidoscarpetasDto->getActivo() != "") || ($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $defensoresofendidoscarpetasDto->getActivo() . "'";
            if (($defensoresofendidoscarpetasDto->getFechaRegistro() != "") || ($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $defensoresofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($defensoresofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($defensoresofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $defensoresofendidoscarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new DefensoresofendidoscarpetasDTO();
                    $tmp[$contador]->setIdDefensorOfendidoCarpeta($row["idDefensorOfendidoCarpeta"]);
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
                    $tmp[$contador]->setCveTipoDefensor($row["cveTipoDefensor"]);
                    $tmp[$contador]->setNombre($row["nombre"]);
                    $tmp[$contador]->setTelefono($row["telefono"]);
                    $tmp[$contador]->setCelular($row["celular"]);
                    $tmp[$contador]->setEmail($row["email"]);
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
    
    /*
     * Editar datos del defensor ofendidos carpetas
     */
    public function modificarDefensoresofendidoscarpetas($defensoresofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresofendidoscarpetas SET ";
        $sql.=" cveTipoDefensor='" . $defensoresofendidoscarpetasDto->getcveTipoDefensor() . "'";
        $sql.=" ,nombre='" . $defensoresofendidoscarpetasDto->getnombre() . "'";
        $sql.=" ,telefono='" . $defensoresofendidoscarpetasDto->gettelefono() . "'";
        $sql.=" ,celular='" . $defensoresofendidoscarpetasDto->getcelular() . "'";
        $sql.=" ,email='" . $defensoresofendidoscarpetasDto->getemail() . "'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idDefensorOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new DefensoresofendidoscarpetasDTO();
            $tmp->setidDefensorOfendidoCarpeta($defensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta());
            $tmp = $this->selectDefensoresofendidoscarpetas($tmp, "", $this->_proveedor);
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
    
    /**
     * para eliminar el defensor del ofendido por el campo idDefensorOfendidoCarpeta se se modifica el campo activo a 'N'
     * @param $defensorofendidoscarpetasDto
     * @param null $proveedor
     * @return bool
     */
    public function eliminarDefensorOfendidoByIdOfendidoCarpeta($defensoresofendidoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbldefensoresofendidoscarpetas SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idDefensorOfendidoCarpeta='" . $defensoresofendidoscarpetasDto->getIdDefensorOfendidoCarpeta() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $response = true;
        } else {
            $response = false;
        }
        if ($proveedor == null) {
            $this->_proveedor->close();
        }

        return $response;
    }
    
}

?>