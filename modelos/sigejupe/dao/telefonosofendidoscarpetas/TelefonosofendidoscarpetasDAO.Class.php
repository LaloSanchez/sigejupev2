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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TelefonosofendidoscarpetasDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tbltelefonosofendidoscarpetas(";
        if ($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() != "") {
            $sql.="idTelefonoOfendidoCarpeta";
            if (($telefonosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta";
            if (($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->gettelefono() != "") {
            $sql.="telefono";
            if (($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getcelular() != "") {
            $sql.="celular";
            if (($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getemail() != "") {
            $sql.="email";
            if (($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo";
        }
        $sql.=",fechaRegistro";
        $sql.=",fechaActualizacion";
        $sql.=") VALUES(";
        if ($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() != "") {
            $sql.="'" . $telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() . "'";
            if (($telefonosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="'" . $telefonosofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->gettelefono() != "") {
            $sql.="'" . $telefonosofendidoscarpetasDto->gettelefono() . "'";
            if (($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getcelular() != "") {
            $sql.="'" . $telefonosofendidoscarpetasDto->getcelular() . "'";
            if (($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getemail() != "") {
            $sql.="'" . $telefonosofendidoscarpetasDto->getemail() . "'";
            if (($telefonosofendidoscarpetasDto->getActivo() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getactivo() != "") {
            $sql.="'" . $telefonosofendidoscarpetasDto->getactivo() . "'";
        }
        if ($telefonosofendidoscarpetasDto->getfechaRegistro() != "") {
            
        }
        if ($telefonosofendidoscarpetasDto->getfechaActualizacion() != "") {
            
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosofendidoscarpetasDTO();
            $tmp->setidTelefonoOfendidoCarpeta($this->_proveedor->lastID());
            $tmp = $this->selectTelefonosofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function updateTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosofendidoscarpetas SET ";
        if ($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() != "") {
            $sql.="idTelefonoOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() . "'";
            if (($telefonosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getidOfendidoCarpeta() . "'";
            if (($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->gettelefono() != "") {
            $sql.="telefono='" . $telefonosofendidoscarpetasDto->gettelefono() . "'";
            if (($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getcelular() != "") {
            $sql.="celular='" . $telefonosofendidoscarpetasDto->getcelular() . "'";
            if (($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getemail() != "") {
            $sql.="email='" . $telefonosofendidoscarpetasDto->getemail() . "'";
            if (($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $telefonosofendidoscarpetasDto->getactivo() . "'";
            if (($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $telefonosofendidoscarpetasDto->getfechaRegistro() . "'";
            if (($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=",";
            }
        }
        if ($telefonosofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $telefonosofendidoscarpetasDto->getfechaActualizacion() . "'";
        }
        $sql.=" WHERE idTelefonoOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosofendidoscarpetasDTO();
            $tmp->setidTelefonoOfendidoCarpeta($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta());
            $tmp = $this->selectTelefonosofendidoscarpetas($tmp, "", $this->_proveedor);
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

    public function deleteTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tbltelefonosofendidoscarpetas  WHERE idTelefonoOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() . "'";
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

    public function selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idTelefonoOfendidoCarpeta,idOfendidoCarpeta,telefono,celular,email,activo,fechaRegistro,fechaActualizacion FROM tbltelefonosofendidoscarpetas ";
        if (($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() != "") || ($telefonosofendidoscarpetasDto->getidOfendidoCarpeta() != "") || ($telefonosofendidoscarpetasDto->gettelefono() != "") || ($telefonosofendidoscarpetasDto->getcelular() != "") || ($telefonosofendidoscarpetasDto->getemail() != "") || ($telefonosofendidoscarpetasDto->getactivo() != "") || ($telefonosofendidoscarpetasDto->getfechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getfechaActualizacion() != "")) {
            $sql.=" WHERE ";
        }
        if ($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() != "") {
            $sql.="idTelefonoOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getIdTelefonoOfendidoCarpeta() . "'";
            if (($telefonosofendidoscarpetasDto->getIdOfendidoCarpeta() != "") || ($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->getidOfendidoCarpeta() != "") {
            $sql.="idOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getIdOfendidoCarpeta() . "'";
            if (($telefonosofendidoscarpetasDto->getTelefono() != "") || ($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->gettelefono() != "") {
            $sql.="telefono='" . $telefonosofendidoscarpetasDto->getTelefono() . "'";
            if (($telefonosofendidoscarpetasDto->getCelular() != "") || ($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->getcelular() != "") {
            $sql.="celular='" . $telefonosofendidoscarpetasDto->getCelular() . "'";
            if (($telefonosofendidoscarpetasDto->getEmail() != "") || ($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->getemail() != "") {
            $sql.="email='" . $telefonosofendidoscarpetasDto->getEmail() . "'";
            if (($telefonosofendidoscarpetasDto->getActivo() != "") || ($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->getactivo() != "") {
            $sql.="activo='" . $telefonosofendidoscarpetasDto->getActivo() . "'";
            if (($telefonosofendidoscarpetasDto->getFechaRegistro() != "") || ($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->getfechaRegistro() != "") {
            $sql.="fechaRegistro='" . $telefonosofendidoscarpetasDto->getFechaRegistro() . "'";
            if (($telefonosofendidoscarpetasDto->getFechaActualizacion() != "")) {
                $sql.=" AND ";
            }
        }
        if ($telefonosofendidoscarpetasDto->getfechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $telefonosofendidoscarpetasDto->getFechaActualizacion() . "'";
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
                    $tmp[$contador] = new TelefonosofendidoscarpetasDTO();
                    $tmp[$contador]->setIdTelefonoOfendidoCarpeta($row["idTelefonoOfendidoCarpeta"]);
                    $tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
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
     * Editar telefonos ofendidos carpetas
     */
    public function modificarTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosofendidoscarpetas SET ";
        $sql.=" telefono='" . $telefonosofendidoscarpetasDto->gettelefono() . "'";
        $sql.=" ,celular='" . $telefonosofendidoscarpetasDto->getcelular() . "'";
        $sql.=" ,email='" . $telefonosofendidoscarpetasDto->getemail() . "'";
        $sql.=" ,fechaActualizacion=NOW()";
        $sql.=" WHERE idTelefonoOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new TelefonosofendidoscarpetasDTO();
            $tmp->setidTelefonoOfendidoCarpeta($telefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta());
            $tmp = $this->selectTelefonosofendidoscarpetas($tmp, "", $this->_proveedor);
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
     * para eliminar el telefono del ofendido por el campo idTelefonosOfendidoCarpeta se se modifica el campo activo a 'N'
     * @param $telefonosofendidoscarpetasDto
     * @param null $proveedor
     * @return bool
     */
    public function eliminarTelefonoOfendidoByIdOfendidoCarpeta($telefonosofendidoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tbltelefonosofendidoscarpetas SET activo='N', fechaActualizacion=NOW()";

        $sql .= " WHERE idTelefonoOfendidoCarpeta='" . $telefonosofendidoscarpetasDto->getIdTelefonoOfendidoCarpeta() . "'";

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