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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/chatcerrados/ChatCerradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ChatCerradosDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertChatCerrados($chatCerradosDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblchatcerrados(";

        if ($chatCerradosDto->getIdChatCerrado() != "") {
            $sql.="idChatCerrado";
            if (($chatCerradosDto->getChatId() != "")) {
                $sql.=",";
            }
        }
        if ($chatCerradosDto->getChatId() != "") {
            $sql.="chatId";
        }

        $sql.=",fechaCierre";
        $sql.=") VALUES(";
        if ($chatCerradosDto->getIdChatCerrado() != "") {
            $sql.="'" . $chatCerradosDto->getIdChatCerrado() . "'";
            if (($chatCerradosDto->getChatId() != "")) {
                $sql.=",";
            }
        }
        if ($chatCerradosDto->getChatId() != "") {
            $sql.="'" . $chatCerradosDto->getChatId() . "'";
        }
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ChatCerradosDTO();
            $tmp->getIdChatCerrado($this->_proveedor->lastID());
            $tmp = $this->selectChatCerrados($tmp, "", $this->_proveedor);
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

    public function selectChatCerrados($chatCerradosDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idChatCerrado, chatId, fechaCierre FROM tblchatcerrados ";

        if (($chatCerradosDto->getIdChatCerrado() != "") || ($chatCerradosDto->getChatId() != "") || ($chatCerradosDto->getFechaCierre() != "")) {
            $sql.=" WHERE ";
        }
        if ($chatCerradosDto->getIdChatCerrado() != "") {
            $sql.="idChatCerrado='" . $chatCerradosDto->getIdChatCerrado() . "'";
            if (($chatCerradosDto->getChatId() != "") || ($chatCerradosDto->getFechaCierre() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatCerradosDto->getChatId() != "") {
            $sql.="chatId='" . $chatCerradosDto->getChatId() . "'";
            if (($chatCerradosDto->getFechaCierre() != "")) {
                $sql.=" AND ";
            }
        }
        if ($chatCerradosDto->getFechaCierre() != "") {
            $sql.="fechaCierre='" . $chatCerradosDto->getFechaCierre() . "'";
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
                    $tmp[$contador] = new ChatCerradosDTO();
                    $tmp[$contador]->setIdChatCerrado($row["idChatCerrado"]);
                    $tmp[$contador]->setChatId($row["chatId"]);
                    $tmp[$contador]->setFechaCierre($row["fechaCierre"]);
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