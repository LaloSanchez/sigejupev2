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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ChatmessagesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertChatmessages($chatmessagesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblchatmessages(";
        if ($chatmessagesDto->getIdChatMessage() != "") {
            $sql.="idChatMessage";
            if (($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getNombreUsuario() != "") {
            $sql.="nombreUsuario";
            if (($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getCveUsuario() != "") {
            $sql.="cveUsuario";
            if (($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getMensaje() != "") {
            $sql.="mensaje";
            if (($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getIpUsuario() != "") {
            $sql.="ipUsuario";
            if (($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getChatId() != "") {
            $sql.="chatId";
            if (($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getCveNumero() != "") {
            $sql.="cveNumero";
            if (($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getTipoChat() != "") {
            $sql.="tipoChat";
        }
        $sql.=",fechaRegistro";
        $sql.=") VALUES(";
        if ($chatmessagesDto->getIdChatMessage() != "") {
            $sql.="'" . $chatmessagesDto->getIdChatMessage() . "'";
            if (($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getNombreUsuario() != "") {
            $sql.="'" . $chatmessagesDto->getNombreUsuario() . "'";
            if (($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getCveUsuario() != "") {
            $sql.="'" . $chatmessagesDto->getCveUsuario() . "'";
            if (($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getMensaje() != "") {
            $sql.="'" . $chatmessagesDto->getMensaje() . "'";
            if (($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getIpUsuario() != "") {
            $sql.="'" . $chatmessagesDto->getIpUsuario() . "'";
            if (($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getFechaRegistro() != "") {
            if (($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getChatId() != "") {
            $sql.="'" . $chatmessagesDto->getChatId() . "'";
            if (($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getCveNumero() != "") {
            $sql.="'" . $chatmessagesDto->getCveNumero() . "'";
            if (($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getTipoChat() != "") {
            $sql.="'" . $chatmessagesDto->getTipoChat() . "'";
        }
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ChatmessagesDTO();
            $tmp->setidChatMessage($this->_proveedor->lastID());
            $tmp = $this->selectChatmessages($tmp, "", $this->_proveedor);
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

    public function updateChatmessages($chatmessagesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblchatmessages SET ";
        if ($chatmessagesDto->getIdChatMessage() != "") {
            $sql.="idChatMessage='" . $chatmessagesDto->getIdChatMessage() . "'";
            if (($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getNombreUsuario() != "") {
            $sql.="nombreUsuario='" . $chatmessagesDto->getNombreUsuario() . "'";
            if (($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $chatmessagesDto->getCveUsuario() . "'";
            if (($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getMensaje() != "") {
            $sql.="mensaje='" . $chatmessagesDto->getMensaje() . "'";
            if (($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getIpUsuario() != "") {
            $sql.="ipUsuario='" . $chatmessagesDto->getIpUsuario() . "'";
            if (($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $chatmessagesDto->getFechaRegistro() . "'";
            if (($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getChatId() != "") {
            $sql.="chatId='" . $chatmessagesDto->getChatId() . "'";
            if (($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getCveNumero() != "") {
            $sql.="cveNumero='" . $chatmessagesDto->getCveNumero() . "'";
            if (($chatmessagesDto->getTipoChat() != "")) {
                $sql.=",";
            }
        }
        if ($chatmessagesDto->getTipoChat() != "") {
            $sql.="tipoChat='" . $chatmessagesDto->getTipoChat() . "'";
        }
        $sql.=" WHERE idChatMessage='" . $chatmessagesDto->getIdChatMessage() . "'";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ChatmessagesDTO();
            $tmp->setidChatMessage($chatmessagesDto->getIdChatMessage());
            $tmp = $this->selectChatmessages($tmp, "", $this->_proveedor);
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

    public function deleteChatmessages($chatmessagesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblchatmessages  WHERE idChatMessage='" . $chatmessagesDto->getIdChatMessage() . "'";
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

    public function selectChatmessages($chatmessagesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idChatMessage,nombreUsuario,cveUsuario,mensaje,ipUsuario,fechaRegistro,chatId,cveNumero,tipoChat FROM tblchatmessages ";
        if (($chatmessagesDto->getIdChatMessage() != "") || ($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
            $sql.=" WHERE ";
        }
        if ($chatmessagesDto->getIdChatMessage() != "") {
            $sql.="idChatMessage='" . $chatmessagesDto->getIdChatMessage() . "'";
            if (($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getNombreUsuario() != "") {
            $sql.="nombreUsuario='" . $chatmessagesDto->getNombreUsuario() . "'";
            if (($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $chatmessagesDto->getCveUsuario() . "'";
            if (($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getMensaje() != "") {
            $sql.="mensaje='" . $chatmessagesDto->getMensaje() . "'";
            if (($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getIpUsuario() != "") {
            $sql.="ipUsuario='" . $chatmessagesDto->getIpUsuario() . "'";
            if (($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $chatmessagesDto->getFechaRegistro() . "'";
            if (($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getChatId() != "") {
            $sql.="chatId='" . $chatmessagesDto->getChatId() . "'";
            if (($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getCveNumero() != "") {
            $sql.="cveNumero='" . $chatmessagesDto->getCveNumero() . "'";
            if (($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getTipoChat() != "") {
            $sql.="tipoChat='" . $chatmessagesDto->getTipoChat() . "'";
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
                    $tmp[$contador] = new ChatmessagesDTO();
                    $tmp[$contador]->setIdChatMessage($row["idChatMessage"]);
                    $tmp[$contador]->setNombreUsuario($row["nombreUsuario"]);
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setMensaje($row["mensaje"]);
                    $tmp[$contador]->setIpUsuario($row["ipUsuario"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setChatId($row["chatId"]);
                    $tmp[$contador]->setCveNumero($row["cveNumero"]);
                    $tmp[$contador]->setTipoChat($row["tipoChat"]);
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

    public function selectDistintChatMessages($chatmessagesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT distinct cveUsuario,chatId,cveNumero,tipoChat FROM tblchatmessages ";
        if (($chatmessagesDto->getIdChatMessage() != "") || ($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
            $sql.=" WHERE ";
        }
        if ($chatmessagesDto->getIdChatMessage() != "") {
            $sql.="idChatMessage='" . $chatmessagesDto->getIdChatMessage() . "'";
            if (($chatmessagesDto->getNombreUsuario() != "") || ($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getNombreUsuario() != "") {
            $sql.="nombreUsuario='" . $chatmessagesDto->getNombreUsuario() . "'";
            if (($chatmessagesDto->getCveUsuario() != "") || ($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getCveUsuario() != "") {
            $sql.="cveUsuario='" . $chatmessagesDto->getCveUsuario() . "'";
            if (($chatmessagesDto->getMensaje() != "") || ($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getMensaje() != "") {
            $sql.="mensaje='" . $chatmessagesDto->getMensaje() . "'";
            if (($chatmessagesDto->getIpUsuario() != "") || ($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getIpUsuario() != "") {
            $sql.="ipUsuario='" . $chatmessagesDto->getIpUsuario() . "'";
            if (($chatmessagesDto->getFechaRegistro() != "") || ($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $chatmessagesDto->getFechaRegistro() . "'";
            if (($chatmessagesDto->getChatId() != "") || ($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getChatId() != "") {
            $sql.="chatId='" . $chatmessagesDto->getChatId() . "'";
            if (($chatmessagesDto->getCveNumero() != "") || ($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getCveNumero() != "") {
            $sql.="cveNumero='" . $chatmessagesDto->getCveNumero() . "'";
            if (($chatmessagesDto->getTipoChat() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatmessagesDto->getTipoChat() != "") {
            $sql.="tipoChat='" . $chatmessagesDto->getTipoChat() . "'";
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
                    $tmp[$contador] = new ChatmessagesDTO();
                    $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
                    $tmp[$contador]->setChatId($row["chatId"]);
                    $tmp[$contador]->setCveNumero($row["cveNumero"]);
                    $tmp[$contador]->setTipoChat($row["tipoChat"]);
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
    
    public function updateChatmessagesJuzgadores($juzgadorOriginal, $juzgadorNuevo, $idChat, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblchatmessages SET ";
        if ($juzgadorNuevo != "") {
            $sql.="cveUsuario='" . $juzgadorNuevo . "'";
        }

        $sql.=" WHERE cveUsuario='" . $juzgadorOriginal . "'";
        $sql.=" AND   chatId='" . $idChat . "'";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ChatmessagesDTO();
            $tmp->setChatId($idChat);
            $tmp->setCveUsuario($juzgadorNuevo);
            $tmp = $this->selectChatmessages($tmp, "", $this->_proveedor);
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